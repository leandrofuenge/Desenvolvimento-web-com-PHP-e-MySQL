<?php
date_default_timezone_set('America/Manaus');
?>

<?php

$hora_do_dia=date("H");

if (($hora_do_dia >=6) && ($hora_do_dia <=12)) echo "Bom Dia!";
if (($hora_do_dia >12) && ($hora_do_dia <=17)) echo "Boa Tarde!";
if (($hora_do_dia >17) && ($hora_do_dia <=24)) echo "Boa Noite!";
if (($hora_do_dia >24) && ($hora_do_dia <6)) echo "Boa Madrugada!";

?>



<html>
<head>
<title>Dia <?php echo date('d'); ?> </title>
</head>
<body>
<h1>Estamos em <?php echo date('Y'); ?> </h1>
<p>
Agora são <?php echo date('H'); ?> horas e
<?php echo date('i'); ?> minutos.
</p>
</body>
<html>






<?php
function linha($semana)
{
echo "<tr>";
for ($i = 0; $i <= 6; $i++) {

   if ((isset($semana[$i])) &&($semana[$i] == date('d'))){

echo "<td><strong>$semana[$i]</strong></td>";
	
} else if (isset($semana[$i])){
	echo "<td>{$semana[$i]}</td>";
	
}else{
	
	echo "<td></td>";
}
}
}

echo"</tr>";



function calendario()
{
$dia = 1;
$semana = array();
        while ($dia <= 31) {
           array_push($semana, $dia);
     if (count($semana) == 7) {

linha($semana);

$semana = array();

}
$dia++;
}
linha($semana);
}

?>

<table border="1">
   
<tr>
<th>Seg</th>
<th>Ter</th>
<th>Qua</th>
<th>Qui</th>
<th>Sex</th>
<th>Sáb</th>
<th>Dom</th>
</tr>
<?php calendario(); ?>
</table>