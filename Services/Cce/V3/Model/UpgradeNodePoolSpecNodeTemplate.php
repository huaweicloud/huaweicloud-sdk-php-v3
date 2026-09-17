<?php

namespace HuaweiCloud\SDK\Cce\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class UpgradeNodePoolSpecNodeTemplate implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'UpgradeNodePoolSpecNodeTemplate';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * lifeCycle  lifeCycle
    * login  login
    * volumeConfig  volumeConfig
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'lifeCycle' => '\HuaweiCloud\SDK\Cce\V3\Model\NodeLifecycleConfig',
            'login' => '\HuaweiCloud\SDK\Cce\V3\Model\Login',
            'volumeConfig' => '\HuaweiCloud\SDK\Cce\V3\Model\VolumeConfig'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * lifeCycle  lifeCycle
    * login  login
    * volumeConfig  volumeConfig
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'lifeCycle' => null,
        'login' => null,
        'volumeConfig' => null
    ];

    /**
    * Array of property to type mappings. Used for (de)serialization
    *
    * @return array
    */
    public static function openAPITypes()
    {
        return self::$openAPITypes;
    }

    /**
    * Array of property to format mappings. Used for (de)serialization
    *
    * @return array
    */
    public static function openAPIFormats()
    {
        return self::$openAPIFormats;
    }

    /**
    * Array of attributes where the key is the local name,
    * and the value is the original name
    * lifeCycle  lifeCycle
    * login  login
    * volumeConfig  volumeConfig
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'lifeCycle' => 'lifeCycle',
            'login' => 'login',
            'volumeConfig' => 'volumeConfig'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * lifeCycle  lifeCycle
    * login  login
    * volumeConfig  volumeConfig
    *
    * @var string[]
    */
    protected static $setters = [
            'lifeCycle' => 'setLifeCycle',
            'login' => 'setLogin',
            'volumeConfig' => 'setVolumeConfig'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * lifeCycle  lifeCycle
    * login  login
    * volumeConfig  volumeConfig
    *
    * @var string[]
    */
    protected static $getters = [
            'lifeCycle' => 'getLifeCycle',
            'login' => 'getLogin',
            'volumeConfig' => 'getVolumeConfig'
    ];

    /**
    * Array of attributes where the key is the local name,
    * and the value is the original name
    *
    * @return array
    */
    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    *
    * @return array
    */
    public static function setters()
    {
        return self::$setters;
    }

    /**
    * Array of attributes to getter functions (for serialization of requests)
    *
    * @return array
    */
    public static function getters()
    {
        return self::$getters;
    }

    /**
    * The original name of the model.
    *
    * @return string
    */
    public function getModelName()
    {
        return self::$openAPIModelName;
    }
    


    /**
    * Associative array for storing property values
    *
    * @var mixed[]
    */
    protected $container = [];

    /**
    * Constructor
    *
    * @param mixed[] $data Associated array of property values
    *                      initializing the model
    */
    public function __construct(array $data = null)
    {
        $this->container['lifeCycle'] = isset($data['lifeCycle']) ? $data['lifeCycle'] : null;
        $this->container['login'] = isset($data['login']) ? $data['login'] : null;
        $this->container['volumeConfig'] = isset($data['volumeConfig']) ? $data['volumeConfig'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['lifeCycle'] === null) {
            $invalidProperties[] = "'lifeCycle' can't be null";
        }
        if ($this->container['login'] === null) {
            $invalidProperties[] = "'login' can't be null";
        }
        return $invalidProperties;
    }

    /**
    * Validate all the properties in the model
    * return true if all passed
    *
    * @return bool True if all properties are valid
    */
    public function valid()
    {
        return count($this->listInvalidProperties()) === 0;
    }

    /**
    * Gets lifeCycle
    *  lifeCycle
    *
    * @return \HuaweiCloud\SDK\Cce\V3\Model\NodeLifecycleConfig
    */
    public function getLifeCycle()
    {
        return $this->container['lifeCycle'];
    }

    /**
    * Sets lifeCycle
    *
    * @param \HuaweiCloud\SDK\Cce\V3\Model\NodeLifecycleConfig $lifeCycle lifeCycle
    *
    * @return $this
    */
    public function setLifeCycle($lifeCycle)
    {
        $this->container['lifeCycle'] = $lifeCycle;
        return $this;
    }

    /**
    * Gets login
    *  login
    *
    * @return \HuaweiCloud\SDK\Cce\V3\Model\Login
    */
    public function getLogin()
    {
        return $this->container['login'];
    }

    /**
    * Sets login
    *
    * @param \HuaweiCloud\SDK\Cce\V3\Model\Login $login login
    *
    * @return $this
    */
    public function setLogin($login)
    {
        $this->container['login'] = $login;
        return $this;
    }

    /**
    * Gets volumeConfig
    *  volumeConfig
    *
    * @return \HuaweiCloud\SDK\Cce\V3\Model\VolumeConfig|null
    */
    public function getVolumeConfig()
    {
        return $this->container['volumeConfig'];
    }

    /**
    * Sets volumeConfig
    *
    * @param \HuaweiCloud\SDK\Cce\V3\Model\VolumeConfig|null $volumeConfig volumeConfig
    *
    * @return $this
    */
    public function setVolumeConfig($volumeConfig)
    {
        $this->container['volumeConfig'] = $volumeConfig;
        return $this;
    }

    /**
    * Returns true if offset exists. False otherwise.
    *
    * @param integer $offset Offset
    *
    * @return boolean
    */
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
    * Gets offset.
    *
    * @param integer $offset Offset
    *
    * @return mixed
    */
    public function offsetGet($offset)
    {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }

    /**
    * Sets value based on offset.
    *
    * @param integer $offset Offset
    * @param mixed   $value  Value to be set
    *
    * @return void
    */
    public function offsetSet($offset, $value)
    {
        if (is_null($offset)) {
                $this->container[] = $value;
            } else {
                $this->container[$offset] = $value;
        }
    }

    /**
    * Unsets offset.
    *
    * @param integer $offset Offset
    *
    * @return void
    */
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }

    /**
    * Gets the string presentation of the object
    *
    * @return string
    */
    public function __toString()
    {
        return json_encode(
            ObjectSerializer::sanitizeForSerialization($this),
            JSON_PRETTY_PRINT
        );
    }
}

