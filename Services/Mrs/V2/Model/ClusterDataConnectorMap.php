<?php

namespace HuaweiCloud\SDK\Mrs\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ClusterDataConnectorMap implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ClusterDataConnectorMap';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * mapId  数据连接关联ID值
    * connectorId  数据连接ID值
    * componentName  组件名
    * roleType  组件角色类型。 - hive_metastore：Hive Metastore角色 - hive_data：Hive角色 - hbase_data：Hbase角色 - ranger_data：Ranger角色
    * sourceType  数据连接类型。 - LOCAL_DB：本地元数据 - RDS_POSTGRES：RDS服务PostgreSQL数据库 - RDS_MYSQL：RDS服务MySQL数据库 - gaussdb-mysql：云数据库GaussDB(for MySQL)
    * clusterId  关联集群id
    * status  数据连接状态。 - 0：代表正常状态 - 1：代表使用中
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'mapId' => 'int',
            'connectorId' => 'string',
            'componentName' => 'string',
            'roleType' => 'string',
            'sourceType' => 'string',
            'clusterId' => 'string',
            'status' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * mapId  数据连接关联ID值
    * connectorId  数据连接ID值
    * componentName  组件名
    * roleType  组件角色类型。 - hive_metastore：Hive Metastore角色 - hive_data：Hive角色 - hbase_data：Hbase角色 - ranger_data：Ranger角色
    * sourceType  数据连接类型。 - LOCAL_DB：本地元数据 - RDS_POSTGRES：RDS服务PostgreSQL数据库 - RDS_MYSQL：RDS服务MySQL数据库 - gaussdb-mysql：云数据库GaussDB(for MySQL)
    * clusterId  关联集群id
    * status  数据连接状态。 - 0：代表正常状态 - 1：代表使用中
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'mapId' => 'int32',
        'connectorId' => null,
        'componentName' => null,
        'roleType' => null,
        'sourceType' => null,
        'clusterId' => null,
        'status' => 'int32'
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
    * mapId  数据连接关联ID值
    * connectorId  数据连接ID值
    * componentName  组件名
    * roleType  组件角色类型。 - hive_metastore：Hive Metastore角色 - hive_data：Hive角色 - hbase_data：Hbase角色 - ranger_data：Ranger角色
    * sourceType  数据连接类型。 - LOCAL_DB：本地元数据 - RDS_POSTGRES：RDS服务PostgreSQL数据库 - RDS_MYSQL：RDS服务MySQL数据库 - gaussdb-mysql：云数据库GaussDB(for MySQL)
    * clusterId  关联集群id
    * status  数据连接状态。 - 0：代表正常状态 - 1：代表使用中
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'mapId' => 'map_id',
            'connectorId' => 'connector_id',
            'componentName' => 'component_name',
            'roleType' => 'role_type',
            'sourceType' => 'source_type',
            'clusterId' => 'cluster_id',
            'status' => 'status'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * mapId  数据连接关联ID值
    * connectorId  数据连接ID值
    * componentName  组件名
    * roleType  组件角色类型。 - hive_metastore：Hive Metastore角色 - hive_data：Hive角色 - hbase_data：Hbase角色 - ranger_data：Ranger角色
    * sourceType  数据连接类型。 - LOCAL_DB：本地元数据 - RDS_POSTGRES：RDS服务PostgreSQL数据库 - RDS_MYSQL：RDS服务MySQL数据库 - gaussdb-mysql：云数据库GaussDB(for MySQL)
    * clusterId  关联集群id
    * status  数据连接状态。 - 0：代表正常状态 - 1：代表使用中
    *
    * @var string[]
    */
    protected static $setters = [
            'mapId' => 'setMapId',
            'connectorId' => 'setConnectorId',
            'componentName' => 'setComponentName',
            'roleType' => 'setRoleType',
            'sourceType' => 'setSourceType',
            'clusterId' => 'setClusterId',
            'status' => 'setStatus'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * mapId  数据连接关联ID值
    * connectorId  数据连接ID值
    * componentName  组件名
    * roleType  组件角色类型。 - hive_metastore：Hive Metastore角色 - hive_data：Hive角色 - hbase_data：Hbase角色 - ranger_data：Ranger角色
    * sourceType  数据连接类型。 - LOCAL_DB：本地元数据 - RDS_POSTGRES：RDS服务PostgreSQL数据库 - RDS_MYSQL：RDS服务MySQL数据库 - gaussdb-mysql：云数据库GaussDB(for MySQL)
    * clusterId  关联集群id
    * status  数据连接状态。 - 0：代表正常状态 - 1：代表使用中
    *
    * @var string[]
    */
    protected static $getters = [
            'mapId' => 'getMapId',
            'connectorId' => 'getConnectorId',
            'componentName' => 'getComponentName',
            'roleType' => 'getRoleType',
            'sourceType' => 'getSourceType',
            'clusterId' => 'getClusterId',
            'status' => 'getStatus'
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
    const ROLE_TYPE_LOCAL_DB = 'LOCAL_DB';
    const ROLE_TYPE_RDS_POSTGRES = 'RDS_POSTGRES';
    const ROLE_TYPE_RDS_MYSQL = 'RDS_MYSQL';
    const ROLE_TYPE_GAUSSDB_MYSQL = 'gaussdb-mysql';
    const SOURCE_TYPE_LOCAL_DB = 'LOCAL_DB';
    const SOURCE_TYPE_RDS_POSTGRES = 'RDS_POSTGRES';
    const SOURCE_TYPE_RDS_MYSQL = 'RDS_MYSQL';
    const SOURCE_TYPE_GAUSSDB_MYSQL = 'gaussdb-mysql';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getRoleTypeAllowableValues()
    {
        return [
            self::ROLE_TYPE_LOCAL_DB,
            self::ROLE_TYPE_RDS_POSTGRES,
            self::ROLE_TYPE_RDS_MYSQL,
            self::ROLE_TYPE_GAUSSDB_MYSQL,
        ];
    }

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getSourceTypeAllowableValues()
    {
        return [
            self::SOURCE_TYPE_LOCAL_DB,
            self::SOURCE_TYPE_RDS_POSTGRES,
            self::SOURCE_TYPE_RDS_MYSQL,
            self::SOURCE_TYPE_GAUSSDB_MYSQL,
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
        $this->container['mapId'] = isset($data['mapId']) ? $data['mapId'] : null;
        $this->container['connectorId'] = isset($data['connectorId']) ? $data['connectorId'] : null;
        $this->container['componentName'] = isset($data['componentName']) ? $data['componentName'] : null;
        $this->container['roleType'] = isset($data['roleType']) ? $data['roleType'] : null;
        $this->container['sourceType'] = isset($data['sourceType']) ? $data['sourceType'] : null;
        $this->container['clusterId'] = isset($data['clusterId']) ? $data['clusterId'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            $allowedValues = $this->getRoleTypeAllowableValues();
                if (!is_null($this->container['roleType']) && !in_array($this->container['roleType'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'roleType', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            $allowedValues = $this->getSourceTypeAllowableValues();
                if (!is_null($this->container['sourceType']) && !in_array($this->container['sourceType'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'sourceType', must be one of '%s'",
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
    * Gets mapId
    *  数据连接关联ID值
    *
    * @return int|null
    */
    public function getMapId()
    {
        return $this->container['mapId'];
    }

    /**
    * Sets mapId
    *
    * @param int|null $mapId 数据连接关联ID值
    *
    * @return $this
    */
    public function setMapId($mapId)
    {
        $this->container['mapId'] = $mapId;
        return $this;
    }

    /**
    * Gets connectorId
    *  数据连接ID值
    *
    * @return string|null
    */
    public function getConnectorId()
    {
        return $this->container['connectorId'];
    }

    /**
    * Sets connectorId
    *
    * @param string|null $connectorId 数据连接ID值
    *
    * @return $this
    */
    public function setConnectorId($connectorId)
    {
        $this->container['connectorId'] = $connectorId;
        return $this;
    }

    /**
    * Gets componentName
    *  组件名
    *
    * @return string|null
    */
    public function getComponentName()
    {
        return $this->container['componentName'];
    }

    /**
    * Sets componentName
    *
    * @param string|null $componentName 组件名
    *
    * @return $this
    */
    public function setComponentName($componentName)
    {
        $this->container['componentName'] = $componentName;
        return $this;
    }

    /**
    * Gets roleType
    *  组件角色类型。 - hive_metastore：Hive Metastore角色 - hive_data：Hive角色 - hbase_data：Hbase角色 - ranger_data：Ranger角色
    *
    * @return string|null
    */
    public function getRoleType()
    {
        return $this->container['roleType'];
    }

    /**
    * Sets roleType
    *
    * @param string|null $roleType 组件角色类型。 - hive_metastore：Hive Metastore角色 - hive_data：Hive角色 - hbase_data：Hbase角色 - ranger_data：Ranger角色
    *
    * @return $this
    */
    public function setRoleType($roleType)
    {
        $this->container['roleType'] = $roleType;
        return $this;
    }

    /**
    * Gets sourceType
    *  数据连接类型。 - LOCAL_DB：本地元数据 - RDS_POSTGRES：RDS服务PostgreSQL数据库 - RDS_MYSQL：RDS服务MySQL数据库 - gaussdb-mysql：云数据库GaussDB(for MySQL)
    *
    * @return string|null
    */
    public function getSourceType()
    {
        return $this->container['sourceType'];
    }

    /**
    * Sets sourceType
    *
    * @param string|null $sourceType 数据连接类型。 - LOCAL_DB：本地元数据 - RDS_POSTGRES：RDS服务PostgreSQL数据库 - RDS_MYSQL：RDS服务MySQL数据库 - gaussdb-mysql：云数据库GaussDB(for MySQL)
    *
    * @return $this
    */
    public function setSourceType($sourceType)
    {
        $this->container['sourceType'] = $sourceType;
        return $this;
    }

    /**
    * Gets clusterId
    *  关联集群id
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
    * @param string|null $clusterId 关联集群id
    *
    * @return $this
    */
    public function setClusterId($clusterId)
    {
        $this->container['clusterId'] = $clusterId;
        return $this;
    }

    /**
    * Gets status
    *  数据连接状态。 - 0：代表正常状态 - 1：代表使用中
    *
    * @return int|null
    */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
    * Sets status
    *
    * @param int|null $status 数据连接状态。 - 0：代表正常状态 - 1：代表使用中
    *
    * @return $this
    */
    public function setStatus($status)
    {
        $this->container['status'] = $status;
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

