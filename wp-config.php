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
 * * Configurações do MySQL
 * * Chaves secretas
 * * Prefixo do banco de dados
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Configurações do MySQL - Você pode pegar estas informações com o serviço de hospedagem ** //
/** O nome do banco de dados do WordPress */
define( 'DB_NAME', 'raizdamemoria' );

/** Usuário do banco de dados MySQL */
define( 'DB_USER', 'administrador' );

/** Senha do banco de dados MySQL */
define( 'DB_PASSWORD', 'a1s2d3f4' );

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
define( 'AUTH_KEY',         'g`5ko0{H)LZ_,G,_)028*iBv!gBHYn!;3Q|/?|4s/S7j8ais>m}%i@(HkZD_JEfs' );
define( 'SECURE_AUTH_KEY',  'gz@?`CX<4zJfn}.GRD]>#{=*]5wA0pFS}v4(5[&FEr)&n2/nX^gC)b+NVl ]$jYg' );
define( 'LOGGED_IN_KEY',    'vcH@_6XI@%7?V!?f(^:B.qop+^zP}zN[BFxqk^;V`q5qO1)c9wVprqUSyTitQ{HX' );
define( 'NONCE_KEY',        'dCb?9;FSf :amhpe4<m2@!Q63|6g[k:Yg{(jZC?J5);t!t*~:;:@xFUdn?k)pdNW' );
define( 'AUTH_SALT',        '($N&Q-oz#Tl*C.blMVsnuHHQ0.UUKE0k4h5.&hiWgGic8H?miR%Gdyh/dR{BS-p9' );
define( 'SECURE_AUTH_SALT', '%[(?+ufT()Pe|Hjf_H*AMo*9e#yB<2&iSf!4;h[a%OtEV]PgLGK].TYcqFkzVu(~' );
define( 'LOGGED_IN_SALT',   '8K{Kl`*IpX[c17!hNaDwHczd.Nj+J <dg@j S@Bcer!}Z!@,n:|L^[IT?UW._HLU' );
define( 'NONCE_SALT',       'N<+2/|@cL+!iC?0=b![^*sP~m{x* /Nf`sc 9F2yr;9Hy|KTm!0lun[$8jo=ds5P' );

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

/* Isto é tudo, pode parar de editar! :) */

/** Caminho absoluto para o diretório WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Configura as variáveis e arquivos do WordPress. */
require_once ABSPATH . 'wp-settings.php';
