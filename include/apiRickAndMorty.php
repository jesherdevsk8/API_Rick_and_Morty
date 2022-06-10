<?php

// CURL
$url    = 'https://rickandmortyapi.com/api/character/';
$ch     = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "GET");
$dados = json_decode(curl_exec($ch));

?>

<div class="row">
    <div class="container col-md-12">
        <?php
            foreach ($dados -> results as $character){
				// var_dump($resultado);
				echo "<center>";
				echo "<div>";
				echo "<img src='$character->image'>" ;
				echo "<br><strong>Nome:</strong> " . $character->name . "<br>";
				echo "<strong>Espécie:</strong> " . $character->species . "<br>";
				echo "<strong>Status:</strong> " . $character->status . "<br>";
				echo "</div>";
				echo "<hr>";
            }            
        ?>
    </div>
</div>