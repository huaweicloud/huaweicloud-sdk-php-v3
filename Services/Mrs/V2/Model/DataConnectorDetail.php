<?php

namespace HuaweiCloud\SDK\Mrs\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class DataConnectorDetail implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'DataConnectorDetail';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * connectorName  数据连接名称。
    * sourceType  数据连接类型。 - RDS_POSTGRES：RDS服务PostgreSQL数据库 - RDS_MYSQL：RDS服务MySQL数据库 - gaussdb-mysql：云数据库GaussDB(for MySQL)
    * sourceInfo  数据源信息，为json格式，不同数据连接有不同的信息，各数据源的source_info请求内容可参见示例。
    * connectorId  数据连接ID
    * createTime  创建时间
    * lastUpdateTime  最后更新时间
    * createBy  创建时间
    * createUser  创建用户
    * tenantId  租户ID
    * lastUpdateBy  最后更新时间
    * status  数据连接状态
    * usedClusters  使用集群
    * encryptType  加密类型
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'connectorName' => 'string',
            'sourceType' => 'string',
            'sourceInfo' => 'string',
            'connectorId' => 'string',
            'createTime' => 'int',
            'lastUpdateTime' => 'int',
            'createBy' => 'string',
            'createUser' => 'string',
            'tenantId' => 'string',
            'lastUpdateBy' => 'string',
            'status' => 'int',
            'usedClusters' => 'string',
            'encryptType' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * connectorName  数据连接名称。
    * sourceType  数据连接类型。 - RDS_POSTGRES：RDS服务PostgreSQL数据库 - RDS_MYSQL：RDS服务MySQL数据库 - gaussdb-mysql：云数据库GaussDB(for MySQL)
    * sourceInfo  数据源信息，为json格式，不同数据连接有不同的信息，各数据源的source_info请求内容可参见示例。
    * connectorId  数据连接ID
    * createTime  创建时间
    * lastUpdateTime  最后更新时间
    * createBy  创建时间
    * createUser  创建用户
    * tenantId  租户ID
    * lastUpdateBy  最后更新时间
    * status  数据连接状态
    * usedClusters  使用集群
    * encryptType  加密类型
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'connectorName' => null,
        'sourceType' => null,
        'sourceInfo' => null,
        'connectorId' => null,
        'createTime' => 'int64',
        'lastUpdateTime' => 'int64',
        'createBy' => null,
        'createUser' => null,
        'tenantId' => null,
        'lastUpdateBy' => null,
        'status' => 'int32',
        'usedClusters' => null,
        'encryptType' => 'int32'
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
    * connectorName  数据连接名称。
    * sourceType  数据连接类型。 - RDS_POSTGRES：RDS服务PostgreSQL数据库 - RDS_MYSQL：RDS服务MySQL数据库 - gaussdb-mysql：云数据库GaussDB(for MySQL)
    * sourceInfo  数据源信息，为json格式，不同数据连接有不同的信息，各数据源的source_info请求内容可参见示例。
    * connectorId  数据连接ID
    * createTime  创建时间
    * lastUpdateTime  最后更新时间
    * createBy  创建时间
    * createUser  创建用户
    * tenantId  租户ID
    * lastUpdateBy  最后更新时间
    * status  数据连接状态
    * usedClusters  使用集群
    * encryptType  加密类型
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'connectorName' => 'connector_name',
            'sourceType' => 'source_type',
            'sourceInfo' => 'source_info',
            'connectorId' => 'connector_id',
            'createTime' => 'create_time',
            'lastUpdateTime' => 'last_update_time',
            'createBy' => 'create_by',
            'createUser' => 'create_user',
            'tenantId' => 'tenant_id',
            'lastUpdateBy' => 'last_update_by',
            'status' => 'status',
            'usedClusters' => 'used_clusters',
            'encryptType' => 'encrypt_type'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * connectorName  数据连接名称。
    * sourceType  数据连接类型。 - RDS_POSTGRES：RDS服务PostgreSQL数据库 - RDS_MYSQL：RDS服务MySQL数据库 - gaussdb-mysql：云数据库GaussDB(for MySQL)
    * sourceInfo  数据源信息，为json格式，不同数据连接有不同的信息，各数据源的source_info请求内容可参见示例。
    * connectorId  数据连接ID
    * createTime  创建时间
    * lastUpdateTime  最后更新时间
    * createBy  创建时间
    * createUser  创建用户
    * tenantId  租户ID
    * lastUpdateBy  最后更新时间
    * status  数据连接状态
    * usedClusters  使用集群
    * encryptType  加密类型
    *
    * @var string[]
    */
    protected static $setters = [
            'connectorName' => 'setConnectorName',
            'sourceType' => 'setSourceType',
            'sourceInfo' => 'setSourceInfo',
            'connectorId' => 'setConnectorId',
            'createTime' => 'setCreateTime',
            'lastUpdateTime' => 'setLastUpdateTime',
            'createBy' => 'setCreateBy',
            'createUser' => 'setCreateUser',
            'tenantId' => 'setTenantId',
            'lastUpdateBy' => 'setLastUpdateBy',
            'status' => 'setStatus',
            'usedClusters' => 'setUsedClusters',
            'encryptType' => 'setEncryptType'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * connectorName  数据连接名称。
    * sourceType  数据连接类型。 - RDS_POSTGRES：RDS服务PostgreSQL数据库 - RDS_MYSQL：RDS服务MySQL数据库 - gaussdb-mysql：云数据库GaussDB(for MySQL)
    * sourceInfo  数据源信息，为json格式，不同数据连接有不同的信息，各数据源的source_info请求内容可参见示例。
    * connectorId  数据连接ID
    * createTime  创建时间
    * lastUpdateTime  最后更新时间
    * createBy  创建时间
    * createUser  创建用户
    * tenantId  租户ID
    * lastUpdateBy  最后更新时间
    * status  数据连接状态
    * usedClusters  使用集群
    * encryptType  加密类型
    *
    * @var string[]
    */
    protected static $getters = [
            'connectorName' => 'getConnectorName',
            'sourceType' => 'getSourceType',
            'sourceInfo' => 'getSourceInfo',
            'connectorId' => 'getConnectorId',
            'createTime' => 'getCreateTime',
            'lastUpdateTime' => 'getLastUpdateTime',
            'createBy' => 'getCreateBy',
            'createUser' => 'getCreateUser',
            'tenantId' => 'getTenantId',
            'lastUpdateBy' => 'getLastUpdateBy',
            'status' => 'getStatus',
            'usedClusters' => 'getUsedClusters',
            'encryptType' => 'getEncryptType'
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
    const SOURCE_TYPE_RDS_MYSQL = 'RDS_MYSQL';
    const SOURCE_TYPE_RDS_POSTGRES = 'RDS_POSTGRES';
    const SOURCE_TYPE_GAUSSDB_MYSQL = 'gaussdb-mysql';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getSourceTypeAllowableValues()
    {
        return [
            self::SOURCE_TYPE_RDS_MYSQL,
            self::SOURCE_TYPE_RDS_POSTGRES,
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
        $this->container['connectorName'] = isset($data['connectorName']) ? $data['connectorName'] : null;
        $this->container['sourceType'] = isset($data['sourceType']) ? $data['sourceType'] : null;
        $this->container['sourceInfo'] = isset($data['sourceInfo']) ? $data['sourceInfo'] : null;
        $this->container['connectorId'] = isset($data['connectorId']) ? $data['connectorId'] : null;
        $this->container['createTime'] = isset($data['createTime']) ? $data['createTime'] : null;
        $this->container['lastUpdateTime'] = isset($data['lastUpdateTime']) ? $data['lastUpdateTime'] : null;
        $this->container['createBy'] = isset($data['createBy']) ? $data['createBy'] : null;
        $this->container['createUser'] = isset($data['createUser']) ? $data['createUser'] : null;
        $this->container['tenantId'] = isset($data['tenantId']) ? $data['tenantId'] : null;
        $this->container['lastUpdateBy'] = isset($data['lastUpdateBy']) ? $data['lastUpdateBy'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['usedClusters'] = isset($data['usedClusters']) ? $data['usedClusters'] : null;
        $this->container['encryptType'] = isset($data['encryptType']) ? $data['encryptType'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['connectorName'] === null) {
            $invalidProperties[] = "'connectorName' can't be null";
        }
            if ((mb_strlen($this->container['connectorName']) > 64)) {
                $invalidProperties[] = "invalid value for 'connectorName', the character length must be smaller than or equal to 64.";
            }
            if ((mb_strlen($this->container['connectorName']) < 0)) {
                $invalidProperties[] = "invalid value for 'connectorName', the character length must be bigger than or equal to 0.";
            }
            if (!preg_match("/^[a-z0-9A-Z_-]*$/", $this->container['connectorName'])) {
                $invalidProperties[] = "invalid value for 'connectorName', must be conform to the pattern /^[a-z0-9A-Z_-]*$/.";
            }
        if ($this->container['sourceType'] === null) {
            $invalidProperties[] = "'sourceType' can't be null";
        }
            $allowedValues = $this->getSourceTypeAllowableValues();
                if (!is_null($this->container['sourceType']) && !in_array($this->container['sourceType'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'sourceType', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

        if ($this->container['sourceInfo'] === null) {
            $invalidProperties[] = "'sourceInfo' can't be null";
        }
            if (!is_null($this->container['connectorId']) && (mb_strlen($this->container['connectorId']) > 64)) {
                $invalidProperties[] = "invalid value for 'connectorId', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['connectorId']) && (mb_strlen($this->container['connectorId']) < 0)) {
                $invalidProperties[] = "invalid value for 'connectorId', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['createTime']) && ($this->container['createTime'] < 0)) {
                $invalidProperties[] = "invalid value for 'createTime', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['lastUpdateTime']) && ($this->container['lastUpdateTime'] < 0)) {
                $invalidProperties[] = "invalid value for 'lastUpdateTime', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['createBy']) && (mb_strlen($this->container['createBy']) > 64)) {
                $invalidProperties[] = "invalid value for 'createBy', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['createBy']) && (mb_strlen($this->container['createBy']) < 0)) {
                $invalidProperties[] = "invalid value for 'createBy', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['createUser']) && (mb_strlen($this->container['createUser']) > 64)) {
                $invalidProperties[] = "invalid value for 'createUser', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['createUser']) && (mb_strlen($this->container['createUser']) < 0)) {
                $invalidProperties[] = "invalid value for 'createUser', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['tenantId']) && (mb_strlen($this->container['tenantId']) > 64)) {
                $invalidProperties[] = "invalid value for 'tenantId', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['tenantId']) && (mb_strlen($this->container['tenantId']) < 0)) {
                $invalidProperties[] = "invalid value for 'tenantId', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['tenantId']) && !preg_match("/^[a-z0-9A-Z_-]*$/", $this->container['tenantId'])) {
                $invalidProperties[] = "invalid value for 'tenantId', must be conform to the pattern /^[a-z0-9A-Z_-]*$/.";
            }
            if (!is_null($this->container['lastUpdateBy']) && (mb_strlen($this->container['lastUpdateBy']) > 64)) {
                $invalidProperties[] = "invalid value for 'lastUpdateBy', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['lastUpdateBy']) && (mb_strlen($this->container['lastUpdateBy']) < 0)) {
                $invalidProperties[] = "invalid value for 'lastUpdateBy', the character length must be bigger than or equal to 0.";
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
    * Gets connectorName
    *  数据连接名称。
    *
    * @return string
    */
    public function getConnectorName()
    {
        return $this->container['connectorName'];
    }

    /**
    * Sets connectorName
    *
    * @param string $connectorName 数据连接名称。
    *
    * @return $this
    */
    public function setConnectorName($connectorName)
    {
        $this->container['connectorName'] = $connectorName;
        return $this;
    }

    /**
    * Gets sourceType
    *  数据连接类型。 - RDS_POSTGRES：RDS服务PostgreSQL数据库 - RDS_MYSQL：RDS服务MySQL数据库 - gaussdb-mysql：云数据库GaussDB(for MySQL)
    *
    * @return string
    */
    public function getSourceType()
    {
        return $this->container['sourceType'];
    }

    /**
    * Sets sourceType
    *
    * @param string $sourceType 数据连接类型。 - RDS_POSTGRES：RDS服务PostgreSQL数据库 - RDS_MYSQL：RDS服务MySQL数据库 - gaussdb-mysql：云数据库GaussDB(for MySQL)
    *
    * @return $this
    */
    public function setSourceType($sourceType)
    {
        $this->container['sourceType'] = $sourceType;
        return $this;
    }

    /**
    * Gets sourceInfo
    *  数据源信息，为json格式，不同数据连接有不同的信息，各数据源的source_info请求内容可参见示例。
    *
    * @return string
    */
    public function getSourceInfo()
    {
        return $this->container['sourceInfo'];
    }

    /**
    * Sets sourceInfo
    *
    * @param string $sourceInfo 数据源信息，为json格式，不同数据连接有不同的信息，各数据源的source_info请求内容可参见示例。
    *
    * @return $this
    */
    public function setSourceInfo($sourceInfo)
    {
        $this->container['sourceInfo'] = $sourceInfo;
        return $this;
    }

    /**
    * Gets connectorId
    *  数据连接ID
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
    * @param string|null $connectorId 数据连接ID
    *
    * @return $this
    */
    public function setConnectorId($connectorId)
    {
        $this->container['connectorId'] = $connectorId;
        return $this;
    }

    /**
    * Gets createTime
    *  创建时间
    *
    * @return int|null
    */
    public function getCreateTime()
    {
        return $this->container['createTime'];
    }

    /**
    * Sets createTime
    *
    * @param int|null $createTime 创建时间
    *
    * @return $this
    */
    public function setCreateTime($createTime)
    {
        $this->container['createTime'] = $createTime;
        return $this;
    }

    /**
    * Gets lastUpdateTime
    *  最后更新时间
    *
    * @return int|null
    */
    public function getLastUpdateTime()
    {
        return $this->container['lastUpdateTime'];
    }

    /**
    * Sets lastUpdateTime
    *
    * @param int|null $lastUpdateTime 最后更新时间
    *
    * @return $this
    */
    public function setLastUpdateTime($lastUpdateTime)
    {
        $this->container['lastUpdateTime'] = $lastUpdateTime;
        return $this;
    }

    /**
    * Gets createBy
    *  创建时间
    *
    * @return string|null
    */
    public function getCreateBy()
    {
        return $this->container['createBy'];
    }

    /**
    * Sets createBy
    *
    * @param string|null $createBy 创建时间
    *
    * @return $this
    */
    public function setCreateBy($createBy)
    {
        $this->container['createBy'] = $createBy;
        return $this;
    }

    /**
    * Gets createUser
    *  创建用户
    *
    * @return string|null
    */
    public function getCreateUser()
    {
        return $this->container['createUser'];
    }

    /**
    * Sets createUser
    *
    * @param string|null $createUser 创建用户
    *
    * @return $this
    */
    public function setCreateUser($createUser)
    {
        $this->container['createUser'] = $createUser;
        return $this;
    }

    /**
    * Gets tenantId
    *  租户ID
    *
    * @return string|null
    */
    public function getTenantId()
    {
        return $this->container['tenantId'];
    }

    /**
    * Sets tenantId
    *
    * @param string|null $tenantId 租户ID
    *
    * @return $this
    */
    public function setTenantId($tenantId)
    {
        $this->container['tenantId'] = $tenantId;
        return $this;
    }

    /**
    * Gets lastUpdateBy
    *  最后更新时间
    *
    * @return string|null
    */
    public function getLastUpdateBy()
    {
        return $this->container['lastUpdateBy'];
    }

    /**
    * Sets lastUpdateBy
    *
    * @param string|null $lastUpdateBy 最后更新时间
    *
    * @return $this
    */
    public function setLastUpdateBy($lastUpdateBy)
    {
        $this->container['lastUpdateBy'] = $lastUpdateBy;
        return $this;
    }

    /**
    * Gets status
    *  数据连接状态
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
    * @param int|null $status 数据连接状态
    *
    * @return $this
    */
    public function setStatus($status)
    {
        $this->container['status'] = $status;
        return $this;
    }

    /**
    * Gets usedClusters
    *  使用集群
    *
    * @return string|null
    */
    public function getUsedClusters()
    {
        return $this->container['usedClusters'];
    }

    /**
    * Sets usedClusters
    *
    * @param string|null $usedClusters 使用集群
    *
    * @return $this
    */
    public function setUsedClusters($usedClusters)
    {
        $this->container['usedClusters'] = $usedClusters;
        return $this;
    }

    /**
    * Gets encryptType
    *  加密类型
    *
    * @return int|null
    */
    public function getEncryptType()
    {
        return $this->container['encryptType'];
    }

    /**
    * Sets encryptType
    *
    * @param int|null $encryptType 加密类型
    *
    * @return $this
    */
    public function setEncryptType($encryptType)
    {
        $this->container['encryptType'] = $encryptType;
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

