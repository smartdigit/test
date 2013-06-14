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
			<h1 class="titleh">SYNC</h1>
            <div class="content">
                <form id="form12" name="form1" method="post" target="_blanc" action="model/sync.php">
					<div class="form-line">
						<label><input type="checkbox" name="checkbox1" id="checkbox1" />Import Prices</label>
                    </div>
                    <div class="form-line">
						<label><input type="checkbox" name="checkbox2" id="checkbox2" />Import Stock</label>
                    </div>
                    
                    <div class="form-line">
						<label>Price Line ID <input type="text" name="textfield1" id="textfield1"  style=" width:25%;" /></label>
                    </div>
                     <div class="form-line">
						<label>NE NUM <input type="text" name="textfield2" id="textfield2"  style=" width:25%;" /></label>
                    </div>
                     <div class="form-line">
						<label>Terminal Name <input type="text" name="textfield3" id="textfield3"  style=" width:25%;" /></label>
                    </div>
                     <div class="form-line">
						<label class="st-label"><center>Warehouse</center></label>
						<select name="select1" id="select1">
							<option>MUK 1</option>
							<option>MUK 2</option>
							<option>MUK 3</option>
							<option>MUK 4</option>
							<option>MUK 5</option>
							<option>MUK 6</option>
							<option>MUK 7</option>
							<option>MUK 8</option>
							<option>Other</option>
						</select>
                    </div>	
                    <div class="form-line">
						<label><input type="checkbox" name="checkbox3" id="checkbox3" />TXT TRANSFER</label>
                    </div>
                    <div class="form-line">
						<label><input type="checkbox" name="checkbox4" id="checkbox4" />NE TRANSFER(INTERF)</label>
                    </div>
						<label><input type="submit" class="submit-button" value="Syncronyse"/>     </label>
                       
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
