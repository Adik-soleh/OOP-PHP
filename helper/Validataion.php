<?php

function ValidationLoginRequest(LoginRequest $request)
{
    if (!isset($request->userName)) {
        throw new ValidationException("username is null");
    } else if (!isset($request->password)) {
        throw new ValidationException("Passwprd is null");
    } else if (trim($request->userName) == "") {
        throw new Exception("Username Empty");
    } else if (trim($request->password) == "") {
        throw new Exception("Password empty");
    }
}