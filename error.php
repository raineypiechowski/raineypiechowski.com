<?php
$page_title = "Error Encountered!";
$page_description = "Error Encountered! We will fix it as soon as possible.";

require("static/includes/header.inc.php");
?>
	<main>
		<?php
		$side_bar_selected = "";
		require("static/includes/side-bar.inc.php");
		?>
		<div class="content-frame">
			<div class="content-wrapper">
				<h1 class="big-text">Error Encountered!</h1>
				<p class="center-text margin-bottom-24">The system administrator has been notified of the problem and it working to fix it as soon as possible.</p>
				<div class="center-content">
					<a class="btn" href="<?php echo(BASE_URL); ?>">Go&nbsp;Home&nbsp;&rarr;</a>
				</div>
			</div>
			<?php require("static/includes/footer.inc.php"); ?>
		</div>
	</main>
</body>
</html>