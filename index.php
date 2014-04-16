<?php

require_once('includes/header.html');

switch($_GET['q']){
	case 'home':
		require_once('includes/home.html');
		break;
		
	default:
		require_once('includes/home.html');
		break;
}

require_once('includes/footer.html');

?>