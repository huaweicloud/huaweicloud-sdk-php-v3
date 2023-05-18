<?php

namespace HuaweiCloud\SDK\Meeting\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class RecordResultDO implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'RecordResultDO';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * confUuid  会议UUID。
    * confId  会议ID。
    * url  录播观看地址。
    * rcdTime  录制时长（单位秒）。
    * rcdSize  录制文件大小（MB）。
    * subject  会议主题。
    * scheduserName  会议预订者名称。
    * startTime  会议开始时间。
    * isDecodeFinish  录制文件是否转码完成。
    * decodeEndTime  录制文件预计转码完成时间。
    * available  录播文件是否可观看。
    * recordAuthType  观看/下载录播的鉴权方式。 - 0: 可通过链接观看/下载 - 1: 企业用户可观看/下载 - 2: 与会者可观看/下载
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'confUuid' => 'string',
            'confId' => 'string',
            'url' => 'string[]',
            'rcdTime' => 'int',
            'rcdSize' => 'int',
            'subject' => 'string',
            'scheduserName' => 'string',
            'startTime' => 'string',
            'isDecodeFinish' => 'bool',
            'decodeEndTime' => 'int',
            'available' => 'bool',
            'recordAuthType' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * confUuid  会议UUID。
    * confId  会议ID。
    * url  录播观看地址。
    * rcdTime  录制时长（单位秒）。
    * rcdSize  录制文件大小（MB）。
    * subject  会议主题。
    * scheduserName  会议预订者名称。
    * startTime  会议开始时间。
    * isDecodeFinish  录制文件是否转码完成。
    * decodeEndTime  录制文件预计转码完成时间。
    * available  录播文件是否可观看。
    * recordAuthType  观看/下载录播的鉴权方式。 - 0: 可通过链接观看/下载 - 1: 企业用户可观看/下载 - 2: 与会者可观看/下载
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'confUuid' => null,
        'confId' => null,
        'url' => null,
        'rcdTime' => 'int32',
        'rcdSize' => 'int32',
        'subject' => null,
        'scheduserName' => null,
        'startTime' => null,
        'isDecodeFinish' => null,
        'decodeEndTime' => 'int64',
        'available' => null,
        'recordAuthType' => 'int32'
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
    * confUuid  会议UUID。
    * confId  会议ID。
    * url  录播观看地址。
    * rcdTime  录制时长（单位秒）。
    * rcdSize  录制文件大小（MB）。
    * subject  会议主题。
    * scheduserName  会议预订者名称。
    * startTime  会议开始时间。
    * isDecodeFinish  录制文件是否转码完成。
    * decodeEndTime  录制文件预计转码完成时间。
    * available  录播文件是否可观看。
    * recordAuthType  观看/下载录播的鉴权方式。 - 0: 可通过链接观看/下载 - 1: 企业用户可观看/下载 - 2: 与会者可观看/下载
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'confUuid' => 'confUUID',
            'confId' => 'confID',
            'url' => 'url',
            'rcdTime' => 'rcdTime',
            'rcdSize' => 'rcdSize',
            'subject' => 'subject',
            'scheduserName' => 'scheduserName',
            'startTime' => 'startTime',
            'isDecodeFinish' => 'isDecodeFinish',
            'decodeEndTime' => 'decodeEndTime',
            'available' => 'available',
            'recordAuthType' => 'recordAuthType'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * confUuid  会议UUID。
    * confId  会议ID。
    * url  录播观看地址。
    * rcdTime  录制时长（单位秒）。
    * rcdSize  录制文件大小（MB）。
    * subject  会议主题。
    * scheduserName  会议预订者名称。
    * startTime  会议开始时间。
    * isDecodeFinish  录制文件是否转码完成。
    * decodeEndTime  录制文件预计转码完成时间。
    * available  录播文件是否可观看。
    * recordAuthType  观看/下载录播的鉴权方式。 - 0: 可通过链接观看/下载 - 1: 企业用户可观看/下载 - 2: 与会者可观看/下载
    *
    * @var string[]
    */
    protected static $setters = [
            'confUuid' => 'setConfUuid',
            'confId' => 'setConfId',
            'url' => 'setUrl',
            'rcdTime' => 'setRcdTime',
            'rcdSize' => 'setRcdSize',
            'subject' => 'setSubject',
            'scheduserName' => 'setScheduserName',
            'startTime' => 'setStartTime',
            'isDecodeFinish' => 'setIsDecodeFinish',
            'decodeEndTime' => 'setDecodeEndTime',
            'available' => 'setAvailable',
            'recordAuthType' => 'setRecordAuthType'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * confUuid  会议UUID。
    * confId  会议ID。
    * url  录播观看地址。
    * rcdTime  录制时长（单位秒）。
    * rcdSize  录制文件大小（MB）。
    * subject  会议主题。
    * scheduserName  会议预订者名称。
    * startTime  会议开始时间。
    * isDecodeFinish  录制文件是否转码完成。
    * decodeEndTime  录制文件预计转码完成时间。
    * available  录播文件是否可观看。
    * recordAuthType  观看/下载录播的鉴权方式。 - 0: 可通过链接观看/下载 - 1: 企业用户可观看/下载 - 2: 与会者可观看/下载
    *
    * @var string[]
    */
    protected static $getters = [
            'confUuid' => 'getConfUuid',
            'confId' => 'getConfId',
            'url' => 'getUrl',
            'rcdTime' => 'getRcdTime',
            'rcdSize' => 'getRcdSize',
            'subject' => 'getSubject',
            'scheduserName' => 'getScheduserName',
            'startTime' => 'getStartTime',
            'isDecodeFinish' => 'getIsDecodeFinish',
            'decodeEndTime' => 'getDecodeEndTime',
            'available' => 'getAvailable',
            'recordAuthType' => 'getRecordAuthType'
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
        $this->container['confUuid'] = isset($data['confUuid']) ? $data['confUuid'] : null;
        $this->container['confId'] = isset($data['confId']) ? $data['confId'] : null;
        $this->container['url'] = isset($data['url']) ? $data['url'] : null;
        $this->container['rcdTime'] = isset($data['rcdTime']) ? $data['rcdTime'] : null;
        $this->container['rcdSize'] = isset($data['rcdSize']) ? $data['rcdSize'] : null;
        $this->container['subject'] = isset($data['subject']) ? $data['subject'] : null;
        $this->container['scheduserName'] = isset($data['scheduserName']) ? $data['scheduserName'] : null;
        $this->container['startTime'] = isset($data['startTime']) ? $data['startTime'] : null;
        $this->container['isDecodeFinish'] = isset($data['isDecodeFinish']) ? $data['isDecodeFinish'] : null;
        $this->container['decodeEndTime'] = isset($data['decodeEndTime']) ? $data['decodeEndTime'] : null;
        $this->container['available'] = isset($data['available']) ? $data['available'] : null;
        $this->container['recordAuthType'] = isset($data['recordAuthType']) ? $data['recordAuthType'] : null;
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
    * Gets confUuid
    *  会议UUID。
    *
    * @return string|null
    */
    public function getConfUuid()
    {
        return $this->container['confUuid'];
    }

    /**
    * Sets confUuid
    *
    * @param string|null $confUuid 会议UUID。
    *
    * @return $this
    */
    public function setConfUuid($confUuid)
    {
        $this->container['confUuid'] = $confUuid;
        return $this;
    }

    /**
    * Gets confId
    *  会议ID。
    *
    * @return string|null
    */
    public function getConfId()
    {
        return $this->container['confId'];
    }

    /**
    * Sets confId
    *
    * @param string|null $confId 会议ID。
    *
    * @return $this
    */
    public function setConfId($confId)
    {
        $this->container['confId'] = $confId;
        return $this;
    }

    /**
    * Gets url
    *  录播观看地址。
    *
    * @return string[]|null
    */
    public function getUrl()
    {
        return $this->container['url'];
    }

    /**
    * Sets url
    *
    * @param string[]|null $url 录播观看地址。
    *
    * @return $this
    */
    public function setUrl($url)
    {
        $this->container['url'] = $url;
        return $this;
    }

    /**
    * Gets rcdTime
    *  录制时长（单位秒）。
    *
    * @return int|null
    */
    public function getRcdTime()
    {
        return $this->container['rcdTime'];
    }

    /**
    * Sets rcdTime
    *
    * @param int|null $rcdTime 录制时长（单位秒）。
    *
    * @return $this
    */
    public function setRcdTime($rcdTime)
    {
        $this->container['rcdTime'] = $rcdTime;
        return $this;
    }

    /**
    * Gets rcdSize
    *  录制文件大小（MB）。
    *
    * @return int|null
    */
    public function getRcdSize()
    {
        return $this->container['rcdSize'];
    }

    /**
    * Sets rcdSize
    *
    * @param int|null $rcdSize 录制文件大小（MB）。
    *
    * @return $this
    */
    public function setRcdSize($rcdSize)
    {
        $this->container['rcdSize'] = $rcdSize;
        return $this;
    }

    /**
    * Gets subject
    *  会议主题。
    *
    * @return string|null
    */
    public function getSubject()
    {
        return $this->container['subject'];
    }

    /**
    * Sets subject
    *
    * @param string|null $subject 会议主题。
    *
    * @return $this
    */
    public function setSubject($subject)
    {
        $this->container['subject'] = $subject;
        return $this;
    }

    /**
    * Gets scheduserName
    *  会议预订者名称。
    *
    * @return string|null
    */
    public function getScheduserName()
    {
        return $this->container['scheduserName'];
    }

    /**
    * Sets scheduserName
    *
    * @param string|null $scheduserName 会议预订者名称。
    *
    * @return $this
    */
    public function setScheduserName($scheduserName)
    {
        $this->container['scheduserName'] = $scheduserName;
        return $this;
    }

    /**
    * Gets startTime
    *  会议开始时间。
    *
    * @return string|null
    */
    public function getStartTime()
    {
        return $this->container['startTime'];
    }

    /**
    * Sets startTime
    *
    * @param string|null $startTime 会议开始时间。
    *
    * @return $this
    */
    public function setStartTime($startTime)
    {
        $this->container['startTime'] = $startTime;
        return $this;
    }

    /**
    * Gets isDecodeFinish
    *  录制文件是否转码完成。
    *
    * @return bool|null
    */
    public function getIsDecodeFinish()
    {
        return $this->container['isDecodeFinish'];
    }

    /**
    * Sets isDecodeFinish
    *
    * @param bool|null $isDecodeFinish 录制文件是否转码完成。
    *
    * @return $this
    */
    public function setIsDecodeFinish($isDecodeFinish)
    {
        $this->container['isDecodeFinish'] = $isDecodeFinish;
        return $this;
    }

    /**
    * Gets decodeEndTime
    *  录制文件预计转码完成时间。
    *
    * @return int|null
    */
    public function getDecodeEndTime()
    {
        return $this->container['decodeEndTime'];
    }

    /**
    * Sets decodeEndTime
    *
    * @param int|null $decodeEndTime 录制文件预计转码完成时间。
    *
    * @return $this
    */
    public function setDecodeEndTime($decodeEndTime)
    {
        $this->container['decodeEndTime'] = $decodeEndTime;
        return $this;
    }

    /**
    * Gets available
    *  录播文件是否可观看。
    *
    * @return bool|null
    */
    public function getAvailable()
    {
        return $this->container['available'];
    }

    /**
    * Sets available
    *
    * @param bool|null $available 录播文件是否可观看。
    *
    * @return $this
    */
    public function setAvailable($available)
    {
        $this->container['available'] = $available;
        return $this;
    }

    /**
    * Gets recordAuthType
    *  观看/下载录播的鉴权方式。 - 0: 可通过链接观看/下载 - 1: 企业用户可观看/下载 - 2: 与会者可观看/下载
    *
    * @return int|null
    */
    public function getRecordAuthType()
    {
        return $this->container['recordAuthType'];
    }

    /**
    * Sets recordAuthType
    *
    * @param int|null $recordAuthType 观看/下载录播的鉴权方式。 - 0: 可通过链接观看/下载 - 1: 企业用户可观看/下载 - 2: 与会者可观看/下载
    *
    * @return $this
    */
    public function setRecordAuthType($recordAuthType)
    {
        $this->container['recordAuthType'] = $recordAuthType;
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

