<?php 
include 'dbConnect.php';
$sql = "SELECT * FROM `projects`";
$all_projects = mysqli_query($conn, $sql);
$num_results = mysqli_num_rows($all_projects);
?>

<!DOCTYPE html>
<html>
<head>
    <?php
    include 'head.php';
    ?>
    <title>About me</title>
    <style>
    section {
        padding: 50px 0;
    }
    </style>

</head>

<body class="bg-success bg-opacity-25">

    <?php
      include 'navbar.php';
    ?>

    <!-- Intro section-->
    <section id="intro">
        <div class="container-lg">
            <div class="row justify-content-center align-items-center">
                <div class="col-md-6 text-center text-md-start">
                    <h1>
                        <div class="display-2">Rafal Puk</div>
                        <div class="display-10">Majoring in Computer Science and Computer Security</div>
                    </h1>
                    <p class="lead text-primary">Hi I'm Rafal and I'm learning how to make my own website from a
                        scratch.</p>
                </div>
                <div class="col-md-4 text-center d-none d-lg-block">
                    <img class="img-fluid" src="assets/Rafal.png" alt="profile picture">
                </div>
            </div>
        </div>

        <!-- project section-->
        <section id="projects">
            <div class="container-fluid border border-3 border-success bg-light bg-opacity-50">
                <div class="text-center">
                    <h2 class="display-2">Current projects</h2>
                    <p class="lead text-primary">Here are a my current projects:</p>
                </div>

                <div class="row my-4 g-0 justify-content-around align-items-center">
                    <div class="col-4 col-lg-1">
                        <img src="assets/projects.png" class="img-fluid" alt="project picture">
                    </div>
                    <!-- accordion -->
                    <div class="col-5 col-lg-7">
                        <div class="accordion" id="Projects">
                        <?php 
                            $i = 1;
                                        for($x=0; $x<$num_results; $x++) {
                                            $row = mysqli_fetch_assoc($all_projects);
                                         
                                        ?>
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="header-<?php echo $i;?>">
                                    <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#project-<?php echo $i;?>" aria-expanded="true" aria-controls="project-<?php echo $i;?>">
                                        
                                        <?php 
                                        //Displays a project Title in accordion-item
                                        print $row['projTitle']; 
                                        
                                        ?>
                                        
                                    </button>
                                </h2>
                                <div id="project-<?php echo $i;?>" class="accordion-collapse collapse <?php if($i == 1) {echo 'show';}?>" aria-labelledby="project-<?php echo $i;?>"
                                    data-bs-parent="#Projects">
                                    <div class="accordion-body">
                                    <?php 
                                    //Displays a description of a project
                                    print $row['projDescription']; 
                                    ?>
                                    </div>
                                </div>
                            </div>
                            <?php 
                            $i++;
                        } ?>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous">
        </script>
</body>

</html>