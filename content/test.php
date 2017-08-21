<!DOCTYPE html>
<html>

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta name="viewport" content="width=device-width" />
    <title>Hell Snacks &lsaquo; Log In</title>
    <link rel="stylesheet" href="plugins/bootstrap/css/bootstrap.min.css" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" />
    <link rel="stylesheet" href="plugins/hover-master/css/hover-min.css" />
    <link rel="stylesheet" href="plugins/pace/themes/white/pace-theme-material.css">
    <link href="https://fonts.googleapis.com/css?family=Oswald" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Oswald|Roboto+Condensed" rel="stylesheet">
    <link rel="shortcut icon" href="assets/img/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="assets/css/login.css" />
    <link rel="stylesheet" href="assets/css/default.css" />
    <script type="text/javascript" src="plugins/jquery.js"></script>
    <script type="text/javascript" src="plugins/jquery.min.js"></script>
    <script type="text/javascript" src="plugins/jquery.nicescroll.js"></script>
    <script type="text/javascript" src="plugins/pace/pace.min.js"></script>
    <script type="text/javascript" src="plugins/bootstrap/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="plugins/jquery.validate.js"></script>
    <script type="text/javascript" src="assets/js/default.js"></script>
    <script type="text/javascript" src="assets/js/login.js"></script>

</head>

<body>
    <div id="slideshow">
        <div class="bum">
            <img src="//farm6.static.flickr.com/5224/5658667829_2bb7d42a9c_m.jpg">
        </div>
        <div class="bum">
            <img src="//farm6.static.flickr.com/5230/5638093881_a791e4f819_m.jpg">
        </div>
        <div class="bum">
            Pretty cool eh? This slide is proof the content can be anything.
        </div>
    </div>

    <style>
        #slideshow {
            margin: 50px auto;
            position: relative;
            width: 240px;
            height: 240px;
            padding: 10px;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.4);
        }
        
        #slideshow>div {
            position: absolute;
            top: 10px;
            left: 10px;
            right: 10px;
            bottom: 10px;
        }
    </style>

    <script>
        $("#slideshow > .bum:gt(0)").hide();

        setInterval(function() {
            $('#slideshow > div:first')
                .fadeOut(1000)
                .next()
                .fadeIn(1000)
                .end()
                .appendTo('#slideshow');
        }, 3000);
    </script>
</body>