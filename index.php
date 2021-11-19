<?php 

    // cek apakah tombol sumbit sudah ditekan atau belum
    if( isset($_POST["submit"]) ) {

        // cek username & password
        if( $_POST["username"] == "keket" && $_POST["password"] == "1234567890") {

        // jika benar, redirect ke halaman admin
            header("Location: keket.php");
            exit;
        }

        // jika salah, tampilkan pesan kesalahan
        else{
            $error = true;
        }
    }

?>


<!DOCTYPE html>

<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Halaman Login</title>

</head>

<body>

    <h1>Login KotKit</h1>

    <?php if( isset($error) ) : ?>
        <p style="color: red; font-style: italic;">username / password salah!</p>
    <?php endif; ?>

    <ul>

        <form action="" method="post">

            <li>

                <label for="username">Username :</label>
                <input type="text" name="username" id="username">

                <br>

                <label for="password">Password :</label>
                <input type="password" name="password" id="password">

            </li>

            <button type="submit" name="submit">Login</button:type>

        </form>

    </ul>

</body>

</html>