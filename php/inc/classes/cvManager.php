
<?php
	class CVManager
	{
		private $config;

		function __construct($config = null)
		{
			$this->config = $config;
		}

		function createJSON($data)
		{
			if ($data)
			{
				$_SESSION['formdata'] = $data;
				return json_encode($data);
			}
			else
				return false;
		}

		function createPDF()
		{
			
			// Require composer autoload
			require_once $this->config->root.'plugins/mpdf/vendor/autoload.php';
		
			
			// Create an instance of the class:
			//$mpdf = new \Mpdf\Mpdf();
			$mpdf = new \Mpdf\Mpdf(['tempDir' => '/var/www/cvtool/tmp/']);
			

			// Write some HTML code:
			//$html = ob_get_contents();
			$css = file_get_contents($this->config->root."css/pdf.css"); 
		
			$html = "<p>lol</p>";


			$mpdf->WriteHTML($css,\Mpdf\HTMLParserMode::HEADER_CSS);
			$mpdf->WriteHTML($html,\Mpdf\HTMLParserMode::HTML_BODY);

			// Output a PDF file directly to the browser
			$mpdf->Output("test.pdf", "D");

			#print_r($_SESSION['formdata']);
		}
		
	}

?>
