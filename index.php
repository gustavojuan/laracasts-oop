<?php

class Team
{

    protected $name;
    protected $members = [];

    /**
     * @param $name
     */
    public function __construct($name, $members = [])
    {
        $this->name = $name;
        $this->members = $members;
    }

    public static function start(...$params)
    {
        return new static(...$params);
    }


    public function name()
    {
        return $this->name;
    }


    public function members()
    {
        return $this->members;
    }

    public function add($name)
    {
        $this->members[] = $name;
    }

    public function cancel()
    {

    }

    public function manager()
    {

    }
}
class Member
{
    protected $name ;

    /**
     * @param $name
     */
    public function __construct($name)
    {
        $this->name = $name;
    }

    public function lastViewed ()
    {

    }


}

//$acme = new Team('ACME', ['founder1', 'founder2']);
$acme =  Team::start('ACME', [
    new Member('John Doe'),
    new Member('Jane Doe'),
]);

$laracasts = new Team('Laracasts');
$foo = new Team('Foo');


var_dump($acme->members());


