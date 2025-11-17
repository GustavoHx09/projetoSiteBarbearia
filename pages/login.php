<?php require_once(__DIR__ . '/../url.php'); ?>
<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cabelo&Barba</title>
    <link rel="stylesheet" href="<?= BASE_URL; ?>assets/css/style.css">
    <script src="<?= BASE_URL; ?>/assets/js/scripts.js"></script>
</head>

<body style="background-color: rgba(73, 77, 77, 1);">

    <main class="login-page">
        <form action="<?= BASE_URL ?>config/auth.php" method="POST">
            <section class="login">

                <h2>Área Restrita</h2>

                <div>
                    <label for="email">Login:</label>
                    <input type="text" name="email" id="email" required>
                </div>

                <div>
                    <label for="senha">Senha:</label>
                    <input type="password" name="senha" id="senha" required>
                </div>

                <button type="submit" class="btn-login">Entrar</button>

            </section>
        </form>
    </main>

</body>

</html>