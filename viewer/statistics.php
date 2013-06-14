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
        <div class="simplebox">
			<h1 class="titleh">Daily Statistics</h1>
                <div class="content">
                    <!-- start statistics -->
                    <ul class="statistics">
                        <li>Total Posts	<p>	<span class="green"><b>6</b> unapproved</span> - <span class="blue"><b>652</b> approved</span>	</p>	</li>
                        <li>Tags	<p>	<span class="red"><b>965</b> active tags</span></p>	</li>
                        <li>Comments	<p><span class="blue">265 approved</span> - <span class="red">6 spam</span>	</p>	</li>
                        <li>Plugins	<p>	<span class="blue"><b>9</b> active</span> - <span class="red"><b>2</b> inactive</span></p>	</li>
                        <li>Last Updates	<p>	9 Sep 2011	</p>	</li>
                    </ul>
                    <!-- end statistics -->
                </div>
		</div>
              
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
