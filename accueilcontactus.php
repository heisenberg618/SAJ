<?php
$host = "localhost";
$user = "root";
$pass = "";
$db = "juridique";

// Database connection
    $conn = mysqli_connect($host,$user,$pass,$db);
    if(!$conn){
echo "there are some probleme while connection the data"; 
    }
   
    $name = $_POST['name'];
    $email= $_POST['email'];
    $message = $_POST['message'];
    
    $sql = "INSERT INTO `contactform`(`nom`, `email`, `message`) VALUES ('$name','$email','$message')";
        if ($conn->query($sql) === TRUE) 
        {
       echo "<h1>message envoyé</h1>"; 
    }
    else {
    echo "Error :" . $sql . "<br>" . $conn->error;
}
    $conn->close();
?> 




