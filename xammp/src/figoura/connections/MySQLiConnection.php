<?php
class MySQLiConnection extends Connection
{
	protected $host;

	protected $useSSL;

	protected $user;

	protected $pwd;

	protected $port;

	protected $sys_dbname;

	protected $mysqlVersion;

	protected $subqueriesSupported = true;

	function __construct( $params )
	{
		parent::__construct( $params );
	}

	/**
	 * Set db connection's properties
	 * @param Array params
	 */
	protected function assignConnectionParams( $params )
	{
		parent::assignConnectionParams( $params );

		$this->host = $params["connInfo"][0];  //strConnectInfo1
		if (substr($this->host, 0, 4) === "ssl/") {
			$this->host = substr($this->host, 4);
			$this->useSSL = true;
		} else {
			$this->useSSL = false;
		}
		$this->user = $params["connInfo"][1];  //strConnectInfo2
		$this->pwd = $params["connInfo"][2];   //strConnectInfo3
		$this->port = $params["connInfo"][3]; //strConnectInfo4
		$this->sys_dbname = $params["connInfo"][4]; //strConnectInfo5
	}

	/**
	 *	@return Array
	 */
	protected function getDbFunctionsExtraParams()
	{
		$extraParams = parent::getDbFunctionsExtraParams();
		$extraParams["conn"] = $this->conn;

		return $extraParams;
	}

	/**
	 * Open a connection to db
	 */
	public function connect()
	{
		global $cMySQLNames;

		if( !trim( $this->port ) )
			$this->port = 3306;

		$hosts = array();
/*
		//	no need to do this anymore	
		//	fix IPv6 slow connection issue
		if( $this->host == "localhost" )
		{
			if( @$_SESSION["myqsladdress"] )
				$hosts[] = @$_SESSION["myqsladdress"];
			else
				$hosts[] = "127.0.0.1";
		}
*/		
		$hosts[] = $this->host;

		$flags = 0;
		if ($this->useSSL) {
			$flags = MYSQLI_CLIENT_SSL;
		}

		foreach ($hosts as $h) {
			$this->conn = mysqli_init();
			if (!$this->conn)
				break;

			try {
				if (!@mysqli_real_connect($this->conn, $h, $this->user, $this->pwd, "", $this->port, "", $flags)) {
					$this->conn = null;
				}
			} catch( Exception $e ) {
				$this->conn = null;
			}

			if ($this->conn) {
				if ($this->host == "localhost")
					$_SESSION["myqsladdress"] = $h;
				break;
			}
		}

		if (!$this->conn)
		{
			unset( $_SESSION["myqsladdress"] );
			$this->triggerError( mysqli_connect_error() );
			return null;
		}

		if( !mysqli_select_db($this->conn, $this->sys_dbname) )
			$this->triggerError( mysqli_error($this->conn) );

		if( $cMySQLNames != "" )
			@mysqli_query($this->conn, "set names ".$cMySQLNames);

		$this->mysqlVersion = "4";
		$res = @mysqli_query($this->conn, "SHOW VARIABLES LIKE 'version'");
		if( $row = @mysqli_fetch_array($res, MYSQLI_ASSOC) )
			$this->mysqlVersion = $row["Value"];

		if( preg_match("/^[0-4]\./", $this->mysqlVersion, $matches) && strpos($this->mysqlVersion, "MariaDB") === FALSE ) //#10818 2
			$this->subqueriesSupported = false;

		$res = @mysqli_query($this->conn, "SELECT @@SESSION.sql_mode as mode");
		if( $row = @mysqli_fetch_array($res, MYSQLI_ASSOC) ){
			$sql_mode = $row["mode"];
			$arr = array();
			$arr = explode(",",$sql_mode);
			$sql_mode = "";
			for( $i=0; $i<count($arr); $i++){
				if($arr[$i]!="STRICT_ALL_TABLES" && $arr[$i]!="STRICT_TRANS_TABLES"){
					if( $sql_mode )
						$sql_mode.=",";
					$sql_mode.=$arr[$i];
				}
			}
			if($sql_mode)
				@mysqli_query($this->conn, "set SESSION sql_mode='".$sql_mode."'");
		}

		return $this->conn;
	}

