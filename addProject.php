<?php

session_start();
if(!isset($_SESSION['AdminLoginID'])){
    header('Location: adminLogin.php');
}

include 'dbconnect.php';
if(isset($_POST['submit']))
{
	//Project information
	$projTitle=$_POST['projTitle'];
	$projDescription=$_POST['projDescription'];
	$sql=mysqli_query($conn,"INSERT INTO projects(projTitle, projDescription) VALUES('$projTitle','$projDescription');");
	if($sql)
	{
		echo '<script>alert("Project added successfully")</script>';
	}
	else
	{
		echo '<script>alert("Error adding the project")</script>';
	}
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <?php
    include 'head.php';
    ?>
    <title>Project adding page</title>
</head>

<body style="text-align:center;" class="bg-success bg-opacity-25">
    <?php
    include 'navbar.php';
    ?>
    <h1 style="color:green;">
        Add Project to the list
    </h1>

    <div class="mb-3">
        <form id="project-form" method="post">
            <label for="projTitle">Project Title:</label>
            <input type="text" id="projTitle" name="projTitle"><br><br>
            <div class="form-floating">
                <textarea id="projDescription" name="projDescription" rows="5" cols="33">Description:</textarea><br><br>
                If adding an apostrophe, make it a double to surpass a SQL syntax error.
            </div>
            <input type="submit" name="submit" class="btn btn-success" value="Submit" /><br><br>
        </form>
        <a class="btn btn-danger" href="adminPage.php" role="button">Back to Admin Page</a>
    </div>
</body>

</html>