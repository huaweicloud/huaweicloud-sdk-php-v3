<?php

namespace HuaweiCloud\SDK\Lts\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ListLogContextResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ListLogContextResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * logs  上下文日志信息。
    * totalCount  返回的总日志条数，包含请求参数中所指定的起始日志。
    * backwardsCount  向前查询到的日志条数。
    * forwardsCount  向后查询到的日志条数。
    * isQueryComplete  是否查询完成。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'logs' => '\HuaweiCloud\SDK\Lts\V2\Model\LogContents[]',
            'totalCount' => 'int',
            'backwardsCount' => 'int',
            'forwardsCount' => 'int',
            'isQueryComplete' => 'bool'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * logs  上下文日志信息。
    * totalCount  返回的总日志条数，包含请求参数中所指定的起始日志。
    * backwardsCount  向前查询到的日志条数。
    * forwardsCount  向后查询到的日志条数。
    * isQueryComplete  是否查询完成。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'logs' => null,
        'totalCount' => 'int32',
        'backwardsCount' => 'int32',
        'forwardsCount' => 'int32',
        'isQueryComplete' => null
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
    * logs  上下文日志信息。
    * totalCount  返回的总日志条数，包含请求参数中所指定的起始日志。
    * backwardsCount  向前查询到的日志条数。
    * forwardsCount  向后查询到的日志条数。
    * isQueryComplete  是否查询完成。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'logs' => 'logs',
            'totalCount' => 'total_count',
            'backwardsCount' => 'backwards_count',
            'forwardsCount' => 'forwards_count',
            'isQueryComplete' => 'isQueryComplete'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * logs  上下文日志信息。
    * totalCount  返回的总日志条数，包含请求参数中所指定的起始日志。
    * backwardsCount  向前查询到的日志条数。
    * forwardsCount  向后查询到的日志条数。
    * isQueryComplete  是否查询完成。
    *
    * @var string[]
    */
    protected static $setters = [
            'logs' => 'setLogs',
            'totalCount' => 'setTotalCount',
            'backwardsCount' => 'setBackwardsCount',
            'forwardsCount' => 'setForwardsCount',
            'isQueryComplete' => 'setIsQueryComplete'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * logs  上下文日志信息。
    * totalCount  返回的总日志条数，包含请求参数中所指定的起始日志。
    * backwardsCount  向前查询到的日志条数。
    * forwardsCount  向后查询到的日志条数。
    * isQueryComplete  是否查询完成。
    *
    * @var string[]
    */
    protected static $getters = [
            'logs' => 'getLogs',
            'totalCount' => 'getTotalCount',
            'backwardsCount' => 'getBackwardsCount',
            'forwardsCount' => 'getForwardsCount',
            'isQueryComplete' => 'getIsQueryComplete'
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
        $this->container['logs'] = isset($data['logs']) ? $data['logs'] : null;
        $this->container['totalCount'] = isset($data['totalCount']) ? $data['totalCount'] : null;
        $this->container['backwardsCount'] = isset($data['backwardsCount']) ? $data['backwardsCount'] : null;
        $this->container['forwardsCount'] = isset($data['forwardsCount']) ? $data['forwardsCount'] : null;
        $this->container['isQueryComplete'] = isset($data['isQueryComplete']) ? $data['isQueryComplete'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['backwardsCount']) && ($this->container['backwardsCount'] > 500)) {
                $invalidProperties[] = "invalid value for 'backwardsCount', must be smaller than or equal to 500.";
            }
            if (!is_null($this->container['backwardsCount']) && ($this->container['backwardsCount'] < 0)) {
                $invalidProperties[] = "invalid value for 'backwardsCount', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['forwardsCount']) && ($this->container['forwardsCount'] > 500)) {
                $invalidProperties[] = "invalid value for 'forwardsCount', must be smaller than or equal to 500.";
            }
            if (!is_null($this->container['forwardsCount']) && ($this->container['forwardsCount'] < 0)) {
                $invalidProperties[] = "invalid value for 'forwardsCount', must be bigger than or equal to 0.";
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
    * Gets logs
    *  上下文日志信息。
    *
    * @return \HuaweiCloud\SDK\Lts\V2\Model\LogContents[]|null
    */
    public function getLogs()
    {
        return $this->container['logs'];
    }

    /**
    * Sets logs
    *
    * @param \HuaweiCloud\SDK\Lts\V2\Model\LogContents[]|null $logs 上下文日志信息。
    *
    * @return $this
    */
    public function setLogs($logs)
    {
        $this->container['logs'] = $logs;
        return $this;
    }

    /**
    * Gets totalCount
    *  返回的总日志条数，包含请求参数中所指定的起始日志。
    *
    * @return int|null
    */
    public function getTotalCount()
    {
        return $this->container['totalCount'];
    }

    /**
    * Sets totalCount
    *
    * @param int|null $totalCount 返回的总日志条数，包含请求参数中所指定的起始日志。
    *
    * @return $this
    */
    public function setTotalCount($totalCount)
    {
        $this->container['totalCount'] = $totalCount;
        return $this;
    }

    /**
    * Gets backwardsCount
    *  向前查询到的日志条数。
    *
    * @return int|null
    */
    public function getBackwardsCount()
    {
        return $this->container['backwardsCount'];
    }

    /**
    * Sets backwardsCount
    *
    * @param int|null $backwardsCount 向前查询到的日志条数。
    *
    * @return $this
    */
    public function setBackwardsCount($backwardsCount)
    {
        $this->container['backwardsCount'] = $backwardsCount;
        return $this;
    }

    /**
    * Gets forwardsCount
    *  向后查询到的日志条数。
    *
    * @return int|null
    */
    public function getForwardsCount()
    {
        return $this->container['forwardsCount'];
    }

    /**
    * Sets forwardsCount
    *
    * @param int|null $forwardsCount 向后查询到的日志条数。
    *
    * @return $this
    */
    public function setForwardsCount($forwardsCount)
    {
        $this->container['forwardsCount'] = $forwardsCount;
        return $this;
    }

    /**
    * Gets isQueryComplete
    *  是否查询完成。
    *
    * @return bool|null
    */
    public function getIsQueryComplete()
    {
        return $this->container['isQueryComplete'];
    }

    /**
    * Sets isQueryComplete
    *
    * @param bool|null $isQueryComplete 是否查询完成。
    *
    * @return $this
    */
    public function setIsQueryComplete($isQueryComplete)
    {
        $this->container['isQueryComplete'] = $isQueryComplete;
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

