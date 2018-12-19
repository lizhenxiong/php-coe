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

$container = array(
    'star' => new Star(),
    'gift' => new Gift(),
);

$tree = new Tree();
$tree->setStar($container['star']);
$tree->setGift($container['gift']);

var_dump($tree);