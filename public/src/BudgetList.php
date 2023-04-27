<?php

namespace Project\DesignPattern;

class BudgetList implements \IteratorAggregate
{
    private array $budgets;

    public function __construct()
    {
        $this->budgets = [];
    }

    public function addBudget(Budget $budget)
    {
        $this->budgets[] = $budget;
    }

    public function getIterator() : \ArrayIterator
    {
        return new \ArrayIterator($this->budgets);
    }
}