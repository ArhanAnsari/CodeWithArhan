<?php
// tutorials.php

// Define some sample tutorials
$tutorials = [
    [
        "title" => "Writing Hello World in Node.js",
        "author" => "Arhan Ansari",
        "description" => "A beginner tutorial to help you to write Hello World in Node.js.",
        "link" => "/tutorials/nodehello.php"
    ],
    [
        "title" => "Getting Started with Python",
        "author" => "Arhan Ansari",
        "description" => "An introductory tutorial to get you started with Python programming.",
        "link" => "#"
    ],
    [
        "title" => "Understanding JavaScript Promises",
        "author" => "Arhan Ansari",
        "description" => "A comprehensive guide to understanding and using JavaScript promises.",
        "link" => "#"
    ],
    [
        "title" => "CSS Grid Layout Tutorial",
        "author" => "Arhan Ansari",
        "description" => "Learn how to create complex layouts easily with CSS Grid.",
        "link" => "#"
    ]
];

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tutorials - CodeWithArhan</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <nav>
        <div class="nav-inner">
            <div class="left">
                <div class="logo"><img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTCph8XWRdGgaQ6KIDAa39hhpsmHoPk-M3jiQx8SASeegAcqYFXeMQez2K0&s=10" class="logo"></div>
                <div class="name">CodeWithArhan</div>
            </div>
            <div class="right">
                <a href="index.php">Home</a>
                <a href="about.php">About</a>
                <a href="blog.php">Blog</a>
                <a href="courses.php">Courses</a>
                <a href="tutorials.php">Tutorials</a>
                <a href="contact.php">Contact</a>
            </div>
        </div>
    </nav>
    <main>
        <section class="hero">
            <div class="header-container">
                <h1>Our Tutorials</h1>
            </div>
        </section>
        <section class="features">
            <div class="grid">
                <?php foreach ($tutorials as $tutorial) : ?>
                    <div class="tile">
                        <div class="text">
                            <h2><?php echo $tutorial['title']; ?></h2>
                            <p><em>by <?php echo $tutorial['author']; ?></em></p>
                            <p><?php echo $tutorial['description']; ?></p>
                            <a href="<?php echo $tutorial['link']; ?>">Read more...</a>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </section>
    </main>
    <footer>
        <div class="inner">
            <div class="column">
                <div class="logo"><img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTCph8XWRdGgaQ6KIDAa39hhpsmHoPk-M3jiQx8SASeegAcqYFXeMQez2K0&s=10" class="logo"></div>
                <div class="name">CodeWithArhan</div>
            </div>
            <div class="column">
          <p>Handy links</p>
          <a href="/index.php">Home</a>

          <a href="/blog.php">Blog</a>

          <a href="/courses.php">Courses</a>

          <a href="/about.php">About</a>

          <a href="/tutorials.php">Tutorials</a>

          <a href="/about.php">About</a>

          <p>&copy; <?php echo date("Y"); ?> CodeWithArhan. All rights reserved.</p>

        </div>
        </div>
    </footer>
</body>
</html>