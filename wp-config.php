<?php
define( 'WP_CACHE', true );
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
define( 'DB_NAME', 'u936986680_B69ML' );

/** MySQL database username */
define( 'DB_USER', 'u936986680_AwqcT' );

/** MySQL database password */
define( 'DB_PASSWORD', 'OiL7A69jsV' );

/** MySQL hostname */
define( 'DB_HOST', 'mysql' );

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
define( 'AUTH_KEY',          'B}gEwDZ[R.DYvOr&La|Fqob4>$va3?,Ao*2L9K(alILDa2%HS m@2~VlG_I?pBm6' );
define( 'SECURE_AUTH_KEY',   '25@GwiOL|-],+f! K.0&>xhqv]()7Y#bw+MQ aTSsKIkq!6|%`Ng19%F)R-04xCf' );
define( 'LOGGED_IN_KEY',     '[g<C>&bq;@#Qee3~ `l4uSFv!Sk8B1SJGyBd8N?v/lP?uc^V5b,@d$^|l 7`Cwv_' );
define( 'NONCE_KEY',         'yws+Vza{!M(Nz6S8ya)FFc=D4t*=Lc*s~^fIM`92n-O^7c?$/|8G>`]_MHs&VxD*' );
define( 'AUTH_SALT',         'X%4[b;mmQdzASOAt3xqz!@1#LK,UgUHI)<;H|0.^VzD=]2.-&7SwClT+ZC=l8g>m' );
define( 'SECURE_AUTH_SALT',  'H9 k2x<zTX[Aa,1>:7,srCdgK&{AI>HJfT:.bVs:B/8#aU(&&7;`~zEgBbu;`!f?' );
define( 'LOGGED_IN_SALT',    'xf84r=g#.:Zf d08]~A/!F10c0f}A9B(,KD lm/i!3PpB2k9X`BZs/yyp,(3g~t2' );
define( 'NONCE_SALT',        'BF`A_?cza1Ufwv2D1)Vm8E ;p-lbMN09tI7l,P1NA4B [5&1.v_ E>rP4(}_B#9D' );
define( 'WP_CACHE_KEY_SALT', '/PzGpBp&D|S}wpBYD`d)%$brWzy!=&rnahJJn)7Y`$t!j[%4>d[U5)|gTB96T.m5' );

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';




define( 'WP_AUTO_UPDATE_CORE', 'minor' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
