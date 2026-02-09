<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Cybersecurity Awareness - File Upload</title>
</head>
<body>

    <h2> Cybersecurity Awareness File Upload</h2>
    <p>Upload security guidelines, awareness PDFs, or reports.</p>

    <form action="upload.php" method="POST" enctype="multipart/form-data">
        <input type="file" name="uploaded_file" required>
        <br><br>
        <button type="submit">Upload File</button>
    </form>

</body>
</html>