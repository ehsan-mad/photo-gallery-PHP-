<?php
include "./db.php";

if ($_SERVER['REQUEST_METHOD'] === "POST") {
    $title = $_POST['title'];
    $image = $_FILES['image'];

    if (isset($image['name']) && $image['tmp_name'] !== "") {
        $upload   = 'uploads/';
        $filepath = $upload . basename($image['name']);
//echo $filepath;
    }
    if (move_uploaded_file($image['tmp_name'], $filepath)) {
        $conn->query("insert into photos(title , image_path) values('$title','$filepath')");
        header("location: index.php");
        exit;
    } else {
        echo "File upload Failed.";
    }
} else {
    echo "Select to upload Image";
}
