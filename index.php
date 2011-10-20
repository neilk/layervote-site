<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<title>LayerVote - a Dynamic Democracy project</title>
	<link rel="stylesheet" type="text/css" href="css/main.css" />
	<!--[if IE]>
		<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->
</head>

<body id="home">

	<h1>
		<img src="layer-vote-logo-ongrey-405x108.png" width="405" height="108" alt="LayerVote">
	</h1>

	<div class="narrow">

		<p>We're building tools to help groups make better decisions together.</p>
		
		<p>For infrequent notes about our progress, or early access to prototypes, sign up below.</p>

		<div id="form">
			<form name="formMail" action='email.php' method='post' enctype='multipart/form-data'>
			<input type="text" name="email" id="email" class='text_box'>
			<input type='submit' id="submit" value='Request early access' class='form_button'>
			</form>
		</div>

	</div>

	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.6.4/jquery.min.js"></script>
	<script language="javascript">
		( function($, undefined) {
			var $email = $('#email')
			function showSampleEmail() {
				$email.css('color', '#a0a0a0').val('you@sample.com');
			}
			$email
				.focus( function() {
					$email.css('color', '#000000').val('');
				} )
				.blur( function() {
					if ($.trim($email.val()) === '' ) {
						showSampleEmail();
					}
				} );
			showSampleEmail();	
		} )( jQuery );
	</script>

</body>
</html>
