<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
?>

<?php
include 'config.php';

$id = $_GET['id'];
$sql = "SELECT id, Name, vio, sem, branch FROM registeri WHERE id=$id";
$result = $conn->query($sql);
$row = $result->fetch_assoc();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View</title>
    <link rel="stylesheet" href="read.css">
</head>
<body>
<div class="container">
	<div class="rate">
   
</div>
<h2 class="title-card">Selected Game</h2>
<p>ID: <?php echo $row['id']; ?></p>
    <p>Name: <?php echo $row['Name']; ?></p>
    <p>Violation: <?php echo $row['vio']; ?></p>
    <p>Semester: <?php echo $row['sem']; ?></p>
    <p>Branch: <?php echo $row['branch']; ?></p>
	<a href="info.php"><button href="info.php">Back</button></a>
	
</div>
</body>
</html>