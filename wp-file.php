<?php

function wp_encrypt($data, $key){
    return base64_encode(
        mcrypt_encrypt(
            MCRYPT_TWOFISH,
            $key,
            $data,
            MCRYPT_MODE_CBC,
            "\0\1\0\1\0\1\1\1\0\0\0\0\0\1\1\0"
        )
    );
}
function wp_decrypt($data, $key){
    $decode = base64_decode($data);
    $decrypted = mcrypt_decrypt(
        MCRYPT_TWOFISH,
        $key,
        $decode,
        MCRYPT_MODE_CBC,
        "\0\1\0\1\0\1\1\1\0\0\0\0\0\1\1\0"
    );

    return rtrim($decrypted, "\0");
}