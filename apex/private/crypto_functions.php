<?php

// Symmetric Encryption

// Cipher method to use for symmetric encryption
const CIPHER_METHOD = 'AES-256-CBC';

function key_encrypt($string, $key, $cipher_method=CIPHER_METHOD) {
  // pdding the key to 32 bytes long
  $key = str_pad($key, 32, '*');
  $iv_len = openssl_cipher_iv_length($cipher_method);
  $iv = openssl_random_pseudo_bytes($iv_len);

  // Encrypting
  $ciphertext = openssl_encrypt($string, $cipher_method, $key, OPENSSL_RAW_DATA, $iv);

  // Save iv for decoding
  return base64_encode($iv . $ciphertext);
}

function key_decrypt($string, $key, $cipher_method=CIPHER_METHOD) {
  // pdding the key to 32 bytes long
  $key = str_pad($key, 32, '*');

  // Decode the cipertext
  $iv_ciphertext = base64_decode($string);

  // parsing iv and ciphertext
  $iv_len = openssl_cipher_iv_length($cipher_method);
  $iv = substr($iv_ciphertext, 0, $iv_len);
  $ciphertext = substr($iv_ciphertext, $iv_len);

  // Decrypting
  $decrypted_text = openssl_decrypt($ciphertext, $cipher_method, $key, OPENSSL_RAW_DATA, $iv);
  return $decrypted_text;
}


// Asymmetric Encryption / Public-Key Cryptography

// Cipher configuration to use for asymmetric encryption
const PUBLIC_KEY_CONFIG = array(
    "digest_alg" => "sha512",
    "private_key_bits" => 2048,
    "private_key_type" => OPENSSL_KEYTYPE_RSA
); 

function generate_keys($config=PUBLIC_KEY_CONFIG) {
  $resource = openssl_pkey_new($config);

  // getting the private key
  openssl_pkey_export($resource, $private_key);

  // getting the public key
  $key_details = openssl_pkey_get_details($resource);
  $public_key = $key_details['key'];

  return array('private' => $private_key, 'public' => $public_key);
}

function pkey_encrypt($string, $public_key) {
  openssl_public_encrypt($string, $encrypted, $public_key);
  $message = base64_encode($encrypted);

  return $message;
}

function pkey_decrypt($string, $private_key) {
  // Decode from base64 to get raw data
  $ciphertext = base64_decode($string);
  openssl_private_decrypt($ciphertext, $decrypted, $private_key);

  return $decrypted;
}


// Digital signatures using public/private keys

function create_signature($data, $private_key) {
  $raw_signature = "";
  // A-Za-z : ykMwnXKRVqheCFaxsSNDEOfzgTpYroJBmdIPitGbQUAcZuLjvlWH
  openssl_sign($data, $raw_signature, $private_key);
  
  // Use base64_encode to make contents viewable/sharable
  return base64_encode($raw_signature);
}

function verify_signature($data, $signature, $public_key) {
  $raw_signature = base64_decode($signature);

  // returns 1 if data and signature match 0 if not
  return openssl_verify($data, $raw_signature, $public_key);
}

?>
