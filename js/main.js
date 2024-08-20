$(document).ready(function () {
    // Variáveis locais para elementos do DOM
    var $sideBar = $(".side-bar"); // Seleciona a barra lateral
    var $menuBtn = $(".menu-btn"); // Seleciona o botão de menu
    var $closeBtn = $(".close-btn"); // Seleciona o botão de fechar da barra lateral
    var $modal = $("#myModal"); // Seleciona o modal
    var $logoutBtn = $("#logoutBtn"); // Seleciona o botão que abre o modal de logout
    var $confirmBtn = $("#confirmBtn"); // Seleciona o botão "Sim" do modal
    var $cancelBtn = $("#cancelBtn"); // Seleciona o botão "Não" do modal
    var $spanClose = $modal.find(".close"); // Seleciona o botão de fechar dentro do modal
  
    // Função para alternar a rolagem da tela
    function toggleScroll(enabled) {
      // Habilita ou desabilita a rolagem da página com base no parâmetro 'enabled'
      document.body.style.overflow = enabled ? "" : "hidden";
    }
  
    // Abrir a barra lateral ao clicar no botão de menu
    $menuBtn.on("click", function (event) {
      event.stopPropagation(); // Impede a propagação do clique para o document
      $sideBar.addClass("active"); // Adiciona a classe 'active' para exibir a barra lateral
      $menuBtn.css("visibility", "hidden"); // Esconde o botão de menu quando a barra lateral está aberta
    });
  
    // Fechar a barra lateral ao clicar no botão de fechar
    $closeBtn.on("click", function () {
      $sideBar.removeClass("active"); // Remove a classe 'active' para esconder a barra lateral
      $menuBtn.css("visibility", "visible"); // Torna visível o botão de menu ao fechar a barra lateral
    });
  
    // Modal
  
    // Abrir o modal ao clicar no botão de logout
    $logoutBtn.on("click", function () {
      $modal.show(); // Exibe o modal
      toggleScroll(false); // Desabilita a rolagem da página
    });
  
    // Fechar o modal ao clicar no botão de fechar dentro do modal
    $spanClose.on("click", function () {
      $modal.hide(); // Esconde o modal
      toggleScroll(true); // Habilita a rolagem da página
    });
  
    // Fechar o modal se o usuário clicar fora dele
    $modal.on("click", function (event) {
      // Verifica se o clique foi diretamente no modal (fora do conteúdo do modal)
      if ($(event.target) === $modal[0]) {
        $modal.hide(); // Esconde o modal
        toggleScroll(true); // Habilita a rolagem da página
      }
    });
  
    // Fechar o modal se o usuário clicar fora dele ou na barra lateral
    $(document).on("click", function (event) {
      // Fecha o modal se o clique não estiver dentro da barra lateral e o modal estiver visível
      if (
        $(event.target).closest(".side-bar").length === 0 &&
        $modal.is(":visible")
      ) {
        $modal.hide(); // Esconde o modal
        toggleScroll(true); // Habilita a rolagem da página
      } else if (
        $(event.target).closest(".side-bar, .modal").length === 0
      ) {
        // Fecha a barra lateral se o clique não estiver dentro dela
        $sideBar.removeClass("active"); // Remove a classe 'active' para esconder a barra lateral
        $menuBtn.css("visibility", "visible"); // Torna visível o botão de menu ao fechar a barra lateral
      }
    });
  
    // Evento de clique no botão "Sim" do modal
    $confirmBtn.on("click", function () {
      // Aqui você pode redirecionar para a página de logout ou executar qualquer ação desejada
      $.ajax({
        type: 'POST',
        url: '../log_cad/sair.php', // URL do script PHP para encerrar a sessão
        success: function () {
          window.location.href = "http://localhost/formulario-2/log_cad/login.html"; // Redireciona para a página de login
        }
      });
    });
  
    // Evento de clique no botão "Não" do modal
    $cancelBtn.on("click", function () {
      $modal.hide(); // Esconde o modal
      toggleScroll(true); // Habilita a rolagem da página
    });
  
    // Ajusta a barra lateral para telas pequenas quando a janela é redimensionada
    $(window).on("resize", function () {
      if ($(window).width() > 768) {
        // Fecha a barra lateral se a largura da janela for maior que 768 pixels
        $sideBar.removeClass("active"); // Remove a classe 'active' para esconder a barra lateral
        $menuBtn.css("visibility", "visible"); // Torna visível o botão de menu ao fechar a barra lateral
      }
    });
  });