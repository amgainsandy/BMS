<?php

$email = $_POST['email'];
$password = $_POST['password'];

$servername = "localhost:3309"; // Update with your correct server name
$username = "root"; // Update with your correct username
$password_admin= ""; // Update with your correct password
$dbname = "budget"; // Update with your correct database name

$conn = mysqli_connect($servername, $username, $password_admin, $dbname);
if(!$conn){
    echo "Database connection error";
}

// $password = mysqli_real_escape_string($conn, $password);
$sql="select * from register where email='$email' and password='$password'";

 session_start();
 
$result= mysqli_query ($conn,$sql);
$rowUser= mysqli_fetch_assoc($result);
if(mysqli_num_rows($result)>=1){
    $_SESSION['Username'] = $rowUser['name'];
  
    header("Location:./Wms/user_dashboard.php");
}else{
    header("Location:frontpage.php");
//         exit();
}

// if ($result && mysqli_num_rows($result) > 0) {
//     // User authenticated successfully
//     // Set session variables or perform other actions as needed
//     $_SESSION['user_email'] = $email;

//     // Redirect to the user dashboard
//     header("Location: user_dashboard.html");
// } else {
//     // Invalid credentials
//     echo "Invalid email or password. Please try again.";
// }


//sachin comment
// if ($result) {
//     // Check if any matching record is found
//     if (mysqli_num_rows($result) > 0) {
//         // Valid login, navigate to userdashboard
//         // header("Location: user_dashboard.html");
//         include 'C:\xampp\htdocs\BMS\Wms\user_dashboard';
//         exit();
//     } else {
//         // Invalid login, redirect back to the login page with an error message
//         header("Location: frontpage.html");
//         exit();
//     }
// } else {
//     // Handle database query error
//     die("Database query failed: " . mysqli_error($your_db_connection));
// }





?>