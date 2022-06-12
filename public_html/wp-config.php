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
define( 'DB_NAME', 'u122066850_A9BXm' );

/** MySQL database username */
define( 'DB_USER', 'u122066850_YetfY' );

/** MySQL database password */
define( 'DB_PASSWORD', 'rDew26mzNT' );

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
define( 'AUTH_KEY',          '}3^gA<V7%b97;? Q6=dO<mGZz|JxVU,5i;,poi{11`-ug$EfKZe7oiM/sk6pq4 e' );
define( 'SECURE_AUTH_KEY',   'gw(+7pv{W~5|89#sG0dvAIo/r-8Uy`{NyXk=rRU-W5(H.W7$~[UkM[*/^[jbcq!Q' );
define( 'LOGGED_IN_KEY',     '~2F#+|Y3^EHCN;A1r9#}fASW[]=*V/9q|%(QReT cEdD9{Dt6Da}D,&{1LHVJ&0g' );
define( 'NONCE_KEY',         'gS%5Z+qJ]b>r9xE(V)7cmy9$)&ctHcwF9AA]a,hIV59xS{P-M:*N`G-P?OZ`}$*l' );
define( 'AUTH_SALT',         'Ig,+]c@zZ&d,}onSPuy^QMgU[XWzj)Tkoa(DQEpHSoxduY^SMj5D,SN3N4?vMh&`' );
define( 'SECURE_AUTH_SALT',  '(;{&fA|lJ{ MrEip<;0B!m`sg/xonsk->mGDsPJ?b2$Cgucm-NTnhiqmq+BA8ln/' );
define( 'LOGGED_IN_SALT',    'Y:]Nyv.b##{Ge&^oCAd|3eKz{fOiq.z<v$>qzf)4JUAjpG{;yp wFv!Ob xtEsa,' );
define( 'NONCE_SALT',        'TD:,0Oi{IrCk<w[AAXNU27@ZLJndT<ICC7{q:YAX%%T6!8q GQOIdM)SMA1mC$xm' );
define( 'WP_CACHE_KEY_SALT', 'Ph`(Io&G<5eq7me>KSS:ofm5?@~=HcMc0{zw]4oZn4J-C}Lvd6 #UK1I+;!9lLS2' );

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';

define( 'AUTOSAVE_INTERVAL', 300 ); // Seconds


/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
