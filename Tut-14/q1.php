<?php
class Person{
    protected $name;
    protected $age;
    public function __construct($name, $age){
        $this->name = $name;
        $this->age = $age;
    }
    public function greet(){
        return "Hello, my name is " . $this->name." and age is ".$this->age." years old.";
}
}

class Student extends Person{
    protected $major;
    public function __construct($name,$age,$major){
        parent::__construct($name,$age);
        $this->major = $major;
    }

    public function greet(){
        return "Hello, my name is " . $this->name.", I am " . $this->age . " years old and I am majoring in ".$this->major.".";
    }
}

$student=new Student("Abhi",20,"Computer Science");
echo $student->greet();

?>