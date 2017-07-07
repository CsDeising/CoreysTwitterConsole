<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Corey's Twitter Console</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- css -->
    <link href="/public/css/main.css" rel="stylesheet">
	
</head>
<body>

<header>
	
	<div id="top_bar_container">
            
	<form id="findTwitterUsersForm" action = "" method="post">
            
        Twitter Account Feed(s) -
        <label>First:</label>
        <input type="text" name="twitterFeedUserOne" >
        <label>Second:</label>
        <input type="text" name="twitterFeedUserTwo" >
        <label>Third:</label>
        <input type="text" name="twitterFeedUserThree" >
        <input type="hidden" name="action" value="updateFeeds">
         <input type="submit" value="Submit">

        </form>
            
	</div>

</header>
