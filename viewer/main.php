<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<? include('head.php'); ?> 
</head>
<body>
    <!-- start header -->
	<? include('header.php'); ?>
    <!-- end header -->
    
    <!-- start searchbox -->
    <? include('searchbox.php');?>
    <!-- end searchbox -->
    
    <!-- start page -->
    <div class="page">
    	<!-- start profile box -->
        <div class="profilebox">
            <img src="img/avatar.png" width="19" height="20" alt="avatar" class="avatar"/> Welcome <b>Administrator</b>
            <a href="#" class="logout">logout</a>
            <div class="clear"></div>
        </div>
        <!-- end profile box -->
        <!-- start menu -->
        <ul id="menu">
        	<li><a href="?pg=items"><img src="img/icons/blocks.png" width="" height="" alt"icon" class="m-icon" /><b>Items</b></a></li>
            <li><a href="?pg=settings"><img src="img/icons/cog.png" width="" height="" alt"icon" class="m-icon" /><b>Settings</b></a></li>
        	<li><a href="?pg=articles"><img src="img/icons/files.png" width="21" height="21" alt="icon" class="m-icon"/><b>Articles</b></a></li>
            <li><a href="?pg=form"><img src="img/icons/bubble.png" width="29" height="21" alt="icon" class="m-icon"/><b>Form Elements</b></a></li>
   	        <li><a href="?pg=statistics"><img src="img/icons/graph.png" width="24" height="21" alt="icon" class="m-icon"/><b>Daily Statistics <span>9</span> </b></a></li>
            <li><a href="?pg=alert-boxes"><img src="img/icons/alert.png" width="25" height="21" alt="icon" class="m-icon"/><b>Alert Boxes <span class="red">15</span> </b></a></li>
   	        <li><a href="?pg=typo"><img src="img/icons/personal-folder.png" width="29" height="21" alt="icon" class="m-icon"/><b>Typography</b></a></li>
            <li><a href="?pg=gallery"><img src="img/icons/photo-gallery.png" width="29" height="21" alt="icon" class="m-icon"/><b>Photo Gallery  <span>93</span> </b></a></li>
            <li><a href="?pg=table"><img src="img/icons/blocks.png" width="26" height="21" alt="icon" class="m-icon"/><b>Table</b></a></li>
            <li><a href="?pg=simple-page"><img src="img/icons/page.png" width="26" height="21" alt="icon" class="m-icon"/><b>Simple Page</b></a></li>
            <li><a href="?pg=error-page"><img src="img/icons/error.png" width="26" height="21" alt="icon" class="m-icon"/><b>Error Page  <span class="red">1</span></b></a></li>
        </ul>
        <!-- end menu -->
 
        <!-- start top button -->
        <div class="topbutton"><a href="#"><span>Top</span></a></div>
        <!-- end top button -->

        <!-- start footer -->
        <? include ('footer.php');?>
        <!-- end footer -->
    	<div class="clear"></div>
    </div>
    <!-- end page -->
</body>
</html>
