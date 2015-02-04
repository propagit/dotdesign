<div id="content" class="content-offset-top">
	<div class="secondary">
           
        <div id="banners" class="carousel slide" data-ride="carousel" data-interval="false">
            
            <!-- Wrapper for slides -->
            <div class="carousel-inner" role="listbox">
                <div class="item active">
                    <img src="<?=base_url();?>assets/img/work/featured/banner1.jpg" alt="work-banner.jpg">
                    <div class="carousel-caption">
                        <h1>victoria bitter</h1>
                     	<h4>DOT DESIGNED WHERE ASKED TO CREATE AN OLD FASHIONED BEER TAP  ... WITH <br>THE OBJECTIVE OF INTRUDCING THE CONSUMER TO THE NEW BRAND & LOGO</h4>
                        <button class="btn btn-app">read more</button>
                    </div>
                </div>
                
                <div class="item">
                    <img src="<?=base_url();?>assets/img/work/featured/banner2.jpg" alt="work-banner.jpg">
                    <div class="carousel-caption">
                        <h1>melbourne colage</h1>
                     	<h4>DOT DESIGNED WHERE ASKED TO CREATE AN OLD FASHIONED BEER TAP  ... WITH <br>THE OBJECTIVE OF INTRUDCING THE CONSUMER TO THE NEW BRAND & LOGO</h4>
                        <button class="btn btn-app">read more</button>
                    </div>
                </div>
                
                <div class="item">
                    <img src="<?=base_url();?>assets/img/work/featured/banner3.jpg" alt="work-banner.jpg">
                    <div class="carousel-caption">
                        <h1>Nescafe</h1>
                     	<h4>DOT DESIGNED WHERE ASKED TO CREATE AN OLD FASHIONED BEER TAP  ... WITH <br>THE OBJECTIVE OF INTRUDCING THE CONSUMER TO THE NEW BRAND & LOGO</h4>
                        <button class="btn btn-app">read more</button>
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
            <a href="<?=base_url();?>our-work/victoria-bitter">
                <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12 colage-box" data-toggle=".caption">
                    <img src="<?=base_url();?>assets/img/work/work<?=$i;?>.jpg">
                    <div class="caption">
                        <span class="name">Nescafe</span>
                        <span class="info">St Kilda Road, Melbourne</span>
                    </div>
                </div>
            </a>
        <?php } ?>
     	</div>     
        
    </div> 
    
</div>

