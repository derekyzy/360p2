<?php
    session_start();
    $_SESSION['loggedin'] = false;
    $_SESSION['username'] = "";
    echo "<script>window.location.href='main.php'</script>";
?>