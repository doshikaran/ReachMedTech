<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>COVID-19 | ReachMedTech</title>
	<link rel="icon" href="logo.png" type="image//x-icon">
	<link rel="stylesheet" href="pstyle.css">
	<meta name="viewport" content="width=device-width,initial-scale=1.0,minimum-scale=1.0,maximum-scale=1.0">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"> 
</head>
<body  background="co.jpg">
	
	<div class="container">
		<h2>COVID ESSENTIALS</h2>
		<div class="row">
			
			
	<?php      
    include('dbconnect.php'); 
              
        $sql = "SELECT * FROM product_covid" ;  
        $database = "signuptest"; 
        $result = mysqli_query($conn, $sql);  
      while($rows=$result->fetch_assoc()) 

                { 

         
           echo ' <form action=\'cart.php\' method=\'post\'>
           <div class="col-md-3">
           <div class="product-top">

           <input type="hidden" name="pid" value='.$rows['pid'].'>
           <input type="hidden" name="prname" value='.$rows['pname'].'>
				<img src="'.$rows['imgurl'].'" style="width:200px;height:200px;" >
				<div class="overlay">
					<a href=""><button type="submit" class="btn btn-secondary" title="Buy"><i class="fa fa-shopping-bag"></i></button></a> 

				</div>
			</div>

			<div class="product-bottom-text-center">
				<h3>'.$rows['pname'].' <br>Rs '.$rows['price'].' </h3>         
			</div> </div>
			</form>';

                }
 

?>
				<br><br>
<h4>By clicking on the product, you send us an enquiry for further detials and eventually place an order</h4>
		<!--<div class="product-top">
				<img src="mask.png" style="width:200px;height:200px;" >
				<div class="overlay">
					<a href="buy.html"><button type="button" class="btn btn-secondary" title="Buy"><i class="fa fa-shopping-bag"></i></button></a> 

				</div>
			</div>

			<div class="product-bottom-text-center">
				<h3>Mask<br>Rs 10.00</h3>
			</div>
		</div>;




		<div class="col-md-3">
				<div class="product-top">
				<img src="sanitizer.jpg" style="width:200px;height:200px;" >
				<div class="overlay">
					<a href="buy.html"><button type="button" class="btn btn-secondary" title="Buy"><i class="fa fa-shopping-bag"></i></button></a> 

				</div>
			</div>

			<div class="product-bottom-text-center">
				<h3>Sanitizer<br>Rs 83.00</h3>
			</div>
		</div>

		<div class="col-md-3">
				<div class="product-top">
				<img src="oximeter.jpg" style="width:200px;height:200px;" >
				<div class="overlay">
					<a href="buy.html"><button type="button" class="btn btn-secondary" title="Buy"><i class="fa fa-shopping-bag"></i></button></a>

				</div>
			</div>

			<div class="product-bottom-text-center">
				<h3>Pulse Oximeter<br>Rs 890.00</h3>
			</div>
		</div>

		<div class="col-md-3">
				<div class="product-top">
				<img src="infrared.jpg" style="width:200px;height:200px;" >
				<div class="overlay">
					<a href="buy.html"><button type="button" class="btn btn-secondary" title="Buy"><i class="fa fa-shopping-bag"></i></button></a>

				</div>
			</div>

			<div class="product-bottom-text-center">
				<h3>Infrared Thermometer<br>
				Rs 1,669.00</h3>
			</div>
		</div>-->


	</div>
</div>

</body>
</html>