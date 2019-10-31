<?php
require('fpdf/fpdf.php');
include 'db.php';
class PDF extends FPDF
{
// Page header
function Header()
{
    // Logo
    $this->Image('logo.png',5,8,20);
    // Arial bold 15
    $this->SetFont('Arial','B',10);
    // Move to the right
    $this->Cell(80);
    // Title
	$this->setTextColor(19,23,72);
    $this->Cell(60,10,'કચ્છ જિલ્લા પંચાયત શાળા આરોગ્ય કાર્યક્રમ',0,1,'C');
	$this->Cell(80);
	
	$this->Line(200,26,10,26);
    // Line break
	
	$this->Ln(10);
	
}


}

// Instanciation of inherited class
$pdf = new PDF();
$pdf->AliasNbPages();
$pdf->AddPage();
$pdf->SetFont('Times','',12);

$id=$_GET["n"];


$sql="select h.hdate,h.childname,h.weight,h.height,h.bmi,h.checkupreq,u.username,h.hid from health h,user u where u.userid=h.uid and h.hid=".$id."";
$result1=mysql_query($sql);


$pdf->SetFont('Arial','B',12);

$sql1="select q.question,a.answer from answer a,question q where q.qid=a.questionid and mainid=".$id."";
$result2=mysql_query($sql1);
$dataset1=mysql_fetch_array($result1);
$pdf->SetFont('Arial','B',8);

$pdf->Cell(15,8,"Health ID",1,0);
$pdf->Cell(20,8,"Date",1,0);
$pdf->Cell(50,8,"Name",1,0);
$pdf->Cell(15,8,"Weight",1,0);
$pdf->Cell(15,8,"Height",1,0);
$pdf->Cell(10,8,"BMI",1,0);
$pdf->Cell(40,8,"CheckUp Requirement",1,0);
$pdf->Cell(15,8,"CheckUp By",1,1);

$pdf->Cell(15,8,$dataset1[7],1,0);
$pdf->Cell(20,8,$dataset1[0],1,0);
$pdf->Cell(50,8,$dataset1[1],1,0);
$pdf->Cell(15,8,$dataset1[2],1,0);
$pdf->Cell(15,8,$dataset1[3],1,0);
$pdf->Cell(10,8,$dataset1[4],1,0);
$pdf->Cell(40,8,$dataset1[5],1,0);
$pdf->Cell(15,8,$dataset1[6],1,1);

$pdf->SetFont('Arial','B',8);

$pdf->Cell(14,8,"SRNO",1,0);
$pdf->Cell(152,8,"Question",1,0);
$pdf->Cell(14,8,"Answer",1,1);


$pdf->SetFont('Arial','',8);
$srno=0;
while($dataset=mysql_fetch_array($result2))
{
$srno+=1;
$pdf->Cell(14,8,$srno,1,0);
$pdf->Cell(152,8,$dataset[0],1,0);
$pdf->Cell(14,8,$dataset[1],1,1);	
}


	
	
$pdf->Output();
?>