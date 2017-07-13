<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Nuvela | Plataforma Escolar</title>
	<link rel="stylesheet" href="css/style.css">
	<meta http-equiv="Pragma" content="no-cache">
	<meta http-equiv="expires" content="0">
	<link rel="stylesheet" href="other/icon.css">
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400" rel="stylesheet">
	<script src="https://code.jquery.com/jquery-latest.js"></script>
</head>
<body>
	<div class="img_background2"></div>
	<section class="content1">
		<!--div class="container1">
			<div><img src="other/brain.svg" alt="Nuvela Plataforma educativa"></div>
			<div><h1>NUVELA</h1></div>
		</div-->
		<div class="white_rectangle1" id="wr1">
			<div id="wr1_cnt2">
				<form action="">
					<input type="email" name="email" id="email" placeholder="Correo">
					<input type="text" name="user_name" id="user_name" placeholder="Nombre de Usuario">
					<input type="password" name="new_pass" id="new_pass" placeholder="Contraseña">
					<input type="password" name="new_pass2" id="new_pass2" placeholder="Repetir Contraseña">
					<input type="text" name="school_name" id="school_name" placeholder="Nombre de la Institución">
					<input type="tel" name="tel" id="tel" placeholder="Teléfono del encargado">
					<input type="text" name="adress" id="adress" placeholder="Dirección">
					<input type="submit" value="Registrarse" class="gray_button">
				</form>
			</div>
			<div id="wr1_cnt1">
				<form action="">
					<input type="text" name="user" id="user" placeholder="Usuario">
					<input type="password" name="pass" id="pass" placeholder="Contraseña">
					<input type="submit" value="Ingresar" class="gray_button">
				</form>
			</div>
		</div>
		<div class="blue_rectangle1" id="br1">
			<div id="br1_cnt2">
				<div><h2>¿Ya tienes cuenta?</h2></div>
				<input class="button" type="button" value="Inicia Sesión" id="login">
			</div>
			<div id="br1_cnt1">
				<div><h2>¿No te has registrado?</h2></div>
				<input class="button" type="button" value="Registrarse" id="signin">
			</div>
		</div>
	</section>
	<script>
		$cambio = false;
		$(document).ready(function(){
			$("#br1_cnt2").css({
				"opacity":"0",
				"margin-left":"40px"
			});
			$("#wr1_cnt2").css({
				"opacity":"0",
				"display":"none"
			});
		})
		$("#signin").click(function(){
			if ($cambio == false) {
				$("#wr1").animate({
					height: '550px'
				});
				$("#wr1").animate({
					left: '48%'
				});
				$("#br1_cnt1").animate({
					opacity: '0'
				});
				$("#br1_cnt2").animate({
					opacity: '1'
				});
				$("#wr1_cnt2").css({
					"display":"block"
				});
				$("#wr1_cnt2").animate({
					opacity: '1'
				});
				$("#wr1_cnt1").animate({
					opacity: '0'
				});
				$("#wr1_cnt1").css({
					"display":"none"
				});
				$cambio = true;
			}
		})
		$("#login").click(function(){
			if ($cambio == true) {
				$("#wr1").animate({
					left: '25%'
				});
				$("#br1_cnt1").animate({
					opacity: '1'
				});
				$("#br1_cnt2").animate({
					opacity: '0'
				});
				$("#br1_cnt2").animate({
					opacity: '0'
				});
				$("#wr1_cnt2").css({
					"display":"none"
				});
				$("#wr1_cnt2").animate({
					opacity: '0'
				});
				$("#wr1_cnt1").animate({
					opacity: '1'
				});
				$("#wr1_cnt1").css({
					"display":"block"
				});
				$("#wr1").animate({
					height: '484px'
				});
				$cambio = false;
			}
		})
	</script>
</body>
</html>