<?php

namespace HuaweiCloud\SDK\Waf\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class AccessTypeStatistics implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'AccessTypeStatistics';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * accessType  接入类型（api/waf）
    * textRequestCount  用户输入请求数
    * imageRequestCount  用户输出请求数
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'accessType' => 'string',
            'textRequestCount' => 'int',
            'imageRequestCount' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * accessType  接入类型（api/waf）
    * textRequestCount  用户输入请求数
    * imageRequestCount  用户输出请求数
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'accessType' => null,
        'textRequestCount' => 'int64',
        'imageRequestCount' => 'int64'
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
    * accessType  接入类型（api/waf）
    * textRequestCount  用户输入请求数
    * imageRequestCount  用户输出请求数
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'accessType' => 'access_type',
            'textRequestCount' => 'text_request_count',
            'imageRequestCount' => 'image_request_count'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * accessType  接入类型（api/waf）
    * textRequestCount  用户输入请求数
    * imageRequestCount  用户输出请求数
    *
    * @var string[]
    */
    protected static $setters = [
            'accessType' => 'setAccessType',
            'textRequestCount' => 'setTextRequestCount',
            'imageRequestCount' => 'setImageRequestCount'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * accessType  接入类型（api/waf）
    * textRequestCount  用户输入请求数
    * imageRequestCount  用户输出请求数
    *
    * @var string[]
    */
    protected static $getters = [
            'accessType' => 'getAccessType',
            'textRequestCount' => 'getTextRequestCount',
            'imageRequestCount' => 'getImageRequestCount'
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
    const ACCESS_TYPE_API = 'api';
    const ACCESS_TYPE_WAF = 'waf';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getAccessTypeAllowableValues()
    {
        return [
            self::ACCESS_TYPE_API,
            self::ACCESS_TYPE_WAF,
        ];
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
        $this->container['accessType'] = isset($data['accessType']) ? $data['accessType'] : null;
        $this->container['textRequestCount'] = isset($data['textRequestCount']) ? $data['textRequestCount'] : null;
        $this->container['imageRequestCount'] = isset($data['imageRequestCount']) ? $data['imageRequestCount'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['accessType'] === null) {
            $invalidProperties[] = "'accessType' can't be null";
        }
            $allowedValues = $this->getAccessTypeAllowableValues();
                if (!is_null($this->container['accessType']) && !in_array($this->container['accessType'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'accessType', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

        if ($this->container['textRequestCount'] === null) {
            $invalidProperties[] = "'textRequestCount' can't be null";
        }
        if ($this->container['imageRequestCount'] === null) {
            $invalidProperties[] = "'imageRequestCount' can't be null";
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
    * Gets accessType
    *  接入类型（api/waf）
    *
    * @return string
    */
    public function getAccessType()
    {
        return $this->container['accessType'];
    }

    /**
    * Sets accessType
    *
    * @param string $accessType 接入类型（api/waf）
    *
    * @return $this
    */
    public function setAccessType($accessType)
    {
        $this->container['accessType'] = $accessType;
        return $this;
    }

    /**
    * Gets textRequestCount
    *  用户输入请求数
    *
    * @return int
    */
    public function getTextRequestCount()
    {
        return $this->container['textRequestCount'];
    }

    /**
    * Sets textRequestCount
    *
    * @param int $textRequestCount 用户输入请求数
    *
    * @return $this
    */
    public function setTextRequestCount($textRequestCount)
    {
        $this->container['textRequestCount'] = $textRequestCount;
        return $this;
    }

    /**
    * Gets imageRequestCount
    *  用户输出请求数
    *
    * @return int
    */
    public function getImageRequestCount()
    {
        return $this->container['imageRequestCount'];
    }

    /**
    * Sets imageRequestCount
    *
    * @param int $imageRequestCount 用户输出请求数
    *
    * @return $this
    */
    public function setImageRequestCount($imageRequestCount)
    {
        $this->container['imageRequestCount'] = $imageRequestCount;
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

