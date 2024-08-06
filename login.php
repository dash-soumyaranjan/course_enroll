<?php
include 'db.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['email'];
    $password = $_POST['password'];

    $sql = "SELECT * FROM students WHERE email='$email'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        if (password_verify($password, $row['password'])) {
            echo "Login successful. <a href='courses.html'>View Courses</a>";
        } else {
            echo "Invalid credentials. <a href='login.html'>Try again</a>";
        }
    } else {
        echo "No user found. <a href='register.html'>Register here</a>";
    }
}
?>
