  
<?php
    include("class/users.php");
    $signin=new users;
    extract($_POST);
    if($signin->signin($e,$p))
    {
        $signin->url("home4.php");
    }
    else
    {
        $signin->url("index1.php?run=failed");
    }
?>