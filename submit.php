<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get data from the POST request
    $fullName = htmlspecialchars($_POST['fullName']);
    $studentId = htmlspecialchars($_POST['studentId']);
    $dob = htmlspecialchars($_POST['dob']);
    $grade = htmlspecialchars($_POST['grade']);
    $parentName = htmlspecialchars($_POST['parentName']);
    
    // Display the submitted data
    echo "<h2>Registration Successful!</h2>";
    echo "<p><strong>Full Name:</strong> " . $fullName . "</p>";
    echo "<p><strong>Student ID:</strong> " . $studentId . "</p>";
    echo "<p><strong>Date of Birth:</strong> " . $dob . "</p>";
    echo "<p><strong>Grade:</strong> " . $grade . "</p>";
    echo "<p><strong>Parent Name:</strong> " . $parentName . "</p>";
}
?>
