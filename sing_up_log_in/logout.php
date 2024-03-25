<?php
session_start();
session_destroy();

if (session_status() === PHP_SESSION_NONE) {
    header('location: registration.php');
} else {
    echo "<script>alert('Session is not destroyed')</script>";
}
