<?php

namespace HuaweiCloud\SDK\Cce\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ClusterExtendParam implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ClusterExtendParam';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * clusterAz  集群控制节点可用区配置。  [CCE支持的可用区请参考[地区和终端节点](https://developer.huaweicloud.com/endpoint?CCE)](tag:hws) [CCE支持的可用区请参考[地区和终端节点](https://developer.huaweicloud.com/intl/zh-cn/endpoint?CCE)](tag:hws_hk)  - multi_az：多可用区，可选。仅使用高可用集群时才可以配置多可用区。 - 专属云计算池可用区：用于指定专属云可用区部署集群控制节点。如果需配置专属CCE集群，该字段为必选。
    * dssMasterVolumes  用于指定控制节点的系统盘和数据盘使用专属分布式存储，未指定或者值为空时，默认使用EVS云硬盘。  如果配置专属CCE集群，该字段为必选，请按照如下格式设置：  ``` <rootVol.dssPoolID>.<rootVol.volType>;<dataVol.dssPoolID>.<dataVol.volType> ```  字段说明： - rootVol为系统盘；dataVol为数据盘； - dssPoolID为专属分布式存储池ID； - volType为专属分布式存储池的存储类型，如SAS、SSD。  样例：c950ee97-587c-4f24-8a74-3367e3da570f.sas;6edbc2f4-1507-44f8-ac0d-eed1d2608d38.ssd  > 非专属CCE集群不支持配置该字段。
    * enterpriseProjectId  集群所属的企业项目ID。 >   - 需要开通企业项目功能后才可配置企业项目。 >   - 集群所属的企业项目与集群下所关联的其他云服务资源所属的企业项目必须保持一致。
    * kubeProxyMode  服务转发模式，支持以下两种实现：  - iptables：社区传统的kube-proxy模式，完全以iptables规则的方式来实现service负载均衡。该方式最主要的问题是在服务多的时候产生太多的iptables规则，非增量式更新会引入一定的时延，大规模情况下有明显的性能问题 - ipvs：主导开发并在社区获得广泛支持的kube-proxy模式，采用增量式更新，吞吐更高，速度更快，并可以保证service更新期间连接保持不断开，适用于大规模场景。  > 此参数已废弃，若同时指定此参数和ClusterSpec下的kubeProxyMode，以ClusterSpec下的为准。
    * clusterExternalIp  master 弹性公网IP
    * alphaCceFixPoolMask  容器网络固定IP池掩码位数，仅vpc-router网络支持。  该参数决定节点可分配容器IP数量，与创建节点时设置的maxPods参数共同决定节点最多可以创建多少个Pod， 具体请参见[节点最多可以创建多少Pod](maxPods.xml)。   整数字符传取值范围: 24 ~ 28
    * decMasterFlavor  专属CCE集群指定可控制节点的规格。
    * dockerUmaskMode  集群默认Docker的UmaskMode配置，可取值为secure或normal，不指定时默认为normal。
    * kubernetesIoCpuManagerPolicy  集群CPU管理策略。取值为none或static，默认为none。 - none：关闭工作负载实例独占CPU核的功能，优点是CPU共享池的可分配核数较多 - static：支持给节点上的工作负载实例配置CPU独占，适用于对CPU缓存和调度延迟敏感的工作负载[，Turbo集群下仅对普通容器节点有效，安全容器节点无效](tag:hws,hws_hk,dt)。
    * orderId  订单ID，集群付费类型为自动付费包周期类型时，响应中会返回此字段。
    * periodType  - month：月 - year：年 > billingMode为1（包周期）时生效，且为必选。
    * periodNum  订购周期数，取值范围： - periodType=month（周期类型为月）时，取值为[1-9]。 - periodType=year（周期类型为年）时，取值为1-3。 > billingMode为1时生效，且为必选。
    * isAutoRenew  是否自动续订 - “true”：自动续订 - “false”：不自动续订 > billingMode为1时生效，不填写此参数时默认不会自动续费。
    * isAutoPay  是否自动扣款 - “true”：自动扣款 - “false”：不自动扣款 > billingMode为1时生效，不填写此参数时默认不会自动扣款。
    * upgradefrom  记录集群通过何种升级方式升级到当前版本。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'clusterAz' => 'string',
            'dssMasterVolumes' => 'string',
            'enterpriseProjectId' => 'string',
            'kubeProxyMode' => 'string',
            'clusterExternalIp' => 'string',
            'alphaCceFixPoolMask' => 'string',
            'decMasterFlavor' => 'string',
            'dockerUmaskMode' => 'string',
            'kubernetesIoCpuManagerPolicy' => 'string',
            'orderId' => 'string',
            'periodType' => 'string',
            'periodNum' => 'int',
            'isAutoRenew' => 'string',
            'isAutoPay' => 'string',
            'upgradefrom' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * clusterAz  集群控制节点可用区配置。  [CCE支持的可用区请参考[地区和终端节点](https://developer.huaweicloud.com/endpoint?CCE)](tag:hws) [CCE支持的可用区请参考[地区和终端节点](https://developer.huaweicloud.com/intl/zh-cn/endpoint?CCE)](tag:hws_hk)  - multi_az：多可用区，可选。仅使用高可用集群时才可以配置多可用区。 - 专属云计算池可用区：用于指定专属云可用区部署集群控制节点。如果需配置专属CCE集群，该字段为必选。
    * dssMasterVolumes  用于指定控制节点的系统盘和数据盘使用专属分布式存储，未指定或者值为空时，默认使用EVS云硬盘。  如果配置专属CCE集群，该字段为必选，请按照如下格式设置：  ``` <rootVol.dssPoolID>.<rootVol.volType>;<dataVol.dssPoolID>.<dataVol.volType> ```  字段说明： - rootVol为系统盘；dataVol为数据盘； - dssPoolID为专属分布式存储池ID； - volType为专属分布式存储池的存储类型，如SAS、SSD。  样例：c950ee97-587c-4f24-8a74-3367e3da570f.sas;6edbc2f4-1507-44f8-ac0d-eed1d2608d38.ssd  > 非专属CCE集群不支持配置该字段。
    * enterpriseProjectId  集群所属的企业项目ID。 >   - 需要开通企业项目功能后才可配置企业项目。 >   - 集群所属的企业项目与集群下所关联的其他云服务资源所属的企业项目必须保持一致。
    * kubeProxyMode  服务转发模式，支持以下两种实现：  - iptables：社区传统的kube-proxy模式，完全以iptables规则的方式来实现service负载均衡。该方式最主要的问题是在服务多的时候产生太多的iptables规则，非增量式更新会引入一定的时延，大规模情况下有明显的性能问题 - ipvs：主导开发并在社区获得广泛支持的kube-proxy模式，采用增量式更新，吞吐更高，速度更快，并可以保证service更新期间连接保持不断开，适用于大规模场景。  > 此参数已废弃，若同时指定此参数和ClusterSpec下的kubeProxyMode，以ClusterSpec下的为准。
    * clusterExternalIp  master 弹性公网IP
    * alphaCceFixPoolMask  容器网络固定IP池掩码位数，仅vpc-router网络支持。  该参数决定节点可分配容器IP数量，与创建节点时设置的maxPods参数共同决定节点最多可以创建多少个Pod， 具体请参见[节点最多可以创建多少Pod](maxPods.xml)。   整数字符传取值范围: 24 ~ 28
    * decMasterFlavor  专属CCE集群指定可控制节点的规格。
    * dockerUmaskMode  集群默认Docker的UmaskMode配置，可取值为secure或normal，不指定时默认为normal。
    * kubernetesIoCpuManagerPolicy  集群CPU管理策略。取值为none或static，默认为none。 - none：关闭工作负载实例独占CPU核的功能，优点是CPU共享池的可分配核数较多 - static：支持给节点上的工作负载实例配置CPU独占，适用于对CPU缓存和调度延迟敏感的工作负载[，Turbo集群下仅对普通容器节点有效，安全容器节点无效](tag:hws,hws_hk,dt)。
    * orderId  订单ID，集群付费类型为自动付费包周期类型时，响应中会返回此字段。
    * periodType  - month：月 - year：年 > billingMode为1（包周期）时生效，且为必选。
    * periodNum  订购周期数，取值范围： - periodType=month（周期类型为月）时，取值为[1-9]。 - periodType=year（周期类型为年）时，取值为1-3。 > billingMode为1时生效，且为必选。
    * isAutoRenew  是否自动续订 - “true”：自动续订 - “false”：不自动续订 > billingMode为1时生效，不填写此参数时默认不会自动续费。
    * isAutoPay  是否自动扣款 - “true”：自动扣款 - “false”：不自动扣款 > billingMode为1时生效，不填写此参数时默认不会自动扣款。
    * upgradefrom  记录集群通过何种升级方式升级到当前版本。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'clusterAz' => null,
        'dssMasterVolumes' => null,
        'enterpriseProjectId' => null,
        'kubeProxyMode' => null,
        'clusterExternalIp' => null,
        'alphaCceFixPoolMask' => null,
        'decMasterFlavor' => null,
        'dockerUmaskMode' => null,
        'kubernetesIoCpuManagerPolicy' => null,
        'orderId' => null,
        'periodType' => null,
        'periodNum' => null,
        'isAutoRenew' => null,
        'isAutoPay' => null,
        'upgradefrom' => null
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
    * clusterAz  集群控制节点可用区配置。  [CCE支持的可用区请参考[地区和终端节点](https://developer.huaweicloud.com/endpoint?CCE)](tag:hws) [CCE支持的可用区请参考[地区和终端节点](https://developer.huaweicloud.com/intl/zh-cn/endpoint?CCE)](tag:hws_hk)  - multi_az：多可用区，可选。仅使用高可用集群时才可以配置多可用区。 - 专属云计算池可用区：用于指定专属云可用区部署集群控制节点。如果需配置专属CCE集群，该字段为必选。
    * dssMasterVolumes  用于指定控制节点的系统盘和数据盘使用专属分布式存储，未指定或者值为空时，默认使用EVS云硬盘。  如果配置专属CCE集群，该字段为必选，请按照如下格式设置：  ``` <rootVol.dssPoolID>.<rootVol.volType>;<dataVol.dssPoolID>.<dataVol.volType> ```  字段说明： - rootVol为系统盘；dataVol为数据盘； - dssPoolID为专属分布式存储池ID； - volType为专属分布式存储池的存储类型，如SAS、SSD。  样例：c950ee97-587c-4f24-8a74-3367e3da570f.sas;6edbc2f4-1507-44f8-ac0d-eed1d2608d38.ssd  > 非专属CCE集群不支持配置该字段。
    * enterpriseProjectId  集群所属的企业项目ID。 >   - 需要开通企业项目功能后才可配置企业项目。 >   - 集群所属的企业项目与集群下所关联的其他云服务资源所属的企业项目必须保持一致。
    * kubeProxyMode  服务转发模式，支持以下两种实现：  - iptables：社区传统的kube-proxy模式，完全以iptables规则的方式来实现service负载均衡。该方式最主要的问题是在服务多的时候产生太多的iptables规则，非增量式更新会引入一定的时延，大规模情况下有明显的性能问题 - ipvs：主导开发并在社区获得广泛支持的kube-proxy模式，采用增量式更新，吞吐更高，速度更快，并可以保证service更新期间连接保持不断开，适用于大规模场景。  > 此参数已废弃，若同时指定此参数和ClusterSpec下的kubeProxyMode，以ClusterSpec下的为准。
    * clusterExternalIp  master 弹性公网IP
    * alphaCceFixPoolMask  容器网络固定IP池掩码位数，仅vpc-router网络支持。  该参数决定节点可分配容器IP数量，与创建节点时设置的maxPods参数共同决定节点最多可以创建多少个Pod， 具体请参见[节点最多可以创建多少Pod](maxPods.xml)。   整数字符传取值范围: 24 ~ 28
    * decMasterFlavor  专属CCE集群指定可控制节点的规格。
    * dockerUmaskMode  集群默认Docker的UmaskMode配置，可取值为secure或normal，不指定时默认为normal。
    * kubernetesIoCpuManagerPolicy  集群CPU管理策略。取值为none或static，默认为none。 - none：关闭工作负载实例独占CPU核的功能，优点是CPU共享池的可分配核数较多 - static：支持给节点上的工作负载实例配置CPU独占，适用于对CPU缓存和调度延迟敏感的工作负载[，Turbo集群下仅对普通容器节点有效，安全容器节点无效](tag:hws,hws_hk,dt)。
    * orderId  订单ID，集群付费类型为自动付费包周期类型时，响应中会返回此字段。
    * periodType  - month：月 - year：年 > billingMode为1（包周期）时生效，且为必选。
    * periodNum  订购周期数，取值范围： - periodType=month（周期类型为月）时，取值为[1-9]。 - periodType=year（周期类型为年）时，取值为1-3。 > billingMode为1时生效，且为必选。
    * isAutoRenew  是否自动续订 - “true”：自动续订 - “false”：不自动续订 > billingMode为1时生效，不填写此参数时默认不会自动续费。
    * isAutoPay  是否自动扣款 - “true”：自动扣款 - “false”：不自动扣款 > billingMode为1时生效，不填写此参数时默认不会自动扣款。
    * upgradefrom  记录集群通过何种升级方式升级到当前版本。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'clusterAz' => 'clusterAZ',
            'dssMasterVolumes' => 'dssMasterVolumes',
            'enterpriseProjectId' => 'enterpriseProjectId',
            'kubeProxyMode' => 'kubeProxyMode',
            'clusterExternalIp' => 'clusterExternalIP',
            'alphaCceFixPoolMask' => 'alpha.cce/fixPoolMask',
            'decMasterFlavor' => 'decMasterFlavor',
            'dockerUmaskMode' => 'dockerUmaskMode',
            'kubernetesIoCpuManagerPolicy' => 'kubernetes.io/cpuManagerPolicy',
            'orderId' => 'orderID',
            'periodType' => 'periodType',
            'periodNum' => 'periodNum',
            'isAutoRenew' => 'isAutoRenew',
            'isAutoPay' => 'isAutoPay',
            'upgradefrom' => 'upgradefrom'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * clusterAz  集群控制节点可用区配置。  [CCE支持的可用区请参考[地区和终端节点](https://developer.huaweicloud.com/endpoint?CCE)](tag:hws) [CCE支持的可用区请参考[地区和终端节点](https://developer.huaweicloud.com/intl/zh-cn/endpoint?CCE)](tag:hws_hk)  - multi_az：多可用区，可选。仅使用高可用集群时才可以配置多可用区。 - 专属云计算池可用区：用于指定专属云可用区部署集群控制节点。如果需配置专属CCE集群，该字段为必选。
    * dssMasterVolumes  用于指定控制节点的系统盘和数据盘使用专属分布式存储，未指定或者值为空时，默认使用EVS云硬盘。  如果配置专属CCE集群，该字段为必选，请按照如下格式设置：  ``` <rootVol.dssPoolID>.<rootVol.volType>;<dataVol.dssPoolID>.<dataVol.volType> ```  字段说明： - rootVol为系统盘；dataVol为数据盘； - dssPoolID为专属分布式存储池ID； - volType为专属分布式存储池的存储类型，如SAS、SSD。  样例：c950ee97-587c-4f24-8a74-3367e3da570f.sas;6edbc2f4-1507-44f8-ac0d-eed1d2608d38.ssd  > 非专属CCE集群不支持配置该字段。
    * enterpriseProjectId  集群所属的企业项目ID。 >   - 需要开通企业项目功能后才可配置企业项目。 >   - 集群所属的企业项目与集群下所关联的其他云服务资源所属的企业项目必须保持一致。
    * kubeProxyMode  服务转发模式，支持以下两种实现：  - iptables：社区传统的kube-proxy模式，完全以iptables规则的方式来实现service负载均衡。该方式最主要的问题是在服务多的时候产生太多的iptables规则，非增量式更新会引入一定的时延，大规模情况下有明显的性能问题 - ipvs：主导开发并在社区获得广泛支持的kube-proxy模式，采用增量式更新，吞吐更高，速度更快，并可以保证service更新期间连接保持不断开，适用于大规模场景。  > 此参数已废弃，若同时指定此参数和ClusterSpec下的kubeProxyMode，以ClusterSpec下的为准。
    * clusterExternalIp  master 弹性公网IP
    * alphaCceFixPoolMask  容器网络固定IP池掩码位数，仅vpc-router网络支持。  该参数决定节点可分配容器IP数量，与创建节点时设置的maxPods参数共同决定节点最多可以创建多少个Pod， 具体请参见[节点最多可以创建多少Pod](maxPods.xml)。   整数字符传取值范围: 24 ~ 28
    * decMasterFlavor  专属CCE集群指定可控制节点的规格。
    * dockerUmaskMode  集群默认Docker的UmaskMode配置，可取值为secure或normal，不指定时默认为normal。
    * kubernetesIoCpuManagerPolicy  集群CPU管理策略。取值为none或static，默认为none。 - none：关闭工作负载实例独占CPU核的功能，优点是CPU共享池的可分配核数较多 - static：支持给节点上的工作负载实例配置CPU独占，适用于对CPU缓存和调度延迟敏感的工作负载[，Turbo集群下仅对普通容器节点有效，安全容器节点无效](tag:hws,hws_hk,dt)。
    * orderId  订单ID，集群付费类型为自动付费包周期类型时，响应中会返回此字段。
    * periodType  - month：月 - year：年 > billingMode为1（包周期）时生效，且为必选。
    * periodNum  订购周期数，取值范围： - periodType=month（周期类型为月）时，取值为[1-9]。 - periodType=year（周期类型为年）时，取值为1-3。 > billingMode为1时生效，且为必选。
    * isAutoRenew  是否自动续订 - “true”：自动续订 - “false”：不自动续订 > billingMode为1时生效，不填写此参数时默认不会自动续费。
    * isAutoPay  是否自动扣款 - “true”：自动扣款 - “false”：不自动扣款 > billingMode为1时生效，不填写此参数时默认不会自动扣款。
    * upgradefrom  记录集群通过何种升级方式升级到当前版本。
    *
    * @var string[]
    */
    protected static $setters = [
            'clusterAz' => 'setClusterAz',
            'dssMasterVolumes' => 'setDssMasterVolumes',
            'enterpriseProjectId' => 'setEnterpriseProjectId',
            'kubeProxyMode' => 'setKubeProxyMode',
            'clusterExternalIp' => 'setClusterExternalIp',
            'alphaCceFixPoolMask' => 'setAlphaCceFixPoolMask',
            'decMasterFlavor' => 'setDecMasterFlavor',
            'dockerUmaskMode' => 'setDockerUmaskMode',
            'kubernetesIoCpuManagerPolicy' => 'setKubernetesIoCpuManagerPolicy',
            'orderId' => 'setOrderId',
            'periodType' => 'setPeriodType',
            'periodNum' => 'setPeriodNum',
            'isAutoRenew' => 'setIsAutoRenew',
            'isAutoPay' => 'setIsAutoPay',
            'upgradefrom' => 'setUpgradefrom'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * clusterAz  集群控制节点可用区配置。  [CCE支持的可用区请参考[地区和终端节点](https://developer.huaweicloud.com/endpoint?CCE)](tag:hws) [CCE支持的可用区请参考[地区和终端节点](https://developer.huaweicloud.com/intl/zh-cn/endpoint?CCE)](tag:hws_hk)  - multi_az：多可用区，可选。仅使用高可用集群时才可以配置多可用区。 - 专属云计算池可用区：用于指定专属云可用区部署集群控制节点。如果需配置专属CCE集群，该字段为必选。
    * dssMasterVolumes  用于指定控制节点的系统盘和数据盘使用专属分布式存储，未指定或者值为空时，默认使用EVS云硬盘。  如果配置专属CCE集群，该字段为必选，请按照如下格式设置：  ``` <rootVol.dssPoolID>.<rootVol.volType>;<dataVol.dssPoolID>.<dataVol.volType> ```  字段说明： - rootVol为系统盘；dataVol为数据盘； - dssPoolID为专属分布式存储池ID； - volType为专属分布式存储池的存储类型，如SAS、SSD。  样例：c950ee97-587c-4f24-8a74-3367e3da570f.sas;6edbc2f4-1507-44f8-ac0d-eed1d2608d38.ssd  > 非专属CCE集群不支持配置该字段。
    * enterpriseProjectId  集群所属的企业项目ID。 >   - 需要开通企业项目功能后才可配置企业项目。 >   - 集群所属的企业项目与集群下所关联的其他云服务资源所属的企业项目必须保持一致。
    * kubeProxyMode  服务转发模式，支持以下两种实现：  - iptables：社区传统的kube-proxy模式，完全以iptables规则的方式来实现service负载均衡。该方式最主要的问题是在服务多的时候产生太多的iptables规则，非增量式更新会引入一定的时延，大规模情况下有明显的性能问题 - ipvs：主导开发并在社区获得广泛支持的kube-proxy模式，采用增量式更新，吞吐更高，速度更快，并可以保证service更新期间连接保持不断开，适用于大规模场景。  > 此参数已废弃，若同时指定此参数和ClusterSpec下的kubeProxyMode，以ClusterSpec下的为准。
    * clusterExternalIp  master 弹性公网IP
    * alphaCceFixPoolMask  容器网络固定IP池掩码位数，仅vpc-router网络支持。  该参数决定节点可分配容器IP数量，与创建节点时设置的maxPods参数共同决定节点最多可以创建多少个Pod， 具体请参见[节点最多可以创建多少Pod](maxPods.xml)。   整数字符传取值范围: 24 ~ 28
    * decMasterFlavor  专属CCE集群指定可控制节点的规格。
    * dockerUmaskMode  集群默认Docker的UmaskMode配置，可取值为secure或normal，不指定时默认为normal。
    * kubernetesIoCpuManagerPolicy  集群CPU管理策略。取值为none或static，默认为none。 - none：关闭工作负载实例独占CPU核的功能，优点是CPU共享池的可分配核数较多 - static：支持给节点上的工作负载实例配置CPU独占，适用于对CPU缓存和调度延迟敏感的工作负载[，Turbo集群下仅对普通容器节点有效，安全容器节点无效](tag:hws,hws_hk,dt)。
    * orderId  订单ID，集群付费类型为自动付费包周期类型时，响应中会返回此字段。
    * periodType  - month：月 - year：年 > billingMode为1（包周期）时生效，且为必选。
    * periodNum  订购周期数，取值范围： - periodType=month（周期类型为月）时，取值为[1-9]。 - periodType=year（周期类型为年）时，取值为1-3。 > billingMode为1时生效，且为必选。
    * isAutoRenew  是否自动续订 - “true”：自动续订 - “false”：不自动续订 > billingMode为1时生效，不填写此参数时默认不会自动续费。
    * isAutoPay  是否自动扣款 - “true”：自动扣款 - “false”：不自动扣款 > billingMode为1时生效，不填写此参数时默认不会自动扣款。
    * upgradefrom  记录集群通过何种升级方式升级到当前版本。
    *
    * @var string[]
    */
    protected static $getters = [
            'clusterAz' => 'getClusterAz',
            'dssMasterVolumes' => 'getDssMasterVolumes',
            'enterpriseProjectId' => 'getEnterpriseProjectId',
            'kubeProxyMode' => 'getKubeProxyMode',
            'clusterExternalIp' => 'getClusterExternalIp',
            'alphaCceFixPoolMask' => 'getAlphaCceFixPoolMask',
            'decMasterFlavor' => 'getDecMasterFlavor',
            'dockerUmaskMode' => 'getDockerUmaskMode',
            'kubernetesIoCpuManagerPolicy' => 'getKubernetesIoCpuManagerPolicy',
            'orderId' => 'getOrderId',
            'periodType' => 'getPeriodType',
            'periodNum' => 'getPeriodNum',
            'isAutoRenew' => 'getIsAutoRenew',
            'isAutoPay' => 'getIsAutoPay',
            'upgradefrom' => 'getUpgradefrom'
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
        $this->container['clusterAz'] = isset($data['clusterAz']) ? $data['clusterAz'] : null;
        $this->container['dssMasterVolumes'] = isset($data['dssMasterVolumes']) ? $data['dssMasterVolumes'] : null;
        $this->container['enterpriseProjectId'] = isset($data['enterpriseProjectId']) ? $data['enterpriseProjectId'] : null;
        $this->container['kubeProxyMode'] = isset($data['kubeProxyMode']) ? $data['kubeProxyMode'] : null;
        $this->container['clusterExternalIp'] = isset($data['clusterExternalIp']) ? $data['clusterExternalIp'] : null;
        $this->container['alphaCceFixPoolMask'] = isset($data['alphaCceFixPoolMask']) ? $data['alphaCceFixPoolMask'] : null;
        $this->container['decMasterFlavor'] = isset($data['decMasterFlavor']) ? $data['decMasterFlavor'] : null;
        $this->container['dockerUmaskMode'] = isset($data['dockerUmaskMode']) ? $data['dockerUmaskMode'] : null;
        $this->container['kubernetesIoCpuManagerPolicy'] = isset($data['kubernetesIoCpuManagerPolicy']) ? $data['kubernetesIoCpuManagerPolicy'] : null;
        $this->container['orderId'] = isset($data['orderId']) ? $data['orderId'] : null;
        $this->container['periodType'] = isset($data['periodType']) ? $data['periodType'] : null;
        $this->container['periodNum'] = isset($data['periodNum']) ? $data['periodNum'] : null;
        $this->container['isAutoRenew'] = isset($data['isAutoRenew']) ? $data['isAutoRenew'] : null;
        $this->container['isAutoPay'] = isset($data['isAutoPay']) ? $data['isAutoPay'] : null;
        $this->container['upgradefrom'] = isset($data['upgradefrom']) ? $data['upgradefrom'] : null;
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
    * Gets clusterAz
    *  集群控制节点可用区配置。  [CCE支持的可用区请参考[地区和终端节点](https://developer.huaweicloud.com/endpoint?CCE)](tag:hws) [CCE支持的可用区请参考[地区和终端节点](https://developer.huaweicloud.com/intl/zh-cn/endpoint?CCE)](tag:hws_hk)  - multi_az：多可用区，可选。仅使用高可用集群时才可以配置多可用区。 - 专属云计算池可用区：用于指定专属云可用区部署集群控制节点。如果需配置专属CCE集群，该字段为必选。
    *
    * @return string|null
    */
    public function getClusterAz()
    {
        return $this->container['clusterAz'];
    }

    /**
    * Sets clusterAz
    *
    * @param string|null $clusterAz 集群控制节点可用区配置。  [CCE支持的可用区请参考[地区和终端节点](https://developer.huaweicloud.com/endpoint?CCE)](tag:hws) [CCE支持的可用区请参考[地区和终端节点](https://developer.huaweicloud.com/intl/zh-cn/endpoint?CCE)](tag:hws_hk)  - multi_az：多可用区，可选。仅使用高可用集群时才可以配置多可用区。 - 专属云计算池可用区：用于指定专属云可用区部署集群控制节点。如果需配置专属CCE集群，该字段为必选。
    *
    * @return $this
    */
    public function setClusterAz($clusterAz)
    {
        $this->container['clusterAz'] = $clusterAz;
        return $this;
    }

    /**
    * Gets dssMasterVolumes
    *  用于指定控制节点的系统盘和数据盘使用专属分布式存储，未指定或者值为空时，默认使用EVS云硬盘。  如果配置专属CCE集群，该字段为必选，请按照如下格式设置：  ``` <rootVol.dssPoolID>.<rootVol.volType>;<dataVol.dssPoolID>.<dataVol.volType> ```  字段说明： - rootVol为系统盘；dataVol为数据盘； - dssPoolID为专属分布式存储池ID； - volType为专属分布式存储池的存储类型，如SAS、SSD。  样例：c950ee97-587c-4f24-8a74-3367e3da570f.sas;6edbc2f4-1507-44f8-ac0d-eed1d2608d38.ssd  > 非专属CCE集群不支持配置该字段。
    *
    * @return string|null
    */
    public function getDssMasterVolumes()
    {
        return $this->container['dssMasterVolumes'];
    }

    /**
    * Sets dssMasterVolumes
    *
    * @param string|null $dssMasterVolumes 用于指定控制节点的系统盘和数据盘使用专属分布式存储，未指定或者值为空时，默认使用EVS云硬盘。  如果配置专属CCE集群，该字段为必选，请按照如下格式设置：  ``` <rootVol.dssPoolID>.<rootVol.volType>;<dataVol.dssPoolID>.<dataVol.volType> ```  字段说明： - rootVol为系统盘；dataVol为数据盘； - dssPoolID为专属分布式存储池ID； - volType为专属分布式存储池的存储类型，如SAS、SSD。  样例：c950ee97-587c-4f24-8a74-3367e3da570f.sas;6edbc2f4-1507-44f8-ac0d-eed1d2608d38.ssd  > 非专属CCE集群不支持配置该字段。
    *
    * @return $this
    */
    public function setDssMasterVolumes($dssMasterVolumes)
    {
        $this->container['dssMasterVolumes'] = $dssMasterVolumes;
        return $this;
    }

    /**
    * Gets enterpriseProjectId
    *  集群所属的企业项目ID。 >   - 需要开通企业项目功能后才可配置企业项目。 >   - 集群所属的企业项目与集群下所关联的其他云服务资源所属的企业项目必须保持一致。
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
    * @param string|null $enterpriseProjectId 集群所属的企业项目ID。 >   - 需要开通企业项目功能后才可配置企业项目。 >   - 集群所属的企业项目与集群下所关联的其他云服务资源所属的企业项目必须保持一致。
    *
    * @return $this
    */
    public function setEnterpriseProjectId($enterpriseProjectId)
    {
        $this->container['enterpriseProjectId'] = $enterpriseProjectId;
        return $this;
    }

    /**
    * Gets kubeProxyMode
    *  服务转发模式，支持以下两种实现：  - iptables：社区传统的kube-proxy模式，完全以iptables规则的方式来实现service负载均衡。该方式最主要的问题是在服务多的时候产生太多的iptables规则，非增量式更新会引入一定的时延，大规模情况下有明显的性能问题 - ipvs：主导开发并在社区获得广泛支持的kube-proxy模式，采用增量式更新，吞吐更高，速度更快，并可以保证service更新期间连接保持不断开，适用于大规模场景。  > 此参数已废弃，若同时指定此参数和ClusterSpec下的kubeProxyMode，以ClusterSpec下的为准。
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
    * @param string|null $kubeProxyMode 服务转发模式，支持以下两种实现：  - iptables：社区传统的kube-proxy模式，完全以iptables规则的方式来实现service负载均衡。该方式最主要的问题是在服务多的时候产生太多的iptables规则，非增量式更新会引入一定的时延，大规模情况下有明显的性能问题 - ipvs：主导开发并在社区获得广泛支持的kube-proxy模式，采用增量式更新，吞吐更高，速度更快，并可以保证service更新期间连接保持不断开，适用于大规模场景。  > 此参数已废弃，若同时指定此参数和ClusterSpec下的kubeProxyMode，以ClusterSpec下的为准。
    *
    * @return $this
    */
    public function setKubeProxyMode($kubeProxyMode)
    {
        $this->container['kubeProxyMode'] = $kubeProxyMode;
        return $this;
    }

    /**
    * Gets clusterExternalIp
    *  master 弹性公网IP
    *
    * @return string|null
    */
    public function getClusterExternalIp()
    {
        return $this->container['clusterExternalIp'];
    }

    /**
    * Sets clusterExternalIp
    *
    * @param string|null $clusterExternalIp master 弹性公网IP
    *
    * @return $this
    */
    public function setClusterExternalIp($clusterExternalIp)
    {
        $this->container['clusterExternalIp'] = $clusterExternalIp;
        return $this;
    }

    /**
    * Gets alphaCceFixPoolMask
    *  容器网络固定IP池掩码位数，仅vpc-router网络支持。  该参数决定节点可分配容器IP数量，与创建节点时设置的maxPods参数共同决定节点最多可以创建多少个Pod， 具体请参见[节点最多可以创建多少Pod](maxPods.xml)。   整数字符传取值范围: 24 ~ 28
    *
    * @return string|null
    */
    public function getAlphaCceFixPoolMask()
    {
        return $this->container['alphaCceFixPoolMask'];
    }

    /**
    * Sets alphaCceFixPoolMask
    *
    * @param string|null $alphaCceFixPoolMask 容器网络固定IP池掩码位数，仅vpc-router网络支持。  该参数决定节点可分配容器IP数量，与创建节点时设置的maxPods参数共同决定节点最多可以创建多少个Pod， 具体请参见[节点最多可以创建多少Pod](maxPods.xml)。   整数字符传取值范围: 24 ~ 28
    *
    * @return $this
    */
    public function setAlphaCceFixPoolMask($alphaCceFixPoolMask)
    {
        $this->container['alphaCceFixPoolMask'] = $alphaCceFixPoolMask;
        return $this;
    }

    /**
    * Gets decMasterFlavor
    *  专属CCE集群指定可控制节点的规格。
    *
    * @return string|null
    */
    public function getDecMasterFlavor()
    {
        return $this->container['decMasterFlavor'];
    }

    /**
    * Sets decMasterFlavor
    *
    * @param string|null $decMasterFlavor 专属CCE集群指定可控制节点的规格。
    *
    * @return $this
    */
    public function setDecMasterFlavor($decMasterFlavor)
    {
        $this->container['decMasterFlavor'] = $decMasterFlavor;
        return $this;
    }

    /**
    * Gets dockerUmaskMode
    *  集群默认Docker的UmaskMode配置，可取值为secure或normal，不指定时默认为normal。
    *
    * @return string|null
    */
    public function getDockerUmaskMode()
    {
        return $this->container['dockerUmaskMode'];
    }

    /**
    * Sets dockerUmaskMode
    *
    * @param string|null $dockerUmaskMode 集群默认Docker的UmaskMode配置，可取值为secure或normal，不指定时默认为normal。
    *
    * @return $this
    */
    public function setDockerUmaskMode($dockerUmaskMode)
    {
        $this->container['dockerUmaskMode'] = $dockerUmaskMode;
        return $this;
    }

    /**
    * Gets kubernetesIoCpuManagerPolicy
    *  集群CPU管理策略。取值为none或static，默认为none。 - none：关闭工作负载实例独占CPU核的功能，优点是CPU共享池的可分配核数较多 - static：支持给节点上的工作负载实例配置CPU独占，适用于对CPU缓存和调度延迟敏感的工作负载[，Turbo集群下仅对普通容器节点有效，安全容器节点无效](tag:hws,hws_hk,dt)。
    *
    * @return string|null
    */
    public function getKubernetesIoCpuManagerPolicy()
    {
        return $this->container['kubernetesIoCpuManagerPolicy'];
    }

    /**
    * Sets kubernetesIoCpuManagerPolicy
    *
    * @param string|null $kubernetesIoCpuManagerPolicy 集群CPU管理策略。取值为none或static，默认为none。 - none：关闭工作负载实例独占CPU核的功能，优点是CPU共享池的可分配核数较多 - static：支持给节点上的工作负载实例配置CPU独占，适用于对CPU缓存和调度延迟敏感的工作负载[，Turbo集群下仅对普通容器节点有效，安全容器节点无效](tag:hws,hws_hk,dt)。
    *
    * @return $this
    */
    public function setKubernetesIoCpuManagerPolicy($kubernetesIoCpuManagerPolicy)
    {
        $this->container['kubernetesIoCpuManagerPolicy'] = $kubernetesIoCpuManagerPolicy;
        return $this;
    }

    /**
    * Gets orderId
    *  订单ID，集群付费类型为自动付费包周期类型时，响应中会返回此字段。
    *
    * @return string|null
    */
    public function getOrderId()
    {
        return $this->container['orderId'];
    }

    /**
    * Sets orderId
    *
    * @param string|null $orderId 订单ID，集群付费类型为自动付费包周期类型时，响应中会返回此字段。
    *
    * @return $this
    */
    public function setOrderId($orderId)
    {
        $this->container['orderId'] = $orderId;
        return $this;
    }

    /**
    * Gets periodType
    *  - month：月 - year：年 > billingMode为1（包周期）时生效，且为必选。
    *
    * @return string|null
    */
    public function getPeriodType()
    {
        return $this->container['periodType'];
    }

    /**
    * Sets periodType
    *
    * @param string|null $periodType - month：月 - year：年 > billingMode为1（包周期）时生效，且为必选。
    *
    * @return $this
    */
    public function setPeriodType($periodType)
    {
        $this->container['periodType'] = $periodType;
        return $this;
    }

    /**
    * Gets periodNum
    *  订购周期数，取值范围： - periodType=month（周期类型为月）时，取值为[1-9]。 - periodType=year（周期类型为年）时，取值为1-3。 > billingMode为1时生效，且为必选。
    *
    * @return int|null
    */
    public function getPeriodNum()
    {
        return $this->container['periodNum'];
    }

    /**
    * Sets periodNum
    *
    * @param int|null $periodNum 订购周期数，取值范围： - periodType=month（周期类型为月）时，取值为[1-9]。 - periodType=year（周期类型为年）时，取值为1-3。 > billingMode为1时生效，且为必选。
    *
    * @return $this
    */
    public function setPeriodNum($periodNum)
    {
        $this->container['periodNum'] = $periodNum;
        return $this;
    }

    /**
    * Gets isAutoRenew
    *  是否自动续订 - “true”：自动续订 - “false”：不自动续订 > billingMode为1时生效，不填写此参数时默认不会自动续费。
    *
    * @return string|null
    */
    public function getIsAutoRenew()
    {
        return $this->container['isAutoRenew'];
    }

    /**
    * Sets isAutoRenew
    *
    * @param string|null $isAutoRenew 是否自动续订 - “true”：自动续订 - “false”：不自动续订 > billingMode为1时生效，不填写此参数时默认不会自动续费。
    *
    * @return $this
    */
    public function setIsAutoRenew($isAutoRenew)
    {
        $this->container['isAutoRenew'] = $isAutoRenew;
        return $this;
    }

    /**
    * Gets isAutoPay
    *  是否自动扣款 - “true”：自动扣款 - “false”：不自动扣款 > billingMode为1时生效，不填写此参数时默认不会自动扣款。
    *
    * @return string|null
    */
    public function getIsAutoPay()
    {
        return $this->container['isAutoPay'];
    }

    /**
    * Sets isAutoPay
    *
    * @param string|null $isAutoPay 是否自动扣款 - “true”：自动扣款 - “false”：不自动扣款 > billingMode为1时生效，不填写此参数时默认不会自动扣款。
    *
    * @return $this
    */
    public function setIsAutoPay($isAutoPay)
    {
        $this->container['isAutoPay'] = $isAutoPay;
        return $this;
    }

    /**
    * Gets upgradefrom
    *  记录集群通过何种升级方式升级到当前版本。
    *
    * @return string|null
    */
    public function getUpgradefrom()
    {
        return $this->container['upgradefrom'];
    }

    /**
    * Sets upgradefrom
    *
    * @param string|null $upgradefrom 记录集群通过何种升级方式升级到当前版本。
    *
    * @return $this
    */
    public function setUpgradefrom($upgradefrom)
    {
        $this->container['upgradefrom'] = $upgradefrom;
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

