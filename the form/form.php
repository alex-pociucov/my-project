<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="icon" type="../image/png" sizes="32x32" href="../img/favicon.png">

<!-- Connect Style -->
<link rel="stylesheet" href="../style/style.css">

<!-- -------------Connect Style Form------------ -->
<link rel="stylesheet" href="../style/form.css">
<!-- -------------------------------------------------------------- -->

<!-- Connect FONTS -->
<?php include('../general_php/fonts.php');?>

<link rel="stylesheet" href="../dist/css/lightbox.css">

<!-- ДЛЯ @MEDIA ЗАПРОСОВ -->
<meta name="viewport" content="width=device-width initial-scale = 1, shrink-to-fit=no">  

	
	<title>Ribbon-Art.ru</title>
</head>
<body>
	

<!-- Connect HEADER -->
<?php include('../general_php/nav.php');?>
<!-- ------------------------------ -->

 <section>
 	<div class="container">
 		<p class="important" >Во избежание проблем и ошибок при отправке заказа, пожалуйста правильно указывайте все ваши данные: имя, фамилию, почтовый индекс, адрес проживания, телефон и корректный адрес электронной почты. </p>
 		<div class="wrapper_form">
 			<div class="form_link">
 				<p class="form_text">
					Искусство - это нечто возвышенное и прекрасное, что помогает человеку познавать всю красоту этого мира.
					Искусство это сложное понятие, который каждый человек понимает по-своему. Оно бывает материальным и духовным, но и в том, и в другом случае приносит индивидууму невероятные ощущения и удовольствие. Понимание искусства трудоемко и включает много компонентов. Оно пробуждает в человеке чувства и эмоции, которые преображают внутренний духовный мир человека. При появлении этих чувств жизнь человека становится прекраснее и переносит в мир фантазий
					Искусство играет огромную роль в нашей жизни, пока оно заставляет нас задумываться над важными проблемами и вещами, происходящими вокруг нас, пока искусство волнует сознание человека и не оставляет нас равнодушными. 
 				</p>
 				<p class="for-media">
 					Искусство - это нечто возвышенное и прекрасное, что помогает человеку познавать всю красоту этого мира.
					Искусство это сложное понятие, который каждый человек понимает по-своему.
 				</p>
 			</div>
<form action="mail.php" autocomplete="off" method="post" class="form">
	<label>
		<input class="form_form" type="text" name="name" placeholder="Имя Фамилия">
	</label>
	<label>
		<input class="form_form" type="text" name="id_picture" placeholder="ID картины">
	</label>
	<label>
		<input class="form_form" type="text" name="city" placeholder="Город">
	</label>
	<label>
		<input class="form_form" type="text" name="address" placeholder="Ваш адрес">
	</label>
	<label>
		<input class="form_form" type="text" name="phone" placeholder="телефон">
	</label>
	<label>
		<input class="form_form" type="text" name="index" placeholder="Почтовый индекс">
	</label>
	<label>
		<input class="form_form" type="text" name="e-mail" placeholder="e-mail">
	</label>
	<div class="btn" >
		<input  type="submit" value="Опалатить Заказ">

	</div>
</form>

 	 
 </section>

<!-- Connect FOOTER -->
<?php include('../general_php/footer.php');?>
<!-- ------------------------------ -->


<script
  src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
  integrity="sha256-4+XzXVhsDmqanXGHaHvgh1gMQKX40OUvDEBTu8JcmNs="
  crossorigin="anonymous"></script> <!-- подключение для гамбургера https://code.jquery.com/ slim minified-->
  <script src="../js/main.js"></script>
</body>
</html>
