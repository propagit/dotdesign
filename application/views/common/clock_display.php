<?php
	$cities = $this->clock_model->get_cities_offset();
?>

<div class="city-time-box" id="time-sydney">
    <div class="city-time digital">
        <span class="hr">0:</span><span class="minute">00</span>
    </div>

    <span class="city">Sydney</span>
</div>

<div class="city-time-box" id="time-china">
    <div class="city-time digital">
        <span class="hr">0:</span><span class="minute">00</span>
    </div>
    <span class="city">China</span>
</div>

<div class="city-time-box" id="time-stlouis">
    <div class="city-time digital">
        <span class="hr">0:</span><span class="minute">00</span>
    </div>
    <span class="city">St Louis</span>
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
