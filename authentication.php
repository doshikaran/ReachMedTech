<?php      
    include('dbconnect.php'); 
    $email = $_POST['email'];  
    $password = $_POST['pass'];  
    
    $password = md5($password);

    //if(password_verify($password, $hash))
    //{
        //to prevent from mysqli injection
        session_start();
        $email = stripcslashes($email);  
        $password = stripcslashes($password);  
        $email = mysqli_real_escape_string($conn, $email);  
        $password = mysqli_real_escape_string($conn, $password);
        
        $sql = "SELECT * FROM registration WHERE email = '$email' AND password = '$password'";  
        $result = mysqli_query($conn, $sql);  
        $row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
        $count = mysqli_num_rows($result);
        $useR = $row['email'];
        $uname= $row['fname'];
          
        if($count == 1){  
            header("Location:home.php");  
            echo "login successful";
            $_SESSION['loggedin']= true;
            $_SESSION['email'] = $email;
            $_SESSION['name'] = $uname;
        }  
        else{  
            echo "<h1> Login failed. Invalid email or password.</h1>"; 
        }     
    /*}
    else
    {}*/
        /*if(password_verify($password, $hashed_password)) {
        // If the password inputs matched the hashed password in the database
        // Do something, you know... log them in.
        }*/
?>