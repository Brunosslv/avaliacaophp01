<?php

    include 'Fatura.php';

    $fatura = new Fatura();
    
$fatura->setNumero('123456');
$fatura->setDescricao('SSD 1TB');
$fatura->setqtdItem(2);
$fatura->setprecoPorItem(150.00);

echo "Número da fatura: {$fatura->getNumero()} <br>";
echo "Descrição:  {$fatura->getDescricao()} <br>";
echo "Quantidade: {$fatura->getqtdItem()} <br>";
echo "Preço por item:  {$fatura->getprecoPorItem()} <br>";
echo "Total da Fatura: {$fatura->getTotalFatura()} <br>";

?>