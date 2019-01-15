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
define('DB_PASSWORD', 'P@ssw0rd');

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
define('AUTH_KEY',         '{#9R~S]#Vy2.Vb:Q&2.=O9!P-JM(*E| %;R>A~ zFS2`s^kB!+/BLT{jt{Q1ZF0k');
define('SECURE_AUTH_KEY',  'j1AM//o``)isJwr11t7:}ToWPYpjO@-}$N.p`L[R `[Kb1.&jQlA30t16TZ!*USg');
define('LOGGED_IN_KEY',    '?|nzkMNK3h/]N|e|c7NlPpJe14AZy&U})2;r9voCwst>KA>B]T;7k-1-sIDP#gE#');
define('NONCE_KEY',        'qfZ!Fm?.ocd-J:-[2KLS{fENEd#PqxdFx .aWWhJ`hg[RR6f^vwPl01=a/*!5Tg&');
define('AUTH_SALT',        'A])SHv9aB^O~x`/dNaK3=FmZWrfk_^vqb>&-Zw/$I?/$s-qgI)upn@!ze9(m-b3%');
define('SECURE_AUTH_SALT', 'CdISVX*q#9-fIWIcr36n0Nn=V]olDS(H:5eCgims`=f[4n 1XH54-5qfHa*&`of5');
define('LOGGED_IN_SALT',   '|ASM<$bA]b>mKyvahfInWlK,}b9Gh[$$Vv#3F{Hf#J)EY>S0$qwGu}2;bgYIcjMp');
define('NONCE_SALT',       '6[OuKlseW=QIB^EQ+)s)L+4#b$NOM)(;<Pyh,2P9O@!sdk~Z-Smg{b:~1R(h&PN=');

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
