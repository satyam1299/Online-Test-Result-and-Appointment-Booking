<?php
    session_start();
    // Destroy session
    if(session_destroy()) {
        // Redirecting to daashboard
        header("Location: dashboard.php");
    }
?>