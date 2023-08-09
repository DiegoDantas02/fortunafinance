<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="sidebarstyle.css">
    <link rel="stylesheet" href="outrostyle.css">
    <link rel="shortcut icon" href="../img/logo.png" type="image/x-icon">
    <title>Controle de despesas</title>
</head>

<body>
    <input type="checkbox" id="check">
    <header>
        <!-- header começo -->
        <label for="check">
            <ion-icon name="menu-outline" id="sidebar_btn"></ion-icon>
        </label>
        <div class="left">
            <h3>$Fortuna <span>Finance</span></h3>
        </div>
        <div class="right">
            <a href="#" class="sair_btn">Sair</a>
        </div>
    </header>
    <!-- header final -->
    <!-- Sidebar começo  -->
    <div class="sidebar">
        <center>
            <img src="../img/logo.png" alt="" class="image">
            <h2> Bryan </h2>
        </center>
        <a href="#"><ion-icon name="desktop-outline"></ion-icon><span>Painel</span></a>
        <a href="#"><ion-icon name="images-outline"></ion-icon><span>Formulario</span></a>
        <a href="#"><ion-icon name="calendar-clear-outline"></ion-icon><span>Galeria</span></a>
        <a href="#"><ion-icon name="camera-outline"></ion-icon><span>Sobre</span></a>
        <a href="#"><ion-icon name="settings-outline"></ion-icon><span>Configuração</span></a>
    </div>
    <!-- Sidebar final  -->

    <div class="content">
        <?php include "content_1.php"; ?>
    </div>

    <script>
        const transactionsUl = document.querySelector('#transactions');
const incomeDisplay = document.querySelector('#money-plus');
const expenseDisplay = document.querySelector('#money-minus');
const balanceDisplay = document.querySelector('#balance');
const form = document.querySelector('#form');
const inputTransactionName = document.querySelector('#text');
const inputTransactionAmount = document.querySelector('#amount');

let transactions = [];

const fetchTransactions = () => {
  const localStorageTransactions = JSON.parse(localStorage.getItem('transactions'));
  transactions = localStorageTransactions || [];
};

const saveTransactionsToLocalStorage = () => {
  localStorage.setItem('transactions', JSON.stringify(transactions));
};

const removeTransaction = (id) => {
  transactions = transactions.filter(transaction => transaction.id !== id);
  init();
  saveTransactionsToLocalStorage();
};

const addTransactionIntoDOM = (transaction) => {
  const operator = transaction.amount < 0 ? '-' : '+';
  const CSSClass = transaction.amount < 0 ? 'minus' : 'plus';
  const amountWithoutOperator = Math.abs(transaction.amount);
  const li = document.createElement('li');

  li.classList.add(CSSClass);
  li.innerHTML = `
    ${transaction.name} <span>${operator} R$ ${amountWithoutOperator}</span><button class="delete-btn" onClick="removeTransaction(${transaction.id})">x</button>
  `;

  transactionsUl.appendChild(li);
};

const updateBalanceValues = () => {
  const transactionAmounts = transactions.map(transaction => transaction.amount);
  const total = transactionAmounts.reduce((accumulator, transaction) => accumulator + transaction, 0).toFixed(2);
  const income = transactionAmounts.filter(value => value > 0).reduce((accumulator, value) => accumulator + value, 0).toFixed(2);
  const expense = Math.abs(transactionAmounts.filter(value => value < 0).reduce((accumulator, value) => accumulator + value, 0)).toFixed(2);

  balanceDisplay.textContent = `R$ ${total}`;
  incomeDisplay.textContent = `R$ ${income}`;
  expenseDisplay.textContent = `R$ ${expense}`;
};

const init = () => {
  transactionsUl.innerHTML = '';
  transactions.forEach(addTransactionIntoDOM);
  updateBalanceValues();
};

const generateID = () => Math.round(Math.random() * 1000);

const handleFormSubmit = (event) => {
  event.preventDefault();

  const transactionName = inputTransactionName.value.trim();
  const transactionAmount = inputTransactionAmount.value.trim();

  if (transactionName === '' || transactionAmount === '') {
    alert('Por favor, preencha tanto o nome quanto o valor da transação.');
    return;
  }

  const transaction = {
    id: generateID(),
    name: transactionName,
    amount: Number(transactionAmount)
  };

  transactions.push(transaction);
  init();
  saveTransactionsToLocalStorage();

  inputTransactionName.value = '';
  inputTransactionAmount.value = '';
};

form.addEventListener('submit', handleFormSubmit);

fetchTransactions();
init();

    </script>

    <?php include "../inc/footer.php"; ?>
</body>

</html>
