<?php
    include './mysql.php';
    if(isset($_POST) && isset($_POST['Nome']) && isset($_POST['Nível'])
        && isset($_POST['Personalidade']) && isset($_POST['Habilidade'])){
        $nome = $_POST['Nome'];
        $nivel = $_POST['Nível'];
        $persona = $_POST['Personalidade'];
        $habili = $_POST['Habilidade'];
        $resposta = cadastraIrma($nome, $nivel, $persona, $habili);
        if($resposta === NULL || $resposta === false){
            header('Location: ../adicionar.php?erro=1');
        }else{
            header('Location: ../lista.php');
        }
    }else{
        header('Location: ../adicionar.php?erro=1');
    }
?>
