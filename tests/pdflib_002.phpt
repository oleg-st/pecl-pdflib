--TEST--
Create PDFlib object
--FILE--
<?php 
$pdf = new PDFlib();
var_dump($pdf);
?>
--EXPECT--
object(PDFlib)#1 (0) {
}
