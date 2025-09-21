<?php
// Include your database connection
include 'admin/conn.php'; // Adjust the path as needed

// Get the password entered by the user
$password = isset($_POST['password']) ? $_POST['password'] : '';

// Check if the password is not empty
if (!empty($password)) {
    // Assuming you have a 'users' table with columns 'username' and 'password'
    // Replace 'username' with the actual column you want to use to identify the user
    // You might want to fetch the user information based on the session or other logic
    
    // Assuming the current user is logged in (you may need to use session data)
    $stud_no = $_SESSION['student'];  // Replace with actual logged-in user ID or session value

    // Query to fetch the password from the database for the given student number
    $query = mysqli_query($conn, "SELECT password FROM users WHERE stud_no = '$stud_no'");
    if ($query) {
        $user = mysqli_fetch_assoc($query);
        
        // Compare the entered password with the stored password
        if (password_verify($password, $user['password'])) {
            // If the password matches, return 'success'
            echo "success";
        } else {
            // If the password doesn't match, return 'failure'
            echo "failure";
        }
    } else {
        echo "failure";
    }
} else {
    echo "failure";
}
?>
