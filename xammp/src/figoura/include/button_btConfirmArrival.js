Runner.buttonEvents["btConfirmArrival"] = function( pageObj, proxy, pageid ) {
	//register a new button
	pageObj.buttonNames[ pageObj.buttonNames.length ] = 'btConfirmArrival';
	
	if ( !pageObj.buttonEventBefore['btConfirmArrival'] ) {
		pageObj.buttonEventBefore['btConfirmArrival'] = function( params, ctrl, pageObj, proxy, pageid, rowData, row, submit ) {		
			var ajax = ctrl;
 // Put your code here.
 // params["txt"] = "Hello";
 // ajax.setMessage("Sending request to server...");
 // Uncomment the following line to prevent execution of "Server" and "Client After" events.
 // return false;
		}
	}
	
	if ( !pageObj.buttonEventAfter['btConfirmArrival'] ) {
		pageObj.buttonEventAfter['btConfirmArrival'] = function( result, ctrl, pageObj, proxy, pageid, rowData, row, params ) {
			var ajax = ctrl;
// Put your code here.
// var message = result["txt"] + " !!!";
// ajax.setMessage(message);
window.location.reload();

		}
	}
	
	$('a[id="btConfirmArrival"]').each( function() {
		if ( $(this).closest('.gridRowAdd').length ) {
			return;
		}
		
		this.id = "btConfirmArrival" + "_" + Runner.genId();
		
		// create object
		var button_btConfirmArrival = new Runner.form.Button({
			id: this.id ,
			btnName: "btConfirmArrival"
		});
		
		// init
		button_btConfirmArrival.init( {args: [ pageObj, proxy, pageid ]} );
	});
};

