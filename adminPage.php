<?php 
    session_start();
    if(!isset($_SESSION['AdminLoginID'])){
        header('Location: adminLogin.php');
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <?php
  include 'head.php';
  ?>
    <title>Admin Login Page</title>
    <style>
        .admin-page {
            margin: auto;
            text-align: center;
        }
        .button-logout{
            text-align: end;
            margin-right: 20px;
            margin-top: 20px;
        }

    </style>
</head>
<body class="bg-success bg-opacity-25">
<?php
  include 'navbar.php';
  ?>
    <div class="button-logout">
    <form method="POST">
            <button name="logout" class="btn btn-danger"> Log Out</button>
        </form>
    </div>
    <div class="admin-page">
        <h2>Admin Page  - <?php echo $_SESSION['AdminLoginID']?></h2>
        <p> Welcome to Admin Page here you can see all of the data in the tables! </p>
    </div>
    <div class="d-grid gap-3" style = "text-align:center;">
        <div>
            <a class="btn btn-primary" href="addProject.php" role="button">Add Project</a>
        </div>
        <div>
            <a class="btn btn-primary" href="visitors.php" role="button">Get List of Visitors who send mail</a>
        </div>
    </div>
    <?php 
        if(isset($_POST['logout']))
        {
            session_destroy();
            header("Location: adminLogin.php");
        }
    ?>
</body>
</html>