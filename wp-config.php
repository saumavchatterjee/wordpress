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
define('DB_NAME', 'xxxx');

/** MySQL database username */
define('DB_USER', 'xxxx');

/** MySQL database password */
define('DB_PASSWORD', 'xxx');

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
define('AUTH_KEY',         '`[kD4r7-*/W3(eF+YF I_oKlVf[ZA`JA9^kI)Zy3sL5egx]{RT.Gkz#yrtdW.3!<');
define('SECURE_AUTH_KEY',  'B7U:p. -K(-3Py%NBu<VI?X8H|7v7&1Gpl+#K`*?G]y!rDbK3$^g`?,9~B)2#n]e');
define('LOGGED_IN_KEY',    'f/~ SG+o6}HJp`aBq1QQGGebWJ7(2;EfsN%:PWm~]R|Vl`Ne)B7mDr<yOl6edz+&');
define('NONCE_KEY',        '2VRmvb.(}H%j>YjnP2fF&._jY{CLU+~=:i09.Eejg->TRMGhw[8f;SIt{REaMs)%');
define('AUTH_SALT',        'wP.ho4Rm*L1#lW5k;_xKb^R{U$[n:Y{a`L+kjh7HL!Hg%PD6-{T:|-xI>(dp2My]');
define('SECURE_AUTH_SALT', 'O0j4IZ)3vZ=Un~A$o+l%-&WiN!Qw5340+Htm,#4cYJ%=XyotkxTIT9%w*ZAC=2hP');
define('LOGGED_IN_SALT',   'j$xE~9P)l.FLJh+hwWdx9,YZcZNFrmY26F:$jpWe4}l!#n@hufc/z,6gP[%Gg!:s');
define('NONCE_SALT',       '.mrhhwB?S:Bdbx?qKEYTd_`oc0eLKUpxKECp!nY3w1b!;d 1C]JC,QZC0Hvx^aUA');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'rca_';

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
