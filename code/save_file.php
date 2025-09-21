<?php
    require_once 'admin/conn.php';

    if (isset($_POST['save'])) {
        // Retrieve form data
        $stud_no = $_POST['stud_no'];
        $file_name = $_FILES['file']['name'];
        $file_type = $_FILES['file']['type'];
        $file_temp = $_FILES['file']['tmp_name'];
        
        // Path where file should be saved (directly in the 'files' folder)
        $base_path = "files/";
        $location = $base_path . $file_name;  // Save directly to the 'files' folder with the original file name
        
        // Set the date for storage
        $date = date("Y-m-d, h:i A", strtotime("+8 HOURS"));

        // Create the 'files' directory if it doesn't exist
        if (!file_exists($base_path)) {
            mkdir($base_path, 0777, true); // Create the 'files' directory with write permissions
        }
        
        // Attempt to move the uploaded file to the target directory
        if (move_uploaded_file($file_temp, $location)) {
            // Insert file details into the database
            $query = "INSERT INTO storage (filename, file_type, date_uploaded, stud_no) VALUES ('$file_name', '$file_type', '$date', '$stud_no')";
            mysqli_query($conn, $query) or die(mysqli_error($conn));

            // Redirect to student profile
            header('Location: student_profile.php');
        } else {
            echo "Failed to upload the file. Please check directory permissions.";
        }
    }
?>
