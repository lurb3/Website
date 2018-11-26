<?php
/**
 * A configuração de base do WordPress
 *
 * Este ficheiro define os seguintes parâmetros: MySQL settings, Table Prefix,
 * Secret Keys, WordPress Language, e ABSPATH. Pode obter mais informação
 * visitando {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} no Codex. As definições de MySQL são-lhe fornecidas pelo seu serviço de alojamento.
 *
 * Este ficheiro contém as seguintes configurações:
 *
 * * Configurações de  MySQL
 * * Chaves secretas
 * * Prefixo das tabelas da base de dados
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** Definições de MySQL - obtenha estes dados do seu serviço de alojamento** //
/** O nome da base de dados do WordPress */
define('DB_NAME', 'gustavo');

/** O nome do utilizador de MySQL */
define('DB_USER', 'root');

/** A password do utilizador de MySQL  */
define('DB_PASSWORD', '');

/** O nome do serviddor de  MySQL  */
define('DB_HOST', 'localhost');

/** O "Database Charset" a usar na criação das tabelas. */
define('DB_CHARSET', 'utf8mb4');

/** O "Database Collate type". Se tem dúvidas não mude. */
define('DB_COLLATE', '');

/**#@+
 * Chaves únicas de autenticação.
 *
 * Mude para frases únicas e diferentes!
 * Pode gerar frases automáticamente em {@link https://api.wordpress.org/secret-key/1.1/salt/ Serviço de chaves secretas de WordPress.org}
 * Pode mudar estes valores em qualquer altura para invalidar todos os cookies existentes o que terá como resultado obrigar todos os utilizadores a voltarem a fazer login
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'C-FiV[q^[H.|cKw1rm0-qNqw(wd:pOfyq*^T{vK#oRAE$wpQdHD)pFoJ1i,T2<1p');
define('SECURE_AUTH_KEY',  ')so8xW-LO48 %9Dz^F,x2I`ziCfs0CkdD:2QOYs;:GUkzMax,fKolIh{lqmOfVSJ');
define('LOGGED_IN_KEY',    '~?NKD|s9HAe@+AH(:+L7|rAqbkoj4c{#130j(p,))EPUrO)SkdTn[$4in/|<4&;o');
define('NONCE_KEY',        'qU8kCiZ}iqL=E!}<km[a;<CT&FY*-CDfaWaAKjVKOJde$3INSe=ms>0JeJ19waCa');
define('AUTH_SALT',        '2>Q_zQlEK!@|%1+.e-1?^VTN<Ynsqlcsk<|!IT#U&Hyz1gEB/{wS-F-YFt<I_%H0');
define('SECURE_AUTH_SALT', '<WEYL%Z=x bv3zZFe#P*+sXq0J/i$(=9N1+gib-}}}@l$0qMS#*,kE6L8-wXbEwG');
define('LOGGED_IN_SALT',   'G;@ZEwa#7]ni%5_ZjHrteLEpf4//nd(_z@MYF4 ?/zZ#{XIQY9d?#FBk13 6&Px.');
define('NONCE_SALT',       'kubK<^=nJ,Zbd|kC{PJH99of_7P`$;rr<n8cd:[T2KX[n:_$<k!uT!(rO/fP2I,#');

/**#@-*/

/**
 * Prefixo das tabelas de WordPress.
 *
 * Pode suportar múltiplas instalações numa só base de dados, ao dar a cada
 * instalação um prefixo único. Só algarismos, letras e underscores, por favor!
 */
$table_prefix  = 'wp_';

/**
 * Para developers: WordPress em modo debugging.
 *
 * Mude isto para true para mostrar avisos enquanto estiver a testar.
 * É vivamente recomendado aos autores de temas e plugins usarem WP_DEBUG
 * no seu ambiente de desenvolvimento.
 *
 * Para mais informações sobre outras constantes que pode usar para debugging,
 * visite o Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* E é tudo. Pare de editar! */

/** Caminho absoluto para a pasta do WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Define as variáveis do WordPress e ficheiros a incluir. */
require_once(ABSPATH . 'wp-settings.php');
