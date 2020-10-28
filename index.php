<?php

  ob_start();
  session_name("CVTOOL");
  session_start();

  require("php/inc/config/config.php");
  require("php/inc/classes/utilityManager.php");


  $util = new utilityManager($config);
  
  $notFound = false;
  $page = $util->arg(0);
  
  require("php/pages/index.php");

  ob_flush();
  
 ?>
