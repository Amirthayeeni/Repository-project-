<html>
    <head>
        <title>pdf</title>
    </head>
    <body>
<?php
$con=new mysqli("localhost","root","","student_details");
$dept=$_POST['dept'];


   ob_start();
   require("fpdf/fpdf.php");
   class PDF extends FPDF{
    function Header()
    {
       
            
    }
    
   }
   
   $pdf= new PDF('P','mm','A4'); 
   $pdf->Addpage();
  

   $title="score table pdf";
   $pdf->SetTitle($title);
   
   $pdf->SetFont('times','B',25);
   $pdf->Image('analysis.png',0,0,340);
   $pdf->Cell(200,10,'  SCORE TABLE  ',0,1,"C");
   
   $pdf->Ln(5);

   



   
  // $sql="SELECT * FROM scores WHERE = ORDER BY num_event DESC";
  $sql="SELECT *
  FROM scores WHERE dept="."'".$dept."'"."ORDER BY num_event DESC";
   $result=mysqli_query($con,$sql);
   $n=mysqli_num_rows($result);
   $pdf->SetFont('Arial','B',15);
   
   $pdf->Ln(10);
   //$pdf->Line(0,48,210,48);

   if($n>0)
   {

    $pdf->Cell(55,6,'DEPARTMENT   : '.$dept,0,1,"C");
   $pdf->Ln(5);
   $pdf->Cell(45,6,'TOTAL RECORD : '.$n,0,1,"C");

    $pdf->SetFont('Arial','B',14);
    $pdf->SetY(60);
    $pdf->SetX(10);
    $pdf->cell(15,10,'SNO',1,0,'C');
   $pdf->cell(50,10,'ROLLNO',1,0,'C');
   $pdf->cell(60,10,'SCORE',1,0,'C');
   $pdf->cell(60,10,'BATCH',1,1,'C');
       $i=0;
       while($row=mysqli_fetch_assoc($result))
       {
   $i++;
   $pdf->cell(15,15,$i,1,0,'C');
   $pdf->cell(50,15,$row["stu_roll"],1,0);
   $pdf->cell(60,15,$row["num_event"],1,0,'C');
  $pdf->cell(60,15,$row["batch"],1,1,'C');
       }
   
   } 
   else{

    $pdf->Cell(55,6,'DEPARTMENT   : '.$dept,0,1,"C");
   $pdf->Ln(5);
   $pdf->Cell(55,6,'TOTAL RECORD : '.$n,0,1,"C");
   $pdf->Ln(25);
   $pdf->SetFont('Arial','B',50);
   $pdf->cell(50,10,"no record found",0,'C');
  
   }
   



   $pdf->Output();

   ob_end_flush();
   ?>
    </body>
</html>
