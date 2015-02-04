<div id="content">
	<div class="secondary">
    	<div class="banner carousel">
        	<img src="<?=base_url();?>assets/img/secondary/about-banner.jpg" alt="about-banner.jpg">
            <div class="carousel-caption">
                <h1>Ensure you win retail</h1>
                <h4>DOT DESIGN GROUP  A SPECIALIST PRODUCT DEVELOPMENT RETAIL COMPANY.</h4>
            </div>
            <div class="city-time-box" id="time-stlouis">
            	<div class="city-time digital">
        			<span class="hr">0:</span><span class="minute">00</span>
   		 		</div>
               	<span class="city">St Louis</span>
            </div>
           
            <div class="city-time-box" id="time-china">
            	<div class="city-time digital">
        			<span class="hr">0:</span><span class="minute">00</span>
   		 		</div>
                <span class="city">China</span>
            </div>
            
            <div class="city-time-box" id="time-sydney">
            	<div class="city-time digital">
        			<span class="hr">0:</span><span class="minute">00</span>
   		 		</div>
                <span class="city">Sydney</span>
            </div>
        </div>
        
        <div class="container sec-content">
            <div class="sec-inner">
                <h5>About</h5>
                <h2>DRIVEN BY CREATIVITY, INSIGHTS AND UNDERPINNED BY METHODICAL PLANNING</h2>
                <p>
                    With over 14-years experience in Australia and around the world, we’ve partnered with clients in every consumer goods market and across a wide range of categories to ensure you have the confidence and assurance that together we can attract, engage and convert a browser into a shopper.<br><br>
    
                    Driven by creativity, insights and underpinned by methodical planning, Dot Design Group will excel and deliver above expectation. Working as a team with our clients we develop targeted briefs which we take forward through design, engineering, testing and implementation. We can work independently or with your trusted Above or Below the Line organisations who have proven their capabilities with expert field marketing.<br><br>
    
                    We deliver a wide range of product platforms enabling our valued clients to maximise and  leverage their sales in any given competitor environment. We challenge ourselves in every project brief to make sure your marketing strategy targets and reaches the shopper and deliver results at the point of sale.<br><br>			
                
                    Our primary goal; To ensure you win in retail.<br><br>
                </p>
            </div>
        </div>
        
    </div> 
</div>
<script src="<?=base_url();?>assets/js/jquery.rotate.js"></script>
<script src="<?=base_url();?>assets/js/jClocksGMT.js"></script>
<script>
$(function(){
	<?php foreach($cities as $key=>$val){?>
		// <?=$key?> time
		$("#time-<?=$key?>").jClocksGMT({offset: '<?=$val?>', analog: false, digital: true, hour24: true});
	<?php } ?>
});//ready
</script>
