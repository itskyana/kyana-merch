<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>#5 Grid Area & Grid Gap</title>
    <link rel="stylesheet" href="cssgrid/gridareagridgap.css">
    <style>
        /* * {
            margin: 0;
            padding: 0;
            background-color: #DDDDDD;
        } */
        /* Latihan 1 */
        /* .container {
            width: 80%;
            margin: 50px auto;
            display: grid;
            grid-template-columns: 1fr 1fr 1fr;
            grid-template-areas:
                'header header header'
                'sidebar content content'
                'sidbar content content'
                'footer footer footer';
        }

        .item {
            width: 100%;
            background-color: rgb(138, 209, 254);
            display: flex;
            justify-content: center;
            align-items: center;
            padding: 100px;
            box-sizing: border-box;
        }

        .item:nth-child(even) {
            background-color: salmon;
        }

        .header {
            grid-area: header;
            background-color: lightblue;
        }

        .sidebar {
            grid-area: sidebar;
            background-color: wheat;
        }

        .content {
            grid-area: content;
            background-color: yellowgreen;
        }

        .footer {
            grid-area: footer;
            background-color: grey;
        }

        @media screen and (max-width: 576px) {
            .container {
            grid-template-areas:
                'header header header'
                'sidebar sidebar sidebar'
                'content content content'
                'footer footer footer';
        }
        } */

        /* Latihan 2 */
        /* .container {
            width: 60%;
            margin: 50px auto;
            display: grid;
            grid-template: [baris1-mulai] 'header header header' 50px [baris1-akhir baris2-mulai] 'footer footer footer' 100px [baris2-akhir] / 1fr 2fr 3fr;
        }

        .item {
            width: 100%;
            background-color: rgb(138, 209, 254);
            display: flex;
            justify-content: center;
            align-items: center;
            box-sizing: border-box;
        }

        .item:nth-child(even) {
            background-color: salmon;
        } */

        /* Latihan 3 */
        html,
        body {
            margin: 0;
            padding: 0;
            background-color: #ddd;
        }

        .container {
            width: 60%;
            margin: 50px auto;
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            /*
            grid-column-gap: 10px;
            grid-row-gap: 25px;
            */
            /*
            column-gap: 10px;
            row-gap: 25px;
            */

            /* grid-gap: 25px 10px; */
            /* gap: 25px 10px; */

            /* row coloum */
            gap: 25px;
        }

        .item {
        background-color: rgb(138, 209, 254);
        display: flex;
        justify-content: center;
        align-items: center;
        box-sizing: border-box;
      }

      .item:nth-child(even) {
        background-color: rgb(255, 142, 142);
      }
    </style>
</head>
<body>
        <div class="container">
            {{-- Latihan 1 --}}
            {{-- <div class="item header">Header</div>
            <div class="item sidebar">Sidebar</div>
            <div class="item content">Content</div>
            <div class="item footer">Footer</div> --}}

            {{-- Latihan 2 --}}
            {{-- <div class="item">1</div>
            <div class="item">2</div>
            <div class="item">3</div>
            <div class="item">4</div>
            <div class="item">5</div>
            <div class="item">6 </div> --}}

            {{-- Latihan 3 --}}
            <div class="item">1</div>
            <div class="item">2</div>
            <div class="item">3</div>
            <div class="item">4</div>
            <div class="item">5</div>
            <div class="item">6</div>
            <div class="item">7</div>
            <div class="item">8</div>
            <div class="item">9</div>
        </div>
</body>
</html>
