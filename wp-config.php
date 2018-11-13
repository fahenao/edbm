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
define('DB_NAME', 'wordpress');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

/** MySQL hostname */
define('DB_HOST', 'localhost');

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
define('AUTH_KEY',         'v$.B <O-Ug-uP*2p?-#E]BUHx$D<?-a/_kX;.YTeAm*:?.xWB#]1TIGX1y4=6.7~');
define('SECURE_AUTH_KEY',  'hO?M/E3+K`yIY9hW0-l0t{yeWd~Ij*=*Cp-|M2!UDG#o+u)v`<6)[<o&]Ps@g]A{');
define('LOGGED_IN_KEY',    '_BIHd~fcC,J?n>b?SZ+rHdV=S#9QN7+ KKl$ArShy|];x/rJKn@w+!+iH.F0E+H/');
define('NONCE_KEY',        'Mb&D!.MP+#`PR1.hROu&4{wVHAVC.jkD%kS|6(rP,`Rgt9Ah7^]islsSR!BL8AHm');
define('AUTH_SALT',        'L6unFVB4,+T c{#hHC^fFNFx<-(bX4p<m__g!{@0*31NmX6Tw,MMyWQq% .T3iho');
define('SECURE_AUTH_SALT', 'C!{](J1H4Jp<=|,ix*<G+D^|c09k%7]E=hc8an+9C(m?n)lp! v:}n,,:xG>tdR<');
define('LOGGED_IN_SALT',   'WOED+7vzDM[a 0~RR$,7q{?`i/gDO@l67k0E}w/vj_Cm4?Z2Np@g Gf`{#^ncv*x');
define('NONCE_SALT',       'Dve_|09gY`*Q~t6!5poi6nm=Rw*dys[PwQ_eRD/m78FLg&Om5D $le|R*mt21tIo');

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
