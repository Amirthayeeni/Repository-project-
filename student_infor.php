<?php
$sname= "localhost";
$unmae= "root";
$password = "";

$db_name = "student_details";

$conn = mysqli_connect($sname, $unmae, $password, $db_name);

if($conn==false)
{
die('Could not connect:'.mysqli_error());
}




$name=$_POST['name'];
$dob=$_POST['dob'];
$email=$_POST['email'];
$gender=$_POST['gender'];
$rollno=$_POST['rollno'];
$dept=$_POST['dept'];
$batch=$_POST['batch'];
$acad=$_POST['acad'];



$sql="INSERT INTO stud_personal(stu_name ,stu_dob ,stu_email ,stu_gender,stu_roll,stu_dept,stu_batch,academic_year) 
VALUES ('$name', '$dob', '$email', '$gender', '$rollno', '$dept','$batch',$acad)";

$result=mysqli_query($conn,$sql);
if($result){
    echo '<script language="javascript">';
    echo 'alert("record successfully")';  // showing an alert box
    echo '</script>';
    
    

}
else{
echo '<script language="javascript">';
echo 'alert("no record insert")';  // showing an alert box
echo '</script>';
}
mysqli_close($conn);


