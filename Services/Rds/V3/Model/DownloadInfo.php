<?php

namespace HuaweiCloud\SDK\Rds\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class DownloadInfo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'DownloadInfo';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * workflowId  参数解释： 任务ID。 取值范围： 不涉及。
    * fileName  参数解释： 生成的下载文件名。 取值范围： 不涉及。
    * status  参数解释： 当前链接的生成状态。 取值范围： 不涉及。
    * fileSize  参数解释： 文件大小。单位Byte 取值范围： 不涉及。
    * fileLink  参数解释： 下载链接。 取值范围： 不涉及。
    * fileLinkExpirationTime  下载链接过期时间
    * startTime  参数解释： 开始时间。 格式为UTC时间戳。 取值范围： 不涉及。
    * endTime  参数解释： 结束时间。 格式为UTC时间戳。 取值范围： 不涉及。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'workflowId' => 'string',
            'fileName' => 'string',
            'status' => 'string',
            'fileSize' => 'string',
            'fileLink' => 'string',
            'fileLinkExpirationTime' => 'int',
            'startTime' => 'int',
            'endTime' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * workflowId  参数解释： 任务ID。 取值范围： 不涉及。
    * fileName  参数解释： 生成的下载文件名。 取值范围： 不涉及。
    * status  参数解释： 当前链接的生成状态。 取值范围： 不涉及。
    * fileSize  参数解释： 文件大小。单位Byte 取值范围： 不涉及。
    * fileLink  参数解释： 下载链接。 取值范围： 不涉及。
    * fileLinkExpirationTime  下载链接过期时间
    * startTime  参数解释： 开始时间。 格式为UTC时间戳。 取值范围： 不涉及。
    * endTime  参数解释： 结束时间。 格式为UTC时间戳。 取值范围： 不涉及。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'workflowId' => null,
        'fileName' => null,
        'status' => null,
        'fileSize' => null,
        'fileLink' => null,
        'fileLinkExpirationTime' => 'int64',
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
    * workflowId  参数解释： 任务ID。 取值范围： 不涉及。
    * fileName  参数解释： 生成的下载文件名。 取值范围： 不涉及。
    * status  参数解释： 当前链接的生成状态。 取值范围： 不涉及。
    * fileSize  参数解释： 文件大小。单位Byte 取值范围： 不涉及。
    * fileLink  参数解释： 下载链接。 取值范围： 不涉及。
    * fileLinkExpirationTime  下载链接过期时间
    * startTime  参数解释： 开始时间。 格式为UTC时间戳。 取值范围： 不涉及。
    * endTime  参数解释： 结束时间。 格式为UTC时间戳。 取值范围： 不涉及。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'workflowId' => 'workflow_id',
            'fileName' => 'file_name',
            'status' => 'status',
            'fileSize' => 'file_size',
            'fileLink' => 'file_link',
            'fileLinkExpirationTime' => 'file_link_expiration_time',
            'startTime' => 'start_time',
            'endTime' => 'end_time'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * workflowId  参数解释： 任务ID。 取值范围： 不涉及。
    * fileName  参数解释： 生成的下载文件名。 取值范围： 不涉及。
    * status  参数解释： 当前链接的生成状态。 取值范围： 不涉及。
    * fileSize  参数解释： 文件大小。单位Byte 取值范围： 不涉及。
    * fileLink  参数解释： 下载链接。 取值范围： 不涉及。
    * fileLinkExpirationTime  下载链接过期时间
    * startTime  参数解释： 开始时间。 格式为UTC时间戳。 取值范围： 不涉及。
    * endTime  参数解释： 结束时间。 格式为UTC时间戳。 取值范围： 不涉及。
    *
    * @var string[]
    */
    protected static $setters = [
            'workflowId' => 'setWorkflowId',
            'fileName' => 'setFileName',
            'status' => 'setStatus',
            'fileSize' => 'setFileSize',
            'fileLink' => 'setFileLink',
            'fileLinkExpirationTime' => 'setFileLinkExpirationTime',
            'startTime' => 'setStartTime',
            'endTime' => 'setEndTime'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * workflowId  参数解释： 任务ID。 取值范围： 不涉及。
    * fileName  参数解释： 生成的下载文件名。 取值范围： 不涉及。
    * status  参数解释： 当前链接的生成状态。 取值范围： 不涉及。
    * fileSize  参数解释： 文件大小。单位Byte 取值范围： 不涉及。
    * fileLink  参数解释： 下载链接。 取值范围： 不涉及。
    * fileLinkExpirationTime  下载链接过期时间
    * startTime  参数解释： 开始时间。 格式为UTC时间戳。 取值范围： 不涉及。
    * endTime  参数解释： 结束时间。 格式为UTC时间戳。 取值范围： 不涉及。
    *
    * @var string[]
    */
    protected static $getters = [
            'workflowId' => 'getWorkflowId',
            'fileName' => 'getFileName',
            'status' => 'getStatus',
            'fileSize' => 'getFileSize',
            'fileLink' => 'getFileLink',
            'fileLinkExpirationTime' => 'getFileLinkExpirationTime',
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
        $this->container['workflowId'] = isset($data['workflowId']) ? $data['workflowId'] : null;
        $this->container['fileName'] = isset($data['fileName']) ? $data['fileName'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['fileSize'] = isset($data['fileSize']) ? $data['fileSize'] : null;
        $this->container['fileLink'] = isset($data['fileLink']) ? $data['fileLink'] : null;
        $this->container['fileLinkExpirationTime'] = isset($data['fileLinkExpirationTime']) ? $data['fileLinkExpirationTime'] : null;
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
    * Gets workflowId
    *  参数解释： 任务ID。 取值范围： 不涉及。
    *
    * @return string|null
    */
    public function getWorkflowId()
    {
        return $this->container['workflowId'];
    }

    /**
    * Sets workflowId
    *
    * @param string|null $workflowId 参数解释： 任务ID。 取值范围： 不涉及。
    *
    * @return $this
    */
    public function setWorkflowId($workflowId)
    {
        $this->container['workflowId'] = $workflowId;
        return $this;
    }

    /**
    * Gets fileName
    *  参数解释： 生成的下载文件名。 取值范围： 不涉及。
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
    * @param string|null $fileName 参数解释： 生成的下载文件名。 取值范围： 不涉及。
    *
    * @return $this
    */
    public function setFileName($fileName)
    {
        $this->container['fileName'] = $fileName;
        return $this;
    }

    /**
    * Gets status
    *  参数解释： 当前链接的生成状态。 取值范围： 不涉及。
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
    * @param string|null $status 参数解释： 当前链接的生成状态。 取值范围： 不涉及。
    *
    * @return $this
    */
    public function setStatus($status)
    {
        $this->container['status'] = $status;
        return $this;
    }

    /**
    * Gets fileSize
    *  参数解释： 文件大小。单位Byte 取值范围： 不涉及。
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
    * @param string|null $fileSize 参数解释： 文件大小。单位Byte 取值范围： 不涉及。
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
    *  参数解释： 下载链接。 取值范围： 不涉及。
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
    * @param string|null $fileLink 参数解释： 下载链接。 取值范围： 不涉及。
    *
    * @return $this
    */
    public function setFileLink($fileLink)
    {
        $this->container['fileLink'] = $fileLink;
        return $this;
    }

    /**
    * Gets fileLinkExpirationTime
    *  下载链接过期时间
    *
    * @return int|null
    */
    public function getFileLinkExpirationTime()
    {
        return $this->container['fileLinkExpirationTime'];
    }

    /**
    * Sets fileLinkExpirationTime
    *
    * @param int|null $fileLinkExpirationTime 下载链接过期时间
    *
    * @return $this
    */
    public function setFileLinkExpirationTime($fileLinkExpirationTime)
    {
        $this->container['fileLinkExpirationTime'] = $fileLinkExpirationTime;
        return $this;
    }

    /**
    * Gets startTime
    *  参数解释： 开始时间。 格式为UTC时间戳。 取值范围： 不涉及。
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
    * @param int|null $startTime 参数解释： 开始时间。 格式为UTC时间戳。 取值范围： 不涉及。
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
    *  参数解释： 结束时间。 格式为UTC时间戳。 取值范围： 不涉及。
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
    * @param int|null $endTime 参数解释： 结束时间。 格式为UTC时间戳。 取值范围： 不涉及。
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

