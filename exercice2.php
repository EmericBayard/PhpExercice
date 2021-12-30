<?php

    $budget = 4000.00;
    $achat = 3849.90;

    if($budget >= $achat) :
        echo 'acheter';
    else : 
        echo 'pas acheter';
    endif;


   $condition = ($budget >= $achat);
   echo (!($budget >= $achat) ? 'acheter' : 'pas acheter');

   $example1 = false;
   echo !$example1;
?>