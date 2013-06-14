<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<? include ('head.php'); ?>
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
			<h1 class="titleh">Error Page</h1>
            <div class="content">		
                <div class="error-page">
					<img src="img/error.png" width="62" height="62" alt="icon" />
                    <h3>Opps... This is title</h3>
                    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam..</p>
                    <div class="buttons"><a href="index.html" class="reset-button">Go Back</a></div>
                </div>
            </div>
        </div>
        <!-- end error page -->
        
		<!-- start top button -->
            <div class="topbutton"><a href="#header"><span>Top</span></a></div>
        <!-- end top button -->
        
		<!-- start footer -->
        <? include ('footer.php');?>
        <!-- end footer -->
		<div class="clear"></div>
    </div>
    <!-- end page -->
</body>
</html>
