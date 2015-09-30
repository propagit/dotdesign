<div id="content" class="content-offset-top">
	<div class="secondary">
           
        <div id="banners" class="carousel slide" data-ride="carousel" data-interval="false">
            
            <!-- Wrapper for slides -->
            <div class="carousel-inner" role="listbox">
                <div class="item active">
                    <img src="<?=base_url();?>assets/img/secondary/careers-banner.jpg" alt="contact-banner.jpg">
                    
                    
                    
                    
                    <div class="carousel-caption">
                        <h1>Got What It Takes</h1>
                     	<h4>Dot Design Group Is Always On The Lookout For Quality People With a Passion For Retail Markketing and Product Development</h4>
                    </div>
                    
                    
                </div>
            </div>
    	</div>
        
        
        
        
        
        <div class="container sec-content">
        	<div class="sec-inner">
                <h5>Careers</h5>
                <h2 class="hidden-xs">INTERESTED IN A CAREER IN RETAIL<br> MARKETING & PRODUCT DEVELOPMENT?</h2>
                <h2 class="hidden-lg hidden-md hidden-sm">INTERESTED IN A CAREER<br> IN RETAIL MARKETING & <br> PRODUCT DEVELOPMENT?</h2>
                <p>
                    Dot Design are always looking for motivated, creative thinkers to join our growing team. If you think you are suited please tell us a little about yourself and why you think you will be a great addition to the Dot Design Group team.<br><br>
                </p>
          	</div>
            
            
            
            <div class="sec-inner app-form">
                <form id="careers-form">
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
                        <textarea name="message" class="form-control" rows="5" placeholder="tell us about yourself"></textarea>
                     </div>
                     <div class="form-group">
                        <button id="send-msg" type="button" class="btn btn-app fw">Send</button>
                     </div>
                
                </form>
                <p id="careers-result" class="msg-box" style="display:none;">
                	
                </p>
         	</div>
        </div>

    </div> 
    
</div>

<script>
$('#send-msg').click(function(){
	$('#careers-result').hide();
	
	flare_app.submit_form('careers-form','<?=base_url();?>content/send_application','careers-result',function(sumbit_success){
		$('#careers-result').html('Your message was successfully sent.').show();	
	});
	
});



$(function(){
	 $('select').select2(); 
});
</script>



