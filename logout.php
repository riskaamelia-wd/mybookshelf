<?php
    session_start();
    session_destroy();
    echo "<script>alert('anda telah keluar dari menu'); window.location = 'login.php'</script>";
?>