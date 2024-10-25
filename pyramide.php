<?php

echo "<h1>Boucle while</h1>";
$i = 0; // attribution de la valeur 0 à la variable
while ($i <= 19) { // boucle while qui s'exécute tant que la valeur de la variable "i" est inférieure à 19 (19 pour que la pyramide fasse 20 lignes comme sur la photo)

    $a = 0; // réattribution de la valeur 0 à la variable "a" pour que la boucle puisse se répéter à chaque itération du while parent
    while ($a <= 19 - $i) { // boucle qui se répète tant que la valeur de la variable "a" est inférieure ou égale à 19 - $i; - $i => pour que l'espace blanc soit diminué petit à petit
        echo "&nbsp;"; // permet d'instaurer un espace vide
        $a++; // incrémentation de 1 à chaque répétition de la boucle
    }

    $j = 0; // réattribution de la valeur 0 à la variable "j" pour que la boucle puisse se répéter à chaque itération du while parent
    while ($j <= $i) { // boucle qui se répète tant que la valeur de la variable "j" est inférieure à la valeur de la variable "i", pour que le nombre d'étoiles affichées soit égal à la valeur de la variable "i"
        echo "*";
        $j++;
    }

    echo "<br>"; // retour à la ligne entre chaque ligne d'étoiles
    $i++;
}

echo "<h1>Boucle for</h1>";
// même logique que pour la boucle while
for ($b = 0; $b <= 19; $b++) { // création d'une boucle for ayant pour conditions : attribution de la valeur 0 à la variable "b"; boucle que se répète tant que $b est inférieure ou égale à 19; avec une incrémentation de 1 à chaque itération à la valeur de la variable "b"

    for ($c = 0; $c <= 19 - $b; $c++) { // attribution de 0 à la valeur "c"; boucle qui se répète tant que la valeur de "c" est inférieure à 19 - la valeur de "b", ce qui permet de diminuer l'espace vide à chaque ligne; incrémentation de la valeur de "c" de 1 à chaque recommencement de boucle
        echo "&nbsp;"; // définition de l'espace vide
    }

    for ($d = 0; $d <= $b; $d++) { // boucle qui permet d'afficher le nombre d'étoiles correspondant à la valeur de la variable "b"
        echo "*"; // affichage étoile
    }

    echo "<br>"; // retour à la ligne à la fin de chaque boucle
}

echo '<h1>Balise Center</h3>';

?>
<div style = "text-align:center">
    <?php
    for($i = 0; $i < 20; $i++){
        echo '<p style="margin:0;padding:0;">';
            echo str_repeat(' * ', $i);
        echo '</p>';
    }

    ?>
</div>