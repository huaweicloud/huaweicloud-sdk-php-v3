<?php

namespace HuaweiCloud\SDK\Aom\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class Match implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'Match';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * key  指定按照Metadata中的key进行匹配
    * operate  指定匹配的方式：EXIST:存在，REGEX:正则，EQUALS:等于
    * value  要匹配的key对应的value，当operate为存在时，此值为空
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'key' => 'string',
            'operate' => 'string',
            'value' => 'string[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * key  指定按照Metadata中的key进行匹配
    * operate  指定匹配的方式：EXIST:存在，REGEX:正则，EQUALS:等于
    * value  要匹配的key对应的value，当operate为存在时，此值为空
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'key' => null,
        'operate' => null,
        'value' => null
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
    * key  指定按照Metadata中的key进行匹配
    * operate  指定匹配的方式：EXIST:存在，REGEX:正则，EQUALS:等于
    * value  要匹配的key对应的value，当operate为存在时，此值为空
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'key' => 'key',
            'operate' => 'operate',
            'value' => 'value'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * key  指定按照Metadata中的key进行匹配
    * operate  指定匹配的方式：EXIST:存在，REGEX:正则，EQUALS:等于
    * value  要匹配的key对应的value，当operate为存在时，此值为空
    *
    * @var string[]
    */
    protected static $setters = [
            'key' => 'setKey',
            'operate' => 'setOperate',
            'value' => 'setValue'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * key  指定按照Metadata中的key进行匹配
    * operate  指定匹配的方式：EXIST:存在，REGEX:正则，EQUALS:等于
    * value  要匹配的key对应的value，当operate为存在时，此值为空
    *
    * @var string[]
    */
    protected static $getters = [
            'key' => 'getKey',
            'operate' => 'getOperate',
            'value' => 'getValue'
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
    const OPERATE_EQUALS = 'EQUALS';
    const OPERATE_REGEX = 'REGEX';
    const OPERATE_EXIST = 'EXIST';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getOperateAllowableValues()
    {
        return [
            self::OPERATE_EQUALS,
            self::OPERATE_REGEX,
            self::OPERATE_EXIST,
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
        $this->container['key'] = isset($data['key']) ? $data['key'] : null;
        $this->container['operate'] = isset($data['operate']) ? $data['operate'] : null;
        $this->container['value'] = isset($data['value']) ? $data['value'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['key'] === null) {
            $invalidProperties[] = "'key' can't be null";
        }
            if ((mb_strlen($this->container['key']) > 128)) {
                $invalidProperties[] = "invalid value for 'key', the character length must be smaller than or equal to 128.";
            }
            if ((mb_strlen($this->container['key']) < 1)) {
                $invalidProperties[] = "invalid value for 'key', the character length must be bigger than or equal to 1.";
            }
        if ($this->container['operate'] === null) {
            $invalidProperties[] = "'operate' can't be null";
        }
            $allowedValues = $this->getOperateAllowableValues();
                if (!is_null($this->container['operate']) && !in_array($this->container['operate'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'operate', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            if ((mb_strlen($this->container['operate']) > 100)) {
                $invalidProperties[] = "invalid value for 'operate', the character length must be smaller than or equal to 100.";
            }
            if ((mb_strlen($this->container['operate']) < 1)) {
                $invalidProperties[] = "invalid value for 'operate', the character length must be bigger than or equal to 1.";
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
    * Gets key
    *  指定按照Metadata中的key进行匹配
    *
    * @return string
    */
    public function getKey()
    {
        return $this->container['key'];
    }

    /**
    * Sets key
    *
    * @param string $key 指定按照Metadata中的key进行匹配
    *
    * @return $this
    */
    public function setKey($key)
    {
        $this->container['key'] = $key;
        return $this;
    }

    /**
    * Gets operate
    *  指定匹配的方式：EXIST:存在，REGEX:正则，EQUALS:等于
    *
    * @return string
    */
    public function getOperate()
    {
        return $this->container['operate'];
    }

    /**
    * Sets operate
    *
    * @param string $operate 指定匹配的方式：EXIST:存在，REGEX:正则，EQUALS:等于
    *
    * @return $this
    */
    public function setOperate($operate)
    {
        $this->container['operate'] = $operate;
        return $this;
    }

    /**
    * Gets value
    *  要匹配的key对应的value，当operate为存在时，此值为空
    *
    * @return string[]|null
    */
    public function getValue()
    {
        return $this->container['value'];
    }

    /**
    * Sets value
    *
    * @param string[]|null $value 要匹配的key对应的value，当operate为存在时，此值为空
    *
    * @return $this
    */
    public function setValue($value)
    {
        $this->container['value'] = $value;
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

