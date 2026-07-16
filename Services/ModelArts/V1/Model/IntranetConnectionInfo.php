<?php

namespace HuaweiCloud\SDK\ModelArts\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class IntranetConnectionInfo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'IntranetConnectionInfo';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * applicantUserName  **参数解释：** 申请方用户名。 **取值范围：** 不涉及。
    * id  **参数解释：** 内网接入id。 **取值范围：** 不涉及。
    * message  **参数解释：** 申请描述。 **取值范围：** 不涉及。
    * ownerDomainName  **参数解释：** 审核方domain name。  **取值范围：** 不涉及。
    * scene  **参数解释：** 内网访问场景。 **约束限制：** 不涉及。 **取值范围：** - POOL：用户资源池接入场景 - VPC：用户VPC接入场景 **默认取值：** 不涉及。
    * serviceId  **参数解释：** 服务ID。 **取值范围：** 不涉及。
    * serviceName  **参数解释：** 服务名。 **取值范围：** 不涉及。
    * status  **参数解释：** 内网接入状态，支持列表查询。 **约束限制：** 不涉及。 **取值范围：** - APPROVING：审批中 - REJECTED：拒绝 - CONNECTING：接入中 - CONNECTED：已接入 - CANCELED：已取消 - FAILED：失败 - DELETING：删除中 **默认取值：** 不涉及。
    * subnetId  **参数解释：** 子网ID。 **取值范围：** 不涉及。
    * urlList  **参数解释：** 访问地址列表。
    * customUrlList  **参数解释：** 访问地址列表。
    * vpcId  **参数解释：** VPC ID。 **取值范围：** 不涉及。
    * dispatcherGroupId  **参数解释：** 服务绑定的dispatcher组ID。 **取值范围：** 不涉及。
    * type  **参数解释：** 接入粒度：SERVICE、GLOBAL **取值范围：** 不涉及。
    * maosNetworkName  **参数解释：** 资源池网络名称。 **取值范围：** 不涉及。
    * serviceType  **参数解释：** 服务类型。 **取值范围：** 不涉及。
    * poolId  **参数解释：** 资源池ID。 **取值范围：** 不涉及。
    * createAt  **参数解释：** 创建时间。 **取值范围：** 不涉及。
    * updateAt  **参数解释：** 修改时间。 **取值范围：** 不涉及。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'applicantUserName' => 'string',
            'id' => 'string',
            'message' => 'string',
            'ownerDomainName' => 'string',
            'scene' => 'string',
            'serviceId' => 'string',
            'serviceName' => 'string',
            'status' => 'string',
            'subnetId' => 'string',
            'urlList' => 'string[]',
            'customUrlList' => 'string[]',
            'vpcId' => 'string',
            'dispatcherGroupId' => 'string',
            'type' => 'string',
            'maosNetworkName' => 'string',
            'serviceType' => 'string',
            'poolId' => 'string',
            'createAt' => 'string',
            'updateAt' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * applicantUserName  **参数解释：** 申请方用户名。 **取值范围：** 不涉及。
    * id  **参数解释：** 内网接入id。 **取值范围：** 不涉及。
    * message  **参数解释：** 申请描述。 **取值范围：** 不涉及。
    * ownerDomainName  **参数解释：** 审核方domain name。  **取值范围：** 不涉及。
    * scene  **参数解释：** 内网访问场景。 **约束限制：** 不涉及。 **取值范围：** - POOL：用户资源池接入场景 - VPC：用户VPC接入场景 **默认取值：** 不涉及。
    * serviceId  **参数解释：** 服务ID。 **取值范围：** 不涉及。
    * serviceName  **参数解释：** 服务名。 **取值范围：** 不涉及。
    * status  **参数解释：** 内网接入状态，支持列表查询。 **约束限制：** 不涉及。 **取值范围：** - APPROVING：审批中 - REJECTED：拒绝 - CONNECTING：接入中 - CONNECTED：已接入 - CANCELED：已取消 - FAILED：失败 - DELETING：删除中 **默认取值：** 不涉及。
    * subnetId  **参数解释：** 子网ID。 **取值范围：** 不涉及。
    * urlList  **参数解释：** 访问地址列表。
    * customUrlList  **参数解释：** 访问地址列表。
    * vpcId  **参数解释：** VPC ID。 **取值范围：** 不涉及。
    * dispatcherGroupId  **参数解释：** 服务绑定的dispatcher组ID。 **取值范围：** 不涉及。
    * type  **参数解释：** 接入粒度：SERVICE、GLOBAL **取值范围：** 不涉及。
    * maosNetworkName  **参数解释：** 资源池网络名称。 **取值范围：** 不涉及。
    * serviceType  **参数解释：** 服务类型。 **取值范围：** 不涉及。
    * poolId  **参数解释：** 资源池ID。 **取值范围：** 不涉及。
    * createAt  **参数解释：** 创建时间。 **取值范围：** 不涉及。
    * updateAt  **参数解释：** 修改时间。 **取值范围：** 不涉及。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'applicantUserName' => null,
        'id' => null,
        'message' => null,
        'ownerDomainName' => null,
        'scene' => null,
        'serviceId' => null,
        'serviceName' => null,
        'status' => null,
        'subnetId' => null,
        'urlList' => null,
        'customUrlList' => null,
        'vpcId' => null,
        'dispatcherGroupId' => null,
        'type' => null,
        'maosNetworkName' => null,
        'serviceType' => null,
        'poolId' => null,
        'createAt' => null,
        'updateAt' => null
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
    * applicantUserName  **参数解释：** 申请方用户名。 **取值范围：** 不涉及。
    * id  **参数解释：** 内网接入id。 **取值范围：** 不涉及。
    * message  **参数解释：** 申请描述。 **取值范围：** 不涉及。
    * ownerDomainName  **参数解释：** 审核方domain name。  **取值范围：** 不涉及。
    * scene  **参数解释：** 内网访问场景。 **约束限制：** 不涉及。 **取值范围：** - POOL：用户资源池接入场景 - VPC：用户VPC接入场景 **默认取值：** 不涉及。
    * serviceId  **参数解释：** 服务ID。 **取值范围：** 不涉及。
    * serviceName  **参数解释：** 服务名。 **取值范围：** 不涉及。
    * status  **参数解释：** 内网接入状态，支持列表查询。 **约束限制：** 不涉及。 **取值范围：** - APPROVING：审批中 - REJECTED：拒绝 - CONNECTING：接入中 - CONNECTED：已接入 - CANCELED：已取消 - FAILED：失败 - DELETING：删除中 **默认取值：** 不涉及。
    * subnetId  **参数解释：** 子网ID。 **取值范围：** 不涉及。
    * urlList  **参数解释：** 访问地址列表。
    * customUrlList  **参数解释：** 访问地址列表。
    * vpcId  **参数解释：** VPC ID。 **取值范围：** 不涉及。
    * dispatcherGroupId  **参数解释：** 服务绑定的dispatcher组ID。 **取值范围：** 不涉及。
    * type  **参数解释：** 接入粒度：SERVICE、GLOBAL **取值范围：** 不涉及。
    * maosNetworkName  **参数解释：** 资源池网络名称。 **取值范围：** 不涉及。
    * serviceType  **参数解释：** 服务类型。 **取值范围：** 不涉及。
    * poolId  **参数解释：** 资源池ID。 **取值范围：** 不涉及。
    * createAt  **参数解释：** 创建时间。 **取值范围：** 不涉及。
    * updateAt  **参数解释：** 修改时间。 **取值范围：** 不涉及。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'applicantUserName' => 'applicant_user_name',
            'id' => 'id',
            'message' => 'message',
            'ownerDomainName' => 'owner_domain_name',
            'scene' => 'scene',
            'serviceId' => 'service_id',
            'serviceName' => 'service_name',
            'status' => 'status',
            'subnetId' => 'subnet_id',
            'urlList' => 'url_list',
            'customUrlList' => 'custom_url_list',
            'vpcId' => 'vpc_id',
            'dispatcherGroupId' => 'dispatcher_group_id',
            'type' => 'type',
            'maosNetworkName' => 'maos_network_name',
            'serviceType' => 'service_type',
            'poolId' => 'pool_id',
            'createAt' => 'create_at',
            'updateAt' => 'update_at'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * applicantUserName  **参数解释：** 申请方用户名。 **取值范围：** 不涉及。
    * id  **参数解释：** 内网接入id。 **取值范围：** 不涉及。
    * message  **参数解释：** 申请描述。 **取值范围：** 不涉及。
    * ownerDomainName  **参数解释：** 审核方domain name。  **取值范围：** 不涉及。
    * scene  **参数解释：** 内网访问场景。 **约束限制：** 不涉及。 **取值范围：** - POOL：用户资源池接入场景 - VPC：用户VPC接入场景 **默认取值：** 不涉及。
    * serviceId  **参数解释：** 服务ID。 **取值范围：** 不涉及。
    * serviceName  **参数解释：** 服务名。 **取值范围：** 不涉及。
    * status  **参数解释：** 内网接入状态，支持列表查询。 **约束限制：** 不涉及。 **取值范围：** - APPROVING：审批中 - REJECTED：拒绝 - CONNECTING：接入中 - CONNECTED：已接入 - CANCELED：已取消 - FAILED：失败 - DELETING：删除中 **默认取值：** 不涉及。
    * subnetId  **参数解释：** 子网ID。 **取值范围：** 不涉及。
    * urlList  **参数解释：** 访问地址列表。
    * customUrlList  **参数解释：** 访问地址列表。
    * vpcId  **参数解释：** VPC ID。 **取值范围：** 不涉及。
    * dispatcherGroupId  **参数解释：** 服务绑定的dispatcher组ID。 **取值范围：** 不涉及。
    * type  **参数解释：** 接入粒度：SERVICE、GLOBAL **取值范围：** 不涉及。
    * maosNetworkName  **参数解释：** 资源池网络名称。 **取值范围：** 不涉及。
    * serviceType  **参数解释：** 服务类型。 **取值范围：** 不涉及。
    * poolId  **参数解释：** 资源池ID。 **取值范围：** 不涉及。
    * createAt  **参数解释：** 创建时间。 **取值范围：** 不涉及。
    * updateAt  **参数解释：** 修改时间。 **取值范围：** 不涉及。
    *
    * @var string[]
    */
    protected static $setters = [
            'applicantUserName' => 'setApplicantUserName',
            'id' => 'setId',
            'message' => 'setMessage',
            'ownerDomainName' => 'setOwnerDomainName',
            'scene' => 'setScene',
            'serviceId' => 'setServiceId',
            'serviceName' => 'setServiceName',
            'status' => 'setStatus',
            'subnetId' => 'setSubnetId',
            'urlList' => 'setUrlList',
            'customUrlList' => 'setCustomUrlList',
            'vpcId' => 'setVpcId',
            'dispatcherGroupId' => 'setDispatcherGroupId',
            'type' => 'setType',
            'maosNetworkName' => 'setMaosNetworkName',
            'serviceType' => 'setServiceType',
            'poolId' => 'setPoolId',
            'createAt' => 'setCreateAt',
            'updateAt' => 'setUpdateAt'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * applicantUserName  **参数解释：** 申请方用户名。 **取值范围：** 不涉及。
    * id  **参数解释：** 内网接入id。 **取值范围：** 不涉及。
    * message  **参数解释：** 申请描述。 **取值范围：** 不涉及。
    * ownerDomainName  **参数解释：** 审核方domain name。  **取值范围：** 不涉及。
    * scene  **参数解释：** 内网访问场景。 **约束限制：** 不涉及。 **取值范围：** - POOL：用户资源池接入场景 - VPC：用户VPC接入场景 **默认取值：** 不涉及。
    * serviceId  **参数解释：** 服务ID。 **取值范围：** 不涉及。
    * serviceName  **参数解释：** 服务名。 **取值范围：** 不涉及。
    * status  **参数解释：** 内网接入状态，支持列表查询。 **约束限制：** 不涉及。 **取值范围：** - APPROVING：审批中 - REJECTED：拒绝 - CONNECTING：接入中 - CONNECTED：已接入 - CANCELED：已取消 - FAILED：失败 - DELETING：删除中 **默认取值：** 不涉及。
    * subnetId  **参数解释：** 子网ID。 **取值范围：** 不涉及。
    * urlList  **参数解释：** 访问地址列表。
    * customUrlList  **参数解释：** 访问地址列表。
    * vpcId  **参数解释：** VPC ID。 **取值范围：** 不涉及。
    * dispatcherGroupId  **参数解释：** 服务绑定的dispatcher组ID。 **取值范围：** 不涉及。
    * type  **参数解释：** 接入粒度：SERVICE、GLOBAL **取值范围：** 不涉及。
    * maosNetworkName  **参数解释：** 资源池网络名称。 **取值范围：** 不涉及。
    * serviceType  **参数解释：** 服务类型。 **取值范围：** 不涉及。
    * poolId  **参数解释：** 资源池ID。 **取值范围：** 不涉及。
    * createAt  **参数解释：** 创建时间。 **取值范围：** 不涉及。
    * updateAt  **参数解释：** 修改时间。 **取值范围：** 不涉及。
    *
    * @var string[]
    */
    protected static $getters = [
            'applicantUserName' => 'getApplicantUserName',
            'id' => 'getId',
            'message' => 'getMessage',
            'ownerDomainName' => 'getOwnerDomainName',
            'scene' => 'getScene',
            'serviceId' => 'getServiceId',
            'serviceName' => 'getServiceName',
            'status' => 'getStatus',
            'subnetId' => 'getSubnetId',
            'urlList' => 'getUrlList',
            'customUrlList' => 'getCustomUrlList',
            'vpcId' => 'getVpcId',
            'dispatcherGroupId' => 'getDispatcherGroupId',
            'type' => 'getType',
            'maosNetworkName' => 'getMaosNetworkName',
            'serviceType' => 'getServiceType',
            'poolId' => 'getPoolId',
            'createAt' => 'getCreateAt',
            'updateAt' => 'getUpdateAt'
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
    const TYPE_SERVICE = 'SERVICE';
    const TYPE__GLOBAL = 'GLOBAL';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getTypeAllowableValues()
    {
        return [
            self::TYPE_SERVICE,
            self::TYPE__GLOBAL,
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
        $this->container['applicantUserName'] = isset($data['applicantUserName']) ? $data['applicantUserName'] : null;
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['message'] = isset($data['message']) ? $data['message'] : null;
        $this->container['ownerDomainName'] = isset($data['ownerDomainName']) ? $data['ownerDomainName'] : null;
        $this->container['scene'] = isset($data['scene']) ? $data['scene'] : null;
        $this->container['serviceId'] = isset($data['serviceId']) ? $data['serviceId'] : null;
        $this->container['serviceName'] = isset($data['serviceName']) ? $data['serviceName'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['subnetId'] = isset($data['subnetId']) ? $data['subnetId'] : null;
        $this->container['urlList'] = isset($data['urlList']) ? $data['urlList'] : null;
        $this->container['customUrlList'] = isset($data['customUrlList']) ? $data['customUrlList'] : null;
        $this->container['vpcId'] = isset($data['vpcId']) ? $data['vpcId'] : null;
        $this->container['dispatcherGroupId'] = isset($data['dispatcherGroupId']) ? $data['dispatcherGroupId'] : null;
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        $this->container['maosNetworkName'] = isset($data['maosNetworkName']) ? $data['maosNetworkName'] : null;
        $this->container['serviceType'] = isset($data['serviceType']) ? $data['serviceType'] : null;
        $this->container['poolId'] = isset($data['poolId']) ? $data['poolId'] : null;
        $this->container['createAt'] = isset($data['createAt']) ? $data['createAt'] : null;
        $this->container['updateAt'] = isset($data['updateAt']) ? $data['updateAt'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
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
    * Gets applicantUserName
    *  **参数解释：** 申请方用户名。 **取值范围：** 不涉及。
    *
    * @return string|null
    */
    public function getApplicantUserName()
    {
        return $this->container['applicantUserName'];
    }

    /**
    * Sets applicantUserName
    *
    * @param string|null $applicantUserName **参数解释：** 申请方用户名。 **取值范围：** 不涉及。
    *
    * @return $this
    */
    public function setApplicantUserName($applicantUserName)
    {
        $this->container['applicantUserName'] = $applicantUserName;
        return $this;
    }

    /**
    * Gets id
    *  **参数解释：** 内网接入id。 **取值范围：** 不涉及。
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
    * @param string|null $id **参数解释：** 内网接入id。 **取值范围：** 不涉及。
    *
    * @return $this
    */
    public function setId($id)
    {
        $this->container['id'] = $id;
        return $this;
    }

    /**
    * Gets message
    *  **参数解释：** 申请描述。 **取值范围：** 不涉及。
    *
    * @return string|null
    */
    public function getMessage()
    {
        return $this->container['message'];
    }

    /**
    * Sets message
    *
    * @param string|null $message **参数解释：** 申请描述。 **取值范围：** 不涉及。
    *
    * @return $this
    */
    public function setMessage($message)
    {
        $this->container['message'] = $message;
        return $this;
    }

    /**
    * Gets ownerDomainName
    *  **参数解释：** 审核方domain name。  **取值范围：** 不涉及。
    *
    * @return string|null
    */
    public function getOwnerDomainName()
    {
        return $this->container['ownerDomainName'];
    }

    /**
    * Sets ownerDomainName
    *
    * @param string|null $ownerDomainName **参数解释：** 审核方domain name。  **取值范围：** 不涉及。
    *
    * @return $this
    */
    public function setOwnerDomainName($ownerDomainName)
    {
        $this->container['ownerDomainName'] = $ownerDomainName;
        return $this;
    }

    /**
    * Gets scene
    *  **参数解释：** 内网访问场景。 **约束限制：** 不涉及。 **取值范围：** - POOL：用户资源池接入场景 - VPC：用户VPC接入场景 **默认取值：** 不涉及。
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
    * @param string|null $scene **参数解释：** 内网访问场景。 **约束限制：** 不涉及。 **取值范围：** - POOL：用户资源池接入场景 - VPC：用户VPC接入场景 **默认取值：** 不涉及。
    *
    * @return $this
    */
    public function setScene($scene)
    {
        $this->container['scene'] = $scene;
        return $this;
    }

    /**
    * Gets serviceId
    *  **参数解释：** 服务ID。 **取值范围：** 不涉及。
    *
    * @return string|null
    */
    public function getServiceId()
    {
        return $this->container['serviceId'];
    }

    /**
    * Sets serviceId
    *
    * @param string|null $serviceId **参数解释：** 服务ID。 **取值范围：** 不涉及。
    *
    * @return $this
    */
    public function setServiceId($serviceId)
    {
        $this->container['serviceId'] = $serviceId;
        return $this;
    }

    /**
    * Gets serviceName
    *  **参数解释：** 服务名。 **取值范围：** 不涉及。
    *
    * @return string|null
    */
    public function getServiceName()
    {
        return $this->container['serviceName'];
    }

    /**
    * Sets serviceName
    *
    * @param string|null $serviceName **参数解释：** 服务名。 **取值范围：** 不涉及。
    *
    * @return $this
    */
    public function setServiceName($serviceName)
    {
        $this->container['serviceName'] = $serviceName;
        return $this;
    }

    /**
    * Gets status
    *  **参数解释：** 内网接入状态，支持列表查询。 **约束限制：** 不涉及。 **取值范围：** - APPROVING：审批中 - REJECTED：拒绝 - CONNECTING：接入中 - CONNECTED：已接入 - CANCELED：已取消 - FAILED：失败 - DELETING：删除中 **默认取值：** 不涉及。
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
    * @param string|null $status **参数解释：** 内网接入状态，支持列表查询。 **约束限制：** 不涉及。 **取值范围：** - APPROVING：审批中 - REJECTED：拒绝 - CONNECTING：接入中 - CONNECTED：已接入 - CANCELED：已取消 - FAILED：失败 - DELETING：删除中 **默认取值：** 不涉及。
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
    *  **参数解释：** 子网ID。 **取值范围：** 不涉及。
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
    * @param string|null $subnetId **参数解释：** 子网ID。 **取值范围：** 不涉及。
    *
    * @return $this
    */
    public function setSubnetId($subnetId)
    {
        $this->container['subnetId'] = $subnetId;
        return $this;
    }

    /**
    * Gets urlList
    *  **参数解释：** 访问地址列表。
    *
    * @return string[]|null
    */
    public function getUrlList()
    {
        return $this->container['urlList'];
    }

    /**
    * Sets urlList
    *
    * @param string[]|null $urlList **参数解释：** 访问地址列表。
    *
    * @return $this
    */
    public function setUrlList($urlList)
    {
        $this->container['urlList'] = $urlList;
        return $this;
    }

    /**
    * Gets customUrlList
    *  **参数解释：** 访问地址列表。
    *
    * @return string[]|null
    */
    public function getCustomUrlList()
    {
        return $this->container['customUrlList'];
    }

    /**
    * Sets customUrlList
    *
    * @param string[]|null $customUrlList **参数解释：** 访问地址列表。
    *
    * @return $this
    */
    public function setCustomUrlList($customUrlList)
    {
        $this->container['customUrlList'] = $customUrlList;
        return $this;
    }

    /**
    * Gets vpcId
    *  **参数解释：** VPC ID。 **取值范围：** 不涉及。
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
    * @param string|null $vpcId **参数解释：** VPC ID。 **取值范围：** 不涉及。
    *
    * @return $this
    */
    public function setVpcId($vpcId)
    {
        $this->container['vpcId'] = $vpcId;
        return $this;
    }

    /**
    * Gets dispatcherGroupId
    *  **参数解释：** 服务绑定的dispatcher组ID。 **取值范围：** 不涉及。
    *
    * @return string|null
    */
    public function getDispatcherGroupId()
    {
        return $this->container['dispatcherGroupId'];
    }

    /**
    * Sets dispatcherGroupId
    *
    * @param string|null $dispatcherGroupId **参数解释：** 服务绑定的dispatcher组ID。 **取值范围：** 不涉及。
    *
    * @return $this
    */
    public function setDispatcherGroupId($dispatcherGroupId)
    {
        $this->container['dispatcherGroupId'] = $dispatcherGroupId;
        return $this;
    }

    /**
    * Gets type
    *  **参数解释：** 接入粒度：SERVICE、GLOBAL **取值范围：** 不涉及。
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
    * @param string|null $type **参数解释：** 接入粒度：SERVICE、GLOBAL **取值范围：** 不涉及。
    *
    * @return $this
    */
    public function setType($type)
    {
        $this->container['type'] = $type;
        return $this;
    }

    /**
    * Gets maosNetworkName
    *  **参数解释：** 资源池网络名称。 **取值范围：** 不涉及。
    *
    * @return string|null
    */
    public function getMaosNetworkName()
    {
        return $this->container['maosNetworkName'];
    }

    /**
    * Sets maosNetworkName
    *
    * @param string|null $maosNetworkName **参数解释：** 资源池网络名称。 **取值范围：** 不涉及。
    *
    * @return $this
    */
    public function setMaosNetworkName($maosNetworkName)
    {
        $this->container['maosNetworkName'] = $maosNetworkName;
        return $this;
    }

    /**
    * Gets serviceType
    *  **参数解释：** 服务类型。 **取值范围：** 不涉及。
    *
    * @return string|null
    */
    public function getServiceType()
    {
        return $this->container['serviceType'];
    }

    /**
    * Sets serviceType
    *
    * @param string|null $serviceType **参数解释：** 服务类型。 **取值范围：** 不涉及。
    *
    * @return $this
    */
    public function setServiceType($serviceType)
    {
        $this->container['serviceType'] = $serviceType;
        return $this;
    }

    /**
    * Gets poolId
    *  **参数解释：** 资源池ID。 **取值范围：** 不涉及。
    *
    * @return string|null
    */
    public function getPoolId()
    {
        return $this->container['poolId'];
    }

    /**
    * Sets poolId
    *
    * @param string|null $poolId **参数解释：** 资源池ID。 **取值范围：** 不涉及。
    *
    * @return $this
    */
    public function setPoolId($poolId)
    {
        $this->container['poolId'] = $poolId;
        return $this;
    }

    /**
    * Gets createAt
    *  **参数解释：** 创建时间。 **取值范围：** 不涉及。
    *
    * @return string|null
    */
    public function getCreateAt()
    {
        return $this->container['createAt'];
    }

    /**
    * Sets createAt
    *
    * @param string|null $createAt **参数解释：** 创建时间。 **取值范围：** 不涉及。
    *
    * @return $this
    */
    public function setCreateAt($createAt)
    {
        $this->container['createAt'] = $createAt;
        return $this;
    }

    /**
    * Gets updateAt
    *  **参数解释：** 修改时间。 **取值范围：** 不涉及。
    *
    * @return string|null
    */
    public function getUpdateAt()
    {
        return $this->container['updateAt'];
    }

    /**
    * Sets updateAt
    *
    * @param string|null $updateAt **参数解释：** 修改时间。 **取值范围：** 不涉及。
    *
    * @return $this
    */
    public function setUpdateAt($updateAt)
    {
        $this->container['updateAt'] = $updateAt;
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

