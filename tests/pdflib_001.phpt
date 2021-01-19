--TEST--
Check for pdflib extension presence
--FILE--
<?php 
var_dump(extension_loaded("pdflib"));
?>
--EXPECT--
bool(true)
