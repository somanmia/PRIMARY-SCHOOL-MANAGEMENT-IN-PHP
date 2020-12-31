<?php
 if(!isset($_COOKIE['User:'])){
   header('location:../private.php');
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
$image=array();
$gender="";
$religion="";

$vfathername="";
$vmothername="";
$vvillage="";
$vcity="";
$vphone="";
$vimage="";
$vreligion="";
$vgender="";
$i_agree="";
$msq="";
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
  $image=$_FILES['image'];
  $gender=$_REQUEST['gender'];
  $religion=$_REQUEST['religion'];
  $ck=0;
 
  if($roll==""){
    $ck++;
    $vroll="Required";
  }else{
    $sql="SELECT Roll FROM students_info WHERE Roll=$roll";
    $run=mysqli_query($connect,$sql);
    if($run==true){
      foreach($run as $mydata){
        $croll=$mydata['Roll'];
        if($croll==$roll){
           $ck++;
           $vroll="Already Taken";
        }
      }
    }
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
  }else if(!($email=="")){
    $sql="SELECT Email FROM students_info WHERE Email='$email'";
    $run=mysqli_query($connect,$sql);
    if($run==true){
      foreach($run as $mydata){
        $cemail=$mydata['Email'];
        if($email==$cemail){
           $ck++;
           $vemail="Already Taken";
        }
      }
    }
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
  }else{
    $sql="SELECT Phone_family FROM students_info WHERE Phone_family=$phone";
    $run=mysqli_query($connect,$sql);
    if($run==true){
      foreach($run as $mydata){
        $cphone=$mydata['Phone_family'];
        if($cphone==$phone){
           $ck++;
           $vphone="Already Taken";
        }
      }
    }
  }
  
  if(!isset($_REQUEST['i_agree'])){
    $ck++;
    $i_agree="Required";
  }
  
  if($image['name']==""){
    $ck++;
    $vimage='<span class="text-success">Required</span>';
}else{
   $a=explode(".",$image['name']);
   if(is_array($a) && count($a)>1){
       $ext=strtolower($a[count($a)-1]);
       if(!($ext=='jpg' || $ext=='jpeg' || $ext=='png' || $ext=='gif' || $ext=='ico')){
              $ck++;
              $vimage='<span class="text-success">Image Not Supported!!</span>';
       }
   }else if($image['size']>(2*1024*1024)){
         $ck++;
         $vimage='<span class="text-success">Image Must Less Than 2 MB</span>';
     
   }
   
   else{
     $ck++;
     $vimage='<span class="text-success">Invalid Format</span>';
   }
}
  if($ck==0){
    $sql="INSERT INTO students_info(Roll, Student_name, Fathers_name, Mothers_name, Village, City, Phone_family, `Image`, Date_of_birth,Email, Gender, Religion, Terms_Condition) 
    VALUES
     ('".mysqli_real_escape_string($connect,strip_tags($roll))."',
     '".mysqli_real_escape_string($connect,strip_tags($name))."',
     '".mysqli_real_escape_string($connect,strip_tags($fathername))."',
     '".mysqli_real_escape_string($connect,strip_tags($mothername))."',
     '".mysqli_real_escape_string($connect,strip_tags($village))."',
     '".mysqli_real_escape_string($connect,strip_tags($city))."',
     '".mysqli_real_escape_string($connect,strip_tags($phone))."',
     '".mysqli_real_escape_string($connect,strip_tags($image['name']))."',
     '".mysqli_real_escape_string($connect,strip_tags($date))."',
     '".mysqli_real_escape_string($connect,strip_tags($email))."',
     '".mysqli_real_escape_string($connect,strip_tags($gender))."',
     '".mysqli_real_escape_string($connect,strip_tags($religion))."',
     'I Agree'
     
    )";
    $run=mysqli_query($connect,$sql);
    if($run==true){
      $sp=$image['tmp_name'];
      $dp="../dist/uploads/images/".mysqli_insert_id($connect)."".$image['name'];
      move_uploaded_file($sp,$dp);
      $msq="Saved";
    }else{
      $msq=mysqli_error($connect);
    }
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
<div class="student-info  mt-1">
  <div class="container">
     <h1 class="text-success text-center mb-4">Student Management System</h1>
     <form  action="" method="POST" enctype="multipart/form-data">
         <div class="row">
  <!--Step-1-->
         <div class="form-group col-xs-12 col-sm-12 col-md-6 col-lg-6">
                <label for="roll">Roll</label>
                <input class="form-control" type="number" name="rollfld" id="roll" value="<?php echo $roll;?>">
                <span class="text-success"><?php echo $vroll;?></span>
        </div>
        <!--Step 2-->
             <div class="form-group col-xs-12 col-sm-12 col-md-6 col-lg-6">
                <label for="name">Student's Name <span class="text-danger">*</span></label>
                <input class="form-control" type="text" name="namefld" id="name" value="<?php  echo $name;?>">
                <span class="text-success"><?php echo $vname;?></span>
            </div>
        <!--step 3-->
             <div class="form-group col-xs-12 col-sm-12 col-md-6 col-lg-6">
                  <label for="fname">Father's Name <span class="text-danger">*</span></label>
                  <input class="form-control" type="text"  name="fathersnamefld" id="fname" value="<?php echo $fathername;?>">
                  <span class="text-success"><?php echo $vfathername;?></span>
           </div>
        <!--Step 4--->      
              <div class="form-group col-xs-12 col-sm-12 col-md-6 col-lg-6">
                <label for="mothersname">Mother's Name <span class="text-danger">*</span></label>
                <input class="form-control" type="text" name="mothersnamefld" id="mothersname" value="<?php echo $mothername;?>">
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
                                          if($village==$mydata['village']){?>
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
                                    if($city==$mydata['city']){?>
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
            <input class="form-control" type="number" name="phone" id="phone" value="<?php echo $phone;?>">
            <span class="text-success"><?php echo $vphone;?></span>
     </div>
     <hr>
     <!----Management Pard-2-->
     

             <div class="form-group col-xs-12 col-sm-12 col-md-6 col-lg-6">
              <label for="imgfile">Image: <span class="text-danger">*</span></label>
              <input class="form-control-file" type="file" name="image" id="imgfile">
              <?php echo $vimage;?>
           </div>

           <div class="form-group col-xs-12 col-sm-12 col-md-6 col-lg-6">
            <label for="date">Date of Birth <span class="text-danger">*</span></label>
            <input class="form-control" type="date" name="datefld" value="<?php echo $date;?>" id="date">
            <span class="text-success"><?php echo $vdate;?></span>
         </div>

      <div class="form-group col-xs-12 col-sm-12 col-md-6 col-lg-6">
        <label for="email">Email <span class="text-danger">*</span></label>
        <input class="form-control" type="email" name="emailfld" id="email" value="<?php echo $email;?>">
        <span class="text-success"><?php echo $vemail;?></span>
     </div>
     <div class="form-group col-xs-12 col-sm-12 col-md-6 col-lg-6">
        <label for="gender">Gender <span class="text-danger">*</span></label>
         <select class="form-control" name="gender" id="gender">
                 <option value="0">Select</option>
                 <option value="Male">Male</option>
                 <option value="Female">Female</option>
         </select>
         <?php echo $vgender;?>
      </div>
       
      <div class="form-group col-xs-12 col-sm-12 col-md-6 col-lg-6">
        <label for="religion">Religion: <span class="text-danger">*</span></label>
         <select class="form-control" name="religion" id="religion">
                 <option value="0">Select</option>
                 <option value="Muslim">Muslim</option>
                 <option value="Hindus">Hindus</option>
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