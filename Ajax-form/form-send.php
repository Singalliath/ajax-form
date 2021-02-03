<script type="text/javascript">
	// Start by removing any error class from all input fields
	$(".form-name, .form-email, .form-message").removeClass("input-error");

	// Store the value of PHP variables into JavaScript variables
	var errorEmpty = "<?= $errorEmpty; ?>";
	var errorEmail = "<?= $errorEmail; ?>";

	// If any fields are empty, errorEmpty will return true
	// Add error class on all input fields
	if (errorEmpty == true) {
		$(".form-name, .form-email, .form-message").addClass("input-error");
	}

	// If email address is invalid, errorEmail will return true
	// Add error class on that input field
	if (errorEmail == true) {
		$(".form-email").addClass("input-error");
	}

	// If all fields are filled and email address is valid, remove values from all input fields
	if (errorEmpty == false && errorEmail == false) {
		$(".form-name, .form-email, .form-message").val("");
    }
    //I have no clue why only script in in the php
</script>
