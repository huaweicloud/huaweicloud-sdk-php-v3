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
    * name  托管专线名字
    * description  托管专线的描述信息
    * bandwidth  托管专线接入带宽，单位Mbps。
    * location  专线的接入位置信息
    * peerLocation  托管专线对端所在的物理位置，省/市/街道或IDC名字。
    * hostingId  hosted物理专线对应的hosting物理专线的ID
    * provider  专线线路的提供商
    * adminStateUp  管理状态：true或false
    * vlan  hosted物理专线预分配的vlan。
    * status  操作状态，合法值是： BUILD：已开通 ACTIVE：托管专线正常 DOWN：专线对应的端口处于down的状态，可能存在线路故障等异常。 ERROR：托管专线异常 PENDING_DELETE：删除中 PENDING_UPDATE：更新中 PENDING_CREATE：创建中
    * applyTime  托管专线申请时间。采用UTC时间格式，格式为：yyyy-MM-ddTHH:mm:ss.SSSZ
    * createTime  托管专线创建时间。采用UTC时间格式，格式为：yyyy-MM-ddTHH:mm:ss.SSSZ
    * providerStatus  托管专线的运营商操作状态，合法值是：ACTIVE， DOWN
    * portType  托管专线接入接口的类型，支持1G 10G 40G 100G
    * type  托管专线的类型，类型包括标准(standard)，运营专线(hosting)，托管专线（hosted）[，一站式标准（onestop_standard），一站式托管（onestop_hosted）](tag:hws)。
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
            'applyTime' => '\DateTime',
            'createTime' => '\DateTime',
            'providerStatus' => 'string',
            'portType' => 'string',
            'type' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * id  托管专线ID
    * tenantId  实例所属项目ID。
    * name  托管专线名字
    * description  托管专线的描述信息
    * bandwidth  托管专线接入带宽，单位Mbps。
    * location  专线的接入位置信息
    * peerLocation  托管专线对端所在的物理位置，省/市/街道或IDC名字。
    * hostingId  hosted物理专线对应的hosting物理专线的ID
    * provider  专线线路的提供商
    * adminStateUp  管理状态：true或false
    * vlan  hosted物理专线预分配的vlan。
    * status  操作状态，合法值是： BUILD：已开通 ACTIVE：托管专线正常 DOWN：专线对应的端口处于down的状态，可能存在线路故障等异常。 ERROR：托管专线异常 PENDING_DELETE：删除中 PENDING_UPDATE：更新中 PENDING_CREATE：创建中
    * applyTime  托管专线申请时间。采用UTC时间格式，格式为：yyyy-MM-ddTHH:mm:ss.SSSZ
    * createTime  托管专线创建时间。采用UTC时间格式，格式为：yyyy-MM-ddTHH:mm:ss.SSSZ
    * providerStatus  托管专线的运营商操作状态，合法值是：ACTIVE， DOWN
    * portType  托管专线接入接口的类型，支持1G 10G 40G 100G
    * type  托管专线的类型，类型包括标准(standard)，运营专线(hosting)，托管专线（hosted）[，一站式标准（onestop_standard），一站式托管（onestop_hosted）](tag:hws)。
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
        'applyTime' => 'date-time',
        'createTime' => 'date-time',
        'providerStatus' => null,
        'portType' => null,
        'type' => null
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
    * name  托管专线名字
    * description  托管专线的描述信息
    * bandwidth  托管专线接入带宽，单位Mbps。
    * location  专线的接入位置信息
    * peerLocation  托管专线对端所在的物理位置，省/市/街道或IDC名字。
    * hostingId  hosted物理专线对应的hosting物理专线的ID
    * provider  专线线路的提供商
    * adminStateUp  管理状态：true或false
    * vlan  hosted物理专线预分配的vlan。
    * status  操作状态，合法值是： BUILD：已开通 ACTIVE：托管专线正常 DOWN：专线对应的端口处于down的状态，可能存在线路故障等异常。 ERROR：托管专线异常 PENDING_DELETE：删除中 PENDING_UPDATE：更新中 PENDING_CREATE：创建中
    * applyTime  托管专线申请时间。采用UTC时间格式，格式为：yyyy-MM-ddTHH:mm:ss.SSSZ
    * createTime  托管专线创建时间。采用UTC时间格式，格式为：yyyy-MM-ddTHH:mm:ss.SSSZ
    * providerStatus  托管专线的运营商操作状态，合法值是：ACTIVE， DOWN
    * portType  托管专线接入接口的类型，支持1G 10G 40G 100G
    * type  托管专线的类型，类型包括标准(standard)，运营专线(hosting)，托管专线（hosted）[，一站式标准（onestop_standard），一站式托管（onestop_hosted）](tag:hws)。
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
            'providerStatus' => 'provider_status',
            'portType' => 'port_type',
            'type' => 'type'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * id  托管专线ID
    * tenantId  实例所属项目ID。
    * name  托管专线名字
    * description  托管专线的描述信息
    * bandwidth  托管专线接入带宽，单位Mbps。
    * location  专线的接入位置信息
    * peerLocation  托管专线对端所在的物理位置，省/市/街道或IDC名字。
    * hostingId  hosted物理专线对应的hosting物理专线的ID
    * provider  专线线路的提供商
    * adminStateUp  管理状态：true或false
    * vlan  hosted物理专线预分配的vlan。
    * status  操作状态，合法值是： BUILD：已开通 ACTIVE：托管专线正常 DOWN：专线对应的端口处于down的状态，可能存在线路故障等异常。 ERROR：托管专线异常 PENDING_DELETE：删除中 PENDING_UPDATE：更新中 PENDING_CREATE：创建中
    * applyTime  托管专线申请时间。采用UTC时间格式，格式为：yyyy-MM-ddTHH:mm:ss.SSSZ
    * createTime  托管专线创建时间。采用UTC时间格式，格式为：yyyy-MM-ddTHH:mm:ss.SSSZ
    * providerStatus  托管专线的运营商操作状态，合法值是：ACTIVE， DOWN
    * portType  托管专线接入接口的类型，支持1G 10G 40G 100G
    * type  托管专线的类型，类型包括标准(standard)，运营专线(hosting)，托管专线（hosted）[，一站式标准（onestop_standard），一站式托管（onestop_hosted）](tag:hws)。
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
            'providerStatus' => 'setProviderStatus',
            'portType' => 'setPortType',
            'type' => 'setType'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * id  托管专线ID
    * tenantId  实例所属项目ID。
    * name  托管专线名字
    * description  托管专线的描述信息
    * bandwidth  托管专线接入带宽，单位Mbps。
    * location  专线的接入位置信息
    * peerLocation  托管专线对端所在的物理位置，省/市/街道或IDC名字。
    * hostingId  hosted物理专线对应的hosting物理专线的ID
    * provider  专线线路的提供商
    * adminStateUp  管理状态：true或false
    * vlan  hosted物理专线预分配的vlan。
    * status  操作状态，合法值是： BUILD：已开通 ACTIVE：托管专线正常 DOWN：专线对应的端口处于down的状态，可能存在线路故障等异常。 ERROR：托管专线异常 PENDING_DELETE：删除中 PENDING_UPDATE：更新中 PENDING_CREATE：创建中
    * applyTime  托管专线申请时间。采用UTC时间格式，格式为：yyyy-MM-ddTHH:mm:ss.SSSZ
    * createTime  托管专线创建时间。采用UTC时间格式，格式为：yyyy-MM-ddTHH:mm:ss.SSSZ
    * providerStatus  托管专线的运营商操作状态，合法值是：ACTIVE， DOWN
    * portType  托管专线接入接口的类型，支持1G 10G 40G 100G
    * type  托管专线的类型，类型包括标准(standard)，运营专线(hosting)，托管专线（hosted）[，一站式标准（onestop_standard），一站式托管（onestop_hosted）](tag:hws)。
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
            'providerStatus' => 'getProviderStatus',
            'portType' => 'getPortType',
            'type' => 'getType'
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
    const STATUS_ACTIVE = 'ACTIVE';
    const STATUS_DOWN = 'DOWN';
    const STATUS_ERROR = 'ERROR';
    const STATUS_PENDING_DELETE = 'PENDING_DELETE';
    const STATUS_PENDING_UPDATE = 'PENDING_UPDATE';
    const STATUS_PENDING_CREATE = 'PENDING_CREATE';
    const PROVIDER_STATUS_ACTIVE = 'ACTIVE';
    const PROVIDER_STATUS_DOWN = 'DOWN';
    const PORT_TYPE__1_G = '1G';
    const PORT_TYPE__10_G = '10G';
    const PORT_TYPE__40_G = '40G';
    const PORT_TYPE__100_G = '100G';
    const TYPE_STANDARD = 'standard';
    const TYPE_HOSTING = 'hosting';
    const TYPE_HOSTED = 'hosted';
    const TYPE_ONESTOP_STANDARD = 'onestop_standard';
    const TYPE_ONESTOP_HOSTED = 'onestop_hosted';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getStatusAllowableValues()
    {
        return [
            self::STATUS_BUILD,
            self::STATUS_ACTIVE,
            self::STATUS_DOWN,
            self::STATUS_ERROR,
            self::STATUS_PENDING_DELETE,
            self::STATUS_PENDING_UPDATE,
            self::STATUS_PENDING_CREATE,
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
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getPortTypeAllowableValues()
    {
        return [
            self::PORT_TYPE__1_G,
            self::PORT_TYPE__10_G,
            self::PORT_TYPE__40_G,
            self::PORT_TYPE__100_G,
        ];
    }

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getTypeAllowableValues()
    {
        return [
            self::TYPE_STANDARD,
            self::TYPE_HOSTING,
            self::TYPE_HOSTED,
            self::TYPE_ONESTOP_STANDARD,
            self::TYPE_ONESTOP_HOSTED,
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
        $this->container['portType'] = isset($data['portType']) ? $data['portType'] : null;
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
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

            $allowedValues = $this->getPortTypeAllowableValues();
                if (!is_null($this->container['portType']) && !in_array($this->container['portType'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'portType', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            $allowedValues = $this->getTypeAllowableValues();
                if (!is_null($this->container['type']) && !in_array($this->container['type'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'type', must be one of '%s'",
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
    *  托管专线名字
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
    * @param string|null $name 托管专线名字
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
    *  托管专线的描述信息
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
    * @param string|null $description 托管专线的描述信息
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
    *  托管专线接入带宽，单位Mbps。
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
    * @param int|null $bandwidth 托管专线接入带宽，单位Mbps。
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
    *  托管专线对端所在的物理位置，省/市/街道或IDC名字。
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
    * @param string|null $peerLocation 托管专线对端所在的物理位置，省/市/街道或IDC名字。
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
    *  操作状态，合法值是： BUILD：已开通 ACTIVE：托管专线正常 DOWN：专线对应的端口处于down的状态，可能存在线路故障等异常。 ERROR：托管专线异常 PENDING_DELETE：删除中 PENDING_UPDATE：更新中 PENDING_CREATE：创建中
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
    * @param string|null $status 操作状态，合法值是： BUILD：已开通 ACTIVE：托管专线正常 DOWN：专线对应的端口处于down的状态，可能存在线路故障等异常。 ERROR：托管专线异常 PENDING_DELETE：删除中 PENDING_UPDATE：更新中 PENDING_CREATE：创建中
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
    *  托管专线申请时间。采用UTC时间格式，格式为：yyyy-MM-ddTHH:mm:ss.SSSZ
    *
    * @return \DateTime|null
    */
    public function getApplyTime()
    {
        return $this->container['applyTime'];
    }

    /**
    * Sets applyTime
    *
    * @param \DateTime|null $applyTime 托管专线申请时间。采用UTC时间格式，格式为：yyyy-MM-ddTHH:mm:ss.SSSZ
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
    *  托管专线创建时间。采用UTC时间格式，格式为：yyyy-MM-ddTHH:mm:ss.SSSZ
    *
    * @return \DateTime|null
    */
    public function getCreateTime()
    {
        return $this->container['createTime'];
    }

    /**
    * Sets createTime
    *
    * @param \DateTime|null $createTime 托管专线创建时间。采用UTC时间格式，格式为：yyyy-MM-ddTHH:mm:ss.SSSZ
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
    *  托管专线的运营商操作状态，合法值是：ACTIVE， DOWN
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
    * @param string|null $providerStatus 托管专线的运营商操作状态，合法值是：ACTIVE， DOWN
    *
    * @return $this
    */
    public function setProviderStatus($providerStatus)
    {
        $this->container['providerStatus'] = $providerStatus;
        return $this;
    }

    /**
    * Gets portType
    *  托管专线接入接口的类型，支持1G 10G 40G 100G
    *
    * @return string|null
    */
    public function getPortType()
    {
        return $this->container['portType'];
    }

    /**
    * Sets portType
    *
    * @param string|null $portType 托管专线接入接口的类型，支持1G 10G 40G 100G
    *
    * @return $this
    */
    public function setPortType($portType)
    {
        $this->container['portType'] = $portType;
        return $this;
    }

    /**
    * Gets type
    *  托管专线的类型，类型包括标准(standard)，运营专线(hosting)，托管专线（hosted）[，一站式标准（onestop_standard），一站式托管（onestop_hosted）](tag:hws)。
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
    * @param string|null $type 托管专线的类型，类型包括标准(standard)，运营专线(hosting)，托管专线（hosted）[，一站式标准（onestop_standard），一站式托管（onestop_hosted）](tag:hws)。
    *
    * @return $this
    */
    public function setType($type)
    {
        $this->container['type'] = $type;
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

