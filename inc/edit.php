<?php
 if(!isset($_COOKIE['User:'])){
   header('location:../private.php');
 }
 if(!isset($_REQUEST['editid'])){
     header('location:manage.php');        
 }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
   <?php include('links.php');?>
</head>
<body>
<!---From Validation---------------->
<?php
require_once('../db_connect.php');
// Variable declaration for update data-----------//
$uroll="";
$uname="";
$ufname="";
$umname="";
$uemail="";
$uvillage="";

$roll="";
$name="";
$fathername="";
$mothername="";
$village="";
$city="";
$phone="";
$email="";
$date="";
$vdate="";
$vroll="";
$vemail="";
$vname="";
$ucity="";
$gender="";
$religion="";

$vfathername="";
$vmothername="";
$vvillage="";
$vcity="";
$vphone="";

$vreligion="";
$vgender="";
$i_agree="";
$msq="";
$editid="";

if(isset($_REQUEST['editid'])){
   $editid=$_REQUEST['editid'];
   $query="SELECT * FROM `students_info` WHERE id=$editid";
   $run=mysqli_query($connect,$query);
   if($run==true){
     foreach($run as $update_data){
           $uroll=$update_data['Roll'];
           $uname=$update_data['Student_name'];
           $ufname=$update_data['Fathers_name'];
           $umname=$update_data['Mothers_name'];
           $uemail=$update_data['Email'];
          $uvillage=$update_data['Village'];
          $ucity=$update_data['City'];
     }
   }
}
if(isset($_REQUEST['submit1'])){
  $roll=trim($_REQUEST['rollfld']);
  $name=trim($_REQUEST['namefld']);
  $fathername=trim($_REQUEST['fathersnamefld']);
  $mothername=trim($_REQUEST['mothersnamefld']);
  $village=$_REQUEST['villagefld'];
  $city=$_REQUEST['cityfld'];
  $email=trim(strtolower($_REQUEST['emailfld']));
  $phone=trim($_REQUEST['phone']);
  $date=$_REQUEST['datefld'];
  
  $gender=$_REQUEST['gender'];
  $religion=$_REQUEST['religion'];
  $ck=0;
 
  if($roll==""){
    $ck++;
    $vroll="Required";
  }
  
  if($gender=="0"){
    $ck++;
    $vgender='<span class="text-success">Required</span>';
  }if($religion=="0"){
    $ck++;
    $vreligion='<span class="text-success">Required</span>';
  }
  if($date==""){
    $ck++;
    $vdate="Required";
  }if($email==""){
    $ck++;
    $vemail="Required";
  }
  if($name==""){
    $ck++;
    $vname="Required";
  }if($fathername==""){
    $ck++;
    $vfathername="Required";
  }if($mothername==""){
    $ck++;
    $vmothername="Required";
  }if($village=="0"){
     $ck++;
     $vvillage="Required";
  }if($city=="0"){
    $ck++;
    $vcity="Required";
  }if($phone==""){
     $ck++;
     $vphone="Required";
  }
  if(!isset($_REQUEST['i_agree'])){
    $ck++;
    $i_agree="Required";
  }if($ck==0){

  }
  
 
   
   


}
?>
         <!---Header Area-->
  <header>
    <div class="header-top">
        <div class="container">
             <div class="row">
                 <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 header-top-left">
                    <ul>
                           <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
                            <li><a href="#"><i class="fa fa-behance"></i></a></li>
                    </ul>
                 </div>
                 <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 header-top-right">
                    <a href="tel:017 72 45 90 73"><span class="lnr lnr-phone-handset"></span> <span class="text">+88017 72 459 073</span></a>
                    <a href="mailto:support@ideal.com"><span class="lnr lnr-envelope"></span> <span class="text">somanmia.cse@gmail.com</span></a>		
                 </div>
             </div>
        </div>
    </div>
