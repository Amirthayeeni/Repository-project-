<html>
    <head>
        <title>pdf</title>
    </head>
    <body>
<?php
$con=new mysqli("localhost","root","","student_details");
   ob_start();
   require("fpdf/fpdf.php");
   $pdf= new FPDF('P','mm','A4'); 
   $pdf->Addpage();
   $pdf->SetFont("Arial",'B',18);
   $pdf->Cell(10,10,'Rollno',1,0,'C');
   $pdf->Cell(60,10,'score',1,0,'C');


$sql="SELECT * FROM scores";
$result=mysqli_query($con,$sql);
$n=mysqli_num_rows($result);
if($n>0)
{
    $i=0;
    while($row=mysqli_fetch_assoc($result))
    {
$i++;
$pdf->cell(10,6,$i,1,0,'C');
$pdf->cell(80,6,$row["stu_roll"],1,0);
$pdf->cell(20,6,$row["num_event"],1,0,'C');



    }

} 
else{
    $pdf->Cell(100,30,'no record found',1,1,'C',);
}

   $pdf->Output();

   ob_end_flush();
   ?>
    </body>
</html>
