<?php


class Stack
{
public $stack=[];
public $limit;
public function __construct($limit=10)
{
    $this->limit=$limit;
}
    public function push($item)
    {
        return array_unshift($this->stack,$item);
}
function pop() {
    return array_shift($this->stack);
}
function isEmply() {
    return empty($this->stack);
}
}