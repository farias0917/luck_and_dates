<?php
require "FPDF/fpdf.php";


$pdf = new FPDF();
$pdf->AddPage();
$pdf->SetFont('Arial','B',16);
$pdf->Cell(40,10, mb_convert_encoding("¡hola!", 'ISO-8859-1' ,'UTF-8'));
$pdf->Output();
?>