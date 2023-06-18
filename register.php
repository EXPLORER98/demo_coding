<!DOCTYPE html>

<html>

<head>
  <title>Signup Page</title>
  <link rel="stylesheet" href="loginstyle.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
</head>

<body>
  <div class="container">
    <div class="row">
      <?php
      include("dbcon.php");
      if (isset($_POST['signup'])) {
        extract($_POST);
        if ($cpassword == '') {
          $error[] = 'Please confirm the password';
        }
        if ($password != $cpassword) {
          $error[] = 'Password do not match';
        }
        if (strlen($password) < 5) {
          $error[] = 'Password must have minimum 6 characters!';
        }
        $sql = "select * from users where (email = '$email');";
        $res = mysqli_query($conn, $sql);
        if (mysqli_num_rows($res) > 0) {
          $row = mysqli_fetch_assoc($res);
          if ($email == $row['email']) {
            $error[] = 'Email already exists';
          }
        }

        if (!isset($error)) {
          $options = array("cost" => 4);
          $password = password_hash($password, PASSWORD_BCRYPT, $options);

          $result = mysqli_query($conn, "INSERT INTO users values('','$role','$email','$phone','$password')");

          if ($result) {
            $done = 2;
          } else {
            $error[] = 'Something went wrong';
          }

        }

      }
      ?>
      <div class="col-sm-4">

        <?php
        if (isset($error)) {
          foreach ($error as $error) {
            echo '<p class="errmsg" >&#x26A0;' . $error . '</p>';
          }
        }
        ?>

      </div>
      <div class="col-sm-4">
        <?php if (isset($done)) { ?>
          <div class="successmsg"><span style="font-size:100px;">&#9989;</span><br>
            You have registered successfully...<br><a href="login.php" style="color:#fff;">Login Here </a></div>
        <?php } else { ?>
          <div class="signup_form">
            <form action="" method="POST">

              <div class=" mb-3">
                <label for="exampleFormControlInput1" class="form-label">Role</label><br>

                <input type="radio" name="role" value="1">Admin
                <input type="radio" name="role" value="2">User
              </div>


              <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Email</label>
                <input type="email" class="form-control" name="email" id="exampleInputEmail1" aria-describedby="emailHelp"
                  required="">

              </div>
              <div class="mb-3">
                <label for="exampleInputPhone1" class="form-label">Phone</label>
                <input type="phone" class="form-control" name="phone" id="exampleInputPhone1" aria-describedby="emailHelp"
                  required="">

              </div>
              <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Password</label>
                <input type="password" class="form-control" name="password" id="exampleInputPassword1">
              </div>
              <div class="mb-3">
                <label for="exampleInputPassword2" class="form-label">Confirm Password</label>
                <input type="password" class="form-control" name="cpassword" id="exampleInputPassword2">
              </div>


              <button type="submit" name="signup" class="form_btn">Sign Up</button>
              <div class="reg">
                <p>Already have an account? <a href="login.php">Log in</a></p>
              </div>

            </form>
          <?php } ?>
        </div>
      </div>
    </div>
    <div class="col-sm-4">

    </div>
  </div>
  </div>
</body>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
  integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"
  integrity="sha384-fbbOQedDUMZZ5KreZpsbe1LCZPVmfTnH7ois6mU1QK+m14rQ1l2bGBq41eYeM/fS" crossorigin="anonymous"></script>

</html>