<?php

namespace HuaweiCloud\SDK\Cloudtest\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class AttachmentInfo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'AttachmentInfo';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * docId  文档id
    * fileName  文件名
    * filePath  文件路径
    * fileType  文件类型
    * storeFileName  保存文件名
    * relatedType  附件类型 0 本地上传  other 关联文档
    * fileSize  文件大小
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'docId' => 'string',
            'fileName' => 'string',
            'filePath' => 'string',
            'fileType' => 'string',
            'storeFileName' => 'string',
            'relatedType' => 'string',
            'fileSize' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * docId  文档id
    * fileName  文件名
    * filePath  文件路径
    * fileType  文件类型
    * storeFileName  保存文件名
    * relatedType  附件类型 0 本地上传  other 关联文档
    * fileSize  文件大小
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'docId' => null,
        'fileName' => null,
        'filePath' => null,
        'fileType' => null,
        'storeFileName' => null,
        'relatedType' => null,
        'fileSize' => 'int32'
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
    * docId  文档id
    * fileName  文件名
    * filePath  文件路径
    * fileType  文件类型
    * storeFileName  保存文件名
    * relatedType  附件类型 0 本地上传  other 关联文档
    * fileSize  文件大小
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'docId' => 'doc_id',
            'fileName' => 'file_name',
            'filePath' => 'file_path',
            'fileType' => 'file_type',
            'storeFileName' => 'store_file_name',
            'relatedType' => 'related_type',
            'fileSize' => 'file_size'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * docId  文档id
    * fileName  文件名
    * filePath  文件路径
    * fileType  文件类型
    * storeFileName  保存文件名
    * relatedType  附件类型 0 本地上传  other 关联文档
    * fileSize  文件大小
    *
    * @var string[]
    */
    protected static $setters = [
            'docId' => 'setDocId',
            'fileName' => 'setFileName',
            'filePath' => 'setFilePath',
            'fileType' => 'setFileType',
            'storeFileName' => 'setStoreFileName',
            'relatedType' => 'setRelatedType',
            'fileSize' => 'setFileSize'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * docId  文档id
    * fileName  文件名
    * filePath  文件路径
    * fileType  文件类型
    * storeFileName  保存文件名
    * relatedType  附件类型 0 本地上传  other 关联文档
    * fileSize  文件大小
    *
    * @var string[]
    */
    protected static $getters = [
            'docId' => 'getDocId',
            'fileName' => 'getFileName',
            'filePath' => 'getFilePath',
            'fileType' => 'getFileType',
            'storeFileName' => 'getStoreFileName',
            'relatedType' => 'getRelatedType',
            'fileSize' => 'getFileSize'
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
        $this->container['docId'] = isset($data['docId']) ? $data['docId'] : null;
        $this->container['fileName'] = isset($data['fileName']) ? $data['fileName'] : null;
        $this->container['filePath'] = isset($data['filePath']) ? $data['filePath'] : null;
        $this->container['fileType'] = isset($data['fileType']) ? $data['fileType'] : null;
        $this->container['storeFileName'] = isset($data['storeFileName']) ? $data['storeFileName'] : null;
        $this->container['relatedType'] = isset($data['relatedType']) ? $data['relatedType'] : null;
        $this->container['fileSize'] = isset($data['fileSize']) ? $data['fileSize'] : null;
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

