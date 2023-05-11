<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Drinks Image View</title>
	<script src="https://code.jquery.com/jquery-latest.js"></script>

</head>
<body>
	<h1 style='margin:5px; padding:10px;'>Choose a drink brand to see more details</h1>
	<b style='margin:5px; padding:10px;'>Select a drinks brand name: </b>
	<form style='margin:5px; padding:10px;'>
		<select id="select">
			<?php
				for ($i=0; $i <= count($data); $i++)
					echo '<option value='. $data[$i] .'">'. $data[$i] . '</option>';
				?>
			</select>
		</form>
		<div id="placeholder" style='margin:5px; padding:10px;'>Insert data here</div>

		<script>
		$(document).ready(function() {
			var model = $(this).val();
			console.log('Drinks Model:', model, 'has been selected');
			var str = "";
			$("select option:selected").each(function() {
				str += "<div><b>Drinks Brand: </b> " + $(this).text() + "</div>" + "</br>";
				console.log('HTML title is:', $(this).text());
				var selection = $(this).text();
				console.log('Selected brand model:' + selection);
				var brandUrl = "../application/model/modelDrinkDetails.php?brand=" + selection;
				var debugUrl = "../application/model/phpDebug.php";
				$.getJSON(brandUrl)
					.done(function(json) {
					console.log('Web service response for drink brand data: ', json);
					str +="<div width=90%; style='float:left; margin:5px; border: 1px solid; border-color: blue; padding: 10px;'>";
					for (var i=0; i<json.length; i++) {
					str+=
						"<div width='15%' style='float:left; color:blue; margin:5px; border:1px solid; border-color: red; padding: 10px;'>" + json[i].brand + "</div>" +
						"<div width='15%' style='float:left; color:blue; margin:5px; border:1px solid; border-color: red; padding: 10px;'>" + json[i].x3dModelTitle + "</div>" +
						"<div width='15%' style='float:left; color:blue; margin:5px; border:1px solid; border-color: red; padding: 10px;'>" + json[i].x3dCreationMethod + "</div>" +
						"<div width='15%' style='float:left; color:blue; margin:5px; border:1px solid; border-color: red; padding: 10px;'>" + json[i].modelTitle + "</div>" +
						"<div width='15%' style='float:left; color:blue; margin:5px; border:1px solid; border-color: red; padding: 10px;'>" + json[i].modelSubtitle + "</div>" +
						"<div width='15%' style='float:left; color:blue; margin:5px; border:1px solid; border-color: red; padding: 10px;'>" + json[i].modelDescription + "</div>";
					str+=
						"<div width='30%' style='float:left; margin:5px; border:1px solid; border-color: green; border-radius: 10px; padding:10px;'>" +
						"<img width='300px' src='../assets/images/gallery_images/" + json[i].brand + ".jpg'></img>" +
						"</div>";
					}
					str+="</div>";
					document.getElementById("placeholder").innerHTML=str;
					})
					.fail(function() {
						console.log('viewDrinks JS Handler: Server returned an error, trap this in your PHP server code');
					});
			});
		});

	</script>
</body>
</html>