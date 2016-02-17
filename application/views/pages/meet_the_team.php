<div id="content" class="content-offset-top">
	<div class="secondary">
           
        <div id="banners" class="carousel slide" data-ride="carousel" data-interval="false">
            
            <!-- Wrapper for slides -->
            <div class="carousel-inner" role="listbox">
                <div class="item active">
                    <img src="<?=base_url();?>assets/img/secondary/team-banner.jpg" alt="team-banner.jpg">
                    <div class="carousel-caption">
                        <!-- <h1>GOT WHAT IT TAKES</h1> -->
                        <h1>TEAMS MAKE IT HAPPEN</h1>
                     	<!-- <h4>THE DOT DESIGN TEAM IS BASED IN SYDNEY - MELBOURNE, USA & CHINA. WITH SPECIALISTS IN RETAIL, MARKETING, PRODUCT DESIGN AND MANUFACTURING </h4> -->
                        <h4>Dot Design has a talented team located in Sydney, Melbourne, USA & Hong Kong, with specialists in retail, marketing, product design and manufacturing </h4>
                    </div>
                </div>
            </div>

        
    	</div>

        <div class="container sec-content">
            <div class="sec-inner">
                <h5>Team</h5>
                <!-- <h2 class="hidden-xs">MEET SOME OF THE CORE DOT DESIGN TEAM <br>AND FIND OUT THEIR THOUGHTS ON RETAIL </h2> -->
                <h2>MEET SOME OF THE CORE DOT DESIGN TEAM </h2>
                <!-- <h2 class="hidden-lg hidden-md hidden-sm">MEET SOME OF THE <br>CORE DOT DESIGN TEAM <br>AND FIND OUT THEIR <br>THOUGHTS ON RETAIL </h2> -->
                <!--<p>
                    Click the profile image to connect with one of the team and read articles on the latest thoughts and trends in retail marketing and product development.
                </p> -->
            </div>
        </div>

   		<div class="work-colage">
		<?php foreach($staff as $s){ ?>
            <!-- <a href="<?=base_url();?>the-team/?p=8"> -->
            <a href="">
            <div class="col-lg-2 col-md-2 col-sm-2 col-xs-12 colage-box">
                <img src="<?=base_url();?>assets/img/the-team/<?=$s['image'];?>">
                <!--<div class="caption">
                	<span class="name teamspan"><?=$s['name'];?></span>
                   <!--  <span class="info teamspan"><?=$s['location'] . ' - ' . $s['role'];?></span> 
                </div>-->
            </div>
            </a>
        <?php } ?>
     	</div>     
        
    </div> 
    
</div>

