<?php

// to see output of this program type the following command in terminal
// php -S 0.0.0.0:8080

//Q1
class Car {
    public $make;
    public $model;
    public $year;

    public function __construct($make, $model, $year) {
        $this->make = $make;
        $this->model = $model;
        $this->year = $year;
    }

    public function displayDetails() {
        echo "Car: {$this->make} {$this->model} ({$this->year})";
        echo "<br>";
    }
}

//Q2
class Animal {
    public function makeSound() {
        return "Some sound";
    }
}

class Dog extends Animal {
    public function makeSound() {
        return "Bark";
    }
}

class Cat extends Animal {
    public function makeSound() {
        return "Meow";
    }
}

//Q3
trait Logger {
    public function log($message) {
        echo "Log: $message";
    }
}

class User {
    use Logger;

    public function createUser($name) {
        $this->log("User '$name' has been created.");
    }
}

class Order {
    use Logger;

    public function createOrder($orderId) {
        $this->log("Order #$orderId has been created.");
    }
}

//Ans 3
$user = new User();
$user->createUser("John Doe"); 
echo "<br>";

$order = new Order();
$order->createOrder(1234); 



//Ans 2
$dog = new Dog();
echo $dog->makeSound(); 
echo "<br>";

$cat = new Cat();
echo $cat->makeSound(); 

echo "<br>";

//Ans 1
$car1 = new Car("Toyota", "Corolla", 2020);
$car1->displayDetails(); 
$car2 = new Car("Suzuki", "Mehran", 2010);
$car2->displayDetails(); 



?>
