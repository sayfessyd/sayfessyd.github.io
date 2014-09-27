var customers;
var orders;
var stock;

function supported()
{
	return ( "indexedDB" in window );
}

document.addEventListener("DOMContentLoaded", function(){

	if ( !supported ) 
	{
		alert('the application will not work correctly (indexedDB unsupported), please upgrade your browser');
		return;
	}

	var firstRequest = indexedDB.open('customers', 1);

	firstRequest.onupgradeneeded = function(e)
	{
		console.log("upgraded");
	};
	firstRequest.onsuccess = function(e)
	{
		console.log("success");
		customers = e.target.result;
	};
	firstRequest.onerror = function(e) {
        console.log("Error");
        console.dir(e);
    };

	var secondRequest = indexedDB.open('orders', 1);

	secondRequest.onupgradeneeded = function(e)
	{
		console.log("upgraded");
	};
	secondRequest.onsuccess = function(e)
	{
		console.log("success");
		orders = e.target.result;
	};
	secondRequest.onerror = function(e) {
        console.log("Error");
        console.dir(e);
    };

	var thirdRequest = indexedDB.open('stock', 1);

	thirdRequest.onupgradeneeded = function(e)
	{
		console.log("upgraded");
	};
	thirdRequest.onsuccess = function(e)
	{
		console.log("success");
		stock = e.target.result;
	};
	thirdRequest.onerror = function(e) {
        console.log("Error");
        console.dir(e);
    };

}, false);
