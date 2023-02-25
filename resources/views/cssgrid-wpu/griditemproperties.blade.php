<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>#7 Grid Item Properties</title>
    <style>
        html,
        body {
          margin: 0;
          padding: 0;
          background-color: #ddd;
        }

        .container {
          width: 80%;
          margin: 50px auto;
          display: grid;
          grid-template-columns: minmax(200px, 300px) 1fr 1fr;
          grid-template-rows: repeat(3, 100px);

          /* grid-template-columns: [satu] minmax(200px, 300px) [dua] 1fr [tiga] 1fr [empat];
          grid-template-rows: [baris1] 100px [baris2] 100px [b-3] 100px [b4]; */
        }

        .item {
          display: flex;
          justify-content: center;
          align-items: center;
        }

        .my-item {
          /* grid-column-start: 2;
          grid-column-end: 4;
          grid-row-start: 2;
          grid-row-end: 4; */

          /* grid-column-start: 1;
          grid-column-end: span 3;
          grid-row-start: 1;
          grid-row-end: span 2; */

          /* grid-column-start: satu;
          grid-column-end: empat;
          grid-row-start: baris1;
          grid-row-end: b4; */

          /* grid-column-start: -1;
          grid-column-end: -2;
          grid-row-start: -4;
          grid-row-end: -1; */

          /* Short */
         /* grid-column: 1 / span 2;
         grid-row: 1 / span 2; */

          background-color: lightblue;
        }
    </style>
</head>
<body>

    {{-- Menentukan tempat dari grid item dengan mengacu pada nomer atau nama grid line yang spesifik --}}
    {{-- Nomer | Nama : mengacu pada nomer atau nama yang kita beri pada grid line  --}}
    {{-- span <nomer> : item  akan memanjang / melebar sampai sejumlah nomer --}}
    {{-- span <nama> : item akan memanjang / melebar sampai ke nama grid line tertentu  --}}

    <div class="container">
        <div class="item my-item">1</div>
        <div class="item">2</div>
        <div class="item">3</div>
        <div class="item">4</div>
        <div class="item">5</div>
        <div class="item">6</div>
        <!-- <div class="item">7</div>
        <div class="item">8</div>
        <div class="item">9</div> -->
        </div>
</body>
</html>