<!DOCTYPE html>
<html lang="en">
	<head>
		<meta content="IE=edge">
		<meta charset="utf-8">
		<meta name="theme-color" content="#000"/>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta http-equiv="Cache-control" content="public">
		<title>CV TOOL</title>
		<link href="<?php echo $util->formLink('css/main.css')?>" rel="stylesheet" type="text/css">
		<script src="https://kit.fontawesome.com/5fa9fe60f4.js" crossorigin="anonymous"></script>
	</head>
	<body>
		<div class="container page-padding">
			<?php require('php/pages/messages.php');?>
			<?php
				if(!empty($page))
				{
					if ($notFound) echo "<div class='col-md-12 alert alert-danger text-center fade-in' role='alert'>
					<h3>Page you were looking is not found</h3>
					</div>";

					elseif(file_exists('php/pages/'.$page.'/view_'.$page.'.php'))
					{
						require('php/pages/'.$page.'/view_'.$page.'.php');
					}
					else $notFound = true;
				}
				else require('php/pages/view_landing.php');
			?>           
		</div>
	<footer class="footer">
		<div class="container">
			<span class="text-muted">A simple CV Tool project</span>
		</div>
	</footer>
		<!-- jQuery  -->
		<script language="JavaScript" type="text/javascript" src="<?php echo $util->formLink('js/jquery-3.5.1.min.js')?>"></script>

		<!-- Bootstrap JS -->
		<script language="JavaScript" type="text/javascript" src="<?php echo $util->formLink($config->home.'bootstrap-4.5.3/js/bootstrap.bundle.min.js')?>"></script>

		<!-- Other JS  --> 
		<script language="JavaScript" type="text/javascript" src="<?php echo $util->formLink('js/create.js')?>"></script>
		<script language="JavaScript" type="text/javascript" src="<?php echo $util->formLink('js/preview.js')?>"></script>
		<script language="JavaScript" type="text/javascript" src="<?php echo $util->formLink('js/handlebars.v4.7.6.min.js')?>"></script>
	</body>
</html>