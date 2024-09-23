<?php

namespace HuaweiCloud\SDK\Dds\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class DatabaseInfoItem implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'DatabaseInfoItem';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * name  数据库名称, config admin 库不做展示。
    * dataSize  数据库存储大小（以GB为单位）,保留两位小数。 存储大小: 实际磁盘上占用的物理空间大小，包括数据文件、日志文件、索引文件等。
    * storageSize  数据库逻辑大小 （以GB为单位）,保留两位小数。 逻辑大小指的是数据库中实际存储的数据大小，不包括索引大小、日志大小等。
    * collectionNum  数据库中的集合数。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'name' => 'string',
            'dataSize' => 'string',
            'storageSize' => 'string',
            'collectionNum' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * name  数据库名称, config admin 库不做展示。
    * dataSize  数据库存储大小（以GB为单位）,保留两位小数。 存储大小: 实际磁盘上占用的物理空间大小，包括数据文件、日志文件、索引文件等。
    * storageSize  数据库逻辑大小 （以GB为单位）,保留两位小数。 逻辑大小指的是数据库中实际存储的数据大小，不包括索引大小、日志大小等。
    * collectionNum  数据库中的集合数。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'name' => null,
        'dataSize' => null,
        'storageSize' => null,
        'collectionNum' => null
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
    * name  数据库名称, config admin 库不做展示。
    * dataSize  数据库存储大小（以GB为单位）,保留两位小数。 存储大小: 实际磁盘上占用的物理空间大小，包括数据文件、日志文件、索引文件等。
    * storageSize  数据库逻辑大小 （以GB为单位）,保留两位小数。 逻辑大小指的是数据库中实际存储的数据大小，不包括索引大小、日志大小等。
    * collectionNum  数据库中的集合数。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'name' => 'name',
            'dataSize' => 'data_size',
            'storageSize' => 'storage_size',
            'collectionNum' => 'collection_num'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * name  数据库名称, config admin 库不做展示。
    * dataSize  数据库存储大小（以GB为单位）,保留两位小数。 存储大小: 实际磁盘上占用的物理空间大小，包括数据文件、日志文件、索引文件等。
    * storageSize  数据库逻辑大小 （以GB为单位）,保留两位小数。 逻辑大小指的是数据库中实际存储的数据大小，不包括索引大小、日志大小等。
    * collectionNum  数据库中的集合数。
    *
    * @var string[]
    */
    protected static $setters = [
            'name' => 'setName',
            'dataSize' => 'setDataSize',
            'storageSize' => 'setStorageSize',
            'collectionNum' => 'setCollectionNum'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * name  数据库名称, config admin 库不做展示。
    * dataSize  数据库存储大小（以GB为单位）,保留两位小数。 存储大小: 实际磁盘上占用的物理空间大小，包括数据文件、日志文件、索引文件等。
    * storageSize  数据库逻辑大小 （以GB为单位）,保留两位小数。 逻辑大小指的是数据库中实际存储的数据大小，不包括索引大小、日志大小等。
    * collectionNum  数据库中的集合数。
    *
    * @var string[]
    */
    protected static $getters = [
            'name' => 'getName',
            'dataSize' => 'getDataSize',
            'storageSize' => 'getStorageSize',
            'collectionNum' => 'getCollectionNum'
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
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['dataSize'] = isset($data['dataSize']) ? $data['dataSize'] : null;
        $this->container['storageSize'] = isset($data['storageSize']) ? $data['storageSize'] : null;
        $this->container['collectionNum'] = isset($data['collectionNum']) ? $data['collectionNum'] : null;
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
    * Gets name
    *  数据库名称, config admin 库不做展示。
    *
    * @return string|null
    */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
    * Sets name
    *
    * @param string|null $name 数据库名称, config admin 库不做展示。
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets dataSize
    *  数据库存储大小（以GB为单位）,保留两位小数。 存储大小: 实际磁盘上占用的物理空间大小，包括数据文件、日志文件、索引文件等。
    *
    * @return string|null
    */
    public function getDataSize()
    {
        return $this->container['dataSize'];
    }

    /**
    * Sets dataSize
    *
    * @param string|null $dataSize 数据库存储大小（以GB为单位）,保留两位小数。 存储大小: 实际磁盘上占用的物理空间大小，包括数据文件、日志文件、索引文件等。
    *
    * @return $this
    */
    public function setDataSize($dataSize)
    {
        $this->container['dataSize'] = $dataSize;
        return $this;
    }

    /**
    * Gets storageSize
    *  数据库逻辑大小 （以GB为单位）,保留两位小数。 逻辑大小指的是数据库中实际存储的数据大小，不包括索引大小、日志大小等。
    *
    * @return string|null
    */
    public function getStorageSize()
    {
        return $this->container['storageSize'];
    }

    /**
    * Sets storageSize
    *
    * @param string|null $storageSize 数据库逻辑大小 （以GB为单位）,保留两位小数。 逻辑大小指的是数据库中实际存储的数据大小，不包括索引大小、日志大小等。
    *
    * @return $this
    */
    public function setStorageSize($storageSize)
    {
        $this->container['storageSize'] = $storageSize;
        return $this;
    }

    /**
    * Gets collectionNum
    *  数据库中的集合数。
    *
    * @return int|null
    */
    public function getCollectionNum()
    {
        return $this->container['collectionNum'];
    }

    /**
    * Sets collectionNum
    *
    * @param int|null $collectionNum 数据库中的集合数。
    *
    * @return $this
    */
    public function setCollectionNum($collectionNum)
    {
        $this->container['collectionNum'] = $collectionNum;
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

