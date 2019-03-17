<?php
$conn=new mysqli('localhost','root','','form');
//check connection

if($conn->connect_error){
    die("connection failed" .$conn->connect_error);
            
}
echo "";

$sql = "delete FROM contact WHERE id = '$_GET[id]'";

if(mysqli_query($conn, $sql)){
    header("refresh:1;url=contact_list.php");
}
else{
    echo"not deleted";
}
