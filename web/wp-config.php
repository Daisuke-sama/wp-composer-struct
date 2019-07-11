<?php
// Stolen shamelessly with some modifications from Mark Jaquith's WordPress + Skeleton
if ( file_exists( __DIR__ . './vendor/autoload.php' ) ) {
	include( __DIR__ . './vendor/autoload.php' );
}

// ===================================================
// Load database info and local development parameters
// ===================================================
if ( file_exists( __DIR__ . '/local-config.php' ) ) {
	define( 'WP_LOCAL_DEV', true );
	include( __DIR__ . '/local-config.php' );
} else {
	define( 'WP_LOCAL_DEV', false );
	define( 'DB_NAME', '%%DB_NAME%%' );
	define( 'DB_USER', '%%DB_USER%%' );
	define( 'DB_PASSWORD', '%%DB_PASSWORD%%' );
	define( 'DB_HOST', '%%DB_HOST%%' );
}

// ===========================================================
// No file edits unless explicitly allowed in local-config.php
// ===========================================================
if ( ! defined( 'DISALLOW_FILE_MODS' ) ) {
	define( 'DISALLOW_FILE_MODS', true );
}

// ========================
// Custom Directories
// ========================
define( 'WP_HOME', '//' . $_SERVER['HTTP_HOST'] . '/' );
define( 'WP_SITEURL', '//' . $_SERVER['HTTP_HOST'] . '/core' );
define( 'WP_CONTENT_DIR', __DIR__ . '/live' );
define( 'WP_CONTENT_URL', '//' . $_SERVER['HTTP_HOST'] . '/live' );

// ========================
// Custom Safe Paths
// ========================
define( 'COOKIEPATH', '/' );
define( 'SITECOOKIEPATH', '/core' );
define( 'PLUGINS_COOKIE_PATH', '/live/plugins' );
define( 'ADMIN_COOKIE_PATH', '/core' );

// ================================================
// You almost certainly do not want to change these
// ================================================
define( 'DB_CHARSET', 'utf8mb4' );
define( 'DB_COLLATE', '' );

// ==============================================================
// Salts, for security
// Grab these from: https://api.wordpress.org/secret-key/1.1/salt
// ==============================================================
define('AUTH_KEY',         '2|co|ddN=!MQr{2|y@Z@ s;oeN+#(73=M&Q4a$U,l@H 29wcI>f?hup{bKElCf(}');
define('SECURE_AUTH_KEY',  '>Q0=]Yj!~$<b>OY!G+_Ji[=hfMcd#B{e=.hoyg~+-)2AImX>ss>Uag`IdeDa,:Jo');
define('LOGGED_IN_KEY',    'Y-Z<tQ[V`3+&A:}m6wO3X<>/;<2F*B;)b<EJ;W}l&=iQ|v^9UTy4dfpsw[q,I5#6');
define('NONCE_KEY',        '^BS{d_oz,DQkX#]E|z|4C@y4#jiy6 gV_n+l-gRfa&Bg]-uL}})Lq6WM%58. F&{');
define('AUTH_SALT',        's~&dMoNgHDj+S~:Q+b{$s4L.[UpYzosPKSc& Y>2MzKVhvRYs:^6BQ7>sS7YVKEC');
define('SECURE_AUTH_SALT', 'hFF89ODjopQbN93E?OIR:t/fnU[_e2i.>Z 1Q_xs0bZdiCY*[0EKH2qoV?;?6T+-');
define('LOGGED_IN_SALT',   '-k0&W-Q()@R:6eLv~%W IWvF{1R|,@p-(U`dgO$yi-jSXW:d8+QEuOMK|8[j3f;y');
define('NONCE_SALT',       'i3R,aZxv)`kvF$?6rk@pc3G`Fz`<ri4?|U5wu?N(&-]U]Lez<0 Jhw/gp{I]W@2{');

// ================================
// Language
// Leave blank for American English
// ================================
define( 'WPLANG', '' );

$table_prefix = 'wp_';

// ===========================================================================================
// This can be used to programatically set the stage when deploying (e.g. production, staging)
// ===========================================================================================
define( 'WP_QA', '%%WP_QA%%' );
define( 'QA_DOMAIN', '%%WP_QA_DOMAIN%%' ); // Does magic in WP Stack to handle staging domain rewriting

// ===========
// Hide errors
// ===========
ini_set( 'display_errors', 0 );
define( 'WP_DEBUG_DISPLAY', false );

// ======================================
// Load a Memcached config if we have one
// ======================================
if ( file_exists( __DIR__ . '/memcached.php' ) ) {
	$memcached_servers = include( __DIR__ . '/memcached.php' );
}

// ===================
// Bootstrap WordPress
// ===================
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/core/' );
}
require_once( ABSPATH . 'wp-settings.php' );
