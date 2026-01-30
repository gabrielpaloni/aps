<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    
    <link rel="stylesheet" href="/aps-primeiro-semestre/assets/css/login.css" />

    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Dongle:wght@700&display=swap" rel="stylesheet" />

    <title>Login | Music Hub</title>
</head>
<body>
    <div class="gradient-bg">
      <svg xmlns="http://www.w3.org/2000/svg">
        <defs>
          <filter id="goo">
            <feGaussianBlur in="SourceGraphic" stdDeviation="10" result="blur" />
            <feColorMatrix in="blur" mode="matrix" values="1 0 0 0 0  0 1 0 0 0  0 0 1 0 0  0 0 0 18 -8" result="goo" />
            <feBlend in="SourceGraphic" in2="goo" />
          </filter>
        </defs>
      </svg>
      
      <div class="container">
        <form action="/aps-primeiro-semestre/log_cad/testLogin.php" method="POST" class="box-login">
            
          <h3>Sign In</h3>
          
          <input name="email" type="text" placeholder="Email" id="login" required />
          <input name="senha" type="password" placeholder="Senha" id="senha" required />
          
          <input name="submit" type="submit" value="Enviar" />
          
          <input type="button" class="signup-input" value="Cadastre-se" onclick="location.href='cadastro.php'" />
        
        </form>
        
        <div>
          <img id="imagen" src="/aps-primeiro-semestre/assets/img/agl-la.png" alt="Logo" />
        </div>
      </div>

      <div class="gradients-container">
        <div class="g1"></div>
        <div class="g2"></div>
        <div class="g3"></div>
        <div class="g4"></div>
        <div class="g5"></div>
        <div class="interactive"></div>
      </div>
    </div>
</body>
</html>