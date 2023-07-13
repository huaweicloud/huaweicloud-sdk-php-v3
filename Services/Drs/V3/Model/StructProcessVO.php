<?php

namespace HuaweiCloud\SDK\Drs\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class StructProcessVO implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'StructProcessVO';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * type  对象类型
    * status  状态
    * srcCount  源对象数量
    * dstCount  目标对象数量
    * startTime  开始时间
    * endTime  结束时间
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'type' => 'string',
            'status' => 'int',
            'srcCount' => 'int',
            'dstCount' => 'int',
            'startTime' => 'int',
            'endTime' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * type  对象类型
    * status  状态
    * srcCount  源对象数量
    * dstCount  目标对象数量
    * startTime  开始时间
    * endTime  结束时间
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'type' => null,
        'status' => 'int32',
        'srcCount' => 'int32',
        'dstCount' => 'int32',
        'startTime' => 'int64',
        'endTime' => 'int64'
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
    * type  对象类型
    * status  状态
    * srcCount  源对象数量
    * dstCount  目标对象数量
    * startTime  开始时间
    * endTime  结束时间
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'type' => 'type',
            'status' => 'status',
            'srcCount' => 'src_count',
            'dstCount' => 'dst_count',
            'startTime' => 'start_time',
            'endTime' => 'end_time'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * type  对象类型
    * status  状态
    * srcCount  源对象数量
    * dstCount  目标对象数量
    * startTime  开始时间
    * endTime  结束时间
    *
    * @var string[]
    */
    protected static $setters = [
            'type' => 'setType',
            'status' => 'setStatus',
            'srcCount' => 'setSrcCount',
            'dstCount' => 'setDstCount',
            'startTime' => 'setStartTime',
            'endTime' => 'setEndTime'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * type  对象类型
    * status  状态
    * srcCount  源对象数量
    * dstCount  目标对象数量
    * startTime  开始时间
    * endTime  结束时间
    *
    * @var string[]
    */
    protected static $getters = [
            'type' => 'getType',
            'status' => 'getStatus',
            'srcCount' => 'getSrcCount',
            'dstCount' => 'getDstCount',
            'startTime' => 'getStartTime',
            'endTime' => 'getEndTime'
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
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['srcCount'] = isset($data['srcCount']) ? $data['srcCount'] : null;
        $this->container['dstCount'] = isset($data['dstCount']) ? $data['dstCount'] : null;
        $this->container['startTime'] = isset($data['startTime']) ? $data['startTime'] : null;
        $this->container['endTime'] = isset($data['endTime']) ? $data['endTime'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['type'] === null) {
            $invalidProperties[] = "'type' can't be null";
        }
        if ($this->container['status'] === null) {
            $invalidProperties[] = "'status' can't be null";
        }
        if ($this->container['srcCount'] === null) {
            $invalidProperties[] = "'srcCount' can't be null";
        }
        if ($this->container['dstCount'] === null) {
            $invalidProperties[] = "'dstCount' can't be null";
        }
        if ($this->container['startTime'] === null) {
            $invalidProperties[] = "'startTime' can't be null";
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
    * Gets type
    *  对象类型
    *
    * @return string
    */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
    * Sets type
    *
    * @param string $type 对象类型
    *
    * @return $this
    */
    public function setType($type)
    {
        $this->container['type'] = $type;
        return $this;
    }

    /**
    * Gets status
    *  状态
    *
    * @return int
    */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
    * Sets status
    *
    * @param int $status 状态
    *
    * @return $this
    */
    public function setStatus($status)
    {
        $this->container['status'] = $status;
        return $this;
    }

    /**
    * Gets srcCount
    *  源对象数量
    *
    * @return int
    */
    public function getSrcCount()
    {
        return $this->container['srcCount'];
    }

    /**
    * Sets srcCount
    *
    * @param int $srcCount 源对象数量
    *
    * @return $this
    */
    public function setSrcCount($srcCount)
    {
        $this->container['srcCount'] = $srcCount;
        return $this;
    }

    /**
    * Gets dstCount
    *  目标对象数量
    *
    * @return int
    */
    public function getDstCount()
    {
        return $this->container['dstCount'];
    }

    /**
    * Sets dstCount
    *
    * @param int $dstCount 目标对象数量
    *
    * @return $this
    */
    public function setDstCount($dstCount)
    {
        $this->container['dstCount'] = $dstCount;
        return $this;
    }

    /**
    * Gets startTime
    *  开始时间
    *
    * @return int
    */
    public function getStartTime()
    {
        return $this->container['startTime'];
    }

    /**
    * Sets startTime
    *
    * @param int $startTime 开始时间
    *
    * @return $this
    */
    public function setStartTime($startTime)
    {
        $this->container['startTime'] = $startTime;
        return $this;
    }

    /**
    * Gets endTime
    *  结束时间
    *
    * @return int|null
    */
    public function getEndTime()
    {
        return $this->container['endTime'];
    }

    /**
    * Sets endTime
    *
    * @param int|null $endTime 结束时间
    *
    * @return $this
    */
    public function setEndTime($endTime)
    {
        $this->container['endTime'] = $endTime;
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

