<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<? include('head.php'); ?> 
	</head>
	
<? include('model/dbConnection.php'); ?>    
    
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
			<h1 class="titleh">Items</h1>
            <div class="content">
                <form id="form12" name="form1" method="post" action="?pg=items">
					<? 
					$query = "SELECT item.ItemId, itemnames.Description
								FROM item 
								INNER JOIN itemnames ON itemnames.ItemId=item.ItemId AND Itemnames.LanguageId='ENG'
								WHERE item.ItemId='".@$_POST['ItemID']."'";
					$results = $db->query($query);
					$row = $results->fetchArray();
					if(count($row)>0){
					?>
					<div class="form-line">
						<label>Item <input type="text" name="ItemID" id="ItemID" style=" width:80%;" value="<? echo($row['ItemId']); ?>" /></label>
                    </div>
                    <div class="form-line">
						<label class="st-label">Description</label>
						<textarea name="Description" id="Description" style="width:80%;" rows="3" cols="3"><? echo($row['Description']); ?></textarea>
                    </div>
                    <div class="form-line">
						<label>Prop1 <input type="text" name="textfield3" id="textfield3"  style=" width:50%;" /></label>
                    </div>	
                    <div class="form-line">
						<label>Price/Coust <input type="text" name="textfield4" id="textfield4"  style=" width:25%;" /></label>
                    </div>
                    <div class="form-line">
						<label>Price With VAT <input type="text" name="textfield5" id="textfield5"  style=" width:25%;" /></label>
                    </div>
                    <div class="form-line">
						<label>Price Without VAT <input type="text" name="textfield6" id="textfield6"  style=" width:25%;" /></label>
                    </div>
                    <div class="form-line">
						<label>P Line <input type="text" name="textfield7" id="textfield7"  style=" width:10%;" /></label>
                    </div>
                    <div class="form-line">
						<label>Price <input type="text" name="textfield8" id="textfield8"  style=" width:25%;" /></label>
                    </div>
                    <div class="form-line">
						<label>Price with VAT <input type="text" name="textfield9" id="textfield9"  style=" width:25%;" /></label>
                    </div>
                    <div class="form-line">
						<label><input type="checkbox"  name="marginBox" id="marginBox" onclick=" if(document.getElementById('marginBox').checked){ document.getElementById('margin').style.display='';
						}else{
							document.getElementById('margin').style.display='none';	
						}" value="1"/>Margin</label> <input style="display:none" type="text" name="textfield10" id="margin"  style=" width:25%;" />
				
                    </div>					
                    <div class="form-line">
						<label><input type="submit" class="submit-buton" value="SEARCH" style=" width:25%;" /></label>
                    </div>
                    <? } else { ?>
					<div class="form-line">
						<label>Item <input type="text" name="ItemID" id="ItemID" style=" width:80%;" /></label>
                    </div>
                    <div class="form-line">
						<label class="st-label">Description</label>
						<textarea name="Description" id="Description" style="width:80%;" rows="3" cols="3"></textarea>
                    </div>
                    <div class="form-line">
						<label>Prop1 <input type="text" name="textfield3" id="textfield3"  style=" width:50%;" /></label>
                    </div>	
                    <div class="form-line">
						<label>Price/Coust <input type="text" name="textfield4" id="textfield4"  style=" width:25%;" /></label>
                    </div>
                    <div class="form-line">
						<label>Price With VAT <input type="text" name="textfield5" id="textfield5"  style=" width:25%;" /></label>
                    </div>
                    <div class="form-line">
						<label>Price Without VAT <input type="text" name="textfield6" id="textfield6"  style=" width:25%;" /></label>
                    </div>
                    <div class="form-line">
						<label>P Line <input type="text" name="textfield7" id="textfield7"  style=" width:10%;" /></label>
                    </div>
                    <div class="form-line">
						<label>Price <input type="text" name="textfield8" id="textfield8"  style=" width:25%;" /></label>
                    </div>
                    <div class="form-line">
						<label>Price with VAT <input type="text" name="textfield9" id="textfield9"  style=" width:25%;" /></label>
                    </div>
                    <div class="form-line">
						<label><input type="checkbox"  name="marginBox" id="marginBox" onclick=" if(document.getElementById('marginBox').checked){ document.getElementById('margin').style.display='';
						}else{
							document.getElementById('margin').style.display='none';	
						}" value="1"/>Margin</label> <input style="display:none" type="text" name="textfield10" id="margin"  style=" width:25%;" />
				
                    </div>				
                    <div class="form-line">
						<label><input type="submit" class="submit-buton" value="SEARCH" style=" width:25%;" /></label>
                    </div>
					<? } ?>
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
