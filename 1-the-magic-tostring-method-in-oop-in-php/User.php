<?php
class User
{
    private $surname;
    private $name;
    private $patronymic;

    public function
    __construct($surname, $name, $patronymic)
    {
        $this->surname = $surname;
        $this->name = $name;
        $this->patronymic = $patronymic;
    }
    public function __toString()
    {
        return $this->surname . ' ' . $this->name . ' ' . $this->patronymic;
    }

    // public function getName()
    // {
    //     return $this->name;
    // }

    // public function getAge()
    // {
    //     return $this->age;
    // }
}

$user = new User('Ivanov', 'Ivan', 'Ivanovich');
echo $user;