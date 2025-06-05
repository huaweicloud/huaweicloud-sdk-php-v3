<?php

namespace HuaweiCloud\SDK\Eg\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class QuotaItemInfo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'QuotaItemInfo';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * name  名称
    * type  配额类型
    * max  配额最大值
    * min  配额最小值
    * quota  当前租户的配额
    * used  当前租户已使用的配额
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'name' => 'string',
            'type' => 'string',
            'max' => 'int',
            'min' => 'int',
            'quota' => 'int',
            'used' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * name  名称
    * type  配额类型
    * max  配额最大值
    * min  配额最小值
    * quota  当前租户的配额
    * used  当前租户已使用的配额
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'name' => null,
        'type' => null,
        'max' => null,
        'min' => null,
        'quota' => null,
        'used' => null
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
    * name  名称
    * type  配额类型
    * max  配额最大值
    * min  配额最小值
    * quota  当前租户的配额
    * used  当前租户已使用的配额
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'name' => 'name',
            'type' => 'type',
            'max' => 'max',
            'min' => 'min',
            'quota' => 'quota',
            'used' => 'used'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * name  名称
    * type  配额类型
    * max  配额最大值
    * min  配额最小值
    * quota  当前租户的配额
    * used  当前租户已使用的配额
    *
    * @var string[]
    */
    protected static $setters = [
            'name' => 'setName',
            'type' => 'setType',
            'max' => 'setMax',
            'min' => 'setMin',
            'quota' => 'setQuota',
            'used' => 'setUsed'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * name  名称
    * type  配额类型
    * max  配额最大值
    * min  配额最小值
    * quota  当前租户的配额
    * used  当前租户已使用的配额
    *
    * @var string[]
    */
    protected static $getters = [
            'name' => 'getName',
            'type' => 'getType',
            'max' => 'getMax',
            'min' => 'getMin',
            'quota' => 'getQuota',
            'used' => 'getUsed'
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
    const TYPE_CHANNEL = 'CHANNEL';
    const TYPE_CHANNEL_SUBSCRIPTION = 'CHANNEL_SUBSCRIPTION';
    const TYPE_SOURCE = 'SOURCE';
    const TYPE_SUBSCRIPTION = 'SUBSCRIPTION';
    const TYPE_SUBSCRIPTION_TARGET = 'SUBSCRIPTION_TARGET';
    const TYPE_SCHEMA = 'SCHEMA';
    const TYPE_SCHEMA_VERSION = 'SCHEMA_VERSION';
    const TYPE_CONNECTION = 'CONNECTION';
    const TYPE_PRIVATE_ENDPOINT = 'PRIVATE_ENDPOINT';
    const TYPE_SOURCE_RABBITMQ = 'SOURCE_RABBITMQ';
    const TYPE_SOURCE_ROCKETMQ = 'SOURCE_ROCKETMQ';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getTypeAllowableValues()
    {
        return [
            self::TYPE_CHANNEL,
            self::TYPE_CHANNEL_SUBSCRIPTION,
            self::TYPE_SOURCE,
            self::TYPE_SUBSCRIPTION,
            self::TYPE_SUBSCRIPTION_TARGET,
            self::TYPE_SCHEMA,
            self::TYPE_SCHEMA_VERSION,
            self::TYPE_CONNECTION,
            self::TYPE_PRIVATE_ENDPOINT,
            self::TYPE_SOURCE_RABBITMQ,
            self::TYPE_SOURCE_ROCKETMQ,
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
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        $this->container['max'] = isset($data['max']) ? $data['max'] : null;
        $this->container['min'] = isset($data['min']) ? $data['min'] : null;
        $this->container['quota'] = isset($data['quota']) ? $data['quota'] : null;
        $this->container['used'] = isset($data['used']) ? $data['used'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            $allowedValues = $this->getTypeAllowableValues();
                if (!is_null($this->container['type']) && !in_array($this->container['type'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'type', must be one of '%s'",
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
    * Gets name
    *  名称
    *
    * @return string|null
    */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
    * Sets name
    *
    * @param string|null $name 名称
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets type
    *  配额类型
    *
    * @return string|null
    */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
    * Sets type
    *
    * @param string|null $type 配额类型
    *
    * @return $this
    */
    public function setType($type)
    {
        $this->container['type'] = $type;
        return $this;
    }

    /**
    * Gets max
    *  配额最大值
    *
    * @return int|null
    */
    public function getMax()
    {
        return $this->container['max'];
    }

    /**
    * Sets max
    *
    * @param int|null $max 配额最大值
    *
    * @return $this
    */
    public function setMax($max)
    {
        $this->container['max'] = $max;
        return $this;
    }

    /**
    * Gets min
    *  配额最小值
    *
    * @return int|null
    */
    public function getMin()
    {
        return $this->container['min'];
    }

    /**
    * Sets min
    *
    * @param int|null $min 配额最小值
    *
    * @return $this
    */
    public function setMin($min)
    {
        $this->container['min'] = $min;
        return $this;
    }

    /**
    * Gets quota
    *  当前租户的配额
    *
    * @return int|null
    */
    public function getQuota()
    {
        return $this->container['quota'];
    }

    /**
    * Sets quota
    *
    * @param int|null $quota 当前租户的配额
    *
    * @return $this
    */
    public function setQuota($quota)
    {
        $this->container['quota'] = $quota;
        return $this;
    }

    /**
    * Gets used
    *  当前租户已使用的配额
    *
    * @return int|null
    */
    public function getUsed()
    {
        return $this->container['used'];
    }

    /**
    * Sets used
    *
    * @param int|null $used 当前租户已使用的配额
    *
    * @return $this
    */
    public function setUsed($used)
    {
        $this->container['used'] = $used;
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

