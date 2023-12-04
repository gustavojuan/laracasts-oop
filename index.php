<?php

// Encapsulation => Enclose within a capsule

class Person
{


    public $name;

    public function __construct($name)
    {
        $this->name = $name;
    }

    public function job()
    {
        return 'software developer';
    }

    public function favoriteTeam()
    {

    }

    private function thingsThatKeepUpAtNight()
    {
        return 'cosas que a lo mejor no todo el mundo debiera saber';
    }
}

//$method = new \ReflectionMethod(Person::class,'thingsThatKeepUpAtNight');
//var_dump($method);
//$method->setAccessible(1);
//die();
//
//$bob = new Person('Bob');
//var_dump($bob->thingsThatKeepUpAtNight());

$person = new Person('Bob');
$person->name = null;
var_dump($person);
