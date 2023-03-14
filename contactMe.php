<!DOCTYPE html>
<html lang="en">

<head>
  <?php
  include 'head.php';
  ?>
  <title>Contact Me Page</title>
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
      <div id="error"></div>
      <div class="row justify-content-center my-4">
        <div class="col-lg-6">
          <form id="form" action="contactFormSend.php" method="POST">
            <label for="email" class="form-label">Email Address:</label>
            <div class="mb-4 input-group">
              <span class="input-group-text">
                <i class="bi bi-envelope-at"></i>
              </span>
              <input type="email" class="form-control" id="email" name="email" placeholder="e.g. rafal@example.com">
              <!-- Tooltip -->
              <span class="input-group-text">
                <span class="tt" data-bs-placement="bottom" title="Enter an email address I can reply to.">
                  <i class="bi bi-question-circle text-muted"></i>
                </span>
              </span>
            </div>

            <label for="name" class="form-label">Name:</label>
            <div class="mb-4 input-group">
              <span class="input-group-text">
                <i class="bi bi-person-circle"></i>
              </span>
              <input type="text" class="form-control" id="name" name="name" placeholder="e.g. Rafal">
              <!-- Tooltip -->*
              <span class="input-group-text">
                <span class="tt" data-bs-placement="bottom" title="Should be self explanatory :)">
                  <i class="bi bi-question-circle text-muted"></i>
                </span>
              </span>
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
              <textarea id="query" class="form-control" name="message" style="height: 200px"></textarea>
              <label for="query" class="form-label">Your query...</label>
            </div>

            <div class="mb-4 text-center">
              <button type="submit" class="btn btn-secondary" name="send">Submit</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </section>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous">
  </script>

</body>

</html>