<?php

namespace HuaweiCloud\SDK\Vpcep\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class CreateEndpointServiceRequestBody implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'CreateEndpointServiceRequestBody';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * portId  标识终端节点服务后端资源的ID， 格式为通用唯一识别码（Universally Unique Identifier，下文简称UUID）。 取值为： - LB类型：负载均衡器内网IP对应的端口ID。 详细内容请参考《弹性负载均衡API参考》中的“查询负载均衡详情”。 - VM类型：弹性云服务器IP地址对应的网卡ID。 详细内容请参考《弹性云服务器API参考》中的“查询云服务器网卡信息”， 详见响应消息中的“port_id”字段。 - VIP类型：虚拟IP所在虚拟机的网卡ID（VIP类型业务已不支持，该取值类型已废弃） 说明： - 创建终端节点服务时，VPC的子网网段不能与198.19.128.0/17重叠。 - VPC路由表中自定义路由的目的地址不能与198.19.128.0/17重叠。
    * serviceName  终端节点服务的名称，长度不大于16，允许传入大小写字母、数字、下划线、中划线。 - 传入为空，存入值为regionName+.+serviceId - 传入不为空并校验通过，存入值为regionName+.+serviceName+.+serviceId
    * vpcId  终端节点服务对应后端资源所在的VPC的ID。 详细内容请参考《虚拟私有云API参考》中的“查询VPC”，详见响应消息中的“id”字段。
    * approvalEnabled  是否需要审批。  - false：不需要审批，创建的终端节点连接直接为accepted状态。  - true：需要审批，创建的终端节点连接为pendingAcceptance状态， 需要终端节点服务所属用户审核后方可使用。 默认为true，需要审批。
    * serviceType  终端节点服务类型。 仅支持将用户私有服务创建为interface类型的终端节点服务。 终端节点服务类型包括“网关（gateway）型”和“接口（interface）型”：  - gateway：由运维人员配置。用户无需创建，可直接使用。  - interface：包括运维人员配置的云服务和用户自己创建的私有服务。 其中，运维人员配置的云服务无需创建， 用户可直接使用。 您可以通过查询公共终端节点服务列表， 查看由运维人员配置的所有用户可见且可连接的终端节点服务， 并通过创建终端节点创建访问Gateway和Interface类型终端节点服务的终端节点。
    * serverType  资源类型。  - VM：云服务器，适用于作为服务器使用。  - VIP：虚拟IP，适用于作为虚IP场景使用。（该字段已废弃，请优先使用LB类型）  - LB：负载均衡，适用于高访问量业务和对可靠性和容灾性要求较高的业务。
    * ports  服务开放的端口映射列表，详细内容请参见表4-10。 同一个终端节点服务下，不允许重复的端口映射。若多个终端节点服务共用一个port_id， 则终端节点服务之间的所有端口映射的server_port和protocol的组合不能重复， 单次最多添加200个。
    * tcpProxy  用于控制将哪些信息（如客户端的源IP、源端口、marker_id等）携带到服务端。 支持携带的客户端信息包括如下两种类型：  - TCP TOA：表示将客户端信息插入到tcp option字段中携带至服务端。 说明：仅当后端资源为OBS时，支持TCP TOA类型信息携带方式。  - Proxy Protocol：表示将客户端信息插入到tcp payload字段中携带至服务端。 仅当服务端支持解析上述字段时，该参数设置才有效。 该参数的取值包括：  - close：表示关闭代理协议。  - toa_open：表示开启代理协议“tcp_toa”。  - proxy_open：表示开启代理协议“proxy_protocol”。  - open：表示同时开启代理协议“tcp_toa”和“proxy_protocol”。  - proxy_vni: 关闭toa，开启proxy和vni。 默认值为“close”。
    * tags  资源标签列表。同一个终端节点服务最多可添加10个标签。
    * description  描述字段，支持中英文字母、数字等字符，不支持“<”或“>”字符。  描述字段，支持中英文字母、数字等字符，不支持“<”或“>”字符。
    * enablePolicy  是否开启终端节点策略。  - false：不支持设置终端节点策略  - true：支持设置终端节点策略 默认为false
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'portId' => 'string',
            'serviceName' => 'string',
            'vpcId' => 'string',
            'approvalEnabled' => 'bool',
            'serviceType' => 'string',
            'serverType' => 'string',
            'ports' => '\HuaweiCloud\SDK\Vpcep\V1\Model\PortList[]',
            'tcpProxy' => 'string',
            'tags' => '\HuaweiCloud\SDK\Vpcep\V1\Model\TagList[]',
            'description' => 'string',
            'enablePolicy' => 'bool'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * portId  标识终端节点服务后端资源的ID， 格式为通用唯一识别码（Universally Unique Identifier，下文简称UUID）。 取值为： - LB类型：负载均衡器内网IP对应的端口ID。 详细内容请参考《弹性负载均衡API参考》中的“查询负载均衡详情”。 - VM类型：弹性云服务器IP地址对应的网卡ID。 详细内容请参考《弹性云服务器API参考》中的“查询云服务器网卡信息”， 详见响应消息中的“port_id”字段。 - VIP类型：虚拟IP所在虚拟机的网卡ID（VIP类型业务已不支持，该取值类型已废弃） 说明： - 创建终端节点服务时，VPC的子网网段不能与198.19.128.0/17重叠。 - VPC路由表中自定义路由的目的地址不能与198.19.128.0/17重叠。
    * serviceName  终端节点服务的名称，长度不大于16，允许传入大小写字母、数字、下划线、中划线。 - 传入为空，存入值为regionName+.+serviceId - 传入不为空并校验通过，存入值为regionName+.+serviceName+.+serviceId
    * vpcId  终端节点服务对应后端资源所在的VPC的ID。 详细内容请参考《虚拟私有云API参考》中的“查询VPC”，详见响应消息中的“id”字段。
    * approvalEnabled  是否需要审批。  - false：不需要审批，创建的终端节点连接直接为accepted状态。  - true：需要审批，创建的终端节点连接为pendingAcceptance状态， 需要终端节点服务所属用户审核后方可使用。 默认为true，需要审批。
    * serviceType  终端节点服务类型。 仅支持将用户私有服务创建为interface类型的终端节点服务。 终端节点服务类型包括“网关（gateway）型”和“接口（interface）型”：  - gateway：由运维人员配置。用户无需创建，可直接使用。  - interface：包括运维人员配置的云服务和用户自己创建的私有服务。 其中，运维人员配置的云服务无需创建， 用户可直接使用。 您可以通过查询公共终端节点服务列表， 查看由运维人员配置的所有用户可见且可连接的终端节点服务， 并通过创建终端节点创建访问Gateway和Interface类型终端节点服务的终端节点。
    * serverType  资源类型。  - VM：云服务器，适用于作为服务器使用。  - VIP：虚拟IP，适用于作为虚IP场景使用。（该字段已废弃，请优先使用LB类型）  - LB：负载均衡，适用于高访问量业务和对可靠性和容灾性要求较高的业务。
    * ports  服务开放的端口映射列表，详细内容请参见表4-10。 同一个终端节点服务下，不允许重复的端口映射。若多个终端节点服务共用一个port_id， 则终端节点服务之间的所有端口映射的server_port和protocol的组合不能重复， 单次最多添加200个。
    * tcpProxy  用于控制将哪些信息（如客户端的源IP、源端口、marker_id等）携带到服务端。 支持携带的客户端信息包括如下两种类型：  - TCP TOA：表示将客户端信息插入到tcp option字段中携带至服务端。 说明：仅当后端资源为OBS时，支持TCP TOA类型信息携带方式。  - Proxy Protocol：表示将客户端信息插入到tcp payload字段中携带至服务端。 仅当服务端支持解析上述字段时，该参数设置才有效。 该参数的取值包括：  - close：表示关闭代理协议。  - toa_open：表示开启代理协议“tcp_toa”。  - proxy_open：表示开启代理协议“proxy_protocol”。  - open：表示同时开启代理协议“tcp_toa”和“proxy_protocol”。  - proxy_vni: 关闭toa，开启proxy和vni。 默认值为“close”。
    * tags  资源标签列表。同一个终端节点服务最多可添加10个标签。
    * description  描述字段，支持中英文字母、数字等字符，不支持“<”或“>”字符。  描述字段，支持中英文字母、数字等字符，不支持“<”或“>”字符。
    * enablePolicy  是否开启终端节点策略。  - false：不支持设置终端节点策略  - true：支持设置终端节点策略 默认为false
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'portId' => null,
        'serviceName' => null,
        'vpcId' => null,
        'approvalEnabled' => null,
        'serviceType' => null,
        'serverType' => null,
        'ports' => null,
        'tcpProxy' => null,
        'tags' => null,
        'description' => null,
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
    * portId  标识终端节点服务后端资源的ID， 格式为通用唯一识别码（Universally Unique Identifier，下文简称UUID）。 取值为： - LB类型：负载均衡器内网IP对应的端口ID。 详细内容请参考《弹性负载均衡API参考》中的“查询负载均衡详情”。 - VM类型：弹性云服务器IP地址对应的网卡ID。 详细内容请参考《弹性云服务器API参考》中的“查询云服务器网卡信息”， 详见响应消息中的“port_id”字段。 - VIP类型：虚拟IP所在虚拟机的网卡ID（VIP类型业务已不支持，该取值类型已废弃） 说明： - 创建终端节点服务时，VPC的子网网段不能与198.19.128.0/17重叠。 - VPC路由表中自定义路由的目的地址不能与198.19.128.0/17重叠。
    * serviceName  终端节点服务的名称，长度不大于16，允许传入大小写字母、数字、下划线、中划线。 - 传入为空，存入值为regionName+.+serviceId - 传入不为空并校验通过，存入值为regionName+.+serviceName+.+serviceId
    * vpcId  终端节点服务对应后端资源所在的VPC的ID。 详细内容请参考《虚拟私有云API参考》中的“查询VPC”，详见响应消息中的“id”字段。
    * approvalEnabled  是否需要审批。  - false：不需要审批，创建的终端节点连接直接为accepted状态。  - true：需要审批，创建的终端节点连接为pendingAcceptance状态， 需要终端节点服务所属用户审核后方可使用。 默认为true，需要审批。
    * serviceType  终端节点服务类型。 仅支持将用户私有服务创建为interface类型的终端节点服务。 终端节点服务类型包括“网关（gateway）型”和“接口（interface）型”：  - gateway：由运维人员配置。用户无需创建，可直接使用。  - interface：包括运维人员配置的云服务和用户自己创建的私有服务。 其中，运维人员配置的云服务无需创建， 用户可直接使用。 您可以通过查询公共终端节点服务列表， 查看由运维人员配置的所有用户可见且可连接的终端节点服务， 并通过创建终端节点创建访问Gateway和Interface类型终端节点服务的终端节点。
    * serverType  资源类型。  - VM：云服务器，适用于作为服务器使用。  - VIP：虚拟IP，适用于作为虚IP场景使用。（该字段已废弃，请优先使用LB类型）  - LB：负载均衡，适用于高访问量业务和对可靠性和容灾性要求较高的业务。
    * ports  服务开放的端口映射列表，详细内容请参见表4-10。 同一个终端节点服务下，不允许重复的端口映射。若多个终端节点服务共用一个port_id， 则终端节点服务之间的所有端口映射的server_port和protocol的组合不能重复， 单次最多添加200个。
    * tcpProxy  用于控制将哪些信息（如客户端的源IP、源端口、marker_id等）携带到服务端。 支持携带的客户端信息包括如下两种类型：  - TCP TOA：表示将客户端信息插入到tcp option字段中携带至服务端。 说明：仅当后端资源为OBS时，支持TCP TOA类型信息携带方式。  - Proxy Protocol：表示将客户端信息插入到tcp payload字段中携带至服务端。 仅当服务端支持解析上述字段时，该参数设置才有效。 该参数的取值包括：  - close：表示关闭代理协议。  - toa_open：表示开启代理协议“tcp_toa”。  - proxy_open：表示开启代理协议“proxy_protocol”。  - open：表示同时开启代理协议“tcp_toa”和“proxy_protocol”。  - proxy_vni: 关闭toa，开启proxy和vni。 默认值为“close”。
    * tags  资源标签列表。同一个终端节点服务最多可添加10个标签。
    * description  描述字段，支持中英文字母、数字等字符，不支持“<”或“>”字符。  描述字段，支持中英文字母、数字等字符，不支持“<”或“>”字符。
    * enablePolicy  是否开启终端节点策略。  - false：不支持设置终端节点策略  - true：支持设置终端节点策略 默认为false
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'portId' => 'port_id',
            'serviceName' => 'service_name',
            'vpcId' => 'vpc_id',
            'approvalEnabled' => 'approval_enabled',
            'serviceType' => 'service_type',
            'serverType' => 'server_type',
            'ports' => 'ports',
            'tcpProxy' => 'tcp_proxy',
            'tags' => 'tags',
            'description' => 'description',
            'enablePolicy' => 'enable_policy'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * portId  标识终端节点服务后端资源的ID， 格式为通用唯一识别码（Universally Unique Identifier，下文简称UUID）。 取值为： - LB类型：负载均衡器内网IP对应的端口ID。 详细内容请参考《弹性负载均衡API参考》中的“查询负载均衡详情”。 - VM类型：弹性云服务器IP地址对应的网卡ID。 详细内容请参考《弹性云服务器API参考》中的“查询云服务器网卡信息”， 详见响应消息中的“port_id”字段。 - VIP类型：虚拟IP所在虚拟机的网卡ID（VIP类型业务已不支持，该取值类型已废弃） 说明： - 创建终端节点服务时，VPC的子网网段不能与198.19.128.0/17重叠。 - VPC路由表中自定义路由的目的地址不能与198.19.128.0/17重叠。
    * serviceName  终端节点服务的名称，长度不大于16，允许传入大小写字母、数字、下划线、中划线。 - 传入为空，存入值为regionName+.+serviceId - 传入不为空并校验通过，存入值为regionName+.+serviceName+.+serviceId
    * vpcId  终端节点服务对应后端资源所在的VPC的ID。 详细内容请参考《虚拟私有云API参考》中的“查询VPC”，详见响应消息中的“id”字段。
    * approvalEnabled  是否需要审批。  - false：不需要审批，创建的终端节点连接直接为accepted状态。  - true：需要审批，创建的终端节点连接为pendingAcceptance状态， 需要终端节点服务所属用户审核后方可使用。 默认为true，需要审批。
    * serviceType  终端节点服务类型。 仅支持将用户私有服务创建为interface类型的终端节点服务。 终端节点服务类型包括“网关（gateway）型”和“接口（interface）型”：  - gateway：由运维人员配置。用户无需创建，可直接使用。  - interface：包括运维人员配置的云服务和用户自己创建的私有服务。 其中，运维人员配置的云服务无需创建， 用户可直接使用。 您可以通过查询公共终端节点服务列表， 查看由运维人员配置的所有用户可见且可连接的终端节点服务， 并通过创建终端节点创建访问Gateway和Interface类型终端节点服务的终端节点。
    * serverType  资源类型。  - VM：云服务器，适用于作为服务器使用。  - VIP：虚拟IP，适用于作为虚IP场景使用。（该字段已废弃，请优先使用LB类型）  - LB：负载均衡，适用于高访问量业务和对可靠性和容灾性要求较高的业务。
    * ports  服务开放的端口映射列表，详细内容请参见表4-10。 同一个终端节点服务下，不允许重复的端口映射。若多个终端节点服务共用一个port_id， 则终端节点服务之间的所有端口映射的server_port和protocol的组合不能重复， 单次最多添加200个。
    * tcpProxy  用于控制将哪些信息（如客户端的源IP、源端口、marker_id等）携带到服务端。 支持携带的客户端信息包括如下两种类型：  - TCP TOA：表示将客户端信息插入到tcp option字段中携带至服务端。 说明：仅当后端资源为OBS时，支持TCP TOA类型信息携带方式。  - Proxy Protocol：表示将客户端信息插入到tcp payload字段中携带至服务端。 仅当服务端支持解析上述字段时，该参数设置才有效。 该参数的取值包括：  - close：表示关闭代理协议。  - toa_open：表示开启代理协议“tcp_toa”。  - proxy_open：表示开启代理协议“proxy_protocol”。  - open：表示同时开启代理协议“tcp_toa”和“proxy_protocol”。  - proxy_vni: 关闭toa，开启proxy和vni。 默认值为“close”。
    * tags  资源标签列表。同一个终端节点服务最多可添加10个标签。
    * description  描述字段，支持中英文字母、数字等字符，不支持“<”或“>”字符。  描述字段，支持中英文字母、数字等字符，不支持“<”或“>”字符。
    * enablePolicy  是否开启终端节点策略。  - false：不支持设置终端节点策略  - true：支持设置终端节点策略 默认为false
    *
    * @var string[]
    */
    protected static $setters = [
            'portId' => 'setPortId',
            'serviceName' => 'setServiceName',
            'vpcId' => 'setVpcId',
            'approvalEnabled' => 'setApprovalEnabled',
            'serviceType' => 'setServiceType',
            'serverType' => 'setServerType',
            'ports' => 'setPorts',
            'tcpProxy' => 'setTcpProxy',
            'tags' => 'setTags',
            'description' => 'setDescription',
            'enablePolicy' => 'setEnablePolicy'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * portId  标识终端节点服务后端资源的ID， 格式为通用唯一识别码（Universally Unique Identifier，下文简称UUID）。 取值为： - LB类型：负载均衡器内网IP对应的端口ID。 详细内容请参考《弹性负载均衡API参考》中的“查询负载均衡详情”。 - VM类型：弹性云服务器IP地址对应的网卡ID。 详细内容请参考《弹性云服务器API参考》中的“查询云服务器网卡信息”， 详见响应消息中的“port_id”字段。 - VIP类型：虚拟IP所在虚拟机的网卡ID（VIP类型业务已不支持，该取值类型已废弃） 说明： - 创建终端节点服务时，VPC的子网网段不能与198.19.128.0/17重叠。 - VPC路由表中自定义路由的目的地址不能与198.19.128.0/17重叠。
    * serviceName  终端节点服务的名称，长度不大于16，允许传入大小写字母、数字、下划线、中划线。 - 传入为空，存入值为regionName+.+serviceId - 传入不为空并校验通过，存入值为regionName+.+serviceName+.+serviceId
    * vpcId  终端节点服务对应后端资源所在的VPC的ID。 详细内容请参考《虚拟私有云API参考》中的“查询VPC”，详见响应消息中的“id”字段。
    * approvalEnabled  是否需要审批。  - false：不需要审批，创建的终端节点连接直接为accepted状态。  - true：需要审批，创建的终端节点连接为pendingAcceptance状态， 需要终端节点服务所属用户审核后方可使用。 默认为true，需要审批。
    * serviceType  终端节点服务类型。 仅支持将用户私有服务创建为interface类型的终端节点服务。 终端节点服务类型包括“网关（gateway）型”和“接口（interface）型”：  - gateway：由运维人员配置。用户无需创建，可直接使用。  - interface：包括运维人员配置的云服务和用户自己创建的私有服务。 其中，运维人员配置的云服务无需创建， 用户可直接使用。 您可以通过查询公共终端节点服务列表， 查看由运维人员配置的所有用户可见且可连接的终端节点服务， 并通过创建终端节点创建访问Gateway和Interface类型终端节点服务的终端节点。
    * serverType  资源类型。  - VM：云服务器，适用于作为服务器使用。  - VIP：虚拟IP，适用于作为虚IP场景使用。（该字段已废弃，请优先使用LB类型）  - LB：负载均衡，适用于高访问量业务和对可靠性和容灾性要求较高的业务。
    * ports  服务开放的端口映射列表，详细内容请参见表4-10。 同一个终端节点服务下，不允许重复的端口映射。若多个终端节点服务共用一个port_id， 则终端节点服务之间的所有端口映射的server_port和protocol的组合不能重复， 单次最多添加200个。
    * tcpProxy  用于控制将哪些信息（如客户端的源IP、源端口、marker_id等）携带到服务端。 支持携带的客户端信息包括如下两种类型：  - TCP TOA：表示将客户端信息插入到tcp option字段中携带至服务端。 说明：仅当后端资源为OBS时，支持TCP TOA类型信息携带方式。  - Proxy Protocol：表示将客户端信息插入到tcp payload字段中携带至服务端。 仅当服务端支持解析上述字段时，该参数设置才有效。 该参数的取值包括：  - close：表示关闭代理协议。  - toa_open：表示开启代理协议“tcp_toa”。  - proxy_open：表示开启代理协议“proxy_protocol”。  - open：表示同时开启代理协议“tcp_toa”和“proxy_protocol”。  - proxy_vni: 关闭toa，开启proxy和vni。 默认值为“close”。
    * tags  资源标签列表。同一个终端节点服务最多可添加10个标签。
    * description  描述字段，支持中英文字母、数字等字符，不支持“<”或“>”字符。  描述字段，支持中英文字母、数字等字符，不支持“<”或“>”字符。
    * enablePolicy  是否开启终端节点策略。  - false：不支持设置终端节点策略  - true：支持设置终端节点策略 默认为false
    *
    * @var string[]
    */
    protected static $getters = [
            'portId' => 'getPortId',
            'serviceName' => 'getServiceName',
            'vpcId' => 'getVpcId',
            'approvalEnabled' => 'getApprovalEnabled',
            'serviceType' => 'getServiceType',
            'serverType' => 'getServerType',
            'ports' => 'getPorts',
            'tcpProxy' => 'getTcpProxy',
            'tags' => 'getTags',
            'description' => 'getDescription',
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
    const SERVICE_TYPE_GATEWAY = 'gateway';
    const SERVICE_TYPE__INTERFACE = 'interface';
    const SERVER_TYPE_VM = 'VM';
    const SERVER_TYPE_VIP = 'VIP';
    const SERVER_TYPE_LB = 'LB';
    const TCP_PROXY_CLOSE = 'close';
    const TCP_PROXY_TOA_OPEN = 'toa_open';
    const TCP_PROXY_PROXY_OPEN = 'proxy_open';
    const TCP_PROXY_OPEN = 'open';
    const TCP_PROXY_PROXY_VNI = 'proxy_vni';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getServiceTypeAllowableValues()
    {
        return [
            self::SERVICE_TYPE_GATEWAY,
            self::SERVICE_TYPE__INTERFACE,
        ];
    }

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getServerTypeAllowableValues()
    {
        return [
            self::SERVER_TYPE_VM,
            self::SERVER_TYPE_VIP,
            self::SERVER_TYPE_LB,
        ];
    }

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getTcpProxyAllowableValues()
    {
        return [
            self::TCP_PROXY_CLOSE,
            self::TCP_PROXY_TOA_OPEN,
            self::TCP_PROXY_PROXY_OPEN,
            self::TCP_PROXY_OPEN,
            self::TCP_PROXY_PROXY_VNI,
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
        $this->container['portId'] = isset($data['portId']) ? $data['portId'] : null;
        $this->container['serviceName'] = isset($data['serviceName']) ? $data['serviceName'] : null;
        $this->container['vpcId'] = isset($data['vpcId']) ? $data['vpcId'] : null;
        $this->container['approvalEnabled'] = isset($data['approvalEnabled']) ? $data['approvalEnabled'] : null;
        $this->container['serviceType'] = isset($data['serviceType']) ? $data['serviceType'] : null;
        $this->container['serverType'] = isset($data['serverType']) ? $data['serverType'] : null;
        $this->container['ports'] = isset($data['ports']) ? $data['ports'] : null;
        $this->container['tcpProxy'] = isset($data['tcpProxy']) ? $data['tcpProxy'] : null;
        $this->container['tags'] = isset($data['tags']) ? $data['tags'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
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
        if ($this->container['portId'] === null) {
            $invalidProperties[] = "'portId' can't be null";
        }
            if ((mb_strlen($this->container['portId']) > 64)) {
                $invalidProperties[] = "invalid value for 'portId', the character length must be smaller than or equal to 64.";
            }
            if ((mb_strlen($this->container['portId']) < 1)) {
                $invalidProperties[] = "invalid value for 'portId', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['serviceName']) && (mb_strlen($this->container['serviceName']) > 16)) {
                $invalidProperties[] = "invalid value for 'serviceName', the character length must be smaller than or equal to 16.";
            }
            if (!is_null($this->container['serviceName']) && (mb_strlen($this->container['serviceName']) < 0)) {
                $invalidProperties[] = "invalid value for 'serviceName', the character length must be bigger than or equal to 0.";
            }
        if ($this->container['vpcId'] === null) {
            $invalidProperties[] = "'vpcId' can't be null";
        }
            if ((mb_strlen($this->container['vpcId']) > 64)) {
                $invalidProperties[] = "invalid value for 'vpcId', the character length must be smaller than or equal to 64.";
            }
            if ((mb_strlen($this->container['vpcId']) < 1)) {
                $invalidProperties[] = "invalid value for 'vpcId', the character length must be bigger than or equal to 1.";
            }
            $allowedValues = $this->getServiceTypeAllowableValues();
                if (!is_null($this->container['serviceType']) && !in_array($this->container['serviceType'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'serviceType', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

        if ($this->container['serverType'] === null) {
            $invalidProperties[] = "'serverType' can't be null";
        }
            $allowedValues = $this->getServerTypeAllowableValues();
                if (!is_null($this->container['serverType']) && !in_array($this->container['serverType'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'serverType', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

        if ($this->container['ports'] === null) {
            $invalidProperties[] = "'ports' can't be null";
        }
            $allowedValues = $this->getTcpProxyAllowableValues();
                if (!is_null($this->container['tcpProxy']) && !in_array($this->container['tcpProxy'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'tcpProxy', must be one of '%s'",
                implode("', '", $allowedValues)
                );
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
    * Gets portId
    *  标识终端节点服务后端资源的ID， 格式为通用唯一识别码（Universally Unique Identifier，下文简称UUID）。 取值为： - LB类型：负载均衡器内网IP对应的端口ID。 详细内容请参考《弹性负载均衡API参考》中的“查询负载均衡详情”。 - VM类型：弹性云服务器IP地址对应的网卡ID。 详细内容请参考《弹性云服务器API参考》中的“查询云服务器网卡信息”， 详见响应消息中的“port_id”字段。 - VIP类型：虚拟IP所在虚拟机的网卡ID（VIP类型业务已不支持，该取值类型已废弃） 说明： - 创建终端节点服务时，VPC的子网网段不能与198.19.128.0/17重叠。 - VPC路由表中自定义路由的目的地址不能与198.19.128.0/17重叠。
    *
    * @return string
    */
    public function getPortId()
    {
        return $this->container['portId'];
    }

    /**
    * Sets portId
    *
    * @param string $portId 标识终端节点服务后端资源的ID， 格式为通用唯一识别码（Universally Unique Identifier，下文简称UUID）。 取值为： - LB类型：负载均衡器内网IP对应的端口ID。 详细内容请参考《弹性负载均衡API参考》中的“查询负载均衡详情”。 - VM类型：弹性云服务器IP地址对应的网卡ID。 详细内容请参考《弹性云服务器API参考》中的“查询云服务器网卡信息”， 详见响应消息中的“port_id”字段。 - VIP类型：虚拟IP所在虚拟机的网卡ID（VIP类型业务已不支持，该取值类型已废弃） 说明： - 创建终端节点服务时，VPC的子网网段不能与198.19.128.0/17重叠。 - VPC路由表中自定义路由的目的地址不能与198.19.128.0/17重叠。
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
    *  终端节点服务的名称，长度不大于16，允许传入大小写字母、数字、下划线、中划线。 - 传入为空，存入值为regionName+.+serviceId - 传入不为空并校验通过，存入值为regionName+.+serviceName+.+serviceId
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
    * @param string|null $serviceName 终端节点服务的名称，长度不大于16，允许传入大小写字母、数字、下划线、中划线。 - 传入为空，存入值为regionName+.+serviceId - 传入不为空并校验通过，存入值为regionName+.+serviceName+.+serviceId
    *
    * @return $this
    */
    public function setServiceName($serviceName)
    {
        $this->container['serviceName'] = $serviceName;
        return $this;
    }

    /**
    * Gets vpcId
    *  终端节点服务对应后端资源所在的VPC的ID。 详细内容请参考《虚拟私有云API参考》中的“查询VPC”，详见响应消息中的“id”字段。
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
    * @param string $vpcId 终端节点服务对应后端资源所在的VPC的ID。 详细内容请参考《虚拟私有云API参考》中的“查询VPC”，详见响应消息中的“id”字段。
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
    *  是否需要审批。  - false：不需要审批，创建的终端节点连接直接为accepted状态。  - true：需要审批，创建的终端节点连接为pendingAcceptance状态， 需要终端节点服务所属用户审核后方可使用。 默认为true，需要审批。
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
    * @param bool|null $approvalEnabled 是否需要审批。  - false：不需要审批，创建的终端节点连接直接为accepted状态。  - true：需要审批，创建的终端节点连接为pendingAcceptance状态， 需要终端节点服务所属用户审核后方可使用。 默认为true，需要审批。
    *
    * @return $this
    */
    public function setApprovalEnabled($approvalEnabled)
    {
        $this->container['approvalEnabled'] = $approvalEnabled;
        return $this;
    }

    /**
    * Gets serviceType
    *  终端节点服务类型。 仅支持将用户私有服务创建为interface类型的终端节点服务。 终端节点服务类型包括“网关（gateway）型”和“接口（interface）型”：  - gateway：由运维人员配置。用户无需创建，可直接使用。  - interface：包括运维人员配置的云服务和用户自己创建的私有服务。 其中，运维人员配置的云服务无需创建， 用户可直接使用。 您可以通过查询公共终端节点服务列表， 查看由运维人员配置的所有用户可见且可连接的终端节点服务， 并通过创建终端节点创建访问Gateway和Interface类型终端节点服务的终端节点。
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
    * @param string|null $serviceType 终端节点服务类型。 仅支持将用户私有服务创建为interface类型的终端节点服务。 终端节点服务类型包括“网关（gateway）型”和“接口（interface）型”：  - gateway：由运维人员配置。用户无需创建，可直接使用。  - interface：包括运维人员配置的云服务和用户自己创建的私有服务。 其中，运维人员配置的云服务无需创建， 用户可直接使用。 您可以通过查询公共终端节点服务列表， 查看由运维人员配置的所有用户可见且可连接的终端节点服务， 并通过创建终端节点创建访问Gateway和Interface类型终端节点服务的终端节点。
    *
    * @return $this
    */
    public function setServiceType($serviceType)
    {
        $this->container['serviceType'] = $serviceType;
        return $this;
    }

    /**
    * Gets serverType
    *  资源类型。  - VM：云服务器，适用于作为服务器使用。  - VIP：虚拟IP，适用于作为虚IP场景使用。（该字段已废弃，请优先使用LB类型）  - LB：负载均衡，适用于高访问量业务和对可靠性和容灾性要求较高的业务。
    *
    * @return string
    */
    public function getServerType()
    {
        return $this->container['serverType'];
    }

    /**
    * Sets serverType
    *
    * @param string $serverType 资源类型。  - VM：云服务器，适用于作为服务器使用。  - VIP：虚拟IP，适用于作为虚IP场景使用。（该字段已废弃，请优先使用LB类型）  - LB：负载均衡，适用于高访问量业务和对可靠性和容灾性要求较高的业务。
    *
    * @return $this
    */
    public function setServerType($serverType)
    {
        $this->container['serverType'] = $serverType;
        return $this;
    }

    /**
    * Gets ports
    *  服务开放的端口映射列表，详细内容请参见表4-10。 同一个终端节点服务下，不允许重复的端口映射。若多个终端节点服务共用一个port_id， 则终端节点服务之间的所有端口映射的server_port和protocol的组合不能重复， 单次最多添加200个。
    *
    * @return \HuaweiCloud\SDK\Vpcep\V1\Model\PortList[]
    */
    public function getPorts()
    {
        return $this->container['ports'];
    }

    /**
    * Sets ports
    *
    * @param \HuaweiCloud\SDK\Vpcep\V1\Model\PortList[] $ports 服务开放的端口映射列表，详细内容请参见表4-10。 同一个终端节点服务下，不允许重复的端口映射。若多个终端节点服务共用一个port_id， 则终端节点服务之间的所有端口映射的server_port和protocol的组合不能重复， 单次最多添加200个。
    *
    * @return $this
    */
    public function setPorts($ports)
    {
        $this->container['ports'] = $ports;
        return $this;
    }

    /**
    * Gets tcpProxy
    *  用于控制将哪些信息（如客户端的源IP、源端口、marker_id等）携带到服务端。 支持携带的客户端信息包括如下两种类型：  - TCP TOA：表示将客户端信息插入到tcp option字段中携带至服务端。 说明：仅当后端资源为OBS时，支持TCP TOA类型信息携带方式。  - Proxy Protocol：表示将客户端信息插入到tcp payload字段中携带至服务端。 仅当服务端支持解析上述字段时，该参数设置才有效。 该参数的取值包括：  - close：表示关闭代理协议。  - toa_open：表示开启代理协议“tcp_toa”。  - proxy_open：表示开启代理协议“proxy_protocol”。  - open：表示同时开启代理协议“tcp_toa”和“proxy_protocol”。  - proxy_vni: 关闭toa，开启proxy和vni。 默认值为“close”。
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
    * @param string|null $tcpProxy 用于控制将哪些信息（如客户端的源IP、源端口、marker_id等）携带到服务端。 支持携带的客户端信息包括如下两种类型：  - TCP TOA：表示将客户端信息插入到tcp option字段中携带至服务端。 说明：仅当后端资源为OBS时，支持TCP TOA类型信息携带方式。  - Proxy Protocol：表示将客户端信息插入到tcp payload字段中携带至服务端。 仅当服务端支持解析上述字段时，该参数设置才有效。 该参数的取值包括：  - close：表示关闭代理协议。  - toa_open：表示开启代理协议“tcp_toa”。  - proxy_open：表示开启代理协议“proxy_protocol”。  - open：表示同时开启代理协议“tcp_toa”和“proxy_protocol”。  - proxy_vni: 关闭toa，开启proxy和vni。 默认值为“close”。
    *
    * @return $this
    */
    public function setTcpProxy($tcpProxy)
    {
        $this->container['tcpProxy'] = $tcpProxy;
        return $this;
    }

    /**
    * Gets tags
    *  资源标签列表。同一个终端节点服务最多可添加10个标签。
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
    * @param \HuaweiCloud\SDK\Vpcep\V1\Model\TagList[]|null $tags 资源标签列表。同一个终端节点服务最多可添加10个标签。
    *
    * @return $this
    */
    public function setTags($tags)
    {
        $this->container['tags'] = $tags;
        return $this;
    }

    /**
    * Gets description
    *  描述字段，支持中英文字母、数字等字符，不支持“<”或“>”字符。  描述字段，支持中英文字母、数字等字符，不支持“<”或“>”字符。
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
    * @param string|null $description 描述字段，支持中英文字母、数字等字符，不支持“<”或“>”字符。  描述字段，支持中英文字母、数字等字符，不支持“<”或“>”字符。
    *
    * @return $this
    */
    public function setDescription($description)
    {
        $this->container['description'] = $description;
        return $this;
    }

    /**
    * Gets enablePolicy
    *  是否开启终端节点策略。  - false：不支持设置终端节点策略  - true：支持设置终端节点策略 默认为false
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
    * @param bool|null $enablePolicy 是否开启终端节点策略。  - false：不支持设置终端节点策略  - true：支持设置终端节点策略 默认为false
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

