<?php 
include 'ProductClass.php';

$products = array();

$f = fopen('./products.txt','r') or die("Failed to open file");



while(!feof($f))
{
	$line = explode (',',fgets($f));
	$products=new Product($line[0],$line[1],$line[2],$line[3]);
	$pro[]=$products; 
}

// close
fclose($f);
?>
 
