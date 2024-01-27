<?php
    session_start();
    $temp_name=$_SESSION['first_name'];
    session_unset();
    session_destroy();
    // echo "session destroyed";
    echo ("<script LANGUAGE='JavaScript'>
        window.alert('See you soon $temp_name');
        window.location.href='login.php';
        </script>");
    ?>
