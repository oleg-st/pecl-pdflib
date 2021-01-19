--TEST--
Create empty pdf document
--FILE--
<?php
$pdf = new PDFlib();
var_dump($pdf->begin_document('', ''));
var_dump($pdf->begin_page_ext(210, 207, ''));
var_dump($pdf->end_page_ext(''));
var_dump($pdf->end_document(''));
?>
--EXPECT--
int(1)
bool(true)
bool(true)
bool(true)
