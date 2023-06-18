<?php
include 'dbcon.php';
if (isset($_POST['sublogin'])) {
  $login = $_POST['login_var'];
  $password = $_POST['password'];

  $query = "select * from users where(email='$login')";
  $res = mysqli_query($conn, $query);
  $numRows = mysqli_num_rows($res);
  if ($numRows) {
    $row = mysqli_fetch_assoc($res);
    if (password_verify($password, $row['password'])) {
      $_SESSION["login_sess"] = "1";
      $_SESSION["login_email"] = $row['email'];
      if ($row['role'] == 2) {
        header("location:user.php");
      }
      if ($row['role'] == 1) {
        header("location:movie_details.php");
      }
    } else {
      header("location:login.php?loginerror=" . $login);
    }
  } else {
    header("location:login.php?loginerror=" . $login);
  }
}
?>