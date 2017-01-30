<?php
header('Content-Type: text/plain');

$datotid = date("d/m Y H:i:s");
$tidTime = date("H");

echo "<p>" . $datotid . "</p>";
echo "<p>" . $tidTime . "</p>";

if($tidTime < 10 ){
    echo "<p>Godmorgen</p>";
} else if($tidTime >= 10 && $tidTime < 18) {
    echo "<p>Goddag</p>";
} else {
    echo "<p>Godaften</p>";
}





$alder = 37;
$navn = "Jimmy Bundgaard Madsen";
$postnummer = 2860;
$bynavn = "Søborg";
?>

  <?php
    echo $alder;
    echo $navn;
    echo $postnummer;
    echo $bynavn;
  ?>


<!--
    --><?php
/*    echo $navn . PHP_EOL . $alder . PHP_EOL . $postnummer . PHP_EOL . $bynavn;

    */?>



    <?php
echo "Navn - " . $navn . PHP_EOL .  "Alder: " . $alder . PHP_EOL . " Postnummer =" .  $postnummer . PHP_EOL . " " . $bynavn;
    ?>


