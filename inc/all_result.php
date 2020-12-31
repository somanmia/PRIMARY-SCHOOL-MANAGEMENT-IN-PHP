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
  <!--Validation---------> 
  <?php
  require_once('../db_connect.php');
  $title="";
  $date="";
  $files=array();

  $vtitle="";
  $vdate="";
  $vfiles="";
  $msq="";
  if(isset($_REQUEST['submit'])){
     $files=$_FILES['files'];
     $title=$_REQUEST['title'];
     $date=$_REQUEST['date'];
     $ck=0;
     if($files['name']==""){
       $ck++;
       $vfiles="<span class='text-danger'>Required</span>";
     }else{
       $a=explode(".",$files['name']);
       if(is_array($a) && count($a)>1){
        $ext=strtolower($a[count($a)-1]);
        if(!($ext=='pdf' || $ext=='docx')){
               $ck++;
               $vfiles='<span class="text-success">File Not Supported!!</span>';
        }
       }else{
         $ck++;
         $files="<span class='text-danger'>Invalid Formate</span>";
       }
     }if($title==""){
        $ck++;
        $vtitle="<span class='text-danger'>Required</span>";
     }if($date==""){
         $ck++;
      $vdate="<span class='text-danger'>Required</span>";
     }

   if($ck==0){
     $sql="INSERT INTO file_upload(Title, Date, File_name) 
     VALUES 
     ('".mysqli_real_escape_string($connect,strip_tags($title))."',
     '$date','".mysqli_real_escape_string($connect,strip_tags($files['name']))."')";
     $run=mysqli_query($connect,$sql);
     if($run==true){
      $sp=$files['tmp_name'];
      $dp="../dist/uploads/files/".mysqli_insert_id($connect)."_".$files['name'];
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
          <a  class="nav-link" href="manage.php">Home</a>
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
      
       

        <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
         Result Upload
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="class_1_2.php">Class I-II</a>
          <a class="dropdown-item" href="class_3_5.php">Class III-V</a>
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

<!--news-->
<section class="private-news">
  <marquee class="pt-2">আইডিয়্যাল এক্সারসাইজ স্কুল রঘুনাথপুর শেরপুর সদর শেরপুর । ছাত্র-ছাত্রীদের সঠিক তথ্য সংগ্রহ করে নিচের ফরম শতর্কতার সাতে পুরণ করবেন। কোন ভুল তথ্য প্রধান করবেন না।</marquee>
</section>

<section id="file-upload">
  <div class="container">
    
      <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6" id="file-upload-section">
        <h3 class='text-center text-danger'>Notices & Result File Upload</h3>
      <form method="post" action=""  enctype="multipart/form-data">
            
              <div class="form-group">
                 <label>Title:</label>
                 <input class="form-control" type="text" name="title" value="<?php echo $title;?>">
                  <?php echo $vtitle;?>
              </div>

              <div class="form-group">
                <label>File Upload Date:</label>
                <input class="form-control" type="date" name="date">
                <?php echo $vdate;?>
             </div>

             <div class="form-group">
                <label>Choose your File:</label>
                <input class="form-control-file" type="file" name="files">
                 <?Php echo $vfiles;?>
             </div>

             <div class="form-group">
                <input class="btn btn-success" type="submit" name="submit" Value="Uploade">
                <?php echo $msq;?>
</div> 
          </form>
      
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