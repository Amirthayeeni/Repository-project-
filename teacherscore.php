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
        background: color #f1f1f1;;
      }
      </style>
  </body>
</html>



<?php
$sname= "localhost";
$unmae= "root";
$password = "";

$db_name = "student_details";

$dept=$_POST['dept'];

$conn = mysqli_connect($sname, $unmae, $password, $db_name);

if (!$conn) {
    echo "Connection failed!";
}

$sq="SELECT *
  FROM scores WHERE dept="."'".$dept."'"."ORDER BY num_event DESC";
 
 $result=mysqli_query($conn,$sq);
 $n=mysqli_num_rows($result);

 echo" 
 <style>
 h2 
 {
   margin-left:35%;
   box-shadow: rgba(149, 157, 165, 0.2) 0px 8px 24px;
   Background-color:#ced2cc;
   width:20%;
   padding-top: 40px;
   text-align: center;
   padding-bottom: 20px;
   padding-right:40px;
   padding-left: 70px;
   display: inline-block;
   
   
 }
 
 </style>

 <html><body><h2>DEPARTMENT <br><pre>".$dept."</pre><br>";

 
  

 echo'<h1><pre>                                   score table             <pre> </h1>';

echo "<table><tr><th>ROLL NO </th><th>NUMBER OF EVENT</th></tr>";



if($n==0)
echo"<h1>No Record Found<br>";
else
{
while($row=mysqli_fetch_array($result))
{
  echo "<tr>";
  echo "<td>".$row[0]."</td>";
  echo "<td>".$row[1]."</td>";
 
  
  echo"</tr>";



}

}


  echo "</table>";

// echo'</form>';
mysqli_close($conn);
?>