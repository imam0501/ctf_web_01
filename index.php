<?php
require 'config.php';
if (!isset($_SESSION['user_id'])) {
    header('Location: login.php');
    exit;
} else {
    header('Location: profile.php');
    exit;
}