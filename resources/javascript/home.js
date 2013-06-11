var slidewidth = 960;
var leftItem = 0;
var totalWidth;
var t = 0;
var w = 0;
var myWind;
var numOfImgContainers = 0;


$(document).ready(function(){
	servicesFrameWidth  = $('.services_frame').width();
	slidewidth = servicesFrameWidth;
	imgContainerWidth = servicesFrameWidth * 0.24;

	$('.services_frame .navigation').css({
		width:servicesFrameWidth + 'px',
	});

	$('.services_frame .services_container .image_container').css({
		width:imgContainerWidth + 'px',
	});

	$('.services_frame .services_container .image_container .service_caption').css({
		width:(imgContainerWidth - 20) + 'px',
	});
	
	numOfImgContainers = $('.image_container').length;
	servicesContainerWidth = numOfImgContainers * (imgContainerWidth + 10);

	$('.services_frame .services_container').css({
		width:servicesContainerWidth + 'px',
	});
	console.log(servicesContainerWidth);
});

window.onresize = function () {
	servicesFrameWidth  = $('.services_frame').width();
	imgContainerWidth = servicesFrameWidth * 0.24;

	$('.services_frame .navigation').css({
		width:servicesFrameWidth + 'px',
	});

	$('.services_frame .services_container .image_container').css({
		width:imgContainerWidth + 'px',
	});

	$('.services_frame .services_container .image_container .service_caption').css({
		width:(imgContainerWidth - 20) + 'px',
	});
	
	var numOfImgContainers = $('.image_container').length;
	servicesContainerWidth = numOfImgContainers * (imgContainerWidth + 10);

	$('.services_frame .services_container').css({
		width:servicesContainerWidth + 'px',
	});
}



function display(className){
	$(className).show();

	if(leftItem == 0){
		$('.services_frame .navigation .nav_button').show();
		$('.services_frame .navigation .nav_button.next').show();
		$('.services_frame .navigation .nav_button.previous').hide();
	} else {
		$('.services_frame .navigation .nav_button').show();

		if(numOfImgContainers <=4){
			$('.services_frame .navigation .nav_button.next').hide();
		}
		$('.services_frame .navigation .nav_button.previous').show();
	}
}

function hide(className){
	$(className).hide();	
}

function next(width){
	leftItem++;
	$('.services_frame .services_container').animate({
		marginLeft: '-='+slidewidth
	},
	1000,
	function(){
		numOfImgContainers -= 4;
		if(numOfImgContainers <=4){
			$('.services_frame .navigation .nav_button.next').hide();
			$('.services_frame .navigation .nav_button.previous').show();
		}
	});

}

function prev(width) {
	leftItem--;
	$('.services_frame .services_container').animate({
		marginLeft: '+='+slidewidth
	},
	1000,
	function(){		
		numOfImgContainers += 4;
		if(leftItem == 0)
			$('.previous').hide();
		$('.next').show();
	});
}

