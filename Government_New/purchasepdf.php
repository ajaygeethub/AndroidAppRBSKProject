<?php
require('fpdf/fpdf.php');
include 'db.php';
class PDF extends FPDF
{
// Page header
function Header()
{
    // Logo
    $this->Image('01.jpg',5,8,60);
    // Arial bold 15
    $this->SetFont('Arial','B',28);
    // Move to the right
    $this->Cell(80);
    // Title
	$this->setTextColor(19,23,72);
    $this->Cell(60,10,'Shree Ram Minerals',0,1,'C');
	$this->Cell(80);
	$this->SetFont('Times','BI',10);
	
	$this->Cell(60,5,'(A Company of Shree Ram Minerals Group)',0,1,'C');
	$this->Cell(80);
	$this->setTextColor(128,128,64);
	$this->Cell(60,5,'"KAOLIN SOLUTION FOR ANY PRODUCT"',0,1,'C');
	$this->Cell(80);
	$this->Cell(60,5,"Mines Owner and Processor of All Grade China Clay and Other Minerals",0,1,'C');
	$this->Cell(80);
	 $this->SetFont('Arial','',8);
	$this->setTextColor(255,127,39);
	$this->Cell(60,5,"An ISO 9001:2008 Certified Company",0,1,'C');
	
	
	$this->Line(200,40,10,40);
    // Line break
	
	$this->Ln(10);
	
}
function Footer()
{	
$this->SetFont('Arial','B',10);
$this->Ln(94);
$this->Cell(93,2,"",0,0);
$this->Cell(93,4,"for SHREE RAM MINRALS ",0,1);	
$this->SetFont('Arial','',10);
$this->Ln(25);
$this->Cell(93,2,"",0,0);
$this->Cell(93,2,"Authorised  Signatory",0,1);
$this->Line(200,255,10,255);
$this->Line(200,221,103,221);
$this->Line(103,221,103,255);
    // Position at 1.5 cm from bottom
    $this->SetY(-23);
	$this->Line(200,270,10,270);
	$this->SetFont('Arial','',9);
	$this->Cell(10);
	$this->Cell(72,4,'Regd.Office: Near Kutch Dairy,G.I.D.C Madhapar,         Account E-mail  : ac.srm@srmindia.in',0,1);
	$this->Cell(28);
	$this->Cell(80,4,'Bhuj-Kutch. (Guj.) INDIA 370 020.,             Dispatch E-mail : dp.srm@srmindia.in',0,1);
	$this->Cell(28);
	$this->Cell(80,4,'Tele No.:(02832) 240882,241182               Webdite :  www.shreeramminrals.com',0,1);
	
	$this->Line(95,275,95,285);
	$this->Image('1.jpg',155,256,35);
			
}

}

// Instanciation of inherited class
$pdf = new PDF();
$pdf->AliasNbPages();
$pdf->AddPage();
$pdf->SetFont('Times','',12);

$id=$_GET["n"];


$sql="select p.pname,o.qty,o.price,o.total,o.sgst,o.cgst,o.igst,o.gst,o.net,p.unit from purchase_o o,product p where p.pid=o.pname and o.pid=".$id."";
$result1=mysql_query($sql);


$pdf->SetFont('Arial','B',12);
$pdf->Cell(189,8,"PURCHASE ORDER",1,1,'C');

$pdf->SetFont('Arial','',8);

$sql1="select p.id,p.indentno,p.date,s.sname,s.gstno,s.address,s.contact from main_po p,seller s where s.sid=p.party and p.id=".$id." ";
$result2=mysql_query($sql1);
$dataset1=mysql_fetch_array($result2);

$pdf->SetFont('Arial','B',10);
$pdf->Ln(2);
$pdf->Cell(100,4,"SHREE RAM MINERALS",0,0);
$pdf->SetFont('Arial','',8);
$pdf->Cell(45,4,"Date:",0,0);
$pdf->Cell(50,4,date("d-M-Y",strtotime($dataset1['date'])),0,1);

$pdf->Cell(100,4,"GIDC AREA MADHAPAR ",0,0);
$pdf->Cell(45,4,"P.O.Number:",0,0);
$pdf->Cell(59,4,$dataset1['id'],0,1);
$pdf->Cell(100,4,"BHUJ KUTCH - 370020",0,0);
$pdf->Cell(45,4,"Party Name:",0,0);
$pdf->Cell(50,4,$dataset1['sname'],0,1);
$pdf->Cell(100,4,"GSTIN/UIN: 24AIGPS7216J1Z1",0,0);
$pdf->Cell(45,4,"Delivery:",0,0);
$pdf->Cell(59,4,"",0,1);
$pdf->Cell(100,4,"State Name : Gujarat, Code : 24 ",0,0);
$pdf->Cell(45,4,"Payment:",0,0);
$pdf->Cell(50,4,"" ,0,1);
$pdf->Cell(100,4,"Email: store@srmindia.in",0,0);
$pdf->Cell(45,4,"GST:",0,1);
$pdf->Cell(100,4,"Company's  PAN:  AIGPS7216J",0,0);
$pdf->Cell(45,4,"Transportation:",0,1);
$pdf->Ln(2);
$pdf->SetFont('Arial','B',8);
$pdf->Cell(100,4,"Supplier",0,1);

$pdf->Cell(59,4,$dataset1['sname'],0,1);
$pdf->SetFont('Arial','',8);
$pdf->Cell(50,4,$dataset1['address'],0,1);
$pdf->Cell(59,4,"GSTIN/UIN  :".$dataset1['gstno'],0,1);
$pdf->Cell(50,4,"Contact No.:".$dataset1['contact'],0,1);
$pdf->Ln(2);

$pdf->SetFont('Arial','B',8);

$pdf->Cell(14,8,"SRNO",1,0);
$pdf->Cell(52,8,"Product Name",1,0);
$pdf->Cell(14,8,"Price",1,0);
$pdf->Cell(12,8,"QTY",1,0);
$pdf->Cell(17,8,"Total",1,0);
$pdf->Cell(14,8,"CGST",1,0);
$pdf->Cell(14,8,"SGST",1,0);
$pdf->Cell(14,8,"IGST",1,0);
$pdf->Cell(16,8,"GST",1,0);
$pdf->Cell(20,8,"NET",1,1);

$pdf->SetFont('Arial','',8);
$srno=0;
while($dataset=mysql_fetch_array($result1))
{
$srno+=1;
$pdf->Cell(14,8,$srno,1,0);
$pdf->Cell(52,8,$dataset['pname'],1,0);
$pdf->Cell(14,8,$dataset['price'],1,0);
$pdf->Cell(12,8,$dataset['qty'],1,0);
$pdf->Cell(17,8,$dataset['total'],1,0);
$pdf->Cell(14,8,$dataset['cgst'],1,0);
$pdf->Cell(14,8,$dataset['sgst'],1,0);
$pdf->Cell(14,8,$dataset['igst'],1,0);
$pdf->Cell(16,8,round($dataset['gst'],2),1,0);
$pdf->Cell(20,8,round($dataset['net'],2),1,1);
	
	
}


	
	
$pdf->Output();
?>