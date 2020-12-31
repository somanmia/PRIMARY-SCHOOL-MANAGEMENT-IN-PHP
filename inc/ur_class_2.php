<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php include('links.php');?>
    <title>Document</title>

</head>
<body>
<!--Validation ----> 
<?php 
require_once('../db_connect.php');
$msq="";
if(isset($_REQUEST['stuid'])){
    $id=$_REQUEST['stuid'];
    $sql="SELECT * FROM class_2  WHERE id=$id";
    $run=mysqli_query($connect,$sql);
    if($run==true){
        foreach($run as $mydata){

        }
    }

}



?>
<?php
        $msq="";
        $roll="";
        $year="";
        $bangla="";
        $english="";
        $math="";
        if(isset($_REQUEST['submit'])){
              $year=$_REQUEST['year'];
              $bangla=$_REQUEST['bangla'];
              $english=$_REQUEST['english'];
              $math=$_REQUEST['math'];

              $sql="UPDATE class_2 SET Exm_year=$year,Bangla=$bangla,English=$english,Math=$math WHERE id= $id";
              $run=mysqli_query($connect,$sql);
              if($run==true){
                  $msq="Update Successfully";
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
    <a class="navbar-brand" href="#">Student App</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav ml-auto">
        <li class="nav-item active">
          <a class="nav-link" href="manage.php">Home</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link " href="add_student.php">Add Students</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="result_upload.php">add Result</a>
        </li>
       
      </ul>
    </div>
   </div>
</nav>


<!---Online Result Update-->
<section id="online-result-showcase">
</section>
    <section>
       <div class="container">
          <div class="row">
             <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6" id="primary-result-upload-title">
                <h5 class="text-center mb-4">RESULT UPDATE CLASS II</h5>
                  <form method="post" action="">
                     <div class="form-group">
                   
                  
                     <div class="form-group">
                          <label for="exmyear">পরিক্ষার সনঃ</label>
                          <input class="form-control" type="number" value="<?php echo $mydata['Exm_year'];?>" name="year" for="exmyear">
                         

                    </div>
                     <div class="form-group">
                       <label for="roll">রোল নাম্বারঃ</label>
                       <input  readonly class="form-control" type="number" name="roll" value="<?php echo $mydata['Roll'];?>" >
                     
                   </div>

                   <div class="form-group">
                       <label for="bangla">বাংলাঃ</label>
                       <input class="form-control" type="number" name="bangla" id="bangla" value="<?php echo $mydata['Bangla'];?>" >
                     
                   </div>

                   <div class="form-group">
                       <label for="english">ইংরেজীঃ</label>
                       <input class="form-control" type="number" name="english" id="english" value="<?php echo $mydata['English'];?>" >
                      
                   </div>

                   <div class="form-group">
                       <label for="math">সাধারণ গণিতঃ</label>
                       <input class="form-control" type="number" name="math" id="math" value="<?php echo $mydata['Math'];?>" >
                     

                   </div>

                 
                <div>
                 
                <input class="btn btn-success mt-2" type="submit" value="Upload" name="submit">
                <span class="text-success"><?php echo $msq;?></span>
                </div>
            
                  </form>
             </div>
          </div>
       </div>
    </section>

    <footer id="private_footer">
  <div class="contaier">
  <p> &copy; <?php echo date('Y');?> I Deal Exercise School.</p>
  </div>

 </footer>  
<?php include('linkjs.php');?>
</body>
</html>