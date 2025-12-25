<?php

namespace HuaweiCloud\SDK\SecMaster\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class AlertFileInfo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'Alert_file_info';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * filePath  文件路径/名称
    * fileContent  文件内容
    * fileNewPath  文件新路径/名称
    * fileHash  文件hash
    * fileMd5  文件md5
    * fileSha256  文件sha256
    * fileAttr  文件属性
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'filePath' => 'string',
            'fileContent' => 'string',
            'fileNewPath' => 'string',
            'fileHash' => 'string',
            'fileMd5' => 'string',
            'fileSha256' => 'string',
            'fileAttr' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * filePath  文件路径/名称
    * fileContent  文件内容
    * fileNewPath  文件新路径/名称
    * fileHash  文件hash
    * fileMd5  文件md5
    * fileSha256  文件sha256
    * fileAttr  文件属性
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'filePath' => null,
        'fileContent' => null,
        'fileNewPath' => null,
        'fileHash' => null,
        'fileMd5' => null,
        'fileSha256' => null,
        'fileAttr' => null
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
    * filePath  文件路径/名称
    * fileContent  文件内容
    * fileNewPath  文件新路径/名称
    * fileHash  文件hash
    * fileMd5  文件md5
    * fileSha256  文件sha256
    * fileAttr  文件属性
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'filePath' => 'file_path',
            'fileContent' => 'file_content',
            'fileNewPath' => 'file_new_path',
            'fileHash' => 'file_hash',
            'fileMd5' => 'file_md5',
            'fileSha256' => 'file_sha256',
            'fileAttr' => 'file_attr'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * filePath  文件路径/名称
    * fileContent  文件内容
    * fileNewPath  文件新路径/名称
    * fileHash  文件hash
    * fileMd5  文件md5
    * fileSha256  文件sha256
    * fileAttr  文件属性
    *
    * @var string[]
    */
    protected static $setters = [
            'filePath' => 'setFilePath',
            'fileContent' => 'setFileContent',
            'fileNewPath' => 'setFileNewPath',
            'fileHash' => 'setFileHash',
            'fileMd5' => 'setFileMd5',
            'fileSha256' => 'setFileSha256',
            'fileAttr' => 'setFileAttr'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * filePath  文件路径/名称
    * fileContent  文件内容
    * fileNewPath  文件新路径/名称
    * fileHash  文件hash
    * fileMd5  文件md5
    * fileSha256  文件sha256
    * fileAttr  文件属性
    *
    * @var string[]
    */
    protected static $getters = [
            'filePath' => 'getFilePath',
            'fileContent' => 'getFileContent',
            'fileNewPath' => 'getFileNewPath',
            'fileHash' => 'getFileHash',
            'fileMd5' => 'getFileMd5',
            'fileSha256' => 'getFileSha256',
            'fileAttr' => 'getFileAttr'
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
        $this->container['filePath'] = isset($data['filePath']) ? $data['filePath'] : null;
        $this->container['fileContent'] = isset($data['fileContent']) ? $data['fileContent'] : null;
        $this->container['fileNewPath'] = isset($data['fileNewPath']) ? $data['fileNewPath'] : null;
        $this->container['fileHash'] = isset($data['fileHash']) ? $data['fileHash'] : null;
        $this->container['fileMd5'] = isset($data['fileMd5']) ? $data['fileMd5'] : null;
        $this->container['fileSha256'] = isset($data['fileSha256']) ? $data['fileSha256'] : null;
        $this->container['fileAttr'] = isset($data['fileAttr']) ? $data['fileAttr'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['filePath']) && (mb_strlen($this->container['filePath']) > 128)) {
                $invalidProperties[] = "invalid value for 'filePath', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['filePath']) && (mb_strlen($this->container['filePath']) < 0)) {
                $invalidProperties[] = "invalid value for 'filePath', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['fileContent']) && (mb_strlen($this->container['fileContent']) > 1024)) {
                $invalidProperties[] = "invalid value for 'fileContent', the character length must be smaller than or equal to 1024.";
            }
            if (!is_null($this->container['fileContent']) && (mb_strlen($this->container['fileContent']) < 0)) {
                $invalidProperties[] = "invalid value for 'fileContent', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['fileNewPath']) && (mb_strlen($this->container['fileNewPath']) > 64)) {
                $invalidProperties[] = "invalid value for 'fileNewPath', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['fileNewPath']) && (mb_strlen($this->container['fileNewPath']) < 32)) {
                $invalidProperties[] = "invalid value for 'fileNewPath', the character length must be bigger than or equal to 32.";
            }
            if (!is_null($this->container['fileHash']) && (mb_strlen($this->container['fileHash']) > 128)) {
                $invalidProperties[] = "invalid value for 'fileHash', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['fileHash']) && (mb_strlen($this->container['fileHash']) < 0)) {
                $invalidProperties[] = "invalid value for 'fileHash', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['fileMd5']) && (mb_strlen($this->container['fileMd5']) > 128)) {
                $invalidProperties[] = "invalid value for 'fileMd5', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['fileMd5']) && (mb_strlen($this->container['fileMd5']) < 0)) {
                $invalidProperties[] = "invalid value for 'fileMd5', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['fileSha256']) && (mb_strlen($this->container['fileSha256']) > 128)) {
                $invalidProperties[] = "invalid value for 'fileSha256', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['fileSha256']) && (mb_strlen($this->container['fileSha256']) < 0)) {
                $invalidProperties[] = "invalid value for 'fileSha256', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['fileAttr']) && (mb_strlen($this->container['fileAttr']) > 1024)) {
                $invalidProperties[] = "invalid value for 'fileAttr', the character length must be smaller than or equal to 1024.";
            }
            if (!is_null($this->container['fileAttr']) && (mb_strlen($this->container['fileAttr']) < 0)) {
                $invalidProperties[] = "invalid value for 'fileAttr', the character length must be bigger than or equal to 0.";
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
    * Gets filePath
    *  文件路径/名称
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
    * @param string|null $filePath 文件路径/名称
    *
    * @return $this
    */
    public function setFilePath($filePath)
    {
        $this->container['filePath'] = $filePath;
        return $this;
    }

    /**
    * Gets fileContent
    *  文件内容
    *
    * @return string|null
    */
    public function getFileContent()
    {
        return $this->container['fileContent'];
    }

    /**
    * Sets fileContent
    *
    * @param string|null $fileContent 文件内容
    *
    * @return $this
    */
    public function setFileContent($fileContent)
    {
        $this->container['fileContent'] = $fileContent;
        return $this;
    }

    /**
    * Gets fileNewPath
    *  文件新路径/名称
    *
    * @return string|null
    */
    public function getFileNewPath()
    {
        return $this->container['fileNewPath'];
    }

    /**
    * Sets fileNewPath
    *
    * @param string|null $fileNewPath 文件新路径/名称
    *
    * @return $this
    */
    public function setFileNewPath($fileNewPath)
    {
        $this->container['fileNewPath'] = $fileNewPath;
        return $this;
    }

    /**
    * Gets fileHash
    *  文件hash
    *
    * @return string|null
    */
    public function getFileHash()
    {
        return $this->container['fileHash'];
    }

    /**
    * Sets fileHash
    *
    * @param string|null $fileHash 文件hash
    *
    * @return $this
    */
    public function setFileHash($fileHash)
    {
        $this->container['fileHash'] = $fileHash;
        return $this;
    }

    /**
    * Gets fileMd5
    *  文件md5
    *
    * @return string|null
    */
    public function getFileMd5()
    {
        return $this->container['fileMd5'];
    }

    /**
    * Sets fileMd5
    *
    * @param string|null $fileMd5 文件md5
    *
    * @return $this
    */
    public function setFileMd5($fileMd5)
    {
        $this->container['fileMd5'] = $fileMd5;
        return $this;
    }

    /**
    * Gets fileSha256
    *  文件sha256
    *
    * @return string|null
    */
    public function getFileSha256()
    {
        return $this->container['fileSha256'];
    }

    /**
    * Sets fileSha256
    *
    * @param string|null $fileSha256 文件sha256
    *
    * @return $this
    */
    public function setFileSha256($fileSha256)
    {
        $this->container['fileSha256'] = $fileSha256;
        return $this;
    }

    /**
    * Gets fileAttr
    *  文件属性
    *
    * @return string|null
    */
    public function getFileAttr()
    {
        return $this->container['fileAttr'];
    }

    /**
    * Sets fileAttr
    *
    * @param string|null $fileAttr 文件属性
    *
    * @return $this
    */
    public function setFileAttr($fileAttr)
    {
        $this->container['fileAttr'] = $fileAttr;
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

