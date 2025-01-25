<?php
include "./db.php";

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $id     = intval($_POST['id']);
    $result = $conn->query("select image_path from photos where id=$id");
    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        unlink($row['image_path']);
    }
    $conn->query("delete from photos where id=$id");

    header("Location: index.php");
    exit;
}
?>