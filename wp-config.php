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
define('DB_NAME', 'karoltrzcinski');

/** MySQL database username */
define('DB_USER', 'newwp');

/** MySQL database password */
define('DB_PASSWORD', 'Karol123');

/** MySQL hostname */
define('DB_HOST', 'mysql.cba.pl');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'KYu9uVg<Dvk:%sIZPdr>uM~_N}+z@A;3 J#S7)YVoDC3CUTVoW~(y@&T!pz3d1&Q');
define('SECURE_AUTH_KEY',  '@qEesJFO;*:$kZfiizytJqt3]C2O:M0kTomt96o>|~UMggO|`.* z<uOF]-=q[30');
define('LOGGED_IN_KEY',    'p9taW1umMz`N)E4?dw%[=ZAia$bnPzs,3%YFFYTPn)HpXb8HgoO[R`IXY>XG6f-q');
define('NONCE_KEY',        'S[]FM8o]*v_V{sLRgtBw`-{9Kb*5]xEs[D&kEtg[,IY0g,PBD$v=tS[,5Rq%;5h@');
define('AUTH_SALT',        'P(hiz#Bi(?RBvg XSb4`I]%VC-.YYfxwdy$Od<-Rsjv30Xe#R=Xofo6]G3akzr,I');
define('SECURE_AUTH_SALT', '1y~~4rap~,BdO)$7#rm@g2*eUz~JLWFh[,mQzak)!gEV&xX7vpP8wI9%hlh^Lrr_');
define('LOGGED_IN_SALT',   'au?bVLz=Ke~5Ih?MbM=uipgA2kK3w!Yzb.f$}!xEe/%q}MX?aIiW!p&k25gWf#Ym');
define('NONCE_SALT',       'nKD/z{A>AWyXO +>.V=9J?<p;U6+REuXS }vaYIa1LoJ|sO&EIO&U#%n2I6W{:x*');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

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
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
