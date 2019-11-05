<?php
session_start();
$host = "localhost"; /* Host name */
$user = "tanda"; /* User */
$password = "tanda"; /* Password */
$dbname = "agua"; /* Database name */

$con = mysqli_connect($host, $user, $password,$dbname);
// Check connection
if (!$con) {
 die("Connection failed: " . mysqli_connect_error());
}