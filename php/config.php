<?php

class DatabaseConnection {
    public function __construct() {
        global $conn;

        // Check if running on Heroku (using the CLEARDB_DATABASE_URL environment variable)
        if (getenv("CLEARDB_DATABASE_URL")) {
            $url = parse_url(getenv("CLEARDB_DATABASE_URL"));

            $server = $url["host"];
            $username = $url["user"];
            $password = $url["pass"];
            $db = substr($url["path"], 1);

            $conn = new mysqli($server, $username, $password, $db);
        } else {
            // Use local database configuration
            $conn = new mysqli("localhost", "root", "", "uni");
        }

        // Check for errors
        if ($conn->connect_error) {
            die("Database connection failed: " . $conn->connect_error);
        }
    }
}

?>
