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
 * * ABSPATH
 *
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wp-store' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

if ( !defined('WP_CLI') ) {
    define( 'WP_SITEURL', $_SERVER['REQUEST_SCHEME'] . '://' . $_SERVER['HTTP_HOST'] );
    define( 'WP_HOME',    $_SERVER['REQUEST_SCHEME'] . '://' . $_SERVER['HTTP_HOST'] );
}



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
define( 'AUTH_KEY',         'MbCf5z254inpdkFwaGU7VtaNRMb3rcm6G9ALTb4UX5auxVedK1jL8cMa4J4V0ZRL' );
define( 'SECURE_AUTH_KEY',  'BNOshYYoh7LCNDV3RF4C5U2PCdDkqTnmBgJlwyaU7I29eVMMjUqZslNpSPtT0efj' );
define( 'LOGGED_IN_KEY',    'k8S9exjX7iQ0q7rHncJOcrIJsaK9b9FYelMwLOrV8I9zW6f30qcx8GrX8nuR247v' );
define( 'NONCE_KEY',        '1pI4QmTr7sFYVxLJgzERLndky568l12lvx73OqMrgVTUX2j8XWIROnILYJqFgoWy' );
define( 'AUTH_SALT',        'fxZq2HHbzN2fKHpcUVvlfZTrb8BALMv5REvUQigkQoRnJkrpIO1hUgRigC2l2HaN' );
define( 'SECURE_AUTH_SALT', 'Jzn7BGlVUnEYvBzP5sgDtM7rsqs3gJxzrZVkMoqS4xE1boouYzJtp2lYfNsUq8Fx' );
define( 'LOGGED_IN_SALT',   't5PpLvAzJRP4btO5hE1f2rB0dXkIQvAAKGbohWkuhU8MnleEEXiX842QrQsA23EV' );
define( 'NONCE_SALT',       'CilblbRgAXKjUCqWYdEm67UQ8SDdBz7Lgplo91vK26uA6WyRMiD2iafGi8kBPKqB' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';

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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
