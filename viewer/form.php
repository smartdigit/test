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
			<h1 class="titleh">Form Elements</h1>
            <div class="content">
                <form id="form12" name="form1" method="post" action="">
					<div class="form-line">
						<label class="st-label">Your Name</label>
						<input type="text" name="textfield" id="textfield1"  style=" width:80%;" />
                    </div>	
                    <div class="form-line">
						<label class="st-label">Account ID</label>
						<input type="text" name="textfield" id="textfield2"  style=" width:50%;" />
                    </div>	
                    <div class="form-line">
						<label class="st-label">Gender</label>
						<label><input type="radio" name="radio" id="radio1" value="radio" /> Male</label>
						<label><input type="radio" name="radio" id="radio2" value="radio" /> Female</label>
                    </div>	
                    <div class="form-line">
						<label class="st-label">Languages</label>
						<label><input type="checkbox" name="checkbox" id="checkbox1" />English</label>
						<label><input type="checkbox" name="checkbox" id="checkbox2" />French</label>
						<label><input type="checkbox" name="checkbox" id="checkbox3" />Italian</label>
                    </div>
                    <div class="form-line">
						<label class="st-label">Country</label>
						<select name="select" id="select">
							<option>Select one ...</option>
							<option>United Kingdom</option>
							<option>Spain</option>
							<option>Turkey</option>
							<option>France</option>
							<option>Germany</option>
							<option>Sweden</option>
							<option>Polland</option>
							<option>Ireland</option>
							<option>United States</option>
						</select>
                    </div>	
                    <div class="form-line">
						<label class="st-label">Big Textarea</label>
						<textarea name="textfield" id="textfield12" style=" width:80%;" rows="3" cols="3"></textarea>
                    </div>
                    <div class="form-line">
						<label class="st-label">Normal Textarea</label>
						<textarea name="textfield" id="textfield13" style="width:50%;" rows="3" cols="3"></textarea>
                    </div>
                    
                    <div class="form-line">
						<input type="submit" name="button" id="button" value="Submit" class="submit-button" />
						<input type="submit" name="button" id="button2" value="Reset" class="reset-button" />
                    </div>
                </form>      
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
