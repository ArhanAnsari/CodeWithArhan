<?php
// courses.php

// Define some sample courses
$courses = [
    [
        "title" => "100 Days Of Python",
        "instructor" => "Arhan Ansari",
        "description" => "Learn the basics of Python programming in this introductory course.",
        "link" => "/courses/100-days-python/day1.php"
    ],
    [
        "title" => "JavaScript Essentials",
        "instructor" => "Arhan Ansari",
        "description" => "Master the essentials of JavaScript and start building interactive web applications.",
        "link" => "#"
    ],
    [
        "title" => "Advanced CSS Techniques",
        "instructor" => "Arhan Ansari",
        "description" => "Take your CSS skills to the next level with advanced techniques and tips.",
        "link" => "#"
    ]
];

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Courses - CodeWithArhan</title>
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
                <a href="/index.php">Home</a>
                <a href="/about.php">About</a>
                <a href="/blog.php">Blog</a>
                <a href="/courses.php">Courses</a>
                <a href="/tutorials.php">Tutorials</a>
                <a href="/contact.php">Contact</a>
            </div>
        </div>
    </nav>
    <main>
        <section class="hero">
            <div class="header-container">
                <h1>Our Courses</h1>
            </div>
        </section>
        <section class="features">
            <div class="grid">
                <?php foreach ($courses as $course) : ?>
                    <div class="tile">
                        <div class="text">
                            <h2><?php echo $course['title']; ?></h2>
                            <p><em>by <?php echo $course['instructor']; ?></em></p>
                            <p><?php echo $course['description']; ?></p>
                            <a href="<?php echo $course['link']; ?>">Learn more...</a>
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
                <p>&copy; <?php echo date("Y"); ?> CodeWithArhan. All rights reserved.</p>
            </div>
        </div>
    </footer>
</body>
</html>