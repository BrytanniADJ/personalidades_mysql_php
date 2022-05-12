<?php
    include './mysql.php';
    if(isset($_POST) && isset($_POST['nome']) && isset($_POST['nivel'])
        && isset($_POST['persona']) && isset($_POST['habili'])){
        $nome = $_POST['nome'];
        $nivel = $_POST['nivel'];
        $persona = $_POST['persona'];
        $habili = $_POST['habili'];
        $resposta = cadastraIrma($nome, $nivel, $persona, $habili);
        if($resposta === NULL){
            header('Location: ../adicionar.php?erro=2');
        }else if($resposta === false){
            header('Location: ../adicionar.php?erro=3');
        }else{
            header('Location: ../irmas.php');
        }
    }else{
        header('Location: ../adicionar.php?erro=1');
    }
?>
