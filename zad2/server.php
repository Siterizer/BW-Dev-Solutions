<?php 


$imie = $_POST['imie'];
$nazwisko = $_POST['nazwisko'];

$data = $imie.','.$nazwisko.PHP_EOL;
if(!file_exists("names.csv")){
	$header = "Imie,Nazwisko".PHP_EOL;
	$data = $header.$data;
}
$csv_handler = fopen ('names.csv','a');
fwrite ($csv_handler,$data);
fclose ($csv_handler);


echo 'Witaj '.$imie. ' ' . $_POST['nazwisko'].PHP_EOL;
?>