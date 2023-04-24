<?php
include 'dbconnect.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <?php
    include 'head.php';
    ?>
    <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
    <title>Admin Login Page</title>
    <style>
        .card-header{
            font-size: 22px;
        }
        .login-form {
            margin-left: 20px;
            padding: 10px;
        }

        .input-field {
            margin-bottom: 3px;
            font-size: 20px;
        }
        .card{
            margin: auto;
            margin-top: 15px;
            text-align: center;
        }
    </style>
</head>

<body class="bg-success bg-opacity-25">
    <?php
    include 'navbar.php';
    ?>
    <div class="card text-bg-secondary mb-3" style="max-width: 20rem;">
        <div class="card-header">Admin Login Panel</div>
        <div class="card-body"> 
        <form method="POST">
            <div class="input-field">
                <i class="fas fa-user"></i>
                <input type="text" placeholder="Admin username" name="AdminUsername">
            </div>
            <div class="input-field">
                <i class='fas fa-lock'></i>
                <input type="password" placeholder="Password" name="AdminPassword">
            </div>

            <button type="Submit" name="login" id="button" class="btn btn-success"> Login</button>

        </form>
        </div>
    </div>




    <?php
    if (isset($_POST['login'])) {
        $query = "SELECT * FROM `admin` WHERE `Admin_Username` = '$_POST[AdminUsername]' AND `Admin_Password` = '$_POST[AdminPassword]'";
        $result = mysqli_query($conn, $query);
        if (mysqli_num_rows($result) == 1) {
            session_start();
            $_SESSION['AdminLoginID'] = $_POST['AdminUsername'];
            header("Location: adminPage.php");
        } else {
            echo '<script> alert("Wrong login credentials")</script>';
        }
    }
    ?>
</body>

</html>