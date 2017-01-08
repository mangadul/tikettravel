<?php

function debug($data){
	print('<pre>');
	print_r($data);
	print('</pre>');
}

function dump($data){
	print('<pre>');
	var_dump($data);
	print('</pre>');
}

?>