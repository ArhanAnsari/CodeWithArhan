<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HTML5 Semantics Tutorial</title>
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
		<h1>HTML5 Semantics Tutorial</h1>
	    </div>
	</section>
	<section class="tutorial-content">
	    <div class="content-container">
		<h2>Introduction to HTML5 Semantics</h2>
		<p>HTML5 introduced new semantic elements that provide a better structure and meaning to web documents. These elements help in creating more accessible and SEO-friendly web pages.</p>

		<h2>Common HTML5 Semantic Elements</h2>
		<p>HTML5 provides several semantic elements:</p>
		<ul>
		    <li><code>&lt;header&gt;</code>: Represents introductory content or a group of introductory content.</li>
		    <li><code>&lt;nav&gt;</code>: Represents a section of navigation links.</li>
		    <li><code>&lt;main&gt;</code>: Represents the main content of the <code>&lt;body&gt;</code> of a document.</li>
		    <li><code>&lt;section&gt;</code>: Represents a generic section of content.</li>
		    <li><code>&lt;article&gt;</code>: Represents an independent piece of content that can stand alone.</li>
		    <li><code>&lt;aside&gt;</code>: Represents content aside from the main content.</li>
		    <li><code>&lt;footer&gt;</code>: Represents a footer for its nearest ancestor section or article.</li>
		    <li><code>&lt;figure&gt;</code> and <code>&lt;figcaption&gt;</code>: Represents self-contained content (like images or diagrams) and their captions.</li>
		</ul>

		<h2>Using HTML5 Semantics</h2>
		<p>By using semantic elements, you can improve the accessibility and SEO of your website. Here's an example:</p>
		<pre><code class="language-html">&lt;header&gt;
    &lt;h1&gt;Website Name&lt;/h1&gt;
    &lt;nav&gt;
	&lt;a href="#"&gt;Home&lt;/a&gt;
	&lt;a href="#"&gt;About&lt;/a&gt;
	&lt;a href="#"&gt;Services&lt;/a&gt;
	&lt;a href="#"&gt;Contact&lt;/a&gt;
    &lt;/nav&gt;
&lt;/header&gt;

&lt;main&gt;
    &lt;section&gt;
	&lt;article&gt;
	    &lt;h2&gt;Article Title&lt;/h2&gt;
	    &lt;p&gt;Article content...&lt;/p&gt;
	&lt;/article&gt;
	&lt;aside&gt;
	    &lt;h3&gt;Sidebar&lt;/h3&gt;
	    &lt;p&gt;Sidebar content...&lt;/p&gt;
	&lt;/aside&gt;
    &lt;/section&gt;
&lt;/main&gt;

&lt;footer&gt;
    &lt;p&gt;Copyright &copy; 2024 CodeWithArhan. All rights reserved.&lt;/p&gt;
&lt;/footer&gt;</code></pre>

		<h2>Benefits of HTML5 Semantics</h2>
		<p>Using semantic elements:</p>
		<ul>
		    <li>Improves accessibility for screen readers and other assistive technologies.</li>
		    <li>Enhances SEO by providing clearer structure and meaning to search engine crawlers.</li>
		    <li>Improves maintainability of code by making it easier to understand and navigate.</li>
		</ul>
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
