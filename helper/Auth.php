<?php
session_start();

class Auth
{

    public static function user(){
        if (Session::get('user')) {
            return Session::get('user')[0];
        }
        return false;
    }
}
