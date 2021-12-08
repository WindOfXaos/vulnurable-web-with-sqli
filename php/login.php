<?php 

session_start(); 

include "db_conn.php";

// if (isset($_POST['uname']) && isset($_POST['password'])) {

//     function validate($data){

//        $data = trim($data);

//        $data = stripslashes($data);

//        $data = htmlspecialchars($data);

//        return $data;

//     }
    
    $username = $_POST['uname']; //validate removed

    $pass = $_POST['password']; //validate removed

    if (empty($username)) {

        header("Location: ../html/loginForm.php?error=User Name is required");

        exit();

    }else if(empty($pass)){

        header("Location: ../html/loginForm.php?error=Password is required");

        exit();

    }else{ 

        $sql = "SELECT * FROM users WHERE username='$username' AND password='$pass'"; // single quotes removed

        $result = mysqli_query($conn, $sql);

        // if (mysqli_num_rows($result) > 1) {
        //     header("Location: index.php");
        //     $row = mysqli_fetch_array($result);
        //     $_SESSION['rr'] = $row;
        // }
        if (mysqli_num_rows($result) === 1) {

            $row = mysqli_fetch_assoc($result);

            if ($row['username'] === $username && $row['password'] === $pass) {

                echo "Logged in!";

                $_SESSION['username'] = $row['username'];

                $_SESSION['id'] = $row['id'];

                $_SESSION['row'] = $row;

                header("Location: profile.php");
                // header("Location: ../html/index.html");

                exit();

            }else{

                header("Location: ../html/loginForm.php?error=Incorect User name or password");

                exit();

            }

        }else{

            // header("Location: ../html/loginForm.php?error=Incorect User name or password");
            header("Location: ../html/loginForm.php?error=More than one result");
            
            exit();

        }

    }

// }else{

//     header("Location: index.php");

//     exit();

// }