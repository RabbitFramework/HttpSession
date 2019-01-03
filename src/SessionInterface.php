<?php
/**
 * Created by PhpStorm.
 * User: Admin
 * Date: 26/10/2018
 * Time: 22:24
 */

namespace Rabbit\Http\Session;


/**
 * Interface SessionInterface
 * @package Rabbit\Http\Session
 */
interface SessionInterface
{
    /**
     * @return $this
     */
    public function start();

    /**
     * @return mixed
     */
    public function stop();

    /**
     * @param $name
     * @param $value
     * @return SessionDataInterface
     */
    public function add($name, $value);

    /**
     * @param string $name
     * @return mixed
     */
    public function unset(string $name);

    /**
     * @return mixed
     */
    public function getAll();

    /**
     * @param string $dataName
     * @return mixed
     */
    public function get(string $dataName);
}