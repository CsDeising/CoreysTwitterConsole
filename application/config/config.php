<?php


error_reporting(E_ALL);
ini_set("display_errors", 1);

// Will be used to help us define the URL for a page and navigate the web app
define('URL', 'http://localhost');


// Used to store API token & secrets along with database connection info.
// Currently, there is no database that we are actively connecting to for this application.
// This information is here because we will be in the future.
define('DB_TYPE', 'mysql');
define('DB_HOST', '127.0.0.1');
define('DB_NAME', 'twitterapi');
define('DB_USER', 'root');
define('DB_PASS', '');

define('CONSUMER_KEY', 'XTa7AiBEBZPf50oK9fgb9ht3w');
define('CONSUMER_SECRET','rXgxeI3FiITufzzRyXipYl1dz7QGighgIYX5AiIEZKPJXcZV2a');
define('ACCESS_TOKEN','875353504528965635-YOYmIGtWqGlnKN5g6t9jP57BSdwqqCF');
define('ACCESS_TOKEN_SECRET','AuOhuUV75JuNYHmY7iVloqNEW5mpYVRYMHJHrexhswYDn');
