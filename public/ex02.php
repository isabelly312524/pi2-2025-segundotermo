<?php
$carrinho = [
    ["nome" => "refri" ,"preço" => 3.00 ,"qnt" => 2],
     ["nome" => "sabão" ,"preço" => 5.00 ,"qnt" => 6],
      ["nome" => "maçã" ,"preço" => 8.00 ,"qnt" => 8]
];

$total = 0;

foreach($carrinho as $c){
   $subtotal = $c["preço"] * $c["qnt"];

   echo "Produto: "        . $c["nome"]                 . "<br>";
   echo "Preço unitário: " . number_format($c["preço"], 2,",",".") . "<br>";
   echo "Quantidade: "     . $c["qnt"]                  . "<br>";
   echo "Total: " . number_format($subtotal, 2,",",".") . "<br><hr>";

   $total += $subtotal;
}  
echo "O valor total do carrinho é: " . number_format($total, 2,",",".");
?>


