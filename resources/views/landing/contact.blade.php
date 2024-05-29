<!DOCTYPE html>
<html>

<head>
    @include('components.head')
    <style>
        body {
            font-family: 'Poppins', sans-serif;
            color: #266CBD;
            background: rgb(255, 255, 255);
            background: linear-gradient(90deg, rgba(255, 255, 255, 1) 0%, rgba(142, 203, 255, 1) 100%);
        }

        .carousel-item img {
            border-radius: 15px;
        }

        .lead {
            font-weight: 300;
        }

        .form-label {
            color: rgb(179, 179, 179);
        }
    </style>
</head>

<body>
    @include('components.navbar')

    <header class="p-5">
        <div class="container ">
            <div id="carouselExampleInterval" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active" data-bs-interval="5000">
                        <!-- Interval berfungsi agar gambarnya berganti setiap saat sesuai timer yg ditentukan -->
                        <img src="https://mdbcdn.b-cdn.net/img/Photos/Slides/img%20(22).webp" class="d-block w-100"
                            alt="...">
                    </div>
                    <div class="carousel-item" data-bs-interval="2000">
                        <img src="https://mdbootstrap.com/img/Photos/Slides/img%20(35).webp" class="d-block w-100"
                            alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="https://mdbootstrap.com/img/Photos/Slides/img%20(130).webp" class="d-block w-100"
                            alt="...">
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleInterval"
                    data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleInterval"
                    data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </div>
    </header>

    <!-- First Section - Title and Map -->
    <section class="container-fluid bg-light py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <h1 class="display-2" style="color: #F25700; font-weight: 200">Hubungi Kami</h1>
                    <h2 class="display-4" style="font-weight: 800">Rumah Belajar Spirit</h2>
                    <p class="lead mt-5">
                        <i class="fas fa-location-dot"></i> Desa Kembangsawit RT 01/RW 03 Kec. Ambal, Kab. Kebumen
                    </p>
                    <p class="lead">
                        <i class="fas fa-location-dot"></i> Desa Depokrejo RT 02/ RW 01 Kec. Kebumen Kab. Kebumen
                    </p>
                    <p class="lead mt-4" style="color: #F25700; font-weight: 600;">
                        <a href="https://api.whatsapp.com/send?phone=6287837816887" target="_blank"
                            rel="noopener noreferrer" style="text-decoration: none;">
                            <span style="color: #F25700;">
                                <i class="fab fa-whatsapp fa-beat fa-xl" style="color: #266CBD;"></i> 0878-3781-6887
                                (Zahroh)
                            </span> </a>
                    </p>
                </div>
                <div class="col-md-6">
                    <!-- Replace the iframe source with your map embed code -->

                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d7516.370473223015!2d109.67710261895432!3d-7.702799919258599!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e7ac99c4ecfaf93%3A0x5027a76e3553ae0!2sDepokrejo%2C%20Kec.%20Kebumen%2C%20Kabupaten%20Kebumen%2C%20Jawa%20Tengah!5e1!3m2!1sid!2sid!4v1716963415041!5m2!1sid!2sid"
                        width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                        referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </div>
        </div>
    </section>

    <!-- Second Section - Contact Form -->
    <section class="container-fluid py-5">
        <div class="container">
            <p class="lead" style="color: #F25700;">Memiliki Pertanyaan?</p>
            <h2 style="font-weight: 800">Hubungi Kami</h2>
            <form id="contactForm">
                <div class="mb-3">
                    <label for="name" class="form-label">Your Name</label>
                    <input type="text" class="form-control" id="name" placeholder="Enter your name">
                </div>
                <div class="mb-3">
                    <label for="email" class="form-label">Your Email</label>
                    <input type="email" class="form-control" id="email" placeholder="Enter your email">
                </div>
                <div class="mb-3">
                    <label for="subject" class="form-label">Subject</label>
                    <input type="text" class="form-control" id="subject" placeholder="Enter subject">
                </div>
                <div class="mb-3">
                    <label for="message" class="form-label">Message</label>
                    <textarea class="form-control" id="message" rows="6" placeholder="Enter your message"></textarea>
                </div>
                <button type="submit" class="btn btn-primary" id="submitButton">Submit</button>
            </form>
        </div>
    </section>
    @include('components.footer')

    @include('components.script')
    <script>
        document.getElementById("contactForm").addEventListener("submit", function(event) {
            event.preventDefault(); // Prevent the form from submitting normally

            // Get form values
            var name = document.getElementById("name").value;
            var email = document.getElementById("email").value;
            var subject = document.getElementById("subject").value;
            var message = document.getElementById("message").value;

            // Format the message
            var whatsappMessage = "Name: " + name + "%0A";
            whatsappMessage += "Email: " + email + "%0A";
            whatsappMessage += "Subject: " + subject + "%0A";
            whatsappMessage += "Message: " + message;

            // Open WhatsApp with the formatted message
            window.open("https://wa.me/+nomoranda?text=" + whatsappMessage, "_blank");
        });
    </script>
</body>

</html>
