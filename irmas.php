<?php
    include './lib/mysql.php';
    $irma = listarIrmas();
?>
<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="./assests/css/reset.css">
        <link href="https://fonts.googleapis.com/css2?family=Titillium+Web:wght@200&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="./assests/css/stilo.css">
        <title>Home</title>
    </head>
    <body>
        <header>
        </header>
            <main>
                <div class="cabecalho">
                    <ul class="botoes">
                        <li class="click">
                            <a class="button1" href="index.php">Home</a>
                        </li>
                        <li class="click">
                            <a class="button2" href="detalhes.php">Detalhes</a>
                        </li>
                        <li class="click">
                            <a class="button3" href="adicionar.php">Adicionar Irmã</a>
                        </li>
                        <li class="click">
                            <a class="button4" href="index.php">Log-in</a>
                        </li>
                        <button class="noturno" onclick="modoNoturno()">Modo Claro</button>
                    </ul>
                </div>
                <div class="cabecalho2">
                    <table width="1000" border="1px" bgcolor="">
                        <tr>
                            <td width="101" height="40">Nome</td>
                            <td width="130">Nível</td>
                            <td width="130">Personalidade</td>
                            <td>Habilidade</td>
                        </tr>
                        <?php
                            for($i = 0; $i < count($irma); $i++){
                                if(($i%2) !== 0 ){
                                    echo '<tr>';
                                }else {
                                    echo '<tr>';
                                }
                                    echo '<td>'. $irma[$i]['Nome'] .'</td>';
                                    echo '<td>'. $irma[$i]['Nível'] .'</td>';
                                    echo '<td>'. $irma[$i]['Personalidade'] .'</td>';
                                    echo '<td>'. $irma[$i]['Habilidade'] .'</td>';
                                echo '</tr>';
                            }
                        ?>
                    </table>
                </div>
              </main>
          <footer>
          </footer>
          <script
          src="./assests/js/script.js">
          </script>
      </body>
  </html>
