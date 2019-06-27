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
define( 'DB_NAME', 'mehmetbaskir' );

/** MySQL veritabanı kullanıcısı */
define( 'DB_USER', 'root' );

/** MySQL veritabanı parolası */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         '~^Ou3#bnh{*_hGs.Rn! |H_NmhPz# |pbli$Vv-]RQ**}Ie(u|(;`2E19:xl{xz*' );
define( 'SECURE_AUTH_KEY',  'X_IbrrgHz[x_)Z9NOo,nbXzC3JfCfev!)xEUMfA1yKv,y ezhp$4tEYcIRWiR|G]' );
define( 'LOGGED_IN_KEY',    '2c oF*Or3m(EcPtWx/NKCq8wi !uaq&fDfsRVtm.=MUAb^7TtX5HCQ)7DvZxFLd6' );
define( 'NONCE_KEY',        'T_JUT]CdI ~5u|dg4G[],3 I/xwiCWUgwqgzAP<%)e1`5Ari;rv@3_@IM]l+zx,W' );
define( 'AUTH_SALT',        '>T4_{6P3+Qzfe_OsDe,9/piCDCwpRP,gMF2,j8@X7mlg)XY=sDZg+v=@G/zGa$Jb' );
define( 'SECURE_AUTH_SALT', 'SfI>/ ?@U%RBO|jRI37iB#S^LA!~x0M$U NK.5I$vK&d$_hFnd{&_*I4Zc2/G4{n' );
define( 'LOGGED_IN_SALT',   '8@?tT28d.r4N4pI~xHkK>F,iX~0dMxUXYoU [x~dmJfS1-c$U(SC1]p1aoNp3z{D' );
define( 'NONCE_SALT',       '7kl?>m.#lo;EnKoXXRBQ:^i]/?@+gpsm_r*8F;xIlpb@kT}vH>m7}Vd<8Ts>_a7_' );
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
