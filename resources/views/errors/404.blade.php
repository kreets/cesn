<!DOCTYPE html>
<html lang="en">
<head>
    <!-- BOOTSTRAP CSS -->
    <link rel="stylesheet" href="assets/libs/bootstrap/css/bootstrap.min.css" media="all"/>

    <!-- FONT AWESOME -->
    <link rel="stylesheet" href="assets/libs/fontawesome/css/font-awesome.min.css" media="all"/>

    <!-- FONT AWESOME -->
    <link rel="stylesheet" href="assets/libs/maginificpopup/magnific-popup.css" media="all"/>

    <!-- Time Circle -->
    <link rel="stylesheet" href="assets/libs/timer/TimeCircles.css" media="all"/>

    <!-- OWL CAROUSEL CSS -->
    <link rel="stylesheet" href="assets/libs/owlcarousel/owl.carousel.min.css" media="all" />
    <link rel="stylesheet" href="assets/libs/owlcarousel/owl.theme.default.min.css" media="all" />

    <!-- GOOGLE FONT -->
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Oswald:400,700%7cRaleway:300,400,400i,500,600,700,900"/>

    <!-- MASTER  STYLESHEET  -->
    <link id="lgx-master-style" rel="stylesheet" href="assets/css/style-default.min.css" media="all"/>

    <!-- MODERNIZER CSS  -->
    <script src="assets/js/vendor/modernizr-2.8.3.min.js"></script>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>404-es hiba</title>
    <style>
        body {
            display: flex;
            flex-direction: column;
            height: 100vh;
            margin: 0;
            font-family: 'Arial', sans-serif;
        }

        #upper-section {
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            height: 33.33%; /* 1/3 of the viewport height */
            background: linear-gradient(to bottom, #014f88, #007db0); /* Background color */
            color: #fafafa; /* Text color */
        }

        #lower-section {
            height: 66.67%; /* 2/3 of the viewport height */
        }

        h1 {
            font-size: 3em;
            margin-bottom: 10px;
        }

        p {
            font-size: 1.2em;
            text-align: center;
        }

        .button-container {
            display: flex;
            gap: 10px;
            justify-content: center;
            margin-top: 20px;
        }

        .button {
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 10px;
            background-color: #d7a628; /* Button color */
            color: #fafafa; /* Text color */
            text-decoration: none;
            font-weight: bold;
            border-radius: 5px;
            box-shadow: 0px 2px 5px rgba(0, 0, 0, 0.2); /* Box shadow on hover */
            transition: box-shadow 0.3s;
            width: 200px; /* Set a fixed width for desktop view */
        }

        .button:hover {
            box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.4); /* Increased box shadow on hover */
        }

        #video-container {
            position: relative;
            overflow: hidden;
            width: 100%;
            height: 100%;
        }

        #youtube-video {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
        }
    </style>
</head>
<body>
<div id="upper-section">
    <h1>404-es hiba - Az oldal nem található</h1>
    <p>De ha már itt vagy nézd meg a 2023-as extrém sportnapot!.</p>

    <div class="button-container">
        <a href="{{route('home')}}" class="lgx-btn">Vissza a főoldalra</a>
    </div>
</div>

<div id="lower-section">
    <div id="video-container">
        <iframe id="youtube-video" src="{{setting('site.404_page_video')}}" frameborder="0" allowfullscreen></iframe>
    </div>
</div>
</body>
</html>