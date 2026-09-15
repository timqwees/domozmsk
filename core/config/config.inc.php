<?php
/**
 *  MODX Configuration file
 */
$database_type = 'mysql';
$database_server = 'localhost';
$database_user = 'cg496041_domozms';
$database_password = '2q3rX2Dv';
$database_connection_charset = 'utf8mb4';
$dbase = 'cg496041_domozms';
$table_prefix = 'modx_';
$database_dsn = 'mysql:host=localhost;dbname=cg496041_domozms;charset=utf8mb4';
$config_options = array (
);
$driver_options = array (
);

$lastInstallTime = 1787321029;

$site_id = 'modx6a885ac52db157.14974039';
$site_sessionname = 'SN692d720d3501b';
$https_port = '443';
$uuid = '49e70ae5-1bdd-44e9-9df8-12ceed127f3a';

/* Портативные пути: вычисляются от расположения файла, а не захардкожены под
 * Timeweb (/home/c/cg496041/public_html/). Это чинит белый экран / редирект
 * в manager после переноса проекта или git clone. */
if (!defined('MODX_CORE_PATH')) {
    $modx_core_path = dirname(dirname(__DIR__)) . '/core/';
    /* Fallback на старый путь Timeweb, если структура отличается */
    if (!is_dir($modx_core_path)) { $modx_core_path = '/home/c/cg496041/public_html/core/'; }
    define('MODX_CORE_PATH', $modx_core_path);
}
if (!defined('MODX_PROCESSORS_PATH')) {
    $modx_processors_path = MODX_CORE_PATH . 'model/modx/processors/';
    define('MODX_PROCESSORS_PATH', $modx_processors_path);
}
if (!defined('MODX_CONNECTORS_PATH')) {
    $modx_base_dir = rtrim(str_replace('\\', '/', dirname(MODX_CORE_PATH)), '/') . '/';
    $modx_connectors_path = is_dir($modx_base_dir . 'connectors/') ? $modx_base_dir . 'connectors/' : '/home/c/cg496041/public_html/connectors/';
    $modx_connectors_url = '/connectors/';
    define('MODX_CONNECTORS_PATH', $modx_connectors_path);
    define('MODX_CONNECTORS_URL', $modx_connectors_url);
}
if (!defined('MODX_MANAGER_PATH')) {
    $modx_base_dir = rtrim(str_replace('\\', '/', dirname(MODX_CORE_PATH)), '/') . '/';
    $modx_manager_path = is_dir($modx_base_dir . 'manager/') ? $modx_base_dir . 'manager/' : '/home/c/cg496041/public_html/manager/';
    $modx_manager_url = '/manager/';
    define('MODX_MANAGER_PATH', $modx_manager_path);
    define('MODX_MANAGER_URL', $modx_manager_url);
}
if (!defined('MODX_BASE_PATH')) {
    $modx_base_dir = rtrim(str_replace('\\', '/', dirname(MODX_CORE_PATH)), '/') . '/';
    $modx_base_path = is_dir($modx_base_dir) ? $modx_base_dir : '/home/c/cg496041/public_html/';
    $modx_base_url = '/';
    define('MODX_BASE_PATH', $modx_base_path);
    define('MODX_BASE_URL', $modx_base_url);
}
if(defined('PHP_SAPI') && (PHP_SAPI == "cli" || PHP_SAPI == "embed")) {
    $isSecureRequest = false;
} else {
    /* Учтены прокси Timeweb/Cloudflare: иначе MODX думает что запрос http,
     * ставит не те cookie/session и manager уходит в бесконечный редирект. */
    $forwardedProto = isset($_SERVER['HTTP_X_FORWARDED_PROTO']) ? strtolower($_SERVER['HTTP_X_FORWARDED_PROTO']) : '';
    $isSecureRequest = ((isset($_SERVER['HTTPS']) && !empty($_SERVER['HTTPS']) && strtolower($_SERVER['HTTPS']) !== 'off') || $forwardedProto === 'https' || parse_url('http://' . $_SERVER['HTTP_HOST'], PHP_URL_PORT) == $https_port);
}
if (!defined('MODX_URL_SCHEME')) {
    $url_scheme = $isSecureRequest ? 'https://' : 'http://';
    define('MODX_URL_SCHEME', $url_scheme);
}
if (!defined('MODX_HTTP_HOST')) {
    if(defined('PHP_SAPI') && (PHP_SAPI == "cli" || PHP_SAPI == "embed")) {
        $http_host = 'domozmsk.ru';
        define('MODX_HTTP_HOST', $http_host);
    } else {
        $http_host = array_key_exists('HTTP_HOST', $_SERVER) ? parse_url($url_scheme . $_SERVER['HTTP_HOST'], PHP_URL_HOST) : 'domozmsk.ru';
        $http_port = parse_url($url_scheme . $_SERVER['HTTP_HOST'], PHP_URL_PORT);
        $http_host .= in_array($http_port, [null, 80, 443]) ? '' : ':' . $http_port;
        define('MODX_HTTP_HOST', $http_host);
    }
}
if (!defined('MODX_SITE_URL')) {
    $site_url= $url_scheme . $http_host . MODX_BASE_URL;
    define('MODX_SITE_URL', $site_url);
}
if (!defined('MODX_ASSETS_PATH')) {
    $modx_base_dir = rtrim(str_replace('\\', '/', dirname(MODX_CORE_PATH)), '/') . '/';
    $modx_assets_path = is_dir($modx_base_dir . 'assets/') ? $modx_base_dir . 'assets/' : '/home/c/cg496041/public_html/assets/';
    $modx_assets_url = '/assets/';
    define('MODX_ASSETS_PATH', $modx_assets_path);
    define('MODX_ASSETS_URL', $modx_assets_url);
}
if (!defined('MODX_LOG_LEVEL_FATAL')) {
    define('MODX_LOG_LEVEL_FATAL', 0);
    define('MODX_LOG_LEVEL_ERROR', 1);
    define('MODX_LOG_LEVEL_WARN', 2);
    define('MODX_LOG_LEVEL_INFO', 3);
    define('MODX_LOG_LEVEL_DEBUG', 4);
}
