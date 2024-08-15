<?php

namespace HuaweiCloud\SDK\Cdm\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class CdmQueryClusterInstanceDetail implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'CdmQueryClusterInstanceDetail';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * configurationStatus  节点配置状态： - In-Sync：配置已同步。 - Applying：配置中。 - Sync-Failure：配置失败。
    * paramsGroupId  配置ID
    * type  配置服务类型，这里为cdm
    * role  实例模式，这里为Standalone
    * subnetid  实例的子网ID
    * securegroup  安全组ID
    * vpc  实例的VPC ID
    * azcode  可用区名称
    * region  局点名称
    * created  实例创建时间，格式为ISO8601：YYYY-MM-DDThh:mm:ssZ
    * updated  实例更新时间，格式为ISO8601：YYYY-MM-DDThh:mm:ssZ
    * name  实例名称
    * id  实例ID
    * flavor  flavor
    * datastore  datastore
    * dbuser  数据库用户，这里为cdm。
    * payModel  付费模式： - 0：按需 - 1：包周期
    * publicIp  集群绑定的公网地址
    * trafficIp  集群的内网地址
    * trafficIpv6  集群的内网IPv6地址
    * clusterId  集群ID
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'configurationStatus' => 'string',
            'paramsGroupId' => 'string',
            'type' => 'string',
            'role' => 'string',
            'subnetid' => 'string',
            'securegroup' => 'string',
            'vpc' => 'string',
            'azcode' => 'string',
            'region' => 'string',
            'created' => 'string',
            'updated' => 'string',
            'name' => 'string',
            'id' => 'string',
            'flavor' => '\HuaweiCloud\SDK\Cdm\V1\Model\CdmQueryClusterInstanceDetailFlavor',
            'datastore' => '\HuaweiCloud\SDK\Cdm\V1\Model\Datastore',
            'dbuser' => 'string',
            'payModel' => 'int',
            'publicIp' => 'string',
            'trafficIp' => 'string',
            'trafficIpv6' => 'string',
            'clusterId' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * configurationStatus  节点配置状态： - In-Sync：配置已同步。 - Applying：配置中。 - Sync-Failure：配置失败。
    * paramsGroupId  配置ID
    * type  配置服务类型，这里为cdm
    * role  实例模式，这里为Standalone
    * subnetid  实例的子网ID
    * securegroup  安全组ID
    * vpc  实例的VPC ID
    * azcode  可用区名称
    * region  局点名称
    * created  实例创建时间，格式为ISO8601：YYYY-MM-DDThh:mm:ssZ
    * updated  实例更新时间，格式为ISO8601：YYYY-MM-DDThh:mm:ssZ
    * name  实例名称
    * id  实例ID
    * flavor  flavor
    * datastore  datastore
    * dbuser  数据库用户，这里为cdm。
    * payModel  付费模式： - 0：按需 - 1：包周期
    * publicIp  集群绑定的公网地址
    * trafficIp  集群的内网地址
    * trafficIpv6  集群的内网IPv6地址
    * clusterId  集群ID
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'configurationStatus' => null,
        'paramsGroupId' => null,
        'type' => null,
        'role' => null,
        'subnetid' => null,
        'securegroup' => null,
        'vpc' => null,
        'azcode' => null,
        'region' => null,
        'created' => null,
        'updated' => null,
        'name' => null,
        'id' => null,
        'flavor' => null,
        'datastore' => null,
        'dbuser' => null,
        'payModel' => null,
        'publicIp' => null,
        'trafficIp' => null,
        'trafficIpv6' => null,
        'clusterId' => null
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
    * configurationStatus  节点配置状态： - In-Sync：配置已同步。 - Applying：配置中。 - Sync-Failure：配置失败。
    * paramsGroupId  配置ID
    * type  配置服务类型，这里为cdm
    * role  实例模式，这里为Standalone
    * subnetid  实例的子网ID
    * securegroup  安全组ID
    * vpc  实例的VPC ID
    * azcode  可用区名称
    * region  局点名称
    * created  实例创建时间，格式为ISO8601：YYYY-MM-DDThh:mm:ssZ
    * updated  实例更新时间，格式为ISO8601：YYYY-MM-DDThh:mm:ssZ
    * name  实例名称
    * id  实例ID
    * flavor  flavor
    * datastore  datastore
    * dbuser  数据库用户，这里为cdm。
    * payModel  付费模式： - 0：按需 - 1：包周期
    * publicIp  集群绑定的公网地址
    * trafficIp  集群的内网地址
    * trafficIpv6  集群的内网IPv6地址
    * clusterId  集群ID
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'configurationStatus' => 'configurationStatus',
            'paramsGroupId' => 'paramsGroupId',
            'type' => 'type',
            'role' => 'role',
            'subnetid' => 'subnetid',
            'securegroup' => 'securegroup',
            'vpc' => 'vpc',
            'azcode' => 'azcode',
            'region' => 'region',
            'created' => 'created',
            'updated' => 'updated',
            'name' => 'name',
            'id' => 'id',
            'flavor' => 'flavor',
            'datastore' => 'datastore',
            'dbuser' => 'dbuser',
            'payModel' => 'payModel',
            'publicIp' => 'publicIp',
            'trafficIp' => 'trafficIp',
            'trafficIpv6' => 'trafficIpv6',
            'clusterId' => 'cluster_id'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * configurationStatus  节点配置状态： - In-Sync：配置已同步。 - Applying：配置中。 - Sync-Failure：配置失败。
    * paramsGroupId  配置ID
    * type  配置服务类型，这里为cdm
    * role  实例模式，这里为Standalone
    * subnetid  实例的子网ID
    * securegroup  安全组ID
    * vpc  实例的VPC ID
    * azcode  可用区名称
    * region  局点名称
    * created  实例创建时间，格式为ISO8601：YYYY-MM-DDThh:mm:ssZ
    * updated  实例更新时间，格式为ISO8601：YYYY-MM-DDThh:mm:ssZ
    * name  实例名称
    * id  实例ID
    * flavor  flavor
    * datastore  datastore
    * dbuser  数据库用户，这里为cdm。
    * payModel  付费模式： - 0：按需 - 1：包周期
    * publicIp  集群绑定的公网地址
    * trafficIp  集群的内网地址
    * trafficIpv6  集群的内网IPv6地址
    * clusterId  集群ID
    *
    * @var string[]
    */
    protected static $setters = [
            'configurationStatus' => 'setConfigurationStatus',
            'paramsGroupId' => 'setParamsGroupId',
            'type' => 'setType',
            'role' => 'setRole',
            'subnetid' => 'setSubnetid',
            'securegroup' => 'setSecuregroup',
            'vpc' => 'setVpc',
            'azcode' => 'setAzcode',
            'region' => 'setRegion',
            'created' => 'setCreated',
            'updated' => 'setUpdated',
            'name' => 'setName',
            'id' => 'setId',
            'flavor' => 'setFlavor',
            'datastore' => 'setDatastore',
            'dbuser' => 'setDbuser',
            'payModel' => 'setPayModel',
            'publicIp' => 'setPublicIp',
            'trafficIp' => 'setTrafficIp',
            'trafficIpv6' => 'setTrafficIpv6',
            'clusterId' => 'setClusterId'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * configurationStatus  节点配置状态： - In-Sync：配置已同步。 - Applying：配置中。 - Sync-Failure：配置失败。
    * paramsGroupId  配置ID
    * type  配置服务类型，这里为cdm
    * role  实例模式，这里为Standalone
    * subnetid  实例的子网ID
    * securegroup  安全组ID
    * vpc  实例的VPC ID
    * azcode  可用区名称
    * region  局点名称
    * created  实例创建时间，格式为ISO8601：YYYY-MM-DDThh:mm:ssZ
    * updated  实例更新时间，格式为ISO8601：YYYY-MM-DDThh:mm:ssZ
    * name  实例名称
    * id  实例ID
    * flavor  flavor
    * datastore  datastore
    * dbuser  数据库用户，这里为cdm。
    * payModel  付费模式： - 0：按需 - 1：包周期
    * publicIp  集群绑定的公网地址
    * trafficIp  集群的内网地址
    * trafficIpv6  集群的内网IPv6地址
    * clusterId  集群ID
    *
    * @var string[]
    */
    protected static $getters = [
            'configurationStatus' => 'getConfigurationStatus',
            'paramsGroupId' => 'getParamsGroupId',
            'type' => 'getType',
            'role' => 'getRole',
            'subnetid' => 'getSubnetid',
            'securegroup' => 'getSecuregroup',
            'vpc' => 'getVpc',
            'azcode' => 'getAzcode',
            'region' => 'getRegion',
            'created' => 'getCreated',
            'updated' => 'getUpdated',
            'name' => 'getName',
            'id' => 'getId',
            'flavor' => 'getFlavor',
            'datastore' => 'getDatastore',
            'dbuser' => 'getDbuser',
            'payModel' => 'getPayModel',
            'publicIp' => 'getPublicIp',
            'trafficIp' => 'getTrafficIp',
            'trafficIpv6' => 'getTrafficIpv6',
            'clusterId' => 'getClusterId'
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
        $this->container['configurationStatus'] = isset($data['configurationStatus']) ? $data['configurationStatus'] : null;
        $this->container['paramsGroupId'] = isset($data['paramsGroupId']) ? $data['paramsGroupId'] : null;
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        $this->container['role'] = isset($data['role']) ? $data['role'] : null;
        $this->container['subnetid'] = isset($data['subnetid']) ? $data['subnetid'] : null;
        $this->container['securegroup'] = isset($data['securegroup']) ? $data['securegroup'] : null;
        $this->container['vpc'] = isset($data['vpc']) ? $data['vpc'] : null;
        $this->container['azcode'] = isset($data['azcode']) ? $data['azcode'] : null;
        $this->container['region'] = isset($data['region']) ? $data['region'] : null;
        $this->container['created'] = isset($data['created']) ? $data['created'] : null;
        $this->container['updated'] = isset($data['updated']) ? $data['updated'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['flavor'] = isset($data['flavor']) ? $data['flavor'] : null;
        $this->container['datastore'] = isset($data['datastore']) ? $data['datastore'] : null;
        $this->container['dbuser'] = isset($data['dbuser']) ? $data['dbuser'] : null;
        $this->container['payModel'] = isset($data['payModel']) ? $data['payModel'] : null;
        $this->container['publicIp'] = isset($data['publicIp']) ? $data['publicIp'] : null;
        $this->container['trafficIp'] = isset($data['trafficIp']) ? $data['trafficIp'] : null;
        $this->container['trafficIpv6'] = isset($data['trafficIpv6']) ? $data['trafficIpv6'] : null;
        $this->container['clusterId'] = isset($data['clusterId']) ? $data['clusterId'] : null;
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
    * Gets configurationStatus
    *  节点配置状态： - In-Sync：配置已同步。 - Applying：配置中。 - Sync-Failure：配置失败。
    *
    * @return string|null
    */
    public function getConfigurationStatus()
    {
        return $this->container['configurationStatus'];
    }

    /**
    * Sets configurationStatus
    *
    * @param string|null $configurationStatus 节点配置状态： - In-Sync：配置已同步。 - Applying：配置中。 - Sync-Failure：配置失败。
    *
    * @return $this
    */
    public function setConfigurationStatus($configurationStatus)
    {
        $this->container['configurationStatus'] = $configurationStatus;
        return $this;
    }

    /**
    * Gets paramsGroupId
    *  配置ID
    *
    * @return string|null
    */
    public function getParamsGroupId()
    {
        return $this->container['paramsGroupId'];
    }

    /**
    * Sets paramsGroupId
    *
    * @param string|null $paramsGroupId 配置ID
    *
    * @return $this
    */
    public function setParamsGroupId($paramsGroupId)
    {
        $this->container['paramsGroupId'] = $paramsGroupId;
        return $this;
    }

    /**
    * Gets type
    *  配置服务类型，这里为cdm
    *
    * @return string|null
    */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
    * Sets type
    *
    * @param string|null $type 配置服务类型，这里为cdm
    *
    * @return $this
    */
    public function setType($type)
    {
        $this->container['type'] = $type;
        return $this;
    }

    /**
    * Gets role
    *  实例模式，这里为Standalone
    *
    * @return string|null
    */
    public function getRole()
    {
        return $this->container['role'];
    }

    /**
    * Sets role
    *
    * @param string|null $role 实例模式，这里为Standalone
    *
    * @return $this
    */
    public function setRole($role)
    {
        $this->container['role'] = $role;
        return $this;
    }

    /**
    * Gets subnetid
    *  实例的子网ID
    *
    * @return string|null
    */
    public function getSubnetid()
    {
        return $this->container['subnetid'];
    }

    /**
    * Sets subnetid
    *
    * @param string|null $subnetid 实例的子网ID
    *
    * @return $this
    */
    public function setSubnetid($subnetid)
    {
        $this->container['subnetid'] = $subnetid;
        return $this;
    }

    /**
    * Gets securegroup
    *  安全组ID
    *
    * @return string|null
    */
    public function getSecuregroup()
    {
        return $this->container['securegroup'];
    }

    /**
    * Sets securegroup
    *
    * @param string|null $securegroup 安全组ID
    *
    * @return $this
    */
    public function setSecuregroup($securegroup)
    {
        $this->container['securegroup'] = $securegroup;
        return $this;
    }

    /**
    * Gets vpc
    *  实例的VPC ID
    *
    * @return string|null
    */
    public function getVpc()
    {
        return $this->container['vpc'];
    }

    /**
    * Sets vpc
    *
    * @param string|null $vpc 实例的VPC ID
    *
    * @return $this
    */
    public function setVpc($vpc)
    {
        $this->container['vpc'] = $vpc;
        return $this;
    }

    /**
    * Gets azcode
    *  可用区名称
    *
    * @return string|null
    */
    public function getAzcode()
    {
        return $this->container['azcode'];
    }

    /**
    * Sets azcode
    *
    * @param string|null $azcode 可用区名称
    *
    * @return $this
    */
    public function setAzcode($azcode)
    {
        $this->container['azcode'] = $azcode;
        return $this;
    }

    /**
    * Gets region
    *  局点名称
    *
    * @return string|null
    */
    public function getRegion()
    {
        return $this->container['region'];
    }

    /**
    * Sets region
    *
    * @param string|null $region 局点名称
    *
    * @return $this
    */
    public function setRegion($region)
    {
        $this->container['region'] = $region;
        return $this;
    }

    /**
    * Gets created
    *  实例创建时间，格式为ISO8601：YYYY-MM-DDThh:mm:ssZ
    *
    * @return string|null
    */
    public function getCreated()
    {
        return $this->container['created'];
    }

    /**
    * Sets created
    *
    * @param string|null $created 实例创建时间，格式为ISO8601：YYYY-MM-DDThh:mm:ssZ
    *
    * @return $this
    */
    public function setCreated($created)
    {
        $this->container['created'] = $created;
        return $this;
    }

    /**
    * Gets updated
    *  实例更新时间，格式为ISO8601：YYYY-MM-DDThh:mm:ssZ
    *
    * @return string|null
    */
    public function getUpdated()
    {
        return $this->container['updated'];
    }

    /**
    * Sets updated
    *
    * @param string|null $updated 实例更新时间，格式为ISO8601：YYYY-MM-DDThh:mm:ssZ
    *
    * @return $this
    */
    public function setUpdated($updated)
    {
        $this->container['updated'] = $updated;
        return $this;
    }

    /**
    * Gets name
    *  实例名称
    *
    * @return string|null
    */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
    * Sets name
    *
    * @param string|null $name 实例名称
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets id
    *  实例ID
    *
    * @return string|null
    */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
    * Sets id
    *
    * @param string|null $id 实例ID
    *
    * @return $this
    */
    public function setId($id)
    {
        $this->container['id'] = $id;
        return $this;
    }

    /**
    * Gets flavor
    *  flavor
    *
    * @return \HuaweiCloud\SDK\Cdm\V1\Model\CdmQueryClusterInstanceDetailFlavor|null
    */
    public function getFlavor()
    {
        return $this->container['flavor'];
    }

    /**
    * Sets flavor
    *
    * @param \HuaweiCloud\SDK\Cdm\V1\Model\CdmQueryClusterInstanceDetailFlavor|null $flavor flavor
    *
    * @return $this
    */
    public function setFlavor($flavor)
    {
        $this->container['flavor'] = $flavor;
        return $this;
    }

    /**
    * Gets datastore
    *  datastore
    *
    * @return \HuaweiCloud\SDK\Cdm\V1\Model\Datastore|null
    */
    public function getDatastore()
    {
        return $this->container['datastore'];
    }

    /**
    * Sets datastore
    *
    * @param \HuaweiCloud\SDK\Cdm\V1\Model\Datastore|null $datastore datastore
    *
    * @return $this
    */
    public function setDatastore($datastore)
    {
        $this->container['datastore'] = $datastore;
        return $this;
    }

    /**
    * Gets dbuser
    *  数据库用户，这里为cdm。
    *
    * @return string|null
    */
    public function getDbuser()
    {
        return $this->container['dbuser'];
    }

    /**
    * Sets dbuser
    *
    * @param string|null $dbuser 数据库用户，这里为cdm。
    *
    * @return $this
    */
    public function setDbuser($dbuser)
    {
        $this->container['dbuser'] = $dbuser;
        return $this;
    }

    /**
    * Gets payModel
    *  付费模式： - 0：按需 - 1：包周期
    *
    * @return int|null
    */
    public function getPayModel()
    {
        return $this->container['payModel'];
    }

    /**
    * Sets payModel
    *
    * @param int|null $payModel 付费模式： - 0：按需 - 1：包周期
    *
    * @return $this
    */
    public function setPayModel($payModel)
    {
        $this->container['payModel'] = $payModel;
        return $this;
    }

    /**
    * Gets publicIp
    *  集群绑定的公网地址
    *
    * @return string|null
    */
    public function getPublicIp()
    {
        return $this->container['publicIp'];
    }

    /**
    * Sets publicIp
    *
    * @param string|null $publicIp 集群绑定的公网地址
    *
    * @return $this
    */
    public function setPublicIp($publicIp)
    {
        $this->container['publicIp'] = $publicIp;
        return $this;
    }

    /**
    * Gets trafficIp
    *  集群的内网地址
    *
    * @return string|null
    */
    public function getTrafficIp()
    {
        return $this->container['trafficIp'];
    }

    /**
    * Sets trafficIp
    *
    * @param string|null $trafficIp 集群的内网地址
    *
    * @return $this
    */
    public function setTrafficIp($trafficIp)
    {
        $this->container['trafficIp'] = $trafficIp;
        return $this;
    }

    /**
    * Gets trafficIpv6
    *  集群的内网IPv6地址
    *
    * @return string|null
    */
    public function getTrafficIpv6()
    {
        return $this->container['trafficIpv6'];
    }

    /**
    * Sets trafficIpv6
    *
    * @param string|null $trafficIpv6 集群的内网IPv6地址
    *
    * @return $this
    */
    public function setTrafficIpv6($trafficIpv6)
    {
        $this->container['trafficIpv6'] = $trafficIpv6;
        return $this;
    }

    /**
    * Gets clusterId
    *  集群ID
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
    * @param string|null $clusterId 集群ID
    *
    * @return $this
    */
    public function setClusterId($clusterId)
    {
        $this->container['clusterId'] = $clusterId;
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

