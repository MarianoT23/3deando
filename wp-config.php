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
define( 'DB_NAME', '3deando' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',          '$Y1ZZ [2{.J9.#+*j{ SU7P,6+]]q.ZzS6]Z%H Do+i=~^Yi.!0({y+E3b+!HGK9' );
define( 'SECURE_AUTH_KEY',   '1:#ojlvd=|@w/1ZHG~D6-n!mruDt yVr!#a+Q8.5<y:_[iRd?,(pM2nK~BxWl )d' );
define( 'LOGGED_IN_KEY',     '5s*yAvAGoM@FyMx&eS-*#|t/rx@:5o-ZVRW46lyy8U9l&6K1BgFxN:nkLfg}ar9%' );
define( 'NONCE_KEY',         'U}u3V8;*KV.%1]So$i-jMn!>[L,A`|D|R~B`|$A07j?qtDJ+8ruZVxib]l^E|btM' );
define( 'AUTH_SALT',         'qphl:oh+86.U0Xg?.QV,jtUW0p*RyN=@Wb`-RkV#q<?nD|;_$}Dhpltr0s#oDwy&' );
define( 'SECURE_AUTH_SALT',  '6!p#|~P8R8z-IQk2C/@%6-JIF8B87F<uY#Y#9U(j%d8kk.rOeEx:u<.16}-h?E}~' );
define( 'LOGGED_IN_SALT',    'FtDB^u/u43)qt,EL`Y}n@55bUMgTGKswQ-]xsNVJ]OMJRg3Pj6XDpJLg5hRwGMg5' );
define( 'NONCE_SALT',        'ZxeYb,xU@r#@Gz&D$JF{.OU^I/T34@HL_1db 0sl3#>Jb:9_-=&^sb|*/T$%fi&~' );
define( 'WP_CACHE_KEY_SALT', 'bJX@`&mIs=UIDEMgYq.!R`AeoAj.:Ji8tJ_?Ba9*vRI4ZH$>8b],0$h-m-PWUvZ[' );

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
