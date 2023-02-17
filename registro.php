<html>
<link rel="stylesheet" href="registrodelphp.css">
<head>
    <style>
        body {
            background-image: url('https://images3.alphacoders.com/606/thumb-1920-606500.jpg');
            background-repeat: no-repeat;
            background-attachment: fixed;
            background-size: cover;
        }
    </style>
</head>
<body>
<!-- Tu contenido aquí -->
</body>
</html>

<?php
include_once ('dt.php');

// Recibo todos los datos del formulario

$nombre=$_POST['nombre'];
$apellido=$_POST['apellido'];
$numerodecedula=$_POST['numerodecedula'];
$telefono=$_POST['telefono'];
$email=$_POST['email'];
$fecha_na=$_POST['fecha_na'];
$genero=$_POST['genero'];
$estadoC=$_POST['estadoC'];
$religion=$_POST['religion'];
$paiso=$_POST['paiso'];
// 10
$pais=$_POST['pais'];
$direccion=$_POST['direccion'];
$provinciadata=$_POST['provinciadata'];
$municipio=$_POST['municipio'];
$montoalquiler=$_POST['montoalquiler'];
$vehiculopropio=$_POST['vehiculopropio'];
$padrescasados=$_POST['padrescasados'];
$madre_viva=$_POST['madre_viva'];
$nocomaa=$_POST['nocomaa'];
$nivelE=$_POST['nivelE'];
//20
$laboraAcT=$_POST['laboraAcT'];
$nombreEMP=$_POST['nombreEMP'];
$posiciOC=$_POST['posiciOC'];
$rangoS=$_POST['rangoS'];
$padre_vivo=$_POST['padre_vivo'];
$nocoma=$_POST['nocoma'];
$nivelED=$_POST['nivelED'];
$laboraAc=$_POST['laboraAc'];
$nombreEM=$_POST['nombreEM'];
$posiOC=$_POST['posiOC'];
//30
$rangoSA=$_POST['rangoSA'];
$enfermedades=$_POST['enfermedades'];
$alergia=$_POST['alergia'];
$medicina=$_POST['medicina'];
$notaE=$_POST['notaE'];
$escuelaS=$_POST['escuelaS'];
$ano_ingreso=$_POST['ano_ingreso'];
$ano_salida=$_POST['ano_salida'];
$provincia=$_POST['provincia'];
$nivelacademico=$_POST['nivelacademico'];
//40
$nivel=$_POST['nivel'];
$recinto=$_POST['recinto'];
$careers=$_POST['careers'];
$bachiller=$_POST['bachiller'];
$institucion=$_POST['institucion'];
$fecha_ing=$_POST['fecha_ing'];
$fecha_sa=$_POST['fecha_sa'];
$indice_ad=$_POST['indice_ad'];
$certificacion_es=$_POST['certificacion_es'];
$beca=$_POST['beca'];
//50
$nombreins=$_POST['nombreins'];
$telefonoinst=$_POST['telefonoinst'];
$posicionocupada=$_POST['posicionocupada'];
$fecha_de_ingreso=$_POST['fecha_de_ingreso'];
$tipo_contrato=$_POST['tipo_contrato'];
$fechadesalidad=$_POST['fechadesalidad'];
$trabajo=$_POST['trabajo'];
$rangosalarial=$_POST['rangosalarial'];
$curriculum=$_POST['curriculum'];
$recordN=$_POST['recordN'];
//60
$copiaC=$_POST['copiaC'];
$cert_b=$_POST['cert_b'];
$image2x2=$_POST['image2x2'];
$acta_l=$_POST['acta_l'];
//64


//echo "<button style='margin-top: 20px; margin-bottom: 20px; font-size: 25px; background: linear-gradient(to right,#7888fc, #720773); border-radius: 6px; color: black; border: white; ' onclick='location.href=`http://localhost/Projecto/Formulario.html`'>Nuevo ciudadano</button> <br>";
//echo "<button style='margin-top: 20px; margin-bottom: 20px; font-size: 25px; background: linear-gradient(to right,#7888fc, #720773); border-radius: 6px; color: black; border: white; ' onclick='location.href=`http://localhost/phpmyadmin/index.php?route=/sql&db=projecto&table=formulario&pos=0`'> Ver base de datos</button> <br>";

