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
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="header-1">
                                    <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#project-1" aria-expanded="true" aria-controls="project-1">
                                        This portfolio website
                                    </button>
                                </h2>
                                <div id="project-1" class="accordion-collapse collapse show" aria-labelledby="project-1"
                                    data-bs-parent="#Projects">
                                    <div class="accordion-body">
                                        <p>This is my portfolio website, and I'm constantly trying to make it better
                                            with new skills I learn each day.
                                            This page is mainly about my projects. There are currently 2 more pages,
                                            being: welcome page and contact me page.
                                            Currently, I'm working on implementing a PHP and more JavaScript with
                                            jQuery.
                                        </p>
                                    </div>
                                </div>
                            </div>

                            <div class="accordion-item">
                                <h2 class="accordion-header" id="header-2">
                                    <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#project-2" aria-expanded="true" aria-controls="project-2">
                                        Work on the new website for CSO (Computer Science Organization)
                                    </button>
                                </h2>
                                <div id="project-2" class="accordion-collapse collapse" aria-labelledby="project-2"
                                    data-bs-parent="#Projects">
                                    <div class="accordion-body">
                                        <p>Computer Science Organization is a club in the East Stroudsburg University.
                                            I'm a member of that club and this year
                                            we have decided to upgrade our website to a new brand new one. We do not
                                            know yet when the project will be done or ready to
                                            publish. Unfortunately due to some college rules we might not be able to
                                            publish the final project, but it will still be a valuable skill to learn.
                                        </p>
                                    </div>
                                </div>
                            </div>

                            <div class="accordion-item">
                                <h2 class="accordion-header" id="header-3">
                                    <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#project-3" aria-expanded="true" aria-controls="project-3">
                                        Possibly go back to some game dev?
                                    </button>
                                </h2>
                                <div id="project-3" class="accordion-collapse collapse" aria-labelledby="project-1"
                                    data-bs-parent="#Projects">
                                    <div class="accordion-body">
                                        <p>Back in 2018 I have made a simple 2-D platformer game, which was a lot of
                                            fun. I was a bit upset when I lost the project files,
                                            which made me give up on trying to make a new project. Maybe when I get some
                                            free time this year I will try it again, especially since Godot 4.0 will be
                                            out.
                                        </p>
                                    </div>
                                </div>
                            </div>
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