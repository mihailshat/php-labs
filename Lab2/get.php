<?php
    // var_export($_GET);
    if(isset ($_GET ['name']) && !empty ($_GET ['name']))echo 'Hello '.$_GET['name'].'<br>';
    if(isset ($_GET ['age']) && !empty ($_GET ['age']))echo 'Hello '.$_GET['age'].'<br>';

    if (!empty ($_POST)){
        // var_dump($_POST);
        if (isset($_POST['name'])) echo 'Name = '.$_POST['name'].'<br>';
        if (isset($_POST['female'])) echo 'Female = '.$_POST['female'].'<br>';
        if (isset($_POST['email'])) echo 'Email = '.$_POST['email'].'<br>';

    }


?>