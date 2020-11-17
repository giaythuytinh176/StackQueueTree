<?php

class Element
{
    public $value;
    public $next;
}

class Queue
{
    private $font = null;
    private $back = null;

    /**
     * Check whether the queue is empty or not
     * @return boolean
     * public function isEmpty(){ return false; }  //stub
     */
    public function isEmpty()
    {
        return $this->font == null;
    }
    function sortByOrder($a, $b) {
        return $a[1] - $b[1];
    }

    /**
     * Insert element at the back of queue
     * @param $value
     * public function enqueue($value){} //stub
     */
    public function enqueue($name, $code)
    {
        $oldBack = $this->back;
        $this->back = new Element();
        $this->back->value = [$name, $code];
        if ($this->isEmpty()) {
            $this->font = $this->back;
        } else {
            $oldBack->next = $this->back;
        }
    }

    /**
     * Remove element from the font of queue
     * @return $value
     * public function dequeue(){ return 0; } //stub
     */
    public function dequeue()
    {
        if ($this->isEmpty()) {
            return null;
        }
        $removedValue = $this->font->value;
        $this->font = $this->font->next;
        return $removedValue;
    }
}