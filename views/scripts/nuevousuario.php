<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../css/bootstrap.css">
    <link rel="stylesheet" href="../../css/rabbit.css">
    <script src="../../js/bootstrap.min.js"></script>
    <link rel="icon" href="../../images/icon.png">
    <title>RegVet</title>
</head>
<body class="bodyrabbit">
<br>
<br>
<br>
    <?php
    use Vet\query\inseruser;
    use Vet\query\select;
    require_once("../../vendor/autoload.php");

    $insertp = new inseruser();
    $insertu = new inseruser();

    extract($_POST);

    $nper = "insert into persona(nombre, apellido, correo, contrasena)
             values('$nom','$ape','$cor','$con')";
    $insertp->inseruser($nper);

    $selecid = new select();

    $cadena = "select * from persona where nombre like '$nom' and apellido like '$ape';";
    $ids = $selecid->seleccionar($cadena);

    //$nuser = "insert into usuarios(persona)
    //          values($ids)";

    echo "<h2>$id[$ids]</h2>";

    //$insertu->inseruser($nuser);
    echo "
        <div  class='rabbit'></div>
        <div class='clouds'></div>
    ";
    //header("refresh:3;../../index.php");
    ?>


</body>
</html>