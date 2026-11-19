
<?php
// Creating a class
class Student
{
    // Properties
    public $name;
    public $rollno;
    public $marks;

    // Constructor
    public function __construct($n, $r, $m)
    {
        $this->name = $n;
        $this->rollno = $r;
        $this->marks = $m;
    }

    // Method
    public function display()
    {
        echo "Student Details<br>";
        echo "Name: " . $this->name . "<br>";
        echo "Roll Number: " . $this->rollno . "<br>";
        echo "Marks: " . $this->marks . "<br>";
    }
}

// Creating object and passing values
$s1 = new Student("Aman", 102, 85);

// Calling method
$s1->display();
?>