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
    <title>Document</title>
    <!--============= Css Links======================
    =========================-->
   <?php include('links.php');?>
</head>
<body>
  <!---Validation---------> 
  <?php 
 require_once('../db_connect.php');
 $update_examination="";
 $vupdate_examination="";
 $usroll="";
 $vusroll="";
 $ck=0;
$count=0;
 
 
 
 if(isset($_REQUEST['ursubmit'])){
    $update_examination=$_REQUEST['update_examination'];
    $usroll=trim($_REQUEST['usroll']);
    if($update_examination=="0"){
        $ck++;
        $vupdate_examination="<span class='text-danger'>Required</span>";

    }if($usroll==""){
       $ck++;
       $vusroll="<span class='text-danger'>Required</span>";
    }if($ck==0){
         
                      if($update_examination=="Class-I"){
                      $sql1="SELECT * FROM `class_1` WHERE Roll=$usroll";
                      $run1=mysqli_query($connect,$sql1);
                      if($run1==true){
                        $count=mysqli_num_rows($run1);
                      }
                      }
                      if($update_examination=="Class-II"){
                      $sql1="SELECT * FROM class_2 WHERE Roll=$usroll";
                      $run2=mysqli_query($connect,$sql1);
                      if($run2==true){
                        $count=mysqli_num_rows($run2);
                      }
                    }
                    if($update_examination=="Class-III"){
                      $sql1="SELECT * FROM class_3 WHERE Roll=$usroll";
                      $run3=mysqli_query($connect,$sql1);
                      if($run3==true){
                        $count=mysqli_num_rows($run3);
                      }
                    }
                    if($update_examination=="Class-IV"){
                      $sql1="SELECT * FROM class_4 WHERE Roll=$usroll";
                      $run4=mysqli_query($connect,$sql1);
                      if($run4==true){
                        $count=mysqli_num_rows($run4);
                      }
                    }
                    if($update_examination=="Class-V"){
                      $sql1="SELECT * FROM class_5 WHERE Roll=$usroll";
                      $run5=mysqli_query($connect,$sql1);
                      if($run5==true){
                        $count=mysqli_num_rows($run5);
                      }
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


<!---Result Upload Section----->
<section class="update-result-section">
  <div class="container">
    <div class="row">
     
      <div class="col">
        <h3 class="text-success text-center mt-3 mb-4">প্রাথমিক বিদ্যালয়ের রেজাল্ট পরিবর্তন</h3>
        <p>
          <span class="text-title">সোশ্যাল</span> ইঞ্জিনিয়ারিং এক ধরেনের মনোবৈজ্ঞানিক কৌশল, যেখানে অত্যন্ত চতুরতার সাথে ভিকটিমের গুরুতবপূর্ণ তথ্য বের করে আনা হয়। এই তথ্য দেয়ার কাজটা ভিকটিম নিজের অজান্তে নিজেরি করে থাকে। যেমন ফেসবুক অ্যাকাউন্টের “সিকিউরিটি কোয়েশ্চন” – এ মায়ের জন্ম স্থান কোথায় এর উত্তর কেও  প্রদান করল ঢাকা। যদি উত্তরটি সঠিক এবং সত্যি থাকে , তাহলে একজন হ্যাকার এর  পক্ষে খুব সহজেই এই উত্তরটা অনুমান করা সম্ভব।
          সোশ্যাল ইঞ্জিনিয়ারিং এক ধরেনের মনোবৈজ্ঞানিক কৌশল, যেখানে অত্যন্ত চতুরতার সাথে ভিকটিমের গুরুতবপূর্ণ তথ্য বের করে আনা হয়। এই তথ্য দেয়ার কাজটা ভিকটিম নিজের অজান্তে নিজেরি করে থাকে। যেমন ফেসবুক অ্যাকাউন্টের “সিকিউরিটি কোয়েশ্চন” – এ মায়ের জন্ম স্থান কোথায় এর উত্তর কেও  প্রদান করল ঢাকা। যদি উত্তরটি সঠিক এবং সত্যি থাকে , তাহলে একজন হ্যাকার এর  পক্ষে খুব সহজেই এই উত্তরটা অনুমান করা সম্ভব।

      </p>

      </div>
    </div>
  </div>
</section>


<!--Update Form-section---> 
<section id="update_search_section">
    <div class="container">
        <div class="row">
            
      <form class="mt-4 col-xs-12 col-sm-12 col-md-6 col-lg-6 m-auto" method="post" action="" id="ur_update_section">
        <div class="form-group">
           <label>Examination:</label>
           <select class="form-control" name="update_examination">
                <option value="0">Select</option>
                <option value="Class-I">Class-I</option>
                <option value="Class-II">Class-II</option>
                <option value="Class-III">Class-III</option>
                <option value="Class-IV">Class-IV</option>
                <option value="Class-V">Class-V</option>
           </select>
           <?php  echo $vupdate_examination;?>
        </div>
        <div class="form-group mt-4">
          <label for="roll">Enter Roll :</label>
          <input class="form-control" type="number" name="usroll" value="<?php echo $usroll;?>">
          <?php echo $vusroll;?>
       </div>

       <div class="form-group">
           <input type="submit" class="btn btn-success" name="ursubmit">
         
</div>
     </form>

        </div>
    </div>
    <section>
<!---Update Searching result-->
<section id="update_search_result">
  <div class="container">
    <div class="row">
    <h4 class="text-success">
       <?php 
            if(isset($_REQUEST['dmsq'])){
              echo $_REQUEST['dmsq'];
            }
       ?>
    </h4>
      <div class="col">
   
      <?php
         if($update_examination=="Class-I"){
             
              
              if($count>0){?>
                  <table class="table table-bordered table-hover table-dark">
                     <tr>
                        <th>S.t-id</th>
                        <th>Examination Year:</th>
                        <th>Roll</th>
                        <th>Bangla</th>
                        <th>English</th>
                        <th>Math</th>
                        <th>Action</th>
                     </tr>
                     <?php
                            foreach($run1 as $mydata){?>
                               <tr>
                                 <td><?php echo $mydata['id'];?></td>
                                 <td><?php echo $mydata['Exm_year'];?></td>
                                 <td><?php echo $mydata['Roll'];?></td>
                                 <td><?php echo $mydata['Bangla'];?></td>
                                 <td><?php echo $mydata['English'];?></td>
                                 <td><?php echo $mydata['Math'];?></td>
                                 <td>
                                  <a class="btn btn-primary" href="ur_class_1.php?stuid=<?php echo $mydata['id'];?>">Edit</a>
                                  <a class="btn btn-danger" href="result_delete.php?class_1_id=<?php echo $mydata['id'];?>">Delete</a>
                                  
                                 </td>
                               </tr>

                           <?php }  
                     ?>
                  </table>

              <?php
			  }else{
               
                echo "<h1 style='margin-top:50px;' class='text-danger text-center'>Not Found</h1>";
              }
            
         }
         // step---2//
      else if($update_examination=="Class-II"){
         
          
          if($count>0){?>
              <table class="table table-bordered table-hover table-dark">
                 <tr>
                    <th>S.t-id</th>
                    <th>Examination Year:</th>
                    <th>Roll</th>
                    <th>Bangla</th>
                    <th>English</th>
                    <th>Math</th>
                    <th>Action</th>
                 </tr>
                 <?php
                        foreach($run2 as $mydata){?>
                           <tr>
                             <td><?php echo $mydata['id'];?></td>
                             <td><?php echo $mydata['Exm_year'];?></td>
                             <td><?php echo $mydata['Roll'];?></td>
                             <td><?php echo $mydata['Bangla'];?></td>
                                 <td><?php echo $mydata['English'];?></td>
                                 <td><?php echo $mydata['Math'];?></td>
                             <td>
                              <a class="btn btn-primary" href="ur_class_2.php?stuid=<?php echo $mydata['id']?>">Edit</a>
                              <a  class="btn btn-danger" href="result_delete.php?class_2_id=<?php echo $mydata['id'];?>">Delete</a>
                              
                             </td>
                           </tr>

                       <?php }  
                 ?>
              </table>

          <?php
    }else{
           
            echo "<h1 style='margin-top:50px;' class='text-danger text-center'>Not Found</h1>";
          }
        
     }
     //step3--//

     if($update_examination=="Class-III"){
   
      
      if($count>0){?>
          <table class="table table-bordered table-hover table-dark">
             <tr>
                <th>S.t-id</th>
                <th>Examination Year:</th>
                <th>Roll</th>
                <th>Bangla</th>
                <th>English</th>
                <th>Math</th>
                <th>Action</th>
             </tr>
             <?php
                    foreach($run3 as $mydata){?>
                       <tr>
                         <td><?php echo $mydata['id'];?></td>
                         <td><?php echo $mydata['Exm_year'];?></td>
                         <td><?php echo $mydata['Roll'];?></td>
                         <td><?php echo $mydata['Bangla'];?></td>
                                 <td><?php echo $mydata['English'];?></td>
                                 <td><?php echo $mydata['Math'];?></td>
                         <td>
                          <a class="btn btn-primary" href="ur_class_3.php?id=<?php echo $mydata['id'];?>">Edit</a>
                          <a  class="btn btn-danger" href="result_delete.php?class_3_id=<?php echo $mydata['id'];?>">Delete</a>
                          
                         </td>
                       </tr>

                   <?php }  
             ?>
          </table>

      <?php
}else{
       
        echo "<h1 style='margin-top:50px;' class='text-danger text-center'>Not Found</h1>";
      }
    
 }

 // step--4---
 
 if($update_examination=="Class-IV"){
  
  
  if($count>0){?>
      <table class="table table-bordered table-hover table-dark">
         <tr>
            <th>S.t-id</th>
            <th>Examination Year:</th>
            <th>Roll</th>
            <th>Bangla</th>
            <th>English</th>
            <th>Math</th>
            <th>Action</th>
         </tr>
         <?php
                foreach($run4 as $mydata){?>
                   <tr>
                     <td><?php echo $mydata['id'];?></td>
                     <td><?php echo $mydata['Exm_year'];?></td>
                     <td><?php echo $mydata['Roll'];?></td>
                     <td><?php echo $mydata['Bangla'];?></td>
                                 <td><?php echo $mydata['English'];?></td>
                                 <td><?php echo $mydata['Math'];?></td>
                     <td>
                      <a class="btn btn-primary" href="ur_class_4.php?stuid=<?php echo $mydata['id']?>">Edit</a>
                      <a  class="btn btn-danger" href="result_delete.php?class_4_id=<?php echo $mydata['id'];?>">Delete</a>
                      
                     </td>
                   </tr>

               <?php }  
         ?>
      </table>

  <?php
}else{
   
    echo "<h1 style='margin-top:50px;' class='text-danger text-center'>Not Found</h1>";
  }

}

//step--5---//

if($update_examination=="Class-V"){
 
  
  if($count>0){?>
      <table class="table table-bordered table-hover table-dark">
         <tr>
            <th>S.t-id</th>
            <th>Examination Year:</th>
            <th>Roll</th>
            <th>Bangla</th>
            <th>English</th>
            <th>Math</th>
            <th>Action</th>
         </tr>
         <?php
                foreach($run5 as $mydata){?>
                   <tr>
                     <td><?php echo $mydata['id'];?></td>
                     <td><?php echo $mydata['Exm_year'];?></td>
                     <td><?php echo $mydata['Roll'];?></td>
                     <td><?php echo $mydata['Bangla'];?></td>
                                 <td><?php echo $mydata['English'];?></td>
                                 <td><?php echo $mydata['Math'];?></td>
                     <td>
                      <a class="btn btn-primary" href="ur_class_5.php?stuid=<?php echo $mydata['id']?>">Edit</a>
                      <a  class="btn btn-danger" href="result_delete.php?class_5_id=<?php echo $mydata['id'];?>">Delete</a>
                      
                     </td>
                   </tr>

               <?php }  
         ?>
      </table>

  <?php
}else{
   
    echo "<h1 style='margin-top:50px;' class='text-danger text-center'>Not Found</h1>";
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