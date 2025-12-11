<?php

namespace HuaweiCloud\SDK\Hss\V5\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class IsolatedFileRequestInfo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'IsolatedFileRequestInfo';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * hostId  **参数解释**： 服务器（主机）的唯一标识ID **取值范围**： 字符长度1-64位
    * fileHash  **参数解释**： 文件哈希 **取值范围**： 字符长度1-256位
    * filePath  **参数解释**： 文件路径 **取值范围**： 字符长度1-256位
    * fileAttr  **参数解释**： 文件的系统属性（如读写权限、隐藏属性、执行权限等） **取值范围**： 字符长度1-256位
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'hostId' => 'string',
            'fileHash' => 'string',
            'filePath' => 'string',
            'fileAttr' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * hostId  **参数解释**： 服务器（主机）的唯一标识ID **取值范围**： 字符长度1-64位
    * fileHash  **参数解释**： 文件哈希 **取值范围**： 字符长度1-256位
    * filePath  **参数解释**： 文件路径 **取值范围**： 字符长度1-256位
    * fileAttr  **参数解释**： 文件的系统属性（如读写权限、隐藏属性、执行权限等） **取值范围**： 字符长度1-256位
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'hostId' => null,
        'fileHash' => null,
        'filePath' => null,
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
    * hostId  **参数解释**： 服务器（主机）的唯一标识ID **取值范围**： 字符长度1-64位
    * fileHash  **参数解释**： 文件哈希 **取值范围**： 字符长度1-256位
    * filePath  **参数解释**： 文件路径 **取值范围**： 字符长度1-256位
    * fileAttr  **参数解释**： 文件的系统属性（如读写权限、隐藏属性、执行权限等） **取值范围**： 字符长度1-256位
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'hostId' => 'host_id',
            'fileHash' => 'file_hash',
            'filePath' => 'file_path',
            'fileAttr' => 'file_attr'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * hostId  **参数解释**： 服务器（主机）的唯一标识ID **取值范围**： 字符长度1-64位
    * fileHash  **参数解释**： 文件哈希 **取值范围**： 字符长度1-256位
    * filePath  **参数解释**： 文件路径 **取值范围**： 字符长度1-256位
    * fileAttr  **参数解释**： 文件的系统属性（如读写权限、隐藏属性、执行权限等） **取值范围**： 字符长度1-256位
    *
    * @var string[]
    */
    protected static $setters = [
            'hostId' => 'setHostId',
            'fileHash' => 'setFileHash',
            'filePath' => 'setFilePath',
            'fileAttr' => 'setFileAttr'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * hostId  **参数解释**： 服务器（主机）的唯一标识ID **取值范围**： 字符长度1-64位
    * fileHash  **参数解释**： 文件哈希 **取值范围**： 字符长度1-256位
    * filePath  **参数解释**： 文件路径 **取值范围**： 字符长度1-256位
    * fileAttr  **参数解释**： 文件的系统属性（如读写权限、隐藏属性、执行权限等） **取值范围**： 字符长度1-256位
    *
    * @var string[]
    */
    protected static $getters = [
            'hostId' => 'getHostId',
            'fileHash' => 'getFileHash',
            'filePath' => 'getFilePath',
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
        $this->container['hostId'] = isset($data['hostId']) ? $data['hostId'] : null;
        $this->container['fileHash'] = isset($data['fileHash']) ? $data['fileHash'] : null;
        $this->container['filePath'] = isset($data['filePath']) ? $data['filePath'] : null;
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
            if (!is_null($this->container['hostId']) && (mb_strlen($this->container['hostId']) > 64)) {
                $invalidProperties[] = "invalid value for 'hostId', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['hostId']) && (mb_strlen($this->container['hostId']) < 1)) {
                $invalidProperties[] = "invalid value for 'hostId', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['hostId']) && !preg_match("/^.*$/", $this->container['hostId'])) {
                $invalidProperties[] = "invalid value for 'hostId', must be conform to the pattern /^.*$/.";
            }
            if (!is_null($this->container['fileHash']) && !preg_match("/^.*$/", $this->container['fileHash'])) {
                $invalidProperties[] = "invalid value for 'fileHash', must be conform to the pattern /^.*$/.";
            }
            if (!is_null($this->container['filePath']) && !preg_match("/^.*$/", $this->container['filePath'])) {
                $invalidProperties[] = "invalid value for 'filePath', must be conform to the pattern /^.*$/.";
            }
            if (!is_null($this->container['fileAttr']) && !preg_match("/^.*$/", $this->container['fileAttr'])) {
                $invalidProperties[] = "invalid value for 'fileAttr', must be conform to the pattern /^.*$/.";
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
    * Gets hostId
    *  **参数解释**： 服务器（主机）的唯一标识ID **取值范围**： 字符长度1-64位
    *
    * @return string|null
    */
    public function getHostId()
    {
        return $this->container['hostId'];
    }

    /**
    * Sets hostId
    *
    * @param string|null $hostId **参数解释**： 服务器（主机）的唯一标识ID **取值范围**： 字符长度1-64位
    *
    * @return $this
    */
    public function setHostId($hostId)
    {
        $this->container['hostId'] = $hostId;
        return $this;
    }

    /**
    * Gets fileHash
    *  **参数解释**： 文件哈希 **取值范围**： 字符长度1-256位
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
    * @param string|null $fileHash **参数解释**： 文件哈希 **取值范围**： 字符长度1-256位
    *
    * @return $this
    */
    public function setFileHash($fileHash)
    {
        $this->container['fileHash'] = $fileHash;
        return $this;
    }

    /**
    * Gets filePath
    *  **参数解释**： 文件路径 **取值范围**： 字符长度1-256位
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
    * @param string|null $filePath **参数解释**： 文件路径 **取值范围**： 字符长度1-256位
    *
    * @return $this
    */
    public function setFilePath($filePath)
    {
        $this->container['filePath'] = $filePath;
        return $this;
    }

    /**
    * Gets fileAttr
    *  **参数解释**： 文件的系统属性（如读写权限、隐藏属性、执行权限等） **取值范围**： 字符长度1-256位
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
    * @param string|null $fileAttr **参数解释**： 文件的系统属性（如读写权限、隐藏属性、执行权限等） **取值范围**： 字符长度1-256位
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

