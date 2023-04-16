


<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    $name = $_POST["id"];
    $email = $_POST["password"];


    $host = 'localhost';
    $uname = 'root';
    $password = "";
    $dbname = "project";
    $conn = mysqli_connect($host, $uname, $password, $dbname);
    if ($conn) {
        //recho "Connection successful.";
    } else {
        echo "Connection Failed.";
        die("Connection Failed:" . mysqli_connect_error());
    }
    $sql = "update puz set password='$email' where id='$name';";
    $res = mysqli_query($conn, $sql);
   
        
    header("location:login.php");
   
}
?>