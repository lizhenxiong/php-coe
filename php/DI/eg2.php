<?php

class Tree {

    private $star;

    private $gift;

    public function __construct()
    {
        //@Refactor
        //星星和礼物抽象成服务，如果有一天想要换成另一种服务，那么必须修改代码
        $this->star = new Star();
        $this->gift = new Gift();
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

var_dump($tree);