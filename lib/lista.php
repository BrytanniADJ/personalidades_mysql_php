<?php
    $lista = [];
    $irma = array('Nome' => 'Beatriz', 'Nível' => 'Secundário',
    'Personalidade' => 'Musical', 'Habilidade' => 'Controlar e criar combinações
    de vibrações que são ouvidas como música');
    array_push($lista, $irma);
    
    $carro = array('Nome' => 'Bella', 'Nível' => 'Secundário', 'Personalidade' => 'Artista',
    'Habilidade' => 'Controlar e retirar as cores de qualquer objeto ou pessoa,
    ingerindo pra si mesma e transformando na própria tinta');
    array_push($lista, $irma);

    function exportaLista(){
        return $GLOBALS['lista'];
    }
?>
