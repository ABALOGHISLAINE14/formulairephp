<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>formulaire</title>
</head>
<style>
    table{
        border: solid 2px
    }
</style>
<body>
    <h4>Afficher les données</h4>
    <table>
        <tr>
        <th>Id</th>
        <th>name</th>
        <th>body</th>
        <th>priority</th>
        <th>type</th>
        <th>Supprimer</th>
        <th>Modifier</th>
        </tr>

        <?php
        require_once("connect.php");
        $req=$conn->query("SELECT * FROM message");
         while($aff=$req->fetch_assoc()){?>
        
        <tr>
            <td> <?php echo $aff["Id"]; ?> </td>
            <td> <?php echo $aff["name"]; ?> </td>
            <td> <?php echo $aff["body"]; ?> </td>
            <td> <?php echo $aff["priority"]; ?> </td>
            <td> <?php echo $aff["type"]; ?> </td>
            <td><a href="supprimer.php?Id= <?php echo $aff["Id"] ?> ">Supprimer</a></td>
            <td><a href="modifier.php?Id= <?php echo $aff["Id"] ?> ">Modifier</a></td>
        
            
        </tr>
   
        <?php }                              ?>
    </table>
    
</body>
</html>