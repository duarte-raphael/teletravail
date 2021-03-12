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
    $permutation = true;
    while ($permutation) {
        $permutation = false;
        for ($i = 0; $i < (count($note) - 1); $i++) {
            if ($note[$i + 1] > $note[$i]) {
                $temp = $note[$i];
                $note[$i] = $note[$i + 1];
                $note[$i + 1] = $temp;
                $permutation = true;
            }
        }
    }
    for ($i = 0; $i < count($note); $i++) {
        echo "$note[$i] \n";
    }
}
$saisir = tab1();
tab2($saisir);
