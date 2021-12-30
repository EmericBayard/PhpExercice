<?php
   $prix_ht = 90; //déclaration de variable
   $tva = 20;
   $prix_ttc = $prix_ht * 1 + $tva / 100; //Opération arithmétique
   echo 'Le prix TTC du produit est de ' . $prix_ttc . ' €.';
?>