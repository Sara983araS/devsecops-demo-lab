<?php
// Database configuration
// WARNING: hardcoded credentials for demo purposes only

$_DVWA = array();
$_DVWA['db_server']   = '127.0.0.1';
$_DVWA['db_database'] = 'dvwa';
$_DVWA['db_user']     = 'dvwa';
$_DVWA['db_password'] = 'p@ssw0rd123';       // VULNERABLE: hardcoded password

// AWS integration (demo key - never use in production)
define('AWS_ACCESS_KEY', 'AKIAIOSFODNN7EXAMPLE');   // VULNERABLE: hardcoded AWS key
define('AWS_SECRET_KEY', 'wJalrXUtnFEMI/K7MDENG/bPxRfiCYEXAMPLEKEY');
?>