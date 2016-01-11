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
define('DB_NAME', 'truongthinhjsc');

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
define('AUTH_KEY',         '(|J} 7${XZ/&SbTX//t((u6CfHw_,=ut#5^lw8Y=mU(272J=d$CU^>*w?ih;?WNF');
define('SECURE_AUTH_KEY',  'C%z0U%#W:wIF)s/uL{euC[gn~Uu#}%-Ahj.54S-#B:1G<Dma8bg3ExWsTfTfFpXD');
define('LOGGED_IN_KEY',    '0X_!J*W!vay^^P1Mz}C;Mv]|$sw[vqgc&@aRj{o,+nIcqWG}%bgcZ#a!/o6mJ{n5');
define('NONCE_KEY',        '-OylRW%V+E#``H@bb,=oC!BC#*FhNV$:,N_#f<9hs:h?GE2NM3VZz/U7nRyn.0xN');
define('AUTH_SALT',        '@|~*7<&8?$;G#*=x#SZDj8z ,Hu?|8Va%[,b+CPfhAu7jm o5Y&(;d%ru} ZO~wt');
define('SECURE_AUTH_SALT', '63J[`Zd313#38Z|u8xb_UN-RX(20t}-=bh:/VnM_;Y~Ao:b0<u.=O@((cKhN.9KX');
define('LOGGED_IN_SALT',   '<X_p)xav&&JEfugUc9#%TyY/#)N[^D_f?M[~TA=QW7t4B|:du7JJA/s@^B|nWaae');
define('NONCE_SALT',       'G[UY5w@ef|x or?UCve/L=4LP<#rB=G?g|$Eu7^HQ]T;@Z!e`yu{T~[i do?VQ/-');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'truongthinh_';

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
