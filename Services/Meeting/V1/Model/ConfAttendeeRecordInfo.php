<?php

namespace HuaweiCloud\SDK\Meeting\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ConfAttendeeRecordInfo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ConfAttendeeRecordInfo';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * displayName  与会者名称。
    * callNumber  号码。
    * deviceType  设备类型。
    * joinTime  入会时间（UTC时间，单位毫秒）。
    * leftTime  离会时间（UTC时间，单位毫秒）。
    * mediaType  媒体类型。
    * deptName  部门名称。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'displayName' => 'string',
            'callNumber' => 'string',
            'deviceType' => 'string',
            'joinTime' => 'int',
            'leftTime' => 'int',
            'mediaType' => 'string',
            'deptName' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * displayName  与会者名称。
    * callNumber  号码。
    * deviceType  设备类型。
    * joinTime  入会时间（UTC时间，单位毫秒）。
    * leftTime  离会时间（UTC时间，单位毫秒）。
    * mediaType  媒体类型。
    * deptName  部门名称。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'displayName' => null,
        'callNumber' => null,
        'deviceType' => null,
        'joinTime' => 'int64',
        'leftTime' => 'int64',
        'mediaType' => null,
        'deptName' => null
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
    * displayName  与会者名称。
    * callNumber  号码。
    * deviceType  设备类型。
    * joinTime  入会时间（UTC时间，单位毫秒）。
    * leftTime  离会时间（UTC时间，单位毫秒）。
    * mediaType  媒体类型。
    * deptName  部门名称。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'displayName' => 'displayName',
            'callNumber' => 'callNumber',
            'deviceType' => 'deviceType',
            'joinTime' => 'joinTime',
            'leftTime' => 'leftTime',
            'mediaType' => 'mediaType',
            'deptName' => 'deptName'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * displayName  与会者名称。
    * callNumber  号码。
    * deviceType  设备类型。
    * joinTime  入会时间（UTC时间，单位毫秒）。
    * leftTime  离会时间（UTC时间，单位毫秒）。
    * mediaType  媒体类型。
    * deptName  部门名称。
    *
    * @var string[]
    */
    protected static $setters = [
            'displayName' => 'setDisplayName',
            'callNumber' => 'setCallNumber',
            'deviceType' => 'setDeviceType',
            'joinTime' => 'setJoinTime',
            'leftTime' => 'setLeftTime',
            'mediaType' => 'setMediaType',
            'deptName' => 'setDeptName'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * displayName  与会者名称。
    * callNumber  号码。
    * deviceType  设备类型。
    * joinTime  入会时间（UTC时间，单位毫秒）。
    * leftTime  离会时间（UTC时间，单位毫秒）。
    * mediaType  媒体类型。
    * deptName  部门名称。
    *
    * @var string[]
    */
    protected static $getters = [
            'displayName' => 'getDisplayName',
            'callNumber' => 'getCallNumber',
            'deviceType' => 'getDeviceType',
            'joinTime' => 'getJoinTime',
            'leftTime' => 'getLeftTime',
            'mediaType' => 'getMediaType',
            'deptName' => 'getDeptName'
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
        $this->container['displayName'] = isset($data['displayName']) ? $data['displayName'] : null;
        $this->container['callNumber'] = isset($data['callNumber']) ? $data['callNumber'] : null;
        $this->container['deviceType'] = isset($data['deviceType']) ? $data['deviceType'] : null;
        $this->container['joinTime'] = isset($data['joinTime']) ? $data['joinTime'] : null;
        $this->container['leftTime'] = isset($data['leftTime']) ? $data['leftTime'] : null;
        $this->container['mediaType'] = isset($data['mediaType']) ? $data['mediaType'] : null;
        $this->container['deptName'] = isset($data['deptName']) ? $data['deptName'] : null;
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
    * Gets displayName
    *  与会者名称。
    *
    * @return string|null
    */
    public function getDisplayName()
    {
        return $this->container['displayName'];
    }

    /**
    * Sets displayName
    *
    * @param string|null $displayName 与会者名称。
    *
    * @return $this
    */
    public function setDisplayName($displayName)
    {
        $this->container['displayName'] = $displayName;
        return $this;
    }

    /**
    * Gets callNumber
    *  号码。
    *
    * @return string|null
    */
    public function getCallNumber()
    {
        return $this->container['callNumber'];
    }

    /**
    * Sets callNumber
    *
    * @param string|null $callNumber 号码。
    *
    * @return $this
    */
    public function setCallNumber($callNumber)
    {
        $this->container['callNumber'] = $callNumber;
        return $this;
    }

    /**
    * Gets deviceType
    *  设备类型。
    *
    * @return string|null
    */
    public function getDeviceType()
    {
        return $this->container['deviceType'];
    }

    /**
    * Sets deviceType
    *
    * @param string|null $deviceType 设备类型。
    *
    * @return $this
    */
    public function setDeviceType($deviceType)
    {
        $this->container['deviceType'] = $deviceType;
        return $this;
    }

    /**
    * Gets joinTime
    *  入会时间（UTC时间，单位毫秒）。
    *
    * @return int|null
    */
    public function getJoinTime()
    {
        return $this->container['joinTime'];
    }

    /**
    * Sets joinTime
    *
    * @param int|null $joinTime 入会时间（UTC时间，单位毫秒）。
    *
    * @return $this
    */
    public function setJoinTime($joinTime)
    {
        $this->container['joinTime'] = $joinTime;
        return $this;
    }

    /**
    * Gets leftTime
    *  离会时间（UTC时间，单位毫秒）。
    *
    * @return int|null
    */
    public function getLeftTime()
    {
        return $this->container['leftTime'];
    }

    /**
    * Sets leftTime
    *
    * @param int|null $leftTime 离会时间（UTC时间，单位毫秒）。
    *
    * @return $this
    */
    public function setLeftTime($leftTime)
    {
        $this->container['leftTime'] = $leftTime;
        return $this;
    }

    /**
    * Gets mediaType
    *  媒体类型。
    *
    * @return string|null
    */
    public function getMediaType()
    {
        return $this->container['mediaType'];
    }

    /**
    * Sets mediaType
    *
    * @param string|null $mediaType 媒体类型。
    *
    * @return $this
    */
    public function setMediaType($mediaType)
    {
        $this->container['mediaType'] = $mediaType;
        return $this;
    }

    /**
    * Gets deptName
    *  部门名称。
    *
    * @return string|null
    */
    public function getDeptName()
    {
        return $this->container['deptName'];
    }

    /**
    * Sets deptName
    *
    * @param string|null $deptName 部门名称。
    *
    * @return $this
    */
    public function setDeptName($deptName)
    {
        $this->container['deptName'] = $deptName;
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

