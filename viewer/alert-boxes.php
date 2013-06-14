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
            <!-- start error page -->
            <div class="simplebox">
            	<h1 class="titleh">Alert Boxes</h1>
                <div class="content">		
					<div class="albox warningbox">
                        <b>Warning :</b> This is a warning placed text message.
                        <a href="#" class="close tips" title="close">close</a>
                    </div>
                            	

                    <div class="albox succesbox">
                        <b>Succes :</b> This is a succes  placed text message. 
                        <a href="#" class="close tips" title="close">close</a>
                    </div>
                                
					<div class="albox informationbox">
                        <b>Information :</b> This is an information  placed text message. 
                        <a href="#" class="close tips" title="close">close</a>
                    </div>
                                
					<div class="albox errorbox">
                        <b>Error :</b> This is an error  placed text message. 
                        <a href="#" class="close tips" title="close">close</a>
                    </div>
            </div>

            <!-- end error page -->

            <!-- start top button -->
            <div class="topbutton"><a href="#header"><span>Top</span></a></div>
            <!-- end top button -->
           
            <!-- start footer -->
            <? include('footer.php');?>
            <!-- end footer -->

		<div class="clear"></div>
	</div>
    <!-- end page -->
</body>
</html>
