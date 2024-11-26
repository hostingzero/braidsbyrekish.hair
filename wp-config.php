<?php
define( 'WP_CACHE', true );
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
define( 'DB_NAME', 'u756016664_GeAyA' );

/** Database username */
define( 'DB_USER', 'u756016664_YphHq' );

/** Database password */
define( 'DB_PASSWORD', 'Talktome@123' );

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
define( 'AUTH_KEY',          'x|w{3of<=Fgdax:Q0VK88[[y+5h1^0@m&S8b|r& j>@iVR7Jx6@.qRf&[,5(szyc' );
define( 'SECURE_AUTH_KEY',   'T}SdUlJOR+HN;DH&X^Cmv4+/?@SE`&O.ZzHyG(N$;5[}B:#.@:Q;c$h4ah[tEza3' );
define( 'LOGGED_IN_KEY',     '&h6rw**p-3->.?u_Y.we`4iTG1xkeN;IYEG|MT|XD%+M.5oVhRcr]N4et68}@gd.' );
define( 'NONCE_KEY',         'k}&*nUu^(:!q_]NEo)1e5|xZbBB-[>T5qg{G^8Z}!=k3yX=F$yP*0TX.AzFCI1(<' );
define( 'AUTH_SALT',         '1kC]$cXkCY?lBjMx^PuIu.tzvTeOEu1_!R;wL3e&v?>&IZLWprAf#Aic(G+#C]jm' );
define( 'SECURE_AUTH_SALT',  'tmk2vfyI7`.6,(Qi_{Px!xlA$~%Vfp^gGhZ-V#l&Xd4mXJUrTsZ$xX(~=y%F-RjM' );
define( 'LOGGED_IN_SALT',    '-ms8XW3j>S(O,t|f=U:iMt-e!$R,:|%pJ#_E/OTV2@/V}_J{I=}!>BG#j;Oh>CL6' );
define( 'NONCE_SALT',        'p,Gv>3ru:vtvBWhz;8szHkp3YA?5I~/DvQu%Fz_&<y1LX-!Q|HP5l-E)Db{>qMNz' );
define( 'WP_CACHE_KEY_SALT', 'Uz ps1;b*EC<_6HsB-p9a_Wk71ru*V0JYafWFXzD4!8T|%47Azs00gL(oX/2Y3+5' );


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



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
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}

define( 'FS_METHOD', 'direct' );
define( 'COOKIEHASH', '895494991c5634d232a5ff934bfe4e63' );
define( 'WP_AUTO_UPDATE_CORE', 'minor' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
