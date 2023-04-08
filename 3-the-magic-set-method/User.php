<?php
class User
{
    private $name;
    private $age;

    public function __construct($name, $age)
    {
        $this->name = $name;
        $this->age = $age;
    }

    public function __set($property, $value)
    {
        switch($property){
            case 'name':
                if($value != ''){
                    $this->$property = $value;
                }
            break;
            case 'age':
                if($value >= 0 and $value <= 70){
                    $this->$property = $value;
                }
            break;
            default:
            echo 'такого свойства нет';
            break;
        }
    }

    public function __get($property)
    {
       return $this->$property; 
    }
}

$user = new User('John', 25);
echo $user->name . "\n";
echo $user->age . "\n";

$user->name = 'Vadim';
$user->age = 26;

echo $user->name . "\n";
echo $user->age . "\n";

$user->name = '';
$user->age = 99;

echo $user->name . "\n";
echo $user->age . "\n";
