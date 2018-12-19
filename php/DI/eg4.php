<?php

class Tree {

    private $star;

    private $gift;

    public function __construct()
    {
    }

    public function setStar($star)
    {
        $this->star = $star;
    }

    public function setGift($gift)
    {
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

$tree = new Tree();
$tree->setStar(new Star());
$tree->setGift(new Gift());

var_dump($tree);