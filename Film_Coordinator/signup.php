<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
	<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

<head>

	<style type="text/css">
		.main-content{
	width: 50%;
	border-radius: 20px;
	box-shadow: 0 5px 5px rgba(0,0,0,.4);
	margin: 5em auto;
	display: flex;
}
.company__info{
	background-color: #00CA79;
	border-top-left-radius: 20px;
	border-bottom-left-radius: 20px;
	display: flex;
	flex-direction: column;
	justify-content: center;
	color: #fff;
}
.fa-android{
	font-size:3em;
}
@media screen and (max-width: 640px) {
	.main-content{width: 90%;}
	.company__info{
		display: none;
	}
	.login_form{
		border-top-left-radius:20px;
		border-bottom-left-radius:20px;
	}
}
@media screen and (min-width: 642px) and (max-width:800px){
	.main-content{width: 70%;}
}
.row > h2{
	color:#00CA79;
}
.login_form{
	background-color: #fff;
	border-top-right-radius:20px;
	border-bottom-right-radius:20px;
	border-top:1px solid #ccc;
	border-right:1px solid #ccc;
}
form{
	padding: 0 2em;
}
.form__input{
	width: 100%;
	border:0px solid transparent;
	border-radius: 0;
	border-bottom: 1px solid #aaa;
	padding: 1em .5em .5em;
	padding-left: 2em;
	outline:none;
	margin:1.5em auto;
	transition: all .5s ease;
}
.form__input:focus{
	border-bottom-color: #008080;
	box-shadow: 0 0 5px rgba(0,80,80,.4); 
	border-radius: 4px;
}
.btn{
	transition: all .5s ease;
	width: 70%;
	border-radius: 30px;
	color:#00CA79;
	font-weight: 600;
	background-color: #fff;
	border: 1px solid #00CA79;
	margin-top: 1.5em;
	margin-bottom: 1em;
}
.btn:hover, .btn:focus{
	background-color: #00CA79;
	color:#fff;
}
	</style>
</head>
<body>
	<br>
<br>
<br>
	<!-- Main Content -->
	<div class="container-fluid">
		<div class="row main-content bg-success text-center">
			<div class="col-md-4 text-center company__info">
				<span class="company__logo"><h2><span class="fa fa-android"></span></h2></span>
				<h4 class="company_title"><a href="login.php">Login</a></h4>
			</div>
			<div class="col-md-8 col-xs-12 col-sm-12 login_form ">
				<div class="container-fluid">
					<div class="row">
						<h2>Registration</h2>
					</div>
					<div class="row">
						<form  action="signup_action.php" method="post" class="form-group">
							<div class="row">
								<input type="text" required name="fullname" id="fullname" class="form__input" placeholder="Enter your name">
							</div>
							<div class="row">
								<input type="text" required name="email" id="email" class="form__input" placeholder="Enter You Email">
							</div>
							<div class="row">
								<input type="password" required name="password" id="password" class="form__input" placeholder="Enter Yor password">
							</div>

							<!-- <div class="row">
								 <span class="fa fa-lock"></span>
								<input type="password" name="confirm_password" id="confirm_password" class="form__input" placeholder="Enter confirm password">
							</div> -->
							<div class="row">
								<input type="text" required name="phone" id="phone" class="form__input" placeholder="Enter Phone Number">
							</div>
							<div class="row">
								<input type="text" required name="company" id="company" class="form__input" placeholder="Company/Organization(if applicable)">
							</div>
							<div class="row">
								<select type="text" required name="role" id="role" class="form__input" placeholder="Role/Postion">
									<option value="">----</option>
                                                <option value="fmaker">Filmmaker</option>
                                                <option value="fdirector">Film Director</option>
                                                <option value="fproducer">Film Producer</option>
                                                <option value="indefmaker">Independent Filmmaker</option>
                                                <option value="fcreator">Film Creator</option>
                                                <option value="swriter">Screen Writer</option>
                                                <option value="ccreator">Content Creator</option>
                                                <option value="fproduction">Film Production</option>
                                                <option value="crep">Company Representative</option>
                                                <option value="fdist">Film Distributor</option>
                                                <option value="fagent">Film Agent</option>
								</select>
							</div>
							<div class="row">
								<input type="text" name="experience" id="experience" class="form__input" required placeholder="Experience in film Industry">
							</div>
							<div class="row">
								<input type="text" name="skill" id="skill" class="form__input" required placeholder="Skills and Expertise">
							</div>
							
							<div class="row">
								<input type="text" name="references" id="references" class="form__input" required placeholder="References or Recommendations">
							</div>
							<div class="row">
								<input type="text" name="reference_contact" id="reference_contact" required class="form__input" placeholder="Reference_Contact">
							</div>
							<!-- <div class="row">
								<label>Terms and Conditions Agreement</label>
								<input type="checkbox" name="fullname" id="fullname" class="form__input" placeholder="Fullname">
							</div> -->
							<div class="row">
								<input type="checkbox" required name="agreement" id="agreement" value="yes" class="">
								<label for="remember_me">Terms and Conditions Agreement </label>
							</div>
							<div class="row">
								<input type="submit" value="Submit" name="submit" class="btn">
							</div>
						</form>
					</div>
					<!-- <div class="row">
						<p>Don't have an account? <a href="#">Register Here</a></p>
					</div> -->
				</div>
			</div>
		</div>
	</div>
	<!-- Footer -->
	
</body>
</html>
