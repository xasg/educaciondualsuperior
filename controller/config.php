<?php
/*define('DB_SERVER', 'localhost');
define('DB_SERVER_USERNAME', 'root');
define('DB_SERVER_PASSWORD', '');
define('DB_DATABASE', 'educaciondual');*/



define('DB_SERVER', 'ec2-18-216-120-87.us-east-2.compute.amazonaws.com');
define('DB_SERVER_USERNAME', 'fese');
define('DB_SERVER_PASSWORD', 'Ws.666.AdQe');
define('DB_DATABASE', 'educaciondual');




$connexion = new mysqli(DB_SERVER, DB_SERVER_USERNAME, DB_SERVER_PASSWORD, DB_DATABASE);
?>