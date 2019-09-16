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
define( 'FS_METHOD', 'direct' );
// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'aqua' );

/** MySQL database username */
define( 'DB_USER', 'admin' );

/** MySQL database password */
define( 'DB_PASSWORD', 'More.mg123' );

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
define( 'AUTH_KEY',         'D0c+tW{g~xbjp*I}BmeUftj@lQt6/i1S>6>107H?wUO=)?ha0}^^pQAyclP_X3s|' );
define( 'SECURE_AUTH_KEY',  'v(r{9fYn#?u]%dg.,[)*<D>._/yPMh-?OQfz&2Mr+h)Oghx?A;xd=dE-t;5BoK4d' );
define( 'LOGGED_IN_KEY',    'i##~B[/Z-0L&??&s|+Oh3>9ZsrKcinx;z4P$^{A&6lsUyB/Nyh#2FOjGrSN-xHX0' );
define( 'NONCE_KEY',        'oFgntv*%X|3!4@Vu*t3rZ93_mJJ:PaJc9~#d]48L_5mflg6$O@h;t@cV A?`K+d)' );
define( 'AUTH_SALT',        'Y9 ]f*`*BZ&s[a~JHI9QGL`L;1Oep6kj;>8ZY5RU)<xa3K)}GVIut}q.>Yk*tp#k' );
define( 'SECURE_AUTH_SALT', '3)3>kdvU2:q$eit~<+Q58DPAL_bK!g`hPq?2jh<T[&W$G`1[/f}jy8qu`dJjl>OY' );
define( 'LOGGED_IN_SALT',   '4iT97x^>yWSsrIzGL>1QeD,A]myM;5C:m8ZM}`6OV}@MC<}/BrYOz}j[mN%EM#;7' );
define( 'NONCE_SALT',       'yzqqZ{ZiZ H90h5ChVFdOQ,`PEU>lS]FIPE_#j99P`6 lA!G=&uDEt%0kPfx7VNF' );

/**#@-*/

/**
 * WordPress Database Table prefix.
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
