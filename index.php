<?php

class Collection
{
    protected array $items;

    /**
     * @param array $items
     */
    public function __construct(array $items)
    {
        $this->items = $items;
    }


    public function sum($key)
    {
        return array_sum(array_column($this->items,$key));
    }

}


//"is a"
class VideoCollection extends Collection
{
    public function length()
    {
        return $this->sum('length');
    }
}

class Video
{
    public $title;
    public $length;

    /**
     * @param $title
     * @param $length
     */
    public function __construct($title, $length)
    {
        $this->title = $title;
        $this->length = $length;
    }
}


$videos = new VideoCollection([
    new Video('Speed', 110),
    new Video('Speed 2', 117),
]);

var_dump($videos->sum('length'));
var_dump($videos->length());

