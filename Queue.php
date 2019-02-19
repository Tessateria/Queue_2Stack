<?php

require_once ('Stack.php');

class Queue
{
    private $stack1;
    private $stack2;
    private $count = 0;
    private $maxCount = 1000;

    public function __construct()
    {
        $this->stack1 = new Stack();
        $this->stack2 = new Stack();
    }

    public function in($element): void
    {
        if ($this->count >= $this->maxCount) {
            echo 'Queue is full.' . PHP_EOL;
            return;
        }

        $this->stack1->push($element);
        $this->count++;
    }

    public function out()
    {
        if ($this->stack2->isEmpty()) {
            if ($this->stack1->isEmpty()) {
                echo 'Queue is Empty.' . PHP_EOL;
                return;
            } else {
                while (!$this->stack1->isEmpty()) {
                    $this->stack2->push($this->stack1->pop());
                }
            }
        }

        $this->count--;
        return $this->stack2->pop();
    }
}