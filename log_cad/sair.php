<?php
    session_start();
<<<<<<< HEAD
    session_destroy();
    header("Location: ../views/login.php");
    exit;
?>
=======
    unset($_SESSION['email']);
    unset($_SESSION['senha']);
    header("Location: login.html");
>>>>>>> a6c3a45f866435c398a1c22ae125ad1427df122b
