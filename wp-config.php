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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpress' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', 'mysql' );

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
define( 'AUTH_KEY',         'd08+:JXR@^YvYR-]T[^f[<tG/$}lKGNwEkfssEM0-`:2iS+xY8qa2,.Wl-AE8<mH' );
define( 'SECURE_AUTH_KEY',  'Trm^R *Ht0MbRUGP=N:*;[SaeZ?N,C}sx$c1|sSFDrDh&e|7M>k(^L7D`rbr,f%<' );
define( 'LOGGED_IN_KEY',    'W)ZYd3kvmU;+t23g6H*mV4fKD#y4K*Ief^o=s`xtxfLW<FaZlt[Mf4C,bWe`CZ+R' );
define( 'NONCE_KEY',        '^7m?nM/gnXkpFc0wThsi)m{*7 HFq2&7.E<V_o&*#-Ug`/9A.YS~wtKP-S3cRWdG' );
define( 'AUTH_SALT',        '655@A8OM^~}z.*v];.sW0AkPvPR]!mee(D{?Ua^J3bwjh.TZWf3d17dVEtpX}!Vw' );
define( 'SECURE_AUTH_SALT', '#q>Woa8:;q)6-OD-lt1FQ|(GqAqo?Jl 7V6j!4Y3$ZHoV|x7hj+pvF%LL2ybc=Us' );
define( 'LOGGED_IN_SALT',   '$0x|VjAW/)kIs#]<,@#T:q9UW&/x!N(Sq=:?6AmjRPDCFP*`ytaeL$rklw|b;!Zw' );
define( 'NONCE_SALT',       '5^)L-2czw6elA.*j!9S$_hwxd]^VR R/<AE}Z[5U0:L=Wio}r6#pO}[Pw(D&;sLD' );

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
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
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
