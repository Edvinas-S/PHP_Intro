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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wp90' );

/** MySQL database username */
define( 'DB_USER', 'wp90' );

/** MySQL database password */
define( 'DB_PASSWORD', 'pz-4(12E8S' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '4c672kbaodr3jiddzn8zkxkmvbtgqrb3ema7dw1djy1snhytjupwhbnfwbnkawur' );
define( 'SECURE_AUTH_KEY',  'nlxlvnlxghc8n0qdx5bxktw2f7ajbnhj3ztfbk7itljiuujcyktjvkm4zpwybjbi' );
define( 'LOGGED_IN_KEY',    '1ezo2pwv1aydfnrnwyb5fwmhdkewx79v31nfya93rjgtm0d2tj1blzih9jjcn4tc' );
define( 'NONCE_KEY',        'tc3jjudyhyiaeo8dvkznuygf1bqiauzlqqdkmljs78i4b8l6vlabaj80tuij8uub' );
define( 'AUTH_SALT',        'bdszpigcnr4mtnikcsg2uxhuicki74v4qrt9guhiqrwupoimu48fto9edf9ubatu' );
define( 'SECURE_AUTH_SALT', 'rtj0smsjo2m600e7izyhjfczzgrxocygxsbjmnoywrmnt90sr41tzve37fb3datc' );
define( 'LOGGED_IN_SALT',   'ydj8l2inevryqrxcor0kgzfcaqtkz6fc8ivaeep4ccsghrsrk5qqwadeowggc2i2' );
define( 'NONCE_SALT',       'io5pvqcfm8qyde2hscrnofjcttupmwgqcf9s7wj0vfchm0f5gcdap0uo21v0f7fk' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wptd_';

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
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
