<?php

class a
{
    const test1 = '';
}

class b extends a
{
    const test1 = '456';
}

$b = new b();

var_dump($b::test1);