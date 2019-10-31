<?php

 define('DB_SERVER', 'localhost:3036');
 define('DB_USERNAME','tanda');
 define('DB_PASSWORD', 'tanda');
 define('DB_DATABASE', 'agua');

 $db = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_DATABASE);