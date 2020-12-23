<?php
class PagesDataAccess {
    function __construct($conn) {
        $this->conn = $conn;
    }

    function handle_error($msg) {
        throw new Exception($msg);
    }

    function check_page_existance($path) {
        $path = mysqli_real_escape_string($this->conn, $path);

        $sql = "SELECT file_Name from pages WHERE path = '$path';";

        $result = mysqli_query($this->conn, $sql) or $this->handle_error(mysqli_error($this->conn));

        if ($result) {
            if (mysqli_num_rows($result) > 0) {
                $row = mysqli_fetch_assoc($result);

                $file_name = $row["file_Name"];

                return $file_name;
            } else {
                return false;
            }
        } else {
            return false;
        }
    }
}