<?php
require_once('Fpdf/fpdf.php');

$pdf = new FPDF();
$pdf->AddPage();

$pdf->SetFont('Arial','B',16);
$pdf->SetTextColor(0,0,255);

$pdf->Cell(0,10,'Izveštaj stanja u garaži',0,1,'C');

$pdf->SetFont('Arial','',12);
$pdf->SetTextColor(0,0,0);

// Adjusted column widths and added an extra column
$w = array(33, 33, 33, 33, 20, 20, 20, 30);

$pdf->Cell($w[0],7,'Naziv',1,0,'C');
$pdf->Cell($w[1],7,'Opis',1,0,'C');
$pdf->Cell($w[2],7,'Marka',1,0,'C');
$pdf->Cell($w[3],7,'Model',1,0,'C');
$pdf->Cell($w[4],7,'Gorivo',1,0,'C');
$pdf->Cell($w[5],7,'Godina proizvodnje',1,0,'C');
$pdf->Cell($w[6],7,'Cena',1,0,'C');
$pdf->Cell($w[7],7,'Datum kreiranja',1,1,'C');

require_once('../../BASE/db.php');

if ($connect->connect_error) {
    die("Connection failed: " . $connect->connect_error);
}

$sql = "SELECT title, description, mark, model, fuel, y_manufacture, price, created_at FROM `used_car`.`article`";
$result = $connect->query($sql);

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        $pdf->Cell($w[0],6,$row["title"],1,0,'L');
        $pdf->Cell($w[1],6,$row["description"],1,0,'L');
        $pdf->Cell($w[2],6,$row["mark"],1,0,'L');
        $pdf->Cell($w[3],6,$row["model"],1,0,'L');
        $pdf->Cell($w[4],6,$row["fuel"],1,0,'L');
        $pdf->Cell($w[5],6,$row["y_manufacture"],1,0,'C');
        $pdf->Cell($w[6],6,$row["price"],1,0,'R');
        $pdf->Cell($w[7],6,$row["created_at"],1,1,'R');
    }
} else {
    $pdf->Cell(0,10,'Nema podataka u tabeli',0,1,'C');
}

$connect->close();

$pdf->Output('condition_report.pdf', 'D');

