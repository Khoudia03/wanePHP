<?php

$products = [
    0=>['ref'=>'ref1','libele'=>'lib1','prix'=>2000,'quantite'=>12],
    1=>['ref'=>'ref2','libele'=>'lib2','prix'=>500,'quantite'=>2],
];

$productsArchived = [];

function supprimerProduit (int $index, array &$products): array {
        return array_splice($products, $index, 1)[0];
            
} 


