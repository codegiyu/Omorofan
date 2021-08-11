function flipOne() {
	if ($('#one').hasClass("open")){
		$('#one').removeClass("open");
	}
	else{
		$('.team-card').removeClass("open");
		$('#one').addClass("open");
	}
}

function flipTwo() {
	if ($('#two').hasClass("open")){
		$('#two').removeClass("open");
	}
	else{
		$('.team-card').removeClass("open");
		$('#two').addClass("open");
	}
}

function flipThree() {
	if ($('#three').hasClass("open")){
		$('#three').removeClass("open");
	}
	else{
		$('.team-card').removeClass("open");
		$('#three').addClass("open");
	}
}

function flipFour() {
	if ($('#four').hasClass("open")){
		$('#four').removeClass("open");
	}
	else{
		$('.team-card').removeClass("open");
		$('#four').addClass("open");
	}
}
