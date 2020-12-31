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
    <?php include('links.php');?>
</head>
<body>
    <!---CAPTCHA CREAE----> 
    <?php
    session_start();
    $first_num=rand(1,10);
    $second_num=rand(1,10);
    $operators=array("+","-","*");
    $operator=rand(0,count($operators)-1);
    $operator=$operators[$operator];
    $ranswer=0;
    switch($operator){
        case "+":
            $ranswer=$first_num+$second_num;
        break;
        case "-":
            $ranswer=$first_num-$second_num;
        break;
        case "*":
            $ranswer=$first_num*$second_num;
        break;
    }
    
   $_SESSION['ranswer']=$ranswer;
      
       
    
    
?>

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

<div class="private-news">
    <div class="container">
        <marquee>ছাত্রছাত্রীদের জন্য এই ওয়ভেপেইজ লগিন করার চেস্টা করা একদম  নিষেধ। এই পেইজ এ লগিন করার চেস্টা করলে
            আপনার যাবতীয় তথ্য সংগ্রহ করে রাখা হবে। পরবর্তী যে কোন সময় আইনের আশ্রয় নেওয়া হবে .........
            </marquee>
    </div>
</div>

  <section class="mt-3">
      <div class="container">
        
          <div class="row">
              <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Soluta asperiores accusamus nobis.
                 Sapiente sunt eaque ex. Corrupti qui delectus quisquam iure inventore soluta accusamus at? Veniam accusamus officiis at pariatur nihil sunt eos esse similique, voluptas enim voluptatem ipsum reprehenderit! Aperiam tempora voluptas, mollitia pariatur eos inventore quaerat adipisci provident iste animi blanditiis unde deleniti saepe cumque quam illum magni fuga vel aut aspernatur exercitationem. Expedita architecto soluta dolor? Perspiciatis repudiandae omnis reiciendis modi tenetur doloribus aut harum! Consequuntur dolor repudiandae voluptatum, incidunt corporis et saepe minus architecto aspernatur. Distinctio blanditiis ratione  </p>

              </div>
              <div class="col-xs-12 col-sm-12 col-md-8 col-lg-8 m-auto">
                  <h5 class="text-success mt-3 mb-4 text-center">রেজাল্ট পেতে নিচের ফরম পূরণ কররুন।</h5>
                  <form method="post" action="result_show.php" id="get_result_from">

                  <div class="alert-danger p-2">
                  <span style="font-size:24px;"> <?php if(isset($_SESSION['message'])){
                        echo $_SESSION['message'];
                        
                   }
                   ?>
                   </span>
                  </div>

                  <table id="result_from">
                      <tr>
                         <td>Enter Roll</td>
                         <td>
                          <input required  type="number"  name="roll">
                        
                         </td>
                      </tr>

                      <tr>
                         <td>Examination Year</td>
                         <td>
                         <input required type="number" name="year">
                         </td>
                      </tr>

                      <tr>
                         <td>Examination Name</td>
                         <td>
                         <select   name="exam_name">
                            <option value="0">Select</option>
                            <option value="Class-I">Class-I</option>
                           <option value="Class-II">Class-II</option>
                           <option value="Class-III">Class-III</option>
                           <option value="Class-IV">Class-IV</option>
                           <option value="Class-V">Class-V</option>
                          
                        </select>
                        
                         </td>
                      </tr>
                      <tr>
                        <td><?php echo $first_num." ".$operator." ".$second_num." = "; ?></td>
                        <td> <input required  type="number" name="answer"></td>
                      </tr>

                      <tr>
                        <td></td>
                        <td> <input class="btn btn-success" type="submit" value="Submit" name="submit"></td>
                      </tr>
                  </table>
                  </form>
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
  <?php include('linkjs.php');?>
   

</body>
</html>
<!---Captucha-------> 
