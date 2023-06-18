<html>

<head>
  <title>Login Page</title>
  <link rel="stylesheet" href="loginstyle.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
</head>

<body>
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container-fluid">
      <a class="navbar-brand" href="home.php">Home</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">

        </ul>

      </div>
    </div>
  </nav>
  <div class="container">
    <div class="row">
      <div class="col-sm-4">

      </div>
      <div class="col-sm-4">
        <div class="login_form">
          <?php
          if (isset($_GET['loginerror'])) {
            $loginerror = $_GET['loginerror'];
          }
          if (!empty($loginerror)) {
            echo '<p class="errmsg">Invalid login credentials, Please Try again..</p>';
          }
          ?>
          <form action="login_process.php" method="POST">
            <div>
              <h2>Login Form</h2>
            </div>
            <div class="mb-3">
              <label for="exampleInputEmail1" class="form-label">Email</label>
              <input type="email" class="form-control" name="login_var" value="<?php if (!empty($loginerror)) {
                echo $loginerror;
              } ?> " id="exampleInputEmail1" aria-describedby="emailHelp">

            </div>
            <div class="mb-3">
              <label for="exampleInputPassword1" class="form-label">Password</label>
              <input type="password" class="form-control" name="password" id="exampleInputPassword1">
            </div>

            <button type="submit" class="form_btn" name="sublogin">Login</button>
            <div class="reg">
              <p>Don't have an account? <a href="register.php">Sign up </a></p>
            </div>
          </form>
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