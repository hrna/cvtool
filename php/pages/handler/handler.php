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
        default:
            die("default");
            break;
    }




?>
