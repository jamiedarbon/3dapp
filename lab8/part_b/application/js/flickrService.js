$(document).ready(function() {
	loadImages();
});
function loadImages() {
	var txt=document.getElementById('txt').value;
	console.log(txt);
	var urlFlickr = "https://api.flickr.com/services/feeds/photos_public.gne?jsoncallback=?";
	$.getJSON(urlFlickr, {tags: txt, tagmode:"all", format:"json"}, function(data) {
		console.log(data);
		$('#title').html(data.title);
		$('#link').html(data.link);
		$('#description').html(data.description);
		$('#modified').html(data.modified);
		$('#generator').html(data.generator);
		var htmlCode="";
		$.each(data.items, function(i, item) {
			htmlCode += '<div class="imgBox">' + '<div><h3 Title: ' + item.title + '</h3></div>';
			htmlCode += '<img src="' + item.media.m + '"/>';
			htmlCode += '<div><h4> Published: ' + item.published + '</h4></div></div>';
			if(i==3) return false;
		});
		$('#images').html(htmlCode);
	});
}