<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

		<?php echo $error; ?>
		<?php echo form_open_multipart('main/upload'); ?>
		<input type="file" name="userfile" />
		<input type="submit" name="submit" value="upload image" />
		<form>
</body>
</html>