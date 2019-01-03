<?php
/**
 * Created by PhpStorm.
 * User: Admin
 * Date: 26/10/2018
 * Time: 22:24
 */

namespace Rabbit\Http\Session;


interface SessionDataInterface
{

    public function getName();

    public function setName(string $name);

    public function getValue();

    public function setValue($value);

}