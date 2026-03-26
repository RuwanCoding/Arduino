<?php
$filename = "/var/www/html/uploads/photo.jpg";
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title>ESP32 Cam</title>
  <meta http-equiv="refresh" content="60">
</head>
<body>
  <h1>ESP32 web cam project</h1>
  <?php if (file_exists($filename)): ?>
    <img src="/uploads/photo.jpg?v=<?php echo filemtime($filename); ?>" alt="ESP32 Photo">
  <?php else: ?>
    <p>No image uploaded yet.</p>
  <?php endif; ?>
</body>
</html>
