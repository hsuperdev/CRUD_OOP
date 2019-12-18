<?php
namespace Controller;

class Student
{
    public $name;
    public $age;
    public $address;
    public $group;
    public $url;


    public function __construct($name, $age, $address, $group, $url)
    {
        $this->name = $name;
        $this->age = $age;
        $this->address = $address;
        $this->group = $group;
        $this->url = $url;
    }

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param mixed $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    public function getInfo()
    {
        return "Name: " . $this->name . "- Address: " . $this->address;
    }
}
