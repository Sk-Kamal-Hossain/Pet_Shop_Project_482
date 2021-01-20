<?php
$conn = mysqli_connect("localhost","root","","quickpost");
if($conn){
    echo "db success";

}
else{
    die("Not connected to database");
}

?>