<?php
/**
 * @copyright	Copyright (C) 2005 - 2008 Open Source Matters. All rights reserved.
 * @license		GNU/GPL, see LICENSE.php
 * Joomla! is free software. This version may have been modified pursuant
 * to the GNU General Public License, and as distributed it includes or
 * is derivative of works licensed under the GNU General Public License or
 * other free or open source software licenses.
 * See COPYRIGHT.php for copyright notices and details.
 */

// no direct access
defined( '_JEXEC' ) or die( 'Restricted access' );

$menu = &JSite::getMenu();
$active = $menu->getActive();
//$alias = explode('-',$active->alias);
$body_id = " id='".$active->alias."'";

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="<?php echo $this->language; ?>" lang="<?php echo $this->language; ?>" >
<head>
<jdoc:include type="head" />

<link rel="stylesheet" href="<?php echo $this->baseurl ?>/templates/system/css/system.css" type="text/css" />
<link rel="stylesheet" href="<?php echo $this->baseurl ?>/templates/system/css/general.css" type="text/css" />

<!-- These are the main stylesheets -->
<link rel="stylesheet" type="text/css" href="<?php echo $this->baseurl ?>/templates/apexappraisal/css/template_joomla.css" />
<link rel="stylesheet" type="text/css" href="<?php echo $this->baseurl ?>/templates/apexappraisal/css/template_global.css" />
<link rel="stylesheet" type="text/css" href="<?php echo $this->baseurl ?>/templates/apexappraisal/css/template_menu.css" />
<link rel="stylesheet" type="text/css" href="<?php echo $this->baseurl ?>/templates/apexappraisal/css/template_home.css" />
<link rel="stylesheet" type="text/css" href="<?php echo $this->baseurl ?>/templates/apexappraisal/css/template_pages.css" />
<link rel="stylesheet" type="text/css" href="<?php echo $this->baseurl ?>/templates/apexappraisal/css/print.css" media="print" />

<!--[if IE 6]>
<style>
.about_pic_list {
margin-left:140px;
}
</style>
<![endif]-->
<!--[if IE 7]>
<style>
.about_pic_list {
margin-left:140px;
}
</style>
<![endif]-->

</head>
<body<?=$body_id;?>>
<div id="center">
<div id="main">

	<div id="header_container">
	
		<div id="header_top">
			<div id="header_logo" onclick="window.location='<?php echo $this->baseurl ?>'" title="Apex Appraisal Services, LLC"></div><!-- end header_logo -->
		</div><!-- end header_top -->		
		<div class="clr"></div>		
		<div id="header_bottom">
			<div id="header_menu"><jdoc:include type="modules" name="menu" /></div><!-- end header_menu div -->
		</div><!-- end header_bottom -->
    
	</div><!-- end header_container div -->
	
		<div id="main_bg">
		
			<div id="main_left">
        <div id="left_container">
          <div id="client_login"><h3>Client Login</h3><jdoc:include type="modules" name="clientlogin" /></div><!-- end client_login -->
          <div class="clr"></div>
          <div id="appraisal">
          	<div id="appraisal_button"><jdoc:include type="modules" name="appraisal" /></div><!-- end appraisal_button -->
          </div><!-- end appraisal -->		
          <div class="clr"></div>
          <div id="testimonial">
          	<div id="testimonial_text"><jdoc:include type="modules" name="testimonial" /></div><!-- end testimonial_text -->
          </div><!-- end testimonial -->
        </div><!-- end left_container div -->	
			</div><!-- end main_left div -->
			
			<div id="main_content">	
      	<div id="breadcrumb"><jdoc:include type="modules" name="breadcrumb" /></div><!-- end breadcrumb -->	
        <div class="clr"></div>		
				<div id="main_text"><jdoc:include type="message" /><jdoc:include type="component" /></div><!-- end main_content div -->
			</div><!-- end main_content_bg div -->
			
			<div class="clr"></div>
			<div id="footer">
				<div id="footer_content">
					<div id="footer_left"><jdoc:include type="modules" name="footermenu" /></div><!-- end footer_left -->
					<div id="footer_right"><div id="footer_right_text">Apex Appraisal Services, LLC &copy; <?php echo date("Y") ?></div><!-- end footer_right_text --></div><!-- end footer_right -->
				</div><!-- end footer_content div -->
			</div><!-- end footer div -->
			
		</div><!-- end main_bg div -->
		
	</div><!-- end main div -->	

</div><!-- end center div -->
<script type="text/javascript" language="javascript" src="<?php echo $this->baseurl ?>/templates/apexappraisal/javascript/col_exp.js"></script>
<script type="text/javascript">
var gaJsHost = (("https:" == document.location.protocol) ? "https://ssl." : "http://www.");
document.write(unescape("%3Cscript src='" + gaJsHost + "google-analytics.com/ga.js' type='text/javascript'%3E%3C/script%3E"));
</script>
<script type="text/javascript">
try {
var pageTracker = _gat._getTracker("UA-10513213-33");
pageTracker._trackPageview();
} catch(err) {}</script>
</body>
</html>