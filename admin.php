<!DOCTYPE html>
<html>
<head>
    <title>Admin Dashboard</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>

<header class="header">
    <h2>🏥 Admin Dashboard</h2>
</header>

<section class="grid">

<?php include "backend/fetch_appointments.php"; ?>

</section>

<section id="appointmentList"></section>

<footer class="footer">

    <div class="footer-container">

        <!-- BRAND -->
        <div class="footer-box">
            <h2>🏥 HealthCare+</h2>
            <p>
                Modern healthcare system providing trusted medical care,
                digital appointments, and 24/7 support.
            </p>
        </div>

        <!-- QUICK LINKS -->
        <div class="footer-box">
            <h3>Quick Links</h3>
            <a href="index.html">🏠 Home</a>
            <a href="about.html">ℹ️ About</a>
            <a href="services.html">🩺 Services</a>
            <a href="appointment.html">📅 Appointment</a>
            <a href="contact.html">📞 Contact</a>
        </div>

        <!-- SERVICES -->
        <div class="footer-box">
            <h3>Our Services</h3>
            <a href="#">General Checkup</a>
            <a href="#">Emergency Care</a>
            <a href="#">Lab Tests</a>
            <a href="#">Surgery Support</a>
        </div>

        <!-- CONTACT -->
        <div class="footer-box">
            <h3>Contact Info</h3>
            <p>📍 Addis Ababa, Ethiopia</p>
            <p>📞 +251 911 123 456</p>
            <p>📧 info@healthcareplus.com</p>
        </div>

    </div>

    <!-- SOCIAL STRIP -->
    <div class="footer-social">
        <a href="#">👍 Facebook</a>
        <a href="#">📸 Instagram</a>
        <a href="#">🐦 Twitter</a>
        <a href="#">💬 WhatsApp</a>
    </div>

    <div class="footer-bottom">
        <p>© 2026 HealthCare+ | All Rights Reserved</p>
    </div>

</footer>

<script src="script.js"></script>
</body>
</html>