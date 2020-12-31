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
    <title>Admin Section||</title>
    <!--============= Css Links======================
    =========================-->
    <link rel="stylesheet" href="../dist/lib/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="../dist/lib/bootstrap/css/font-awesome.min.css">
    <link rel="stylesheet" href="../dist/css/style.css">
    <link rel="stylesheet" href="../dist/css/custom.css">
</head>
<body style="background:#ddd;">




<?php

   require_once('../db_connect.php');
   $msq="";
   $adminname="";
   $adminpassword="";
   if(isset($_REQUEST['ok'])){
       $adminname=md5(sha1($_REQUEST['adminname']));
       $adminpassword=md5(sha1($_REQUEST['adminpassword']));  
       $clr="TRUNCATE TABLE admin_password";
       $clrrun=mysqli_query($connect,$clr);

        $sql="INSERT INTO admin_password(Email,password)
         values('$adminname','$adminpassword')";
        
         $run=mysqli_query($connect,$sql);
        
         if($run==true){
              $msq="Change Successfully!";
         }
         else{
          $msq=mysqli_error($connect);
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
    <a class="navbar-brand" href="admin.php">Admin <i class="fa fa-user"></i></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item active">
                <a  class="nav-link" href="manage.php">Home</a>
                </li>

                <li class="nav-item active">
                <a  class="nav-link" href="news.php">Latest News</a>
                </li>
    
   
      
      </ul>
    </div>
   </div>
</nav>


<section class="admin-panel" style="height:autu;">
    <div class="container">
        <div class="col-xs-12 col-sm-12 col-md-8 col-lg-6" id="admin-login-section" style="height:250px">
            <p>Password Change Admin Panel</p>
            <hr>
            <form method="post" action="">
               <table id="admin_table">
                   <tr>
                     <td>Handle/Email:</td>
                     <td><input required type="text" name="adminname">
                   </tr>

                   <tr>
                     <td>Password:</td>
                     <td><input required type="password" name="adminpassword">
                   </tr>
                

                   <tr>
                     <td></td>
                     <td><input required type="submit" name="ok" Value ="Submit"><span class="text-danger">&nbsp;<?php echo $msq;?></span></td>
                   </tr>

                  
                  
               </table>
            </form>
            <hr class="admin_secondary_har">
           <ul>
             <li><a href="www.facebook.com"><i class="fa fa-facebook"></i></a></li>
             <li><a href="www.facebook.com"><i class="fa fa-skype"></i></a></li>
             <li><a href="www.facebook.com"><i class="fa fa-twitter"></i></a></li>
           </ul>
           

        </div>
    </div>
</section>

<footer id="private_footer" style="position:fixed;bottom:0;width:100%">
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