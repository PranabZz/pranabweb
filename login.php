<?php 


$servername = "localhost";
$username = "root";
$password = "";
$db = "LOGIN";

$con = mysqli_connect($servername,$username,$password,$db);

if(!$con){
    echo "No connection";
}

$email = $_POST["email"];
$password = $_POST["pass"];


$sql = " SELECT * FROM LOGIN WHERE Email = '$email' AND Password = '$password' ";

$result = $con -> query($sql);

if($result == TRUE){
    echo "Connection was made";
}

if(mysqli_num_rows($result) === 1){
    echo "Login successful";
}
else {
    echo "No match";
}

$con -> close();

?>