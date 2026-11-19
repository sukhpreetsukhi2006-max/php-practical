<?php
// Student information
$student = array(
    "Roll_No" => 101,
    "Name" => "Rahul",
    "Age" => 20,
    "Course" => "BCA",
    "Marks" => 85
);

// Convert PHP array into JSON format
$jsonData = json_encode($student, JSON_PRETTY_PRINT);

// Store JSON data in a file
file_put_contents("student.json", $jsonData);

echo "Student information stored successfully!";
?>