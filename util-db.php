<?php
function get_db_connection(){
    // Create connection
    $conn = new mysqli('138.197.17.168', 'caroli24_hw3user', 'V*3CyLsJIy6y', 'caroli24_hw3');
    
    // Check connection
    if ($conn->connect_error) {
      return false;
    }
    return $conn;
}
?>
