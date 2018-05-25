function get_social_counts() {
	var thisUrl = window.location.protocol + "//" + window.location.host + window.location.pathname;
	$.ajax({
		type: "GET",
		url: 'http://mdbootstrap.com/wp-content/themes/mdbootstrap/inc/get_social_counts.php?thisurl='+thisUrl,
		dataType: "json",
		success: function (data){

    	var div = document.getElementById("dom-target-fb");
    	var fbBase = div.textContent;
    	var div = document.getElementById("dom-target-tw");
    	var twBase = div.textContent;
    	var div = document.getElementById("dom-target-gp");
    	var gpBase = div.textContent;



var fbShare = (1 * fbBase.valueOf() + data.facebook);
var twShare = (1 * twBase.valueOf() + data.twitter);
var gpShare = (1 * gpBase.valueOf() + data.gplus);


			$('#twitter-span').html(twShare);
			$('#facebook-span').html(fbShare);
			$('#gplus-span').html(gpShare);


			

			$('#twitter-span-xs').html(twShare);
			$('#facebook-span-xs').html(fbShare);
			$('#gplus-span-xs').html(gpShare);

			
		}
	});
}