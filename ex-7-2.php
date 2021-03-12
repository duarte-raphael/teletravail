<?php

function tab1()
{
    $nbrNote = readline("entrer un nombre : ");
    for ($i = 0; $i <= $nbrNote; $i++) {
        $note[$i] = readline("entrer la valeur du tableau: ");
    }
    return $note;
}

function tab2(&$note)
{
    for ($i = 0; $i < (count($note) - 1); $i++) {
        $Max = $note[$i];
        $indexMax = $i;
        for ($j = $i + 1; $j < count($note); $j++) {
            if ($note[$j] > $Max) {
                $indexMax = $j;
                $temp = $note[$i];
                $note[$i] = $note[$indexMax];
                $note[$indexMax] = $temp;
            }
        }
    }
    for ($i = 0; $i < count($note); $i++) {
        echo "$note[$i] \n";
    }
}
$saisir = tab1();
tab2($saisir);
