<?php

define('DB_server','localhost');
define('DB_username','root');
define('DB_password','');
define('DB_name','MentalHealth');

$con=mysqli_connect(DB_server,DB_username,DB_password,DB_name);

if($con==false)
{
    die("ERROR: connection failed" . mysqli_connect_error());

}
else{
    echo "connection successful";
}

?>