<?php
class Arr 
{
    private $numbers = [];
    public function add($number)
    {
        $this->numbers[] = $number;
        return $this;
    }
    public function __toString()
    {
        return (string) array_sum($this->numbers);
    }
}

$arr = new Arr;
echo $arr->add(1)->add(2)->add(3);