
<?php
define('DB_HOST', 'localhost');
define('DB_NAME', 'php_app');
define('DB_USER', 'root');
define('DB_PASS', '');

define('SITE_URL', 'http://localhost:8000');
define('UPLOAD_DIR', __DIR__ . '/../../public/uploads/');

// Session configuration
ini_set('session.cookie_httponly', 1);
ini_set('session.use_only_cookies', 1);
ini_set('session.cookie_secure', 0);

// Error reporting
error_reporting(E_ALL);
ini_set('display_errors', 1);

// Timezone
date_default_timezone_set('UTC');
?>
