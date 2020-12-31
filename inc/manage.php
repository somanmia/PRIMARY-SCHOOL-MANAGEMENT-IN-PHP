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
     $sql="SELECT* FROM students_info ORDER BY id DESC LIMIT 20";
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
          
        <a class="dropdown-item" href="academic_cost_insert.php">Academic Cost Class One - Five</a>
          
         
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
<!---Student Management Section-->
<section>
    <div class="container">
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
             <h1 class="text-center text-success mt-4 mb-4">Student Information</h1>
             <form class="form-inline" method="get" action="">
                <input  class="form-control ml-auto" type="search" placeholder="Enter Your Family Phone Number.." name="search">
                <input class="btn btn-primary ml-3" type="submit" value="Search" name="submit">
             </form>
        </div>

    </div>
</section>

<!---Search Student Show--------------->
<section id="searchinfo">
   <div class="container">
      <h5 class="text-primary mb-4">Search Information......</h5>
      <span class="text-success">
      <?php
           if(isset($_REQUEST['msq'])){
              echo $_REQUEST['msq'];
           }
      ?>
      </span>

      <table class="table table-bordered table-hover table-dark" id="student-list-table">
        <tr>
          
            <th>Id</th> 
            <th>Name</th>
            <th>Roll</th>
            <th>Email</th>
            <th>Village</th>
            <th>Action</th>
          
        </tr>
     <?php
     if(isset($_REQUEST['search'])){
       $fphone=$_REQUEST['search'];
      $sqls="SELECT * FROM `students_info` WHERE Phone_family='$fphone'";
      $runs=mysqli_query($connect,$sqls);
      if($runs==true){
        foreach($runs as $myvalue){?>
            <tr>
            <td><?php echo $myvalue['id'];?></td>
                 <td><?php echo $myvalue['Student_name'];?></td>
                 <td><?php echo $myvalue['Roll'];?></td>
                 <td><?php echo $myvalue['Email'];?></td>
                 <td><?php echo $myvalue['Village'];?></td>
                 <td>
                   <a class="btn btn-success btn-xs" href="show.php?showid=<?php echo $myvalue['Phone_family'];?>">Show</a>
                   <a class="btn btn-primary btn-xs" href="edit.php?editid=<?php echo $myvalue['id'];?>">Edit</a>
                   <a class="btn btn-success btn-xs" href="delete.php?deleteid=<?php echo $myvalue['id'];?>">Delete</a>
                  </td>
                
            </tr>
         
      <?php }
      }
    }
     ?>
      </table>
   </div>
</sectiion>
<!---Student List-->
<section id="student_list">
  <div class="container">
    <h3 class="text-primary mb-3 ">Student List......</h3>
    <table class="table table-bordered table-hover table-dark" id="student-list-table">
      <tr>   
          <th>Id</th> 
          <th>Name</th>
          <th>Roll</th>
          <th>Email</th>
          <th>Village</th>
          <th>Action</th>
      </tr>
      <?php
         if($run==true){
           foreach($run as $mydata){?>
               <tr>
                 <td><?php echo $mydata['id'];?></td>
                 <td><?php echo $mydata['Student_name'];?></td>
                 <td><?php echo $mydata['Roll'];?></td>
                 <td><?php echo $mydata['Email'];?></td>
                 <td><?php echo $mydata['Village'];?></td>
                 <td>
                   <a class="btn btn-success btn-xs" href="">Show</a>
                   <a class="btn btn-primary btn-xs" href="">Edit</a>
                   <a class="btn btn-success btn-xs" href="">Delete</a>
                  </td>
                
               </tr>
          <?php }

         }

      ?>
    </table>
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
    <?php include('linkjs.php');?>
</body>
</html>