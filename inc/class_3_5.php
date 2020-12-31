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
    <title>Online Result Upload </title>
    <!--============= Css Links======================
    =========================-->
    <?php include('links.php');?>
</head>
<body>
  <!---Validation------------>
  <?php 
  require_once('../db_connect.php');
  $examname="";
  $examyear="";
  $rollfld="";
  $banglafld="";
  $englishfld="";
  $mathfld="";
  $socail_sciencefld="";
  $sciencefld="";
  $religionfld="";

  $vexamname="";
  $vexamyear="";
  $vrollfld="";
  $vbanglafld="";
  $venglishfld="";
  $vmathfld="";
  $vsocail_sciencefld="";
  $vsciencefld="";
  $vreligionfld="";
  $vck="";
  $msq="";
if(isset($_REQUEST['submit'])){
  $examname=$_REQUEST['examname'];
  $examyear=$_REQUEST['examyear'];
  $rollfld=$_REQUEST['rollfld'];
  $banglafld=$_REQUEST['banglafld'];
  $englishfld=$_REQUEST['englishfld'];
  $mathfld=$_REQUEST['mathfld'];
  $socail_sciencefld=$_REQUEST['socail_sciencefld'];
  $sciencefld=$_REQUEST['sciencefld'];
  $religionfld=$_REQUEST['religionfld'];
 
  $ck=0;
  if($examname=="0"){
    $ck++;
    $vexamname="<span class='text-danger'>Required</span>";
  }if($examyear==""){
    $ck++;
    $vexamyear="<span class='text-danger'>Required</span>";
  }if($rollfld==""){
    $ck++;
    $vrollfld="<span class='text-danger'>Required</span>";
  }if($banglafld>100){
    $ck++;
    $vbanglafld="<span class='text-danger'>Please ,Enter Valid Marks</span>";
}if($englishfld>100){
    $ck++;
    $venglishfld="<span class='text-danger'>Please ,Enter Valid Marks</span>";
}if($mathfld>100){
    $ck++;
    $vmathfld="<span class='text-danger'>Please ,Enter Valid Marks</span>";
}

if($socail_sciencefld>100){
  $ck++;
  $vsocail_sciencefld="<span class='text-danger'>Please ,Enter Valid Number</span>";
}if($sciencefld>100){
  $ck++;
  $vsciencefld="<span class='text-danger'>Please ,Enter Valid Number</span>";
}if($religionfld>100){
  $ck++;
  $vreligionfld="<span class='text-danger'>Please ,Enter Valid Number</span>";
}if(!isset($_REQUEST['ck'])){
  $vck="<span class='text-danger'>Required</span>";
}

if($ck==0){
   if($examname=="Class-III"){
     $sql="INSERT INTO class_3(Exm_year, Roll, Bangla, English, Math, Bangladesh_global_studies, General_science, Religion, Ck) 
     VALUES(
      
       '".mysqli_real_escape_string($connect,strip_tags($examyear))."' ,
       '".mysqli_real_escape_string($connect,strip_tags($rollfld))."',

       '".mysqli_real_escape_string($connect,strip_tags($banglafld))."' ,
       '".mysqli_real_escape_string($connect,strip_tags($englishfld))."',

       '".mysqli_real_escape_string($connect,strip_tags($mathfld))."' ,
       '".mysqli_real_escape_string($connect,strip_tags($socail_sciencefld))."',

       '".mysqli_real_escape_string($connect,strip_tags($sciencefld))."' ,

       '".mysqli_real_escape_string($connect,strip_tags($religionfld))."' ,
       '1')";

       $runquery=mysqli_query($connect,$sql);
       if($runquery==true){
        $msq="<span class='text-danger'>Uploded Successfully</span>";
       }else{
       $msq=mysqli_error($connect);

       }
   }
   // Data inserted step---2//
  
   if($examname=="Class-IV"){
    $sql="INSERT INTO class_4(Exm_year, Roll, Bangla, English, Math, Bangladesh_global_studies, General_science, Religion, Ck) 
    VALUES(
     
      '".mysqli_real_escape_string($connect,strip_tags($examyear))."' ,
      '".mysqli_real_escape_string($connect,strip_tags($rollfld))."',

      '".mysqli_real_escape_string($connect,strip_tags($banglafld))."' ,
      '".mysqli_real_escape_string($connect,strip_tags($englishfld))."',

      '".mysqli_real_escape_string($connect,strip_tags($mathfld))."' ,
      '".mysqli_real_escape_string($connect,strip_tags($socail_sciencefld))."',

      '".mysqli_real_escape_string($connect,strip_tags($sciencefld))."' ,

      '".mysqli_real_escape_string($connect,strip_tags($religionfld))."' ,
      '1')";

      $runquery=mysqli_query($connect,$sql);
      if($runquery==true){
       $msq="<span class='text-danger'>Uploded Successfully</span>";
      }else{
      $msq=mysqli_error($connect);

      }
  }

  // Step--3---//

  if($examname=="Class-V"){
    $sql="INSERT INTO class_5(Exm_year, Roll, Bangla, English, Math, Bangladesh_global_studies, General_science, Religion, Ck) 
    VALUES(
     
      '".mysqli_real_escape_string($connect,strip_tags($examyear))."' ,
      '".mysqli_real_escape_string($connect,strip_tags($rollfld))."',

      '".mysqli_real_escape_string($connect,strip_tags($banglafld))."' ,
      '".mysqli_real_escape_string($connect,strip_tags($englishfld))."',

      '".mysqli_real_escape_string($connect,strip_tags($mathfld))."' ,
      '".mysqli_real_escape_string($connect,strip_tags($socail_sciencefld))."',

      '".mysqli_real_escape_string($connect,strip_tags($sciencefld))."' ,

      '".mysqli_real_escape_string($connect,strip_tags($religionfld))."' ,
      '1')";

      $runquery=mysqli_query($connect,$sql);
      if($runquery==true){
       $msq="<span class='text-danger'>Uploded Successfully</span>";
      }else{
      $msq=mysqli_error($connect);

      }
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

<div class="private-news">
    <div class="container">
        <marquee>তথ্য প্রযুক্তির সাথে তালমিলিয়ে আমরা ছাত্র-ছাত্রীদের রেজাল্ট অনলাইন এর মাধ্যমে দেখার ব্যবস্থা করছি। নিচের ফরম পূরণ করার সময় সাবধানতা অবলম্বন করতে হবে। নিচের ফরম এ শুধু মাত্র ক্লাস তৃত্বীয় শ্রেনী থেকে পঞ্চম প্রেণী পর্জন্ত রেজাল্ট আপলুড করতে হবে।</marquee>
    </div>
</div>

<section id="class_3_5_section">
   <div class="container">
      <h3 class="text-success text-center  mb-5">প্রাথমিক বিদ্যালয়ের রেজাল্ট অনলাইন এ আপলুড -২</h3>
      <form method="post" action="">
        <div class="row">
           <div class="form-group col-xs-12 col-sm-12 col-md-6 col-lg-6">
                <label>পরিক্ষার নামঃ</label>
               <select class="form-control" name="examname">
                <option value="0">Select</option>
                <option value="Class-III">Class-III</option>
                <option value="Class-IV">Class-IV</option>
                <option value="Class-V">Class-V</option>
               </select>
               <?php echo $vexamname;?>
           </div>
           
           <div class="form-group xs-12 col-sm-12 col-md-6 col-lg-6">
               <label>পরিক্ষার সনঃ</label>
               <input class="form-control" type="text" name="examyear" value="<?php echo $examyear;?>">
               <?php echo $vexamyear;?>
           </div>

           <div class="form-group xs-12 col-sm-12 col-md-6 col-lg-6">
            <label>রোল নাম্বারঃ</label>
            <input class="form-control" type="number" name="rollfld" value="<?php echo $rollfld;?>">
            <?php echo $vrollfld;?>
        </div>

        <div class="form-group xs-12 col-sm-12 col-md-6 col-lg-6">
          <label>বাংলা</label>
          <input class="form-control" type="number" name="banglafld" value="<?php echo $banglafld;?>">
          <?php echo $vbanglafld;?>
      </div>

      <div class="form-group xs-12 col-sm-12 col-md-6 col-lg-6">
        <label>ইংরেজীঃ</label>
        <input class="form-control" type="number" name="englishfld" value="<?php echo $englishfld;?>">
        <?php echo $venglishfld;?>
    </div>

    <div class="form-group xs-12 col-sm-12 col-md-6 col-lg-6">
      <label>সাধারণ গণিতঃ</label>
      <input class="form-control" type="number" name="mathfld" value="<?php echo $mathfld;?>">
      <?php echo $vmathfld;?>
   </div>

   <div class="form-group xs-12 col-sm-12 col-md-6 col-lg-6">
    <label>বাংলাদেশ ও বিশ্বপরিচয়ঃ</label>
    <input class="form-control" type="number" name="socail_sciencefld" value="<?php echo $sciencefld;?>">
    <?php echo $vsocail_sciencefld;?>
 </div>

 <div class="form-group xs-12 col-sm-12 col-md-6 col-lg-6">
  <label>সাধারণ বিজ্ঞানঃ</label>
  <input class="form-control" type="number" name="sciencefld" value="<?php echo $sciencefld;?>">
  <?php echo $vsciencefld;?>
</div>

<div class="form-group xs-12 col-sm-12 col-md-12 col-lg-12">
  <label>ধর্ম ও নৈতিক শিক্ষাঃ</label>
  <input class="form-control" type="number" name="religionfld" value="<?php echo $religionfld;?>">
  <?php echo $vreligionfld;?>
</div>

<div class="form-check xs-12 col-sm-12 col-md-6 col-lg-12 ml-3">
  <input class="form-check-input " type="checkbox" name="ck"><span class="text-primary">I Agree Upload the Result</span>
  <?php echo $vck;?>
</div>
<div class="mt-3 ml-3">
  <input class="btn btn-success btn-lg" type="submit" value="Upload" name="submit">
  <?php echo $msq;?>
</div>
  </div>
      </form>
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