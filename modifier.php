<?php require_once("connect.php");?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>


<h2>Modification des informations</h2>

<form  method="post">
        <label for="name">Name</label>
        <input  type="text" id="name" name="name">

        <label for="message">Message</label>
        <textarea  id="message" name="message"></textarea>

        <label for="priority">Priority</label>
        <select id="priority" name="priority">
        <option value="1 ">Low</option>
        <option value="2 " selected>Meduim</option>
        <option value="3 ">High</option>
        </select>

        <fieldset>
            <legend>Type</legend>

            <label for="Type">
            <input  type="radio" name="type" value="1"checked>
            Complaint
            </label>

            <br>

            <label>
            <input type="radio" name="type" value="2">
            Suggestion
            </label>

        </fieldset>
       
        <br>
        <button name="modifier">Enrégistrer</button>

    </form>

    <?php

if(isset($_GET["Id"]))
{
$name = $_POST["name"];
$message = $_POST["message"];
$priority = filter_input(INPUT_POST, "priority", FILTER_VALIDATE_INT);
$type = filter_input(INPUT_POST, "type", FILTER_VALIDATE_INT);

    $Id=$_GET["Id"];
    $req=$conn->query("UPDATE  message SET name='$name',body='$message',priority='$priority' WHERE Id=$Id"); 
    if($req){
        echo "Modification Réussie";
    }
    }
?>


</body>
</html>