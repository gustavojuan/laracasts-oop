<?php


class MaximumMembersReached extends Exception
{
    protected $message = 'You may not add more than 3 team members';
}

class Member
{
    public $name;

    /**
     * @param $name
     */
    public function __construct($name)
    {
        $this->name = $name;
    }


}

class Team
{

    protected $members = [];

    public function add(Member $member)
    {

        if (count($this->members) === 3){
            throw new MaximumMembersReached();
        }
        $this->members[] = $member;
    }

    public function members()
    {
        return $this->members;
    }
}

class TeamMembersController
{
    public function store()
    {
        $team = new Team; //has a maximum of 3 members

        try {
            $team->add(new Member('john doe'));
            $team->add(new Member('jane doe'));
            $team->add(new Member('frank doe'));
            $team->add(new Member('susan doe'));
            var_dump($team->members());

        }catch (MaximumMembersReached $e)    {
            var_dump($e->getMessage());
        }


    }
}

(new TeamMembersController)->store();

