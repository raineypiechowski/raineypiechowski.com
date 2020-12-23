<?php
$page_title = "Rainey Piechowski - Full Stack Web Developer";
$page_description = "Welcome to my website, it's about me, my hobbies, and web development";

require("static/includes/header.inc.php");
?>
	<main>
		<?php
		$side_bar_selected = "home";
		require("static/includes/side-bar.inc.php");
		?>
		<link rel="stylesheet" href="<?php echo(BASE_URL . "static/css/home.css"); ?>">
		<div class="content-frame">
			<div class="content-wrapper">
				<section class="main-banner">
					<div class="first-box"></div>
					<div class="second-box">
						<div></div>
					</div>
					<div class="third-box"></div>
				</section>
				<div class="margin-bottom-24"></div>
				<h2 class="margin-bottom-12">About Me</h2>
				<p class="margin-bottom-24">
					My Name is Rainey Piechowski, and I live to create beauty for myself and others to enjoy.
					From a very young age to my current age of <?php echo(get_age("2003-08-15")); ?>, I have spent my time creating beautiful things.
					It started with LEGO and slowly glided toward web development, where my passion lies today.
					It makes me feel good when others get to appreciate the things I work hard on.
					This; is the reason why I love web development.
				</p>
				<p>
					I have devoted my life to learning and growing toward becoming the best version of myself.
					I am a life-long learner and am not afraid to try new and better ways of accomplishing things.
					I keep an open mind, while at the same time, not being afraid to share my thoughts.
				</p>
			</div>
			<?php require("static/includes/footer.inc.php"); ?>
		</div>
	</main>
</body>
</html>
<?php
function get_age($bday) {
	$age = floor((time() - strtotime($bday)) / 31556926);
	return $age;
}
?>