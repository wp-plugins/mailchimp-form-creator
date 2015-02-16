<div id="mcfc_form_container" class="mcfc_form_container" style="background-color:<?php echo $background_color; ?>">
	<div id="mcfc_headline" class="mcfc_headline"><?php echo $headline; ?></div>
	<?php
		if($image){
	?>
	<div id="mcfc_image" class="mcfc_image"><img src="<?php echo $image ?>"/></div>
	<?php
		} //end if($image)
	?>
	<div id="mcfc_message" class="mcfc_message"><?php echo wpautop($message); ?></div>
	<div id="mcfc_form_box">
		<form action="<?php echo $mailchimp_url ?>" id="mcfc_form" method="post">
			<div id="mcfc_name_field">
				<input type="text" name="FNAME" placeholder="Enter Your Name" class="mcfc_name">
			</div>
			<div id="mcfc_email_field">
				<input type="text" name="EMAIL" placeholder="Enter Your Email" class="mcfc_email">
			</div>
		</form>
	</div>
	<div id="mcfc_button" class="mcfc_button">
		<a class="btn" href="#" style="background:<?php echo $button_color; ?>"><?php echo $button_text; ?></a>
	</div>
</div>
