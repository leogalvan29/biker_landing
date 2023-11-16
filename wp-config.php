<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication unique keys and salts.
 *
 * Change these to different unique phrases! You can generate these using
 * the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}.
 *
 * You can change these at any point in time to invalidate all existing cookies.
 * This will force all users to have to log in again.
 *
 * @since 2.6.0
 */


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the documentation.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', true );
}


define('AUTH_KEY',         'hFp1g8Rk6BNWdoYsTQ6Z9dG92LRpr8/vTJlwPcDjMhU4G/nzZdtRA8iDjk7/oVX9sHAObz/Qk79cUoT7j1u49Q==');
define('SECURE_AUTH_KEY',  'l98thpdBgYPLlx5a6TIR0PcFS32/GbHYnXBqXqB6NER5n6ucZzU3XoBtRET7RqQivGBgIfGDqydxyF0uYfb1Sg==');
define('LOGGED_IN_KEY',    'c7y5kdTv4gvY7lmNM8gcyLQlWcS6fe4+6Jb9aoLOOaVU8qWYvPKX3rc+I8iwFr9e4YlxJuF/9nvXAc0u4NPGLQ==');
define('NONCE_KEY',        '/dGeSL0wYiGp/DC4zbOdPbdlS1cMFNO9h4qZVuPjfitDqclO1fi5p2XygaR7+604TuyrY7qEELs8BRpvo38VVw==');
define('AUTH_SALT',        'yKOgmTausvDstWD5sHSgFwE6GzEftXSksFIQnr40MIwn1i0ybR6V47Uvtljf/iAxUhgWklqG+cqABERK5qROoQ==');
define('SECURE_AUTH_SALT', 'oRTlQfd2bfnpfpvDTiQ5Jp+kc7Kvxn1DdVI+NB9r1SIRa6xiXxNmKA3VUVCrSp7MCcBYHGWslJkR8RvVBIibhg==');
define('LOGGED_IN_SALT',   '6SEOc5ztlcvT0L73pus4XVztauG50uCfS7XQc/uLIZK1KnqmBadCPAAmajKnQT9VwFz0115HrwFCti2kbMQkpQ==');
define('NONCE_SALT',       'jSyJFRd7sSfO26x9C1qfVD4GKQIGlxpchwQ8lgqpgs9qYKWyntjEctAc64jZy9ZLeYxsL0SbZYfUfBbzZoueng==');
define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
