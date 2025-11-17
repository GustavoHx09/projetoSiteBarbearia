<!-- Cabeçalho -->
<?php
require_once(__DIR__ . '/../url.php');
require_once(__DIR__ . '/../includes/header.php');
?>

<!-- Conteúdo principal -->
<main>

    <!-- Blocos com os planos mensais se ouver (opcional da barbearia) -->

    <section id="planos">
        <h2>Nossos Planos</h2>
        <div class="cards-container">
            <div class="card">
                <h3>Plano Clássico</h3>
                <p>Ideal para quem busca cortes regulares e cuidados básicos.</p>
                <span class="price">R$ 69,90/mês</span>
                <button>Assinar Agora</button>
            </div>

            <div class="card destaque">
                <h3>Plano Premium</h3>
                <p>Inclui barba, cabelo e cuidados especiais com produtos premium.</p>
                <span class="price">R$ 99,90/mês</span>
                <button>Assinar Agora</button>
            </div>

            <div class="card">
                <h3>Plano Executivo</h3>
                <p>Experiência completa com massagem capilar e atendimento prioritário.</p>
                <span class="price">R$ 129,90/mês</span>
                <button>Assinar Agora</button>
            </div>
        </div>
    </section>

    <section id="servicos">
        <h2>Nossos Serviços</h2>

        <div>
            <ul>
                <li>Serviço 1 (corte tradicional)</li>
                <li>Serviço 2 (cortes personalizados)</li>
                <li>Serviço 3 (ex)</li>
            </ul>
        </div>
    </section>

</main>

<!-- Rodapé -->
<?php require_once(__DIR__ . '/../includes/footer.php'); ?>