<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php include('links.php');?>
    <title>Document</title>

</head>
<body>
<!--Validation ----> 
<?php 
require_once('../db_connect.php');
$msq="";
if(isset($_REQUEST['stuid'])){
    $id=$_REQUEST['stuid'];
    $sql="SELECT * FROM class_5 WHERE id=$id";
    $run=mysqli_query($connect,$sql);
    if($run==true){
        foreach($run as $mydata){

        }
    }

}



?>

    <?php 
    $msq="";
    $roll="";
    $year="";
    $bangla="";
    $english="";
    $math="";
    $socail="";
    $science="";
    $religion="";

    $vbangla="";
    $venglish="";
    $vmath="";
    $vsocail="";
    $vscience="";
    $vyear="";
    $vreligion="";
    if(isset($_REQUEST['submit'])){
        $year=$_REQUEST['year'];
        $bangla=$_REQUEST['bangla'];
        $english=$_REQUEST['english'];
        $math=$_REQUEST['math'];
        $socail=$_REQUEST['socail'];
        $science=$_REQUEST['science'];
        $religion=$_REQUEST['religion'];
        $ck=0;
        if($year==""){
            $ck++;
            $vyear="<span class='text-danger'>Required</span>";
        }
        if($bangla>100 || $bangla<0){
            $ck++;
           $vbangla="<span class='text-danger'>Please,Enter Valid Marks</span>";
        }if($english>100 || $english<0){
            $ck++;
           $venglish="<span class='text-danger'>Please,Enter Valid Marks</span>";
        }
        if($math>100 || $math<0){
            $ck++;
           $vmath="<span class='text-danger'>Please,Enter Valid Marks</span>";
        }
        if($socail>100 || $socail<0){
            $ck++;
           $vsocail="<span class='text-danger'>Please,Enter Valid Marks</span>";
        }
        if($science>100 || $science<0){
            $ck++;
           $vscience="<span class='text-danger'>Please,Enter Valid Marks</span>";
        }
        if($bangla>100 || $bangla<0){
            $ck++;
           $vbangla="<span class='text-danger'>Please,Enter Valid Marks</span>";
        }
        if($religion>100 || $religion<0){
            $ck++;
           $vreligion="<span class='text-danger'>Please,Enter Valid Marks</span>";
        }

        if($ck==0){
            $sql="UPDATE class_5 SET Exm_year=$year,Bangla=$bangla,English=$english,Math=$math,Bangladesh_global_studies=$socail,General_science=$science, Religion=$religion WHERE id=$id";
            $run=mysqli_query($connect,$sql);
            if($run==true){
                $msq="Update Successfully";
            }
            else{
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
        <li class="nav-item">
          <a class="nav-link " href="add_student.php">Add Students</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="result_upload.php">add Result</a>
        </li>
       
      </ul>
    </div>
   </div>
</nav>


<section id="class_3_5_section">
   <div class="container">
      <h3 class="text-success text-center  mb-5">প্রাথমিক বিদ্যালয়ের রেজাল্ট আপডেট ক্লাস ৫ য়</h3>
      <form method="post" action="">
        <div class="row">
         
           
           <div class="form-group xs-12 col-sm-12 col-md-6 col-lg-6">
               <label>পরিক্ষার সনঃ</label>
               <input class="form-control" type="number" name="year" value="<?php echo $mydata['Exm_year'];?>">
              <?php echo $vyear;?>
           </div>

           <div class="form-group xs-12 col-sm-12 col-md-6 col-lg-6">
            <label>রোল নাম্বারঃ</label>
            <input readonly class="form-control" type="number" name="roll" value="<?php echo $mydata['Roll'];?>">
           
        </div>

        <div class="form-group xs-12 col-sm-12 col-md-6 col-lg-6">
          <label>বাংলা</label>
          <input class="form-control" type="number" name="bangla" value="<?php echo $mydata['Bangla'];?>">
          <?php echo $vbangla;?>
      </div>

      <div class="form-group xs-12 col-sm-12 col-md-6 col-lg-6">
        <label>ইংরেজীঃ</label>
        <input class="form-control" type="number" name="english" value="<?php echo $mydata['English'];?>">
        <?php echo $venglish;?>
    </div>

    <div class="form-group xs-12 col-sm-12 col-md-6 col-lg-6">
      <label>সাধারণ গণিতঃ</label>
      <input class="form-control" type="number" name="math" value="<?php echo $mydata['Math'];?>">
      <?php echo $vmath;?>
   </div>

   <div class="form-group xs-12 col-sm-12 col-md-6 col-lg-6">
    <label>বাংলাদেশ ও বিশ্বপরিচয়ঃ</label>
    <input class="form-control" type="number" name="socail" value="<?php echo $mydata['Bangladesh_global_studies'];?>">
    <?php echo $vsocail;?>
 </div>

 <div class="form-group xs-12 col-sm-12 col-md-6 col-lg-6">
  <label>সাধারণ বিজ্ঞানঃ</label>
  <input class="form-control" type="number" name="science" value="<?php echo $mydata['General_science'];?>">
  <?php echo $vscience;?>
</div>

<div class="form-group xs-12 col-sm-12 col-md-12 col-lg-12">
  <label>ধর্ম ও নৈতিক শিক্ষাঃ</label>
  <input class="form-control" type="number" name="religion" value="<?php echo $mydata['Religion'];?>">
  <?php echo $vreligion;?>
</div>


<div class="mt-3 ml-3">
  <input class="btn btn-success btn-lg" type="submit" value="Upload" name="submit">
  <?php echo $msq;?>
</div>
  </div>
      </form>
   </div>
</section>
<footer id="private_footer">
  <div class="contaier">
  <p> &copy; <?php echo date('Y');?> I Deal Exercise School.</p>
  </div>

 </footer>  
<?php include('linkjs.php');?>
</body>
</html>