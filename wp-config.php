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
define('DB_NAME', 'myblog');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

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
define('AUTH_KEY',         '?~#q)x,Gq@Y@KI+%HXcmnv`|woVs17-/B/DkyDr?lEFfVPB=7ppv3zN.HiydW$)W');
define('SECURE_AUTH_KEY',  'h%#,>TTP{D)ilRbJ`Hm[A#`n#pJPKGS.,}+7;i*awvFKxD.@30ZjU!06=JAl`Apr');
define('LOGGED_IN_KEY',    '2-]g6dbz>*EKS-gtb8^)CEu>Wn(T=G5;IX^~}Bk]OL)m2~j$5b9zG$AM?}kpwZS_');
define('NONCE_KEY',        '&E_z^9`QZ/~+5N8!AzihJ#xal5{0F0gV5#E-Mu[=i[O2Y);6,`K#?X9$nkz1lPdX');
define('AUTH_SALT',        'xL.^GQ-hjN4jgPak005Pw;Ld-/&e:*H!lD|m1|kEN{Aboa!y_H5}6WMV:#Hi^kDd');
define('SECURE_AUTH_SALT', 'z#+=Jiv*`EtyyFB4;1v85&7vxQ&*Z,X<&f YTAwsxTGUv-M)Vse,@}hwD2o~=R<T');
define('LOGGED_IN_SALT',   '}d6:c<L^@BrPwQr,W&c@)^`gNtEW!,nNI#mzI6nASK5t5@*O+2uRVJ!sE.&TsPHf');
define('NONCE_SALT',       'M8&au~o[>U*B)Z#j~Bj,rmO`ajab|Q8?N?2`@BvRGC`I9;-!ljkUtngn D_ur<6N');

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
