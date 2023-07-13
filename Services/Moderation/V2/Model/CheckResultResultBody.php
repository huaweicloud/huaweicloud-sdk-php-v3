<?php

namespace HuaweiCloud\SDK\Moderation\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class CheckResultResultBody implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'CheckResultResultBody';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * jobId  任务标识。
    * status  任务状态。  created：已创建  running：正在处理  finish：已完成  failed：处理失败
    * createTime  任务创建的时间。例如：2018-01-02T15:03:04Z
    * updateTime  任务最近更新的时间。例如：2018-01-02T15:03:04Z
    * items  图片内容检测的结果列表。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'jobId' => 'string',
            'status' => 'string',
            'createTime' => 'string',
            'updateTime' => 'string',
            'items' => '\HuaweiCloud\SDK\Moderation\V2\Model\CheckResultItemsBody[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * jobId  任务标识。
    * status  任务状态。  created：已创建  running：正在处理  finish：已完成  failed：处理失败
    * createTime  任务创建的时间。例如：2018-01-02T15:03:04Z
    * updateTime  任务最近更新的时间。例如：2018-01-02T15:03:04Z
    * items  图片内容检测的结果列表。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'jobId' => null,
        'status' => null,
        'createTime' => null,
        'updateTime' => null,
        'items' => null
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
    * jobId  任务标识。
    * status  任务状态。  created：已创建  running：正在处理  finish：已完成  failed：处理失败
    * createTime  任务创建的时间。例如：2018-01-02T15:03:04Z
    * updateTime  任务最近更新的时间。例如：2018-01-02T15:03:04Z
    * items  图片内容检测的结果列表。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'jobId' => 'job_id',
            'status' => 'status',
            'createTime' => 'create_time',
            'updateTime' => 'update_time',
            'items' => 'items'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * jobId  任务标识。
    * status  任务状态。  created：已创建  running：正在处理  finish：已完成  failed：处理失败
    * createTime  任务创建的时间。例如：2018-01-02T15:03:04Z
    * updateTime  任务最近更新的时间。例如：2018-01-02T15:03:04Z
    * items  图片内容检测的结果列表。
    *
    * @var string[]
    */
    protected static $setters = [
            'jobId' => 'setJobId',
            'status' => 'setStatus',
            'createTime' => 'setCreateTime',
            'updateTime' => 'setUpdateTime',
            'items' => 'setItems'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * jobId  任务标识。
    * status  任务状态。  created：已创建  running：正在处理  finish：已完成  failed：处理失败
    * createTime  任务创建的时间。例如：2018-01-02T15:03:04Z
    * updateTime  任务最近更新的时间。例如：2018-01-02T15:03:04Z
    * items  图片内容检测的结果列表。
    *
    * @var string[]
    */
    protected static $getters = [
            'jobId' => 'getJobId',
            'status' => 'getStatus',
            'createTime' => 'getCreateTime',
            'updateTime' => 'getUpdateTime',
            'items' => 'getItems'
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
        $this->container['jobId'] = isset($data['jobId']) ? $data['jobId'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['createTime'] = isset($data['createTime']) ? $data['createTime'] : null;
        $this->container['updateTime'] = isset($data['updateTime']) ? $data['updateTime'] : null;
        $this->container['items'] = isset($data['items']) ? $data['items'] : null;
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
    * Gets jobId
    *  任务标识。
    *
    * @return string|null
    */
    public function getJobId()
    {
        return $this->container['jobId'];
    }

    /**
    * Sets jobId
    *
    * @param string|null $jobId 任务标识。
    *
    * @return $this
    */
    public function setJobId($jobId)
    {
        $this->container['jobId'] = $jobId;
        return $this;
    }

    /**
    * Gets status
    *  任务状态。  created：已创建  running：正在处理  finish：已完成  failed：处理失败
    *
    * @return string|null
    */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
    * Sets status
    *
    * @param string|null $status 任务状态。  created：已创建  running：正在处理  finish：已完成  failed：处理失败
    *
    * @return $this
    */
    public function setStatus($status)
    {
        $this->container['status'] = $status;
        return $this;
    }

    /**
    * Gets createTime
    *  任务创建的时间。例如：2018-01-02T15:03:04Z
    *
    * @return string|null
    */
    public function getCreateTime()
    {
        return $this->container['createTime'];
    }

    /**
    * Sets createTime
    *
    * @param string|null $createTime 任务创建的时间。例如：2018-01-02T15:03:04Z
    *
    * @return $this
    */
    public function setCreateTime($createTime)
    {
        $this->container['createTime'] = $createTime;
        return $this;
    }

    /**
    * Gets updateTime
    *  任务最近更新的时间。例如：2018-01-02T15:03:04Z
    *
    * @return string|null
    */
    public function getUpdateTime()
    {
        return $this->container['updateTime'];
    }

    /**
    * Sets updateTime
    *
    * @param string|null $updateTime 任务最近更新的时间。例如：2018-01-02T15:03:04Z
    *
    * @return $this
    */
    public function setUpdateTime($updateTime)
    {
        $this->container['updateTime'] = $updateTime;
        return $this;
    }

    /**
    * Gets items
    *  图片内容检测的结果列表。
    *
    * @return \HuaweiCloud\SDK\Moderation\V2\Model\CheckResultItemsBody[]|null
    */
    public function getItems()
    {
        return $this->container['items'];
    }

    /**
    * Sets items
    *
    * @param \HuaweiCloud\SDK\Moderation\V2\Model\CheckResultItemsBody[]|null $items 图片内容检测的结果列表。
    *
    * @return $this
    */
    public function setItems($items)
    {
        $this->container['items'] = $items;
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

