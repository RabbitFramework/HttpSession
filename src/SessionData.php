<?php
/**
 * Created by PhpStorm.
 * User: Admin
 * Date: 26/10/2018
 * Time: 22:24
 */

namespace Rabbit\Http\Session;


class SessionData implements SessionDataInterface
{

    public $name = null;
    public $value = null;
    public $creationDate = null;
    public $expiration = null;

    public function __construct(string $name = null, $value = null)
    {
        $this->name = $name;
        $this->value = $value;
        $this->creationDate = date('j-m-y H:i:s');
    }

    /**
     * @return null
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param null $dataName
     */
    public function setName(string $name)
    {
        $this->name = $name;
    }

    /**
     * @return null
     */
    public function getValue()
    {
        return $this->value;
    }

    /**
     * @param null $dataValue
     */
    public function setValue($value)
    {
        $this->value = $value;
    }

    public function getCreationDate() {
        return $this->creationDate;
    }

}