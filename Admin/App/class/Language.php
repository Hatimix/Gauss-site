<?php

class Language{
    public function getLang()
    {
        if (!empty($_COOKIE['lang'])){
            $siteLang = $_COOKIE["lang"];
            require "App/$siteLang.php";
        } else {
            header('location: Pages/Templates/selectLanguage.php');
        }
    }
}