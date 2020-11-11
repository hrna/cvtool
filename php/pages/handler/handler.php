<?php

    $arg = $util->arg(1);

    switch($arg)
    {
        case 'pdf':
            if (!empty($_SESSION['formdata']))
            {
                $cv->createPDF();
                break;
            }
            $util->redirectBack();
        break;
        case 'json':
            // create a pretty json and send it
            if (!empty($_SESSION['formdata']))
            {   
                $cv->createJSON($_SESSION['formdata']);
                $util->redirectAPI("sendJson");
            }
            $util->redirectBack();
        break;
        default:
            die("default");
        break;
    }




?>
