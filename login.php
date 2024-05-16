<?php
@ob_start();
session_start();
if (isset($_POST['proses'])) {
    require 'config.php';

    $user = strip_tags($_POST['user']);
    $pass = strip_tags($_POST['pass']);

    $sql = 'SELECT member.*, login.user, login.pass
            FROM member 
            INNER JOIN login ON member.id_member = login.id_member
            WHERE user = ? AND pass = MD5(?)';
    $stmt = $config->prepare($sql);
    $stmt->execute([$user, $pass]);
    $rowCount = $stmt->rowCount();

    if ($rowCount > 0) {
        $result = $stmt->fetch();
        $_SESSION['admin'] = $result;
        echo '<script>alert("Selamat, Anda berhasil login");window.location="index.php";</script>';
    } else {
        echo '<script>alert("Login Gagal");history.go(-1);</script>';
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Dashboard">
    <meta name="keyword" content="">

    <title>Login To Admin</title>

    <!-- Bootstrap core CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <!-- External CSS -->
    <link href="assets/font-awesome/css/font-awesome.css" rel="stylesheet" />

</head>
<body class="bg-primary d-flex justify-content-center align-items-center" style="height: 100vh">
    <div class="container">
        <div class="col d-flex justify-content-center align-items-center">
            <div class="card shadow p-4 text-center" style="width: 25rem;">
                <form class="form-login" method="POST">
                    <h2 class="form-login-heading mb-4">
                       <span><b>TECKO LASER</b></span><br>
                       <span class="fs-5">Masukkan Username dan Password</span>
                    </h2>
                    <div class="login-wrap">
                        <input type="text" class="form-control" name="user" placeholder="Username" autofocus required>
                        <br>
                        <input type="password" class="form-control" name="pass" placeholder="Password" required>
                        <br>
                        <button class="btn btn-primary w-100" name="proses" type="submit">
                            <i class="fa fa-lock"></i> SIGN IN
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- JS placed at the end of the document so the pages load faster -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
