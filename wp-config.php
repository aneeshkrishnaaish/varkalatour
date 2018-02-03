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

// ** MySQL settings ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'varkala' );
// define( 'DB_NAME', 'varkala' );

/** MySQL database username */
// define( 'DB_USER', 'id2382276_wp_45a00d34d4f0c6845b237652b35f00c0' );
define( 'DB_USER', 'root' );

/** MySQL database password */
// define( 'DB_PASSWORD', '1ad93f1962b5b6fca86094cfe9768575f03e647a' );
define( 'DB_PASSWORD', '123' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

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
define('AUTH_KEY',         'uA|Cm[uT]X.<-R|h}dZ:yP!U+lt?&gr[CF?GILV[rT}#;)}nkr39|8fe|^2uuo3#');
define('SECURE_AUTH_KEY',  '7iO_G9k*HAs|k|zw{@tVol3bs^v)#_KF)jQUf_ZZHH^&|B?wSj0&.;++&]|}fFm8');
define('LOGGED_IN_KEY',    'p/b+sSlUS]xV73> cu8%<Mv4d~ppywexS6+pw{pm]=XvptebPClC7J$ny-%]b#t:');
define('NONCE_KEY',        'm~(cf/EJQjmd,-3a; G:20sCK|jZkquI]gw=j!mK8Y|<n&tF+k];fd^k./2U&B+!');
define('AUTH_SALT',        'aT4Tu/ta[[N<+J+)=9of#z<^y,lirLG{B_mi99NkfQFZP0!hC+`N-@xZoh]p)Ee?');
define('SECURE_AUTH_SALT', 'WYgQ[]y.&+PK-&Y!Y<^+MUaqYA$*<!#Bk4kvX2EW}i!*UIIwXAcaE>fLX-%|%~|@');
define('LOGGED_IN_SALT',   '^7bh[}I}|9KarE#HOlN<=D4Q-B@yzg`zz-?3z1M47fKl66+cA%NL+R@hu$8A-PF:');
define('NONCE_SALT',       'STf!*k%a9)ycAs(f,]F}fs%t%r`#Q>yI9wKu/h6-A|S+uYt+O:) QG_{tv4@/EFK');


/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';




/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) )
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
