<?php 
require_once('TwitterAPIExchange.php');
$settings = array(
    'oauth_access_token' => "13450072-c4HXOsyRUMT8DHx28FrMBOiJgYyJPJYYBfFMvTrbN",
    'oauth_access_token_secret' => "LdPDDHoabur6sQpmVRp9HDQm2gHixuMkKJ1HfwPzbCkJI",
    'consumer_key' => "7Z1aDUN0AMIu4zJQWEpmlCo2M",
    'consumer_secret' => "JDG65QU5eIiNGOWPi8aRLD15kDiGJ7Ci0pcP46mZWHSp2Wr9pH"
);

$search = $_GET['search'];
//$replace = $_GET['replace'];


$url = 'https://api.twitter.com/1.1/search/tweets.json';
$getfield = "?q=$search&result_type=recent&lang=es";
//echo $getfield;
$requestMethod = 'GET';
$twitter = new TwitterAPIExchange($settings);
echo $twitter->setGetfield($getfield)
             ->buildOauth($url, $requestMethod)
             ->performRequest();

?>