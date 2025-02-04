--TEST--
secp256k1_keypair_xonly_pub errors if parameter parsing fails
--SKIPIF--
<?php
if (!extension_loaded("secp256k1")) print "skip extension not loaded";
if (!function_exists("secp256k1_keypair_create")) print "skip no extrakeys support";
?>
--FILE--
<?php
set_error_handler(function($code, $str) { echo $str . PHP_EOL; });

$result = secp256k1_keypair_xonly_pub();
echo $result . PHP_EOL;

?>
--EXPECT--
secp256k1_keypair_xonly_pub() expects exactly 4 parameters, 0 given
0