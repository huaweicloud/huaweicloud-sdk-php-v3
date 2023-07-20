<?php

namespace HuaweiCloud\SDK\Rds\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ListSlowlogStatisticsResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ListSlowlogStatisticsResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * pageNumber  当前页码
    * pageRecord  每页条数
    * slowLogList  慢日志列表
    * totalRecord  总条数
    * startTime  开始时间
    * endTime  结束时间
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'pageNumber' => 'int',
            'pageRecord' => 'int',
            'slowLogList' => '\HuaweiCloud\SDK\Rds\V3\Model\SlowLogStatistics[]',
            'totalRecord' => 'int',
            'startTime' => 'int',
            'endTime' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * pageNumber  当前页码
    * pageRecord  每页条数
    * slowLogList  慢日志列表
    * totalRecord  总条数
    * startTime  开始时间
    * endTime  结束时间
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'pageNumber' => null,
        'pageRecord' => null,
        'slowLogList' => null,
        'totalRecord' => null,
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
    * pageNumber  当前页码
    * pageRecord  每页条数
    * slowLogList  慢日志列表
    * totalRecord  总条数
    * startTime  开始时间
    * endTime  结束时间
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'pageNumber' => 'pageNumber',
            'pageRecord' => 'pageRecord',
            'slowLogList' => 'slowLogList',
            'totalRecord' => 'totalRecord',
            'startTime' => 'startTime',
            'endTime' => 'endTime'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * pageNumber  当前页码
    * pageRecord  每页条数
    * slowLogList  慢日志列表
    * totalRecord  总条数
    * startTime  开始时间
    * endTime  结束时间
    *
    * @var string[]
    */
    protected static $setters = [
            'pageNumber' => 'setPageNumber',
            'pageRecord' => 'setPageRecord',
            'slowLogList' => 'setSlowLogList',
            'totalRecord' => 'setTotalRecord',
            'startTime' => 'setStartTime',
            'endTime' => 'setEndTime'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * pageNumber  当前页码
    * pageRecord  每页条数
    * slowLogList  慢日志列表
    * totalRecord  总条数
    * startTime  开始时间
    * endTime  结束时间
    *
    * @var string[]
    */
    protected static $getters = [
            'pageNumber' => 'getPageNumber',
            'pageRecord' => 'getPageRecord',
            'slowLogList' => 'getSlowLogList',
            'totalRecord' => 'getTotalRecord',
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
        $this->container['pageNumber'] = isset($data['pageNumber']) ? $data['pageNumber'] : null;
        $this->container['pageRecord'] = isset($data['pageRecord']) ? $data['pageRecord'] : null;
        $this->container['slowLogList'] = isset($data['slowLogList']) ? $data['slowLogList'] : null;
        $this->container['totalRecord'] = isset($data['totalRecord']) ? $data['totalRecord'] : null;
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
    * Gets pageNumber
    *  当前页码
    *
    * @return int|null
    */
    public function getPageNumber()
    {
        return $this->container['pageNumber'];
    }

    /**
    * Sets pageNumber
    *
    * @param int|null $pageNumber 当前页码
    *
    * @return $this
    */
    public function setPageNumber($pageNumber)
    {
        $this->container['pageNumber'] = $pageNumber;
        return $this;
    }

    /**
    * Gets pageRecord
    *  每页条数
    *
    * @return int|null
    */
    public function getPageRecord()
    {
        return $this->container['pageRecord'];
    }

    /**
    * Sets pageRecord
    *
    * @param int|null $pageRecord 每页条数
    *
    * @return $this
    */
    public function setPageRecord($pageRecord)
    {
        $this->container['pageRecord'] = $pageRecord;
        return $this;
    }

    /**
    * Gets slowLogList
    *  慢日志列表
    *
    * @return \HuaweiCloud\SDK\Rds\V3\Model\SlowLogStatistics[]|null
    */
    public function getSlowLogList()
    {
        return $this->container['slowLogList'];
    }

    /**
    * Sets slowLogList
    *
    * @param \HuaweiCloud\SDK\Rds\V3\Model\SlowLogStatistics[]|null $slowLogList 慢日志列表
    *
    * @return $this
    */
    public function setSlowLogList($slowLogList)
    {
        $this->container['slowLogList'] = $slowLogList;
        return $this;
    }

    /**
    * Gets totalRecord
    *  总条数
    *
    * @return int|null
    */
    public function getTotalRecord()
    {
        return $this->container['totalRecord'];
    }

    /**
    * Sets totalRecord
    *
    * @param int|null $totalRecord 总条数
    *
    * @return $this
    */
    public function setTotalRecord($totalRecord)
    {
        $this->container['totalRecord'] = $totalRecord;
        return $this;
    }

    /**
    * Gets startTime
    *  开始时间
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
    * @param int|null $startTime 开始时间
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

