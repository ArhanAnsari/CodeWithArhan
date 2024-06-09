<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="style.css" />
	<link rel="stylesheet" type="text/css"
		href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
	<title>Day 3 - Modules and pip in Python! - CodeWithArhan</title>
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
		<iframe width="875" height="509" src="https://www.youtube.com/embed/xwKO_y2gHxQ" title="Modules and Pip | Python Tutorial - Day #3" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
		<br>
		<br>
		<section class="call-to-action">
			<div class="callout-container">
				<h2><b>Day 3 - Modules and pip in Python!</b></h2>
				<p>Module is like a code library which can be used to borrow code written by somebody else in our python program. There are two types of modules in python:</p>
				<ol>
					<li>Built in Modules - These modules are ready to import and use and ships with the python interpreter. there is no need to install such modules explicitly.</li>
					<li>External Modules - These modules are imported from a third party file or can be installed using a package manager like pip or conda. Since this code is written by someone else, we can install different versions of a same module with time.</li>
				<h2><b>What can Python do for you?</b></h2>
				<p>I want to show you some Python programs I created which will surely inspire you to create your own versions of the same as we progress through this tutorial. Do not try to recreate them just yet if you are a beginner and just started working on Python. We will make progress gradually trust me.</p>
				<h2><b>The pip command</b></h2>
				<p>It can be used as a package manager pip to install a python module. Lets install a module called pandas using the following command<br></p>
			<pre><code class="language-python">
					pip install pandas
				</code></pre>
			<h2><b>Using a module in Python (Usage)</b></h2>
				<p>We use the import syntax to import a module in Python. Here is an example code:</p>
					<pre><code class="language-python">
						import pandas

						# Read and work with a file named 'words.csv'
						df = pandas.read_csv('words.csv')
						print(df) # This will display first few rows from the words.csv file
					</code></pre>
					<p>Similarly we can install other modules and look into their documentations for usage instructions.<br>
					We will find ourselved doing this often in the later part of this course</p>

	<iframe height="400px" width="100%" src="https://replit.com/@codewitharhan/03-Day3-Modules-and-Pip?lite=true" scrolling="no"frameborder="no" allowtransparency="true" allowfullscreen="true" sandbox="allow-forms allow-pointer-lock allow-popups allow-same-origin allow-scripts allow-modals"></iframe>
				<button class="cta" onclick="location.href='/courses/100-days-python/day2.php'">Previous</button>
				<button class="cta" onclick="location.href='/courses/100-days-python/day4.php'">Next>></button>
			</div>
		</section>
	</main>
	<script src="script.js"></script>
</body>

</html>