
<nav class="menu">
    <div class="menu-toggle">
        <input type="checkbox">
        <span></span>
        <span></span>
        <span></span>
    </div>

    <div class="brand">
        <h1>Kyana Merch</h1>
    </div>
    <ul class="menu-list">
        <li><a href="" class="{{ request()->segment(1) == '' ? 'nav-active' : '' }}">Home</a></li>
        <li><a href="">Product</a></li>
        <li><a href="">About</a></li>
        <li><a href="">Contact</a></li>
    </ul>
</nav>
