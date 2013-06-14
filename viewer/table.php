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
            <h1 class="titleh">Table</h1>
            <div class="content">
				<table class="tabledata"> 
                    <thead>
                        <tr> 
                            <th>Last Name</th> 
                            <th>First Name</th> 
                            <th>Due</th> 
                        </tr> 
                    </thead> 
					<tbody> 
                        <tr> 
                            <td>Smith</td> 
                            <td>John</td> 
                            <td>$50.00</td> 
                        </tr> 
						<tr> 
                            <td>Bach</td> 
                            <td>Frank</td> 
                            <td>$545.00</td> 
                        </tr> 
                        <tr> 
                            <td>Doe</td> 
                            <td>Jason</td> 
                            <td>$12.00</td> 
                        </tr> 
						<tr> 
                            <td>Conway</td> 
                            <td>Tim</td> 
                            <td>$150.00</td> 
                        </tr> 
                        <tr> 
                            <td>Burak</td> 
                            <td>Vanli</td> 
                            <td>$533.00</td> 
                        </tr> 
						<tr> 
                            <td>Doe</td> 
                            <td>Jason</td> 
                            <td>$30.00</td> 
                        </tr> 
						<tr> 
                            <td>Derp</td> 
                            <td>Derpie</td> 
                            <td>$390.00</td> 
                        </tr> 
						<tr> 
                            <td>Matt</td> 
                            <td>Daeson</td> 
                            <td>$120.00</td> 
                        </tr> 
                        <tr> 
                            <td>Conway</td> 
                            <td>Tim</td> 
                            <td>$20.00</td> 
                        </tr> 
						<tr> 
                            <td>Conway</td> 
                            <td>Tim</td> 
                            <td>$10.00</td> 
                        </tr> 
                    </tbody> 
                </table>

                            

                    
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
