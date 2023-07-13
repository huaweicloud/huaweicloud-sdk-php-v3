<?php

namespace HuaweiCloud\SDK\IoTDA\V5\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ListRulesResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ListRulesResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * marker  本次分页查询结果中最后一条记录的ID，可在下一次分页查询时使用。
    * count  满足查询条件的记录总数。
    * rules  规则信息列表。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'marker' => 'string',
            'count' => 'int',
            'rules' => '\HuaweiCloud\SDK\IoTDA\V5\Model\RuleResponse[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * marker  本次分页查询结果中最后一条记录的ID，可在下一次分页查询时使用。
    * count  满足查询条件的记录总数。
    * rules  规则信息列表。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'marker' => null,
        'count' => 'int64',
        'rules' => null
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
    * marker  本次分页查询结果中最后一条记录的ID，可在下一次分页查询时使用。
    * count  满足查询条件的记录总数。
    * rules  规则信息列表。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'marker' => 'marker',
            'count' => 'count',
            'rules' => 'rules'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * marker  本次分页查询结果中最后一条记录的ID，可在下一次分页查询时使用。
    * count  满足查询条件的记录总数。
    * rules  规则信息列表。
    *
    * @var string[]
    */
    protected static $setters = [
            'marker' => 'setMarker',
            'count' => 'setCount',
            'rules' => 'setRules'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * marker  本次分页查询结果中最后一条记录的ID，可在下一次分页查询时使用。
    * count  满足查询条件的记录总数。
    * rules  规则信息列表。
    *
    * @var string[]
    */
    protected static $getters = [
            'marker' => 'getMarker',
            'count' => 'getCount',
            'rules' => 'getRules'
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
        $this->container['marker'] = isset($data['marker']) ? $data['marker'] : null;
        $this->container['count'] = isset($data['count']) ? $data['count'] : null;
        $this->container['rules'] = isset($data['rules']) ? $data['rules'] : null;
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
    * Gets marker
    *  本次分页查询结果中最后一条记录的ID，可在下一次分页查询时使用。
    *
    * @return string|null
    */
    public function getMarker()
    {
        return $this->container['marker'];
    }

    /**
    * Sets marker
    *
    * @param string|null $marker 本次分页查询结果中最后一条记录的ID，可在下一次分页查询时使用。
    *
    * @return $this
    */
    public function setMarker($marker)
    {
        $this->container['marker'] = $marker;
        return $this;
    }

    /**
    * Gets count
    *  满足查询条件的记录总数。
    *
    * @return int|null
    */
    public function getCount()
    {
        return $this->container['count'];
    }

    /**
    * Sets count
    *
    * @param int|null $count 满足查询条件的记录总数。
    *
    * @return $this
    */
    public function setCount($count)
    {
        $this->container['count'] = $count;
        return $this;
    }

    /**
    * Gets rules
    *  规则信息列表。
    *
    * @return \HuaweiCloud\SDK\IoTDA\V5\Model\RuleResponse[]|null
    */
    public function getRules()
    {
        return $this->container['rules'];
    }

    /**
    * Sets rules
    *
    * @param \HuaweiCloud\SDK\IoTDA\V5\Model\RuleResponse[]|null $rules 规则信息列表。
    *
    * @return $this
    */
    public function setRules($rules)
    {
        $this->container['rules'] = $rules;
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

