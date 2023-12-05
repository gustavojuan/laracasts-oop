<?php

class Age
{
    private $age;

    /**
     * @param $age
     */
    public function __construct($age)
    {

        if ($age < 0 || $age > 120) {
            throw new InvalidArgumentException('That makes no sense');
        }

        $this->age = $age;
    }

    //Mutable
    //    public function increment()
    //    {
    //        $this->age ++;
    //    }

    // Inmutable
    public function increment()
    {
        return new self($this->age + 1);
    }



}

function register(string $name, Age $age)
{

}

$age = new Age(35);
$age = $age->increment();

var_dump($age);

register('John Doe', $age);
