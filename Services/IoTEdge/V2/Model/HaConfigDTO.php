<?php

namespace HuaweiCloud\SDK\IoTEdge\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class HaConfigDTO implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'HaConfigDTO';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * haType  节点高可用类型双活或者主备
    * activeStandbyConfig  activeStandbyConfig
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'haType' => 'string',
            'activeStandbyConfig' => '\HuaweiCloud\SDK\IoTEdge\V2\Model\ActiveStandbyConfigDTO'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * haType  节点高可用类型双活或者主备
    * activeStandbyConfig  activeStandbyConfig
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'haType' => null,
        'activeStandbyConfig' => null
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
    * haType  节点高可用类型双活或者主备
    * activeStandbyConfig  activeStandbyConfig
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'haType' => 'ha_type',
            'activeStandbyConfig' => 'active_standby_config'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * haType  节点高可用类型双活或者主备
    * activeStandbyConfig  activeStandbyConfig
    *
    * @var string[]
    */
    protected static $setters = [
            'haType' => 'setHaType',
            'activeStandbyConfig' => 'setActiveStandbyConfig'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * haType  节点高可用类型双活或者主备
    * activeStandbyConfig  activeStandbyConfig
    *
    * @var string[]
    */
    protected static $getters = [
            'haType' => 'getHaType',
            'activeStandbyConfig' => 'getActiveStandbyConfig'
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
        $this->container['haType'] = isset($data['haType']) ? $data['haType'] : null;
        $this->container['activeStandbyConfig'] = isset($data['activeStandbyConfig']) ? $data['activeStandbyConfig'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['haType']) && !preg_match("/(ACTIVE_ACTIVE|ACTIVE_STANDBY)/", $this->container['haType'])) {
                $invalidProperties[] = "invalid value for 'haType', must be conform to the pattern /(ACTIVE_ACTIVE|ACTIVE_STANDBY)/.";
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
    * Gets haType
    *  节点高可用类型双活或者主备
    *
    * @return string|null
    */
    public function getHaType()
    {
        return $this->container['haType'];
    }

    /**
    * Sets haType
    *
    * @param string|null $haType 节点高可用类型双活或者主备
    *
    * @return $this
    */
    public function setHaType($haType)
    {
        $this->container['haType'] = $haType;
        return $this;
    }

    /**
    * Gets activeStandbyConfig
    *  activeStandbyConfig
    *
    * @return \HuaweiCloud\SDK\IoTEdge\V2\Model\ActiveStandbyConfigDTO|null
    */
    public function getActiveStandbyConfig()
    {
        return $this->container['activeStandbyConfig'];
    }

    /**
    * Sets activeStandbyConfig
    *
    * @param \HuaweiCloud\SDK\IoTEdge\V2\Model\ActiveStandbyConfigDTO|null $activeStandbyConfig activeStandbyConfig
    *
    * @return $this
    */
    public function setActiveStandbyConfig($activeStandbyConfig)
    {
        $this->container['activeStandbyConfig'] = $activeStandbyConfig;
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

