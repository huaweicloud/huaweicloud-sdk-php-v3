<?php

namespace HuaweiCloud\SDK\Oms\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class RegionInfo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'RegionInfo';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * cloudType  云服务名称
    * value  region名称
    * description  region的描述信息
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'cloudType' => 'string',
            'value' => 'string',
            'description' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * cloudType  云服务名称
    * value  region名称
    * description  region的描述信息
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'cloudType' => null,
        'value' => null,
        'description' => null
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
    * cloudType  云服务名称
    * value  region名称
    * description  region的描述信息
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'cloudType' => 'cloud_type',
            'value' => 'value',
            'description' => 'description'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * cloudType  云服务名称
    * value  region名称
    * description  region的描述信息
    *
    * @var string[]
    */
    protected static $setters = [
            'cloudType' => 'setCloudType',
            'value' => 'setValue',
            'description' => 'setDescription'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * cloudType  云服务名称
    * value  region名称
    * description  region的描述信息
    *
    * @var string[]
    */
    protected static $getters = [
            'cloudType' => 'getCloudType',
            'value' => 'getValue',
            'description' => 'getDescription'
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
        $this->container['cloudType'] = isset($data['cloudType']) ? $data['cloudType'] : null;
        $this->container['value'] = isset($data['value']) ? $data['value'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['cloudType']) && (mb_strlen($this->container['cloudType']) > 255)) {
                $invalidProperties[] = "invalid value for 'cloudType', the character length must be smaller than or equal to 255.";
            }
            if (!is_null($this->container['cloudType']) && (mb_strlen($this->container['cloudType']) < 1)) {
                $invalidProperties[] = "invalid value for 'cloudType', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['value']) && (mb_strlen($this->container['value']) > 255)) {
                $invalidProperties[] = "invalid value for 'value', the character length must be smaller than or equal to 255.";
            }
            if (!is_null($this->container['value']) && (mb_strlen($this->container['value']) < 1)) {
                $invalidProperties[] = "invalid value for 'value', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['description']) && (mb_strlen($this->container['description']) > 1024)) {
                $invalidProperties[] = "invalid value for 'description', the character length must be smaller than or equal to 1024.";
            }
            if (!is_null($this->container['description']) && (mb_strlen($this->container['description']) < 0)) {
                $invalidProperties[] = "invalid value for 'description', the character length must be bigger than or equal to 0.";
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
    * Gets cloudType
    *  云服务名称
    *
    * @return string|null
    */
    public function getCloudType()
    {
        return $this->container['cloudType'];
    }

    /**
    * Sets cloudType
    *
    * @param string|null $cloudType 云服务名称
    *
    * @return $this
    */
    public function setCloudType($cloudType)
    {
        $this->container['cloudType'] = $cloudType;
        return $this;
    }

    /**
    * Gets value
    *  region名称
    *
    * @return string|null
    */
    public function getValue()
    {
        return $this->container['value'];
    }

    /**
    * Sets value
    *
    * @param string|null $value region名称
    *
    * @return $this
    */
    public function setValue($value)
    {
        $this->container['value'] = $value;
        return $this;
    }

    /**
    * Gets description
    *  region的描述信息
    *
    * @return string|null
    */
    public function getDescription()
    {
        return $this->container['description'];
    }

    /**
    * Sets description
    *
    * @param string|null $description region的描述信息
    *
    * @return $this
    */
    public function setDescription($description)
    {
        $this->container['description'] = $description;
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

