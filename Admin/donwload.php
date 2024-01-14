<?php
if (isset($_REQUEST["file"])) {
    // Get the filename from the request and sanitize it
    $file = basename($_REQUEST["file"]);
    $filepath = "../Upload/File/" . $file;

    // Check if the file exists
    if (file_exists($filepath)) {
        // Set headers to force download
        header("Pragma: public");
        header("Expires: 0");
        header("Cache-Control: must-revalidate, post-check=0, pre-check=0");
        header("Cache-Control: public");
        header("Content-Description: File Transfer");
        header("Content-Type: application/octet-stream"); // Use generic binary MIME type
        header("Content-Disposition: attachment; filename=$file");
        header("Content-Transfer-Encoding: binary");
        header("Content-Length: " . filesize($filepath));

        // Clear output buffer before sending file
        ob_clean();

        // Read and output the file content
        readfile($filepath);
        exit;
    } else {
        // File not found, handle accordingly (e.g., redirect to an error page)
        echo "File not found";
    }
}
?>
