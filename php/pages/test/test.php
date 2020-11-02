<?php
// Require composer autoload
require_once $config->home.'plugins/mpdf/vendor/autoload.php';
// Create an instance of the class:
//$mpdf = new \Mpdf\Mpdf();
$mpdf = new \Mpdf\Mpdf(['tempDir' => 'tmp/']);

// Write some HTML code:
$mpdf->WriteHTML('Hello World');

// Output a PDF file directly to the browser
$mpdf->Output();