<?php
 require_once('../db_connect.php');
  if(isset($_REQUEST['clearid'])){
     
      $sql="TRUNCATE TABLE student_message";
      $run=mysqli_query($connect,$sql);
      if($run==true){
          header('location:student_message.php?msq=All Record Clear');
      }else{
        header('location:student_message.php?msq=Not Clear');
      }
  }

?>
