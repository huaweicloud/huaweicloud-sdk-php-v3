<?php

namespace HuaweiCloud\SDK\Vpcep\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class UpdateEndpointServiceRequestBody implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'UpdateEndpointServiceRequestBody';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * approvalEnabled  是否需要审批。  - false：不需审批，创建的终端节点连接直接为accepted状态。  - true：需审批，创建的终端节点连接需要终端节点服务所属用户审核后方可使用。 默认为true，需要审批。
    * serviceName  终端节点服务的名称，长度不大于16，允许传入大小写字母、数字、下划线、中划线。
    * ports  服务开放的端口映射列表，同一个终端节点服务下，不允许重复的端口映射。 若多个终端节点服务共用一个port_id， 则终端节点之间服务的所有端口映射的server_port和protocol的组合不能重复， 单次最多添加200个。 该参数值将被全量更新。
    * portId  标识终端节点服务后端资源的ID， 格式为通用唯一识别码（Universally UniqueIdentifier，下文简称UUID）。 取值为：  - LB类型：负载均衡器内网IP对应的端口ID。 详细内容请参考《弹性负载均衡API参考》中的“查询负载均衡详情”。  - VM类型：弹性云服务器IP地址对应的网卡ID。 详细内容请参考《弹性云服务器API参考》中的“查询云服务器网卡信息”， 详见响应消息中的“port_id”字段。  - VIP类型：虚拟资源所在物理服务器对应的网卡ID。（该字段已废弃，请优先使用LB类型） 说明： 当后端资源为“LB类型”时，仅支持修改为同类型后端资源。 例如，共享型负载均衡仅支持更换为共享型负载均衡，不支持更换为独享型负载均衡。
    * tcpProxy  用于控制将哪些信息（如客户端的源IP、源端口、marker_id等）携带到服务端。 支持携带的客户端信息包括如下两种类型：  - TCP TOA：表示将客户端信息插入到tcp option字段中携带至服务端。 说明：仅当后端资源为OBS时，支持TCP TOA类型信息携带方式。  - Proxy Protocol：表示将客户端信息插入到tcp payload字段中携带至服务端。 仅当服务端支持解析上述字段时，该参数设置才有效。 该参数的取值包括：  - close：表示关闭代理协议。  - toa_open：表示开启代理协议“tcp_toa”。  - proxy_open：表示开启代理协议“proxy_protocol”。  - open：表示同时开启代理协议“tcp_toa”和“proxy_protocol”。  - proxy_vni: 关闭toa，开启proxy和vni。 默认值为“close”。
    * description  描述字段，支持中英文字母、数字等字符，不支持“<”或“>”字符。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'approvalEnabled' => 'bool',
            'serviceName' => 'string',
            'ports' => '\HuaweiCloud\SDK\Vpcep\V1\Model\PortList[]',
            'portId' => 'string',
            'tcpProxy' => 'string',
            'description' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * approvalEnabled  是否需要审批。  - false：不需审批，创建的终端节点连接直接为accepted状态。  - true：需审批，创建的终端节点连接需要终端节点服务所属用户审核后方可使用。 默认为true，需要审批。
    * serviceName  终端节点服务的名称，长度不大于16，允许传入大小写字母、数字、下划线、中划线。
    * ports  服务开放的端口映射列表，同一个终端节点服务下，不允许重复的端口映射。 若多个终端节点服务共用一个port_id， 则终端节点之间服务的所有端口映射的server_port和protocol的组合不能重复， 单次最多添加200个。 该参数值将被全量更新。
    * portId  标识终端节点服务后端资源的ID， 格式为通用唯一识别码（Universally UniqueIdentifier，下文简称UUID）。 取值为：  - LB类型：负载均衡器内网IP对应的端口ID。 详细内容请参考《弹性负载均衡API参考》中的“查询负载均衡详情”。  - VM类型：弹性云服务器IP地址对应的网卡ID。 详细内容请参考《弹性云服务器API参考》中的“查询云服务器网卡信息”， 详见响应消息中的“port_id”字段。  - VIP类型：虚拟资源所在物理服务器对应的网卡ID。（该字段已废弃，请优先使用LB类型） 说明： 当后端资源为“LB类型”时，仅支持修改为同类型后端资源。 例如，共享型负载均衡仅支持更换为共享型负载均衡，不支持更换为独享型负载均衡。
    * tcpProxy  用于控制将哪些信息（如客户端的源IP、源端口、marker_id等）携带到服务端。 支持携带的客户端信息包括如下两种类型：  - TCP TOA：表示将客户端信息插入到tcp option字段中携带至服务端。 说明：仅当后端资源为OBS时，支持TCP TOA类型信息携带方式。  - Proxy Protocol：表示将客户端信息插入到tcp payload字段中携带至服务端。 仅当服务端支持解析上述字段时，该参数设置才有效。 该参数的取值包括：  - close：表示关闭代理协议。  - toa_open：表示开启代理协议“tcp_toa”。  - proxy_open：表示开启代理协议“proxy_protocol”。  - open：表示同时开启代理协议“tcp_toa”和“proxy_protocol”。  - proxy_vni: 关闭toa，开启proxy和vni。 默认值为“close”。
    * description  描述字段，支持中英文字母、数字等字符，不支持“<”或“>”字符。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'approvalEnabled' => null,
        'serviceName' => null,
        'ports' => null,
        'portId' => null,
        'tcpProxy' => null,
        'description' => null
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
    * approvalEnabled  是否需要审批。  - false：不需审批，创建的终端节点连接直接为accepted状态。  - true：需审批，创建的终端节点连接需要终端节点服务所属用户审核后方可使用。 默认为true，需要审批。
    * serviceName  终端节点服务的名称，长度不大于16，允许传入大小写字母、数字、下划线、中划线。
    * ports  服务开放的端口映射列表，同一个终端节点服务下，不允许重复的端口映射。 若多个终端节点服务共用一个port_id， 则终端节点之间服务的所有端口映射的server_port和protocol的组合不能重复， 单次最多添加200个。 该参数值将被全量更新。
    * portId  标识终端节点服务后端资源的ID， 格式为通用唯一识别码（Universally UniqueIdentifier，下文简称UUID）。 取值为：  - LB类型：负载均衡器内网IP对应的端口ID。 详细内容请参考《弹性负载均衡API参考》中的“查询负载均衡详情”。  - VM类型：弹性云服务器IP地址对应的网卡ID。 详细内容请参考《弹性云服务器API参考》中的“查询云服务器网卡信息”， 详见响应消息中的“port_id”字段。  - VIP类型：虚拟资源所在物理服务器对应的网卡ID。（该字段已废弃，请优先使用LB类型） 说明： 当后端资源为“LB类型”时，仅支持修改为同类型后端资源。 例如，共享型负载均衡仅支持更换为共享型负载均衡，不支持更换为独享型负载均衡。
    * tcpProxy  用于控制将哪些信息（如客户端的源IP、源端口、marker_id等）携带到服务端。 支持携带的客户端信息包括如下两种类型：  - TCP TOA：表示将客户端信息插入到tcp option字段中携带至服务端。 说明：仅当后端资源为OBS时，支持TCP TOA类型信息携带方式。  - Proxy Protocol：表示将客户端信息插入到tcp payload字段中携带至服务端。 仅当服务端支持解析上述字段时，该参数设置才有效。 该参数的取值包括：  - close：表示关闭代理协议。  - toa_open：表示开启代理协议“tcp_toa”。  - proxy_open：表示开启代理协议“proxy_protocol”。  - open：表示同时开启代理协议“tcp_toa”和“proxy_protocol”。  - proxy_vni: 关闭toa，开启proxy和vni。 默认值为“close”。
    * description  描述字段，支持中英文字母、数字等字符，不支持“<”或“>”字符。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'approvalEnabled' => 'approval_enabled',
            'serviceName' => 'service_name',
            'ports' => 'ports',
            'portId' => 'port_id',
            'tcpProxy' => 'tcp_proxy',
            'description' => 'description'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * approvalEnabled  是否需要审批。  - false：不需审批，创建的终端节点连接直接为accepted状态。  - true：需审批，创建的终端节点连接需要终端节点服务所属用户审核后方可使用。 默认为true，需要审批。
    * serviceName  终端节点服务的名称，长度不大于16，允许传入大小写字母、数字、下划线、中划线。
    * ports  服务开放的端口映射列表，同一个终端节点服务下，不允许重复的端口映射。 若多个终端节点服务共用一个port_id， 则终端节点之间服务的所有端口映射的server_port和protocol的组合不能重复， 单次最多添加200个。 该参数值将被全量更新。
    * portId  标识终端节点服务后端资源的ID， 格式为通用唯一识别码（Universally UniqueIdentifier，下文简称UUID）。 取值为：  - LB类型：负载均衡器内网IP对应的端口ID。 详细内容请参考《弹性负载均衡API参考》中的“查询负载均衡详情”。  - VM类型：弹性云服务器IP地址对应的网卡ID。 详细内容请参考《弹性云服务器API参考》中的“查询云服务器网卡信息”， 详见响应消息中的“port_id”字段。  - VIP类型：虚拟资源所在物理服务器对应的网卡ID。（该字段已废弃，请优先使用LB类型） 说明： 当后端资源为“LB类型”时，仅支持修改为同类型后端资源。 例如，共享型负载均衡仅支持更换为共享型负载均衡，不支持更换为独享型负载均衡。
    * tcpProxy  用于控制将哪些信息（如客户端的源IP、源端口、marker_id等）携带到服务端。 支持携带的客户端信息包括如下两种类型：  - TCP TOA：表示将客户端信息插入到tcp option字段中携带至服务端。 说明：仅当后端资源为OBS时，支持TCP TOA类型信息携带方式。  - Proxy Protocol：表示将客户端信息插入到tcp payload字段中携带至服务端。 仅当服务端支持解析上述字段时，该参数设置才有效。 该参数的取值包括：  - close：表示关闭代理协议。  - toa_open：表示开启代理协议“tcp_toa”。  - proxy_open：表示开启代理协议“proxy_protocol”。  - open：表示同时开启代理协议“tcp_toa”和“proxy_protocol”。  - proxy_vni: 关闭toa，开启proxy和vni。 默认值为“close”。
    * description  描述字段，支持中英文字母、数字等字符，不支持“<”或“>”字符。
    *
    * @var string[]
    */
    protected static $setters = [
            'approvalEnabled' => 'setApprovalEnabled',
            'serviceName' => 'setServiceName',
            'ports' => 'setPorts',
            'portId' => 'setPortId',
            'tcpProxy' => 'setTcpProxy',
            'description' => 'setDescription'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * approvalEnabled  是否需要审批。  - false：不需审批，创建的终端节点连接直接为accepted状态。  - true：需审批，创建的终端节点连接需要终端节点服务所属用户审核后方可使用。 默认为true，需要审批。
    * serviceName  终端节点服务的名称，长度不大于16，允许传入大小写字母、数字、下划线、中划线。
    * ports  服务开放的端口映射列表，同一个终端节点服务下，不允许重复的端口映射。 若多个终端节点服务共用一个port_id， 则终端节点之间服务的所有端口映射的server_port和protocol的组合不能重复， 单次最多添加200个。 该参数值将被全量更新。
    * portId  标识终端节点服务后端资源的ID， 格式为通用唯一识别码（Universally UniqueIdentifier，下文简称UUID）。 取值为：  - LB类型：负载均衡器内网IP对应的端口ID。 详细内容请参考《弹性负载均衡API参考》中的“查询负载均衡详情”。  - VM类型：弹性云服务器IP地址对应的网卡ID。 详细内容请参考《弹性云服务器API参考》中的“查询云服务器网卡信息”， 详见响应消息中的“port_id”字段。  - VIP类型：虚拟资源所在物理服务器对应的网卡ID。（该字段已废弃，请优先使用LB类型） 说明： 当后端资源为“LB类型”时，仅支持修改为同类型后端资源。 例如，共享型负载均衡仅支持更换为共享型负载均衡，不支持更换为独享型负载均衡。
    * tcpProxy  用于控制将哪些信息（如客户端的源IP、源端口、marker_id等）携带到服务端。 支持携带的客户端信息包括如下两种类型：  - TCP TOA：表示将客户端信息插入到tcp option字段中携带至服务端。 说明：仅当后端资源为OBS时，支持TCP TOA类型信息携带方式。  - Proxy Protocol：表示将客户端信息插入到tcp payload字段中携带至服务端。 仅当服务端支持解析上述字段时，该参数设置才有效。 该参数的取值包括：  - close：表示关闭代理协议。  - toa_open：表示开启代理协议“tcp_toa”。  - proxy_open：表示开启代理协议“proxy_protocol”。  - open：表示同时开启代理协议“tcp_toa”和“proxy_protocol”。  - proxy_vni: 关闭toa，开启proxy和vni。 默认值为“close”。
    * description  描述字段，支持中英文字母、数字等字符，不支持“<”或“>”字符。
    *
    * @var string[]
    */
    protected static $getters = [
            'approvalEnabled' => 'getApprovalEnabled',
            'serviceName' => 'getServiceName',
            'ports' => 'getPorts',
            'portId' => 'getPortId',
            'tcpProxy' => 'getTcpProxy',
            'description' => 'getDescription'
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
        $this->container['approvalEnabled'] = isset($data['approvalEnabled']) ? $data['approvalEnabled'] : null;
        $this->container['serviceName'] = isset($data['serviceName']) ? $data['serviceName'] : null;
        $this->container['ports'] = isset($data['ports']) ? $data['ports'] : null;
        $this->container['portId'] = isset($data['portId']) ? $data['portId'] : null;
        $this->container['tcpProxy'] = isset($data['tcpProxy']) ? $data['tcpProxy'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['serviceName']) && (mb_strlen($this->container['serviceName']) > 16)) {
                $invalidProperties[] = "invalid value for 'serviceName', the character length must be smaller than or equal to 16.";
            }
            if (!is_null($this->container['serviceName']) && (mb_strlen($this->container['serviceName']) < 1)) {
                $invalidProperties[] = "invalid value for 'serviceName', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['serviceName']) && !preg_match("/^[a-zA-Z0-9_-]{1,16}$/", $this->container['serviceName'])) {
                $invalidProperties[] = "invalid value for 'serviceName', must be conform to the pattern /^[a-zA-Z0-9_-]{1,16}$/.";
            }
            if (!is_null($this->container['portId']) && (mb_strlen($this->container['portId']) > 64)) {
                $invalidProperties[] = "invalid value for 'portId', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['portId']) && (mb_strlen($this->container['portId']) < 1)) {
                $invalidProperties[] = "invalid value for 'portId', the character length must be bigger than or equal to 1.";
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
    * Gets approvalEnabled
    *  是否需要审批。  - false：不需审批，创建的终端节点连接直接为accepted状态。  - true：需审批，创建的终端节点连接需要终端节点服务所属用户审核后方可使用。 默认为true，需要审批。
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
    * @param bool|null $approvalEnabled 是否需要审批。  - false：不需审批，创建的终端节点连接直接为accepted状态。  - true：需审批，创建的终端节点连接需要终端节点服务所属用户审核后方可使用。 默认为true，需要审批。
    *
    * @return $this
    */
    public function setApprovalEnabled($approvalEnabled)
    {
        $this->container['approvalEnabled'] = $approvalEnabled;
        return $this;
    }

    /**
    * Gets serviceName
    *  终端节点服务的名称，长度不大于16，允许传入大小写字母、数字、下划线、中划线。
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
    * @param string|null $serviceName 终端节点服务的名称，长度不大于16，允许传入大小写字母、数字、下划线、中划线。
    *
    * @return $this
    */
    public function setServiceName($serviceName)
    {
        $this->container['serviceName'] = $serviceName;
        return $this;
    }

    /**
    * Gets ports
    *  服务开放的端口映射列表，同一个终端节点服务下，不允许重复的端口映射。 若多个终端节点服务共用一个port_id， 则终端节点之间服务的所有端口映射的server_port和protocol的组合不能重复， 单次最多添加200个。 该参数值将被全量更新。
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
    * @param \HuaweiCloud\SDK\Vpcep\V1\Model\PortList[]|null $ports 服务开放的端口映射列表，同一个终端节点服务下，不允许重复的端口映射。 若多个终端节点服务共用一个port_id， 则终端节点之间服务的所有端口映射的server_port和protocol的组合不能重复， 单次最多添加200个。 该参数值将被全量更新。
    *
    * @return $this
    */
    public function setPorts($ports)
    {
        $this->container['ports'] = $ports;
        return $this;
    }

    /**
    * Gets portId
    *  标识终端节点服务后端资源的ID， 格式为通用唯一识别码（Universally UniqueIdentifier，下文简称UUID）。 取值为：  - LB类型：负载均衡器内网IP对应的端口ID。 详细内容请参考《弹性负载均衡API参考》中的“查询负载均衡详情”。  - VM类型：弹性云服务器IP地址对应的网卡ID。 详细内容请参考《弹性云服务器API参考》中的“查询云服务器网卡信息”， 详见响应消息中的“port_id”字段。  - VIP类型：虚拟资源所在物理服务器对应的网卡ID。（该字段已废弃，请优先使用LB类型） 说明： 当后端资源为“LB类型”时，仅支持修改为同类型后端资源。 例如，共享型负载均衡仅支持更换为共享型负载均衡，不支持更换为独享型负载均衡。
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
    * @param string|null $portId 标识终端节点服务后端资源的ID， 格式为通用唯一识别码（Universally UniqueIdentifier，下文简称UUID）。 取值为：  - LB类型：负载均衡器内网IP对应的端口ID。 详细内容请参考《弹性负载均衡API参考》中的“查询负载均衡详情”。  - VM类型：弹性云服务器IP地址对应的网卡ID。 详细内容请参考《弹性云服务器API参考》中的“查询云服务器网卡信息”， 详见响应消息中的“port_id”字段。  - VIP类型：虚拟资源所在物理服务器对应的网卡ID。（该字段已废弃，请优先使用LB类型） 说明： 当后端资源为“LB类型”时，仅支持修改为同类型后端资源。 例如，共享型负载均衡仅支持更换为共享型负载均衡，不支持更换为独享型负载均衡。
    *
    * @return $this
    */
    public function setPortId($portId)
    {
        $this->container['portId'] = $portId;
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

