<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
   
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>
<body>
<style>

</style>
<?php
$nombre = $_POST['name'];
$edad = $_POST['edad'];
$tipo = $_POST['tipo'];
$pelaje = $_POST['pelaje'];
$mezcla = $_POST['mez'];




?>

<br>

<div class="container">

<br>

<h1>Veterinaria Mascota detalles</h1>
<br>
<table class="table table-success table-striped">
    <tr>
        <td>Nombre:</td>
        <td><?php echo $nombre?> </td>
    </tr>
    <tr>
        <td>Edad:</td>
        <td><?php echo $edad?> </td>
    </tr>

    <tr>
        <td>Tipo:</td>
        <td><?php echo $tipo?> </td>
    </tr>

    
    <tr>
        <td>Pelaje:</td>
        <td><?php echo $pelaje?> </td>
    </tr>

     
    <tr>
        <td>Mezcla:</td>
        <td><?php echo $mezcla?> </td>
    </tr>

</table>

</div>



<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>
</html>

