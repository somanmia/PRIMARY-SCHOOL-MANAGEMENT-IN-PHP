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
    <!--============= Css Links======================
    =========================-->
    <?php include('links.php');?>
</head>
<body>
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
          <a class="nav-link" href="../index.php">Home <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="add_student.php">Add Students</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="all_result.php">Result Upload-2</a>
        </li>
       
      </ul>
    </div>
   </div>
</nav>
<!--Showcase-->
<section id="showcase-2">
</section>


<!---Result Upload Menu-->
<section id="result-upload">
    <div class="container">
         <ul>
             <li><a href="?pu=ssc_upload">SSC Result</a></li>
             <li><a href="?pu=jsc_upload">JSC result</a></li>
             <li><a href="?pu=psc_upload">PSC result</a></li>
         </ul>
    </div>
</section>

<!---SSC JSC PSC UPLOAD FILE SHOW-->
<section style="background:#ddd;">
  <div class="container">
     <?php
          if(isset($_REQUEST['pu'])){
                 include($_REQUEST['pu'].".php");
          }else{
            include('ssc_upload.php');
          }
     ?>
  </div>
</section>

<footer id="private_footer">
  <div class="contaier">
  <p> &copy; <?php echo date('Y');?> I Deal Exercise School.</p>
  </div>

 </footer>   
    <!--=========Javascript links=============-->
   <?php include('linkjs.php');?>
</body>
</html>