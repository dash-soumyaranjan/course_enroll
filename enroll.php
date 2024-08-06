<?php
include 'db.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $student_id = $_POST['student_id'];
    $course_id = $_POST['course_id'];

    $sql = "INSERT INTO enrollments (student_id, course_id) VALUES ('$student_id', '$course_id')";

    if ($conn->query($sql) === TRUE) {
        echo "Enrollment successful. <a href='courses.html'>Back to Courses</a>";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}
?>
