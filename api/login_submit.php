<!-- we need session_start() function to establish connection -->
<?php
session_start();
require("../includes/database_connect.php");

// taking data user entered
$email = $_POST['email'];
$password = $_POST['password'];
$password = sha1($password);
// getting email and passwords from users table
$sql = "SELECT * FROM users WHERE email='$email' AND password='$password'";
$result = mysqli_query($conn, $sql);
if (!$result) {
    echo "Something went wrong!";
	exit;
}
// checking if user exist
$row_count = mysqli_num_rows($result);
if ($row_count == 0) {
    echo "Login failed! Invalid email or password.";
	exit;
}
// else we fetch user data
$row = mysqli_fetch_assoc($result);
$_SESSION['user_id'] = $row['id'];
$_SESSION['full_name'] = $row['full_name'];
$_SESSION['email'] = $row['email'];

header("location: ../index.php");
mysqli_close($conn);
