<?php

class Stack
{
    private $stack = [];
    private $maxLength = 1000;
    private $currentElement = 0;

    public function push($element): void
    {
        if ($this->currentElement >= $this->maxLength) {
            echo 'Stack is full.' . PHP_EOL;
            return;
        }

        $this->stack[$this->currentElement++] = $element;
    }

    public function pop()
    {
        if ($this->isEmpty()) {
            echo 'Stack is empty.' . PHP_EOL;
            return;
        }

        $returnElement = $this->stack[--$this->currentElement];

        return $returnElement;
    }

    public function isEmpty(): bool
    {
        return $this->currentElement <= 0;
    }
}
