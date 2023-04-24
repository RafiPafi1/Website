<?php
session_start();
if(!isset($_SESSION['AdminLoginID'])){
    header('Location: adminLogin.php');
}

include 'dbconnect.php';
if(isset($_POST['submit']))
{
	//Select command
    $sql = "SELECT * FROM visitors";
	$result = mysqli_query($conn,$sql);
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <?php
    include 'head.php';
    ?>
    <title>Select from visitors list</title>
</head>

<body style="text-align:center;" class="bg-success bg-opacity-25">
    <?php
    include 'navbar.php';
    ?>
    <h1 style="color:green;">
        Get a list of visitors who sent email
    </h1>

    <div class="mb-3">
        <form id="project-form" method="post">
            <input type="submit" name="submit" class="btn btn-success" value="Get List" /><br><br>
        </form>
        <a class="btn btn-danger" href="adminPage.php" role="button">Back to Admin Page</a>
    </div>
    <?php
    if(isset($_POST['submit'])){
    while ($visitors = mysqli_fetch_array($result,MYSQLI_ASSOC)) :;?>
                <p><?php echo "Name: ", $visitors['name'], " Email: " ,$visitors['email'], " Subject: " ,$visitors['subject'], " Message: " ,$visitors['message'];?></p> 
            <?php
            endwhile;}
            ?>
            

</body>

</html>