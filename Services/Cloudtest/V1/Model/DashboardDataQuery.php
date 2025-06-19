<?php

namespace HuaweiCloud\SDK\Cloudtest\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class DashboardDataQuery implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'DashboardDataQuery';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * endTime  查询结束时间
    * pageNum  分页参数，页码
    * pageSize  分页参数，每页大小
    * startTime  查询开始时间
    * taskIds  任务Id列表
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'endTime' => 'int',
            'pageNum' => 'int',
            'pageSize' => 'int',
            'startTime' => 'int',
            'taskIds' => 'string[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * endTime  查询结束时间
    * pageNum  分页参数，页码
    * pageSize  分页参数，每页大小
    * startTime  查询开始时间
    * taskIds  任务Id列表
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'endTime' => 'int64',
        'pageNum' => 'int32',
        'pageSize' => 'int32',
        'startTime' => 'int64',
        'taskIds' => null
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
    * endTime  查询结束时间
    * pageNum  分页参数，页码
    * pageSize  分页参数，每页大小
    * startTime  查询开始时间
    * taskIds  任务Id列表
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'endTime' => 'end_time',
            'pageNum' => 'page_num',
            'pageSize' => 'page_size',
            'startTime' => 'start_time',
            'taskIds' => 'task_ids'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * endTime  查询结束时间
    * pageNum  分页参数，页码
    * pageSize  分页参数，每页大小
    * startTime  查询开始时间
    * taskIds  任务Id列表
    *
    * @var string[]
    */
    protected static $setters = [
            'endTime' => 'setEndTime',
            'pageNum' => 'setPageNum',
            'pageSize' => 'setPageSize',
            'startTime' => 'setStartTime',
            'taskIds' => 'setTaskIds'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * endTime  查询结束时间
    * pageNum  分页参数，页码
    * pageSize  分页参数，每页大小
    * startTime  查询开始时间
    * taskIds  任务Id列表
    *
    * @var string[]
    */
    protected static $getters = [
            'endTime' => 'getEndTime',
            'pageNum' => 'getPageNum',
            'pageSize' => 'getPageSize',
            'startTime' => 'getStartTime',
            'taskIds' => 'getTaskIds'
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
        $this->container['endTime'] = isset($data['endTime']) ? $data['endTime'] : null;
        $this->container['pageNum'] = isset($data['pageNum']) ? $data['pageNum'] : null;
        $this->container['pageSize'] = isset($data['pageSize']) ? $data['pageSize'] : null;
        $this->container['startTime'] = isset($data['startTime']) ? $data['startTime'] : null;
        $this->container['taskIds'] = isset($data['taskIds']) ? $data['taskIds'] : null;
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
    * Gets endTime
    *  查询结束时间
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
    * @param int|null $endTime 查询结束时间
    *
    * @return $this
    */
    public function setEndTime($endTime)
    {
        $this->container['endTime'] = $endTime;
        return $this;
    }

    /**
    * Gets pageNum
    *  分页参数，页码
    *
    * @return int|null
    */
    public function getPageNum()
    {
        return $this->container['pageNum'];
    }

    /**
    * Sets pageNum
    *
    * @param int|null $pageNum 分页参数，页码
    *
    * @return $this
    */
    public function setPageNum($pageNum)
    {
        $this->container['pageNum'] = $pageNum;
        return $this;
    }

    /**
    * Gets pageSize
    *  分页参数，每页大小
    *
    * @return int|null
    */
    public function getPageSize()
    {
        return $this->container['pageSize'];
    }

    /**
    * Sets pageSize
    *
    * @param int|null $pageSize 分页参数，每页大小
    *
    * @return $this
    */
    public function setPageSize($pageSize)
    {
        $this->container['pageSize'] = $pageSize;
        return $this;
    }

    /**
    * Gets startTime
    *  查询开始时间
    *
    * @return int|null
    */
    public function getStartTime()
    {
        return $this->container['startTime'];
    }

    /**
    * Sets startTime
    *
    * @param int|null $startTime 查询开始时间
    *
    * @return $this
    */
    public function setStartTime($startTime)
    {
        $this->container['startTime'] = $startTime;
        return $this;
    }

    /**
    * Gets taskIds
    *  任务Id列表
    *
    * @return string[]|null
    */
    public function getTaskIds()
    {
        return $this->container['taskIds'];
    }

    /**
    * Sets taskIds
    *
    * @param string[]|null $taskIds 任务Id列表
    *
    * @return $this
    */
    public function setTaskIds($taskIds)
    {
        $this->container['taskIds'] = $taskIds;
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

