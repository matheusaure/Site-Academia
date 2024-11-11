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
define( 'DB_NAME', 'u662916824_f94RY' );

/** Database username */
define( 'DB_USER', 'u662916824_Akeqp' );

/** Database password */
define( 'DB_PASSWORD', 'tcjlelMIlf' );

/** Database hostname */
define( 'DB_HOST', '127.0.0.1' );

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
define( 'AUTH_KEY',          '`:;K2]Fpm_pN^i]OKD`ie3~5P@bT>qb}I98iLvOLXbM$02tAM-D,_qQ(0eS}`vS%' );
define( 'SECURE_AUTH_KEY',   '#m//}[e.?dL0w)JKJYV^xk&]>Rmz*I]B/UDA*@6aG#cE9hRo(xPpjM- Yf?V3/+K' );
define( 'LOGGED_IN_KEY',     '#n=u[#!M4hJ_17c#i^dba_V6Bx=v0e)CnA^dxL,98`dsCGq7YA2Ih;Ki7d{ADk,{' );
define( 'NONCE_KEY',         'z#-w6<Sw<XeP}r6A+[P:P,ULss2{l[!_wWnn:ay_r#5<ude5!.2V!T*/rCZ^l%x~' );
define( 'AUTH_SALT',         '4|m#:5O0v{=T]oX;ehJ%K%M<6/O~lYpa;C#Is1C5olT7Yp@$Jwj7p/OMy#_G45Az' );
define( 'SECURE_AUTH_SALT',  'o^Y=M,]8&v#loz6GAae!,KHUm`fN~{Yn9|p@Y>W]ri}*6x(0@s6=ZjUuaP ~MlY1' );
define( 'LOGGED_IN_SALT',    '~S3eRd?rB6Y#7|pHH_G|4GyhZ@C^,&|.=0TmL-wF^~^Ju#a@ X0K3ym_Min?oTeT' );
define( 'NONCE_SALT',        'd1^zLOJ+Oy %#vc.p|],RWfQdxB3C>JW/>u@dF!I<eYAggU%9LBg.Iwpd)|#jwd ' );
define( 'WP_CACHE_KEY_SALT', 'qo@MkalG/!6QmJ0<X@Qd}$Zj-Di;UY%K$<cUfeO@#*X@pN{qc.eh{@)0rVvRG@J1' );


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



define( 'FS_METHOD', 'direct' );
define( 'WP_AUTO_UPDATE_CORE', 'minor' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
