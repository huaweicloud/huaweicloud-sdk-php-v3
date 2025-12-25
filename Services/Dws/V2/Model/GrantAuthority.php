<?php

namespace HuaweiCloud\SDK\Dws\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class GrantAuthority implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'GrantAuthority';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * type  **参数解释**： 权限类型。 **取值范围**： - DATABASE：数据库。 - SCHEMA：模式。 - TABLE：表。 - VIEW：视图。 - COLUMN：列。 - FUNCTION：函数。 - SEQUENCE：序列。 - NODEGROUP：节点组。
    * database  **参数解释**： 数据库名称。 **取值范围**： 不涉及。
    * schema  **参数解释**： 模式名称。 **取值范围**： 不涉及。
    * objName  **参数解释**： 对象名称。 **取值范围**： 不涉及。
    * allObject  **参数解释**： 是否所有对象生效。 **取值范围**： 不涉及。
    * future  **参数解释**： 是否对未来对象生效。 **取值范围**： 不涉及。
    * futureObjectOwners  **参数解释**： 未来对象-所属用户。 **取值范围**： 不涉及。
    * columnName  **参数解释**： 列名。 **取值范围**： 不涉及。
    * privileges  **参数解释**： 权限。 **取值范围**： 不涉及。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'type' => 'string',
            'database' => 'string',
            'schema' => 'string',
            'objName' => 'string',
            'allObject' => 'bool',
            'future' => 'bool',
            'futureObjectOwners' => 'string',
            'columnName' => 'string[]',
            'privileges' => '\HuaweiCloud\SDK\Dws\V2\Model\Grant[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * type  **参数解释**： 权限类型。 **取值范围**： - DATABASE：数据库。 - SCHEMA：模式。 - TABLE：表。 - VIEW：视图。 - COLUMN：列。 - FUNCTION：函数。 - SEQUENCE：序列。 - NODEGROUP：节点组。
    * database  **参数解释**： 数据库名称。 **取值范围**： 不涉及。
    * schema  **参数解释**： 模式名称。 **取值范围**： 不涉及。
    * objName  **参数解释**： 对象名称。 **取值范围**： 不涉及。
    * allObject  **参数解释**： 是否所有对象生效。 **取值范围**： 不涉及。
    * future  **参数解释**： 是否对未来对象生效。 **取值范围**： 不涉及。
    * futureObjectOwners  **参数解释**： 未来对象-所属用户。 **取值范围**： 不涉及。
    * columnName  **参数解释**： 列名。 **取值范围**： 不涉及。
    * privileges  **参数解释**： 权限。 **取值范围**： 不涉及。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'type' => null,
        'database' => null,
        'schema' => null,
        'objName' => null,
        'allObject' => null,
        'future' => null,
        'futureObjectOwners' => null,
        'columnName' => null,
        'privileges' => null
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
    * type  **参数解释**： 权限类型。 **取值范围**： - DATABASE：数据库。 - SCHEMA：模式。 - TABLE：表。 - VIEW：视图。 - COLUMN：列。 - FUNCTION：函数。 - SEQUENCE：序列。 - NODEGROUP：节点组。
    * database  **参数解释**： 数据库名称。 **取值范围**： 不涉及。
    * schema  **参数解释**： 模式名称。 **取值范围**： 不涉及。
    * objName  **参数解释**： 对象名称。 **取值范围**： 不涉及。
    * allObject  **参数解释**： 是否所有对象生效。 **取值范围**： 不涉及。
    * future  **参数解释**： 是否对未来对象生效。 **取值范围**： 不涉及。
    * futureObjectOwners  **参数解释**： 未来对象-所属用户。 **取值范围**： 不涉及。
    * columnName  **参数解释**： 列名。 **取值范围**： 不涉及。
    * privileges  **参数解释**： 权限。 **取值范围**： 不涉及。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'type' => 'type',
            'database' => 'database',
            'schema' => 'schema',
            'objName' => 'obj_name',
            'allObject' => 'all_object',
            'future' => 'future',
            'futureObjectOwners' => 'future_object_owners',
            'columnName' => 'column_name',
            'privileges' => 'privileges'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * type  **参数解释**： 权限类型。 **取值范围**： - DATABASE：数据库。 - SCHEMA：模式。 - TABLE：表。 - VIEW：视图。 - COLUMN：列。 - FUNCTION：函数。 - SEQUENCE：序列。 - NODEGROUP：节点组。
    * database  **参数解释**： 数据库名称。 **取值范围**： 不涉及。
    * schema  **参数解释**： 模式名称。 **取值范围**： 不涉及。
    * objName  **参数解释**： 对象名称。 **取值范围**： 不涉及。
    * allObject  **参数解释**： 是否所有对象生效。 **取值范围**： 不涉及。
    * future  **参数解释**： 是否对未来对象生效。 **取值范围**： 不涉及。
    * futureObjectOwners  **参数解释**： 未来对象-所属用户。 **取值范围**： 不涉及。
    * columnName  **参数解释**： 列名。 **取值范围**： 不涉及。
    * privileges  **参数解释**： 权限。 **取值范围**： 不涉及。
    *
    * @var string[]
    */
    protected static $setters = [
            'type' => 'setType',
            'database' => 'setDatabase',
            'schema' => 'setSchema',
            'objName' => 'setObjName',
            'allObject' => 'setAllObject',
            'future' => 'setFuture',
            'futureObjectOwners' => 'setFutureObjectOwners',
            'columnName' => 'setColumnName',
            'privileges' => 'setPrivileges'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * type  **参数解释**： 权限类型。 **取值范围**： - DATABASE：数据库。 - SCHEMA：模式。 - TABLE：表。 - VIEW：视图。 - COLUMN：列。 - FUNCTION：函数。 - SEQUENCE：序列。 - NODEGROUP：节点组。
    * database  **参数解释**： 数据库名称。 **取值范围**： 不涉及。
    * schema  **参数解释**： 模式名称。 **取值范围**： 不涉及。
    * objName  **参数解释**： 对象名称。 **取值范围**： 不涉及。
    * allObject  **参数解释**： 是否所有对象生效。 **取值范围**： 不涉及。
    * future  **参数解释**： 是否对未来对象生效。 **取值范围**： 不涉及。
    * futureObjectOwners  **参数解释**： 未来对象-所属用户。 **取值范围**： 不涉及。
    * columnName  **参数解释**： 列名。 **取值范围**： 不涉及。
    * privileges  **参数解释**： 权限。 **取值范围**： 不涉及。
    *
    * @var string[]
    */
    protected static $getters = [
            'type' => 'getType',
            'database' => 'getDatabase',
            'schema' => 'getSchema',
            'objName' => 'getObjName',
            'allObject' => 'getAllObject',
            'future' => 'getFuture',
            'futureObjectOwners' => 'getFutureObjectOwners',
            'columnName' => 'getColumnName',
            'privileges' => 'getPrivileges'
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
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        $this->container['database'] = isset($data['database']) ? $data['database'] : null;
        $this->container['schema'] = isset($data['schema']) ? $data['schema'] : null;
        $this->container['objName'] = isset($data['objName']) ? $data['objName'] : null;
        $this->container['allObject'] = isset($data['allObject']) ? $data['allObject'] : null;
        $this->container['future'] = isset($data['future']) ? $data['future'] : null;
        $this->container['futureObjectOwners'] = isset($data['futureObjectOwners']) ? $data['futureObjectOwners'] : null;
        $this->container['columnName'] = isset($data['columnName']) ? $data['columnName'] : null;
        $this->container['privileges'] = isset($data['privileges']) ? $data['privileges'] : null;
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
    * Gets type
    *  **参数解释**： 权限类型。 **取值范围**： - DATABASE：数据库。 - SCHEMA：模式。 - TABLE：表。 - VIEW：视图。 - COLUMN：列。 - FUNCTION：函数。 - SEQUENCE：序列。 - NODEGROUP：节点组。
    *
    * @return string|null
    */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
    * Sets type
    *
    * @param string|null $type **参数解释**： 权限类型。 **取值范围**： - DATABASE：数据库。 - SCHEMA：模式。 - TABLE：表。 - VIEW：视图。 - COLUMN：列。 - FUNCTION：函数。 - SEQUENCE：序列。 - NODEGROUP：节点组。
    *
    * @return $this
    */
    public function setType($type)
    {
        $this->container['type'] = $type;
        return $this;
    }

    /**
    * Gets database
    *  **参数解释**： 数据库名称。 **取值范围**： 不涉及。
    *
    * @return string|null
    */
    public function getDatabase()
    {
        return $this->container['database'];
    }

    /**
    * Sets database
    *
    * @param string|null $database **参数解释**： 数据库名称。 **取值范围**： 不涉及。
    *
    * @return $this
    */
    public function setDatabase($database)
    {
        $this->container['database'] = $database;
        return $this;
    }

    /**
    * Gets schema
    *  **参数解释**： 模式名称。 **取值范围**： 不涉及。
    *
    * @return string|null
    */
    public function getSchema()
    {
        return $this->container['schema'];
    }

    /**
    * Sets schema
    *
    * @param string|null $schema **参数解释**： 模式名称。 **取值范围**： 不涉及。
    *
    * @return $this
    */
    public function setSchema($schema)
    {
        $this->container['schema'] = $schema;
        return $this;
    }

    /**
    * Gets objName
    *  **参数解释**： 对象名称。 **取值范围**： 不涉及。
    *
    * @return string|null
    */
    public function getObjName()
    {
        return $this->container['objName'];
    }

    /**
    * Sets objName
    *
    * @param string|null $objName **参数解释**： 对象名称。 **取值范围**： 不涉及。
    *
    * @return $this
    */
    public function setObjName($objName)
    {
        $this->container['objName'] = $objName;
        return $this;
    }

    /**
    * Gets allObject
    *  **参数解释**： 是否所有对象生效。 **取值范围**： 不涉及。
    *
    * @return bool|null
    */
    public function getAllObject()
    {
        return $this->container['allObject'];
    }

    /**
    * Sets allObject
    *
    * @param bool|null $allObject **参数解释**： 是否所有对象生效。 **取值范围**： 不涉及。
    *
    * @return $this
    */
    public function setAllObject($allObject)
    {
        $this->container['allObject'] = $allObject;
        return $this;
    }

    /**
    * Gets future
    *  **参数解释**： 是否对未来对象生效。 **取值范围**： 不涉及。
    *
    * @return bool|null
    */
    public function getFuture()
    {
        return $this->container['future'];
    }

    /**
    * Sets future
    *
    * @param bool|null $future **参数解释**： 是否对未来对象生效。 **取值范围**： 不涉及。
    *
    * @return $this
    */
    public function setFuture($future)
    {
        $this->container['future'] = $future;
        return $this;
    }

    /**
    * Gets futureObjectOwners
    *  **参数解释**： 未来对象-所属用户。 **取值范围**： 不涉及。
    *
    * @return string|null
    */
    public function getFutureObjectOwners()
    {
        return $this->container['futureObjectOwners'];
    }

    /**
    * Sets futureObjectOwners
    *
    * @param string|null $futureObjectOwners **参数解释**： 未来对象-所属用户。 **取值范围**： 不涉及。
    *
    * @return $this
    */
    public function setFutureObjectOwners($futureObjectOwners)
    {
        $this->container['futureObjectOwners'] = $futureObjectOwners;
        return $this;
    }

    /**
    * Gets columnName
    *  **参数解释**： 列名。 **取值范围**： 不涉及。
    *
    * @return string[]|null
    */
    public function getColumnName()
    {
        return $this->container['columnName'];
    }

    /**
    * Sets columnName
    *
    * @param string[]|null $columnName **参数解释**： 列名。 **取值范围**： 不涉及。
    *
    * @return $this
    */
    public function setColumnName($columnName)
    {
        $this->container['columnName'] = $columnName;
        return $this;
    }

    /**
    * Gets privileges
    *  **参数解释**： 权限。 **取值范围**： 不涉及。
    *
    * @return \HuaweiCloud\SDK\Dws\V2\Model\Grant[]|null
    */
    public function getPrivileges()
    {
        return $this->container['privileges'];
    }

    /**
    * Sets privileges
    *
    * @param \HuaweiCloud\SDK\Dws\V2\Model\Grant[]|null $privileges **参数解释**： 权限。 **取值范围**： 不涉及。
    *
    * @return $this
    */
    public function setPrivileges($privileges)
    {
        $this->container['privileges'] = $privileges;
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

