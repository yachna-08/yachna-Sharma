<?php
    $email = $_POST['email'];
    $password = $_POST['password'];

    //Database Connection Here
    $con = new mysqli("localhost","root","","databasse123");
    if($con->connect_error)
    {
        die("Failed to connect :".$con->connect_error);
    }
    else
    {
        $stmt = $con->prepare("select * from entry_details where email = ?");
        $stmt->bind_param("s", $email);
        $stmt->execute();
        $stmt_result = $stmt->get_result();
        if($stmt_result->num_rows > 0)
        {
            $data = $stmt_result->fetch_assoc();
            if($data['password'] == $password)
            {
                echo "<h2>Login Successfully</h2>";
                header('location: main.html');
            }
            else
            {
                echo "<h2>Invalid Email or Password</h2>";
            } 
        }    
        else
        {
            echo "<h2>Invalid Email or Password</h2>";
        }
        
    }
?>