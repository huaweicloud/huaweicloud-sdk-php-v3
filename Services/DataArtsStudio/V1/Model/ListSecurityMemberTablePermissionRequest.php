<?php

namespace HuaweiCloud\SDK\DataArtsStudio\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ListSecurityMemberTablePermissionRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ListSecurityMemberTablePermissionRequest';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * userId  IAM用户id
    * feature  权限清单场景类型，PERMISSION_LIST
    * limit  limit
    * offset  offset
    * datasourceType  数据源类型,hive,dws[,dli](tag:nohcs)
    * clusterName  集群名称
    * databaseName  数据库名称
    * schemaName  schema名称
    * tableName  表名称
    * fuzzyTableName  表名（模糊匹配）
    * workspaceIds  工作空间id列表
    * workspace  DataArts Studio工作空间ID
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'userId' => 'string',
            'feature' => 'string',
            'limit' => 'int',
            'offset' => 'int',
            'datasourceType' => 'string',
            'clusterName' => 'string',
            'databaseName' => 'string',
            'schemaName' => 'string',
            'tableName' => 'string',
            'fuzzyTableName' => 'string',
            'workspaceIds' => 'string[]',
            'workspace' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * userId  IAM用户id
    * feature  权限清单场景类型，PERMISSION_LIST
    * limit  limit
    * offset  offset
    * datasourceType  数据源类型,hive,dws[,dli](tag:nohcs)
    * clusterName  集群名称
    * databaseName  数据库名称
    * schemaName  schema名称
    * tableName  表名称
    * fuzzyTableName  表名（模糊匹配）
    * workspaceIds  工作空间id列表
    * workspace  DataArts Studio工作空间ID
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'userId' => null,
        'feature' => null,
        'limit' => null,
        'offset' => null,
        'datasourceType' => null,
        'clusterName' => null,
        'databaseName' => null,
        'schemaName' => null,
        'tableName' => null,
        'fuzzyTableName' => null,
        'workspaceIds' => null,
        'workspace' => null
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
    * userId  IAM用户id
    * feature  权限清单场景类型，PERMISSION_LIST
    * limit  limit
    * offset  offset
    * datasourceType  数据源类型,hive,dws[,dli](tag:nohcs)
    * clusterName  集群名称
    * databaseName  数据库名称
    * schemaName  schema名称
    * tableName  表名称
    * fuzzyTableName  表名（模糊匹配）
    * workspaceIds  工作空间id列表
    * workspace  DataArts Studio工作空间ID
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'userId' => 'user_id',
            'feature' => 'feature',
            'limit' => 'limit',
            'offset' => 'offset',
            'datasourceType' => 'datasource_type',
            'clusterName' => 'cluster_name',
            'databaseName' => 'database_name',
            'schemaName' => 'schema_name',
            'tableName' => 'table_name',
            'fuzzyTableName' => 'fuzzy_table_name',
            'workspaceIds' => 'workspace_ids',
            'workspace' => 'workspace'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * userId  IAM用户id
    * feature  权限清单场景类型，PERMISSION_LIST
    * limit  limit
    * offset  offset
    * datasourceType  数据源类型,hive,dws[,dli](tag:nohcs)
    * clusterName  集群名称
    * databaseName  数据库名称
    * schemaName  schema名称
    * tableName  表名称
    * fuzzyTableName  表名（模糊匹配）
    * workspaceIds  工作空间id列表
    * workspace  DataArts Studio工作空间ID
    *
    * @var string[]
    */
    protected static $setters = [
            'userId' => 'setUserId',
            'feature' => 'setFeature',
            'limit' => 'setLimit',
            'offset' => 'setOffset',
            'datasourceType' => 'setDatasourceType',
            'clusterName' => 'setClusterName',
            'databaseName' => 'setDatabaseName',
            'schemaName' => 'setSchemaName',
            'tableName' => 'setTableName',
            'fuzzyTableName' => 'setFuzzyTableName',
            'workspaceIds' => 'setWorkspaceIds',
            'workspace' => 'setWorkspace'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * userId  IAM用户id
    * feature  权限清单场景类型，PERMISSION_LIST
    * limit  limit
    * offset  offset
    * datasourceType  数据源类型,hive,dws[,dli](tag:nohcs)
    * clusterName  集群名称
    * databaseName  数据库名称
    * schemaName  schema名称
    * tableName  表名称
    * fuzzyTableName  表名（模糊匹配）
    * workspaceIds  工作空间id列表
    * workspace  DataArts Studio工作空间ID
    *
    * @var string[]
    */
    protected static $getters = [
            'userId' => 'getUserId',
            'feature' => 'getFeature',
            'limit' => 'getLimit',
            'offset' => 'getOffset',
            'datasourceType' => 'getDatasourceType',
            'clusterName' => 'getClusterName',
            'databaseName' => 'getDatabaseName',
            'schemaName' => 'getSchemaName',
            'tableName' => 'getTableName',
            'fuzzyTableName' => 'getFuzzyTableName',
            'workspaceIds' => 'getWorkspaceIds',
            'workspace' => 'getWorkspace'
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
    const FEATURE_PERMISSION_LIST = 'PERMISSION_LIST';
    const DATASOURCE_TYPE_HIVE = 'HIVE';
    const DATASOURCE_TYPE_DWS = 'DWS';
    const DATASOURCE_TYPE_DLI = 'DLI';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getFeatureAllowableValues()
    {
        return [
            self::FEATURE_PERMISSION_LIST,
        ];
    }

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
        $this->container['userId'] = isset($data['userId']) ? $data['userId'] : null;
        $this->container['feature'] = isset($data['feature']) ? $data['feature'] : null;
        $this->container['limit'] = isset($data['limit']) ? $data['limit'] : null;
        $this->container['offset'] = isset($data['offset']) ? $data['offset'] : null;
        $this->container['datasourceType'] = isset($data['datasourceType']) ? $data['datasourceType'] : null;
        $this->container['clusterName'] = isset($data['clusterName']) ? $data['clusterName'] : null;
        $this->container['databaseName'] = isset($data['databaseName']) ? $data['databaseName'] : null;
        $this->container['schemaName'] = isset($data['schemaName']) ? $data['schemaName'] : null;
        $this->container['tableName'] = isset($data['tableName']) ? $data['tableName'] : null;
        $this->container['fuzzyTableName'] = isset($data['fuzzyTableName']) ? $data['fuzzyTableName'] : null;
        $this->container['workspaceIds'] = isset($data['workspaceIds']) ? $data['workspaceIds'] : null;
        $this->container['workspace'] = isset($data['workspace']) ? $data['workspace'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['userId'] === null) {
            $invalidProperties[] = "'userId' can't be null";
        }
            if ((mb_strlen($this->container['userId']) > 256)) {
                $invalidProperties[] = "invalid value for 'userId', the character length must be smaller than or equal to 256.";
            }
            if ((mb_strlen($this->container['userId']) < 1)) {
                $invalidProperties[] = "invalid value for 'userId', the character length must be bigger than or equal to 1.";
            }
            $allowedValues = $this->getFeatureAllowableValues();
                if (!is_null($this->container['feature']) && !in_array($this->container['feature'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'feature', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            if (!is_null($this->container['limit']) && ($this->container['limit'] > 100)) {
                $invalidProperties[] = "invalid value for 'limit', must be smaller than or equal to 100.";
            }
            if (!is_null($this->container['limit']) && ($this->container['limit'] < 0)) {
                $invalidProperties[] = "invalid value for 'limit', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['offset']) && ($this->container['offset'] > 99999)) {
                $invalidProperties[] = "invalid value for 'offset', must be smaller than or equal to 99999.";
            }
            if (!is_null($this->container['offset']) && ($this->container['offset'] < 0)) {
                $invalidProperties[] = "invalid value for 'offset', must be bigger than or equal to 0.";
            }
            $allowedValues = $this->getDatasourceTypeAllowableValues();
                if (!is_null($this->container['datasourceType']) && !in_array($this->container['datasourceType'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'datasourceType', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            if (!is_null($this->container['clusterName']) && (mb_strlen($this->container['clusterName']) > 256)) {
                $invalidProperties[] = "invalid value for 'clusterName', the character length must be smaller than or equal to 256.";
            }
            if (!is_null($this->container['clusterName']) && (mb_strlen($this->container['clusterName']) < 1)) {
                $invalidProperties[] = "invalid value for 'clusterName', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['databaseName']) && (mb_strlen($this->container['databaseName']) > 256)) {
                $invalidProperties[] = "invalid value for 'databaseName', the character length must be smaller than or equal to 256.";
            }
            if (!is_null($this->container['databaseName']) && (mb_strlen($this->container['databaseName']) < 1)) {
                $invalidProperties[] = "invalid value for 'databaseName', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['schemaName']) && (mb_strlen($this->container['schemaName']) > 256)) {
                $invalidProperties[] = "invalid value for 'schemaName', the character length must be smaller than or equal to 256.";
            }
            if (!is_null($this->container['schemaName']) && (mb_strlen($this->container['schemaName']) < 1)) {
                $invalidProperties[] = "invalid value for 'schemaName', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['tableName']) && (mb_strlen($this->container['tableName']) > 256)) {
                $invalidProperties[] = "invalid value for 'tableName', the character length must be smaller than or equal to 256.";
            }
            if (!is_null($this->container['tableName']) && (mb_strlen($this->container['tableName']) < 1)) {
                $invalidProperties[] = "invalid value for 'tableName', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['fuzzyTableName']) && (mb_strlen($this->container['fuzzyTableName']) > 256)) {
                $invalidProperties[] = "invalid value for 'fuzzyTableName', the character length must be smaller than or equal to 256.";
            }
            if (!is_null($this->container['fuzzyTableName']) && (mb_strlen($this->container['fuzzyTableName']) < 1)) {
                $invalidProperties[] = "invalid value for 'fuzzyTableName', the character length must be bigger than or equal to 1.";
            }
        if ($this->container['workspace'] === null) {
            $invalidProperties[] = "'workspace' can't be null";
        }
            if ((mb_strlen($this->container['workspace']) > 128)) {
                $invalidProperties[] = "invalid value for 'workspace', the character length must be smaller than or equal to 128.";
            }
            if ((mb_strlen($this->container['workspace']) < 1)) {
                $invalidProperties[] = "invalid value for 'workspace', the character length must be bigger than or equal to 1.";
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
    * Gets userId
    *  IAM用户id
    *
    * @return string
    */
    public function getUserId()
    {
        return $this->container['userId'];
    }

    /**
    * Sets userId
    *
    * @param string $userId IAM用户id
    *
    * @return $this
    */
    public function setUserId($userId)
    {
        $this->container['userId'] = $userId;
        return $this;
    }

    /**
    * Gets feature
    *  权限清单场景类型，PERMISSION_LIST
    *
    * @return string|null
    */
    public function getFeature()
    {
        return $this->container['feature'];
    }

    /**
    * Sets feature
    *
    * @param string|null $feature 权限清单场景类型，PERMISSION_LIST
    *
    * @return $this
    */
    public function setFeature($feature)
    {
        $this->container['feature'] = $feature;
        return $this;
    }

    /**
    * Gets limit
    *  limit
    *
    * @return int|null
    */
    public function getLimit()
    {
        return $this->container['limit'];
    }

    /**
    * Sets limit
    *
    * @param int|null $limit limit
    *
    * @return $this
    */
    public function setLimit($limit)
    {
        $this->container['limit'] = $limit;
        return $this;
    }

    /**
    * Gets offset
    *  offset
    *
    * @return int|null
    */
    public function getOffset()
    {
        return $this->container['offset'];
    }

    /**
    * Sets offset
    *
    * @param int|null $offset offset
    *
    * @return $this
    */
    public function setOffset($offset)
    {
        $this->container['offset'] = $offset;
        return $this;
    }

    /**
    * Gets datasourceType
    *  数据源类型,hive,dws[,dli](tag:nohcs)
    *
    * @return string|null
    */
    public function getDatasourceType()
    {
        return $this->container['datasourceType'];
    }

    /**
    * Sets datasourceType
    *
    * @param string|null $datasourceType 数据源类型,hive,dws[,dli](tag:nohcs)
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
    *  集群名称
    *
    * @return string|null
    */
    public function getClusterName()
    {
        return $this->container['clusterName'];
    }

    /**
    * Sets clusterName
    *
    * @param string|null $clusterName 集群名称
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
    *  数据库名称
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
    * @param string|null $databaseName 数据库名称
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
    *  表名称
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
    * @param string|null $tableName 表名称
    *
    * @return $this
    */
    public function setTableName($tableName)
    {
        $this->container['tableName'] = $tableName;
        return $this;
    }

    /**
    * Gets fuzzyTableName
    *  表名（模糊匹配）
    *
    * @return string|null
    */
    public function getFuzzyTableName()
    {
        return $this->container['fuzzyTableName'];
    }

    /**
    * Sets fuzzyTableName
    *
    * @param string|null $fuzzyTableName 表名（模糊匹配）
    *
    * @return $this
    */
    public function setFuzzyTableName($fuzzyTableName)
    {
        $this->container['fuzzyTableName'] = $fuzzyTableName;
        return $this;
    }

    /**
    * Gets workspaceIds
    *  工作空间id列表
    *
    * @return string[]|null
    */
    public function getWorkspaceIds()
    {
        return $this->container['workspaceIds'];
    }

    /**
    * Sets workspaceIds
    *
    * @param string[]|null $workspaceIds 工作空间id列表
    *
    * @return $this
    */
    public function setWorkspaceIds($workspaceIds)
    {
        $this->container['workspaceIds'] = $workspaceIds;
        return $this;
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

