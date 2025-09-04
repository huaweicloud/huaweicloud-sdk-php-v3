<?php

namespace HuaweiCloud\SDK\Cloudtest\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class AttachmentFileVo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'AttachmentFileVo';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * uri  附件Uri
    * path  文件路径
    * projectId  项目ID
    * filePath  文件路径
    * fileType  文件类型
    * docName  文档名
    * storeName  保存文件名
    * docId  文档id
    * docSize  文档大小
    * relatedType  相关类型
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'uri' => 'string',
            'path' => 'string',
            'projectId' => 'string',
            'filePath' => 'string',
            'fileType' => 'string',
            'docName' => 'string',
            'storeName' => 'string',
            'docId' => 'int',
            'docSize' => 'string',
            'relatedType' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * uri  附件Uri
    * path  文件路径
    * projectId  项目ID
    * filePath  文件路径
    * fileType  文件类型
    * docName  文档名
    * storeName  保存文件名
    * docId  文档id
    * docSize  文档大小
    * relatedType  相关类型
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'uri' => null,
        'path' => null,
        'projectId' => null,
        'filePath' => null,
        'fileType' => null,
        'docName' => null,
        'storeName' => null,
        'docId' => 'int32',
        'docSize' => null,
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
    * path  文件路径
    * projectId  项目ID
    * filePath  文件路径
    * fileType  文件类型
    * docName  文档名
    * storeName  保存文件名
    * docId  文档id
    * docSize  文档大小
    * relatedType  相关类型
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'uri' => 'uri',
            'path' => 'path',
            'projectId' => 'project_id',
            'filePath' => 'file_path',
            'fileType' => 'file_type',
            'docName' => 'doc_name',
            'storeName' => 'store_name',
            'docId' => 'doc_id',
            'docSize' => 'doc_size',
            'relatedType' => 'related_type'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * uri  附件Uri
    * path  文件路径
    * projectId  项目ID
    * filePath  文件路径
    * fileType  文件类型
    * docName  文档名
    * storeName  保存文件名
    * docId  文档id
    * docSize  文档大小
    * relatedType  相关类型
    *
    * @var string[]
    */
    protected static $setters = [
            'uri' => 'setUri',
            'path' => 'setPath',
            'projectId' => 'setProjectId',
            'filePath' => 'setFilePath',
            'fileType' => 'setFileType',
            'docName' => 'setDocName',
            'storeName' => 'setStoreName',
            'docId' => 'setDocId',
            'docSize' => 'setDocSize',
            'relatedType' => 'setRelatedType'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * uri  附件Uri
    * path  文件路径
    * projectId  项目ID
    * filePath  文件路径
    * fileType  文件类型
    * docName  文档名
    * storeName  保存文件名
    * docId  文档id
    * docSize  文档大小
    * relatedType  相关类型
    *
    * @var string[]
    */
    protected static $getters = [
            'uri' => 'getUri',
            'path' => 'getPath',
            'projectId' => 'getProjectId',
            'filePath' => 'getFilePath',
            'fileType' => 'getFileType',
            'docName' => 'getDocName',
            'storeName' => 'getStoreName',
            'docId' => 'getDocId',
            'docSize' => 'getDocSize',
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
        $this->container['path'] = isset($data['path']) ? $data['path'] : null;
        $this->container['projectId'] = isset($data['projectId']) ? $data['projectId'] : null;
        $this->container['filePath'] = isset($data['filePath']) ? $data['filePath'] : null;
        $this->container['fileType'] = isset($data['fileType']) ? $data['fileType'] : null;
        $this->container['docName'] = isset($data['docName']) ? $data['docName'] : null;
        $this->container['storeName'] = isset($data['storeName']) ? $data['storeName'] : null;
        $this->container['docId'] = isset($data['docId']) ? $data['docId'] : null;
        $this->container['docSize'] = isset($data['docSize']) ? $data['docSize'] : null;
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
    * Gets path
    *  文件路径
    *
    * @return string|null
    */
    public function getPath()
    {
        return $this->container['path'];
    }

    /**
    * Sets path
    *
    * @param string|null $path 文件路径
    *
    * @return $this
    */
    public function setPath($path)
    {
        $this->container['path'] = $path;
        return $this;
    }

    /**
    * Gets projectId
    *  项目ID
    *
    * @return string|null
    */
    public function getProjectId()
    {
        return $this->container['projectId'];
    }

    /**
    * Sets projectId
    *
    * @param string|null $projectId 项目ID
    *
    * @return $this
    */
    public function setProjectId($projectId)
    {
        $this->container['projectId'] = $projectId;
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
    * Gets docName
    *  文档名
    *
    * @return string|null
    */
    public function getDocName()
    {
        return $this->container['docName'];
    }

    /**
    * Sets docName
    *
    * @param string|null $docName 文档名
    *
    * @return $this
    */
    public function setDocName($docName)
    {
        $this->container['docName'] = $docName;
        return $this;
    }

    /**
    * Gets storeName
    *  保存文件名
    *
    * @return string|null
    */
    public function getStoreName()
    {
        return $this->container['storeName'];
    }

    /**
    * Sets storeName
    *
    * @param string|null $storeName 保存文件名
    *
    * @return $this
    */
    public function setStoreName($storeName)
    {
        $this->container['storeName'] = $storeName;
        return $this;
    }

    /**
    * Gets docId
    *  文档id
    *
    * @return int|null
    */
    public function getDocId()
    {
        return $this->container['docId'];
    }

    /**
    * Sets docId
    *
    * @param int|null $docId 文档id
    *
    * @return $this
    */
    public function setDocId($docId)
    {
        $this->container['docId'] = $docId;
        return $this;
    }

    /**
    * Gets docSize
    *  文档大小
    *
    * @return string|null
    */
    public function getDocSize()
    {
        return $this->container['docSize'];
    }

    /**
    * Sets docSize
    *
    * @param string|null $docSize 文档大小
    *
    * @return $this
    */
    public function setDocSize($docSize)
    {
        $this->container['docSize'] = $docSize;
        return $this;
    }

    /**
    * Gets relatedType
    *  相关类型
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
    * @param string|null $relatedType 相关类型
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

