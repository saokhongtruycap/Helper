<?php
namespace PackageUrlHelper;

/**
 *
 */
class UrlHelper
{
    public static function validateUrl($url)
    {
        if (filter_var($url, FILTER_VALIDATE_URL)) {
            return true;
        }else{
            return false;
        }
    }

    public static function appendUrlWithPath($urlbase, $subfolder = null,$path)
    {
        $arrList = array($urlbase, $subfolder, $path);
        if ( $arrList[1] == null) {
            $url = $arrList[0].'/'.$arrList[2];
        }else{
            $url = implode('/', $arrList);
        }
        return $url;
    }

    public static function getInfoServer()
    {
        if(isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on') {
            $protocol = "https";
        }else{
            $protocol = "http";
        }
        $host = $_SERVER['HTTP_HOST'];
        $port = $_SERVER['SERVER_PORT'];
        $pageURL = $_SERVER["REQUEST_URI"];
        $arrInfo = array($protocol, $port, $host, $pageURL);
        return $arrInfo;
    }
}