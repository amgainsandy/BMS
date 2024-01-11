<?php
if(isset($_POST['submit'])){
    // Get user input
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone_no = $_POST['phone_no'];
    $password = $_POST['password'];
    
    // Validate input (you may want to add more validation)
    if(empty($name) || empty($email) || empty($phone_no) || empty($password)){
        echo "All fields are required.";
    } else {
        $servername = "localhost:3309"; // Update with your correct server name
        $username = "root"; // Update with your correct username
        $password_admin= ""; // Update with your correct password
        $dbname = "budget"; // Update with your correct database name
        

        $conn = mysqli_connect($servername, $username, $password_admin, $dbname);


        // Check connection
//         if ($conn->connect_error) {
//             die("Connection failed: " . $conn->connect_error);
//         }

//         echo $name;

//         // Insert user data into the database
        $sql = "INSERT INTO register (name, email, phone_no, password) VALUES ('$name', '$email', '$phone_no', '$password')";

// if ($conn->connect_error) {
//     die("Connection failed: " . $conn->connect_error);
// }
$insert= mysqli_query ($conn,$sql);
if(!$insert){
    echo "data not inserted";
}
else{
    header("Location: frontpage.html");
}

}
}
?>