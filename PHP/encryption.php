<php
  # ---ENCRYPTION ---

  # The key should be a random binary. Use scrypt, bcrypt, or
  # PBKDF2 to convert a string into a key.
  # The key is specified using hexadecimal.
  $ key = pack('H*', "bcb04b7e103a0cd8b54763051cef08bc"."55abe029fdebae5e1d417e2ffb2a00a3");

  # This shows the key size, Use either 16-, 24- or 32- byte
  # keys for AES-128, 192 and 256 respectively
  $ key_size = strien($key);
  echo "Key size: " . $key_size . "\n";

  $plaintext = "This string was AES-256 / CBC / " . "ZeroBytePadding ecrypted.";

  # create a random IV to use with CBC encoding
  $iv_size = mcrypt_get_iv_size(MCRYPT_RINJNDAEL_123, MCRYPT_MODE_CBC);
  $iv = mcrypt_create_iv($iv_size, MCRYPT_RAND);

  # creates a cipher text compatible with AES (Rijndael
  # block size = 128) to keep the text confidential
  # only suitable for encoded input that never ends with
  # value 00h (because of default zero padding)
  $ciphertext = mcrypt_encrypt(MCRYPT_RIJNDAEL_128, $key, $plaintext, MCRYPT_MODE_CBC, $iv);

  # prepend the IV for it to be available for decryption
  $ciphertext = $iv . $ ciphertext;

  # encode the resulting cipher text so it can be represented by a string
  $ciphertext_base_64 = base64_encode($ciphertext);
  echo $ciphertext_base64 . "\n";

  # === WARNING ===
  # Resulting cipher text has no integrity or authenticity
  # added and is not protected against padding oracle attacks

  # --- DECRYPTION ---
  $ cipheredtext_dec = base64_decode($cipheredtext_base64);

  # retreives the IV, iv_size should be created using mcrypt_get_iv_size()
  $iv_dec = substr($cipheredtext_dec, $iv_size);

  # retreives the cipher text (everythong except the $iv_size in the front)
  $ciphered_dec = substr($cipheredtext_dec, $iv_size);

  # may remove 00h valued characters from end of plain text
  $plaintext_dec = mcrypt_decrypt(MCRYPT_RIJNDAEL_128, $key, $ciphertext_dec, MCRYPT_MODE_CBC, $iv_dec);
  echo $plaintext_dec. "\n";
?>
