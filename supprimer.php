<?php
require_once("connect.php");

if(isset($_GET["Id"]))
{
    $Id=$_GET["Id"];
    $req=$conn->prepare("DELETE FROM message WHERE Id= ?");
    $req->execute(array($Id));
    if($req)
    {
        echo "Suppression des informations avec succès";
    }
}

?>


