<!-- Cabeçalho -->
<?php
require_once(__DIR__ . '/../url.php');
require_once(__DIR__ . '/../includes/header.php');
?>

<main style="padding: 0px;">

    <!-- Corpo -->
    <section id="corpo" class="agendamento-container">

        <div>
            <h1 style="
                text-align: center; 
                font-size: 3rem;
                ">
                Agende seu horário aqui!
            </h1>
            <p style="font-size: 18px; text-align: center;">
                <u>
                    Escolha o serviço desejado, informe seus dados e selecione o dia e horário que gostaria de ser atendido, confirmaremos seu agendamento assim que recebermos sua solicitação.
                    <i>
                        <h6 style="font-size: 12px; text-align: center;">
                            (caso a data desejada não esteja disponível, entraremos em contato para combinar uma outra que se encaixe pra você)
                        </h6>
                    </i>
                </u>
            </p>
        </div>

        <form action="" method="POST">
            <div>
                <div class="campo-duplo">
                    <div>
                        <label for="nome">Nome:</label>
                        <input type="text" name="nome" id="nome" required>
                    </div>

                    <div>
                        <label for="telefone">Telefone:</label>
                        <input type="tel" name="telefone" id="telefone" required>
                    </div>
                </div>

                <div class="campo-duplo">
                    <div>
                        <label for="data">Data: (De segunda à sabado)</label>
                        <input type="date" name="data" id="data">
                    </div>

                    <div>
                        <label for="horario">Horário: (Das 09:00 às 19:00)</label>
                        <input type="time" name="horario" id="horario" min="09:00" max="19:00">
                    </div>
                </div>

                <div>
                    <label for="service">Serviço:</label>
                    <select name="service" id="service" required>
                        <option value="" selected disabled>-- Selecione --</option>
                        <option value="cabelo">Cabelo</option>
                        <option value="barba">Barba</option>
                        <option value="combo">Combo Cabelo/Barba</option>
                    </select>
                </div>

                <div>
                    <button class="btn" type="submit">Agende Aqui</button>
                </div>

                <p id="mensagem-retorno" style="text-align:center; margin-top:10px;"></p>
            </div>
        </form>
    </section>
</main>


<!-- Rodapé -->
<?php require_once(__DIR__ . '/../includes/footer.php'); ?>