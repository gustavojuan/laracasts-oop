<?php
abstract class AchievementType
{
    public function name()
    {
       $reflection = new ReflectionClass($this);
       $class = $reflection->getShortName();
       return trim(preg_replace('/[A-Z]/',' $0',$class));
    }

    public function icon()
    {
        return strtolower(str_replace(' ','-', $this->name()).'.png');
    }

    abstract public function qualifier($user);


}

class FirstThousandPoints extends AchievementType
{

    public function qualifier($user)
    {

    }
}

class FirstBestAnswer extends AchievementType
{
    public function qualifier($user)
    {

    }
}

class classReachTop50 extends AchievementType {
    public function qualifier($user)
    {
        return "Soy {${$user}}";
    }
}




$ftp = new classReachTop50();
var_dump($ftp->qualifier('user'));

