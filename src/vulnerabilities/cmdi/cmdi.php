<?php
// DVWA Command Injection - Low Security Level
// VULNERABLE: User-controlled input passed directly to shell_exec

if( isset( $_POST[ 'Submit' ] ) ) {
    $target = $_REQUEST[ 'ip' ];

    // !! VULNERABLE - no input validation, direct OS command execution !!
    if( stristr( php_uname( 's' ), 'Windows NT' ) ) {
        $cmd = shell_exec( 'ping  ' . $target );
    } else {
        $cmd = shell_exec( 'ping  -c 4 ' . $target );
    }

    echo "<pre>{$cmd}</pre>";
}
?>