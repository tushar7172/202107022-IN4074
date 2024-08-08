<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
?>

<?php
include 'config.php';

$sql = "SELECT id, name, vio, sem, branch FROM registeri";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>info</title>
    <link rel="stylesheet" href="info.css">
</head>
<body>
<section>
  <!--for demo wrap-->
  <h1>List of Student</h1>
  <div class="tbl-header">
    <table cellpadding="0" cellspacing="0" border="0">
      <thead>
        <tr>
            <th>ID</th>
            <th>NAME</th>
            <th>SEMESTER</th>
            <th>BRANCH</th>
            <th>VIOLATION TYPE</th>
            <th>Actions</th>
        </tr>
      </thead>
    </table>
  </div>
  <div class="tbl-content">
    <table cellpadding="0" cellspacing="0" border="0">
      <tbody>
      <?php
    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            echo "<tr>
                    <td>{$row['id']}</td>
                    <td>{$row['name']}</td>
                    <td>{$row['sem']}</td>
                    <td>{$row['branch']}</td>
                    <td>{$row['vio']}</td>
                    <td>
                        <a href='read.php?id={$row['id']}'>View</a> | 
                        <a href='update.php?id={$row['id']}'>Edit</a> | 
                        <a href='delete.php?id={$row['id']}'>Delete</a>
                    </td>
                </tr>";
        }
    } else {
        echo "<tr><td colspan='5'>No records found</td></tr>";
    }
    ?>
      </tbody>
    </table>
  </div>
  <a href="./index.php">Add New Game</a>
<a href="./index.php">Back to Home</a>
</section>
</body>
</html>