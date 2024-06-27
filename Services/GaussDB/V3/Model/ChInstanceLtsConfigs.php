<?php

namespace HuaweiCloud\SDK\GaussDB\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ChInstanceLtsConfigs implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ChInstanceLtsConfigs';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * ltsConfigs  实例LTS配置信息。
    * instance  instance
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'ltsConfigs' => '\HuaweiCloud\SDK\GaussDB\V3\Model\ChLtsConfigs[]',
            'instance' => '\HuaweiCloud\SDK\GaussDB\V3\Model\ChInstanceLtsConfigsInstance'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * ltsConfigs  实例LTS配置信息。
    * instance  instance
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'ltsConfigs' => null,
        'instance' => null
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
    * ltsConfigs  实例LTS配置信息。
    * instance  instance
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'ltsConfigs' => 'lts_configs',
            'instance' => 'instance'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * ltsConfigs  实例LTS配置信息。
    * instance  instance
    *
    * @var string[]
    */
    protected static $setters = [
            'ltsConfigs' => 'setLtsConfigs',
            'instance' => 'setInstance'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * ltsConfigs  实例LTS配置信息。
    * instance  instance
    *
    * @var string[]
    */
    protected static $getters = [
            'ltsConfigs' => 'getLtsConfigs',
            'instance' => 'getInstance'
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
        $this->container['ltsConfigs'] = isset($data['ltsConfigs']) ? $data['ltsConfigs'] : null;
        $this->container['instance'] = isset($data['instance']) ? $data['instance'] : null;
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
    * Gets ltsConfigs
    *  实例LTS配置信息。
    *
    * @return \HuaweiCloud\SDK\GaussDB\V3\Model\ChLtsConfigs[]|null
    */
    public function getLtsConfigs()
    {
        return $this->container['ltsConfigs'];
    }

    /**
    * Sets ltsConfigs
    *
    * @param \HuaweiCloud\SDK\GaussDB\V3\Model\ChLtsConfigs[]|null $ltsConfigs 实例LTS配置信息。
    *
    * @return $this
    */
    public function setLtsConfigs($ltsConfigs)
    {
        $this->container['ltsConfigs'] = $ltsConfigs;
        return $this;
    }

    /**
    * Gets instance
    *  instance
    *
    * @return \HuaweiCloud\SDK\GaussDB\V3\Model\ChInstanceLtsConfigsInstance|null
    */
    public function getInstance()
    {
        return $this->container['instance'];
    }

    /**
    * Sets instance
    *
    * @param \HuaweiCloud\SDK\GaussDB\V3\Model\ChInstanceLtsConfigsInstance|null $instance instance
    *
    * @return $this
    */
    public function setInstance($instance)
    {
        $this->container['instance'] = $instance;
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

