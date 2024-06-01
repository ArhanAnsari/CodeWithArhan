<?php
// blog.php

// Define some sample blog posts
$blogPosts = [
    [
        "title" => "Getting Started with Python",
        "author" => "Arhan Ansari",
        "date" => "2024-05-15",
        "excerpt" => "Learn the basics of Python programming and get started with writing your first Python script.",
        "content" => "Python is a versatile and beginner-friendly programming language. In this post, we will cover the basics of Python and write a simple program..."
    ],
    [
        "title" => "Understanding JavaScript Closures",
        "author" => "Arhan Ansari",
        "date" => "2024-04-28",
        "excerpt" => "Closures are a powerful feature in JavaScript. This post explains how closures work and how to use them effectively.",
        "content" => "A closure is a function that retains access to its lexical scope, even when the function is executed outside that scope. This can be incredibly useful for creating private variables..."
    ],
    [
        "title" => "Mastering CSS Flexbox",
        "author" => "Arhan Ansari",
        "date" => "2024-03-10",
        "excerpt" => "CSS Flexbox is a powerful layout module. This post will guide you through the essentials of Flexbox and how to use it to create flexible and responsive layouts.",
        "content" => "Flexbox is a one-dimensional layout method for laying out items in rows or columns. Items flex to fill additional space and shrink to fit into smaller spaces. In this guide, we will explore the main concepts of Flexbox and how to apply them in your web designs..."
    ]
];

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CodeWithArhan-Blog</title>
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
                <a href="/courses.php">Courses</a>
                <a href="/tutorial.php">Tutorials</a>
                <a href="/contact.php">Contact Us</a>
            </div>
        </div>
    </nav>
    <main>
        <section class="hero">
            <div class="header-container">
                <h1>CodeWithArhan-Blog</h1>
            </div>
        </section>
        <section class="features">
            <div class="grid">
                <?php foreach ($blogPosts as $post) : ?>
                    <div class="tile">
                        <div class="text">
                            <h2><?php echo $post['title']; ?></h2>
                            <p><em>by <?php echo $post['author']; ?> on <?php echo date("F j, Y", strtotime($post['date'])); ?></em></p>
                            <p><?php echo $post['excerpt']; ?></p>
                            <a href="blog-post.php?title=<?php echo urlencode($post['title']); ?>">Read more...</a>
                        </div>
                    </div>
                <?php endforeach; ?>
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