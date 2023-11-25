<html>
  <body>
    <style>
      body{
        margin: auto;
        padding: auto;
        width:80%;
        height:80%;
        background-color: #f1f1f1;
      }
      table{
        font-famliy:arial;
        border-collapse:collapse;
        width:80%;
        align-items:center ;
        margin-left: auto;
        margin-right: auto;
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
$acad=$_POST['acad'];
$conn = mysqli_connect($sname, $unmae, $password, $db_name);

if (!$conn) {
    echo "Connection failed!";
}


$sq="SELECT event_name,event_date,event_desc,semester,event_proof FROM event_registeration 
 where Academic_year="."'".$acad."'"."AND stu_roll="."'".$rollno."'";
 
 $result=mysqli_query($conn,$sq);
$n=mysqli_num_rows($result);

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
  
}

</style>
<html> <body><h2>Roll No <br><pre>".$rollno."</pre><br>

<html> <body><h2>Total event <br><pre>    ".$n."  </pre><br>";
echo'<h1><pre>                     PARTICIPATION OF STUDENTS IN DIFFERENT EVENTS              <pre> </h1>';
echo "<table><tr><th>EVENT NAME </th><th>EVENT DATE</th><th>EVENT DESCRIPTION</th><th>SEMESTER</th>
<th>PROOF</th></tr>";
if($n==0)
echo"<h1>No Record Found<br>";
else
{
while($row=mysqli_fetch_array($result))
{
  echo "<tr>";
  echo "<td>".$row[0]."</td>";
  echo "<td>".$row[1]."</td>";
  echo "<td>".$row[2]."</td>";
  echo "<td>".$row[3]."</td>";
  echo "<td>".$row[4]."</td>";
  
  echo"</tr>";



}

}
echo"</table>";


 

  


mysqli_close($conn);
?>