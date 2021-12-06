    <!DOCTYPE html>
    <?php
    session_start();
    $row = $_SESSION['row'];
    $rr = $_SESSION['rr'];
    ?>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
        <style>
            body {
                background-image: url("../imgs/back.jpg");
                background-repeat: no-repeat;
                background-size: 110%;
                background-position: center;
                color: #000;
            }

            table,
            th,
            td {
                border: 1px solid black;
                width: 300px;
                padding: 15px;
                font-size:20px;
                font-weight:bold;
            }

            div {
                margin-top: 200px;
            }
        </style>
    </head>

    <body>
        <div style="display: flex; justify-content:center; align-items:center">
            <table>
                <caption>result of data base </caption>
                <thead>
                    <tr>
                        <td>ID</td>
                        <td>username</td>
                        <td>email</td>
                        <td>password</td>
                        <td>signing date</td>
                        <td>salary</td>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>
                            <?php
                            echo $row['id'];
                            ?>
                        </td>
                        <td>
                            <?php
                            echo $row['username'];
                            ?>
                        </td>
                        <td>
                            <?php
                            echo $row['email'];
                            ?>
                        </td>
                        <td>
                            <?php
                            echo $row['password'];
                            ?>
                        </td>
                        <td>
                            <?php
                            echo $row['trn_date'];
                            ?>
                        </td>
                        <td>
                            <?php
                            echo $row['salary'];
                            ?>
                        </td>
                    </tr>
                </tbody>
            </table>
            <?php
                echo implode(" ", $rr);
                ?>
        </div>
    </body>

    </html>