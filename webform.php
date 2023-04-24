<?php 
echo '<pre>';
 print_r($_POST);
 var_dump($GLOBALS);
 echo'</pre>';

?>

<html lang="en">
<head>
<?php
    include 'head.php';
    ?>
    <title>Contact Me Page</title>
    <script src="https://www.google.com/recaptcha/api.js?render=6LdUfIIlAAAAAA-rPYhjo_zVdJXw_ispvB0UHUrB"></script>
    <script>
   function onSubmit(token) {
     document.getElementById("form-test").submit();
   }
 </script>

</head>

<body>
    <div class="container">
        <form action="webform.php" method="POST" class="form" id="form-test">
            <div class="form-group">
                <label for="name" class="form-label">Your Name</label>
                <input type="text" class="form-control" id="name" name="name" placeholder="Jane Doe" tabindex="1" required>
            </div>
            <div class="form-group">
                <label for="email" class="form-label">Your Email</label>
                <input type="email" class="form-control" id="email" name="email" placeholder="jane@doe.com" tabindex="2" required>
            </div>
            <div class="form-group">
                <label for="subject" class="form-label">Subject</label>
                <input type="text" class="form-control" id="subject" name="subject" placeholder="Hello There!" tabindex="3" required>
            </div>
            <div class="form-group">
                <label for="message" class="form-label">Message</label>
                <textarea class="form-control" rows="5" cols="50" id="message" name="message" placeholder="Enter Message..." tabindex="4"></textarea>
            </div>
            <div>
            <button type="submit" class="btn btn-secondary g-recaptcha" name="send" data-sitekey="6LdUfIIlAAAAAA-rPYhjo_zVdJXw_ispvB0UHUrB" data-callback='onSubmit' data-action='submit'>Submit</button>
            </div>
        </form>
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
</body>

</html>