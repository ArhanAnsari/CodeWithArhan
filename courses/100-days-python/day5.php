<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="style.css" />
	<link rel="stylesheet" type="text/css"
		href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
	<title>Day 5 - Comments, Escape sequence & Print in Python - CodeWithArhan</title>
</head>

<body>
	<main>
		<nav>
			<div class="nav-inner">
				<div class="left">
					<div class="logo"></div>

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
		<iframe width="875" height="509" src="https://www.youtube.com/embed/qxPMmW93eDs" title="Comments, Escape Sequences &amp; Print Statement | Python Tutorial - Day #5" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
		<br>
		<br>
		<section class="call-to-action">
			<div class="callout-container">
				<h2><b>Day 5 - Comments, Escape sequence & Print in Python</b></h2>
				<p>Welcome to Day 5 of 100DaysOfCode. Today we will talk about Comments, Escape Sequences and little bit more about print statement in Python. We will also throw some light on Escape Sequences</p>
				<h2><b>Python Comments</b></h2>
				<p>A comment is a part of the coding file that the programmer does not want to execute, rather the programmer uses it to either explain a block of code or to avoid the execution of a specific part of code while testing.</p>
				<h2><b>Example 1</b></h2>
				<pre><code class="language-python">
					#This is a 'Single-Line Comment'
					print("This is a print statement.")
				</code></pre>
				<h2><b>Output:</b></h2>
				<pre><code class="language-python">
					This is a print statement.
				</code></pre>
				<h2><b>Example 2</b></h2>
				<pre><code class="language-python">
					print("Hello World !!!") #Printing Hello World	print("This is a print statement.")
				</code></pre>
				<h2><b>Output:</b></h2>
				<pre><code class="language-python">
					Hello World !!!
				</code></pre>
				<h2><b>Example 3</b></h2>
				<pre><code class="language-python">
					print("Python Program")
					#print("Python Program")
				</code></pre>
				<h2><b>Output:</b></h2>
				<pre><code class="language-python">
					Python Program
				</code></pre>
				<h2><b>Multi-Line Comments:</b></h2>
				<p>To write multi-line comments you can use ‘#’ at each line or you can use the multiline string.</p>
				<h2><b>Example 1: </b>The use of ‘#’.</h2>
				<pre><code class="language-python">
					#It will execute a block of code if a specified condition is true.
					#If the condition is false then it will execute another block of code.
					p = 7
					if (p > 5):
					    print("p is greater than 5.")
					else:
					    print("p is not greater than 5.")
				</code></pre>
				<h2><b>Output:</b></h2>
				<pre><code class="language-python">
					p is greater than 5.
				</code></pre>
				<h2><b>Example 2: </b>The use of multiline string.</h2>
				<pre><code class="language-python">
					"""This is an if-else statement.
					It will execute a block of code if a specified condition is true.
					If the condition is false then it will execute another block of code."""
					p = 7
					if (p > 5):
					    print("p is greater than 5.")
					else:
					    print("p is not greater than 5.")
				</code></pre>
				<h2><b>Output:</b></h2>
				<pre><code class="language-python">
					p is greater than 5.
				</code></pre>
				<h2><b>Escape Sequence Characters</b></h2>
				<p>To insert characters that cannot be directly used in a string, we use an escape sequence character.<br>

				An escape sequence character is a backslash \ followed by the character you want to insert.<br>

				An example of a character that cannot be directly used in a string is a double quote inside a string that is surrounded by double quotes:</p>
				<pre><code class="language-python">
					print("This doesnt "execute")
					print("This will \" execute")
				</code></pre>
				<h2><b>More on Print statement</b></h2>
				<p>The syntax of a print statement looks something like this:</p>
				<pre><code class="language-python">
					print(object(s), sep=separator, end=end, file=file, flush=flush)
				</code></pre>
				<h2><b>Other Parameters of Print Statement</b></h2>
				<ol>
					<li>object(s): Any object, and as many as you like. Will be converted to string before printed</li>
				<li>sep='separator': Specify how to separate the objects, if there is more than one. Default is ' '</li>
					<li>end='end': Specify what to print at the end. Default is '\n' (line feed)</li>
					<li>file: An object with a write method. Default is sys.stdout
</li>
				</ol>
				<p>Parameters 2 to 4 are optional</p>
	<iframe height="400px" width="100%" src="https://replit.com/@codewitharhan/05-Day5-Comments-and-Print?lite=true" scrolling="no"frameborder="no" allowtransparency="true" allowfullscreen="true" sandbox="allow-forms allow-pointer-lock allow-popups allow-same-origin allow-scripts allow-modals"></iframe>
				<button class="cta" onclick="location.href='/courses/100-days-python/day4.php'">Previous</button>
				<button class="cta" onclick="location.href='/courses/100-days-python/day6.php'">Next>></button>
			</div>
		</section>
	</main>
	<script src="script.js"></script>
</body>

</html>