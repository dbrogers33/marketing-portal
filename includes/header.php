<!DOCTYPE html>
<html>
<head>
  <title>Hutson Marketing Portal</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="style.css" rel="stylesheet">
  <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
  <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-T8Gy5hrqNKT+hzMclPo118YTQO6cYprQmhrYwIiQ/3axmI1hQomh7Ud2hPOy8SP1" crossorigin="anonymous">
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
</head>
<body>

<div class="container">
  <div class="drop-shadow no-padding">
    <div class="row">
      <div class="col-lg-12 no-padding">
        <a href="index.php"><img class="img-responsive" src="img/header.png" alt="Hutson Inc Marketing Portal" /></a>
      </div>
    </div>
    <div class="row">
      <div class="col-lg-12 main-navigation">
        <div class="col-lg-10 col-lg-offset-1">
          <!-- Desktop Navigation -->
          <nav>
            <ul>
              <li><a href="/marketing-request.php">Marketing Request</a></li>
              <li><a href="/print.php">Print</a></li>
              <li><a href="/video.php">Video</a></li>
              <li><a href="/radio.php">Radio</a></li>
              <li><a href="/social.php">Social</a></li>
              <li><a href="/calendar.php">Calendar</a></li>
              <li><a href="/swag-request.php">SWAG Request</a></li>
              <li><a href="/website-suggestions.php">Website Suggestions</a></li>
              <li><a href="/submit-story.php">Submit Story</a></li>
            </ul>
          </nav>
          <!-- End Desktop Navigation -->

          <!-- Mobile Navigation -->
          <div class="row mobile-nav-button">
            <button onclick="$('#mobile').toggleClass('show')"><i class="fa fa-bars" aria-hidden="true"></i></button>
          </div>

          <ul class="mobile-navigation" id="mobile">
            <li><a href="marketing-request.php">Marketing Request</a></li>
            <li><a href="print.php">Print</a></li>
            <li><a href="video.php">Video</a></li>
            <li><a href="#">Social</a></li>
            <li><a href="#">Calendar</a></li>
            <li><a href="swag-request.php">SWAG Request</a></li>
            <li><a href="website-suggestions.php">Website Suggestions</a></li>
            <li><a href="submit-story.php">Submit Story</a></li>
          </ul>
          <!-- End Mobile Navigation -->
        </div>
      </div>
    </div>
  </div>
