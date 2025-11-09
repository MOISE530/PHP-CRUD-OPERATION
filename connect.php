<?php
$server='localhost';
$user='root';
$password='';
$database='classa';
$conn=mysqli_connect($server,$user,$password,$database);
if($conn){
    echo "connected successfully";
}else{
    echo"connect failed";
}
?>