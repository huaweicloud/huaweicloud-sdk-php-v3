<?php

namespace HuaweiCloud\SDK\DataArtsStudio\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ListTableApproversRequestBody implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ListTableApproversRequestBody';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * instanceId  实例id
    * datasourceType  数据源类型,hive,dws,dli
    * clusterId  集群id,dli传DLI，dws和mrs-hive传对应的集群id
    * schemaName  schema名称，dws需要传这个字段
    * databaseName  数据库名称
    * tableName  表名称
    * expireTime  权限到期时间时间戳，毫秒。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'instanceId' => 'string',
            'datasourceType' => 'string',
            'clusterId' => 'string',
            'schemaName' => 'string',
            'databaseName' => 'string',
            'tableName' => 'string',
            'expireTime' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * instanceId  实例id
    * datasourceType  数据源类型,hive,dws,dli
    * clusterId  集群id,dli传DLI，dws和mrs-hive传对应的集群id
    * schemaName  schema名称，dws需要传这个字段
    * databaseName  数据库名称
    * tableName  表名称
    * expireTime  权限到期时间时间戳，毫秒。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'instanceId' => null,
        'datasourceType' => null,
        'clusterId' => null,
        'schemaName' => null,
        'databaseName' => null,
        'tableName' => null,
        'expireTime' => 'int64'
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
    * instanceId  实例id
    * datasourceType  数据源类型,hive,dws,dli
    * clusterId  集群id,dli传DLI，dws和mrs-hive传对应的集群id
    * schemaName  schema名称，dws需要传这个字段
    * databaseName  数据库名称
    * tableName  表名称
    * expireTime  权限到期时间时间戳，毫秒。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'instanceId' => 'instance_id',
            'datasourceType' => 'datasource_type',
            'clusterId' => 'cluster_id',
            'schemaName' => 'schema_name',
            'databaseName' => 'database_name',
            'tableName' => 'table_name',
            'expireTime' => 'expire_time'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * instanceId  实例id
    * datasourceType  数据源类型,hive,dws,dli
    * clusterId  集群id,dli传DLI，dws和mrs-hive传对应的集群id
    * schemaName  schema名称，dws需要传这个字段
    * databaseName  数据库名称
    * tableName  表名称
    * expireTime  权限到期时间时间戳，毫秒。
    *
    * @var string[]
    */
    protected static $setters = [
            'instanceId' => 'setInstanceId',
            'datasourceType' => 'setDatasourceType',
            'clusterId' => 'setClusterId',
            'schemaName' => 'setSchemaName',
            'databaseName' => 'setDatabaseName',
            'tableName' => 'setTableName',
            'expireTime' => 'setExpireTime'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * instanceId  实例id
    * datasourceType  数据源类型,hive,dws,dli
    * clusterId  集群id,dli传DLI，dws和mrs-hive传对应的集群id
    * schemaName  schema名称，dws需要传这个字段
    * databaseName  数据库名称
    * tableName  表名称
    * expireTime  权限到期时间时间戳，毫秒。
    *
    * @var string[]
    */
    protected static $getters = [
            'instanceId' => 'getInstanceId',
            'datasourceType' => 'getDatasourceType',
            'clusterId' => 'getClusterId',
            'schemaName' => 'getSchemaName',
            'databaseName' => 'getDatabaseName',
            'tableName' => 'getTableName',
            'expireTime' => 'getExpireTime'
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
    const DATASOURCE_TYPE_HIVE = 'hive';
    const DATASOURCE_TYPE_DWS = 'dws';
    const DATASOURCE_TYPE_DLI = 'dli';
    

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
        $this->container['instanceId'] = isset($data['instanceId']) ? $data['instanceId'] : null;
        $this->container['datasourceType'] = isset($data['datasourceType']) ? $data['datasourceType'] : null;
        $this->container['clusterId'] = isset($data['clusterId']) ? $data['clusterId'] : null;
        $this->container['schemaName'] = isset($data['schemaName']) ? $data['schemaName'] : null;
        $this->container['databaseName'] = isset($data['databaseName']) ? $data['databaseName'] : null;
        $this->container['tableName'] = isset($data['tableName']) ? $data['tableName'] : null;
        $this->container['expireTime'] = isset($data['expireTime']) ? $data['expireTime'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            $allowedValues = $this->getDatasourceTypeAllowableValues();
                if (!is_null($this->container['datasourceType']) && !in_array($this->container['datasourceType'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'datasourceType', must be one of '%s'",
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
    * Gets instanceId
    *  实例id
    *
    * @return string|null
    */
    public function getInstanceId()
    {
        return $this->container['instanceId'];
    }

    /**
    * Sets instanceId
    *
    * @param string|null $instanceId 实例id
    *
    * @return $this
    */
    public function setInstanceId($instanceId)
    {
        $this->container['instanceId'] = $instanceId;
        return $this;
    }

    /**
    * Gets datasourceType
    *  数据源类型,hive,dws,dli
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
    * @param string|null $datasourceType 数据源类型,hive,dws,dli
    *
    * @return $this
    */
    public function setDatasourceType($datasourceType)
    {
        $this->container['datasourceType'] = $datasourceType;
        return $this;
    }

    /**
    * Gets clusterId
    *  集群id,dli传DLI，dws和mrs-hive传对应的集群id
    *
    * @return string|null
    */
    public function getClusterId()
    {
        return $this->container['clusterId'];
    }

    /**
    * Sets clusterId
    *
    * @param string|null $clusterId 集群id,dli传DLI，dws和mrs-hive传对应的集群id
    *
    * @return $this
    */
    public function setClusterId($clusterId)
    {
        $this->container['clusterId'] = $clusterId;
        return $this;
    }

    /**
    * Gets schemaName
    *  schema名称，dws需要传这个字段
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
    * @param string|null $schemaName schema名称，dws需要传这个字段
    *
    * @return $this
    */
    public function setSchemaName($schemaName)
    {
        $this->container['schemaName'] = $schemaName;
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
    * Gets expireTime
    *  权限到期时间时间戳，毫秒。
    *
    * @return int|null
    */
    public function getExpireTime()
    {
        return $this->container['expireTime'];
    }

    /**
    * Sets expireTime
    *
    * @param int|null $expireTime 权限到期时间时间戳，毫秒。
    *
    * @return $this
    */
    public function setExpireTime($expireTime)
    {
        $this->container['expireTime'] = $expireTime;
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

