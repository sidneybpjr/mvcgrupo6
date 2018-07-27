<?php
session_start();
require 'config.php';
spl_autoload_register(function($class){
	if(file_exists('controllers/'.$class.'.php')) {
		require 'controllers/'.$class.'.php';
	} else if(file_exists('models/'.$class.'.php')) {
		require 'models/'.$class.'.php';
	} else if(file_exists('core/'.$class.'.php')) {
		require 'core/'.$class.'.php';
	} else if(file_exists('util/'.$class.'.php')) {
		require 'util/'.$class.'.php';
	}
});
$core = new Core();
$core->run();