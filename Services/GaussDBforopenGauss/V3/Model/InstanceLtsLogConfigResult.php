<?php

namespace HuaweiCloud\SDK\GaussDBforopenGauss\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class InstanceLtsLogConfigResult implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'InstanceLtsLogConfigResult';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * instance  **参数解释**: 实例基本信息。
    * ltsConfigs  **参数解释**: LTS相关信息。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'instance' => 'object',
            'ltsConfigs' => '\HuaweiCloud\SDK\GaussDBforopenGauss\V3\Model\LtsLogConfigResult[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * instance  **参数解释**: 实例基本信息。
    * ltsConfigs  **参数解释**: LTS相关信息。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'instance' => null,
        'ltsConfigs' => null
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
    * instance  **参数解释**: 实例基本信息。
    * ltsConfigs  **参数解释**: LTS相关信息。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'instance' => 'instance',
            'ltsConfigs' => 'lts_configs'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * instance  **参数解释**: 实例基本信息。
    * ltsConfigs  **参数解释**: LTS相关信息。
    *
    * @var string[]
    */
    protected static $setters = [
            'instance' => 'setInstance',
            'ltsConfigs' => 'setLtsConfigs'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * instance  **参数解释**: 实例基本信息。
    * ltsConfigs  **参数解释**: LTS相关信息。
    *
    * @var string[]
    */
    protected static $getters = [
            'instance' => 'getInstance',
            'ltsConfigs' => 'getLtsConfigs'
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
        $this->container['instance'] = isset($data['instance']) ? $data['instance'] : null;
        $this->container['ltsConfigs'] = isset($data['ltsConfigs']) ? $data['ltsConfigs'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
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
    * Gets instance
    *  **参数解释**: 实例基本信息。
    *
    * @return object|null
    */
    public function getInstance()
    {
        return $this->container['instance'];
    }

    /**
    * Sets instance
    *
    * @param object|null $instance **参数解释**: 实例基本信息。
    *
    * @return $this
    */
    public function setInstance($instance)
    {
        $this->container['instance'] = $instance;
        return $this;
    }

    /**
    * Gets ltsConfigs
    *  **参数解释**: LTS相关信息。
    *
    * @return \HuaweiCloud\SDK\GaussDBforopenGauss\V3\Model\LtsLogConfigResult[]|null
    */
    public function getLtsConfigs()
    {
        return $this->container['ltsConfigs'];
    }

    /**
    * Sets ltsConfigs
    *
    * @param \HuaweiCloud\SDK\GaussDBforopenGauss\V3\Model\LtsLogConfigResult[]|null $ltsConfigs **参数解释**: LTS相关信息。
    *
    * @return $this
    */
    public function setLtsConfigs($ltsConfigs)
    {
        $this->container['ltsConfigs'] = $ltsConfigs;
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

