<!DOCTYPE html>

<html>

    <head>

        <!-- http://getbootstrap.com/ -->
        <link href="/css/bootstrap.min.css" rel="stylesheet"/>

        <link href="/css/styles.css" rel="stylesheet"/>

        <?php if (isset($title)): ?>
            <title>C$50 Finance: <?= htmlspecialchars($title) ?></title>
        <?php else: ?>
            <title>C$50 Finance</title>
        <?php endif ?>

        <!-- https://jquery.com/ -->
        <script src="/js/jquery-1.11.3.min.js"></script>

        <!-- http://getbootstrap.com/ -->
        <script src="/js/bootstrap.min.js"></script>

        <script src="/js/scripts.js"></script>
        
        <link href="/css/bootstrap.min.css" rel="stylesheet"/>

        <!-- app's own CSS -->
        <link href="/css/styles.css" rel="stylesheet"/>

        <!-- https://developers.google.com/maps/documentation/javascript/ -->
        <style>
          #map {
            width: 500px;
            height: 400px;
          }
        </style>
        <script src="https://maps.googleapis.com/maps/api/js"></script>
        <script>
          function initialize() {
            var mapCanvas = document.getElementById('map');
            var mapOptions = {
              center: new google.maps.LatLng(44.5403, -78.5463),
              zoom: 8,
              mapTypeId: google.maps.MapTypeId.ROADMAP
            }
            var map = new google.maps.Map(mapCanvas, mapOptions)
          }
          google.maps.event.addDomListener(window, 'load', initialize);
        </script>
        <script src="/js/markerwithlabel_packed.js"></script>

        <!-- http://jquery.com/ -->
        <script src="/js/jquery-1.11.3.min.js"></script>

        <!-- http://getbootstrap.com/ -->
        <script src="/js/bootstrap.min.js"></script>

        <!-- http://underscorejs.org/ -->
        <script src="/js/underscore-min.js"></script>

        <!-- https://github.com/twitter/typeahead.js/ -->
        <script src="/js/typeahead.jquery.min.js"></script>

        <!-- app's own JavaScript -->
        <script src="/js/scripts.js"></script>

    </head>

    <body>

        <div class="container">

            <div id="top">
                <div>
                    <a href="/"><img alt="C$50 Finance" src="/img/logo.png"/></a>
                </div>
                <?php if (!empty($_SESSION["id"])): ?>
                    <ul class="nav nav-pills">
                        <li><a href="profile.php">Profile</a></li>
                        <li><a href="leaderboard.php"> Leaderboard </a></li>
                        <li><a href="logout.php"><strong>Log Out</strong></a></li>
                    </ul>
                <?php endif ?>
            </div>

            <div id="middle">
