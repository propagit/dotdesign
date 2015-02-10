// JavaScript Document

var flare_app = {
	
	
	toggle_nav_icon:function (){
		$('#navModal').on('shown.bs.modal', function () {
			$('#header').addClass('header-fixed');
			$('#nav-toggle .fa').slideToggle(200);		 	
		});
		$('#navModal').on('hidden.bs.modal', function () {
			$('#header').removeClass('header-fixed');
			$('#nav-toggle .fa').slideToggle(200);	
		});
	},
	
	submit_form:function(form_id,submit_url,msg_box_id,callback){
		$.ajax({
		url: submit_url,
		data: $('#'+form_id).serialize(),
		type:'POST',
		dataType:'JSON',
		success:function(data){
				if (!data.ok) { 
					// Invalid
					var errors = data.errors;
					//reset error class in form as they will need to be re validated
					flare_app.remove_error_class(form_id,msg_box_id);
					flare_app.mark_errors(form_id,msg_box_id,errors);
				}else{
					flare_app.remove_error_class(form_id,msg_box_id);
					$('#'+form_id)[0].reset();
					callback(data);
				}
			}
		});
	
	},
	
	// mark form errors
	mark_errors:function(form_id,msg_box_id,errors){
		var msg = '';
		errors.forEach(function(e){
			$('#' + form_id).find('[name="' + e.field + '"]').parent().addClass('has-error');
			msg += e.msg+'<br>';
			$('#'+msg_box_id).html(msg).removeClass('bg-success text-success').addClass('bg-danger text-danger').show();
		});	
	},

	//removes error markes from previous form submit
	remove_error_class:function(form_id,msg_box_id){
		$('#'+msg_box_id).removeClass('bg-danger').removeClass('text-danger').addClass('bg-success text-success');
		$('#'+form_id+' input,#'+form_id+' textarea,#'+form_id+' select,#'+form_id+' date#'+form_id+' email').each(function(){
			$(this).parent().removeClass('has-error');
		});
	}

};

$(function(){
	 $('#goto-top').click(function(){
		$('html, body').animate({ scrollTop:0},300);
	 }); 
	 
	 flare_app.toggle_nav_icon();
	 
	 
	 // to display the goto top button
	 $(window).scroll(function() {
		// use this when the goto top btn is on the lower right hand corner
		// check if scrolling has stopped, then perform scroll position check and fire animate
		// if scrolling check is not done the scroll position check will keep firing 
		// and the animate will mis fire giving buggy result
		/*clearTimeout($.data(this, 'scrollTimer')); 
		$.data(this, 'scrollTimer', setTimeout(function() {
			var scroll_top = $(document).scrollTop(); 
			if(scroll_top >= 200){
				$('#goto-top').animate({bottom:"25px"},500);	
			}else{
				$('#goto-top').animate({bottom:"-43px"},500);			
			}
    	}, 250));
		*/
		
		// when goto top btn is on the center
		// an offset value so that action is triggered 
		// after passing some distance from the footer
		var offset = 120; 
		
		var height = $(window).height();
		var scrollTop = $(window).scrollTop();
		var obj = $("#footer")
		var pos = obj.position();
		if (height + scrollTop - offset > pos.top) {
		   $('#goto-top').slideDown();
		}
		else {
		   $('#goto-top').slideUp();
		}

	 });// scroll
	 
	 
	 //carousel swipe
	 $(".carousel").swiperight(function() {  
      	$(".carousel").carousel('prev');  
    });  
   	$(".carousel").swipeleft(function() {  
      	$(".carousel").carousel('next');  
   	});  
	 
	 
}); // ready

