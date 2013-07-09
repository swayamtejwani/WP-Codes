function callajax(){
var email = jQuery('#keyword').val();
email = parseInt(email);
email = email +10;

var data = {
  		action: 'test_response',
            post_var: email
		};
		jQuery.post(the_ajax_url.ajaxurl, data, function(response) {
			alert(response);
	 	});
	 	return false;
}
