<?php

abstract class AbstractObserver
{
    abstract public function update();
}

abstract class AbstractSubject 
{
    abstract public function push(AbstractObserver $oberver_in);

    abstract public function pop(AbstractObserver $observer_out);

    abstract public function notify();
}

class ObserverA extends AbstractObserver
{
    public function __construct()
    {

    }

    public function update() 
    {
        echo 'gaoshiqing A';
    }
}

class ObserverB extends AbstractObserver
{
    public function __construct()
    {
        
    }

    public function update() 
    {
        echo 'gaoshiqing B';
    }
}

class ObserverC extends AbstractObserver
{
    public function __construct()
    {
        
    }

    public function update()
    {
        echo 'gaoshiqing C';
    }
}

class SubjectMain extends AbstractSubject
{
    private $observers = array();

    public function __construct()
    {

    }

    public function push(AbstractObserver $oberver_in)
    {
        $this->observers[] = $oberver_in;
    }

    public function pop(AbstractObserver $observer_out)
    {
        foreach ($this->observers as $key => $observer) {
            if ($observer_out == $observer) {
                unset($this->observers[$key]);
            }
        }
    }

    public function notify()
    {
        foreach ($this->observers as $observer) {
            $observer->update();
        }
    }
}

$subjectMain = new SubjectMain();

$subjectMain->push(new ObserverA());
$subjectMain->push(new ObserverB());
$subjectMain->push(new ObserverC());

$subjectMain->notify();