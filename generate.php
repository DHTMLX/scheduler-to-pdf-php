<?php

require_once './pdfGenerator.php';
require_once './pdfWrapper.php';
require_once './tcpdf_ext.php';
$debug = true;
error_reporting(E_ALL);

$xml_string = $_POST['mycoolxmlbody'];
if (get_magic_quotes_gpc()) $xml_string = stripslashes($xml_string);
$xml_string = urldecode($xml_string);

if ($debug == true)
	error_log($xml_string, 3, 'debug_'.date("Y_m_d__H_i_s").'.xml');

$pdf = new schedulerPDF();
$pdf->printPDF($xml_string);

?>