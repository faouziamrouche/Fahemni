<?php

/*
|--------------------------------------------------------------------------
| Website URL configuration
|--------------------------------------------------------------------------
|
| Here you may specify the base url (eg:'localhost/Fahemni'), root path (eg: '/'),
| login, logout url and path to redirect on successful login
|
*/

define('ROOT_PATH', '/');
define('ROOT_URL', 'localhost/Fahemni');
define('LOGIN', '/Fahemni/login.php');
define('LOGOUT', '/Fahemni/logout.php');
define('LOGIN_SUCCESS', '/Fahemni/home.php');

/*
|--------------------------------------------------------------------------
| Database configuration
|--------------------------------------------------------------------------
|
| Here you may specify the database host, username, password and
| the database name respectively.
|
*/

define('DB_HOST', '127.0.0.1');
define('DB_USER', 'root');
define('DB_PASS', '');
define('DB_NAME', 'fahemni');
define('DB_USERTABLE', 'users');

$db_con = mysqli_connect(DB_HOST, DB_USER, DB_PASS, DB_NAME);

/*
| Uncomment code below to see database connection errors
*/
// if (mysqli_connect_errno())
// {
//   echo "Failed to connect to MySQL: " . mysqli_connect_error();
// }


?>
