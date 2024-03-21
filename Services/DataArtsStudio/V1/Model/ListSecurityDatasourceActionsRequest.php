<?php

namespace HuaweiCloud\SDK\DataArtsStudio\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ListSecurityDatasourceActionsRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ListSecurityDatasourceActionsRequest';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * workspace  DataArts Studio工作空间ID
    * parentPermissionSetId  父权限集ID。获取方法请参见[查询权限集列表](ListSecurityPermissionSets.xml) 注意： * 当该值为0时，则所有库表均支持查询 * 当该值为父权限集ID时，则基于父权限集中的权限查询
    * clusterId  集群ID，获取方法请参见[查询单个数据连接信息](ShowDataconnection.xml) * 查询Hive和DWS数据源操作信息时该数值为必填项，当数据源为DLI时无需填写
    * datasourceType  数据源类型 * HIVE数据源 * DWS数据源 * DLI数据源
    * databaseName  数据库名 `注意：该值作为查询关键字时，不能与url同时存在，需要指定其一进行查询`
    * schemaName  schema名称
    * tableName  数据表名称
    * columnName  数据字段名称
    * url  url路径名称 `注意：该值作为查询关键字时，不能与database_name同时存在，需要指定其一进行查询`
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'workspace' => 'string',
            'parentPermissionSetId' => 'string',
            'clusterId' => 'string',
            'datasourceType' => 'string',
            'databaseName' => 'string',
            'schemaName' => 'string',
            'tableName' => 'string',
            'columnName' => 'string',
            'url' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * workspace  DataArts Studio工作空间ID
    * parentPermissionSetId  父权限集ID。获取方法请参见[查询权限集列表](ListSecurityPermissionSets.xml) 注意： * 当该值为0时，则所有库表均支持查询 * 当该值为父权限集ID时，则基于父权限集中的权限查询
    * clusterId  集群ID，获取方法请参见[查询单个数据连接信息](ShowDataconnection.xml) * 查询Hive和DWS数据源操作信息时该数值为必填项，当数据源为DLI时无需填写
    * datasourceType  数据源类型 * HIVE数据源 * DWS数据源 * DLI数据源
    * databaseName  数据库名 `注意：该值作为查询关键字时，不能与url同时存在，需要指定其一进行查询`
    * schemaName  schema名称
    * tableName  数据表名称
    * columnName  数据字段名称
    * url  url路径名称 `注意：该值作为查询关键字时，不能与database_name同时存在，需要指定其一进行查询`
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'workspace' => null,
        'parentPermissionSetId' => null,
        'clusterId' => null,
        'datasourceType' => null,
        'databaseName' => null,
        'schemaName' => null,
        'tableName' => null,
        'columnName' => null,
        'url' => null
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
    * workspace  DataArts Studio工作空间ID
    * parentPermissionSetId  父权限集ID。获取方法请参见[查询权限集列表](ListSecurityPermissionSets.xml) 注意： * 当该值为0时，则所有库表均支持查询 * 当该值为父权限集ID时，则基于父权限集中的权限查询
    * clusterId  集群ID，获取方法请参见[查询单个数据连接信息](ShowDataconnection.xml) * 查询Hive和DWS数据源操作信息时该数值为必填项，当数据源为DLI时无需填写
    * datasourceType  数据源类型 * HIVE数据源 * DWS数据源 * DLI数据源
    * databaseName  数据库名 `注意：该值作为查询关键字时，不能与url同时存在，需要指定其一进行查询`
    * schemaName  schema名称
    * tableName  数据表名称
    * columnName  数据字段名称
    * url  url路径名称 `注意：该值作为查询关键字时，不能与database_name同时存在，需要指定其一进行查询`
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'workspace' => 'workspace',
            'parentPermissionSetId' => 'parent_permission_set_id',
            'clusterId' => 'cluster_id',
            'datasourceType' => 'datasource_type',
            'databaseName' => 'database_name',
            'schemaName' => 'schema_name',
            'tableName' => 'table_name',
            'columnName' => 'column_name',
            'url' => 'url'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * workspace  DataArts Studio工作空间ID
    * parentPermissionSetId  父权限集ID。获取方法请参见[查询权限集列表](ListSecurityPermissionSets.xml) 注意： * 当该值为0时，则所有库表均支持查询 * 当该值为父权限集ID时，则基于父权限集中的权限查询
    * clusterId  集群ID，获取方法请参见[查询单个数据连接信息](ShowDataconnection.xml) * 查询Hive和DWS数据源操作信息时该数值为必填项，当数据源为DLI时无需填写
    * datasourceType  数据源类型 * HIVE数据源 * DWS数据源 * DLI数据源
    * databaseName  数据库名 `注意：该值作为查询关键字时，不能与url同时存在，需要指定其一进行查询`
    * schemaName  schema名称
    * tableName  数据表名称
    * columnName  数据字段名称
    * url  url路径名称 `注意：该值作为查询关键字时，不能与database_name同时存在，需要指定其一进行查询`
    *
    * @var string[]
    */
    protected static $setters = [
            'workspace' => 'setWorkspace',
            'parentPermissionSetId' => 'setParentPermissionSetId',
            'clusterId' => 'setClusterId',
            'datasourceType' => 'setDatasourceType',
            'databaseName' => 'setDatabaseName',
            'schemaName' => 'setSchemaName',
            'tableName' => 'setTableName',
            'columnName' => 'setColumnName',
            'url' => 'setUrl'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * workspace  DataArts Studio工作空间ID
    * parentPermissionSetId  父权限集ID。获取方法请参见[查询权限集列表](ListSecurityPermissionSets.xml) 注意： * 当该值为0时，则所有库表均支持查询 * 当该值为父权限集ID时，则基于父权限集中的权限查询
    * clusterId  集群ID，获取方法请参见[查询单个数据连接信息](ShowDataconnection.xml) * 查询Hive和DWS数据源操作信息时该数值为必填项，当数据源为DLI时无需填写
    * datasourceType  数据源类型 * HIVE数据源 * DWS数据源 * DLI数据源
    * databaseName  数据库名 `注意：该值作为查询关键字时，不能与url同时存在，需要指定其一进行查询`
    * schemaName  schema名称
    * tableName  数据表名称
    * columnName  数据字段名称
    * url  url路径名称 `注意：该值作为查询关键字时，不能与database_name同时存在，需要指定其一进行查询`
    *
    * @var string[]
    */
    protected static $getters = [
            'workspace' => 'getWorkspace',
            'parentPermissionSetId' => 'getParentPermissionSetId',
            'clusterId' => 'getClusterId',
            'datasourceType' => 'getDatasourceType',
            'databaseName' => 'getDatabaseName',
            'schemaName' => 'getSchemaName',
            'tableName' => 'getTableName',
            'columnName' => 'getColumnName',
            'url' => 'getUrl'
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
    const DATASOURCE_TYPE_HIVE = 'HIVE';
    const DATASOURCE_TYPE_DWS = 'DWS';
    const DATASOURCE_TYPE_DLI = 'DLI';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getDatasourceTypeAllowableValues()
    {
        return [
            self::DATASOURCE_TYPE_HIVE,
            self::DATASOURCE_TYPE_DWS,
            self::DATASOURCE_TYPE_DLI,
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
        $this->container['workspace'] = isset($data['workspace']) ? $data['workspace'] : null;
        $this->container['parentPermissionSetId'] = isset($data['parentPermissionSetId']) ? $data['parentPermissionSetId'] : null;
        $this->container['clusterId'] = isset($data['clusterId']) ? $data['clusterId'] : null;
        $this->container['datasourceType'] = isset($data['datasourceType']) ? $data['datasourceType'] : null;
        $this->container['databaseName'] = isset($data['databaseName']) ? $data['databaseName'] : null;
        $this->container['schemaName'] = isset($data['schemaName']) ? $data['schemaName'] : null;
        $this->container['tableName'] = isset($data['tableName']) ? $data['tableName'] : null;
        $this->container['columnName'] = isset($data['columnName']) ? $data['columnName'] : null;
        $this->container['url'] = isset($data['url']) ? $data['url'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['workspace'] === null) {
            $invalidProperties[] = "'workspace' can't be null";
        }
            if ((mb_strlen($this->container['workspace']) > 128)) {
                $invalidProperties[] = "invalid value for 'workspace', the character length must be smaller than or equal to 128.";
            }
            if ((mb_strlen($this->container['workspace']) < 1)) {
                $invalidProperties[] = "invalid value for 'workspace', the character length must be bigger than or equal to 1.";
            }
        if ($this->container['parentPermissionSetId'] === null) {
            $invalidProperties[] = "'parentPermissionSetId' can't be null";
        }
            if ((mb_strlen($this->container['parentPermissionSetId']) > 128)) {
                $invalidProperties[] = "invalid value for 'parentPermissionSetId', the character length must be smaller than or equal to 128.";
            }
            if ((mb_strlen($this->container['parentPermissionSetId']) < 1)) {
                $invalidProperties[] = "invalid value for 'parentPermissionSetId', the character length must be bigger than or equal to 1.";
            }
        if ($this->container['clusterId'] === null) {
            $invalidProperties[] = "'clusterId' can't be null";
        }
            if ((mb_strlen($this->container['clusterId']) > 128)) {
                $invalidProperties[] = "invalid value for 'clusterId', the character length must be smaller than or equal to 128.";
            }
            if ((mb_strlen($this->container['clusterId']) < 1)) {
                $invalidProperties[] = "invalid value for 'clusterId', the character length must be bigger than or equal to 1.";
            }
        if ($this->container['datasourceType'] === null) {
            $invalidProperties[] = "'datasourceType' can't be null";
        }
            $allowedValues = $this->getDatasourceTypeAllowableValues();
                if (!is_null($this->container['datasourceType']) && !in_array($this->container['datasourceType'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'datasourceType', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            if (!is_null($this->container['databaseName']) && (mb_strlen($this->container['databaseName']) > 128)) {
                $invalidProperties[] = "invalid value for 'databaseName', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['databaseName']) && (mb_strlen($this->container['databaseName']) < 1)) {
                $invalidProperties[] = "invalid value for 'databaseName', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['schemaName']) && (mb_strlen($this->container['schemaName']) > 128)) {
                $invalidProperties[] = "invalid value for 'schemaName', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['schemaName']) && (mb_strlen($this->container['schemaName']) < 1)) {
                $invalidProperties[] = "invalid value for 'schemaName', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['tableName']) && (mb_strlen($this->container['tableName']) > 128)) {
                $invalidProperties[] = "invalid value for 'tableName', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['tableName']) && (mb_strlen($this->container['tableName']) < 1)) {
                $invalidProperties[] = "invalid value for 'tableName', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['columnName']) && (mb_strlen($this->container['columnName']) > 128)) {
                $invalidProperties[] = "invalid value for 'columnName', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['columnName']) && (mb_strlen($this->container['columnName']) < 1)) {
                $invalidProperties[] = "invalid value for 'columnName', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['url']) && (mb_strlen($this->container['url']) > 65535)) {
                $invalidProperties[] = "invalid value for 'url', the character length must be smaller than or equal to 65535.";
            }
            if (!is_null($this->container['url']) && (mb_strlen($this->container['url']) < 1)) {
                $invalidProperties[] = "invalid value for 'url', the character length must be bigger than or equal to 1.";
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
    * Gets workspace
    *  DataArts Studio工作空间ID
    *
    * @return string
    */
    public function getWorkspace()
    {
        return $this->container['workspace'];
    }

    /**
    * Sets workspace
    *
    * @param string $workspace DataArts Studio工作空间ID
    *
    * @return $this
    */
    public function setWorkspace($workspace)
    {
        $this->container['workspace'] = $workspace;
        return $this;
    }

    /**
    * Gets parentPermissionSetId
    *  父权限集ID。获取方法请参见[查询权限集列表](ListSecurityPermissionSets.xml) 注意： * 当该值为0时，则所有库表均支持查询 * 当该值为父权限集ID时，则基于父权限集中的权限查询
    *
    * @return string
    */
    public function getParentPermissionSetId()
    {
        return $this->container['parentPermissionSetId'];
    }

    /**
    * Sets parentPermissionSetId
    *
    * @param string $parentPermissionSetId 父权限集ID。获取方法请参见[查询权限集列表](ListSecurityPermissionSets.xml) 注意： * 当该值为0时，则所有库表均支持查询 * 当该值为父权限集ID时，则基于父权限集中的权限查询
    *
    * @return $this
    */
    public function setParentPermissionSetId($parentPermissionSetId)
    {
        $this->container['parentPermissionSetId'] = $parentPermissionSetId;
        return $this;
    }

    /**
    * Gets clusterId
    *  集群ID，获取方法请参见[查询单个数据连接信息](ShowDataconnection.xml) * 查询Hive和DWS数据源操作信息时该数值为必填项，当数据源为DLI时无需填写
    *
    * @return string
    */
    public function getClusterId()
    {
        return $this->container['clusterId'];
    }

    /**
    * Sets clusterId
    *
    * @param string $clusterId 集群ID，获取方法请参见[查询单个数据连接信息](ShowDataconnection.xml) * 查询Hive和DWS数据源操作信息时该数值为必填项，当数据源为DLI时无需填写
    *
    * @return $this
    */
    public function setClusterId($clusterId)
    {
        $this->container['clusterId'] = $clusterId;
        return $this;
    }

    /**
    * Gets datasourceType
    *  数据源类型 * HIVE数据源 * DWS数据源 * DLI数据源
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
    * @param string $datasourceType 数据源类型 * HIVE数据源 * DWS数据源 * DLI数据源
    *
    * @return $this
    */
    public function setDatasourceType($datasourceType)
    {
        $this->container['datasourceType'] = $datasourceType;
        return $this;
    }

    /**
    * Gets databaseName
    *  数据库名 `注意：该值作为查询关键字时，不能与url同时存在，需要指定其一进行查询`
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
    * @param string|null $databaseName 数据库名 `注意：该值作为查询关键字时，不能与url同时存在，需要指定其一进行查询`
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
    * Gets tableName
    *  数据表名称
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
    * @param string|null $tableName 数据表名称
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
    *  数据字段名称
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
    * @param string|null $columnName 数据字段名称
    *
    * @return $this
    */
    public function setColumnName($columnName)
    {
        $this->container['columnName'] = $columnName;
        return $this;
    }

    /**
    * Gets url
    *  url路径名称 `注意：该值作为查询关键字时，不能与database_name同时存在，需要指定其一进行查询`
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
    * @param string|null $url url路径名称 `注意：该值作为查询关键字时，不能与database_name同时存在，需要指定其一进行查询`
    *
    * @return $this
    */
    public function setUrl($url)
    {
        $this->container['url'] = $url;
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

