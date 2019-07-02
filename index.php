<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<title>Login Page</title>
        
        <!-- Font Awesome CSS File -->
		<link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">
        
        <!-- theme css file --->
       <link rel="stylesheet" type="text/css" href="css/style.css">
    </head>
    <body>

        <!--- container start ---->
        <div class="container">
           <!-- Login Form Start -->
			<div class="login-form">
                <div class="user-avater">
				<i class="fa fa-user-circle" aria-hidden="true"></i>
                </div>
				
				
				
				<h3>Students Login</h3>
				
				<form  action="validation.php"   method="post">
 
				<!---div class="form-group">
				<label>Email<label>
				 <input type="text" name="email" class="form-control" required>
				 
				</div--->
				
				<div class="form-group">
				<label>Student ID<label>
				 <input type="text" name="sid" class="form-control"  required>
				</div>

				<div class="form-group">
				<label>password<label>
				 <input type="password" name="password" class="form-control" required>
				</div>
				<button type="submit" class="btn btn-primary"> LOGIN </button>
					
					
					
					
					
					
                
                    
                   
                    
                    <div class="form-group">
						<a href="signup.php"><button type="button" class="btn-primary2">SignUp</button></a>
					</div>
                    <h5> For Any query please Contact us or follow us </h5>
                    <div class="social">
                    <i class="fa fa-facebook" aria-hidden="true"></i>
                    
                    <i class="fa fa-youtube" aria-hidden="true"></i>
                    
                    <i class="fa fa-linkedin" aria-hidden="true"></i>
                    </div>
					</div>
				</form>

				
				
				
			</div>
			<!-- Login Form End -->
        </div>
       <!--- container end ---->
	   
    </body>
</html>