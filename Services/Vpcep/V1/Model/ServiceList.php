<?php

namespace HuaweiCloud\SDK\Vpcep\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ServiceList implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ServiceList';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * id  终端节点服务的ID，唯一标识。
    * portId  标识终端节点服务后端资源的ID， 格式为通用唯一识别码（Universally Unique Identifier，下文简称UUID）。取值为：  - LB类型：负载均衡器内网IP对应的端口ID。  - VM类型：弹性云服务器IP地址对应的网卡ID。  - VIP类型：虚拟资源所在物理服务器对应的网卡ID。（该字段已废弃，请优先使用LB类型）
    * serviceName  终端节点服务的名称。
    * serverType  资源类型。  - VM：云服务器。  - VIP：虚拟IP。  - LB：增强负载均衡型。
    * vpcId  终端节点服务对应后端资源所在的VPC的ID。
    * approvalEnabled  是否需要审批。  - false：不需要审批，创建的终端节点连接直接为accepted状态。  - true：需要审批，创建的终端节点连接为pendingAcceptance状态， 需要终端节点服务所属用户审核后方可使用。
    * status  终端节点服务的状态。  - creating：创建中  - available：可连接  - failed：失败  - deleting：删除中
    * serviceType  终端节点服务类型。 终端节点服务类型包括“网关（gateway）型”和“接口（interface）型”：  - gateway：由运维人员配置。用户无需创建，可直接使用。  - interface：包括运维人员配置的云服务和用户自己创建的私有服务。 其中，运维人员配置的云服务无需创建，用户可直接使用。 您可以通过创建终端节点创建访问Gateway和Interface类型终端节点服务的终端节点。
    * createdAt  终端节点服务的创建时间。 采用UTC时间格式，格式为：YYYY-MM-DDTHH:MM:SSZ
    * updatedAt  终端节点服务的更新时间。 采用UTC时间格式，格式为：YYYY-MM-DDTHH:MM:SSZ
    * projectId  项目ID，获取方法请参见获取项目ID。
    * domainId  Domain ID
    * ports  服务开放的端口映射列表 同一个终端节点服务下，不允许重复的端口映射。 若多个终端节点服务共用一个port_id， 则终端节点服务之间的所有端口映射的server_port和protocol的组合不能重复。
    * ip  接口型VLAN场景服务端IPv4地址或域名
    * tags  资源标签列表
    * connectionCount  终端节点服务下连接的状态为“创建中”或“已接受”的终端节点的个数。
    * tcpProxy  用于控制将哪些信息（如客户端的源IP、源端口、marker_id等）携带到服务端。 支持携带的客户端信息包括如下两种类型：  - TCP TOA：表示将客户端信息插入到tcp option字段中携带至服务端。 说明：仅当后端资源为OBS时，支持TCP TOA类型信息携带方式。  - Proxy Protocol：表示将客户端信息插入到tcp payload字段中携带至服务端。 仅当服务端支持解析上述字段时，该参数设置才有效。 该参数的取值包括：  - close：表示关闭代理协议。  - toa_open：表示开启代理协议“tcp_toa”。  - proxy_open：表示开启代理协议“proxy_protocol”。  - open：表示同时开启代理协议“tcp_toa”和“proxy_protocol”。 默认值为“close”。
    * error  提交任务异常时返回的异常信息
    * description  描述字段，支持中英文字母、数字等字符，不支持“<”或“>”字符。
    * supportedEditions  终端节点服务支持的类型，取值范围为profession-专业型，basic-基础型
    * publicBorderGroup  终端节点服务对应Pool的Public Border Group信息
    * enablePolicy  是否允许自定义终端节点策略。  - false：不支持设置终端节点策略  - true：支持设置终端节点策略 默认为false
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'id' => 'string',
            'portId' => 'string',
            'serviceName' => 'string',
            'serverType' => 'string',
            'vpcId' => 'string',
            'approvalEnabled' => 'bool',
            'status' => 'string',
            'serviceType' => 'string',
            'createdAt' => '\DateTime',
            'updatedAt' => '\DateTime',
            'projectId' => 'string',
            'domainId' => 'string',
            'ports' => '\HuaweiCloud\SDK\Vpcep\V1\Model\PortList[]',
            'ip' => 'string',
            'tags' => '\HuaweiCloud\SDK\Vpcep\V1\Model\TagList[]',
            'connectionCount' => 'int',
            'tcpProxy' => 'string',
            'error' => '\HuaweiCloud\SDK\Vpcep\V1\Model\Error[]',
            'description' => 'string',
            'supportedEditions' => 'string[]',
            'publicBorderGroup' => 'string',
            'enablePolicy' => 'bool'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * id  终端节点服务的ID，唯一标识。
    * portId  标识终端节点服务后端资源的ID， 格式为通用唯一识别码（Universally Unique Identifier，下文简称UUID）。取值为：  - LB类型：负载均衡器内网IP对应的端口ID。  - VM类型：弹性云服务器IP地址对应的网卡ID。  - VIP类型：虚拟资源所在物理服务器对应的网卡ID。（该字段已废弃，请优先使用LB类型）
    * serviceName  终端节点服务的名称。
    * serverType  资源类型。  - VM：云服务器。  - VIP：虚拟IP。  - LB：增强负载均衡型。
    * vpcId  终端节点服务对应后端资源所在的VPC的ID。
    * approvalEnabled  是否需要审批。  - false：不需要审批，创建的终端节点连接直接为accepted状态。  - true：需要审批，创建的终端节点连接为pendingAcceptance状态， 需要终端节点服务所属用户审核后方可使用。
    * status  终端节点服务的状态。  - creating：创建中  - available：可连接  - failed：失败  - deleting：删除中
    * serviceType  终端节点服务类型。 终端节点服务类型包括“网关（gateway）型”和“接口（interface）型”：  - gateway：由运维人员配置。用户无需创建，可直接使用。  - interface：包括运维人员配置的云服务和用户自己创建的私有服务。 其中，运维人员配置的云服务无需创建，用户可直接使用。 您可以通过创建终端节点创建访问Gateway和Interface类型终端节点服务的终端节点。
    * createdAt  终端节点服务的创建时间。 采用UTC时间格式，格式为：YYYY-MM-DDTHH:MM:SSZ
    * updatedAt  终端节点服务的更新时间。 采用UTC时间格式，格式为：YYYY-MM-DDTHH:MM:SSZ
    * projectId  项目ID，获取方法请参见获取项目ID。
    * domainId  Domain ID
    * ports  服务开放的端口映射列表 同一个终端节点服务下，不允许重复的端口映射。 若多个终端节点服务共用一个port_id， 则终端节点服务之间的所有端口映射的server_port和protocol的组合不能重复。
    * ip  接口型VLAN场景服务端IPv4地址或域名
    * tags  资源标签列表
    * connectionCount  终端节点服务下连接的状态为“创建中”或“已接受”的终端节点的个数。
    * tcpProxy  用于控制将哪些信息（如客户端的源IP、源端口、marker_id等）携带到服务端。 支持携带的客户端信息包括如下两种类型：  - TCP TOA：表示将客户端信息插入到tcp option字段中携带至服务端。 说明：仅当后端资源为OBS时，支持TCP TOA类型信息携带方式。  - Proxy Protocol：表示将客户端信息插入到tcp payload字段中携带至服务端。 仅当服务端支持解析上述字段时，该参数设置才有效。 该参数的取值包括：  - close：表示关闭代理协议。  - toa_open：表示开启代理协议“tcp_toa”。  - proxy_open：表示开启代理协议“proxy_protocol”。  - open：表示同时开启代理协议“tcp_toa”和“proxy_protocol”。 默认值为“close”。
    * error  提交任务异常时返回的异常信息
    * description  描述字段，支持中英文字母、数字等字符，不支持“<”或“>”字符。
    * supportedEditions  终端节点服务支持的类型，取值范围为profession-专业型，basic-基础型
    * publicBorderGroup  终端节点服务对应Pool的Public Border Group信息
    * enablePolicy  是否允许自定义终端节点策略。  - false：不支持设置终端节点策略  - true：支持设置终端节点策略 默认为false
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'id' => null,
        'portId' => null,
        'serviceName' => null,
        'serverType' => null,
        'vpcId' => null,
        'approvalEnabled' => null,
        'status' => null,
        'serviceType' => null,
        'createdAt' => 'date-time',
        'updatedAt' => 'date-time',
        'projectId' => null,
        'domainId' => null,
        'ports' => null,
        'ip' => null,
        'tags' => null,
        'connectionCount' => 'int32',
        'tcpProxy' => null,
        'error' => null,
        'description' => null,
        'supportedEditions' => null,
        'publicBorderGroup' => null,
        'enablePolicy' => null
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
    * id  终端节点服务的ID，唯一标识。
    * portId  标识终端节点服务后端资源的ID， 格式为通用唯一识别码（Universally Unique Identifier，下文简称UUID）。取值为：  - LB类型：负载均衡器内网IP对应的端口ID。  - VM类型：弹性云服务器IP地址对应的网卡ID。  - VIP类型：虚拟资源所在物理服务器对应的网卡ID。（该字段已废弃，请优先使用LB类型）
    * serviceName  终端节点服务的名称。
    * serverType  资源类型。  - VM：云服务器。  - VIP：虚拟IP。  - LB：增强负载均衡型。
    * vpcId  终端节点服务对应后端资源所在的VPC的ID。
    * approvalEnabled  是否需要审批。  - false：不需要审批，创建的终端节点连接直接为accepted状态。  - true：需要审批，创建的终端节点连接为pendingAcceptance状态， 需要终端节点服务所属用户审核后方可使用。
    * status  终端节点服务的状态。  - creating：创建中  - available：可连接  - failed：失败  - deleting：删除中
    * serviceType  终端节点服务类型。 终端节点服务类型包括“网关（gateway）型”和“接口（interface）型”：  - gateway：由运维人员配置。用户无需创建，可直接使用。  - interface：包括运维人员配置的云服务和用户自己创建的私有服务。 其中，运维人员配置的云服务无需创建，用户可直接使用。 您可以通过创建终端节点创建访问Gateway和Interface类型终端节点服务的终端节点。
    * createdAt  终端节点服务的创建时间。 采用UTC时间格式，格式为：YYYY-MM-DDTHH:MM:SSZ
    * updatedAt  终端节点服务的更新时间。 采用UTC时间格式，格式为：YYYY-MM-DDTHH:MM:SSZ
    * projectId  项目ID，获取方法请参见获取项目ID。
    * domainId  Domain ID
    * ports  服务开放的端口映射列表 同一个终端节点服务下，不允许重复的端口映射。 若多个终端节点服务共用一个port_id， 则终端节点服务之间的所有端口映射的server_port和protocol的组合不能重复。
    * ip  接口型VLAN场景服务端IPv4地址或域名
    * tags  资源标签列表
    * connectionCount  终端节点服务下连接的状态为“创建中”或“已接受”的终端节点的个数。
    * tcpProxy  用于控制将哪些信息（如客户端的源IP、源端口、marker_id等）携带到服务端。 支持携带的客户端信息包括如下两种类型：  - TCP TOA：表示将客户端信息插入到tcp option字段中携带至服务端。 说明：仅当后端资源为OBS时，支持TCP TOA类型信息携带方式。  - Proxy Protocol：表示将客户端信息插入到tcp payload字段中携带至服务端。 仅当服务端支持解析上述字段时，该参数设置才有效。 该参数的取值包括：  - close：表示关闭代理协议。  - toa_open：表示开启代理协议“tcp_toa”。  - proxy_open：表示开启代理协议“proxy_protocol”。  - open：表示同时开启代理协议“tcp_toa”和“proxy_protocol”。 默认值为“close”。
    * error  提交任务异常时返回的异常信息
    * description  描述字段，支持中英文字母、数字等字符，不支持“<”或“>”字符。
    * supportedEditions  终端节点服务支持的类型，取值范围为profession-专业型，basic-基础型
    * publicBorderGroup  终端节点服务对应Pool的Public Border Group信息
    * enablePolicy  是否允许自定义终端节点策略。  - false：不支持设置终端节点策略  - true：支持设置终端节点策略 默认为false
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'id' => 'id',
            'portId' => 'port_id',
            'serviceName' => 'service_name',
            'serverType' => 'server_type',
            'vpcId' => 'vpc_id',
            'approvalEnabled' => 'approval_enabled',
            'status' => 'status',
            'serviceType' => 'service_type',
            'createdAt' => 'created_at',
            'updatedAt' => 'updated_at',
            'projectId' => 'project_id',
            'domainId' => 'domain_id',
            'ports' => 'ports',
            'ip' => 'ip',
            'tags' => 'tags',
            'connectionCount' => 'connection_count',
            'tcpProxy' => 'tcp_proxy',
            'error' => 'error',
            'description' => 'description',
            'supportedEditions' => 'supported_editions',
            'publicBorderGroup' => 'public_border_group',
            'enablePolicy' => 'enable_policy'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * id  终端节点服务的ID，唯一标识。
    * portId  标识终端节点服务后端资源的ID， 格式为通用唯一识别码（Universally Unique Identifier，下文简称UUID）。取值为：  - LB类型：负载均衡器内网IP对应的端口ID。  - VM类型：弹性云服务器IP地址对应的网卡ID。  - VIP类型：虚拟资源所在物理服务器对应的网卡ID。（该字段已废弃，请优先使用LB类型）
    * serviceName  终端节点服务的名称。
    * serverType  资源类型。  - VM：云服务器。  - VIP：虚拟IP。  - LB：增强负载均衡型。
    * vpcId  终端节点服务对应后端资源所在的VPC的ID。
    * approvalEnabled  是否需要审批。  - false：不需要审批，创建的终端节点连接直接为accepted状态。  - true：需要审批，创建的终端节点连接为pendingAcceptance状态， 需要终端节点服务所属用户审核后方可使用。
    * status  终端节点服务的状态。  - creating：创建中  - available：可连接  - failed：失败  - deleting：删除中
    * serviceType  终端节点服务类型。 终端节点服务类型包括“网关（gateway）型”和“接口（interface）型”：  - gateway：由运维人员配置。用户无需创建，可直接使用。  - interface：包括运维人员配置的云服务和用户自己创建的私有服务。 其中，运维人员配置的云服务无需创建，用户可直接使用。 您可以通过创建终端节点创建访问Gateway和Interface类型终端节点服务的终端节点。
    * createdAt  终端节点服务的创建时间。 采用UTC时间格式，格式为：YYYY-MM-DDTHH:MM:SSZ
    * updatedAt  终端节点服务的更新时间。 采用UTC时间格式，格式为：YYYY-MM-DDTHH:MM:SSZ
    * projectId  项目ID，获取方法请参见获取项目ID。
    * domainId  Domain ID
    * ports  服务开放的端口映射列表 同一个终端节点服务下，不允许重复的端口映射。 若多个终端节点服务共用一个port_id， 则终端节点服务之间的所有端口映射的server_port和protocol的组合不能重复。
    * ip  接口型VLAN场景服务端IPv4地址或域名
    * tags  资源标签列表
    * connectionCount  终端节点服务下连接的状态为“创建中”或“已接受”的终端节点的个数。
    * tcpProxy  用于控制将哪些信息（如客户端的源IP、源端口、marker_id等）携带到服务端。 支持携带的客户端信息包括如下两种类型：  - TCP TOA：表示将客户端信息插入到tcp option字段中携带至服务端。 说明：仅当后端资源为OBS时，支持TCP TOA类型信息携带方式。  - Proxy Protocol：表示将客户端信息插入到tcp payload字段中携带至服务端。 仅当服务端支持解析上述字段时，该参数设置才有效。 该参数的取值包括：  - close：表示关闭代理协议。  - toa_open：表示开启代理协议“tcp_toa”。  - proxy_open：表示开启代理协议“proxy_protocol”。  - open：表示同时开启代理协议“tcp_toa”和“proxy_protocol”。 默认值为“close”。
    * error  提交任务异常时返回的异常信息
    * description  描述字段，支持中英文字母、数字等字符，不支持“<”或“>”字符。
    * supportedEditions  终端节点服务支持的类型，取值范围为profession-专业型，basic-基础型
    * publicBorderGroup  终端节点服务对应Pool的Public Border Group信息
    * enablePolicy  是否允许自定义终端节点策略。  - false：不支持设置终端节点策略  - true：支持设置终端节点策略 默认为false
    *
    * @var string[]
    */
    protected static $setters = [
            'id' => 'setId',
            'portId' => 'setPortId',
            'serviceName' => 'setServiceName',
            'serverType' => 'setServerType',
            'vpcId' => 'setVpcId',
            'approvalEnabled' => 'setApprovalEnabled',
            'status' => 'setStatus',
            'serviceType' => 'setServiceType',
            'createdAt' => 'setCreatedAt',
            'updatedAt' => 'setUpdatedAt',
            'projectId' => 'setProjectId',
            'domainId' => 'setDomainId',
            'ports' => 'setPorts',
            'ip' => 'setIp',
            'tags' => 'setTags',
            'connectionCount' => 'setConnectionCount',
            'tcpProxy' => 'setTcpProxy',
            'error' => 'setError',
            'description' => 'setDescription',
            'supportedEditions' => 'setSupportedEditions',
            'publicBorderGroup' => 'setPublicBorderGroup',
            'enablePolicy' => 'setEnablePolicy'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * id  终端节点服务的ID，唯一标识。
    * portId  标识终端节点服务后端资源的ID， 格式为通用唯一识别码（Universally Unique Identifier，下文简称UUID）。取值为：  - LB类型：负载均衡器内网IP对应的端口ID。  - VM类型：弹性云服务器IP地址对应的网卡ID。  - VIP类型：虚拟资源所在物理服务器对应的网卡ID。（该字段已废弃，请优先使用LB类型）
    * serviceName  终端节点服务的名称。
    * serverType  资源类型。  - VM：云服务器。  - VIP：虚拟IP。  - LB：增强负载均衡型。
    * vpcId  终端节点服务对应后端资源所在的VPC的ID。
    * approvalEnabled  是否需要审批。  - false：不需要审批，创建的终端节点连接直接为accepted状态。  - true：需要审批，创建的终端节点连接为pendingAcceptance状态， 需要终端节点服务所属用户审核后方可使用。
    * status  终端节点服务的状态。  - creating：创建中  - available：可连接  - failed：失败  - deleting：删除中
    * serviceType  终端节点服务类型。 终端节点服务类型包括“网关（gateway）型”和“接口（interface）型”：  - gateway：由运维人员配置。用户无需创建，可直接使用。  - interface：包括运维人员配置的云服务和用户自己创建的私有服务。 其中，运维人员配置的云服务无需创建，用户可直接使用。 您可以通过创建终端节点创建访问Gateway和Interface类型终端节点服务的终端节点。
    * createdAt  终端节点服务的创建时间。 采用UTC时间格式，格式为：YYYY-MM-DDTHH:MM:SSZ
    * updatedAt  终端节点服务的更新时间。 采用UTC时间格式，格式为：YYYY-MM-DDTHH:MM:SSZ
    * projectId  项目ID，获取方法请参见获取项目ID。
    * domainId  Domain ID
    * ports  服务开放的端口映射列表 同一个终端节点服务下，不允许重复的端口映射。 若多个终端节点服务共用一个port_id， 则终端节点服务之间的所有端口映射的server_port和protocol的组合不能重复。
    * ip  接口型VLAN场景服务端IPv4地址或域名
    * tags  资源标签列表
    * connectionCount  终端节点服务下连接的状态为“创建中”或“已接受”的终端节点的个数。
    * tcpProxy  用于控制将哪些信息（如客户端的源IP、源端口、marker_id等）携带到服务端。 支持携带的客户端信息包括如下两种类型：  - TCP TOA：表示将客户端信息插入到tcp option字段中携带至服务端。 说明：仅当后端资源为OBS时，支持TCP TOA类型信息携带方式。  - Proxy Protocol：表示将客户端信息插入到tcp payload字段中携带至服务端。 仅当服务端支持解析上述字段时，该参数设置才有效。 该参数的取值包括：  - close：表示关闭代理协议。  - toa_open：表示开启代理协议“tcp_toa”。  - proxy_open：表示开启代理协议“proxy_protocol”。  - open：表示同时开启代理协议“tcp_toa”和“proxy_protocol”。 默认值为“close”。
    * error  提交任务异常时返回的异常信息
    * description  描述字段，支持中英文字母、数字等字符，不支持“<”或“>”字符。
    * supportedEditions  终端节点服务支持的类型，取值范围为profession-专业型，basic-基础型
    * publicBorderGroup  终端节点服务对应Pool的Public Border Group信息
    * enablePolicy  是否允许自定义终端节点策略。  - false：不支持设置终端节点策略  - true：支持设置终端节点策略 默认为false
    *
    * @var string[]
    */
    protected static $getters = [
            'id' => 'getId',
            'portId' => 'getPortId',
            'serviceName' => 'getServiceName',
            'serverType' => 'getServerType',
            'vpcId' => 'getVpcId',
            'approvalEnabled' => 'getApprovalEnabled',
            'status' => 'getStatus',
            'serviceType' => 'getServiceType',
            'createdAt' => 'getCreatedAt',
            'updatedAt' => 'getUpdatedAt',
            'projectId' => 'getProjectId',
            'domainId' => 'getDomainId',
            'ports' => 'getPorts',
            'ip' => 'getIp',
            'tags' => 'getTags',
            'connectionCount' => 'getConnectionCount',
            'tcpProxy' => 'getTcpProxy',
            'error' => 'getError',
            'description' => 'getDescription',
            'supportedEditions' => 'getSupportedEditions',
            'publicBorderGroup' => 'getPublicBorderGroup',
            'enablePolicy' => 'getEnablePolicy'
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
        $this->container['portId'] = isset($data['portId']) ? $data['portId'] : null;
        $this->container['serviceName'] = isset($data['serviceName']) ? $data['serviceName'] : null;
        $this->container['serverType'] = isset($data['serverType']) ? $data['serverType'] : null;
        $this->container['vpcId'] = isset($data['vpcId']) ? $data['vpcId'] : null;
        $this->container['approvalEnabled'] = isset($data['approvalEnabled']) ? $data['approvalEnabled'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['serviceType'] = isset($data['serviceType']) ? $data['serviceType'] : null;
        $this->container['createdAt'] = isset($data['createdAt']) ? $data['createdAt'] : null;
        $this->container['updatedAt'] = isset($data['updatedAt']) ? $data['updatedAt'] : null;
        $this->container['projectId'] = isset($data['projectId']) ? $data['projectId'] : null;
        $this->container['domainId'] = isset($data['domainId']) ? $data['domainId'] : null;
        $this->container['ports'] = isset($data['ports']) ? $data['ports'] : null;
        $this->container['ip'] = isset($data['ip']) ? $data['ip'] : null;
        $this->container['tags'] = isset($data['tags']) ? $data['tags'] : null;
        $this->container['connectionCount'] = isset($data['connectionCount']) ? $data['connectionCount'] : null;
        $this->container['tcpProxy'] = isset($data['tcpProxy']) ? $data['tcpProxy'] : null;
        $this->container['error'] = isset($data['error']) ? $data['error'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['supportedEditions'] = isset($data['supportedEditions']) ? $data['supportedEditions'] : null;
        $this->container['publicBorderGroup'] = isset($data['publicBorderGroup']) ? $data['publicBorderGroup'] : null;
        $this->container['enablePolicy'] = isset($data['enablePolicy']) ? $data['enablePolicy'] : null;
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
            if (!is_null($this->container['serviceName']) && !preg_match("/^[a-zA-Z0-9_-]{1,16}$/", $this->container['serviceName'])) {
                $invalidProperties[] = "invalid value for 'serviceName', must be conform to the pattern /^[a-zA-Z0-9_-]{1,16}$/.";
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
            if (!is_null($this->container['domainId']) && (mb_strlen($this->container['domainId']) > 64)) {
                $invalidProperties[] = "invalid value for 'domainId', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['domainId']) && (mb_strlen($this->container['domainId']) < 1)) {
                $invalidProperties[] = "invalid value for 'domainId', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['connectionCount']) && ($this->container['connectionCount'] < 0)) {
                $invalidProperties[] = "invalid value for 'connectionCount', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['description']) && (mb_strlen($this->container['description']) > 512)) {
                $invalidProperties[] = "invalid value for 'description', the character length must be smaller than or equal to 512.";
            }
            if (!is_null($this->container['description']) && (mb_strlen($this->container['description']) < 0)) {
                $invalidProperties[] = "invalid value for 'description', the character length must be bigger than or equal to 0.";
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
    *  终端节点服务的ID，唯一标识。
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
    * @param string|null $id 终端节点服务的ID，唯一标识。
    *
    * @return $this
    */
    public function setId($id)
    {
        $this->container['id'] = $id;
        return $this;
    }

    /**
    * Gets portId
    *  标识终端节点服务后端资源的ID， 格式为通用唯一识别码（Universally Unique Identifier，下文简称UUID）。取值为：  - LB类型：负载均衡器内网IP对应的端口ID。  - VM类型：弹性云服务器IP地址对应的网卡ID。  - VIP类型：虚拟资源所在物理服务器对应的网卡ID。（该字段已废弃，请优先使用LB类型）
    *
    * @return string|null
    */
    public function getPortId()
    {
        return $this->container['portId'];
    }

    /**
    * Sets portId
    *
    * @param string|null $portId 标识终端节点服务后端资源的ID， 格式为通用唯一识别码（Universally Unique Identifier，下文简称UUID）。取值为：  - LB类型：负载均衡器内网IP对应的端口ID。  - VM类型：弹性云服务器IP地址对应的网卡ID。  - VIP类型：虚拟资源所在物理服务器对应的网卡ID。（该字段已废弃，请优先使用LB类型）
    *
    * @return $this
    */
    public function setPortId($portId)
    {
        $this->container['portId'] = $portId;
        return $this;
    }

    /**
    * Gets serviceName
    *  终端节点服务的名称。
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
    * @param string|null $serviceName 终端节点服务的名称。
    *
    * @return $this
    */
    public function setServiceName($serviceName)
    {
        $this->container['serviceName'] = $serviceName;
        return $this;
    }

    /**
    * Gets serverType
    *  资源类型。  - VM：云服务器。  - VIP：虚拟IP。  - LB：增强负载均衡型。
    *
    * @return string|null
    */
    public function getServerType()
    {
        return $this->container['serverType'];
    }

    /**
    * Sets serverType
    *
    * @param string|null $serverType 资源类型。  - VM：云服务器。  - VIP：虚拟IP。  - LB：增强负载均衡型。
    *
    * @return $this
    */
    public function setServerType($serverType)
    {
        $this->container['serverType'] = $serverType;
        return $this;
    }

    /**
    * Gets vpcId
    *  终端节点服务对应后端资源所在的VPC的ID。
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
    * @param string|null $vpcId 终端节点服务对应后端资源所在的VPC的ID。
    *
    * @return $this
    */
    public function setVpcId($vpcId)
    {
        $this->container['vpcId'] = $vpcId;
        return $this;
    }

    /**
    * Gets approvalEnabled
    *  是否需要审批。  - false：不需要审批，创建的终端节点连接直接为accepted状态。  - true：需要审批，创建的终端节点连接为pendingAcceptance状态， 需要终端节点服务所属用户审核后方可使用。
    *
    * @return bool|null
    */
    public function getApprovalEnabled()
    {
        return $this->container['approvalEnabled'];
    }

    /**
    * Sets approvalEnabled
    *
    * @param bool|null $approvalEnabled 是否需要审批。  - false：不需要审批，创建的终端节点连接直接为accepted状态。  - true：需要审批，创建的终端节点连接为pendingAcceptance状态， 需要终端节点服务所属用户审核后方可使用。
    *
    * @return $this
    */
    public function setApprovalEnabled($approvalEnabled)
    {
        $this->container['approvalEnabled'] = $approvalEnabled;
        return $this;
    }

    /**
    * Gets status
    *  终端节点服务的状态。  - creating：创建中  - available：可连接  - failed：失败  - deleting：删除中
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
    * @param string|null $status 终端节点服务的状态。  - creating：创建中  - available：可连接  - failed：失败  - deleting：删除中
    *
    * @return $this
    */
    public function setStatus($status)
    {
        $this->container['status'] = $status;
        return $this;
    }

    /**
    * Gets serviceType
    *  终端节点服务类型。 终端节点服务类型包括“网关（gateway）型”和“接口（interface）型”：  - gateway：由运维人员配置。用户无需创建，可直接使用。  - interface：包括运维人员配置的云服务和用户自己创建的私有服务。 其中，运维人员配置的云服务无需创建，用户可直接使用。 您可以通过创建终端节点创建访问Gateway和Interface类型终端节点服务的终端节点。
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
    * @param string|null $serviceType 终端节点服务类型。 终端节点服务类型包括“网关（gateway）型”和“接口（interface）型”：  - gateway：由运维人员配置。用户无需创建，可直接使用。  - interface：包括运维人员配置的云服务和用户自己创建的私有服务。 其中，运维人员配置的云服务无需创建，用户可直接使用。 您可以通过创建终端节点创建访问Gateway和Interface类型终端节点服务的终端节点。
    *
    * @return $this
    */
    public function setServiceType($serviceType)
    {
        $this->container['serviceType'] = $serviceType;
        return $this;
    }

    /**
    * Gets createdAt
    *  终端节点服务的创建时间。 采用UTC时间格式，格式为：YYYY-MM-DDTHH:MM:SSZ
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
    * @param \DateTime|null $createdAt 终端节点服务的创建时间。 采用UTC时间格式，格式为：YYYY-MM-DDTHH:MM:SSZ
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
    *  终端节点服务的更新时间。 采用UTC时间格式，格式为：YYYY-MM-DDTHH:MM:SSZ
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
    * @param \DateTime|null $updatedAt 终端节点服务的更新时间。 采用UTC时间格式，格式为：YYYY-MM-DDTHH:MM:SSZ
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
    * Gets domainId
    *  Domain ID
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
    * @param string|null $domainId Domain ID
    *
    * @return $this
    */
    public function setDomainId($domainId)
    {
        $this->container['domainId'] = $domainId;
        return $this;
    }

    /**
    * Gets ports
    *  服务开放的端口映射列表 同一个终端节点服务下，不允许重复的端口映射。 若多个终端节点服务共用一个port_id， 则终端节点服务之间的所有端口映射的server_port和protocol的组合不能重复。
    *
    * @return \HuaweiCloud\SDK\Vpcep\V1\Model\PortList[]|null
    */
    public function getPorts()
    {
        return $this->container['ports'];
    }

    /**
    * Sets ports
    *
    * @param \HuaweiCloud\SDK\Vpcep\V1\Model\PortList[]|null $ports 服务开放的端口映射列表 同一个终端节点服务下，不允许重复的端口映射。 若多个终端节点服务共用一个port_id， 则终端节点服务之间的所有端口映射的server_port和protocol的组合不能重复。
    *
    * @return $this
    */
    public function setPorts($ports)
    {
        $this->container['ports'] = $ports;
        return $this;
    }

    /**
    * Gets ip
    *  接口型VLAN场景服务端IPv4地址或域名
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
    * @param string|null $ip 接口型VLAN场景服务端IPv4地址或域名
    *
    * @return $this
    */
    public function setIp($ip)
    {
        $this->container['ip'] = $ip;
        return $this;
    }

    /**
    * Gets tags
    *  资源标签列表
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
    * @param \HuaweiCloud\SDK\Vpcep\V1\Model\TagList[]|null $tags 资源标签列表
    *
    * @return $this
    */
    public function setTags($tags)
    {
        $this->container['tags'] = $tags;
        return $this;
    }

    /**
    * Gets connectionCount
    *  终端节点服务下连接的状态为“创建中”或“已接受”的终端节点的个数。
    *
    * @return int|null
    */
    public function getConnectionCount()
    {
        return $this->container['connectionCount'];
    }

    /**
    * Sets connectionCount
    *
    * @param int|null $connectionCount 终端节点服务下连接的状态为“创建中”或“已接受”的终端节点的个数。
    *
    * @return $this
    */
    public function setConnectionCount($connectionCount)
    {
        $this->container['connectionCount'] = $connectionCount;
        return $this;
    }

    /**
    * Gets tcpProxy
    *  用于控制将哪些信息（如客户端的源IP、源端口、marker_id等）携带到服务端。 支持携带的客户端信息包括如下两种类型：  - TCP TOA：表示将客户端信息插入到tcp option字段中携带至服务端。 说明：仅当后端资源为OBS时，支持TCP TOA类型信息携带方式。  - Proxy Protocol：表示将客户端信息插入到tcp payload字段中携带至服务端。 仅当服务端支持解析上述字段时，该参数设置才有效。 该参数的取值包括：  - close：表示关闭代理协议。  - toa_open：表示开启代理协议“tcp_toa”。  - proxy_open：表示开启代理协议“proxy_protocol”。  - open：表示同时开启代理协议“tcp_toa”和“proxy_protocol”。 默认值为“close”。
    *
    * @return string|null
    */
    public function getTcpProxy()
    {
        return $this->container['tcpProxy'];
    }

    /**
    * Sets tcpProxy
    *
    * @param string|null $tcpProxy 用于控制将哪些信息（如客户端的源IP、源端口、marker_id等）携带到服务端。 支持携带的客户端信息包括如下两种类型：  - TCP TOA：表示将客户端信息插入到tcp option字段中携带至服务端。 说明：仅当后端资源为OBS时，支持TCP TOA类型信息携带方式。  - Proxy Protocol：表示将客户端信息插入到tcp payload字段中携带至服务端。 仅当服务端支持解析上述字段时，该参数设置才有效。 该参数的取值包括：  - close：表示关闭代理协议。  - toa_open：表示开启代理协议“tcp_toa”。  - proxy_open：表示开启代理协议“proxy_protocol”。  - open：表示同时开启代理协议“tcp_toa”和“proxy_protocol”。 默认值为“close”。
    *
    * @return $this
    */
    public function setTcpProxy($tcpProxy)
    {
        $this->container['tcpProxy'] = $tcpProxy;
        return $this;
    }

    /**
    * Gets error
    *  提交任务异常时返回的异常信息
    *
    * @return \HuaweiCloud\SDK\Vpcep\V1\Model\Error[]|null
    */
    public function getError()
    {
        return $this->container['error'];
    }

    /**
    * Sets error
    *
    * @param \HuaweiCloud\SDK\Vpcep\V1\Model\Error[]|null $error 提交任务异常时返回的异常信息
    *
    * @return $this
    */
    public function setError($error)
    {
        $this->container['error'] = $error;
        return $this;
    }

    /**
    * Gets description
    *  描述字段，支持中英文字母、数字等字符，不支持“<”或“>”字符。
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
    * @param string|null $description 描述字段，支持中英文字母、数字等字符，不支持“<”或“>”字符。
    *
    * @return $this
    */
    public function setDescription($description)
    {
        $this->container['description'] = $description;
        return $this;
    }

    /**
    * Gets supportedEditions
    *  终端节点服务支持的类型，取值范围为profession-专业型，basic-基础型
    *
    * @return string[]|null
    */
    public function getSupportedEditions()
    {
        return $this->container['supportedEditions'];
    }

    /**
    * Sets supportedEditions
    *
    * @param string[]|null $supportedEditions 终端节点服务支持的类型，取值范围为profession-专业型，basic-基础型
    *
    * @return $this
    */
    public function setSupportedEditions($supportedEditions)
    {
        $this->container['supportedEditions'] = $supportedEditions;
        return $this;
    }

    /**
    * Gets publicBorderGroup
    *  终端节点服务对应Pool的Public Border Group信息
    *
    * @return string|null
    */
    public function getPublicBorderGroup()
    {
        return $this->container['publicBorderGroup'];
    }

    /**
    * Sets publicBorderGroup
    *
    * @param string|null $publicBorderGroup 终端节点服务对应Pool的Public Border Group信息
    *
    * @return $this
    */
    public function setPublicBorderGroup($publicBorderGroup)
    {
        $this->container['publicBorderGroup'] = $publicBorderGroup;
        return $this;
    }

    /**
    * Gets enablePolicy
    *  是否允许自定义终端节点策略。  - false：不支持设置终端节点策略  - true：支持设置终端节点策略 默认为false
    *
    * @return bool|null
    */
    public function getEnablePolicy()
    {
        return $this->container['enablePolicy'];
    }

    /**
    * Sets enablePolicy
    *
    * @param bool|null $enablePolicy 是否允许自定义终端节点策略。  - false：不支持设置终端节点策略  - true：支持设置终端节点策略 默认为false
    *
    * @return $this
    */
    public function setEnablePolicy($enablePolicy)
    {
        $this->container['enablePolicy'] = $enablePolicy;
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

