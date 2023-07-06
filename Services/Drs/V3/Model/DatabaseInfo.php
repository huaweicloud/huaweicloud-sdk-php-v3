<?php

namespace HuaweiCloud\SDK\Drs\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class DatabaseInfo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'DatabaseInfo';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * id  object_type为database时，为库名；object_type为table或者view时，字段值参考示例。
    * parentId  object_type为table或view时需要填写，为库名
    * objectType  类型
    * objectName  数据库对象名称，库名、表名、视图名
    * objectAliasName  别名，映射的新名称。
    * select  是否选中，值为true会进行迁移，false该数据库对象不会迁移，partial为迁移库下面的部分表，不填默认为false
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'id' => 'string',
            'parentId' => 'string',
            'objectType' => 'string',
            'objectName' => 'string',
            'objectAliasName' => 'string',
            'select' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * id  object_type为database时，为库名；object_type为table或者view时，字段值参考示例。
    * parentId  object_type为table或view时需要填写，为库名
    * objectType  类型
    * objectName  数据库对象名称，库名、表名、视图名
    * objectAliasName  别名，映射的新名称。
    * select  是否选中，值为true会进行迁移，false该数据库对象不会迁移，partial为迁移库下面的部分表，不填默认为false
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'id' => null,
        'parentId' => null,
        'objectType' => null,
        'objectName' => null,
        'objectAliasName' => null,
        'select' => null
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
    * id  object_type为database时，为库名；object_type为table或者view时，字段值参考示例。
    * parentId  object_type为table或view时需要填写，为库名
    * objectType  类型
    * objectName  数据库对象名称，库名、表名、视图名
    * objectAliasName  别名，映射的新名称。
    * select  是否选中，值为true会进行迁移，false该数据库对象不会迁移，partial为迁移库下面的部分表，不填默认为false
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'id' => 'id',
            'parentId' => 'parent_id',
            'objectType' => 'object_type',
            'objectName' => 'object_name',
            'objectAliasName' => 'object_alias_name',
            'select' => 'select'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * id  object_type为database时，为库名；object_type为table或者view时，字段值参考示例。
    * parentId  object_type为table或view时需要填写，为库名
    * objectType  类型
    * objectName  数据库对象名称，库名、表名、视图名
    * objectAliasName  别名，映射的新名称。
    * select  是否选中，值为true会进行迁移，false该数据库对象不会迁移，partial为迁移库下面的部分表，不填默认为false
    *
    * @var string[]
    */
    protected static $setters = [
            'id' => 'setId',
            'parentId' => 'setParentId',
            'objectType' => 'setObjectType',
            'objectName' => 'setObjectName',
            'objectAliasName' => 'setObjectAliasName',
            'select' => 'setSelect'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * id  object_type为database时，为库名；object_type为table或者view时，字段值参考示例。
    * parentId  object_type为table或view时需要填写，为库名
    * objectType  类型
    * objectName  数据库对象名称，库名、表名、视图名
    * objectAliasName  别名，映射的新名称。
    * select  是否选中，值为true会进行迁移，false该数据库对象不会迁移，partial为迁移库下面的部分表，不填默认为false
    *
    * @var string[]
    */
    protected static $getters = [
            'id' => 'getId',
            'parentId' => 'getParentId',
            'objectType' => 'getObjectType',
            'objectName' => 'getObjectName',
            'objectAliasName' => 'getObjectAliasName',
            'select' => 'getSelect'
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
    const OBJECT_TYPE_DATABASE = 'database';
    const OBJECT_TYPE_TABLE = 'table';
    const OBJECT_TYPE_SCHEMA = 'schema';
    const OBJECT_TYPE_VIEW = 'view';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getObjectTypeAllowableValues()
    {
        return [
            self::OBJECT_TYPE_DATABASE,
            self::OBJECT_TYPE_TABLE,
            self::OBJECT_TYPE_SCHEMA,
            self::OBJECT_TYPE_VIEW,
        ];
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
        $this->container['objectType'] = isset($data['objectType']) ? $data['objectType'] : null;
        $this->container['objectName'] = isset($data['objectName']) ? $data['objectName'] : null;
        $this->container['objectAliasName'] = isset($data['objectAliasName']) ? $data['objectAliasName'] : null;
        $this->container['select'] = isset($data['select']) ? $data['select'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            $allowedValues = $this->getObjectTypeAllowableValues();
                if (!is_null($this->container['objectType']) && !in_array($this->container['objectType'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'objectType', must be one of '%s'",
                implode("', '", $allowedValues)
                );
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
    *  object_type为database时，为库名；object_type为table或者view时，字段值参考示例。
    *
    * @return string|null
    */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
    * Sets id
    *
    * @param string|null $id object_type为database时，为库名；object_type为table或者view时，字段值参考示例。
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
    *  object_type为table或view时需要填写，为库名
    *
    * @return string|null
    */
    public function getParentId()
    {
        return $this->container['parentId'];
    }

    /**
    * Sets parentId
    *
    * @param string|null $parentId object_type为table或view时需要填写，为库名
    *
    * @return $this
    */
    public function setParentId($parentId)
    {
        $this->container['parentId'] = $parentId;
        return $this;
    }

    /**
    * Gets objectType
    *  类型
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
    * @param string|null $objectType 类型
    *
    * @return $this
    */
    public function setObjectType($objectType)
    {
        $this->container['objectType'] = $objectType;
        return $this;
    }

    /**
    * Gets objectName
    *  数据库对象名称，库名、表名、视图名
    *
    * @return string|null
    */
    public function getObjectName()
    {
        return $this->container['objectName'];
    }

    /**
    * Sets objectName
    *
    * @param string|null $objectName 数据库对象名称，库名、表名、视图名
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
    *  别名，映射的新名称。
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
    * @param string|null $objectAliasName 别名，映射的新名称。
    *
    * @return $this
    */
    public function setObjectAliasName($objectAliasName)
    {
        $this->container['objectAliasName'] = $objectAliasName;
        return $this;
    }

    /**
    * Gets select
    *  是否选中，值为true会进行迁移，false该数据库对象不会迁移，partial为迁移库下面的部分表，不填默认为false
    *
    * @return string|null
    */
    public function getSelect()
    {
        return $this->container['select'];
    }

    /**
    * Sets select
    *
    * @param string|null $select 是否选中，值为true会进行迁移，false该数据库对象不会迁移，partial为迁移库下面的部分表，不填默认为false
    *
    * @return $this
    */
    public function setSelect($select)
    {
        $this->container['select'] = $select;
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

