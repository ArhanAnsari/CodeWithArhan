<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Responsive Web Design Principles</title>
    <link rel="stylesheet" href="styles.css">
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
		<h1>Responsive Web Design Principles</h1>
	    </div>
	</section>
	<section class="tutorial-content">
	    <div class="content-container">
		<h2>Introduction</h2>
		<p>Responsive Web Design is an approach that suggests that design and development should respond to the user’s behavior and environment based on screen size, platform, and orientation. This tutorial will cover the principles of responsive design and how to implement them.</p>

		<h2>Fluid Grids</h2>
		<p>Fluid grids are an essential part of responsive web design. Instead of using fixed-width layouts, fluid grids use relative units like percentages to adapt the layout to different screen sizes.</p>
		<pre><code class="language-css">
.container {
    width: 90%;
    margin: 0 auto;
}
.column {
    width: 30%;
    float: left;
    margin: 1.66%;
}
		</code></pre>

		<h2>Flexible Images</h2>
		<p>Images in responsive design should be flexible to adapt to different screen sizes. This can be achieved using the <code>max-width</code> property in CSS.</p>
		<pre><code class="language-css">
img {
    max-width: 100%;
    height: auto;
}
		</code></pre>

		<h2>Media Queries</h2>
		<p>Media queries allow you to apply different styles for different screen sizes and devices. They are a cornerstone of responsive web design.</p>
		<pre><code class="language-css">
@media (max-width: 768px) {
    .column {
	width: 100%;
	margin: 0 0 20px 0;
    }
}
		</code></pre>

		<h2>Viewport Meta Tag</h2>
		<p>The viewport meta tag ensures that your website renders well on different devices. It controls the layout on mobile browsers.</p>
		<pre><code class="language-html">
&lt;meta name="viewport" content="width=device-width, initial-scale=1.0"&gt;
		</code></pre>

		<h2>Conclusion</h2>
		<p>Responsive web design is essential for creating websites that provide a good user experience on a wide range of devices. By using fluid grids, flexible images, media queries, and the viewport meta tag, you can ensure your website is accessible and attractive to all users.</p>
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
