<?php # Script 1.2- config.php
/* Name: Commerce Web Portal/ Config Page
*  Author: Farhood Rashidi
*  Date: 08/02/2014
*  This page defines and gets the user's username, password, database, and localhost.
*/


// HTTP
define('HTTP_SERVER', 'http://www.ordervitaminsdirectly.com/');

// HTTPS
define('HTTPS_SERVER', 'https://www.ordervitaminsdirectly.com/');

// DIR
define('DIR_APPLICATION', '/home2/takemese/public_html/www.ordervitaminsdirectly.com/catalog/');
define('DIR_SYSTEM', '/home2/takemese/public_html/www.ordervitaminsdirectly.com/system/');
define('DIR_DATABASE', '/home2/takemese/public_html/www.ordervitaminsdirectly.com/system/database/');
define('DIR_LANGUAGE', '/home2/takemese/public_html/www.ordervitaminsdirectly.com/catalog/language/');
define('DIR_TEMPLATE', '/home2/takemese/public_html/www.ordervitaminsdirectly.com/catalog/view/theme/');
define('DIR_CONFIG', '/home2/takemese/public_html/www.ordervitaminsdirectly.com/system/config/');
define('DIR_IMAGE', '/home2/takemese/public_html/www.ordervitaminsdirectly.com/image/');
define('DIR_CACHE', '/home2/takemese/public_html/www.ordervitaminsdirectly.com/system/cache/');
define('DIR_DOWNLOAD', '/home2/takemese/public_html/www.ordervitaminsdirectly.com/download/');
define('DIR_LOGS', '/home2/takemese/public_html/www.ordervitaminsdirectly.com/system/logs/');

// DB
define('DB_DRIVER', 'mysqli');
define('DB_SERVER', 'localhost');
define('DB_USERNAME', 'admin');
define('DB_PASSWORD', '********');
define('DB_DATABASE', 'medicalsite');
define('DB_PREFIX', 'mx_');

//class DB
class DB_Class 
{
	function __construct() 
	{
		$connection = mysql_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD) or 
		die('Oops connection error -> ' . mysql_error());
		mysql_select_db(DB_DATABASE, $connection) 
		or die('Database error -> ' . mysql_error());
	}
}
