$(document).ready(function(){
	$.getJSON('./model/data.json', function(jsonObj) {
		console.log(jsonObj);
		$('#title_home').html('<h2>' + jsonObj.pageTextData[0].title + '</h2>');
		$('#subTitle_home').html('<h3>' + jsonObj.pageTextData[0].subTitle + '</h3>');
		$('#description_home').html('<p>' + jsonObj.pageTextData[0].description + '</p>');

		$('#title_left').html('<h2>' + jsonObj.pageTextData[1].title + '</h2>');
		$('#subTitle_left').html('<h3>' + jsonObj.pageTextData[1].subTitle + '</h3>');
		$('#description_left').html('<p>' + jsonObj.pageTextData[1].description + '</p>');

		$('#title_centre').html('<h2>' + jsonObj.pageTextData[2].title + '</h2>');
		$('#subTitle_centre').html('<h3>' + jsonObj.pageTextData[2].subTitle + '</h3>');
		$('#description_centre').html('<p>' + jsonObj.pageTextData[2].description + '</p>');

		$('#title_right').html('<h2>' + jsonObj.pageTextData[3].title + '</h2>');
		$('#subTitle_right').html('<h3>' + jsonObj.pageTextData[3].subTitle + '</h3>');
		$('#description_right').html('<p>' + jsonObj.pageTextData[3].description + '</p>');

		$('#x3dModelTitle_coke').html('<h2>' + jsonObj.pageTextData[4].x3dModelTitle + '</h2>');
		$('#x3dCreationMethod_coke').html('<p>' + jsonObj.pageTextData[4].x3dCreationMethod + '</p>');
		$('#title_coke').html('<h2>' + jsonObj.pageTextData[4].title + '</h2>');
		$('#subTitle_coke').html('<h3>' + jsonObj.pageTextData[4].subTitle + '</h3>');
		$('#description_coke').html('<p>' + jsonObj.pageTextData[4].description + '</p>');

		$('#x3dModelTitle_sprite').html('<h2>' + jsonObj.pageTextData[5].x3dModelTitle + '</h2>');
		$('#x3dCreationMethod_sprite').html('<p>' + jsonObj.pageTextData[5].x3dCreationMethod + '</p>');
		$('#title_sprite').html('<h2>' + jsonObj.pageTextData[5].title + '</h2>');
		$('#subTitle_sprite').html('<h3>' + jsonObj.pageTextData[5].subTitle + '</h3>');
		$('#description_sprite').html('<p>' + jsonObj.pageTextData[5].description + '</p>');

		$('#x3dModelTitle_pepper').html('<h2>' + jsonObj.pageTextData[6].x3dModelTitle + '</h2>');
		$('#x3dCreationMethod_pepper').html('<p>' + jsonObj.pageTextData[6].x3dCreationMethod + '</p>');
		$('#title_pepper').html('<h2>' + jsonObj.pageTextData[6].title + '</h2>');
		$('#subTitle_pepper').html('<h3>' + jsonObj.pageTextData[6].subTitle + '</h3>');
		$('#description_pepper').html('<p>' + jsonObj.pageTextData[6].description + '</p>');

		$('#title_gallery').html('<h5>' + jsonObj.pageTextData[7].galleryTitle + '</h5>');
		$('#description_gallery').html('<p>' + jsonObj.pageTextData[7].galleryDescription + '</p>');

		$('#title_gallerySprite').html('<h5>' + jsonObj.pageTextData[7].galleryTitle + '</h5>');
		$('#description_gallerySprite').html('<p>' + jsonObj.pageTextData[7].galleryDescription + '</p>');

		$('#title_galleryPepper').html('<h5>' + jsonObj.pageTextData[7].galleryTitle + '</h5>');
		$('#description_galleryPepper').html('<p>' + jsonObj.pageTextData[7].galleryDescription + '</p>');

		$('#title_camera').html('<h2>' + jsonObj.pageTextData[8].CameraTitle + '</h2>');
		$('#description_camera').html('<p>' + jsonObj.pageTextData[8].CameraSubtitle + '</p>');

		$('#title_cameraSprite').html('<h2>' + jsonObj.pageTextData[8].CameraTitle + '</h2>');
		$('#description_cameraSprite').html('<p>' + jsonObj.pageTextData[8].CameraSubtitle + '</p>');

		$('#title_cameraPepper').html('<h2>' + jsonObj.pageTextData[8].CameraTitle + '</h2>');
		$('#description_cameraPepper').html('<p>' + jsonObj.pageTextData[8].CameraSubtitle + '</p>');

		$('#Coke3DModel').html('<Viewpoint id="front" DEF="CA_CA_Front_Camera" centerOfRotation="0 0 0" position="3.00 0.00 -25.00" orientation="-0.00 89 0.67 91.00" fieldOfView="0.691"></Viewpoint>\n<Viewpoint id="back" DEF="CA_Camera" centerOfRotation="0 0 0" position="-0.00 -0.00 25.00" orientation="-0.00 -0.47 -0.88 0.00" fieldOfView="0.691"></Viewpoint>\n<Viewpoint id="right" DEF="CA_CA_Front_Camera" centerOfRotation="0 0 0" position="-20.00 0.00 -10.00" orientation="-0.67 90 0.67 -90.00" fieldOfView="0.691"></Viewpoint>\n<Viewpoint id="left" DEF="CA_CA_Front_Camera" centerOfRotation="0 0 0" position="20.00 0.00 -10.00" orientation="-0.67 90 0.67 90.00" fieldOfView="0.691"></Viewpoint>\n<Viewpoint id="top" DEF="CA_CA_Front_Camera" centerOfRotation="0 0 0" position="0.00 20.00 0.00" orientation="-10000.00 100.00 100.00 -92.70" fieldOfView="0.691"></Viewpoint>\n<inline id="3dModel" url=' + jsonObj.pageTextData[9].Coke3DModel + '></inline>');
		
		$('#Sprite3DModel').html('<Viewpoint id="frontSprite" DEF="CA_CA_Front_Camera" centerOfRotation="0 0 0" position="3.00 0.00 -25.00" orientation="-0.00 89 0.67 91.00" fieldOfView="0.691"></Viewpoint>\n<Viewpoint id="backSprite" DEF="CA_Camera" centerOfRotation="0 0 0" position="-0.00 -0.00 25.00" orientation="-0.00 -0.47 -0.88 0.00" fieldOfView="0.691"></Viewpoint>\n<Viewpoint id="rightSprite" DEF="CA_CA_Front_Camera" centerOfRotation="0 0 0" position="-20.00 0.00 -10.00" orientation="-0.67 90 0.67 -90.00" fieldOfView="0.691"></Viewpoint>\n<Viewpoint id="leftSprite" DEF="CA_CA_Front_Camera" centerOfRotation="0 0 0" position="20.00 0.00 -10.00" orientation="-0.67 90 0.67 90.00" fieldOfView="0.691"></Viewpoint>\n<Viewpoint id="topSprite" DEF="CA_CA_Front_Camera" centerOfRotation="0 0 0" position="0.00 20.00 0.00" orientation="-10000.00 100.00 100.00 -92.70" fieldOfView="0.691"></Viewpoint>\n<inline url=' + jsonObj.pageTextData[10].Sprite3DModel + '></inline>');

		$('#Pepper3DModel').html('<Viewpoint id="frontPepper" DEF="CA_CA_Front_Camera" centerOfRotation="0 0 0" position="3.00 0.00 -25.00" orientation="-0.00 89 0.67 91.00" fieldOfView="0.691"></Viewpoint>\n<Viewpoint id="backPepper" DEF="CA_Camera" centerOfRotation="0 0 0" position="-0.00 -0.00 25.00" orientation="-0.00 -0.47 -0.88 0.00" fieldOfView="0.691"></Viewpoint>\n<Viewpoint id="rightPepper" DEF="CA_CA_Front_Camera" centerOfRotation="0 0 0" position="-20.00 0.00 -10.00" orientation="-0.67 90 0.67 -90.00" fieldOfView="0.691"></Viewpoint>\n<Viewpoint id="leftPepper" DEF="CA_CA_Front_Camera" centerOfRotation="0 0 0" position="20.00 0.00 -10.00" orientation="-0.67 90 0.67 90.00" fieldOfView="0.691"></Viewpoint>\n<Viewpoint id="topPepper" DEF="CA_CA_Front_Camera" centerOfRotation="0 0 0" position="0.00 20.00 0.00" orientation="-10000.00 100.00 100.00 -92.70" fieldOfView="0.691"></Viewpoint>\n<inline url=' + jsonObj.pageTextData[11].Pepper3DModel + '></inline>');

		$('#title_animation').html('<h2>' + jsonObj.pageTextData[12].AnimationTitle + '</h2>');
		$('#description_animation').html('<p>' + jsonObj.pageTextData[12].AnimationSubtitle + '</p>');

		$('#title_rendering').html('<h2>' + jsonObj.pageTextData[13].RenderingTitle + '</h2>');
		$('#description_rendering').html('<p>' + jsonObj.pageTextData[13].RenderingSubtitle + '</p>');
	});
});