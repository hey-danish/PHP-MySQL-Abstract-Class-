<?php
// MySQL Connection Making Parameters
define("DB_HOST", "localhost", false);
define("DB_USERNAME", "<Your_db_username>", false);
define("DB_PASSWORD", "<Your_db_password>", false);
define("DB_DATABASE", "<Your_dbname_goes_here>", false);

new Database;

class Database
{
    function __construct()
    {
        $this->db_connect();
    }

    function db_connect()
    {

        // Global Database connection resource strings
        global $connection;
        global $db;

        // Establish the database connection
        $connection = mysqli_connect(DB_HOST, DB_USERNAME, DB_PASSWORD);
        $db         = mysqli_select_db($connection, DB_DATABASE);

        // Check connection
        if (mysqli_connect_errno()) {
            $this->log_error("Failed to connect to MySQL: " . mysqli_connect_error());
        }
        if (isset($db)) {
            return $db;
        } else {
            $this->log_error("UNABLE to Connect to Mysql");
            return false;
        }
    }

    function log_error($message)
    {
        $string = date("Y-m-d h:i:s") . ":: " . $message . PHP_EOL;
        file_put_contents('mysql_error_log', $string, FILE_APPEND);
        return;
    }
}
?>
