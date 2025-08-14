<?php
$name = "Cristine Aranez";
$year = "Bachelor of Science in Information Technology 3rd Year College";
$tagline = "I’m an outgoing and cheerful person who loves meeting new people, exploring new places, and learning new things. Friends describe me as approachable, adventurous, and always ready to help.";
$imagePath = "images/uyabenss.png";
$facebook = "https://facebook.com/yourusername";
$phone = "09682029904";
$email = "youremail@example.com";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $name; ?></title>
     <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <nav>
            <div class="logo"><?php echo $name; ?></div>
            <ul class="nav-links">
                <li><a href="#">Home</a></li>
                <li><a href="#">About</a></li>
                <li><a href="#">Projects</a></li>
            </ul>
            <button class="nav-btn" id="contactBtn">Contacts</button>
        </nav>

        <section class="hero">
            <div class="hero-text">
                <h3>Hello, Everyone.</h3>
                <h1>I am <span class="gradient-name">Cristine</span>.</h1>
                <h4 class="year"><?php echo $year; ?></h4>
                <p><?php echo $tagline; ?></p>
                <a href="#" class="learn-btn">Learn More</a>
            </div>
            <div class="hero-shape"></div>
            <img src="<?php echo $imagePath; ?>" alt="Cristine" class="hero-image">
        </section>
    </div>

    <!-- modal -->
    <div class="modal" id="contactModal">
    <div class="modal-content">
        <span class="close-btn" id="closeModal">&times;</span>
        <h2>Contact Information</h2>
        <p><strong>Facebook:</strong> <a href="<?php echo $facebook; ?>" target="_blank"><?php echo $facebook; ?></a></p>
        <p><strong>Phone:</strong> <?php echo $phone; ?></p>
        <p><strong>Email:</strong> <a href="mailto:<?php echo $email; ?>"><?php echo $email; ?></a></p>
    </div>
    </div>

    <script>
    document.addEventListener("DOMContentLoaded", function() {
    const contactBtn = document.getElementById("contactBtn");
    const modal = document.getElementById("contactModal");
    const closeModal = document.getElementById("closeModal");

    contactBtn.addEventListener("click", () => {
        modal.style.display = "flex"; 
    });

    closeModal.addEventListener("click", () => {
        modal.style.display = "none"; 
    });

    window.addEventListener("click", (e) => {
        if (e.target === modal) {
            modal.style.display = "none";
        }
    });
});
    </script>
</body>
</html>
