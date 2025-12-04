<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login - EDG</title>
  <link rel="stylesheet" href="./screen/css/login-sty.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">
  <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
</head>

<body>
  <div class="login-page">
    <div class="login-container">
      <img class="logo" src="./screen/assets/EDG.png"></img>

      <form class="login-form" method="POST">

        <div class="input-group">
          <i class="fas fa-user"></i>
          <input name="email" type="email" placeholder="Email" required>
        </div>

        <div class="input-group">
          <i class="fas fa-lock"></i>
          <input name="password" type="password" placeholder="Senha" required>
        </div>

        <button class="login-btn" type="submit" name="login">Login</button>

        <button class="google-btn">
          <img src="https://www.gstatic.com/firebasejs/ui/2.0.0/images/auth/google.svg" alt="Google Logo">
          Entrar com o Google
        </button>

        <p class="signup-link">Não tem uma conta? <a href="index.php?route=register">Cadastre-se</a></p>

      </form>
    </div>
  </div>
</body>

</html>