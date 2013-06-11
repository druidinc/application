var t = 0;
var m = 0;
var myWindow = new Array();
var chatClicked = 0;
var supportClicked = 0;



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

function getOnline(base_url){
	var url = base_url;
	t = setInterval(function(){getOnlineReps(url)},500);
}

function displayChat(base_url){
	var url = base_url;
	
	if(chatClicked == 0) {
		
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
			if(result.length == 0 || result == null || result == "empty"){
				$(".chat_panel").hide();
			}
			else{
				$(".chat_panel").show();
				$('#chat_online_list_ul').html(result);
			}
		}
	});

	if(supportClicked) {
		$("#chat_online_list_ul li").attr('onclick','');
	} else {

	}

	//getOnlineReps(url);
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

function listen(base_url){
	t = setInterval(function(){listenForNewInquiry(base_url)},3000);
}

function getMessage(base_url,type_id,client_user_session_id,from,to){
	m = setInterval(function(){getChatMessage(base_url,type_id,client_user_session_id,from,to)},1500);
}

function listenForNewInquiry(base_url){
	$.ajax({
		url: base_url + 'Auth/Support/listenForNewInquiry',
		success:function(result){
			console.log(result);
			if(result != 0) {
				
				var url = base_url + 'Auth/Support/startChat?' + result;
			    var windowName = "session_" + result;
			    var windowSize = 'width=400,height=500,scrollbars=yes,resizable=no';

			    
			    myWind = window.open(url, windowName, windowSize);

			    myWind.onbeforeunload = function(){
			    	isSessionActive(base_url, result);
			    };
			}
		}
	});
}

function isSessionActive(base_url,result){
	var cus_id;

	var explodedResult = result.split('&');
	var cus_id = explodedResult[0].split('=')[1];
	$.ajax({
		url: base_url + 'Auth/Support/isClientUserSessionActive',
		type:'POST',
		data:{
			'cus_id':cus_id
		}
	});
}

function sendChatMessage(base_url,from, to,client_user_session_id,type_id) {
	var message = $('#message_input').val();
	$.ajax({
		url: base_url + 'Chat/sendChatMessage',
		type:'POST',
		data:{
			'from':from,
			'to':to,
			'message':message ,
			'client_user_session_id':client_user_session_id,
			'type_id':type_id
		},
		success:function(result){
			if(result) {
				getChatMessage(base_url,type_id,client_user_session_id,from,to);
				$('#message_input').val('');
				$('#send_button').attr('disabled','disabled');
			}
		}
	});

}

function getChatMessage(base_url,type_id,client_user_session_id,from,to) {
	$.ajax({
		url: base_url + 'Chat/getChatMessage',
		type:'POST',
		data:{
			'from':from,
			'to':to,
			'client_user_session_id':client_user_session_id,
			'type_id':type_id
		},
		dataType : "json",
		success:function(result){
			console.log(result);
			if(result.active == 1) {
				$('.messages').html(result.message);
			} else {
				clearInterval(m);
					
				var z = setTimeout(function(){
					clearTimeout(z);
					var htmlMessage = $('.messages').html();
					$('.messages').html(htmlMessage + '<p>Client has ended the session</p>');
				},500);


				
			}
		}
	});

	$('.messages').scroll(0,1000);
}