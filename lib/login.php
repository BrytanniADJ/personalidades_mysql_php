<?php
        function login($usuarioOficial, $passOficial){

            if($usuarioOficial === 'adm' && $passOficial === 'b09c600fddc573f117449b3723f23d64'){
                header('Location: ../home.php');
            }else{
                header('Location: ../home.php?login=erro');
        }
    }
?>
