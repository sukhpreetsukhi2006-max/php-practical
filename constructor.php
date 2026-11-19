<?php
class Student
{
    public $name;
    public $rollno;
    public $marks;

    public function __construct($name, $rollno, $marks)
    {
        $this->name = $name;
        $this->rollno = $rollno;
        $this->marks = $marks;
    }
    public function display()
    {
        echo "Student Name: " . $this->name . "<br>";
        echo "Roll Number: " . $this->rollno . "<br>";
        echo "Marks: " . $this->marks . "<br>";
    }
}

$s1 = new Student("Rahul", 101, 85);
$s1->display();
?>