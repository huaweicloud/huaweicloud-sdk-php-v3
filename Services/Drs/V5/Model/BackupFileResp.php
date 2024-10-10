<?php

namespace HuaweiCloud\SDK\Drs\V5\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class BackupFileResp implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'BackupFileResp';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * fileName  文件名称。
    * fileSize  备份文件大小。
    * fileLastModify  备份文件最近修改时间。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'fileName' => 'string',
            'fileSize' => 'string',
            'fileLastModify' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * fileName  文件名称。
    * fileSize  备份文件大小。
    * fileLastModify  备份文件最近修改时间。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'fileName' => null,
        'fileSize' => null,
        'fileLastModify' => null
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
    * fileName  文件名称。
    * fileSize  备份文件大小。
    * fileLastModify  备份文件最近修改时间。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'fileName' => 'file_name',
            'fileSize' => 'file_size',
            'fileLastModify' => 'file_last_modify'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * fileName  文件名称。
    * fileSize  备份文件大小。
    * fileLastModify  备份文件最近修改时间。
    *
    * @var string[]
    */
    protected static $setters = [
            'fileName' => 'setFileName',
            'fileSize' => 'setFileSize',
            'fileLastModify' => 'setFileLastModify'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * fileName  文件名称。
    * fileSize  备份文件大小。
    * fileLastModify  备份文件最近修改时间。
    *
    * @var string[]
    */
    protected static $getters = [
            'fileName' => 'getFileName',
            'fileSize' => 'getFileSize',
            'fileLastModify' => 'getFileLastModify'
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
        $this->container['fileLastModify'] = isset($data['fileLastModify']) ? $data['fileLastModify'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['fileName']) && (mb_strlen($this->container['fileName']) > 128)) {
                $invalidProperties[] = "invalid value for 'fileName', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['fileName']) && (mb_strlen($this->container['fileName']) < 0)) {
                $invalidProperties[] = "invalid value for 'fileName', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['fileSize']) && (mb_strlen($this->container['fileSize']) > 128)) {
                $invalidProperties[] = "invalid value for 'fileSize', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['fileSize']) && (mb_strlen($this->container['fileSize']) < 0)) {
                $invalidProperties[] = "invalid value for 'fileSize', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['fileLastModify']) && (mb_strlen($this->container['fileLastModify']) > 128)) {
                $invalidProperties[] = "invalid value for 'fileLastModify', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['fileLastModify']) && (mb_strlen($this->container['fileLastModify']) < 0)) {
                $invalidProperties[] = "invalid value for 'fileLastModify', the character length must be bigger than or equal to 0.";
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
    *  文件名称。
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
    * @param string|null $fileName 文件名称。
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
    *  备份文件大小。
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
    * @param string|null $fileSize 备份文件大小。
    *
    * @return $this
    */
    public function setFileSize($fileSize)
    {
        $this->container['fileSize'] = $fileSize;
        return $this;
    }

    /**
    * Gets fileLastModify
    *  备份文件最近修改时间。
    *
    * @return string|null
    */
    public function getFileLastModify()
    {
        return $this->container['fileLastModify'];
    }

    /**
    * Sets fileLastModify
    *
    * @param string|null $fileLastModify 备份文件最近修改时间。
    *
    * @return $this
    */
    public function setFileLastModify($fileLastModify)
    {
        $this->container['fileLastModify'] = $fileLastModify;
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

