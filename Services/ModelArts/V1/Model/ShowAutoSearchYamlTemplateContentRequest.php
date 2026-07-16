<?php

namespace HuaweiCloud\SDK\ModelArts\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ShowAutoSearchYamlTemplateContentRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ShowAutoSearchYamlTemplateContentRequest';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * algorithmType  搜索算法类型。
    * algorithmName  搜索算法名称。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'algorithmType' => 'string',
            'algorithmName' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * algorithmType  搜索算法类型。
    * algorithmName  搜索算法名称。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'algorithmType' => null,
        'algorithmName' => null
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
    * algorithmType  搜索算法类型。
    * algorithmName  搜索算法名称。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'algorithmType' => 'algorithm_type',
            'algorithmName' => 'algorithm_name'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * algorithmType  搜索算法类型。
    * algorithmName  搜索算法名称。
    *
    * @var string[]
    */
    protected static $setters = [
            'algorithmType' => 'setAlgorithmType',
            'algorithmName' => 'setAlgorithmName'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * algorithmType  搜索算法类型。
    * algorithmName  搜索算法名称。
    *
    * @var string[]
    */
    protected static $getters = [
            'algorithmType' => 'getAlgorithmType',
            'algorithmName' => 'getAlgorithmName'
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
        $this->container['algorithmType'] = isset($data['algorithmType']) ? $data['algorithmType'] : null;
        $this->container['algorithmName'] = isset($data['algorithmName']) ? $data['algorithmName'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['algorithmType'] === null) {
            $invalidProperties[] = "'algorithmType' can't be null";
        }
        if ($this->container['algorithmName'] === null) {
            $invalidProperties[] = "'algorithmName' can't be null";
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
    * Gets algorithmType
    *  搜索算法类型。
    *
    * @return string
    */
    public function getAlgorithmType()
    {
        return $this->container['algorithmType'];
    }

    /**
    * Sets algorithmType
    *
    * @param string $algorithmType 搜索算法类型。
    *
    * @return $this
    */
    public function setAlgorithmType($algorithmType)
    {
        $this->container['algorithmType'] = $algorithmType;
        return $this;
    }

    /**
    * Gets algorithmName
    *  搜索算法名称。
    *
    * @return string
    */
    public function getAlgorithmName()
    {
        return $this->container['algorithmName'];
    }

    /**
    * Sets algorithmName
    *
    * @param string $algorithmName 搜索算法名称。
    *
    * @return $this
    */
    public function setAlgorithmName($algorithmName)
    {
        $this->container['algorithmName'] = $algorithmName;
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

