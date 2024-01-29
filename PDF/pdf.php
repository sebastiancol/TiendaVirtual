<?php
// Incluir la librería FPDF
require('../PDF/fpdf186/fpdf.php');

// Crear una clase extendida de FPDF
class PDF extends FPDF {
    // Función para crear el contenido del PDF
    /*function generarContenido() {
        // Título del documento
        $this->SetFont('Times', 'B', 16);
        $this->Cell(0, 10, 'Ejemplo de Algoritmo en PHP', 0, 1, 'C');
        $this->Ln(10);

        // Ejemplo de algoritmo (búsqueda binaria)
        $algoritmo = "
            <?php
            function busquedaBinaria(\$arr, \$elemento) {
                // Implementación del algoritmo...
                // (Este es solo un ejemplo, no se ejecutará en el PDF)
            }
            ?>
        ";

        // Agregar el código del algoritmo al PDF
        $this->SetFont('Arial', '', 12);
        $this->MultiCell(0, 10, $algoritmo);
    }*/

    // Page header
function Header()
{
    // Logo
    //$this->Image('logo.png',10,6,30);
    // Arial bold 15
    $this->SetFont('Arial','B',15);
    // Move to the right
    $this->Cell(80);
    // Title
    $this->Cell(30,10,'Title',1,0,'C');
    // Line break
    $this->Ln(20);
}

// Page footer
function Footer()
{
    // Position at 1.5 cm from bottom
    $this->SetY(-15);
    // Arial italic 8
    $this->SetFont('Arial','I',8);
    // Page number
    $this->Cell(0,10,'Page '.$this->PageNo().'/{nb}',0,0,'C');
}
}

// Crear instancia de PDF
$pdf = new PDF();
$pdf->AliasNbPages();
$pdf->AddPage();
//$pdf->generarContenido();

$pdf->SetFont('Times','',12);
for($i=1;$i<=40;$i++)
    $pdf->Cell(0,10,'Printing line number '.$i,0,1);

// Salida del PDF
$pdf->Output();
?>
