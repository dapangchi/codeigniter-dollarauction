<!DOCTYPE html>
<html lang="en">
<head>
<title>A PHP Error was encountered</title>
</head>
<body>
Severity: <?php echo $severity; ?><br>
Message:  <?php echo $message; ?><br>
Filename: <?php echo $filepath; ?><br>
Line Number: <?php echo $line; ?><br>

</body>
</html>

<?php //header('Location: ../index.php'); ?>