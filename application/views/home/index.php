<!--

Default view of the home page.

-->

<div class="container">

    <div id="grayBar"><img id ="consoleLogo" src="/public/img/twitterconsole.png" alt="Logo"></div>
 
    <h1>Feeds</h1>
    
<?php
  
  
  echo "<div class='tweet_wrapper'>";
  echo "<h1 class='userFeedName'>$twitterFeedUserOne</h1>";
  
  if(!empty($tweetsUserOne))
  {
    foreach($tweetsUserOne as $items)
    {
		
	echo "<div class='tweet_container'>";
        echo "<p class='time_stamp'>".$items['created_at']."</p> <br />";
        echo $items['text']."<br />";
	echo "</div>";
	
    }
  }
  else
    {
      echo "<img class ='noFeedAvailable' src='/public/img/noFeed.jpg' alt='No Twitter Feed Available' height='256' width='256'>";  
    }
    
    echo "</div>";
    echo "<div class='tweet_wrapper'>";
    echo "<h1 class='userFeedName'>$twitterFeedUserTwo</h1>";
    
    if(!empty($tweetsUserTwo))
    {
        
        foreach($tweetsUserTwo as $items)
        {
		
	echo "<div class='tweet_container'>";
        echo "<p class='time_stamp'>".$items['created_at']."</p> <br />";
        echo $items['text']."<br />";
	echo "</div>";
                         
        }	
    }
    else
    {
      echo "<img class ='noFeedAvailable' src='/public/img/noFeed.jpg' alt='No Twitter Feed Available' height='256' width='256'>";  
    }
    
    echo "</div>";
    echo "<div class='tweet_wrapper'>";
    echo "<h1 class='userFeedName'>$twitterFeedUserThree</h1>";
    
    if(!empty($tweetsUserThree ))
    {
        foreach($tweetsUserThree as $items)
        {
		
	echo "<div class='tweet_container'>";
        echo "<p class='time_stamp'>".$items['created_at']."</p> <br />";
        echo $items['text']."<br />";
	echo "</div>";
	
        }
    }
    else
    {
      echo "<img class ='noFeedAvailable' src='/public/img/noFeed.jpg' alt='No Twitter Feed Available' height='256' width='256'>";  
    }
    
    echo "</div>";
?>
	
</div>
