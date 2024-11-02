<footer class="bg-light py-5">
    <div class="container">
        <div class="row">
            <!-- Brand Section -->
            <div class="col-md-3 mb-4">
                <h4 class="fw-bold">KAIRA</h4>
                <p>
                    Discover Kaira – your ultimate source for high-quality t-shirts that blend style and comfort.
                    Elevate your wardrobe with our unique designs!
                </p>
                <div>
                    <a href="#" class="me-3 text-dark"><i class="bi bi-facebook"></i></a>
                    <a href="#" class="me-3 text-dark"><i class="bi bi-twitter"></i></a>
                    <a href="#" class="me-3 text-dark"><i class="bi bi-youtube"></i></a>
                    <a href="#" class="me-3 text-dark"><i class="bi bi-pinterest"></i></a>
                    <a href="#" class="text-dark"><i class="bi bi-instagram"></i></a>
                </div>

            </div>

            <!-- Quick Links Section -->
            <div class="col-md-3 mb-4">
                <h5 class="fw-bold">QUICK LINKS</h5>
                <ul class="list-unstyled">
                    <li><a href="{{ route('home') }}" class="text-dark">Home</a></li>
                    <li><a href="{{ route('about_us') }}" class="text-dark">About</a></li>
                    <li><a href="{{ route('contact_us') }}" class="text-dark">Contact</a></li>
                </ul>
            </div>

            <!-- Help & Info Section -->
            <div class="col-md-3 mb-4">
                <h5 class="fw-bold">HELP & INFO</h5>
                <ul class="list-unstyled">
                    <li><a href="{{ route('orders.index') }}" class="text-dark">Track Your Order</a></li>
                    <li><a href="{{ route('contact_us') }}" class="text-dark">Contact Us</a></li>
                    <li>
                        <form action="{{ route('logout') }}" method="POST" style="display: inline;">
                            @csrf
                            <button type="submit" class="text-dark bg-transparent border-0 p-0 m-0">Logout</button>
                        </form>
                    </li>
                </ul>
            </div>

            <!-- Contact Us Section -->
            <div class="col-md-3 mb-4">
                <h5 class="fw-bold">CONTACT US</h5>
                <p>Do you have any questions or suggestions?<br>
                    <a href="mailto:contact@yourcompany.com"
                        class="text-dark text-decoration-none">kaira@support.com</a>
                </p>
                <p>Do you need support? Give us a call.<br>
                    <a href="tel:+63281234567" class="text-dark text-decoration-none">+63 2 812 34567</a>
                </p>
            </div>
        </div>

        <hr>



        <div class="text-center mt-4">
            <p class="mb-0">&copy; Copyright 2024 Kaira. All rights reserved. Design by
                <a href="https://github.com/theIanCalica" class="text-dark">Ian Gabriel Calica</a>
            </p>
        </div>
    </div>
</footer>
