var slidewidth = 960;
var leftItem = 0;
var totalWidth;
var chatClicked = 0;
var supportClicked = 0;
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


$('html').click(function(e){
	console.log(e.target.getAttribute('class') );
	if(
			e.target.getAttribute('class') != 'chat_button_drawer' 	&& 
			e.target.getAttribute('class') != 'chat_button_panel' 	&& 
			e.target.getAttribute('class') != 'chat_online_panel' 	&& 
			chatClicked == 1
	) {

		$('.chat_panel').animate(
			{
				left: '-=263'
			},
			300,
			function(){
				clearInterval(t);
			}
		);
		chatClicked = 0;
	}
});

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

function displayChat(base_url){
	var url = base_url;
	
	if(chatClicked == 0) {
		t = setInterval(function(){getOnlineReps(url)},500);
		/*$('.banner_loader').ajaxStart(function(){
			$(this).hide();
			$('.pic_container').show();
		});

		$('.banner_loader').ajaxStop(function(){
			$(this).show();
			$('.pic_container').hide();
		});*/
		$('.chat_panel').animate(
			{
				left: '+=263'
			},
			300
		);
		chatClicked = 1;
	} else {
		/*$('.banner_loader').ajaxStart(function(){
			$(this).show();
			$('.pic_container').hide();
		});

		$('.banner_loader').ajaxStop(function(){
			$(this).hide();
			$('.pic_container').show();
		});*/
		$('.chat_panel').animate(
			{
				left: '-=263'
			},
			300,
			function(){
				clearInterval(t);
			}
		);
		chatClicked = 0;
	}
}

function getOnlineReps(url){
	var protocol = window.location.protocol;
	//var host = window.locaton.hostname;
	//console.log(window.location.pathname);
	var base_url = url;
	$.ajax({
		url: base_url + 'Chat/getOnline',
		type:"POST",
		data:{'supportClicked':supportClicked},
		success:function(result){			
			$('#chat_online_list_ul').html(result);
		}
	});

	if(supportClicked) {
		$("#chat_online_list_ul li").attr('onclick','');
	} else {

	}
}

function openChatInquiryWindow(user_support_id,base_url,ev){


	var url = base_url + 'Chat/inquire?u_id=' + user_support_id;
    var windowName = "inquire_" + user_support_id;//$(this).attr("name");
    var windowSize = 'width=400,height=500,scrollbars=yes,resizable=no';

    supportClicked = 1;
    
    myWind = window.open(url, windowName, windowSize);

    w = setInterval(function(){checkIfWindowisClosed(base_url,myWind)},500);

    /*myWind.onbeforeunload = function(){
    	deactivateClientUserSession(base_url);
    	
    };

    myWind.onunload = function(){
    	console.log('unload');
    };

    if(myWind.closed){
    	console.log('closed');
    }*/
    

    ev.preventDefault();
}

function checkIfWindowisClosed(base_url,myWind){
	if(myWind.closed){
		deactivateClientUserSession(base_url);
		clearInterval(w);
	}
	/*if(myWind.closed){
    	console.log('closed');
    }*/
}

function deactivateClientUserSession(base_url){
	console.log(base_url);
	$.ajax({
		url:base_url + 'Chat/deactivateClientUserSession',
		success:function(result){
			console.log(result);
			supportClicked = 0;
		}
	});
}