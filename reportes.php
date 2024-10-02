<?php
require "FPDF/fpdf.php";
require __DIR__ . '/modelo/modelo.php';

session_start();
$correo = $_SESSION["correo"];

$consulta = Modelo::traer_usuarios($correo);
$usuarios = $consulta->fetchAll(PDO::FETCH_ASSOC);


class PDF extends FPDF
{
// Cabecera de página
function Header()
{
    $this->SetFont('Times','B',20);
    $this->Image('FPDF/logo.png',10,8,20);
    $this->SetXY(70,10);
    $this->Cell(80,15,mb_convert_encoding("Reporte de usuarios ", 'ISO-8859-1' ,'UTF-8'),0,1, "C", 0);
    $this->Ln(20);
}

// Pie de página
function Footer()
{
    // Posición: a 1,5 cm del final
    $this->SetY(-15);
    // Arial italic 8
    $this->SetFont('Arial','B',8);
    // Número de página
    $this->Cell(0,10,'Page '.$this->PageNo().'/{nb}',0,0,'C');
}
}

// Creación del objeto de la clase heredada
$pdf = new PDF();
$pdf->AliasNbPages();
$pdf->AddPage();
$pdf->SetAutoPageBreak(20);
$pdf->SetX(10);
$pdf->SetFont('Helvetica','B',13);
$pdf->Cell(7,8,mb_convert_encoding("#", 'ISO-8859-1' ,'UTF-8'),1,0, "C", 0);
$pdf->Cell(20,8,mb_convert_encoding("TipoDoc", 'ISO-8859-1' ,'UTF-8'),1,0, "C", 0);
$pdf->Cell(27,8,mb_convert_encoding("NumDoc", 'ISO-8859-1' ,'UTF-8'),1,0, "C", 0);
$pdf->Cell(27,8,mb_convert_encoding("Nombre", 'ISO-8859-1' ,'UTF-8'),1,0, "C", 0);
$pdf->Cell(27,8,mb_convert_encoding("Apellido", 'ISO-8859-1' ,'UTF-8'),1,0, "C", 0);
$pdf->Cell(27,8,mb_convert_encoding("Dirección", 'ISO-8859-1' ,'UTF-8'),1,0, "C", 0);
$pdf->Cell(27,8,mb_convert_encoding("Teléfono", 'ISO-8859-1' ,'UTF-8'),1,0, "C", 0);
$pdf->Cell(30,8,mb_convert_encoding("Correo", 'ISO-8859-1' ,'UTF-8'),1,1, "C", 0);
$pdf->SetFillColor(230,230,230);


$pdf->SetFont('Helvetica','',10);

if ($consulta->rowCount() > 0) {
    foreach($usuarios as $usuario){
        $pdf->SetX(10);
        $pdf->Cell(7,10,mb_convert_encoding($usuario["id_usuario"], 'ISO-8859-1' ,'UTF-8'),1,0, "C", 1);
        $pdf->Cell(20,10,mb_convert_encoding($usuario["tipo_doc_usuario"], 'ISO-8859-1' ,'UTF-8'),1,0, "C", 0);
        $pdf->Cell(27,10,mb_convert_encoding($usuario["num_doc_usuario"], 'ISO-8859-1' ,'UTF-8'),1,0, "C", 0);
        $pdf->Cell(27,10,mb_convert_encoding($usuario["nombre_usuario"], 'ISO-8859-1' ,'UTF-8'),1,0, "C", 0);
        $pdf->Cell(27,10,mb_convert_encoding($usuario["apellido_usuario"], 'ISO-8859-1' ,'UTF-8'),1,0, "C", 0);
        $pdf->Cell(27,10,mb_convert_encoding($usuario["direccion_usuario"], 'ISO-8859-1' ,'UTF-8'),1,0, "C", 0);
        $pdf->Cell(27,10,mb_convert_encoding($usuario["telefono_usuario"], 'ISO-8859-1' ,'UTF-8'),1,0, "C", 0);
        $pdf->Cell(30,10,mb_convert_encoding($usuario["correo_usuario"], 'ISO-8859-1' ,'UTF-8'),1,1, "C", 0);
    }
}else{
    $pdf->SetX(65);
    $pdf->Cell(80,15,mb_convert_encoding("No hay registros ", 'ISO-8859-1' ,'UTF-8'),0,1, "C", 0);
}

$pdf->Output();
?>