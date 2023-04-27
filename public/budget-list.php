<?php

require_once 'vendor/autoload.php';

use Project\DesignPattern\Budget;
use Project\DesignPattern\BudgetList;

$budget1 = new Budget();
$budget1->amount = 7;
$budget1->approve();
$budget1->value = 1500.75;

$budget2 = new Budget();
$budget2->amount = 3;
$budget2->reprove();
$budget2->value = 150;

$budget3 = new Budget();
$budget3->amount = 5;
$budget3->approve();
$budget3->close();
$budget3->value = 1350;

$budgetList = new BudgetList();
$budgetList->addBudget($budget1);
$budgetList->addBudget($budget2);
$budgetList->addBudget($budget3);

foreach($budgetList as $budget) {
    echo "Value: " . $budget->value . PHP_EOL;
    echo "State: " . $budget->currentState . PHP_EOL;
    echo "Amount: " . $budget->amount . PHP_EOL;
}