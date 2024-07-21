<?php
/**
 * Open Source Social Network
 *
 * @package Open Source Social Network
 * @author    Open Social Website Core Team <info@softlab24.com>
 * @copyright 2014-2017 SOFTLAB24 LIMITED
 * @license   Open Source Social Network License (OSSN LICENSE)  http://www.opensource-socialnetwork.org/licence
 * @link      https://www.opensource-socialnetwork.org/
 */
?>

<div class="row">
	<div class="col-md-5">
         <label><?php echo ossn_print('username'); ?> </label>
   		 <input type="text" name="username"/>
         <a href="<?php echo ossn_site_url('resetlogin'); ?>"><?php echo ossn_print('reset:password'); ?></a>
    </div>
	<div class="col-md-5">
    <label> <?php echo ossn_print('password'); ?> </label>
    <input type="password" name="password"/>
     <?php if(com_is_active('RememberLogin')){ ?>
        		 <div class="checkbox-block"><input id="kmli" type="checkbox"  class="ossn-checkbox-input" name="rememberlogin"/> <span><?php echo ossn_print('com:rememberlogin:keep:login'); ?></span></div>
      <?php } ?>    
    </div>    
    <div class="col-md-2">
    	<input type="submit" value="<?php echo ossn_print('site:login');?>" class="btn btn-primary"/>
    </div>
</div>

