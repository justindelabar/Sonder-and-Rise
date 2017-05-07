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
define('DB_NAME', 'sonder_wordpress');

/** MySQL database username */
define('DB_USER', 'jdelabar');

/** MySQL database password */
define('DB_PASSWORD', 'ocala32');

/** MySQL hostname */
define('DB_HOST', 'localhost:8889');

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
define('AUTH_KEY',         'v16l$G7cyPs0,x&XoQ5)Q?@U)7<oJML*G8!y&0#N!3RCSZi]Y6cs3`(-Atg:E,hZ');
define('SECURE_AUTH_KEY',  '6ng26KHsi9x_K{~SCAF/d@HpYw<TFt@zGwzNKBR6x2Zvn#%u0gIH+h(g1Q-^G>g1');
define('LOGGED_IN_KEY',    '(LeFyVcsFh%A+]F5~39OttTD9bm~rz1gH`G*L>AR0B12>R@|>5CIs4aq)?Yo[puH');
define('NONCE_KEY',        'f/dM$~:Nx*?fbY)GnIU]J`}{H|*x|pHRk;fw,QW41NT`aERK4 cS3uzA2613lYFt');
define('AUTH_SALT',        '.V{%Hh]^6`r]cv*DY=+11D@qIuWupq2#z2:T@/yok)uJ83f6MjN`j+F.le4yo&)=');
define('SECURE_AUTH_SALT', 'Pz*?ft%DaQM@EMVsz3TUAN7SAdrQ|u_dJW,f3?YQtMs;^<>u#T`CYX=Jg*M{6J~N');
define('LOGGED_IN_SALT',   '.MbjM`tf<d7~d04!!KqIVna}<Re]%rI4o 1#zwRtm#Nnop6CJuq;#Tnk `xKN18T');
define('NONCE_SALT',       '9Mw1Kt0LMs1-N|}4f~TkH2*=?~a$$MgP<a@tjH@?.AkpOz]d%o,jk~+Xy-e4+t7+');

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
