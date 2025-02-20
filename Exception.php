<?php

require_once "exception/ValidationException.php";
require_once "data/LoginRequest.php";
require_once "helper/Validataion.php";

$loginRequest = new LoginRequest();
// $loginRequest->userName = "" . PHP_EOL;
// $loginRequest->password = "123456s" . PHP_EOL;
try {
    ValidationLoginRequest($loginRequest);
} catch (ValidationException | Exception $exception) {
    echo "Error : {$exception->getMessage()}" . PHP_EOL;
}finally {
    echo "ERROR ATAU ENGGA TETAP DI EKSEKUSI";
}

