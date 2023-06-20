<?php
class Person{
    public $name;
    public $age;
    public function __construct($name, $age){
        $this->name = $name;
        $this->age = $age;
    }
    public function setAge($newAge){
        $this->age = $newAge;
}
}

class Student extends Person{
    public $studentId;
    public function __construct($name,$age,$studentId){
        parent::__construct($name,$age);
        $this->studentId = $studentId;
    }

    public function setStudentId($newStudentId){
        $this->studentId = $newStudentId;
    }
}

class Teacher extends Person{
    public $teacherId;
    public function __construct($name,$age,$teacherId){
        parent::__construct($name,$age);
        $this->teacherId = $teacherId;
    }
    public function setTeacherId($newTeacherId){
        $this->teacherId = $newTeacherId;
    }
}

//Create instance of each class
$person=new Person("A",30);
$student=new Student("B",20,1234);
$teacher=new Teacher("C",40,5678);

//Call set methods to update properties
$person->setAge(35);
$student->setStudentId(5678);
$teacher->setTeacherId(9888);

//Print all objects
echo "Person: {$person->name},{$person->age}\n";
echo "Student: {$student->name},{$student->age},{$student->studentId}\n";
echo "Teacher: {$teacher->name},{$teacher->age},{$teacher->teacherId}\n";
?>