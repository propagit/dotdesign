<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package Inkness
 */
?>
	
    </div><!-- #content -->
    
    <?php echo file_get_contents(base_url() . 'wp_content/get_footer'); ?>
	

<?php wp_footer(); ?>
<script>
jQuery(function(){
		jQuery('#navModal').on('shown.bs.modal', function () {
			jQuery('#nav-toggle .fa').slideToggle(200);		 	
		});
		jQuery('#navModal').on('hidden.bs.modal', function () {
			jQuery('#nav-toggle .fa').slideToggle(200);	
		});
		
		jQuery('#goto-top').click(function(){
			jQuery('html, body').animate({ scrollTop:0},300);
	 	}); 
	 
		
		 // to display the goto top button
		 jQuery(window).scroll(function() {
			// use this when the goto top btn is on the lower right hand corner
			// check if scrolling has stopped, then perform scroll position check and fire animate
			// if scrolling check is not done the scroll position check will keep firing 
			// and the animate will mis fire giving buggy result
			/*clearTimeout($.data(this, 'scrollTimer')); 
			$.data(this, 'scrollTimer', setTimeout(function() {
				var scroll_top = $(document).scrollTop(); 
				if(scroll_top >= 200){
					$('#goto-top').animate({bottom:"25px"},500);	
				}else{
					$('#goto-top').animate({bottom:"-43px"},500);			
				}
			}, 250));
			*/
			
			// when goto top btn is on the center
			// an offset value so that action is triggered 
			// after passing some distance from the footer
			var offset = 120; 
			
			var height = jQuery(window).height();
			var scrollTop = jQuery(window).scrollTop();
			var obj = jQuery("#footer")
			var pos = obj.position();
			if (height + scrollTop - offset > pos.top) {
			   jQuery('#goto-top').slideDown();
			}
			else {
			   jQuery('#goto-top').slideUp();
			}
	
		 });// scroll
});
</script>
</body>
</html>