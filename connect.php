<?php
$servername="localhost";
$username="root";
$password="";
$database_name="databasse123";

$conn=mysqli_connect($servername,$username,$password,$database_name);
//now check the connection
if(!$conn)
{
    die("Connection Failed:" . mysqli_connect_error());

}

if(isset($_POST['save']))
{
    $UserName = $_POST['UserName'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    $sql_query = "INSERT INTO entry_details(UserName,password,email)
    VALUES ('$UserName', '$password','$email')";

    if (mysqli_query($conn, $sql_query))
    {   
        echo '<script>alert("Data inserted Successfully")</script>';
        header('location: login2.html');
        
    }
    else
    {
        echo "Error: " . $sql . "" . mysqli_error($conn);
    }
    mysqli_close($conn);
}
?>