<?php

    include 'Empregado.php';

    $empregado1 = new Empregado();
    $empregado1->setNome('Nome1');
    $empregado1->setSobrenome('Sobrenome1');
    $empregado1->setSalarioMensal(3000);

    $empregado2 = new Empregado();
    $empregado2->setNome('Nome2');
    $empregado2->setSobrenome('Sobrenome2');
    $empregado2->setSalarioMensal(5000);

    echo "Salário anual do empregado 1:  {$empregado1->getSalarioAnual()}<br>";
    echo "Salário anual do empregado 2: {$empregado2->getSalarioAnual()} <br>";

    $empregado1->recebaAumento(10);
    $empregado2->recebaAumento(10);


    echo "Novo salário anual do empregado 1: {$empregado1->getSalarioAnual()}<br>";
    echo "Novo salário anual do empregado 2: {$empregado2->getSalarioAnual()}<br>";

?>