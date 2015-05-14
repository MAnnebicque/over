<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Over | Home</title>
	<link rel="stylesheet" href="style.css">
	
</head>
<body>
	<div id="content">
		<div id="menu">
			<a href="#" id="work"><img src="./img/work.svg" alt="Work" /></a>
			<a href="#" id="about"><img src="./img/about.svg" alt="About" /></a>
			<a href="#" id="contact"><img src="./img/contact.svg" alt="Contact" /></a>
			<img src="./img/logo.png" id="logo">
		</div>
	</div>

	 <div class="twitter">

			<?php
class Twitter {
    public function __construct() {
        $this->_oauth_token = NULL;
        $this->_oauth_token_secret = NULL;
        $this->_oauth_consumer_key = "kzKkhcgcYY7ig91x4Pui2fI16";
        $this->_oauth_consumer_secret = "JercE0NwdoqQo78cfbzBb3Wuqp0IvNdAkvkqxzYrFyq0xeMriz";
        $this->_oauth_nonce = md5(rand());
        $this->_oauth_signature_method = "HMAC-SHA1";
        $this->_oauth_timestamp = time();
        $this->_oauth_version = "1.0";
    }
    public function user_timeline($user, $count) {
        $this->_method = "GET";
        $this->_user = "screen_name=" . rawurlencode($user);
        $this->_count = "count=" . rawurlencode($count);
        $this->_url = "https://api.twitter.com/1.1/statuses/user_timeline.json";
        $this->_parameter_string = $this->_count . "&" .
        rawurlencode("oauth_consumer_key") . "=" . rawurlencode($this->_oauth_consumer_key) . "&" .
        rawurlencode("oauth_nonce") . "=" . rawurlencode($this->_oauth_nonce) . "&" .
        rawurlencode("oauth_signature_method") . "=" . rawurlencode($this->_oauth_signature_method) . "&" .
        rawurlencode("oauth_timestamp") . "=" . rawurlencode($this->_oauth_timestamp) . "&" .
        rawurlencode("oauth_token") . "=" . rawurlencode($this->_oauth_token) . "&" .
        rawurlencode("oauth_version") . "=" . rawurlencode($this->_oauth_version) . "&" .
        $this->_user;
        $this->gen();
        $session = curl_init();
        curl_setopt($session, CURLOPT_URL, $this->_url . "?" . $this->_user . "&" . $this->_count);
        curl_setopt($session, CURLOPT_HTTPHEADER, $this->_DST);
        curl_setopt($session, CURLOPT_SSL_VERIFYPEER, 0);
        curl_setopt($session, CURLOPT_SSL_VERIFYHOST, 0);
        curl_setopt($session, CURLOPT_RETURNTRANSFER, 1);
        return json_decode(curl_exec($session), true);
    }
    public function linkeur($txt) {
        $txt=preg_replace('#(http|ftp|steam|https)://([A-Z0-9_-]+)(\.[a-z0-9]+){1,2}/?([A-Z0-9-/_\?=&;!\.]+)#i', '<a href="$0" title="$0" target="_blank">$0</a>', $txt);
        return $txt;
    }
    private function gen() {
        $this->_signature_base_string = rawurlencode($this->_method) . "&" .
        rawurlencode($this->_url) . "&" .
        rawurlencode($this->_parameter_string);
        $this->_signing_key = rawurlencode($this->_oauth_consumer_secret) . "&" .
        rawurlencode($this->_oauth_token_secret);
        $this->_oauth_signature = base64_encode(hash_hmac('SHA1', $this->_signature_base_string, $this->_signing_key, TRUE));
        $this->_DST = array (
            "Authorization: OAuth " .
            rawurlencode("oauth_consumer_key") . "=\"" . rawurlencode($this->_oauth_consumer_key) . "\", " .
            rawurlencode("oauth_nonce") . "=\"" . rawurlencode($this->_oauth_nonce) . "\", " .
            rawurlencode("oauth_signature") . "=\"" . rawurlencode($this->_oauth_signature) . "\", " .
            rawurlencode("oauth_signature_method") . "=\"" . rawurlencode($this->_oauth_signature_method) . "\", " .
            rawurlencode("oauth_timestamp") . "=\"" . rawurlencode($this->_oauth_timestamp) . "\", " .
            rawurlencode("oauth_token") . "=\"" . rawurlencode($this->_oauth_token) . "\", " .
            rawurlencode("oauth_version") . "=\"" . rawurlencode($this->_oauth_version) . "\""
        );
    }
}
?>

			
	</div>

<div class="fb-like" data-href="https://www.facebook.com/AgenceOver" data-layout="button_count" data-action="like" data-show-faces="true" data-share="true"></div>

	<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/fr_FR/sdk.js#xfbml=1&version=v2.3";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
	
	

</body>
</html>