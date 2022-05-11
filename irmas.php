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
                        <button class="noturno" onclick="modoNoturno()">Modo Escuro</button>
                    </ul>
                </div>
                <div class="cabecalho2">
                    <table class="lista">
                        <tr>
                            <th class="cor_sim">Nome</th>
                            <th class="cor_nao">Nível</th>
                            <th class="cor_sim">Personalidade</th>
                            <th class="cor_nao">Habilidade</th>
                            <th class="cor_sim">Opções</th>
                        </tr>
                        <?php
                            for($i = 0; $i < count($irma); $i++){
                                if(($i%2) !== 0 ){
                                    echo '<tr class="cor_nao">';
                                }else {
                                    echo '<tr>';
                                }
                                    echo '<td>'. $irma[$i]['Nome'] .'</td>';
                                    echo '<td>'. $irma[$i]['Nível'] .'</td>';
                                    echo '<td>'. $irma[$i]['Personalidade'] .'</td>';
                                    echo '<td>'. $irma[$i]['Habilidade'] .'</td>';
                                    echo '<td>
                                        <button onclick="deletar('.$irma[$i]['id'].')">Deletar</button>
                                        <button onclick="editar('.$irma[$i]['id'].')">Editar</button>
                                    </td>';
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
