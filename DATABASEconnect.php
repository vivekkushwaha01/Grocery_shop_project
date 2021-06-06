<?php

$conn=mysqli_connect("localhost","root","","Projectone");
if($conn){
    //echo "Success";
}
else{
    die("Error".mysqli_connect_error());
}

?>