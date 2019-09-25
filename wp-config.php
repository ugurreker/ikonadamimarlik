<?php
/**
 * WordPress için taban ayar dosyası.
 *
 * Bu dosya şu ayarları içerir: MySQL ayarları, tablo öneki,
 * gizli anahtaralr ve ABSPATH. Daha fazla bilgi için
 * {@link https://codex.wordpress.org/Editing_wp-config.php wp-config.php düzenleme}
 * yardım sayfasına göz atabilirsiniz. MySQL ayarlarınızı servis sağlayıcınızdan edinebilirsiniz.
 *
 * Bu dosya kurulum sırasında wp-config.php dosyasının oluşturulabilmesi için
 * kullanılır. İsterseniz bu dosyayı kopyalayıp, ismini "wp-config.php" olarak değiştirip,
 * değerleri girerek de kullanabilirsiniz.
 *
 * @package WordPress
 */

// ** MySQL ayarları - Bu bilgileri sunucunuzdan alabilirsiniz ** //
/** WordPress için kullanılacak veritabanının adı */
define( 'DB_NAME', 'ikonadamimarlik_db' );

/** MySQL veritabanı kullanıcısı */
define( 'DB_USER', 'root' );

/** MySQL veritabanı parolası */
define( 'DB_PASSWORD', 'Sananelan12' );

/** MySQL sunucusu */
define( 'DB_HOST', 'localhost' );

/** Yaratılacak tablolar için veritabanı karakter seti. */
define( 'DB_CHARSET', 'utf8mb4' );

/** Veritabanı karşılaştırma tipi. Herhangi bir şüpheniz varsa bu değeri değiştirmeyin. */
define('DB_COLLATE', '');

/**#@+
 * Eşsiz doğrulama anahtarları.
 *
 * Her anahtar farklı bir karakter kümesi olmalı!
 * {@link http://api.wordpress.org/secret-key/1.1/salt WordPress.org secret-key service} servisini kullanarak yaratabilirsiniz.
 * Çerezleri geçersiz kılmak için istediğiniz zaman bu değerleri değiştirebilirsiniz. Bu tüm kullanıcıların tekrar giriş yapmasını gerektirecektir.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'Z.a8REX_T8g.+3m7hMqX/ssk[]J;^UBfAW=!&(PGzx8[D.U>+sQg(/d?vU4}VDNM' );
define( 'SECURE_AUTH_KEY',  't!F`(V-aG2iXoU(1LTTZd/N2tb~ZGB316v9fHP~@PS~#s#rACrC*8O0y-sRT1n`B' );
define( 'LOGGED_IN_KEY',    ',GWA^UXMU] =*<:|:a_]|3x<&}mW*,83ppWc(]GIm=iEwn3aBdHv7nJ6[Fg=:TiK' );
define( 'NONCE_KEY',        'KtvFdnf*dI:/8rErt2itnq,9pzw!p~[Qpugkmbs-5,0MtSL{{h~iP?*Wb0y&1A6S' );
define( 'AUTH_SALT',        'WsweghNeLB_k<=,wE[*0-Dotn~9f/:Ch&T>OP*VDA*]ov$kn?)A8ebC/yqUZ4{ <' );
define( 'SECURE_AUTH_SALT', ')]4kDjD5lhiooyOcHF/@tch.9RB,3b.lOhdC5]p#;D:km4}YgK@]!D59T3R3Qu)b' );
define( 'LOGGED_IN_SALT',   '4xBal!%/j$m;ZKo@|CT )hRrxi:hk!`l`w=1]c/*O,11;;~>4tU@m0]C=F{c0{=>' );
define( 'NONCE_SALT',       'su#T*:~_KNL=lx1XG3~yWR|~;RC&!-jd2YH~g]_VJ+^UKZX{QO#t9SB7!{4@YfAv' );
/**#@-*/

/**
 * WordPress veritabanı tablo ön eki.
 *
 * Tüm kurulumlara ayrı bir önek vererek bir veritabanına birden fazla kurulum yapabilirsiniz.
 * Sadece rakamlar, harfler ve alt çizgi lütfen.
 */
$table_prefix = 'wp_';

/**
 * Geliştiriciler için: WordPress hata ayıklama modu.
 *
 * Bu değeri "true" yaparak geliştirme sırasında hataların ekrana basılmasını sağlayabilirsiniz.
 * Tema ve eklenti geliştiricilerinin geliştirme aşamasında WP_DEBUG
 * kullanmalarını önemle tavsiye ederiz.
 */
define('WP_DEBUG', false);

/* Hepsi bu kadar. Mutlu bloglamalar! */

/** WordPress dizini için mutlak yol. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** WordPress değişkenlerini ve yollarını kurar. */
require_once(ABSPATH . 'wp-settings.php');
