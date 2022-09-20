<?php

    //starting a session
    session_start();

    //checking if a isLoggedIn session element is set
   $session = isset($_SESSION['isLoggedIn']);
   if(!$session)
   {
        header('location:./index.php');
   }
   
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Content</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">

</head>
<body>
    <!-- navbar -->
    <nav class="nav justify-content-center p-3">
        <a class="nav-link" href="#">Home</a>
        <a class="nav-link" href="#">Mails</a>
        <a class="nav-link" href="#">Request</a>
        <a class="nav-link" href="#">Tasks</a>
    </nav>

    <?php echo "<h1> Hi ". $_SESSION['name']."</h1>" ?>
    
    <div class="btn-wrap mt-5 p-5">
        <form action="./logout.php" method="POST">
            <button type="submit" class="btn btn-danger">LOGOUT</button>
        </form>
    </div>
</body>
</html>

<?php 
?>