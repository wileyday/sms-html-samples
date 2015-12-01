<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<?php
$api_key = 'NCS52A57F48C3D32';
$api_secret = '5AC44E03CE8E7212D9D1AD9091FA9966';
$timestamp = time();
$salt = uniqid();
$data = strval($timestamp) . $salt;
$signature = hash_hmac('md5', $data, $api_secret);
?>
<html lang="ko" xml:lang="ko" xmlns="http://www.w3.org/1999/xhtml">
	<head>
    	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	</head>
	<body>
		<form method="post" action="http://rest2.coolsms.co.kr/sms/1.5/send" enctype="multipart/form-data">
			API Key: <input type="text" name="api_key" value="<?php echo $api_key ?>" /><br />
			Timestame: <input type="text" name="timestamp" value="<?php echo $timestamp ?>" /><br />
			Salt: <input type="text" name="salt" value="<?php echo $salt ?>" /><br />
			Signature: <input type="text" name="signature" value="<?php echo $signature ?>" /><br />
			Country: <input type="text" name="country" value="" /><br />
			To: <input type="text" name="to" value="0162777580" /><br />
			From: <input type="text" name="from" value="01000000000" /><br />
			Subject: <input type="text" name="subject" value="TEST" /><br />
			Text: <textarea name="text">HELLO COOLSMS~!</textarea><br />
			Reservation: <input type="text" name="datetime" value="" /><br />
			Type: <select name="type"><option value="SMS">SMS</option><option value="LMS">LMS</option><option value="MMS">MMS</option></select><br />
			Image: <input type="file" name="image" /><br />
			OS / Platform: <input type="text" name="os_platform" value="Web Browser" /><br />
			Development Language: <input type="text" name="dev_lang" value="PHP <?php echo phpversion() ?>" /><br />
			SDK Version: <input type="text" name="sdk_version" value="" /><br />
			Application Version: <input type="text" name="app_version" value="HTML Example 1.1" /><br />
			<input type="submit" value="Submit" />
		</form>
	</body>
</html>
