<?php

namespace HuaweiCloud\SDK\MetaStudio\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class LargeFilesCreateReq implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'LargeFilesCreateReq';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * fileName  文件名，不区分大小写，最大长度256，最小长度1。
    * fileSize  文件总的大小，最小1，最大5368709120。
    * fileType  文件类型（默认提取文件后缀）。
    * assetId  资产ID。
    * assetFileCategory  文件在资产中的分类。每种资产类型包含的文件分类不同。 * MAIN：主文件 * OTHER：其他文件
    * fileMultipartCount  ORI4K文件分段上传数量，默认值为1
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'fileName' => 'string',
            'fileSize' => 'int',
            'fileType' => 'string',
            'assetId' => 'string',
            'assetFileCategory' => 'string',
            'fileMultipartCount' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * fileName  文件名，不区分大小写，最大长度256，最小长度1。
    * fileSize  文件总的大小，最小1，最大5368709120。
    * fileType  文件类型（默认提取文件后缀）。
    * assetId  资产ID。
    * assetFileCategory  文件在资产中的分类。每种资产类型包含的文件分类不同。 * MAIN：主文件 * OTHER：其他文件
    * fileMultipartCount  ORI4K文件分段上传数量，默认值为1
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'fileName' => null,
        'fileSize' => 'int64',
        'fileType' => null,
        'assetId' => null,
        'assetFileCategory' => null,
        'fileMultipartCount' => 'int32'
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
    * fileName  文件名，不区分大小写，最大长度256，最小长度1。
    * fileSize  文件总的大小，最小1，最大5368709120。
    * fileType  文件类型（默认提取文件后缀）。
    * assetId  资产ID。
    * assetFileCategory  文件在资产中的分类。每种资产类型包含的文件分类不同。 * MAIN：主文件 * OTHER：其他文件
    * fileMultipartCount  ORI4K文件分段上传数量，默认值为1
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'fileName' => 'file_name',
            'fileSize' => 'file_size',
            'fileType' => 'file_type',
            'assetId' => 'asset_id',
            'assetFileCategory' => 'asset_file_category',
            'fileMultipartCount' => 'file_multipart_count'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * fileName  文件名，不区分大小写，最大长度256，最小长度1。
    * fileSize  文件总的大小，最小1，最大5368709120。
    * fileType  文件类型（默认提取文件后缀）。
    * assetId  资产ID。
    * assetFileCategory  文件在资产中的分类。每种资产类型包含的文件分类不同。 * MAIN：主文件 * OTHER：其他文件
    * fileMultipartCount  ORI4K文件分段上传数量，默认值为1
    *
    * @var string[]
    */
    protected static $setters = [
            'fileName' => 'setFileName',
            'fileSize' => 'setFileSize',
            'fileType' => 'setFileType',
            'assetId' => 'setAssetId',
            'assetFileCategory' => 'setAssetFileCategory',
            'fileMultipartCount' => 'setFileMultipartCount'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * fileName  文件名，不区分大小写，最大长度256，最小长度1。
    * fileSize  文件总的大小，最小1，最大5368709120。
    * fileType  文件类型（默认提取文件后缀）。
    * assetId  资产ID。
    * assetFileCategory  文件在资产中的分类。每种资产类型包含的文件分类不同。 * MAIN：主文件 * OTHER：其他文件
    * fileMultipartCount  ORI4K文件分段上传数量，默认值为1
    *
    * @var string[]
    */
    protected static $getters = [
            'fileName' => 'getFileName',
            'fileSize' => 'getFileSize',
            'fileType' => 'getFileType',
            'assetId' => 'getAssetId',
            'assetFileCategory' => 'getAssetFileCategory',
            'fileMultipartCount' => 'getFileMultipartCount'
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
        $this->container['fileName'] = isset($data['fileName']) ? $data['fileName'] : null;
        $this->container['fileSize'] = isset($data['fileSize']) ? $data['fileSize'] : null;
        $this->container['fileType'] = isset($data['fileType']) ? $data['fileType'] : null;
        $this->container['assetId'] = isset($data['assetId']) ? $data['assetId'] : null;
        $this->container['assetFileCategory'] = isset($data['assetFileCategory']) ? $data['assetFileCategory'] : null;
        $this->container['fileMultipartCount'] = isset($data['fileMultipartCount']) ? $data['fileMultipartCount'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['fileName'] === null) {
            $invalidProperties[] = "'fileName' can't be null";
        }
            if ((mb_strlen($this->container['fileName']) > 256)) {
                $invalidProperties[] = "invalid value for 'fileName', the character length must be smaller than or equal to 256.";
            }
            if ((mb_strlen($this->container['fileName']) < 1)) {
                $invalidProperties[] = "invalid value for 'fileName', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['fileSize']) && ($this->container['fileSize'] > 536870912000)) {
                $invalidProperties[] = "invalid value for 'fileSize', must be smaller than or equal to 536870912000.";
            }
            if (!is_null($this->container['fileSize']) && ($this->container['fileSize'] < 1)) {
                $invalidProperties[] = "invalid value for 'fileSize', must be bigger than or equal to 1.";
            }
        if ($this->container['fileType'] === null) {
            $invalidProperties[] = "'fileType' can't be null";
        }
            if ((mb_strlen($this->container['fileType']) > 64)) {
                $invalidProperties[] = "invalid value for 'fileType', the character length must be smaller than or equal to 64.";
            }
            if ((mb_strlen($this->container['fileType']) < 1)) {
                $invalidProperties[] = "invalid value for 'fileType', the character length must be bigger than or equal to 1.";
            }
        if ($this->container['assetId'] === null) {
            $invalidProperties[] = "'assetId' can't be null";
        }
            if ((mb_strlen($this->container['assetId']) > 64)) {
                $invalidProperties[] = "invalid value for 'assetId', the character length must be smaller than or equal to 64.";
            }
            if ((mb_strlen($this->container['assetId']) < 1)) {
                $invalidProperties[] = "invalid value for 'assetId', the character length must be bigger than or equal to 1.";
            }
        if ($this->container['assetFileCategory'] === null) {
            $invalidProperties[] = "'assetFileCategory' can't be null";
        }
            if ((mb_strlen($this->container['assetFileCategory']) > 128)) {
                $invalidProperties[] = "invalid value for 'assetFileCategory', the character length must be smaller than or equal to 128.";
            }
            if ((mb_strlen($this->container['assetFileCategory']) < 1)) {
                $invalidProperties[] = "invalid value for 'assetFileCategory', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['fileMultipartCount']) && ($this->container['fileMultipartCount'] > 100)) {
                $invalidProperties[] = "invalid value for 'fileMultipartCount', must be smaller than or equal to 100.";
            }
            if (!is_null($this->container['fileMultipartCount']) && ($this->container['fileMultipartCount'] < 1)) {
                $invalidProperties[] = "invalid value for 'fileMultipartCount', must be bigger than or equal to 1.";
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
    * Gets fileName
    *  文件名，不区分大小写，最大长度256，最小长度1。
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
    * @param string $fileName 文件名，不区分大小写，最大长度256，最小长度1。
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
    *  文件总的大小，最小1，最大5368709120。
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
    * @param int|null $fileSize 文件总的大小，最小1，最大5368709120。
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
    *  文件类型（默认提取文件后缀）。
    *
    * @return string
    */
    public function getFileType()
    {
        return $this->container['fileType'];
    }

    /**
    * Sets fileType
    *
    * @param string $fileType 文件类型（默认提取文件后缀）。
    *
    * @return $this
    */
    public function setFileType($fileType)
    {
        $this->container['fileType'] = $fileType;
        return $this;
    }

    /**
    * Gets assetId
    *  资产ID。
    *
    * @return string
    */
    public function getAssetId()
    {
        return $this->container['assetId'];
    }

    /**
    * Sets assetId
    *
    * @param string $assetId 资产ID。
    *
    * @return $this
    */
    public function setAssetId($assetId)
    {
        $this->container['assetId'] = $assetId;
        return $this;
    }

    /**
    * Gets assetFileCategory
    *  文件在资产中的分类。每种资产类型包含的文件分类不同。 * MAIN：主文件 * OTHER：其他文件
    *
    * @return string
    */
    public function getAssetFileCategory()
    {
        return $this->container['assetFileCategory'];
    }

    /**
    * Sets assetFileCategory
    *
    * @param string $assetFileCategory 文件在资产中的分类。每种资产类型包含的文件分类不同。 * MAIN：主文件 * OTHER：其他文件
    *
    * @return $this
    */
    public function setAssetFileCategory($assetFileCategory)
    {
        $this->container['assetFileCategory'] = $assetFileCategory;
        return $this;
    }

    /**
    * Gets fileMultipartCount
    *  ORI4K文件分段上传数量，默认值为1
    *
    * @return int|null
    */
    public function getFileMultipartCount()
    {
        return $this->container['fileMultipartCount'];
    }

    /**
    * Sets fileMultipartCount
    *
    * @param int|null $fileMultipartCount ORI4K文件分段上传数量，默认值为1
    *
    * @return $this
    */
    public function setFileMultipartCount($fileMultipartCount)
    {
        $this->container['fileMultipartCount'] = $fileMultipartCount;
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

