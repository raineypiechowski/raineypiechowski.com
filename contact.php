<?php
$page_title = "Contact | Rainey Piechowski";
$page_description = "Contact me now and I will get back to you shortly.";

$email_sent = false;

if($_SERVER['REQUEST_METHOD'] == "POST"){
	$firstName = isset($_POST['first_name']) ? $_POST['first_name'] : null;	
	$lastName = isset($_POST['last_name']) ? $_POST['last_name'] : null;	
	$email = isset($_POST['email']) ? $_POST['email'] : null;	
	$comments = isset($_POST['message']) ? $_POST['message'] : null;
	
	if(validate_contact_data($firstName, $lastName, $email, $comments)){
		$scrubbed = array_map("spam_scrubber", $_POST);

		$first_name = $scrubbed["first_name"];
		$last_name = $scrubbed["last_name"];
		$phone = $scrubbed["phone"];
		$email = $scrubbed["email"];
		$message = wordwrap($scrubbed["message"], 70, "\n", true);

		$msg = "Name: $first_name $last_name<br><br>";
		if ($phone != "") {
			$msg .= "Phone Number: $phone<br><br>";
		}
		$msg .= "Email: $email<br><br>";
		$msg .= "Message: $message";

		if (send_email(ADMIN_EMAIL, "Personal Website Contact Form Submission", $msg, "From:" . $email)) {
			$email_sent = true;
		}
	} else {
		$msg = get_all_super_globals(); 
		send_email(ADMIN_EMAIL, "Security Warning!", $msg);
		header("Location: " . BASE_URL . "/error");
	}

}

require("static/includes/header.inc.php");
?>
	<link rel="stylesheet" href="<?php echo(BASE_URL . "static/css/contact.css"); ?>">
	<main>
		<?php
		$side_bar_selected = "contact";
		require("static/includes/side-bar.inc.php");
		?>
		<div class="content-frame">
			<div class="page-title-block">
				<div></div>
				<h1>CONTACT</h1>
			</div>
			<div class="content-wrapper">
				<?php
				if ($email_sent) {
					?>
					<div class="contact-validation">
						Message Sucessfully Sent!<svg viewBox="-4.992999999999995,-4.985,109.985,109.985"><desc>Message Sucessfully Sent</desc><g><path d="M48.44,75.934h-0.004L19.229,46.727l13.312-13.312l15.896,15.896l35.729-35.73C75.224,5.189,63.229,0.015,49.999,0.015  c-27.613,0-49.992,22.379-49.992,49.992C0.007,77.613,22.386,100,49.999,100c27.607,0,49.993-22.387,49.993-49.993  c0-7.499-1.697-14.581-4.656-20.968L48.44,75.934z" stroke="none"></path></g></svg>
					</div>
					<div class="center-content margin-bottom-24">
						<a class="btn" href="<?php echo(BASE_URL); ?>">Go&nbsp;Home&nbsp;&rarr;</a>
					</div>
					<?php
				} else {
					?>
					<script src="<?php echo(BASE_URL . "static/js/contact.js"); ?>"></script>
					<p class="margin-bottom-24">
						Contact me now and I will get back to you shortly.
					</p>
					<form id="contact-form" method="post" novalidate>
						<div class="grid">
							<div>
								<label for="first-name-txt">First Name:</label>
								<div class="validation-msg" id="first-name-validation-msg"></div>
								<input type="text" class="wide txt-input" id="first-name-txt" name="first_name">
							</div>
							<div>
								<label for="first-name-txt">Last Name:</label>
								<div class="validation-msg" id="last-name-validation-msg"></div>
								<input type="text" class="wide txt-input" id="last-name-txt" name="last_name">
							</div>
							<div>
								<label for="phone-txt">Phone Number:</label>
								<input type="tel" class="wide txt-input" id="phone-txt" name="phone">
							</div>
							<div>
								<label for="email-txt">Email:</label>
								<div class="validation-msg" id="email-validation-msg"></div>
								<input type="email" class="wide txt-input" id="email-txt" name="email">
							</div>
						</div>
						<div class="validation-msg" id="message-validation-msg"></div>
						<textarea id="message-txt" name="message" placeholder="Type message here..."></textarea>
						<div class="center-content">
							<input type="submit" class="btn" value="Submit">
						</div>
					</form>
					<?php
				}
				?>
			</div>
			<?php
			require("static/includes/footer.inc.php"); ?>
		</div>
	</main>
</body>
</html>
<?php

function validate_contact_data($first_name, $last_name, $email, $comments) {
	if (empty($first_name) || empty($last_name) || empty($comments) || empty ($email)) {
		return false;
	}

	if (filter_var($email, FILTER_VALIDATE_EMAIL) === false) {
		return false;
	}

	return true;
}

function spam_scrubber($str) {
	$very_bad = array('to:', 'cc:', 'bcc:', 'content-type:', 'mime-version:', 'multipart-mixed:', 'content-transfer-encoding:');

	foreach ($very_bad as $v) {
		if (stripos($str, $v) !== false){
			return "";
		}
	}

	return $str;
}
?>


