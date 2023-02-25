// Navbar
window.addEventListener("scroll", function() {
    let nav = this.document.querySelector("nav");
    nav.classList.toggle("sticky", window.scrollY > 0);
});

// Slide Show
const menuToggle = document.querySelector('.menu-toggle');
const nav = document.querySelector('nav ul');

menuToggle.addEventListener('click', function () {
    nav.classList.toggle('slide');
});

// Loading
onload = function() {
    let id = document.getElementById("loader");
    let loading = document.createElement("div");
    let body = document.body;

    loading.textContent = "Loading";
    loading.style.fontSize = "28px";
    id.appendChild(loading);

    let loaded = setInterval(() => {
        loading.textContent = loading.textContent + "."
    }, 1000);

    setTimeout(() => {
        clearInterval(loaded);
        loading.style.display = "none";
        // body.removeAttribute('style');

        id.remove();
    }, 4000);
};

let list = document.getElementsByClassName('list-gallery');
let itemBox = document.getElementsByClassName('itemBox');

for (let i = 0; i < list.length; i++) {
list[i].addEventListener('click', function(){
    for (let j = 0; j < list.length; j++) {
        list[j].classList.remove('active');
    }
    this.classList.add('active');

    let dataFilter = this.getAttribute('data-filter');

    for (let k = 0; k < itemBox.length; k++) {
        itemBox[k].classList.remove('active');
        itemBox[k].classList.add('hide');

        if(itemBox[k].getAttribute('data-item') == dataFilter || dataFilter == "all"){
            itemBox[k].classList.remove('hide');
            itemBox[k].classList.add('active');
        }
    }
});
}


