<?php  
require 'config/config.php';
require 'includes/form_handlers/register_handler.php';
require 'includes/form_handlers/login_handler.php';
?>

<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
    <link rel="stylesheet" href="login.css">
    <title>site name/Register Form</title>
</head>
<body>
<?php  
	if(isset($_POST['register_button'])) {
		echo '
		<script>

		$(document).ready(function() {
			$("#logreg-forms .form-signin").toggle();
			$("#logreg-forms .form-signup").toggle();
		});

		</script>

		';
	}

	?>
    <div id="logreg-forms">
        <form action="login.php" class="form-signin" method="POST">
            <h1 class="h3 mb-3 font-weight-normal" style="text-align: center"> Sign in</h1>

            <div class="social-login">
                <button class="btn google-btn social-btn" type="button" style="width:100%"><span><i class="fab fa-google-plus-g"></i> Sign in with Google+</span> </button>
            </div>

            <p style="text-align:center"> OR </p>
               

             <input type="email" name="log_email" placeholder="Email Address" id="inputEmail" class="form-control" value="<?php 
					if(isset($_SESSION['log_email'])) {
						echo $_SESSION['log_email'];
					} 
                    ?>" required>
               <br>   

            <input type="password" name="log_password" id="inputPassword"  class="form-control" placeholder="Password">
					<br>
					<?php if(in_array("Email or password was incorrect<br>", $error_array)) echo  "Email or password was incorrect<br>"; ?>
                    
					<button class="btn btn-success btn-block" type="submit" name="login_button" value="Login"><i class="fas fa-sign-in-alt"></i> Sign in</button>
					<br>
            <br>

            <a href="#" id="forgot_pswd">Forgot password?</a>
            <hr>

            <!-- <p>Don't have an account!</p>  -->
            <button class="btn btn-primary btn-block" type="button" id="btn-signup"><i class="fas fa-user-plus"></i> Sign up New Account</button>
            </form>

            <form action="/reset/password/" class="form-reset">
                <input type="email" id="resetEmail" class="form-control" placeholder="Email address" required="" autofocus="">
                <button class="btn btn-primary btn-block" type="submit">Reset Password</button>
                <a href="#" id="cancel_reset"><i class="fas fa-angle-left"></i> Back</a>
            </form>
            
            
              <form action="login.php" class="form-signup" method="POST">
                <h4 style="text-align: center;">Registration</h4>

                <div class="form-group input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text"> <i class="fa fa-user"></i> </span>
                     </div>

                    <input type="text" name="reg_name" placeholder="Full Name" class="form-control" placeholder="Full name" value="<?php 
					if(isset($_SESSION['reg_name'])) {
						echo $_SESSION['reg_name'];
                    } 
					?>" required>
					<br>
                    <?php if(in_array("Your first name must be between 2 and 25 characters<br>", $error_array)) echo "Your first name must be between 2 and 25 characters<br>"; 
                    ?>
                </div><!-- form-group// -->
                	
                <div class="form-group input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text"> <i class="fa fa-envelope"></i> </span>
                     </div>
                    <input type="email" name="reg_email" placeholder="Email" class="form-control"  value="<?php 
					if(isset($_SESSION['reg_email'])) {
						echo $_SESSION['reg_email'];
					} 
					?>" required>
					<br>
                </div> <!-- form-group// -->
                
                <div class="form-group input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text"> <i class="fa fa-envelope"></i> </span>
                     </div>
                    <input type="email" name="reg_email2" class="form-control" placeholder="Confirm Email" value="<?php 
					if(isset($_SESSION['reg_email2'])) {
						echo $_SESSION['reg_email2'];
					} 
					?>" required>
                </div> <!-- form-group// -->
                 
                <?php if(in_array("Email already in use<br>", $error_array)) echo "Email already in use<br>"; 
					else if(in_array("Invalid email format<br>", $error_array)) echo "Invalid email format<br>";
                    else if(in_array("Emails don't match<br>", $error_array)) echo "Emails don't match<br>"; ?>
                    

                    <div class="form-group input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text"> <i class="fa fa-user"></i> </span>
                    </div>
                    <select class="custom-select" >
                        <option selected="" value="0">Male</option>
                        <option value="1">Female</option>
                    </select>

                </div><!--form-group//-->
                <div class="form-group input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text"> <i class="fa fa-user"></i> </span>
                    </div>
                    <select class="custom-select" >
                        <option selected="" value="0">Mentor</option>
                        <option value="1">Mentee</option>
                    </select>
                </div><!--form-group//-->
                    
                
                <div class="form-group input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text"> <i class="fa fa-lock"></i> </span>
                    </div>
                    <input class="form-control" name="reg_password" placeholder="Create password" type="password">

                </div> <!-- form-group// -->


                <div class="form-group input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text"> <i class="fa fa-lock"></i> </span>
                    </div>
                    <input class="form-control" name="reg_password2" placeholder="Repeat password" type="password">
                </div> <!-- form-group// -->   
                
                <?php if(in_array("Your passwords do not match<br>", $error_array)) echo "Your passwords do not match<br>"; 
					else if(in_array("Your password can only contain english characters or numbers<br>", $error_array)) echo "Your password can only contain english characters or numbers<br>";
                    else if(in_array("Your password must be betwen 5 and 30 characters<br>", $error_array)) echo "Your password must be betwen 5 and 30 characters<br>"; ?>
                    

                <div class="form-group">
            </div>
                <button class="btn btn-primary btn-block"  name="register_button" value="Register" type="submit"><i class="fas fa-user-plus"></i> Sign Up</button>
                <?php if(in_array("<span style='color: #14C800;'>You're all set! Go ahead and login!</span><br>", $error_array)) echo '<script>

$(document).ready(function() {
    $("#logreg-forms .form-signin").toggle();
    $("#logreg-forms .form-signup").toggle();
});

</script>'; ?>
                <a href="#" id="cancel_signup"><i class="fas fa-angle-left"></i> Sign in</a>
            </form>
            <br>   
    </div>
    <p style="text-align:center">
        <a href="http://bit.ly/2RjWFMfunction toggleResetPswd(e){
    e.preventDefault();
    $('#logreg-forms .form-signin').toggle() // display:block or none
    $('#logreg-forms .form-reset').toggle() // display:block or none
}

function toggleSignUp(e){
    e.preventDefault();
    $('#logreg-forms .form-signin').toggle(); // display:block or none
    $('#logreg-forms .form-signup').toggle(); // display:block or none
}

$(()=>{
    // Login Register Form
    $('#logreg-forms #forgot_pswd').click(toggleResetPswd);
    $('#logreg-forms #cancel_reset').click(toggleResetPswd);
    $('#logreg-forms #btn-signup').click(toggleSignUp);
    $('#logreg-forms #cancel_signup').click(toggleSignUp);
})g" target="_blank" style="color:white">By TEAM ZABARDAST</a>
    </p>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script src="login.js"></script>
</body>
</html>
