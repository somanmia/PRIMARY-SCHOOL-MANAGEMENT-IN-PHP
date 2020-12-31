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
    <title>Collect Student Information</title>
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
    $fee_class="";
    $admission_fee="";
    $session_fee="";
    $monthly_fee="";
    $coaching_fee="";
    $vadmission_fee="";
    $vsession_fee="";
    $vmonthly_fee="";
    $vcoaching_fee="";
    $vfee_class="";

    // Update Variable---------//
    $msq2="";
    $fee_class2="";
    $admission_fee2="";
    $session_fee2="";
    $monthly_fee2="";
    $coaching_fee2="";
    $vadmission_fee2="";
    $vsession_fee2="";
    $vmonthly_fee2="";
    $vcoaching_fee2="";
    $vfee_class2="";
    //insert section------//
    if(isset($_REQUEST['submit'])){
        $fee_class=$_REQUEST['fee_class'];
        $admission_fee=$_REQUEST['admission_fee'];
        $session_fee=$_REQUEST['session_fee'];
        $monthly_fee=$_REQUEST['monthly_fee'];
        $coaching_fee=$_REQUEST['coaching_fee'];
        $ck=0;
        if($fee_class=="0"){
           $ck++;
           $vfee_class="<span class='text-danger'>Required</span>";
        }else if(!($fee_class=="0")){
          $check_sql="SELECT * FROM academic_cost";
          $run=mysqli_query($connect,$check_sql);
          if($run==true){
              foreach($run as $myvalue){
                $class_name=$myvalue['class'];
                if($class_name==$fee_class){
                    $ck++;
                    $vfee_class="<span class='text-danger'>Already Taken</span>";
                }
              }
          }
        }
        
        if($admission_fee==""){
          $ck++;
          $vadmission_fee="<span class='text-danger'>Required</span>";
        } if($session_fee==""){
          $ck++;
          $vsession_fee="<span class='text-danger'>Required</span>";
        } if($monthly_fee==""){
          $ck++;
          $vmonthly_fee="<span class='text-danger'>Required</span>";
        } if($coaching_fee==""){
          $ck++;
          $vcoaching_fee="<span class='text-danger'>Required</span>";
        }
        if($ck==0){
          $sql="INSERT INTO academic_cost(class, admission_fee, session_fee, monthly_fee, coaching_fee)
           VALUES 
           ($fee_class,$admission_fee,$session_fee,$monthly_fee,$coaching_fee)";
           $run=mysqli_query($connect,$sql);
           if($run==true){
             $msq="<span class='text-danger'>Data Saved</span>";
             $fee_class="";
             $admission_fee="";
             $session_fee="";
             $monthly_fee="";
             $coaching_fee="";
           }
         else{
           $msq=mysqli_error($connect);
         }
        }
    }


    // Update section-----//
   else if(isset($_REQUEST['submit2'])){
      $fee_class2=$_REQUEST['fee_class'];
      $admission_fee2=$_REQUEST['admission_fee'];
      $session_fee2=$_REQUEST['session_fee'];
      $monthly_fee2=$_REQUEST['monthly_fee'];
      $coaching_fee2=$_REQUEST['coaching_fee'];
      $ck=0;
      if($fee_class2=="0"){
         $ck++;
         $vfee_class2="<span class='text-danger'>Required</span>";
      }if($admission_fee2==""){
        $ck++;
        $vadmission_fee2="<span class='text-danger'>Required</span>";
      } if($session_fee2==""){
        $ck++;
        $vsession_fee2="<span class='text-danger'>Required</span>";
      } if($monthly_fee2==""){
        $ck++;
        $vmonthly_fee2="<span class='text-danger'>Required</span>";
      } if($coaching_fee2==""){
        $ck++;
        $vcoaching_fee2="<span class='text-danger'>Required</span>";
      }
      if($ck==0){
         
        $update_sql="UPDATE academic_cost SET    class='$fee_class2',admission_fee='$admission_fee2',session_fee='$session_fee2',monthly_fee='$monthly_fee2',coaching_fee= '$coaching_fee2' WHERE class='$fee_class2'";
        $run=mysqli_query($connect,$update_sql);
         if($run==true){
           $msq2="<span class='text-danger'>Update Successfully..</span>";
           $fee_class2="";
           $admission_fee2="";
           $session_fee2="";
           $monthly_fee2="";
           $coaching_fee2="";
         }
       else{
         $msq2=mysqli_error($connect);
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
    <a class="navbar-brand" href="manage.php">Student App</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav ml-auto">
        <li class="nav-item active">
          <a  class="nav-link" href="manage.php">Home</a>
        </li>
       
        <li class="nav-item active">
          <a  class="nav-link" href="student_message.php">Student's Message</a>
        </li>
        <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
         Result
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          
          <a class="dropdown-item" href="result_upload.php">Result Upload</a>
          <a class="dropdown-item" href="update_result.php">Result Update</a>
          
         
        </div>
      </li>
      
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
         Academic Cost
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          
          <a class="dropdown-item" href="academic_cost_insert.html">Academic Cost Class One - Five</a>
          
          
         
        </div>
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
      </ul>
    </div>
   </div>
</nav>

<section class="private-news">
  <marquee class="pt-2">আইডিয়্যাল এক্সারসাইজ স্কুল রঘুনাথপুর শেরপুর সদর শেরপুর । ছাত্র-ছাত্রীদের সঠিক তথ্য সংগ্রহ করে নিচের ফরম শতর্কতার সাতে পুরণ করবেন। কোন ভুল তথ্য প্রধান করবেন না।</marquee>
</section>

<!----Academic Cost Class One From Five.............-->
<section id="academic_cost_insert">
   <div class="container">
    <h3 class="text-danger mb-4 text-center">ছাত্র-ছাত্রীদের একাডেমিক খরচ ।</h3>
           <form  method="post" id="academic_cost_insert_form" action="">
             <div class="row">

              <div class="form-group col-xs-12 col-sm-12 col-md-6 col-lg-6">
                <label class="mb-2">শ্রেণী নির্বাচন করুনঃ</label>
                <select class="form-control" name="fee_class">
                  <option value="0">নির্বাচন করুন</option>
                  <option value="1">প্রথম শ্রেণী</option>
                  <option value="2">দিত্বীয় শ্রেণী</option>
                  <option value="3">তৃত্বীয় শ্রেণী</option>
                  <option value="4">চতুর্থ শ্রেণী</option>
                  <option value="5">পঞ্চম শ্রেণী</option>
                </select>
               <?php echo $vfee_class;?>
              </div>

              <div class="form-group col-xs-12 col-sm-12 col-md-6 col-lg-6">
                <label class="mb-2">ভর্তি ফিঃ</label>
                <input type="number" value="<?php echo $admission_fee;?>" class="form-control" name="admission_fee">
                <?php echo $vadmission_fee;?>
              </div>
             

             <div class="form-group col-xs-12 col-sm-12 col-md-6 col-lg-6">
              <label class="mb-2">সেশন ফি ঃ</label>
              <input type="number"  value="<?php echo $session_fee;?>" class="form-control" name="session_fee">
              <?php echo $vsession_fee;?>
            </div>

            
            <div class="form-group col-xs-12 col-sm-12 col-md-6 col-lg-6">
              <label class="mb-2">মাসিক বেতন ঃ</label>
              <input type="number"  value="<?php echo $monthly_fee;?>" class="form-control" name="monthly_fee">
              <?php echo $vmonthly_fee;?>
            </div>

            <div class="form-group col-xs-12 col-sm-12 col-md-12 col-lg-12">
              <label class="mb-2">কোচিং ফি ঃ</label>
              <input type="number"  value="<?php echo $coaching_fee;?>" class="form-control" name="coaching_fee" >
              <?php echo $vcoaching_fee;?>
            </div>
            <div class="form-group">
              <button class="btn btn-primary ml-3" type="submit"  name="submit">Submit</button>
             <span>
                 <?php echo $msq;?>
            </span>
            </div>
           </div>
               
           </form>     
        
   </div>
</section>


  
<section id="academic_cost_insert" class='mb-4'>
  <div class="container">
   <h3 class="text-danger mb-4 text-center">ছাত্র-ছাত্রীদের একাডেমিক খরচ পরিবর্তন ।</h3>
   <form  method="post" id="academic_cost_insert_form" action="">
             <div class="row">

              <div class="form-group col-xs-12 col-sm-12 col-md-6 col-lg-6">
                <label class="mb-2">শ্রেণী নির্বাচন করুনঃ</label>
                <select class="form-control" name="fee_class">
                  <option value="0">নির্বাচন করুন</option>
                  <option value="1">প্রথম শ্রেণী</option>
                  <option value="2">দিত্বীয় শ্রেণী</option>
                  <option value="3">তৃত্বীয় শ্রেণী</option>
                  <option value="4">চতুর্থ শ্রেণী</option>
                  <option value="5">পঞ্চম শ্রেণী</option>
                </select>
               <?php echo $vfee_class2;?>
              </div>

              <div class="form-group col-xs-12 col-sm-12 col-md-6 col-lg-6">
                <label class="mb-2">ভর্তি ফিঃ</label>
                <input type="number" value="<?php echo $admission_fee2;?>" class="form-control" name="admission_fee">
                <?php echo $vadmission_fee2;?>
              </div>
             

             <div class="form-group col-xs-12 col-sm-12 col-md-6 col-lg-6">
              <label class="mb-2">সেশন ফি ঃ</label>
              <input type="number"  value="<?php echo $session_fee2;?>" class="form-control" name="session_fee">
              <?php echo $vsession_fee2;?>
            </div>

            
            <div class="form-group col-xs-12 col-sm-12 col-md-6 col-lg-6">
              <label class="mb-2">মাসিক বেতন ঃ</label>
              <input type="number"  value="<?php echo $monthly_fee2;?>" class="form-control" name="monthly_fee">
              <?php echo $vmonthly_fee2;?>
            </div>

            <div class="form-group col-xs-12 col-sm-12 col-md-12 col-lg-12">
              <label class="mb-2">কোচিং ফি ঃ</label>
              <input type="number"  value="<?php echo $coaching_fee2;?>" class="form-control" name="coaching_fee" >
              <?php echo $vcoaching_fee2;?>
            </div>
            <div class="form-group">
              <button class="btn btn-primary ml-3" type="submit"  name="submit2">Submit</button>
             <span>
                 <?php echo $msq2;?>
            </span>
            </div>
           </div>
               
           </form>     
  </div>
</section>

<footer id="private_footer">
  <div class="contaier">
  <p> &copy; <?php echo date('Y');?> I Deal Exercise School.</p>
  </div>

 </footer>  
    <!--=========Javascript links=============-->
    <!--============= JAVASCRIPT LINKS================
    ========================LINKS===============
    -->
    <!--============= JAVASCRIPT LINKS================
    ========================LINKS===============
    -->
    <script src="../dist/lib/jquery/jquery-3.4.1.js"></script>
   
    <script src="../dist/lib/bootstrap/js/bootstrap.min.js"></script>
     <script src="../dist/lib/bootstrap/js/popper.min.js"></script>
    <script src="../dist/js/main.js"></script>
</body>
</html>