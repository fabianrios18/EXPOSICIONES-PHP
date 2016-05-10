<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<pre>
<?php 
class foo
{
    function hacer_algo()
    {
        echo "Haciendo algo."; 
    }
}

$ArrayPersona = array(	"Nombres" => "Fabian Alexander", 
						"Apellidos" => "Rios Leon", 
						"Edad" => 18,
						"Estado" => "Activo",158);

//echo $ArrayPersona["Nombres"]; //Imprimir Array

var_dump($ArrayPersona);

$miObjeto = (object) $ArrayPersona;

//echo $miObjeto->Nombres; //Imprimir Objeto

$objFoo = new foo();

var_dump($miObjeto);

 ?>
 </pre>
</body>
</html>