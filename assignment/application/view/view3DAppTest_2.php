<!doctype html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<title>Test View</title>
	<style>
		h1 {
			color:red;
			margin-left: 5px;
		}
		h2 {
			color:blue;
			margin: 5px;
		}
		p {
			color:green;
			margin-left: 5px;
		}
		.imgBox {
			padding: 0.25rem;
			margin-top: 5px;
			margin-bottom: 5px;
			border: 1pc solid #dee2e6;
			border-radius: 0.25rem;
			width: 300px;
		}
		.box {
			border: 1px solid rgba(0, 0, 0, 1.0);
			padding: 5px;
			float: left;
			margin: 5px;
			height: 280px;
		}
	</style>
</head>
	<h1>Second 3D App Test View </h1>
	<p>If you are seeing the test data above Model 3D Image Data, then your basic MVC framework is working </p>
	<div class="box">
		<h2><?php echo $model1 ?></h2>
		<img class="imgBox" src='../../part_b/assets/images/galleryImages/<?php echo $image3D_1?>.png'>
	</div>
	<div class="box">
		<h2><?php echo $model2 ?></h2>
		<img class="imgBox" src='../../part_b/assets/images/galleryImages/<?php echo $image3D_2?>.png'>
	</div>
	<div class="box">
		<h2><?php echo $model3 ?></h2>
		<img class="imgBox" src='../../part_b/assets/images/galleryImages/<?php echo $image3D_3?>.png'>
	</div>
	<div class="box">
		<h2><?php echo $model4 ?></h2>
		<img class="imgBox" src='../../part_b/assets/images/galleryImages/<?php echo $image3D_4?>.png'>
	</div>
	<div class="box">
		<h2><?php echo $model5 ?></h2>
		<img class="imgBox" src='../../part_b/assets/images/galleryImages/<?php echo $image3D_5?>.png'>
	</div>
	<div class="box">
		<h2><?php echo $model6 ?></h2>
		<img class="imgBox" src='../../part_b/assets/images/galleryImages/<?php echo $image3D_6?>.png'>
	</div>
</body>