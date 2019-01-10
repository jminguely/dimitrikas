<?php

/*----------------------------------------------------*/
// WordPress database
/*----------------------------------------------------*/
define('DB_CHARSET', 'utf8mb4');
define('DB_COLLATE', 'utf8mb4_unicode_ci');
$table_prefix = getenv('DB_PREFIX') ? getenv('DB_PREFIX') : 'wp_';

/*----------------------------------------------------*/
// Illuminate database
/*----------------------------------------------------*/
$capsule = new Illuminate\Database\Capsule\Manager();
$capsule->addConnection([
    'driver'    => 'mysql',
    'host'      => DB_HOST,
    'database'  => DB_NAME,
    'username'  => DB_USER,
    'password'  => DB_PASSWORD,
    'charset'   => DB_CHARSET,
    'collation' => DB_COLLATE,
    'prefix'    => $table_prefix
]);
$capsule->setAsGlobal();
$capsule->bootEloquent();
$GLOBALS['themosis.capsule'] = $capsule;

/*----------------------------------------------------*/
// Authentication unique keys and salts
/*----------------------------------------------------*/
/*
 * @link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service 
 */
define('AUTH_KEY',         'Xb5@+|AYF48xN_PM?nZ/ag/vQ-$(*Z=Z!N:+9i8 P|D|1RVqgbXJA=woU]6o `~m');
define('SECURE_AUTH_KEY',  'O|rPo2$|F~!23*O|)8?g{Q+aq|b}v:] |BSQ*jiON05GcCnf3V#7ZVV/z3[/-Fwo');
define('LOGGED_IN_KEY',    'M2_@wgKP{x>+| :/xT1L,(8!?:yl_{{jn~-EG+.ebKkM{V{Ox%IUZ6FHufA1v/iY');
define('NONCE_KEY',        'tWh9p9b%7|#q|TRX}t^?_U52uGN-ked4vr)1cnNVky;9{9t1o|lAE(el-oi(q7-%');
define('AUTH_SALT',        'HM Z&@|icE)gu?6p:S81/1=AalXcY4{Z+{uj!5T6UC!_o([+xEv~5rB3K|RPLuP.');
define('SECURE_AUTH_SALT', '|LKqC f#+# tnl#DBT&!T[1l~ZKj[X5A|$ @bfg? V-|n{j]JfaIQq+gV53kshU2');
define('LOGGED_IN_SALT',   'r#@&o~V03w07a|K-Bp(Hhz6xl4{YN//}Kl[ps6>}FkHz(oz@^V6IMWNe(w_wFL{0');
define('NONCE_SALT',       'Q/T:B%jsS9<O!lo(3g]fQuq*Gs*v]VK--Bqx!SRg/)[tM8WIy;a:[Crd;aP*ZDv+');

/*----------------------------------------------------*/
// Custom settings
/*----------------------------------------------------*/
define('WP_AUTO_UPDATE_CORE', false);
define('WP_DEFAULT_THEME', 'dimitrikas');

/* That's all, stop editing! Happy blogging. */
