<?php
session_start();




ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);



$host = "localhost"; /* Host name */
$user = "tanda"; /* User */
$password = "tanda"; /* Password */
$dbname = "mediateca"; /* Database name */

$con = mysqli_connect($host, $user, $password,$dbname);
// Check connection
if (!$con) {
 die("Connection failed: " . mysqli_connect_error());
}