<?php
if(!isset($_SESSION)) {
    session_start();
}

if((!isset($_SESSION['email']) == true) and (!isset($_SESSION['senha']) == true)){
    unset($_SESSION['email']);
    unset($_SESSION['senha']);
    header('Location: /aps-primeiro-semestre/views/login.php');
    exit;
}

header("Cache-Control: no-cache, no-store, must-revalidate");
header("Pragma: no-cache");
header("Expires: 0");
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Music Hub</title>
    
    <link rel="stylesheet" href="../assets/css/style.css">
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</head>

<body>
  <div class="menu-btn"><i class="fas fa-bars"></i></div>
  
  <div class="side-bar">
    <div class="close-btn"><i class="fas fa-times"></i></div>
    <div class="menu">
      <div class="item">
        <a href="/aps-primeiro-semestre/views/home.php"><i class="fa-solid fa-house"></i>Início</a>
        <a href="/aps-primeiro-semestre/views/Artistas.php"><i class="fa-solid fa-palette"></i>Artistas</a>
        <a href="/aps-primeiro-semestre/views/playlist.php"><i class="fa-solid fa-music"></i>Playlists</a>
      </div>
      <div class="logout-button">
        <a id="logoutBtn"><i class="fas fa-sign-out-alt"></i>Sair</a>
      </div>
    </div>
  </div>

  <div id="myModal" class="modal">
    <div class="modal-content">
      <span class="close">&times;</span>
      <p>Tem certeza que deseja sair?</p>
      <div class="modal-buttons">
        <button id="confirmBtn">Sim</button>
        <button id="cancelBtn">Não</button>
      </div>
    </div>
  </div>