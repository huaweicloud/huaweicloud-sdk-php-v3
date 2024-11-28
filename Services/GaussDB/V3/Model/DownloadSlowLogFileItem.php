<?php

namespace HuaweiCloud\SDK\GaussDB\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class DownloadSlowLogFileItem implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'DownloadSlowLogFileItem';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * jobId  任务ID。
    * fileName  文件名。
    * status  状态。  取值范围:   - SUCCESS：表示下载链接已经生成完成。   - EXPORTING：表示下载链接正在生成中。   - FAILED： 表示下载链接生成失败。
    * fileSize  文件大小，单位：KB。
    * fileLink  下载链接。链接有效时间为5分钟。
    * createAt  创建时间。
    * updatedAt  更新时间。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'jobId' => 'string',
            'fileName' => 'string',
            'status' => 'string',
            'fileSize' => 'string',
            'fileLink' => 'string',
            'createAt' => 'int',
            'updatedAt' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * jobId  任务ID。
    * fileName  文件名。
    * status  状态。  取值范围:   - SUCCESS：表示下载链接已经生成完成。   - EXPORTING：表示下载链接正在生成中。   - FAILED： 表示下载链接生成失败。
    * fileSize  文件大小，单位：KB。
    * fileLink  下载链接。链接有效时间为5分钟。
    * createAt  创建时间。
    * updatedAt  更新时间。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'jobId' => null,
        'fileName' => null,
        'status' => null,
        'fileSize' => null,
        'fileLink' => null,
        'createAt' => 'int64',
        'updatedAt' => 'int64'
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
    * jobId  任务ID。
    * fileName  文件名。
    * status  状态。  取值范围:   - SUCCESS：表示下载链接已经生成完成。   - EXPORTING：表示下载链接正在生成中。   - FAILED： 表示下载链接生成失败。
    * fileSize  文件大小，单位：KB。
    * fileLink  下载链接。链接有效时间为5分钟。
    * createAt  创建时间。
    * updatedAt  更新时间。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'jobId' => 'job_id',
            'fileName' => 'file_name',
            'status' => 'status',
            'fileSize' => 'file_size',
            'fileLink' => 'file_link',
            'createAt' => 'create_at',
            'updatedAt' => 'updated_at'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * jobId  任务ID。
    * fileName  文件名。
    * status  状态。  取值范围:   - SUCCESS：表示下载链接已经生成完成。   - EXPORTING：表示下载链接正在生成中。   - FAILED： 表示下载链接生成失败。
    * fileSize  文件大小，单位：KB。
    * fileLink  下载链接。链接有效时间为5分钟。
    * createAt  创建时间。
    * updatedAt  更新时间。
    *
    * @var string[]
    */
    protected static $setters = [
            'jobId' => 'setJobId',
            'fileName' => 'setFileName',
            'status' => 'setStatus',
            'fileSize' => 'setFileSize',
            'fileLink' => 'setFileLink',
            'createAt' => 'setCreateAt',
            'updatedAt' => 'setUpdatedAt'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * jobId  任务ID。
    * fileName  文件名。
    * status  状态。  取值范围:   - SUCCESS：表示下载链接已经生成完成。   - EXPORTING：表示下载链接正在生成中。   - FAILED： 表示下载链接生成失败。
    * fileSize  文件大小，单位：KB。
    * fileLink  下载链接。链接有效时间为5分钟。
    * createAt  创建时间。
    * updatedAt  更新时间。
    *
    * @var string[]
    */
    protected static $getters = [
            'jobId' => 'getJobId',
            'fileName' => 'getFileName',
            'status' => 'getStatus',
            'fileSize' => 'getFileSize',
            'fileLink' => 'getFileLink',
            'createAt' => 'getCreateAt',
            'updatedAt' => 'getUpdatedAt'
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
        $this->container['fileName'] = isset($data['fileName']) ? $data['fileName'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['fileSize'] = isset($data['fileSize']) ? $data['fileSize'] : null;
        $this->container['fileLink'] = isset($data['fileLink']) ? $data['fileLink'] : null;
        $this->container['createAt'] = isset($data['createAt']) ? $data['createAt'] : null;
        $this->container['updatedAt'] = isset($data['updatedAt']) ? $data['updatedAt'] : null;
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
    *  任务ID。
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
    * @param string|null $jobId 任务ID。
    *
    * @return $this
    */
    public function setJobId($jobId)
    {
        $this->container['jobId'] = $jobId;
        return $this;
    }

    /**
    * Gets fileName
    *  文件名。
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
    * @param string|null $fileName 文件名。
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
    *  状态。  取值范围:   - SUCCESS：表示下载链接已经生成完成。   - EXPORTING：表示下载链接正在生成中。   - FAILED： 表示下载链接生成失败。
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
    * @param string|null $status 状态。  取值范围:   - SUCCESS：表示下载链接已经生成完成。   - EXPORTING：表示下载链接正在生成中。   - FAILED： 表示下载链接生成失败。
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
    *  文件大小，单位：KB。
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
    * @param string|null $fileSize 文件大小，单位：KB。
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
    *  下载链接。链接有效时间为5分钟。
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
    * @param string|null $fileLink 下载链接。链接有效时间为5分钟。
    *
    * @return $this
    */
    public function setFileLink($fileLink)
    {
        $this->container['fileLink'] = $fileLink;
        return $this;
    }

    /**
    * Gets createAt
    *  创建时间。
    *
    * @return int|null
    */
    public function getCreateAt()
    {
        return $this->container['createAt'];
    }

    /**
    * Sets createAt
    *
    * @param int|null $createAt 创建时间。
    *
    * @return $this
    */
    public function setCreateAt($createAt)
    {
        $this->container['createAt'] = $createAt;
        return $this;
    }

    /**
    * Gets updatedAt
    *  更新时间。
    *
    * @return int|null
    */
    public function getUpdatedAt()
    {
        return $this->container['updatedAt'];
    }

    /**
    * Sets updatedAt
    *
    * @param int|null $updatedAt 更新时间。
    *
    * @return $this
    */
    public function setUpdatedAt($updatedAt)
    {
        $this->container['updatedAt'] = $updatedAt;
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

