<?php
    session_start();
    $_SESSION['loggedIn'] = false;
session_destroy();
echo " <script type='text/javascript'>
            window.location.href = '../index.php';
          </script> ";
?>