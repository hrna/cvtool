
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
				return json_encode($data);
			}
			else
				return false;
		}
		
	}

?>
