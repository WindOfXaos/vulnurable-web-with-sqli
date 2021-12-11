
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="../css/background.css">
    <title>Login</title>
</head>

<body>
    <div class="row-cols-3 h-100" style="display: grid; place-items:center;">
        <form method="GET">
            <div class="mb-3">
                <label for="exampleInputaccountid1" class="form-label">AccountID</label>
                <input type="text" class="form-control" id="exampleInputaccountid1" name="accid">
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

<?php

include "auth.php";

include "db_conn.php";

if (isset($_GET['submit']) or (isset($_GET['accid']) and isset($_GET['accid']))) {

    $accountid = $_GET['accid'];

    $pass = $_GET['password'];

    if (!$accountid) {

        $message = "Account ID is required!";
        echo "\n <script>alert('$message');
        
        </script>";
    } else if (!$pass) {

        $message = "Pass is required!";
        echo "\n <script>alert('$message');

        </script>";
    } else {

        $sql = "SELECT * FROM users WHERE id=".$accountid." AND password=".$pass." "; // non string 

        $result = mysqli_query($conn, $sql);

        

        if (mysqli_num_rows($result) != 0) {
            
            $row = mysqli_fetch_assoc($result);

            echo "Logged in!";

            $_SESSION['accountid'] = $row['id'];

            $_SESSION['username'] = $row['username'];

            $_SESSION['password'] = $row['password'];

            $_SESSION['email'] = $row['email'];

            $_SESSION['salary'] = $row['salary'];
            
            header("Location: profile.php");

            exit();
        } else {

            $message = "Incorrect AccountID and Password";
            echo "\n <script>alert('$message');
            
            </script>";
            exit();
        }
    }
}

?>