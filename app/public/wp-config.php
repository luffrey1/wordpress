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
define( 'DB_NAME', 'local' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

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
define( 'AUTH_KEY',          'LV`u`Han!nkqAia9+(5_D*n{86Gj9+dQM[&Mfyv?rZ]?O=RvWuuO}Vp-A8zO$<c[' );
define( 'SECURE_AUTH_KEY',   '4um>F{8)3^WhHj^U~-NQiJjyM;j3[J$JOs30+JX}_h(x3Q>k`(#H/Z)7-J#7|xes' );
define( 'LOGGED_IN_KEY',     '(dua/S^b3*GA_lfWM6J3{6#}@E$=X=X&YsHogfv!/_w07`POQ7l[D,o1(cg/dLL$' );
define( 'NONCE_KEY',         'Dd7QE+GEZi!brNHrX*0@8gNr:q.=#G`]n[jS4d:Mm1b-N9,fqFv=.Fj4Y!laT#*o' );
define( 'AUTH_SALT',         '0NpDfRG`4_LXD*D1rE{QuczAYOyy{U_bihoc5]!lF1e5[Yf ~I3~&VP5lOGmPqSn' );
define( 'SECURE_AUTH_SALT',  'n+8*!qOMT/h&p}(aM;o9vl6i37IDD1H8t_S)&CuiYyE-s^P`/G(K,@dbnD;}Va&H' );
define( 'LOGGED_IN_SALT',    'K*+PacCA$qR@-7bUweiqS>_%QeBjrQY3&9]vUSjm}sj9yX}Hq#5Pu94Es.j%oncA' );
define( 'NONCE_SALT',        '#5pS2jsbEi9Djh>jTDLZ]M|:S&gfU#A^UlTE4N3]xH97Qr:*P_p2>zs$`GX-+0Ii' );
define( 'WP_CACHE_KEY_SALT', 'z])*`Fg~N8[I%Z<gvf-jjBJ.}`DLfb_Gl1!^E5nd]_o8KA : }KY XdJ,&w*oo0h' );


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
	define( 'WP_DEBUG', true );
}
if ( ! defined( 'WP_DEBUG_LOG' ) ) { 
	define( 'WP_DEBUG_LOG', true );
}
if ( ! defined( 'WP_DEBUG_DISPLAY' ) ) { 
	define( 'WP_DEBUG_DISPLAY', false ); 
}


define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
