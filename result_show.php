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
    <title>Header || Section</title>
    <?php include('links.php');?>
</head>
<body>
<!--Validation---> 
<?php 
session_start();

$exam_name="";
$uanswer="";
$ranswer="";
$exam_name="";
$roll="";
$count=0;
$year="";

if(isset($_REQUEST['submit'])){
  
    $exam_name=$_REQUEST['exam_name'];

    $uanswer=$_REQUEST['answer'];
    $ranswer=$_SESSION['ranswer'];
    $ck=0;
     if($exam_name=="0"){
        $ck++;
        $_SESSION['message']="<span class='text-danger'>Required Fields</span>";
        
    }
    
    else if(!($uanswer==$ranswer)){
        $ck++;
        $_SESSION['message']="<span class='text-danger'>Worng Captcha!!!</span>";
    }if($ck==0){
      require_once('db_connect.php');
      if(isset($_REQUEST['submit'])){
        $exam_name=$_REQUEST['exam_name'];
        $year=$_REQUEST['year'];
        $roll=$_REQUEST['roll'];
        
        if($exam_name=="Class-I"){
          $sql_1="SELECT * FROM `class_1` WHERE Roll=$roll AND Exm_year=$year";
          $run1=mysqli_query($connect,$sql_1);
          if($run1==true){
            $count=mysqli_num_rows($run1);
           
          }
        }
        // Class---2---//
        else  if($exam_name=="Class-II"){
          $sql_1="SELECT * FROM `class_2` WHERE Roll=$roll AND Exm_year=$year";
          $run2=mysqli_query($connect,$sql_1);
          if($run2==true){
            $count=mysqli_num_rows($run2);
           
          }
        }
        // Class---3---//
        else  if($exam_name=="Class-III"){
          $sql_1="SELECT * FROM `class_3` WHERE Roll=$roll AND Exm_year=$year";
          $run3=mysqli_query($connect,$sql_1);
          if($run3==true){
            $count=mysqli_num_rows($run3);
           
          }
        }
      // Class---4--//
      else  if($exam_name=="Class-IV"){
        $sql_1="SELECT * FROM `class_4` WHERE Roll=$roll AND Exm_year=$year";
        $run4=mysqli_query($connect,$sql_1);
        if($run4==true){
          $count=mysqli_num_rows($run4);
         
        }
      }

       // Class---5--//
       else  if($exam_name=="Class-V"){
        $sql_1="SELECT * FROM `class_5` WHERE Roll=$roll AND Exm_year=$year";
        $run5=mysqli_query($connect,$sql_1);
        if($run5==true){
          $count=mysqli_num_rows($run5);
         
        }
      }
      }
    
    
    
    }else{
        header('location:online_result.php');
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
  <nav class="navbar navbar-expand-lg navbar-dark bg-light">
      <div class="container">
  <a class="navbar-brand" href="index.php"><img src="dist/images/logo/logo.png"></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav ml-auto">
     
      <li class="nav-item">
        <a class="btn btn-danger mr-3" href="online_result.php">RELOAD</a>
      </li>
      <li class="nav-item">
       <button onclick="window.print()" class="btn btn-primary mt-2">PRINT</button>
    </li>
    </ul>
    
  </div>
  </div>
</nav>

<!--Result show----> 
<section id="online_result_show">
   <div class="container">
      <div class="row">
          <div class="col-sm-12 col-md-sm-10 col-md-10 col-lg-10 m-auto">
                <?php
                   if($exam_name=="Class-I"){
                       if($count>0){
                         foreach($run1 as $mydata){?>
                                <table class="table table-bordered" id="result_table">
                                <tr>
                                    <th colspan="4" class="result_show_title_table">
                                    <h2>I Deal Exercise School</h2>
                                    <h3>Class :<?php echo $exam_name;?></h3>
                                       <h4>Roll :<?php echo $roll;?></h4>
                                    </th>

                                </tr>
                                <tr>
                                     <td>Subject</td>
                                     <td>Marks</td>
                                     <td>Grade</td>
                                     
                                     <td>Total</td>
  
                                </tr>

                                <tr>
                                  <th>Bangla</th>
                                  <td><?php echo $mydata['Bangla'];?></td>
                                  <td><?php echo grade($mydata['Bangla']);?></td>
                                  <td rowspan="3" style="text-align:center">
                                  <?php 
                                        if(cgpa_1($mydata['Bangla'])==0 || cgpa_2($mydata['English'])==0 || cgpa_3($mydata['Math'])==0){
                                          echo "<h2 class='text-primary text-center' style='line-height:150px;'>Fail</h2>";

                                    }else{
                                         $sum=$mydata['Bangla']+$mydata['English']+$mydata['Math'];
                                        ?>
                                          <span class="total_marks"><?php  echo $sum;?></span>
                                        <?php
                                  }
                   
                                ?>
                                  </td>
                                </tr>

                                <tr>
                                  <th>English</th>
                                  <td><?php echo $mydata['English'];?></td>
                                  <td><?php echo grade($mydata['English']);?></td>
                                </tr>
                            
                               
                                <tr>
                                  <th>Mathmatices</th>
                                  <td><?php echo $mydata['Math'];?></td>
                                  <td><?php echo grade($mydata['Math']);?></td>
                                </tr>
                            
                            
                            </table>
                        <?php  }
                           




                       }else{
                           echo "<h1 class='text-danger text-center mt-4'>Result Not Found</h1>";
                       }
                   }
                   // Class-2--//
                  else if($exam_name=="Class-II"){
                    if($count>0){
                      foreach($run2 as $mydata){?>
                             <table class="table table-bordered" id="result_table">
                             <tr>
                                 <th colspan="4" class="result_show_title_table">
                                 <h2>I Deal Exercise School</h2>
                                 <h3>Class :<?php echo $exam_name;?></h3>
                                    <h4>Roll :<?php echo $roll;?></h4>
                                 </th>

                             </tr>
                             <tr>
                                  <td>Subject</td>
                                  <td>Marks</td>
                                  <td>Grade</td>
                                  
                                  <td>Total</td>

                             </tr>

                             <tr>
                               <th>Bangla</th>
                               <td><?php echo $mydata['Bangla'];?></td>
                               <td><?php echo grade($mydata['Bangla']);?></td>
                               <td rowspan="3" style="text-align:center">
                               <?php 
                                     if(cgpa_1($mydata['Bangla'])==0 || cgpa_2($mydata['English'])==0 || cgpa_3($mydata['Math'])==0){
                                     echo "<h2 class='text-primary text-center' style='line-height:150px;'>Fail</h2>";

                                 }else{
                                      $sum=$mydata['Bangla']+$mydata['English']+$mydata['Math'];
                                     ?>
                                       <span class="total_marks"><?php  echo $sum;?></span>
                                     <?php
                               }
                
                             ?>
                               </td>
                             </tr>

                             <tr>
                               <th>English</th>
                               <td><?php echo $mydata['English'];?></td>
                               <td><?php echo grade($mydata['English']);?></td>
                             </tr>
                         
                            
                             <tr>
                               <th>Mathmatices</th>
                               <td><?php echo $mydata['Math'];?></td>
                               <td><?php echo grade($mydata['Math']);?></td>
                             </tr>
                         
                         
                         </table>
                     <?php  }
                        




                    }else{
                        echo "<h1 class='text-danger text-center mt-4'>Result Not Found</h1>";
                    }
                }
            // Class---3----//

            else if($exam_name=="Class-III"){
              if($count>0){
                foreach($run3 as $mydata){?>
                       <table class="table table-bordered" id="result_table">
                       <tr>
                           <th colspan="4" class="result_show_title_table">
                           <h2>I Deal Exercise School</h2>
                           <h3>Class :<?php echo $exam_name;?></h3>
                              <h4>Roll :<?php echo $roll;?></h4>
                           </th>

                       </tr>
                       <tr>
                            <td>Subject</td>
                            <td>Marks</td>
                            <td>Grade</td>
                            
                            <td>Total</td>

                       </tr>

                       <tr>
                         <th>Bangla</th>
                         <td><?php echo $mydata['Bangla'];?></td>
                         <td><?php echo grade($mydata['Bangla']);?></td>
                         <td rowspan="6" style="text-align:center">
                         <?php 
                               if(cgpa_1($mydata['Bangla'])==0 || cgpa_2($mydata['English'])==0 || cgpa_3($mydata['Math'])==0 ||
                                cgpa_4($mydata['Bangladesh_global_studies'])==0 || cgpa_5($mydata['General_science'])==0 || cgpa_6($mydata['Religion'])==0){
                                  echo "<h2 class='text-primary text-center' style='line-height:300px;'>Fail</h2>";
                           }else{
                                $sum=$mydata['Bangla']+$mydata['English']+$mydata['Math']+$mydata['Bangladesh_global_studies']+$mydata['General_science']+$mydata['Religion'];
                               ?>
                                 <span class="total_marks2"><?php  echo $sum;?></span>
                               <?php
                         }
          
                       ?>
                         </td>
                       </tr>

                       <tr>
                         <th>English</th>
                         <td><?php echo $mydata['English'];?></td>
                         <td><?php echo grade($mydata['English']);?></td>
                       </tr>
                   
                      
                       <tr>
                         <th>Mathmatices</th>
                         <td><?php echo $mydata['Math'];?></td>
                         <td><?php echo grade($mydata['Math']);?></td>
                       </tr>
                   

                       <tr>
                         <th>Bangladesh and Global Studies</th>
                         <td><?php echo $mydata['Bangladesh_global_studies'];?></td>
                         <td><?php echo grade($mydata['Bangladesh_global_studies']);?></td>
                       </tr>
                   
                       <tr>
                         <th>General Science</th>
                         <td><?php echo $mydata['General_science'];?></td>
                         <td><?php echo grade($mydata['General_science']);?></td>
                       </tr>
                   
                       <tr>
                         <th>Religion</th>
                         <td><?php echo $mydata['Religion'];?></td>
                         <td><?php echo grade($mydata['Religion']);?></td>
                       </tr>
                   
                   
                   </table>
               <?php  }
                  




              }else{
                  echo "<h1 class='text-danger text-center mt-4'>Result Not Found</h1>";
              }
          }

          //  Class -4---//

          else if($exam_name=="Class-IV"){
            if($count>0){
              foreach($run4 as $mydata){?>
                     <table class="table table-bordered" id="result_table">
                     <tr>
                         <th colspan="4" class="result_show_title_table">
                         <h2>I Deal Exercise School</h2>
                         <h3>Class :<?php echo $exam_name;?></h3>
                            <h4>Roll :<?php echo $roll;?></h4>
                         </th>

                     </tr>
                     <tr>
                          <td>Subject</td>
                          <td>Marks</td>
                          <td>Grade</td>
                          
                          <td>Total</td>

                     </tr>

                     <tr>
                       <th>Bangla</th>
                       <td><?php echo $mydata['Bangla'];?></td>
                       <td><?php echo grade($mydata['Bangla']);?></td>
                       <td rowspan="6" style="text-align:center">
                       <?php 
                             if(cgpa_1($mydata['Bangla'])==0 || cgpa_2($mydata['English'])==0 || cgpa_3($mydata['Math'])==0 ||
                              cgpa_4($mydata['Bangladesh_global_studies'])==0 || cgpa_5($mydata['General_science'])==0 || cgpa_6($mydata['Religion'])==0){
                                echo "<h2 class='text-primary text-center' style='line-height:300px;'>Fail</h2>";
                         }else{
                              $sum=$mydata['Bangla']+$mydata['English']+$mydata['Math']+$mydata['Bangladesh_global_studies']+$mydata['General_science']+$mydata['Religion'];
                             ?>
                               <span class="total_marks2"><?php  echo $sum;?></span>
                             <?php
                       }
        
                     ?>
                       </td>
                     </tr>

                     <tr>
                       <th>English</th>
                       <td><?php echo $mydata['English'];?></td>
                       <td><?php echo grade($mydata['English']);?></td>
                     </tr>
                 
                    
                     <tr>
                       <th>Mathmatices</th>
                       <td><?php echo $mydata['Math'];?></td>
                       <td><?php echo grade($mydata['Math']);?></td>
                     </tr>
                 

                     <tr>
                       <th>Bangladesh and Global Studies</th>
                       <td><?php echo $mydata['Bangladesh_global_studies'];?></td>
                       <td><?php echo grade($mydata['Bangladesh_global_studies']);?></td>
                     </tr>
                 
                     <tr>
                       <th>General Science</th>
                       <td><?php echo $mydata['General_science'];?></td>
                       <td><?php echo grade($mydata['General_science']);?></td>
                     </tr>
                 
                     <tr>
                       <th>Religion</th>
                       <td><?php echo $mydata['Religion'];?></td>
                       <td><?php echo grade($mydata['Religion']);?></td>
                     </tr>
                 
                 
                 </table>
             <?php  }
                




            }else{
                echo "<h1 class='text-danger text-center mt-4'>Result Not Found</h1>";
            }
        }


           //  Class -5---//

           else if($exam_name=="Class-V"){
             
            if($count>0){
              foreach($run5 as $mydata){?>
                     <table class="table table-bordered" id="result_table">
                     <tr>
                         <th colspan="4" class="result_show_title_table">
                         <h2>I Deal Exercise School</h2>
                         <h3>Class :<?php echo $exam_name;?></h3>
                            <h4>Roll :<?php echo $roll;?></h4>
                         </th>

                     </tr>
                     <tr>
                          <td>Subject</td>
                          <td>Marks</td>
                          <td>Grade</td>
                          
                          <td>G.P.A</td>

                     </tr>

                     <tr>
                       <th>Bangla</th>
                       <td><?php echo $mydata['Bangla'];?></td>
                       <td><?php echo grade($mydata['Bangla']);?></td>
                       <td rowspan="6" style="text-align:center">
                       <?php 
                             if(cgpa_1($mydata['Bangla'])==0 || cgpa_2($mydata['English'])==0 || cgpa_3($mydata['Math'])==0 ||
                              cgpa_4($mydata['Bangladesh_global_studies'])==0 || cgpa_5($mydata['General_science'])==0 || cgpa_6($mydata['Religion'])==0){
                                echo "<h2 class='text-primary text-center' style='line-height:300px;'>Fail</h2>";
                         }else{
                              $gpa=(cgpa_1($mydata['Bangla'])+cgpa_2($mydata['English'])+ cgpa_3($mydata['Math'])+ cgpa_4($mydata['Bangladesh_global_studies'])+ cgpa_5($mydata['General_science'])+ cgpa_6($mydata['Religion']))/6.0;
                             ?>
                               <span class="total_marks2"><?php  echo $gpa;?></span>
                             <?php
                       }
        
                     ?>
                       </td>
                     </tr>

                     <tr>
                       <th>English</th>
                       <td><?php echo $mydata['English'];?></td>
                       <td><?php echo grade($mydata['English']);?></td>
                     </tr>
                 
                    
                     <tr>
                       <th>Mathmatices</th>
                       <td><?php echo $mydata['Math'];?></td>
                       <td><?php echo grade($mydata['Math']);?></td>
                     </tr>
                 

                     <tr>
                       <th>Bangladesh and Global Studies</th>
                       <td><?php echo $mydata['Bangladesh_global_studies'];?></td>
                       <td><?php echo grade($mydata['Bangladesh_global_studies']);?></td>
                     </tr>
                 
                     <tr>
                       <th>General Science</th>
                       <td><?php echo $mydata['General_science'];?></td>
                       <td><?php echo grade($mydata['General_science']);?></td>
                     </tr>
                 
                     <tr>
                       <th>Religion</th>
                       <td><?php echo $mydata['Religion'];?></td>
                       <td><?php echo grade($mydata['Religion']);?></td>
                     </tr>

                     <tr>
                       <th>Total Marks</th>
                       <td><?php 
                          $sum=$mydata['Bangla']+$mydata['English']+$mydata['Math']+$mydata['Bangladesh_global_studies']+$mydata['General_science']+$mydata['Religion'];
                       ?>   <span class="total_class_5"><?php  echo $sum;?></span><?php
                       ?></td>
                       <td></td>
                     </tr>
                 
                 
                 </table>
             <?php  }
                




            }else{
                echo "<h1 class='text-danger text-center mt-4'>Result Not Found</h1>";
            }
        }


       ?>
          </div>
      </div>
   </div>
</section>



  
<footer class="result_show_control" id="main_footer">
<div class="contaier">
  <p> &copy; <?php echo date('Y');?> I Deal Exercise School.</p>
  </div>
</footer>
<?php include('linkjs.php');?>
</body>
</html>

<?php
  function grade($x){
    if($x<33){
        return  "F";
    }else if($x>=33 && $x<=39){
        return "D";
    }else if($x>=40 && $x<=49){
        return "C";
    }else if($x>=50 && $x<=59){
        return "B";
    }else if($x>=60 && $x<=69){
        return "A-";
    }else if($x>=70 && $x<=79)
    {
        return "A";
    }else{
        return "A+";
    }
}


function cgpa_1($x){
  if($x<33){
      return 0;
  }
  if($x>=33 && $x<=39){
      return 1.0;
  }else if($x>=40 && $x<=49){
      return 2.0;
  }else if($x>=50 && $x<=59){
      return 3.0;
  }else if($x>=60 && $x<=69){
      return 3.5;
  }else if($x>=70 && $x<=79){
      return 4.0;
  }else if($x>=80 && $x<=100){
      return 5.0;
  }
}
function cgpa_2($x){
  if($x<33){
      return 0;
  }
  if($x>=33 && $x<=39){
      return 1;
  }else if($x>=40 && $x<=49){
      return 2;
  }else if($x>=50 && $x<=59){
      return 3;
  }else if($x>=60 && $x<=69){
      return 3.5;
  }else if($x>=70 && $x<=79){
      return 4;
  }else if($x>=80 && $x<=100){
      return 5;
  }
}
function cgpa_3($x){
  if($x<33){
      return 0;
  }
  if($x>=33 && $x<=39){
      return 1;
  }else if($x>=40 && $x<=49){
      return 2;
  }else if($x>=50 && $x<=59){
      return 3;
  }else if($x>=60 && $x<=69){
      return 3.5;
  }else if($x>=70 && $x<=79){
      return 4;
  }else if($x>=80 && $x<=100){
      return 5;
  }
}

//  gpa---4
function cgpa_4($x){
  if($x<33){
      return 0;
  }
  if($x>=33 && $x<=39){
      return 1;
  }else if($x>=40 && $x<=49){
      return 2;
  }else if($x>=50 && $x<=59){
      return 3;
  }else if($x>=60 && $x<=69){
      return 3.5;
  }else if($x>=70 && $x<=79){
      return 4;
  }else if($x>=80 && $x<=100){
      return 5;
  }
}

//gpa---5--/

function cgpa_5($x){
  if($x<33){
      return 0;
  }
  if($x>=33 && $x<=39){
      return 1;
  }else if($x>=40 && $x<=49){
      return 2;
  }else if($x>=50 && $x<=59){
      return 3;
  }else if($x>=60 && $x<=69){
      return 3.5;
  }else if($x>=70 && $x<=79){
      return 4;
  }else if($x>=80 && $x<=100){
      return 5;
  }
}

//---6---//
function cgpa_6($x){
  if($x<33){
      return 0;
  }
  if($x>=33 && $x<=39){
      return 1;
  }else if($x>=40 && $x<=49){
      return 2;
  }else if($x>=50 && $x<=59){
      return 3;
  }else if($x>=60 && $x<=69){
      return 3.5;
  }else if($x>=70 && $x<=79){
      return 4;
  }else if($x>=80 && $x<=100){
      return 5;
  }
}


?>