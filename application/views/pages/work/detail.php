<div id="content">
		
        <?php 
        $newslug = $slug . ".php";

        include($newslug);
        ?>

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