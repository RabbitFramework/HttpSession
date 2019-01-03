<?php
/**
 * Created by PhpStorm.
 * User: Admin
 * Date: 28/10/2018
 * Time: 18:43
 */

namespace Rabbit\Http\Session;


class SessionOptions implements SessionOptionsInterface
{

    public static function getCookieParams() {
        return session_get_cookie_params();
    }

    public static function setSavePath(string $path) {
        ini_set('session.save_path', $path);
    }

    public static function setName(string $name) {
        ini_set('session.name', $name);
    }

    public static function setAutoStart(bool $autostart = false) {
        ini_set('session.auto_start', $autostart);
    }

    public static function setCookieLifetime(int $lifetime = 0) {
        ini_set('session.cookie_lifetime', $lifetime);
    }

    public static function setCookieDomain(string $domain = '')
    {
        ini_set('session.cookie_domain', $domain);
    }

    public static function setCookiePath(string $path = '')
    {
        ini_set('session.cookie_path', $path);
    }

    public static function useCookies(bool $use = true)
    {
        ini_set('session.use_cookies', $use);
    }

    public static function useCookieHttpOnly(bool $use = false)
    {
        ini_set('session.cookie_httponly', $use);
    }

    public static function useOnlyCookies(bool $use = true)
    {
        ini_set('session.cookie_path', $use);
    }

    public static function setCacheExpirationTime(int $expiration = 180)
    {
        ini_set('session.cache_expire', $expiration);
    }

    public static function setCacheLimiter(string $limiter = 'nocache')
    {
        ini_set('session.cache_limiter', $limiter);
    }

    public static function enableUploadProgress(bool $enable = true)
    {
        ini_set('session.upload_progress.enabled', $enable);
    }

    public static function cleanupUploadProgress(bool $cleanup = true)
    {
        ini_set('session.upload_progress.cleanup', $cleanup);
    }

    public static function setUploadProgressPrefix(string $prefix = '') {
        ini_set('session.upload_progress.prefix', $prefix);
    }

    public static function setUploadProgressName(string $name = '') {
        ini_set('session.upload_progress.name', $name);
    }

    public static function setUploadProgressFreq(string $frequency = '') {
        ini_set('session.upload_progress.freq', $frequency);
    }

    public static function setUploadMinFreq(int $frequency = 1) {
        ini_set('session.upload_progress.min_freq', $frequency);
    }

    public static function getSavePath(): string
    {
        return ini_get('session.save_path');
    }

    public static function getName(): string
    {
        return ini_get('session.name');
    }

    public static function isAutoStart(): bool
    {
        return ini_get('session.auto_start');
    }

    public static function getCookieLifetime(): int
    {
        return ini_get('session.cookie_lifetime');
    }

    public static function getCookiePath(): string
    {
        return ini_get('session.cookie_path');
    }

    public static function getCookieDomain(): string
    {
        return ini_get('session.cookie_domain');
    }

    public static function isUsingCookieHttpOnly(): bool
    {
        return ini_get('session.cookie_httponly');
    }

    public static function isUsingCookies(): bool
    {
        return ini_get('session.use_cookies');
    }

    public static function isOnlyUsingCookies(): bool
    {
        return ini_get('session.use_only_cookies');
    }

    public static function getCacheLimiter(): string
    {
        return ini_get('session.cache_limiter');
    }

    public static function getCacheExpirationTime(): int
    {
        return ini_get('session.cache_expire');
    }

    public static function isUploadProgressEnabled(): bool
    {
        return ini_get('session.upload_progress.enabled');
    }

    public static function isUploadProgressCleanedup(): bool
    {
        return ini_get('session.upload_progress.cleanup');
    }

    public static function getUploadProgressPrefix(): string
    {
        return ini_get('session.upload_progress.prefix');
    }

    public static function getUploadProgressName(): string
    {
        return ini_get('session.upload_progress.name');
    }

    public static function getUploadProgressFreq(): string
    {
        return ini_get('session.upload_progress.freq');
    }

    public static function getUploadProgressMinFreq(): int
    {
        return ini_get('session.upload_progress.min_freq');
    }

}