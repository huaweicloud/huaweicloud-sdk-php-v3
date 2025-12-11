<?php

namespace HuaweiCloud\SDK\Dbss\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class AuditSqlResponseSqlOperatedObjInfo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'AuditSqlResponse_sql_operated_obj_info';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * columnName  列名
    * objectType  操作对象类型 - VARIABLE: 变量 - \"\": 空
    * schemaName  schema名称
    * sqlType  sql类型 - LOGIN: LOGIN - CREATE_TABLE: CREATE TABLE - CREATE_TABLESPACE: CREATE TABLESPACE - DROP_TABLE: DROP TABLE - DROP_TABLESPACE: DROP TABLESPACE - DELETE: DELETE - INSERT: INSERT - INSERT_SELECT: INSERT SELECT - SELECT: SELECT - SELECT_FOR_UPDATE: SELECT FOR UPDATE - UPDATE: UPDATE - CREATE_USER: CREATE USER - DROP_USER: DROP USER - GRANT: GRANT - OPERATE: OPERATE - ALL: ALL
    * sysName  系统名称
    * tableName  表名
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'columnName' => 'string',
            'objectType' => 'string',
            'schemaName' => 'string',
            'sqlType' => 'string',
            'sysName' => 'string',
            'tableName' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * columnName  列名
    * objectType  操作对象类型 - VARIABLE: 变量 - \"\": 空
    * schemaName  schema名称
    * sqlType  sql类型 - LOGIN: LOGIN - CREATE_TABLE: CREATE TABLE - CREATE_TABLESPACE: CREATE TABLESPACE - DROP_TABLE: DROP TABLE - DROP_TABLESPACE: DROP TABLESPACE - DELETE: DELETE - INSERT: INSERT - INSERT_SELECT: INSERT SELECT - SELECT: SELECT - SELECT_FOR_UPDATE: SELECT FOR UPDATE - UPDATE: UPDATE - CREATE_USER: CREATE USER - DROP_USER: DROP USER - GRANT: GRANT - OPERATE: OPERATE - ALL: ALL
    * sysName  系统名称
    * tableName  表名
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'columnName' => null,
        'objectType' => null,
        'schemaName' => null,
        'sqlType' => null,
        'sysName' => null,
        'tableName' => null
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
    * columnName  列名
    * objectType  操作对象类型 - VARIABLE: 变量 - \"\": 空
    * schemaName  schema名称
    * sqlType  sql类型 - LOGIN: LOGIN - CREATE_TABLE: CREATE TABLE - CREATE_TABLESPACE: CREATE TABLESPACE - DROP_TABLE: DROP TABLE - DROP_TABLESPACE: DROP TABLESPACE - DELETE: DELETE - INSERT: INSERT - INSERT_SELECT: INSERT SELECT - SELECT: SELECT - SELECT_FOR_UPDATE: SELECT FOR UPDATE - UPDATE: UPDATE - CREATE_USER: CREATE USER - DROP_USER: DROP USER - GRANT: GRANT - OPERATE: OPERATE - ALL: ALL
    * sysName  系统名称
    * tableName  表名
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'columnName' => 'column_name',
            'objectType' => 'object_type',
            'schemaName' => 'schema_name',
            'sqlType' => 'sql_type',
            'sysName' => 'sys_name',
            'tableName' => 'table_name'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * columnName  列名
    * objectType  操作对象类型 - VARIABLE: 变量 - \"\": 空
    * schemaName  schema名称
    * sqlType  sql类型 - LOGIN: LOGIN - CREATE_TABLE: CREATE TABLE - CREATE_TABLESPACE: CREATE TABLESPACE - DROP_TABLE: DROP TABLE - DROP_TABLESPACE: DROP TABLESPACE - DELETE: DELETE - INSERT: INSERT - INSERT_SELECT: INSERT SELECT - SELECT: SELECT - SELECT_FOR_UPDATE: SELECT FOR UPDATE - UPDATE: UPDATE - CREATE_USER: CREATE USER - DROP_USER: DROP USER - GRANT: GRANT - OPERATE: OPERATE - ALL: ALL
    * sysName  系统名称
    * tableName  表名
    *
    * @var string[]
    */
    protected static $setters = [
            'columnName' => 'setColumnName',
            'objectType' => 'setObjectType',
            'schemaName' => 'setSchemaName',
            'sqlType' => 'setSqlType',
            'sysName' => 'setSysName',
            'tableName' => 'setTableName'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * columnName  列名
    * objectType  操作对象类型 - VARIABLE: 变量 - \"\": 空
    * schemaName  schema名称
    * sqlType  sql类型 - LOGIN: LOGIN - CREATE_TABLE: CREATE TABLE - CREATE_TABLESPACE: CREATE TABLESPACE - DROP_TABLE: DROP TABLE - DROP_TABLESPACE: DROP TABLESPACE - DELETE: DELETE - INSERT: INSERT - INSERT_SELECT: INSERT SELECT - SELECT: SELECT - SELECT_FOR_UPDATE: SELECT FOR UPDATE - UPDATE: UPDATE - CREATE_USER: CREATE USER - DROP_USER: DROP USER - GRANT: GRANT - OPERATE: OPERATE - ALL: ALL
    * sysName  系统名称
    * tableName  表名
    *
    * @var string[]
    */
    protected static $getters = [
            'columnName' => 'getColumnName',
            'objectType' => 'getObjectType',
            'schemaName' => 'getSchemaName',
            'sqlType' => 'getSqlType',
            'sysName' => 'getSysName',
            'tableName' => 'getTableName'
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
        $this->container['columnName'] = isset($data['columnName']) ? $data['columnName'] : null;
        $this->container['objectType'] = isset($data['objectType']) ? $data['objectType'] : null;
        $this->container['schemaName'] = isset($data['schemaName']) ? $data['schemaName'] : null;
        $this->container['sqlType'] = isset($data['sqlType']) ? $data['sqlType'] : null;
        $this->container['sysName'] = isset($data['sysName']) ? $data['sysName'] : null;
        $this->container['tableName'] = isset($data['tableName']) ? $data['tableName'] : null;
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
    * Gets columnName
    *  列名
    *
    * @return string|null
    */
    public function getColumnName()
    {
        return $this->container['columnName'];
    }

    /**
    * Sets columnName
    *
    * @param string|null $columnName 列名
    *
    * @return $this
    */
    public function setColumnName($columnName)
    {
        $this->container['columnName'] = $columnName;
        return $this;
    }

    /**
    * Gets objectType
    *  操作对象类型 - VARIABLE: 变量 - \"\": 空
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
    * @param string|null $objectType 操作对象类型 - VARIABLE: 变量 - \"\": 空
    *
    * @return $this
    */
    public function setObjectType($objectType)
    {
        $this->container['objectType'] = $objectType;
        return $this;
    }

    /**
    * Gets schemaName
    *  schema名称
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
    * @param string|null $schemaName schema名称
    *
    * @return $this
    */
    public function setSchemaName($schemaName)
    {
        $this->container['schemaName'] = $schemaName;
        return $this;
    }

    /**
    * Gets sqlType
    *  sql类型 - LOGIN: LOGIN - CREATE_TABLE: CREATE TABLE - CREATE_TABLESPACE: CREATE TABLESPACE - DROP_TABLE: DROP TABLE - DROP_TABLESPACE: DROP TABLESPACE - DELETE: DELETE - INSERT: INSERT - INSERT_SELECT: INSERT SELECT - SELECT: SELECT - SELECT_FOR_UPDATE: SELECT FOR UPDATE - UPDATE: UPDATE - CREATE_USER: CREATE USER - DROP_USER: DROP USER - GRANT: GRANT - OPERATE: OPERATE - ALL: ALL
    *
    * @return string|null
    */
    public function getSqlType()
    {
        return $this->container['sqlType'];
    }

    /**
    * Sets sqlType
    *
    * @param string|null $sqlType sql类型 - LOGIN: LOGIN - CREATE_TABLE: CREATE TABLE - CREATE_TABLESPACE: CREATE TABLESPACE - DROP_TABLE: DROP TABLE - DROP_TABLESPACE: DROP TABLESPACE - DELETE: DELETE - INSERT: INSERT - INSERT_SELECT: INSERT SELECT - SELECT: SELECT - SELECT_FOR_UPDATE: SELECT FOR UPDATE - UPDATE: UPDATE - CREATE_USER: CREATE USER - DROP_USER: DROP USER - GRANT: GRANT - OPERATE: OPERATE - ALL: ALL
    *
    * @return $this
    */
    public function setSqlType($sqlType)
    {
        $this->container['sqlType'] = $sqlType;
        return $this;
    }

    /**
    * Gets sysName
    *  系统名称
    *
    * @return string|null
    */
    public function getSysName()
    {
        return $this->container['sysName'];
    }

    /**
    * Sets sysName
    *
    * @param string|null $sysName 系统名称
    *
    * @return $this
    */
    public function setSysName($sysName)
    {
        $this->container['sysName'] = $sysName;
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

