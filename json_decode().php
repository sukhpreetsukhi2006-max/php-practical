        <?php
// Read data from JSON file
$jsonData = file_get_contents("student.json");

// Convert JSON data into PHP object
$student = json_decode($jsonData);

// Display student information
echo "Student Information<br>";
echo "Roll No: " . $student->Roll_No . "<br>";
echo "Name: " . $student->Name . "<br>";
echo "Age: " . $student->Age . "<br>";
echo "Course: " . $student->Course . "<br>";
echo "Marks: " . $student->Marks . "<br>";
?>