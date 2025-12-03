<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./screen/css/register-form.css">   
    <title>Document</title>
</head>
<body>
    <div class="register-page">
        <div class="container">
            <div class="form-box">
                <img src="./screen/assets/EDG.png" alt="Logo EDG+" class="logo">

                <form method="POST" action="">
                <input class="form-input" name="name" type="text" placeholder="Nome" required>
                <input class="form-input" name="surname" type="text" placeholder="Sobrenome" required>
                <input class="form-input" name="email" type="email" placeholder="Email" required>
                <input class="form-input" name="cpf" type="text" placeholder="CPF" required>
                <input class="form-input" name="password" type="password" placeholder="Senha" required>
                <input class="form-input" name="confirm-password" type="password" placeholder="Confirmar Senha" required>

                    <div class="checkbox">
                        <input type="checkbox" id="termos" required>
                        <label for="termos">Eu li e aceito os <a href="#">Termos de uso e Privacidade</a></label>
                    </div>

                    <button type="submit" class="btn-cadastrar" name="register">Cadastrar</button>
                    <button type="button" class="btn-cancelar">Cancelar</button>
                </form>
            </div>
        </div>
    </div>
</body>
</html>