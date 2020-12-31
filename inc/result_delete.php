<?php
 require_once('../db_connect.php');
 if(isset($_REQUEST['class_1_id'])){
     $class_1=$_REQUEST['class_1_id'];
      $delete_sql="DELETE FROM `class_1` WHERE id=$class_1";
      $run=mysqli_query($connect,$delete_sql);
      if($run==true){
         header('location:update_result.php?dmsq=Data has been Deleted');
     }
 }
 else if(isset($_REQUEST['class_2_id'])){
    $class_2=$_REQUEST['class_2_id'];
    $delete_sql="DELETE FROM `class_2` WHERE id=$class_2";
    $run=mysqli_query($connect,$delete_sql);
    if($run==true){
       header('location:update_result.php?dmsq=Data has been Deleted');
   }
}
else if(isset($_REQUEST['class_3_id'])){
    $class_3=$_REQUEST['class_3_id'];
    $delete_sql="DELETE FROM `class_3` WHERE id=$class_3";
    $run=mysqli_query($connect,$delete_sql);
    if($run==true){
       header('location:update_result.php?dmsq=Data has been Deleted');
   }
}
else if(isset($_REQUEST['class_4_id'])){
    $class_4=$_REQUEST['class_4_id'];
    $delete_sql="DELETE FROM `class_4` WHERE id=$class_4";
    $run=mysqli_query($connect,$delete_sql);
    if($run==true){
       header('location:update_result.php?dmsq=Data has been Deleted');
   }
}else if(isset($_REQUEST['class_5_id'])){
    $class_5=$_REQUEST['class_5_id'];
    $delete_sql="DELETE FROM `class_5` WHERE id=$class_5";
      $run=mysqli_query($connect,$delete_sql);
      if($run==true){
         header('location:update_result.php?dmsq=Data has been Deleted');
     }
}

?>