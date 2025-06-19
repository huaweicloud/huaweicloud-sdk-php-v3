<?php

namespace HuaweiCloud\SDK\Cloudtest\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ListAllConfigItemByTypeRequestBody implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ListAllConfigItemByTypeRequestBody';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * configType  系统配置，服务自己配置{system、service}
    * types  配置类型集合
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'configType' => 'string',
            'types' => 'string[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * configType  系统配置，服务自己配置{system、service}
    * types  配置类型集合
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'configType' => null,
        'types' => null
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
    * configType  系统配置，服务自己配置{system、service}
    * types  配置类型集合
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'configType' => 'configType',
            'types' => 'types'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * configType  系统配置，服务自己配置{system、service}
    * types  配置类型集合
    *
    * @var string[]
    */
    protected static $setters = [
            'configType' => 'setConfigType',
            'types' => 'setTypes'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * configType  系统配置，服务自己配置{system、service}
    * types  配置类型集合
    *
    * @var string[]
    */
    protected static $getters = [
            'configType' => 'getConfigType',
            'types' => 'getTypes'
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
        $this->container['configType'] = isset($data['configType']) ? $data['configType'] : null;
        $this->container['types'] = isset($data['types']) ? $data['types'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['configType']) && (mb_strlen($this->container['configType']) > 7)) {
                $invalidProperties[] = "invalid value for 'configType', the character length must be smaller than or equal to 7.";
            }
            if (!is_null($this->container['configType']) && (mb_strlen($this->container['configType']) < 6)) {
                $invalidProperties[] = "invalid value for 'configType', the character length must be bigger than or equal to 6.";
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
    * Gets configType
    *  系统配置，服务自己配置{system、service}
    *
    * @return string|null
    */
    public function getConfigType()
    {
        return $this->container['configType'];
    }

    /**
    * Sets configType
    *
    * @param string|null $configType 系统配置，服务自己配置{system、service}
    *
    * @return $this
    */
    public function setConfigType($configType)
    {
        $this->container['configType'] = $configType;
        return $this;
    }

    /**
    * Gets types
    *  配置类型集合
    *
    * @return string[]|null
    */
    public function getTypes()
    {
        return $this->container['types'];
    }

    /**
    * Sets types
    *
    * @param string[]|null $types 配置类型集合
    *
    * @return $this
    */
    public function setTypes($types)
    {
        $this->container['types'] = $types;
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

