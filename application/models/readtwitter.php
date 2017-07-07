<?php

class ReadTwitter
{
    function __construct()
    {
        // We don't need to do anything in our construct at the moment.
    }

    // Allows the passing of a string (twitter user) for us to use with API.
    public function getAllTweets($twitterUser)
    {
        // Require the third party API exchange so we can construct our request
        // to the Twitter API.
        require_once('TwitterAPIExchange.php');
        
        // Instantiate our array with our Twitter account developer API tokens.
        // This information is coming from our config file.
        $settings = array(
            'oauth_access_token' => ACCESS_TOKEN,
            'oauth_access_token_secret' => ACCESS_TOKEN_SECRET,
            'consumer_key' => CONSUMER_KEY,
            'consumer_secret' => CONSUMER_SECRET
        );
        
        // The URL we are doing our request to.
        $url = "https://api.twitter.com/1.1/statuses/user_timeline.json";
        
        $requestMethod = "GET";
        
        // The number of latest tweets to grab. This can easily be dynamic and
        // controlled by the end user. In the mean time, use 20 until we do that
        $twitterCount = 20;

        $getfield = "?screen_name=$twitterUser&count=$twitterCount";

        // Perform our request and decode the JSON that is returned by Twitter.
        $twitter = new TwitterAPIExchange($settings);
        $string = json_decode($twitter->setGetfield($getfield)
        ->buildOauth($url, $requestMethod)
        ->performRequest(),$assoc = TRUE);

        // Return our array of the decoded JSON.
        return $string;

    }
}
