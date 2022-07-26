<?php 
	
$showAlert = false; 
$showError = false; 
$exists=false; 
	
if($_SERVER["REQUEST_METHOD"] == "POST") { 
	
	// Include file which makes the 
	// Database Connection. 
	include 'dbconnect.php'; 
	
	$fname= $_POST["fname"];
	$lname= $_POST["lname"]; 
	$password = $_POST["password"];
	$cpassword = $_POST["cfpassword"];
	$email= $_POST["email"];
	$phone= $_POST["phone"];
	
	
	$sql = "SELECT * FROM registration WHERE email='$email'"; 
	
	$result = mysqli_query($conn, $sql); 
	
	$num = mysqli_num_rows($result); 
	
	// This sql query is use to check if 
	// the username is already present 
	// or not in our Database 
	if($num == 0) { 
		if(($password == $cpassword) && $exists==false) { 
	
			//$hash = password_hash($password, PASSWORD_BCRYPT); 
			$hash=md5($password);

			// Password Hashing is used here. 
			$sql = "INSERT INTO `registration` (`fname`, `lname`, `password`, `cfpassword`, `email`, `phone`)
			VALUES ('$fname', '$lname', '$hash', '$hash', '$email', '$phone')"; 
	
			$result = mysqli_query($conn, $sql); 
	
			if ($result) { 
				$showAlert = true; 
			} 
		} 
		else { 
			$showError = "Passwords do not match"; 
		}	 
	}// end if 
	
if($num>0) 
{ 
	$exists="Email already in use."; 
} 
	
}//end if 
	
?> 
	
<?php
	if($showAlert) { 
	
		header("Location:home.php");
		echo "Sign Up Successful";
		$_SESSION['loggedin']= true;
		$_SESSION['email'] = $email;
	} 
	
	if($showError) { 
	
		echo ' <div class="alert alert-danger 
			alert-dismissible fade show" role="alert"> 
		<strong>Error!</strong> '. $showError.'
	
	<button type="button" class="close"
			data-dismiss="alert aria-label="Close"> 
			<span aria-hidden="true">×</span> 
	</button> 
	</div> '; 
} 
		
	if($exists) { 
		echo ' <div class="alert alert-danger 
			alert-dismissible fade show" role="alert"> 
	
		<strong>Error!</strong> '. $exists.'
		<button type="button" class="close"
			data-dismiss="alert" aria-label="Close"> 
			<span aria-hidden="true">×</span> 
		</button> 
	</div> '; 
	} 
?> 
	

<script>  
    function validation()  
    {  
        var id=document.f1.user.value;  
        var ps=document.f1.pass.value;  
        if(id.length=="" && ps.length=="") {  
            alert("User Name and Password fields are empty");  
            return false;  
        }  
        else  
        {  
            if(id.length=="") {  
                alert("User Name is empty");  
                return false;  
            }   
            if (ps.length=="") {  
            alert("Password field is empty");  
            return false;  
            }  
        }                             
    }  
</script>
