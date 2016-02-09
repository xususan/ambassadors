<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="Ambassador Portal">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

    <title>Ambassador Profile</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <link href="../../assets/css/ie10-viewport-bug-workaround.css" rel="stylesheet">

    <!-- Custom Fonts-->
    <link href='https://fonts.googleapis.com/css?family=Sacramento' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Lato' rel='stylesheet' type='text/css'>


    <!-- Custom styles for this template -->
    <link href="starter-template.css" rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
 

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>
  
<!---
    <nav class="navbar navbar-default navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">Ambassador Profile</a>
        </div>
        <div id="navbar" class="collapse navbar-collapse">
          <ul class="nav navbar-nav">
            <li class="active"><a href="#">Leaderboard</a></li>

          </ul>
        </div>
      </div>
    </nav> -->
    <div class="container">

      <div class="starter-template">

        <div class="profile">

          <div class="profile-picture">
            <img class="photo" src="img/profilephoto.png">
          </div>
          <div class="profile-info">
            <div class="name">

              <h1>Susan Xu </h1>
            </div>
            <div class="h2normal"> Harvard College              <?php 
              echo "hello"
              ?> </div>
        </div>
        <div class="logoindicator">
          <figure class="chart" data-percent="75">
            <figcaption></figcaption>
            <img class="html" src="img/getmiilogowhitebg.png">
            <svg width="200" height="200">
              <circle class="outer" cx="95" cy="95" r="85" transform="rotate(-90, 95, 95)"/>
            </svg>
          </figure>
        </div>

        <div class="status">
          <h2> 70 Points </h2>
          <h3> 30 Points to Next Level </h3>
        </div>
      </div>
      <div class="footer">
        Leaderboard
        <span class="glyphicon glyphicon-menu-right" aria-hidden="true"></span>
      </div>
    </div><!-- /.container -->


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="js/vendor/jquery.min.js"><\/script>')</script>
    <script src="js/bootstrap.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="../../assets/js/ie10-viewport-bug-workaround.js"></script>
  </body>
</html>
