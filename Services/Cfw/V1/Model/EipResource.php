<?php

namespace HuaweiCloud\SDK\Cfw\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class EipResource implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'EipResource';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * id  弹性公网ID
    * publicIp  弹性公网IP
    * status  EIP防护状态，0表示防护中，1表示未防护
    * publicIpv6  弹性公网IP,IPV6类型
    * enterpriseProjectId  Eip所在账户企业项目id
    * deviceId  EIP绑定设备（如ecs，nat）id
    * deviceName  EIP绑定设备（如ecs，nat）名称
    * deviceOwner  EIP绑定设备（如ecs，nat）拥有者
    * associateInstanceType  关联实例类型，包括：NATGW，ELB，PORT等。
    * fwInstanceName  防火墙名称
    * fwInstanceId  防火墙实例id，创建云防火墙后用于标志防火墙由系统自动生成的标志id，可通过调用[查询防火墙实例接口](ListFirewallDetail.xml)。
    * fwEnterpriseProjectId  Eip绑定的防火墙企业项目id
    * objectId  防护对象id，是创建云防火墙后用于区分互联网边界防护和VPC边界防护的标志id，可通过调用[查询防火墙实例接口](ListFirewallDetail.xml)获得，通过返回值中的data.records.protect_objects.object_id（.表示各对象之间层级的区分）获得，注意type为0的为互联网边界防护对象id，type为1的为VPC边界防护对象id。此处仅取type为0的防护对象id，可通过data.records.protect_objects.type（.表示各对象之间层级的区分）获得。
    * tags  标签列表
    * domainId  EIP所属用户id，可通过[获取账号、IAM用户、项目、用户组、区域、委托的名称和ID](cfw_02_0030.xml)获取。
    * fwDomainId  防火墙所属用户，可通过[获取账号、IAM用户、项目、用户组、区域、委托的名称和ID](cfw_02_0030.xml)获取。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'id' => 'string',
            'publicIp' => 'string',
            'status' => 'int',
            'publicIpv6' => 'string',
            'enterpriseProjectId' => 'string',
            'deviceId' => 'string',
            'deviceName' => 'string',
            'deviceOwner' => 'string',
            'associateInstanceType' => 'string',
            'fwInstanceName' => 'string',
            'fwInstanceId' => 'string',
            'fwEnterpriseProjectId' => 'string',
            'objectId' => 'string',
            'tags' => 'string',
            'domainId' => 'string',
            'fwDomainId' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * id  弹性公网ID
    * publicIp  弹性公网IP
    * status  EIP防护状态，0表示防护中，1表示未防护
    * publicIpv6  弹性公网IP,IPV6类型
    * enterpriseProjectId  Eip所在账户企业项目id
    * deviceId  EIP绑定设备（如ecs，nat）id
    * deviceName  EIP绑定设备（如ecs，nat）名称
    * deviceOwner  EIP绑定设备（如ecs，nat）拥有者
    * associateInstanceType  关联实例类型，包括：NATGW，ELB，PORT等。
    * fwInstanceName  防火墙名称
    * fwInstanceId  防火墙实例id，创建云防火墙后用于标志防火墙由系统自动生成的标志id，可通过调用[查询防火墙实例接口](ListFirewallDetail.xml)。
    * fwEnterpriseProjectId  Eip绑定的防火墙企业项目id
    * objectId  防护对象id，是创建云防火墙后用于区分互联网边界防护和VPC边界防护的标志id，可通过调用[查询防火墙实例接口](ListFirewallDetail.xml)获得，通过返回值中的data.records.protect_objects.object_id（.表示各对象之间层级的区分）获得，注意type为0的为互联网边界防护对象id，type为1的为VPC边界防护对象id。此处仅取type为0的防护对象id，可通过data.records.protect_objects.type（.表示各对象之间层级的区分）获得。
    * tags  标签列表
    * domainId  EIP所属用户id，可通过[获取账号、IAM用户、项目、用户组、区域、委托的名称和ID](cfw_02_0030.xml)获取。
    * fwDomainId  防火墙所属用户，可通过[获取账号、IAM用户、项目、用户组、区域、委托的名称和ID](cfw_02_0030.xml)获取。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'id' => null,
        'publicIp' => null,
        'status' => 'int32',
        'publicIpv6' => null,
        'enterpriseProjectId' => null,
        'deviceId' => null,
        'deviceName' => null,
        'deviceOwner' => null,
        'associateInstanceType' => null,
        'fwInstanceName' => null,
        'fwInstanceId' => null,
        'fwEnterpriseProjectId' => null,
        'objectId' => null,
        'tags' => null,
        'domainId' => null,
        'fwDomainId' => null
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
    * id  弹性公网ID
    * publicIp  弹性公网IP
    * status  EIP防护状态，0表示防护中，1表示未防护
    * publicIpv6  弹性公网IP,IPV6类型
    * enterpriseProjectId  Eip所在账户企业项目id
    * deviceId  EIP绑定设备（如ecs，nat）id
    * deviceName  EIP绑定设备（如ecs，nat）名称
    * deviceOwner  EIP绑定设备（如ecs，nat）拥有者
    * associateInstanceType  关联实例类型，包括：NATGW，ELB，PORT等。
    * fwInstanceName  防火墙名称
    * fwInstanceId  防火墙实例id，创建云防火墙后用于标志防火墙由系统自动生成的标志id，可通过调用[查询防火墙实例接口](ListFirewallDetail.xml)。
    * fwEnterpriseProjectId  Eip绑定的防火墙企业项目id
    * objectId  防护对象id，是创建云防火墙后用于区分互联网边界防护和VPC边界防护的标志id，可通过调用[查询防火墙实例接口](ListFirewallDetail.xml)获得，通过返回值中的data.records.protect_objects.object_id（.表示各对象之间层级的区分）获得，注意type为0的为互联网边界防护对象id，type为1的为VPC边界防护对象id。此处仅取type为0的防护对象id，可通过data.records.protect_objects.type（.表示各对象之间层级的区分）获得。
    * tags  标签列表
    * domainId  EIP所属用户id，可通过[获取账号、IAM用户、项目、用户组、区域、委托的名称和ID](cfw_02_0030.xml)获取。
    * fwDomainId  防火墙所属用户，可通过[获取账号、IAM用户、项目、用户组、区域、委托的名称和ID](cfw_02_0030.xml)获取。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'id' => 'id',
            'publicIp' => 'public_ip',
            'status' => 'status',
            'publicIpv6' => 'public_ipv6',
            'enterpriseProjectId' => 'enterprise_project_id',
            'deviceId' => 'device_id',
            'deviceName' => 'device_name',
            'deviceOwner' => 'device_owner',
            'associateInstanceType' => 'associate_instance_type',
            'fwInstanceName' => 'fw_instance_name',
            'fwInstanceId' => 'fw_instance_id',
            'fwEnterpriseProjectId' => 'fw_enterprise_project_id',
            'objectId' => 'object_id',
            'tags' => 'tags',
            'domainId' => 'domain_id',
            'fwDomainId' => 'fw_domain_id'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * id  弹性公网ID
    * publicIp  弹性公网IP
    * status  EIP防护状态，0表示防护中，1表示未防护
    * publicIpv6  弹性公网IP,IPV6类型
    * enterpriseProjectId  Eip所在账户企业项目id
    * deviceId  EIP绑定设备（如ecs，nat）id
    * deviceName  EIP绑定设备（如ecs，nat）名称
    * deviceOwner  EIP绑定设备（如ecs，nat）拥有者
    * associateInstanceType  关联实例类型，包括：NATGW，ELB，PORT等。
    * fwInstanceName  防火墙名称
    * fwInstanceId  防火墙实例id，创建云防火墙后用于标志防火墙由系统自动生成的标志id，可通过调用[查询防火墙实例接口](ListFirewallDetail.xml)。
    * fwEnterpriseProjectId  Eip绑定的防火墙企业项目id
    * objectId  防护对象id，是创建云防火墙后用于区分互联网边界防护和VPC边界防护的标志id，可通过调用[查询防火墙实例接口](ListFirewallDetail.xml)获得，通过返回值中的data.records.protect_objects.object_id（.表示各对象之间层级的区分）获得，注意type为0的为互联网边界防护对象id，type为1的为VPC边界防护对象id。此处仅取type为0的防护对象id，可通过data.records.protect_objects.type（.表示各对象之间层级的区分）获得。
    * tags  标签列表
    * domainId  EIP所属用户id，可通过[获取账号、IAM用户、项目、用户组、区域、委托的名称和ID](cfw_02_0030.xml)获取。
    * fwDomainId  防火墙所属用户，可通过[获取账号、IAM用户、项目、用户组、区域、委托的名称和ID](cfw_02_0030.xml)获取。
    *
    * @var string[]
    */
    protected static $setters = [
            'id' => 'setId',
            'publicIp' => 'setPublicIp',
            'status' => 'setStatus',
            'publicIpv6' => 'setPublicIpv6',
            'enterpriseProjectId' => 'setEnterpriseProjectId',
            'deviceId' => 'setDeviceId',
            'deviceName' => 'setDeviceName',
            'deviceOwner' => 'setDeviceOwner',
            'associateInstanceType' => 'setAssociateInstanceType',
            'fwInstanceName' => 'setFwInstanceName',
            'fwInstanceId' => 'setFwInstanceId',
            'fwEnterpriseProjectId' => 'setFwEnterpriseProjectId',
            'objectId' => 'setObjectId',
            'tags' => 'setTags',
            'domainId' => 'setDomainId',
            'fwDomainId' => 'setFwDomainId'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * id  弹性公网ID
    * publicIp  弹性公网IP
    * status  EIP防护状态，0表示防护中，1表示未防护
    * publicIpv6  弹性公网IP,IPV6类型
    * enterpriseProjectId  Eip所在账户企业项目id
    * deviceId  EIP绑定设备（如ecs，nat）id
    * deviceName  EIP绑定设备（如ecs，nat）名称
    * deviceOwner  EIP绑定设备（如ecs，nat）拥有者
    * associateInstanceType  关联实例类型，包括：NATGW，ELB，PORT等。
    * fwInstanceName  防火墙名称
    * fwInstanceId  防火墙实例id，创建云防火墙后用于标志防火墙由系统自动生成的标志id，可通过调用[查询防火墙实例接口](ListFirewallDetail.xml)。
    * fwEnterpriseProjectId  Eip绑定的防火墙企业项目id
    * objectId  防护对象id，是创建云防火墙后用于区分互联网边界防护和VPC边界防护的标志id，可通过调用[查询防火墙实例接口](ListFirewallDetail.xml)获得，通过返回值中的data.records.protect_objects.object_id（.表示各对象之间层级的区分）获得，注意type为0的为互联网边界防护对象id，type为1的为VPC边界防护对象id。此处仅取type为0的防护对象id，可通过data.records.protect_objects.type（.表示各对象之间层级的区分）获得。
    * tags  标签列表
    * domainId  EIP所属用户id，可通过[获取账号、IAM用户、项目、用户组、区域、委托的名称和ID](cfw_02_0030.xml)获取。
    * fwDomainId  防火墙所属用户，可通过[获取账号、IAM用户、项目、用户组、区域、委托的名称和ID](cfw_02_0030.xml)获取。
    *
    * @var string[]
    */
    protected static $getters = [
            'id' => 'getId',
            'publicIp' => 'getPublicIp',
            'status' => 'getStatus',
            'publicIpv6' => 'getPublicIpv6',
            'enterpriseProjectId' => 'getEnterpriseProjectId',
            'deviceId' => 'getDeviceId',
            'deviceName' => 'getDeviceName',
            'deviceOwner' => 'getDeviceOwner',
            'associateInstanceType' => 'getAssociateInstanceType',
            'fwInstanceName' => 'getFwInstanceName',
            'fwInstanceId' => 'getFwInstanceId',
            'fwEnterpriseProjectId' => 'getFwEnterpriseProjectId',
            'objectId' => 'getObjectId',
            'tags' => 'getTags',
            'domainId' => 'getDomainId',
            'fwDomainId' => 'getFwDomainId'
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
    const STATUS_0 = 0;
    const STATUS_1 = 1;
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getStatusAllowableValues()
    {
        return [
            self::STATUS_0,
            self::STATUS_1,
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
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['publicIp'] = isset($data['publicIp']) ? $data['publicIp'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['publicIpv6'] = isset($data['publicIpv6']) ? $data['publicIpv6'] : null;
        $this->container['enterpriseProjectId'] = isset($data['enterpriseProjectId']) ? $data['enterpriseProjectId'] : null;
        $this->container['deviceId'] = isset($data['deviceId']) ? $data['deviceId'] : null;
        $this->container['deviceName'] = isset($data['deviceName']) ? $data['deviceName'] : null;
        $this->container['deviceOwner'] = isset($data['deviceOwner']) ? $data['deviceOwner'] : null;
        $this->container['associateInstanceType'] = isset($data['associateInstanceType']) ? $data['associateInstanceType'] : null;
        $this->container['fwInstanceName'] = isset($data['fwInstanceName']) ? $data['fwInstanceName'] : null;
        $this->container['fwInstanceId'] = isset($data['fwInstanceId']) ? $data['fwInstanceId'] : null;
        $this->container['fwEnterpriseProjectId'] = isset($data['fwEnterpriseProjectId']) ? $data['fwEnterpriseProjectId'] : null;
        $this->container['objectId'] = isset($data['objectId']) ? $data['objectId'] : null;
        $this->container['tags'] = isset($data['tags']) ? $data['tags'] : null;
        $this->container['domainId'] = isset($data['domainId']) ? $data['domainId'] : null;
        $this->container['fwDomainId'] = isset($data['fwDomainId']) ? $data['fwDomainId'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            $allowedValues = $this->getStatusAllowableValues();
                if (!is_null($this->container['status']) && !in_array($this->container['status'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'status', must be one of '%s'",
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
    * Gets id
    *  弹性公网ID
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
    * @param string|null $id 弹性公网ID
    *
    * @return $this
    */
    public function setId($id)
    {
        $this->container['id'] = $id;
        return $this;
    }

    /**
    * Gets publicIp
    *  弹性公网IP
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
    * @param string|null $publicIp 弹性公网IP
    *
    * @return $this
    */
    public function setPublicIp($publicIp)
    {
        $this->container['publicIp'] = $publicIp;
        return $this;
    }

    /**
    * Gets status
    *  EIP防护状态，0表示防护中，1表示未防护
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
    * @param int|null $status EIP防护状态，0表示防护中，1表示未防护
    *
    * @return $this
    */
    public function setStatus($status)
    {
        $this->container['status'] = $status;
        return $this;
    }

    /**
    * Gets publicIpv6
    *  弹性公网IP,IPV6类型
    *
    * @return string|null
    */
    public function getPublicIpv6()
    {
        return $this->container['publicIpv6'];
    }

    /**
    * Sets publicIpv6
    *
    * @param string|null $publicIpv6 弹性公网IP,IPV6类型
    *
    * @return $this
    */
    public function setPublicIpv6($publicIpv6)
    {
        $this->container['publicIpv6'] = $publicIpv6;
        return $this;
    }

    /**
    * Gets enterpriseProjectId
    *  Eip所在账户企业项目id
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
    * @param string|null $enterpriseProjectId Eip所在账户企业项目id
    *
    * @return $this
    */
    public function setEnterpriseProjectId($enterpriseProjectId)
    {
        $this->container['enterpriseProjectId'] = $enterpriseProjectId;
        return $this;
    }

    /**
    * Gets deviceId
    *  EIP绑定设备（如ecs，nat）id
    *
    * @return string|null
    */
    public function getDeviceId()
    {
        return $this->container['deviceId'];
    }

    /**
    * Sets deviceId
    *
    * @param string|null $deviceId EIP绑定设备（如ecs，nat）id
    *
    * @return $this
    */
    public function setDeviceId($deviceId)
    {
        $this->container['deviceId'] = $deviceId;
        return $this;
    }

    /**
    * Gets deviceName
    *  EIP绑定设备（如ecs，nat）名称
    *
    * @return string|null
    */
    public function getDeviceName()
    {
        return $this->container['deviceName'];
    }

    /**
    * Sets deviceName
    *
    * @param string|null $deviceName EIP绑定设备（如ecs，nat）名称
    *
    * @return $this
    */
    public function setDeviceName($deviceName)
    {
        $this->container['deviceName'] = $deviceName;
        return $this;
    }

    /**
    * Gets deviceOwner
    *  EIP绑定设备（如ecs，nat）拥有者
    *
    * @return string|null
    */
    public function getDeviceOwner()
    {
        return $this->container['deviceOwner'];
    }

    /**
    * Sets deviceOwner
    *
    * @param string|null $deviceOwner EIP绑定设备（如ecs，nat）拥有者
    *
    * @return $this
    */
    public function setDeviceOwner($deviceOwner)
    {
        $this->container['deviceOwner'] = $deviceOwner;
        return $this;
    }

    /**
    * Gets associateInstanceType
    *  关联实例类型，包括：NATGW，ELB，PORT等。
    *
    * @return string|null
    */
    public function getAssociateInstanceType()
    {
        return $this->container['associateInstanceType'];
    }

    /**
    * Sets associateInstanceType
    *
    * @param string|null $associateInstanceType 关联实例类型，包括：NATGW，ELB，PORT等。
    *
    * @return $this
    */
    public function setAssociateInstanceType($associateInstanceType)
    {
        $this->container['associateInstanceType'] = $associateInstanceType;
        return $this;
    }

    /**
    * Gets fwInstanceName
    *  防火墙名称
    *
    * @return string|null
    */
    public function getFwInstanceName()
    {
        return $this->container['fwInstanceName'];
    }

    /**
    * Sets fwInstanceName
    *
    * @param string|null $fwInstanceName 防火墙名称
    *
    * @return $this
    */
    public function setFwInstanceName($fwInstanceName)
    {
        $this->container['fwInstanceName'] = $fwInstanceName;
        return $this;
    }

    /**
    * Gets fwInstanceId
    *  防火墙实例id，创建云防火墙后用于标志防火墙由系统自动生成的标志id，可通过调用[查询防火墙实例接口](ListFirewallDetail.xml)。
    *
    * @return string|null
    */
    public function getFwInstanceId()
    {
        return $this->container['fwInstanceId'];
    }

    /**
    * Sets fwInstanceId
    *
    * @param string|null $fwInstanceId 防火墙实例id，创建云防火墙后用于标志防火墙由系统自动生成的标志id，可通过调用[查询防火墙实例接口](ListFirewallDetail.xml)。
    *
    * @return $this
    */
    public function setFwInstanceId($fwInstanceId)
    {
        $this->container['fwInstanceId'] = $fwInstanceId;
        return $this;
    }

    /**
    * Gets fwEnterpriseProjectId
    *  Eip绑定的防火墙企业项目id
    *
    * @return string|null
    */
    public function getFwEnterpriseProjectId()
    {
        return $this->container['fwEnterpriseProjectId'];
    }

    /**
    * Sets fwEnterpriseProjectId
    *
    * @param string|null $fwEnterpriseProjectId Eip绑定的防火墙企业项目id
    *
    * @return $this
    */
    public function setFwEnterpriseProjectId($fwEnterpriseProjectId)
    {
        $this->container['fwEnterpriseProjectId'] = $fwEnterpriseProjectId;
        return $this;
    }

    /**
    * Gets objectId
    *  防护对象id，是创建云防火墙后用于区分互联网边界防护和VPC边界防护的标志id，可通过调用[查询防火墙实例接口](ListFirewallDetail.xml)获得，通过返回值中的data.records.protect_objects.object_id（.表示各对象之间层级的区分）获得，注意type为0的为互联网边界防护对象id，type为1的为VPC边界防护对象id。此处仅取type为0的防护对象id，可通过data.records.protect_objects.type（.表示各对象之间层级的区分）获得。
    *
    * @return string|null
    */
    public function getObjectId()
    {
        return $this->container['objectId'];
    }

    /**
    * Sets objectId
    *
    * @param string|null $objectId 防护对象id，是创建云防火墙后用于区分互联网边界防护和VPC边界防护的标志id，可通过调用[查询防火墙实例接口](ListFirewallDetail.xml)获得，通过返回值中的data.records.protect_objects.object_id（.表示各对象之间层级的区分）获得，注意type为0的为互联网边界防护对象id，type为1的为VPC边界防护对象id。此处仅取type为0的防护对象id，可通过data.records.protect_objects.type（.表示各对象之间层级的区分）获得。
    *
    * @return $this
    */
    public function setObjectId($objectId)
    {
        $this->container['objectId'] = $objectId;
        return $this;
    }

    /**
    * Gets tags
    *  标签列表
    *
    * @return string|null
    */
    public function getTags()
    {
        return $this->container['tags'];
    }

    /**
    * Sets tags
    *
    * @param string|null $tags 标签列表
    *
    * @return $this
    */
    public function setTags($tags)
    {
        $this->container['tags'] = $tags;
        return $this;
    }

    /**
    * Gets domainId
    *  EIP所属用户id，可通过[获取账号、IAM用户、项目、用户组、区域、委托的名称和ID](cfw_02_0030.xml)获取。
    *
    * @return string|null
    */
    public function getDomainId()
    {
        return $this->container['domainId'];
    }

    /**
    * Sets domainId
    *
    * @param string|null $domainId EIP所属用户id，可通过[获取账号、IAM用户、项目、用户组、区域、委托的名称和ID](cfw_02_0030.xml)获取。
    *
    * @return $this
    */
    public function setDomainId($domainId)
    {
        $this->container['domainId'] = $domainId;
        return $this;
    }

    /**
    * Gets fwDomainId
    *  防火墙所属用户，可通过[获取账号、IAM用户、项目、用户组、区域、委托的名称和ID](cfw_02_0030.xml)获取。
    *
    * @return string|null
    */
    public function getFwDomainId()
    {
        return $this->container['fwDomainId'];
    }

    /**
    * Sets fwDomainId
    *
    * @param string|null $fwDomainId 防火墙所属用户，可通过[获取账号、IAM用户、项目、用户组、区域、委托的名称和ID](cfw_02_0030.xml)获取。
    *
    * @return $this
    */
    public function setFwDomainId($fwDomainId)
    {
        $this->container['fwDomainId'] = $fwDomainId;
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

