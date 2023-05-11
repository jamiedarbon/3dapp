$(document).ready(function() {
	$("#home").fadeIn(1000);
	$("#model").hide();
	$("#interactionElements").hide();
	$("#descriptions").hide();

	$("#homeButton").click(function() {
		$("#home").fadeIn(1000);
		$("#model").hide();
		$("#interactionElements").hide();
		$("#descriptions").hide();
	});

	$("#modelButton").click(function() {
		$("#model").fadeIn(1000);
		$("#home").hide();
		$("#interactionElements").fadeIn(1000);
		$("#descriptions").fadeIn(1000);
		$("#coke").fadeIn(1000);
		$("#sprite").hide();
		$("#pepper").hide();
		$("#cokeDescription").fadeIn(1000);
		$("#spriteDescription").hide();
		$("#pepperDescription").hide();
	});

	$("#cokeButton").click(function() {
		$("#coke").show();
		$("#sprite").hide();
		$("#pepper").hide();
		$("#cokeDescription").show();
		$("#spriteDescription").hide();
		$("#pepperDescription").hide();
	});

	$("#spriteButton").click(function() {
		$("#coke").hide();
		$("#sprite").show();
		$("#pepper").hide();
		$("#cokeDescription").hide();
		$("#spriteDescription").show();
		$("#pepperDescription").hide();
	});

	$("#pepperButton").click(function() {
		$("#coke").hide();
		$("#sprite").hide();
		$("#pepper").show();
		$("#cokeDescription").hide();
		$("#spriteDescription").hide();
		$("#pepperDescription").show();
	});
});