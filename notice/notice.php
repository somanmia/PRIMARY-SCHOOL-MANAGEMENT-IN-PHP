<?php
   require_once('../db_connect.php');
   $ip=$_SERVER['REMOTE_ADDR'];
   $query="INSERT INTO visitor(ip) VALUES ('$ip')";
   $run=mysqli_query($connect,$query);
   


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
     <!----======================================
    =====================================CSS LINKS=======
    //-->
   
    <link rel="stylesheet" href="../dist/lib/bootstrap/css/font-awesome.min.css">
    <link rel="stylesheet" href="../dist/lib/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="../dist/css/style.css">
    <link rel="stylesheet" href="../dist/css/custom.css">
    <!--- =============== CSSS LINKS END=======
    =================================//
    -->
</head>



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
<a class="navbar-brand" href="#"><img src="../dist/images/logo/logo.png"></a>
<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
<span class="navbar-toggler-icon"></span>
</button>

<div class="collapse navbar-collapse" id="navbarSupportedContent">
<ul class="navbar-nav ml-auto">
  <li class="nav-item active">
    <a class="nav-link" href="../index.php">Home <span class="sr-only">(current)</span></a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="../about.php">About</a>
  </li>
  <li class="nav-item dropdown">
    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
      Academic Info
    </a>
    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
         <a class="dropdown-item" href="notice.php">Notice</a>
          <a class="dropdown-item" href="../academic_cost.php">Academic Cost</a>
          <a class="dropdown-item" href="../teacher_info.php">Teacher's Information</a>
         
      
     
    </div>
  </li>
</li>
<li class="nav-item">
  <a class="nav-link" href="../gallery.php">GALLERY</a>
</li>
  <li class="nav-item dropdown">
    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
      Result
    </a>
    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
      
    <a class="dropdown-item" href="../online_result.php">Result</a>
          <a class="dropdown-item" href="../result.php">Result Information</a>
    
     
    </div>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="../contact.php">Contact</a>
  </li>
  <li class="nav-item">
    <a  class="nav-link" href="../private.php"><i class="fa fa-user"></i> Log In</a>
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

<!---Notice Section-->
<div id="notice-section">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-3" id="main_menu_notice">
                  <div id="menu-list-notice">
                      <p>Main Menu</p>
                  </div>
                  <ul>
                    <li><a href="../index.php">Home</a></li>
                    <li><a href="../about.php">About Us</a></li>
                    <li><a href="../contact.php">Contact Us</a></li>
                    <li><a href="../gallery.php">Gallery</a></li>
                    <li><a href="../result.php">Result</a></li>
                    <li><a href="#">Admission</a></li>
                    <li><a href="##">Student Info</a></li>
                    <li><a href="../teacher_info.php">Teachers Info</a></li>

                  </ul>
                  <div id="menu-list-notice">
                    <p>Socail Media Links</p>
                </div> 
                <ul>
                  <li><a href="#">Facebook Pages</a></li>
                  <li><a href="#">Facebook Group</a></li>
                  

                </ul>

                <div id="menu-list-notice">
                  <p>Online Video Class</p>
              </div> 

              <ul>
                <li><a href="#">Links-1(Class I-X)</a></li>
                <li><a href="#">Links-2(Class I-X)</a></li>
                

              </ul>

                <!--important links-->
             <div id="menu-list-notice">
              <p>Important Links</p>
            </div>
         <!--links item-->
         <ul>
          <li><a href="#">English Second Paper</a></li>
          <li><a href="#">Higher Mathmatices</a></li>
          <li><a href="#">Physices</a></li>
          <li><a href="#">Chemistrsy</a></li>
          <li><a href="#">Before Result List</a></li>

        </ul>
        <!--Emergency Hotline-->
        <div id="menu-list-notice">
          <p>Emergency Hotline</p>
        </div>
         <div class="hotline">
          <p class="mb-2"><i class="fa fa-envelope"></i>support@gmail.com</p>
          <p class="mb-2"><i class="fa fa-phone"></i>09999999999</p>
          <p class="mb-2"><i class="fa fa-phone"></i>09999999999</p>
          <p class="mb-2"><i class="fa fa-phone"></i>09999999999</p>
         </div>
         <!--Subscribe-->
         <div id="menu-list-notice">
          <p>Subscribers</p>
        </div>

        <form class="subscribe">
           <label class="text-danger mb-1 ml-2" for="emal">E-mail:</label>
           <input class="form-control ml-2" required type="email" for="email" placeholder="Email">
           <input class="btn btn-success mt-2 ml-2"type="submit" value="Submit">
        </form>
    </div>





            <!--middle -->
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-9">
              <span class="primary">Home</span>&nbsp;><span class="text-danger">Notice</span>
                <div class="middle_1">
                   <span class="notice_title">সকল নোটিশ </span>
                    <div class="middle-2">
                          <table class="table table-bordered" id="notice_table">
                          <tr>
                          <th>#S.l</th>
                            <th>তারিখ</th>
                            <th>নোটিশ নাম</th>
                          </tr>
                      <?php
                       $count=0;
                         
                            $query="SELECT * FROM file_upload ORDER BY  Id DESC limit 20";
                            $run=mysqli_query($connect,$query);
                            if($run==true){

                                    foreach($run as $mydata){
                                      $filelinks=$mydata['Id'].'_'.$mydata['File_name'];
                                      ?>
                                       <tr>
                                         <td><?php echo $count++;?></td>
                                          <td><?php echo $mydata['Date'];?></td>
                                          <td><a href="../dist/uploads/files/<?php echo $filelinks;?>"><?php echo $mydata['Title'];?></a></td>
                                       </tr>

                                     <?php  }
                            }

                      ?>


                          </table>
                    </div>
                </div>
            </div>

            </div>
        </div>
    </div>
