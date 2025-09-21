<?php
// Include database connection or any necessary includes
include 'admin/conn.php';

// Get store_id from the URL
$store_id = $_GET['store_id'];

// Fetch file details from the database
$query = "SELECT * FROM storage WHERE store_id = '$store_id'";
$result = mysqli_query($conn, $query);
$file = mysqli_fetch_assoc($result);

// Construct the file path (directly in the 'files' folder)
$file_path = 'files/' . $file['filename'];  // Updated to directly refer to 'files' folder

// Debugging: Print out the constructed file path
echo 'File Path: ' . $file_path;

// Check if the file exists
if (!file_exists($file_path)) {
    echo "File not found.";
    exit;
}

// Get the file extension
$file_extension = strtolower(pathinfo($file_path, PATHINFO_EXTENSION));
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View Uploaded File</title>
    <link rel="stylesheet" href="style1.css">
</head>
<body>
    <div class="container">
        <h1>View Uploaded File</h1>

        <?php
        // Display the file based on its type
        if ($file_extension == 'pdf') {
            // For PDF files, embed the PDF viewer
            echo '<embed src="' . $file_path . '" type="application/pdf" width="100%" height="600px">';
        } elseif (in_array($file_extension, ['jpg', 'jpeg', 'png', 'gif'])) {
            // For image files, display the image
            echo '<img src="' . $file_path . '" alt="Image" width="100%" />';
        } elseif (in_array($file_extension, ['mp3', 'wav', 'ogg'])) {
            // For audio files, embed the audio player
            echo '<audio controls>
                    <source src="' . $file_path . '" type="audio/' . $file_extension . '">
                    Your browser does not support the audio element.
                  </audio>';
        } elseif (in_array($file_extension, ['mp4', 'avi', 'mov'])) {
            // For video files, embed the video player
            echo '<video controls width="100%">
                    <source src="' . $file_path . '" type="video/' . $file_extension . '">
                    Your browser does not support the video tag.
                  </video>';
        } elseif (in_array($file_extension, ['doc', 'docx', 'xlsx', 'pptx'])) {
            // For Word, Excel, and PowerPoint files, embed using Google Docs Viewer
            $office_online_url = 'https://view.officeapps.live.com/op/embed.aspx?src=' . urlencode('http://' . $_SERVER['HTTP_HOST'] . '/' . $file_path);
            echo '<iframe src="' . $office_online_url . '" width="100%" height="600px"></iframe>';
        } else {
            // Handle unsupported file types
            echo "File type not supported for preview.";
        }
        ?>

        <br><br>
        <a href="student_profile.php" class="btn btn-primary">Back to Files</a>
    </div>
</body>
</html>
