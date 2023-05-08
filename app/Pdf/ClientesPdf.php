<?php

namespace App\Pdf;

use Codedge\Fpdf\Fpdf\Fpdf;

class ClientesPdf extends Fpdf
{
    private $title;
    private $logo;
    private $report_code;
    private $print_date;
    
    public function __construct($title, $logo, $report_code, $print_date)
    {
        parent::__construct();
        $this->title = $title;
        $this->logo = $logo;
        $this->report_code = $report_code;
        $this->print_date = $print_date;


        // Set the encoding to UTF-8
        $this->SetFont('Arial', '', 14);
        $this->AddFont('DejaVuSans', '', 'DejaVuSans.php');
        $this->AddFont('DejaVuSans-Bold', '', 'DejaVuSans-Bold.php');
        $this->AddFont('DejaVuSans-Oblique', '', 'DejaVuSans-Oblique.php');
        $this->AddFont('DejaVuSans-BoldOblique', '', 'DejaVuSans-BoldOblique.php');
        $this->SetAutoPageBreak(true, 30);
        $this->SetMargins(20, 20, 20);
        $this->AliasNbPages();
    }
    
    public function setData($clientes)
    {
        $this->AddPage();
        
        // Logo
        $this->Image($this->logo, 10, 10, 30);
        
        // Título
        $this->SetFont('Arial', 'B', 16);
        $this->Cell(0, 15, $this->title, 0, 1, 'C');
        $this->Ln(10);
        
        // Código de reporte y fecha de impresión
        $this->SetFont('Arial', '', 10);
        $this->Cell(0, 10, 'Código de reporte: ' . $this->report_code, 0, 0, 'L');
        $this->Cell(0, 10, 'Fecha de impresión: ' . $this->print_date, 0, 1, 'R');
        $this->Ln(10);
        
        // Cabecera de tabla
        $this->SetFont('Arial', 'B', 12);
        $this->Cell(40, 10, 'Cédula', 1);
        $this->Cell(60, 10, 'Nombre', 1);
        $this->Cell(40, 10, 'Teléfono', 1);
       // $this->Cell(40, 10, 'Tipo de cliente', 1);
        $this->Ln();
        
        // Datos de tabla
        $this->SetFont('Arial', '', 10);
        foreach ($clientes as $cliente) {
            $this->Cell(40, 10, $cliente->cedula, 1);
            $this->Cell(60, 10, $cliente->nombre, 1);
            $this->Cell(40, 10, $cliente->telefono, 1);
            //$this->Cell(40, 10, $cliente->tipo_cliente->descripcion, 1);
            $this->Ln();
        }
    }
}
