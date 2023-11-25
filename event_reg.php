<?php
$sname= "localhost";
$unmae= "root";
$password = "";

$db_name = "student_details";

$conn = mysqli_connect($sname, $unmae, $password, $db_name);

if (!$conn) {
    echo "Connection failed!";
}


else

echo '';

$rollno=$_POST['rollno'];
$sem=$_POST['sem'];
$dept=$_POST['dept'];
$batch=$_POST['batch'];
$edate=$_POST['edate'];
$ename=$_POST['ename'];
$edesc=$_POST['edesc'];
$acad=$_POST['acad'];

$name= $_FILES['myfile']['name'];
$myfile=$name;

$tmp_name= $_FILES['myfile']['tmp_name'];

$path='D:/xamppp/htdocs/loginn/recordproof/';


if (!empty($name)){
echo "haidddddd".$name;
if (move_uploaded_file($tmp_name, $path.$name)) {
echo 'Uploaded!';

}
}

$score=0;
$sql1="INSERT INTO event_registeration(stu_roll,academic_year,semester,event_date,event_name,event_desc,event_proof,stu_dept) 
VALUES ('$rollno' ,'$acad','$sem', '$edate', '$ename', '$edesc','$myfile','$dept')";
//$sql1="INSERT INTO scores(stu_roll,num_event,batch,dept) VALUES ('$rollno','$score','$batch','$dept')";

$res1=mysqli_query($conn,$sql1);

//---------------------
$sql2="SELECT * FROM scores where stu_roll="."'".$rollno."'";
$res2=mysqli_query($conn,$sql2);
$count=mysqli_num_rows($res2);

if($count==0)
{
    $sql3="INSERT INTO scores(stu_roll,num_event,batch,dept) VALUES ('$rollno',1,'$batch','$dept')";
   $c= mysqli_query($conn,$sql3);
   $r=mysqli_num_rows($c);
   echo $r;
}
else
{
    while($row=mysqli_fetch_array($res2))
    {
       $score= $row[1];
    
    } 
    $score+=1;

    
    $sql5="UPDATE scores SET num_event= $score WHERE stu_roll='$rollno'";
    $res7=mysqli_query($conn,$sql5);
    if($res7)
echo ' excute update';
else
echo 'no excute update query';
}
    
   
    









if($res1){
    echo '<script language="javascript">';
    echo 'alert("record successfully")';  // showing an alert box
    echo '</script>';  

}
else{
echo '<script language="javascript">';
echo 'alert("no record insert")';  // showing an alert box
echo '</script>';
}
//$sql2="SELECT stu_roll,num_event WHERE stu_roll="."'".$rollno."'";
mysqli_close($conn);
?>
