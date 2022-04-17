<?php
// Functions
function sayHello($name = "Aliz"){
    echo "Hello $name";
}
//sayHello("ahmet");
function formatProduct($product){
    //echo "{$prodauct['name']} costs {$product['price']} to buy <br/>";
    return "{$product['name']} costs {$product['price']} to buy <br/>";
}
$formatProduct = formatProduct(['name'=>'gold star', 'price'=>20]);
echo $formatProduct;