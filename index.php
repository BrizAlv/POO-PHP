<?php
// class user
// {
//     public $type;
// }

// class Admin
// {
//     public function greet()
//     {
//         return "Hello Admin";
//     }
// }

// $user = new user();
// $user->type = new Admin;
// echo $user->type->greet();

//VIDEO 5 Include, require
// include 'greet.php';
// echo greet('Italo', 'Cómo estás...?');

//VIDEO 6 Clases y objetos

// include 'person.php';
// include 'type.php';
// include 'user.php';


// $user = new User();
// $user->type = new Admin();
// echo $user->type->greet();

// video 9 Modularidad carpeta abstract

//video 10 Interfaces

// video 11 Polimorfismo carpeta Interface

// video 12 Herencia 

// class User
// {
//     public $name;
//     public function __construct($name)
//     {
//         $this->name = $name;
//     }
//     public function getName()
//     {
//         return $this->name;
//     }
// }
// class Admin extends User
// {
//     //...
// }
// $admin = new Admin('Italo');
// echo $admin->getName();

// Video 13 Interfaces ejemplo practivo
//una interface es un contrato para obligar a quien la implemente a desarrollar los métodos de la interface
interface Person
{
    public function getName();
}  
class Admin implements Person
{
    public $name;
    public function __construct($name)
    {
        $this->name = $name;
    } 
    public function getName()
    {
        return $this->name;
    }
}
$admin = new Admin('Italo');
echo $admin->getName();