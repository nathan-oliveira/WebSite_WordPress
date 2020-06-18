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
define( 'DB_NAME', 'dados' );

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
define( 'AUTH_KEY',         'POb6o5aWv>06:|iF8[4nU%8z,VawKocu_}+QqO8o!UL9i<3L`uXIo1 I(KxKhWvl' );
define( 'SECURE_AUTH_KEY',  'M@84jlC8u{:6%C6s6g`|IwZL 3#YvWVX%wdH@+dJM4_wQbB*Hd7NR:aO^i_qcyLJ' );
define( 'LOGGED_IN_KEY',    'k)rbN?eftf!t-R]}PXc;aJD{awl5a#*A]Khq<6spFxC0AR.)Lu$Ux2+NEm4(+89,' );
define( 'NONCE_KEY',        'Ox<J#AWF?5 A`5^C#/MGXn6}mOv5idR%%(@TvU*;-r)CFa;qY$/28T@C$$:pG0}!' );
define( 'AUTH_SALT',        '{5ZaT7)5ijbuA=O].7TMWvI4rei.GYZOCoL(6u~RZKxT=N@i4$yzyxO1aCGqH&+5' );
define( 'SECURE_AUTH_SALT', '|DD@d5k46UwMvy38PRqj/as<,1o CO}6WIZI^rg+tbH5%?p]w:6#=z%xD|oL[n -' );
define( 'LOGGED_IN_SALT',   '9_Hw:cc.j>l&rT4r99$=QwQ9NlvXC`*s/$0yfV$_Ak8IgFirY+}A.LhtXkDk>NKS' );
define( 'NONCE_SALT',       'z}vJgI{O,!B$kG^)]xx!^1z~BYJio4.?N$A^~H7U391s[J+O*1:{0^j3)KBlzCX(' );

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
