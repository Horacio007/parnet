<?php
include('../librerias/fpdf/fpdf.php');
include("../class/class_productos_dal.php");

$id = $_GET['id'];

$obj_dato_productos=new productos_dal;

$result_productos=$obj_dato_productos->select_by_idproducto($id);

foreach ($result_productos as $key => $value) {
    $nombre = $value->getNombreProducto();
    $descripcion = $value->getDescripcionProducto();
    $imagen = $value->getImagen();
    $costo = $value->getCosto();
}

class PDF extends FPDF
{
// Cabecera de página
function Header()
{
    // Arial bold 15
    $this->SetFont('Arial','B',50);
    // Movernos a la derecha
    $this->Cell(80);
    // Título
    $this->Cell(30,10,utf8_decode('Parnet'),0,0,'C');
    // Salto de línea
    $this->Ln(20);
    $this->SetFont('Arial','B',30);
    $this->Cell(190,10,utf8_decode('Ficha Técnica'),0,1,'C');
}
}

$img = "http://localhost"."$imagen"."";
$pdf = new PDF();
$pdf->AddPage();
$pdf->SetFont('Arial','B',20);
$pdf->Ln();
$pdf->Cell(190,10,utf8_decode('Nombre : '.$nombre),0,1,'C');
$pdf->Ln();
$pdf->Cell(190,10,utf8_decode('Descripción : '.$descripcion),0,1,'C');
$pdf->Ln();
$pdf->Image($img,75,90,70,0);
$pdf->Ln();
$pdf->Cell(190,100,utf8_decode('Costo : $'.$costo),0,1,'C');
$pdf->Output(utf8_decode('Ficha Técnica '.$nombre.".pdf"), 'I');

?>