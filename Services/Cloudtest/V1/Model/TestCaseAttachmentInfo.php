<?php

namespace HuaweiCloud\SDK\Cloudtest\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class TestCaseAttachmentInfo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'TestCaseAttachmentInfo';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * override  附件是否要被覆盖
    * docId  文档id
    * fileName  文件名
    * filePath  文件路径
    * fileType  文件类型
    * fileSize  文件大小
    * overrideId  重复用例ID
    * relatedType  相关类型
    * storeFileName  保存文件名
    * systemType  系统区分
    * storageSystem  区分文件存储系统
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'override' => 'bool',
            'docId' => 'string',
            'fileName' => 'string',
            'filePath' => 'string',
            'fileType' => 'string',
            'fileSize' => 'string',
            'overrideId' => 'string',
            'relatedType' => 'string',
            'storeFileName' => 'string',
            'systemType' => 'string',
            'storageSystem' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * override  附件是否要被覆盖
    * docId  文档id
    * fileName  文件名
    * filePath  文件路径
    * fileType  文件类型
    * fileSize  文件大小
    * overrideId  重复用例ID
    * relatedType  相关类型
    * storeFileName  保存文件名
    * systemType  系统区分
    * storageSystem  区分文件存储系统
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'override' => null,
        'docId' => null,
        'fileName' => null,
        'filePath' => null,
        'fileType' => null,
        'fileSize' => null,
        'overrideId' => null,
        'relatedType' => null,
        'storeFileName' => null,
        'systemType' => null,
        'storageSystem' => null
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
    * override  附件是否要被覆盖
    * docId  文档id
    * fileName  文件名
    * filePath  文件路径
    * fileType  文件类型
    * fileSize  文件大小
    * overrideId  重复用例ID
    * relatedType  相关类型
    * storeFileName  保存文件名
    * systemType  系统区分
    * storageSystem  区分文件存储系统
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'override' => 'override',
            'docId' => 'doc_id',
            'fileName' => 'file_name',
            'filePath' => 'file_path',
            'fileType' => 'file_type',
            'fileSize' => 'file_size',
            'overrideId' => 'override_id',
            'relatedType' => 'related_type',
            'storeFileName' => 'store_file_name',
            'systemType' => 'system_type',
            'storageSystem' => 'storage_system'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * override  附件是否要被覆盖
    * docId  文档id
    * fileName  文件名
    * filePath  文件路径
    * fileType  文件类型
    * fileSize  文件大小
    * overrideId  重复用例ID
    * relatedType  相关类型
    * storeFileName  保存文件名
    * systemType  系统区分
    * storageSystem  区分文件存储系统
    *
    * @var string[]
    */
    protected static $setters = [
            'override' => 'setOverride',
            'docId' => 'setDocId',
            'fileName' => 'setFileName',
            'filePath' => 'setFilePath',
            'fileType' => 'setFileType',
            'fileSize' => 'setFileSize',
            'overrideId' => 'setOverrideId',
            'relatedType' => 'setRelatedType',
            'storeFileName' => 'setStoreFileName',
            'systemType' => 'setSystemType',
            'storageSystem' => 'setStorageSystem'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * override  附件是否要被覆盖
    * docId  文档id
    * fileName  文件名
    * filePath  文件路径
    * fileType  文件类型
    * fileSize  文件大小
    * overrideId  重复用例ID
    * relatedType  相关类型
    * storeFileName  保存文件名
    * systemType  系统区分
    * storageSystem  区分文件存储系统
    *
    * @var string[]
    */
    protected static $getters = [
            'override' => 'getOverride',
            'docId' => 'getDocId',
            'fileName' => 'getFileName',
            'filePath' => 'getFilePath',
            'fileType' => 'getFileType',
            'fileSize' => 'getFileSize',
            'overrideId' => 'getOverrideId',
            'relatedType' => 'getRelatedType',
            'storeFileName' => 'getStoreFileName',
            'systemType' => 'getSystemType',
            'storageSystem' => 'getStorageSystem'
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
        $this->container['override'] = isset($data['override']) ? $data['override'] : null;
        $this->container['docId'] = isset($data['docId']) ? $data['docId'] : null;
        $this->container['fileName'] = isset($data['fileName']) ? $data['fileName'] : null;
        $this->container['filePath'] = isset($data['filePath']) ? $data['filePath'] : null;
        $this->container['fileType'] = isset($data['fileType']) ? $data['fileType'] : null;
        $this->container['fileSize'] = isset($data['fileSize']) ? $data['fileSize'] : null;
        $this->container['overrideId'] = isset($data['overrideId']) ? $data['overrideId'] : null;
        $this->container['relatedType'] = isset($data['relatedType']) ? $data['relatedType'] : null;
        $this->container['storeFileName'] = isset($data['storeFileName']) ? $data['storeFileName'] : null;
        $this->container['systemType'] = isset($data['systemType']) ? $data['systemType'] : null;
        $this->container['storageSystem'] = isset($data['storageSystem']) ? $data['storageSystem'] : null;
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
    * Gets override
    *  附件是否要被覆盖
    *
    * @return bool|null
    */
    public function getOverride()
    {
        return $this->container['override'];
    }

    /**
    * Sets override
    *
    * @param bool|null $override 附件是否要被覆盖
    *
    * @return $this
    */
    public function setOverride($override)
    {
        $this->container['override'] = $override;
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
    * Gets fileSize
    *  文件大小
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
    * @param string|null $fileSize 文件大小
    *
    * @return $this
    */
    public function setFileSize($fileSize)
    {
        $this->container['fileSize'] = $fileSize;
        return $this;
    }

    /**
    * Gets overrideId
    *  重复用例ID
    *
    * @return string|null
    */
    public function getOverrideId()
    {
        return $this->container['overrideId'];
    }

    /**
    * Sets overrideId
    *
    * @param string|null $overrideId 重复用例ID
    *
    * @return $this
    */
    public function setOverrideId($overrideId)
    {
        $this->container['overrideId'] = $overrideId;
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
    * Gets systemType
    *  系统区分
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
    * @param string|null $systemType 系统区分
    *
    * @return $this
    */
    public function setSystemType($systemType)
    {
        $this->container['systemType'] = $systemType;
        return $this;
    }

    /**
    * Gets storageSystem
    *  区分文件存储系统
    *
    * @return string|null
    */
    public function getStorageSystem()
    {
        return $this->container['storageSystem'];
    }

    /**
    * Sets storageSystem
    *
    * @param string|null $storageSystem 区分文件存储系统
    *
    * @return $this
    */
    public function setStorageSystem($storageSystem)
    {
        $this->container['storageSystem'] = $storageSystem;
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

