<?php

namespace HuaweiCloud\SDK\DataArtsStudio\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class PermissionApprovalDetailDTOPermissions implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'PermissionApprovalDetailDTO_permissions';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * columnName  列名称
    * databaseName  库名称
    * permissionAction  权限
    * permissionSetId  申请权限所在的空间权限集
    * schemaName  schema名称
    * secrecyLevelId  密级
    * tableName  表名
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'columnName' => 'string',
            'databaseName' => 'string',
            'permissionAction' => 'string[]',
            'permissionSetId' => 'string',
            'schemaName' => 'string',
            'secrecyLevelId' => 'string',
            'tableName' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * columnName  列名称
    * databaseName  库名称
    * permissionAction  权限
    * permissionSetId  申请权限所在的空间权限集
    * schemaName  schema名称
    * secrecyLevelId  密级
    * tableName  表名
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'columnName' => null,
        'databaseName' => null,
        'permissionAction' => null,
        'permissionSetId' => null,
        'schemaName' => null,
        'secrecyLevelId' => null,
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
    * columnName  列名称
    * databaseName  库名称
    * permissionAction  权限
    * permissionSetId  申请权限所在的空间权限集
    * schemaName  schema名称
    * secrecyLevelId  密级
    * tableName  表名
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'columnName' => 'column_name',
            'databaseName' => 'database_name',
            'permissionAction' => 'permission_action',
            'permissionSetId' => 'permission_set_id',
            'schemaName' => 'schema_name',
            'secrecyLevelId' => 'secrecy_level_id',
            'tableName' => 'table_name'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * columnName  列名称
    * databaseName  库名称
    * permissionAction  权限
    * permissionSetId  申请权限所在的空间权限集
    * schemaName  schema名称
    * secrecyLevelId  密级
    * tableName  表名
    *
    * @var string[]
    */
    protected static $setters = [
            'columnName' => 'setColumnName',
            'databaseName' => 'setDatabaseName',
            'permissionAction' => 'setPermissionAction',
            'permissionSetId' => 'setPermissionSetId',
            'schemaName' => 'setSchemaName',
            'secrecyLevelId' => 'setSecrecyLevelId',
            'tableName' => 'setTableName'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * columnName  列名称
    * databaseName  库名称
    * permissionAction  权限
    * permissionSetId  申请权限所在的空间权限集
    * schemaName  schema名称
    * secrecyLevelId  密级
    * tableName  表名
    *
    * @var string[]
    */
    protected static $getters = [
            'columnName' => 'getColumnName',
            'databaseName' => 'getDatabaseName',
            'permissionAction' => 'getPermissionAction',
            'permissionSetId' => 'getPermissionSetId',
            'schemaName' => 'getSchemaName',
            'secrecyLevelId' => 'getSecrecyLevelId',
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
    const PERMISSION_ACTION_SELECT = 'SELECT';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getPermissionActionAllowableValues()
    {
        return [
            self::PERMISSION_ACTION_SELECT,
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
        $this->container['columnName'] = isset($data['columnName']) ? $data['columnName'] : null;
        $this->container['databaseName'] = isset($data['databaseName']) ? $data['databaseName'] : null;
        $this->container['permissionAction'] = isset($data['permissionAction']) ? $data['permissionAction'] : null;
        $this->container['permissionSetId'] = isset($data['permissionSetId']) ? $data['permissionSetId'] : null;
        $this->container['schemaName'] = isset($data['schemaName']) ? $data['schemaName'] : null;
        $this->container['secrecyLevelId'] = isset($data['secrecyLevelId']) ? $data['secrecyLevelId'] : null;
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
            if (!is_null($this->container['columnName']) && (mb_strlen($this->container['columnName']) > 128)) {
                $invalidProperties[] = "invalid value for 'columnName', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['columnName']) && (mb_strlen($this->container['columnName']) < 1)) {
                $invalidProperties[] = "invalid value for 'columnName', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['databaseName']) && (mb_strlen($this->container['databaseName']) > 128)) {
                $invalidProperties[] = "invalid value for 'databaseName', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['databaseName']) && (mb_strlen($this->container['databaseName']) < 1)) {
                $invalidProperties[] = "invalid value for 'databaseName', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['permissionSetId']) && (mb_strlen($this->container['permissionSetId']) > 128)) {
                $invalidProperties[] = "invalid value for 'permissionSetId', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['permissionSetId']) && (mb_strlen($this->container['permissionSetId']) < 1)) {
                $invalidProperties[] = "invalid value for 'permissionSetId', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['schemaName']) && (mb_strlen($this->container['schemaName']) > 128)) {
                $invalidProperties[] = "invalid value for 'schemaName', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['schemaName']) && (mb_strlen($this->container['schemaName']) < 1)) {
                $invalidProperties[] = "invalid value for 'schemaName', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['secrecyLevelId']) && (mb_strlen($this->container['secrecyLevelId']) > 128)) {
                $invalidProperties[] = "invalid value for 'secrecyLevelId', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['secrecyLevelId']) && (mb_strlen($this->container['secrecyLevelId']) < 1)) {
                $invalidProperties[] = "invalid value for 'secrecyLevelId', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['tableName']) && (mb_strlen($this->container['tableName']) > 128)) {
                $invalidProperties[] = "invalid value for 'tableName', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['tableName']) && (mb_strlen($this->container['tableName']) < 1)) {
                $invalidProperties[] = "invalid value for 'tableName', the character length must be bigger than or equal to 1.";
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
    * Gets columnName
    *  列名称
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
    * @param string|null $columnName 列名称
    *
    * @return $this
    */
    public function setColumnName($columnName)
    {
        $this->container['columnName'] = $columnName;
        return $this;
    }

    /**
    * Gets databaseName
    *  库名称
    *
    * @return string|null
    */
    public function getDatabaseName()
    {
        return $this->container['databaseName'];
    }

    /**
    * Sets databaseName
    *
    * @param string|null $databaseName 库名称
    *
    * @return $this
    */
    public function setDatabaseName($databaseName)
    {
        $this->container['databaseName'] = $databaseName;
        return $this;
    }

    /**
    * Gets permissionAction
    *  权限
    *
    * @return string[]|null
    */
    public function getPermissionAction()
    {
        return $this->container['permissionAction'];
    }

    /**
    * Sets permissionAction
    *
    * @param string[]|null $permissionAction 权限
    *
    * @return $this
    */
    public function setPermissionAction($permissionAction)
    {
        $this->container['permissionAction'] = $permissionAction;
        return $this;
    }

    /**
    * Gets permissionSetId
    *  申请权限所在的空间权限集
    *
    * @return string|null
    */
    public function getPermissionSetId()
    {
        return $this->container['permissionSetId'];
    }

    /**
    * Sets permissionSetId
    *
    * @param string|null $permissionSetId 申请权限所在的空间权限集
    *
    * @return $this
    */
    public function setPermissionSetId($permissionSetId)
    {
        $this->container['permissionSetId'] = $permissionSetId;
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
    * Gets secrecyLevelId
    *  密级
    *
    * @return string|null
    */
    public function getSecrecyLevelId()
    {
        return $this->container['secrecyLevelId'];
    }

    /**
    * Sets secrecyLevelId
    *
    * @param string|null $secrecyLevelId 密级
    *
    * @return $this
    */
    public function setSecrecyLevelId($secrecyLevelId)
    {
        $this->container['secrecyLevelId'] = $secrecyLevelId;
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

