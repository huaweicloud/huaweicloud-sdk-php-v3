<?php

namespace HuaweiCloud\SDK\GaussDBforNoSQL\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class UpdateDbCacheRuleRequestBody implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'UpdateDbCacheRuleRequestBody';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * dbcacheRuleId  内存加速规则ID。
    * valueColumns  映射的value使用的column列表。
    * ttl  key的生存时间。单位:ms。不传该值，默认取2592000000，表示30天。
    * valueSeparator  映射的value分隔符。只允许一个字符。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'dbcacheRuleId' => 'string',
            'valueColumns' => 'string[]',
            'ttl' => 'string',
            'valueSeparator' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * dbcacheRuleId  内存加速规则ID。
    * valueColumns  映射的value使用的column列表。
    * ttl  key的生存时间。单位:ms。不传该值，默认取2592000000，表示30天。
    * valueSeparator  映射的value分隔符。只允许一个字符。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'dbcacheRuleId' => null,
        'valueColumns' => null,
        'ttl' => null,
        'valueSeparator' => null
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
    * dbcacheRuleId  内存加速规则ID。
    * valueColumns  映射的value使用的column列表。
    * ttl  key的生存时间。单位:ms。不传该值，默认取2592000000，表示30天。
    * valueSeparator  映射的value分隔符。只允许一个字符。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'dbcacheRuleId' => 'dbcache_rule_id',
            'valueColumns' => 'value_columns',
            'ttl' => 'ttl',
            'valueSeparator' => 'value_separator'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * dbcacheRuleId  内存加速规则ID。
    * valueColumns  映射的value使用的column列表。
    * ttl  key的生存时间。单位:ms。不传该值，默认取2592000000，表示30天。
    * valueSeparator  映射的value分隔符。只允许一个字符。
    *
    * @var string[]
    */
    protected static $setters = [
            'dbcacheRuleId' => 'setDbcacheRuleId',
            'valueColumns' => 'setValueColumns',
            'ttl' => 'setTtl',
            'valueSeparator' => 'setValueSeparator'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * dbcacheRuleId  内存加速规则ID。
    * valueColumns  映射的value使用的column列表。
    * ttl  key的生存时间。单位:ms。不传该值，默认取2592000000，表示30天。
    * valueSeparator  映射的value分隔符。只允许一个字符。
    *
    * @var string[]
    */
    protected static $getters = [
            'dbcacheRuleId' => 'getDbcacheRuleId',
            'valueColumns' => 'getValueColumns',
            'ttl' => 'getTtl',
            'valueSeparator' => 'getValueSeparator'
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
        $this->container['dbcacheRuleId'] = isset($data['dbcacheRuleId']) ? $data['dbcacheRuleId'] : null;
        $this->container['valueColumns'] = isset($data['valueColumns']) ? $data['valueColumns'] : null;
        $this->container['ttl'] = isset($data['ttl']) ? $data['ttl'] : null;
        $this->container['valueSeparator'] = isset($data['valueSeparator']) ? $data['valueSeparator'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['dbcacheRuleId'] === null) {
            $invalidProperties[] = "'dbcacheRuleId' can't be null";
        }
        if ($this->container['valueColumns'] === null) {
            $invalidProperties[] = "'valueColumns' can't be null";
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
    * Gets dbcacheRuleId
    *  内存加速规则ID。
    *
    * @return string
    */
    public function getDbcacheRuleId()
    {
        return $this->container['dbcacheRuleId'];
    }

    /**
    * Sets dbcacheRuleId
    *
    * @param string $dbcacheRuleId 内存加速规则ID。
    *
    * @return $this
    */
    public function setDbcacheRuleId($dbcacheRuleId)
    {
        $this->container['dbcacheRuleId'] = $dbcacheRuleId;
        return $this;
    }

    /**
    * Gets valueColumns
    *  映射的value使用的column列表。
    *
    * @return string[]
    */
    public function getValueColumns()
    {
        return $this->container['valueColumns'];
    }

    /**
    * Sets valueColumns
    *
    * @param string[] $valueColumns 映射的value使用的column列表。
    *
    * @return $this
    */
    public function setValueColumns($valueColumns)
    {
        $this->container['valueColumns'] = $valueColumns;
        return $this;
    }

    /**
    * Gets ttl
    *  key的生存时间。单位:ms。不传该值，默认取2592000000，表示30天。
    *
    * @return string|null
    */
    public function getTtl()
    {
        return $this->container['ttl'];
    }

    /**
    * Sets ttl
    *
    * @param string|null $ttl key的生存时间。单位:ms。不传该值，默认取2592000000，表示30天。
    *
    * @return $this
    */
    public function setTtl($ttl)
    {
        $this->container['ttl'] = $ttl;
        return $this;
    }

    /**
    * Gets valueSeparator
    *  映射的value分隔符。只允许一个字符。
    *
    * @return string|null
    */
    public function getValueSeparator()
    {
        return $this->container['valueSeparator'];
    }

    /**
    * Sets valueSeparator
    *
    * @param string|null $valueSeparator 映射的value分隔符。只允许一个字符。
    *
    * @return $this
    */
    public function setValueSeparator($valueSeparator)
    {
        $this->container['valueSeparator'] = $valueSeparator;
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

