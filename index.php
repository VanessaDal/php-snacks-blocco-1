<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

<style>

*{
    margin:0;
    padding:0;
    box-sizing:border-box;
}

body{
    background-color: powderblue;
    width: 100%;
    height: 600px;
    display:flex;
    justify-content:center;
    align-items:center;
       
}

.riuscito h1{
    color:green;

}

.negato h1{
    color:#8B0101;
}

.accesso{
    width:400px;
    height:200px;
    background-color:lightgreen;
    border-radius:10px;
    display:flex;
    justify-content:center;
    align-items:center;
}

.negato{
    background-color:#FF6961;
}
</style>

<?php 
    $name=$_GET["name"];
    $mail=$_GET["mail"];
    $age=$_GET["age"];

?>

</head>
<body>

<!-- Passare come parametri GET name, mail e age e
verificare (cercando i metodi che non
conosciamo nella documentazione) che:
1. name sia più lungo di 3 caratteri,
2. che mail contenga un punto e una chiocciola
3. e che age sia un numero.
Se tutto è ok stampare "Accesso riuscito", altrimenti
"Accesso negato" -->


<?php 
    if((strlen($name) > 3) && (strpos($mail, ".") !==false) && (strpos($mail, "@") !==false) && (is_numeric($age)===true)) {
?>
        <div class="accesso riuscito"> <h1>ACCESSO RIUSCITO</h1></div>
<?php 
    } else {
?>
        <div class="accesso negato"><h1>ACCESSO NEGATO</h1></div>
<?php
    }
?>


    
</body>
</html>