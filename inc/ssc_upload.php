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
   <?php echo include('links.php');?>
</head>
<body>
<!--PHP VALIDATION----->
<?php
 require_once('../db_connect.php');
 $year="";
 $totalstu="";
 $pass="";
 $fail="";
 $gpfive="";
 $gpfour="";

 $vyear="";
 $vtotalstu="";
 $vpass="";
 $vfail="";
 $vgpfive="";
 $vgpfour="";
 $msq="";
 if(isset($_REQUEST['submit'])){
     $ck=0;
     $year=$_REQUEST['exam_year'];
     $totalstu=$_REQUEST['totalstudent'];
     $pass=$_REQUEST['passed'];
     $fail=$_REQUEST['fail'];
     $gpfive=$_REQUEST['aplus'];
     $gpfour=$_REQUEST['a'];
    if($year==""){
       $ck++;
       $vyear="Required";
    } else if(!($year=="")){
       $sql="SELECT Exam_Year From ssc where Exam_Year=$year";
       $run=mysqli_query($connect,$sql);
       if($run==true){
          foreach($run as $mydata){
              $tyear=$mydata['Exam_Year'];
              if($year==$tyear){
                 $ck++;
                 $vyear="Already Taken";
              }
          }
       }

    }if($totalstu==""){
       $ck++;
       $vtotalstu="Required";
    }if($pass==""){
       $ck++;
       $vpass="Required";
    }if($fail==""){
       $ck++;
       $vfail="Required";
    }if($gpfive==""){
       $ck++;
       $vgpfive="Required";
    }if($gpfour==""){
       $ck++;
       $vgpfour="Required";
    }
    if($ck==0){
           $sql="INSERT INTO ssc(Exam_Year, Total_Student, Passed, Fail, Gpa_5, Gpa_4) 
            VALUES
            ('".mysqli_real_escape_string($connect,strip_tags($year))."','".mysqli_real_escape_string($connect,strip_tags($totalstu))."',
            '".mysqli_real_escape_string($connect,strip_tags($pass))."','".mysqli_real_escape_string($connect,strip_tags($fail))."',
            '".mysqli_real_escape_string($connect,strip_tags($gpfive))."','".mysqli_real_escape_string($connect,strip_tags($gpfour))."');";
            $run=mysqli_query($connect,$sql);
            if($run==true){
               $msq="Data Saved";
               $year="";
               $totalstu="";
               $pass="";
               $fail="";
               $gpfour="";
               $gpfive="";
            }else{
               $msq=mysqli_error($connect);
            }
    }else{
       
    }
 }
?>
    <section>
       <div class="container">
          <div class="row">
             <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6" id="ssc-upload-title">
                <h5 class="text-center mb-4 text-success">SSC EXAMINATION RESULT IN  OUR SCHOOL</h5>
                  <form method="post" action="">
                     <div class="form-group">
                        <label for="exmy">Exam Year:</label>
                        <input class="form-control" type="number" value="<?php echo $year;?>" name="exam_year" id="exmy">
                        <span class="text-danger"><?php echo $vyear;?></span>
                     </div>

                     <div class="form-group">
                      <label for="tstu">Total Student:</label>
                      <input class="form-control" type="number" value="<?php echo $totalstu;?>" name="totalstudent" id="tstu">
                      <span class="text-danger"><?php echo $vtotalstu;?></span>
                   </div>

                   <div class="form-group">
                    <label for="pass">Passed:</label>
                    <input class="form-control" type="number" value="<?php echo $pass;?>" name="passed" id="pass">
                    <span class="text-danger"><?php echo $vpass;?></span>
                 </div>

                 <div class="form-group">
                  <label for="fail">Fail:</label>
                  <input class="form-control" type="number" name="fail" id="fail" value="<?php echo $fail;?>">
                  <span class="text-danger"><?php echo $vfail;?></span>
               </div>

               <div class="form-group">
                <label for="a5">Total A+:</label>
                <input class="form-control" type="number" value="<?php echo $gpfive;?>" name="aplus" id="a5">
                <span class="text-danger"><?php echo $vgpfive;?></span>
             </div>

             <div class="form-group">
              <label for="a">Total A:</label>
              <input class="form-control" type="number" name="a" id="a" value="<?php echo $gpfour;?>">
              <span class="text-danger"><?php echo $vgpfour;?></span><br>
              <input class="btn btn-success" type="submit" value="Upload" name="submit">
              <span class="text-danger"><?php echo $msq;?></span>
           </div>
                  </form>
             </div>
          </div>
       </div>
    </section>
     
    <!--=========Javascript links=============-->
    <?php include('linkjs.php');?>
</body>
</html>