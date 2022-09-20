<?php
    include('./db_config.php');
    
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LOGIN</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <style>
        .d-flex{
            background-color: rgba(0,0,255,0.6);
            height:100vh;
        }
        .container{
            background-color: white;
            
            border-radius: 15px;
            width:40%;
            height:50%;
        }
        .btn-wrap{
            position:relative;
        }
        
        button{
            position: absolute;
            right:10px;
        }
    </style>
</head>
<body>
    <div class="d-flex justify-content-center align-items-center">
        
        <div class="container p-5 ">
            <h2 class="mb-3">LOGIN</h2>
            <hr>
            <form action="./login_auth.php" method="POST">
                <div class="mb-3">
                    <label for="usrname" class="form-label">Username</label>
                    <input type="text" name="username" id="usrname" class="form-control">
                </div>
                <div class="mb-3">
                    <label for="psw" class="form-label">Password</label>
                    <input type="password" name="password" id="psw" class="form-control">
                </div>
                <div class="btn-wrap">
                    <button type="submit" class="btn btn-primary">LOGIN</button>
                </div>
            </form>
        </div>
    </div>
</body>
</html>