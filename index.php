<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio POO Individual 4 (Herrencia)</title>
</head>
<body>

<form method="POST" action="">

    <table><h1>Calculadora</h1>
        <tr>            
        <tr>
            <td>
                <label>Número 1:</label>
                <input type="number" name="numero1">
            </td>
        </tr>
        <tr>            
        <tr>
            <td>
                <label>Número 2:</label>
                <input type="number" name="numero2">
            </td>
        </tr>             
    </table>
    <br><br>
    <input type="submit" name="suma" value="Suma">
    <input type="submit" name="resta" value="Resta">
    <input type="submit" name="multiplicacion" value="Multiplicación">
    <input type="submit" name="division" value="División">
    

</form>

<?php

//LLAMADA A LA FUNCIÓN

include('Calculadora.php');

//CREACIÓN OBJETO (INSTANCIAR LAS CLASES MUJER Y HOMBRE)

$numero1=new Calculadora();
$numero2=new Calculadora();
$funcion=new Calculadora();

echo '<hr>';

//ASIGNAR PARÁMETROS A ATRIBUTOS MEDIANTE SET

$numero1->setNumero1($_POST['numero1']);
$numero2->setNumero2($_POST['numero2']);

echo '<hr>';

//LLAMAR A LOS GETS

if(isset($_POST['suma']))
{
    echo $funcion->suma($numero1->getNumero1($_POST['numero1']), $numero2->getNumero2($_POST['numero2']));    
} 
elseif(isset($_POST['resta']))
{
    echo $funcion->resta($numero1->getNumero1($_POST['numero1']), $numero2->getNumero2($_POST['numero2']));
} 
elseif(isset($_POST['multiplicacion']))
{
   echo $funcion->multiplicacion($numero1->getNumero1($_POST['numero1']), $numero2->getNumero2($_POST['numero2']));
} 
elseif(isset($_POST['division']))
{
   $funcion->division($numero1->getNumero1($_POST['numero1']), $numero2->getNumero2($_POST['numero2']));
}
?>

</body>
</html>