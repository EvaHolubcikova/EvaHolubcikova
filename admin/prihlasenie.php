<?php 
	date_default_timezone_get('Europe/Bratislava');
	include 'hlavickaAdmin.php';
	include 'navbarAdmin.php';
	include 'pataAdmin.php';
?>


<?php 

$chyba ="";
$meno = "";
$heslo = "";

/// odlišujeme prvy krat stranka spustena

if($_SERVER['REQUEST_METHOD'] == 'POST'){



if(kontrola($_POST['odpoved']) == $_POST['spravna_odpoved']){

$suborPrispevky = fopen('prispevky.csv', 'a');

$novyPrispevok = array();


$novyPrispevok[] = $_POST['pocet'] + 1;	
$novyPrispevok[] = kontrola($_POST['meno']);
$novyPrispevok[] = kontrola($_POST['heslo']);
$novyPrispevok[] = date('Y-m-d H:i:s',time());


fputcsv($suborPrispevky, $novyPrispevok, ';');
fclose($suborPrispevky);
}
else
{
 $chyba = "Nespravna odpoved na otazku";
 $meno = kontrola($_POST['meno']);
 $heslo = kontrola($_POST['heslo']);
}



 ?>

<?php  
if(!empty($chyba)){

?>	

<div class="alert alert-danger alert-dismissible fade show" role="alert">
 <strong> Ups! </strong> <?php echo $chyba; ?>
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>

<?php }  ?>

<?php  
if(empty($chyba)){

?>	

<div class="alert alert-success alert-dismissible fade show" role="alert">
 <strong> Výborne </strong> <?php echo "Uspešne sme pridali váš názor" ?>
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>

<?php } 

}
 ?>


<?php 



	$suborUzivatelia = file('uzivatelia.txt', FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
	//$antiSpam = [];

	for ($i=0; $i < count($suborUzivatelia) ; $i+=2){

		$antiSpam[str_replace("heslo: ","",$suborUzivatelia[$i+1])] = str_replace("meno: ","", $suborUzivatelia[$i]);

	}


	$vybranyKluc = array_rand($antiSpam);
	//echo $vybranyKluc;

	//$prispevky = [];
	$suborPrispevky = fopen('prispevky.csv', 'r');

	while($prispevok = fgetcsv($suborPrispevky,1000,';')){
		$prispevky[] = $prispevok;
	}

	fclose($suborPrispevky);

	$prispevky = array_reverse($prispevky);
 ?>

 <?php 
include '../../assets/pata.php';
?>