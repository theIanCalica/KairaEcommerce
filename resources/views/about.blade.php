@extends('Layout.app')

@section('content')
    <div class="container my-5">
        <h1 class="text-center mb-4">About Us</h1>

        <div class="text-center mb-4">
            <img src="https://images.pexels.com/photos/1181438/pexels-photo-1181438.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=2"
                class="img-fluid rounded" alt="About Us Image">
        </div>

        <p class="lead text-center mb-5">
            Welcome to <strong>Kaira</strong>! We are a dedicated team of fashion enthusiasts committed to delivering
            high-quality, premium t-shirts that empower our customers to express their individuality and style.
        </p>

        <div class="text-center mb-4">
            <h2>Our Mission</h2>
            <p class="mb-4">
                At Kaira, our mission is to provide exceptional t-shirts that combine luxury, comfort, and style. We aim to
                exceed our customers' expectations by using the finest materials and innovative designs to create garments
                that feel as good as they look.
            </p>
        </div>

        <div class="text-center mb-4">
            <h2>Our Vision</h2>
            <p class="mb-4">
                Our vision is to become a leading name in the premium apparel market, recognized for our commitment to
                quality and sustainability. We aspire to create a brand that inspires confidence and creativity in every
                individual who wears our t-shirts.
            </p>
        </div>

        <h2 class="text-center">Our Values</h2>
        <ul class="list-unstyled text-center mb-5">
            <li class="my-2"><strong>Quality:</strong> We prioritize the highest standards of craftsmanship and materials.
            </li>
            <li class="my-2"><strong>Creativity:</strong> We celebrate individuality and encourage unique self-expression
                through fashion.</li>
            <li class="my-2"><strong>Sustainability:</strong> We are committed to environmentally responsible practices in
                our production processes.</li>
            <li class="my-2"><strong>Customer Satisfaction:</strong> We strive to build lasting relationships with our
                customers through exceptional service and support.</li>
        </ul>

        <h2 class="text-center mb-4">Meet Our Team</h2>
        <p class="text-center mb-4">
            Our team is composed of diverse individuals with a shared passion for fashion and innovation. Together, we bring
            a unique blend of skills and perspectives to every project. Meet some of our key team members:
        </p>

        <div class="row text-center">
            <div class="col-md-4 mb-4">
                <div class="card shadow-sm">
                    <img src="https://images.pexels.com/photos/1036623/pexels-photo-1036623.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=2"
                        class="card-img-top" alt="Team Member 1">
                    <div class="card-body">
                        <h5 class="card-title">Sophia Carter</h5>
                        <p class="card-text">CEO & Founder. A visionary leader with a passion for fashion and
                            sustainability.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="card shadow-sm">
                    <img src="https://images.pexels.com/photos/733872/pexels-photo-733872.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=2"
                        class="card-img-top" alt="Team Member 2">
                    <div class="card-body">
                        <h5 class="card-title">Liam Johnson</h5>
                        <p class="card-text">Creative Director. An innovative designer dedicated to creating stylish and
                            unique pieces.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="card shadow-sm">
                    <img src="https://images.pexels.com/photos/1197132/pexels-photo-1197132.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=2"
                        class="card-img-top" alt="Team Member 3">
                    <div class="card-body">
                        <h5 class="card-title">Olivia Brown</h5>
                        <p class="card-text">Marketing Manager. A strategic thinker focused on building the Kaira brand.</p>
                    </div>
                </div>
            </div>
        </div>

        <h2 class="text-center mb-4">Why Choose Us?</h2>
        <p class="text-center mb-4">
            Choosing <strong>Kaira</strong> means investing in high-quality t-shirts that are designed for comfort and
            style. We offer:
        </p>
        <ul class="list-unstyled text-center mb-5">
            <li class="my-2">✔️ Luxurious fabrics that feel great against your skin.</li>
            <li class="my-2">✔️ Unique designs that stand out from the crowd.</li>
            <li class="my-2">✔️ A commitment to sustainable practices.</li>
            <li class="my-2">✔️ Exceptional customer service that puts you first.</li>
        </ul>

        <h2 class="text-center mb-4">Get in Touch</h2>
        <p class="text-center mb-4">
            Interested in learning more? Feel free to <a href="{{ route('contact_us') }}" class="text-primary">contact
                us</a> or follow us on our social media channels to stay updated on our latest news and exclusive offers!
        </p>
    </div>
@endsection
