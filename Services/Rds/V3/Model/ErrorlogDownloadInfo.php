<?php

namespace HuaweiCloud\SDK\Rds\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ErrorlogDownloadInfo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ErrorlogDownloadInfo';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * workflowId  任务ID
    * fileName  生成的下载文件名
    * status  生成链接的生成状态
    * fileSize  文件大小
    * fileLink  下载链接
    * createAt  生成时间
    * updateAt  更新时间
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'workflowId' => 'string',
            'fileName' => 'string',
            'status' => 'string',
            'fileSize' => 'string',
            'fileLink' => 'string',
            'createAt' => 'int',
            'updateAt' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * workflowId  任务ID
    * fileName  生成的下载文件名
    * status  生成链接的生成状态
    * fileSize  文件大小
    * fileLink  下载链接
    * createAt  生成时间
    * updateAt  更新时间
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'workflowId' => null,
        'fileName' => null,
        'status' => null,
        'fileSize' => null,
        'fileLink' => null,
        'createAt' => 'int64',
        'updateAt' => 'int64'
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
    * workflowId  任务ID
    * fileName  生成的下载文件名
    * status  生成链接的生成状态
    * fileSize  文件大小
    * fileLink  下载链接
    * createAt  生成时间
    * updateAt  更新时间
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'workflowId' => 'workflow_id',
            'fileName' => 'file_name',
            'status' => 'status',
            'fileSize' => 'file_size',
            'fileLink' => 'file_link',
            'createAt' => 'create_at',
            'updateAt' => 'update_at'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * workflowId  任务ID
    * fileName  生成的下载文件名
    * status  生成链接的生成状态
    * fileSize  文件大小
    * fileLink  下载链接
    * createAt  生成时间
    * updateAt  更新时间
    *
    * @var string[]
    */
    protected static $setters = [
            'workflowId' => 'setWorkflowId',
            'fileName' => 'setFileName',
            'status' => 'setStatus',
            'fileSize' => 'setFileSize',
            'fileLink' => 'setFileLink',
            'createAt' => 'setCreateAt',
            'updateAt' => 'setUpdateAt'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * workflowId  任务ID
    * fileName  生成的下载文件名
    * status  生成链接的生成状态
    * fileSize  文件大小
    * fileLink  下载链接
    * createAt  生成时间
    * updateAt  更新时间
    *
    * @var string[]
    */
    protected static $getters = [
            'workflowId' => 'getWorkflowId',
            'fileName' => 'getFileName',
            'status' => 'getStatus',
            'fileSize' => 'getFileSize',
            'fileLink' => 'getFileLink',
            'createAt' => 'getCreateAt',
            'updateAt' => 'getUpdateAt'
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
        $this->container['createAt'] = isset($data['createAt']) ? $data['createAt'] : null;
        $this->container['updateAt'] = isset($data['updateAt']) ? $data['updateAt'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['workflowId'] === null) {
            $invalidProperties[] = "'workflowId' can't be null";
        }
        if ($this->container['fileName'] === null) {
            $invalidProperties[] = "'fileName' can't be null";
        }
        if ($this->container['status'] === null) {
            $invalidProperties[] = "'status' can't be null";
        }
        if ($this->container['fileSize'] === null) {
            $invalidProperties[] = "'fileSize' can't be null";
        }
        if ($this->container['fileLink'] === null) {
            $invalidProperties[] = "'fileLink' can't be null";
        }
        if ($this->container['createAt'] === null) {
            $invalidProperties[] = "'createAt' can't be null";
        }
        if ($this->container['updateAt'] === null) {
            $invalidProperties[] = "'updateAt' can't be null";
        }
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
    *  任务ID
    *
    * @return string
    */
    public function getWorkflowId()
    {
        return $this->container['workflowId'];
    }

    /**
    * Sets workflowId
    *
    * @param string $workflowId 任务ID
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
    *  生成的下载文件名
    *
    * @return string
    */
    public function getFileName()
    {
        return $this->container['fileName'];
    }

    /**
    * Sets fileName
    *
    * @param string $fileName 生成的下载文件名
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
    *  生成链接的生成状态
    *
    * @return string
    */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
    * Sets status
    *
    * @param string $status 生成链接的生成状态
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
    *  文件大小
    *
    * @return string
    */
    public function getFileSize()
    {
        return $this->container['fileSize'];
    }

    /**
    * Sets fileSize
    *
    * @param string $fileSize 文件大小
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
    *  下载链接
    *
    * @return string
    */
    public function getFileLink()
    {
        return $this->container['fileLink'];
    }

    /**
    * Sets fileLink
    *
    * @param string $fileLink 下载链接
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
    *  生成时间
    *
    * @return int
    */
    public function getCreateAt()
    {
        return $this->container['createAt'];
    }

    /**
    * Sets createAt
    *
    * @param int $createAt 生成时间
    *
    * @return $this
    */
    public function setCreateAt($createAt)
    {
        $this->container['createAt'] = $createAt;
        return $this;
    }

    /**
    * Gets updateAt
    *  更新时间
    *
    * @return int
    */
    public function getUpdateAt()
    {
        return $this->container['updateAt'];
    }

    /**
    * Sets updateAt
    *
    * @param int $updateAt 更新时间
    *
    * @return $this
    */
    public function setUpdateAt($updateAt)
    {
        $this->container['updateAt'] = $updateAt;
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

