<?php
use function PHPSTORM_META\type;
    function conecta(){
        $host = 'localhost';
        $user = 'root';
        $password = '';
        $database = 'irmas';
        $mysqli = mysqli_connect($host, $user, $password, $database);

        if(mysqli_connect_errno()){
            return NULL;
        }else{
            return $mysqli;
        }
    }
    function listarIrmas(){
        $lista = [];
        $query = 'SELECT Nome, Nível, Personalidade, Habilidade, id FROM personalidades;';
        $link = conecta();
        if($link !== NULL){
            $result = mysqli_query($link, $query);
            if($result){
                while ($row = mysqli_fetch_row($result)){
                    $irma = array(
                    'Nome' => $row[0], 'Nível' => $row[1],
                    'Personalidade' => $row[2], 'Habilidade' => $row[3], 'id' => (INT) $row[4]
                    );
                    array_push($lista, $irma);
                }
            }
        }
        return $lista;
    }
    function cadastraIrma($nome, $nivel, $persona, $habili){
    $query = "INSERT INTO carros (Nome, Nível, Personalidade, Habilidade)
    values('" . $nome . "','" . $nivel . "'," . $persona . "," . $habili .");";
    $link = conecta();
    if($link !== NULL){
        $result = mysqli_query($link, $query);
        return $result;
    }else{
        return NULL;
    }
}
?>
