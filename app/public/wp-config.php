<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the
 * installation. You don't have to use the web site, you can
 * copy this file to "wp-config.php" and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'Iv8ejqWgx0QtmtXGZ7MulzLUvbYCyPiBlb8skdPpKpY5X/6/uMXfZbQPqKNW3tuXjZ/FaFu7W6xZqNnJD0wwvA==');
define('SECURE_AUTH_KEY',  'yZqW5UV/hnmfya+8NySHApEAaBJMJ/qHVm28qGrWAI2D7Yq+JeZqqC4QVq36yMxRZ64znep9kWBNv3IrNGWmtQ==');
define('LOGGED_IN_KEY',    '/6PNuUotEoQXHCgfaZKPzRZ9D5IbTWftz1+5L6nCZq4BVrSTBtrdSzkeCls4OxEfy/6OXysfQQZTc4hWOX/xjg==');
define('NONCE_KEY',        'rj+wk+W8XIjK9xJF23W2P42GfKgIbSaA1aiDGhPsJrn4L52IiQcn7RQD8fAfx1abIlI/WAJXntEYTldnjR1chA==');
define('AUTH_SALT',        '3JyNY3GC6yLM6E3+dLh8QmKGUgJjpT3ZM89xdyg9tMA11p1sgwvw09n35Ius+rX3fFdLt5gFhBZInKoYQtsvMw==');
define('SECURE_AUTH_SALT', 'asUg/Lawl3kELJoXbRSa0d3wBE78XLve10Z9cosDagU5N6HjV9+nnipWQvty3Z9m5PN9wdV/0sRYWJE8ng1ihw==');
define('LOGGED_IN_SALT',   'X1laqdVVcMYakeDEM4UgNrKfhGxYqyw+sbLRa3hTLyF0JvEt1dJ++F8tTy3cA1ZTNZ+LLOpn9G1U2Qs5YBiNSg==');
define('NONCE_SALT',       'kPUxrhcYqOVomrQYtFyndk3FsfgPu3tju1sq7PcPYwfQYHIt4KezJUiCRBWPjv/NsgqaoYnIR/J+JEookwROCg==');

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';





/* Inserted by Local by Flywheel. See: http://codex.wordpress.org/Administration_Over_SSL#Using_a_Reverse_Proxy */
if ( isset( $_SERVER['HTTP_X_FORWARDED_PROTO'] ) && $_SERVER['HTTP_X_FORWARDED_PROTO'] === 'https' ) {
	$_SERVER['HTTPS'] = 'on';
}

/* Inserted by Local by Flywheel. Fixes $is_nginx global for rewrites. */
if ( ! empty( $_SERVER['SERVER_SOFTWARE'] ) && strpos( $_SERVER['SERVER_SOFTWARE'], 'Flywheel/' ) !== false ) {
	$_SERVER['SERVER_SOFTWARE'] = 'nginx/1.10.1';
}
/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) )
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
