<?php
$page_title = "Skills | Rainey Piechowski";
$page_description = "Here is a layout of all my note-worthy skills.";

require("static/includes/header.inc.php");
?>
	<link rel="stylesheet" href="<?php echo(BASE_URL . "/static/css/skills.css"); ?>">
	<main>
		<?php
		$side_bar_selected = "skills";
		require("static/includes/side-bar.inc.php");
		?>
		<div class="content-frame">
			<div class="page-title-block">
				<div></div>
				<h1>SKILLS</h1>
			</div>
			<div class="content-wrapper">
				<section class="margin-bottom-24">
					<h3 class="margin-bottom-24">PHP</h3>
					<ul class="unordered-list">
						<li><p>OOP with data classes</p></li>
						<li><p>Building Search algorithms</p></li>
						<li><p>Integration with MySQL Databases</p></li>
						<li><p>File Uploading</p></li>
						<li><p>Security Measures</p></li>
					</ul>
				</section>
				<section class="margin-bottom-24">
					<h3 class="margin-bottom-24">SQL</h3>
					<ul class="unordered-list">
						<li><p>Joins</p></li>
						<li><p>Full Text searches</p></li>
						<li><p>PhpMyAdmin</p></li>
						<li><p>Normalized database design</p></li>
					</ul>
				</section>
				<section class="margin-bottom-24">
					<h3 class="margin-bottom-24">JavaScript</h3>
					<ul class="unordered-list">
						<li><p>Advanced DOM manipulation skills</p></li>
						<li><p>Basic Jquery knowledge</p></li>
						<li><p>Deep Experience using the Quill.js WYSIWYG library</p></li>
						<li><p>AJAX</p></li>
					</ul>
				</section>
				<section class="margin-bottom-24">
					<h3 class="margin-bottom-24">CSS</h3>
					<ul class="unordered-list">
						<li><p>Responsive design</p></li>
						<li><p>Extensive CSS grid and FlexBox experience</p></li>
						<li><p>CSS selectors</p></li>
					</ul>
				</section>
				<section class="margin-bottom-24">
					<h3 class="margin-bottom-24">HTML</h3>
					<ul class="unordered-list">
						<li><p>Experience with responsive & semantic markup</p></li>
						<li><p>Mid-page links</p></li>
					</ul>
				</section>
				<section class="margin-bottom-24">
					<h3 class="margin-bottom-24">git</h3>
					<ul class="unordered-list">
						<li class="margin-bottom-12"><p>Experience using git through <a class="link" target="_blank" href="https://www.bitbucket.com">Bitbucket</a></p></li>
						<li><p>Extensive Knowledge of git branches and working with git in a team enviroment</p></li>
					</ul>
				</section>
				<section class="margin-bottom-24">
					<h3 class="margin-bottom-24">Additional Skills</h3>
					<ul class="unordered-list">
						<li><p>Regular Expressions</p></li>
						<li><p>URL Rewriting</p></li>
						<li><p>JSON</p></li>
						<li><p>Experience with <a class="link" target="_blank" href="https://www.unsplash.com">Unsplash</a> API</p></li>
						<li><p>SEO knowledge including keyword usage and meta data design</p></li>
						<li><p>Pagination</p></li>
					</ul>
				</section>
				<p>In addition to all of the skills above, I am highly proficint in web design as well. I have experience building websites (including this one) from scratch completely on my own.</p>
			</div>
			<?php require("static/includes/footer.inc.php"); ?>
		</div>
	</main>
</body>
</html>