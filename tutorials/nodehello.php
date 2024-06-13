<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hello World in Node.js</title>
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
		<h1>Hello World in Node.js</h1>
	    </div>
	</section>
	    <iframe width="800" height="480" src="https://www.youtube.com/embed/xEplLYhIyZc" title="Wrting Hello World Program in Node JS" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
	<section class="tutorial-content">
	    <div class="content-container">
		<h2>Introduction</h2>
		<p>Node.js is a JavaScript runtime built on Chrome's V8 JavaScript engine. It's used to build scalable network applications. In this tutorial, we will create a simple "Hello World" application using Node.js.</p>

		<h2>Step-by-Step Guide</h2>
		<ol>
		    <li>
			<h3>Install Node.js</h3>
			<p>First, you need to install Node.js. You can download the latest version from the official <a href="https://nodejs.org/" target="_blank">Node.js website</a>.</p>
		    </li>
		    <li>
			<h3>Create a Project Directory</h3>
			<p>Create a new directory for your project and navigate into it:</p>
			<pre><code>mkdir mynodeapp
cd mynodeapp</code></pre>
		    </li>
		    <li>
			<h3>Initialize a Node.js Project</h3>
			<p>Initialize a new Node.js project by running the following command:</p>
			<pre><code>npm init -y</code></pre>
			<p>This will create a `package.json` file in your project directory.</p>
		    </li>
		    <li>
			<h3>Create the Hello World Script</h3>
			<p>Create a new file named <code>app.js</code> and open it in your favorite text editor. Add the following code:</p>
			<pre><code class="language-javascript">const http = require('http');

const hostname = '127.0.0.1';
const port = 3000;

const server = http.createServer((req, res) => {
    res.statusCode = 200;
    res.setHeader('Content-Type', 'text/plain');
    res.end('Hello, World!\n');
});

server.listen(port, hostname, () => {
    console.log(`Server running at http://${hostname}:${port}/`);
});</code></pre>
		    </li>
		    <li>
			<h3>Run the Application</h3>
			<p>To run the application, use the following command:</p>
			<pre><code>node app.js</code></pre>
			<p>You should see the following output in your terminal:</p>
			<pre><code>Server running at http://127.0.0.1:3000/</code></pre>
			<p>Open your browser and navigate to <a href="http://127.0.0.1:3000/" target="_blank">http://127.0.0.1:3000/</a> to see the "Hello, World!" message.</p>
		    </li>
		</ol>

		<h2>Conclusion</h2>
		<p>Congratulations! You've successfully created a "Hello World" application using Node.js. This is just the beginning of what you can do with Node.js. Explore further to build more complex and powerful applications.</p>
	    </div>
	</section>
    </main>
	<footer>
	      <div class="inner">
		<div class="column">

		  <div class="logo"><img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTCph8XWRdGgaQ6KIDAa39hhpsmHoPk-M3jiQx8SASeegAcqYFXeMQez2K0&s=10" class="logo"></div>

		  <p class="name">CodeWithArhan</p>
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