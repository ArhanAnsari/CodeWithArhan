<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CSS Grid Layout Tutorial</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <nav>
	<div class="nav-inner">
	    <div class="left">
		<div class="logo"></div>
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
		<h1>Understanding CSS Grid Layout</h1>
	    </div>
	</section>
	<section class="tutorial-content">
	    <div class="content-container">
		<h2>Introduction</h2>
		<p>CSS Grid Layout is a two-dimensional layout system for the web. It lets you layout items in rows and columns, and it has many features that make building complex layouts simple and easy. In this tutorial, we'll explore the basics of CSS Grid Layout and how you can use it to create responsive web designs.</p>

		<h2>Getting Started with CSS Grid</h2>
		<p>To start using CSS Grid Layout, you need to define a container element as a grid using the <code>display: grid;</code> property.</p>
		<pre><code class="language-css">.grid-container {
    display: grid;
    gap: 10px; /* optional, for spacing between grid items */
}</code></pre>

		<h2>Defining Columns and Rows</h2>
		<p>Use the <code>grid-template-columns</code> and <code>grid-template-rows</code> properties to define the columns and rows of the grid.</p>
		<pre><code class="language-css">.grid-container {
    display: grid;
    grid-template-columns: 100px 200px;
    grid-template-rows: 100px 200px;
}</code></pre>
		<p>This creates a grid with two columns (100px and 200px wide) and two rows (100px and 200px tall).</p>

		<h2>Placing Items in the Grid</h2>
		<p>You can place items in specific grid areas using the <code>grid-column</code> and <code>grid-row</code> properties.</p>
		<pre><code class="language-css">.item1 {
    grid-column: 1 / 2; /* start at column 1, end at column 2 */
    grid-row: 1 / 2;    /* start at row 1, end at row 2 */
}</code></pre>
		<p>To span multiple columns or rows, adjust the ending line:</p>
		<pre><code class="language-css">.item2 {
    grid-column: 1 / 3; /* span across 2 columns */
    grid-row: 1 / 3;    /* span across 2 rows */
}</code></pre>

		<h2>Named Grid Areas</h2>
		<p>You can name grid areas and place items into these named areas, which can make your layout more readable.</p>
		<pre><code class="language-css">.grid-container {
    display: grid;
    grid-template-areas:
	'header header'
	'sidebar content'
	'footer footer';
}

.header {
    grid-area: header;
}

.sidebar {
    grid-area: sidebar;
}

.content {
    grid-area: content;
}

.footer {
    grid-area: footer;
}</code></pre>

		<h2>Responsive Layouts with CSS Grid</h2>
		<p>CSS Grid makes it easy to create responsive layouts using media queries. You can adjust the grid layout for different screen sizes.</p>
		<pre><code class="language-css">.grid-container {
    display: grid;
    grid-template-columns: repeat(auto-fill, minmax(200px, 1fr));
    gap: 10px;
}</code></pre>
		<p>This layout will create as many 200px wide columns as will fit in the container, with each column taking up at least 200px and growing to fill available space.</p>

		<h2>Conclusion</h2>
		<p>CSS Grid Layout is a powerful tool for creating flexible, responsive web designs. By understanding the basics of grid properties and how to use them, you can build complex layouts with ease. Experiment with different grid configurations to see how they can simplify your web design process.</p>
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