</header>
<!--Nav-->
<nav class="navbar navbar-expand-md navbar-dark bg-light">
   <div class="container">
    <a class="navbar-brand" href="#">Student App</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav ml-auto">
        <li class="nav-item active">
          <a class="nav-link" href="manage.php">Home</span></a>
        </li>
        <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
         Result
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          
          <a class="dropdown-item" href="result_upload.php">Result Upload</a>
          <a class="dropdown-item" href="update_result.php">Result Update</a>
          
         
        </div>
      </li>
      
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
         Student Info
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          
          <a class="dropdown-item" href="add_student.php">Students Add</a>
          <a class="dropdown-item" href="add_data.php">Data Add</a>
          
         
        </div>
      </li>
       
      </ul>
    </div>
   </div>
</nav>
<!--Showcase-->
<section id="showcase-2">
</section>
<!---Warning................-->
<section class="private-news">
  <marquee class="pt-2">আইডিয়্যাল এক্সারসাইজ স্কুল রঘুনাথপুর শেরপুর সদর শেরপুর । ছাত্র-ছাত্রীদের সঠিক তথ্য সংগ্রহ করে নিচের ফরম শতর্কতার সাতে পুরণ করবেন। কোন ভুল তথ্য প্রধান করবেন না।</marquee>
</section>
<!------management-sectin -start===============-->
<div class="student_info_update  mt-1">
  <div class="container">
     <h1 class="text-success text-center mb-4 pt-4 pb-4">Update Student Information</h1>
     <form  action="" method="POST" enctype="multipart/form-data">
         <div class="row">
  <!--Step-1-->
         <div class="form-group col-xs-12 col-sm-12 col-md-6 col-lg-6">
                <label for="roll">Roll</label>
                <input  class="form-control"   type="number" name="rollfld" id="roll" value="<?php echo $uroll;?>">
                <span class="text-success"><?php echo $vroll;?></span>
        </div>
        <!--Step 2-->
             <div class="form-group col-xs-12 col-sm-12 col-md-6 col-lg-6">
                <label for="name">Student's Name <span class="text-danger">*</span></label>
                <input class="form-control" type="text" name="namefld" id="name" value="<?php echo $uname;?>">
                <span class="text-success"><?php echo $vname;?></span>
            </div>
        <!--step 3-->
             <div class="form-group col-xs-12 col-sm-12 col-md-6 col-lg-6">
                  <label for="fname">Father's Name <span class="text-danger">*</span></label>
                  <input class="form-control" type="text"  name="fathersnamefld" id="fname" value="<?php echo $ufname;?>">
                  <span class="text-success"><?php echo $vfathername;?></span>
           </div>
        <!--Step 4--->      
              <div class="form-group col-xs-12 col-sm-12 col-md-6 col-lg-6">
                <label for="mothersname">Mother's Name <span class="text-danger">*</span></label>
                <input class="form-control" type="text" name="mothersnamefld" id="mothersname" value="<?php echo $umname;?>">
                <span class="text-success"><?php echo $vmothername;?></span>
         </div>
      <!--Step 5--->
         <div class="form-group col-xs-12 col-sm-12 col-md-6 col-lg-6">
                            <label for="village">Village <span class="text-danger">*</span></label>
                              <select class="form-control" name="villagefld">
                              <option value="0">Select</option>

                                      <?php
                                              require_once('../db_connect.php');
                                              $sql="SELECT * FROM village";
                                              $run=mysqli_query($connect,$sql);
                                              if($run==true){
                                                foreach($run as $mydata){
                                                  if($uvillage==$mydata['village']){?>
                                                      <option value="<?php echo $mydata['village'];?>" selected><?php echo $mydata['village'];?></option>
                                              <?php    }else{?>
                                                    <option><?php echo $mydata['village'];?></option>
                                                <?php  }
                                                }
                                              }
                                              ?>
              
                  
                              </select>
                              <span class="text-success"><?php echo $vvillage;?></span>
             </div>
   <!--Step 6---->
       <div class="form-group col-xs-12 col-sm-12 col-md-6 col-lg-6">
                <label for="city">City <span class="text-danger">*</span></label>
                <select class="form-control" name="cityfld">
                <option value="0">Select</option>

              <?php
                      require_once('../db_connect.php');
                      $sql="SELECT * FROM city";
                      $run=mysqli_query($connect,$sql);
                      if($run==true){
                        foreach($run as $mydata){
                          if($ucity==$mydata['city']){?>
                              <option value="<?php echo $mydata['city'];?>" selected><?php echo $mydata['city'];?></option>
                      <?php    }else{?>
                            <option><?php echo $mydata['city'];?></option>
                        <?php  }
                        }
                      }
                      ?>
                </select>
                <span class="text-success"><?php echo $vcity;?></span>
      </div>
