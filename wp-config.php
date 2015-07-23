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
require_once(ABSPATH . 'wp-file.php');

// ** Configurações do MySQL - Você pode pegar essas informações com o serviço de hospedagem ** //
/** O nome do banco de dados do WordPress */
define('DB_NAME', 'wordpress');

/** Usuário do banco de dados MySQL */
define('DB_USER', getenv("MYSQL_WP_USER"));

/** Senha do banco de dados MySQL */
/**Atenção
 esse valor KGssG6L+PACNCE+aV4uU2TA= que é passado como segundo parametro
 * é a chave de criptografia que é usada para cifrar e decifrar
 * melhor opção é colocala como varivel de ambiente e chamar getenv(MYSQL_WP_HASH)
 *
 * A variavel MYSQL_WP_PWD está armazenada na sessão de forma cifrada.
 *
 * Para gerar a cifra da senha consultar instruções no link
 *
 * https://github.com/rcalderini/wordpress/tree/master
 * final da pagina.
 *
 * PS: Remover esses comentários depois.
 */
define('DB_PASSWORD', wp_decrypt(getenv("MYSQL_WP_PWD"), "KGssG6L+PACNCE+aV4uU2TA="));

/** nome do host do MySQL */
define('DB_HOST', getenv("MYSQL_WP_HOST"));

/** Conjunto de caracteres do banco de dados a ser usado na criação das tabelas. */
define('DB_CHARSET', 'utf8mb4');

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
define('AUTH_KEY',         '+C$ MarOjrJIR@`q|t#~1YmgQygzymx-)v&W:E[[da{Lr&uUFM+|-/-*&-:%+R:i');
define('SECURE_AUTH_KEY',  '8Wei2> [lYsiD/5/;zZ*34zS/82<~WZ>@IR8V>++  p-:w3LjB&c(C^!i]|$bbJP');
define('LOGGED_IN_KEY',    'yY_8:0>c$,*kci.21%}g4zfexKFnYj=b4{`Ki9--m/~5R x}YgA]+oE(T~DKK<aX');
define('NONCE_KEY',        ')/5Py-p+8C?,|n,3=L`?CL#Yy}_y`R+,WE{Q+~AIJxq}Ijd];pW`%(ykYG>+OzR{');
define('AUTH_SALT',        ')q.i;M2_9F4.7s/`V1.n<hHL4z$Y;JfR|D|V}6yvXq88nrwxf&ba|dD+ScGy#VIQ');
define('SECURE_AUTH_SALT', '@&.U>gVEP/!kY;~U.<oEWU.CggyH|V4[4=2fWc$9:x uGy~Y2/*EJ1mzf+>hA?TZ');
define('LOGGED_IN_SALT',   'b&p]MHb@-T|<{w3g4 h7K:W}Ls!ZfA/CU(SZ><~kf:@_tWj8g+`(>* @+JzB|W>I');
define('NONCE_SALT',       'fEe-pjX@3tzpP/J$c15>M2|<%pA.[Jwo%GWo7MGP:qXtT]|jF0/-}(1%)Bkw#lkE');

/**#@-*/

/**
 * Prefixo da tabela do banco de dados do WordPress.
 *
 * Você pode ter várias instalações em um único banco de dados se você der para cada um um único
 * prefixo. Somente números, letras e sublinhados!
 */
$table_prefix  = 'wp_';


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
