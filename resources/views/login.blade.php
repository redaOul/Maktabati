{{-- <!DOCTYPE html>
<html lang="en" ng-app="loginModule">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Maktabati</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="/css/loginCss.css">
</head>
<body ng-controller="loginCtrl">
    <!-- header section starts  -->
    <header class="header">
            <a href="#" class="logo"> <i class="fas fa-book"></i> Maktabati</a>
    </header>

    <div>
        <div>email</div>
        <input type="text" ng-model="userEmail">
        <div>mot de passe</div>
        <input type="text" ng-model="userMDP">
        <button ng-click="checkLog()">Connexion</button>
        <div id="error">[{logInReply}]</div>
    </div>

    
    <script src="/js/angular/angular.min.js"></script>
    <script src="/js/loginScript.js"></script>

</body>
</html> --}}


<!DOCTYPE html>
<html lang="en" ng-app="loginModule">
<head>
	<title>Maktabati</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="/login/images/icons/favicon.png"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="/login/vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="/login/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="/login/fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="/login/vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="/login/vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="/login/vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="/login/vendor/select2/select2.min.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="/login/vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="/login/css/util.css">
	<link rel="stylesheet" type="text/css" href="/login/css/main.css">
<!--===============================================================================================-->
</head>
<body ng-controller="loginCtrl" style="background-color: #27ae60">
	
	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
				<form class="login100-form validate-form">
					<span class="login100-form-title p-b-43">
						Bienvenue à Maktabati
					</span>
					
					
					<div class="wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
						<input class="input100" type="text" name="email" ng-model="userEmail">
						<span class="focus-input100"></span>
						<span class="label-input100">Email</span>
					</div>
					
					
					<div class="wrap-input100 validate-input" data-validate="Password is required">
						<input class="input100" type="password" name="pass" ng-model="userMDP">
						<span class="focus-input100"></span>
						<span class="label-input100">Mot de passe</span>
					</div>

					{{-- <div class="flex-sb-m w-full p-t-3 p-b-32">
						<div class="contact100-form-checkbox">
							<input class="input-checkbox100" id="ckb1" type="checkbox" name="remember-me">
							<label class="label-checkbox100" for="ckb1">
								Enregistrer mon mot de passe
							</label>
						</div>

						<div>
							<a href="#" class="txt1">
								Mot de passe oublié ?
							</a>
						</div>
					</div> --}}
			

					<div class="container-login100-form-btn">
						<button class="login100-form-btn" ng-click="checkLog()">
							Se connecter 
						</button>
					</div>
					
					<div class="text-center p-t-46 p-b-20">
						<span class="txt2">
							[{logInReply}]
						</span>
					</div>

					
				</form>

				<div class="login100-more" style="background-image: url('/login/images/bg-01.jpg');">
				</div>
			</div>
		</div>
	</div>
	
	

	
	
<!--===============================================================================================-->
	<script src="/login/vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="/login/vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="/login/vendor/bootstrap/js/popper.js"></script>
	<script src="/login/vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="/login/vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="/login/vendor/daterangepicker/moment.min.js"></script>
	<script src="/login/vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="/login/vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
    <script src="/js/angular/angular.min.js"></script>
<!--===============================================================================================-->
    <script src="/login/js/main.js"></script>
    <script src="/js/loginScript.js"></script>

</body>
</html>