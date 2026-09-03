<?php

namespace HuaweiCloud\SDK\Das\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class DeleteDbObjNewRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'DeleteDbObjNewRequest';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * connectionId  连接ID
    * dbName  数据库名称
    * schemaName  Schema名称
    * tableName  表名
    * objName  对象名称
    * objId  对象ID
    * objectSubType  对象子类型
    * objType  对象类型
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'connectionId' => 'string',
            'dbName' => 'string',
            'schemaName' => 'string',
            'tableName' => 'string',
            'objName' => 'string',
            'objId' => 'string',
            'objectSubType' => 'string',
            'objType' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * connectionId  连接ID
    * dbName  数据库名称
    * schemaName  Schema名称
    * tableName  表名
    * objName  对象名称
    * objId  对象ID
    * objectSubType  对象子类型
    * objType  对象类型
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'connectionId' => null,
        'dbName' => null,
        'schemaName' => null,
        'tableName' => null,
        'objName' => null,
        'objId' => null,
        'objectSubType' => null,
        'objType' => null
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
    * connectionId  连接ID
    * dbName  数据库名称
    * schemaName  Schema名称
    * tableName  表名
    * objName  对象名称
    * objId  对象ID
    * objectSubType  对象子类型
    * objType  对象类型
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'connectionId' => 'connection_id',
            'dbName' => 'db_name',
            'schemaName' => 'schema_name',
            'tableName' => 'table_name',
            'objName' => 'obj_name',
            'objId' => 'obj_id',
            'objectSubType' => 'object_sub_type',
            'objType' => 'obj_type'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * connectionId  连接ID
    * dbName  数据库名称
    * schemaName  Schema名称
    * tableName  表名
    * objName  对象名称
    * objId  对象ID
    * objectSubType  对象子类型
    * objType  对象类型
    *
    * @var string[]
    */
    protected static $setters = [
            'connectionId' => 'setConnectionId',
            'dbName' => 'setDbName',
            'schemaName' => 'setSchemaName',
            'tableName' => 'setTableName',
            'objName' => 'setObjName',
            'objId' => 'setObjId',
            'objectSubType' => 'setObjectSubType',
            'objType' => 'setObjType'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * connectionId  连接ID
    * dbName  数据库名称
    * schemaName  Schema名称
    * tableName  表名
    * objName  对象名称
    * objId  对象ID
    * objectSubType  对象子类型
    * objType  对象类型
    *
    * @var string[]
    */
    protected static $getters = [
            'connectionId' => 'getConnectionId',
            'dbName' => 'getDbName',
            'schemaName' => 'getSchemaName',
            'tableName' => 'getTableName',
            'objName' => 'getObjName',
            'objId' => 'getObjId',
            'objectSubType' => 'getObjectSubType',
            'objType' => 'getObjType'
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
        $this->container['connectionId'] = isset($data['connectionId']) ? $data['connectionId'] : null;
        $this->container['dbName'] = isset($data['dbName']) ? $data['dbName'] : null;
        $this->container['schemaName'] = isset($data['schemaName']) ? $data['schemaName'] : null;
        $this->container['tableName'] = isset($data['tableName']) ? $data['tableName'] : null;
        $this->container['objName'] = isset($data['objName']) ? $data['objName'] : null;
        $this->container['objId'] = isset($data['objId']) ? $data['objId'] : null;
        $this->container['objectSubType'] = isset($data['objectSubType']) ? $data['objectSubType'] : null;
        $this->container['objType'] = isset($data['objType']) ? $data['objType'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['connectionId'] === null) {
            $invalidProperties[] = "'connectionId' can't be null";
        }
        if ($this->container['dbName'] === null) {
            $invalidProperties[] = "'dbName' can't be null";
        }
        if ($this->container['objType'] === null) {
            $invalidProperties[] = "'objType' can't be null";
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
    * Gets connectionId
    *  连接ID
    *
    * @return string
    */
    public function getConnectionId()
    {
        return $this->container['connectionId'];
    }

    /**
    * Sets connectionId
    *
    * @param string $connectionId 连接ID
    *
    * @return $this
    */
    public function setConnectionId($connectionId)
    {
        $this->container['connectionId'] = $connectionId;
        return $this;
    }

    /**
    * Gets dbName
    *  数据库名称
    *
    * @return string
    */
    public function getDbName()
    {
        return $this->container['dbName'];
    }

    /**
    * Sets dbName
    *
    * @param string $dbName 数据库名称
    *
    * @return $this
    */
    public function setDbName($dbName)
    {
        $this->container['dbName'] = $dbName;
        return $this;
    }

    /**
    * Gets schemaName
    *  Schema名称
    *
    * @return string|null
    */
    public function getSchemaName()
    {
        return $this->container['schemaName'];
    }

    /**
    * Sets schemaName
    *
    * @param string|null $schemaName Schema名称
    *
    * @return $this
    */
    public function setSchemaName($schemaName)
    {
        $this->container['schemaName'] = $schemaName;
        return $this;
    }

    /**
    * Gets tableName
    *  表名
    *
    * @return string|null
    */
    public function getTableName()
    {
        return $this->container['tableName'];
    }

    /**
    * Sets tableName
    *
    * @param string|null $tableName 表名
    *
    * @return $this
    */
    public function setTableName($tableName)
    {
        $this->container['tableName'] = $tableName;
        return $this;
    }

    /**
    * Gets objName
    *  对象名称
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
    * @param string|null $objName 对象名称
    *
    * @return $this
    */
    public function setObjName($objName)
    {
        $this->container['objName'] = $objName;
        return $this;
    }

    /**
    * Gets objId
    *  对象ID
    *
    * @return string|null
    */
    public function getObjId()
    {
        return $this->container['objId'];
    }

    /**
    * Sets objId
    *
    * @param string|null $objId 对象ID
    *
    * @return $this
    */
    public function setObjId($objId)
    {
        $this->container['objId'] = $objId;
        return $this;
    }

    /**
    * Gets objectSubType
    *  对象子类型
    *
    * @return string|null
    */
    public function getObjectSubType()
    {
        return $this->container['objectSubType'];
    }

    /**
    * Sets objectSubType
    *
    * @param string|null $objectSubType 对象子类型
    *
    * @return $this
    */
    public function setObjectSubType($objectSubType)
    {
        $this->container['objectSubType'] = $objectSubType;
        return $this;
    }

    /**
    * Gets objType
    *  对象类型
    *
    * @return string
    */
    public function getObjType()
    {
        return $this->container['objType'];
    }

    /**
    * Sets objType
    *
    * @param string $objType 对象类型
    *
    * @return $this
    */
    public function setObjType($objType)
    {
        $this->container['objType'] = $objType;
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

