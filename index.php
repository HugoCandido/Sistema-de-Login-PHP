<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tela de Login</title>

    <link rel="stylesheet" href="style.css">
</head>

<body>
        <form class="formulario" action="logar.php" method="post">
            <div class="card">
                <div class="card-top">
                    <img src="./img/user.jpg" alt="" class="imagem-logo">
                    <h2 class="escrita-painel">Acesso ao Painel</h2>
                    <p>Gerencie o seu Sistema</p>
                </div>

                <div class="card-grupo">
                    <label>E-mail</label>
                    <input type="text" name="email" placeholder="Digite o seu email">
                </div>

                <div class="card-grupo">
                    <label>Senha</label>
                    <input type="password" name="senha" placeholder="Digite a sua senha">
                </div>

                <div class="card-grupo">
                    <label><input type="checkbox">Lembre-me</label>
                </div>

                <div class="card-grupo">
                <button type="submit">Entrar</button>
                </div>
            </div>
        </form>
</body>
</html>