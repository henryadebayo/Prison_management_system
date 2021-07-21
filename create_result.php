<?php 

date_default_timezone_set('UTC');
require('fpdf/fpdf.php');

class PDF_result extends FPDF {
	function __construct ($orientation = 'P', $unit = 'pt', $format = 'Letter', $margin = 40) {
		$this->FPDF($orientation, $unit, $format);
		$this->SetTopMargin($margin);
		$this->SetLeftMargin($margin);
		$this->SetRightMargin($margin);
		
		$this->SetAutoPageBreak(true, $margin);
	}
	
	function Header () {
	     $this->Image('youhack.png',100,15,250);

	//	$this->SetFont('Arial', 'B', 20);
	//	$this->SetFillColor(36, 96, 84);
	//	$this->SetTextColor(225);
	//	$this->Cell(0, 30, "YouHack MCQ Results", 0, 1, 'C', true);
	}
	
 function Footer()
{
    //Position at 1.5 cm from bottom
    $this->SetY(-15);
    //Arial italic 8
    $this->SetFont('Arial','I',8);
    //Page number
    $this->Cell(0,10,'Generated at YouHack.me',0,0,'C');
}

	
function Generate_Table($subjects, $marks) {
	$this->SetFont('Arial', 'B', 12);
	$this->SetTextColor(0);
//	$this->SetFillColor(94, 188, z);
$this->SetFillColor(94, 188, 225);
	$this->SetLineWidth(1);
	$this->Cell(427, 25, "Subjects", 'LTR', 0, 'C', true);
	$this->Cell(100, 25, "Marks", 'LTR', 1, 'C', true);
	 
	$this->SetFont('Arial', '');
	$this->SetFillColor(238);
	$this->SetLineWidth(0.2);
	$fill = false;
	
	for ($i = 0; $i < count($subjects); $i++) {
		$this->Cell(427, 20, $subjects[$i], 1, 0, 'L', $fill);
		$this->Cell(100, 20,  $marks[$i], 1, 1, 'R', $fill);
		$fill = !$fill;
	}
	$this->SetX(367);
	//$this->Cell(100, 20, "Total", 1);
//	$this->Cell(100, 20,  array_sum($marks), 1, 1, 'R');
}
	
	
	
	
	
	
}

$pdf = new PDF_result();
$pdf->AddPage();
$pdf->SetFont('Arial', 'B', 12);
$pdf->SetY(100);

$pdf->Cell(100, 13, "Student Details");
$pdf->SetFont('Arial', '');

$pdf->Cell(250, 13, $_POST['name']);

$pdf->SetFont('Arial', 'B');
$pdf->Cell(50, 13, "Date:");
$pdf->SetFont('Arial', '');
$pdf->Cell(100, 13, date('F j, Y'), 0, 1);

$pdf->SetFont('Arial', 'I');
$pdf->SetX(140);
$pdf->Cell(200, 15, $_POST['e-mail'], 0, 2);
$pdf->Cell(200, 15, $_POST['Address'] . ',' . $_POST['City'] , 0, 2);
$pdf->Cell(200, 15, $_POST['Country'], 0, 2);

$pdf->Ln(100);

$pdf->Generate_Table($_POST['subjects'], $_POST['Marks']);

$pdf->Ln(50);

$message = "Congratulation , you have successfully passed your exams .For More Information Contact us at : ";

$pdf->MultiCell(0, 15, $message);

$pdf->SetFont('Arial', 'U', 12);
$pdf->SetTextColor(1, 162, 232);

$pdf->Write(13, "admin@youhack.me", "mailto:example@example.com");

$pdf->Output('result.pdf', 'F');




