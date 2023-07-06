<?php
    // password_hash(string $password, string|int|null $algo)

    // Register
    $password = "destiny123";
    $hash_password = password_hash($password, PASSWORD_DEFAULT);    

    var_dump($hash_password);

    // password_verify(string $password, string $hash)

    // Login
    var_dump(password_verify("destiny123", $hash_password));
?>