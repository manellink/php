<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>
    <link rel="stylesheet" href="../projeto/bootstrap/css/bootstrap.css">
</head>

<body>
    <div class="container">
        <h3>Logar no Sistema</h3>
        <center>
            <fieldset>
                <legend>◊ SISTEMA ◊</legend>
                <form action="verificarlogin.php" method="post" class="formgroup">
                    E-mail.: <input type="text" name="email" placeholder="Digite o E-mail" class="form-control" />
                    <br> <br>

                    Senha.: <input type="password" name="senha" placeholder="Digite a Senha" class="form-control" />
                    <br> <br>
                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                    <label class="form-check-label" for="exampleCheck1">Aceita termos e condições</label><p>
                    <input type="submit" value="Entrar no Sistema" class="btn btn-info">

                </form>
                <?php
                if(isset ($get["m"])){
                    echo base64_decode($_get["m"]);
                }
                ?>
            </fieldset>
        </center>
    </div>
</body>

</html>
