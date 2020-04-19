<?php

// mysql://b3fcbeb814e3fe:a4cff551@us-cdbr-iron-east-01.cleardb.net/heroku_19663bd198e395f?reconnect=true
// $cleardb_url      = parse_url(getenv("CLEARDB_DATABASE_URL"));
// $cleardb_server   = $cleardb_url["host"];
// $cleardb_username = $cleardb_url["user"];
// $cleardb_password = $cleardb_url["pass"];
// $cleardb_db       = substr($cleardb_url["path"],1);


// $active_group = 'default';
// $query_builder = TRUE;

// $db['default'] = array(
//     'dsn'    => '',
//     'hostname' => $cleardb_server,
//     'username' => $cleardb_username,
//     'password' => $cleardb_password,
//     'database' => $cleardb_db,
//     'dbdriver' => 'mysqli',
//     'dbprefix' => '',
//     'pconnect' => FALSE,
//     'db_debug' => (ENVIRONMENT !== 'production'),
//     'cache_on' => FALSE,
//     'cachedir' => '',
//     'char_set' => 'utf8',
//     'dbcollat' => 'utf8_general_ci',
//     'swap_pre' => '',
//     'encrypt' => FALSE,
//     'compress' => FALSE,
//     'stricton' => FALSE,
//     'failover' => array(),
//     'save_queries' => TRUE
// );
$servername='localhost';
$uname='root';
$passwd='';
$dbname='biren';
$conn = new mysqli($servername,$uname,$passwd,$dbname);
// $conn=new mysqli($db['default']['hostname'],$db['default']['username'],$db['default']['password'],$db['default']['database']);
if($conn->connect_error)
{
die("Connection failed;".$conn->connect_error);
}
?>