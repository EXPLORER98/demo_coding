<html>
<title>Delete Page</title>

</html>
<?php

include("dbcon.php");
$id = $_GET['id'];


$query = "DELETE FROM movies where id = '$id'";
$data = mysqli_query($conn, $query);

if ($data) {
    echo "Record Deleted";
} else {
    echo "Failed to Delete";
}
?>