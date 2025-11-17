<?php
require __DIR__ . '/vendor/autoload.php';
require('url.php');
?>

<!-- Cabeçalho -->
<?php
require_once(__DIR__ . '/includes/header.php');
require_once(__DIR__ . '/url.php');
?>

<!-- Corpo -->
<?php require_once(__DIR__ . '/pages/home.php'); ?>


<!-- Rodapé -->
<?php require_once(__DIR__ . '/includes/footer.php'); ?>