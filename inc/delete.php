<?php
 require_once('../db_connect.php');
 if(isset($_REQUEST['deleteid'])){
     $delete=$_REQUEST['deleteid'];
   $sql="DELETE FROM students_info WHERE id=$delete";
   if(mysqli_query($connect,$sql)==true){
             header('location:manage.php?msq=Data has been Deleted');
   }

 }

?>