
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="wrap">
                <p id="login-title" class="form-title">
                    SIGN IN</p>
                <form id="login-form" class="login">
                <input type="text" placeholder="Username" name="username" required />
                <input type="password" placeholder="Password" name="password" required />
                <input type="submit" value="SIGN IN" class="btn btn-success btn-sm" />
                <div class="remember-forgot">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="checkbox">
                                <label>
                                    <input type="checkbox" />
                                    Remember Me
                                </label>
                            </div>
                        </div>
                        <div id="forgot-pass-content" class="col-md-6">
                            <a href="javascript:void(0)" class="forgot-pass">Forgot Password</a>
                        </div>
                    </div>
                </div>
                </form>
            </div>
        </div>
    </div>
</div>

<script>
$(document).ready(function() {
	$(document).on('submit', '#login-form', function(){
		event.preventDefault();
		var form = $('#login-form');
		var data_string = $(form).serialize();		
		jQuery.ajax({
			type: "POST",
			url: "<?php echo base_url(); ?>" + "login/login",
			dataType: 'json',
			data: data_string,
			success: function(json) {
				if(json) {
					console.log("Success " + json.name);
					if(json.success == true) {
						window.location.href = "<?php echo base_url(); ?>" + "home";
					}
					
				}
				else {
					console.log("Failure");
				}
			}
		});
	});
});	
  
</script>

