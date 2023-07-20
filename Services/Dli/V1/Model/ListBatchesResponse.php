<?php

namespace HuaweiCloud\SDK\Dli\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ListBatchesResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ListBatchesResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * from  起始批处理作业的索引号。
    * total  返回批处理作业的总数。
    * sessions  批处理作业信息。
    * createTime  批处理作业的创建时间。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'from' => 'int',
            'total' => 'int',
            'sessions' => '\HuaweiCloud\SDK\Dli\V1\Model\ShowBatchJobDetailResp[]',
            'createTime' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * from  起始批处理作业的索引号。
    * total  返回批处理作业的总数。
    * sessions  批处理作业信息。
    * createTime  批处理作业的创建时间。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'from' => 'int32',
        'total' => 'int32',
        'sessions' => null,
        'createTime' => 'int64'
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
    * from  起始批处理作业的索引号。
    * total  返回批处理作业的总数。
    * sessions  批处理作业信息。
    * createTime  批处理作业的创建时间。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'from' => 'from',
            'total' => 'total',
            'sessions' => 'sessions',
            'createTime' => 'create_time'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * from  起始批处理作业的索引号。
    * total  返回批处理作业的总数。
    * sessions  批处理作业信息。
    * createTime  批处理作业的创建时间。
    *
    * @var string[]
    */
    protected static $setters = [
            'from' => 'setFrom',
            'total' => 'setTotal',
            'sessions' => 'setSessions',
            'createTime' => 'setCreateTime'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * from  起始批处理作业的索引号。
    * total  返回批处理作业的总数。
    * sessions  批处理作业信息。
    * createTime  批处理作业的创建时间。
    *
    * @var string[]
    */
    protected static $getters = [
            'from' => 'getFrom',
            'total' => 'getTotal',
            'sessions' => 'getSessions',
            'createTime' => 'getCreateTime'
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
        $this->container['from'] = isset($data['from']) ? $data['from'] : null;
        $this->container['total'] = isset($data['total']) ? $data['total'] : null;
        $this->container['sessions'] = isset($data['sessions']) ? $data['sessions'] : null;
        $this->container['createTime'] = isset($data['createTime']) ? $data['createTime'] : null;
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
    * Gets from
    *  起始批处理作业的索引号。
    *
    * @return int|null
    */
    public function getFrom()
    {
        return $this->container['from'];
    }

    /**
    * Sets from
    *
    * @param int|null $from 起始批处理作业的索引号。
    *
    * @return $this
    */
    public function setFrom($from)
    {
        $this->container['from'] = $from;
        return $this;
    }

    /**
    * Gets total
    *  返回批处理作业的总数。
    *
    * @return int|null
    */
    public function getTotal()
    {
        return $this->container['total'];
    }

    /**
    * Sets total
    *
    * @param int|null $total 返回批处理作业的总数。
    *
    * @return $this
    */
    public function setTotal($total)
    {
        $this->container['total'] = $total;
        return $this;
    }

    /**
    * Gets sessions
    *  批处理作业信息。
    *
    * @return \HuaweiCloud\SDK\Dli\V1\Model\ShowBatchJobDetailResp[]|null
    */
    public function getSessions()
    {
        return $this->container['sessions'];
    }

    /**
    * Sets sessions
    *
    * @param \HuaweiCloud\SDK\Dli\V1\Model\ShowBatchJobDetailResp[]|null $sessions 批处理作业信息。
    *
    * @return $this
    */
    public function setSessions($sessions)
    {
        $this->container['sessions'] = $sessions;
        return $this;
    }

    /**
    * Gets createTime
    *  批处理作业的创建时间。
    *
    * @return int|null
    */
    public function getCreateTime()
    {
        return $this->container['createTime'];
    }

    /**
    * Sets createTime
    *
    * @param int|null $createTime 批处理作业的创建时间。
    *
    * @return $this
    */
    public function setCreateTime($createTime)
    {
        $this->container['createTime'] = $createTime;
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

