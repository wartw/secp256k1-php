--TEST--
secp256k1_schnorrsig_sign errors if provided an invalid resource as a context
--SKIPIF--
<?php
if (!extension_loaded("secp256k1")) print "skip extension not loaded";
if (!function_exists("secp256k1_schnorrsig_verify")) print "skip no schnorrsig support";
?>
--FILE--
<?php

set_error_handler(function($code, $str) { echo $str . PHP_EOL; });

$ctx = secp256k1_context_create(SECP256K1_CONTEXT_SIGN | SECP256K1_CONTEXT_VERIFY);

// fixture came from our signatures.yml
$sigIn = null;
$msg32 = \pack("H*", "9e5755ec2f328cc8635a55415d0e9a09c2b6f2c9b0343c945fbbfe08247a4cbe");
$priv = \pack("H*", "31a84594060e103f5a63eb742bd46cf5f5900d8406e2726dedfc61c7cf43ebad");

$keypair = null;
$result = secp256k1_keypair_create($ctx, $keypair, $priv);
echo $result.PHP_EOL;

$ctx = tmpfile();
$result = secp256k1_schnorrsig_sign($ctx, $sigIn, $msg32, $keypair);
echo $result . PHP_EOL;

?>
--EXPECT--
1
secp256k1_schnorrsig_sign(): supplied resource is not a valid secp256k1_context resource
0
