<?php

namespace HuaweiCloud\SDK\MetaStudio\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class CreateDocumentResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'CreateDocumentResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * documentId  文档ID。
    * knowledgeLibraryId  知识库ID。
    * fileName  文档名称。
    * fileSize  文档大小，单位字节
    * fileType  文档类型。
    * splitType  分段类型 * 1: 自动分段 * 2: 手动分段
    * chunkSize  分段长度。
    * chunkType  分段策略，多个策略之间用逗号分割。 > title:标题分割；separator:分隔符分割
    * separators  分隔符
    * createTime  文档创建时间。格式遵循：RFC 3339 如\"2021-01-10T08:43:17Z\"。
    * updateTime  文档更新时间。格式遵循：RFC 3339 如\"2021-01-10T08:43:17Z\"。
    * documentTaskInfo  documentTaskInfo
    * xRequestId  xRequestId
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'documentId' => 'string',
            'knowledgeLibraryId' => 'string',
            'fileName' => 'string',
            'fileSize' => 'int',
            'fileType' => 'string',
            'splitType' => 'int',
            'chunkSize' => 'int',
            'chunkType' => 'string',
            'separators' => 'string[]',
            'createTime' => 'string',
            'updateTime' => 'string',
            'documentTaskInfo' => '\HuaweiCloud\SDK\MetaStudio\V1\Model\DocumentTaskInfo',
            'xRequestId' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * documentId  文档ID。
    * knowledgeLibraryId  知识库ID。
    * fileName  文档名称。
    * fileSize  文档大小，单位字节
    * fileType  文档类型。
    * splitType  分段类型 * 1: 自动分段 * 2: 手动分段
    * chunkSize  分段长度。
    * chunkType  分段策略，多个策略之间用逗号分割。 > title:标题分割；separator:分隔符分割
    * separators  分隔符
    * createTime  文档创建时间。格式遵循：RFC 3339 如\"2021-01-10T08:43:17Z\"。
    * updateTime  文档更新时间。格式遵循：RFC 3339 如\"2021-01-10T08:43:17Z\"。
    * documentTaskInfo  documentTaskInfo
    * xRequestId  xRequestId
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'documentId' => null,
        'knowledgeLibraryId' => null,
        'fileName' => null,
        'fileSize' => 'int64',
        'fileType' => null,
        'splitType' => null,
        'chunkSize' => null,
        'chunkType' => null,
        'separators' => null,
        'createTime' => null,
        'updateTime' => null,
        'documentTaskInfo' => null,
        'xRequestId' => null
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
    * documentId  文档ID。
    * knowledgeLibraryId  知识库ID。
    * fileName  文档名称。
    * fileSize  文档大小，单位字节
    * fileType  文档类型。
    * splitType  分段类型 * 1: 自动分段 * 2: 手动分段
    * chunkSize  分段长度。
    * chunkType  分段策略，多个策略之间用逗号分割。 > title:标题分割；separator:分隔符分割
    * separators  分隔符
    * createTime  文档创建时间。格式遵循：RFC 3339 如\"2021-01-10T08:43:17Z\"。
    * updateTime  文档更新时间。格式遵循：RFC 3339 如\"2021-01-10T08:43:17Z\"。
    * documentTaskInfo  documentTaskInfo
    * xRequestId  xRequestId
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'documentId' => 'document_id',
            'knowledgeLibraryId' => 'knowledge_library_id',
            'fileName' => 'file_name',
            'fileSize' => 'file_size',
            'fileType' => 'file_type',
            'splitType' => 'split_type',
            'chunkSize' => 'chunk_size',
            'chunkType' => 'chunk_type',
            'separators' => 'separators',
            'createTime' => 'create_time',
            'updateTime' => 'update_time',
            'documentTaskInfo' => 'document_task_info',
            'xRequestId' => 'X-Request-Id'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * documentId  文档ID。
    * knowledgeLibraryId  知识库ID。
    * fileName  文档名称。
    * fileSize  文档大小，单位字节
    * fileType  文档类型。
    * splitType  分段类型 * 1: 自动分段 * 2: 手动分段
    * chunkSize  分段长度。
    * chunkType  分段策略，多个策略之间用逗号分割。 > title:标题分割；separator:分隔符分割
    * separators  分隔符
    * createTime  文档创建时间。格式遵循：RFC 3339 如\"2021-01-10T08:43:17Z\"。
    * updateTime  文档更新时间。格式遵循：RFC 3339 如\"2021-01-10T08:43:17Z\"。
    * documentTaskInfo  documentTaskInfo
    * xRequestId  xRequestId
    *
    * @var string[]
    */
    protected static $setters = [
            'documentId' => 'setDocumentId',
            'knowledgeLibraryId' => 'setKnowledgeLibraryId',
            'fileName' => 'setFileName',
            'fileSize' => 'setFileSize',
            'fileType' => 'setFileType',
            'splitType' => 'setSplitType',
            'chunkSize' => 'setChunkSize',
            'chunkType' => 'setChunkType',
            'separators' => 'setSeparators',
            'createTime' => 'setCreateTime',
            'updateTime' => 'setUpdateTime',
            'documentTaskInfo' => 'setDocumentTaskInfo',
            'xRequestId' => 'setXRequestId'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * documentId  文档ID。
    * knowledgeLibraryId  知识库ID。
    * fileName  文档名称。
    * fileSize  文档大小，单位字节
    * fileType  文档类型。
    * splitType  分段类型 * 1: 自动分段 * 2: 手动分段
    * chunkSize  分段长度。
    * chunkType  分段策略，多个策略之间用逗号分割。 > title:标题分割；separator:分隔符分割
    * separators  分隔符
    * createTime  文档创建时间。格式遵循：RFC 3339 如\"2021-01-10T08:43:17Z\"。
    * updateTime  文档更新时间。格式遵循：RFC 3339 如\"2021-01-10T08:43:17Z\"。
    * documentTaskInfo  documentTaskInfo
    * xRequestId  xRequestId
    *
    * @var string[]
    */
    protected static $getters = [
            'documentId' => 'getDocumentId',
            'knowledgeLibraryId' => 'getKnowledgeLibraryId',
            'fileName' => 'getFileName',
            'fileSize' => 'getFileSize',
            'fileType' => 'getFileType',
            'splitType' => 'getSplitType',
            'chunkSize' => 'getChunkSize',
            'chunkType' => 'getChunkType',
            'separators' => 'getSeparators',
            'createTime' => 'getCreateTime',
            'updateTime' => 'getUpdateTime',
            'documentTaskInfo' => 'getDocumentTaskInfo',
            'xRequestId' => 'getXRequestId'
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
        $this->container['documentId'] = isset($data['documentId']) ? $data['documentId'] : null;
        $this->container['knowledgeLibraryId'] = isset($data['knowledgeLibraryId']) ? $data['knowledgeLibraryId'] : null;
        $this->container['fileName'] = isset($data['fileName']) ? $data['fileName'] : null;
        $this->container['fileSize'] = isset($data['fileSize']) ? $data['fileSize'] : null;
        $this->container['fileType'] = isset($data['fileType']) ? $data['fileType'] : null;
        $this->container['splitType'] = isset($data['splitType']) ? $data['splitType'] : null;
        $this->container['chunkSize'] = isset($data['chunkSize']) ? $data['chunkSize'] : null;
        $this->container['chunkType'] = isset($data['chunkType']) ? $data['chunkType'] : null;
        $this->container['separators'] = isset($data['separators']) ? $data['separators'] : null;
        $this->container['createTime'] = isset($data['createTime']) ? $data['createTime'] : null;
        $this->container['updateTime'] = isset($data['updateTime']) ? $data['updateTime'] : null;
        $this->container['documentTaskInfo'] = isset($data['documentTaskInfo']) ? $data['documentTaskInfo'] : null;
        $this->container['xRequestId'] = isset($data['xRequestId']) ? $data['xRequestId'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['documentId']) && (mb_strlen($this->container['documentId']) > 64)) {
                $invalidProperties[] = "invalid value for 'documentId', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['documentId']) && (mb_strlen($this->container['documentId']) < 1)) {
                $invalidProperties[] = "invalid value for 'documentId', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['knowledgeLibraryId']) && (mb_strlen($this->container['knowledgeLibraryId']) > 64)) {
                $invalidProperties[] = "invalid value for 'knowledgeLibraryId', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['knowledgeLibraryId']) && (mb_strlen($this->container['knowledgeLibraryId']) < 1)) {
                $invalidProperties[] = "invalid value for 'knowledgeLibraryId', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['fileName']) && (mb_strlen($this->container['fileName']) > 128)) {
                $invalidProperties[] = "invalid value for 'fileName', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['fileName']) && (mb_strlen($this->container['fileName']) < 1)) {
                $invalidProperties[] = "invalid value for 'fileName', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['fileSize']) && ($this->container['fileSize'] > 1048576000)) {
                $invalidProperties[] = "invalid value for 'fileSize', must be smaller than or equal to 1048576000.";
            }
            if (!is_null($this->container['fileSize']) && ($this->container['fileSize'] < 0)) {
                $invalidProperties[] = "invalid value for 'fileSize', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['fileType']) && (mb_strlen($this->container['fileType']) > 64)) {
                $invalidProperties[] = "invalid value for 'fileType', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['fileType']) && (mb_strlen($this->container['fileType']) < 1)) {
                $invalidProperties[] = "invalid value for 'fileType', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['splitType']) && ($this->container['splitType'] > 64)) {
                $invalidProperties[] = "invalid value for 'splitType', must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['splitType']) && ($this->container['splitType'] < 1)) {
                $invalidProperties[] = "invalid value for 'splitType', must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['chunkSize']) && ($this->container['chunkSize'] > 512)) {
                $invalidProperties[] = "invalid value for 'chunkSize', must be smaller than or equal to 512.";
            }
            if (!is_null($this->container['chunkSize']) && ($this->container['chunkSize'] < 1)) {
                $invalidProperties[] = "invalid value for 'chunkSize', must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['chunkType']) && (mb_strlen($this->container['chunkType']) > 256)) {
                $invalidProperties[] = "invalid value for 'chunkType', the character length must be smaller than or equal to 256.";
            }
            if (!is_null($this->container['chunkType']) && (mb_strlen($this->container['chunkType']) < 1)) {
                $invalidProperties[] = "invalid value for 'chunkType', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['createTime']) && (mb_strlen($this->container['createTime']) > 20)) {
                $invalidProperties[] = "invalid value for 'createTime', the character length must be smaller than or equal to 20.";
            }
            if (!is_null($this->container['createTime']) && (mb_strlen($this->container['createTime']) < 20)) {
                $invalidProperties[] = "invalid value for 'createTime', the character length must be bigger than or equal to 20.";
            }
            if (!is_null($this->container['updateTime']) && (mb_strlen($this->container['updateTime']) > 20)) {
                $invalidProperties[] = "invalid value for 'updateTime', the character length must be smaller than or equal to 20.";
            }
            if (!is_null($this->container['updateTime']) && (mb_strlen($this->container['updateTime']) < 20)) {
                $invalidProperties[] = "invalid value for 'updateTime', the character length must be bigger than or equal to 20.";
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
    * Gets documentId
    *  文档ID。
    *
    * @return string|null
    */
    public function getDocumentId()
    {
        return $this->container['documentId'];
    }

    /**
    * Sets documentId
    *
    * @param string|null $documentId 文档ID。
    *
    * @return $this
    */
    public function setDocumentId($documentId)
    {
        $this->container['documentId'] = $documentId;
        return $this;
    }

    /**
    * Gets knowledgeLibraryId
    *  知识库ID。
    *
    * @return string|null
    */
    public function getKnowledgeLibraryId()
    {
        return $this->container['knowledgeLibraryId'];
    }

    /**
    * Sets knowledgeLibraryId
    *
    * @param string|null $knowledgeLibraryId 知识库ID。
    *
    * @return $this
    */
    public function setKnowledgeLibraryId($knowledgeLibraryId)
    {
        $this->container['knowledgeLibraryId'] = $knowledgeLibraryId;
        return $this;
    }

    /**
    * Gets fileName
    *  文档名称。
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
    * @param string|null $fileName 文档名称。
    *
    * @return $this
    */
    public function setFileName($fileName)
    {
        $this->container['fileName'] = $fileName;
        return $this;
    }

    /**
    * Gets fileSize
    *  文档大小，单位字节
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
    * @param int|null $fileSize 文档大小，单位字节
    *
    * @return $this
    */
    public function setFileSize($fileSize)
    {
        $this->container['fileSize'] = $fileSize;
        return $this;
    }

    /**
    * Gets fileType
    *  文档类型。
    *
    * @return string|null
    */
    public function getFileType()
    {
        return $this->container['fileType'];
    }

    /**
    * Sets fileType
    *
    * @param string|null $fileType 文档类型。
    *
    * @return $this
    */
    public function setFileType($fileType)
    {
        $this->container['fileType'] = $fileType;
        return $this;
    }

    /**
    * Gets splitType
    *  分段类型 * 1: 自动分段 * 2: 手动分段
    *
    * @return int|null
    */
    public function getSplitType()
    {
        return $this->container['splitType'];
    }

    /**
    * Sets splitType
    *
    * @param int|null $splitType 分段类型 * 1: 自动分段 * 2: 手动分段
    *
    * @return $this
    */
    public function setSplitType($splitType)
    {
        $this->container['splitType'] = $splitType;
        return $this;
    }

    /**
    * Gets chunkSize
    *  分段长度。
    *
    * @return int|null
    */
    public function getChunkSize()
    {
        return $this->container['chunkSize'];
    }

    /**
    * Sets chunkSize
    *
    * @param int|null $chunkSize 分段长度。
    *
    * @return $this
    */
    public function setChunkSize($chunkSize)
    {
        $this->container['chunkSize'] = $chunkSize;
        return $this;
    }

    /**
    * Gets chunkType
    *  分段策略，多个策略之间用逗号分割。 > title:标题分割；separator:分隔符分割
    *
    * @return string|null
    */
    public function getChunkType()
    {
        return $this->container['chunkType'];
    }

    /**
    * Sets chunkType
    *
    * @param string|null $chunkType 分段策略，多个策略之间用逗号分割。 > title:标题分割；separator:分隔符分割
    *
    * @return $this
    */
    public function setChunkType($chunkType)
    {
        $this->container['chunkType'] = $chunkType;
        return $this;
    }

    /**
    * Gets separators
    *  分隔符
    *
    * @return string[]|null
    */
    public function getSeparators()
    {
        return $this->container['separators'];
    }

    /**
    * Sets separators
    *
    * @param string[]|null $separators 分隔符
    *
    * @return $this
    */
    public function setSeparators($separators)
    {
        $this->container['separators'] = $separators;
        return $this;
    }

    /**
    * Gets createTime
    *  文档创建时间。格式遵循：RFC 3339 如\"2021-01-10T08:43:17Z\"。
    *
    * @return string|null
    */
    public function getCreateTime()
    {
        return $this->container['createTime'];
    }

    /**
    * Sets createTime
    *
    * @param string|null $createTime 文档创建时间。格式遵循：RFC 3339 如\"2021-01-10T08:43:17Z\"。
    *
    * @return $this
    */
    public function setCreateTime($createTime)
    {
        $this->container['createTime'] = $createTime;
        return $this;
    }

    /**
    * Gets updateTime
    *  文档更新时间。格式遵循：RFC 3339 如\"2021-01-10T08:43:17Z\"。
    *
    * @return string|null
    */
    public function getUpdateTime()
    {
        return $this->container['updateTime'];
    }

    /**
    * Sets updateTime
    *
    * @param string|null $updateTime 文档更新时间。格式遵循：RFC 3339 如\"2021-01-10T08:43:17Z\"。
    *
    * @return $this
    */
    public function setUpdateTime($updateTime)
    {
        $this->container['updateTime'] = $updateTime;
        return $this;
    }

    /**
    * Gets documentTaskInfo
    *  documentTaskInfo
    *
    * @return \HuaweiCloud\SDK\MetaStudio\V1\Model\DocumentTaskInfo|null
    */
    public function getDocumentTaskInfo()
    {
        return $this->container['documentTaskInfo'];
    }

    /**
    * Sets documentTaskInfo
    *
    * @param \HuaweiCloud\SDK\MetaStudio\V1\Model\DocumentTaskInfo|null $documentTaskInfo documentTaskInfo
    *
    * @return $this
    */
    public function setDocumentTaskInfo($documentTaskInfo)
    {
        $this->container['documentTaskInfo'] = $documentTaskInfo;
        return $this;
    }

    /**
    * Gets xRequestId
    *  xRequestId
    *
    * @return string|null
    */
    public function getXRequestId()
    {
        return $this->container['xRequestId'];
    }

    /**
    * Sets xRequestId
    *
    * @param string|null $xRequestId xRequestId
    *
    * @return $this
    */
    public function setXRequestId($xRequestId)
    {
        $this->container['xRequestId'] = $xRequestId;
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

