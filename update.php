<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
?>

<?php
include 'config.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id = $_POST['id'];
    $name = $_POST['name'];
    $vio = $_POST['vio'];
    $sem = $_POST['sem'];
    $branch = $_POST['branch'];

    $sql = "UPDATE registeri SET name='$name', vio='$vio', sem='$sem', branch='$branch' WHERE id=$id";

    if ($conn->query($sql) === TRUE) {
        header("Location: info.php");
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

$id = $_GET['id'];
$sql = "SELECT id, name, vio, sem, branch FROM registeri WHERE id=$id";
$result = $conn->query($sql);
$row = $result->fetch_assoc();
?>

<!DOCTYPE html>
<html>
  <head>
    <title>Registration Form</title>
    <link rel="stylesheet" type="text/css" href="update.css">
  </head>
  <body>
  <div class="background">
    <div class="form-wrapper">
        <h2>Update Changes</h2>
        <form method="post" action="update.php" class="form-container">
          <div class="form-group">
            <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
          </div>
            <div class="form-group">
                <label for="name">Name:</label>
                <input type="text" name="name" value="<?php echo $row['name']; ?>" required>
            </div>
            <div class="form-group">
                <label for="sem">Semester:</label>
                <input type="text" name="sem" value="<?php echo $row['sem']; ?>" required>
            </div>
            <div class="form-group">
                <label for="branch">Branch:</label>
                <input type="text" name="branch" value="<?php echo $row['branch']; ?>" required>
            </div>
            <div class="form-group">
                <label for="vio">Violation:</label>
                <input type="text" name="vio" value="<?php echo $row['vio']; ?>" required>
            </div>
            <button type="submit" value="Update">Submit</button>
        </form>
    </div>
</div>
<script>
        $('#name').addClass('animated tada');
    </script>
  </body>
</html>
