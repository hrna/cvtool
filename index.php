<?php

  ob_start();
  session_name("CVTOOL");
  session_start();

  require("php/inc/config/config.php");
  require("php/inc/classes/utilityManager.php");
  require("php/inc/classes/cvManager.php");


  $util = new utilityManager($config);
  $cv = new CVManager($config);
  
  $notFound = false;
  $page = $util->arg(0);
  
  require("php/pages/index.php");

  ob_flush();
  
 ?>
