<div id="content" class="content-offset-top">
	<div class="secondary">
           
        <div id="banners" class="carousel slide" data-ride="carousel" data-interval="false">
            
            <!-- Wrapper for slides -->
            <div class="carousel-inner" role="listbox">
                <div class="item active">
                    <img src="<?=base_url();?>assets/img/secondary/contact-banner.jpg" alt="contact-banner.jpg">
                    
                    

                    <div class="carousel-caption">
                        <h1>ANY TIME ANY PLACE</h1>
                     	<!-- <h4>DOT DESIGN SPECIALISTS IN MARKETING AT RETAIL ANY TIME - ANY PLACE</h4> -->
                      <h4>We're always contactable and happy to help. Get in touch and we'll do great things together.</h4>
                        
                    </div>
                </div>
            </div>
    	</div>
        
        
        
        
        
        <div class="container sec-content">
        	<div class="sec-inner">
                <h5 class="hidden-xs">Contact Dot Design</h5>
                <h5 class="hidden-lg hidden-md hidden-sm">Contact</h5>
                
                <h2 class="hidden-xs">POINT OF PURCHASE <br>PRODUCT DESIGN SPECIALISTS</h2>
                <h2 class="hidden-lg hidden-md hidden-sm">POINT OF <br>PURCHASE PRODUCT <br>DESIGN SPECIALISTS</h2>
                <!--<p>
                    Dot Design have offices placed throughout the world offering truly global capabilities to deliver point of purchase solutions for any brand, any place. Contact our team in your local area or touch base via the form below.
                </p> -->
                <p>
                    We work with clients internationally and we're always close by. Contact our team in your local area or touch base via the form below.
                </p>
          	</div>
            
            <div class="sec-address">
            
            
                <div class="address">
                    <h6>DOT DESIGN GROUP - SYDNEY</h6>
                    <a target="_blank" href="http://maps.google.com/?q=54 KELLETT STREET, KINGS CROSS, NSW, 2011">
                      <p>
                        54 KELLETT STREET, <br>
                        KINGS CROSS NSW 2011
                      </p>
                    </a>
                    <ul class="fa-ul">
                      <li><i class="fa-li fa fa-phone"></i> 61 02 9361 3655</li>
                      <li><i class="fa-li fa fa-print"></i> 61 02 9361 3855</li>
                      <li><a href="mailto:sydney@dotdesign.com.au"><i class="fa-li fa fa-envelope"></i> sydney@dotdesign.com.au</a></li>
                    </ul>
                </div><!--address-->
                
                <div class="address">
                    <h6>DOT DESIGN GROUP - MELBOURNE</h6>
                    <a target="_blank" href="http://maps.google.com/?q=230 LENNOX STREET, RICHMOND, VIC, 3121">
                      <p>
                        230 LENNOX STREET<br>
                        RICHMOND VIC 3121
                    </p>
                    </a>
                    <ul class="fa-ul">
                      <li><i class="fa-li fa fa-phone"></i> 61 03 9421 5551</li>
                      <li><i class="fa-li fa fa-print"></i> 61 02 9361 3855</li>
                      <li><a href="mailto:melbourne@dotdesign.com.au"><i class="fa-li fa fa-envelope"></i> melbourne@dotdesign.com.au</a></li>
                    </ul>
                </div><!--address-->
                
                <div class="address">
                    <h6>DOT DESIGN GROUP - HONG KONG</h6>
                    <a target="_blank" href="http://maps.google.com/?q=158 Connaught Rd, Central, HK">
                      <p>
                        5F, 158 Connaught Rd, Central, HK
                      </p>
                    </a>
                    <ul class="fa-ul">
                      <li><i class="fa-li fa fa-phone"></i> 852 2337 2411</li>
                      <li><a href="mailto:china@dotdesign.com.au"><i class="fa-li fa fa-envelope"></i> china@dotdesign.com.au</a></li>
                    </ul>
                </div><!--address--> 
                
                <div class="address">
                    <h6>DOT DESIGN GROUP - USA</h6>
                    <a target="_blank" href="http://maps.google.com/?q=139 West Monroe, Kirkwood, MO, 63122">
                      <p>
                        139 West Monroe <br />
                        Kirkwood, MO 63122
                      </p>
                    </a>
                    <ul class="fa-ul">
                      <li><i class="fa-li fa fa-phone"></i> 888-417-2457</li>
                      <li><i class="fa-li fa fa-mobile-phone"></i> 314-852-6598</li>
                      <li><a href="mailto:usa@dotdesign.com.au"><i class="fa-li fa fa-envelope"></i> usa@dotdesign.com.au</a></li>
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
	
	flare_app.submit_form('contact-form','<?=base_url();?>content/send_contact','contact-result',function(sumbit_success){
		$('#contact-result').html('Your message was successfully sent.').show();	
	});
	
});



$(function(){
	 $('select').select2(); 
});
</script>
