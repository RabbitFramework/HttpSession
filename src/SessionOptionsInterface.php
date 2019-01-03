<?php
/**
 * Created by PhpStorm.
 * User: Admin
 * Date: 28/10/2018
 * Time: 18:44
 */

namespace Rabbit\Http\Session;


interface SessionOptionsInterface
{
    public static function setSavePath(string $path);

    public static function getSavePath() : string;

    public static function setName(string $name);

    public static function getName() : string;

    public static function setAutoStart(bool $autostart = false);

    public static function isAutoStart() : bool;

    public static function setCookieLifetime(int $lifetime = 0);

    public static function getCookieLifetime() : int;

    public static function setCookiePath(string $path = '');

    public static function getCookiePath() : string;

    public static function setCookieDomain(string $domain = '');

    public static function getCookieDomain() : string;

    public static function useCookieHttpOnly(bool $use = false);

    public static function isUsingCookieHttpOnly() : bool;

    public static function useCookies(bool $use = true);

    public static function isUsingCookies() : bool;

    public static function useOnlyCookies(bool $use = true);

    public static function isOnlyUsingCookies() : bool;

    public static function setCacheLimiter(string $limiter = 'nocache');

    public static function getCacheLimiter() : string;

    public static function setCacheExpirationTime(int $expiration = 180);

    public static function getCacheExpirationTime() : int;

    public static function enableUploadProgress(bool $enable = true);

    public static function isUploadProgressEnabled() : bool;

    public static function cleanupUploadProgress(bool $cleanup = true);

    public static function isUploadProgressCleanedup() : bool;

    public static function setUploadProgressPrefix(string $prefix = '');

    public static function getUploadProgressPrefix() : string;

    public static function setUploadProgressName(string $name = '');

    public static function getUploadProgressName() : string;

    public static function setUploadProgressFreq(string $frequency = '');

    public static function getUploadProgressFreq() : string;

    public static function setUploadMinFreq(int $frequency = 1);

    public static function getUploadProgressMinFreq() : int;
}