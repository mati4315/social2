<div class="sidemenu d-none d-sm-block">
 <?php
          			  if (ossn_is_hook('newsfeed', "sidebar:left")) {
                			$newsfeed_left = ossn_call_hook('newsfeed', "sidebar:left", NULL, array());
               				 echo implode('', $newsfeed_left);
            		}
           		 ?>                
</div>

<div class="card card-spacing d-block d-sm-none" style="margin-bottom:10px;">
      <div class="card-header">
          <a href="#collapse-menuside" data-bs-toggle="collapse">
		   <i class="fas fa-bars"></i> Menu <i class="fa fa-sort-down"></i>
          </a>
      </div>
      <div id="collapse-menuside" class="collapse">
        	<div class="card-body">
			
	 				<?php
          			  if (ossn_is_hook('newsfeed', "sidebar:left")) {
                			$newsfeed_left = ossn_call_hook('newsfeed', "sidebar:left", NULL, array());
               				 echo implode('', $newsfeed_left);
            		}
           		 ?>      		
			            
        	</div>
      </div>
</div>