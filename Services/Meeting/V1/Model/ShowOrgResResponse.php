<?php

namespace HuaweiCloud\SDK\Meeting\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ShowOrgResResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ShowOrgResResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * usedRecStorage  企业管理员查询所属企业的资源使用信息。
    * usedAccountsCount  当前已用的会议并发数量。
    * usedLiveCount  当前已用的直播推流资源。
    * confCount  当前已用的直播推流资源。
    * confLength  当日会议总时长。
    * activeAttendeeCount  当日活跃用户数。
    * totalAttendeeCount  当日总与会人数。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'usedRecStorage' => 'double',
            'usedAccountsCount' => 'int',
            'usedLiveCount' => 'int',
            'confCount' => 'int',
            'confLength' => 'int',
            'activeAttendeeCount' => 'int',
            'totalAttendeeCount' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * usedRecStorage  企业管理员查询所属企业的资源使用信息。
    * usedAccountsCount  当前已用的会议并发数量。
    * usedLiveCount  当前已用的直播推流资源。
    * confCount  当前已用的直播推流资源。
    * confLength  当日会议总时长。
    * activeAttendeeCount  当日活跃用户数。
    * totalAttendeeCount  当日总与会人数。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'usedRecStorage' => 'double',
        'usedAccountsCount' => 'int32',
        'usedLiveCount' => 'int32',
        'confCount' => 'int32',
        'confLength' => 'int64',
        'activeAttendeeCount' => 'int32',
        'totalAttendeeCount' => 'int32'
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
    * usedRecStorage  企业管理员查询所属企业的资源使用信息。
    * usedAccountsCount  当前已用的会议并发数量。
    * usedLiveCount  当前已用的直播推流资源。
    * confCount  当前已用的直播推流资源。
    * confLength  当日会议总时长。
    * activeAttendeeCount  当日活跃用户数。
    * totalAttendeeCount  当日总与会人数。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'usedRecStorage' => 'usedRecStorage',
            'usedAccountsCount' => 'usedAccountsCount',
            'usedLiveCount' => 'usedLiveCount',
            'confCount' => 'confCount',
            'confLength' => 'confLength',
            'activeAttendeeCount' => 'activeAttendeeCount',
            'totalAttendeeCount' => 'totalAttendeeCount'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * usedRecStorage  企业管理员查询所属企业的资源使用信息。
    * usedAccountsCount  当前已用的会议并发数量。
    * usedLiveCount  当前已用的直播推流资源。
    * confCount  当前已用的直播推流资源。
    * confLength  当日会议总时长。
    * activeAttendeeCount  当日活跃用户数。
    * totalAttendeeCount  当日总与会人数。
    *
    * @var string[]
    */
    protected static $setters = [
            'usedRecStorage' => 'setUsedRecStorage',
            'usedAccountsCount' => 'setUsedAccountsCount',
            'usedLiveCount' => 'setUsedLiveCount',
            'confCount' => 'setConfCount',
            'confLength' => 'setConfLength',
            'activeAttendeeCount' => 'setActiveAttendeeCount',
            'totalAttendeeCount' => 'setTotalAttendeeCount'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * usedRecStorage  企业管理员查询所属企业的资源使用信息。
    * usedAccountsCount  当前已用的会议并发数量。
    * usedLiveCount  当前已用的直播推流资源。
    * confCount  当前已用的直播推流资源。
    * confLength  当日会议总时长。
    * activeAttendeeCount  当日活跃用户数。
    * totalAttendeeCount  当日总与会人数。
    *
    * @var string[]
    */
    protected static $getters = [
            'usedRecStorage' => 'getUsedRecStorage',
            'usedAccountsCount' => 'getUsedAccountsCount',
            'usedLiveCount' => 'getUsedLiveCount',
            'confCount' => 'getConfCount',
            'confLength' => 'getConfLength',
            'activeAttendeeCount' => 'getActiveAttendeeCount',
            'totalAttendeeCount' => 'getTotalAttendeeCount'
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
        $this->container['usedRecStorage'] = isset($data['usedRecStorage']) ? $data['usedRecStorage'] : null;
        $this->container['usedAccountsCount'] = isset($data['usedAccountsCount']) ? $data['usedAccountsCount'] : null;
        $this->container['usedLiveCount'] = isset($data['usedLiveCount']) ? $data['usedLiveCount'] : null;
        $this->container['confCount'] = isset($data['confCount']) ? $data['confCount'] : null;
        $this->container['confLength'] = isset($data['confLength']) ? $data['confLength'] : null;
        $this->container['activeAttendeeCount'] = isset($data['activeAttendeeCount']) ? $data['activeAttendeeCount'] : null;
        $this->container['totalAttendeeCount'] = isset($data['totalAttendeeCount']) ? $data['totalAttendeeCount'] : null;
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
    * Gets usedRecStorage
    *  企业管理员查询所属企业的资源使用信息。
    *
    * @return double|null
    */
    public function getUsedRecStorage()
    {
        return $this->container['usedRecStorage'];
    }

    /**
    * Sets usedRecStorage
    *
    * @param double|null $usedRecStorage 企业管理员查询所属企业的资源使用信息。
    *
    * @return $this
    */
    public function setUsedRecStorage($usedRecStorage)
    {
        $this->container['usedRecStorage'] = $usedRecStorage;
        return $this;
    }

    /**
    * Gets usedAccountsCount
    *  当前已用的会议并发数量。
    *
    * @return int|null
    */
    public function getUsedAccountsCount()
    {
        return $this->container['usedAccountsCount'];
    }

    /**
    * Sets usedAccountsCount
    *
    * @param int|null $usedAccountsCount 当前已用的会议并发数量。
    *
    * @return $this
    */
    public function setUsedAccountsCount($usedAccountsCount)
    {
        $this->container['usedAccountsCount'] = $usedAccountsCount;
        return $this;
    }

    /**
    * Gets usedLiveCount
    *  当前已用的直播推流资源。
    *
    * @return int|null
    */
    public function getUsedLiveCount()
    {
        return $this->container['usedLiveCount'];
    }

    /**
    * Sets usedLiveCount
    *
    * @param int|null $usedLiveCount 当前已用的直播推流资源。
    *
    * @return $this
    */
    public function setUsedLiveCount($usedLiveCount)
    {
        $this->container['usedLiveCount'] = $usedLiveCount;
        return $this;
    }

    /**
    * Gets confCount
    *  当前已用的直播推流资源。
    *
    * @return int|null
    */
    public function getConfCount()
    {
        return $this->container['confCount'];
    }

    /**
    * Sets confCount
    *
    * @param int|null $confCount 当前已用的直播推流资源。
    *
    * @return $this
    */
    public function setConfCount($confCount)
    {
        $this->container['confCount'] = $confCount;
        return $this;
    }

    /**
    * Gets confLength
    *  当日会议总时长。
    *
    * @return int|null
    */
    public function getConfLength()
    {
        return $this->container['confLength'];
    }

    /**
    * Sets confLength
    *
    * @param int|null $confLength 当日会议总时长。
    *
    * @return $this
    */
    public function setConfLength($confLength)
    {
        $this->container['confLength'] = $confLength;
        return $this;
    }

    /**
    * Gets activeAttendeeCount
    *  当日活跃用户数。
    *
    * @return int|null
    */
    public function getActiveAttendeeCount()
    {
        return $this->container['activeAttendeeCount'];
    }

    /**
    * Sets activeAttendeeCount
    *
    * @param int|null $activeAttendeeCount 当日活跃用户数。
    *
    * @return $this
    */
    public function setActiveAttendeeCount($activeAttendeeCount)
    {
        $this->container['activeAttendeeCount'] = $activeAttendeeCount;
        return $this;
    }

    /**
    * Gets totalAttendeeCount
    *  当日总与会人数。
    *
    * @return int|null
    */
    public function getTotalAttendeeCount()
    {
        return $this->container['totalAttendeeCount'];
    }

    /**
    * Sets totalAttendeeCount
    *
    * @param int|null $totalAttendeeCount 当日总与会人数。
    *
    * @return $this
    */
    public function setTotalAttendeeCount($totalAttendeeCount)
    {
        $this->container['totalAttendeeCount'] = $totalAttendeeCount;
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

