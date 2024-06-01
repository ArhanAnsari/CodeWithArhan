<?php
// about.php

// Define some basic information about CodeWithArhan
$title = "CodeWithArhan-About";
$heading = "About Us";
$description = "Welcome to CodeWithArhan! We are dedicated to providing high-quality coding tutorials, tips, and resources to help you become a better programmer. Whether you are a beginner or an experienced developer, we have something for everyone.";

$founderName = "Arhan Ansari";
$missionStatement = "Our mission is to make coding accessible and enjoyable for everyone. We believe in the power of knowledge sharing and strive to create a community where learners can thrive.";

$values = [
    "Quality Education",
    "Community Engagement",
    "Continuous Learning",
    "Innovation",
    "Support and Guidance"
];

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $title; ?></title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <nav>
        <div class="nav-inner">
            <div class="left">
                <div class="logo"></div>
                <div class="name">CodeWithArhan</div>
            </div>
            <div class="right">
                <a href="/index.php">Home</a>
                <a href="/about.php">About</a>
                <a href="/blog.php">Blog</a>
                <a href="/contact.php">Contact</a>
            </div>
        </div>
    </nav>
    <main>
        <section class="hero">
            <div class="header-container">
                <h1><?php echo $heading; ?></h1>
            </div>
        </section>
        <section>
            <div class="header-container">
                <h2>Welcome Message</h2>
                <p><?php echo $description; ?></p>
            </div>
        </section>
        <section>
            <div class="header-container">
                <h2>Founder</h2>
                <p><strong><?php echo $founderName; ?></strong></p>
            </div>
        </section>
        <section>
            <div class="header-container">
                <h2>Mission Statement</h2>
                <p><?php echo $missionStatement; ?></p>
            </div>
        </section>
        <section>
            <div class="header-container">
                <h2>Our Values</h2>
                <ul>
                    <?php foreach ($values as $value) {
                        echo "<li>$value</li>";
                    } ?>
                </ul>
            </div>
        </section>
    </main>
    <footer>
        <div class="inner">
            <div class="column">
                <div class="logo"></div>
                <div class="name">CodeWithArhan</div>
            </div>
            <div class="column">
                <p>&copy; <?php echo date("Y"); ?> CodeWithArhan. All rights reserved.</p>
            </div>
        </div>
    </footer>
</body>
</html>