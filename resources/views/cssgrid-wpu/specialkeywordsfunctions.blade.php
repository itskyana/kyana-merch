<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>#4 Special Keywords & Functions</title>
    {{-- <link rel="stylesheet" href="cssgrid/style.css"> --}}
    <style>
        * {
            padding: 0;
            margin: 0;
        }

        body {
            background-color: #DDDDDD;
            text-align: center;
            margin: 3rem
        }

        img {
            display: block;
            width: 100%;
        }

        .gallery {
            width: 80%;
            margin: 3rem auto;
            border: 1px solid white;
            list-style: none;
            box-shadow: 2px 2px 2px rgba(0, 0, 0, 0.3);
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
            grid-gap: 5px;
        }
    </style>
</head>
<body>
    {{-- <div class="container">
        <div class="item">1</div>
        <div class="item">2</div>
        <div class="item">3</div>
        <div class="item">4</div>
        <div class="item">5</div>
        <div class="item">6</div>
        <div class="item">7</div>
        <div class="item">8</div>
        <div class="item">9</div>
    </div> --}}
    <h2>My Gallery</h2>
    <ul class="gallery">
        <li><img src="img/1.jpg" alt=""></li>
        <li><img src="img/2.jpg" alt=""></li>
        <li><img src="img/3.jpg" alt=""></li>
        <li><img src="img/4.jpg" alt=""></li>
        <li><img src="img/5.jpg" alt=""></li>
        <li><img src="img/6.jpg" alt=""></li>
        <li><img src="img/7.jpg" alt=""></li>
        <li><img src="img/8.jpg" alt=""></li>
        <li><img src="img/9.jpg" alt=""></li>
        <li><img src="img/10.jpg" alt=""></li>
    </ul>
</body>
</html>
