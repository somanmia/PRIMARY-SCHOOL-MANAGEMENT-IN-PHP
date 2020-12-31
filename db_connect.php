<?php
$connect=mysqli_connect("localhost","root","","school_management");
if($connect==true){
     
}else{
    echo mysqli_error($connect);
}


?>