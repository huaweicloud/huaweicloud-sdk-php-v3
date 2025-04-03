<?php

namespace HuaweiCloud\SDK\Cce\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class AutopilotClusterSpec implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'AutopilotClusterSpec';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * category  集群类别。
    * type  集群Master节点架构：  - VirtualMachine：Master节点为x86架构服务器
    * flavor  集群规格，cce.autopilot.cluster
    * version  集群版本，与Kubernetes社区基线版本保持一致，建议选择最新版本。  在CCE控制台支持创建两种最新版本的集群。可登录CCE控制台创建集群，在“版本”处获取到集群版本。 其它集群版本，当前仍可通过api创建，但后续会逐渐下线，具体下线策略请关注CCE官方公告。  >    - 若不配置，默认创建最新版本的集群。
    * platformVersion  CCE集群平台版本号，表示集群版本(version)下的内部版本。用于跟踪某一集群版本内的迭代，集群版本内唯一，跨集群版本重新计数。不支持用户指定，集群创建时自动选择对应集群版本的最新平台版本。  platformVersion格式为：cce.X.Y - X: 表示内部特性版本。集群版本中特性或者补丁修复，或者OS支持等变更场景。其值从1开始单调递增。 - Y: 表示内部特性版本的补丁版本。仅用于特性版本上线后的软件包更新，不涉及其他修改。其值从0开始单调递增。
    * description  集群描述，对于集群使用目的的描述，可根据实际情况自定义，默认为空。集群创建成功后可通过接口[更新指定的集群](cce_02_0240.xml)来做出修改，也可在CCE控制台中对应集群的“集群详情”下的“描述”处进行修改。仅支持utf-8编码。
    * customSan  集群的API Server服务端证书中的自定义SAN（Subject Alternative Name）字段，遵从SSL标准X509定义的格式规范。  1. 不允许出现同名重复。 2. 格式符合IP和域名格式。  示例: ``` SAN 1: DNS Name=example.com SAN 2: DNS Name=www.example.com SAN 3: DNS Name=example.net SAN 4: IP Address=93.184.216.34 ```
    * enableSnat  集群是否配置SNAT。开启后您的集群可以通过NAT网关访问公网，默认使用所选的VPC中已有的NAT网关，否则系统将会为您自动创建一个默认规格的NAT网关并绑定弹性公网IP，自动配置SNAT规则。
    * enableSwrImageAccess  集群是否配置镜像访问。为确保您的集群节点可以从容器镜像服务中拉取镜像，默认使用所选VPC中已有的SWR和OBS终端节点，否则将会为您自动新建SWR和OBS终端节点。
    * ipv6enable  集群是否使用IPv6模式。
    * hostNetwork  hostNetwork
    * containerNetwork  containerNetwork
    * eniNetwork  eniNetwork
    * serviceNetwork  serviceNetwork
    * authentication  authentication
    * billingMode  集群的计费方式。 - 0: 按需计费  默认为“按需计费”。
    * kubernetesSvcIpRange  服务网段参数，kubernetes clusterIP取值范围。创建集群时如若未传参，默认为\"10.247.0.0/16\"。该参数废弃中，推荐使用新字段serviceNetwork，包含IPv4服务网段。
    * clusterTags  集群资源标签
    * kubeProxyMode  服务转发模式：  - iptables：社区传统的kube-proxy模式，完全以iptables规则的方式来实现service负载均衡。该方式最主要的问题是在服务多的时候产生太多的iptables规则，非增量式更新会引入一定的时延，大规模情况下有明显的性能问题。  > 默认使用iptables转发模式。
    * az  可用区（仅查询返回字段）。  [CCE支持的可用区请参考[地区和终端节点](https://developer.huaweicloud.com/endpoint?CCE)](tag:hws)  [CCE支持的可用区请参考[地区和终端节点](https://developer.huaweicloud.com/intl/zh-cn/endpoint?CCE)](tag:hws_hk)
    * extendParam  extendParam
    * configurationsOverride  覆盖集群默认组件配置  若指定了不支持的组件或组件不支持的参数，该配置项将被忽略。  当前支持的可配置组件及其参数详见 [[配置管理](https://support.huaweicloud.com/usermanual-cce/cce_10_0213.html)](tag:hws) [[配置管理](https://support.huaweicloud.com/intl/zh-cn/usermanual-cce/cce_10_0213.html)](tag:hws_hk)
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'category' => 'string',
            'type' => 'string',
            'flavor' => 'string',
            'version' => 'string',
            'platformVersion' => 'string',
            'description' => 'string',
            'customSan' => 'string[]',
            'enableSnat' => 'bool',
            'enableSwrImageAccess' => 'bool',
            'ipv6enable' => 'bool',
            'hostNetwork' => '\HuaweiCloud\SDK\Cce\V3\Model\AutopilotHostNetwork',
            'containerNetwork' => '\HuaweiCloud\SDK\Cce\V3\Model\AutopilotContainerNetwork',
            'eniNetwork' => '\HuaweiCloud\SDK\Cce\V3\Model\AutopilotEniNetwork',
            'serviceNetwork' => '\HuaweiCloud\SDK\Cce\V3\Model\AutopilotServiceNetwork',
            'authentication' => '\HuaweiCloud\SDK\Cce\V3\Model\AutopilotAuthentication',
            'billingMode' => 'int',
            'kubernetesSvcIpRange' => 'string',
            'clusterTags' => '\HuaweiCloud\SDK\Cce\V3\Model\AutopilotResourceTag[]',
            'kubeProxyMode' => 'string',
            'az' => 'string',
            'extendParam' => '\HuaweiCloud\SDK\Cce\V3\Model\AutopilotClusterExtendParam',
            'configurationsOverride' => '\HuaweiCloud\SDK\Cce\V3\Model\AutopilotPackageConfiguration[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * category  集群类别。
    * type  集群Master节点架构：  - VirtualMachine：Master节点为x86架构服务器
    * flavor  集群规格，cce.autopilot.cluster
    * version  集群版本，与Kubernetes社区基线版本保持一致，建议选择最新版本。  在CCE控制台支持创建两种最新版本的集群。可登录CCE控制台创建集群，在“版本”处获取到集群版本。 其它集群版本，当前仍可通过api创建，但后续会逐渐下线，具体下线策略请关注CCE官方公告。  >    - 若不配置，默认创建最新版本的集群。
    * platformVersion  CCE集群平台版本号，表示集群版本(version)下的内部版本。用于跟踪某一集群版本内的迭代，集群版本内唯一，跨集群版本重新计数。不支持用户指定，集群创建时自动选择对应集群版本的最新平台版本。  platformVersion格式为：cce.X.Y - X: 表示内部特性版本。集群版本中特性或者补丁修复，或者OS支持等变更场景。其值从1开始单调递增。 - Y: 表示内部特性版本的补丁版本。仅用于特性版本上线后的软件包更新，不涉及其他修改。其值从0开始单调递增。
    * description  集群描述，对于集群使用目的的描述，可根据实际情况自定义，默认为空。集群创建成功后可通过接口[更新指定的集群](cce_02_0240.xml)来做出修改，也可在CCE控制台中对应集群的“集群详情”下的“描述”处进行修改。仅支持utf-8编码。
    * customSan  集群的API Server服务端证书中的自定义SAN（Subject Alternative Name）字段，遵从SSL标准X509定义的格式规范。  1. 不允许出现同名重复。 2. 格式符合IP和域名格式。  示例: ``` SAN 1: DNS Name=example.com SAN 2: DNS Name=www.example.com SAN 3: DNS Name=example.net SAN 4: IP Address=93.184.216.34 ```
    * enableSnat  集群是否配置SNAT。开启后您的集群可以通过NAT网关访问公网，默认使用所选的VPC中已有的NAT网关，否则系统将会为您自动创建一个默认规格的NAT网关并绑定弹性公网IP，自动配置SNAT规则。
    * enableSwrImageAccess  集群是否配置镜像访问。为确保您的集群节点可以从容器镜像服务中拉取镜像，默认使用所选VPC中已有的SWR和OBS终端节点，否则将会为您自动新建SWR和OBS终端节点。
    * ipv6enable  集群是否使用IPv6模式。
    * hostNetwork  hostNetwork
    * containerNetwork  containerNetwork
    * eniNetwork  eniNetwork
    * serviceNetwork  serviceNetwork
    * authentication  authentication
    * billingMode  集群的计费方式。 - 0: 按需计费  默认为“按需计费”。
    * kubernetesSvcIpRange  服务网段参数，kubernetes clusterIP取值范围。创建集群时如若未传参，默认为\"10.247.0.0/16\"。该参数废弃中，推荐使用新字段serviceNetwork，包含IPv4服务网段。
    * clusterTags  集群资源标签
    * kubeProxyMode  服务转发模式：  - iptables：社区传统的kube-proxy模式，完全以iptables规则的方式来实现service负载均衡。该方式最主要的问题是在服务多的时候产生太多的iptables规则，非增量式更新会引入一定的时延，大规模情况下有明显的性能问题。  > 默认使用iptables转发模式。
    * az  可用区（仅查询返回字段）。  [CCE支持的可用区请参考[地区和终端节点](https://developer.huaweicloud.com/endpoint?CCE)](tag:hws)  [CCE支持的可用区请参考[地区和终端节点](https://developer.huaweicloud.com/intl/zh-cn/endpoint?CCE)](tag:hws_hk)
    * extendParam  extendParam
    * configurationsOverride  覆盖集群默认组件配置  若指定了不支持的组件或组件不支持的参数，该配置项将被忽略。  当前支持的可配置组件及其参数详见 [[配置管理](https://support.huaweicloud.com/usermanual-cce/cce_10_0213.html)](tag:hws) [[配置管理](https://support.huaweicloud.com/intl/zh-cn/usermanual-cce/cce_10_0213.html)](tag:hws_hk)
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'category' => null,
        'type' => null,
        'flavor' => null,
        'version' => null,
        'platformVersion' => null,
        'description' => null,
        'customSan' => null,
        'enableSnat' => null,
        'enableSwrImageAccess' => null,
        'ipv6enable' => null,
        'hostNetwork' => null,
        'containerNetwork' => null,
        'eniNetwork' => null,
        'serviceNetwork' => null,
        'authentication' => null,
        'billingMode' => 'int32',
        'kubernetesSvcIpRange' => null,
        'clusterTags' => null,
        'kubeProxyMode' => null,
        'az' => null,
        'extendParam' => null,
        'configurationsOverride' => null
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
    * category  集群类别。
    * type  集群Master节点架构：  - VirtualMachine：Master节点为x86架构服务器
    * flavor  集群规格，cce.autopilot.cluster
    * version  集群版本，与Kubernetes社区基线版本保持一致，建议选择最新版本。  在CCE控制台支持创建两种最新版本的集群。可登录CCE控制台创建集群，在“版本”处获取到集群版本。 其它集群版本，当前仍可通过api创建，但后续会逐渐下线，具体下线策略请关注CCE官方公告。  >    - 若不配置，默认创建最新版本的集群。
    * platformVersion  CCE集群平台版本号，表示集群版本(version)下的内部版本。用于跟踪某一集群版本内的迭代，集群版本内唯一，跨集群版本重新计数。不支持用户指定，集群创建时自动选择对应集群版本的最新平台版本。  platformVersion格式为：cce.X.Y - X: 表示内部特性版本。集群版本中特性或者补丁修复，或者OS支持等变更场景。其值从1开始单调递增。 - Y: 表示内部特性版本的补丁版本。仅用于特性版本上线后的软件包更新，不涉及其他修改。其值从0开始单调递增。
    * description  集群描述，对于集群使用目的的描述，可根据实际情况自定义，默认为空。集群创建成功后可通过接口[更新指定的集群](cce_02_0240.xml)来做出修改，也可在CCE控制台中对应集群的“集群详情”下的“描述”处进行修改。仅支持utf-8编码。
    * customSan  集群的API Server服务端证书中的自定义SAN（Subject Alternative Name）字段，遵从SSL标准X509定义的格式规范。  1. 不允许出现同名重复。 2. 格式符合IP和域名格式。  示例: ``` SAN 1: DNS Name=example.com SAN 2: DNS Name=www.example.com SAN 3: DNS Name=example.net SAN 4: IP Address=93.184.216.34 ```
    * enableSnat  集群是否配置SNAT。开启后您的集群可以通过NAT网关访问公网，默认使用所选的VPC中已有的NAT网关，否则系统将会为您自动创建一个默认规格的NAT网关并绑定弹性公网IP，自动配置SNAT规则。
    * enableSwrImageAccess  集群是否配置镜像访问。为确保您的集群节点可以从容器镜像服务中拉取镜像，默认使用所选VPC中已有的SWR和OBS终端节点，否则将会为您自动新建SWR和OBS终端节点。
    * ipv6enable  集群是否使用IPv6模式。
    * hostNetwork  hostNetwork
    * containerNetwork  containerNetwork
    * eniNetwork  eniNetwork
    * serviceNetwork  serviceNetwork
    * authentication  authentication
    * billingMode  集群的计费方式。 - 0: 按需计费  默认为“按需计费”。
    * kubernetesSvcIpRange  服务网段参数，kubernetes clusterIP取值范围。创建集群时如若未传参，默认为\"10.247.0.0/16\"。该参数废弃中，推荐使用新字段serviceNetwork，包含IPv4服务网段。
    * clusterTags  集群资源标签
    * kubeProxyMode  服务转发模式：  - iptables：社区传统的kube-proxy模式，完全以iptables规则的方式来实现service负载均衡。该方式最主要的问题是在服务多的时候产生太多的iptables规则，非增量式更新会引入一定的时延，大规模情况下有明显的性能问题。  > 默认使用iptables转发模式。
    * az  可用区（仅查询返回字段）。  [CCE支持的可用区请参考[地区和终端节点](https://developer.huaweicloud.com/endpoint?CCE)](tag:hws)  [CCE支持的可用区请参考[地区和终端节点](https://developer.huaweicloud.com/intl/zh-cn/endpoint?CCE)](tag:hws_hk)
    * extendParam  extendParam
    * configurationsOverride  覆盖集群默认组件配置  若指定了不支持的组件或组件不支持的参数，该配置项将被忽略。  当前支持的可配置组件及其参数详见 [[配置管理](https://support.huaweicloud.com/usermanual-cce/cce_10_0213.html)](tag:hws) [[配置管理](https://support.huaweicloud.com/intl/zh-cn/usermanual-cce/cce_10_0213.html)](tag:hws_hk)
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'category' => 'category',
            'type' => 'type',
            'flavor' => 'flavor',
            'version' => 'version',
            'platformVersion' => 'platformVersion',
            'description' => 'description',
            'customSan' => 'customSan',
            'enableSnat' => 'enableSnat',
            'enableSwrImageAccess' => 'enableSWRImageAccess',
            'ipv6enable' => 'ipv6enable',
            'hostNetwork' => 'hostNetwork',
            'containerNetwork' => 'containerNetwork',
            'eniNetwork' => 'eniNetwork',
            'serviceNetwork' => 'serviceNetwork',
            'authentication' => 'authentication',
            'billingMode' => 'billingMode',
            'kubernetesSvcIpRange' => 'kubernetesSvcIpRange',
            'clusterTags' => 'clusterTags',
            'kubeProxyMode' => 'kubeProxyMode',
            'az' => 'az',
            'extendParam' => 'extendParam',
            'configurationsOverride' => 'configurationsOverride'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * category  集群类别。
    * type  集群Master节点架构：  - VirtualMachine：Master节点为x86架构服务器
    * flavor  集群规格，cce.autopilot.cluster
    * version  集群版本，与Kubernetes社区基线版本保持一致，建议选择最新版本。  在CCE控制台支持创建两种最新版本的集群。可登录CCE控制台创建集群，在“版本”处获取到集群版本。 其它集群版本，当前仍可通过api创建，但后续会逐渐下线，具体下线策略请关注CCE官方公告。  >    - 若不配置，默认创建最新版本的集群。
    * platformVersion  CCE集群平台版本号，表示集群版本(version)下的内部版本。用于跟踪某一集群版本内的迭代，集群版本内唯一，跨集群版本重新计数。不支持用户指定，集群创建时自动选择对应集群版本的最新平台版本。  platformVersion格式为：cce.X.Y - X: 表示内部特性版本。集群版本中特性或者补丁修复，或者OS支持等变更场景。其值从1开始单调递增。 - Y: 表示内部特性版本的补丁版本。仅用于特性版本上线后的软件包更新，不涉及其他修改。其值从0开始单调递增。
    * description  集群描述，对于集群使用目的的描述，可根据实际情况自定义，默认为空。集群创建成功后可通过接口[更新指定的集群](cce_02_0240.xml)来做出修改，也可在CCE控制台中对应集群的“集群详情”下的“描述”处进行修改。仅支持utf-8编码。
    * customSan  集群的API Server服务端证书中的自定义SAN（Subject Alternative Name）字段，遵从SSL标准X509定义的格式规范。  1. 不允许出现同名重复。 2. 格式符合IP和域名格式。  示例: ``` SAN 1: DNS Name=example.com SAN 2: DNS Name=www.example.com SAN 3: DNS Name=example.net SAN 4: IP Address=93.184.216.34 ```
    * enableSnat  集群是否配置SNAT。开启后您的集群可以通过NAT网关访问公网，默认使用所选的VPC中已有的NAT网关，否则系统将会为您自动创建一个默认规格的NAT网关并绑定弹性公网IP，自动配置SNAT规则。
    * enableSwrImageAccess  集群是否配置镜像访问。为确保您的集群节点可以从容器镜像服务中拉取镜像，默认使用所选VPC中已有的SWR和OBS终端节点，否则将会为您自动新建SWR和OBS终端节点。
    * ipv6enable  集群是否使用IPv6模式。
    * hostNetwork  hostNetwork
    * containerNetwork  containerNetwork
    * eniNetwork  eniNetwork
    * serviceNetwork  serviceNetwork
    * authentication  authentication
    * billingMode  集群的计费方式。 - 0: 按需计费  默认为“按需计费”。
    * kubernetesSvcIpRange  服务网段参数，kubernetes clusterIP取值范围。创建集群时如若未传参，默认为\"10.247.0.0/16\"。该参数废弃中，推荐使用新字段serviceNetwork，包含IPv4服务网段。
    * clusterTags  集群资源标签
    * kubeProxyMode  服务转发模式：  - iptables：社区传统的kube-proxy模式，完全以iptables规则的方式来实现service负载均衡。该方式最主要的问题是在服务多的时候产生太多的iptables规则，非增量式更新会引入一定的时延，大规模情况下有明显的性能问题。  > 默认使用iptables转发模式。
    * az  可用区（仅查询返回字段）。  [CCE支持的可用区请参考[地区和终端节点](https://developer.huaweicloud.com/endpoint?CCE)](tag:hws)  [CCE支持的可用区请参考[地区和终端节点](https://developer.huaweicloud.com/intl/zh-cn/endpoint?CCE)](tag:hws_hk)
    * extendParam  extendParam
    * configurationsOverride  覆盖集群默认组件配置  若指定了不支持的组件或组件不支持的参数，该配置项将被忽略。  当前支持的可配置组件及其参数详见 [[配置管理](https://support.huaweicloud.com/usermanual-cce/cce_10_0213.html)](tag:hws) [[配置管理](https://support.huaweicloud.com/intl/zh-cn/usermanual-cce/cce_10_0213.html)](tag:hws_hk)
    *
    * @var string[]
    */
    protected static $setters = [
            'category' => 'setCategory',
            'type' => 'setType',
            'flavor' => 'setFlavor',
            'version' => 'setVersion',
            'platformVersion' => 'setPlatformVersion',
            'description' => 'setDescription',
            'customSan' => 'setCustomSan',
            'enableSnat' => 'setEnableSnat',
            'enableSwrImageAccess' => 'setEnableSwrImageAccess',
            'ipv6enable' => 'setIpv6enable',
            'hostNetwork' => 'setHostNetwork',
            'containerNetwork' => 'setContainerNetwork',
            'eniNetwork' => 'setEniNetwork',
            'serviceNetwork' => 'setServiceNetwork',
            'authentication' => 'setAuthentication',
            'billingMode' => 'setBillingMode',
            'kubernetesSvcIpRange' => 'setKubernetesSvcIpRange',
            'clusterTags' => 'setClusterTags',
            'kubeProxyMode' => 'setKubeProxyMode',
            'az' => 'setAz',
            'extendParam' => 'setExtendParam',
            'configurationsOverride' => 'setConfigurationsOverride'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * category  集群类别。
    * type  集群Master节点架构：  - VirtualMachine：Master节点为x86架构服务器
    * flavor  集群规格，cce.autopilot.cluster
    * version  集群版本，与Kubernetes社区基线版本保持一致，建议选择最新版本。  在CCE控制台支持创建两种最新版本的集群。可登录CCE控制台创建集群，在“版本”处获取到集群版本。 其它集群版本，当前仍可通过api创建，但后续会逐渐下线，具体下线策略请关注CCE官方公告。  >    - 若不配置，默认创建最新版本的集群。
    * platformVersion  CCE集群平台版本号，表示集群版本(version)下的内部版本。用于跟踪某一集群版本内的迭代，集群版本内唯一，跨集群版本重新计数。不支持用户指定，集群创建时自动选择对应集群版本的最新平台版本。  platformVersion格式为：cce.X.Y - X: 表示内部特性版本。集群版本中特性或者补丁修复，或者OS支持等变更场景。其值从1开始单调递增。 - Y: 表示内部特性版本的补丁版本。仅用于特性版本上线后的软件包更新，不涉及其他修改。其值从0开始单调递增。
    * description  集群描述，对于集群使用目的的描述，可根据实际情况自定义，默认为空。集群创建成功后可通过接口[更新指定的集群](cce_02_0240.xml)来做出修改，也可在CCE控制台中对应集群的“集群详情”下的“描述”处进行修改。仅支持utf-8编码。
    * customSan  集群的API Server服务端证书中的自定义SAN（Subject Alternative Name）字段，遵从SSL标准X509定义的格式规范。  1. 不允许出现同名重复。 2. 格式符合IP和域名格式。  示例: ``` SAN 1: DNS Name=example.com SAN 2: DNS Name=www.example.com SAN 3: DNS Name=example.net SAN 4: IP Address=93.184.216.34 ```
    * enableSnat  集群是否配置SNAT。开启后您的集群可以通过NAT网关访问公网，默认使用所选的VPC中已有的NAT网关，否则系统将会为您自动创建一个默认规格的NAT网关并绑定弹性公网IP，自动配置SNAT规则。
    * enableSwrImageAccess  集群是否配置镜像访问。为确保您的集群节点可以从容器镜像服务中拉取镜像，默认使用所选VPC中已有的SWR和OBS终端节点，否则将会为您自动新建SWR和OBS终端节点。
    * ipv6enable  集群是否使用IPv6模式。
    * hostNetwork  hostNetwork
    * containerNetwork  containerNetwork
    * eniNetwork  eniNetwork
    * serviceNetwork  serviceNetwork
    * authentication  authentication
    * billingMode  集群的计费方式。 - 0: 按需计费  默认为“按需计费”。
    * kubernetesSvcIpRange  服务网段参数，kubernetes clusterIP取值范围。创建集群时如若未传参，默认为\"10.247.0.0/16\"。该参数废弃中，推荐使用新字段serviceNetwork，包含IPv4服务网段。
    * clusterTags  集群资源标签
    * kubeProxyMode  服务转发模式：  - iptables：社区传统的kube-proxy模式，完全以iptables规则的方式来实现service负载均衡。该方式最主要的问题是在服务多的时候产生太多的iptables规则，非增量式更新会引入一定的时延，大规模情况下有明显的性能问题。  > 默认使用iptables转发模式。
    * az  可用区（仅查询返回字段）。  [CCE支持的可用区请参考[地区和终端节点](https://developer.huaweicloud.com/endpoint?CCE)](tag:hws)  [CCE支持的可用区请参考[地区和终端节点](https://developer.huaweicloud.com/intl/zh-cn/endpoint?CCE)](tag:hws_hk)
    * extendParam  extendParam
    * configurationsOverride  覆盖集群默认组件配置  若指定了不支持的组件或组件不支持的参数，该配置项将被忽略。  当前支持的可配置组件及其参数详见 [[配置管理](https://support.huaweicloud.com/usermanual-cce/cce_10_0213.html)](tag:hws) [[配置管理](https://support.huaweicloud.com/intl/zh-cn/usermanual-cce/cce_10_0213.html)](tag:hws_hk)
    *
    * @var string[]
    */
    protected static $getters = [
            'category' => 'getCategory',
            'type' => 'getType',
            'flavor' => 'getFlavor',
            'version' => 'getVersion',
            'platformVersion' => 'getPlatformVersion',
            'description' => 'getDescription',
            'customSan' => 'getCustomSan',
            'enableSnat' => 'getEnableSnat',
            'enableSwrImageAccess' => 'getEnableSwrImageAccess',
            'ipv6enable' => 'getIpv6enable',
            'hostNetwork' => 'getHostNetwork',
            'containerNetwork' => 'getContainerNetwork',
            'eniNetwork' => 'getEniNetwork',
            'serviceNetwork' => 'getServiceNetwork',
            'authentication' => 'getAuthentication',
            'billingMode' => 'getBillingMode',
            'kubernetesSvcIpRange' => 'getKubernetesSvcIpRange',
            'clusterTags' => 'getClusterTags',
            'kubeProxyMode' => 'getKubeProxyMode',
            'az' => 'getAz',
            'extendParam' => 'getExtendParam',
            'configurationsOverride' => 'getConfigurationsOverride'
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
    const CATEGORY_TURBO = 'Turbo';
    const TYPE_VIRTUAL_MACHINE = 'VirtualMachine';
    const KUBE_PROXY_MODE_IPTABLES = 'iptables';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getCategoryAllowableValues()
    {
        return [
            self::CATEGORY_TURBO,
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
            self::TYPE_VIRTUAL_MACHINE,
        ];
    }

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getKubeProxyModeAllowableValues()
    {
        return [
            self::KUBE_PROXY_MODE_IPTABLES,
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
        $this->container['category'] = isset($data['category']) ? $data['category'] : null;
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        $this->container['flavor'] = isset($data['flavor']) ? $data['flavor'] : null;
        $this->container['version'] = isset($data['version']) ? $data['version'] : null;
        $this->container['platformVersion'] = isset($data['platformVersion']) ? $data['platformVersion'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['customSan'] = isset($data['customSan']) ? $data['customSan'] : null;
        $this->container['enableSnat'] = isset($data['enableSnat']) ? $data['enableSnat'] : null;
        $this->container['enableSwrImageAccess'] = isset($data['enableSwrImageAccess']) ? $data['enableSwrImageAccess'] : null;
        $this->container['ipv6enable'] = isset($data['ipv6enable']) ? $data['ipv6enable'] : null;
        $this->container['hostNetwork'] = isset($data['hostNetwork']) ? $data['hostNetwork'] : null;
        $this->container['containerNetwork'] = isset($data['containerNetwork']) ? $data['containerNetwork'] : null;
        $this->container['eniNetwork'] = isset($data['eniNetwork']) ? $data['eniNetwork'] : null;
        $this->container['serviceNetwork'] = isset($data['serviceNetwork']) ? $data['serviceNetwork'] : null;
        $this->container['authentication'] = isset($data['authentication']) ? $data['authentication'] : null;
        $this->container['billingMode'] = isset($data['billingMode']) ? $data['billingMode'] : null;
        $this->container['kubernetesSvcIpRange'] = isset($data['kubernetesSvcIpRange']) ? $data['kubernetesSvcIpRange'] : null;
        $this->container['clusterTags'] = isset($data['clusterTags']) ? $data['clusterTags'] : null;
        $this->container['kubeProxyMode'] = isset($data['kubeProxyMode']) ? $data['kubeProxyMode'] : null;
        $this->container['az'] = isset($data['az']) ? $data['az'] : null;
        $this->container['extendParam'] = isset($data['extendParam']) ? $data['extendParam'] : null;
        $this->container['configurationsOverride'] = isset($data['configurationsOverride']) ? $data['configurationsOverride'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            $allowedValues = $this->getCategoryAllowableValues();
                if (!is_null($this->container['category']) && !in_array($this->container['category'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'category', must be one of '%s'",
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

        if ($this->container['flavor'] === null) {
            $invalidProperties[] = "'flavor' can't be null";
        }
            if (!is_null($this->container['description']) && (mb_strlen($this->container['description']) > 200)) {
                $invalidProperties[] = "invalid value for 'description', the character length must be smaller than or equal to 200.";
            }
            if (!is_null($this->container['description']) && (mb_strlen($this->container['description']) < 0)) {
                $invalidProperties[] = "invalid value for 'description', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['description']) && !preg_match("/[\\~\\$\\%\\^\\&\\*\\<\\>\\[\\]\\{\\}\\(\\)\\'\\\"\\#\\\\]/", $this->container['description'])) {
                $invalidProperties[] = "invalid value for 'description', must be conform to the pattern /[\\~\\$\\%\\^\\&\\*\\<\\>\\[\\]\\{\\}\\(\\)\\'\\\"\\#\\\\]/.";
            }
        if ($this->container['hostNetwork'] === null) {
            $invalidProperties[] = "'hostNetwork' can't be null";
        }
        if ($this->container['containerNetwork'] === null) {
            $invalidProperties[] = "'containerNetwork' can't be null";
        }
            $allowedValues = $this->getKubeProxyModeAllowableValues();
                if (!is_null($this->container['kubeProxyMode']) && !in_array($this->container['kubeProxyMode'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'kubeProxyMode', must be one of '%s'",
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
    * Gets category
    *  集群类别。
    *
    * @return string|null
    */
    public function getCategory()
    {
        return $this->container['category'];
    }

    /**
    * Sets category
    *
    * @param string|null $category 集群类别。
    *
    * @return $this
    */
    public function setCategory($category)
    {
        $this->container['category'] = $category;
        return $this;
    }

    /**
    * Gets type
    *  集群Master节点架构：  - VirtualMachine：Master节点为x86架构服务器
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
    * @param string|null $type 集群Master节点架构：  - VirtualMachine：Master节点为x86架构服务器
    *
    * @return $this
    */
    public function setType($type)
    {
        $this->container['type'] = $type;
        return $this;
    }

    /**
    * Gets flavor
    *  集群规格，cce.autopilot.cluster
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
    * @param string $flavor 集群规格，cce.autopilot.cluster
    *
    * @return $this
    */
    public function setFlavor($flavor)
    {
        $this->container['flavor'] = $flavor;
        return $this;
    }

    /**
    * Gets version
    *  集群版本，与Kubernetes社区基线版本保持一致，建议选择最新版本。  在CCE控制台支持创建两种最新版本的集群。可登录CCE控制台创建集群，在“版本”处获取到集群版本。 其它集群版本，当前仍可通过api创建，但后续会逐渐下线，具体下线策略请关注CCE官方公告。  >    - 若不配置，默认创建最新版本的集群。
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
    * @param string|null $version 集群版本，与Kubernetes社区基线版本保持一致，建议选择最新版本。  在CCE控制台支持创建两种最新版本的集群。可登录CCE控制台创建集群，在“版本”处获取到集群版本。 其它集群版本，当前仍可通过api创建，但后续会逐渐下线，具体下线策略请关注CCE官方公告。  >    - 若不配置，默认创建最新版本的集群。
    *
    * @return $this
    */
    public function setVersion($version)
    {
        $this->container['version'] = $version;
        return $this;
    }

    /**
    * Gets platformVersion
    *  CCE集群平台版本号，表示集群版本(version)下的内部版本。用于跟踪某一集群版本内的迭代，集群版本内唯一，跨集群版本重新计数。不支持用户指定，集群创建时自动选择对应集群版本的最新平台版本。  platformVersion格式为：cce.X.Y - X: 表示内部特性版本。集群版本中特性或者补丁修复，或者OS支持等变更场景。其值从1开始单调递增。 - Y: 表示内部特性版本的补丁版本。仅用于特性版本上线后的软件包更新，不涉及其他修改。其值从0开始单调递增。
    *
    * @return string|null
    */
    public function getPlatformVersion()
    {
        return $this->container['platformVersion'];
    }

    /**
    * Sets platformVersion
    *
    * @param string|null $platformVersion CCE集群平台版本号，表示集群版本(version)下的内部版本。用于跟踪某一集群版本内的迭代，集群版本内唯一，跨集群版本重新计数。不支持用户指定，集群创建时自动选择对应集群版本的最新平台版本。  platformVersion格式为：cce.X.Y - X: 表示内部特性版本。集群版本中特性或者补丁修复，或者OS支持等变更场景。其值从1开始单调递增。 - Y: 表示内部特性版本的补丁版本。仅用于特性版本上线后的软件包更新，不涉及其他修改。其值从0开始单调递增。
    *
    * @return $this
    */
    public function setPlatformVersion($platformVersion)
    {
        $this->container['platformVersion'] = $platformVersion;
        return $this;
    }

    /**
    * Gets description
    *  集群描述，对于集群使用目的的描述，可根据实际情况自定义，默认为空。集群创建成功后可通过接口[更新指定的集群](cce_02_0240.xml)来做出修改，也可在CCE控制台中对应集群的“集群详情”下的“描述”处进行修改。仅支持utf-8编码。
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
    * @param string|null $description 集群描述，对于集群使用目的的描述，可根据实际情况自定义，默认为空。集群创建成功后可通过接口[更新指定的集群](cce_02_0240.xml)来做出修改，也可在CCE控制台中对应集群的“集群详情”下的“描述”处进行修改。仅支持utf-8编码。
    *
    * @return $this
    */
    public function setDescription($description)
    {
        $this->container['description'] = $description;
        return $this;
    }

    /**
    * Gets customSan
    *  集群的API Server服务端证书中的自定义SAN（Subject Alternative Name）字段，遵从SSL标准X509定义的格式规范。  1. 不允许出现同名重复。 2. 格式符合IP和域名格式。  示例: ``` SAN 1: DNS Name=example.com SAN 2: DNS Name=www.example.com SAN 3: DNS Name=example.net SAN 4: IP Address=93.184.216.34 ```
    *
    * @return string[]|null
    */
    public function getCustomSan()
    {
        return $this->container['customSan'];
    }

    /**
    * Sets customSan
    *
    * @param string[]|null $customSan 集群的API Server服务端证书中的自定义SAN（Subject Alternative Name）字段，遵从SSL标准X509定义的格式规范。  1. 不允许出现同名重复。 2. 格式符合IP和域名格式。  示例: ``` SAN 1: DNS Name=example.com SAN 2: DNS Name=www.example.com SAN 3: DNS Name=example.net SAN 4: IP Address=93.184.216.34 ```
    *
    * @return $this
    */
    public function setCustomSan($customSan)
    {
        $this->container['customSan'] = $customSan;
        return $this;
    }

    /**
    * Gets enableSnat
    *  集群是否配置SNAT。开启后您的集群可以通过NAT网关访问公网，默认使用所选的VPC中已有的NAT网关，否则系统将会为您自动创建一个默认规格的NAT网关并绑定弹性公网IP，自动配置SNAT规则。
    *
    * @return bool|null
    */
    public function getEnableSnat()
    {
        return $this->container['enableSnat'];
    }

    /**
    * Sets enableSnat
    *
    * @param bool|null $enableSnat 集群是否配置SNAT。开启后您的集群可以通过NAT网关访问公网，默认使用所选的VPC中已有的NAT网关，否则系统将会为您自动创建一个默认规格的NAT网关并绑定弹性公网IP，自动配置SNAT规则。
    *
    * @return $this
    */
    public function setEnableSnat($enableSnat)
    {
        $this->container['enableSnat'] = $enableSnat;
        return $this;
    }

    /**
    * Gets enableSwrImageAccess
    *  集群是否配置镜像访问。为确保您的集群节点可以从容器镜像服务中拉取镜像，默认使用所选VPC中已有的SWR和OBS终端节点，否则将会为您自动新建SWR和OBS终端节点。
    *
    * @return bool|null
    */
    public function getEnableSwrImageAccess()
    {
        return $this->container['enableSwrImageAccess'];
    }

    /**
    * Sets enableSwrImageAccess
    *
    * @param bool|null $enableSwrImageAccess 集群是否配置镜像访问。为确保您的集群节点可以从容器镜像服务中拉取镜像，默认使用所选VPC中已有的SWR和OBS终端节点，否则将会为您自动新建SWR和OBS终端节点。
    *
    * @return $this
    */
    public function setEnableSwrImageAccess($enableSwrImageAccess)
    {
        $this->container['enableSwrImageAccess'] = $enableSwrImageAccess;
        return $this;
    }

    /**
    * Gets ipv6enable
    *  集群是否使用IPv6模式。
    *
    * @return bool|null
    */
    public function getIpv6enable()
    {
        return $this->container['ipv6enable'];
    }

    /**
    * Sets ipv6enable
    *
    * @param bool|null $ipv6enable 集群是否使用IPv6模式。
    *
    * @return $this
    */
    public function setIpv6enable($ipv6enable)
    {
        $this->container['ipv6enable'] = $ipv6enable;
        return $this;
    }

    /**
    * Gets hostNetwork
    *  hostNetwork
    *
    * @return \HuaweiCloud\SDK\Cce\V3\Model\AutopilotHostNetwork
    */
    public function getHostNetwork()
    {
        return $this->container['hostNetwork'];
    }

    /**
    * Sets hostNetwork
    *
    * @param \HuaweiCloud\SDK\Cce\V3\Model\AutopilotHostNetwork $hostNetwork hostNetwork
    *
    * @return $this
    */
    public function setHostNetwork($hostNetwork)
    {
        $this->container['hostNetwork'] = $hostNetwork;
        return $this;
    }

    /**
    * Gets containerNetwork
    *  containerNetwork
    *
    * @return \HuaweiCloud\SDK\Cce\V3\Model\AutopilotContainerNetwork
    */
    public function getContainerNetwork()
    {
        return $this->container['containerNetwork'];
    }

    /**
    * Sets containerNetwork
    *
    * @param \HuaweiCloud\SDK\Cce\V3\Model\AutopilotContainerNetwork $containerNetwork containerNetwork
    *
    * @return $this
    */
    public function setContainerNetwork($containerNetwork)
    {
        $this->container['containerNetwork'] = $containerNetwork;
        return $this;
    }

    /**
    * Gets eniNetwork
    *  eniNetwork
    *
    * @return \HuaweiCloud\SDK\Cce\V3\Model\AutopilotEniNetwork|null
    */
    public function getEniNetwork()
    {
        return $this->container['eniNetwork'];
    }

    /**
    * Sets eniNetwork
    *
    * @param \HuaweiCloud\SDK\Cce\V3\Model\AutopilotEniNetwork|null $eniNetwork eniNetwork
    *
    * @return $this
    */
    public function setEniNetwork($eniNetwork)
    {
        $this->container['eniNetwork'] = $eniNetwork;
        return $this;
    }

    /**
    * Gets serviceNetwork
    *  serviceNetwork
    *
    * @return \HuaweiCloud\SDK\Cce\V3\Model\AutopilotServiceNetwork|null
    */
    public function getServiceNetwork()
    {
        return $this->container['serviceNetwork'];
    }

    /**
    * Sets serviceNetwork
    *
    * @param \HuaweiCloud\SDK\Cce\V3\Model\AutopilotServiceNetwork|null $serviceNetwork serviceNetwork
    *
    * @return $this
    */
    public function setServiceNetwork($serviceNetwork)
    {
        $this->container['serviceNetwork'] = $serviceNetwork;
        return $this;
    }

    /**
    * Gets authentication
    *  authentication
    *
    * @return \HuaweiCloud\SDK\Cce\V3\Model\AutopilotAuthentication|null
    */
    public function getAuthentication()
    {
        return $this->container['authentication'];
    }

    /**
    * Sets authentication
    *
    * @param \HuaweiCloud\SDK\Cce\V3\Model\AutopilotAuthentication|null $authentication authentication
    *
    * @return $this
    */
    public function setAuthentication($authentication)
    {
        $this->container['authentication'] = $authentication;
        return $this;
    }

    /**
    * Gets billingMode
    *  集群的计费方式。 - 0: 按需计费  默认为“按需计费”。
    *
    * @return int|null
    */
    public function getBillingMode()
    {
        return $this->container['billingMode'];
    }

    /**
    * Sets billingMode
    *
    * @param int|null $billingMode 集群的计费方式。 - 0: 按需计费  默认为“按需计费”。
    *
    * @return $this
    */
    public function setBillingMode($billingMode)
    {
        $this->container['billingMode'] = $billingMode;
        return $this;
    }

    /**
    * Gets kubernetesSvcIpRange
    *  服务网段参数，kubernetes clusterIP取值范围。创建集群时如若未传参，默认为\"10.247.0.0/16\"。该参数废弃中，推荐使用新字段serviceNetwork，包含IPv4服务网段。
    *
    * @return string|null
    */
    public function getKubernetesSvcIpRange()
    {
        return $this->container['kubernetesSvcIpRange'];
    }

    /**
    * Sets kubernetesSvcIpRange
    *
    * @param string|null $kubernetesSvcIpRange 服务网段参数，kubernetes clusterIP取值范围。创建集群时如若未传参，默认为\"10.247.0.0/16\"。该参数废弃中，推荐使用新字段serviceNetwork，包含IPv4服务网段。
    *
    * @return $this
    */
    public function setKubernetesSvcIpRange($kubernetesSvcIpRange)
    {
        $this->container['kubernetesSvcIpRange'] = $kubernetesSvcIpRange;
        return $this;
    }

    /**
    * Gets clusterTags
    *  集群资源标签
    *
    * @return \HuaweiCloud\SDK\Cce\V3\Model\AutopilotResourceTag[]|null
    */
    public function getClusterTags()
    {
        return $this->container['clusterTags'];
    }

    /**
    * Sets clusterTags
    *
    * @param \HuaweiCloud\SDK\Cce\V3\Model\AutopilotResourceTag[]|null $clusterTags 集群资源标签
    *
    * @return $this
    */
    public function setClusterTags($clusterTags)
    {
        $this->container['clusterTags'] = $clusterTags;
        return $this;
    }

    /**
    * Gets kubeProxyMode
    *  服务转发模式：  - iptables：社区传统的kube-proxy模式，完全以iptables规则的方式来实现service负载均衡。该方式最主要的问题是在服务多的时候产生太多的iptables规则，非增量式更新会引入一定的时延，大规模情况下有明显的性能问题。  > 默认使用iptables转发模式。
    *
    * @return string|null
    */
    public function getKubeProxyMode()
    {
        return $this->container['kubeProxyMode'];
    }

    /**
    * Sets kubeProxyMode
    *
    * @param string|null $kubeProxyMode 服务转发模式：  - iptables：社区传统的kube-proxy模式，完全以iptables规则的方式来实现service负载均衡。该方式最主要的问题是在服务多的时候产生太多的iptables规则，非增量式更新会引入一定的时延，大规模情况下有明显的性能问题。  > 默认使用iptables转发模式。
    *
    * @return $this
    */
    public function setKubeProxyMode($kubeProxyMode)
    {
        $this->container['kubeProxyMode'] = $kubeProxyMode;
        return $this;
    }

    /**
    * Gets az
    *  可用区（仅查询返回字段）。  [CCE支持的可用区请参考[地区和终端节点](https://developer.huaweicloud.com/endpoint?CCE)](tag:hws)  [CCE支持的可用区请参考[地区和终端节点](https://developer.huaweicloud.com/intl/zh-cn/endpoint?CCE)](tag:hws_hk)
    *
    * @return string|null
    */
    public function getAz()
    {
        return $this->container['az'];
    }

    /**
    * Sets az
    *
    * @param string|null $az 可用区（仅查询返回字段）。  [CCE支持的可用区请参考[地区和终端节点](https://developer.huaweicloud.com/endpoint?CCE)](tag:hws)  [CCE支持的可用区请参考[地区和终端节点](https://developer.huaweicloud.com/intl/zh-cn/endpoint?CCE)](tag:hws_hk)
    *
    * @return $this
    */
    public function setAz($az)
    {
        $this->container['az'] = $az;
        return $this;
    }

    /**
    * Gets extendParam
    *  extendParam
    *
    * @return \HuaweiCloud\SDK\Cce\V3\Model\AutopilotClusterExtendParam|null
    */
    public function getExtendParam()
    {
        return $this->container['extendParam'];
    }

    /**
    * Sets extendParam
    *
    * @param \HuaweiCloud\SDK\Cce\V3\Model\AutopilotClusterExtendParam|null $extendParam extendParam
    *
    * @return $this
    */
    public function setExtendParam($extendParam)
    {
        $this->container['extendParam'] = $extendParam;
        return $this;
    }

    /**
    * Gets configurationsOverride
    *  覆盖集群默认组件配置  若指定了不支持的组件或组件不支持的参数，该配置项将被忽略。  当前支持的可配置组件及其参数详见 [[配置管理](https://support.huaweicloud.com/usermanual-cce/cce_10_0213.html)](tag:hws) [[配置管理](https://support.huaweicloud.com/intl/zh-cn/usermanual-cce/cce_10_0213.html)](tag:hws_hk)
    *
    * @return \HuaweiCloud\SDK\Cce\V3\Model\AutopilotPackageConfiguration[]|null
    */
    public function getConfigurationsOverride()
    {
        return $this->container['configurationsOverride'];
    }

    /**
    * Sets configurationsOverride
    *
    * @param \HuaweiCloud\SDK\Cce\V3\Model\AutopilotPackageConfiguration[]|null $configurationsOverride 覆盖集群默认组件配置  若指定了不支持的组件或组件不支持的参数，该配置项将被忽略。  当前支持的可配置组件及其参数详见 [[配置管理](https://support.huaweicloud.com/usermanual-cce/cce_10_0213.html)](tag:hws) [[配置管理](https://support.huaweicloud.com/intl/zh-cn/usermanual-cce/cce_10_0213.html)](tag:hws_hk)
    *
    * @return $this
    */
    public function setConfigurationsOverride($configurationsOverride)
    {
        $this->container['configurationsOverride'] = $configurationsOverride;
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

