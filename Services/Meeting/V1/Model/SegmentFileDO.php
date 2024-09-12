<?php

namespace HuaweiCloud\SDK\Meeting\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class SegmentFileDO implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'SegmentFileDO';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * recordType  会议录制类型，取值范围见数据结构RecordType：AUDIO 纯音频录制，SPEAKER_VIDEO 演讲者视图，SHARE_VIDEO共享屏幕，SPEAKER_SHARE_VIDEO 含演讲者视图的共享屏幕
    * beginTime  录制文件开始时间
    * endTime  录制文件结束时间
    * duration  录制文件时长(秒)
    * fileSize  文件大小(字节数)
    * sha256  文件hash校验码(SHA256)，64个字符
    * playUrl  录制文件播放地址，有效期1小时
    * downloadUrl  录制文件下载地址，有效期1小时
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'recordType' => 'string',
            'beginTime' => 'int',
            'endTime' => 'int',
            'duration' => 'int',
            'fileSize' => 'int',
            'sha256' => 'string',
            'playUrl' => 'string',
            'downloadUrl' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * recordType  会议录制类型，取值范围见数据结构RecordType：AUDIO 纯音频录制，SPEAKER_VIDEO 演讲者视图，SHARE_VIDEO共享屏幕，SPEAKER_SHARE_VIDEO 含演讲者视图的共享屏幕
    * beginTime  录制文件开始时间
    * endTime  录制文件结束时间
    * duration  录制文件时长(秒)
    * fileSize  文件大小(字节数)
    * sha256  文件hash校验码(SHA256)，64个字符
    * playUrl  录制文件播放地址，有效期1小时
    * downloadUrl  录制文件下载地址，有效期1小时
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'recordType' => null,
        'beginTime' => null,
        'endTime' => null,
        'duration' => null,
        'fileSize' => null,
        'sha256' => null,
        'playUrl' => null,
        'downloadUrl' => null
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
    * recordType  会议录制类型，取值范围见数据结构RecordType：AUDIO 纯音频录制，SPEAKER_VIDEO 演讲者视图，SHARE_VIDEO共享屏幕，SPEAKER_SHARE_VIDEO 含演讲者视图的共享屏幕
    * beginTime  录制文件开始时间
    * endTime  录制文件结束时间
    * duration  录制文件时长(秒)
    * fileSize  文件大小(字节数)
    * sha256  文件hash校验码(SHA256)，64个字符
    * playUrl  录制文件播放地址，有效期1小时
    * downloadUrl  录制文件下载地址，有效期1小时
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'recordType' => 'recordType',
            'beginTime' => 'beginTime',
            'endTime' => 'endTime',
            'duration' => 'duration',
            'fileSize' => 'fileSize',
            'sha256' => 'sha256',
            'playUrl' => 'playUrl',
            'downloadUrl' => 'downloadUrl'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * recordType  会议录制类型，取值范围见数据结构RecordType：AUDIO 纯音频录制，SPEAKER_VIDEO 演讲者视图，SHARE_VIDEO共享屏幕，SPEAKER_SHARE_VIDEO 含演讲者视图的共享屏幕
    * beginTime  录制文件开始时间
    * endTime  录制文件结束时间
    * duration  录制文件时长(秒)
    * fileSize  文件大小(字节数)
    * sha256  文件hash校验码(SHA256)，64个字符
    * playUrl  录制文件播放地址，有效期1小时
    * downloadUrl  录制文件下载地址，有效期1小时
    *
    * @var string[]
    */
    protected static $setters = [
            'recordType' => 'setRecordType',
            'beginTime' => 'setBeginTime',
            'endTime' => 'setEndTime',
            'duration' => 'setDuration',
            'fileSize' => 'setFileSize',
            'sha256' => 'setSha256',
            'playUrl' => 'setPlayUrl',
            'downloadUrl' => 'setDownloadUrl'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * recordType  会议录制类型，取值范围见数据结构RecordType：AUDIO 纯音频录制，SPEAKER_VIDEO 演讲者视图，SHARE_VIDEO共享屏幕，SPEAKER_SHARE_VIDEO 含演讲者视图的共享屏幕
    * beginTime  录制文件开始时间
    * endTime  录制文件结束时间
    * duration  录制文件时长(秒)
    * fileSize  文件大小(字节数)
    * sha256  文件hash校验码(SHA256)，64个字符
    * playUrl  录制文件播放地址，有效期1小时
    * downloadUrl  录制文件下载地址，有效期1小时
    *
    * @var string[]
    */
    protected static $getters = [
            'recordType' => 'getRecordType',
            'beginTime' => 'getBeginTime',
            'endTime' => 'getEndTime',
            'duration' => 'getDuration',
            'fileSize' => 'getFileSize',
            'sha256' => 'getSha256',
            'playUrl' => 'getPlayUrl',
            'downloadUrl' => 'getDownloadUrl'
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
        $this->container['recordType'] = isset($data['recordType']) ? $data['recordType'] : null;
        $this->container['beginTime'] = isset($data['beginTime']) ? $data['beginTime'] : null;
        $this->container['endTime'] = isset($data['endTime']) ? $data['endTime'] : null;
        $this->container['duration'] = isset($data['duration']) ? $data['duration'] : null;
        $this->container['fileSize'] = isset($data['fileSize']) ? $data['fileSize'] : null;
        $this->container['sha256'] = isset($data['sha256']) ? $data['sha256'] : null;
        $this->container['playUrl'] = isset($data['playUrl']) ? $data['playUrl'] : null;
        $this->container['downloadUrl'] = isset($data['downloadUrl']) ? $data['downloadUrl'] : null;
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
    * Gets recordType
    *  会议录制类型，取值范围见数据结构RecordType：AUDIO 纯音频录制，SPEAKER_VIDEO 演讲者视图，SHARE_VIDEO共享屏幕，SPEAKER_SHARE_VIDEO 含演讲者视图的共享屏幕
    *
    * @return string|null
    */
    public function getRecordType()
    {
        return $this->container['recordType'];
    }

    /**
    * Sets recordType
    *
    * @param string|null $recordType 会议录制类型，取值范围见数据结构RecordType：AUDIO 纯音频录制，SPEAKER_VIDEO 演讲者视图，SHARE_VIDEO共享屏幕，SPEAKER_SHARE_VIDEO 含演讲者视图的共享屏幕
    *
    * @return $this
    */
    public function setRecordType($recordType)
    {
        $this->container['recordType'] = $recordType;
        return $this;
    }

    /**
    * Gets beginTime
    *  录制文件开始时间
    *
    * @return int|null
    */
    public function getBeginTime()
    {
        return $this->container['beginTime'];
    }

    /**
    * Sets beginTime
    *
    * @param int|null $beginTime 录制文件开始时间
    *
    * @return $this
    */
    public function setBeginTime($beginTime)
    {
        $this->container['beginTime'] = $beginTime;
        return $this;
    }

    /**
    * Gets endTime
    *  录制文件结束时间
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
    * @param int|null $endTime 录制文件结束时间
    *
    * @return $this
    */
    public function setEndTime($endTime)
    {
        $this->container['endTime'] = $endTime;
        return $this;
    }

    /**
    * Gets duration
    *  录制文件时长(秒)
    *
    * @return int|null
    */
    public function getDuration()
    {
        return $this->container['duration'];
    }

    /**
    * Sets duration
    *
    * @param int|null $duration 录制文件时长(秒)
    *
    * @return $this
    */
    public function setDuration($duration)
    {
        $this->container['duration'] = $duration;
        return $this;
    }

    /**
    * Gets fileSize
    *  文件大小(字节数)
    *
    * @return int|null
    */
    public function getFileSize()
    {
        return $this->container['fileSize'];
    }

    /**
    * Sets fileSize
    *
    * @param int|null $fileSize 文件大小(字节数)
    *
    * @return $this
    */
    public function setFileSize($fileSize)
    {
        $this->container['fileSize'] = $fileSize;
        return $this;
    }

    /**
    * Gets sha256
    *  文件hash校验码(SHA256)，64个字符
    *
    * @return string|null
    */
    public function getSha256()
    {
        return $this->container['sha256'];
    }

    /**
    * Sets sha256
    *
    * @param string|null $sha256 文件hash校验码(SHA256)，64个字符
    *
    * @return $this
    */
    public function setSha256($sha256)
    {
        $this->container['sha256'] = $sha256;
        return $this;
    }

    /**
    * Gets playUrl
    *  录制文件播放地址，有效期1小时
    *
    * @return string|null
    */
    public function getPlayUrl()
    {
        return $this->container['playUrl'];
    }

    /**
    * Sets playUrl
    *
    * @param string|null $playUrl 录制文件播放地址，有效期1小时
    *
    * @return $this
    */
    public function setPlayUrl($playUrl)
    {
        $this->container['playUrl'] = $playUrl;
        return $this;
    }

    /**
    * Gets downloadUrl
    *  录制文件下载地址，有效期1小时
    *
    * @return string|null
    */
    public function getDownloadUrl()
    {
        return $this->container['downloadUrl'];
    }

    /**
    * Sets downloadUrl
    *
    * @param string|null $downloadUrl 录制文件下载地址，有效期1小时
    *
    * @return $this
    */
    public function setDownloadUrl($downloadUrl)
    {
        $this->container['downloadUrl'] = $downloadUrl;
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