	/**
	 * Close the db connection
	 */
	public function close()
	{
		return mysqli_close( $this->conn );
	}

	/**
	 * Send an SQL query
	 * @param String sql
	 * @return Mixed
	 */
	public function query( $sql )
	{
		$this->clearResultBuffer();
		$this->debugInfo($sql);

		try {
			$ret = @mysqli_query($this->conn, $sql);
		} catch ( Exception $e ) {
			$this->triggerError( mysqli_error($this->conn) );
			return false;
		}
		if( !$ret )
		{
			$this->triggerError( mysqli_error($this->conn) );
			return FALSE;
		}

		return new QueryResult( $this, $ret );
	}

	/**
	 * Execute an SQL query
	 * @param String sql
	 */
	public function exec( $sql )
	{
		$this->clearResultBuffer();
		try {
			$qResult = $this->query( $sql );
		} catch( Exception $e ) {
			return false;
		}
		if( $qResult )
			return $qResult->getQueryHandle();

		return FALSE;
	}

	/**
	 * Execute an SQL query with blob fields processing
	 * @param String sql
	 * @param Array blobs
	 * @param Array blobTypes
	 * @return Boolean
	 */
	public function execWithBlobProcessing( $sql, $blobs, $blobTypes = array(), $autoincField = null )
	{
		$this->debugInfo($sql);
		try {
			return mysqli_query($this->conn, $sql);
		} catch( Exception $e ) {
			return false;
		}
	}

	/**
	 * Get a description of the last error
	 * @return String
	 */
	public function lastError()
	{
		return @mysqli_error( $this->conn );
	}

	/**
	 * Get the auto generated id used in the last query
	 * @return Number
	 */
	public function getInsertedId($key = null, $table = null )
	{
		return @mysqli_insert_id( $this->conn );
	}

	/**
	 * Fetch a result row as an associative array
	 * @param Mixed qHanle		The query handle
	 * @return Array
	 */
	public function fetch_array( $qHandle )
	{
		return @mysqli_fetch_array($qHandle, MYSQLI_ASSOC);
	}

	/**
	 * Fetch a result row as a numeric array
	 * @param Mixed qHanle		The query handle
	 * @return Array
	 */
	public function fetch_numarray( $qHandle )
	{
		return @mysqli_fetch_array($qHandle, MYSQLI_NUM);
	}

	/**
	 * Free resources associated with a query result set
	 * @param Mixed qHanle		The query handle
	 */
	public function closeQuery( $qHandle )
	{
		@mysqli_free_result($qHandle);
	}

	/**
	 * Get number of fields in a result
	 * @param Mixed qHanle		The query handle
	 * @return Number
	 */
	public function num_fields( $qHandle )
	{
		return @mysqli_field_count($this->conn);
	}

	/**
	 * Get the name of the specified field in a result
	 * @param Mixed qHanle		The query handle
	 * @param Number offset
	 * @return String
	 */
	public function field_name( $qHandle, $offset )
	{
		@mysqli_field_seek($qHandle, $offset);
		$field = @mysqli_fetch_field($qHandle);
		return $field ? $field->name : "";
	}

	/**
	 * @param Mixed qHandle
	 * @param Number n
	 */
	public function seekRecord($qHandle, $n)
	{
		mysqli_data_seek($qHandle, $n );
	}

	/**
	 * Check if the MYSQL version is lower than 5.0
	 * @return Boolean
	 */
	public function checkDBSubqueriesSupport()
	{
		return $this->subqueriesSupported;
	}


	/**
	 * Check if SQL queries containing joined subquery are optimized
	 * @return Boolean
	 */
	public function checkIfJoinSubqueriesOptimized()
	{
		// if MySQL of older than 5.6 version is used
		if( preg_match("/^(?:(?:[0-4]\.)|(?:5\.[0-5]))/", $this->mysqlVersion, $matches) )
			return false;

		return true;
	}

	public function clearResultBuffer() {
		while( mysqli_more_results( $this->conn ) ) {
			mysqli_next_result( $this->conn );
		}
	}

	/**
	 *  @return String
	 */
	public function getVersion() {
		return $this->mysqlVersion;
	}

}
?>