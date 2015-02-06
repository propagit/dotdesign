<div id="content" class="content-offset-top">
	<div class="secondary">
           
        <div id="banners" class="carousel slide" data-ride="carousel" data-interval="false">
            
            <!-- Wrapper for slides -->
            <div class="carousel-inner" role="listbox">
                <div class="item active">
                    <img src="<?=base_url();?>assets/img/secondary/contact-banner.jpg" alt="contact-banner.jpg">
                    <div class="carousel-caption">
                        <h1>ANY TIME ANY PLACE</h1>
                     	<h4>DOT DESIGN SPECIALISTS IN MARKETING AT RETAIL ANY TIME - ANY PLACE</h4>
                        
                    </div>
                </div>
            </div>
    	</div>
        
        
        
        
        
        <div class="container sec-content">
        	<div class="sec-inner">
                <h5>Contact Dot Design</h5>
                <h2>POINT OF PURCHASE <br>PRODUCT DESIGN SPECIALISTS</h2>
                <p>
                    Dot Design have offices placed throughout the world offering truly global capabilities to deliver point of purchase solutions for any brand, any place. Contact our team in your local area or touch base via the form below.
                </p>
          	</div>
            
            <div class="sec-address">
            
            
                <div class="address">
                    <h6>DOT DESIGN GROUP - SYDNEY</h6>
                    <p>
                        54 KELLETT STREET, <br>
                        KINGS CROSS NSW 2011
                    </p>
                    <ul class="fa-ul">
                      <li><i class="fa-li fa fa-phone"></i> 61 02 9361 3655</li>
                      <li><i class="fa-li fa fa-print"></i> 61 02 9361 3855</li>
                      <li><i class="fa-li fa fa-envelope"></i> sydney@dotdesign.com.au</li>
                    </ul>
                </div><!--address-->
                
                <div class="address">
                    <h6>DOT DESIGN GROUP - MELBOURNE</h6>
                    <p>
                        230 LENNOX STREET<br>
                        RICHMOND VIC 3121
                    </p>
                    <ul class="fa-ul">
                      <li><i class="fa-li fa fa-phone"></i> 61 03 9421 5551</li>
                      <li><i class="fa-li fa fa-print"></i> 61 02 9361 3855</li>
                      <li><i class="fa-li fa fa-envelope"></i> melbourne@dotdesign.com.au</li>
                    </ul>
                </div><!--address-->
                
                <div class="address">
                    <h6>DOT DESIGN GROUP - CHINA</h6>
                    <p>
                        2916, TOWER A, NEW GENERATION<br>
                        INTERNATIONAL APARTMENT NANHIA<br>
                        DADAO NANSHAN DISTRICT SHENZHEN
                    </p>
                    <ul class="fa-ul">
                        <li><i class="fa-li fa fa-envelope"></i> china@dotdesign.com.au</li>
                    </ul>
                </div><!--address--> 
                
                <div class="address">
                    <h6>DOT DESIGN GROUP - USA</h6>
                    <p>
                        123 America Road <br>
                        Amber St Louis 12045<br>
                        USA
                    </p>
                    <ul class="fa-ul">
                        <li><i class="fa-li fa fa-envelope"></i> usa@dotdesign.com.au</li>
                    </ul>
                </div><!--address--> 
            
            </div>
            
            <div class="sec-inner app-form">
                <h6><i class="fa fa-paper-plane-o"></i> Touch Base With Dot Design</h6>
                <form id="contact-form">
                     <div class="form-group">
                        <input name="name" type="text" class="form-control" placeholder="your name">
                     </div>
                     <div class="form-group">
                        <input name="phone" type="text" class="form-control" placeholder="your phone">
                     </div>
                     <div class="form-group">
                        <input name="email" type="text" class="form-control" placeholder="your email">
                     </div>
                     <div class="form-group">
                        <select name="city" class="form-control">
                            <option>ENQUIRY: SYDNEY</option>
                            <option>ENQUIRY: MELBOURNE</option>
                            <option>ENQUIRY: USA</option>
                            <option>ENQUIRY: CHINA</option>
                        </select>
                     </div>
                     <div class="form-group">
                        <textarea name="message" class="form-control" rows="5" placeholder="your message"></textarea>
                     </div>
                     <div class="form-group">
                        <button id="send-msg" type="button" class="btn btn-app fw">Send</button>
                     </div>
                
                </form>
                <p id="contact-result" class="msg-box" style="display:none;">
                	
                </p>
         	</div>
        </div>

    </div> 
    
</div>

<script>
$('#send-msg').click(function(){
	$('#contact-result').hide();
	$.ajax({
		url: '<?=base_url();?>content/sendcontact',
		data: $('#contact-form').serialize(),
		type:'POST',
		dataType:'JSON',
		success:function(data){
			var form_id = 'contact-form';
			if (!data.ok) { 
				// Invalid
				var errors = data.errors;
				//reset error class in form as they will need to be re validated
				remove_error_class(form_id);
				mark_errors(form_id,errors);
			}else{
				$('#contact-result').html('Your message was successfully sent.').removeClass('bg-danger').removeClass('text-danger').addClass('bg-success text-success').show();
				remove_error_class(form_id);
				$('#'+form_id)[0].reset();
			}
		}
	});
	
});

function mark_errors(form_id,errors){
	var msg = '';
	errors.forEach(function(e){
		$('#' + form_id).find('[name="' + e.field + '"]').parent().addClass('has-error');
		msg += e.msg+'<br>';
		$('#contact-result').html(msg).addClass('bg-danger text-danger').show();
	});	
}

function remove_error_class(form_id){
	$('#'+form_id+' input,#'+form_id+' textarea,#'+form_id+' select,#'+form_id+' date#'+form_id+' email').each(function(){
		$(this).parent().removeClass('has-error');
	});
}

$(function(){
	  $('select').select2();
});
</script>
