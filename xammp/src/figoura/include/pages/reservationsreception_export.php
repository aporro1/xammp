<?php
			$optionsArray = array( 'totals' => array( 'reservation_id' => array( 'totalsType' => '' ),
'firstname' => array( 'totalsType' => '' ),
'lastname' => array( 'totalsType' => '' ),
'displayName' => array( 'totalsType' => '' ),
'phone' => array( 'totalsType' => '' ),
'mobile' => array( 'totalsType' => '' ),
'zipcode' => array( 'totalsType' => '' ),
'locationId' => array( 'totalsType' => '' ),
'treatmentId' => array( 'totalsType' => '' ),
'rsvDate' => array( 'totalsType' => '' ),
'rsvTime' => array( 'totalsType' => '' ),
'rsvStatus' => array( 'totalsType' => '' ),
'createdAt' => array( 'totalsType' => '' ),
'updatedAt' => array( 'totalsType' => '' ),
'comments' => array( 'totalsType' => '' ),
'changesCount' => array( 'totalsType' => '' ) ),
'fields' => array( 'gridFields' => array( 'reservation_id',
'firstname',
'phone',
'mobile',
'zipcode',
'locationId',
'treatmentId',
'rsvDate',
'rsvTime',
'rsvStatus',
'createdAt',
'changesCount',
'updatedAt',
'comments',
'lastname' ),
'exportFields' => array( 'reservation_id',
'comments',
'firstname',
'lastname',
'phone',
'mobile',
'zipcode',
'locationId',
'treatmentId',
'rsvDate',
'rsvTime',
'rsvStatus',
'createdAt',
'updatedAt',
'changesCount' ),
'searchRequiredFields' => array(  ),
'searchPanelFields' => array(  ),
'fieldItems' => array( 'reservation_id' => array( 'export_field' ),
'firstname' => array( 'export_field1' ),
'phone' => array( 'export_field3' ),
'mobile' => array( 'export_field4' ),
'zipcode' => array( 'export_field5' ),
'locationId' => array( 'export_field6' ),
'treatmentId' => array( 'export_field7' ),
'rsvDate' => array( 'export_field8' ),
'rsvTime' => array( 'export_field9' ),
'rsvStatus' => array( 'export_field10' ),
'createdAt' => array( 'export_field11' ),
'changesCount' => array( 'export_field12' ),
'updatedAt' => array( 'export_field13' ),
'comments' => array( 'export_field15' ),
'lastname' => array( 'export_field2' ) ) ),
'pageLinks' => array( 'edit' => false,
'add' => false,
'view' => false,
'print' => false ),
'layoutHelper' => array( 'formItems' => array( 'formItems' => array( 'supertop' => array(  ),
'top' => array( 'export_header' ),
'grid' => array( 'export_field',
'export_field15',
'export_field1',
'export_field2',
'export_field3',
'export_field4',
'export_field5',
'export_field6',
'export_field7',
'export_field8',
'export_field9',
'export_field10',
'export_field11',
'export_field13',
'export_field12' ),
'footer' => array( 'export_export',
'export_cancel' ) ),
'formXtTags' => array( 'supertop' => array(  ) ),
'itemForms' => array( 'export_header' => 'top',
'export_field' => 'grid',
'export_field15' => 'grid',
'export_field1' => 'grid',
'export_field2' => 'grid',
'export_field3' => 'grid',
'export_field4' => 'grid',
'export_field5' => 'grid',
'export_field6' => 'grid',
'export_field7' => 'grid',
'export_field8' => 'grid',
'export_field9' => 'grid',
'export_field10' => 'grid',
'export_field11' => 'grid',
'export_field13' => 'grid',
'export_field12' => 'grid',
'export_export' => 'footer',
'export_cancel' => 'footer' ),
'itemLocations' => array(  ),
'itemVisiblity' => array(  ) ),
'itemsByType' => array( 'export_header' => array( 'export_header' ),
'export_export' => array( 'export_export' ),
'export_cancel' => array( 'export_cancel' ),
'export_field' => array( 'export_field',
'export_field1',
'export_field3',
'export_field4',
'export_field5',
'export_field6',
'export_field7',
'export_field8',
'export_field9',
'export_field10',
'export_field11',
'export_field12',
'export_field13',
'export_field15',
'export_field2' ) ),
'cellMaps' => array(  ) ),
'loginForm' => array( 'loginForm' => 3 ),
'page' => array( 'verticalBar' => false,
'labeledButtons' => array( 'update_records' => array(  ),
'print_pages' => array(  ),
'register_activate_message' => array(  ),
'details_found' => array(  ) ),
'hasCustomButtons' => false,
'customButtons' => array(  ),
'hasNotifications' => false,
'menus' => array(  ),
'calcTotalsFor' => 1 ),
'events' => array( 'maps' => array(  ),
'mapsData' => array(  ),
'buttons' => array(  ) ),
'export' => array( 'format' => 2,
'selectFields' => false,
'delimiter' => ',',
'selectDelimiter' => false,
'exportFileTypes' => array( 'excel' => true,
'word' => true,
'csv' => true,
'xml' => false ) ) );
			$pageArray = array( 'id' => 'export',
'type' => 'export',
'layoutId' => 'first',
'disabled' => 0,
'default' => 0,
'forms' => array( 'supertop' => array( 'modelId' => 'panel-top',
'grid' => array( array( 'cells' => array( array( 'cell' => 'c1' ) ),
'section' => '' ) ),
'cells' => array( 'c1' => array( 'model' => 'c1',
'items' => array(  ) ) ),
'deferredItems' => array(  ),
'recsPerRow' => 1 ),
'top' => array( 'modelId' => 'export-header',
'grid' => array( array( 'cells' => array( array( 'cell' => 'c1' ) ),
'section' => '' ) ),
'cells' => array( 'c1' => array( 'model' => 'c1',
'items' => array( 'export_header' ) ) ),
'deferredItems' => array(  ),
'recsPerRow' => 1 ),
'grid' => array( 'modelId' => 'export-grid',
'grid' => array( array( 'cells' => array( array( 'cell' => 'c1' ) ),
'section' => '' ) ),
'cells' => array( 'c1' => array( 'model' => 'c1',
'items' => array( 'export_field',
'export_field15',
'export_field1',
'export_field2',
'export_field3',
'export_field4',
'export_field5',
'export_field6',
'export_field7',
'export_field8',
'export_field9',
'export_field10',
'export_field11',
'export_field13',
'export_field12' ) ) ),
'deferredItems' => array(  ),
'recsPerRow' => 1 ),
'footer' => array( 'modelId' => 'export-footer',
'grid' => array( array( 'cells' => array( array( 'cell' => 'c1' ),
array( 'cell' => 'c2' ) ),
'section' => '' ) ),
'cells' => array( 'c1' => array( 'model' => 'c1',
'items' => array(  ) ),
'c2' => array( 'model' => 'c2',
'items' => array( 'export_export',
'export_cancel' ) ) ),
'deferredItems' => array(  ),
'recsPerRow' => 1 ) ),
'items' => array( 'export_header' => array( 'type' => 'export_header' ),
'export_export' => array( 'type' => 'export_export' ),
'export_cancel' => array( 'type' => 'export_cancel' ),
'export_field' => array( 'field' => 'reservation_id',
'type' => 'export_field' ),
'export_field1' => array( 'field' => 'firstname',
'type' => 'export_field' ),
'export_field3' => array( 'field' => 'phone',
'type' => 'export_field' ),
'export_field4' => array( 'field' => 'mobile',
'type' => 'export_field' ),
'export_field5' => array( 'field' => 'zipcode',
'type' => 'export_field' ),
'export_field6' => array( 'field' => 'locationId',
'type' => 'export_field' ),
'export_field7' => array( 'field' => 'treatmentId',
'type' => 'export_field' ),
'export_field8' => array( 'field' => 'rsvDate',
'type' => 'export_field' ),
'export_field9' => array( 'field' => 'rsvTime',
'type' => 'export_field' ),
'export_field10' => array( 'field' => 'rsvStatus',
'type' => 'export_field' ),
'export_field11' => array( 'field' => 'createdAt',
'type' => 'export_field' ),
'export_field12' => array( 'field' => 'changesCount',
'type' => 'export_field' ),
'export_field13' => array( 'field' => 'updatedAt',
'type' => 'export_field' ),
'export_field15' => array( 'field' => 'comments',
'type' => 'export_field' ),
'export_field2' => array( 'field' => 'lastname',
'type' => 'export_field' ) ),
'dbProps' => array(  ),
'version' => 14,
'imageItem' => array( 'type' => 'page_image' ),
'imageBgColor' => '#f2f2f2',
'controlsBgColor' => 'white',
'imagePosition' => 'right',
'listTotals' => 1,
'exportFormat' => 2,
'exportDelimiter' => ',',
'exportSelectDelimiter' => false,
'exportSelectFields' => false );
		?>