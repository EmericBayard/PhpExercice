Exemple de Loop


<?php

    for ($i=0 ; $i<=11 ; $i++) {
        echo '*';
        for($j=0;$j<=10;$j++){
            echo '*';
        }
        echo "\n";
    }

    // $i = 1;
    // while (true) {
    //     echo $i++;  /* La valeur affichée est $i avant l'incrémentation
    //                (post-incrémentation)  */
    // }
?>