<?php
	// this is configuring for our PHP server
	set_time_limit(0);
	ini_set('default_socket_timeout', 300);
	session_start();

	// we are using our defines and making our constants
	define('clientID',  '4578f1acb2e2424ebddc2d782e17f511');
	define('clientSecret',  'ab0f9f3550374f56a29ec4998465f41c');
	define('redirectURI',  'http://localhost/appacademyapi/index.php');
	define('ImageDirectory',  'pics/');
	// fucntion connecting to instagram
// if statement checking for bullions true and not true
	// checking for get
	if (isset($_GET['code'])) {
		$code = ($_GET['code']);
		$url = 'https://api.instagram.com/oauth/access_token';
		// array is accessing the code
		$access_token_settings = array('client_id' => clientID,
									   'client_secret' => clientSecret,
									   'grant_type' => 'authorization_code',
									   'redirect_uri' => redirectURI,
									   'code' => $code
									   );
?>
<!DOCTYPE html>
<html>
<head>
	<!-- basic html tags linking certain pages -->
	<meta charset="utf-8">
	<meta name="description" content="">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Untitled</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="author" type="text/css" href="humans.txt">
</head>
<body>
	<!-- creating a login for people to go and give approval for our web to access their instagram account -->
	<!-- after we get the approval we are going to have the info so we can play with it -->
	<!-- echoing the constants and showing the code from instagram -->
	<a href="https://api.instagram.com/oauth/authorize/?client_id=<?php echo clientID; ?>&redirect_uri=<?php echo redirectURI; ?>&response_type=code">LOGIN</a>
	<script src-"js/main.js"></script>
</body>
</html>
<?php
	}
?>



