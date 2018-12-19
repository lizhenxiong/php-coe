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

class FiveStar {
    public function __construct()
    {
        
    }
}

class SixStar {
    public function __construct()
    {
        
    }
}

class CarGift {
    public function __construct()
    {
        
    }
}

class BallGift {
    public function __construct()
    {
        
    }
}

//就像为每个依赖类打上标签一样，拥有同一个标签的类为同一个依赖的组（group）
$container = array(
    'star' => array(
        new FiveStar(),
        new SixStar(),
    ),
    'gift' => array(
        new CarGift(),
        new BallGift(),
    ),
);

$tree = new Tree();
$tree->setStar($container['star'][0]);
$tree->setGift($container['gift'][0]);

//我们可以组合出无穷颗漂亮的圣诞树

var_dump($tree);