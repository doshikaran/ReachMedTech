<?php include('dbconnect.php'); ?>

<?php
session_start();
$prsname=$_POST['prsname'];
$pid=$_POST['pid'];
$uname=$_SESSION['name'];



$sql = "SELECT pid,sname,sprice,imgurl FROM product_simulator WHERE pid=$pid ";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
  // output data of each row
  while($row = mysqli_fetch_assoc($result)) {
    // echo "id: " . $row["pid"]. " - Name: " . $row["pname"]. " " . $row["price"]. "<br>";
    $b_id= $row["pid"];
    $b_prsname= $row["sname"];
    $b_price = $row["sprice"];
    $b_imgurl = $row["imgurl"];
  }
} else {
  echo "0 results";
}


$sql = "INSERT INTO carts(pid, prsname, cust_name) VALUES('$pid','$prsname','$uname')";

if (mysqli_query($conn, $sql)) {
  echo "";
} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
//header('location:buy.php');
mysqli_close($conn);

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<link rel="icon" href="logo.png" type="image//x-icon">
	<meta name="viewport" content="width=device-width,initial-scale=1.0,minimum-scale=1.0,maximum-scale=1.0">
	<title>ENQUIRY SENT | ReachMedTech</title>
	<link rel="stylesheet" href="cstyle.css">
	
</head>
<body>
	<div class="login-div">
		<div class="logo">
			<a href="home.php"><img src="logo.png" width="150"></a>
		</div>

		<div class="title">ReachMedTech</div> 
		<div class="subtitle">HealthCare Instruments</div>
		<br>
		<div class="title2">Category: Simulators</div>
		<div class="title2">
			<p id="userID">
			<?php
					$name = $_SESSION['name'];
				    echo '<h3>Thank You</h3>';
				    echo $name;	
				    echo '<h5> Your order for </h5>';
				    echo $b_prsname;
				  	echo'<br>';
				    echo '<h5>of price Rs. </h5>';
				    echo $b_price;
				    echo '<br> <h5> has been sent for enquiry! </h5>' ;
				
			?></p>
			
			Thank you for placing your order, We have recored your details and will reach out to you shortly!</div> 
	</div>
</body>
</html>