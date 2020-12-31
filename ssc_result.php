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
    <title>SSC  || RESULT</title>
    <?php include('links.php');?>
</head>
<body>
    <?php
     
       $sql="SELECT* from ssc";
       $runquery=mysqli_query($connect,$sql);
    ?>
  <section>
      <div class="container">
          <div class="row">
              <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                  <h5 class="text-primary">SSC RESUlT</h5><hr>
                  <h5 class="text-primary mt-1 mb-3">I Deal Exercise School</h5>
                  <table class="table table-bordred">
                                <tr>
                                     <th>Year</th>
                                     <th>Total Student</th>
                                     <th>Pass</th>
                                     <th> Fail </th>
                                     <th>A+ </th>
                                     <th>A</th>
                               </tr>
                       <?php
                         if($runquery==true){
                              foreach($runquery as $mydata){?>
                                          <tr>
                                   <td><?php  echo $mydata['Exam_Year'] ;?></td>
                                   <td><?php  echo $mydata['Total_Student'] ;?></td>
                                   <td><?php  echo $mydata['Passed'] ;?></td>
                                   <td><?php  echo $mydata['Fail'] ;?></td>
                                   <td><?php  echo $mydata['Gpa_5'] ;?></td>
                                   <td><?php  echo $mydata['Gpa_4'] ;?></td>
                             </tr> 
                            <?php  }
                             
                         }
                       
                       
                       ?>

                          </table>
              </div>   
          </div>
      </div>
  </section>


  <?php include('linkjs.php');?>
</body>
</html>