<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<? include('head.php'); ?>
</head>
<body>
	<!-- start header -->
    <? include('header.php'); ?>
    <!-- end header -->
    <!-- start page -->
    <div class="page">
        <div class="simplebox">
            <h1 class="titleh">Login</h1>
			<div class="content">
                <form id="form1" name="form1" method="post" action="?pg=main">	
                    <div class="form-line">
						<label class="st-label">Username</label>
						<input type="text" name="textfield" id="textfield"  style=" width:80%;" value="admin" />
                    </div>	
                    <div class="form-line">
						<label class="st-label">Password</label>
						<input type="password" name="textfield" id="textfield2"  style=" width:80%;" value="password"/>
                    </div>
                    <div class="form-line">
						<input type="submit" name="button" id="button" value="Login" class="submit-button" />
                    </div>
                </form>
                  
            </div>
		</div>
        <!-- start footer -->
        <? include('footer.php');?>
        <!-- end footer -->
		<div class="clear"></div>
    </div>
    <!-- end page -->
</body>
</html>
