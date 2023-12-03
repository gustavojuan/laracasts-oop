<?php

abstract class AchievementType
{
    public function name()
    {
        $class = (new ReflectionClass($this))->getShortName();
        return trim(preg_replace('/[A-Z]/', ' $0', $class));
    }

    public function icon()
    {
        return strtolower(str_replace(' ', '-', $this->name())) . '.png';
    }

    abstract public function qualifier($user);

}

class FirstThousandPoints extends AchievementType
{
    public function qualifier($user)
    {
        throw new \Exception('qualifer not imnplemented');
    }
}

class FirstBestAnswer extends AchievementType
{
    public function qualifier($user)
    {

    }
}


class ReachTop50 extends AchievementType
{
    public function qualifier($user)
    {

    }
}

$ftp = new FirstThousandPoints();
echo $ftp->name();
echo $ftp->icon();

$fba = new FirstBestAnswer();
echo $fba->name();
echo $fba->icon();