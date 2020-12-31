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
<!---Validation----->
<?php
require_once('../db_connect.php');
 $bangla="";
 $roll="";
 $english="";
 $math="";
 $exmname="";
$exmyear="";

 $vbangla="";
 $vroll="";
 $vmath="";
 $venglish="";
 $vexmname="";
 $vexmyear="";
 $vck="";
$msq="";
if(isset($_REQUEST['submit'])){
    $exmname=$_REQUEST['select_result'];
    $roll=$_REQUEST['rollfld'];
    $bangla=$_REQUEST['banglafld'];
    $english=$_REQUEST['englishfld'];
    $math=$_REQUEST['mathfld'];
    $exmyear=$_REQUEST['exm_year'];
    $ck=0;
    if($exmname=="0"){
        $ck++;
        $vexmname="<span class='text-danger'>Required</span>";
    }if($exmyear==""){
        $ck++;
        $vexmyear="<span class='text-danger'>Required</span>";
    }
    if(!isset($_REQUEST['ck'])){
        $ck++;
        $vck="<span class='text-danger'>Required</span>";
    }
    if($roll==""){
        $ck++;
        $vroll="<span class='text-danger'>Required</span>";
    }if($bangla>100){
        $ck++;
        $vbangla="<span class='text-danger'>Please ,Enter Valid Number</span>";
    }if($english>100){
        $ck++;
        $venglish="<span class='text-danger'>Please ,Enter Valid Number</span>";
    }if($math>100){
        $ck++;
        $vmath="<span class='text-danger'>Please ,Enter Valid Number</span>";
    }

    if($ck==0 && $exmname=="Class-I"){
        $sql="INSERT INTO class_1(Exm_year, Roll, Bangla, English, Math, ck)
         VALUES
          ('".mysqli_real_escape_string($connect,strip_tags($exmyear))."',
          '".mysqli_real_escape_string($connect,strip_tags($roll))."',
          '".mysqli_real_escape_string($connect,strip_tags($bangla))."',
          '".mysqli_real_escape_string($connect,strip_tags($english))."',
          '".mysqli_real_escape_string($connect,strip_tags($math))."',
          '1')";
          $runquery=mysqli_query($connect,$sql);
          if($runquery==true){
            $msq="<span class='text-danger'>Data Saved</span>";
          }else{
            $msq=mysqli_error($connect);
          }
       
        
    }
       
   else if($ck==0 && $exmname=="Class-II"){
    $sql="INSERT INTO class_2(Exm_year, Roll, Bangla, English, Math, ck)
    VALUES
     ('".mysqli_real_escape_string($connect,strip_tags($exmyear))."',
     '".mysqli_real_escape_string($connect,strip_tags($roll))."',
     '".mysqli_real_escape_string($connect,strip_tags($bangla))."',
     '".mysqli_real_escape_string($connect,strip_tags($english))."',
     '".mysqli_real_escape_string($connect,strip_tags($math))."',
     '1')";
     $runquery=mysqli_query($connect,$sql);
     if($runquery==true){
       $msq="<span class='text-danger'>Data Saved</span>";
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
          <a  class="nav-link" href="manage.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="add_student.php">add students</a>
        </li>
       

        <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
         Result Upload
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="class_1_2.php">Class I-II</a>
          <a class="dropdown-item" href="class_3_5.php">Class III-V</a>
          <a class="dropdown-item" href="all_result.php">Result File UPload</a>
          <a class="dropdown-item" href="update_result.php">Result Update</a>
        </div>
      </li>
       
       
      </ul>
    </div>
   </div>
</nav>
<!---Online Result upload-->
<section id="online-result-showcase">
</section>
    <section>
       <div class="container">
          <div class="row">
             <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6" id="primary-result-upload-title">
                <h5 class="text-center mb-4">PRIMARY EXAMINATION RESULT UPLOAD-1</h5>
                  <form method="post" action="">
                     <div class="form-group">
                     <label>পরিক্ষার নামঃ</label>
                         <select class="form-control" name="select_result">
                           <option value="0">Select</option>
                           <option value="Class-I">Class-I</option>
                           <option value="Class-II">Class-II</option>
                         </select>
                         <?php echo $vexmname;?>
                     </div>
                  
                     <div class="form-group">
                          <label for="exmyear">পরিক্ষার সনঃ</label>
                          <input class="form-control" type="number" name="exm_year" for="exmyear" value="<?php echo $exmyear;?>">
                            <?php echo $vexmyear;?>

                    </div>
                     <div class="form-group">
                       <label for="roll">রোল নাম্বারঃ</label>
                       <input class="form-control" type="number" name="rollfld" value="<?php echo $roll;?>">
                       <?php echo $vroll;?>
                   </div>

                   <div class="form-group">
                       <label for="bangla">বাংলাঃ</label>
                       <input class="form-control" type="number" name="banglafld" id="bangla" value="<?php echo $bangla;?>">
                       <?php echo $vbangla;?>
                   </div>

                   <div class="form-group">
                       <label for="english">ইংরেজীঃ</label>
                       <input class="form-control" type="number" name="englishfld" id="english" value="<?php echo $english;?>">
                       <?php echo $venglish;?>

                   </div>

                   <div class="form-group">
                       <label for="math">সাধারণ গণিতঃ</label>
                       <input class="form-control" type="number" name="mathfld" id="math" value="<?php echo $math;?>">
                       <?php echo $vmath;?>

                   </div>

                  <div class="form-check">
                  <input class="form-check-input" type="checkbox" name="ck"><span class="text-warning">I agree,Upload the Result<span>
                   <?php echo $vck;?> 
                  </div>
                <div>
                 
                <input class="btn btn-success mt-2" type="submit" value="Upload" name="submit">
                <span class="text-success"><?php echo $msq;?></span>
                </div>
            
                  </form>
             </div>
          </div>
       </div>
    </section>

    <footer id="main_footer">
<div class="contaier">
  <p> &copy; <?php echo date('Y');?> I Deal Exercise School.</p>
  </div>
</footer>
    <!--=========Javascript links=============-->
   <!--============= JAVASCRIPT LINKS================
    ========================LINKS===============
    -->
    <?php include('linkjs.php');?>
</body>
</html>