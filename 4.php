<?php
    $realstring = 'password';
    $security = new keamanan();
    
    $encrypt = $security->encrypt($realstring);
    $decrypt = $security->decrypt($encrypt);
    echo 'real string = '.$realstring.'</br>';
    echo 'encrypt= '.$encrypt.'</br>';
    echo 'decrypt= '.$decrypt.'</br>';
    
    class keamanan{
        function __construct(){
            $this->ciphering = "BF-CBC"; 
            $this->iv_length = openssl_cipher_iv_length($this->ciphering); 
            $this->options = 0; 
        }
        function encrypt($string){
            $encryption_iv = random_bytes($this->iv_length); 
            $this->encryption_iv = $encryption_iv;
            $encryption_key = openssl_digest(php_uname(), 'MD5', TRUE); 
            $encryption = openssl_encrypt($string, $this->ciphering, $encryption_key, $this->options, $encryption_iv); 
            return $encryption;
        }
    
        function decrypt($string){
            $decryption_iv = random_bytes($this->iv_length); 
            $decryption_key = openssl_digest(php_uname(), 'MD5', TRUE); 
            $decryption = openssl_decrypt ($string, $this->ciphering, $decryption_key, $this->options, $this->encryption_iv); 
            return $decryption;
        }
    }
?>