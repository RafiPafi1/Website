<!DOCTYPE html>
<html>

<head>
    <?php
  include 'head.php';
  ?>
    <title>Know me better</title>
    <style>
    #map {
        height: 400px;
        width: 400px;
    }
    </style>
</head>

<body class="bg-success text-dark bg-opacity-25">
    <?php
  include 'navbar.php';
  ?>
    <h1 class="text-center fw-bold text-info">Welcome to my website</h1>
    <div class="container-lg text-center">
        
        <div class="row align-items-center my-4 text-danger">
            <div class="col">
                <p class="lead">My name is Rafal, and I'm originally from Poland. I was born in a small city called
                    Rzeszów, where
                    I spent 16 years of my life. In the summer of 2016 my family finally got a visa after a long waiting
                    for it and was able to come into the United States. In the United States, I was able to take a look
                    at a new life, which was being in my first programming class back in my high school.
                </p>
            </div>
            <div class="col">
                <div id="map"></div>
            </div>
        </div>
        <div class="row align-items-center">
            <div class="col">
                    <img src="assets/ESU.png" class="img-fluid">
            </div>
            <div class="col">
                <p class="lead">Throughout those years I was able to learn more about java and choose my future major.
                    From there I decided to continue
                    my learning at the East Stroudsburg University where I proceeded with dual majoring in computer
                    science and computer security.
                </p>
            </div>
            <div class="row align-items-center" >
                <div class="col">
                    <p class="lead"> Now I am working on my internship at the company called Marathon Studios and this
                        is my
                        first learning project.
                    </p>
                </div>
                <div class="col">
                    <img src="assets/Marathon-Globe.png" class="img-fluid">
                </div>
            </div>
        </div>
        <!-- google calendar when I want to add a schedule part to this website
        <div>
        <iframe src="https://calendar.google.com/calendar/embed?src=rafix123.rp%40gmail.com&ctz=America%2FNew_York" style="border: 0" width="800" height="600" frameborder="0" scrolling="no"></-iframe>
        <div-->
    </div>
    <br>
    <script>
    function initMap() {
        var location = {
            lat: 50.038,
            lng: 22.004
        };
        var map = new google.maps.Map(document.getElementById("map"), {
            zoom: 6,
            center: location
        });
        var marker = new google.maps.Marker({
            position: location,
            map: map
        });
    }
    </script>
    <script async defer
        src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDxB2CLeD5xLxhTSxMqucFqr7ZccipYhCw&callback=initMap">
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous">
    </script>
</body>

</html>