<?php
// DVWA SQL Injection - Low Security Level
// VULNERABLE: User input directly interpolated into SQL query

if( isset( $_REQUEST[ 'Submit' ] ) ) {
    $id = $_REQUEST[ 'id' ];

    // !! VULNERABLE - no sanitisation whatsoever !!
    $query  = "SELECT first_name, last_name FROM users WHERE user_id = '$id';";
    $result = mysqli_query($GLOBALS["___mysqli_ston"], $query) or die(
        '<pre>' . ((is_object($GLOBALS["___mysqli_ston"]))
        ? mysqli_error($GLOBALS["___mysqli_ston"])
        : (($___mysqli_res = mysqli_connect_error()) ? $___mysqli_res : false)) . '</pre>'
    );

    while( $row = mysqli_fetch_assoc( $result ) ) {
        $first = $row["first_name"];
        $last  = $row["last_name"];
        echo "<pre>ID: {$id}<br />First name: {$first}<br />Surname: {$last}</pre>";
    }
}
?>