<?php
// HTTP
define('HTTP_SERVER', 'http://'. $_SERVER['HTTP_HOST'] .'/webantam/admin/');
define('HTTP_CATALOG', 'http://'. $_SERVER['HTTP_HOST'] .'/webantam/');

// HTTPS
define('HTTPS_SERVER', 'http://'. $_SERVER['HTTP_HOST'] .'/webantam/admin/');
define('HTTPS_CATALOG', 'http://'. $_SERVER['HTTP_HOST'] .'/webantam/');

// DIR
define('DIR_APPLICATION', $_SERVER['DOCUMENT_ROOT'].'/webantam/admin/');
define('DIR_SYSTEM', $_SERVER['DOCUMENT_ROOT'].'/webantam/system/');
define('DIR_IMAGE', $_SERVER['DOCUMENT_ROOT'].'/webantam/image/');
define('DIR_STORAGE', $_SERVER['DOCUMENT_ROOT'].'/webantam/storage/');
define('DIR_CATALOG', $_SERVER['DOCUMENT_ROOT'].'/webantam/catalog/');
define('DIR_LANGUAGE', DIR_APPLICATION . 'language/');
define('DIR_TEMPLATE', DIR_APPLICATION . 'view/template/');
define('DIR_CONFIG', DIR_SYSTEM . 'config/');
define('DIR_CACHE', DIR_STORAGE . 'cache/');
define('DIR_DOWNLOAD', DIR_STORAGE . 'download/');
define('DIR_LOGS', DIR_STORAGE . 'logs/');
define('DIR_MODIFICATION', DIR_STORAGE . 'modification/');
define('DIR_SESSION', DIR_STORAGE . 'session/');
define('DIR_UPLOAD', DIR_STORAGE . 'upload/');

// DB
define('DB_DRIVER', 'mysqli');
define('DB_HOSTNAME', 'localhost');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', '');
define('DB_DATABASE', 'webantam');
define('DB_PORT', '3306');
define('DB_PREFIX', 'mt_');

// OpenCart API
define('OPENCART_SERVER', 'https://www.opencart.com/');
