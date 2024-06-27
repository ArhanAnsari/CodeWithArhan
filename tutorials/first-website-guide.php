<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Building Your First Website with HTML and CSS - A Beginner's Guide</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <nav>
	<div class="nav-inner">
	    <div class="left">
		<div class="logo"><img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTCph8XWRdGgaQ6KIDAa39hhpsmHoPk-M3jiQx8SASeegAcqYFXeMQez2K0&s=10" class="logo"alt="Logo"></div>
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
		<h1>Building Your First Website with HTML and CSS - A Beginner's Guide</h1>
	    </div>
	</section>
	<section class="tutorial-content">
	    <div class="content-container">
		<h2>Introduction</h2>
		<p>Building your first website can be a rewarding experience. This guide will walk you through the basics of HTML and CSS, the fundamental technologies for creating web pages. By the end of this tutorial, you'll have a simple, yet functional website.</p>

		<h2>Basic Knowledge of HTML</h2>
		<p>HTML (HyperText Markup Language) is the standard language for creating web pages. It describes the structure of a web page and consists of a series of elements. These elements tell the browser how to display the content.</p>
		<ul>
		    <li><strong>Tags:</strong> HTML elements are represented by tags. For example, <code>&lt;p&gt;</code> represents a paragraph.</li>
		    <li><strong>Attributes:</strong> Tags can have attributes that provide additional information. For example, <code>&lt;a href="https://example.com"&gt;</code> defines a link.</li>
		    <li><strong>Nesting:</strong> HTML elements can be nested inside other elements. For example, a list item <code>&lt;li&gt;</code> can be inside a list <code>&lt;ul&gt;</code>.</li>
		</ul>

		<h2>Basic HTML Structure</h2>
		<p>Here's a basic structure of an HTML document:</p>
		<pre><code class="language-html">&lt;!DOCTYPE html&gt;
&lt;html lang="en"&gt;
&lt;head&gt;
    &lt;meta charset="UTF-8"&gt;
    &lt;meta name="viewport" content="width=device-width, initial-scale=1.0"&gt;
    &lt;title&gt;My First Website&lt;/title&gt;
    &lt;link rel="stylesheet" href="styles.css"&gt;
&lt;/head&gt;
&lt;body&gt;
    &lt;header&gt;
	&lt;h1&gt;Welcome to My First Website&lt;/h1&gt;
    &lt;/header&gt;
    &lt;main&gt;
	&lt;p&gt;This is a paragraph of text on my website.&lt;/p&gt;
    &lt;/main&gt;
    &lt;footer&gt;
	&lt;p&gt;© 2024 My First Website&lt;/p&gt;
    &lt;/footer&gt;
&lt;/body&gt;
&lt;/html&gt;
		</code></pre>

		<h2>Basic Knowledge of CSS</h2>
		<p>CSS (Cascading Style Sheets) is used to style and layout web pages. It allows you to create visually engaging web pages and user interfaces.</p>
		<ul>
		    <li><strong>Selectors:</strong> CSS selectors are used to select the HTML elements you want to style. For example, <code>p</code> selects all paragraphs.</li>
		    <li><strong>Properties and Values:</strong> CSS uses properties and values to apply styles. For example, <code>color: red;</code> sets the text color to red.</li>
		    <li><strong>Box Model:</strong> The CSS box model describes how elements are structured and rendered, including padding, borders, and margins.</li>
		</ul>

		<h2>Adding Some Style with CSS</h2>
		<p>Next, let's add some basic styles to our HTML. Create a file named <code>styles.css</code> in the same directory as your HTML file.</p>
		<pre><code class="language-css">/* styles.css */
body {
    font-family: Arial, sans-serif;
    margin: 0;
    padding: 0;
}

header {
    background-color: #4CAF50;
    color: white;
    padding: 20px;
    text-align: center;
}

main {
    padding: 20px;
}

footer {
    background-color: #333;
    color: white;
    text-align: center;
    padding: 10px;
    position: fixed;
    width: 100%;
    bottom: 0;
}
		</code></pre>

		<h2>Conclusion</h2>
		<p>Congratulations! You've built your first website with HTML and CSS. This is just the beginning—there's so much more to learn and explore in web development. Keep practicing and experimenting with different layouts and styles. Happy coding!</p>
	    </div>
	</section>
    </main>
    <footer>
	<div class="inner">
	    <div class="column">
		<div class="logo"><img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTCph8XWRdGgaQ6KIDAa39hhpsmHoPk-M3jiQx8SASeegAcqYFXeMQez2K0&s=10" class= "logo" alt="Logo"></div>
		<div class="name">CodeWithArhan</div>
	    </div>
	    <div class="column">
		<p>Handy links</p>
		<a href="/index.php">Home</a>
		<a href="/blog.php">Blog</a>
		<a href="/courses.php">Courses</a>
		<a href="/about.php">About</a>
		<a href="/tutorials.php">Tutorials</a>
		<a href="/contact.php">Contact</a>
		<p>&copy; <?php echo date("Y"); ?> CodeWithArhan. All rights reserved.</p>
	    </div>
	</div>
    </footer>
</body>
</html>