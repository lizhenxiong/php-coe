<?php

abstract class AbstractMediator
{
    // 将同事类通过数组存放，不用当作参数传入
    // private $colleagues = array(); 子类不能访问父类私有属性
    protected $colleagues = array();

    public function __construct()
    {

    }

    public function push(AbstractColleague $colleague_in)
    {
        $this->colleagues[] = $colleague_in;
    }

    public function pop(AbstractColleague $colleague_out)
    {
        foreach ($this->colleagues as $key => $colleague) {
            if ($colleague == $colleague_out) {
                unset($this->colleagues[$key]);
            }
        }
    }

    abstract public function tenfoldAffect($multiple, $number);

    abstract public function hundredfoldAffect($multiple, $number);

    abstract public function thousandfoldAffect($multiple, $number);
}

class MediatorMain extends AbstractMediator
{
    public function tenfoldAffect($multiple, $number)
    {
        $this->setNumberOtherColleague($this->colleagues, $number, $multiple);
    }
    
    public function hundredfoldAffect($multiple, $number)
    {
        $this->setNumberOtherColleague($this->colleagues, $number, $multiple);
    }
    
    public function thousandfoldAffect($multiple, $number)
    {
        $this->setNumberOtherColleague($this->colleagues, $number, $multiple);
    }

    protected function setNumberOtherColleague($colleagues, $number, $multiple)
    {
        foreach ($colleagues as $colleague) {
            if ($colleague::MULTIPLE != $multiple) {
                $colleague->setNumber($number * $colleague::MULTIPLE);
            }
        }
    }
}

abstract class AbstractColleague
{
    private $number;

    public function getNumber()
    {
        return $this->number;
    }

    public function setNumber($number)
    {
        $this->number = $number;
    }

    abstract public function setColleagueNumber(AbstractMediator $mediator, $number);
}

class TenFoldColleague extends AbstractColleague
{
    const MULTIPLE = 10;

    public function setColleagueNumber(AbstractMediator $mediator, $number)
    {
        $this->setNumber($number * self::MULTIPLE);
        $mediator->tenfoldAffect(self::MULTIPLE, $number);
    }
}

class HundredFoldColleague extends AbstractColleague
{
    const MULTIPLE = 100;

    public function setColleagueNumber(AbstractMediator $mediator, $number) 
    {
        $this->setNumber($number * self::MULTIPLE);
        $mediator->hundredfoldAffect(self::MULTIPLE, $number);
    }
}

class ThousandFoldColleague extends AbstractColleague
{
    const MULTIPLE = 1000;

    public function setColleagueNumber(AbstractMediator $mediator, $number) 
    {
        $this->setNumber($number * self::MULTIPLE);
        $mediator->thousandfoldAffect(self::MULTIPLE, $number);
    }
}

$mediator = new MediatorMain();

$tenFoldColleague = new TenFoldColleague();
$hundredFoldColleague = new HundredFoldColleague();
$thousandFoldColleague = new ThousandFoldColleague();

$mediator->push($tenFoldColleague);
$mediator->push($hundredFoldColleague);
$mediator->push($thousandFoldColleague);


$tenFoldColleague->setColleagueNumber($mediator, 9);

var_dump($tenFoldColleague->getNumber());
var_dump($hundredFoldColleague->getNumber());
var_dump($thousandFoldColleague->getNumber());
