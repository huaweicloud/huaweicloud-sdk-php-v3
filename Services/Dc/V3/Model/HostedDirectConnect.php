<?php

namespace HuaweiCloud\SDK\Dc\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class HostedDirectConnect implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'HostedDirectConnect';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * id  托管专线ID
    * tenantId  实例所属项目ID。
    * name  物理专线名字
    * description  物理专线的描述信息
    * bandwidth  物理专线接入带宽，单位Mbps。
    * location  专线的接入位置信息
    * peerLocation  物理专线对端所在的物理位置，省/市/街道或IDC名字。
    * hostingId  hosted物理专线对应的hosting物理专线的ID
    * provider  专线线路的提供商
    * adminStateUp  管理状态：true或false
    * vlan  hosted物理专线预分配的vlan。
    * status  操作状态，合法值是：ACTIVE， ERROR，PENDING_CREATE，PENDING_UPDATE。ACTIVE：虚拟网关正常ERROR： 虚拟网关异常PENDING_CREATE：创建中PENDING_UPDATE：更新中
    * applyTime  物理专线申请时间
    * createTime  物理专线创建时间
    * providerStatus  物理专线的运营商操作状态，合法值是：ACTIVE， DOWN
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'id' => 'string',
            'tenantId' => 'string',
            'name' => 'string',
            'description' => 'string',
            'bandwidth' => 'int',
            'location' => 'string',
            'peerLocation' => 'string',
            'hostingId' => 'string',
            'provider' => 'string',
            'adminStateUp' => 'bool',
            'vlan' => 'int',
            'status' => 'string',
            'applyTime' => 'string',
            'createTime' => 'string',
            'providerStatus' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * id  托管专线ID
    * tenantId  实例所属项目ID。
    * name  物理专线名字
    * description  物理专线的描述信息
    * bandwidth  物理专线接入带宽，单位Mbps。
    * location  专线的接入位置信息
    * peerLocation  物理专线对端所在的物理位置，省/市/街道或IDC名字。
    * hostingId  hosted物理专线对应的hosting物理专线的ID
    * provider  专线线路的提供商
    * adminStateUp  管理状态：true或false
    * vlan  hosted物理专线预分配的vlan。
    * status  操作状态，合法值是：ACTIVE， ERROR，PENDING_CREATE，PENDING_UPDATE。ACTIVE：虚拟网关正常ERROR： 虚拟网关异常PENDING_CREATE：创建中PENDING_UPDATE：更新中
    * applyTime  物理专线申请时间
    * createTime  物理专线创建时间
    * providerStatus  物理专线的运营商操作状态，合法值是：ACTIVE， DOWN
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'id' => null,
        'tenantId' => null,
        'name' => null,
        'description' => null,
        'bandwidth' => 'int32',
        'location' => null,
        'peerLocation' => null,
        'hostingId' => null,
        'provider' => null,
        'adminStateUp' => null,
        'vlan' => 'int32',
        'status' => null,
        'applyTime' => null,
        'createTime' => null,
        'providerStatus' => null
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
    * id  托管专线ID
    * tenantId  实例所属项目ID。
    * name  物理专线名字
    * description  物理专线的描述信息
    * bandwidth  物理专线接入带宽，单位Mbps。
    * location  专线的接入位置信息
    * peerLocation  物理专线对端所在的物理位置，省/市/街道或IDC名字。
    * hostingId  hosted物理专线对应的hosting物理专线的ID
    * provider  专线线路的提供商
    * adminStateUp  管理状态：true或false
    * vlan  hosted物理专线预分配的vlan。
    * status  操作状态，合法值是：ACTIVE， ERROR，PENDING_CREATE，PENDING_UPDATE。ACTIVE：虚拟网关正常ERROR： 虚拟网关异常PENDING_CREATE：创建中PENDING_UPDATE：更新中
    * applyTime  物理专线申请时间
    * createTime  物理专线创建时间
    * providerStatus  物理专线的运营商操作状态，合法值是：ACTIVE， DOWN
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'id' => 'id',
            'tenantId' => 'tenant_id',
            'name' => 'name',
            'description' => 'description',
            'bandwidth' => 'bandwidth',
            'location' => 'location',
            'peerLocation' => 'peer_location',
            'hostingId' => 'hosting_id',
            'provider' => 'provider',
            'adminStateUp' => 'admin_state_up',
            'vlan' => 'vlan',
            'status' => 'status',
            'applyTime' => 'apply_time',
            'createTime' => 'create_time',
            'providerStatus' => 'provider_status'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * id  托管专线ID
    * tenantId  实例所属项目ID。
    * name  物理专线名字
    * description  物理专线的描述信息
    * bandwidth  物理专线接入带宽，单位Mbps。
    * location  专线的接入位置信息
    * peerLocation  物理专线对端所在的物理位置，省/市/街道或IDC名字。
    * hostingId  hosted物理专线对应的hosting物理专线的ID
    * provider  专线线路的提供商
    * adminStateUp  管理状态：true或false
    * vlan  hosted物理专线预分配的vlan。
    * status  操作状态，合法值是：ACTIVE， ERROR，PENDING_CREATE，PENDING_UPDATE。ACTIVE：虚拟网关正常ERROR： 虚拟网关异常PENDING_CREATE：创建中PENDING_UPDATE：更新中
    * applyTime  物理专线申请时间
    * createTime  物理专线创建时间
    * providerStatus  物理专线的运营商操作状态，合法值是：ACTIVE， DOWN
    *
    * @var string[]
    */
    protected static $setters = [
            'id' => 'setId',
            'tenantId' => 'setTenantId',
            'name' => 'setName',
            'description' => 'setDescription',
            'bandwidth' => 'setBandwidth',
            'location' => 'setLocation',
            'peerLocation' => 'setPeerLocation',
            'hostingId' => 'setHostingId',
            'provider' => 'setProvider',
            'adminStateUp' => 'setAdminStateUp',
            'vlan' => 'setVlan',
            'status' => 'setStatus',
            'applyTime' => 'setApplyTime',
            'createTime' => 'setCreateTime',
            'providerStatus' => 'setProviderStatus'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * id  托管专线ID
    * tenantId  实例所属项目ID。
    * name  物理专线名字
    * description  物理专线的描述信息
    * bandwidth  物理专线接入带宽，单位Mbps。
    * location  专线的接入位置信息
    * peerLocation  物理专线对端所在的物理位置，省/市/街道或IDC名字。
    * hostingId  hosted物理专线对应的hosting物理专线的ID
    * provider  专线线路的提供商
    * adminStateUp  管理状态：true或false
    * vlan  hosted物理专线预分配的vlan。
    * status  操作状态，合法值是：ACTIVE， ERROR，PENDING_CREATE，PENDING_UPDATE。ACTIVE：虚拟网关正常ERROR： 虚拟网关异常PENDING_CREATE：创建中PENDING_UPDATE：更新中
    * applyTime  物理专线申请时间
    * createTime  物理专线创建时间
    * providerStatus  物理专线的运营商操作状态，合法值是：ACTIVE， DOWN
    *
    * @var string[]
    */
    protected static $getters = [
            'id' => 'getId',
            'tenantId' => 'getTenantId',
            'name' => 'getName',
            'description' => 'getDescription',
            'bandwidth' => 'getBandwidth',
            'location' => 'getLocation',
            'peerLocation' => 'getPeerLocation',
            'hostingId' => 'getHostingId',
            'provider' => 'getProvider',
            'adminStateUp' => 'getAdminStateUp',
            'vlan' => 'getVlan',
            'status' => 'getStatus',
            'applyTime' => 'getApplyTime',
            'createTime' => 'getCreateTime',
            'providerStatus' => 'getProviderStatus'
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
    const STATUS_BUILD = 'BUILD';
    const STATUS_PAID = 'PAID';
    const STATUS_APPLY = 'APPLY';
    const STATUS_PENDING_SURVEY = 'PENDING_SURVEY';
    const STATUS_ACTIVE = 'ACTIVE';
    const STATUS_DOWN = 'DOWN';
    const STATUS_ERROR = 'ERROR';
    const STATUS_PENDING_DELETE = 'PENDING_DELETE';
    const STATUS_DELETED = 'DELETED';
    const STATUS_DENY = 'DENY';
    const STATUS_PENDING_PAY = 'PENDING_PAY';
    const STATUS_ORDERING = 'ORDERING';
    const STATUS_ACCEPT = 'ACCEPT';
    const STATUS_REJECTED = 'REJECTED';
    const PROVIDER_STATUS_ACTIVE = 'ACTIVE';
    const PROVIDER_STATUS_DOWN = 'DOWN';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getStatusAllowableValues()
    {
        return [
            self::STATUS_BUILD,
            self::STATUS_PAID,
            self::STATUS_APPLY,
            self::STATUS_PENDING_SURVEY,
            self::STATUS_ACTIVE,
            self::STATUS_DOWN,
            self::STATUS_ERROR,
            self::STATUS_PENDING_DELETE,
            self::STATUS_DELETED,
            self::STATUS_DENY,
            self::STATUS_PENDING_PAY,
            self::STATUS_ORDERING,
            self::STATUS_ACCEPT,
            self::STATUS_REJECTED,
        ];
    }

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getProviderStatusAllowableValues()
    {
        return [
            self::PROVIDER_STATUS_ACTIVE,
            self::PROVIDER_STATUS_DOWN,
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
        $this->container['tenantId'] = isset($data['tenantId']) ? $data['tenantId'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['bandwidth'] = isset($data['bandwidth']) ? $data['bandwidth'] : null;
        $this->container['location'] = isset($data['location']) ? $data['location'] : null;
        $this->container['peerLocation'] = isset($data['peerLocation']) ? $data['peerLocation'] : null;
        $this->container['hostingId'] = isset($data['hostingId']) ? $data['hostingId'] : null;
        $this->container['provider'] = isset($data['provider']) ? $data['provider'] : null;
        $this->container['adminStateUp'] = isset($data['adminStateUp']) ? $data['adminStateUp'] : null;
        $this->container['vlan'] = isset($data['vlan']) ? $data['vlan'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['applyTime'] = isset($data['applyTime']) ? $data['applyTime'] : null;
        $this->container['createTime'] = isset($data['createTime']) ? $data['createTime'] : null;
        $this->container['providerStatus'] = isset($data['providerStatus']) ? $data['providerStatus'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['id']) && (mb_strlen($this->container['id']) > 36)) {
                $invalidProperties[] = "invalid value for 'id', the character length must be smaller than or equal to 36.";
            }
            if (!is_null($this->container['id']) && (mb_strlen($this->container['id']) < 36)) {
                $invalidProperties[] = "invalid value for 'id', the character length must be bigger than or equal to 36.";
            }
            if (!is_null($this->container['tenantId']) && (mb_strlen($this->container['tenantId']) > 32)) {
                $invalidProperties[] = "invalid value for 'tenantId', the character length must be smaller than or equal to 32.";
            }
            if (!is_null($this->container['tenantId']) && (mb_strlen($this->container['tenantId']) < 32)) {
                $invalidProperties[] = "invalid value for 'tenantId', the character length must be bigger than or equal to 32.";
            }
            if (!is_null($this->container['tenantId']) && !preg_match("/[a-fA-F0-9]{32}/", $this->container['tenantId'])) {
                $invalidProperties[] = "invalid value for 'tenantId', must be conform to the pattern /[a-fA-F0-9]{32}/.";
            }
            if (!is_null($this->container['name']) && (mb_strlen($this->container['name']) > 64)) {
                $invalidProperties[] = "invalid value for 'name', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['name']) && (mb_strlen($this->container['name']) < 0)) {
                $invalidProperties[] = "invalid value for 'name', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['description']) && (mb_strlen($this->container['description']) > 128)) {
                $invalidProperties[] = "invalid value for 'description', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['description']) && (mb_strlen($this->container['description']) < 0)) {
                $invalidProperties[] = "invalid value for 'description', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['bandwidth']) && ($this->container['bandwidth'] > 400000)) {
                $invalidProperties[] = "invalid value for 'bandwidth', must be smaller than or equal to 400000.";
            }
            if (!is_null($this->container['bandwidth']) && ($this->container['bandwidth'] < 2)) {
                $invalidProperties[] = "invalid value for 'bandwidth', must be bigger than or equal to 2.";
            }
            if (!is_null($this->container['location']) && (mb_strlen($this->container['location']) > 255)) {
                $invalidProperties[] = "invalid value for 'location', the character length must be smaller than or equal to 255.";
            }
            if (!is_null($this->container['location']) && (mb_strlen($this->container['location']) < 0)) {
                $invalidProperties[] = "invalid value for 'location', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['peerLocation']) && (mb_strlen($this->container['peerLocation']) > 255)) {
                $invalidProperties[] = "invalid value for 'peerLocation', the character length must be smaller than or equal to 255.";
            }
            if (!is_null($this->container['peerLocation']) && (mb_strlen($this->container['peerLocation']) < 0)) {
                $invalidProperties[] = "invalid value for 'peerLocation', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['hostingId']) && !preg_match("/[a-fA-F0-9]{8}-[a-fA-F0-9]{4}-[a-fA-F0-9]{4}-[a-fA-F0-9]{4}-[a-fA-F0-9]{12}/", $this->container['hostingId'])) {
                $invalidProperties[] = "invalid value for 'hostingId', must be conform to the pattern /[a-fA-F0-9]{8}-[a-fA-F0-9]{4}-[a-fA-F0-9]{4}-[a-fA-F0-9]{4}-[a-fA-F0-9]{12}/.";
            }
            if (!is_null($this->container['vlan']) && ($this->container['vlan'] > 3999)) {
                $invalidProperties[] = "invalid value for 'vlan', must be smaller than or equal to 3999.";
            }
            if (!is_null($this->container['vlan']) && ($this->container['vlan'] < 0)) {
                $invalidProperties[] = "invalid value for 'vlan', must be bigger than or equal to 0.";
            }
            $allowedValues = $this->getStatusAllowableValues();
                if (!is_null($this->container['status']) && !in_array($this->container['status'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'status', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            $allowedValues = $this->getProviderStatusAllowableValues();
                if (!is_null($this->container['providerStatus']) && !in_array($this->container['providerStatus'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'providerStatus', must be one of '%s'",
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
    *  托管专线ID
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
    * @param string|null $id 托管专线ID
    *
    * @return $this
    */
    public function setId($id)
    {
        $this->container['id'] = $id;
        return $this;
    }

    /**
    * Gets tenantId
    *  实例所属项目ID。
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
    * @param string|null $tenantId 实例所属项目ID。
    *
    * @return $this
    */
    public function setTenantId($tenantId)
    {
        $this->container['tenantId'] = $tenantId;
        return $this;
    }

    /**
    * Gets name
    *  物理专线名字
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
    * @param string|null $name 物理专线名字
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets description
    *  物理专线的描述信息
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
    * @param string|null $description 物理专线的描述信息
    *
    * @return $this
    */
    public function setDescription($description)
    {
        $this->container['description'] = $description;
        return $this;
    }

    /**
    * Gets bandwidth
    *  物理专线接入带宽，单位Mbps。
    *
    * @return int|null
    */
    public function getBandwidth()
    {
        return $this->container['bandwidth'];
    }

    /**
    * Sets bandwidth
    *
    * @param int|null $bandwidth 物理专线接入带宽，单位Mbps。
    *
    * @return $this
    */
    public function setBandwidth($bandwidth)
    {
        $this->container['bandwidth'] = $bandwidth;
        return $this;
    }

    /**
    * Gets location
    *  专线的接入位置信息
    *
    * @return string|null
    */
    public function getLocation()
    {
        return $this->container['location'];
    }

    /**
    * Sets location
    *
    * @param string|null $location 专线的接入位置信息
    *
    * @return $this
    */
    public function setLocation($location)
    {
        $this->container['location'] = $location;
        return $this;
    }

    /**
    * Gets peerLocation
    *  物理专线对端所在的物理位置，省/市/街道或IDC名字。
    *
    * @return string|null
    */
    public function getPeerLocation()
    {
        return $this->container['peerLocation'];
    }

    /**
    * Sets peerLocation
    *
    * @param string|null $peerLocation 物理专线对端所在的物理位置，省/市/街道或IDC名字。
    *
    * @return $this
    */
    public function setPeerLocation($peerLocation)
    {
        $this->container['peerLocation'] = $peerLocation;
        return $this;
    }

    /**
    * Gets hostingId
    *  hosted物理专线对应的hosting物理专线的ID
    *
    * @return string|null
    */
    public function getHostingId()
    {
        return $this->container['hostingId'];
    }

    /**
    * Sets hostingId
    *
    * @param string|null $hostingId hosted物理专线对应的hosting物理专线的ID
    *
    * @return $this
    */
    public function setHostingId($hostingId)
    {
        $this->container['hostingId'] = $hostingId;
        return $this;
    }

    /**
    * Gets provider
    *  专线线路的提供商
    *
    * @return string|null
    */
    public function getProvider()
    {
        return $this->container['provider'];
    }

    /**
    * Sets provider
    *
    * @param string|null $provider 专线线路的提供商
    *
    * @return $this
    */
    public function setProvider($provider)
    {
        $this->container['provider'] = $provider;
        return $this;
    }

    /**
    * Gets adminStateUp
    *  管理状态：true或false
    *
    * @return bool|null
    */
    public function getAdminStateUp()
    {
        return $this->container['adminStateUp'];
    }

    /**
    * Sets adminStateUp
    *
    * @param bool|null $adminStateUp 管理状态：true或false
    *
    * @return $this
    */
    public function setAdminStateUp($adminStateUp)
    {
        $this->container['adminStateUp'] = $adminStateUp;
        return $this;
    }

    /**
    * Gets vlan
    *  hosted物理专线预分配的vlan。
    *
    * @return int|null
    */
    public function getVlan()
    {
        return $this->container['vlan'];
    }

    /**
    * Sets vlan
    *
    * @param int|null $vlan hosted物理专线预分配的vlan。
    *
    * @return $this
    */
    public function setVlan($vlan)
    {
        $this->container['vlan'] = $vlan;
        return $this;
    }

    /**
    * Gets status
    *  操作状态，合法值是：ACTIVE， ERROR，PENDING_CREATE，PENDING_UPDATE。ACTIVE：虚拟网关正常ERROR： 虚拟网关异常PENDING_CREATE：创建中PENDING_UPDATE：更新中
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
    * @param string|null $status 操作状态，合法值是：ACTIVE， ERROR，PENDING_CREATE，PENDING_UPDATE。ACTIVE：虚拟网关正常ERROR： 虚拟网关异常PENDING_CREATE：创建中PENDING_UPDATE：更新中
    *
    * @return $this
    */
    public function setStatus($status)
    {
        $this->container['status'] = $status;
        return $this;
    }

    /**
    * Gets applyTime
    *  物理专线申请时间
    *
    * @return string|null
    */
    public function getApplyTime()
    {
        return $this->container['applyTime'];
    }

    /**
    * Sets applyTime
    *
    * @param string|null $applyTime 物理专线申请时间
    *
    * @return $this
    */
    public function setApplyTime($applyTime)
    {
        $this->container['applyTime'] = $applyTime;
        return $this;
    }

    /**
    * Gets createTime
    *  物理专线创建时间
    *
    * @return string|null
    */
    public function getCreateTime()
    {
        return $this->container['createTime'];
    }

    /**
    * Sets createTime
    *
    * @param string|null $createTime 物理专线创建时间
    *
    * @return $this
    */
    public function setCreateTime($createTime)
    {
        $this->container['createTime'] = $createTime;
        return $this;
    }

    /**
    * Gets providerStatus
    *  物理专线的运营商操作状态，合法值是：ACTIVE， DOWN
    *
    * @return string|null
    */
    public function getProviderStatus()
    {
        return $this->container['providerStatus'];
    }

    /**
    * Sets providerStatus
    *
    * @param string|null $providerStatus 物理专线的运营商操作状态，合法值是：ACTIVE， DOWN
    *
    * @return $this
    */
    public function setProviderStatus($providerStatus)
    {
        $this->container['providerStatus'] = $providerStatus;
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

