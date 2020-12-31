<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <?php include('links.php');?>
</head>
<body style="background:#ddd">

<?php 
  require_once('../db_connect.php');
 $city="";
 $vcity="";
 $msq="";

 $village="";
 $vvillage="";
 $msq2="";
 if(isset($_REQUEST["submitcity"])){
   $city=$_REQUEST['city'];
   $ck=0;
   if($city==""){
       $ck++;
       $vcity="<span class='text-danger'>Required</span>";
   }
   if($ck==0){
      $sql="insert into city(city) values('".mysqli_real_escape_string($connect,strip_tags($city))."')";
      $run=mysqli_query($connect,$sql);
      if($run==true){
          $msq="Uploded Successfully";
          $city="";
      }else{
          $msq=mysqli_error($connect);
      }
   }else{
      
   }
 }

 // village Validation------//
 if(isset($_REQUEST['submitvillage'])){
        $village=$_REQUEST['village'];
        $ck=0;
        if($village==""){
            $ck++;
            $vvillage="<span class='text-danger'>Required</span>";
        }if($ck==0){
            $sql="INSERT INTO village(village) VALUES('".mysqli_real_escape_string($connect,strip_tags($village))."')";
            $run=mysqli_query($connect,$sql);
            if($run==true){
                $msq2="Uploaded Successfully";
                $village="";
            }else{
                $msq2=mysqli_error($connect);
            }
        }
 }

?>
        <!--Header Area-->
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

<!----Add data-----> 
<div id="add-data">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6" id="city">
                <h3 class="text-center text-danger">Add City</h3>
                 <form  method="post" action="">
                    
                      <div class="form-group">
                          <label for="city">Enter City:</label>
                          <input class="form-control" type="text" value="<?php echo $city;?>" name="city" id="city">
                          <?php echo $vcity;?>
                      </div>
                      <div class="form-group">
                            <input class="btn btn-success" type="submit" value="Submit" name="submitcity">
                            <span class="text-danger"><?php echo $msq;?></span>
                        </div>
                </form>
            </div>

            <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6" id="village">
                <h3 class="text-center text-danger">Add Village</h3>
                 <form method="post" action="">
                    
                      <div class="form-group">
                          <label for="village">Enter Village:</label>
                          <input class="form-control" type="text" name="village" id="village" value="<?php echo $village;?>">
                          <?php echo $vvillage;?>
                      </div>
                      <div class="form-group">
                            <input class="btn btn-success" type="submit" value="Submit" name="submitvillage">
                            <span class="text-danger"><?php echo $msq2;?></span>
                        </div>
                </form>
            </div>

           
        </div>
    </div>
</div>
<footer id="main_footer">
<div class="contaier">
  <p> &copy; <?php echo date('Y');?> I Deal Exercise School.</p>
  </div>
</footer>
<?php include('linkjs.php');?>
</body>
</html>