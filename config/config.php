<?php

define('SITE_NAME', 'JobSathi');
define('SITE_TAGLINE', 'Your Career Partner');
define('BASE_URL', 'http://localhost/JobNotification/');
define('TIMEZONE', 'Asia/Kolkata');
date_default_timezone_set(TIMEZONE);

define('DB_HOST', 'localhost');
define('DB_NAME', 'jobsathi_db');
define('DB_USER', 'root');
define('DB_PASS', '');
define('DB_CHARSET', 'utf8mb4');

define('SITE_EMAIL', 'support@jobsathi.com');
define('SITE_PHONE', '+91 98765 43210');
define('SITE_ADDRESS', 'Mumbai, Maharashtra, India');
define('UPLOAD_PATH', __DIR__ . '/../uploads/');
define('MAX_FILE_SIZE', 5 * 1024 * 1024);

define('CURRENT_YEAR', date('Y'));
