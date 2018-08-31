<?php
/*
// Get Twitter Timeline
$twitter = json_decode(file_get_contents('http://api.twitter.com/1/statuses/user_timeline.json?screen_name=twandy&include_rts=0&count=1&exclude_replies=1', true));
if($twitter != '') // If a Tweet is found
{
	// Get Tweet date & convert to desired format
	$twitter_created = date('jS F, Y', strtotime($twitter[0]->created_at));
	// Strip HTML from Tweet
	$twitter_text = strip_tags($twitter[0]->text);
	// Echo result
	echo "	<p>&#8220;" . $twitter_text . 	"&#8221; - " . $twitter_created . "</p>\n";
}
else // If no Tweets are found
{
	echo "	<p>Tweets unavailable.</p>\n";
}
*/
?>
<?php 
include("TwitterAPIExchange.php");

$settings = [
    // Set here tokens from your Twitter's app
    'consumer_key' => 'vf68nOdsoV8hPHXWwZ3WcEnAM',
    'consumer_secret' => 'JIusgamfCf6sPXofqapgwLNgzh2K4W78mSSpT6mT4Sxr7DTpqC',
    
    // The Twitter account name
    'screen_name' => 'netglooweb',
    
    // The number of tweets
    'count' => 5,
];
?>
<?php 
$url = 'https://api.twitter.com/1.1/search/tweets.json';
$requestMethod = 'GET';

$getfield = '?q=#hashtag1+OR+#hashtag2+from:username1+OR+from:username2';

$twitter = new TwitterAPIExchange($settings);
$response =  $twitter->setGetfield($getfield)
->buildOauth($url, $requestMethod)
->performRequest();

var_dump(json_decode($response));
?>