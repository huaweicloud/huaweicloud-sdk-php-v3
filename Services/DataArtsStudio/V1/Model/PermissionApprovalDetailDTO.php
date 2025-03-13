<?php

namespace HuaweiCloud\SDK\DataArtsStudio\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class PermissionApprovalDetailDTO implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'PermissionApprovalDetailDTO';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * clusterId  集群id
    * clusterName  集群名称
    * datasourceType  数据源类型 - HIVE数据源 - DWS数据源 - [DLI数据源](tag:nohcs)
    * expireTime  超时时间
    * permissions  申请权限详情列表
    * proposers  申请人详情列表
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'clusterId' => 'string',
            'clusterName' => 'string',
            'datasourceType' => 'string',
            'expireTime' => 'int',
            'permissions' => '\HuaweiCloud\SDK\DataArtsStudio\V1\Model\PermissionApprovalDetailDTOPermissions[]',
            'proposers' => '\HuaweiCloud\SDK\DataArtsStudio\V1\Model\PermissionApprovalDetailDTOProposers[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * clusterId  集群id
    * clusterName  集群名称
    * datasourceType  数据源类型 - HIVE数据源 - DWS数据源 - [DLI数据源](tag:nohcs)
    * expireTime  超时时间
    * permissions  申请权限详情列表
    * proposers  申请人详情列表
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'clusterId' => null,
        'clusterName' => null,
        'datasourceType' => null,
        'expireTime' => 'int64',
        'permissions' => null,
        'proposers' => null
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
    * clusterId  集群id
    * clusterName  集群名称
    * datasourceType  数据源类型 - HIVE数据源 - DWS数据源 - [DLI数据源](tag:nohcs)
    * expireTime  超时时间
    * permissions  申请权限详情列表
    * proposers  申请人详情列表
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'clusterId' => 'cluster_id',
            'clusterName' => 'cluster_name',
            'datasourceType' => 'datasource_type',
            'expireTime' => 'expire_time',
            'permissions' => 'permissions',
            'proposers' => 'proposers'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * clusterId  集群id
    * clusterName  集群名称
    * datasourceType  数据源类型 - HIVE数据源 - DWS数据源 - [DLI数据源](tag:nohcs)
    * expireTime  超时时间
    * permissions  申请权限详情列表
    * proposers  申请人详情列表
    *
    * @var string[]
    */
    protected static $setters = [
            'clusterId' => 'setClusterId',
            'clusterName' => 'setClusterName',
            'datasourceType' => 'setDatasourceType',
            'expireTime' => 'setExpireTime',
            'permissions' => 'setPermissions',
            'proposers' => 'setProposers'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * clusterId  集群id
    * clusterName  集群名称
    * datasourceType  数据源类型 - HIVE数据源 - DWS数据源 - [DLI数据源](tag:nohcs)
    * expireTime  超时时间
    * permissions  申请权限详情列表
    * proposers  申请人详情列表
    *
    * @var string[]
    */
    protected static $getters = [
            'clusterId' => 'getClusterId',
            'clusterName' => 'getClusterName',
            'datasourceType' => 'getDatasourceType',
            'expireTime' => 'getExpireTime',
            'permissions' => 'getPermissions',
            'proposers' => 'getProposers'
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
        $this->container['clusterId'] = isset($data['clusterId']) ? $data['clusterId'] : null;
        $this->container['clusterName'] = isset($data['clusterName']) ? $data['clusterName'] : null;
        $this->container['datasourceType'] = isset($data['datasourceType']) ? $data['datasourceType'] : null;
        $this->container['expireTime'] = isset($data['expireTime']) ? $data['expireTime'] : null;
        $this->container['permissions'] = isset($data['permissions']) ? $data['permissions'] : null;
        $this->container['proposers'] = isset($data['proposers']) ? $data['proposers'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['clusterId']) && (mb_strlen($this->container['clusterId']) > 128)) {
                $invalidProperties[] = "invalid value for 'clusterId', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['clusterId']) && (mb_strlen($this->container['clusterId']) < 1)) {
                $invalidProperties[] = "invalid value for 'clusterId', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['clusterName']) && (mb_strlen($this->container['clusterName']) > 128)) {
                $invalidProperties[] = "invalid value for 'clusterName', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['clusterName']) && (mb_strlen($this->container['clusterName']) < 1)) {
                $invalidProperties[] = "invalid value for 'clusterName', the character length must be bigger than or equal to 1.";
            }
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
    * Gets clusterId
    *  集群id
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
    * @param string|null $clusterId 集群id
    *
    * @return $this
    */
    public function setClusterId($clusterId)
    {
        $this->container['clusterId'] = $clusterId;
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
    * Gets datasourceType
    *  数据源类型 - HIVE数据源 - DWS数据源 - [DLI数据源](tag:nohcs)
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
    * @param string|null $datasourceType 数据源类型 - HIVE数据源 - DWS数据源 - [DLI数据源](tag:nohcs)
    *
    * @return $this
    */
    public function setDatasourceType($datasourceType)
    {
        $this->container['datasourceType'] = $datasourceType;
        return $this;
    }

    /**
    * Gets expireTime
    *  超时时间
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
    * @param int|null $expireTime 超时时间
    *
    * @return $this
    */
    public function setExpireTime($expireTime)
    {
        $this->container['expireTime'] = $expireTime;
        return $this;
    }

    /**
    * Gets permissions
    *  申请权限详情列表
    *
    * @return \HuaweiCloud\SDK\DataArtsStudio\V1\Model\PermissionApprovalDetailDTOPermissions[]|null
    */
    public function getPermissions()
    {
        return $this->container['permissions'];
    }

    /**
    * Sets permissions
    *
    * @param \HuaweiCloud\SDK\DataArtsStudio\V1\Model\PermissionApprovalDetailDTOPermissions[]|null $permissions 申请权限详情列表
    *
    * @return $this
    */
    public function setPermissions($permissions)
    {
        $this->container['permissions'] = $permissions;
        return $this;
    }

    /**
    * Gets proposers
    *  申请人详情列表
    *
    * @return \HuaweiCloud\SDK\DataArtsStudio\V1\Model\PermissionApprovalDetailDTOProposers[]|null
    */
    public function getProposers()
    {
        return $this->container['proposers'];
    }

    /**
    * Sets proposers
    *
    * @param \HuaweiCloud\SDK\DataArtsStudio\V1\Model\PermissionApprovalDetailDTOProposers[]|null $proposers 申请人详情列表
    *
    * @return $this
    */
    public function setProposers($proposers)
    {
        $this->container['proposers'] = $proposers;
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

