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
define('AUTH_KEY',         'tzWjcEw0BEeYxJDiqbIdJVKLKqLuA3t+sBcXquU3qPrffSpWEUCaeRABl0eTMvsrIpF9J1PvifmnF73MvZzqVg==');
define('SECURE_AUTH_KEY',  '9uDdHXr1WkTEjyffpnj25nsmR1Cm1t7ADT92B1ho7ga8FvOhQaPs4EpzrVZhM6o9QBc1Nz73wkGPlgdSZ1SWQQ==');
define('LOGGED_IN_KEY',    'MGMBSfOxzTFQuC8MSEax7FCAV1Jovunmni2cirs/XNcWRZktLrqXKw7y1V5Md6+xCQS/Jppi4CHxI83CgmVRQA==');
define('NONCE_KEY',        'zdXkdPO/xAMmUX6b9f1y1s+uyTVjDcfVqbyQsdUf3rlMmIREr7a95O9Bi+YdM74KuWsDiadNsCVmJ7n0yt53/Q==');
define('AUTH_SALT',        'V+r+ZebXPbyGQ7iwiwERpag7mub1Xla63Ourr3N3ly3zSWyifdPygPlJHqWCkKncwpi+ArlonQyuZDq/o6wTbg==');
define('SECURE_AUTH_SALT', 'VVUoUiIcHUbPnmKgIUwSNx5ZKhVdyWMDFOIl0QmbvMAiziOdelOWQophhdkMNFawnsBBMt2640NbHGKhdovLlQ==');
define('LOGGED_IN_SALT',   'H/z/uqVGuRffKwv3yebCSyS+Ba1wwHwj8x1i3IP00glKUHZQrJz2MWcQNpvmXKCDdjOigDvS1yFWW5ETRVVWyQ==');
define('NONCE_SALT',       'HgEqHY6eehbJduRgMGRhxWRDc+a7F16MZcgEKC+Xy0cH2tKkJVrnmIUHILRIxmzsDymXwneCC2QvnKGIDDWyPQ==');

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
