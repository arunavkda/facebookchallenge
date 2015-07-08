<?php



	ini_set('max_execution_time', 300);
	ini_set('display_errors', 1);
	
	



	require_once('libs/Facebook/GraphObject.php');
	require_once('libs/Facebook/GraphSessionInfo.php');
	require_once('libs/Facebook/GraphUser.php');
    require_once('libs/Facebook/GraphLocation.php');
	require_once('libs/Facebook/Entities/AccessToken.php');
	require_once('libs/Facebook/HttpClients/FacebookHttpable.php');
	require_once('libs/Facebook/HttpClients/FacebookCurl.php');
	require_once('libs/Facebook/HttpClients/FacebookCurlHttpClient.php');
	require_once('libs/Facebook/FacebookSession.php' );
	require_once('libs/Facebook/FacebookRedirectLoginHelper.php' );
	require_once('libs/Facebook/FacebookRequest.php' );
	require_once('libs/Facebook/FacebookResponse.php' );
	require_once('libs/Facebook/FacebookSDKException.php' );
	require_once('libs/Facebook/FacebookRequestException.php' );
	require_once('libs/Facebook/FacebookAuthorizationException.php' );

	
	$fb_app_id = '1418460641816089'; // Goto your Fb app->settings
	$fb_secret_id = '0db37bbceb9e7e3face3f18638c759a5'; // Goto your Fb app->settings

	//fb_login_url is same url which is added in facebook app->settings.
	$fb_login_url = 'http://4colorstechnologies.com/fbchallenge/index.php'; 
	$fb_logout_url = 'http://4colorstechnologies.com/fbchallenge/logout.php';

	//session_start();

?>
