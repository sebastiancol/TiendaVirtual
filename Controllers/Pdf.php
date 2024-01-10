<?php
    require('fpdf.php');

    use FPDF;

    class PDF extends Controllers implements FPDF{
        // Función para crear el contenido del PDF
        function generarContenido() {
            // Título del documento
            $this->SetFont('Arial', 'B', 16);
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
        }
    }
    
    // Crear instancia de PDF
    $pdf = new PDF();
    $pdf->AddPage();
    $pdf->generarContenido();
    
    // Salida del PDF
    $pdf->Output();
    ?>
?>