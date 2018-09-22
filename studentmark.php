<?php 
 echo "hello";
 if(isset($_POST['submit'])){
 $rollnumber = $_POST['rollnumber']; //gets roll number from html
 //CONNECTION TO DATABASE
 $db = mysqli_connect('localhost','root','','university');
 $sql = "select * from studentmarks where rollno='$rollnumber'";
 $result = mysqli_query($db,$sql);
 $calculate = 0;  //TO CALCULATE ACQUIRED POINT BY STUDENT
 $total = 0;      //TO CALCULATE THE TOTAL POINTS OF THE SEMESTER
 //FETCHES THE VALUES FROM DB
 while($row = mysqli_fetch_row($result)){
  $rollno = $row[0];
  $registernumber = $row[1];
  $batch = $row[2];
  $sub1 = $row[3]; 
  $sub2 = $row[4];
  $sub3 = $row[5];
  $sub4 = $row[6];
  $sub5 = $row[7];
  $sub6 = $row[8];
  $gpa = $row[9];
 }

 //ARRAY OF SUBJECTS
 $subs = array($sub1,$sub2,$sub3,$sub4,$sub5,$sub6);

 for($i=0;$i<6;$i++){  //FOR LOOP USED TO RUN THROUGH 6 SUBJECTS
  $subject = 'sub'.($i+1);   //DYNAMICALLY REPLACES THE SUBJECT CODE
  $sql2 = "select credits from subject where sub_id='$subject'";   //QUERY TO RETRIEVE CREDITS OF CORRESPONDING SUBJECT
  $result2 = mysqli_query($db,$sql2); 
  while($row = mysqli_fetch_row($result2)){ 
  $credits = $row[0];  
  $total += $credits*10;   //CALCULATES THE TOTAL CREDITS
   }
  //SWITCH CASE CONVERTS THE GRADES TO POINTS 
 switch($subs[$i]){   //$SUBS[$I] REFERS TO THE ARRAY OF SUBJECTS
   case 'O':
    $calculate+= $credits*10;
    break;
   case 'Ap':
    $calculate+= $credits*9;
    break;
   case 'A':
    $calculate+= $credits*8;
    break;
   case 'Bp':
    $calculate+= $credits*7;
    break;
   case  'B':
    $calculate+= $credits*6;
    break;
   default: 
    $calculate+=0;
 }
}
 
 echo "CAlculated points".$calculate;  //OBTAINED POINTS BY THE STUDENT

 echo "<h1>".$total."</h1>";  //DISPLAYS TOTAL POINTS PER SEMESTER
 $gpacalculated = ($calculate/$total)*10;  //CALCULATING GPA
 echo "<h1> GPA obtained".$gpacalculated."</h1>";
 echo "<h1>".$rollno."</h1>";
 }

 //INSERT VALUES
 if(isset($_POST['insert'])){
  $rollno = $_POST['roll'];
 $register = $_POST['register'];
 $batch= $_POST['batch'];
 $sub1 = $_POST['sub1'];
 $sub2 = $_POST['sub2'];
 $sub3 = $_POST['sub3'];
 $sub4 = $_POST['sub4'];
 $sub5 = $_POST['sub5'];
 $sub6 = $_POST['sub6'];
 $gpa = 0.0;
 $db = mysqli_connect("localhost", "root","","university");
 $sql="INSERT INTO `studentmarks`(`rollno`, `registernumber`, `batch`, `sub1`, `sub2`, `sub3`, `sub4`, `sub5`, `sub6`, `gpa`) VALUES ('$rollno','$register','$batch','$sub1','$sub2','$sub3','$sub4','$sub5','$sub6',$gpa)";
 if($result = mysqli_query($db,$sql)){
  echo "success";
 }
 else{
  echo "No";
 }
}

 if(isset($_POST['update'])){
  $rollno = $_POST['roll'];
 //$register = $_POST['register'];
 //$batch= $_POST['batch'];
 $sub1 = $_POST['sub1'];
 $sub2 = $_POST['sub2'];
 $sub3 = $_POST['sub3'];
 $sub4 = $_POST['sub4'];
 $sub5 = $_POST['sub5'];
 $sub6 = $_POST['sub6'];
 $gpa = 0.0;
 $db = mysqli_connect("localhost", "root","","university");
 $sql="UPDATE `studentmarks` SET `sub1`='$sub1', `sub2`='$sub2', `sub3`='$sub3', `sub4`='$sub4', `sub5`='$sub5', `sub6`='$sub6',`gpa`='$gpa' WHERE rollno='$rollno'";
 if($result = mysqli_query($db,$sql)){
  echo "successfully updated";
 }
 else{
  echo "No";
 }
}
?>
