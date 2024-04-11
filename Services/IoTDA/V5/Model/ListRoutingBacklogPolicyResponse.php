<?php

namespace HuaweiCloud\SDK\IoTDA\V5\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ListRoutingBacklogPolicyResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ListRoutingBacklogPolicyResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * backlogPolicies  数据流转积压策略列表。
    * count  满足查询条件的记录总数。
    * marker  本次分页查询结果中最后一条记录的ID，可在下一次分页查询时使用。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'backlogPolicies' => '\HuaweiCloud\SDK\IoTDA\V5\Model\BacklogPolicyInfo[]',
            'count' => 'int',
            'marker' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * backlogPolicies  数据流转积压策略列表。
    * count  满足查询条件的记录总数。
    * marker  本次分页查询结果中最后一条记录的ID，可在下一次分页查询时使用。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'backlogPolicies' => null,
        'count' => null,
        'marker' => null
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
    * backlogPolicies  数据流转积压策略列表。
    * count  满足查询条件的记录总数。
    * marker  本次分页查询结果中最后一条记录的ID，可在下一次分页查询时使用。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'backlogPolicies' => 'backlog_policies',
            'count' => 'count',
            'marker' => 'marker'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * backlogPolicies  数据流转积压策略列表。
    * count  满足查询条件的记录总数。
    * marker  本次分页查询结果中最后一条记录的ID，可在下一次分页查询时使用。
    *
    * @var string[]
    */
    protected static $setters = [
            'backlogPolicies' => 'setBacklogPolicies',
            'count' => 'setCount',
            'marker' => 'setMarker'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * backlogPolicies  数据流转积压策略列表。
    * count  满足查询条件的记录总数。
    * marker  本次分页查询结果中最后一条记录的ID，可在下一次分页查询时使用。
    *
    * @var string[]
    */
    protected static $getters = [
            'backlogPolicies' => 'getBacklogPolicies',
            'count' => 'getCount',
            'marker' => 'getMarker'
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
        $this->container['backlogPolicies'] = isset($data['backlogPolicies']) ? $data['backlogPolicies'] : null;
        $this->container['count'] = isset($data['count']) ? $data['count'] : null;
        $this->container['marker'] = isset($data['marker']) ? $data['marker'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['count']) && ($this->container['count'] < 0)) {
                $invalidProperties[] = "invalid value for 'count', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['marker']) && !preg_match("/^[a-fA-F0-9]{24}$/", $this->container['marker'])) {
                $invalidProperties[] = "invalid value for 'marker', must be conform to the pattern /^[a-fA-F0-9]{24}$/.";
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
    * Gets backlogPolicies
    *  数据流转积压策略列表。
    *
    * @return \HuaweiCloud\SDK\IoTDA\V5\Model\BacklogPolicyInfo[]|null
    */
    public function getBacklogPolicies()
    {
        return $this->container['backlogPolicies'];
    }

    /**
    * Sets backlogPolicies
    *
    * @param \HuaweiCloud\SDK\IoTDA\V5\Model\BacklogPolicyInfo[]|null $backlogPolicies 数据流转积压策略列表。
    *
    * @return $this
    */
    public function setBacklogPolicies($backlogPolicies)
    {
        $this->container['backlogPolicies'] = $backlogPolicies;
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

