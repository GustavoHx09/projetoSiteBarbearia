<?php
require_once('../url.php');

session_start();

if (!isset($_SESSION['logado']) || $_SESSION['logado'] !== true) {
    header("Location: login.php");
    exit;
}

// Cabeçalho
require_once('../includes/dashHeader.php');
?>

<h1>Bem-vindo ao Painel Administrativo <?= $_SESSION['email']; ?>!</h1>