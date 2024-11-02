<nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container-fluid">
        <a class="navbar-brand" href="{{ route('home') }}">Kaira</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mx-auto mb-2 mb-lg-0 justify-content-center">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="{{ route('home') }}">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('products') }}">Tshirts</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('about_us') }}">About Us</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('contact_us') }}">Contact Us</a>
                </li>
            </ul>
            <div class="d-flex align-items-center">
                <a class="nav-link cart-item ms-3 me-3" href="{{ route('login') }}">
                    <i class="bi bi-person"></i><span class="cart-text d-none">Profile</span>
                </a>

                <a class="nav-link cart-item me-3" href="#">
                    <i class="bi bi-cart"></i> <span class="cart-text d-none">Cart</span>
                </a>

                <a class="nav-link search-item" href="#">
                    <i class="bi bi-search"></i> <span class="search-text d-none">Search</span>
                </a>
            </div>

        </div>
    </div>
</nav>
