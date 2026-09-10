<?php

namespace HuaweiCloud\SDK\Rds\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ListOperateRecordResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ListOperateRecordResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * count  本次查询事件列表返回的事件记录的总条数
    * traces  本次查询事件列表返回的事件记录
    * allOperateType  所有事件类型
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'count' => 'int',
            'traces' => '\HuaweiCloud\SDK\Rds\V3\Model\OperateRecord[]',
            'allOperateType' => 'string[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * count  本次查询事件列表返回的事件记录的总条数
    * traces  本次查询事件列表返回的事件记录
    * allOperateType  所有事件类型
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'count' => 'int32',
        'traces' => null,
        'allOperateType' => null
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
    * count  本次查询事件列表返回的事件记录的总条数
    * traces  本次查询事件列表返回的事件记录
    * allOperateType  所有事件类型
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'count' => 'count',
            'traces' => 'traces',
            'allOperateType' => 'all_operate_type'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * count  本次查询事件列表返回的事件记录的总条数
    * traces  本次查询事件列表返回的事件记录
    * allOperateType  所有事件类型
    *
    * @var string[]
    */
    protected static $setters = [
            'count' => 'setCount',
            'traces' => 'setTraces',
            'allOperateType' => 'setAllOperateType'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * count  本次查询事件列表返回的事件记录的总条数
    * traces  本次查询事件列表返回的事件记录
    * allOperateType  所有事件类型
    *
    * @var string[]
    */
    protected static $getters = [
            'count' => 'getCount',
            'traces' => 'getTraces',
            'allOperateType' => 'getAllOperateType'
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
        $this->container['count'] = isset($data['count']) ? $data['count'] : null;
        $this->container['traces'] = isset($data['traces']) ? $data['traces'] : null;
        $this->container['allOperateType'] = isset($data['allOperateType']) ? $data['allOperateType'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['count']) && ($this->container['count'] > 2000)) {
                $invalidProperties[] = "invalid value for 'count', must be smaller than or equal to 2000.";
            }
            if (!is_null($this->container['count']) && ($this->container['count'] < 0)) {
                $invalidProperties[] = "invalid value for 'count', must be bigger than or equal to 0.";
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
    * Gets count
    *  本次查询事件列表返回的事件记录的总条数
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
    * @param int|null $count 本次查询事件列表返回的事件记录的总条数
    *
    * @return $this
    */
    public function setCount($count)
    {
        $this->container['count'] = $count;
        return $this;
    }

    /**
    * Gets traces
    *  本次查询事件列表返回的事件记录
    *
    * @return \HuaweiCloud\SDK\Rds\V3\Model\OperateRecord[]|null
    */
    public function getTraces()
    {
        return $this->container['traces'];
    }

    /**
    * Sets traces
    *
    * @param \HuaweiCloud\SDK\Rds\V3\Model\OperateRecord[]|null $traces 本次查询事件列表返回的事件记录
    *
    * @return $this
    */
    public function setTraces($traces)
    {
        $this->container['traces'] = $traces;
        return $this;
    }

    /**
    * Gets allOperateType
    *  所有事件类型
    *
    * @return string[]|null
    */
    public function getAllOperateType()
    {
        return $this->container['allOperateType'];
    }

    /**
    * Sets allOperateType
    *
    * @param string[]|null $allOperateType 所有事件类型
    *
    * @return $this
    */
    public function setAllOperateType($allOperateType)
    {
        $this->container['allOperateType'] = $allOperateType;
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

