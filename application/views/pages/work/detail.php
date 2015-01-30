<div id="content">
		<div id="banners" class="carousel slide" data-ride="carousel" data-interval="false">
            <!-- Indicators -->
            <ol class="carousel-indicators">
                <li data-target="#banners" data-slide-to="0" class="active"></li>
                <li data-target="#banners" data-slide-to="1"></li>
            </ol>
            
            <!-- Wrapper for slides -->
            <div class="carousel-inner" role="listbox">
                <div class="item active">
                    <img src="<?=base_url();?>assets/img/work/gallery/victoria-bitter1.jpg">
                    <span class="title">Victoria Bitter</span>
                    <div class="description">
                    	<button type="button" class="btn btn-app btn-angle hide-desc"><i class="fa fa-angle-down"></i></button>
                    	<h1>Victoria Bitter</h1>
                        <p>
                        	Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent sagittis lorem tristique vehicula tempus. Sed eget suscipit turpis. Curabitur sed pretium neque. Sed ac dui est. Donec at viverra turpis, ut lacinia tortor. Vivamus in semper turpis. Morbi a nisi elit. Nullam feugiat odio ac ipsum sodales, id laoreet ex condimentum. Phasellus ut neque molestie, volutpat felis in, vulputate metus. 
                        </p>
                        <button type="button" class="btn btn-app btn-slide"><i class="fa fa-angle-left"></i> Prev</button>
                        <button type="button" class="btn btn-app btn-slide">Next <i class="fa fa-angle-right"></i></button>
                    </div>
                </div>
                
                <div class="item">
                    <img src="<?=base_url();?>assets/img/work/gallery/victoria-bitter2.jpg">
                    <span class="title">Victoria Bitter</span>
                    <div class="description">
                    	<button type="button" class="btn btn-app btn-angle hide-desc"><i class="fa fa-angle-down"></i></button>
                    	<h1>Victoria Bitter</h1>
                        <p>
                        	Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent sagittis lorem tristique vehicula tempus. Sed eget suscipit turpis. Curabitur sed pretium neque. Sed ac dui est. Donec at viverra turpis, ut lacinia tortor. Vivamus in semper turpis. Morbi a nisi elit. Nullam feugiat odio ac ipsum sodales, id laoreet ex condimentum. Phasellus ut neque molestie, volutpat felis in, vulputate metus. 
                        </p>
                        <button type="button" class="btn btn-app btn-slide"><i class="fa fa-angle-left"></i> Prev</button>
                        <button type="button" class="btn btn-app btn-slide">Next <i class="fa fa-angle-right"></i></button>
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
        	
            
            <button class="btn btn-white show-desc" type="button">Read Case Study</button>
    	</div>
</div>
<script>
$('.show-desc').click(function(){
	$(this).slideUp();
	$('.description').slideDown();
});

$('.hide-desc').click(function(){
	$('.description').slideUp();
	$('.show-desc').slideDown();
});

</script>