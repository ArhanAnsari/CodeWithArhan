<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="style.css" />
	<link rel="stylesheet" type="text/css"
		href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
	<title>Day 7 - Operators - CodeWithArhan</title>
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
		<iframe width="875" height="509" src="https://www.youtube.com/embed/FLVqcxnJP_E" title="Exercise 1: Calculator using Python | Python Tutorial - Day #7" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
		<br>
		<br>
		<section class="call-to-action">
			<div class="callout-container">
				<h2><b>Day 7 - Operators</b></h2>
				<p>Python has different types of operators for different operations. To create a calculator we require arithmetic operators.</p>
				<h3><b>Arithmetic operators</b></h3>
				<table>
				  <tr>
				    <th>Operator</th>
				    <th>Operator Name</th>
				    <th>Example</th>
				  </tr>
				  <tr>
				    <td>+</td>
				    <td>Addition</td>
				    <td>15+7</td>
				  </tr>
				  <tr>
				    <td>-</td>
				    <td>Subtraction</td>
				    <td>15-7</td>
				  </tr>
					<tr>
					    <td>*</td>
					    <td>Multiplication</td>
					    <td>15*7</td>
					  </tr>
					<tr>
					    <td>**</td>
					    <td>Exponential</td>
					    <td>15**7</td>
					  </tr>
					<tr>
					    <td>/</td>
					    <td>Division</td>
					    <td>15/7</td>
					  </tr>
					<tr>
					    <td>%</td>
					    <td>Modulus</td>
					    <td>15%7</td>
					  </tr>
					<tr>
					    <td>//</td>
					    <td>Floor Division</td>
					    <td>15//7</td>
					  </tr>
					<h3><b>Exercise</b></h3>
				</table>
				<pre><code class="language-python">
					n = 15
					m = 7
					ans1 = n+m
					print("Addition of",n,"and",m,"is", ans1)
					ans2 = n-m
					print("Subtraction of",n,"and",m,"is", ans2)
					ans3 = n*m
					print("Multiplication of",n,"and",m,"is", ans3)
					ans4 = n/m
					print("Division of",n,"and",m,"is", ans4)
					ans5 = n%m
					print("Modulus of",n,"and",m,"is", ans5)
					ans6 = n//m
					print("Floor Division of",n,"and",m,"is", ans6)
				</code></pre>
				<h3><b>Explaination</b></h3>
				<p>Here 'n' and 'm' are two variables in which the integer value is being stored. Variables 'ans1' , 'ans2' ,'ans3', 'ans4','ans5' and 'ans6' contains the outputs corresponding to addition, subtraction,multiplication, division, modulus and floor division respectively.</p>
				<h3><b>Exercise 1 - Create a Calculator</b></h3>
				<p>Create a calculator capable of performing addition, subtraction, multiplication and division operations on two numbers. Your program should format the output in a readable manner!</p>
	<iframe height="400px" width="100%" src="https://replit.com/@codewitharhan/07-Day7-Exercise-1-Create-a-Calculator?lite=true" scrolling="no"frameborder="no" allowtransparency="true" allowfullscreen="true" sandbox="allow-forms allow-pointer-lock allow-popups allow-same-origin allow-scripts allow-modals"></iframe>
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