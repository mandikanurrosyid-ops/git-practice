<?php

session_start();

if(isset($_POST['login'])){

    $username = $_POST['username'];
    $password = $_POST['password'];

    $users = file(
        "data/users.txt",
        FILE_IGNORE_NEW_LINES
    );

    $loginBerhasil = false;

    foreach($users as $user){

        list($u,$p) = explode("|",$user);

        if(
            $username == $u &&
            $password == $p
        ){

            $_SESSION['login'] = true;

            $loginBerhasil = true;

            header("Location: foodie.php");

            exit();
        }
    }

    if(!$loginBerhasil){
        $error = "Username atau Password Salah!";
    }

}

?>

<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <title>Login - Foodie</title>

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="Css/login.css">
</head>
<body>

  <div class="login-box">

    <h2 class="title">Login Foodie</h2>

    <!-- FORM LOGIN -->
     <div onsubmit="loginBox">
     <form method="POST">

      <div class="mb-3">

        <label>Username</label>
                    
        <input
        type="text"
        name="username"
        class="form-control"
        placeholder="Masukan Username"
        required>
      </div>

      <div class="mb-3">

        <label>Password</label>

        <input 
          type="password"
          name="password"
          class="form-control"
          placeholder="Masukan Password"
          required>

      </div>

      <button type="submit" name="login" class="btn-login">
        Login
      </button>

    </form>
<?php

if(isset($error)){

    echo "
    <div class='alert alert-danger mt-3'>
        $error
    </div>";

}

?>

    <!-- BUTTON PINDAH -->
<p class="text-center mt-3">
  Belum punya akun?
  <a href="Register.php">Register</a>
</p>

</div>
    <p id="pesan"></p>

  </div>


</body>
</html>