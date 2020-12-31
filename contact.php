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
<!--- Validation-->
<?php

  $name="";
  $roll="";
  $phone="";
  $class="";
  $message="";

  $dbroll="";
  $dbname="";
  $dbphone="";

  $vname="";
  $vroll="";
  $vphone="";
  $vclass="";
  $vmessage="";
  $msq="";
  $count="";

  if(isset($_REQUEST['submit'])){
   
     $name=trim($_REQUEST['name']);
     $roll=trim($_REQUEST['roll']);
     $phone=trim($_REQUEST['phone']);
     $message=trim($_REQUEST['message']);
     $class=trim($_REQUEST['class']);
     $ck=0;
 //All student information validation for Send Message...............//
     $sqlvalidation="SELECT Roll,Phone_family, Student_name FROM students_info where Phone_family=$phone";
     $runquery=mysqli_query($connect,$sqlvalidation);

     if($runquery==true){
       $count=mysqli_num_rows($runquery);
       if($count>0){
        foreach($runquery as $stuinfo){
             $dbroll=$stuinfo['Roll'];
             $dbname=strtoupper($stuinfo['Student_name']);
             $dbphone=$stuinfo['Phone_family'];
             
        }
     }
     else{
      $vphone="<span class='text-danger'>Phone Number is not Found..</span>";
     }
    }
     if($dbroll!=$roll){
          $ck++;
          $vroll="<span class='text-danger'>Unvalid Roll</span>";
     }
     if($dbname!=strtoupper($name)){
        $ck++;
        $vname="<span class='text-danger'>Unvalid Name</span>";
     }
     if($name==""){
       $ck++;
       $vname="<span class='text-danger'>Required</span>";
     }if($roll==""){
      $ck++;
      $vroll="<span class='text-danger'>Required</span>";
    }if($phone==""){
      $ck++;
      $vphone="<span class='text-danger'>Required</span>";
    }else if(!(strlen($phone)==11)){
      $ck++;
      $vphone="<span class='text-danger'>Please,Valid Phone Number.</span>";
    }if($class=="0"){
      $ck++;
      $vclass="<span class='text-danger'>Required</span>";
    }
    if($message==""){
      $ck++;
      $vmessage="<span class='text-danger'>Required</span>";
    }
    if($ck==0){
      $date=date('d/m/Y');
     
      $sql="INSERT INTO student_message(Name, Roll, Phone, Class, Message,Date) 
      VALUES
       ('".mysqli_real_escape_string($connect,strip_tags($name))."',
       '".mysqli_real_escape_string($connect,strip_tags($roll))."',
       '".mysqli_real_escape_string($connect,strip_tags($phone))."',
       '".mysqli_real_escape_string($connect,strip_tags($class))."',
       '".mysqli_real_escape_string($connect,strip_tags($message))."',
       '$date'
       )";
      $run=mysqli_query($connect,$sql);
      if($run==true){
        $msq="Message Send Successfully";
        $name="";
        $roll="";
        $phone="";
        $message="";
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

<div id="teacher-list-showcase">
    <div class="text-center">
        <h3><span class="primary">Contact</span>   Us</h3>
        <p><a href="">Home</a><span class="primary"> ~ </span><a href="">Contact</a></p>
    </div>
</div>
<div class="private-news">
    <div class="container">
        <marquee>আইডিয়্যাল এক্সারসাইজ শিক্ষাপরিবার এর সকল শিক্ষক-শিক্ষিকা তাদের তথ্য প্রদান করা হল।
            </marquee>
    </div>
</div>
<section id="map_title">
  <div class="container">
       <h2>Google Map</h2>
  </div>
</section>
<!--Google Map-->
<section id="google_map">
       
        <iframe 
        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d225571.02854983648!2d89.95737506755309!3d24.98196679162441!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x79c097ca6dd23bf2!2sImambari%20High%20school!5e1!3m2!1sen!2sbd!4v1606339250062!5m2!1sen!2sbd" width="100%" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0">
        </iframe>
</section>

<!---Message-->
<div id="message">
  <div class="container">
    <div class="row mt-4 ">
      <div class="col-xs-12 col-sm-12 col-md-12 col-lg-4 mt-4">
         <div class="d-flex flex-row">
            <div class="icon">
            <i class="fa fa-home"></i>
            </div>
            <div class="contact_details ml-2">
             <h5>Shepur Sadaer,Sherpur</h5>
             <p>Rogunathpur Shepur Sadar Sherpur,Roll B/201</p>
            </div>
            
         </div>

         <div class="d-flex flex-row mt-3">
            <div class="icon">
            <i class="fa fa-map-marker"></i>
            </div>
            <div class="contact_details ml-3">
             <h5>Shepur Sadaer,Sherpur</h5>
             <p>Rogunathpur Shepur Sadar Sherpur,Roll B/201</p>
            </div>
            
         </div>

         <div class="d-flex flex-row mt-3">
            <div class="icon-x">
            <i class="fa fa-envelope"></i>
            </div>
            <div class="contact_details ml-2">
             <h5>Shepur Sadaer,Sherpur</h5>
             <p>Rogunathpur Shepur Sadar Sherpur,Roll B/201</p>
            </div>
            
         </div>

         <div class="d-flex flex-row mt-3">
            <div class="icon">
            <i class="fa fa-phone"></i>
            </div>
            <div class="contact_details ml-2">
             <h5>Shepur Sadaer,Sherpur</h5>
             <p>Rogunathpur Shepur Sadar Sherpur,Roll B/201</p>
            </div>
            
         </div>

         <div class="d-flex flex-row mt-3">
            <div class="icon-f">
            <i class="fa fa-facebook"></i>
            </div>
            <div class="contact_details ml-3">
             <h5>Shepur Sadaer,Sherpur</h5>
             <p>Rogunathpur Shepur Sadar Sherpur,Roll B/201</p>
            </div>
            
         </div>
      </div>

      <div class="col-xs-12 col-sm-12 col-md-12 col-lg-7" id="send-message">
        <h4  class="mb-4 text-danger text-center">শুধু মাত্র ছাত্র-ছাত্রীদের জন্য মেসেজ ফরম।</h4>
        <form method="post"action="">
          <label for="name">শিক্ষার্থীর নাম:</label><?php echo $vname;?>
          <input type="text" name="name" id="name" value="<?php echo $name;?>">
          

          <label for="roll">শিক্ষার্থীর রোল:</label> <?php echo $vroll;?>
          <input type="number" name="roll" id="roll" value="<?php echo $roll;?>">

          <label for="phone">শিক্ষার্থীর মোবাইল নাম্বার:</label> <?php echo $vphone;?>
          <input type="number" name="phone" id="phone" value="<?php echo $phone;?>">
          
          <label>শ্রেণীঃ</label> <?php echo $vclass;?>
          <select name="class"> 
            <option value="0">Select</option>
            <option value="I">I</option>
            <option value="II">II</option>
            <option value="III">III</option>
            <option value="IV">IV</option>
            <option value="V">V</option>
          </select>
        <label for="message">মেসেজ/বার্তা লিখুনঃ</label> <?php echo $vmessage;?>
        <textarea for="message" id="student_message"  name="message">
                  <?php echo $message;?>
        </textarea>
        <input type="submit" value="Send Message" name="submit">
         <span class="text-success"><?php echo $msq;?></span>
</form>
        </div>
    </div>
  </div>
</div>



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