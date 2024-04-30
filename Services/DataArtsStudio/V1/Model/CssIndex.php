<?php

namespace HuaweiCloud\SDK\DataArtsStudio\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class CssIndex implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'CssIndex';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * indexName  索引名称
    * indexGuid  索引的guid
    * indexQualifiedName  索引的唯一标识名称
    * indexDocCount  索引中文档总数
    * indexDataSize  索引数据量大小
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'indexName' => 'string',
            'indexGuid' => 'string',
            'indexQualifiedName' => 'string',
            'indexDocCount' => 'int',
            'indexDataSize' => 'double'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * indexName  索引名称
    * indexGuid  索引的guid
    * indexQualifiedName  索引的唯一标识名称
    * indexDocCount  索引中文档总数
    * indexDataSize  索引数据量大小
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'indexName' => null,
        'indexGuid' => null,
        'indexQualifiedName' => null,
        'indexDocCount' => null,
        'indexDataSize' => 'double'
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
    * indexName  索引名称
    * indexGuid  索引的guid
    * indexQualifiedName  索引的唯一标识名称
    * indexDocCount  索引中文档总数
    * indexDataSize  索引数据量大小
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'indexName' => 'index_name',
            'indexGuid' => 'index_guid',
            'indexQualifiedName' => 'index_qualified_name',
            'indexDocCount' => 'index_doc_count',
            'indexDataSize' => 'index_data_size'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * indexName  索引名称
    * indexGuid  索引的guid
    * indexQualifiedName  索引的唯一标识名称
    * indexDocCount  索引中文档总数
    * indexDataSize  索引数据量大小
    *
    * @var string[]
    */
    protected static $setters = [
            'indexName' => 'setIndexName',
            'indexGuid' => 'setIndexGuid',
            'indexQualifiedName' => 'setIndexQualifiedName',
            'indexDocCount' => 'setIndexDocCount',
            'indexDataSize' => 'setIndexDataSize'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * indexName  索引名称
    * indexGuid  索引的guid
    * indexQualifiedName  索引的唯一标识名称
    * indexDocCount  索引中文档总数
    * indexDataSize  索引数据量大小
    *
    * @var string[]
    */
    protected static $getters = [
            'indexName' => 'getIndexName',
            'indexGuid' => 'getIndexGuid',
            'indexQualifiedName' => 'getIndexQualifiedName',
            'indexDocCount' => 'getIndexDocCount',
            'indexDataSize' => 'getIndexDataSize'
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
        $this->container['indexName'] = isset($data['indexName']) ? $data['indexName'] : null;
        $this->container['indexGuid'] = isset($data['indexGuid']) ? $data['indexGuid'] : null;
        $this->container['indexQualifiedName'] = isset($data['indexQualifiedName']) ? $data['indexQualifiedName'] : null;
        $this->container['indexDocCount'] = isset($data['indexDocCount']) ? $data['indexDocCount'] : null;
        $this->container['indexDataSize'] = isset($data['indexDataSize']) ? $data['indexDataSize'] : null;
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
    * Gets indexName
    *  索引名称
    *
    * @return string|null
    */
    public function getIndexName()
    {
        return $this->container['indexName'];
    }

    /**
    * Sets indexName
    *
    * @param string|null $indexName 索引名称
    *
    * @return $this
    */
    public function setIndexName($indexName)
    {
        $this->container['indexName'] = $indexName;
        return $this;
    }

    /**
    * Gets indexGuid
    *  索引的guid
    *
    * @return string|null
    */
    public function getIndexGuid()
    {
        return $this->container['indexGuid'];
    }

    /**
    * Sets indexGuid
    *
    * @param string|null $indexGuid 索引的guid
    *
    * @return $this
    */
    public function setIndexGuid($indexGuid)
    {
        $this->container['indexGuid'] = $indexGuid;
        return $this;
    }

    /**
    * Gets indexQualifiedName
    *  索引的唯一标识名称
    *
    * @return string|null
    */
    public function getIndexQualifiedName()
    {
        return $this->container['indexQualifiedName'];
    }

    /**
    * Sets indexQualifiedName
    *
    * @param string|null $indexQualifiedName 索引的唯一标识名称
    *
    * @return $this
    */
    public function setIndexQualifiedName($indexQualifiedName)
    {
        $this->container['indexQualifiedName'] = $indexQualifiedName;
        return $this;
    }

    /**
    * Gets indexDocCount
    *  索引中文档总数
    *
    * @return int|null
    */
    public function getIndexDocCount()
    {
        return $this->container['indexDocCount'];
    }

    /**
    * Sets indexDocCount
    *
    * @param int|null $indexDocCount 索引中文档总数
    *
    * @return $this
    */
    public function setIndexDocCount($indexDocCount)
    {
        $this->container['indexDocCount'] = $indexDocCount;
        return $this;
    }

    /**
    * Gets indexDataSize
    *  索引数据量大小
    *
    * @return double|null
    */
    public function getIndexDataSize()
    {
        return $this->container['indexDataSize'];
    }

    /**
    * Sets indexDataSize
    *
    * @param double|null $indexDataSize 索引数据量大小
    *
    * @return $this
    */
    public function setIndexDataSize($indexDataSize)
    {
        $this->container['indexDataSize'] = $indexDataSize;
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

