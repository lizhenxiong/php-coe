<?php

class a 
{
    public function aaa()
    {
        var_dump($this->a);
    }
}

class b extends a
{
    protected $a = '222';
}

$b = new b();

$b->aaa();

