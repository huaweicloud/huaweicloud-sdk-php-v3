<?php

namespace HuaweiCloud\SDK\Cloudtest\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class AttachmentVo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'AttachmentVo';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * uri  附件Uri
    * creator  创建人
    * updator  更新人
    * region  逻辑region
    * docId  文档id
    * parentUri  父节点Uri
    * parentType  父节点类型
    * fileName  文件名
    * storeFileName  保存文件名
    * filePath  文件路径
    * fileSize  文件大小
    * fileType  文件类型
    * systemType  系统区分：docman或testman
    * createTime  创建时间
    * createTimeTimestamp  创建时间时间戳
    * updateTime  更新时间
    * updateTimeTimestamp  更新时间时间戳
    * projectUuid  项目id
    * relatedType  附件类型 0 本地上传  other 关联文档
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'uri' => 'string',
            'creator' => 'string',
            'updator' => 'string',
            'region' => 'string',
            'docId' => 'string',
            'parentUri' => 'string',
            'parentType' => 'string',
            'fileName' => 'string',
            'storeFileName' => 'string',
            'filePath' => 'string',
            'fileSize' => 'int',
            'fileType' => 'string',
            'systemType' => 'string',
            'createTime' => '\DateTime',
            'createTimeTimestamp' => 'int',
            'updateTime' => '\DateTime',
            'updateTimeTimestamp' => 'int',
            'projectUuid' => 'string',
            'relatedType' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * uri  附件Uri
    * creator  创建人
    * updator  更新人
    * region  逻辑region
    * docId  文档id
    * parentUri  父节点Uri
    * parentType  父节点类型
    * fileName  文件名
    * storeFileName  保存文件名
    * filePath  文件路径
    * fileSize  文件大小
    * fileType  文件类型
    * systemType  系统区分：docman或testman
    * createTime  创建时间
    * createTimeTimestamp  创建时间时间戳
    * updateTime  更新时间
    * updateTimeTimestamp  更新时间时间戳
    * projectUuid  项目id
    * relatedType  附件类型 0 本地上传  other 关联文档
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'uri' => null,
        'creator' => null,
        'updator' => null,
        'region' => null,
        'docId' => null,
        'parentUri' => null,
        'parentType' => null,
        'fileName' => null,
        'storeFileName' => null,
        'filePath' => null,
        'fileSize' => 'int32',
        'fileType' => null,
        'systemType' => null,
        'createTime' => 'date-time',
        'createTimeTimestamp' => 'int64',
        'updateTime' => 'date-time',
        'updateTimeTimestamp' => 'int64',
        'projectUuid' => null,
        'relatedType' => null
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
    * uri  附件Uri
    * creator  创建人
    * updator  更新人
    * region  逻辑region
    * docId  文档id
    * parentUri  父节点Uri
    * parentType  父节点类型
    * fileName  文件名
    * storeFileName  保存文件名
    * filePath  文件路径
    * fileSize  文件大小
    * fileType  文件类型
    * systemType  系统区分：docman或testman
    * createTime  创建时间
    * createTimeTimestamp  创建时间时间戳
    * updateTime  更新时间
    * updateTimeTimestamp  更新时间时间戳
    * projectUuid  项目id
    * relatedType  附件类型 0 本地上传  other 关联文档
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'uri' => 'uri',
            'creator' => 'creator',
            'updator' => 'updator',
            'region' => 'region',
            'docId' => 'doc_id',
            'parentUri' => 'parent_uri',
            'parentType' => 'parent_type',
            'fileName' => 'file_name',
            'storeFileName' => 'store_file_name',
            'filePath' => 'file_path',
            'fileSize' => 'file_size',
            'fileType' => 'file_type',
            'systemType' => 'system_type',
            'createTime' => 'create_time',
            'createTimeTimestamp' => 'create_time_timestamp',
            'updateTime' => 'update_time',
            'updateTimeTimestamp' => 'update_time_timestamp',
            'projectUuid' => 'project_uuid',
            'relatedType' => 'related_type'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * uri  附件Uri
    * creator  创建人
    * updator  更新人
    * region  逻辑region
    * docId  文档id
    * parentUri  父节点Uri
    * parentType  父节点类型
    * fileName  文件名
    * storeFileName  保存文件名
    * filePath  文件路径
    * fileSize  文件大小
    * fileType  文件类型
    * systemType  系统区分：docman或testman
    * createTime  创建时间
    * createTimeTimestamp  创建时间时间戳
    * updateTime  更新时间
    * updateTimeTimestamp  更新时间时间戳
    * projectUuid  项目id
    * relatedType  附件类型 0 本地上传  other 关联文档
    *
    * @var string[]
    */
    protected static $setters = [
            'uri' => 'setUri',
            'creator' => 'setCreator',
            'updator' => 'setUpdator',
            'region' => 'setRegion',
            'docId' => 'setDocId',
            'parentUri' => 'setParentUri',
            'parentType' => 'setParentType',
            'fileName' => 'setFileName',
            'storeFileName' => 'setStoreFileName',
            'filePath' => 'setFilePath',
            'fileSize' => 'setFileSize',
            'fileType' => 'setFileType',
            'systemType' => 'setSystemType',
            'createTime' => 'setCreateTime',
            'createTimeTimestamp' => 'setCreateTimeTimestamp',
            'updateTime' => 'setUpdateTime',
            'updateTimeTimestamp' => 'setUpdateTimeTimestamp',
            'projectUuid' => 'setProjectUuid',
            'relatedType' => 'setRelatedType'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * uri  附件Uri
    * creator  创建人
    * updator  更新人
    * region  逻辑region
    * docId  文档id
    * parentUri  父节点Uri
    * parentType  父节点类型
    * fileName  文件名
    * storeFileName  保存文件名
    * filePath  文件路径
    * fileSize  文件大小
    * fileType  文件类型
    * systemType  系统区分：docman或testman
    * createTime  创建时间
    * createTimeTimestamp  创建时间时间戳
    * updateTime  更新时间
    * updateTimeTimestamp  更新时间时间戳
    * projectUuid  项目id
    * relatedType  附件类型 0 本地上传  other 关联文档
    *
    * @var string[]
    */
    protected static $getters = [
            'uri' => 'getUri',
            'creator' => 'getCreator',
            'updator' => 'getUpdator',
            'region' => 'getRegion',
            'docId' => 'getDocId',
            'parentUri' => 'getParentUri',
            'parentType' => 'getParentType',
            'fileName' => 'getFileName',
            'storeFileName' => 'getStoreFileName',
            'filePath' => 'getFilePath',
            'fileSize' => 'getFileSize',
            'fileType' => 'getFileType',
            'systemType' => 'getSystemType',
            'createTime' => 'getCreateTime',
            'createTimeTimestamp' => 'getCreateTimeTimestamp',
            'updateTime' => 'getUpdateTime',
            'updateTimeTimestamp' => 'getUpdateTimeTimestamp',
            'projectUuid' => 'getProjectUuid',
            'relatedType' => 'getRelatedType'
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
        $this->container['uri'] = isset($data['uri']) ? $data['uri'] : null;
        $this->container['creator'] = isset($data['creator']) ? $data['creator'] : null;
        $this->container['updator'] = isset($data['updator']) ? $data['updator'] : null;
        $this->container['region'] = isset($data['region']) ? $data['region'] : null;
        $this->container['docId'] = isset($data['docId']) ? $data['docId'] : null;
        $this->container['parentUri'] = isset($data['parentUri']) ? $data['parentUri'] : null;
        $this->container['parentType'] = isset($data['parentType']) ? $data['parentType'] : null;
        $this->container['fileName'] = isset($data['fileName']) ? $data['fileName'] : null;
        $this->container['storeFileName'] = isset($data['storeFileName']) ? $data['storeFileName'] : null;
        $this->container['filePath'] = isset($data['filePath']) ? $data['filePath'] : null;
        $this->container['fileSize'] = isset($data['fileSize']) ? $data['fileSize'] : null;
        $this->container['fileType'] = isset($data['fileType']) ? $data['fileType'] : null;
        $this->container['systemType'] = isset($data['systemType']) ? $data['systemType'] : null;
        $this->container['createTime'] = isset($data['createTime']) ? $data['createTime'] : null;
        $this->container['createTimeTimestamp'] = isset($data['createTimeTimestamp']) ? $data['createTimeTimestamp'] : null;
        $this->container['updateTime'] = isset($data['updateTime']) ? $data['updateTime'] : null;
        $this->container['updateTimeTimestamp'] = isset($data['updateTimeTimestamp']) ? $data['updateTimeTimestamp'] : null;
        $this->container['projectUuid'] = isset($data['projectUuid']) ? $data['projectUuid'] : null;
        $this->container['relatedType'] = isset($data['relatedType']) ? $data['relatedType'] : null;
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
    * Gets uri
    *  附件Uri
    *
    * @return string|null
    */
    public function getUri()
    {
        return $this->container['uri'];
    }

    /**
    * Sets uri
    *
    * @param string|null $uri 附件Uri
    *
    * @return $this
    */
    public function setUri($uri)
    {
        $this->container['uri'] = $uri;
        return $this;
    }

    /**
    * Gets creator
    *  创建人
    *
    * @return string|null
    */
    public function getCreator()
    {
        return $this->container['creator'];
    }

    /**
    * Sets creator
    *
    * @param string|null $creator 创建人
    *
    * @return $this
    */
    public function setCreator($creator)
    {
        $this->container['creator'] = $creator;
        return $this;
    }

    /**
    * Gets updator
    *  更新人
    *
    * @return string|null
    */
    public function getUpdator()
    {
        return $this->container['updator'];
    }

    /**
    * Sets updator
    *
    * @param string|null $updator 更新人
    *
    * @return $this
    */
    public function setUpdator($updator)
    {
        $this->container['updator'] = $updator;
        return $this;
    }

    /**
    * Gets region
    *  逻辑region
    *
    * @return string|null
    */
    public function getRegion()
    {
        return $this->container['region'];
    }

    /**
    * Sets region
    *
    * @param string|null $region 逻辑region
    *
    * @return $this
    */
    public function setRegion($region)
    {
        $this->container['region'] = $region;
        return $this;
    }

    /**
    * Gets docId
    *  文档id
    *
    * @return string|null
    */
    public function getDocId()
    {
        return $this->container['docId'];
    }

    /**
    * Sets docId
    *
    * @param string|null $docId 文档id
    *
    * @return $this
    */
    public function setDocId($docId)
    {
        $this->container['docId'] = $docId;
        return $this;
    }

    /**
    * Gets parentUri
    *  父节点Uri
    *
    * @return string|null
    */
    public function getParentUri()
    {
        return $this->container['parentUri'];
    }

    /**
    * Sets parentUri
    *
    * @param string|null $parentUri 父节点Uri
    *
    * @return $this
    */
    public function setParentUri($parentUri)
    {
        $this->container['parentUri'] = $parentUri;
        return $this;
    }

    /**
    * Gets parentType
    *  父节点类型
    *
    * @return string|null
    */
    public function getParentType()
    {
        return $this->container['parentType'];
    }

    /**
    * Sets parentType
    *
    * @param string|null $parentType 父节点类型
    *
    * @return $this
    */
    public function setParentType($parentType)
    {
        $this->container['parentType'] = $parentType;
        return $this;
    }

    /**
    * Gets fileName
    *  文件名
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
    * @param string|null $fileName 文件名
    *
    * @return $this
    */
    public function setFileName($fileName)
    {
        $this->container['fileName'] = $fileName;
        return $this;
    }

    /**
    * Gets storeFileName
    *  保存文件名
    *
    * @return string|null
    */
    public function getStoreFileName()
    {
        return $this->container['storeFileName'];
    }

    /**
    * Sets storeFileName
    *
    * @param string|null $storeFileName 保存文件名
    *
    * @return $this
    */
    public function setStoreFileName($storeFileName)
    {
        $this->container['storeFileName'] = $storeFileName;
        return $this;
    }

    /**
    * Gets filePath
    *  文件路径
    *
    * @return string|null
    */
    public function getFilePath()
    {
        return $this->container['filePath'];
    }

    /**
    * Sets filePath
    *
    * @param string|null $filePath 文件路径
    *
    * @return $this
    */
    public function setFilePath($filePath)
    {
        $this->container['filePath'] = $filePath;
        return $this;
    }

    /**
    * Gets fileSize
    *  文件大小
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
    * @param int|null $fileSize 文件大小
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
    *  文件类型
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
    * @param string|null $fileType 文件类型
    *
    * @return $this
    */
    public function setFileType($fileType)
    {
        $this->container['fileType'] = $fileType;
        return $this;
    }

    /**
    * Gets systemType
    *  系统区分：docman或testman
    *
    * @return string|null
    */
    public function getSystemType()
    {
        return $this->container['systemType'];
    }

    /**
    * Sets systemType
    *
    * @param string|null $systemType 系统区分：docman或testman
    *
    * @return $this
    */
    public function setSystemType($systemType)
    {
        $this->container['systemType'] = $systemType;
        return $this;
    }

    /**
    * Gets createTime
    *  创建时间
    *
    * @return \DateTime|null
    */
    public function getCreateTime()
    {
        return $this->container['createTime'];
    }

    /**
    * Sets createTime
    *
    * @param \DateTime|null $createTime 创建时间
    *
    * @return $this
    */
    public function setCreateTime($createTime)
    {
        $this->container['createTime'] = $createTime;
        return $this;
    }

    /**
    * Gets createTimeTimestamp
    *  创建时间时间戳
    *
    * @return int|null
    */
    public function getCreateTimeTimestamp()
    {
        return $this->container['createTimeTimestamp'];
    }

    /**
    * Sets createTimeTimestamp
    *
    * @param int|null $createTimeTimestamp 创建时间时间戳
    *
    * @return $this
    */
    public function setCreateTimeTimestamp($createTimeTimestamp)
    {
        $this->container['createTimeTimestamp'] = $createTimeTimestamp;
        return $this;
    }

    /**
    * Gets updateTime
    *  更新时间
    *
    * @return \DateTime|null
    */
    public function getUpdateTime()
    {
        return $this->container['updateTime'];
    }

    /**
    * Sets updateTime
    *
    * @param \DateTime|null $updateTime 更新时间
    *
    * @return $this
    */
    public function setUpdateTime($updateTime)
    {
        $this->container['updateTime'] = $updateTime;
        return $this;
    }

    /**
    * Gets updateTimeTimestamp
    *  更新时间时间戳
    *
    * @return int|null
    */
    public function getUpdateTimeTimestamp()
    {
        return $this->container['updateTimeTimestamp'];
    }

    /**
    * Sets updateTimeTimestamp
    *
    * @param int|null $updateTimeTimestamp 更新时间时间戳
    *
    * @return $this
    */
    public function setUpdateTimeTimestamp($updateTimeTimestamp)
    {
        $this->container['updateTimeTimestamp'] = $updateTimeTimestamp;
        return $this;
    }

    /**
    * Gets projectUuid
    *  项目id
    *
    * @return string|null
    */
    public function getProjectUuid()
    {
        return $this->container['projectUuid'];
    }

    /**
    * Sets projectUuid
    *
    * @param string|null $projectUuid 项目id
    *
    * @return $this
    */
    public function setProjectUuid($projectUuid)
    {
        $this->container['projectUuid'] = $projectUuid;
        return $this;
    }

    /**
    * Gets relatedType
    *  附件类型 0 本地上传  other 关联文档
    *
    * @return string|null
    */
    public function getRelatedType()
    {
        return $this->container['relatedType'];
    }

    /**
    * Sets relatedType
    *
    * @param string|null $relatedType 附件类型 0 本地上传  other 关联文档
    *
    * @return $this
    */
    public function setRelatedType($relatedType)
    {
        $this->container['relatedType'] = $relatedType;
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

