<?php
/**
 * Podstawowa konfiguracja WordPressa.
 *
 * Ten plik zawiera konfiguracje: ustawień MySQL-a, prefiksu tabel
 * w bazie danych, tajnych kluczy i ABSPATH. Więcej informacji
 * znajduje się na stronie
 * {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Kodeksu. Ustawienia MySQL-a możesz zdobyć
 * od administratora Twojego serwera.
 *
 * Ten plik jest używany przez skrypt automatycznie tworzący plik
 * wp-config.php podczas instalacji. Nie musisz korzystać z tego
 * skryptu, możesz po prostu skopiować ten plik, nazwać go
 * "wp-config.php" i wprowadzić do niego odpowiednie wartości.
 *
 * @package WordPress
 */

// ** Ustawienia MySQL-a - możesz uzyskać je od administratora Twojego serwera ** //
/** Nazwa bazy danych, której używać ma WordPress */
define('DB_NAME', 'wp-db');

/** Nazwa użytkownika bazy danych MySQL */
define('DB_USER', 'admin');

/** Hasło użytkownika bazy danych MySQL */
define('DB_PASSWORD', 'admin');

/** Nazwa hosta serwera MySQL */
define('DB_HOST', 'localhost');

/** Kodowanie bazy danych używane do stworzenia tabel w bazie danych. */
define('DB_CHARSET', 'utf8');

/** Typ porównań w bazie danych. Nie zmieniaj tego ustawienia, jeśli masz jakieś wątpliwości. */
define('DB_COLLATE', '');

/**#@+
 * Unikatowe klucze uwierzytelniania i sole.
 *
 * Zmień każdy klucz tak, aby był inną, unikatową frazą!
 * Możesz wygenerować klucze przy pomocy {@link https://api.wordpress.org/secret-key/1.1/salt/ serwisu generującego tajne klucze witryny WordPress.org}
 * Klucze te mogą zostać zmienione w dowolnej chwili, aby uczynić nieważnymi wszelkie istniejące ciasteczka. Uczynienie tego zmusi wszystkich użytkowników do ponownego zalogowania się.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '^Py5y9/2*Svyd8^#f^Q+r1JT[k.R((n^VP6Me~6$DB?yqt;]RJZT0+uC+iK9 <:@');
define('SECURE_AUTH_KEY',  '9FNtB.ha&&{W&9IJ2[!aI|zhFk)Wi+itD@AUM9* 8*~v.RCvF07pZ{gvv;)tnqOy');
define('LOGGED_IN_KEY',    '9.yup6OSpy,tn~S5U:+nj}UzWiH[ay)JZ%BkQnAh=S-Tok4%U|T?=BA.$j67$+eb');
define('NONCE_KEY',        '`4pc $LuSYk,(}fgo40~uQ$*)I4#)XVc(Mv8|[zR%Y]3C5-u~Yw:k~;g=_dD &g:');
define('AUTH_SALT',        'VtRk?D% Z~-jt t0>E*D]B(p1.YhPdSUtD`yfk0D+pOVrY4D%7fS/@Yot~JbJq;]');
define('SECURE_AUTH_SALT', '|RvHa=m<LN|0i=j]wJeWp}!L69E4aA&+PlF]!M(BA_)hoPjEy=s5HplOXe8.A[z$');
define('LOGGED_IN_SALT',   'rJP|0GG#[<%le{k&M6K3SidY4;+7r4N_?}wz|hcE!y|J3/BTLBVJSlF!Hc#X8wKb');
define('NONCE_SALT',       'fR@761B6[/-2BbYU`~,#ug+S^lXET([3-<SOas-Ma@SNq[Jd2=o]F4td1(XKA%8m');

/**#@-*/

/**
 * Prefiks tabel WordPressa w bazie danych.
 *
 * Możesz posiadać kilka instalacji WordPressa w jednej bazie danych,
 * jeżeli nadasz każdej z nich unikalny prefiks.
 * Tylko cyfry, litery i znaki podkreślenia, proszę!
 */
$table_prefix  = 'wp_';

/**
 * Dla programistów: tryb debugowania WordPressa.
 *
 * Zmień wartość tej stałej na true, aby włączyć wyświetlanie ostrzeżeń
 * podczas modyfikowania kodu WordPressa.
 * Wielce zalecane jest, aby twórcy wtyczek oraz motywów używali
 * WP_DEBUG w miejscach pracy nad nimi.
 */
define('WP_DEBUG', false);

/* To wszystko, zakończ edycję w tym miejscu! Miłego blogowania! */

/** Absolutna ścieżka do katalogu WordPressa. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Ustawia zmienne WordPressa i dołączane pliki. */
require_once(ABSPATH . 'wp-settings.php');
