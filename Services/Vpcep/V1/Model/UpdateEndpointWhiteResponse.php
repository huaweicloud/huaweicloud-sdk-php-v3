<?php

namespace HuaweiCloud\SDK\Vpcep\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class UpdateEndpointWhiteResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'UpdateEndpointWhiteResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * id  终端节点的ID，唯一标识。
    * serviceType  终端节点连接的终端节点服务类型。  - gateway：由运维人员配置，用户无需创建，可直接使用。  - interface：包括运维人员配置的云服务和用户自己创建的私有服务。 其中，运维人员配置的云服务无需创建，用户可直接使用。 您可以通过查询公共终端节点服务列表， 查看由运维人员配置的所有用户可见且可连接的终端节点服务， 并通过创建终端节点服务创建Interface类型的终端节点服务。
    * status  终端节点的连接状态。  - pendingAcceptance：待接受  - creating：创建中  - accepted：已接受  - rejected：已拒绝  - failed：失败  - deleting：删除中
    * ip  访问所连接的终端节点服务的IP。 仅当同时满足如下条件时，返回该参数：  - 当查询连接interface类型终端节点服务的终端节点时。  - 终端节点服务启用“连接审批”功能，且已经“接受”连接审批。 “status”可以是“accepted”或者“rejected（仅支持“接受”连接审批后再“拒绝”的情况）”。
    * activeStatus  账号状态。  - frozen：冻结  - active：解冻
    * endpointServiceName  终端节点服务的名称。
    * markerId  终端节点的报文标识。
    * endpointServiceId  终端节点服务的ID。
    * enableDns  是否创建域名。  - true：创建域名  - false：不创建域名 说明 当创建gateway类型终端节点服务的终端节点时， “enable_dns”设置为true或者false，均不创建域名。
    * dnsNames  访问所连接的终端节点服务的域名。 当“enable_dns”为true时，该参数可见。
    * subnetId  vpc_id对应VPC下已创建的网络（network）的ID，UUID格式。
    * vpcId  终端节点所在的VPC的ID。
    * createdAt  终端节点的创建时间。 采用UTC时间格式，格式为：YYYY-MM-DDTHH:MM:SSZ
    * updatedAt  终端节点的更新时间。 采用UTC时间格式，格式为：YYYY-MM-DDTHH:MM:SSZ
    * projectId  项目ID，获取方法请参见获取项目ID。
    * tags  标签列表，没有标签默认为空数组。
    * whitelist  控制访问终端节点的白名单。 若未创建，则返回空列表。 创建连接Interface类型终端节点服务的终端节点时，显示此参数。
    * enableWhitelist  是否开启网络ACL隔离。  - true：开启网络ACL隔离  - false：不开启网络ACL隔离 若未指定，则返回false。 创建连接Interface类型终端节点服务的终端节点时，显示此参数。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'id' => 'string',
            'serviceType' => 'string',
            'status' => 'string',
            'ip' => 'string',
            'activeStatus' => 'string[]',
            'endpointServiceName' => 'string',
            'markerId' => 'int',
            'endpointServiceId' => 'string',
            'enableDns' => 'bool',
            'dnsNames' => 'string[]',
            'subnetId' => 'string',
            'vpcId' => 'string',
            'createdAt' => '\DateTime',
            'updatedAt' => '\DateTime',
            'projectId' => 'string',
            'tags' => '\HuaweiCloud\SDK\Vpcep\V1\Model\TagList[]',
            'whitelist' => 'string[]',
            'enableWhitelist' => 'bool'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * id  终端节点的ID，唯一标识。
    * serviceType  终端节点连接的终端节点服务类型。  - gateway：由运维人员配置，用户无需创建，可直接使用。  - interface：包括运维人员配置的云服务和用户自己创建的私有服务。 其中，运维人员配置的云服务无需创建，用户可直接使用。 您可以通过查询公共终端节点服务列表， 查看由运维人员配置的所有用户可见且可连接的终端节点服务， 并通过创建终端节点服务创建Interface类型的终端节点服务。
    * status  终端节点的连接状态。  - pendingAcceptance：待接受  - creating：创建中  - accepted：已接受  - rejected：已拒绝  - failed：失败  - deleting：删除中
    * ip  访问所连接的终端节点服务的IP。 仅当同时满足如下条件时，返回该参数：  - 当查询连接interface类型终端节点服务的终端节点时。  - 终端节点服务启用“连接审批”功能，且已经“接受”连接审批。 “status”可以是“accepted”或者“rejected（仅支持“接受”连接审批后再“拒绝”的情况）”。
    * activeStatus  账号状态。  - frozen：冻结  - active：解冻
    * endpointServiceName  终端节点服务的名称。
    * markerId  终端节点的报文标识。
    * endpointServiceId  终端节点服务的ID。
    * enableDns  是否创建域名。  - true：创建域名  - false：不创建域名 说明 当创建gateway类型终端节点服务的终端节点时， “enable_dns”设置为true或者false，均不创建域名。
    * dnsNames  访问所连接的终端节点服务的域名。 当“enable_dns”为true时，该参数可见。
    * subnetId  vpc_id对应VPC下已创建的网络（network）的ID，UUID格式。
    * vpcId  终端节点所在的VPC的ID。
    * createdAt  终端节点的创建时间。 采用UTC时间格式，格式为：YYYY-MM-DDTHH:MM:SSZ
    * updatedAt  终端节点的更新时间。 采用UTC时间格式，格式为：YYYY-MM-DDTHH:MM:SSZ
    * projectId  项目ID，获取方法请参见获取项目ID。
    * tags  标签列表，没有标签默认为空数组。
    * whitelist  控制访问终端节点的白名单。 若未创建，则返回空列表。 创建连接Interface类型终端节点服务的终端节点时，显示此参数。
    * enableWhitelist  是否开启网络ACL隔离。  - true：开启网络ACL隔离  - false：不开启网络ACL隔离 若未指定，则返回false。 创建连接Interface类型终端节点服务的终端节点时，显示此参数。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'id' => null,
        'serviceType' => null,
        'status' => null,
        'ip' => null,
        'activeStatus' => null,
        'endpointServiceName' => null,
        'markerId' => null,
        'endpointServiceId' => null,
        'enableDns' => null,
        'dnsNames' => null,
        'subnetId' => null,
        'vpcId' => null,
        'createdAt' => 'date-time',
        'updatedAt' => 'date-time',
        'projectId' => null,
        'tags' => null,
        'whitelist' => null,
        'enableWhitelist' => null
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
    * id  终端节点的ID，唯一标识。
    * serviceType  终端节点连接的终端节点服务类型。  - gateway：由运维人员配置，用户无需创建，可直接使用。  - interface：包括运维人员配置的云服务和用户自己创建的私有服务。 其中，运维人员配置的云服务无需创建，用户可直接使用。 您可以通过查询公共终端节点服务列表， 查看由运维人员配置的所有用户可见且可连接的终端节点服务， 并通过创建终端节点服务创建Interface类型的终端节点服务。
    * status  终端节点的连接状态。  - pendingAcceptance：待接受  - creating：创建中  - accepted：已接受  - rejected：已拒绝  - failed：失败  - deleting：删除中
    * ip  访问所连接的终端节点服务的IP。 仅当同时满足如下条件时，返回该参数：  - 当查询连接interface类型终端节点服务的终端节点时。  - 终端节点服务启用“连接审批”功能，且已经“接受”连接审批。 “status”可以是“accepted”或者“rejected（仅支持“接受”连接审批后再“拒绝”的情况）”。
    * activeStatus  账号状态。  - frozen：冻结  - active：解冻
    * endpointServiceName  终端节点服务的名称。
    * markerId  终端节点的报文标识。
    * endpointServiceId  终端节点服务的ID。
    * enableDns  是否创建域名。  - true：创建域名  - false：不创建域名 说明 当创建gateway类型终端节点服务的终端节点时， “enable_dns”设置为true或者false，均不创建域名。
    * dnsNames  访问所连接的终端节点服务的域名。 当“enable_dns”为true时，该参数可见。
    * subnetId  vpc_id对应VPC下已创建的网络（network）的ID，UUID格式。
    * vpcId  终端节点所在的VPC的ID。
    * createdAt  终端节点的创建时间。 采用UTC时间格式，格式为：YYYY-MM-DDTHH:MM:SSZ
    * updatedAt  终端节点的更新时间。 采用UTC时间格式，格式为：YYYY-MM-DDTHH:MM:SSZ
    * projectId  项目ID，获取方法请参见获取项目ID。
    * tags  标签列表，没有标签默认为空数组。
    * whitelist  控制访问终端节点的白名单。 若未创建，则返回空列表。 创建连接Interface类型终端节点服务的终端节点时，显示此参数。
    * enableWhitelist  是否开启网络ACL隔离。  - true：开启网络ACL隔离  - false：不开启网络ACL隔离 若未指定，则返回false。 创建连接Interface类型终端节点服务的终端节点时，显示此参数。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'id' => 'id',
            'serviceType' => 'service_type',
            'status' => 'status',
            'ip' => 'ip',
            'activeStatus' => 'active_status',
            'endpointServiceName' => 'endpoint_service_name',
            'markerId' => 'marker_id',
            'endpointServiceId' => 'endpoint_service_id',
            'enableDns' => 'enable_dns',
            'dnsNames' => 'dns_names',
            'subnetId' => 'subnet_id',
            'vpcId' => 'vpc_id',
            'createdAt' => 'created_at',
            'updatedAt' => 'updated_at',
            'projectId' => 'project_id',
            'tags' => 'tags',
            'whitelist' => 'whitelist',
            'enableWhitelist' => 'enable_whitelist'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * id  终端节点的ID，唯一标识。
    * serviceType  终端节点连接的终端节点服务类型。  - gateway：由运维人员配置，用户无需创建，可直接使用。  - interface：包括运维人员配置的云服务和用户自己创建的私有服务。 其中，运维人员配置的云服务无需创建，用户可直接使用。 您可以通过查询公共终端节点服务列表， 查看由运维人员配置的所有用户可见且可连接的终端节点服务， 并通过创建终端节点服务创建Interface类型的终端节点服务。
    * status  终端节点的连接状态。  - pendingAcceptance：待接受  - creating：创建中  - accepted：已接受  - rejected：已拒绝  - failed：失败  - deleting：删除中
    * ip  访问所连接的终端节点服务的IP。 仅当同时满足如下条件时，返回该参数：  - 当查询连接interface类型终端节点服务的终端节点时。  - 终端节点服务启用“连接审批”功能，且已经“接受”连接审批。 “status”可以是“accepted”或者“rejected（仅支持“接受”连接审批后再“拒绝”的情况）”。
    * activeStatus  账号状态。  - frozen：冻结  - active：解冻
    * endpointServiceName  终端节点服务的名称。
    * markerId  终端节点的报文标识。
    * endpointServiceId  终端节点服务的ID。
    * enableDns  是否创建域名。  - true：创建域名  - false：不创建域名 说明 当创建gateway类型终端节点服务的终端节点时， “enable_dns”设置为true或者false，均不创建域名。
    * dnsNames  访问所连接的终端节点服务的域名。 当“enable_dns”为true时，该参数可见。
    * subnetId  vpc_id对应VPC下已创建的网络（network）的ID，UUID格式。
    * vpcId  终端节点所在的VPC的ID。
    * createdAt  终端节点的创建时间。 采用UTC时间格式，格式为：YYYY-MM-DDTHH:MM:SSZ
    * updatedAt  终端节点的更新时间。 采用UTC时间格式，格式为：YYYY-MM-DDTHH:MM:SSZ
    * projectId  项目ID，获取方法请参见获取项目ID。
    * tags  标签列表，没有标签默认为空数组。
    * whitelist  控制访问终端节点的白名单。 若未创建，则返回空列表。 创建连接Interface类型终端节点服务的终端节点时，显示此参数。
    * enableWhitelist  是否开启网络ACL隔离。  - true：开启网络ACL隔离  - false：不开启网络ACL隔离 若未指定，则返回false。 创建连接Interface类型终端节点服务的终端节点时，显示此参数。
    *
    * @var string[]
    */
    protected static $setters = [
            'id' => 'setId',
            'serviceType' => 'setServiceType',
            'status' => 'setStatus',
            'ip' => 'setIp',
            'activeStatus' => 'setActiveStatus',
            'endpointServiceName' => 'setEndpointServiceName',
            'markerId' => 'setMarkerId',
            'endpointServiceId' => 'setEndpointServiceId',
            'enableDns' => 'setEnableDns',
            'dnsNames' => 'setDnsNames',
            'subnetId' => 'setSubnetId',
            'vpcId' => 'setVpcId',
            'createdAt' => 'setCreatedAt',
            'updatedAt' => 'setUpdatedAt',
            'projectId' => 'setProjectId',
            'tags' => 'setTags',
            'whitelist' => 'setWhitelist',
            'enableWhitelist' => 'setEnableWhitelist'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * id  终端节点的ID，唯一标识。
    * serviceType  终端节点连接的终端节点服务类型。  - gateway：由运维人员配置，用户无需创建，可直接使用。  - interface：包括运维人员配置的云服务和用户自己创建的私有服务。 其中，运维人员配置的云服务无需创建，用户可直接使用。 您可以通过查询公共终端节点服务列表， 查看由运维人员配置的所有用户可见且可连接的终端节点服务， 并通过创建终端节点服务创建Interface类型的终端节点服务。
    * status  终端节点的连接状态。  - pendingAcceptance：待接受  - creating：创建中  - accepted：已接受  - rejected：已拒绝  - failed：失败  - deleting：删除中
    * ip  访问所连接的终端节点服务的IP。 仅当同时满足如下条件时，返回该参数：  - 当查询连接interface类型终端节点服务的终端节点时。  - 终端节点服务启用“连接审批”功能，且已经“接受”连接审批。 “status”可以是“accepted”或者“rejected（仅支持“接受”连接审批后再“拒绝”的情况）”。
    * activeStatus  账号状态。  - frozen：冻结  - active：解冻
    * endpointServiceName  终端节点服务的名称。
    * markerId  终端节点的报文标识。
    * endpointServiceId  终端节点服务的ID。
    * enableDns  是否创建域名。  - true：创建域名  - false：不创建域名 说明 当创建gateway类型终端节点服务的终端节点时， “enable_dns”设置为true或者false，均不创建域名。
    * dnsNames  访问所连接的终端节点服务的域名。 当“enable_dns”为true时，该参数可见。
    * subnetId  vpc_id对应VPC下已创建的网络（network）的ID，UUID格式。
    * vpcId  终端节点所在的VPC的ID。
    * createdAt  终端节点的创建时间。 采用UTC时间格式，格式为：YYYY-MM-DDTHH:MM:SSZ
    * updatedAt  终端节点的更新时间。 采用UTC时间格式，格式为：YYYY-MM-DDTHH:MM:SSZ
    * projectId  项目ID，获取方法请参见获取项目ID。
    * tags  标签列表，没有标签默认为空数组。
    * whitelist  控制访问终端节点的白名单。 若未创建，则返回空列表。 创建连接Interface类型终端节点服务的终端节点时，显示此参数。
    * enableWhitelist  是否开启网络ACL隔离。  - true：开启网络ACL隔离  - false：不开启网络ACL隔离 若未指定，则返回false。 创建连接Interface类型终端节点服务的终端节点时，显示此参数。
    *
    * @var string[]
    */
    protected static $getters = [
            'id' => 'getId',
            'serviceType' => 'getServiceType',
            'status' => 'getStatus',
            'ip' => 'getIp',
            'activeStatus' => 'getActiveStatus',
            'endpointServiceName' => 'getEndpointServiceName',
            'markerId' => 'getMarkerId',
            'endpointServiceId' => 'getEndpointServiceId',
            'enableDns' => 'getEnableDns',
            'dnsNames' => 'getDnsNames',
            'subnetId' => 'getSubnetId',
            'vpcId' => 'getVpcId',
            'createdAt' => 'getCreatedAt',
            'updatedAt' => 'getUpdatedAt',
            'projectId' => 'getProjectId',
            'tags' => 'getTags',
            'whitelist' => 'getWhitelist',
            'enableWhitelist' => 'getEnableWhitelist'
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
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['serviceType'] = isset($data['serviceType']) ? $data['serviceType'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['ip'] = isset($data['ip']) ? $data['ip'] : null;
        $this->container['activeStatus'] = isset($data['activeStatus']) ? $data['activeStatus'] : null;
        $this->container['endpointServiceName'] = isset($data['endpointServiceName']) ? $data['endpointServiceName'] : null;
        $this->container['markerId'] = isset($data['markerId']) ? $data['markerId'] : null;
        $this->container['endpointServiceId'] = isset($data['endpointServiceId']) ? $data['endpointServiceId'] : null;
        $this->container['enableDns'] = isset($data['enableDns']) ? $data['enableDns'] : null;
        $this->container['dnsNames'] = isset($data['dnsNames']) ? $data['dnsNames'] : null;
        $this->container['subnetId'] = isset($data['subnetId']) ? $data['subnetId'] : null;
        $this->container['vpcId'] = isset($data['vpcId']) ? $data['vpcId'] : null;
        $this->container['createdAt'] = isset($data['createdAt']) ? $data['createdAt'] : null;
        $this->container['updatedAt'] = isset($data['updatedAt']) ? $data['updatedAt'] : null;
        $this->container['projectId'] = isset($data['projectId']) ? $data['projectId'] : null;
        $this->container['tags'] = isset($data['tags']) ? $data['tags'] : null;
        $this->container['whitelist'] = isset($data['whitelist']) ? $data['whitelist'] : null;
        $this->container['enableWhitelist'] = isset($data['enableWhitelist']) ? $data['enableWhitelist'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['id']) && (mb_strlen($this->container['id']) > 64)) {
                $invalidProperties[] = "invalid value for 'id', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['id']) && (mb_strlen($this->container['id']) < 1)) {
                $invalidProperties[] = "invalid value for 'id', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['ip']) && (mb_strlen($this->container['ip']) > 64)) {
                $invalidProperties[] = "invalid value for 'ip', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['ip']) && (mb_strlen($this->container['ip']) < 1)) {
                $invalidProperties[] = "invalid value for 'ip', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['endpointServiceId']) && (mb_strlen($this->container['endpointServiceId']) > 64)) {
                $invalidProperties[] = "invalid value for 'endpointServiceId', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['endpointServiceId']) && (mb_strlen($this->container['endpointServiceId']) < 1)) {
                $invalidProperties[] = "invalid value for 'endpointServiceId', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['subnetId']) && (mb_strlen($this->container['subnetId']) > 64)) {
                $invalidProperties[] = "invalid value for 'subnetId', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['subnetId']) && (mb_strlen($this->container['subnetId']) < 1)) {
                $invalidProperties[] = "invalid value for 'subnetId', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['vpcId']) && (mb_strlen($this->container['vpcId']) > 64)) {
                $invalidProperties[] = "invalid value for 'vpcId', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['vpcId']) && (mb_strlen($this->container['vpcId']) < 1)) {
                $invalidProperties[] = "invalid value for 'vpcId', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['projectId']) && (mb_strlen($this->container['projectId']) > 64)) {
                $invalidProperties[] = "invalid value for 'projectId', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['projectId']) && (mb_strlen($this->container['projectId']) < 1)) {
                $invalidProperties[] = "invalid value for 'projectId', the character length must be bigger than or equal to 1.";
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
    *  终端节点的ID，唯一标识。
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
    * @param string|null $id 终端节点的ID，唯一标识。
    *
    * @return $this
    */
    public function setId($id)
    {
        $this->container['id'] = $id;
        return $this;
    }

    /**
    * Gets serviceType
    *  终端节点连接的终端节点服务类型。  - gateway：由运维人员配置，用户无需创建，可直接使用。  - interface：包括运维人员配置的云服务和用户自己创建的私有服务。 其中，运维人员配置的云服务无需创建，用户可直接使用。 您可以通过查询公共终端节点服务列表， 查看由运维人员配置的所有用户可见且可连接的终端节点服务， 并通过创建终端节点服务创建Interface类型的终端节点服务。
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
    * @param string|null $serviceType 终端节点连接的终端节点服务类型。  - gateway：由运维人员配置，用户无需创建，可直接使用。  - interface：包括运维人员配置的云服务和用户自己创建的私有服务。 其中，运维人员配置的云服务无需创建，用户可直接使用。 您可以通过查询公共终端节点服务列表， 查看由运维人员配置的所有用户可见且可连接的终端节点服务， 并通过创建终端节点服务创建Interface类型的终端节点服务。
    *
    * @return $this
    */
    public function setServiceType($serviceType)
    {
        $this->container['serviceType'] = $serviceType;
        return $this;
    }

    /**
    * Gets status
    *  终端节点的连接状态。  - pendingAcceptance：待接受  - creating：创建中  - accepted：已接受  - rejected：已拒绝  - failed：失败  - deleting：删除中
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
    * @param string|null $status 终端节点的连接状态。  - pendingAcceptance：待接受  - creating：创建中  - accepted：已接受  - rejected：已拒绝  - failed：失败  - deleting：删除中
    *
    * @return $this
    */
    public function setStatus($status)
    {
        $this->container['status'] = $status;
        return $this;
    }

    /**
    * Gets ip
    *  访问所连接的终端节点服务的IP。 仅当同时满足如下条件时，返回该参数：  - 当查询连接interface类型终端节点服务的终端节点时。  - 终端节点服务启用“连接审批”功能，且已经“接受”连接审批。 “status”可以是“accepted”或者“rejected（仅支持“接受”连接审批后再“拒绝”的情况）”。
    *
    * @return string|null
    */
    public function getIp()
    {
        return $this->container['ip'];
    }

    /**
    * Sets ip
    *
    * @param string|null $ip 访问所连接的终端节点服务的IP。 仅当同时满足如下条件时，返回该参数：  - 当查询连接interface类型终端节点服务的终端节点时。  - 终端节点服务启用“连接审批”功能，且已经“接受”连接审批。 “status”可以是“accepted”或者“rejected（仅支持“接受”连接审批后再“拒绝”的情况）”。
    *
    * @return $this
    */
    public function setIp($ip)
    {
        $this->container['ip'] = $ip;
        return $this;
    }

    /**
    * Gets activeStatus
    *  账号状态。  - frozen：冻结  - active：解冻
    *
    * @return string[]|null
    */
    public function getActiveStatus()
    {
        return $this->container['activeStatus'];
    }

    /**
    * Sets activeStatus
    *
    * @param string[]|null $activeStatus 账号状态。  - frozen：冻结  - active：解冻
    *
    * @return $this
    */
    public function setActiveStatus($activeStatus)
    {
        $this->container['activeStatus'] = $activeStatus;
        return $this;
    }

    /**
    * Gets endpointServiceName
    *  终端节点服务的名称。
    *
    * @return string|null
    */
    public function getEndpointServiceName()
    {
        return $this->container['endpointServiceName'];
    }

    /**
    * Sets endpointServiceName
    *
    * @param string|null $endpointServiceName 终端节点服务的名称。
    *
    * @return $this
    */
    public function setEndpointServiceName($endpointServiceName)
    {
        $this->container['endpointServiceName'] = $endpointServiceName;
        return $this;
    }

    /**
    * Gets markerId
    *  终端节点的报文标识。
    *
    * @return int|null
    */
    public function getMarkerId()
    {
        return $this->container['markerId'];
    }

    /**
    * Sets markerId
    *
    * @param int|null $markerId 终端节点的报文标识。
    *
    * @return $this
    */
    public function setMarkerId($markerId)
    {
        $this->container['markerId'] = $markerId;
        return $this;
    }

    /**
    * Gets endpointServiceId
    *  终端节点服务的ID。
    *
    * @return string|null
    */
    public function getEndpointServiceId()
    {
        return $this->container['endpointServiceId'];
    }

    /**
    * Sets endpointServiceId
    *
    * @param string|null $endpointServiceId 终端节点服务的ID。
    *
    * @return $this
    */
    public function setEndpointServiceId($endpointServiceId)
    {
        $this->container['endpointServiceId'] = $endpointServiceId;
        return $this;
    }

    /**
    * Gets enableDns
    *  是否创建域名。  - true：创建域名  - false：不创建域名 说明 当创建gateway类型终端节点服务的终端节点时， “enable_dns”设置为true或者false，均不创建域名。
    *
    * @return bool|null
    */
    public function getEnableDns()
    {
        return $this->container['enableDns'];
    }

    /**
    * Sets enableDns
    *
    * @param bool|null $enableDns 是否创建域名。  - true：创建域名  - false：不创建域名 说明 当创建gateway类型终端节点服务的终端节点时， “enable_dns”设置为true或者false，均不创建域名。
    *
    * @return $this
    */
    public function setEnableDns($enableDns)
    {
        $this->container['enableDns'] = $enableDns;
        return $this;
    }

    /**
    * Gets dnsNames
    *  访问所连接的终端节点服务的域名。 当“enable_dns”为true时，该参数可见。
    *
    * @return string[]|null
    */
    public function getDnsNames()
    {
        return $this->container['dnsNames'];
    }

    /**
    * Sets dnsNames
    *
    * @param string[]|null $dnsNames 访问所连接的终端节点服务的域名。 当“enable_dns”为true时，该参数可见。
    *
    * @return $this
    */
    public function setDnsNames($dnsNames)
    {
        $this->container['dnsNames'] = $dnsNames;
        return $this;
    }

    /**
    * Gets subnetId
    *  vpc_id对应VPC下已创建的网络（network）的ID，UUID格式。
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
    * @param string|null $subnetId vpc_id对应VPC下已创建的网络（network）的ID，UUID格式。
    *
    * @return $this
    */
    public function setSubnetId($subnetId)
    {
        $this->container['subnetId'] = $subnetId;
        return $this;
    }

    /**
    * Gets vpcId
    *  终端节点所在的VPC的ID。
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
    * @param string|null $vpcId 终端节点所在的VPC的ID。
    *
    * @return $this
    */
    public function setVpcId($vpcId)
    {
        $this->container['vpcId'] = $vpcId;
        return $this;
    }

    /**
    * Gets createdAt
    *  终端节点的创建时间。 采用UTC时间格式，格式为：YYYY-MM-DDTHH:MM:SSZ
    *
    * @return \DateTime|null
    */
    public function getCreatedAt()
    {
        return $this->container['createdAt'];
    }

    /**
    * Sets createdAt
    *
    * @param \DateTime|null $createdAt 终端节点的创建时间。 采用UTC时间格式，格式为：YYYY-MM-DDTHH:MM:SSZ
    *
    * @return $this
    */
    public function setCreatedAt($createdAt)
    {
        $this->container['createdAt'] = $createdAt;
        return $this;
    }

    /**
    * Gets updatedAt
    *  终端节点的更新时间。 采用UTC时间格式，格式为：YYYY-MM-DDTHH:MM:SSZ
    *
    * @return \DateTime|null
    */
    public function getUpdatedAt()
    {
        return $this->container['updatedAt'];
    }

    /**
    * Sets updatedAt
    *
    * @param \DateTime|null $updatedAt 终端节点的更新时间。 采用UTC时间格式，格式为：YYYY-MM-DDTHH:MM:SSZ
    *
    * @return $this
    */
    public function setUpdatedAt($updatedAt)
    {
        $this->container['updatedAt'] = $updatedAt;
        return $this;
    }

    /**
    * Gets projectId
    *  项目ID，获取方法请参见获取项目ID。
    *
    * @return string|null
    */
    public function getProjectId()
    {
        return $this->container['projectId'];
    }

    /**
    * Sets projectId
    *
    * @param string|null $projectId 项目ID，获取方法请参见获取项目ID。
    *
    * @return $this
    */
    public function setProjectId($projectId)
    {
        $this->container['projectId'] = $projectId;
        return $this;
    }

    /**
    * Gets tags
    *  标签列表，没有标签默认为空数组。
    *
    * @return \HuaweiCloud\SDK\Vpcep\V1\Model\TagList[]|null
    */
    public function getTags()
    {
        return $this->container['tags'];
    }

    /**
    * Sets tags
    *
    * @param \HuaweiCloud\SDK\Vpcep\V1\Model\TagList[]|null $tags 标签列表，没有标签默认为空数组。
    *
    * @return $this
    */
    public function setTags($tags)
    {
        $this->container['tags'] = $tags;
        return $this;
    }

    /**
    * Gets whitelist
    *  控制访问终端节点的白名单。 若未创建，则返回空列表。 创建连接Interface类型终端节点服务的终端节点时，显示此参数。
    *
    * @return string[]|null
    */
    public function getWhitelist()
    {
        return $this->container['whitelist'];
    }

    /**
    * Sets whitelist
    *
    * @param string[]|null $whitelist 控制访问终端节点的白名单。 若未创建，则返回空列表。 创建连接Interface类型终端节点服务的终端节点时，显示此参数。
    *
    * @return $this
    */
    public function setWhitelist($whitelist)
    {
        $this->container['whitelist'] = $whitelist;
        return $this;
    }

    /**
    * Gets enableWhitelist
    *  是否开启网络ACL隔离。  - true：开启网络ACL隔离  - false：不开启网络ACL隔离 若未指定，则返回false。 创建连接Interface类型终端节点服务的终端节点时，显示此参数。
    *
    * @return bool|null
    */
    public function getEnableWhitelist()
    {
        return $this->container['enableWhitelist'];
    }

    /**
    * Sets enableWhitelist
    *
    * @param bool|null $enableWhitelist 是否开启网络ACL隔离。  - true：开启网络ACL隔离  - false：不开启网络ACL隔离 若未指定，则返回false。 创建连接Interface类型终端节点服务的终端节点时，显示此参数。
    *
    * @return $this
    */
    public function setEnableWhitelist($enableWhitelist)
    {
        $this->container['enableWhitelist'] = $enableWhitelist;
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

