<?php
$target_dir = "/var/www/html/uploads/";
if (!is_dir($target_dir)) {
    mkdir($target_dir, 0755, true);
}
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_FILES['image'])) {
    $temp_name = $_FILES['image']['tmp_name'];
    $target_file = $target_dir . "photo.jpg";
    if (move_uploaded_file($temp_name, $target_file)) {
        echo "OK";
    } else {
        echo "Error saving file.";
    }
} else {
    echo "No image received.";
}
?>
