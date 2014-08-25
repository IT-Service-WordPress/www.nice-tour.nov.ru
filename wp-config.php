<?php
if ( file_exists( __DIR__ . DIRECTORY_SEPARATOR . 'local-config.php' ) ) {
	define( 'WP_LOCAL_DEV', true );
	include( __DIR__ . DIRECTORY_SEPARATOR . 'local-config.php' );
} else {
	define( 'WP_LOCAL_DEV', false );

	define( 'DB_HOST', ini_get( 'mysql.default_host' ) );
	define( 'DB_NAME', 'nicetournovru' );
	define( 'DB_USER', 'nicetournovru' );
	define( 'DB_PASSWORD', 'ghbznyjtgentitcndbt' );

	ini_set( 'display_errors', false );
	define( 'WP_DEBUG', false );
};

define( 'WP_CONTENT_DIR', __DIR__ . DIRECTORY_SEPARATOR . 'wp-content' );

define( 'DB_CHARSET', 'utf8' );
define( 'DB_COLLATE', '' );

define( 'AUTH_KEY',         'z nt,zk.,k.' );
define( 'SECURE_AUTH_KEY',  'z nt,zk.,k.' );
define( 'LOGGED_IN_KEY',    'z nt,zk.,k.' );
define( 'NONCE_KEY',        'z nt,zk.,k.' );
define( 'AUTH_SALT',        'put your unique phrase here' );
define( 'SECURE_AUTH_SALT', 'put your unique phrase here' );
define( 'LOGGED_IN_SALT',   'put your unique phrase here' );
define( 'NONCE_SALT',       'put your unique phrase here' );

$table_prefix  = 'wp_';

define( 'WPLANG', 'ru_RU' );

if ( !defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/wp/' );
};
require_once( ABSPATH . 'wp-settings.php' );

// define( 'COOKIE_DOMAIN', 'test.www.nice-tour.nov.ru' );

define( 'CONCATENATE_SCRIPTS', false );

?>