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
    <title>About || Section</title>
    <!----======================================
    =====================================CSS LINKS=======
    //-->
   
    <link rel="stylesheet" href="dist/lib/bootstrap/css/font-awesome.min.css">
    <link rel="stylesheet" href="dist/lib/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="dist/lib/bootstrap/css/flexboxgrid.min.css">
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
<section id="showcase_gallery">
    <div class="container">
       <div class="banner_data">
           <h6><span class="sp">>></span>শিক্ষার্থীদের মাসিক বেতন ও একাডেমিক খরচ<span class="sp">>></span><h2>
           
       </div>
    </div>
</section>
<div class="private-news">
    <div class="container">
        <marquee>আইডিয়্যাল এক্সারসাইজ শিক্ষাপরিবার এর সকল শিক্ষক-শিক্ষিকা তাদের তথ্য প্রদান করা হল।
            </marquee>
    </div>
</div>

<!---Academic Area-->
<section id="academic_cost">
  <div class="container">
     <h4 class="text-center text-danger mt-4 mb-4">>> একাডেমিক খরচ জানার জন্য নিচের সিলেক্ট বক্স থেকে ক্লাস নির্বাচন করুন। >></h4>
     <form method="post" action="">
       <div class="form-group mt-4">
           <select class="form-control" id="academic_cost_select_box" name="academic_cost_search">
              <option value="0">Select</option>
              <option value="1">প্রথম শ্রেণির  শিক্ষার্থীদের একাডেমিক খরচ</option>
              <option value="2">দ্বিতীয় শ্রেণির  শিক্ষার্থীদের একাডেমিক খরচ</option>
              <option value="3">তৃত্বীয় শ্রেণির  শিক্ষার্থীদের একাডেমিক খরচ</option>
              <option value="4">চতুর্থ শ্রেণির   শিক্ষার্থীদের একাডেমিক খরচ</option>
              <option value="5">পঞ্চম শ্রেণির   শিক্ষার্থীদের একাডেমিক খরচ</option>
             
           </select>
         <input class="btn btn-danger" type="submit" value="Submit" name="submit">
       </div>

     </form>
  
    </div>

</section>

<!--Academic cost show--->
<section id="academic_cost_show">
    <div class="container text-success text-center">
         <?php
          $count=1;
                  $class_name="";
                  if(isset($_REQUEST['submit'])){
                     $class_name=$_REQUEST['academic_cost_search'];
                     if($class_name=="1"){
                       ?>
                        <h3 class='text-center text-primary mb-3'>১'ম শ্রেণির  শিক্ষার্থীদের একাডেমিক খরচ</h3>
                       <?php
                     }
                     if($class_name=="2"){
                      ?>
                       <h3 class='text-center text-primary mb-3'>২ 'য় শ্রেণির  শিক্ষার্থীদের একাডেমিক খরচ</h3>
                      <?php
                    }
                    if($class_name=="3"){
                      ?>
                       <h3 class='text-center text-primary mb-3'>৩ 'য়' শ্রেণির  শিক্ষার্থীদের একাডেমিক খরচ</h3>
                      <?php
                    }
                    if($class_name=="4"){
                      ?>
                       <h3 class='text-center text-primary mb-3'>৪ 'র্থ শ্রেণির  শিক্ষার্থীদের একাডেমিক খরচ</h3>
                      <?php
                    }
                    if($class_name=="5"){
                      ?>
                       <h3 class='text-center text-primary mb-3'>৫ ম শ্রেণির  শিক্ষার্থীদের একাডেমিক খরচ</h3>
                      <?php
                    }
                     $query="SELECT * FROM academic_cost WHERE class= '$class_name'";
                    $run=mysqli_query($connect,$query);
                     if($run==true){
                       foreach($run as $mydata){
                           $monthly=$mydata['monthly_fee'];
                           $total_month=$monthly*12;

                           $coaching=$mydata['coaching_fee'];
                           $total_coaching=$coaching*12;
                         ?>
                         <table class="table table-bordered" id="academic_cost_show_table">
                         <tr>
                            <th class='text-danger'>SL NO.</th>
                             <th class='text-danger'>বিবরণঃ</th>
                             <th class='text-danger'>টাকার পরিমানঃ</th>
                             <th class='text-danger'>মোট খরচঃ<th>
                       </tr>
                          
                       <tr>
                           <td><?php echo $count++;?></td>
                           <td>মাসিক বেতন-</td>
                           <td><?php echo $mydata['monthly_fee'];?></td>
                           <td><h5><?php echo $monthly." x "."12"." = ".$total_month;?></h5></td>
                       </tr>

                       <tr>
                           <td><?php echo $count++;?></td>
                           <td>কোচিং ফি-</td>
                           <td><?php echo $mydata['coaching_fee'];?></td>
                           <td><h5><?php echo $coaching." x "."12"." = ".$total_coaching;?></h5></td>
                       </tr>

                       <tr>
                           <td><?php echo $count++;?></td>
                           <td>ভর্তি ফি-</td>
                           <td><?php echo $mydata['admission_fee'];?></td>
                           <td><h5><?php echo $mydata['admission_fee'];?></h5></td>
                       </tr>

                       <tr>
                           <td><?php echo $count++;?></td>
                           <td>সেশন চার্জ-</td>
                           <td><?php echo $mydata['session_fee'];?></td>
                           <td><h5><?php echo $mydata['session_fee'];?></h5></td>
                       </tr>

                       <tr>
                          <td><?php echo $count++;?></td>
                          <td class='text-primary'>সর্বোমোট খরচঃ</td>
                          <td></td>
                          <td><h4 class='text-primary'><?php echo $total_coaching+$total_month+$mydata['session_fee']+$mydata['admission_fee'];?></h4></td>
                       </tr>
                       </table>



                   <?php    }
                     }
                    

                  }
         ?>
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
    <script src="dist/lib/jquery/jquery-3.4.1.js"></script>
   
    <script src="dist/lib/bootstrap/js/bootstrap.min.js"></script>
     <script src="dist/lib/bootstrap/js/popper.min.js"></script>
    <script src="dist/js/main.js"></script>

</body>
</html>