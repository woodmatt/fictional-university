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

// ** MySQL settings - You can get this info from your web host ** //
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
define('AUTH_KEY',         'WhEPgSdl3z3TncvODZSBIoBS2tWl8S+Fc2OYIHYhWOL1VLTqtVa2YC15cs337cMU0RslDC+spAN0413lzpuCcg==');
define('SECURE_AUTH_KEY',  'icIGynO91O0TEnRaQZicXQKgNHFYDAIShOz2dy0iKw/hMrKFVNseMyKmGKhgXmG19b0Nq2ZIlipi5Q5nwWDjFg==');
define('LOGGED_IN_KEY',    'W8ekpDwYTIWG3/TNxSc6YkML5WdzlC0iJ50m2HxE2Pus7GG1AvyXvyKfxm0dfOjmII7wn6dCBx5axQ56WZihfw==');
define('NONCE_KEY',        'Nbb8TZIjJt3YWdoANRY8HtLM4nEPfxMnkDSVYdIoqmCk7Z91VXBAfPHG5DPHyRtWEz5zDpetMyv9Lrw3IKeAAA==');
define('AUTH_SALT',        'EujN5o+MVfFNdm5lQKN7K0eMgM/zYGmEvLXLjPUENEAqYAwlfJMwErNHyhH2VMC193YtkOuHaEpmgDxzQhsHJQ==');
define('SECURE_AUTH_SALT', 'a7Wqxlu/IWp6hqA4YyngrC97t1L0aq5+tDOI9J6d8I1tigGdUq+U/wmKuI4b2HwcVvtj1eWwaeXFWTk7SYVIOA==');
define('LOGGED_IN_SALT',   'bx9u9FTxy5T6rbjI/6RIiOaTBCEZb/6BhSCqXJv8ezSF63DgDNT7Kat4087+BC8m+ls3Aq8yr7iD1Rv0UYch0g==');
define('NONCE_SALT',       '8uXXuVkR9jnFtolcuqWtxyWytAsSkq4ri6J+XAnKu01MZFH6i6lEgP95yzOBvYwSWReCY7KwJch/cAHLV3GA1Q==');

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';




/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
