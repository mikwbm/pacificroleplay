<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pacific Roleplay - FiveM Community</title>
    <link rel="stylesheet" href="css/styles.css"> <!-- Link to your custom CSS file -->
</head>
<body>

<header>
    <div class="container">
        <button class="openbtn" onclick="openNav()">&#9776; Menu</button>
        <h1>Welcome to Pacific Roleplay</h1>
        <p>Immerse yourself in a world of endless possibilities</p>
    </div>
</header>

<div class="sidebar" id="sidebar">
    <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
    <a href="#about">About</a>
    <a href="#news">Server News</a>
    <!-- Add more links as needed -->
</div>

<div class="main-content">
    <section id="about" class="section">
        <div class="container">
            <h2>About Pacific Roleplay</h2>
            <p>Welcome to Pacific Roleplay, where you can experience the thrill of immersive roleplaying adventures set in our carefully crafted world.</p>
            <p>Join our diverse community and unleash your creativity as you embark on exciting journeys, form alliances, and shape the destiny of your character.</p>
            <p>Explore our world, engage with fellow roleplayers, and make memories that will last a lifetime!</p>
        </div>
    </section>

    <hr>

    <section id="news" class="section">
        <div class="container">
            <h2>Server News</h2>
            <div class="news-item">
                <h3>Update: New Features Added</h3>
                <p>Discover the latest updates and enhancements to our server, including new features, improvements, and events.</p>
                <p>Stay tuned for more exciting announcements and events!</p>
            </div>
            <!-- Add more news items as needed -->
        </div>
    </section>
</div>

<footer>
    <div class="container">
        <p>&copy; <?php echo date("Y"); ?> Pacific Roleplay - FiveM Community</p>
        <!-- Add any additional footer information you'd like -->
    </div>
</footer>

<script src="js/script.js"></script> <!-- Link to your JavaScript file -->
</body>
</html>
