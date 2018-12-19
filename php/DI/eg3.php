<?php

class Tree {

    private $star;

    private $gift;

    public function __construct($star, $gift)
    {
        $this->star = $star;
        $this->gift = $gift;
    }
}

class Star {
    public function __construct()
    {
        
    }
}

class Gift {
    public function __construct()
    {
        
    }
}

$tree = new Tree(new Star(), new Gift());

var_dump($tree);