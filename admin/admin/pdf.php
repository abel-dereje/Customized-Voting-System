<?php
include "fpdf/fpdf.php";
//include "connction.php";
$db = new PDO("mysql:host=localhost;dbname=election", "root", "");
class PDF extends FPDF{
  
  function Header()  {
          $this->Image('logo.png',10,1);
          $this->SetFont('Arial','B',14);
          //$this->Cell(5);
          $this->Cell(276,5,'Vote Report List',0,0,'C');
          $this->Ln();
          $this->SetFont('Times','B',12);
          $this->Cell(276,5,'Vote Report List',0,0,'C');
          $this->Ln(20);
        }
        function Footer(){
          //add table bottom line
          $this->Cell(190,0,'','T',1,'',true);

          //go to 1.5cm from bottom
          $this->SetY(-15);

          $this->SetFont('Arial','',8);

          //width = 0 means the cell us extended up to the right marigin
          $this->Cell(0,10,'Page '.$this->pageNo()." / {pages}",0,0,'C');
        }
        function headerTable()
        {
          $this->SetFont('Times','B',12);
         // $this->Cell(20,10,'Image',1,0,'C');
          $this->Cell(30,10,'Name',1,0,'C');
          $this->Cell(50,10,'Email',1,0,'C');
          $this->Cell(35,10,'Phone',1,0,'C');
          $this->Cell(60,10,'Address',1,0,'C');
          $this->Cell(60,10,'Description',1,0,'C');
          $this->Cell(20,10,'Vote',1,0,'C');
          $this->Ln();
        }
        function viewTable($db)
        {
          $this->SetFont('Times','',12);
          $stmt = $db->query('select * from candidate');
          while ($data = $stmt->fetch(PDO::FETCH_OBJ)) {
            //$this->Cell(20,10,$data->image,1,0,'C');
            $this->Cell(30,10,$data->Cname,1,0,'C');
            $this->Cell(50,10,$data->Cemail,1,0,'C');
            $this->Cell(35,10,$data->Cphone,1,0,'C');
            $this->Cell(60,10,$data->Cadress,1,0,'C');
            $this->Cell(60,10,$data->Cdescription,1,0,'C');
            $this->Cell(20,10,$data->vote,1,0,'C');
            $this->Ln();
          }
        }
      }
        $pdf = new PDF();
        $pdf->AliasNbPages();
        $pdf->SetAutoPageBreak('true',15);
        $pdf->AddPage('L','A4',0);
        $pdf->headerTable();
        $pdf->viewTable($db);
        $pdf->Output();
        ?>
        