<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

<!-- Connect Style -->
	<link rel="stylesheet" href="../style/style.css">
	
	<!-- Connect pictutes and Style  -->
	<link rel="stylesheet" href="../style/for_all_pictures_info_img.css">

	<!-- Connect FONTS -->
	<?php include('../general_php/fonts.php');?>

	<link rel="stylesheet" href="../dist/css/lightbox.css">


	
	<!-- ДЛЯ @MEDIA ЗАПРОСОВ -->
	<meta name="viewport" content="width=device-width initial-scale = 1, shrink-to-fit=no">  
	<?php include('../general_php/title.php');?>
</head>
<body>

<!-- Connect HEADER -->
<?php include('../general_php/nav.php');?>
<!-- ------------------------------ -->


<section>
	<div class="container">
		<div class="wrapper-set-img"> 
			<div class="set-img"> 
				<div class="mini_set_img">
					<a href="../img/all sets/set_7/big-1.jpg" data-lightbox="test"><img src="../img/all sets/set_7/small-1.jpg" alt="q"></a>
					<a href="../img/all sets/set_7/big-2.jpg" data-lightbox="test"><img src="../img/all sets/set_7/small-2.jpg" alt=""></a>
					<a href="../img/all sets/set_7/big-3.jpg" data-lightbox="test"><img src="../img/all sets/set_7/small-3.jpg" alt=""></a>
					<a href="../img/all sets/set_7/big-4.jpg" data-lightbox="test"><img src="../img/all sets/set_7/small-4.jpg" alt=""></a>
				</div>
				<div class="top-img-set">
					<img src="../img/all sets/set_7/top-img.jpg" alt="top-img">	 
				</div> 
			</div>
				<div class="descrition-img">
					<table class="table">
						 
						<tr>
							<td class="table-name">ID</td>
							<td class="table-info">07</td>
						</tr>
						<?php include ('../info_picture_php/Canvas_30x40.php')?>
					</table>
						<div class="wrapper-price"> 
							<p class="sum-price">95 $</p>
						</div>
						<?php include ('../info_picture_php/order_button.php ')?>
				</div>
		</div>
	</div>
</section>


<!-- Connect FOOTER -->
<?php include('../general_php/footer.php');?>
<!-- ------------------------------ -->

<script
  src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
  integrity="sha256-4+XzXVhsDmqanXGHaHvgh1gMQKX40OUvDEBTu8JcmNs="
  crossorigin="anonymous"></script>
  <script src="../js/main.js"></script>
<script src="../dist/js/lightbox-plus-jquery.js"></script>
</body>
</html>















