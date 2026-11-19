
<?php
if (isset($_POST['submit'])) {

    $name = trim($_POST['name']);
    $feedback = trim($_POST['feedback']);

    if ($name != "" && $feedback != "") {

        $data = "Name: " . $name .
                "\nFeedback: " . $feedback .
                "\n--------------------\n";

        file_put_contents(
            "feedback.txt",
            $data,
            FILE_APPEND | LOCK_EX
        );

        echo "Feedback submitted successfully!";
    } else {
        echo "Please fill all fields.";
    }
}
?>

<html>
<head>
    <title>Feedback Form</title>
</head>
<body>

<h2>Feedback Form</h2>

<form method="POST">
    Name:<br>
    <input type="text" name="name" required>
    <br><br>

    Feedback:<br>
    <textarea name="feedback" required></textarea>
    <br><br>

    <input type="submit" name="submit"
           value="Submit Feedback">
</form>

</body>
</html>
