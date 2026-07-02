<?php 

function required(string $value,array &$errors,string $errorRequired, string $fieledName="libele"):void{
   if(empty($value)){
        $errors[$fieledName]['required'] = $errorRequired;
   }
}

function unique(array $datas,string $value,array &$errors,string $errorUnique,string $key='libele'):void{
    foreach ($datas as $data) {
        if ($data[$key] === $value) {
            $errors[$key]['unique'] = $errorUnique;
        }
    }
}

function estPositif(string $value, array &$errors, string $msgErrors, string $key='libele'): void{
    if($value <= 0){
        $errors[$key] = $msgErrors;
    }
}


function getProductByLibele (array $products, string $value): int{
    foreach ($products as $index => $product) {
                    if ($product["libele"] == $value){
                    return $index;
                }
            }
            return -1 ;
}

function listerProduits(array $products) : void {
    foreach ($products as $product){
        // echo $product["libele"]."\n";
        
        echo "Libellé: {$product["libele"]}\n";
    }
}