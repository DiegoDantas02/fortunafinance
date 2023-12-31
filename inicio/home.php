
<?php include "../inc/conexao.php"; ?>
<?php include "../inc/header.php"; ?>


<!-- css da home.php config do layout principal -->
<link rel="stylesheet" href="../inicio/style.css" />
<!-- ------------------------------------------ -->
<link rel="shortcut icon" href="../img/faavmain.png" type="image/x-icon">
<div>
    
</div>
<body>
<br><br><br><br>

            <h2>Controle de despesas</h2>
    <div class="container">
        <h4>Saldo atual</h4>

        <h1 id="balance" class="balance">R$ 0.00</h1>

        <div class="inc-exp-container">
            <div class="cor-receitas">
                <h4>Receitas</h4>
                <p id="money-plus" class="money plus">+ R$0.00</p>
            </div>

            <div class="cor-despesas">
                <h4>Despesas</h4>
                <p id="money-minus" class="money minus">- R$0.00</p>
            </div>
        </div>

                <h3>Transações</h3>

        <ul id="transactions" class="transactions"></ul>

                <h3>Adicionar transação</h3>

        <form id="form">
            <div class="form-control">
                <label for="text">Nome:</label>
                <input autofocus type="text" id="text" placeholder="Nome da transação" />
            </div>

            <div class="form-control">
                <label for="amount">Valor <br />
                    <small>(-negativo - despesas, positivo - receitas)</small>
                   
                </label>
                <input type="number" id="amount" placeholder="Valor da transação" />
            </div>

            <button class="btn meu-botao ">Adicionar</button>
        </form>
    </div>

    <script src="script.js"></script>
    <?php include "../inc/footer.php"; ?>