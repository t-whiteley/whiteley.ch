<?php

    session_start();

    include("../conn.php");

    if ($_SERVER["REQUEST_METHOD"] == "POST") {

        
        if ($_POST['action'] == 'login') {    
            
            $username = filter_input(INPUT_POST, "uname",FILTER_SANITIZE_SPECIAL_CHARS);
            $password = filter_input(INPUT_POST, "pword",FILTER_SANITIZE_SPECIAL_CHARS);
            $hash = password_hash($password, PASSWORD_DEFAULT);
            $sql = "SELECT * FROM admin_accounts WHERE uname = '$username'";
            $result = mysqli_query($conn, $sql);
            if (mysqli_num_rows($result) > 0) {
                $data = mysqli_fetch_assoc($result);
                if (password_verify($password, $data["pword"])) {
                    session_start();
                    $_SESSION['id'] = $username;
                    header("Location: dashboard.php");         
                }
                else header("Location: dashboard.php");
            }
        }



        else if ($_POST['action'] == 'logout') {
            session_unset();
            session_destroy();
        }


        else if ($_POST['action'] == 'blog') {
            $title = filter_input(INPUT_POST, "title", FILTER_SANITIZE_SPECIAL_CHARS);
            $body = filter_input(INPUT_POST, "body", FILTER_SANITIZE_SPECIAL_CHARS);
            $sql = "INSERT INTO `blog_posts` (`title`, `body`) VALUES ('{$title}', '{$body}');";
            mysqli_query($conn, $sql);
        }
    } 


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>


    <link rel="icon" href="/pics/favicon.png">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>


    <!-- NAVBAR -->
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container">
            <a class="navbar-brand" href="#"><img src="/pics/logo black.png" alt="tw_logo" style="width: 50px;"></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarText">
                <?php
                    if (isset($_SESSION['id'])) {
                        echo'<ul class="navbar-nav me-auto mb-2 mb-lg-0">';
                        echo    '<li class="nav-item px-4"><a class="nav-link active" aria-current="page" href="#">Dash</a></li>';
                        echo    '<li class="nav-item px-4"><a class="nav-link" href="#">Editor</a></li>';
                        echo    '<li class="nav-item px-4"><a class="nav-link" href="#">Links</a></li>';
                        echo'</ul>';
                        echo'<form class="d-flex" action="dashboard.php" method="post">';
                        echo    '<button class="btn btn-outline-danger" type="submit" name="action" value="logout">Logout</button>';
                        echo'</form>';
                    }
                    else {
                        echo'<ul class="navbar-nav me-auto mb-2 mb-lg-0"></ul>';
                        echo'<form class="d-flex" action="dashboard.php" method="post">';
                        echo    '<input class="form-control me-2" type="text" placeholder="Username" name="uname">';
                        echo    '<input class="form-control me-2" type="password" placeholder="Password" name="pword">';
                        echo    '<button class="btn btn-outline-danger" type="submit" name="action" value="login">Submit</button>';
                        echo'</form>';
                    }
                ?>
            </div>
        </div>
    </nav>
    




    <!-- BODY -->

    <div class="container mt-5">
        <?php
            if (isset($_SESSION['id'])) {
                include 'connected_content.html';
            }
            else {
                echo'<h5 class="text-center fw-light"><em>Unauthroised</em></h5>';
            }

        ?>
    </div>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>