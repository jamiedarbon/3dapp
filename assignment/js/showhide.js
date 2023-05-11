$(document).ready(function() {
	$("#home").fadeIn(1000);
	$('#homeGallery').fadeIn(1000);
	$("#model").hide();
	$("#about").hide();
	$("#interactionElements").hide();
	$("#descriptions").hide();

	$("#homeButton").click(function() {
		$("#home").fadeIn(1000);
		$('#homeGallery').fadeIn(1000);
		$("#model").hide();
		$("#interactionElements").hide();
		$("#about").hide();
		$("#descriptions").hide();
	});

	$("#modelButton").click(function() {
		$("#model").fadeIn(1000);
		$("#home").hide();
		$('#homeGallery').hide();
		$("#interactionElements").fadeIn(1000);
		$("#about").hide();
		$("#descriptions").fadeIn(1000);
		$("#coke").fadeIn(1000);
		$("#sprite").hide();
		$("#pepper").hide();
		$("#cokeDescription").fadeIn(1000);
		$("#spriteDescription").hide();
		$("#pepperDescription").hide();
	});

	$("#productLink").click(function() {
		$("#model").fadeIn(1000);
		$("#home").hide();
		$('#homeGallery').hide();
		$("#interactionElements").fadeIn(1000);
		$("#about").hide();
		$("#descriptions").fadeIn(1000);
		$("#coke").fadeIn(1000);
		$("#sprite").hide();
		$("#pepper").hide();
		$("#cokeDescription").fadeIn(1000);
		$("#spriteDescription").hide();
		$("#pepperDescription").hide();
	});

	$("#aboutLink").click(function() {
		$("#model").hide();
		$("#home").hide();
		$('#homeGallery').hide();
		$("#interactionElements").hide();
		$("#about").fadeIn(1000);
		$("#descriptions").hide();
		$("#coke").hide();
		$("#sprite").hide();
		$("#pepper").hide();
		$("#cokeDescription").hide();
		$("#spriteDescription").hide();
		$("#pepperDescription").hide();
	});

	$("#aboutButton").click(function() {
		$("#model").hide();
		$("#home").hide();
		$('#homeGallery').hide();
		$("#interactionElements").hide();
		$("#about").fadeIn(1000);
		$("#descriptions").hide();
		$("#coke").hide();
		$("#sprite").hide();
		$("#pepper").hide();
		$("#cokeDescription").hide();
		$("#spriteDescription").hide();
		$("#pepperDescription").hide();
	});

	$("#cokeButton").click(function() {
		$("#coke").show();
		$("#cokeDescription").show();
		$("#spriteDescription").hide();
		$("#pepperDescription").hide();
	});

	$("#spriteButton").click(function() {
		$("#coke").show();
		$("#cokeDescription").hide();
		$("#spriteDescription").show();
		$("#pepperDescription").hide();
	});

	$("#pepperButton").click(function() {
		$("#coke").show();
		$("#cokeDescription").hide();
		$("#spriteDescription").hide();
		$("#pepperDescription").show();
	});
});