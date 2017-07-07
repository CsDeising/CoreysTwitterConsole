<?php

/*
 * This is our 'home' controller for the front page of the application.
 */

class Home extends Controller
{
    // This method is used as the default landing point of the web app.
    public function index()
    {
        // Action was sent via post on our form to update Twitter feeds.
        if(isset($_POST['action']))
        {
            $action = $_POST['action'];
            
            if($action == "updateFeeds")
            {   
                // Call this function to get our twitter information so it can
                // be passed over to our view.
                $this->getTwitterFeedUserInformation();   
            }
        }
        else
        {
            // The form wasn't used - Maybe it's the first visit from the user?
            // Set empty strings as we don't have users to show feed for.
            $twitterFeedUserOne = "";
            $twitterFeedUserTwo = "";
            $twitterFeedUserThree = "";
        }
        
        // Show our view.
        require_once 'application/views/_templates/header.php';
        require_once 'application/views/home/index.php';
        require_once 'application/views/_templates/footer.php';
    }
    
    // This method is used to interact with our model to get feed from API.
    private function getTwitterFeedUserInformation()
    {
        // 'Load our model' which is a function extended from base controller.
        $tweets_module = $this->loadModel('ReadTwitter');
        
        // Make sure our first Twitter feed user is not empty.
        if(!empty($_POST['twitterFeedUserOne']))
        {
            // Since it isn't empty, set it to variable and pass it as an
            // argument to be called to the API.
            $twitterFeedUserOne = $_POST['twitterFeedUserOne'];
            $tweetsUserOne = $tweets_module->getAllTweets($twitterFeedUserOne);
            
        }
        else
        {
            // We will use this to set feed user back to an empty string.
            // This is useful when form is used from view without all feed users
            // set.
           $twitterFeedUserOne = ""; 
        }
        
        // Repeat the same below for the other two Twitter feed users.
        if(!empty($_POST['twitterFeedUserTwo']))
        {
            $twitterFeedUserTwo = $_POST['twitterFeedUserTwo'];
            $tweetsUserTwo = $tweets_module->getAllTweets($twitterFeedUserTwo);
        }
        else
        {
           $twitterFeedUserTwo = ""; 
        }
        
        if(!empty($_POST['twitterFeedUserThree']))
        {
            $twitterFeedUserThree = $_POST['twitterFeedUserThree'];
            $tweetsUserThree = $tweets_module->getAllTweets($twitterFeedUserThree);
        }
        else
        {
           $twitterFeedUserThree = ""; 
        }
        
        // Show our view again. (Same page)
        require_once 'application/views/_templates/header.php';
        require_once 'application/views/home/index.php';
        require_once 'application/views/_templates/footer.php';
    }
}
