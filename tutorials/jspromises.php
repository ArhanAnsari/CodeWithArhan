<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Understanding JavaScript Promises</title>
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
		<h1>Understanding JavaScript Promises</h1>
	    </div>
	</section>
	<section class="tutorial-content">
	    <div class="content-container">
		<h2>Introduction</h2>
		<p>Promises are a fundamental concept in JavaScript for handling asynchronous operations. They provide a cleaner, more intuitive way to handle asynchronous code compared to callbacks. In this tutorial, we'll explore what Promises are, how they work, and how to use them effectively in your JavaScript code.</p>

		<h2>What is a Promise?</h2>
		<p>A Promise is an object representing the eventual completion or failure of an asynchronous operation. It has three states:</p>
		<ul>
		    <li><strong>Pending:</strong> The initial state, neither fulfilled nor rejected.</li>
		    <li><strong>Fulfilled:</strong> The operation completed successfully.</li>
		    <li><strong>Rejected:</strong> The operation failed.</li>
		</ul>

		<h2>Creating a Promise</h2>
		<p>You can create a Promise using the <code>Promise</code> constructor, which takes a function (executor) with two arguments: <code>resolve</code> and <code>reject</code>. Here's an example:</p>
		<pre><code class="language-javascript">const myPromise = new Promise((resolve, reject) => {
    // asynchronous operation
    let success = true;

    if (success) {
	resolve('Operation was successful!');
    } else {
	reject('Operation failed.');
    }
});

myPromise.then((message) => {
    console.log(message);
}).catch((error) => {
    console.log(error);
});</code></pre>

		<h2>Using Promises</h2>
		<p>Promises have methods <code>then</code>, <code>catch</code>, and <code>finally</code> to handle the outcome of the Promise.</p>
		<h3><code>then</code> Method</h3>
		<p>The <code>then</code> method takes up to two arguments: callback functions for the fulfilled and rejected cases. Example:</p>
		<pre><code class="language-javascript">myPromise.then((message) => {
    console.log('Success:', message);
}, (error) => {
    console.log('Error:', error);
});</code></pre>

		<h3><code>catch</code> Method</h3>
		<p>The <code>catch</code> method is a shorthand for <code>then(null, rejection)</code>. Example:</p>
		<pre><code class="language-javascript">myPromise.catch((error) => {
    console.log('Error:', error);
});</code></pre>

		<h3><code>finally</code> Method</h3>
		<p>The <code>finally</code> method is executed regardless of the Promise's outcome. Example:</p>
		<pre><code class="language-javascript">myPromise.finally(() => {
    console.log('Promise is settled (fulfilled or rejected).');
});</code></pre>

		<h2>Chaining Promises</h2>
		<p>Promises can be chained to handle a sequence of asynchronous operations. Example:</p>
		<pre><code class="language-javascript">fetch('https://api.example.com/data')
    .then(response => response.json())
    .then(data => {
	console.log(data);
	return fetch('https://api.example.com/other-data');
    })
    .then(response => response.json())
    .then(otherData => {
	console.log(otherData);
    })
    .catch(error => {
	console.error('Error:', error);
    });</code></pre>

		<h2>Conclusion</h2>
		<p>Promises are a powerful feature in JavaScript for managing asynchronous operations. Understanding how to use them effectively can significantly improve the readability and maintainability of your code. Start using Promises today to handle your asynchronous tasks more elegantly!</p>
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