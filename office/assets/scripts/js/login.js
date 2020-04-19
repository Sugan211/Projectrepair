$(document).ready(function() {
	$("#btn-login").click(function(e) {

	
		var username    = $('#username').val();
		var password = $('#password').val();
		var url      = $('#login_url').val();
		
		if(password && username && url){
			var param = {
				"username" : username
				,"password" : password
			};
			$.post(url, param, function(data) {
				if (data.success) {
					
			
					swal({
						title: "Login สำเร็จ",
						text: "Message!",
						type: "success"
					}, function() {
						window.location = data.redirect_link;
					}); 

				} else {
					swal({
						title: "รหัสผิดพลาด กรุณาลอคอินอีกครั้ง",
						text: "Message!",
						type: "error"
					
					}); 
				}
			}, 'json');
		} else {
			showMessageDialog(getWord("error"), 'error_please_input_all_field');
		}
	});
});
