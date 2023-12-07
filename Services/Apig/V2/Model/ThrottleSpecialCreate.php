<?php

namespace HuaweiCloud\SDK\Apig\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ThrottleSpecialCreate implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ThrottleSpecialCreate';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * callLimits  流控时间内特殊对象能够访问API的最大次数限制
    * objectId  特殊APP的编号或特殊租户的账号ID
    * objectType  特殊对象类型
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'callLimits' => 'int',
            'objectId' => 'string',
            'objectType' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * callLimits  流控时间内特殊对象能够访问API的最大次数限制
    * objectId  特殊APP的编号或特殊租户的账号ID
    * objectType  特殊对象类型
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'callLimits' => 'int32',
        'objectId' => null,
        'objectType' => null
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
    * callLimits  流控时间内特殊对象能够访问API的最大次数限制
    * objectId  特殊APP的编号或特殊租户的账号ID
    * objectType  特殊对象类型
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'callLimits' => 'call_limits',
            'objectId' => 'object_id',
            'objectType' => 'object_type'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * callLimits  流控时间内特殊对象能够访问API的最大次数限制
    * objectId  特殊APP的编号或特殊租户的账号ID
    * objectType  特殊对象类型
    *
    * @var string[]
    */
    protected static $setters = [
            'callLimits' => 'setCallLimits',
            'objectId' => 'setObjectId',
            'objectType' => 'setObjectType'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * callLimits  流控时间内特殊对象能够访问API的最大次数限制
    * objectId  特殊APP的编号或特殊租户的账号ID
    * objectType  特殊对象类型
    *
    * @var string[]
    */
    protected static $getters = [
            'callLimits' => 'getCallLimits',
            'objectId' => 'getObjectId',
            'objectType' => 'getObjectType'
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
    const OBJECT_TYPE_APP = 'APP';
    const OBJECT_TYPE_USER = 'USER';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getObjectTypeAllowableValues()
    {
        return [
            self::OBJECT_TYPE_APP,
            self::OBJECT_TYPE_USER,
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
        $this->container['callLimits'] = isset($data['callLimits']) ? $data['callLimits'] : null;
        $this->container['objectId'] = isset($data['objectId']) ? $data['objectId'] : null;
        $this->container['objectType'] = isset($data['objectType']) ? $data['objectType'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['callLimits'] === null) {
            $invalidProperties[] = "'callLimits' can't be null";
        }
        if ($this->container['objectId'] === null) {
            $invalidProperties[] = "'objectId' can't be null";
        }
        if ($this->container['objectType'] === null) {
            $invalidProperties[] = "'objectType' can't be null";
        }
            $allowedValues = $this->getObjectTypeAllowableValues();
                if (!is_null($this->container['objectType']) && !in_array($this->container['objectType'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'objectType', must be one of '%s'",
                implode("', '", $allowedValues)
                );
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
    * Gets callLimits
    *  流控时间内特殊对象能够访问API的最大次数限制
    *
    * @return int
    */
    public function getCallLimits()
    {
        return $this->container['callLimits'];
    }

    /**
    * Sets callLimits
    *
    * @param int $callLimits 流控时间内特殊对象能够访问API的最大次数限制
    *
    * @return $this
    */
    public function setCallLimits($callLimits)
    {
        $this->container['callLimits'] = $callLimits;
        return $this;
    }

    /**
    * Gets objectId
    *  特殊APP的编号或特殊租户的账号ID
    *
    * @return string
    */
    public function getObjectId()
    {
        return $this->container['objectId'];
    }

    /**
    * Sets objectId
    *
    * @param string $objectId 特殊APP的编号或特殊租户的账号ID
    *
    * @return $this
    */
    public function setObjectId($objectId)
    {
        $this->container['objectId'] = $objectId;
        return $this;
    }

    /**
    * Gets objectType
    *  特殊对象类型
    *
    * @return string
    */
    public function getObjectType()
    {
        return $this->container['objectType'];
    }

    /**
    * Sets objectType
    *
    * @param string $objectType 特殊对象类型
    *
    * @return $this
    */
    public function setObjectType($objectType)
    {
        $this->container['objectType'] = $objectType;
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

