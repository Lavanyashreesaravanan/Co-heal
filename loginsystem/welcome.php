<?php
session_start();

if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin']!=true){
    header("location: login.php");
    exit;
}

?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <style>
      a:link {
        text-decoration: none;
        
        color: #0D41E1;      }
    </style>
    <title>Welcome - <?php $_SESSION['username']?></title>
  </head>


  <body>
    <?php 
    require_once(realpath($_SERVER["DOCUMENT_ROOT"]).'\co-heal\loginsystem\welcome.php');
    ?>
    
    
      
    <div class="container my-3">
    <div class="alert alert-success" role="alert">
      <h4 class="alert-heading">Welcome - <?php echo $_SESSION['username']?></h4>
      <p>Hey how are you doing? Welcome to Co-heal. You are logged in as <?php echo $_SESSION['username']?>.</p>
      <hr>
      <p class="mb-0">If you want to logout <a href="/co-heal/loginsystem/logout.php"> use this link.</a></p><br>
      <p class="mb-0">Choose your access:</p>
      <p class="mb-0"><a href="/co-heal/table/index.php">Self-Monitoring</a><br>
                        <a href="/co-heal/home/medication.html">Medications</a><br>
                        <a href="/co-heal/home/rules.html">Rules</a></p>
    </div>
  </div>



    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </body>
</html>