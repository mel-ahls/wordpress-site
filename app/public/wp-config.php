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
define('AUTH_KEY',         'cxeCalUdSBKDmegn05TIg6q0TinBLsbKnIcq3bSLf1tQJ8dKDEAVonJ8a3S2ZLKkVetVJk9IJFhv0RrA0TOMzQ==');
define('SECURE_AUTH_KEY',  '3p+e3T3ZNM8CTX70/WUA3hSgCWwAr+WWwPSvKhMN1I9DQbYxFiqlgF/pXhxzRVVpCzNnjp42MJawUi+zUW0IKQ==');
define('LOGGED_IN_KEY',    'Kq2cWliCmkzMJ2ydzSiwWxAlp2zrkaYtNIniqOGOr0cFv4zgqFD2vYq8GOvX1jdACuNSsDH8MDx3y0yquqGYzA==');
define('NONCE_KEY',        '9ETb6DWy5p1e1zRSK+EdQPIVGUXxx8GmOWuKx9Tma3CDwdaHSzOyIAb/S8Rfa+hCRUpsZUcYjMoWL1JjL+kuXw==');
define('AUTH_SALT',        'DKBeQZ7oqJc7x9W748LA+t4DudjY6qKJjYlRtQLiIxba8jvOmszDVoKGv/vsJMX3QFruzgipezxMl2f13gsbwA==');
define('SECURE_AUTH_SALT', 'S8YH82Xu/fL6QQ6Uh7S+5yV/C0r2ZYV2caNPPLXiZd+eqk7BDpiBO6nrFahA5BGyZOHWtv267CEHXo2HVe+Lsg==');
define('LOGGED_IN_SALT',   'em6CByewQxck1MjPp906bbLGGuV12sFxdp2p9YjEkZr4393l2vwvJwsYQXckm1w7rQOkhG61KeCGUJEjV6qX7Q==');
define('NONCE_SALT',       'METejcDtMszanJYS/Tw30ojUd76QwT+Zz9I+J7ARkuo164lUfragpsxSQE/TBWN/gOuReADRihGpSSCuRncKeQ==');

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
