<?php
 require_once('../db_connect.php');
  if(isset($_REQUEST['deleteid'])){
      $delete=$_REQUEST['deleteid'];
      $sql="DELETE FROM student_message WHERE id=$delete";
      $run=mysqli_query($connect,$sql);
      if($run==true){
          header('location:student_message.php?msq=Message has been Deleted');
      }else{
        header('location:student_message.php?msq=Message is not Delete');
      }
  }

?>