<div id="content" class="content-offset-top">
	<div class="secondary">
           
        <div id="banners" class="carousel slide" data-ride="carousel" data-interval="false">
            
            <!-- Wrapper for slides -->
            <div class="carousel-inner" role="listbox">
                <div class="item active">
                    <img src="<?=base_url();?>assets/img/work/featured/carltron-draught1.jpg" alt="work-banner.jpg">
                    <div class="carousel-caption">
                        <h1>Carlton Draught</h1>
                     	<h4>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed aliquam eleifend. Etiam scelerisque odio dui, eu efficitur.</h4>
                        <a href="<?=base_url()?>work/carltron-draught" class="btn btn-app">read more</a>
                    </div>
                </div>
                
                <div class="item">
                    <img src="<?=base_url();?>assets/img/work/featured/carltron-draught2.jpg" alt="work-banner.jpg">
                    <div class="carousel-caption">
                        <h1>Carlton Draught</h1>
                     	<h4>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed aliquam eleifend. Etiam scelerisque odio dui, eu efficitur.</h4>
                        <a href="<?=base_url()?>work/carltron-draught" class="btn btn-app">read more</a>
                    </div>
                </div>
            </div>
            
            <!-- Controls -->
            <a class="left carousel-control" href="#banners" role="button" data-slide="prev">
                <span class="slide-btn"><i class="fa fa-angle-left"></i></span>
            </a>
            <a class="right carousel-control" href="#banners" role="button" data-slide="next">
                <span class="slide-btn"><i class="fa fa-angle-right"></i></span>
            </a>
        
    	</div>
        
        
        
        
        
        <div class="container sec-content">
            <div class="sec-inner">
                <h5>Our Work</h5>
                <h2>DOT DESIGN HAS EXPERIANCE WORKING ACROSS ALL SECTORS OF RETAIL</h2>
                <p>
                    Click the below images to read the case study and view a gallery of the products we have created for some of our clients
                </p>
            </div>
        </div>
        

   		<div class="work-colage">
		<?php for($i=1;$i<=12;$i++){ ?>
            <a href="<?=$i == 1 ? base_url() . 'our-work/carltron-draught' : 'javascript:void(0);';?>">
                <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12 colage-box">
                    <img src="<?=base_url();?>assets/img/work/work<?=$i;?>.jpg">
                    <div class="caption">
                        <span class="name"><?=$i == 1 ? 'Carlton Draught' : 'Lorem Ipsum';?></span>
                        <span class="info"><?=$i == 1 ? 'St Kilda Road, Melbourne' : 'Sed aliquam eleifend';?></span>
                    </div>
                </div>
            </a>
        <?php } ?>
     	</div>     
        
    </div> 
    
</div>

