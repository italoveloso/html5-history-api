<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Contact &raquo; HTML5 History API</title>
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">
    <style type="text/css">
      html {
        overflow-y: scroll;
        min-height: 100%
      }
      body {
        padding-top: 20px;
        padding-bottom: 60px;
      }
      .container {
        margin: 0 auto;
        max-width: 1000px;
      }
      .container > hr {
        margin: 60px 0;
      }
      .placeholder {
        min-height: 533px;
        position: relative
      }
      .placeholder .loading {
        background: url(assets/img/preloader.gif) no-repeat;
        position: absolute;
        top: 50%;
        left: 50%;
        height: 39px;
        width: 39px
      }
      .jumbotron {
        margin: 80px 0;
        text-align: center;
      }
      .jumbotron h1 {
        font-size: 100px;
        line-height: 1;
      }
      .jumbotron .lead {
        font-size: 24px;
        line-height: 1.25;
      }
      .jumbotron .btn {
        font-size: 21px;
        padding: 14px 24px;
      }
      .marketing {
        margin: 60px 0;
      }
      .marketing p + h4 {
        margin-top: 28px;
      }
      .navbar .navbar-inner {
        padding: 0;
      }
      .navbar .nav {
        margin: 0;
        display: table;
        width: 100%;
      }
      .navbar .nav li {
        display: table-cell;
        width: 1%;
        float: none;
      }
      .navbar .nav li a {
        font-weight: bold;
        text-align: center;
        border-left: 1px solid rgba(255,255,255,.75);
        border-right: 1px solid rgba(0,0,0,.1);
      }
      .navbar .nav li:first-child a {
        border-left: 0;
        border-radius: 3px 0 0 3px;
      }
      .navbar .nav li:last-child a {
        border-right: 0;
        border-radius: 0 3px 3px 0;
      }
      .featurette-divider {
        margin: 80px 0;
      }
      .featurette {
        padding-top: 120px;
        overflow: hidden;
      }
      .featurette-image {
        margin-top: -120px;
      }
      .featurette-image.pull-left {
        margin-right: 40px;
      }
      .featurette-image.pull-right {
        margin-left: 40px;
      }
      .featurette-heading {
        font-size: 50px;
        font-weight: 300;
        line-height: 1;
        letter-spacing: -1px;
      }
    </style>
    <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="assets/js/html5shiv.js"></script>
    <![endif]-->
  </head>

  <body>

    <div class="container">

      <div class="masthead">
        <h3 class="muted">HTML5 History API</h3>
        <div class="navbar">
          <div class="navbar-inner">
            <div class="container">
              <ul class="nav">
                <li><a href="index">Home</a></li>
                <li><a href="projects">Projects</a></li>
                <li><a href="services">Services</a></li>
                <li><a href="downloads">Downloads</a></li>
                <li><a href="about">About</a></li>
                <li class="active"><a href="contact">Contact</a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>

      <div class="placeholder">
        <div class="jumbotron">
          <h1>Contact</h1>
          <p class="lead">Cras justo odio, dapibus ac facilisis in, egestas eget quam. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</p>
        </div>

        <hr>

        <div class="row-fluid">
          <form class="form-horizontal">
              <div class="control-group">
                  <label class="control-label">Name</label>
                  <div class="controls">
                      <input class="input-xxlarge itemName" value="" type="text">
                  </div>
              </div>
              <div class="control-group">
                  <label class="control-label">Email</label>
                  <div class="controls">
                      <input class="input-xxlarge caption" value="" type="text">
                  </div>
              </div>
              <div class="control-group">
                  <label class="control-label">Link</label>
                  <div class="controls">
                      <input class="input-xxlarge link" value="" type="text">
                  </div>
              </div>
              <div class="control-group">
                  <label class="control-label">Message</label>
                  <div class="controls">
                      <textarea class="input-block-level description" rows="4"></textarea>
                  </div>
              </div>
              <div class="control-group">
                  <div class="controls">
                      <button class="btn btn-primary btn-large post">Send</button>
                  </div>
              </div>
          </form>
        </div>
      </div>

      <hr>

      <div class="footer">
        <p>&copy; Company 2013</p>
      </div>

    </div>

    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="assets/js/jquery-1.9.1.min.js"><\/script>')</script>
    <script src="assets/js/app.js"></script>
  </body>
</html>
