<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="./assests/css/reset.css">
        <link href="https://fonts.googleapis.com/css2?family=Titillium+Web:wght@200&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="./assests/css/stilo.css">
        <title>Adicionar Irmã</title>
    </head>
    <body>
        <header>
        </header>
            <main>
                <div class="cabecalho">
                    <ul class="botoes">
                        <li class="click">
                            <a class="button1" href="lista.php">Personalidades</a>
                        </li>
                        <li class="click">
                            <a class="button2" href="irmas.php">Lista Irmãs</a>
                        </li>
                        <li class="click">
                            <a class="button3" href="index.php">Home</a>
                        </li>
                        <button class="noturno" onclick="modoNoturno()">Modo Escuro</button>
                    </ul>
                </div>
                <div class="cabecalho2">
                    <form action="./lib/valida.php" method="post">
                        <p class="itens">
                            <label> Nome: </label>
                            <input name="nome" type="text" id="box_nome">
                        </p>
                        <p class="itens">
                            <label> Nível: </label>
                            <select name="nivel" id="box_nivel">
                              <option value="Escolha uma Opção">Escolha uma Opção</option>
                              <option value="Primária">Primária</option>
                              <option value="Secundária">Secundária</option>
                            </select>
                        </p>
                        <p class="itens">
                            <label> Personalidade: </label>
                            <input name="persona" type="text" id="box_persona">
                        </p>
                        <p class="itens">
                            <label> Habilidade: </label>
                            <input name="habili" type="text" id="box_habili">
                        </p>
                        <p class="itens">
                            <input type="submit" value="Cadastrar" id="cadastro">
                            <input type="button" value="Cancelar" onclick="bt_cancelar()" id="cadastro">
                        </p>
                    </form>
                </div>
            </main>
        <footer>
        </footer>
        <script
        src="./assests/js/script.js">
        </script>
    </body>
</html>
