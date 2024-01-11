<!-- ini adalah code php yang berisikan dimana ketika kita login di cek apakah user dan passwornya benar jika benar maka lokasinya akan pindah redirect ke index.php/halaman utama -->
<?php
    session_start();
    if (isset($_POST["btnLogin"])){
        $username=$_POST["username"];
        // print_r($username);
        $password=$_POST["password"];
        // print_r($password);

        if ($username=="admin" && $password=="admin"){
            echo ("login success");
            $_SESSION["username"] = $username;
            header("Location: index.php");
            exit();
            
        }else {
            echo ("login error");
        }
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tunas Sekar</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

    <!-- link css -->
    <!-- <link rel="stylesheet" href="style/style.css"> -->
    <link rel="stylesheet" href="style/responsive.css">


    <!-- fonts google -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;700&display=swap" rel="stylesheet">

    <!-- logo title bar -->
    <link rel="icon" href="assets/logotunassekar.png" type="image/x-icon">
</head>
<body>
    <Style>
        :root {
            --primary-color : #048853;
}

        body {
            background-image: url(assets/backgound.png);
            font-family: 'Poppins', sans-serif;
        }

        .card {
            padding: 20px;
            margin-top: 120px;
        }

        .btn {
            background: var(--primary-color);
            color: white;
        }
    </Style>
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-body">
                        <h2 class="card-title text-center">Login</h2>
                        <form method="POST" action="login.php" id="login-form">
                            <div class="mb-3">
                                <label for="username" class="form-label">Username:</label>
                                <input type="text" class="form-control" id="username" name="username" required>
                            </div>

                            <div class="mb-3">
                                <label for="password" class="form-label">Password:</label>
                                <input type="password" class="form-control" id="password" name="password" required>
                            </div>
                            <input type="submit" name="btnLogin" value="submit">    
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="../style/script.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</body>
</html>


