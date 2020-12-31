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
     $con=date('d/m/Y');
     require_once('../db_connect.php');
     $sql="SELECT * FROM student_message where Date='$con'";
     $run=mysqli_query($connect,$sql);

    
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

<!---Student Message-----> 

<div class="student_message_min_show">
<div class="container">
<div class="row">
    <div class="col">
    <h3 class="text-success text-center mt-4">Student Message Show </h3>
    <h5 class="text-success mb-2">
    <?php 
      if(isset($_REQUEST['msq'])){
          echo $_REQUEST['msq'];
      }
    ?>
    </h5>
        <table class="table table-bordered table-hover table-dark">
           <tr>
              <th>S.L</th>
              <th>Name</th>
              <th>Class</th>
              <th>Roll</th>
              <th>Phone</th>
              <th>Date</th>
              <th>Action</th>
           </tr>

           <?php
              if($run==true){
                  foreach($run as $myvalue){?>
                    <tr>
                      <td><?php echo $myvalue['id'];?></td>
                      <td><?php echo $myvalue['Name'];?></td>
                      <td><?php echo $myvalue['Class'];?></td>
                      <td><?php echo $myvalue['Roll'];?></td>
                      <td><?php echo $myvalue['Phone'];?></td>
                      <td><?php echo $myvalue['Date'];?></td>
                      <td>
                          <a class="btn btn-success" href="msq_delete.php?deleteid=<?php echo $myvalue['id'];?>">Delete</a>
                          <a class="btn btn-primary" href="message_show.php?showid=<?php echo $myvalue['id'];?>">Show</a>
                          <a class="btn btn-danger" href="msq_clear.php?clearid=<?php echo $myvalue['id'];?>">Clear</a>
                      </td>
                    </tr>
                 <?php  }

              }
 
          ?>
        </table>
    </div>
</div>
</div>
</div>

 <footer id="private_footer">
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



