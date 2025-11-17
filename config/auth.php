<?php
session_start();

// Usuário fixo temporário
$usuario_autorizado = "admin@gmail.com";
$senha_criptografada = password_hash("123", PASSWORD_DEFAULT);

// Recebe os dados do usuário
$user = $_POST['email'];
$pass = $_POST['senha'];

// Verifica login
if ($user === $usuario_autorizado && password_verify($pass, $senha_criptografada)) {
    $_SESSION['logado'] = true;
    $_SESSION['email'] = $user;
    header("Location: ../pages/dashboard.php"); // Página protegida
    exit;
} else {
    session_unset();
    header("Location: ../pages/login.php?erro=1");
    exit;
}