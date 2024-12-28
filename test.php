<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us - Blogify</title>
    <!-- Include Font Awesome for icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <style>
        /* Global Styles */
        body {
            font-family: 'Arial', sans-serif;
            margin: 0;
            padding: 0;
            background-color: #12163a;
            color: #ffffff;
        }

        /* Header Section */
        header {
            text-align: center;
            background-color: #6c63ff;
            padding: 20px;
            transition: background-color 0.5s ease;
        }

        header h1 {
            margin: 0;
            font-size: 2.5rem;
            color: #ffffff;
            transition: transform 1s ease, color 0.5s ease;
        }

        header:hover {
            background-color: #4f4bd8;
        }

        header h1:hover {
            transform: scale(1.1);
            color: #ffd700;
        }

        /* Adjust Contact Us Heading Spacing */
        .contact-header {
            margin-top: 80px;
            text-align: center;
            opacity: 0;
            transform: translateY(-20px);
            transition: opacity 1s ease, transform 1s ease;
        }

        .contact-header.visible {
            opacity: 1;
            transform: translateY(0);
        }

        .contact-header h1 {
            font-size: 2.5rem;
            color: #ffffff;
            margin-bottom: 20px;
        }

        /* Container */
        .container {
            max-width: 900px;
            margin: auto;
            padding: 20px;
        }

        /* Developers Section */
        .developers h2, .map h2 {
            font-size: 1.8rem;
            margin-bottom: 10px;
            color: #ffd700;
            opacity: 0;
            transform: translateY(-20px);
            transition: opacity 1s ease, transform 1s ease;
        }

        .developers h2.visible, .map h2.visible {
            opacity: 1;
            transform: translateY(0);
        }

        .developers ul {
            list-style: none;
            padding: 0;
        }

        .developers li {
            margin-bottom: 15px;
            line-height: 1.8;
            display: flex;
            align-items: center;
            justify-content: space-between;
            opacity: 0;
            transform: translateX(-20px);
            transition: opacity 1s ease, transform 1s ease;
        }

        .developers li.visible {
            opacity: 1;
            transform: translateX(0);
        }

        .developers li strong {
            font-size: 1.2rem;
        }

        .social-links {
            display: flex;
            gap: 10px;
        }

        .social-links a {
            color: #6c63ff;
            font-size: 1.5rem;
            text-decoration: none;
            transition: color 0.3s ease, transform 0.3s ease;
        }

        .social-links a:hover {
            color: #ffd700;
            transform: scale(1.1);
        }

        /* Map Section */
        .map iframe {
            border: none;
            border-radius: 10px;
            opacity: 0;
            transform: scale(0.9);
            transition: opacity 1s ease, transform 1s ease;
        }

        .map iframe.visible {
            opacity: 1;
            transform: scale(1);
        }

        /* Footer Section */
        footer {
            text-align: center;
            padding: 15px;
            background-color: #0d1134;
            color: #ffffff;
            opacity: 0;
            transform: translateY(20px);
            transition: opacity 1s ease, transform 1s ease;
        }

        footer.visible {
            opacity: 1;
            transform: translateY(0);
        }
    </style>
</head>
<body>
    <?php include 'partials/header.php'; ?>

    <!-- Contact Page Content -->
    <div class="contact-header">
        <h1>Contact Us</h1>
    </div>

    <div class="container">
        <!-- Developer Section -->
        <div class="developers">
            <h2>Meet Our Developers</h2>
            <ul>
                <li>
                    <div>
                        <strong>Developer 1</strong> - Athirah Najwa Binti Rosnan
                    </div>
                    <div class="social-links">
                        <a href="https://instagram.com/tyraarosnan" target="_blank"><i class="fab fa-instagram"></i></a>
                        <a href="https://wa.me/601169502240" target="_blank"><i class="fab fa-whatsapp"></i></a>
                    </div>
                </li>
                <li>
                    <div>
                        <strong>Developer 2</strong> - Zammirul Danish Khairi Bin Zulkhairi
                    </div>
                    <div class="social-links">
                        <a href="https://instagram.com/dnshkhri" target="_blank"><i class="fab fa-instagram"></i></a>
                        <a href="https://wa.me/60173720065" target="_blank"><i class="fab fa-whatsapp"></i></a>
                    </div>
                </li>
                <li>
                    <div>
                        <strong>Developer 3</strong> - Nurul Syafiqah Farhanah Binti Anwar
                    </div>
                    <div class="social-links">
                        <a href="https://instagram.com/frhnwar" target="_blank"><i class="fab fa-instagram"></i></a>
                        <a href="https://wa.me/60149864336" target="_blank"><i class="fab fa-whatsapp"></i></a>
                    </div>
                </li>
                <li>
                    <div>
                        <strong>Developer 4</strong> - Mohammad Hanafi Bin Mohammad Jumady
                    </div>
                    <div class="social-links">
                        <a href="https://instagram.com/hanafimj_s" target="_blank"><i class="fab fa-instagram"></i></a>
                        <a href="https://wa.me/60103731921" target="_blank"><i class="fab fa-whatsapp"></i></a>
                    </div>
                </li>
                <li>
                    <div>
                        <strong>Developer 5</strong> - Muhammad Aqimi Bin Jasmani
                    </div>
                    <div class="social-links">
                        <a href="https://instagram.com/_aqimi_" target="_blank"><i class="fab fa-instagram"></i></a>
                        <a href="https://wa.me/60196948593" target="_blank"><i class="fab fa-whatsapp"></i></a>
                    </div>
                </li>
                <li>
                    <div>
                        <strong>Developer 6</strong> - Nur Danish Dandanial Bin Mohd Yusoff
                    </div>
                    <div class="social-links">
                        <a href="https://instagram.com/developer4" target="_blank"><i class="fab fa-instagram"></i></a>
                        <a href="https://wa.me/60173117220" target="_blank"><i class="fab fa-whatsapp"></i></a>
                    </div>
                </li>
            </ul>
        </div>

        <!-- UTHM Map Section -->
        <div class="map">
            <h2>Our Location</h2>
            <p style="margin-bottom: 20px; font-size: 1.2rem; color: #ffffff;">
                We are located at <strong>Universiti Tun Hussein Onn Malaysia (UTHM)</strong>, a premier university in Parit Raja, Batu Pahat, Johor.
            </p>
            <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d31871.15476139466!2d103.1364!3d1.8555!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31da710d276c2767%3A0x9d8388e1b3a33f17!2sUniversiti%20Tun%20Hussein%20Onn%20Malaysia%20(UTHM)!5e0!3m2!1sen!2smy!4v1687443343387!5m2!1sen!2smy"
                width="100%"
                height="400"
                loading="lazy"
                referrerpolicy="no-referrer-when-downgrade">
            </iframe>
        </div>
    </div>

    <?php include './partials/footer.php'; ?>

    <footer>
        <p>&copy; 2023 Blogify. All Rights Reserved.</p>
    </footer>

    <script>
        // Intersection Observer for animations
        document.addEventListener("DOMContentLoaded", () => {
            const elements = document.querySelectorAll(".contact-header, .developers h2, .developers li, .map h2, .map iframe, footer");

            const observer = new IntersectionObserver((entries) => {
                entries.forEach((entry) => {
                    if (entry.isIntersecting) {
                        entry.target.classList.add("visible");
                    }
                });
            });

            elements.forEach((el) => observer.observe(el));
        });
    </script>
</body>
</html>
