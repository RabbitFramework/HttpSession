<?php
/**
 * Created by PhpStorm.
 * User: Admin
 * Date: 26/10/2018
 * Time: 22:30
 */

namespace Rabbit\Http\Session;

/**
 * Class SessionManager
 * @package Rabbit\Http\Session
 */
class SessionManager
{
    /**
     * @var null
     */
    public $session = null;
    /**
     * @var
     */
    public static $_instance;

    /**
     * @return SessionManager
     */
    public static function getInstance() {
        if(!isset(self::$_instance)) {
            self::$_instance = new self;
        }
        return self::$_instance;
    }

    /**
     * @return SessionInterface
     */
    public function create() : SessionInterface {
        session_create_id();
        $this->session = new Session();
        return $this->session;
    }

    /**
     * @return bool
     */
    public function delete() : bool {
        $this->session->stop();
        unset($this->session);
        return true;
    }

    /**
     * @return SessionInterface
     */
    public function get() : SessionInterface {
        return $this->session;
    }

}