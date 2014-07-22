<?php
/** 
 * As configurações básicas do WordPress.
 *
 * Esse arquivo contém as seguintes configurações: configurações de MySQL, Prefixo de Tabelas,
 * Chaves secretas, Idioma do WordPress, e ABSPATH. Você pode encontrar mais informações
 * visitando {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Codex page. Você pode obter as configurações de MySQL de seu servidor de hospedagem.
 *
 * Esse arquivo é usado pelo script ed criação wp-config.php durante a
 * instalação. Você não precisa usar o site, você pode apenas salvar esse arquivo
 * como "wp-config.php" e preencher os valores.
 *
 * @package WordPress
 */

// ** Configurações do MySQL - Você pode pegar essas informações com o serviço de hospedagem ** //
/** O nome do banco de dados do WordPress */
define('DB_NAME', 'brasilprofissoeswp');

/** Usuário do banco de dados MySQL */
define('DB_USER', 'root');

/** Senha do banco de dados MySQL */
define('DB_PASSWORD', 'tekan');

/** nome do host do MySQL */
define('DB_HOST', 'ilson.servicosgerais');

/** Conjunto de caracteres do banco de dados a ser usado na criação das tabelas. */
define('DB_CHARSET', 'utf8');

/** O tipo de collate do banco de dados. Não altere isso se tiver dúvidas. */
define('DB_COLLATE', '');

/**#@+
 * Chaves únicas de autenticação e salts.
 *
 * Altere cada chave para um frase única!
 * Você pode gerá-las usando o {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * Você pode alterá-las a qualquer momento para desvalidar quaisquer cookies existentes. Isto irá forçar todos os usuários a fazerem login novamente.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'G2TF8Y KJ+=r(QT^qqjR4!V~a`/MY8i8u$Ai:f@;mWuR~T)8O-/_(Z|kot/ze@~|');
define('SECURE_AUTH_KEY',  '(va<m/&|F0)wtzQ5C|KJWX;AI`3#`[6~MZU{-z&|.CE}t)[|N,.o+i1Env-+(6[%');
define('LOGGED_IN_KEY',    '_JPh7V,!zDb&zDZ,^Xn)>kHoO1Ees^z4/L;iHOXu,fIIrV=up|:MR6<k|5?H8=hb');
define('NONCE_KEY',        'm8 |nRar1XK3NRH~a=W/lRpM_OL-|1A!%, M%TK|({NiCl_duDT]uf7,!AB0avUp');
define('AUTH_SALT',        'zsJ=9O13]6s t$D-C2mrYOaLh=8|9$)}J-lFsDVoK/}?qlM^~;SQ$|epvPxUdrS2');
define('SECURE_AUTH_SALT', '3}[XL$tk|lOyHY6[N Zr]Az1|C+jO!Iz`Z!0T,Rfy,QLEEx,|7^{Qw-E-d2HJs$1');
define('LOGGED_IN_SALT',   'da_Q[C]20P#V#C[Bfd[+]+Y.E1-9jDQPMmK{%*]pp6YSxr ~~,Kz<+q(vv8-bbzh');
define('NONCE_SALT',       'poE;#d4bXX[9GL!mNW8OaVEU@(Fq|MmFZ.ad`C%zk6P`*|cGu*@6~~}aBbO|8S2e');

/**#@-*/

/**
 * Prefixo da tabela do banco de dados do WordPress.
 *
 * Você pode ter várias instalações em um único banco de dados se você der para cada um um único
 * prefixo. Somente números, letras e sublinhados!
 */
$table_prefix  = 'wp_';

/**
 * O idioma localizado do WordPress é o inglês por padrão.
 *
 * Altere esta definição para localizar o WordPress. Um arquivo MO correspondente ao
 * idioma escolhido deve ser instalado em wp-content/languages. Por exemplo, instale
 * pt_BR.mo em wp-content/languages e altere WPLANG para 'pt_BR' para habilitar o suporte
 * ao português do Brasil.
 */
define('WPLANG', 'pt_BR');

/**
 * Para desenvolvedores: Modo debugging WordPress.
 *
 * altere isto para true para ativar a exibição de avisos durante o desenvolvimento.
 * é altamente recomendável que os desenvolvedores de plugins e temas usem o WP_DEBUG
 * em seus ambientes de desenvolvimento.
 */
define('WP_DEBUG', false);

/* Isto é tudo, pode parar de editar! :) */

/** Caminho absoluto para o diretório WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');
	
/** Configura as variáveis do WordPress e arquivos inclusos. */
require_once(ABSPATH . 'wp-settings.php');
