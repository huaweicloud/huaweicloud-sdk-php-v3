<?php

namespace HuaweiCloud\SDK\Rds\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class CustomerUpgradeMajorVersionReq implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'CustomerUpgradeMajorVersionReq';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * delay  是否在运维时间窗内切换版本,默认为否。
    * configurationId  指定新版本的参数模板，若不填则默认会最大限度继承原实例的参数。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'delay' => 'bool',
            'configurationId' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * delay  是否在运维时间窗内切换版本,默认为否。
    * configurationId  指定新版本的参数模板，若不填则默认会最大限度继承原实例的参数。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'delay' => null,
        'configurationId' => null
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
    * delay  是否在运维时间窗内切换版本,默认为否。
    * configurationId  指定新版本的参数模板，若不填则默认会最大限度继承原实例的参数。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'delay' => 'delay',
            'configurationId' => 'configuration_id'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * delay  是否在运维时间窗内切换版本,默认为否。
    * configurationId  指定新版本的参数模板，若不填则默认会最大限度继承原实例的参数。
    *
    * @var string[]
    */
    protected static $setters = [
            'delay' => 'setDelay',
            'configurationId' => 'setConfigurationId'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * delay  是否在运维时间窗内切换版本,默认为否。
    * configurationId  指定新版本的参数模板，若不填则默认会最大限度继承原实例的参数。
    *
    * @var string[]
    */
    protected static $getters = [
            'delay' => 'getDelay',
            'configurationId' => 'getConfigurationId'
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
        $this->container['delay'] = isset($data['delay']) ? $data['delay'] : null;
        $this->container['configurationId'] = isset($data['configurationId']) ? $data['configurationId'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['configurationId']) && (mb_strlen($this->container['configurationId']) > 36)) {
                $invalidProperties[] = "invalid value for 'configurationId', the character length must be smaller than or equal to 36.";
            }
            if (!is_null($this->container['configurationId']) && (mb_strlen($this->container['configurationId']) < 32)) {
                $invalidProperties[] = "invalid value for 'configurationId', the character length must be bigger than or equal to 32.";
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
    * Gets delay
    *  是否在运维时间窗内切换版本,默认为否。
    *
    * @return bool|null
    */
    public function getDelay()
    {
        return $this->container['delay'];
    }

    /**
    * Sets delay
    *
    * @param bool|null $delay 是否在运维时间窗内切换版本,默认为否。
    *
    * @return $this
    */
    public function setDelay($delay)
    {
        $this->container['delay'] = $delay;
        return $this;
    }

    /**
    * Gets configurationId
    *  指定新版本的参数模板，若不填则默认会最大限度继承原实例的参数。
    *
    * @return string|null
    */
    public function getConfigurationId()
    {
        return $this->container['configurationId'];
    }

    /**
    * Sets configurationId
    *
    * @param string|null $configurationId 指定新版本的参数模板，若不填则默认会最大限度继承原实例的参数。
    *
    * @return $this
    */
    public function setConfigurationId($configurationId)
    {
        $this->container['configurationId'] = $configurationId;
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

