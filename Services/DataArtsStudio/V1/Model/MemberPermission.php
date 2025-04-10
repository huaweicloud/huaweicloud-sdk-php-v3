<?php

namespace HuaweiCloud\SDK\DataArtsStudio\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class MemberPermission implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'MemberPermission';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * permissionSetId  权限集ID
    * permissionSource  权限来源：1、权限集名称。2、权限审批
    * permissionActions  权限类别,ALL,SELECT,UPDATE,CREATE,DROP,ALTER,INDEX,LOCK,READ,WRITE
    * url  Hive数据源，指定url权限的策略信息
    * datasourceType  数据源类型
    * clusterName  集群名
    * databaseName  数据库名
    * schemaName  schema名
    * tableName  表名
    * columnName  列名
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'permissionSetId' => 'string',
            'permissionSource' => 'string',
            'permissionActions' => 'string',
            'url' => 'string',
            'datasourceType' => 'string',
            'clusterName' => 'string',
            'databaseName' => 'string',
            'schemaName' => 'string',
            'tableName' => 'string',
            'columnName' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * permissionSetId  权限集ID
    * permissionSource  权限来源：1、权限集名称。2、权限审批
    * permissionActions  权限类别,ALL,SELECT,UPDATE,CREATE,DROP,ALTER,INDEX,LOCK,READ,WRITE
    * url  Hive数据源，指定url权限的策略信息
    * datasourceType  数据源类型
    * clusterName  集群名
    * databaseName  数据库名
    * schemaName  schema名
    * tableName  表名
    * columnName  列名
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'permissionSetId' => null,
        'permissionSource' => null,
        'permissionActions' => null,
        'url' => null,
        'datasourceType' => null,
        'clusterName' => null,
        'databaseName' => null,
        'schemaName' => null,
        'tableName' => null,
        'columnName' => null
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
    * permissionSetId  权限集ID
    * permissionSource  权限来源：1、权限集名称。2、权限审批
    * permissionActions  权限类别,ALL,SELECT,UPDATE,CREATE,DROP,ALTER,INDEX,LOCK,READ,WRITE
    * url  Hive数据源，指定url权限的策略信息
    * datasourceType  数据源类型
    * clusterName  集群名
    * databaseName  数据库名
    * schemaName  schema名
    * tableName  表名
    * columnName  列名
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'permissionSetId' => 'permission_set_id',
            'permissionSource' => 'permission_source',
            'permissionActions' => 'permission_actions',
            'url' => 'url',
            'datasourceType' => 'datasource_type',
            'clusterName' => 'cluster_name',
            'databaseName' => 'database_name',
            'schemaName' => 'schema_name',
            'tableName' => 'table_name',
            'columnName' => 'column_name'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * permissionSetId  权限集ID
    * permissionSource  权限来源：1、权限集名称。2、权限审批
    * permissionActions  权限类别,ALL,SELECT,UPDATE,CREATE,DROP,ALTER,INDEX,LOCK,READ,WRITE
    * url  Hive数据源，指定url权限的策略信息
    * datasourceType  数据源类型
    * clusterName  集群名
    * databaseName  数据库名
    * schemaName  schema名
    * tableName  表名
    * columnName  列名
    *
    * @var string[]
    */
    protected static $setters = [
            'permissionSetId' => 'setPermissionSetId',
            'permissionSource' => 'setPermissionSource',
            'permissionActions' => 'setPermissionActions',
            'url' => 'setUrl',
            'datasourceType' => 'setDatasourceType',
            'clusterName' => 'setClusterName',
            'databaseName' => 'setDatabaseName',
            'schemaName' => 'setSchemaName',
            'tableName' => 'setTableName',
            'columnName' => 'setColumnName'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * permissionSetId  权限集ID
    * permissionSource  权限来源：1、权限集名称。2、权限审批
    * permissionActions  权限类别,ALL,SELECT,UPDATE,CREATE,DROP,ALTER,INDEX,LOCK,READ,WRITE
    * url  Hive数据源，指定url权限的策略信息
    * datasourceType  数据源类型
    * clusterName  集群名
    * databaseName  数据库名
    * schemaName  schema名
    * tableName  表名
    * columnName  列名
    *
    * @var string[]
    */
    protected static $getters = [
            'permissionSetId' => 'getPermissionSetId',
            'permissionSource' => 'getPermissionSource',
            'permissionActions' => 'getPermissionActions',
            'url' => 'getUrl',
            'datasourceType' => 'getDatasourceType',
            'clusterName' => 'getClusterName',
            'databaseName' => 'getDatabaseName',
            'schemaName' => 'getSchemaName',
            'tableName' => 'getTableName',
            'columnName' => 'getColumnName'
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
    const PERMISSION_ACTIONS_ALL = 'ALL';
    const PERMISSION_ACTIONS_SELECT = 'SELECT';
    const PERMISSION_ACTIONS_UPDATE = 'UPDATE';
    const PERMISSION_ACTIONS_CREATE = 'CREATE';
    const PERMISSION_ACTIONS_DROP = 'DROP';
    const PERMISSION_ACTIONS_ALTER = 'ALTER';
    const PERMISSION_ACTIONS_INDEX = 'INDEX';
    const PERMISSION_ACTIONS_LOCK = 'LOCK';
    const PERMISSION_ACTIONS_READ = 'READ';
    const PERMISSION_ACTIONS_WRITE = 'WRITE';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getPermissionActionsAllowableValues()
    {
        return [
            self::PERMISSION_ACTIONS_ALL,
            self::PERMISSION_ACTIONS_SELECT,
            self::PERMISSION_ACTIONS_UPDATE,
            self::PERMISSION_ACTIONS_CREATE,
            self::PERMISSION_ACTIONS_DROP,
            self::PERMISSION_ACTIONS_ALTER,
            self::PERMISSION_ACTIONS_INDEX,
            self::PERMISSION_ACTIONS_LOCK,
            self::PERMISSION_ACTIONS_READ,
            self::PERMISSION_ACTIONS_WRITE,
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
        $this->container['permissionSetId'] = isset($data['permissionSetId']) ? $data['permissionSetId'] : null;
        $this->container['permissionSource'] = isset($data['permissionSource']) ? $data['permissionSource'] : null;
        $this->container['permissionActions'] = isset($data['permissionActions']) ? $data['permissionActions'] : null;
        $this->container['url'] = isset($data['url']) ? $data['url'] : null;
        $this->container['datasourceType'] = isset($data['datasourceType']) ? $data['datasourceType'] : null;
        $this->container['clusterName'] = isset($data['clusterName']) ? $data['clusterName'] : null;
        $this->container['databaseName'] = isset($data['databaseName']) ? $data['databaseName'] : null;
        $this->container['schemaName'] = isset($data['schemaName']) ? $data['schemaName'] : null;
        $this->container['tableName'] = isset($data['tableName']) ? $data['tableName'] : null;
        $this->container['columnName'] = isset($data['columnName']) ? $data['columnName'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['permissionSetId'] === null) {
            $invalidProperties[] = "'permissionSetId' can't be null";
        }
            if ((mb_strlen($this->container['permissionSetId']) > 128)) {
                $invalidProperties[] = "invalid value for 'permissionSetId', the character length must be smaller than or equal to 128.";
            }
            if ((mb_strlen($this->container['permissionSetId']) < 1)) {
                $invalidProperties[] = "invalid value for 'permissionSetId', the character length must be bigger than or equal to 1.";
            }
        if ($this->container['permissionSource'] === null) {
            $invalidProperties[] = "'permissionSource' can't be null";
        }
            if ((mb_strlen($this->container['permissionSource']) > 128)) {
                $invalidProperties[] = "invalid value for 'permissionSource', the character length must be smaller than or equal to 128.";
            }
            if ((mb_strlen($this->container['permissionSource']) < 1)) {
                $invalidProperties[] = "invalid value for 'permissionSource', the character length must be bigger than or equal to 1.";
            }
        if ($this->container['permissionActions'] === null) {
            $invalidProperties[] = "'permissionActions' can't be null";
        }
            $allowedValues = $this->getPermissionActionsAllowableValues();
                if (!is_null($this->container['permissionActions']) && !in_array($this->container['permissionActions'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'permissionActions', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            if (!is_null($this->container['url']) && (mb_strlen($this->container['url']) > 256)) {
                $invalidProperties[] = "invalid value for 'url', the character length must be smaller than or equal to 256.";
            }
            if (!is_null($this->container['url']) && (mb_strlen($this->container['url']) < 1)) {
                $invalidProperties[] = "invalid value for 'url', the character length must be bigger than or equal to 1.";
            }
        if ($this->container['datasourceType'] === null) {
            $invalidProperties[] = "'datasourceType' can't be null";
        }
            if ((mb_strlen($this->container['datasourceType']) > 256)) {
                $invalidProperties[] = "invalid value for 'datasourceType', the character length must be smaller than or equal to 256.";
            }
            if ((mb_strlen($this->container['datasourceType']) < 1)) {
                $invalidProperties[] = "invalid value for 'datasourceType', the character length must be bigger than or equal to 1.";
            }
        if ($this->container['clusterName'] === null) {
            $invalidProperties[] = "'clusterName' can't be null";
        }
            if ((mb_strlen($this->container['clusterName']) > 256)) {
                $invalidProperties[] = "invalid value for 'clusterName', the character length must be smaller than or equal to 256.";
            }
            if ((mb_strlen($this->container['clusterName']) < 1)) {
                $invalidProperties[] = "invalid value for 'clusterName', the character length must be bigger than or equal to 1.";
            }
        if ($this->container['databaseName'] === null) {
            $invalidProperties[] = "'databaseName' can't be null";
        }
            if ((mb_strlen($this->container['databaseName']) > 256)) {
                $invalidProperties[] = "invalid value for 'databaseName', the character length must be smaller than or equal to 256.";
            }
            if ((mb_strlen($this->container['databaseName']) < 1)) {
                $invalidProperties[] = "invalid value for 'databaseName', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['schemaName']) && (mb_strlen($this->container['schemaName']) > 256)) {
                $invalidProperties[] = "invalid value for 'schemaName', the character length must be smaller than or equal to 256.";
            }
            if (!is_null($this->container['schemaName']) && (mb_strlen($this->container['schemaName']) < 1)) {
                $invalidProperties[] = "invalid value for 'schemaName', the character length must be bigger than or equal to 1.";
            }
        if ($this->container['tableName'] === null) {
            $invalidProperties[] = "'tableName' can't be null";
        }
            if ((mb_strlen($this->container['tableName']) > 256)) {
                $invalidProperties[] = "invalid value for 'tableName', the character length must be smaller than or equal to 256.";
            }
            if ((mb_strlen($this->container['tableName']) < 1)) {
                $invalidProperties[] = "invalid value for 'tableName', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['columnName']) && (mb_strlen($this->container['columnName']) > 256)) {
                $invalidProperties[] = "invalid value for 'columnName', the character length must be smaller than or equal to 256.";
            }
            if (!is_null($this->container['columnName']) && (mb_strlen($this->container['columnName']) < 1)) {
                $invalidProperties[] = "invalid value for 'columnName', the character length must be bigger than or equal to 1.";
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
    * Gets permissionSetId
    *  权限集ID
    *
    * @return string
    */
    public function getPermissionSetId()
    {
        return $this->container['permissionSetId'];
    }

    /**
    * Sets permissionSetId
    *
    * @param string $permissionSetId 权限集ID
    *
    * @return $this
    */
    public function setPermissionSetId($permissionSetId)
    {
        $this->container['permissionSetId'] = $permissionSetId;
        return $this;
    }

    /**
    * Gets permissionSource
    *  权限来源：1、权限集名称。2、权限审批
    *
    * @return string
    */
    public function getPermissionSource()
    {
        return $this->container['permissionSource'];
    }

    /**
    * Sets permissionSource
    *
    * @param string $permissionSource 权限来源：1、权限集名称。2、权限审批
    *
    * @return $this
    */
    public function setPermissionSource($permissionSource)
    {
        $this->container['permissionSource'] = $permissionSource;
        return $this;
    }

    /**
    * Gets permissionActions
    *  权限类别,ALL,SELECT,UPDATE,CREATE,DROP,ALTER,INDEX,LOCK,READ,WRITE
    *
    * @return string
    */
    public function getPermissionActions()
    {
        return $this->container['permissionActions'];
    }

    /**
    * Sets permissionActions
    *
    * @param string $permissionActions 权限类别,ALL,SELECT,UPDATE,CREATE,DROP,ALTER,INDEX,LOCK,READ,WRITE
    *
    * @return $this
    */
    public function setPermissionActions($permissionActions)
    {
        $this->container['permissionActions'] = $permissionActions;
        return $this;
    }

    /**
    * Gets url
    *  Hive数据源，指定url权限的策略信息
    *
    * @return string|null
    */
    public function getUrl()
    {
        return $this->container['url'];
    }

    /**
    * Sets url
    *
    * @param string|null $url Hive数据源，指定url权限的策略信息
    *
    * @return $this
    */
    public function setUrl($url)
    {
        $this->container['url'] = $url;
        return $this;
    }

    /**
    * Gets datasourceType
    *  数据源类型
    *
    * @return string
    */
    public function getDatasourceType()
    {
        return $this->container['datasourceType'];
    }

    /**
    * Sets datasourceType
    *
    * @param string $datasourceType 数据源类型
    *
    * @return $this
    */
    public function setDatasourceType($datasourceType)
    {
        $this->container['datasourceType'] = $datasourceType;
        return $this;
    }

    /**
    * Gets clusterName
    *  集群名
    *
    * @return string
    */
    public function getClusterName()
    {
        return $this->container['clusterName'];
    }

    /**
    * Sets clusterName
    *
    * @param string $clusterName 集群名
    *
    * @return $this
    */
    public function setClusterName($clusterName)
    {
        $this->container['clusterName'] = $clusterName;
        return $this;
    }

    /**
    * Gets databaseName
    *  数据库名
    *
    * @return string
    */
    public function getDatabaseName()
    {
        return $this->container['databaseName'];
    }

    /**
    * Sets databaseName
    *
    * @param string $databaseName 数据库名
    *
    * @return $this
    */
    public function setDatabaseName($databaseName)
    {
        $this->container['databaseName'] = $databaseName;
        return $this;
    }

    /**
    * Gets schemaName
    *  schema名
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
    * @param string|null $schemaName schema名
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
    * @return string
    */
    public function getTableName()
    {
        return $this->container['tableName'];
    }

    /**
    * Sets tableName
    *
    * @param string $tableName 表名
    *
    * @return $this
    */
    public function setTableName($tableName)
    {
        $this->container['tableName'] = $tableName;
        return $this;
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

