<?php
include "auth.php";

if (empty($_SESSION['username'])){
    $message = "Log in is required!";
        echo "\n <script>alert('$message');
        window.location.href='login.php';
        </script>";
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="../css/background.css">
</head>

<body>
    <div style="display: grid; place-items: center; height: 100%;">
        <table class="table table-light table-hover table-responsive w-50">
            <thead class="table-dark">
                <tr>
                    <th scope="col">Account ID</th>
                    <th scope="col">Username</th>
                    <th scope="col">Email</th>
                    <th scope="col">Password</th>
                    <th scope="col">Salary</th>
                </tr>
            </thead>
            <tbody>
                <?php
                // while ($row = mysqli_fetch_assoc($result)) {
            
                    echo "<tr class='light'>
                            <td>" . $_SESSION['accountid'] . "</td>
                            <td>" . $_SESSION['username'] . "</td>
                            <td>" . $_SESSION['email'] . "</td>
                            <td>" . $_SESSION['password'] . "</td>
                            <td>" . $_SESSION['salary'] . "</td>
                        </tr>";
                // }
                ?>
            </tbody>
        </table>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>

</html>