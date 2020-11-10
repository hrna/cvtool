
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
			$mpdf->WriteHTML($css,\Mpdf\HTMLParserMode::HEADER_CSS);
		
			$expertise ="";
			foreach ($_SESSION['formdata']['expertise'] as $exp)
			{
				$expertise .= '
				<tr>
					<td></td>
					<td><li>'.$exp.'</li></td>
				</tr>';
			}
			
			$skills ="";
			foreach ($_SESSION['formdata']['skills'] as $skill)
			{
				$skills .= '
				<tr>
					<td></td>
					<td><li>'.$skill.'</li></td>
				</tr>';
			}

			$html1 = '
			<body>
				<table style="width: 100%">
					<tr>
						<td style="width: 400px; font-face: Century Gothic">
							<h1>'.$_SESSION['formdata']['fullName'].'</h1>
							<p style="font-size: 1.2rem">
								dob: '.$_SESSION['formdata']['dob'].' <br />
								address: '.$_SESSION['formdata']['address'].', '.$_SESSION['formdata']['zip'].' '.$_SESSION['formdata']['city'].'<br />
								tel. '.$_SESSION['formdata']['phone'].' <br />
								email: '.$_SESSION['formdata']['email'].'
							</p>
						</td>
						<td style="width: 300px"></td>
						<td style="width: 300px"></td>
					</tr>					
				</table>

				<br />

				<table style="width: 100%">
					<tr>
						<th style="padding-right: 20px; width: 175px">Areas of Expertise</th>
						<th></th>
					</tr>
					'.$expertise.'
				</table>

				<br />
				
				<table style="width: 100%">
					<tr>
						<th style="padding-right: 20px; width: 175px">Personal Skills</th>
						<th></th>
					</tr>
					'.$skills.'
				</table>
			
				<br />
				
				<table style="width: 100%">
					<tr>
						<th style="padding-right: 20px; width: 175px">Personal Summary</th>
						<th></th>
					</tr>
					<tr>
						<td></td>
						<td>'.nl2br($_SESSION['formdata']['pSummary']).'</td>
					</tr>
				</table>

				<br />

				<table style="width: 100%">
					<tr>
						<th style="padding-right: 20px; width: 175px">Personal Summary</th>
						<th></th>
					</tr>
					<tr>
						<td></td>
						<td>'.nl2br($_SESSION['formdata']['wExperience']).'</td>
					</tr>
				</table>

				<br />

				<table style="width: 100%">
					<tr>
						<th style="padding-right: 20px; width: 175px">References</th>
						<th></th>
					</tr>
					<tr>
						<td></td>
						<td>'.nl2br($_SESSION['formdata']['references']).'</td>
					</tr>
				</table>
			</body>
			'; 

			$mpdf->setHeader('Curriculum vitae ||'.$_SESSION['formdata']['date']);

			$mpdf->WriteHTML($html1,\Mpdf\HTMLParserMode::HTML_BODY);


			// Output a PDF file directly to the browser
			$mpdf->Output("test.pdf", "D");

			#print_r($_SESSION['formdata']);
		}
		
	}

?>
