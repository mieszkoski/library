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
define( 'DB_NAME', 'u678095054_kGpHK' );

/** MySQL database username */
define( 'DB_USER', 'u678095054_o0Jqo' );

/** MySQL database password */
define( 'DB_PASSWORD', 'ZVWJFMKA7y' );

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
define( 'AUTH_KEY',          '2qz1Vv[!pu8nv+GNMB`6=7otdBHQ.wX!}DU6P9}025h6h?3B_@HF(v~VxtnScsa;' );
define( 'SECURE_AUTH_KEY',   ';KqEcnkjgS4[aOnFoI435/?ZzoH@4G0#`,a1PDcfB,t+IOC}p}T&tqj7*CV@o/du' );
define( 'LOGGED_IN_KEY',     '}x#YRIp?jy9)-Bdt0du-CyQR5m4eMK!B&c3+W`8`Xng?aJi=7w9n7~[?$-f*+AH^' );
define( 'NONCE_KEY',         'f~jd-``_YY:6C$3Fht&aWy:){maL+q8zzT0ot?fXYf>Ty*y5q}Vhkv?YV{8Y5k4*' );
define( 'AUTH_SALT',         '}fq)S66VRUFZ^wL:r#3O5Om6KO<]OD};:]Az>ZgL7dfKv=yI/o?^oTHyg<EAZl0l' );
define( 'SECURE_AUTH_SALT',  'oT,i{gKdorSz/R)`;DWnk.>d5c,xmVTq0wk|_VCh/1$WAh+H8x0YsN$1+q t jBI' );
define( 'LOGGED_IN_SALT',    'xQntH_nCGQ2V:3:4hgkwx !,*.iJWO:^#7?Re w+HYa>SaZ]1I6:(Xs l]a<G]i,' );
define( 'NONCE_SALT',        '9T/.ZrIAgq6IF-WWxV^Z5F)*g9:,F2}~u[PRL&O^8b>T-_#,Vw~zDCQbiva6ife=' );
define( 'WP_CACHE_KEY_SALT', 'h6_AZF;{2;v:hbRQY?3[8osP _9F9bO)=aG?$u]_vJ~dx>,/v[aC+]{!#T,nt+Eb' );

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';




define( 'WP_AUTO_UPDATE_CORE', true );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
