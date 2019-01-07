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
    define('DB_NAME', 'peanutbutter_db');
    
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
    define('AUTH_KEY',         '{,V1r!c6f!DekFB83f&CuDctdz:XlA>%6n#+{Hd`CnqiKjYafrT=28l*y$A9F+2d');
    define('SECURE_AUTH_KEY',  'fD{^xF@wy2>8Iq+AAYL(ayj{|Iman/sQ^Vn:-{A;tI/k3ZT}auq7qGdr&aszM,)q');
    define('LOGGED_IN_KEY',    ',^qq0>kD?59iL=MK;`wA~`F7umv!0C9Bu=_-_j$D>[|yFPvk_{Vy7%]veg[n8h}3');
    define('NONCE_KEY',        '_u*!+I,3[{zn. .3ngv=6=3$)VsU}3i|y=B1r@N$nVPi>aARU{Z_{;b6t{g{;0{4');
    define('AUTH_SALT',        '<S(]&0q@o%QeG)aLu0U7.s?[.b/caq}gXt+6TE]<uzmy7r]&v`1+O.uU&[= xrNb');
    define('SECURE_AUTH_SALT', 'p(N97d[Nzj?XqU:6~Q2&P_|4EU[.x3(/Q`U<p=+rjx4$Rb>V6Vz_b*e11y0A,ak4');
    define('LOGGED_IN_SALT',   'ezjmn8MGsni75i7q`r4O$ JhT{kv.kdRgNg4YGV>q]LR&D^)mLB(sBOM}-QJ*psy');
    define('NONCE_SALT',       'x9X@s04KHslq|&|/vgp?EahR8q@FVvy9L3axqqYTK($d61AWyo*f,VE!2;})/^NU');
    
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
    
