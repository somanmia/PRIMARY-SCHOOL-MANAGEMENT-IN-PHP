<?php
   require_once('db_connect.php');
   $ip=$_SERVER['REMOTE_ADDR'];
   $query="INSERT INTO visitor(ip) VALUES ('$ip')";
   $run=mysqli_query($connect,$query);
   


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Header || Section</title>
    <!----======================================
    =====================================CSS LINKS=======
    //-->
   
    <link rel="stylesheet" href="dist/lib/bootstrap/css/font-awesome.min.css">
    <link rel="stylesheet" href="dist/lib/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="dist/css/style.css">
    <link rel="stylesheet" href="dist/css/custom.css">
    <!--- =============== CSSS LINKS END=======
    =================================//
    -->
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
  <!---Navagtion bar-->
  <nav class="navbar navbar-expand-lg navbar-dark bg-light">
      <div class="container">
  <a class="navbar-brand" href="index.php"><img src="dist/images/logo/logo.png"></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav ml-auto">
      <li class="nav-item active">
        <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="about.php">About</a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Academic Info
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
        <a class="dropdown-item" href="notice/notice.php">Notice</a>
          <a class="dropdown-item" href="academic_cost.php">Academic Cost</a>
          <a class="dropdown-item" href="teacher_info.php">Teacher's Information</a>
         
          
         
        </div>
      
    </li>
    <li class="nav-item">
      <a class="nav-link" href="gallery.php">GALLERY</a>
    </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Result
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          
          <a class="dropdown-item" href="online_result.php">Result</a>
          <a class="dropdown-item" href="result.php">Result Information</a>
         
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="contact.php">Contact</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="private.php"><i class="fa fa-user"></i> Log In</a>
      </li>
      
    </ul>
    
  </div>
  </div>
</nav>
<!---Showcase Gallery--->
<section id="showcase_gallery">
    <div class="container">
       <div class="banner_data">
           <h2><span class="sp">>></span>Gallery<span class="sp"><<</span><h2>
           
       </div>
    </div>
</section>

<section class="gallery_photo_section">
    <div class="container">
             <div class="row">
                 <div class="col-xs-12 col-sm-6 col-md-8 col-lg-8" id="gallery">
                      <a href="dist/images/gallery/g1.jpg"><img src="dist/images/gallery/g1.jpg" alt="pic"></a>
                 </div>
                 <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4" id="gallery">
                     <a href="dist/images/gallery/g2.jpg"><img src="dist/images/gallery/g2.jpg" alt="pic"></a>
                 </div>

                 <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4" id="gallery">
                 <a href="dist/images/gallery/g5.jpg"><img src="dist/images/gallery/g5.jpg" alt="pic"></a>

                 </div>
                 <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4" id="gallery">
                 <a href="dist/images/gallery/g3.jpg"><img src="dist/images/gallery/g3.jpg" alt="pic"></a>

                 </div>
                 <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4" id="gallery">
                 <a href="dist/images/gallery/g4.jpg"><img src="dist/images/gallery/g4.jpg" alt="pic"></a>

                 </div>
                    
                 <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4" id="gallery">
                      <a href="dist/images/gallery/g6.jpg"><img src="dist/images/gallery/g6.jpg" alt="pic"></a>
                 </div>
                 <div class="col-xs-12 col-sm-6 col-md-8 col-lg-8" id="gallery">
                     <a href="dist/images/gallery/g7.jpg"><img src="dist/images/gallery/g7.jpg" alt="pic"></a>
                 </div>

                 <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4" id="gallery">
                 <a href="dist/images/gallery/g5.jpg"><img src="dist/images/gallery/g5.jpg" alt="pic"></a>

                 </div>
                 <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4" id="gallery">
                 <a href="dist/images/gallery/g3.jpg"><img src="dist/images/gallery/g3.jpg" alt="pic"></a>

                 </div>
                 <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4" id="gallery">
                 <a href="dist/images/gallery/g4.jpg"><img src="dist/images/gallery/g4.jpg" alt="pic"></a>

                 </div>
                
             </div>
    </div>
</section>


<!--FOOTER SECTION----> 
<footer id="footer_section">
  <div class="container">
     <div class="row">
        <div class="col-xs-12 col-sm-4 col-md-3 col-lg-2" id="footer_item">
            <h4 class="mb-3">Technology</h4>
            <ul>
              <li><a href="#">Ms Word</a></li>
             <li><a href="#">Ms Excel</a></li>
            <li><a href="#">Ms Powerpoint</a></li>
            <li><a href="#">Programming Pratice</a></li>
            </ul>
        </div>
        <!--Quick Links-->
        <div class="col-xs-12 col-sm-4 col-md-3 col-lg-2" id="footer_item">
          <h4 class="mb-3">Top Subjects</h4>
          <ul>
           <li><a href="#">English</a></li>
           <li><a href="#">Mathmatices</a></li>
           <li><a href="#">Bangla</a></li>
           <li><a href="#">Programming C</a></li>
          </ul>
      </div>
      <!--Socail Links-->
      <div class="col-xs-12 col-sm-4 col-md-3 col-lg-2" id="footer_item">
        <h4 class="mb-3">Socail Links</h4>
        <ul>
          <li><i class="fa fa-facebook"></i><a href="#">Facebook Group</a></li>
           <li><i class="fa fa-twitter"></i><a href="#">Twitter</a></li>
           <li><i class="fa fa-dribbble"></i><a href="#">WhatsApp</a></li>
           <li><i class="fa fa-behance"></i><a href="#">YouTube</a></li>
        </ul>
    </div>
    <!---Menubar Item-->
    <div class="col-xs-12 col-sm-6 col-md-3 col-lg-2" id="footer_item">
      <h4 class="mb-3">Menu Item</h4>
      <ul>
        <li><a href="#">Result</a></li>
         <li><a href="#">Notice</a></li>
         <li><a href="#">Message Us</a></li>
         <li><a href="#">Photo Gallery</a></li>
      </ul>
  </div>

  <div class="col-xs-12 col-sm-6 col-md-7 col-lg-4" id="footer_item">
    <h4 class="mb-3">NewsLetter</h4>
    <p>Lorem, ipsum dolor sit amet consectetun

    </p>
    <form action="" method="POST">
      <div class="form-group">
        <input class="form-control" type="email" placeholder="Email"name="email">
       <input type="submit" class="btn btn-primary mt-2" value="Send">
      </div>
    </form>
</div>
     </div>
  </div>
  </footer>
  
<footer id="main_footer">
<div class="contaier">
  <p> &copy; <?php echo date('Y');?> I Deal Exercise School.</p>
  </div>
</footer>
    <!--============= JAVASCRIPT LINKS================
    ========================LINKS===============
    -->
    <?php include('linkjs.php');?>

</body>
</html>