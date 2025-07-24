<?php

namespace HuaweiCloud\SDK\CodeArtsCheck\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class CheckRecordDataInfo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'CheckRecordDataInfo';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * checkTime  检查任务执行开始时间
    * checkEndTime  检查任务执行结束时间
    * issueCounts  issueCounts
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'checkTime' => 'string',
            'checkEndTime' => 'string',
            'issueCounts' => '\HuaweiCloud\SDK\CodeArtsCheck\V2\Model\CheckRecordIssueCountsInfo'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * checkTime  检查任务执行开始时间
    * checkEndTime  检查任务执行结束时间
    * issueCounts  issueCounts
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'checkTime' => null,
        'checkEndTime' => null,
        'issueCounts' => null
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
    * checkTime  检查任务执行开始时间
    * checkEndTime  检查任务执行结束时间
    * issueCounts  issueCounts
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'checkTime' => 'check_time',
            'checkEndTime' => 'check_end_time',
            'issueCounts' => 'issue_counts'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * checkTime  检查任务执行开始时间
    * checkEndTime  检查任务执行结束时间
    * issueCounts  issueCounts
    *
    * @var string[]
    */
    protected static $setters = [
            'checkTime' => 'setCheckTime',
            'checkEndTime' => 'setCheckEndTime',
            'issueCounts' => 'setIssueCounts'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * checkTime  检查任务执行开始时间
    * checkEndTime  检查任务执行结束时间
    * issueCounts  issueCounts
    *
    * @var string[]
    */
    protected static $getters = [
            'checkTime' => 'getCheckTime',
            'checkEndTime' => 'getCheckEndTime',
            'issueCounts' => 'getIssueCounts'
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
        $this->container['checkTime'] = isset($data['checkTime']) ? $data['checkTime'] : null;
        $this->container['checkEndTime'] = isset($data['checkEndTime']) ? $data['checkEndTime'] : null;
        $this->container['issueCounts'] = isset($data['issueCounts']) ? $data['issueCounts'] : null;
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
    * Gets checkTime
    *  检查任务执行开始时间
    *
    * @return string|null
    */
    public function getCheckTime()
    {
        return $this->container['checkTime'];
    }

    /**
    * Sets checkTime
    *
    * @param string|null $checkTime 检查任务执行开始时间
    *
    * @return $this
    */
    public function setCheckTime($checkTime)
    {
        $this->container['checkTime'] = $checkTime;
        return $this;
    }

    /**
    * Gets checkEndTime
    *  检查任务执行结束时间
    *
    * @return string|null
    */
    public function getCheckEndTime()
    {
        return $this->container['checkEndTime'];
    }

    /**
    * Sets checkEndTime
    *
    * @param string|null $checkEndTime 检查任务执行结束时间
    *
    * @return $this
    */
    public function setCheckEndTime($checkEndTime)
    {
        $this->container['checkEndTime'] = $checkEndTime;
        return $this;
    }

    /**
    * Gets issueCounts
    *  issueCounts
    *
    * @return \HuaweiCloud\SDK\CodeArtsCheck\V2\Model\CheckRecordIssueCountsInfo|null
    */
    public function getIssueCounts()
    {
        return $this->container['issueCounts'];
    }

    /**
    * Sets issueCounts
    *
    * @param \HuaweiCloud\SDK\CodeArtsCheck\V2\Model\CheckRecordIssueCountsInfo|null $issueCounts issueCounts
    *
    * @return $this
    */
    public function setIssueCounts($issueCounts)
    {
        $this->container['issueCounts'] = $issueCounts;
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

