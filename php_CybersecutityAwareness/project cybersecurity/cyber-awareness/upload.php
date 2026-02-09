<?php

if (isset($_FILES['uploaded_file'])) {

    $fileName = $_FILES['uploaded_file']['name'];
    $tempName = $_FILES['uploaded_file']['tmp_name'];
    $uploadDir = "uploads/";
    $filePath = $uploadDir . basename($fileName);

    if (move_uploaded_file($tempName, $filePath)) {
        echo "<h3> File Uploaded Successfully!</h3>";
        echo "<p>File Name: $fileName</p>";
        echo "<a href='download.php?file=$fileName'>
                <button>Download File</button>
              </a>";
    } else {
        echo " File upload failed!";
    }

} else {
    echo "No file selected!";
}
?>