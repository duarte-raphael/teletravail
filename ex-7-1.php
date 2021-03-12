<?php

function tab1()
{
    $nbrNote = readline("entrer un nombre : ");
    for ($i = 0; $i <= $nbrNote; $i++) {
        $note[$i] = readline("entrer la veleur du tableau: ");
    }
    return $note;
}

function estConsécutif($note)
{
    $bool = true;
    for ($i = 1; $i < count($note); $i++) {
        if ($note[$i - 1] != $note[$i] - 1) {
            $bool = false;
        }
    }
    return $bool;
}

function afficher($bool)
{
    if ($bool == true) {
        echo "le tableau est consecutif";
    } else {
        echo "le tableau n'est pas consecutif";
    }
}

afficher(estConsécutif(tab1()));
