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
 * * ABSPATH
 *
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'proyecto 1' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

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
define( 'AUTH_KEY',         'iBI^,F4&Fs9:<CX^it-=`~~>cS-;mKiN!Wde[EEC7~O,LjVT=fo1 UM_v43f9x<a' );
define( 'SECURE_AUTH_KEY',  'a~LJ^;Oy*_p,RDDhE!<Kqqg>q|2l#cBxB1|i*knHg]<- @p`<fe7lR1jKY8CaZhI' );
define( 'LOGGED_IN_KEY',    'a`Qo*o>`$rl*$E-iOwK!YBE,|Oy_.v6V6>1gxqC&81Bi}2.[rFKlvx9f8>-Y4LYB' );
define( 'NONCE_KEY',        'vv;s@UGQ}H&y9DD@LAy ;^|gKOzB$.4Xeg9|gNR<D@ls~g?Wt&!X]p9=BXg6,@^`' );
define( 'AUTH_SALT',        'fyb;KBL~:l=SlTvu!cm/o8R{@l;n)ZeQchCA}g)0Bqd$[{J?%|e8n|n= *W Ik=S' );
define( 'SECURE_AUTH_SALT', '@+)fWF7kU G:(Ke`^WS.gjoaK7(hX##ImtOIQ2d6YS{31U5y_RguU^obxw%hn.i@' );
define( 'LOGGED_IN_SALT',   '8=YOQ@  hk@Ln7cs/h9yZ2B Ud%W{M8[e>|oqwb)85yHd|O&1,Wu @Ln]VS;oFQH' );
define( 'NONCE_SALT',       '[JvoS kO3pcV2cJnZ+Vwn%g!0oP%&>StiB&Rqs{[fVqIE4pM)]rJdL7%a?%g:xX]' );

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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
