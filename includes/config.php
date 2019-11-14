<?php
/**
 * config.php allows us to place configuration information
 * into our web application
 * 
 * @package php-mysql-app
 * @author Bill Newman <williamnewman@gmail.com>
 * @version 1 2019/11/14
 * @link http://www.newmanix.com/ 
 * @license https://www.apache.org/licenses/LICENSE-2.0
 * @todo none
 */
/*
    config.php allows us to place configuration information
    into our web application
*/
ob_start;//cache page and don't load prematurely

//include database credentials
include 'credentials.php';

define('DEBUG',TRUE); #we want to see all errors

//identifies unique page url
define('THIS_PAGE',basename($_SERVER['PHP_SELF']));

//database connection error handler
function myerror($myFile, $myLine, $errorMsg)
{
    if(defined('DEBUG') && DEBUG)
    {
       echo "Error in file: <b>" . $myFile . "</b> on line: <b>" . $myLine . "</b><br />";
       echo "Error Message: <b>" . $errorMsg . "</b><br />";
       die();
    }else{
		echo "I'm sorry, we have encountered an error.  Would you like to buy some socks?";
		die();
    }
}
