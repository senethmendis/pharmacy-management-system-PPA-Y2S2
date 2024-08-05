<?php
include ('dbconfig.php');
require 'vendor/autoload.php';
use Dompdf\Dompdf;

/*$sql =mysqli_query($connection,"SELECT * from invoice_order_item");
$row = mysqli_fetch_assoc($sql);*/

$dompdf = new Dompdf();
ob_start();
require ('view_prescription_history.php');
$html=ob_get_contents();
ob_get_clean();


$dompdf->loadHtml($html);

$dompdf->setPaper('A4', 'landscape');

$dompdf->render();

$dompdf->stream('sales_report.pdf',['Attachment'=>false]);
