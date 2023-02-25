<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>#6 Grid Alignment</title>
    <style>
        /* * {
            margin: 0;
            padding: 0;
        }
        .container {
            width: 80%;
            height: 500px;
            margin: auto;
            display: grid;
            border: 1px solid black;
            grid-template-rows: 130px 130px 130px;
            grid-template-columns: 1fr 1fr 1fr;
            gap: 5px;
            justify-items: start;
            justify-items: end;
            justify-items: center;
            justify-items: stretch;

            align-items: start;
            align-items: end;
            align-items: center;
            align-items: stretch;

            place-items: center end;

            justify-content: space-around;

            align-content: center;

            place-content: space-around;
        }

        .items {
            width: 100px;
            height: 50px;
            border: 3px solid black;
            background-color: lightblue;
            justify-content: end;
        }

        .items.i1,
        .items.i4,
        .items.i7 {
          width: 130px;
        }

        .items.i2,
        .items.i5,
        .items.i8 {
          width: 80px;
        }

        .items.i3,
        .items.i6,
        .items.i9 {
          width: 170px;
        } */


        * {
        margin: 0;
        padding: 0;
      }
      .container {
        width: 80%;
        height: 500px;
        margin: auto;
        display: grid;
        grid-template-columns: 120px 180px 120px;
        grid-template-rows: 80px 80px;
        gap: 5px;
        /* Horizontal */
        /* justify-content: center; */

        /* Vertical */
        /* align-content: center; */

        /* Dua nilai */
        /* place-content: end center; */
      }

      .items {
        width: 100px;
        height: 50px;
        border: 3px solid black;
        background-color: lightblue;
        justify-content: end;
      }
      </style>
    </head>
    <body>
      <div class="container">
        <div class="items i1">1</div>
        <div class="items i2">2</div>
        <div class="items i3">3</div>
        <div class="items i4">4</div>
        <div class="items i5">5</div>
        <div class="items i6">6</div>
        <div class="items i7">7</div>
        <div class="items i8">8</div>
        <div class="items i9">9</div>
      </div>
    </body>
  </html>
