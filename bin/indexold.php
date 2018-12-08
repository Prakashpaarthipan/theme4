<!DOCTYPE html><html lang='en' class=''>
<head>
  <title>The Chennai Silks - TCS Portal</title>
 <!--  <script src='//static.codepen.io/assets/editor/live/console_runner-ce3034e6bde3912cc25f83cccb7caa2b0f976196f2f2d52303a462c826d54a73.js'></script>
  <script src='//static.codepen.io/assets/editor/live/css_reload-2a5c7ad0fe826f66e054c6020c99c1e1c63210256b6ba07eb41d7a4cb0d0adab.js'></script> -->
  <meta charset='UTF-8'>
  <link href="font-awesome/css/font-awesome.min.css" type="text/css" rel="stylesheet">
<link href="css/jquery-ui.css" type="text/css" rel="stylesheet" media="all">
  <link rel="stylesheet" type="text/css" href="css/home.css">
</head>
<body>
    <div class="wrapper">
        <div class="container">
            <h1><img src="img/the-chennai-silks-logo.png" style="width: 150px;"></h1>
            <h1>Welcome to TCS Portal</h1>
            <h1><span id='home_loader' style="display: none;"><img src="img/home_loader2.gif"></span></h1>
            <br>
            
            <form class="form">
                <input type="text" placeholder="Username" title="Username">
                <input type="password" placeholder="Password" title="Password">
                <button type="submit" id="login-button">Login</button>
            </form>
        </div>

        <ul class="bg-bubbles">
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li><li></li><li></li>
            
        </ul>
    </div>

    <script type='text/javascript' src="js/jquery-3.3.1.min.js"></script>
    <script type='text/javascript' src="js/jquery-ui.js"></script>
    <script type='text/javascript' src="js/bootstrap.min.js"></script>
<script>
$("#login-button").click(function (event) {
    event.preventDefault();

    $('form').fadeOut(500);
    $('.wrapper').addClass('form-success');
    $('#home_loader').css('display', 'block');

    setTimeout(function(){ window.location.href='home.php';}, 2000);
});

//# sourceURL=pen.js
</script>
</body>
</html>