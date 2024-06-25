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
        "title" => "Hello World in Python",
        "author" => "Arhan Ansari",
        "description" => "A beginner tutorial to help you to write Hello World in Python.",
        "link" => "/tutorials/pyhello.php"
    ],
    [
        "title" => "Understanding JavaScript Promises",
        "author" => "Arhan Ansari",
        "description" => "A comprehensive guide to understanding and using JavaScript promises.",
        "link" => "/tutorials/jspromises.php"
    ],
    [
        "title" => "CSS Grid Layout Tutorial",
        "author" => "Arhan Ansari",
        "description" => "Learn how to create complex layouts easily with CSS Grid.",
        "link" => "/tutorials/cssgrid.php"
    ],
    [
        "title" => "HTML5 Semantics",
        "author" => "Arhan Ansari",
        "description" => "Understand the semantic elements introduced in HTML5.",
        "link" => "/tutorials/html5semantics.php"
    ],
    [
        "title" => "Responsive Web Design Principles",
        "author" => "Arhan Ansari",
        "description" => "Learn the principles of responsive web design.",
        "link" => "/tutorials/responsiveweb.php"
    ],
    [
        "title" => "Introduction to jQuery",
        "author" => "Arhan Ansari",
        "description" => "Explore the basics of jQuery library for DOM manipulation.",
        "link" => "/tutorials/jqueryintro.php"
    ],
    [
        "title" => "Building Responsive Layouts with Bootstrap",
        "author" => "Arhan Ansari",
        "description" => "Learn how to use Bootstrap framework for responsive web design.",
        "link" => "/tutorials/bootstraplayout.php"
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