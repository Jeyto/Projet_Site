<?php

/**
Redirige vers une commande.
@param  string  la commande.
 */
function redirect($url) {

	header('Location: ' . ROOT_URL . $url);
}

/**
Retourne l'URL vers une commande.
@param  string  la commande.
 */
function url($url = '') {

	echo ROOT_URL . $url;
}

function isLogin() {
	return isset( $_SESSION['loggin'] );
}

function getRandomString($length = 6) {
	$characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
	$string = '';

	for ($i = 0; $i < $length; $i++) {
		$string .= $characters[mt_rand(0, strlen($characters) - 1)];
	}

	return $string;
}


  function to_camel_case( $str, array $noStrip = [] )
  {
    $str = trim( mb_strtolower( $str,'UTF-8') );
    $str = ucwords($str);
    $str = str_replace(" ", "", $str);
    $str = lcfirst($str);
    return $str;
  }