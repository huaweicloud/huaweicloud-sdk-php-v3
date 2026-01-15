<?php

namespace HuaweiCloud\SDK\Dbss\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ResponseServer implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ResponseServer';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * connectIp  连接IP
    * cpu  CPU数
    * created  创建时间
    * description  描述
    * effect  实例冻结状态  - 1：冻结可释放 （默认）  - 2：冻结不可释放  - 3：冻结后不可续费
    * instanceId  实例ID
    * isActive  双机实例HA中用来标注实例为主机还是备机, - 0：主机  - 1：备机
    * name  实例名称
    * ram  内存大小
    * region  所属REGION
    * resourceSpecCode  实例所属规格编码
    * scene  冻结场景  - POLICE：公安冻结  - ILLEGAL：违规冻结  - VERIFY：未实名认证冻结  - PARTNER：合作伙伴冻结 - ARREAR：普通冻结（普通）
    * securityGroupId  安全组ID
    * specification  资源规格类型编码
    * status  实例状态
    * subnetId  子网ID
    * taskStatus  实例处理中状态
    * updateStatus  升级状态  - SUCCESS：成功  - FAILED：失败  - UPGRADING：升级中
    * version  版本号
    * vpcId  VPC ID
    * zone  所属区域
    * serverId  服务器ID
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'connectIp' => 'string',
            'cpu' => 'string',
            'created' => 'string',
            'description' => 'string',
            'effect' => 'int',
            'instanceId' => 'string',
            'isActive' => 'int',
            'name' => 'string',
            'ram' => 'string',
            'region' => 'string',
            'resourceSpecCode' => 'string',
            'scene' => 'string',
            'securityGroupId' => 'string',
            'specification' => 'string',
            'status' => 'string',
            'subnetId' => 'string',
            'taskStatus' => 'string',
            'updateStatus' => 'string',
            'version' => 'string',
            'vpcId' => 'string',
            'zone' => 'string',
            'serverId' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * connectIp  连接IP
    * cpu  CPU数
    * created  创建时间
    * description  描述
    * effect  实例冻结状态  - 1：冻结可释放 （默认）  - 2：冻结不可释放  - 3：冻结后不可续费
    * instanceId  实例ID
    * isActive  双机实例HA中用来标注实例为主机还是备机, - 0：主机  - 1：备机
    * name  实例名称
    * ram  内存大小
    * region  所属REGION
    * resourceSpecCode  实例所属规格编码
    * scene  冻结场景  - POLICE：公安冻结  - ILLEGAL：违规冻结  - VERIFY：未实名认证冻结  - PARTNER：合作伙伴冻结 - ARREAR：普通冻结（普通）
    * securityGroupId  安全组ID
    * specification  资源规格类型编码
    * status  实例状态
    * subnetId  子网ID
    * taskStatus  实例处理中状态
    * updateStatus  升级状态  - SUCCESS：成功  - FAILED：失败  - UPGRADING：升级中
    * version  版本号
    * vpcId  VPC ID
    * zone  所属区域
    * serverId  服务器ID
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'connectIp' => null,
        'cpu' => null,
        'created' => null,
        'description' => null,
        'effect' => 'int32',
        'instanceId' => null,
        'isActive' => 'int32',
        'name' => null,
        'ram' => null,
        'region' => null,
        'resourceSpecCode' => null,
        'scene' => null,
        'securityGroupId' => null,
        'specification' => null,
        'status' => null,
        'subnetId' => null,
        'taskStatus' => null,
        'updateStatus' => null,
        'version' => null,
        'vpcId' => null,
        'zone' => null,
        'serverId' => null
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
    * connectIp  连接IP
    * cpu  CPU数
    * created  创建时间
    * description  描述
    * effect  实例冻结状态  - 1：冻结可释放 （默认）  - 2：冻结不可释放  - 3：冻结后不可续费
    * instanceId  实例ID
    * isActive  双机实例HA中用来标注实例为主机还是备机, - 0：主机  - 1：备机
    * name  实例名称
    * ram  内存大小
    * region  所属REGION
    * resourceSpecCode  实例所属规格编码
    * scene  冻结场景  - POLICE：公安冻结  - ILLEGAL：违规冻结  - VERIFY：未实名认证冻结  - PARTNER：合作伙伴冻结 - ARREAR：普通冻结（普通）
    * securityGroupId  安全组ID
    * specification  资源规格类型编码
    * status  实例状态
    * subnetId  子网ID
    * taskStatus  实例处理中状态
    * updateStatus  升级状态  - SUCCESS：成功  - FAILED：失败  - UPGRADING：升级中
    * version  版本号
    * vpcId  VPC ID
    * zone  所属区域
    * serverId  服务器ID
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'connectIp' => 'connect_ip',
            'cpu' => 'cpu',
            'created' => 'created',
            'description' => 'description',
            'effect' => 'effect',
            'instanceId' => 'instance_id',
            'isActive' => 'is_active',
            'name' => 'name',
            'ram' => 'ram',
            'region' => 'region',
            'resourceSpecCode' => 'resource_spec_code',
            'scene' => 'scene',
            'securityGroupId' => 'security_group_id',
            'specification' => 'specification',
            'status' => 'status',
            'subnetId' => 'subnet_id',
            'taskStatus' => 'task_status',
            'updateStatus' => 'update_status',
            'version' => 'version',
            'vpcId' => 'vpc_id',
            'zone' => 'zone',
            'serverId' => 'server_id'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * connectIp  连接IP
    * cpu  CPU数
    * created  创建时间
    * description  描述
    * effect  实例冻结状态  - 1：冻结可释放 （默认）  - 2：冻结不可释放  - 3：冻结后不可续费
    * instanceId  实例ID
    * isActive  双机实例HA中用来标注实例为主机还是备机, - 0：主机  - 1：备机
    * name  实例名称
    * ram  内存大小
    * region  所属REGION
    * resourceSpecCode  实例所属规格编码
    * scene  冻结场景  - POLICE：公安冻结  - ILLEGAL：违规冻结  - VERIFY：未实名认证冻结  - PARTNER：合作伙伴冻结 - ARREAR：普通冻结（普通）
    * securityGroupId  安全组ID
    * specification  资源规格类型编码
    * status  实例状态
    * subnetId  子网ID
    * taskStatus  实例处理中状态
    * updateStatus  升级状态  - SUCCESS：成功  - FAILED：失败  - UPGRADING：升级中
    * version  版本号
    * vpcId  VPC ID
    * zone  所属区域
    * serverId  服务器ID
    *
    * @var string[]
    */
    protected static $setters = [
            'connectIp' => 'setConnectIp',
            'cpu' => 'setCpu',
            'created' => 'setCreated',
            'description' => 'setDescription',
            'effect' => 'setEffect',
            'instanceId' => 'setInstanceId',
            'isActive' => 'setIsActive',
            'name' => 'setName',
            'ram' => 'setRam',
            'region' => 'setRegion',
            'resourceSpecCode' => 'setResourceSpecCode',
            'scene' => 'setScene',
            'securityGroupId' => 'setSecurityGroupId',
            'specification' => 'setSpecification',
            'status' => 'setStatus',
            'subnetId' => 'setSubnetId',
            'taskStatus' => 'setTaskStatus',
            'updateStatus' => 'setUpdateStatus',
            'version' => 'setVersion',
            'vpcId' => 'setVpcId',
            'zone' => 'setZone',
            'serverId' => 'setServerId'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * connectIp  连接IP
    * cpu  CPU数
    * created  创建时间
    * description  描述
    * effect  实例冻结状态  - 1：冻结可释放 （默认）  - 2：冻结不可释放  - 3：冻结后不可续费
    * instanceId  实例ID
    * isActive  双机实例HA中用来标注实例为主机还是备机, - 0：主机  - 1：备机
    * name  实例名称
    * ram  内存大小
    * region  所属REGION
    * resourceSpecCode  实例所属规格编码
    * scene  冻结场景  - POLICE：公安冻结  - ILLEGAL：违规冻结  - VERIFY：未实名认证冻结  - PARTNER：合作伙伴冻结 - ARREAR：普通冻结（普通）
    * securityGroupId  安全组ID
    * specification  资源规格类型编码
    * status  实例状态
    * subnetId  子网ID
    * taskStatus  实例处理中状态
    * updateStatus  升级状态  - SUCCESS：成功  - FAILED：失败  - UPGRADING：升级中
    * version  版本号
    * vpcId  VPC ID
    * zone  所属区域
    * serverId  服务器ID
    *
    * @var string[]
    */
    protected static $getters = [
            'connectIp' => 'getConnectIp',
            'cpu' => 'getCpu',
            'created' => 'getCreated',
            'description' => 'getDescription',
            'effect' => 'getEffect',
            'instanceId' => 'getInstanceId',
            'isActive' => 'getIsActive',
            'name' => 'getName',
            'ram' => 'getRam',
            'region' => 'getRegion',
            'resourceSpecCode' => 'getResourceSpecCode',
            'scene' => 'getScene',
            'securityGroupId' => 'getSecurityGroupId',
            'specification' => 'getSpecification',
            'status' => 'getStatus',
            'subnetId' => 'getSubnetId',
            'taskStatus' => 'getTaskStatus',
            'updateStatus' => 'getUpdateStatus',
            'version' => 'getVersion',
            'vpcId' => 'getVpcId',
            'zone' => 'getZone',
            'serverId' => 'getServerId'
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
        $this->container['connectIp'] = isset($data['connectIp']) ? $data['connectIp'] : null;
        $this->container['cpu'] = isset($data['cpu']) ? $data['cpu'] : null;
        $this->container['created'] = isset($data['created']) ? $data['created'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['effect'] = isset($data['effect']) ? $data['effect'] : null;
        $this->container['instanceId'] = isset($data['instanceId']) ? $data['instanceId'] : null;
        $this->container['isActive'] = isset($data['isActive']) ? $data['isActive'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['ram'] = isset($data['ram']) ? $data['ram'] : null;
        $this->container['region'] = isset($data['region']) ? $data['region'] : null;
        $this->container['resourceSpecCode'] = isset($data['resourceSpecCode']) ? $data['resourceSpecCode'] : null;
        $this->container['scene'] = isset($data['scene']) ? $data['scene'] : null;
        $this->container['securityGroupId'] = isset($data['securityGroupId']) ? $data['securityGroupId'] : null;
        $this->container['specification'] = isset($data['specification']) ? $data['specification'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['subnetId'] = isset($data['subnetId']) ? $data['subnetId'] : null;
        $this->container['taskStatus'] = isset($data['taskStatus']) ? $data['taskStatus'] : null;
        $this->container['updateStatus'] = isset($data['updateStatus']) ? $data['updateStatus'] : null;
        $this->container['version'] = isset($data['version']) ? $data['version'] : null;
        $this->container['vpcId'] = isset($data['vpcId']) ? $data['vpcId'] : null;
        $this->container['zone'] = isset($data['zone']) ? $data['zone'] : null;
        $this->container['serverId'] = isset($data['serverId']) ? $data['serverId'] : null;
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
    * Gets connectIp
    *  连接IP
    *
    * @return string|null
    */
    public function getConnectIp()
    {
        return $this->container['connectIp'];
    }

    /**
    * Sets connectIp
    *
    * @param string|null $connectIp 连接IP
    *
    * @return $this
    */
    public function setConnectIp($connectIp)
    {
        $this->container['connectIp'] = $connectIp;
        return $this;
    }

    /**
    * Gets cpu
    *  CPU数
    *
    * @return string|null
    */
    public function getCpu()
    {
        return $this->container['cpu'];
    }

    /**
    * Sets cpu
    *
    * @param string|null $cpu CPU数
    *
    * @return $this
    */
    public function setCpu($cpu)
    {
        $this->container['cpu'] = $cpu;
        return $this;
    }

    /**
    * Gets created
    *  创建时间
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
    * @param string|null $created 创建时间
    *
    * @return $this
    */
    public function setCreated($created)
    {
        $this->container['created'] = $created;
        return $this;
    }

    /**
    * Gets description
    *  描述
    *
    * @return string|null
    */
    public function getDescription()
    {
        return $this->container['description'];
    }

    /**
    * Sets description
    *
    * @param string|null $description 描述
    *
    * @return $this
    */
    public function setDescription($description)
    {
        $this->container['description'] = $description;
        return $this;
    }

    /**
    * Gets effect
    *  实例冻结状态  - 1：冻结可释放 （默认）  - 2：冻结不可释放  - 3：冻结后不可续费
    *
    * @return int|null
    */
    public function getEffect()
    {
        return $this->container['effect'];
    }

    /**
    * Sets effect
    *
    * @param int|null $effect 实例冻结状态  - 1：冻结可释放 （默认）  - 2：冻结不可释放  - 3：冻结后不可续费
    *
    * @return $this
    */
    public function setEffect($effect)
    {
        $this->container['effect'] = $effect;
        return $this;
    }

    /**
    * Gets instanceId
    *  实例ID
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
    * @param string|null $instanceId 实例ID
    *
    * @return $this
    */
    public function setInstanceId($instanceId)
    {
        $this->container['instanceId'] = $instanceId;
        return $this;
    }

    /**
    * Gets isActive
    *  双机实例HA中用来标注实例为主机还是备机, - 0：主机  - 1：备机
    *
    * @return int|null
    */
    public function getIsActive()
    {
        return $this->container['isActive'];
    }

    /**
    * Sets isActive
    *
    * @param int|null $isActive 双机实例HA中用来标注实例为主机还是备机, - 0：主机  - 1：备机
    *
    * @return $this
    */
    public function setIsActive($isActive)
    {
        $this->container['isActive'] = $isActive;
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
    * Gets ram
    *  内存大小
    *
    * @return string|null
    */
    public function getRam()
    {
        return $this->container['ram'];
    }

    /**
    * Sets ram
    *
    * @param string|null $ram 内存大小
    *
    * @return $this
    */
    public function setRam($ram)
    {
        $this->container['ram'] = $ram;
        return $this;
    }

    /**
    * Gets region
    *  所属REGION
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
    * @param string|null $region 所属REGION
    *
    * @return $this
    */
    public function setRegion($region)
    {
        $this->container['region'] = $region;
        return $this;
    }

    /**
    * Gets resourceSpecCode
    *  实例所属规格编码
    *
    * @return string|null
    */
    public function getResourceSpecCode()
    {
        return $this->container['resourceSpecCode'];
    }

    /**
    * Sets resourceSpecCode
    *
    * @param string|null $resourceSpecCode 实例所属规格编码
    *
    * @return $this
    */
    public function setResourceSpecCode($resourceSpecCode)
    {
        $this->container['resourceSpecCode'] = $resourceSpecCode;
        return $this;
    }

    /**
    * Gets scene
    *  冻结场景  - POLICE：公安冻结  - ILLEGAL：违规冻结  - VERIFY：未实名认证冻结  - PARTNER：合作伙伴冻结 - ARREAR：普通冻结（普通）
    *
    * @return string|null
    */
    public function getScene()
    {
        return $this->container['scene'];
    }

    /**
    * Sets scene
    *
    * @param string|null $scene 冻结场景  - POLICE：公安冻结  - ILLEGAL：违规冻结  - VERIFY：未实名认证冻结  - PARTNER：合作伙伴冻结 - ARREAR：普通冻结（普通）
    *
    * @return $this
    */
    public function setScene($scene)
    {
        $this->container['scene'] = $scene;
        return $this;
    }

    /**
    * Gets securityGroupId
    *  安全组ID
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
    * @param string|null $securityGroupId 安全组ID
    *
    * @return $this
    */
    public function setSecurityGroupId($securityGroupId)
    {
        $this->container['securityGroupId'] = $securityGroupId;
        return $this;
    }

    /**
    * Gets specification
    *  资源规格类型编码
    *
    * @return string|null
    */
    public function getSpecification()
    {
        return $this->container['specification'];
    }

    /**
    * Sets specification
    *
    * @param string|null $specification 资源规格类型编码
    *
    * @return $this
    */
    public function setSpecification($specification)
    {
        $this->container['specification'] = $specification;
        return $this;
    }

    /**
    * Gets status
    *  实例状态
    *
    * @return string|null
    */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
    * Sets status
    *
    * @param string|null $status 实例状态
    *
    * @return $this
    */
    public function setStatus($status)
    {
        $this->container['status'] = $status;
        return $this;
    }

    /**
    * Gets subnetId
    *  子网ID
    *
    * @return string|null
    */
    public function getSubnetId()
    {
        return $this->container['subnetId'];
    }

    /**
    * Sets subnetId
    *
    * @param string|null $subnetId 子网ID
    *
    * @return $this
    */
    public function setSubnetId($subnetId)
    {
        $this->container['subnetId'] = $subnetId;
        return $this;
    }

    /**
    * Gets taskStatus
    *  实例处理中状态
    *
    * @return string|null
    */
    public function getTaskStatus()
    {
        return $this->container['taskStatus'];
    }

    /**
    * Sets taskStatus
    *
    * @param string|null $taskStatus 实例处理中状态
    *
    * @return $this
    */
    public function setTaskStatus($taskStatus)
    {
        $this->container['taskStatus'] = $taskStatus;
        return $this;
    }

    /**
    * Gets updateStatus
    *  升级状态  - SUCCESS：成功  - FAILED：失败  - UPGRADING：升级中
    *
    * @return string|null
    */
    public function getUpdateStatus()
    {
        return $this->container['updateStatus'];
    }

    /**
    * Sets updateStatus
    *
    * @param string|null $updateStatus 升级状态  - SUCCESS：成功  - FAILED：失败  - UPGRADING：升级中
    *
    * @return $this
    */
    public function setUpdateStatus($updateStatus)
    {
        $this->container['updateStatus'] = $updateStatus;
        return $this;
    }

    /**
    * Gets version
    *  版本号
    *
    * @return string|null
    */
    public function getVersion()
    {
        return $this->container['version'];
    }

    /**
    * Sets version
    *
    * @param string|null $version 版本号
    *
    * @return $this
    */
    public function setVersion($version)
    {
        $this->container['version'] = $version;
        return $this;
    }

    /**
    * Gets vpcId
    *  VPC ID
    *
    * @return string|null
    */
    public function getVpcId()
    {
        return $this->container['vpcId'];
    }

    /**
    * Sets vpcId
    *
    * @param string|null $vpcId VPC ID
    *
    * @return $this
    */
    public function setVpcId($vpcId)
    {
        $this->container['vpcId'] = $vpcId;
        return $this;
    }

    /**
    * Gets zone
    *  所属区域
    *
    * @return string|null
    */
    public function getZone()
    {
        return $this->container['zone'];
    }

    /**
    * Sets zone
    *
    * @param string|null $zone 所属区域
    *
    * @return $this
    */
    public function setZone($zone)
    {
        $this->container['zone'] = $zone;
        return $this;
    }

    /**
    * Gets serverId
    *  服务器ID
    *
    * @return string|null
    */
    public function getServerId()
    {
        return $this->container['serverId'];
    }

    /**
    * Sets serverId
    *
    * @param string|null $serverId 服务器ID
    *
    * @return $this
    */
    public function setServerId($serverId)
    {
        $this->container['serverId'] = $serverId;
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

