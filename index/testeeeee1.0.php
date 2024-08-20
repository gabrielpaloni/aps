

<!DOCTYPE html>   <!-- Começo HTML do site -->
<html lang="pt-br">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Music Website</title>
  <link rel="stylesheet" type="text/css" href="teste.css" media="screen" />
  <link href="MobileStyleSheet.css" rel="stylesheet" type="text/css" media="only screen and (max-device-width: 480px) , 
      screen and (-webkit-min-device-pixel-ratio: 2) ,
      screen and (-webkit-device-pixel-ratio:1.5)" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" />
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"
    integrity="sha512-bLT0Qm9VnAYZDflyKcBaQ2gg0hSYNQrJ8RilYldYQ1FxQYoCLtUjuuRuZo+fjqhx/qtq/1itJ0C2ejDxltZVFg=="
    crossorigin="anonymous" referrerpolicy="no-referrer"></script>
</head>

<body>
  <div class="menu-btn">    <!-- HTML da SIDEBAR -->
    <i class="fas fa-bars"></i>
  </div>
  <div class="side-bar">
    <div class="close-btn">
      <i class="fas fa-times"></i>
    </div>
    <div class="menu">
      <div class="item">
        <a href="testeeeee1.0.php"><i class="fa-solid fa-house"></i>Início</a>
        <a href="../artistas/Artistas.html"><i class="fa-solid fa-palette"></i>Artistas</a>
        <a href="../Playlists/playlist.html"><i class="fa-solid fa-music"></i>Playlists</a>
      </div>
        <div class="logout-button">
          <a id="logoutBtn"><i class="fas fa-sign-out-alt"></i>Sair</a>
        </div>
    </div>
  </div>    <!-- FIM SIDEBAR -->
  <div id="myModal" class="modal">    <!-- Começo do MODAL -->
    <div class="modal-content">
      <span class="close">&times;</span>
      <p>Tem certeza que deseja sair?</p>
      <div class="modal-buttons">
        <button id="confirmBtn">Sim</button>
        <button id="cancelBtn">Não</button>
      </div>
    </div>
  </div>    <!-- FIM do MODAL -->
  <h1 class="titulo-pagina"></h1>
  <div class="search-container">    <!-- Barra de pesquisa -->
    <i class="search-icon fas fa-search"></i>
    <input type="search" id="search-input" placeholder="Pesquisar...">
  </div>    <!-- FIM barra de pesquisa -->
  <div class="Container">
    <table style="width:100%"><!-- Começo da tabela -->
      <tr>
        <th>Artistas</th>
        <th>Músicas</th>
        <th>Streamings</th>
      </tr>
      <tr>
        <td><a href="taylor.html"><i class="fa-brands fa-spotify"></i>Taylor Swift</a></td>
        <td><a href="https://www.youtube.com/watch?v=ic8j13piAhQ&ab_channel=TaylorSwiftVEVO"><i
              class="fa-brands fa-youtube"></i>Cruel Summer</a></td>
        <td><i class="fa-solid fa-eye"></i>2.125.020.168</td>
      </tr>
      <tr>
        <td><a href="postmalone.html"><i class="fa-brands fa-spotify"></i>Post Malone</a></td>
        <td><a href="https://www.youtube.com/watch?v=ApXoWvfEYVU&ab_channel=PostMaloneVEVO"><i
              class="fa-brands fa-youtube"></i>Sunflower</a></td>
        <td><i class="fa-solid fa-eye"></i>3.326.170.443</td>
      </tr>
      <tr>
        <td><a href="justin.html"><i class="fa-brands fa-spotify"></i>Justin Bieber</a></td>
        <td><a href="https://www.youtube.com/watch?v=kTJczUoc26U&ab_channel=TheKidLAROIVEVO"><i
              class="fa-brands fa-youtube"></i>Stay</a></td>
        <td><i class="fa-solid fa-eye"></i>3.076.622.658</td>
      </tr>
      <tr>
        <td><a href="matue.html"><i class="fa-brands fa-spotify"></i>Matuê</a></td>
        <td><a href="https://www.youtube.com/watch?v=TKqa-ZXGKYA&ab_channel=30PRAUM"><i
              class="fa-brands fa-youtube"></i>Vampiro</a></td>
        <td><i class="fa-solid fa-eye"></i>246.368.365</td>
      </tr>
      <tr>
        <td><a href="harry.html"><i class="fa-brands fa-spotify"></i>Harry Styles</a></td>
        <td><a href="https://www.youtube.com/watch?v=H5v3kku4y6Q&ab_channel=HarryStylesVEVO"><i
              class="fa-brands fa-youtube"></i>As It Was</a></td>
        <td><i class="fa-solid fa-eye"></i>3.242.745.882</td>
      </tr>
      <tr>
        <td><a href="bmth.html"><i class="fa-brands fa-spotify"></i>Bring Me The Horizon</a></td>
        <td><a href="https://www.youtube.com/watch?v=QJJYpsA5tv8&ab_channel=BMTHOfficialVEVO"><i
              class="fa-brands fa-youtube"></i>Can You Feel My Heart</a></td>
        <td><i class="fa-solid fa-eye"></i>631.645.915</td>
      </tr>
      <tr>
        <td><a href="eminem.html"><i class="fa-brands fa-spotify"></i>Eminem</a></td>
        <td><a href="https://www.youtube.com/watch?v=xFYQQPAOz7Y&ab_channel=EminemMusic"><i
              class="fa-brands fa-youtube"></i>Lose Yourself</a></td>
        <td><i class="fa-solid fa-eye"></i>2.171.149.471</td>
      </tr>
      <tr>
        <td><a href="nx.html"><i class="fa-brands fa-spotify"></i>Nx Zero</a></td>
        <td><a href="https://www.youtube.com/watch?v=XdglM81b4g8&ab_channel=NXZeroVEVO"><i
              class="fa-brands fa-youtube"></i>Cedo ou Tarde</a></td>
        <td><i class="fa-solid fa-eye"></i>46.847.318</td>
      </tr>
      <tr>
        <td><a href="guns.html"><i class="fa-brands fa-spotify"></i>Guns N' Roses</a></td>
        <td><a href="https://www.youtube.com/watch?v=1w7OgIMMRc4&ab_channel=GunsNRosesVEVO"><i
              class="fa-brands fa-youtube"></i>Sweet Child O' Mine</a></td>
        <td><i class="fa-solid fa-eye"></i>1.856.735.592</td>
      </tr>
      <tr>
        <td><a href="blackpink.html"><i class="fa-brands fa-spotify"></i>BLACKPINK</a></td>
        <td><a href="https://www.youtube.com/watch?v=ioNng23DkIM&ab_channel=BLACKPINK"><i
              class="fa-brands fa-youtube"></i>How You Like That</a></td>
        <td><i class="fa-solid fa-eye"></i>1.026..331.766</td>
      </tr>
      <tr>
        <td><a href="slipknot.html"><i class="fa-brands fa-spotify"></i>Slipkot</a></td>
        <td><a href="https://www.youtube.com/watch?v=6fVE8kSM43I&ab_channel=Slipknot"><i
              class="fa-brands fa-youtube"></i>Duality</a></td>
        <td><i class="fa-solid fa-eye"></i>734.751.634</td>
      </tr>
      <tr>
        <td><a href="brunomars.html"><i class="fa-brands fa-spotify"></i>Bruno Mars</a></td>
        <td><a href="https://www.youtube.com/watch?v=ekzHIouo8Q4&ab_channel=BrunoMars"><i
              class="fa-brands fa-youtube"></i> When I Was Your Man</a></td>
        <td><i class="fa-solid fa-eye"></i>2.080.811.334</td>
      </tr>
      <tr>
        <td><a href="luansantana.html"><i class="fa-brands fa-spotify"></i>Luan Santana</a></td>
        <td><a href="https://www.youtube.com/watch?v=6Pix8tMSN6g&ab_channel=LuanSantana"><i
              class="fa-brands fa-youtube"></i>Meio Termo</a></td>
        <td><i class="fa-solid fa-eye"></i>184.331.124</td>
      </tr>
      <tr>
        <td><a href="thewknd.html"><i class="fa-brands fa-spotify"></i>The Weeknd</a></td>
        <td><a href="https://www.youtube.com/watch?v=4NRXx6U8ABQ&ab_channel=TheWeekndVEVO"><i
              class="fa-brands fa-youtube"></i> Blinding Lights</a></td>
        <td><i class="fa-solid fa-eye"></i>4.245.164.512</td>
      </tr>
      <tr>
        <td><a href="alok.html"><i class="fa-brands fa-spotify"></i>Alok</a></td>
        <td><a href="https://www.youtube.com/watch?v=JVpTp8IHdEg&ab_channel=Spinnin%27Records"><i
              class="fa-brands fa-youtube"></i> Hear Me Now</a></td>
        <td><i class="fa-solid fa-eye"></i>762.949.616</td>
      </tr>
    </table>
  </div>    <!-- FIM da tabela -->
  <div id="footer_content">   <!-- FOOTER -->
    <nav>
      <ul>
        <li style="
              float: right;
              line-height: 70px;
              text-align: center;
              margin-right: 30px;
            ">
          &copy; 2024 AGL Music. Todos os direitos reservados.
        </li>
      </ul>
    </nav>
  </div>
        <!-- FIM FOOTER -->
  <script src="../js/tb.js"></script>
    <script src="../js/main.js"></script>
</body>

</html>