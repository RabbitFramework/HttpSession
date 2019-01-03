<?php
/**
 * Created by PhpStorm.
 * User: Admin
 * Date: 26/10/2018
 * Time: 22:23
 */

namespace Rabbit\Http\Session;

/**
 * Class Session
 * @package Rabbit\Http\Session
 */
class Session implements SessionInterface
{

    /**
     * @var array
     */
    public $datas = [];
    /**
     * @var bool
     */
    private $isStarted = false;

    /**
     * @param array|null $options
     * @return $this
     */
    public function start(array $options = [])
    {
        $this->isStarted = session_start($options);
        $this->pull();
        return $this;
    }

    /**
     * @return bool
     */
    public function stop()
    {
        if($this->isStarted) {
            $this->unsetAll();
            return session_destroy();
        }
        return false;
    }

    public function unsetAll()
    {
        $this->datas = [];
        return session_unset();
    }

    public function reset() {
        return session_reset();
    }

    public function abort() {
        return session_abort();
    }

    /**
     * @param $name
     * @param $value
     * @return mixed|SessionDataInterface
     */
    public function add($name, $value) {
        $data = new SessionData($name, $value);
        if(!$this->hasClassData($name)) {
            $this->datas[$name] = $data;
        }
        if(!$this->hasSessionData($data->getName())) {
            $_SESSION[$name] = $value;
        }
        return $this->datas[$name];
    }

    /**
     * @param string $name
     * @return bool|mixed
     */
    public function unset(string $name) {
        if($this->hasClassData($name)) {
            unset($this->datas[$name]);
        }
        if($this->hasSessionData($name)) {
            unset($_SESSION[$name]);
        }
        return true;
    }

    /**
     * @return array|bool|mixed
     */
    public function getAll()
    {
        if(count($this->datas) === count($_SESSION))
            return $this->datas;
        return false;
    }

    public function pull()
    {
        foreach ($_SESSION as $name => $value) {
            $this->add($name, $value);
        }
    }

    /**
     *
     */
    public function regenerateId() {
        if(session_status() != PHP_SESSION_ACTIVE) {
            $this->session->start();
        }
        session_create_id($this->session->getName());
    }

    public function setId() {

    }

    /**
     * @param string $dataName
     * @return bool|mixed
     */
    public function get(string $dataName)
    {
        if($this->hasClassData($dataName))
            return $this->datas[$dataName];
        return false;
    }

    /**
     * @param string $name
     * @return bool
     */
    public function hasClassData(string $name) {
        return isset($this->datas[$name]);
    }

    /**
     * @param string $name
     * @return bool
     */
    public function hasSessionData(string $name) {
        return isset($_SESSION[$name]);
    }

    public function getStatus() {
        return session_status();
    }

    /**
     * @return bool
     */
    public function isStarted() : bool {
        return $this->isStarted;
    }
}