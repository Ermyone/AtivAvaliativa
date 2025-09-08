<?php
    include('circulo.php');

    $medida = new Circulo();
    $medida->raio = 5;
    $medida->pi = 3.14;

    echo 'Área: '.$medida->calcularArea().'<br>';
    echo 'Perímetro: '.$medida->calcularPerimetro().'<br>';
?>