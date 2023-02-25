@extends('layouts.main')

@section('container')
    {{-- Header --}}
    <header class="header">
        <div class="hero">
            <h2 class="heading">
                Kyana Merch
            </h2>
            <p class="sub-heading">
                We provide merchandise for You
            </p>
        </div>
        <div class="features feature-1">
            <h4 class="price">IDR 350K</h4>
            <p class="item">Packet</p>
        </div>
        <div class="features  feature-2">
            <h4 class="price">IDR 200K</h4>
            <p class="item">T-Shirt</p>
        </div>
    </header>

    {{-- Navbar --}}
    @include('partials.navbar')

    <section class="services">
        <div class="service">
            <div class="img-service">
                <img src="https://source.unsplash.com/random/?tshirt-clothes" alt="image service">
            </div>
            <h3>T-shirt</h3>
            <p>Ut dolores incidunt odit repellendus laudantium quibusdam neque impedit illum doloribus reiciendis commodi maiores.</p>
        </div>
        <div class="service">
            <div class="img-service">
                <img src="https://source.unsplash.com/random/?hoodie" alt="image service">
            </div>
            <h3>Hoodie</h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quaerat, rem?</p>
        </div>
        <div class="service">
            <div class="img-service">
                <img src="https://source.unsplash.com/random/?tote-bag" alt="image service">
            </div>
            <h3>Tote Bag</h3>
            <p>Rerum voluptates tenetur, blanditiis quibusdam hic, perspiciatis similique velit ex doloribus error magnam incidunt ipsa neque repellat.</p>
        </div>
        <div class="service">
            <div class="img-service">
                <img src="https://source.unsplash.com/random/?handicraft" alt="image service">
            </div>
            <h3>Handicraft</h3>
            <p>Minus laborum delectus facilis.</p>
        </div>
    </section>

    {{-- <section class="gallery">
        <h2>Gallery</h2>
        <img src="https://source.unsplash.com/random/1000x1000/?fashion&?design" alt="gallery">
        <img src="https://source.unsplash.com/random/1100x1100/?fashion&?design" alt="gallery">
        <img src="https://source.unsplash.com/random/1200x1200/?fashion&?design" alt="gallery">
        <img src="https://source.unsplash.com/random/1001x1001/?fashion&?design" alt="gallery">
        <img src="https://source.unsplash.com/random/1003x1003/?fashion&?design" alt="gallery">
        <img src="https://source.unsplash.com/random/1005x1005/?fashion&?design" alt="gallery">
        <img src="https://source.unsplash.com/random/1010x1010/?fashion&?design" alt="gallery">
        <img src="https://source.unsplash.com/random/1020x1020/?fashion&?design" alt="gallery">
        <img src="https://source.unsplash.com/random/1030x1030/?fashion&?design" alt="gallery">
        <img src="https://source.unsplash.com/random/1040x1040/?fashion&?design" alt="gallery">
        <img src="https://source.unsplash.com/random/1050x1050/?fashion&?design" alt="gallery">
        <img src="https://source.unsplash.com/random/1060x1060/?fashion&?design" alt="gallery">
    </section> --}}

    <section class="gallery-product">
        <ul>
            <li class="list-gallery active" data-filter="all">All</li>
            <li class="list-gallery" data-filter="tshirt">T-Shirt</li>
            <li class="list-gallery" data-filter="hoodie">Hoodie</li>
            <li class="list-gallery" data-filter="totebag">Tote Bag</li>
            <li class="list-gallery" data-filter="handicraft">Handicraft</li>
        </ul>
        <div class="product">
            <div class="itemBox" data-item="tshirt"><img src="https://source.unsplash.com/random/1000x1000/?tshirt"></div>
            <div class="itemBox" data-item="hoodie"><img src="https://source.unsplash.com/random/1000x1000/?hoodie"></div>
            <div class="itemBox" data-item="totebag"><img src="https://source.unsplash.com/random/1000x1000/?totebag"></div>
            <div class="itemBox" data-item="handicraft"><img src="https://source.unsplash.com/random/1000x1000/?handicraft"></div>
            <div class="itemBox" data-item="tshirt"><img src="https://source.unsplash.com/random/1200x1200/?tshirt"></div>
            <div class="itemBox" data-item="hoodie"><img src="https://source.unsplash.com/random/1200x1200/?hoodie"></div>
            <div class="itemBox" data-item="totebag"><img src="https://source.unsplash.com/random/1200x1200/?totebag"></div>
            <div class="itemBox" data-item="handicraft"><img src="https://source.unsplash.com/random/1200x1200/?handicraft"></div>
        </div>
    </section>
@endsection
