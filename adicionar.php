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
                            <a class="button1" href="lista.php">Personalidades</a>
                        </li>
                        <li class="click">
                            <a class="button2" href="detalhes.php">Detalhes</a>
                        </li>
                        <li class="click">
                            <a class="button3" href="index.php">Home</a>
                        </li>
                        <button class="noturno" onclick="modoNoturno()">Modo Escuro</button>
                    </ul>
                </div>
                <form action="./lib/valida.php" method="post">
        <p>
            <label> Modelo: </label>
            <input name="modelo" type="text" id="box_modelo">
        </p>
        <p>
            <label> Marca: </label>
            <input name="marca" type="text" id="box_marca">
        </p>
        <p>
            <label> Ano: </label>
            <input name="ano" type="number"  id="box_ano">
        </p>
        <p>
            <label> Preço: </label>
            <input name="preco" type="number" id="box_preco">
        </p>
        <p>
            <input type="submit" value="Cadastrar">
            <input type="button" value="Cancelar" onclick="bt_cancelar()">
        </p>
                </form>

            </main>
        <footer>
        </footer>
        <script
        src="./assests/js/script.js">
        </script>
    </body>
</html>
