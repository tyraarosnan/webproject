<?php 
include 'partials/header.php';
?>

<style>
    .about__page {
        text-align: center;
        padding: 50px 20px;
        background: linear-gradient(180deg, #4a4aa1, #1e1e2d);
        color: #fff;
    }

    .about__content {
        max-width: 800px;
        margin: 0 auto;
        padding: 20px;
        text-align: center;
        border-radius: 10px;
    }

    .about__content h2 {
        font-size: 28px;
        margin-bottom: 10px;
        color: #ffd700;
        text-transform: uppercase;
        animation: fadeIn 1s ease-in-out;
    }

    .about__content p {
        font-size: 18px;
        margin-bottom: 20px;
        animation: fadeIn 2s ease-in-out;
    }

    .about__content ul {
        list-style: none;
        padding: 0;
        margin: 20px 0;
    }

    .about__content ul li {
        font-size: 18px;
        margin: 10px 0;
        display: flex;
        align-items: center;
        justify-content: center;
        animation: fadeIn 2s ease-in-out;
    }

    .about__content ul li::before {
        content: "✔";
        color: #ffd700;
        margin-right: 10px;
    }

    .join-us {
        margin-top: 30px;
        font-size: 20px;
        color: #ffd700;
        font-weight: bold;
        animation: bounce 2s infinite;
    }

    .social-icons {
        margin-top: 20px;
        display: flex;
        justify-content: center;
        gap: 20px;
    }

    .social-icons a {
        color: #ffd700;
        font-size: 24px;
        transition: transform 0.3s;
    }

    .social-icons a:hover {
        transform: scale(1.2);
    }

    @keyframes fadeIn {
        from {
            opacity: 0;
            transform: translateY(10px);
        }
        to {
            opacity: 1;
            transform: translateY(0);
        }
    }

    @keyframes bounce {
        0%, 100% {
            transform: translateY(0);
        }
        50% {
            transform: translateY(-10px);
        }
    }
</style>

<section class="about__page">
    <div class="about__content">
        <h1>About Blogify</h1>
        <h2>Welcome to Blogify!</h2>
        <p>Blogify is your space to explore, create, and share stories, ideas, and knowledge. Our platform is designed to make blogging accessible and enjoyable for everyone.</p>

        <h2>Our Purpose</h2>
        <p>We aim to empower writers, creators, and readers to share their perspectives with the world. Whether you're passionate about food, travel, technology, or personal stories, Blogify is your canvas.</p>

        <h2>Features</h2>
        <ul>
            <li>Create and publish your own blogs effortlessly.</li>
            <li>Explore blogs on a wide variety of topics.</li>
            <li>Connect with a community of like-minded individuals.</li>
        </ul>

        <h2>Our Vision</h2>
        <p>Our vision is to create a vibrant community of storytellers and learners. We strive to make blogging easy, inspiring, and accessible to everyone, regardless of experience or expertise.</p>

        <h2 class="join-us">Join Us Today!</h2>
        <p>Start your blogging journey today and become a part of the Blogify community. We can’t wait to see the amazing content you create!</p>

        <div class="social-icons">
            <a href="#"><i class="fab fa-facebook"></i></a>
            <a href="#"><i class="fab fa-twitter"></i></a>
            <a href="#"><i class="fab fa-instagram"></i></a>
            <a href="#"><i class="fab fa-linkedin"></i></a>
        </div>
    </div>
</section>

<?php
include './partials/footer.php';
?>
