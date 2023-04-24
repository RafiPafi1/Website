<!DOCTYPE html>
<html lang="en">

<head>
    <?php
    include 'head.php';
    ?>
    <title>Contact Me Page</title>
    <script src="https://www.google.com/recaptcha/api.js?render=6LdUfIIlAAAAAA-rPYhjo_zVdJXw_ispvB0UHUrB"></script>
    <script defer src="submit.js"></script>
    <script>
        function onSubmit(token) {
            document.getElementById("form").submit();
        }
    </script>
</head>

<body class="bg-success bg-opacity-25">
    <?php
    include 'navbar.php';
    ?>
    <section id="contact">

        <div class="container-fluid border border-3 border-success bg-light bg-opacity-50">
            <div class="text-center">
                <h2 class="display-2">Contact me</h2>
                <p class="lead text-primary">Let me know if you have any ideas that I could add to my website
                    or if you need help with something</p>
            </div>
            <div class="row justify-content-center my-4">
                <div class="col-lg-6">
                    <form id="form" action="contactFormSend.php" method="POST" class="needs-validation" novalidate>
                        <input type="hidden" id="g-token" name="g-token" />
                        <label for="email" class="form-label">Email Address:</label>
                        <div class="mb-4 input-group">
                            <span class="input-group-text">
                                <i class="bi bi-envelope-at"></i>
                            </span>
                            <input type="email" class="form-control" id="email" name="email" placeholder="e.g. rafal@example.com" required>

                            <!-- Tooltip -->
                            <span class="input-group-text">
                                <span class="tt" data-bs-placement="bottom" title="Enter an email address I can reply to.">
                                    <i class="bi bi-question-circle text-muted"></i>
                                </span>
                            </span>
                            <div class="invalid-feedback">
                                Please enter a correct email address.
                            </div>
                        </div>

                        <label for="name" class="form-label">Name:</label>
                        <div class="mb-4 input-group">
                            <span class="input-group-text">
                                <i class="bi bi-person-circle"></i>
                            </span>
                            <input type="text" class="form-control" id="name" name="name" placeholder="e.g. Rafal" required>
                            <!-- Tooltip -->
                            <span class="input-group-text">
                                <span class="tt" data-bs-placement="bottom" title="Should be self explanatory :)">
                                    <i class="bi bi-question-circle text-muted"></i>
                                </span>
                            </span>
                            <div class="invalid-feedback">
                                Please enter a correct name.
                            </div>
                        </div>

                        <label for="subject" class="form-label">Reason for contacting me</label>
                        <div class="mb-4 input-group">
                            <span class="input-group-text">
                                <i class="bi bi-question-diamond-fill"></i>
                            </span>
                            <select class="form-select" id="subject" name="subject">
                                <option value="content" selected>Content Idea</option>
                                <option value="question">Question for me</option>
                                <option value="help">Help needed</option>
                            </select>
                        </div>

                        <div class="form-floating mb-4 mt-4">
                            <textarea id="message" class="form-control" name="message" style="height: 200px" required></textarea>
                            <label for="message" class="form-label">Your message...</label>
                            <div class="invalid-feedback">
                                Please enter a message here.
                            </div>
                        </div>

                        <div class="mb-4 text-center">
                            <div id="recaptcha" class="g-recaptcha" data-sitekey="6LdUfIIlAAAAAA-rPYhjo_zVdJXw_ispvB0UHUrB" data-callback="onSubmit" data-size="invisible"></div>

                            <button type="submit" class="btn btn-secondary" name="send" id="button">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>


        <script>
            function onClick(e) {
                e.preventDefault();
                grecaptcha.ready(function() {
                    grecaptcha.execute('6LdUfIIlAAAAAA-rPYhjo_zVdJXw_ispvB0UHUrB', {
                        action: 'submit'
                    }).then(function(token) {
                        // Add your logic to submit to your backend server here.
                        document.getElementById('g-token').value = token;
                    });
                });
            }
        </script>


    </section>
    <script defer src="validation.js">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous">
    </script>



</body>

</html>