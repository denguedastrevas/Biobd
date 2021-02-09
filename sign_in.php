<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="sign_in.css">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300&display=swap" rel="stylesheet">
    <title>Sign In</title>
</head>

<body>
    <header>
        
    </header>
    <form action="cadastro.php" method="post" >
        <fieldset>
            <fieldset class="grupo">
                <div class="campo">
                    <label for="nome">Nome</label>
                    <input type="text" id="nome" name="nome" style="width: 10em" value="">
                </div>
                <div class="campo">
                    <label for="snome">Senha</label>
                    <input type="text" id="password" name="senha" style="width: 10em" value="">
                </div>

                <div class="campo">
                    <label for="c_senha">Confirmar Senha</label>
                    <input type="text" id="c_senha" name="c_senha" style="width: 10em" value="">
                </div>
            </fieldset>
            <div class="campo">
                <label for="email">E-mail</label>
                <input type="text" id="email" name="email" style="width: 20em" value="">
            </div>
            <div class="campo">
                <label for="bolsa">Bolsa</label>
                <input type="text" id="bolsa" name="bolsa" style="width: 10em" value="">
            </div>

            <fieldset class="grupo">
                <div class="campo">
                    <label for="orientador">Orientador</label>
                    <input type="text" id="orientador" name="orientador" style="width: 10em" value="">
                </div>
            </fieldset>

            <fieldset class="grupo">
                <div class="campo">
                    <label for="coorientador">Coorientador</label>
                    <input type="text" id="coorientador" name="coorientador" style="width: 10em" value="">
                </div>
            </fieldset>
            <div class="campo">
                <label for="graducao">Graduação</label>
                <select name="graduacao" id="graduacao">
                    <option value="">--</option>
                    <option value="IC">IC</option>
                    <option value="DT">DOUTORANDO</option>
                    <option value="MS">MESTRANDO</option>

                </select>
            </div>
            <button type="submit" name="submit">Enviar</button>
        </fieldset>
    </form>

</body>

</html>