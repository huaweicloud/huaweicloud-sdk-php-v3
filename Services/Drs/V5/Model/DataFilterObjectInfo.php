<?php

namespace HuaweiCloud\SDK\Drs\V5\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class DataFilterObjectInfo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'DataFilterObjectInfo';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * id  数据过滤对象的唯一标识。用于标识待过滤的数据库对象，填写格式为层级路径形式。 约束：填写格式为以下三种之一：库名-*-*-表名、schema名-*-*-表名、库名-*-*-schema名-*-*-表名。
    * parentId  数据过滤对象的父级对象标识。用于标识当前过滤对象所属的上级数据库对象（库或Schema）。 约束：填写格式为以下三种之一：库名、schema名、库名-*-*-schema名。
    * objectName  数据过滤对象的名称。即当前需要进行过滤操作的具体数据库表名。
    * objectAliasName  数据过滤对象映射名称
    * objectType  数据过滤对象的类型。标识当前过滤对象的数据库对象类型，如表、视图、存储过程等。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'id' => 'string',
            'parentId' => 'string',
            'objectName' => 'string',
            'objectAliasName' => 'string',
            'objectType' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * id  数据过滤对象的唯一标识。用于标识待过滤的数据库对象，填写格式为层级路径形式。 约束：填写格式为以下三种之一：库名-*-*-表名、schema名-*-*-表名、库名-*-*-schema名-*-*-表名。
    * parentId  数据过滤对象的父级对象标识。用于标识当前过滤对象所属的上级数据库对象（库或Schema）。 约束：填写格式为以下三种之一：库名、schema名、库名-*-*-schema名。
    * objectName  数据过滤对象的名称。即当前需要进行过滤操作的具体数据库表名。
    * objectAliasName  数据过滤对象映射名称
    * objectType  数据过滤对象的类型。标识当前过滤对象的数据库对象类型，如表、视图、存储过程等。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'id' => null,
        'parentId' => null,
        'objectName' => null,
        'objectAliasName' => null,
        'objectType' => null
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
    * id  数据过滤对象的唯一标识。用于标识待过滤的数据库对象，填写格式为层级路径形式。 约束：填写格式为以下三种之一：库名-*-*-表名、schema名-*-*-表名、库名-*-*-schema名-*-*-表名。
    * parentId  数据过滤对象的父级对象标识。用于标识当前过滤对象所属的上级数据库对象（库或Schema）。 约束：填写格式为以下三种之一：库名、schema名、库名-*-*-schema名。
    * objectName  数据过滤对象的名称。即当前需要进行过滤操作的具体数据库表名。
    * objectAliasName  数据过滤对象映射名称
    * objectType  数据过滤对象的类型。标识当前过滤对象的数据库对象类型，如表、视图、存储过程等。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'id' => 'id',
            'parentId' => 'parent_id',
            'objectName' => 'object_name',
            'objectAliasName' => 'object_alias_name',
            'objectType' => 'object_type'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * id  数据过滤对象的唯一标识。用于标识待过滤的数据库对象，填写格式为层级路径形式。 约束：填写格式为以下三种之一：库名-*-*-表名、schema名-*-*-表名、库名-*-*-schema名-*-*-表名。
    * parentId  数据过滤对象的父级对象标识。用于标识当前过滤对象所属的上级数据库对象（库或Schema）。 约束：填写格式为以下三种之一：库名、schema名、库名-*-*-schema名。
    * objectName  数据过滤对象的名称。即当前需要进行过滤操作的具体数据库表名。
    * objectAliasName  数据过滤对象映射名称
    * objectType  数据过滤对象的类型。标识当前过滤对象的数据库对象类型，如表、视图、存储过程等。
    *
    * @var string[]
    */
    protected static $setters = [
            'id' => 'setId',
            'parentId' => 'setParentId',
            'objectName' => 'setObjectName',
            'objectAliasName' => 'setObjectAliasName',
            'objectType' => 'setObjectType'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * id  数据过滤对象的唯一标识。用于标识待过滤的数据库对象，填写格式为层级路径形式。 约束：填写格式为以下三种之一：库名-*-*-表名、schema名-*-*-表名、库名-*-*-schema名-*-*-表名。
    * parentId  数据过滤对象的父级对象标识。用于标识当前过滤对象所属的上级数据库对象（库或Schema）。 约束：填写格式为以下三种之一：库名、schema名、库名-*-*-schema名。
    * objectName  数据过滤对象的名称。即当前需要进行过滤操作的具体数据库表名。
    * objectAliasName  数据过滤对象映射名称
    * objectType  数据过滤对象的类型。标识当前过滤对象的数据库对象类型，如表、视图、存储过程等。
    *
    * @var string[]
    */
    protected static $getters = [
            'id' => 'getId',
            'parentId' => 'getParentId',
            'objectName' => 'getObjectName',
            'objectAliasName' => 'getObjectAliasName',
            'objectType' => 'getObjectType'
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
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['parentId'] = isset($data['parentId']) ? $data['parentId'] : null;
        $this->container['objectName'] = isset($data['objectName']) ? $data['objectName'] : null;
        $this->container['objectAliasName'] = isset($data['objectAliasName']) ? $data['objectAliasName'] : null;
        $this->container['objectType'] = isset($data['objectType']) ? $data['objectType'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['id'] === null) {
            $invalidProperties[] = "'id' can't be null";
        }
        if ($this->container['parentId'] === null) {
            $invalidProperties[] = "'parentId' can't be null";
        }
        if ($this->container['objectName'] === null) {
            $invalidProperties[] = "'objectName' can't be null";
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
    * Gets id
    *  数据过滤对象的唯一标识。用于标识待过滤的数据库对象，填写格式为层级路径形式。 约束：填写格式为以下三种之一：库名-*-*-表名、schema名-*-*-表名、库名-*-*-schema名-*-*-表名。
    *
    * @return string
    */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
    * Sets id
    *
    * @param string $id 数据过滤对象的唯一标识。用于标识待过滤的数据库对象，填写格式为层级路径形式。 约束：填写格式为以下三种之一：库名-*-*-表名、schema名-*-*-表名、库名-*-*-schema名-*-*-表名。
    *
    * @return $this
    */
    public function setId($id)
    {
        $this->container['id'] = $id;
        return $this;
    }

    /**
    * Gets parentId
    *  数据过滤对象的父级对象标识。用于标识当前过滤对象所属的上级数据库对象（库或Schema）。 约束：填写格式为以下三种之一：库名、schema名、库名-*-*-schema名。
    *
    * @return string
    */
    public function getParentId()
    {
        return $this->container['parentId'];
    }

    /**
    * Sets parentId
    *
    * @param string $parentId 数据过滤对象的父级对象标识。用于标识当前过滤对象所属的上级数据库对象（库或Schema）。 约束：填写格式为以下三种之一：库名、schema名、库名-*-*-schema名。
    *
    * @return $this
    */
    public function setParentId($parentId)
    {
        $this->container['parentId'] = $parentId;
        return $this;
    }

    /**
    * Gets objectName
    *  数据过滤对象的名称。即当前需要进行过滤操作的具体数据库表名。
    *
    * @return string
    */
    public function getObjectName()
    {
        return $this->container['objectName'];
    }

    /**
    * Sets objectName
    *
    * @param string $objectName 数据过滤对象的名称。即当前需要进行过滤操作的具体数据库表名。
    *
    * @return $this
    */
    public function setObjectName($objectName)
    {
        $this->container['objectName'] = $objectName;
        return $this;
    }

    /**
    * Gets objectAliasName
    *  数据过滤对象映射名称
    *
    * @return string|null
    */
    public function getObjectAliasName()
    {
        return $this->container['objectAliasName'];
    }

    /**
    * Sets objectAliasName
    *
    * @param string|null $objectAliasName 数据过滤对象映射名称
    *
    * @return $this
    */
    public function setObjectAliasName($objectAliasName)
    {
        $this->container['objectAliasName'] = $objectAliasName;
        return $this;
    }

    /**
    * Gets objectType
    *  数据过滤对象的类型。标识当前过滤对象的数据库对象类型，如表、视图、存储过程等。
    *
    * @return string|null
    */
    public function getObjectType()
    {
        return $this->container['objectType'];
    }

    /**
    * Sets objectType
    *
    * @param string|null $objectType 数据过滤对象的类型。标识当前过滤对象的数据库对象类型，如表、视图、存储过程等。
    *
    * @return $this
    */
    public function setObjectType($objectType)
    {
        $this->container['objectType'] = $objectType;
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

