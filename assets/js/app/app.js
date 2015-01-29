// JavaScript Document

var flare_app = {
	
	
	toggle_nav_icon:function (){
		$('#navModal').on('shown.bs.modal', function () {
			$('#nav-toggle .fa').slideToggle(200);		 	
		});
		$('#navModal').on('hidden.bs.modal', function () {
			$('#nav-toggle .fa').slideToggle(200);	
		});
	}

};

$(function(){
	 $('#goto-top').click(function(){
		$('html, body').animate({ scrollTop:0},300);
	 }); 
	 
	 flare_app.toggle_nav_icon();
	 
	 $(window).scroll(function() {
		var scroll_top = $(document).scrollTop(); 
		if(scroll_top >= 200){
			$('#goto-top').slideDown();	
		}else{
			$('#goto-top').slideUp();		
		}

	 });
}); // ready

