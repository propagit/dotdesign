<div id="content" class="content-offset-top">
	<div class="secondary">
           
        <div id="banners" class="carousel slide" data-ride="carousel" data-interval="false">
            
            <!-- Wrapper for slides -->
            <div class="carousel-inner" role="listbox">
                <div class="item active">
                    <img src="<?=base_url();?>assets/img/secondary/team-banner.jpg" alt="team-banner.jpg">
                    <div class="carousel-caption">
                        <h1>GOT WHAT IT TAKES</h1>
                     	<h4>THE DOT DESIGN TEAM IS BASED IN SYDNEY - MELBOURNE & CHINA. <br>WITH SPECIALISTS IN RETAIL, MARKETING, PRODUCT DESIGN AND MANUFACTURING </h4>
                    </div>
                </div>
            </div>

        
    	</div>
        
        
        
        
        
        <div class="container sec-content">
            <div class="sec-inner">
                <h5>Team</h5>
                <h2>MEET SOME OF THE CORE DOT DESIGN TEAM AND FIND OUT THEIR THOUGHTS ON RETAIL </h2>
                <p>
                    Click the profile image to connect with one of the team and read articles on the latest thoughts and trends in retail marketing and product development.
                </p>
            </div>
        </div>
        
        <?php 
			$staff_arr = array(
							array('image' => 'Karl.jpg','name' => 'Karl','location' => 'Melbourne' , 'role' => 'General Manager', 'uri' => ''),
							array('image' => 'Elkie.jpg', 'name' => 'Elkie','location' => 'Melbourne' , 'role' => 'General Manager', 'uri' => ''),
							array('image' => 'Mark.jpg', 'name' => 'Mark','location' => 'Melbourne' , 'role' => 'General Manager', 'uri' => ''),
							array('image' => 'Sandra.jpg', 'name' => 'Sandra','location' => 'Melbourne' , 'role' => 'General Manager', 'uri' => ''),
							array('image' => 'Sarah.jpg', 'name' => 'Sarah','location' => 'Melbourne' , 'role' => 'General Manager', 'uri' => ''),
							array('image' => 'Paris.jpg', 'name' => 'Paris','location' => 'Melbourne' , 'role' => 'General Manager', 'uri' => ''),
							array('image' => 'Miles.jpg', 'name' => 'Miles','location' => 'Melbourne' , 'role' => 'General Manager', 'uri' => ''),
							array('image' => 'Michael.jpg', 'name' => 'Michael','location' => 'Melbourne' , 'role' => 'General Manager', 'uri' => '')				
						);
		?>
        
        

   		<div class="work-colage">
		<?php foreach($staff_arr as $staff){ ?>
            <a href="<?=base_url();?>the-team/?=8">
            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12 colage-box" data-toggle=".caption">
                <img src="<?=base_url();?>assets/img/the-team/<?=$staff['image'];?>">
                <div class="caption">
                	<span class="name"><?=$staff['name'];?></span>
                    <span class="info"><?=$staff['location'] . $staff['role'];?></span>
                </div>
            </div>
            </a>
        <?php } ?>
     	</div>     
        
    </div> 
    
</div>