echo " <center><p style='margin-top: 20px; font-size: 32px; color: lightslategrey; font-family: 'Calibri'; '>Guardados Correctamentes</p></center> <br>";

//echo "<button onclick='location.href=`princi.html`'>Inicio</button> <br>";
//echo "<button onclick='location.href=`http://localhost/univesidad/admisiones.html`'>Registra nuevo ciudadano</button> <br>";
//echo "<button onclick='location.href=`http://localhost/univesidad/`'>Data table</button> <br>";
//echo "<button onclick='location.href=`http://localhost/phpmyadmin/index.php?route=/sql&db=univesidad&table=admisiones&pos=0`'>Base de dato</button> <br>";


ob_start();


$conectar = conn();
$sql = "INSERT INTO admisiones (`nombre`, `apellido`, `numerodecedula`, `telefono`, `email`, `fecha_na`, `genero`, `estadoC`, `religion`, `paiso`, `pais`, `direccion`, `provinciadata`, `municipio`, `montoalquiler`, `vehiculopropio`, `padrescasados`, `madre_viva`, `nocomaa`, `nivelE`, `laboraAcT`, `nombreEMP`, `posiciOC`, `rangoS`, `padre_vivo`, `nocoma`, `nivelED`, `laboraAc`, `nombreEM`, `posiOC`, `rangoSA`, `enfermedades`, `alergia`, `medicina`, `notaE`, `escuelaS`, `ano_ingreso`, `ano_salida`, `provincia`, `nivelacademico`, `nivel`, `recinto`, `careers`, `bachiller`, `institucion`, `fecha_ing`, `fecha_sa`, `indice_ad`, `certificacion_es`, `beca`, `nombreins`, `telefonoinst`, `posicionocupada`, `fecha_de_ingreso`, `tipo_contrato`, `fechadesalidad`, `trabajo`, `rangosalarial`, `curriculum`, `recordN`, `copiaC`, `cert_b`, `image2x2`, `acta_l`)
VALUES ('$nombre', '$apellido', '$numerodecedula', '$telefono', '$email', '$fecha_na', '$genero', '$estadoC', '$religion', '$paiso', '$pais', '$direccion', '$provinciadata', '$municipio', '$montoalquiler', '$vehiculopropio', '$padrescasados', '$madre_viva', '$nocomaa', '$nivelE', '$laboraAcT', '$nombreEMP', '$posiciOC', '$rangoS', '$padre_vivo', '$nocoma', '$nivelED', '$laboraAc', '$nombreEM', '$posiOC', '$rangoSA', '$enfermedades', '$alergia', '$medicina', '$notaE', '$escuelaS', '$ano_ingreso', '$ano_salida', '$provincia', '$nivelacademico', '$nivel', '$recinto', '$careers', '$bachiller', '$institucion', '$fecha_ing', '$fecha_sa', '$indice_ad', '$certificacion_es', '$beca', '$nombreins', '$telefonoinst', '$posicionocupada', '$fecha_de_ingreso', '$tipo_contrato', '$fechadesalidad', '$trabajo', '$rangosalarial', '$curriculum', '$recordN', '$copiaC', '$cert_b', '$image2x2', '$acta_l')";
$resul = mysqli_query($conectar, $sql) or trigger_error("Query Failed! SQL- Error:".mysqli_error($conectar), E_USER_ERROR);

echo "$sql";
ob_end_clean();

?>

<style>
    body {
        background-image: url('https://images3.alphacoders.com/606/thumb-1920-606500.jpg');
        background-repeat: no-repeat;
        background-attachment: fixed;
        background-size: cover;
    }
    
    button {
        display: block;
        margin: 0 auto;
        padding: 10px 20px;
        background-color: #5DC1B9;
        border: none;
        border-radius: 5px;
        font-size: 16px;
        color: black;
        cursor: pointer;
        text-align: center;

    }
</style>

<div  style="text-align: center;">
    <button onclick="location.href='princi.html'">Inicio</button> <br>
    <button onclick="location.href='http://localhost/univesidad/admisiones.html'">Registra nuevo ciudadano</button> <br>
    <button onclick="location.href='http://localhost/univesidad/'">Data table</button> <br>
    <button onclick="location.href='http://localhost/phpmyadmin/index.php?route=/sql&db=univesidad&table=admisiones&pos=0'">Base de datos</button> <br>


</div>
