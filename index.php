<?php
session_start ();
define ( 'WEB_ROOT', str_replace ( 'index.php', '', $_SERVER ['SCRIPT_NAME'] ) );
define ( 'ROOT', str_replace ( 'index.php', '', $_SERVER ['SCRIPT_FILENAME'] ) );

ini_set('display_errors', 'on');

require ROOT . 'core/Controller.php';
require ROOT . 'core/Models.php';
//require ROOT . 'src/langues/fr.php';
$p = preg_split ( '#[\/]#', $_GET ['p'] );
if (! empty ( $p [0] )) {
	$controlleur = $p [0];
	if (isset ( $p [1] ) && ! empty ( $p [1] ))
		$action = $p [1];
	else
		$action = 'index';
		require ROOT . 'controllers/' . $controlleur . '.php';
	$control = new $controlleur ();
	//if (method_exists ( $control, $action )) {
	unset ( $p [0] );
	unset ( $p [1] );
	call_user_func_array ( array (
			$control,
			$action
	), $p );
	/*} else {
		$err = WEB_ROOT . 'erreur/pagenotfound/';
		header ( 'Location: ' . $err );
	}*/
} else {
	$pag = WEB_ROOT . 'acceuil/';
	header ( 'Location: ' . $pag );
}

?>
