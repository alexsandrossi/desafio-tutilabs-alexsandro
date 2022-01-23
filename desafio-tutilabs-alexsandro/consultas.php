<?php include_once 'includes/header.inc.php'?>
<?php include_once 'includes/menu.inc.php'?>

<div class="row container">
    <div class="sol s12">
        <h5 class="light">Colaboradores Cadastrados</h5><hr>

        <p class="info">
            <i class="az-timer-icon"></i>
        <span id="timeText">
        "Você tem " 
        <strong id="az-time" class="time az-time">30:00</strong›
        "para completar essa etapa do fluxo"
    </span>
        </p>     


        <table class="triped">
            <thead>
                <tr>
                    <th>Nome</th>
                    <th>CPF</th>
                    <th>Setor</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    include_once 'banco_de_dados/read.php'
                ?>
            </tbody>
        </table>
    </div>
</div>

<?php include_once 'includes/footer.inc.php'?>