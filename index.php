<?php  define('SWAP_DIR_END',DIRECTORY_SEPARATOR); define('SWAP_ROOT',dirname(__FILE__).SWAP_DIR_END); define('SWAP_XT',SWAP_ROOT.'swap_mac'.SWAP_DIR_END); define('SWAP_MAC',SWAP_XT.'swap_mac'.SWAP_DIR_END); define('VERSION','6.6.6'); require SWAP_MAC . 'mac_header.php'; require SWAP_MAC . 'mac_main.php'; 