<!---Step 7--->
      
      <div class="form-group col-xs-12 col-sm-12 col-md-6 col-lg-6">
            <label for="phone">Phone Number(Family) <span class="text-danger">*</span></label>
            <input class="form-control" type="number" name="phone" id="phone" value="<?php echo $update_data['Phone_family'];?>" >
            <span class="text-success"><?php echo $vphone;?></span>
     </div>
     <hr>
     <!----Management Pard-2-->
     

             

           <div class="form-group col-xs-12 col-sm-12 col-md-6 col-lg-6">
            <label for="date">Date of Birth <span class="text-danger">*</span></label>
            <input class="form-control" type="date" name="datefld" value="<?php echo $update_data['Date_of_birth'];?>" id="date">
            <span class="text-success"><?php echo $vdate;?></span>
         </div>

      <div class="form-group col-xs-12 col-sm-12 col-md-6 col-lg-6">
        <label for="email">Email <span class="text-danger">*</span></label>
        <input class="form-control" type="email" name="emailfld" id="email" value="<?php echo $uemail;?>">
        <span class="text-success"><?php echo $vemail;?></span>
     </div>
     <div class="form-group col-xs-12 col-sm-12 col-md-6 col-lg-6">
        <label for="gender">Gender <span class="text-danger">*</span></label>
         <select class="form-control" name="gender" id="gender">
                 <option value="0">Select</option>
                 <?php
                     if(isset($_REQUEST['editid'])){?>
                      <option  selected value="<?php echo $update_data['Gender'];?>"><?php echo $update_data['Gender'];?></option>
                   <?php  }
                 ?>
            <?php
               $re=$update_data['Gender'];
               if($re=="Male"){
                 ?>
                   <option value="Female">Female</option>

                 <?php
               }else{
                 ?>
                      <option value="Male">Male</option>
                 <?php
               }
 
             ?>
                        
         </select>
         <?php echo $vgender;?>
      </div>
       
      <div class="form-group col-xs-12 col-sm-12 col-md-6 col-lg-6">
        <label for="religion">Religion: <span class="text-danger">*</span></label>
         <select class="form-control" name="religion" id="religion">
                 <option value="0">Select</option>
                 <?php
                     if(isset($_REQUEST['editid'])){?>
                      <option  selected value="<?php echo $update_data['Religion'];?>"><?php echo $update_data['Religion'];?></option>
                   <?php  }
                 ?>
            <?php
               $religioncheck=$update_data['Religion'];
               if($religioncheck=="Muslim"){
                 ?>
                   <option value="Hindus">Hindus</option>

                 <?php
               }else{
                 ?>
                      <option value="Muslim">Muslim</option>
                 <?php
               }
 
             ?>
         </select>
         <?php echo $vreligion;?>
      </div>
   
        <div class="form-check col-xs-12 col-sm-12 col-md-12 col-lg-12 ml-3">
             <input class="form-check-input" type="checkbox" name="i_agree"> <span class="text-danger">I agree terms & condition</span> 
             <span class="text-success"> <?php echo $i_agree;?></span>
        </div>

       <div class="form-group">
          <input class="btn btn-success mt-3 ml-2" type="submit" value="Save Data" name="submit1">
          <span class="text-success"><?php echo $msq;?></span>
       </div>

         </div>
     </form>
  </div>
</div>

<footer id="main_footer" class="mt-4">
<div class="contaier">
  <p> &copy; <?php echo date('Y');?> I Deal Exercise School.</p>
  </div>
</footer>

    <!--=========Javascript links=============-->
  <?php include('linkjs.php');?>
</body>
</html>