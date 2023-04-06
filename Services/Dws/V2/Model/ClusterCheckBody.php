<?php

namespace HuaweiCloud\SDK\Dws\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ClusterCheckBody implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ClusterCheckBody';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * enterpriseProjectId  企业项目ID
    * flavor  集群规格名称
    * availabilityZones  可用区列表
    * numNode  实例节点个数
    * securityGroupId  集群安全组ID
    * datastoreVersion  集群版本
    * vpcId  集群虚拟私有云ID
    * subnetId  集群子网ID
    * publicIp  publicIp
    * crossSpecRestore  跨规格恢复
    * volume  volume
    * oldClusterHostname  旧主机名
    * restorePoint  restorePoint
    * tagList  标签列表
    * dssPoolId  存储池ID
    * dbPort  数据库端口
    * dbPassword  管理员密码
    * dbName  管理员用户
    * numCn  cn节点数量
    * name  集群名称
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'enterpriseProjectId' => 'string',
            'flavor' => 'string',
            'availabilityZones' => 'string[]',
            'numNode' => 'int',
            'securityGroupId' => 'string',
            'datastoreVersion' => 'string',
            'vpcId' => 'string',
            'subnetId' => 'string',
            'publicIp' => '\HuaweiCloud\SDK\Dws\V2\Model\OpenPublicIp',
            'crossSpecRestore' => 'string',
            'volume' => '\HuaweiCloud\SDK\Dws\V2\Model\Volume',
            'oldClusterHostname' => 'string',
            'restorePoint' => '\HuaweiCloud\SDK\Dws\V2\Model\RestorePoint',
            'tagList' => '\HuaweiCloud\SDK\Dws\V2\Model\Tag[]',
            'dssPoolId' => 'string',
            'dbPort' => 'string',
            'dbPassword' => 'string',
            'dbName' => 'string',
            'numCn' => 'int',
            'name' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * enterpriseProjectId  企业项目ID
    * flavor  集群规格名称
    * availabilityZones  可用区列表
    * numNode  实例节点个数
    * securityGroupId  集群安全组ID
    * datastoreVersion  集群版本
    * vpcId  集群虚拟私有云ID
    * subnetId  集群子网ID
    * publicIp  publicIp
    * crossSpecRestore  跨规格恢复
    * volume  volume
    * oldClusterHostname  旧主机名
    * restorePoint  restorePoint
    * tagList  标签列表
    * dssPoolId  存储池ID
    * dbPort  数据库端口
    * dbPassword  管理员密码
    * dbName  管理员用户
    * numCn  cn节点数量
    * name  集群名称
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'enterpriseProjectId' => null,
        'flavor' => null,
        'availabilityZones' => null,
        'numNode' => 'int32',
        'securityGroupId' => null,
        'datastoreVersion' => null,
        'vpcId' => null,
        'subnetId' => null,
        'publicIp' => null,
        'crossSpecRestore' => null,
        'volume' => null,
        'oldClusterHostname' => null,
        'restorePoint' => null,
        'tagList' => null,
        'dssPoolId' => null,
        'dbPort' => null,
        'dbPassword' => null,
        'dbName' => null,
        'numCn' => 'int32',
        'name' => null
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
    * enterpriseProjectId  企业项目ID
    * flavor  集群规格名称
    * availabilityZones  可用区列表
    * numNode  实例节点个数
    * securityGroupId  集群安全组ID
    * datastoreVersion  集群版本
    * vpcId  集群虚拟私有云ID
    * subnetId  集群子网ID
    * publicIp  publicIp
    * crossSpecRestore  跨规格恢复
    * volume  volume
    * oldClusterHostname  旧主机名
    * restorePoint  restorePoint
    * tagList  标签列表
    * dssPoolId  存储池ID
    * dbPort  数据库端口
    * dbPassword  管理员密码
    * dbName  管理员用户
    * numCn  cn节点数量
    * name  集群名称
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'enterpriseProjectId' => 'enterprise_project_id',
            'flavor' => 'flavor',
            'availabilityZones' => 'availability_zones',
            'numNode' => 'num_node',
            'securityGroupId' => 'security_group_id',
            'datastoreVersion' => 'datastore_version',
            'vpcId' => 'vpc_id',
            'subnetId' => 'subnet_id',
            'publicIp' => 'public_ip',
            'crossSpecRestore' => 'cross_spec_restore',
            'volume' => 'volume',
            'oldClusterHostname' => 'old_cluster_hostname',
            'restorePoint' => 'restore_point',
            'tagList' => 'tag_list',
            'dssPoolId' => 'dss_pool_id',
            'dbPort' => 'db_port',
            'dbPassword' => 'db_password',
            'dbName' => 'db_name',
            'numCn' => 'num_cn',
            'name' => 'name'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * enterpriseProjectId  企业项目ID
    * flavor  集群规格名称
    * availabilityZones  可用区列表
    * numNode  实例节点个数
    * securityGroupId  集群安全组ID
    * datastoreVersion  集群版本
    * vpcId  集群虚拟私有云ID
    * subnetId  集群子网ID
    * publicIp  publicIp
    * crossSpecRestore  跨规格恢复
    * volume  volume
    * oldClusterHostname  旧主机名
    * restorePoint  restorePoint
    * tagList  标签列表
    * dssPoolId  存储池ID
    * dbPort  数据库端口
    * dbPassword  管理员密码
    * dbName  管理员用户
    * numCn  cn节点数量
    * name  集群名称
    *
    * @var string[]
    */
    protected static $setters = [
            'enterpriseProjectId' => 'setEnterpriseProjectId',
            'flavor' => 'setFlavor',
            'availabilityZones' => 'setAvailabilityZones',
            'numNode' => 'setNumNode',
            'securityGroupId' => 'setSecurityGroupId',
            'datastoreVersion' => 'setDatastoreVersion',
            'vpcId' => 'setVpcId',
            'subnetId' => 'setSubnetId',
            'publicIp' => 'setPublicIp',
            'crossSpecRestore' => 'setCrossSpecRestore',
            'volume' => 'setVolume',
            'oldClusterHostname' => 'setOldClusterHostname',
            'restorePoint' => 'setRestorePoint',
            'tagList' => 'setTagList',
            'dssPoolId' => 'setDssPoolId',
            'dbPort' => 'setDbPort',
            'dbPassword' => 'setDbPassword',
            'dbName' => 'setDbName',
            'numCn' => 'setNumCn',
            'name' => 'setName'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * enterpriseProjectId  企业项目ID
    * flavor  集群规格名称
    * availabilityZones  可用区列表
    * numNode  实例节点个数
    * securityGroupId  集群安全组ID
    * datastoreVersion  集群版本
    * vpcId  集群虚拟私有云ID
    * subnetId  集群子网ID
    * publicIp  publicIp
    * crossSpecRestore  跨规格恢复
    * volume  volume
    * oldClusterHostname  旧主机名
    * restorePoint  restorePoint
    * tagList  标签列表
    * dssPoolId  存储池ID
    * dbPort  数据库端口
    * dbPassword  管理员密码
    * dbName  管理员用户
    * numCn  cn节点数量
    * name  集群名称
    *
    * @var string[]
    */
    protected static $getters = [
            'enterpriseProjectId' => 'getEnterpriseProjectId',
            'flavor' => 'getFlavor',
            'availabilityZones' => 'getAvailabilityZones',
            'numNode' => 'getNumNode',
            'securityGroupId' => 'getSecurityGroupId',
            'datastoreVersion' => 'getDatastoreVersion',
            'vpcId' => 'getVpcId',
            'subnetId' => 'getSubnetId',
            'publicIp' => 'getPublicIp',
            'crossSpecRestore' => 'getCrossSpecRestore',
            'volume' => 'getVolume',
            'oldClusterHostname' => 'getOldClusterHostname',
            'restorePoint' => 'getRestorePoint',
            'tagList' => 'getTagList',
            'dssPoolId' => 'getDssPoolId',
            'dbPort' => 'getDbPort',
            'dbPassword' => 'getDbPassword',
            'dbName' => 'getDbName',
            'numCn' => 'getNumCn',
            'name' => 'getName'
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
        $this->container['enterpriseProjectId'] = isset($data['enterpriseProjectId']) ? $data['enterpriseProjectId'] : null;
        $this->container['flavor'] = isset($data['flavor']) ? $data['flavor'] : null;
        $this->container['availabilityZones'] = isset($data['availabilityZones']) ? $data['availabilityZones'] : null;
        $this->container['numNode'] = isset($data['numNode']) ? $data['numNode'] : null;
        $this->container['securityGroupId'] = isset($data['securityGroupId']) ? $data['securityGroupId'] : null;
        $this->container['datastoreVersion'] = isset($data['datastoreVersion']) ? $data['datastoreVersion'] : null;
        $this->container['vpcId'] = isset($data['vpcId']) ? $data['vpcId'] : null;
        $this->container['subnetId'] = isset($data['subnetId']) ? $data['subnetId'] : null;
        $this->container['publicIp'] = isset($data['publicIp']) ? $data['publicIp'] : null;
        $this->container['crossSpecRestore'] = isset($data['crossSpecRestore']) ? $data['crossSpecRestore'] : null;
        $this->container['volume'] = isset($data['volume']) ? $data['volume'] : null;
        $this->container['oldClusterHostname'] = isset($data['oldClusterHostname']) ? $data['oldClusterHostname'] : null;
        $this->container['restorePoint'] = isset($data['restorePoint']) ? $data['restorePoint'] : null;
        $this->container['tagList'] = isset($data['tagList']) ? $data['tagList'] : null;
        $this->container['dssPoolId'] = isset($data['dssPoolId']) ? $data['dssPoolId'] : null;
        $this->container['dbPort'] = isset($data['dbPort']) ? $data['dbPort'] : null;
        $this->container['dbPassword'] = isset($data['dbPassword']) ? $data['dbPassword'] : null;
        $this->container['dbName'] = isset($data['dbName']) ? $data['dbName'] : null;
        $this->container['numCn'] = isset($data['numCn']) ? $data['numCn'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['flavor'] === null) {
            $invalidProperties[] = "'flavor' can't be null";
        }
        if ($this->container['availabilityZones'] === null) {
            $invalidProperties[] = "'availabilityZones' can't be null";
        }
        if ($this->container['numNode'] === null) {
            $invalidProperties[] = "'numNode' can't be null";
        }
        if ($this->container['datastoreVersion'] === null) {
            $invalidProperties[] = "'datastoreVersion' can't be null";
        }
        if ($this->container['vpcId'] === null) {
            $invalidProperties[] = "'vpcId' can't be null";
        }
        if ($this->container['subnetId'] === null) {
            $invalidProperties[] = "'subnetId' can't be null";
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
    * Gets enterpriseProjectId
    *  企业项目ID
    *
    * @return string|null
    */
    public function getEnterpriseProjectId()
    {
        return $this->container['enterpriseProjectId'];
    }

    /**
    * Sets enterpriseProjectId
    *
    * @param string|null $enterpriseProjectId 企业项目ID
    *
    * @return $this
    */
    public function setEnterpriseProjectId($enterpriseProjectId)
    {
        $this->container['enterpriseProjectId'] = $enterpriseProjectId;
        return $this;
    }

    /**
    * Gets flavor
    *  集群规格名称
    *
    * @return string
    */
    public function getFlavor()
    {
        return $this->container['flavor'];
    }

    /**
    * Sets flavor
    *
    * @param string $flavor 集群规格名称
    *
    * @return $this
    */
    public function setFlavor($flavor)
    {
        $this->container['flavor'] = $flavor;
        return $this;
    }

    /**
    * Gets availabilityZones
    *  可用区列表
    *
    * @return string[]
    */
    public function getAvailabilityZones()
    {
        return $this->container['availabilityZones'];
    }

    /**
    * Sets availabilityZones
    *
    * @param string[] $availabilityZones 可用区列表
    *
    * @return $this
    */
    public function setAvailabilityZones($availabilityZones)
    {
        $this->container['availabilityZones'] = $availabilityZones;
        return $this;
    }

    /**
    * Gets numNode
    *  实例节点个数
    *
    * @return int
    */
    public function getNumNode()
    {
        return $this->container['numNode'];
    }

    /**
    * Sets numNode
    *
    * @param int $numNode 实例节点个数
    *
    * @return $this
    */
    public function setNumNode($numNode)
    {
        $this->container['numNode'] = $numNode;
        return $this;
    }

    /**
    * Gets securityGroupId
    *  集群安全组ID
    *
    * @return string|null
    */
    public function getSecurityGroupId()
    {
        return $this->container['securityGroupId'];
    }

    /**
    * Sets securityGroupId
    *
    * @param string|null $securityGroupId 集群安全组ID
    *
    * @return $this
    */
    public function setSecurityGroupId($securityGroupId)
    {
        $this->container['securityGroupId'] = $securityGroupId;
        return $this;
    }

    /**
    * Gets datastoreVersion
    *  集群版本
    *
    * @return string
    */
    public function getDatastoreVersion()
    {
        return $this->container['datastoreVersion'];
    }

    /**
    * Sets datastoreVersion
    *
    * @param string $datastoreVersion 集群版本
    *
    * @return $this
    */
    public function setDatastoreVersion($datastoreVersion)
    {
        $this->container['datastoreVersion'] = $datastoreVersion;
        return $this;
    }

    /**
    * Gets vpcId
    *  集群虚拟私有云ID
    *
    * @return string
    */
    public function getVpcId()
    {
        return $this->container['vpcId'];
    }

    /**
    * Sets vpcId
    *
    * @param string $vpcId 集群虚拟私有云ID
    *
    * @return $this
    */
    public function setVpcId($vpcId)
    {
        $this->container['vpcId'] = $vpcId;
        return $this;
    }

    /**
    * Gets subnetId
    *  集群子网ID
    *
    * @return string
    */
    public function getSubnetId()
    {
        return $this->container['subnetId'];
    }

    /**
    * Sets subnetId
    *
    * @param string $subnetId 集群子网ID
    *
    * @return $this
    */
    public function setSubnetId($subnetId)
    {
        $this->container['subnetId'] = $subnetId;
        return $this;
    }

    /**
    * Gets publicIp
    *  publicIp
    *
    * @return \HuaweiCloud\SDK\Dws\V2\Model\OpenPublicIp|null
    */
    public function getPublicIp()
    {
        return $this->container['publicIp'];
    }

    /**
    * Sets publicIp
    *
    * @param \HuaweiCloud\SDK\Dws\V2\Model\OpenPublicIp|null $publicIp publicIp
    *
    * @return $this
    */
    public function setPublicIp($publicIp)
    {
        $this->container['publicIp'] = $publicIp;
        return $this;
    }

    /**
    * Gets crossSpecRestore
    *  跨规格恢复
    *
    * @return string|null
    */
    public function getCrossSpecRestore()
    {
        return $this->container['crossSpecRestore'];
    }

    /**
    * Sets crossSpecRestore
    *
    * @param string|null $crossSpecRestore 跨规格恢复
    *
    * @return $this
    */
    public function setCrossSpecRestore($crossSpecRestore)
    {
        $this->container['crossSpecRestore'] = $crossSpecRestore;
        return $this;
    }

    /**
    * Gets volume
    *  volume
    *
    * @return \HuaweiCloud\SDK\Dws\V2\Model\Volume|null
    */
    public function getVolume()
    {
        return $this->container['volume'];
    }

    /**
    * Sets volume
    *
    * @param \HuaweiCloud\SDK\Dws\V2\Model\Volume|null $volume volume
    *
    * @return $this
    */
    public function setVolume($volume)
    {
        $this->container['volume'] = $volume;
        return $this;
    }

    /**
    * Gets oldClusterHostname
    *  旧主机名
    *
    * @return string|null
    */
    public function getOldClusterHostname()
    {
        return $this->container['oldClusterHostname'];
    }

    /**
    * Sets oldClusterHostname
    *
    * @param string|null $oldClusterHostname 旧主机名
    *
    * @return $this
    */
    public function setOldClusterHostname($oldClusterHostname)
    {
        $this->container['oldClusterHostname'] = $oldClusterHostname;
        return $this;
    }

    /**
    * Gets restorePoint
    *  restorePoint
    *
    * @return \HuaweiCloud\SDK\Dws\V2\Model\RestorePoint|null
    */
    public function getRestorePoint()
    {
        return $this->container['restorePoint'];
    }

    /**
    * Sets restorePoint
    *
    * @param \HuaweiCloud\SDK\Dws\V2\Model\RestorePoint|null $restorePoint restorePoint
    *
    * @return $this
    */
    public function setRestorePoint($restorePoint)
    {
        $this->container['restorePoint'] = $restorePoint;
        return $this;
    }

    /**
    * Gets tagList
    *  标签列表
    *
    * @return \HuaweiCloud\SDK\Dws\V2\Model\Tag[]|null
    */
    public function getTagList()
    {
        return $this->container['tagList'];
    }

    /**
    * Sets tagList
    *
    * @param \HuaweiCloud\SDK\Dws\V2\Model\Tag[]|null $tagList 标签列表
    *
    * @return $this
    */
    public function setTagList($tagList)
    {
        $this->container['tagList'] = $tagList;
        return $this;
    }

    /**
    * Gets dssPoolId
    *  存储池ID
    *
    * @return string|null
    */
    public function getDssPoolId()
    {
        return $this->container['dssPoolId'];
    }

    /**
    * Sets dssPoolId
    *
    * @param string|null $dssPoolId 存储池ID
    *
    * @return $this
    */
    public function setDssPoolId($dssPoolId)
    {
        $this->container['dssPoolId'] = $dssPoolId;
        return $this;
    }

    /**
    * Gets dbPort
    *  数据库端口
    *
    * @return string|null
    */
    public function getDbPort()
    {
        return $this->container['dbPort'];
    }

    /**
    * Sets dbPort
    *
    * @param string|null $dbPort 数据库端口
    *
    * @return $this
    */
    public function setDbPort($dbPort)
    {
        $this->container['dbPort'] = $dbPort;
        return $this;
    }

    /**
    * Gets dbPassword
    *  管理员密码
    *
    * @return string|null
    */
    public function getDbPassword()
    {
        return $this->container['dbPassword'];
    }

    /**
    * Sets dbPassword
    *
    * @param string|null $dbPassword 管理员密码
    *
    * @return $this
    */
    public function setDbPassword($dbPassword)
    {
        $this->container['dbPassword'] = $dbPassword;
        return $this;
    }

    /**
    * Gets dbName
    *  管理员用户
    *
    * @return string|null
    */
    public function getDbName()
    {
        return $this->container['dbName'];
    }

    /**
    * Sets dbName
    *
    * @param string|null $dbName 管理员用户
    *
    * @return $this
    */
    public function setDbName($dbName)
    {
        $this->container['dbName'] = $dbName;
        return $this;
    }

    /**
    * Gets numCn
    *  cn节点数量
    *
    * @return int|null
    */
    public function getNumCn()
    {
        return $this->container['numCn'];
    }

    /**
    * Sets numCn
    *
    * @param int|null $numCn cn节点数量
    *
    * @return $this
    */
    public function setNumCn($numCn)
    {
        $this->container['numCn'] = $numCn;
        return $this;
    }

    /**
    * Gets name
    *  集群名称
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
    * @param string|null $name 集群名称
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
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

