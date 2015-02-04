<?php
	$nav_arr = $this->nav_model->get_nav();
?>

<footer>
	<div id="footer">
    	<div id="goto-top"><i class="fa fa-angle-up"></i></div>
        
        
    	<div class="container">
        	<h6>join us on</h6>
        	<ul class="social-links">
            	<li><a href="<?=PINTEREST;?>" target="_blank"><i class="fa fa-pinterest"></i></a></li>
                <li><a href="<?=TWITTER;?>" target="_blank"><i class="fa fa-twitter"></i></a></li>
                <li><a href="<?=INSTAGRAM;?>" target="_blank"><i class="fa fa-instagram"></i></a></li>
            </ul>
            
            <hr>
            
            <ul class="quick-links">
            	<?php foreach($nav_arr as $nav){ ?>
                	<li><a href="<?=base_url() . $nav['uri'];?>"><?=$nav['label'];?></a></li>
                <?php } ?>
            </ul>   
            
            <p class="disclaimer">
            	&copy; Dot Design Group PTY LTD, 54 Kellett Street, Kings Cross NSW 2014 Australia
            </p>   
    	</div>
	</div>
</footer>