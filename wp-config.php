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
define( 'DB_NAME', 'douxbonheur_wp353' );

/** Database username */
define( 'DB_USER', 'douxbonheur_wp353' );

/** Database password */
define( 'DB_PASSWORD', '.So4p-7n6m' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

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
define( 'AUTH_KEY',         '7dnmz1049vmeudqiqdrrmovkdudhzaxmpr1dmcs3zeqqqtgppctl8wny8mt59mrq' );
define( 'SECURE_AUTH_KEY',  'txhv058njjv14snk7qrbf5sdrlhwnwlqdcpezqncaszaky3a8ggih1zqcwcjudx4' );
define( 'LOGGED_IN_KEY',    '0dlvbcv8uneydr0ovfwcxtuo3cw6rvusklnwsrehjdvrcjvojzgzdsgjuis8c1tz' );
define( 'NONCE_KEY',        'ordjck1cuedb7ikpybr5apkjpxj9o2mnf5xj2efjdunamejndlgz3xgcjg49qrsg' );
define( 'AUTH_SALT',        'l4hbsiwg9nxn6s8kfsh0ftvs089ksblbl61fxqvghyp2oi9qjhv8xckohzxedipq' );
define( 'SECURE_AUTH_SALT', 'nltdoaws4j54rru8dwx5xde3u7onlekdiyyyhruwyqau6rfhumig44tqn5ppp1j7' );
define( 'LOGGED_IN_SALT',   'mbhz7fjzqk3mnehav5ibpu63v2sdlfg5oiyrdvwnfdgrkcylznkcom0upoejenqm' );
define( 'NONCE_SALT',       'ndrf0qhbcjwvrzyi8chnuakvntofwnbhjqltz0cshva6wniiw1awf6gaoxyxwfx4' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wpdp_';

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
