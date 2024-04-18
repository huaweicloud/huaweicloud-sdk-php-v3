<?php

namespace HuaweiCloud\SDK\GaussDBforopenGauss\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class InstanceLogFile implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'InstanceLogFile';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * status  日志采集状态。
    * fileName  日志文件名称。
    * startTime  日志开始时间。
    * endTime  日志结束时间。
    * fileSize  日志文件大小，单位kb。
    * fileLink  日志文件下载链接。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'status' => 'string',
            'fileName' => 'string',
            'startTime' => 'string',
            'endTime' => 'string',
            'fileSize' => 'string',
            'fileLink' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * status  日志采集状态。
    * fileName  日志文件名称。
    * startTime  日志开始时间。
    * endTime  日志结束时间。
    * fileSize  日志文件大小，单位kb。
    * fileLink  日志文件下载链接。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'status' => null,
        'fileName' => null,
        'startTime' => null,
        'endTime' => null,
        'fileSize' => null,
        'fileLink' => null
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
    * status  日志采集状态。
    * fileName  日志文件名称。
    * startTime  日志开始时间。
    * endTime  日志结束时间。
    * fileSize  日志文件大小，单位kb。
    * fileLink  日志文件下载链接。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'status' => 'status',
            'fileName' => 'file_name',
            'startTime' => 'start_time',
            'endTime' => 'end_time',
            'fileSize' => 'file_size',
            'fileLink' => 'file_link'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * status  日志采集状态。
    * fileName  日志文件名称。
    * startTime  日志开始时间。
    * endTime  日志结束时间。
    * fileSize  日志文件大小，单位kb。
    * fileLink  日志文件下载链接。
    *
    * @var string[]
    */
    protected static $setters = [
            'status' => 'setStatus',
            'fileName' => 'setFileName',
            'startTime' => 'setStartTime',
            'endTime' => 'setEndTime',
            'fileSize' => 'setFileSize',
            'fileLink' => 'setFileLink'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * status  日志采集状态。
    * fileName  日志文件名称。
    * startTime  日志开始时间。
    * endTime  日志结束时间。
    * fileSize  日志文件大小，单位kb。
    * fileLink  日志文件下载链接。
    *
    * @var string[]
    */
    protected static $getters = [
            'status' => 'getStatus',
            'fileName' => 'getFileName',
            'startTime' => 'getStartTime',
            'endTime' => 'getEndTime',
            'fileSize' => 'getFileSize',
            'fileLink' => 'getFileLink'
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
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['fileName'] = isset($data['fileName']) ? $data['fileName'] : null;
        $this->container['startTime'] = isset($data['startTime']) ? $data['startTime'] : null;
        $this->container['endTime'] = isset($data['endTime']) ? $data['endTime'] : null;
        $this->container['fileSize'] = isset($data['fileSize']) ? $data['fileSize'] : null;
        $this->container['fileLink'] = isset($data['fileLink']) ? $data['fileLink'] : null;
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
    * Gets status
    *  日志采集状态。
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
    * @param string|null $status 日志采集状态。
    *
    * @return $this
    */
    public function setStatus($status)
    {
        $this->container['status'] = $status;
        return $this;
    }

    /**
    * Gets fileName
    *  日志文件名称。
    *
    * @return string|null
    */
    public function getFileName()
    {
        return $this->container['fileName'];
    }

    /**
    * Sets fileName
    *
    * @param string|null $fileName 日志文件名称。
    *
    * @return $this
    */
    public function setFileName($fileName)
    {
        $this->container['fileName'] = $fileName;
        return $this;
    }

    /**
    * Gets startTime
    *  日志开始时间。
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
    * @param string|null $startTime 日志开始时间。
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
    *  日志结束时间。
    *
    * @return string|null
    */
    public function getEndTime()
    {
        return $this->container['endTime'];
    }

    /**
    * Sets endTime
    *
    * @param string|null $endTime 日志结束时间。
    *
    * @return $this
    */
    public function setEndTime($endTime)
    {
        $this->container['endTime'] = $endTime;
        return $this;
    }

    /**
    * Gets fileSize
    *  日志文件大小，单位kb。
    *
    * @return string|null
    */
    public function getFileSize()
    {
        return $this->container['fileSize'];
    }

    /**
    * Sets fileSize
    *
    * @param string|null $fileSize 日志文件大小，单位kb。
    *
    * @return $this
    */
    public function setFileSize($fileSize)
    {
        $this->container['fileSize'] = $fileSize;
        return $this;
    }

    /**
    * Gets fileLink
    *  日志文件下载链接。
    *
    * @return string|null
    */
    public function getFileLink()
    {
        return $this->container['fileLink'];
    }

    /**
    * Sets fileLink
    *
    * @param string|null $fileLink 日志文件下载链接。
    *
    * @return $this
    */
    public function setFileLink($fileLink)
    {
        $this->container['fileLink'] = $fileLink;
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

