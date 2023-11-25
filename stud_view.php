<html>
  <body>
    <style>
      body{
        margin: auto;
        padding: auto;
        width:100%;
        height:100%;
      }
      table{
        font-famliy:arial;
        border-collapse:collapse;
        width:100%;


      }
      th{
        background-color: #488A99;
        border: 1px solid white;
      }
      th,td{
      
        text-align:center;
        padding:15px;
      }
      td{
        text-align:center;
      }
      tr:nth-child(odd)
      {
        background-color:#DADADA;
      }
      tr:nth-child(even)
      {
        background-color:#F1F1F1;
      }
      </style>
  </body>
</html>
<?php

$sname= "localhost";
$unmae= "root";
$password = "";

$db_name = "student_details";
$rollno=$_POST['rollno'];
$conn = mysqli_connect($sname, $unmae, $password, $db_name);

if (!$conn) {
    echo "Connection failed!";
}





$sql="SELECT * FROM  stud_personal where stu_roll="."'".$rollno."'";
$result=mysqli_query($conn,$sql);
$n=mysqli_num_rows($result);


$sql="SELECT academic_year,semester,event_name,event_date FROM  event_registeration where stu_roll="."'".$rollno."'";
$result1=mysqli_query($conn,$sql);
$n1=mysqli_num_rows($result1);

echo" 
<style>
h2 
{
  margin-left:15%;
  box-shadow: rgba(149, 157, 165, 0.2) 0px 8px 24px;
  Background-color:#ced2cc;
  width:20%;
  padding-top: 40px;
  text-align: center;
  padding-bottom: 20px;
  padding-right:40px;
  padding-left: 50px;
  display: inline-block;
  height:18%;
  
}

</style>
<html> <body><h2>Total event <br><pre>    ".$n1."  </pre><br>";
if ($n1==0 || $n==0)
{
  echo '<script language="javascript">';
  echo 'alert("no record found ")';  // showing an alert box
  echo '</script>';
}
else{
echo "<table ><tr><th>NAME</th><th>DATE OF BIRTH</th><th>GMAIL</th><th>GENDER</th><th>ROLLNO</th><th>DEPARTMENT</th><th>BATCH</th>
<th>ACADEMIC YEAR</th></tr>";

if($n==0)
echo"<h1>No Record Found<br>";
else
{
while($row=mysqli_fetch_array($result))
{
  echo "<h1><pre>              ACADEMIC  DETAILS                   <pre> </h1>";
    echo "<tr>";
    echo "<td>".$row[0]."</td>";
    echo "<td>".$row[1]."</td>";
    echo "<td>".$row[2]."</td>";
    echo "<td>".$row[3]."</td>";
    echo "<td>".$row[4]."</td>";
    echo "<td>".$row[5]."</td>";
    echo "<td>".$row[6]."</td>";
    echo "<td>".$row[7]."</td>";
    echo"</tr>";


}

}

 
  echo  "<table><tr><th>ACADEMIC YEAR </th><th>SEMESTER</th><th>EVENT NAME</th><th>EVENT DATE</th>
 </tr>";



if($n1==0){
echo '<script language="javascript">';
    echo 'alert("no record found")';  // showing an alert box
    echo '</script>';
}
else
{
  echo"<body> <h1><pre>                    EVENT   DETAILS                   <pre> </h1></body>";
while($row=mysqli_fetch_array($result1))
{

     
        echo "<tr>";
        echo "<td>".$row[0]."</td>";
        echo "<td>".$row[1]."</td>";
        echo "<td>".$row[2]."</td>";
        echo "<td>".$row[3]."</td>";
        
        echo"</tr>";
        
        }
        echo "</table>";
        
    }    }
mysqli_close($conn);
?>
