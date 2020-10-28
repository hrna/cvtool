<?php
	
	if(!empty($page))
	{
		if(file_exists('php/pages/'.$page.'/'.$page.'.php'))
		{
				require('php/pages/'.$page.'/'.$page.'.php');
		}
		else $notFound = true;
	}

	require('php/pages/view_index.php');

?>

