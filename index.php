<?php
    include './lib/login.php';

    if(isset($_POST['usuario']) && isset($_POST['password'])){
        $usuario= htmlspecialchars($_POST['usuario']);
        $password= md5(htmlspecialchars($_POST['password']));
        login($usuario, $password);
    }
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
        <title>Log-in</title>
    </head>
    <body>
        <header>
        </header>
            <main>
                <div class="cabecalho">
                    <ul class="botoes">
                        <li class="click">
                            <a class="button1" href="index.php">Personalidades</a>
                        </li>
                        <li class="click">
                            <a class="button2" href="index.php">Detalhes</a>
                        </li>
                        <li class="click">
                            <a class="button3" href="index.php">Adicionar Irmã</a>
                        </li>
                        <li class="click">
                            <a class="button4" href="index.php">Log-in</a>
                        </li>
                        <button class="noturno" onclick="modoNoturno()">Modo Claro</button>
                    </ul>
                </div>
                <div class="cabecalho2">
                    <h2>Log-In</h2>
                    <form action="index.php" method="post">
                        <p class="itens">
                            <label for="">Usuário</label>
                            <input type="text" name="usuario" id="usuario" placeholder = "Nome de Usuário" required>
                        </p>
                        <p class="itens">
                            <label for="">Senha</label>
                            <input type="password" name="password" id="senha" placeholder = "Senha" required>
                        </p>
                        <p class="itens">
                            <input type="submit" id="entrar"></input>
                        </p>
                        <?php
                            if(isset($_GET['login']) && $_GET['login']==='erro'){
                                echo "<p>Login ou senha incorretos</p>";
                            }
                        ?>
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
