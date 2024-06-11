<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="style.css" />
	<link rel="stylesheet" type="text/css"
		href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
	<title>Day 6 - Variables and Data Types - CodeWithArhan</title>
</head>

<body>
	<main>
		<nav>
			<div class="nav-inner">
				<div class="left">
					<div class="logo"><img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTCph8XWRdGgaQ6KIDAa39hhpsmHoPk-M3jiQx8SASeegAcqYFXeMQez2K0&s=10" class="logo"></div>

					<p class="name">CodeWithArhan</p>

					    <a href="/index.php">Home</a>

								<a href="/blog.php">Blog</a>

								<a href="/courses.php">Courses</a>

								<a href="/tutorials.php">Tutorials</a>

								<a href="/about.php">About</a>

					    <a href="/contact.php">Contact Us</a>
				</div>
				</div>
			</div>
		</nav>
		<iframe width="875" height="509" src="https://www.youtube.com/embed/ORCuz7s5cCY" title="Variables and Data Types | Python Tutorial - Day #6" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
		<br>
		<br>
		<section class="call-to-action">
			<div class="callout-container">
				<h2><b>Day 6 - Variables and Data Types</b></h2>
				<h3><b>What is a variable?</b></h3>
				<p>Variable is like a container that holds data. Very similar to how our containers in kitchen holds sugar, salt etc Creating a variable is like creating a placeholder in memory and assigning it some value. In Python its as easy as writing:</p>
				<pre><code class="language-python">
					a = 1
					b = True
					c = "Harry"
					d = None
				</code></pre>
	<p>These are four variables of different data types.</p>
				<h3><b>What is a Data Type?</b></h3>
				<p>Data type specifies the type of value a variable holds. This is required in programming to do various operations without causing an error.
				In python, we can print the type of any operator using type function:</p>
				<pre><code class="language-python">
					a = 1
					print(type(a))
					b = "1"
					print(type(b))
				</code></pre>
				<p>By default, python provides the following built-in data types:</p>
				<h3><b>1. Numeric data: int, float, complex</b></h3>
				<ul>
					<li><p>int: 3, -8, 0</p></li>
					<li><p>float: 7.349, -9.0, 0.0000001</p></li>
					<li><p>complex: 6 + 2i</p></li>
				</ul>
				<h3><b>2. Text data: str</b></h3>
				<p>str: "Hello World!!!", "Python Programming"</p>
				<h3><b>3. Boolean data:</b></h3>
				<p>Boolean data consists of values True or False.</p>
				<h3><b>4. Sequenced data: list, tuple</b></h3>
				<p><b>List</b>: A list is an ordered collection of data with elements separated by a comma and enclosed within square brackets. Lists are mutable and can be modified after creation.</p>
				<h3><b>Example:</b></h3>
				<pre><code class="language-python">
					list1 = [8, 2.3, [-4, 5], ["apple", "banana"]]
					print(list1)
				</code></pre>
				<h3><b>Output:</b></h3>
				<pre><code class="language-python">
					[8, 2.3, [-4, 5], ['apple', 'banana']]
				</code></pre>
				<p><b>Tuple</b>:  A tuple is an ordered collection of data with elements separated by a comma and enclosed within parentheses. Tuples are immutable and can not be modified after creation.</p>
				<h3><b>Example:</b></h3>
				<pre><code class="language-python">
					tuple1 = (("parrot", "sparrow"), ("Lion", "Tiger"))
					print(tuple1)
				</code></pre>
				<h3><b>Output:</b></h3>
				<pre><code class="language-python">
					(('parrot', 'sparrow'), ('Lion', 'Tiger'))
				</code></pre>
				<h3><b>5. Mapped data: dict</b></h3>
				<p><b>dict</b>: A dictionary is an unordered collection of data containing a key:value pair. The key:value pairs are enclosed within curly brackets.</p>
				<h3><b>Example:</b></h3>
				<pre><code class="language-python">
					dict1 = {"name":"Sakshi", "age":20, "canVote":True}
					print(dict1)
				</code></pre>
				<h3><b>Output:</b></h3>
				<pre><code class="language-python">
					{'name': 'Sakshi', 'age': 20, 'canVote': True}
	</code></pre>
	<iframe height="400px" width="100%" src="https://replit.com/@codewitharhan/06-Day6-Variables-and-Data-Types?lite=true" scrolling="no"frameborder="no" allowtransparency="true" allowfullscreen="true" sandbox="allow-forms allow-pointer-lock allow-popups allow-same-origin allow-scripts allow-modals"></iframe>
				<button class="cta" onclick="location.href='/courses/100-days-python/day5.php'">Previous</button>
				<button class="cta" onclick="location.href='/courses/100-days-python/day7.php'">Next>></button>
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
	<script src="script.js"></script>
</body>

</html>