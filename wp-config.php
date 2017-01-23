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
define('DB_NAME', 'ss_dbname_nenjd1bn36');

/** MySQL database username */
define('DB_USER', '6Vr8Vj0RwMWTMXy');

/** MySQL database password */
define('DB_PASSWORD', 'H25ZpTnRPFh8rMba');

/** MySQL hostname */
define('DB_HOST', 'mapleknollcapital.ipagemysql.com');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

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
define('AUTH_KEY', '[j/@KSoh{z<$]_@NE|AlZp=)jKDTyHB_NWt^Jk](}qq_oW*zrj+r*OWFYFc/YPmud@lapNeghsSxTF[J)EyS-i!J;N*D=CYY=nPMa$XcmYKh$xXrWdqYe^K=Uv>;/gxZ');
define('SECURE_AUTH_KEY', 'g+/@XgePog!kKUyQu(aJr@$CZBDw(ajlFYA@o=mO!AJeBE-drcWOcp?$(I[gtZb*E]L/uk@vaAB/Pij;qnkxtQNjBzByAj/+VDn@zi<gmg&P+W<L$vyQbDms*MO|}tba');
define('LOGGED_IN_KEY', 'G*)+BA@UBHuIO[WBhTrr;*BxVqp!$pNEfuA)ebsselsJFfHp]=fbvljJM|GZ%VGGbe&BR!eJM)U|Ps(%P&A/|U?irl^=<?(ykz&Tf^O;VejCv(tAEf@Vnn+z$TI^aAi@');
define('NONCE_KEY', 'RUT(mf+C!gUsSVso/WFAgT+ByrFLFevAHihToNZqMVw|usoYsxbDv>[VLF+dVDGTIiuv=Cdp*sw<Qn>KK%vQm{)/$!Bz/oBDqf{mY[T(N;YijP&zJ&L-$hlhO!WiQYvW');
define('AUTH_SALT', 'SQM[(@<b[Ouq+!$J%mOe{ud/lcW**]yiD@FcG}Gyy{u]U&?g;WmJxJ&H+Dy{A-u=M;?}eCUGRkPWXwVWbFVnq&*bpE<ROmsnGK&jX{+d?Y[@S$[Wcs]MR]yJe}XolVnL');
define('SECURE_AUTH_SALT', '-{WUWG%oRwb}}Krl_}uzmKupId+aPC)R)o^CZRgO[l%Hw]S?Tj}M(Kg*xuyxf)d!rMnj=mrIFHR[@pa|&x^t-x>Az%sB]kE;}YB$Mn/;+f!yJCbNXV%OzPg<zkq$yv{-');
define('LOGGED_IN_SALT', 'q</YYdj^fX)YD&phhIDSIxVEB-J_%zEy;&WxNsqkhE->%vexGBaaYzS*qHN^zc>jq<R@LO<]m$yMieRHTLDzU/?W/(Z=>k-Yq/BxqsnR+cmWCHvVUj|uLOL/;E@}-Vwc');
define('NONCE_SALT', 'AK%^VX@boRtM+}W(z|q[%KUfuh{|BzrmnfgS!sF=$My$LVARUioI;xO+YkObaJw||TQsB)[pOM=iv^fSeDoty/aPGTGzof@]C?GUNoQHdX@?Z-vS?|rM|u/c^&B+_pO%');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_lwvj_';

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
//define('WP_DEBUG', true);
define( 'WP_MEMORY_LIMIT', '256M' );

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
