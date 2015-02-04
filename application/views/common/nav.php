<?php
	$cur_page = $this->uri->segment(1);
	
	$nav_arr = $this->nav_model->get_nav();
?>
<!-- Modal -->
<div class="modal fade nav-modal" id="navModal" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      
      <div id="nav" class="modal-body">
        <div id="nav-body" class="nav-body" >
        	<ul class="nav-ul">
            	<?php foreach($nav_arr as $nav){ ?>
					<li><a <?=$cur_page == $nav['uri'] ? 'class="active"' : '';?>href="<?=base_url().$nav['uri'];?>"><?=$nav['label'];?></a></li>
				<?php } ?>
            </ul>
        	            
            <hr>
			
            <div class="address">
            	<h6>DOT DESIGN GROUP - SYDNEY</h6>
  				<p>
                    54 KELLETT STREET, <br>
                    KINGS CROSS NSW 2011
                </p>
				<ul class="fa-ul">
                  <li><i class="fa-li fa fa-phone"></i> 61 02 9361 3655</li>
                  <li><i class="fa-li fa fa-print"></i> 61 02 9361 3855</li>
                  <li><i class="fa-li fa fa-envelope"></i> sydney@dotdesign.com.au</li>
                </ul>
			</div><!--address-->
            
            <div class="address">
            	<h6>DOT DESIGN GROUP - MELBOURNE</h6>
  				<p>
                   	230 LENNOX STREET<br>
				   	RICHMOND VIC 3121
                </p>
				<ul class="fa-ul">
                  <li><i class="fa-li fa fa-phone"></i> 61 03 9421 5551</li>
                  <li><i class="fa-li fa fa-print"></i> 61 02 9361 3855</li>
                  <li><i class="fa-li fa fa-envelope"></i> melbourne@dotdesign.com.au</li>
                </ul>
			</div><!--address-->
      		
            <div class="address last">
            	<h6>DOT DESIGN GROUP - CHINA</h6>
                <p>
                	2916, TOWER A, NEW GENERATION<br>
                    INTERNATIONAL APARTMENT NANHIA<br>
                    DADAO NANSHAN DISTRICT SHENZHEN
                </p>
                <ul class="fa-ul">
                	<li><i class="fa-li fa fa-envelope"></i> china@dotdesign.com.au</li>
                </ul>
            </div><!--address-->  

			<hr>
            
            <div class="subscribe">
                <h6>KEEP UP WITH DOT DESIGN</h6>
                
                <div class="form-alt">
                    <div class="input-group">
                      <input type="text" class="form-control" placeholder="YOUR EMAIL">
                      <span class="input-group-addon"><i class="fa fa-thumbs-o-up"></i></span>
                    </div>
                </div>
            </div>

        </div>
      </div><!--modal-body-->
      
    </div>
  </div>
</div>