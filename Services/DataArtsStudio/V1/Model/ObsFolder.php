<?php

namespace HuaweiCloud\SDK\DataArtsStudio\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ObsFolder implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ObsFolder';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * folderName  目录名称
    * folderGuid  目录的guid
    * folderQualifiedName  目录的唯一标识名称
    * objectCount  对象总数
    * dataSize  数据量
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'folderName' => 'string',
            'folderGuid' => 'string',
            'folderQualifiedName' => 'string',
            'objectCount' => 'int',
            'dataSize' => 'double'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * folderName  目录名称
    * folderGuid  目录的guid
    * folderQualifiedName  目录的唯一标识名称
    * objectCount  对象总数
    * dataSize  数据量
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'folderName' => null,
        'folderGuid' => null,
        'folderQualifiedName' => null,
        'objectCount' => null,
        'dataSize' => 'double'
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
    * folderName  目录名称
    * folderGuid  目录的guid
    * folderQualifiedName  目录的唯一标识名称
    * objectCount  对象总数
    * dataSize  数据量
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'folderName' => 'folder_name',
            'folderGuid' => 'folder_guid',
            'folderQualifiedName' => 'folder_qualified_name',
            'objectCount' => 'object_count',
            'dataSize' => 'data_size'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * folderName  目录名称
    * folderGuid  目录的guid
    * folderQualifiedName  目录的唯一标识名称
    * objectCount  对象总数
    * dataSize  数据量
    *
    * @var string[]
    */
    protected static $setters = [
            'folderName' => 'setFolderName',
            'folderGuid' => 'setFolderGuid',
            'folderQualifiedName' => 'setFolderQualifiedName',
            'objectCount' => 'setObjectCount',
            'dataSize' => 'setDataSize'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * folderName  目录名称
    * folderGuid  目录的guid
    * folderQualifiedName  目录的唯一标识名称
    * objectCount  对象总数
    * dataSize  数据量
    *
    * @var string[]
    */
    protected static $getters = [
            'folderName' => 'getFolderName',
            'folderGuid' => 'getFolderGuid',
            'folderQualifiedName' => 'getFolderQualifiedName',
            'objectCount' => 'getObjectCount',
            'dataSize' => 'getDataSize'
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
        $this->container['folderName'] = isset($data['folderName']) ? $data['folderName'] : null;
        $this->container['folderGuid'] = isset($data['folderGuid']) ? $data['folderGuid'] : null;
        $this->container['folderQualifiedName'] = isset($data['folderQualifiedName']) ? $data['folderQualifiedName'] : null;
        $this->container['objectCount'] = isset($data['objectCount']) ? $data['objectCount'] : null;
        $this->container['dataSize'] = isset($data['dataSize']) ? $data['dataSize'] : null;
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
    * Gets folderName
    *  目录名称
    *
    * @return string|null
    */
    public function getFolderName()
    {
        return $this->container['folderName'];
    }

    /**
    * Sets folderName
    *
    * @param string|null $folderName 目录名称
    *
    * @return $this
    */
    public function setFolderName($folderName)
    {
        $this->container['folderName'] = $folderName;
        return $this;
    }

    /**
    * Gets folderGuid
    *  目录的guid
    *
    * @return string|null
    */
    public function getFolderGuid()
    {
        return $this->container['folderGuid'];
    }

    /**
    * Sets folderGuid
    *
    * @param string|null $folderGuid 目录的guid
    *
    * @return $this
    */
    public function setFolderGuid($folderGuid)
    {
        $this->container['folderGuid'] = $folderGuid;
        return $this;
    }

    /**
    * Gets folderQualifiedName
    *  目录的唯一标识名称
    *
    * @return string|null
    */
    public function getFolderQualifiedName()
    {
        return $this->container['folderQualifiedName'];
    }

    /**
    * Sets folderQualifiedName
    *
    * @param string|null $folderQualifiedName 目录的唯一标识名称
    *
    * @return $this
    */
    public function setFolderQualifiedName($folderQualifiedName)
    {
        $this->container['folderQualifiedName'] = $folderQualifiedName;
        return $this;
    }

    /**
    * Gets objectCount
    *  对象总数
    *
    * @return int|null
    */
    public function getObjectCount()
    {
        return $this->container['objectCount'];
    }

    /**
    * Sets objectCount
    *
    * @param int|null $objectCount 对象总数
    *
    * @return $this
    */
    public function setObjectCount($objectCount)
    {
        $this->container['objectCount'] = $objectCount;
        return $this;
    }

    /**
    * Gets dataSize
    *  数据量
    *
    * @return double|null
    */
    public function getDataSize()
    {
        return $this->container['dataSize'];
    }

    /**
    * Sets dataSize
    *
    * @param double|null $dataSize 数据量
    *
    * @return $this
    */
    public function setDataSize($dataSize)
    {
        $this->container['dataSize'] = $dataSize;
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

