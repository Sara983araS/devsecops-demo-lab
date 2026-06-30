<?php
// DVWA XSS Reflected - Low Security Level
// VULNERABLE: User input echoed directly into HTML without encoding

if( array_key_exists( "name", $_GET ) && $_GET[ 'name' ] != NULL ) {
    // !! VULNERABLE - no XSS filter whatsoever !!
    echo '<pre>Hello ' . $_GET[ 'name' ] . '</pre>';
}
?>