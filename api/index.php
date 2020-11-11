<?php
	session_name("CVTOOL");
	session_start();
	require("../php/inc/config/config.php");
	require("../php/inc/classes/utilityManager.php");


	$util = new utilityManager($config);

	$action = $util->arg(0);
	$arg = $util->arg(1);

	$result = Array('success' => false, 'info' => 'Empty url.');

	switch($action)
	{
		case 'sendJson':
			// send json file
			if (!empty($_SESSION['formdata']) && !empty($_SESSION['jsonOutput']))
			{
				$filename = $_SESSION['formdata']['fullName']."_CV";
				header('Content-disposition: attachment; filename='.$filename.'.json');
				header('Content-type: application/json');
				echo $_SESSION['jsonOutput'];
				unset($_SESSION['jsonOutput']);
			}
		break;
	    default:
			#$util->redirectAPI("", true);
		break;
	}
	ob_flush();
?>
