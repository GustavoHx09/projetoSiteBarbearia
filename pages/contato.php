<!-- Cabeçalho -->
<?php 
require_once(__DIR__ . '/../url.php'); 
require_once(__DIR__ . '/../includes/header.php'); 
?>

<!-- Conteúdo principal -->
<main>
    <section id="contato">

        <!-- Coluna esquerda (Mapa) -->
        <div class="mapa">
            <h2>Onde estamos no mapa?</h2>
            <img src="../assets/img/rotaMap.png"
                width="100%" height="300" style="border: 5px solid;"  loading="lazy"></img>

            <a href="https://www.google.com/maps/" target="_blank" rel="noopener noreferrer">
                <button class="btn">
                    Clique aqui para definir a rota!
                </button>
            </a>
        </div>

        <!-- Coluna direita (Informações e Formulário) -->
        <div class="info-contato">
            <h2>Informações de Contato</h2>
            <ul>
                <li><strong>📍 Endereço:</strong> Rua Exemplo, 123 - Centro, Foz do Iguaçu - PR</li>
                <li><strong>📞 Telefone:</strong> (45) 99999-9999</li>
                <li><strong>💬 WhatsApp:</strong> (45) 98888-8888</li>
                <li><strong>📧 E-mail:</strong> contato@suaBarbearia.com.br</li>
                <li><strong>🕒 Horário:</strong> Seg - Sáb: 9h às 19h</li>
            </ul>

            <form>
                <h3>Envie uma mensagem</h3>
                <label for="nome">Nome:</label>
                <input type="text" id="nome" placeholder="Seu nome" required>

                <label for="email">E-mail:</label>
                <input type="email" id="email" placeholder="Seu e-mail" required>

                <label for="mensagem">Mensagem:</label>
                <textarea id="mensagem" rows="4" placeholder="Escreva sua mensagem..." required></textarea>

                <button type="submit" class="btn">Enviar mensagem</button>
            </form>
        </div>

    </section>
</main>

<!-- Rodapé -->
<?php require_once(__DIR__ . '/../includes/footer.php'); ?>