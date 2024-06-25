<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Introduction to jQuery</title>
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
		<h1>Introduction to jQuery</h1>
	    </div>
	</section>
	<section class="tutorial-content">
	    <div class="content-container">
		<h2>Introduction</h2>
		<p>jQuery is a fast, small, and feature-rich JavaScript library. It makes things like HTML document traversal and manipulation, event handling, and animation much simpler with an easy-to-use API that works across a multitude of browsers. In this tutorial, we will cover the basics of jQuery and how to use it in your projects.</p>

		<h2>Including jQuery</h2>
		<p>To use jQuery, you can include it in your project by adding a script tag with a link to the jQuery CDN:</p>
		<pre><code class="language-html">
&lt;script src="https://code.jquery.com/jquery-3.6.0.min.js"&gt;&lt;/script&gt;
		</code></pre>

		<h2>Basic Syntax</h2>
		<p>The basic syntax of jQuery is: <code>$(selector).action()</code>. The dollar sign ($) is a shorthand for jQuery. The selector finds HTML elements, and the action is performed on the selected elements.</p>
		<pre><code class="language-javascript">
$(document).ready(function(){
    $("button").click(function(){
	$("p").hide();
    });
});
		</code></pre>

		<h2>Selecting Elements</h2>
		<p>jQuery uses CSS-style selectors to select elements. Here are some examples:</p>
		<ul>
		    <li>Selecting all elements: <code>$("*")</code></li>
		    <li>Selecting by element type: <code>$("p")</code></li>
		    <li>Selecting by class: <code>$(".class")</code></li>
		    <li>Selecting by ID: <code>$("#id")</code></li>
		</ul>

		<h2>Event Handling</h2>
		<p>jQuery makes it easy to handle events like clicks, mouseovers, etc. Example:</p>
		<pre><code class="language-javascript">
$(document).ready(function(){
    $("button").click(function(){
	alert("Button was clicked!");
    });
});
		</code></pre>

		<h2>DOM Manipulation</h2>
		<p>jQuery provides several methods to manipulate the DOM. Examples:</p>
		<ul>
		    <li>Changing content: <code>$("#element").html("New content");</code></li>
		    <li>Changing CSS: <code>$("#element").css("color", "blue");</code></li>
		    <li>Adding/removing classes: <code>$("#element").addClass("newClass");</code></li>
		</ul>

		<h2>Conclusion</h2>
		<p>jQuery is a powerful tool for web development, simplifying many common tasks. By mastering its syntax and methods, you can create dynamic, interactive web pages with ease. Start experimenting with jQuery today to enhance your web development skills!</p>
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
