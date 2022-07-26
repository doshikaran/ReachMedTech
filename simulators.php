<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Simulators | ReachMedTech</title>
	<link rel="icon" href="logo.png" type="image//x-icon">
	<link rel="stylesheet" href="pstyle.css">
	<meta name="viewport" content="width=device-width,initial-scale=1.0,minimum-scale=1.0,maximum-scale=1.0">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"> 
</head>
<body background="sim.jpg">
	<div class="container">
		<h2>SIMULATORS</h2>
		<div class="row">
			<?php      
    include('dbconnect.php'); 
              
        $sql = "SELECT * FROM product_simulator" ;  
        $database = "signuptest"; 
        $result = mysqli_query($conn, $sql);  
      while($rows=$result->fetch_assoc()) 

                { 

         
           echo ' <form action=\'carts.php\' method=\'post\'>
           <div class="col-md-3">
           <div class="product-top">

           <input type="hidden" name="pid" value='.$rows['pid'].'>
           <input type="hidden" name="prsname" value='.$rows['sname'].'>
				<img src="'.$rows['imgurl'].'" style="width:200px;height:200px;" >
				<div class="overlay">
					<a href=""><button type="submit" class="btn btn-secondary" title="Buy"><i class="fa fa-shopping-bag"></i></button></a> 

				</div>
			</div>

			<div class="product-bottom-text-center">
				<h3>'.$rows['sname'].' <br>Rs '.$rows['sprice'].' </h3>         
			</div> </div>
			</form>';

                }
 

?>
				<br><br>
<h4>By clicking on the product, you send us an enquiry for further detials and eventually place an order</h4>
             	</div>
</div>
	
</body>
</html>
                <!--<div class="col-md-3">
				<div class="product-top">
				<img src="simpad.png" style="width:200px;height:200px;" >
				<div class="overlay">
					<a href="buy.html"><button type="button" class="btn btn-secondary" title="Buy"><i class="fa fa-shopping-bag"></i></button></a> 

				</div>
			</div>

			<div class="product-bottom-text-center">
				<h3>CPR Simpad<br>Rs 85,200.00</h3>
			</div>
		</div>

		<div class="col-md-3">
				<div class="product-top">
				<img src="endo.jpg" style="width:200px;height:200px;" >
				<div class="overlay">
					<a href="buy.html"><button type="button" class="btn btn-secondary" title="Buy"><i class="fa fa-shopping-bag"></i></button></a> 

				</div>
			</div>

			<div class="product-bottom-text-center">
				<h3>Endoscopy<br>Rs 1,18,570.00</h3>
			</div>
		</div>

		<div class="col-md-3">
				<div class="product-top">
				<img src="lap.jpg" style="width:200px;height:200px;" >
				<div class="overlay">
					<a href="buy.html"><button type="button" class="btn btn-secondary" title="Buy"><i class="fa fa-shopping-bag"></i></button></a>

				</div>
			</div>

			<div class="product-bottom-text-center">
				<h3>Laproscopy<br>Rs. 3,48,692.00</h3>
			</div>
		</div>

		<div class="col-md-3">
				<div class="product-top">
				<img src="gy.jpg" style="width:200px;height:200px;" >
				<div class="overlay">
					<a href="buy.html"><button type="button" class="btn btn-secondary" title="Buy"><i class="fa fa-shopping-bag"></i></button></a>

				</div>
			</div>

			<div class="product-bottom-text-center">
				<h3>Virtual Gynecology<br>
				Rs 78,669.00</h3>
			</div>
		</div>-->

