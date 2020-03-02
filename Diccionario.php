<?php
echo" <center><h1>Lenguaje De Cuarta Generacion </h1></center><br>";

$Array1 =["celu","mi","lar","to"];
$Array2 =["lo","andro","ma","id"];
$Array3 =["bu","ore","er","na","o","ki"];
$Array4 =["a","de","mi","gi","ro","sha"];
$Array5 =["jo","hu","im","hi","vi","po"];

?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>prueba</title>
</head>
<body>
<center> <h1>Orden De Palabras </h1></center><br>
celular: <?= implode(',', $Array1) ?>
    <br> Array de salida: <?php  echo $Array1[0]?>,<?php  echo $Array1[2]?></br>

----------------------------------------------------<br>
    Android: <?= implode(',', $Array2) ?>
    <br> Array de salida: <?php  echo $Array2[1]?>,<?php  echo $Array2[3]?></br>
-----------------------------------------------------<br>
    Oreo: <?= implode(',', $Array3) ?>
    <br> Array de salida: <?php  echo $Array3[1]?>,<?php  echo $Array3[4]?></br>
 ----------------------------------------------------<br>
    Amisha: <?= implode(',', $Array4) ?>
    <br> Array de salida: <?php  echo $Array4[0]?>,<?php  echo $Array4[2]?>,<?php  echo $Array4[5]?></br>
-----------------------------------------------------<br>
    Hijo: <?= implode(',', $Array5) ?>
    <br> Array de salida: <?php  echo $Array5[3]?>,<?php  echo $Array5[0]?></br>
</body>
</html>

