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
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'papermil_cronus' );

/** MySQL database username */
define( 'DB_USER', 'papermil_cronus' );

/** MySQL database password */
define( 'DB_PASSWORD', 'papermil_cronus' );

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
define( 'AUTH_KEY',         '3/cPrtb}n|pGD[i9op:Mf3e.!O(DB4l=XAya8oP2jD_uFZ2qbPtb?|oD&<+?6KRq' );
define( 'SECURE_AUTH_KEY',  'EckP(P,@Hna/)8+WvT[}Mx->UJ(Awa:xAhsqRKInv{?8eQZ(o6(F|Vb$! z6!4Fx' );
define( 'LOGGED_IN_KEY',    '%Y)j4dXYc31],!_$O071t1RLdxcoa{iE3m#Kl)DO.K;N=:)bKF-`#zR`}?Ub^0t|' );
define( 'NONCE_KEY',        'a_gw)kmZ|]6/4e|636QV*<|7$Z~F4 `-}AHAkM!j&A!$TLI>FK@lgw$8f-3kpz>c' );
define( 'AUTH_SALT',        'tpjY0[8-dDqj}D<?Z26;3W-Pl;4/Yh5z8-p3Ayxz[]E=kPEtNh?WYhPx[t1#xn3I' );
define( 'SECURE_AUTH_SALT', 'GHSIThin@BqrkWx~!ym>^4]8j0G.?9S;`?c-NsD&%C^6M+cf!oHylBy4t,h#Pctl' );
define( 'LOGGED_IN_SALT',   '9Y1&dwx2R(hJha+8aN#>5`POmJM4%f2$]DExPR8gNj_p*fPXn;T!eCs&YidjDnw8' );
define( 'NONCE_SALT',       'QE,![e@2N2u1<--P+,qQqK9nE&p/wcV:q^AjC2DO5IkkSb;lbm#*u8)^xG|LrE;h' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'cronus_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
