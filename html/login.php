<?php

session_start();

include "db_conn.php";


if (isset($_POST['submit'])) {

    $username = $_POST['uname'];
    
    $pass = $_POST['password'];

    if (empty($username)) {
        
        header("Location: login.php?error=User Name is required");

        exit();
    } else if (empty($pass)) {

        header("Location: login.php?error=Password is required");

        exit();
    } else {

        $sql = "SELECT * FROM users WHERE username='$username' AND password='$pass'"; // single quotes removed

        $result = mysqli_query($conn, $sql);

        $_SESSION['sql'] = $sql;

        if (mysqli_num_rows($result) != 0) {
            
            $row = mysqli_fetch_assoc($result);

            echo "Logged in!";

            $_SESSION['username'] = $row['username'];

            $_SESSION['id'] = $row['id'];

            header("Location: profile.php");

            exit();

        } else {

            header("Location: login.php?error=Incorect User name or password");

            exit();

        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="../css/background.css">

    <title></title>
</head>
<body>
    <div class="row-cols-3 h-100" style="display: grid; place-items:center;">
        <form method="POST">
            <div class="mb-3">
                <label for="exampleInputUsername1" class="form-label">Username</label>
                <input type="text" class="form-control" id="exampleInputUsername1" name="uname">
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Password</label>
                <input type="password" class="form-control" id="exampleInputPassword1" name="password">
            </div>
            <button type="submit" class="btn btn-dark" name="submit">Submit</button>
        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>