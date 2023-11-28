<?php


class CoffeMaker
{
    public function brew()
    {
        var_dump('Brewing the coffee');
    }
}


//"is a"
class SpecialityCoffeMaker extends CoffeMaker
{
    public function brewLatte()
    {
        var_dump('Brewing a latte');
    }
}


(new CoffeMaker())->brew();
(new SpecialityCoffeMaker())->brew();
(new SpecialityCoffeMaker())->brewLatte();
