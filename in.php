<?php
session_start();
$db=mysqli_connect('localhost','root','','cricket_assoc') or die("Error 404 not found");

if(isset($_SESSION['username'])){
    $player=$_SESSION['username'];
require_once("./DBController.php");
$db_handle = new DBController();
$result = $db_handle->runQuery("SELECT * FROM player_bowl_det where player_name='$player'");
$q = $db_handle->runQuery("SELECT * FROM req_details where username='$player'");
}
require('./fpdf/fpdf.php');
$pdf = new FPDF();
$pdf->AddPage();
$pdf->SetFont('Arial','B',12);

foreach($q as $row) {
$pdf->SetFont('Arial','',12);
$pdf->Ln();
foreach($row as $column)
$pdf->Cell(25,12,$column,1);
}

foreach($result as $row) {
$pdf->SetFont('Arial','',12);
$pdf->Ln();
       
foreach($row as $column)
$pdf->Cell(35,12,$column,1);
}
$pdf->Output();
?>