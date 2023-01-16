<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<title>Bino Tires - Workorder Management System</title>
	<link rel="stylesheet" href="<?php echo base_url() ?>assets/css/login.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js"></script>
	<style>
		* {
			box-sizing: border-box;
		}

		body {
			background: #f6f5f7;
			display: flex;
			justify-content: center;
			align-items: center;
			flex-direction: column;
			font-family: 'Montserrat', sans-serif;
			height: 100vh;
			margin: -20px 0 50px;
		}

		h1 {
			font-weight: bold;
			margin: 1rem;
		}

		p {
			font-size: 14px;
			font-weight: 100;
			line-height: 20px;
			letter-spacing: 0.5px;
			margin: 20px 0 30px;
		}

		button {
			border-radius: 20px;
			border: 1px solid #003087;
			background-color: #003087;
			color: #FFFFFF;
			font-size: 12px;
			font-weight: bold;
			padding: 12px 45px;
			letter-spacing: 1px;
			text-transform: uppercase;
			transition: transform 80ms ease-in;
			cursor: pointer;
		}

		button:active {
			transform: scale(0.95);
		}

		button:focus {
			outline: none;
		}

		button.ghost {
			background-color: transparent;
			border-color: #FFFFFF;
		}

		form {
			background-color: #FFFFFF;
			display: flex;
			align-items: center;
			justify-content: center;
			flex-direction: column;

			height: 100%;
			text-align: center;
		}

		.form__input-group {
			width: 100%;
			padding-left: 30px;
			padding-right: 30px;
		}

		input {
			background-color: #eee;
			border: none;
			padding: 12px 15px;
			margin: 8px 0;
			width: 100%;
			border-radius: 10px;
		}

		.container {
			background-color: #fff;
			border-radius: 10px;
			box-shadow: 0 14px 28px rgba(0, 0, 0, 0.25),
				0 10px 10px rgba(0, 0, 0, 0.22);
			position: relative;
			overflow: hidden;
			width: 768px;
			max-width: 100%;
			min-height: 480px;
		}

		.form-container {
			position: absolute;
			top: 0;
			height: 100%;
			transition: all 0.6s ease-in-out;
		}

		.sign-in-container {
			left: 0;
			width: 50%;
			z-index: 2;
		}

		.container.right-panel-active .sign-in-container {
			transform: translateX(100%);
		}

		.sign-up-container {
			left: 0;
			width: 50%;
			opacity: 0;
			z-index: 1;
		}

		.container.right-panel-active .sign-up-container {
			transform: translateX(100%);
			opacity: 1;
			z-index: 5;
			animation: show 0.6s;
		}


		.overlay-container {
			position: absolute;
			top: 0;
			left: 50%;
			width: 50%;
			height: 100%;
			overflow: hidden;
			transition: transform 0.6s ease-in-out;
			z-index: 100;
		}

		.container.right-panel-active .overlay-container {
			transform: translateX(-100%);
		}

		.overlay {
			background: #003087;
			background: rgb(3, 39, 105);
			background: -webkit-linear-gradient(135deg, rgba(3, 39, 105, 1) 35%, rgba(2, 61, 170, 1) 91%);
			background: rgb(3, 39, 105);
			background: linear-gradient(135deg, rgba(3, 39, 105, 1) 35%, rgba(2, 61, 170, 1) 91%);
			background-repeat: no-repeat;
			background-size: cover;
			background-position: 0 0;
			color: #FFFFFF;
			position: relative;
			left: -100%;
			height: 100%;
			width: 200%;
			transform: translateX(0);
			transition: transform 0.6s ease-in-out;
		}

		.container.right-panel-active .overlay {
			transform: translateX(50%);
		}

		.overlay-panel {
			position: absolute;
			display: flex;
			align-items: center;
			justify-content: center;
			flex-direction: column;
			padding: 0 40px;
			text-align: center;
			top: 0;
			height: 100%;
			width: 50%;
			transform: translateX(0);
			transition: transform 0.6s ease-in-out;
		}

		.overlay-left {
			transform: translateX(-20%);
		}

		.container.right-panel-active .overlay-left {
			transform: translateX(0);
		}

		.overlay-right {
			right: 0;
			transform: translateX(0);
		}

		.container.right-panel-active .overlay-right {
			transform: translateX(20%);
		}

		a {
			color: gray;
		}

		a:hover {
			color: #003087;
		}

		label {
			float: left;
		}

		.input-control.success input {
			border-color: #09c372;
		}

		.input-control.error input {
			border-color: #ff3860;
		}

		.input-control .error {
			color: #ff3860;
			font-size: 9px;
			height: 13px;
		}

		img {
			width: 100px;
		}
	</style>


</head>

<body>
	<div class="container" id="container">
		<!-- sign in page -->
		<div class="form-container sign-in-container">
			<form method="POST" action="#" class="form" id="needs-validation" novalidate>
				<img src="<?php echo base_url() ?>assets/images/logo.png">
				<h1 class="form__title">Login</h1>
				<div class="form__input-group">

					<input type="text" id="email" maxlength="20" placeholder="Email" required>

					<div class="error"></div>

				</div>
				<div class="form__input-group">

					<input type="password" class="form__input" name="pass" id="pass" maxlength="20" placeholder="Password" required>
				</div>

				<div class="form__input-group">
					<a href="<?php echo base_url() ?>welcome/new_workorder"><button type="button" class="submit">Login</button></a>
				</div>
			</form>
		</div>



		<div class="overlay-container">
			<div class="overlay">
				<div class="overlay-panel overlay-left">
					<h1>Welcome Back!</h1>
					<p>Please login with your personal info</p>
					<button class="ghost" id="signIn">Sign In</button>
				</div>
				<div class="overlay-panel overlay-right">
					<h1>Bino Tyres</h1>
					<p>Workorder Management System</p>

				</div>
			</div>
		</div>
	</div>

	<script>
		const signUpButton = document.getElementById('signUp');
		const signInButton = document.getElementById('signIn');
		const container = document.getElementById('container');

		signUpButton.addEventListener('click', () => {
			container.classList.add("right-panel-active");
		});

		signInButton.addEventListener('click', () => {
			container.classList.remove("right-panel-active");
		});
	</script>

</body>

</html>