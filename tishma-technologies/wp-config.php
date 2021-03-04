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
define( 'DB_NAME', 'tishma' );

/** MySQL database username */
define( 'DB_USER', 'tishma' );

/** MySQL database password */
define( 'DB_PASSWORD', 'tishma06' );

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
define( 'AUTH_KEY',         'g:X <3]Vqh=co|8-nBRvd`eyK<gOmf5&R{QN6lLBZ]O&p2C)lLv1F5q<r9_>D_}?' );
define( 'SECURE_AUTH_KEY',  'yMUwrB<YY9L~m=5j0xv:d7hs[{KPfo9,yt$(lFeh.<&op?)mDur{Tkw^tL{zH#Ii' );
define( 'LOGGED_IN_KEY',    'M.cEiZ9f^AK vrPCk^fz1T?V~qh:W4=?}b,%H;|-I-gk[*(9l7pp!K~&YHa@!CJ,' );
define( 'NONCE_KEY',        'fSL5KUwQ9gx]h=ZgZ)oe$)@^2,X8A8<B1v-2~/rIJ|41i73t&8xQrT9W+606ay:+' );
define( 'AUTH_SALT',        'bl_CaJvu3{)t#<BI9Y}y|gFs!,eg4t]q47?Fy$D6:wQJj}8rm?n7@Q47K7a~u~XL' );
define( 'SECURE_AUTH_SALT', 'LG1=!xSEn=mMdT1(=++X`Zjnp%S&0*9kg4z)ujlriRy{JdX8|wa50S3y:RZ;fP~e' );
define( 'LOGGED_IN_SALT',   '%5L+09Q>gH~i)7E6}^828yBv&2+.z?AQ<GwPGR(s&:lq0+iP/Tj+niZ[e$htIw{N' );
define( 'NONCE_SALT',       'X|lrw%2}-BSu4MHE.%&X85mgn5!VkM9Ip#[3PEutv2t}v)Ht/8B&XJ]g65!goy.S' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wptishma_';

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
