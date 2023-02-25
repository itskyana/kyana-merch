<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Flexbox | WPU</title>
    {{-- <link rel="stylesheet" href="css/bootstrap.min.css"> --}}
    <link rel="stylesheet" href="flexbox/style.css">
</head>
<body>

    <nav>
        <div class="logo">
            <h4>Kyana</h4>
        </div>

        <ul>
            <li><a href="">Home</a></li>
            <li><a href="">Product</a></li>
            <li><a href="">Service</a></li>
            <li><a href="">Galery</a></li>
            <li><a href="">About</a></li>
        </ul>

        <div class="menu-toggle">
            <input type="checkbox" name="" id="">
            <span></span>
            <span></span>
            <span></span>
        </div>
    </nav>


    {{-- Latihan 1 --}}
    <div class="container-satu">
        <div class="kolom-utama">
            <h2>Judul Artikel</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Doloribus quia id saepe corporis vero harum quis sit libero sed, accusamus deleniti totam veritatis maxime modi ad, cum assumenda velit aliquid!</p>

            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nulla nihil qui eius error. Porro alias placeat, quas ullam repudiandae tempora, reprehenderit veritatis quos consectetur consequatur culpa molestiae explicabo numquam asperiores.</p>

            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Suscipit, incidunt!</p>
        </div>
        <div class="sidebar-satu">
            <h3>Sidebar satu</h3>
            <ul>
                <li><a href="">Link 1</a></li>
                <li><a href="">Link 2</a></li>
                <li><a href="">Link 3</a></li>
                <li><a href="">Link 4</a></li>
            </ul>
        </div>
        <div class="sidebar-dua">
            <h3>Sidebar Dua</h3>
            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Architecto sapiente enim illo impedit eveniet soluta ducimus, odio minus nostrum aliquid provident facere eligendi quos nihil magnam odit nobis est iste.</p>
        </div>
    </div>
    {{-- Akhir latihan 1 --}}

    {{-- Latihan 2 - Service / Features --}}
    <div class="container-dua">
        <div class="layanan satu">
            <h4>Layanan 1</h4>
            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Officiis, sed!</p>
        </div>
        <div class="layanan dua">
            <h4>Layanan 2</h4>
            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quia eveniet fuga sint maxime consequuntur doloremque?</p>
        </div>
        <div class="layanan tiga">
            <h4>Layanan 3</h4>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Numquam nisi consequuntur porro veniam expedita ipsam maiores quam perferendis?</p>
        </div>
    </div>

    {{-- Akhir Latihan 2 --}}

    {{-- Latihan 3 - Galery Flex Wrap --}}

    <div class="container-tiga">
        <div class="thumbnail">

            <img src="flexbox/photo.jpg">
            <img src="flexbox/photo.jpg">
            <img src="flexbox/photo.jpg">
            <img src="flexbox/photo.jpg">
            <img src="flexbox/photo.jpg">
            <img src="flexbox/photo.jpg">
        </div>
    </div>

    {{-- Akhir Latihan 3 --}}

    {{-- Latihan 4 - Card --}}
    <div class="container-empat">
        <div class="card">
            <div class="header">

            </div>
            <div class="content">
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Adipisci, veniam!</p>
                <button>Buy Now!</button>
            </div>
        </div>
        <div class="card besar">
            <div class="header">

            </div>
            <div class="content">
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Adipisci, veniam!</p>
                <button>Buy Now!</button>
            </div>
        </div>
        <div class="card">
            <div class="header">

            </div>
            <div class="content">
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Adipisci, veniam!</p>
                <button>Buy Now!</button>
            </div>
        </div>
    </div>
    {{-- Akhir Latihan 4 --}}

    {{-- Latihan 5 - Centering --}}
    <div class="container-lima">
        <div class="kotak">
            <span>Hello World Rizky Perdana!</span>
        </div>
    </div>

    {{-- <script src="js/bootstrap.min.js"></script> --}}
    <script src="flexbox/script.js"></script>
</body>
</html>
