<?php
require 'vendor/autoload.php';
use Dompdf\Dompdf;

// instantiate and use the dompdf class
$dompdf = new Dompdf(); 

$fname = "pdf_test.pdf";
$msg_body = "<h1>My PDF file</h1>";

$dompdf->loadHtml($msg_body);
// (Optional) Setup the paper size and orientation
$dompdf->setPaper('A4', 'landscape');
// Render the HTML as PDF
$dompdf->render();
// Output the generated PDF to Browser
//$dompdf->stream();
$output = $dompdf->output();

//$f_name = "cstatement".rand (100,1000).".pdf";
file_put_contents( $fname, $output);









echo 'hello';