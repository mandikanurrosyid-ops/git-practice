<?php
if(isset($_POST['register'])){
  $username = $_POST['username'];
  $password = $_POST['password'];

  $file = "data/users.txt";

  $data = $username . "|" . $password . PHP_EOL;

  file_put_contents(
    $file,
    $data,
    FILE_APPEND
  );
  $sukses = "Register berhasil";
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <title>Register - Foodie</title>

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="Css/register.css">
</head>
<body>

<div class="box">

  <h2 class="title">Register Foodie</h2>

  <!-- FORM -->
  <form method="POST">

    <div class="mb-3">

      <label>Username</label>

      <input 
        type="text"
        name="username"
        class="form-control"
        required>

    </div>

    <div class="mb-3">

      <label>Password</label>

      <input 
        type="password"
        name="password"
        class="form-control"
        required>

    </div> 

    <!-- TOMBOL -->
    <button type="submit" name="register" class="btn-register">
      Register
    </button>

    <p class="text-center mt-3">
      Sudah punya akun?
      <a href="login.php">Login</a>
    </p>

  </form>
  <?php
   if(isset($sukses)){

    echo "
    <div class='alert alert-success mt-3'>
      $sukses
    </div>";

}

?>

  <hr>

  <!-- TABEL -->
  <table class="table table-bordered mt-4">

    <thead>

      <tr>
        <th>Username</th>
        <th>Password</th>
      </tr>

    </thead>

   <tbody>

      <?php

      $file = "data/users.txt";

      if(file_exists($file)){

          $users = file(
              $file,
              FILE_IGNORE_NEW_LINES
          );

          foreach($users as $user){

              list($username,$password)
              = explode("|",$user);

              echo "
              <tr>

                <td>$username</td>

                <td>"
                . str_repeat("*",strlen($password))
                . "</td>

              </tr>";
          }

      }

      ?>

      </tbody>
  </table>

</div>


</body>
</html>