</div>
<!--Notice footer section------------> 
<section id="notice_footer" class="mt-3">
  <div class="container">
     <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-3" id="total_visitor">
               <h4>TOTAL VISITOR</h2>
               <h1>
                              <?php   $count=0;
                              
                                $sql="SELECT ip FROM visitor";
                                $run=mysqli_query($connect,$sql);
                    
                                    foreach($run as $mydata){
                                      $count++;
                                    }




                                   ?>
                <span class="count"><?php echo $count;?></span>
               

                          </h1>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-9" id="notice_number">
                <ul>
                  <li><a href="1.php">Next</a></li>
                  <li><a href="2.php">2</a></li>
                  <li><a href="3.php">3</a></li>
                  <li><a href="4.php">4</a></li>
                  <li><a href="5.php">5</a></li>
                  <li><a href="6.php">6</a></li>
                  <li><a href="7.php">7</a></li>
                  <li><a href="8.php">8</a></li>
                  <li><a href="9.php">9</a></li>
                  <li><a href="10.php">10</a></li>
                  <li><a href="11.php">11</a></li>
                  <li><a href="12.php">12</a></li>
                  <li><a href="13.php">13</a></li>
                  <li><a href="14.php">14</a></li>
                  <li><a href="15.php">15</a></li>
                  <li><a href="16.php">16</a></li>
                  <li><a href="17.php">17</a></li>
                  <li><a href="18.php">18</a></li>
                  <li><a href="19.php">19</a></li>
                  <li><a href="20.php">20</a></li>
                  <li><a href="21.php">21</a></li>
                  <li><a href="22.php">22</a></li>
                  <li><a href="23.php">23</a></li>
                  <li><a href="24.php">24</a></li>
                  <li><a href="25.php">25</a></li>
                 
                </ul>

            
        </div>
     
     </div>
  </div>
</section>

    
<!--FOOTER SECTION----> 
<footer id="footer_section" style="margin-top:50px">
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
    <script src="../dist/lib/jquery/jquery-3.4.1.js"></script>
    <script src="../dist/lib/plugin/counterup/jquery.waypoints.min.js"></script>
    <script src="../dist/lib//plugin//counterup/jquery.counterup.min.js"></script>
    <script src="../dist/lib/bootstrap/js/bootstrap.min.js"></script>
     <script src="../dist/lib/bootstrap/js/popper.min.js"></script>
    
    <script src="../dist/js/main.js"></script>

</body>
</html>
