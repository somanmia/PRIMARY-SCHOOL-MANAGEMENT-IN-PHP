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
    <title>Student Information</title>
    <!--============= Css Links======================
    =========================-->
   <?php include('links.php');?>
</head>
<body>
  <?php 
     require_once('../db_connect.php');
     
     

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
        <li class="nav-item">
          <a class="nav-link" href="add_data.php">add Data</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="result_upload.php">add Result</a>
        </li>
       
      </ul>
    </div>
   </div>
</nav>
<!---Show Section---->
<section id="show-data">
 <div class="container">
    <div class="row">
     <div class="col-xs-12 col-sm-12 col-md-10 col-lg-7" id="show-full-info">
         <h3 class="text-center text-primary mb-4 mt-4">Student Information</h3>
            <?php
             if(isset($_REQUEST['showid']))
             {
                 $showid=$_REQUEST['showid'];
                 $sqlshow="SELECT * FROM students_info WHERE Phone_family=$showid";
                
                 $runshow=mysqli_query($connect,$sqlshow);
                 if($runshow==true){
                     foreach($runshow as $myshowdata){
                          $imagelink=$myshowdata['id'].$myshowdata['Image'];
                         ?>
                      <table class="table table-bordered" id="show-table">
                           <tr>
                              <td colspan="2" style="text-align:center">
                                  <img src="../dist/uploads/images/<?php echo $imagelink;?>" alt="Pic Not Found" height="200px" width="200px" style="border-radius:50%;">
                              </td>
                           </tr>
                           <tr>
                             <td>id</td>
                             <td><?php echo $myshowdata['id'];?></td>
                           </tr>

                           <tr>
                             <td>Roll</td>
                             <td><?php echo $myshowdata['Roll'];?></td>
                           </tr>

                           <tr>
                             <td>Name</td>
                             <td><?php echo $myshowdata['Student_name'];?></td>
                           </tr>

                           <tr>
                             <td>Father's Name:</td>
                             <td><?php echo $myshowdata['Fathers_name'];?></td>
                           </tr>

                           <tr>
                             <td>Mother's Name:</td>
                             <td><?php echo $myshowdata['Mothers_name'];?></td>
                           </tr>

                           <tr>
                             <td>Village:</td>
                             <td><?php echo $myshowdata['Village'];?></td>
                           </tr>

                           <tr>
                             <td>City</td>
                             <td><?php echo $myshowdata['City'];?></td>
                           </tr>
                            
                            
                           <tr>
                             <td>Date of Birth:</td>
                             <td><?php echo $myshowdata['Date_of_birth'];?></td>
                           </tr>


                           <tr>
                             <td>Phone Number (family)</td>
                             <td><?php echo $myshowdata['Phone_family'];?></td>
                           </tr>

                           <tr>
                             <td>Email:</td>
                             <td><?php echo $myshowdata['Email'];?></td>
                           </tr>

                           <tr>
                             <td>Gender:</td>
                             <td><?php echo $myshowdata['Gender'];?></td>
                           </tr>
                      </table>
                      
                      <button onclick="window.print()"  class="btn btn-danger btn-lg">Print</button>
                    <?php }
                 }

             }

            ?>
     </div>
    </div>
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