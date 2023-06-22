<?php
/**
 * As configurações básicas do WordPress
 *
 * O script de criação wp-config.php usa esse arquivo durante a instalação.
 * Você não precisa usar o site, você pode copiar este arquivo
 * para "wp-config.php" e preencher os valores.
 *
 * Este arquivo contém as seguintes configurações:
 *
 * * Configurações do banco de dados
 * * Chaves secretas
 * * Prefixo do banco de dados
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Configurações do banco de dados - Você pode pegar estas informações com o serviço de hospedagem ** //
/** O nome do banco de dados do WordPress */
define( 'DB_NAME', 'banco1' );

/** Usuário do banco de dados MySQL */
define( 'DB_USER', 'root' );

/** Senha do banco de dados MySQL */
define( 'DB_PASSWORD', '' );

/** Nome do host do MySQL */
define( 'DB_HOST', 'localhost' );

/** Charset do banco de dados a ser usado na criação das tabelas. */
define( 'DB_CHARSET', 'utf8mb4' );

/** O tipo de Collate do banco de dados. Não altere isso se tiver dúvidas. */
define( 'DB_COLLATE', '' );

/**#@+
 * Chaves únicas de autenticação e salts.
 *
 * Altere cada chave para um frase única!
 * Você pode gerá-las
 * usando o {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org
 * secret-key service}
 * Você pode alterá-las a qualquer momento para invalidar quaisquer
 * cookies existentes. Isto irá forçar todos os
 * usuários a fazerem login novamente.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'c(s8GlIR3~#r>9@|o:63Qi0Tb_rhr0!n-Hdv-!.:bC6y<F4U41Jvn{hI}&)g))(Y' );
define( 'SECURE_AUTH_KEY',  '1AmB<1^RZuwnr1&fXp_Ax/[ndPP@;JtAfbaF7%gE6kbATao+aQy.E})zVp<DJ! M' );
define( 'LOGGED_IN_KEY',    ':&!+}C08#f~<Cz5tlO-xHNy=HSm4-!Sz#v2K;V$].t&ty)A_n;c%FTLNE`i0_<c5' );
define( 'NONCE_KEY',        '@)|J||JQPuO0Px*Mpa{!*Kt%;9M_TSsy]^Ahm$d.b7^VdO0TT_c:ey^WlfrwYmc6' );
define( 'AUTH_SALT',        'uR,tak:VjB8<!.b,n)v8Q3<cuE/|sHXX_vm)u5-845>?9P>XCu@O-2+&Bb~t sja' );
define( 'SECURE_AUTH_SALT', '7HFod$GZ/`?#x(<<h<nW@GB{`Y!J|<$TUMR$+n+~3r7GciJ?hPbN~v,^lWmtt*.h' );
define( 'LOGGED_IN_SALT',   'k^r8~?%vmDV)@OuKyk}xb>^kvR[b|R6Vhz7Zg%!51:?P5o;gIH`%Xw$HoIjCR8;s' );
define( 'NONCE_SALT',       'trCqw]~zx>s99(lcx_QrRQ$03{yu07+t9{<+D*;O1jL;:+lbI9dZz8A0^$2wZ7Z(' );

/**#@-*/

/**
 * Prefixo da tabela do banco de dados do WordPress.
 *
 * Você pode ter várias instalações em um único banco de dados se você der
 * um prefixo único para cada um. Somente números, letras e sublinhados!
 */
$table_prefix = 'wp_';

/**
 * Para desenvolvedores: Modo de debug do WordPress.
 *
 * Altere isto para true para ativar a exibição de avisos
 * durante o desenvolvimento. É altamente recomendável que os
 * desenvolvedores de plugins e temas usem o WP_DEBUG
 * em seus ambientes de desenvolvimento.
 *
 * Para informações sobre outras constantes que podem ser utilizadas
 * para depuração, visite o Codex.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Adicione valores personalizados entre esta linha até "Isto é tudo". */



/* Isto é tudo, pode parar de editar! :) */

/** Caminho absoluto para o diretório WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Configura as variáveis e arquivos do WordPress. */
require_once ABSPATH . 'wp-settings.php';
