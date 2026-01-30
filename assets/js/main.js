$(document).ready(function () {

    var $sideBar = $(".side-bar");
    var $menuBtn = $(".menu-btn"); 
    var $closeBtn = $(".close-btn");
    var $modal = $("#myModal");
    var $logoutBtn = $("#logoutBtn");
    var $confirmBtn = $("#confirmBtn");
    var $cancelBtn = $("#cancelBtn");
    var $spanClose = $modal.find(".close");
  

    function toggleScroll(enabled) {
      document.body.style.overflow = enabled ? "" : "hidden";
    }
  
    $menuBtn.on("click", function (event) {
      event.stopPropagation();
      $sideBar.addClass("active");
      $menuBtn.css("visibility", "hidden");
    });
  
    $closeBtn.on("click", function () {
      $sideBar.removeClass("active");
      $menuBtn.css("visibility", "visible");
    });
  
  
    $logoutBtn.on("click", function () {
      $modal.show();
      toggleScroll(false);
    });
  
    $spanClose.on("click", function () {
      $modal.hide();
      toggleScroll(true);
    });
  
    $modal.on("click", function (event) {
      if ($(event.target) === $modal[0]) {
        $modal.hide();
        toggleScroll(true);
      }
    });
  
    $(document).on("click", function (event) {

      if (
        $(event.target).closest(".side-bar").length === 0 &&
        $modal.is(":visible")
      ) {
        $modal.hide();
        toggleScroll(true);
      } else if (
        $(event.target).closest(".side-bar, .modal").length === 0
      ) {
        $sideBar.removeClass("active");
        $menuBtn.css("visibility", "visible");
      }
    });
    $confirmBtn.on("click", function () {
      $.ajax({
        type: 'POST',
        url: '/aps-primeiro-semestre/log_cad/sair.php', 
        success: function () {
            window.location.replace("/aps-primeiro-semestre/views/login.php");
        },
        error: function () {
            window.location.replace("/aps-primeiro-semestre/views/login.php");
        }
      });
    });
    $cancelBtn.on("click", function () {
      $modal.hide();
      toggleScroll(true);
    });

    $(window).on("resize", function () {
      if ($(window).width() > 768) {
        $sideBar.removeClass("active");
        $menuBtn.css("visibility", "visible");
      }
    });
  });