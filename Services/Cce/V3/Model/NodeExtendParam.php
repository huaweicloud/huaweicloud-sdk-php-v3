<?php

namespace HuaweiCloud\SDK\Cce\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class NodeExtendParam implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'NodeExtendParam';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * ecsperformancetype  云服务器规格的分类。响应中会返回此字段。
    * orderId  **参数解释**： 订单ID。 **约束限制**： 节点付费类型为自动付费包周期类型时，响应中会返回此字段(仅创建场景涉及)，节点池场景响应返回中无该参数。 **取值范围**： 不涉及 **默认取值**： 不涉及
    * productId  **参数解释**： 产品ID。 **约束限制**： 节点付费类型为自动付费包周期类型或者节点池类型是包周期节点池时，响应中会返回此字段。 **取值范围**： 不涉及 **默认取值**： 不涉及
    * maxPods  节点最大允许创建的实例数(Pod)，该数量包含系统默认实例，取值范围为16~256。  该设置的目的为防止节点因管理过多实例而负载过重，请根据您的业务需要进行设置。  节点可以创建多少个Pod，受多个参数影响，具体请参见[节点最多可以创建多少Pod](maxPods.xml)。
    * periodType  - month：月 - year：年 > 作为请求参数，billingMode为1（包周期）或2（已废弃：自动付费包周期）时生效，且为必选。 > 作为响应参数，仅在创建包周期节点时返回。
    * periodNum  订购周期数，取值范围： - periodType=month（周期类型为月）时，取值为[1-9]。 - periodType=year（周期类型为年）时，取值为1。 > 作为请求参数，billingMode为1或2（已废弃）时生效，且为必选。 > 作为响应参数，仅在创建包周期节点时返回。
    * isAutoRenew  是否自动续订 - “true”：自动续订 - “false”：不自动续订 > billingMode为1或2（已废弃）时生效，不填写此参数时默认不会自动续费。
    * isAutoPay  是否自动扣款  - “true”：自动扣款 - “false”：不自动扣款  > billingMode为1或2（已废弃）时生效，billingMode为1时不填写此参数时默认不会自动扣款。（已废弃：billingMode为2时不填写此参数时默认会自动扣款）
    * dockerLvmConfigOverride  Docker数据盘配置项（已废弃，请使用storage字段）。默认配置示例如下：  ``` \"DockerLVMConfigOverride\":\"dockerThinpool=vgpaas/90%VG;kubernetesLV=vgpaas/10%VG;diskType=evs;lvType=linear\" ```  默认配置在无VD类型磁盘时，会由于数据盘查找失败而出错，请根据真实盘符类型填写diskType。 包含如下字段：   - userLV（可选）：用户空间的大小，示例格式：vgpaas/20%VG   - userPath（可选）：用户空间挂载路径，示例格式：/home/wqt-test   - diskType：磁盘类型，目前只有evs、hdd和ssd三种格式   - lvType：逻辑卷的类型，目前支持linear和striped两种，示例格式：striped   - dockerThinpool：Docker盘的空间大小，示例格式：vgpaas/60%VG   - kubernetesLV：Kubelet空间大小，示例格式：vgpaas/20%VG
    * dockerBaseSize  **参数解释**： 节点上单容器的可用磁盘空间大小（已废弃，请优先使用containerBaseSize参数），单位G。 CCE节点容器运行时空间配置请参考[数据盘空间分配说明](cce_01_0341.xml)。 **约束限制**： - Devicemapper模式下建议dockerBaseSize配置不超过80G，设置过大时可能会导致容器运行时初始化时间过长而启动失败，若对容器磁盘大小有特殊要求，可考虑使用挂载外部或本地存储方式代替。 - dockerBaseSize设置仅在v1.19.16-r0、v1.21.3-r0、v1.23.3-r0及以上的集群版本中的EulerOS[/HCEOS2.0](tag:hws,hws_hk,ctc,cmcc)节点上生效。  **取值范围**： 10-500。 **默认取值**： 不配置该值或值为0时将使用默认值： - Devicemapper模式下默认值为10； - OverlayFS模式默认不限制单容器可用空间大小。
    * publicKey  **参数解释**： 节点的公钥，应用于ssh密钥登录。 **约束限制**： - 当选择使用密钥对方式登录节点时该配置无效 - 创建、更新节点池场景不支持该参数  **取值范围**： 不涉及 **默认取值**： 不涉及
    * alphaCcePreInstall  安装前执行脚本 > 输入的值需要经过Base64编码，方法为echo -n \"待编码内容\" | base64
    * alphaCcePostInstall  安装后执行脚本 > 输入的值需要经过Base64编码，方法为echo -n \"待编码内容\" | base64。
    * alphaCceNodeImageId  **参数解释**： 节点自定义镜像ID，从IMS控制台获取，需要使用自定义镜像时使用此参数。 **约束限制**： 不涉及 [> - 若指定了extendParam中的securityReinforcementType参数为cybersecurity，节点将开启安全等保加固功能，则节点的操作系统类型必须使用HCE2.0。](tag:hws)  **取值范围**： 不涉及 **默认取值**： 不涉及
    * chargingMode  节点的计费模式。已废弃，请使用NodeSpec中的billingMode字段。
    * agencyName  委托的名称。  委托是由租户管理员在统一身份认证服务（Identity and Access Management，IAM）上创建的，可以为CCE节点提供访问云服务器的临时凭证。 作为响应参数仅在创建节点传入时返回该字段。
    * kubeReservedMem  节点内存预留，Kubernetes相关组件预留值。[随节点规格变动，具体请参见[节点预留资源策略说明](https://support.huaweicloud.com/usermanual-cce/cce_10_0178.html)。](tag:hws)
    * systemReservedMem  节点内存预留，系统组件预留值。[随节点规格变动，具体请参见[节点预留资源策略说明](https://support.huaweicloud.com/usermanual-cce/cce_10_0178.html)。](tag:hws)
    * initNodePassword  **参数解释**： 节点密码，仅作为响应参数时，固定展示星号，节点池场景响应返回中无该参数。 **约束限制**： 不涉及 **取值范围**： 不涉及 **默认取值**： 不涉及
    * securityReinforcementType  **参数解释**： 指定节点安全加固类型，当前仅支持HCE2.0镜像等保2.0三级安全加固。 等保加固会对身份鉴别、访问控制、安全审计、入侵防范、恶意代码防范进行检查并加固。[详情请参见[Huawei Cloud EulerOS 2.0等保2.0三级版镜像概述](https://support.huaweicloud.com/productdesc-hce/hce_sec_0001.html)。](tag:hws) 若未指定此参数，则尝试用原有的值补全。如：原先HCE2.0镜像已配置安全加固，更新节点池时未指定此参数，则仍旧保持安全加固配置，若要取消，需显式指定参数值为\"null\"。 **约束限制**： 不涉及 **取值范围**： - 空值：表示不开启等保加固 - cybersecurity：表示开启等保加固  **默认取值**： 不涉及
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'ecsperformancetype' => 'string',
            'orderId' => 'string',
            'productId' => 'string',
            'maxPods' => 'int',
            'periodType' => 'string',
            'periodNum' => 'int',
            'isAutoRenew' => 'string',
            'isAutoPay' => 'string',
            'dockerLvmConfigOverride' => 'string',
            'dockerBaseSize' => 'int',
            'publicKey' => 'string',
            'alphaCcePreInstall' => 'string',
            'alphaCcePostInstall' => 'string',
            'alphaCceNodeImageId' => 'string',
            'chargingMode' => 'int',
            'agencyName' => 'string',
            'kubeReservedMem' => 'int',
            'systemReservedMem' => 'int',
            'initNodePassword' => 'string',
            'securityReinforcementType' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * ecsperformancetype  云服务器规格的分类。响应中会返回此字段。
    * orderId  **参数解释**： 订单ID。 **约束限制**： 节点付费类型为自动付费包周期类型时，响应中会返回此字段(仅创建场景涉及)，节点池场景响应返回中无该参数。 **取值范围**： 不涉及 **默认取值**： 不涉及
    * productId  **参数解释**： 产品ID。 **约束限制**： 节点付费类型为自动付费包周期类型或者节点池类型是包周期节点池时，响应中会返回此字段。 **取值范围**： 不涉及 **默认取值**： 不涉及
    * maxPods  节点最大允许创建的实例数(Pod)，该数量包含系统默认实例，取值范围为16~256。  该设置的目的为防止节点因管理过多实例而负载过重，请根据您的业务需要进行设置。  节点可以创建多少个Pod，受多个参数影响，具体请参见[节点最多可以创建多少Pod](maxPods.xml)。
    * periodType  - month：月 - year：年 > 作为请求参数，billingMode为1（包周期）或2（已废弃：自动付费包周期）时生效，且为必选。 > 作为响应参数，仅在创建包周期节点时返回。
    * periodNum  订购周期数，取值范围： - periodType=month（周期类型为月）时，取值为[1-9]。 - periodType=year（周期类型为年）时，取值为1。 > 作为请求参数，billingMode为1或2（已废弃）时生效，且为必选。 > 作为响应参数，仅在创建包周期节点时返回。
    * isAutoRenew  是否自动续订 - “true”：自动续订 - “false”：不自动续订 > billingMode为1或2（已废弃）时生效，不填写此参数时默认不会自动续费。
    * isAutoPay  是否自动扣款  - “true”：自动扣款 - “false”：不自动扣款  > billingMode为1或2（已废弃）时生效，billingMode为1时不填写此参数时默认不会自动扣款。（已废弃：billingMode为2时不填写此参数时默认会自动扣款）
    * dockerLvmConfigOverride  Docker数据盘配置项（已废弃，请使用storage字段）。默认配置示例如下：  ``` \"DockerLVMConfigOverride\":\"dockerThinpool=vgpaas/90%VG;kubernetesLV=vgpaas/10%VG;diskType=evs;lvType=linear\" ```  默认配置在无VD类型磁盘时，会由于数据盘查找失败而出错，请根据真实盘符类型填写diskType。 包含如下字段：   - userLV（可选）：用户空间的大小，示例格式：vgpaas/20%VG   - userPath（可选）：用户空间挂载路径，示例格式：/home/wqt-test   - diskType：磁盘类型，目前只有evs、hdd和ssd三种格式   - lvType：逻辑卷的类型，目前支持linear和striped两种，示例格式：striped   - dockerThinpool：Docker盘的空间大小，示例格式：vgpaas/60%VG   - kubernetesLV：Kubelet空间大小，示例格式：vgpaas/20%VG
    * dockerBaseSize  **参数解释**： 节点上单容器的可用磁盘空间大小（已废弃，请优先使用containerBaseSize参数），单位G。 CCE节点容器运行时空间配置请参考[数据盘空间分配说明](cce_01_0341.xml)。 **约束限制**： - Devicemapper模式下建议dockerBaseSize配置不超过80G，设置过大时可能会导致容器运行时初始化时间过长而启动失败，若对容器磁盘大小有特殊要求，可考虑使用挂载外部或本地存储方式代替。 - dockerBaseSize设置仅在v1.19.16-r0、v1.21.3-r0、v1.23.3-r0及以上的集群版本中的EulerOS[/HCEOS2.0](tag:hws,hws_hk,ctc,cmcc)节点上生效。  **取值范围**： 10-500。 **默认取值**： 不配置该值或值为0时将使用默认值： - Devicemapper模式下默认值为10； - OverlayFS模式默认不限制单容器可用空间大小。
    * publicKey  **参数解释**： 节点的公钥，应用于ssh密钥登录。 **约束限制**： - 当选择使用密钥对方式登录节点时该配置无效 - 创建、更新节点池场景不支持该参数  **取值范围**： 不涉及 **默认取值**： 不涉及
    * alphaCcePreInstall  安装前执行脚本 > 输入的值需要经过Base64编码，方法为echo -n \"待编码内容\" | base64
    * alphaCcePostInstall  安装后执行脚本 > 输入的值需要经过Base64编码，方法为echo -n \"待编码内容\" | base64。
    * alphaCceNodeImageId  **参数解释**： 节点自定义镜像ID，从IMS控制台获取，需要使用自定义镜像时使用此参数。 **约束限制**： 不涉及 [> - 若指定了extendParam中的securityReinforcementType参数为cybersecurity，节点将开启安全等保加固功能，则节点的操作系统类型必须使用HCE2.0。](tag:hws)  **取值范围**： 不涉及 **默认取值**： 不涉及
    * chargingMode  节点的计费模式。已废弃，请使用NodeSpec中的billingMode字段。
    * agencyName  委托的名称。  委托是由租户管理员在统一身份认证服务（Identity and Access Management，IAM）上创建的，可以为CCE节点提供访问云服务器的临时凭证。 作为响应参数仅在创建节点传入时返回该字段。
    * kubeReservedMem  节点内存预留，Kubernetes相关组件预留值。[随节点规格变动，具体请参见[节点预留资源策略说明](https://support.huaweicloud.com/usermanual-cce/cce_10_0178.html)。](tag:hws)
    * systemReservedMem  节点内存预留，系统组件预留值。[随节点规格变动，具体请参见[节点预留资源策略说明](https://support.huaweicloud.com/usermanual-cce/cce_10_0178.html)。](tag:hws)
    * initNodePassword  **参数解释**： 节点密码，仅作为响应参数时，固定展示星号，节点池场景响应返回中无该参数。 **约束限制**： 不涉及 **取值范围**： 不涉及 **默认取值**： 不涉及
    * securityReinforcementType  **参数解释**： 指定节点安全加固类型，当前仅支持HCE2.0镜像等保2.0三级安全加固。 等保加固会对身份鉴别、访问控制、安全审计、入侵防范、恶意代码防范进行检查并加固。[详情请参见[Huawei Cloud EulerOS 2.0等保2.0三级版镜像概述](https://support.huaweicloud.com/productdesc-hce/hce_sec_0001.html)。](tag:hws) 若未指定此参数，则尝试用原有的值补全。如：原先HCE2.0镜像已配置安全加固，更新节点池时未指定此参数，则仍旧保持安全加固配置，若要取消，需显式指定参数值为\"null\"。 **约束限制**： 不涉及 **取值范围**： - 空值：表示不开启等保加固 - cybersecurity：表示开启等保加固  **默认取值**： 不涉及
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'ecsperformancetype' => null,
        'orderId' => null,
        'productId' => null,
        'maxPods' => null,
        'periodType' => null,
        'periodNum' => null,
        'isAutoRenew' => null,
        'isAutoPay' => null,
        'dockerLvmConfigOverride' => null,
        'dockerBaseSize' => null,
        'publicKey' => null,
        'alphaCcePreInstall' => null,
        'alphaCcePostInstall' => null,
        'alphaCceNodeImageId' => null,
        'chargingMode' => 'int32',
        'agencyName' => null,
        'kubeReservedMem' => 'int32',
        'systemReservedMem' => 'int32',
        'initNodePassword' => null,
        'securityReinforcementType' => null
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
    * ecsperformancetype  云服务器规格的分类。响应中会返回此字段。
    * orderId  **参数解释**： 订单ID。 **约束限制**： 节点付费类型为自动付费包周期类型时，响应中会返回此字段(仅创建场景涉及)，节点池场景响应返回中无该参数。 **取值范围**： 不涉及 **默认取值**： 不涉及
    * productId  **参数解释**： 产品ID。 **约束限制**： 节点付费类型为自动付费包周期类型或者节点池类型是包周期节点池时，响应中会返回此字段。 **取值范围**： 不涉及 **默认取值**： 不涉及
    * maxPods  节点最大允许创建的实例数(Pod)，该数量包含系统默认实例，取值范围为16~256。  该设置的目的为防止节点因管理过多实例而负载过重，请根据您的业务需要进行设置。  节点可以创建多少个Pod，受多个参数影响，具体请参见[节点最多可以创建多少Pod](maxPods.xml)。
    * periodType  - month：月 - year：年 > 作为请求参数，billingMode为1（包周期）或2（已废弃：自动付费包周期）时生效，且为必选。 > 作为响应参数，仅在创建包周期节点时返回。
    * periodNum  订购周期数，取值范围： - periodType=month（周期类型为月）时，取值为[1-9]。 - periodType=year（周期类型为年）时，取值为1。 > 作为请求参数，billingMode为1或2（已废弃）时生效，且为必选。 > 作为响应参数，仅在创建包周期节点时返回。
    * isAutoRenew  是否自动续订 - “true”：自动续订 - “false”：不自动续订 > billingMode为1或2（已废弃）时生效，不填写此参数时默认不会自动续费。
    * isAutoPay  是否自动扣款  - “true”：自动扣款 - “false”：不自动扣款  > billingMode为1或2（已废弃）时生效，billingMode为1时不填写此参数时默认不会自动扣款。（已废弃：billingMode为2时不填写此参数时默认会自动扣款）
    * dockerLvmConfigOverride  Docker数据盘配置项（已废弃，请使用storage字段）。默认配置示例如下：  ``` \"DockerLVMConfigOverride\":\"dockerThinpool=vgpaas/90%VG;kubernetesLV=vgpaas/10%VG;diskType=evs;lvType=linear\" ```  默认配置在无VD类型磁盘时，会由于数据盘查找失败而出错，请根据真实盘符类型填写diskType。 包含如下字段：   - userLV（可选）：用户空间的大小，示例格式：vgpaas/20%VG   - userPath（可选）：用户空间挂载路径，示例格式：/home/wqt-test   - diskType：磁盘类型，目前只有evs、hdd和ssd三种格式   - lvType：逻辑卷的类型，目前支持linear和striped两种，示例格式：striped   - dockerThinpool：Docker盘的空间大小，示例格式：vgpaas/60%VG   - kubernetesLV：Kubelet空间大小，示例格式：vgpaas/20%VG
    * dockerBaseSize  **参数解释**： 节点上单容器的可用磁盘空间大小（已废弃，请优先使用containerBaseSize参数），单位G。 CCE节点容器运行时空间配置请参考[数据盘空间分配说明](cce_01_0341.xml)。 **约束限制**： - Devicemapper模式下建议dockerBaseSize配置不超过80G，设置过大时可能会导致容器运行时初始化时间过长而启动失败，若对容器磁盘大小有特殊要求，可考虑使用挂载外部或本地存储方式代替。 - dockerBaseSize设置仅在v1.19.16-r0、v1.21.3-r0、v1.23.3-r0及以上的集群版本中的EulerOS[/HCEOS2.0](tag:hws,hws_hk,ctc,cmcc)节点上生效。  **取值范围**： 10-500。 **默认取值**： 不配置该值或值为0时将使用默认值： - Devicemapper模式下默认值为10； - OverlayFS模式默认不限制单容器可用空间大小。
    * publicKey  **参数解释**： 节点的公钥，应用于ssh密钥登录。 **约束限制**： - 当选择使用密钥对方式登录节点时该配置无效 - 创建、更新节点池场景不支持该参数  **取值范围**： 不涉及 **默认取值**： 不涉及
    * alphaCcePreInstall  安装前执行脚本 > 输入的值需要经过Base64编码，方法为echo -n \"待编码内容\" | base64
    * alphaCcePostInstall  安装后执行脚本 > 输入的值需要经过Base64编码，方法为echo -n \"待编码内容\" | base64。
    * alphaCceNodeImageId  **参数解释**： 节点自定义镜像ID，从IMS控制台获取，需要使用自定义镜像时使用此参数。 **约束限制**： 不涉及 [> - 若指定了extendParam中的securityReinforcementType参数为cybersecurity，节点将开启安全等保加固功能，则节点的操作系统类型必须使用HCE2.0。](tag:hws)  **取值范围**： 不涉及 **默认取值**： 不涉及
    * chargingMode  节点的计费模式。已废弃，请使用NodeSpec中的billingMode字段。
    * agencyName  委托的名称。  委托是由租户管理员在统一身份认证服务（Identity and Access Management，IAM）上创建的，可以为CCE节点提供访问云服务器的临时凭证。 作为响应参数仅在创建节点传入时返回该字段。
    * kubeReservedMem  节点内存预留，Kubernetes相关组件预留值。[随节点规格变动，具体请参见[节点预留资源策略说明](https://support.huaweicloud.com/usermanual-cce/cce_10_0178.html)。](tag:hws)
    * systemReservedMem  节点内存预留，系统组件预留值。[随节点规格变动，具体请参见[节点预留资源策略说明](https://support.huaweicloud.com/usermanual-cce/cce_10_0178.html)。](tag:hws)
    * initNodePassword  **参数解释**： 节点密码，仅作为响应参数时，固定展示星号，节点池场景响应返回中无该参数。 **约束限制**： 不涉及 **取值范围**： 不涉及 **默认取值**： 不涉及
    * securityReinforcementType  **参数解释**： 指定节点安全加固类型，当前仅支持HCE2.0镜像等保2.0三级安全加固。 等保加固会对身份鉴别、访问控制、安全审计、入侵防范、恶意代码防范进行检查并加固。[详情请参见[Huawei Cloud EulerOS 2.0等保2.0三级版镜像概述](https://support.huaweicloud.com/productdesc-hce/hce_sec_0001.html)。](tag:hws) 若未指定此参数，则尝试用原有的值补全。如：原先HCE2.0镜像已配置安全加固，更新节点池时未指定此参数，则仍旧保持安全加固配置，若要取消，需显式指定参数值为\"null\"。 **约束限制**： 不涉及 **取值范围**： - 空值：表示不开启等保加固 - cybersecurity：表示开启等保加固  **默认取值**： 不涉及
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'ecsperformancetype' => 'ecs:performancetype',
            'orderId' => 'orderID',
            'productId' => 'productID',
            'maxPods' => 'maxPods',
            'periodType' => 'periodType',
            'periodNum' => 'periodNum',
            'isAutoRenew' => 'isAutoRenew',
            'isAutoPay' => 'isAutoPay',
            'dockerLvmConfigOverride' => 'DockerLVMConfigOverride',
            'dockerBaseSize' => 'dockerBaseSize',
            'publicKey' => 'publicKey',
            'alphaCcePreInstall' => 'alpha.cce/preInstall',
            'alphaCcePostInstall' => 'alpha.cce/postInstall',
            'alphaCceNodeImageId' => 'alpha.cce/NodeImageID',
            'chargingMode' => 'chargingMode',
            'agencyName' => 'agency_name',
            'kubeReservedMem' => 'kubeReservedMem',
            'systemReservedMem' => 'systemReservedMem',
            'initNodePassword' => 'init-node-password',
            'securityReinforcementType' => 'securityReinforcementType'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * ecsperformancetype  云服务器规格的分类。响应中会返回此字段。
    * orderId  **参数解释**： 订单ID。 **约束限制**： 节点付费类型为自动付费包周期类型时，响应中会返回此字段(仅创建场景涉及)，节点池场景响应返回中无该参数。 **取值范围**： 不涉及 **默认取值**： 不涉及
    * productId  **参数解释**： 产品ID。 **约束限制**： 节点付费类型为自动付费包周期类型或者节点池类型是包周期节点池时，响应中会返回此字段。 **取值范围**： 不涉及 **默认取值**： 不涉及
    * maxPods  节点最大允许创建的实例数(Pod)，该数量包含系统默认实例，取值范围为16~256。  该设置的目的为防止节点因管理过多实例而负载过重，请根据您的业务需要进行设置。  节点可以创建多少个Pod，受多个参数影响，具体请参见[节点最多可以创建多少Pod](maxPods.xml)。
    * periodType  - month：月 - year：年 > 作为请求参数，billingMode为1（包周期）或2（已废弃：自动付费包周期）时生效，且为必选。 > 作为响应参数，仅在创建包周期节点时返回。
    * periodNum  订购周期数，取值范围： - periodType=month（周期类型为月）时，取值为[1-9]。 - periodType=year（周期类型为年）时，取值为1。 > 作为请求参数，billingMode为1或2（已废弃）时生效，且为必选。 > 作为响应参数，仅在创建包周期节点时返回。
    * isAutoRenew  是否自动续订 - “true”：自动续订 - “false”：不自动续订 > billingMode为1或2（已废弃）时生效，不填写此参数时默认不会自动续费。
    * isAutoPay  是否自动扣款  - “true”：自动扣款 - “false”：不自动扣款  > billingMode为1或2（已废弃）时生效，billingMode为1时不填写此参数时默认不会自动扣款。（已废弃：billingMode为2时不填写此参数时默认会自动扣款）
    * dockerLvmConfigOverride  Docker数据盘配置项（已废弃，请使用storage字段）。默认配置示例如下：  ``` \"DockerLVMConfigOverride\":\"dockerThinpool=vgpaas/90%VG;kubernetesLV=vgpaas/10%VG;diskType=evs;lvType=linear\" ```  默认配置在无VD类型磁盘时，会由于数据盘查找失败而出错，请根据真实盘符类型填写diskType。 包含如下字段：   - userLV（可选）：用户空间的大小，示例格式：vgpaas/20%VG   - userPath（可选）：用户空间挂载路径，示例格式：/home/wqt-test   - diskType：磁盘类型，目前只有evs、hdd和ssd三种格式   - lvType：逻辑卷的类型，目前支持linear和striped两种，示例格式：striped   - dockerThinpool：Docker盘的空间大小，示例格式：vgpaas/60%VG   - kubernetesLV：Kubelet空间大小，示例格式：vgpaas/20%VG
    * dockerBaseSize  **参数解释**： 节点上单容器的可用磁盘空间大小（已废弃，请优先使用containerBaseSize参数），单位G。 CCE节点容器运行时空间配置请参考[数据盘空间分配说明](cce_01_0341.xml)。 **约束限制**： - Devicemapper模式下建议dockerBaseSize配置不超过80G，设置过大时可能会导致容器运行时初始化时间过长而启动失败，若对容器磁盘大小有特殊要求，可考虑使用挂载外部或本地存储方式代替。 - dockerBaseSize设置仅在v1.19.16-r0、v1.21.3-r0、v1.23.3-r0及以上的集群版本中的EulerOS[/HCEOS2.0](tag:hws,hws_hk,ctc,cmcc)节点上生效。  **取值范围**： 10-500。 **默认取值**： 不配置该值或值为0时将使用默认值： - Devicemapper模式下默认值为10； - OverlayFS模式默认不限制单容器可用空间大小。
    * publicKey  **参数解释**： 节点的公钥，应用于ssh密钥登录。 **约束限制**： - 当选择使用密钥对方式登录节点时该配置无效 - 创建、更新节点池场景不支持该参数  **取值范围**： 不涉及 **默认取值**： 不涉及
    * alphaCcePreInstall  安装前执行脚本 > 输入的值需要经过Base64编码，方法为echo -n \"待编码内容\" | base64
    * alphaCcePostInstall  安装后执行脚本 > 输入的值需要经过Base64编码，方法为echo -n \"待编码内容\" | base64。
    * alphaCceNodeImageId  **参数解释**： 节点自定义镜像ID，从IMS控制台获取，需要使用自定义镜像时使用此参数。 **约束限制**： 不涉及 [> - 若指定了extendParam中的securityReinforcementType参数为cybersecurity，节点将开启安全等保加固功能，则节点的操作系统类型必须使用HCE2.0。](tag:hws)  **取值范围**： 不涉及 **默认取值**： 不涉及
    * chargingMode  节点的计费模式。已废弃，请使用NodeSpec中的billingMode字段。
    * agencyName  委托的名称。  委托是由租户管理员在统一身份认证服务（Identity and Access Management，IAM）上创建的，可以为CCE节点提供访问云服务器的临时凭证。 作为响应参数仅在创建节点传入时返回该字段。
    * kubeReservedMem  节点内存预留，Kubernetes相关组件预留值。[随节点规格变动，具体请参见[节点预留资源策略说明](https://support.huaweicloud.com/usermanual-cce/cce_10_0178.html)。](tag:hws)
    * systemReservedMem  节点内存预留，系统组件预留值。[随节点规格变动，具体请参见[节点预留资源策略说明](https://support.huaweicloud.com/usermanual-cce/cce_10_0178.html)。](tag:hws)
    * initNodePassword  **参数解释**： 节点密码，仅作为响应参数时，固定展示星号，节点池场景响应返回中无该参数。 **约束限制**： 不涉及 **取值范围**： 不涉及 **默认取值**： 不涉及
    * securityReinforcementType  **参数解释**： 指定节点安全加固类型，当前仅支持HCE2.0镜像等保2.0三级安全加固。 等保加固会对身份鉴别、访问控制、安全审计、入侵防范、恶意代码防范进行检查并加固。[详情请参见[Huawei Cloud EulerOS 2.0等保2.0三级版镜像概述](https://support.huaweicloud.com/productdesc-hce/hce_sec_0001.html)。](tag:hws) 若未指定此参数，则尝试用原有的值补全。如：原先HCE2.0镜像已配置安全加固，更新节点池时未指定此参数，则仍旧保持安全加固配置，若要取消，需显式指定参数值为\"null\"。 **约束限制**： 不涉及 **取值范围**： - 空值：表示不开启等保加固 - cybersecurity：表示开启等保加固  **默认取值**： 不涉及
    *
    * @var string[]
    */
    protected static $setters = [
            'ecsperformancetype' => 'setEcsperformancetype',
            'orderId' => 'setOrderId',
            'productId' => 'setProductId',
            'maxPods' => 'setMaxPods',
            'periodType' => 'setPeriodType',
            'periodNum' => 'setPeriodNum',
            'isAutoRenew' => 'setIsAutoRenew',
            'isAutoPay' => 'setIsAutoPay',
            'dockerLvmConfigOverride' => 'setDockerLvmConfigOverride',
            'dockerBaseSize' => 'setDockerBaseSize',
            'publicKey' => 'setPublicKey',
            'alphaCcePreInstall' => 'setAlphaCcePreInstall',
            'alphaCcePostInstall' => 'setAlphaCcePostInstall',
            'alphaCceNodeImageId' => 'setAlphaCceNodeImageId',
            'chargingMode' => 'setChargingMode',
            'agencyName' => 'setAgencyName',
            'kubeReservedMem' => 'setKubeReservedMem',
            'systemReservedMem' => 'setSystemReservedMem',
            'initNodePassword' => 'setInitNodePassword',
            'securityReinforcementType' => 'setSecurityReinforcementType'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * ecsperformancetype  云服务器规格的分类。响应中会返回此字段。
    * orderId  **参数解释**： 订单ID。 **约束限制**： 节点付费类型为自动付费包周期类型时，响应中会返回此字段(仅创建场景涉及)，节点池场景响应返回中无该参数。 **取值范围**： 不涉及 **默认取值**： 不涉及
    * productId  **参数解释**： 产品ID。 **约束限制**： 节点付费类型为自动付费包周期类型或者节点池类型是包周期节点池时，响应中会返回此字段。 **取值范围**： 不涉及 **默认取值**： 不涉及
    * maxPods  节点最大允许创建的实例数(Pod)，该数量包含系统默认实例，取值范围为16~256。  该设置的目的为防止节点因管理过多实例而负载过重，请根据您的业务需要进行设置。  节点可以创建多少个Pod，受多个参数影响，具体请参见[节点最多可以创建多少Pod](maxPods.xml)。
    * periodType  - month：月 - year：年 > 作为请求参数，billingMode为1（包周期）或2（已废弃：自动付费包周期）时生效，且为必选。 > 作为响应参数，仅在创建包周期节点时返回。
    * periodNum  订购周期数，取值范围： - periodType=month（周期类型为月）时，取值为[1-9]。 - periodType=year（周期类型为年）时，取值为1。 > 作为请求参数，billingMode为1或2（已废弃）时生效，且为必选。 > 作为响应参数，仅在创建包周期节点时返回。
    * isAutoRenew  是否自动续订 - “true”：自动续订 - “false”：不自动续订 > billingMode为1或2（已废弃）时生效，不填写此参数时默认不会自动续费。
    * isAutoPay  是否自动扣款  - “true”：自动扣款 - “false”：不自动扣款  > billingMode为1或2（已废弃）时生效，billingMode为1时不填写此参数时默认不会自动扣款。（已废弃：billingMode为2时不填写此参数时默认会自动扣款）
    * dockerLvmConfigOverride  Docker数据盘配置项（已废弃，请使用storage字段）。默认配置示例如下：  ``` \"DockerLVMConfigOverride\":\"dockerThinpool=vgpaas/90%VG;kubernetesLV=vgpaas/10%VG;diskType=evs;lvType=linear\" ```  默认配置在无VD类型磁盘时，会由于数据盘查找失败而出错，请根据真实盘符类型填写diskType。 包含如下字段：   - userLV（可选）：用户空间的大小，示例格式：vgpaas/20%VG   - userPath（可选）：用户空间挂载路径，示例格式：/home/wqt-test   - diskType：磁盘类型，目前只有evs、hdd和ssd三种格式   - lvType：逻辑卷的类型，目前支持linear和striped两种，示例格式：striped   - dockerThinpool：Docker盘的空间大小，示例格式：vgpaas/60%VG   - kubernetesLV：Kubelet空间大小，示例格式：vgpaas/20%VG
    * dockerBaseSize  **参数解释**： 节点上单容器的可用磁盘空间大小（已废弃，请优先使用containerBaseSize参数），单位G。 CCE节点容器运行时空间配置请参考[数据盘空间分配说明](cce_01_0341.xml)。 **约束限制**： - Devicemapper模式下建议dockerBaseSize配置不超过80G，设置过大时可能会导致容器运行时初始化时间过长而启动失败，若对容器磁盘大小有特殊要求，可考虑使用挂载外部或本地存储方式代替。 - dockerBaseSize设置仅在v1.19.16-r0、v1.21.3-r0、v1.23.3-r0及以上的集群版本中的EulerOS[/HCEOS2.0](tag:hws,hws_hk,ctc,cmcc)节点上生效。  **取值范围**： 10-500。 **默认取值**： 不配置该值或值为0时将使用默认值： - Devicemapper模式下默认值为10； - OverlayFS模式默认不限制单容器可用空间大小。
    * publicKey  **参数解释**： 节点的公钥，应用于ssh密钥登录。 **约束限制**： - 当选择使用密钥对方式登录节点时该配置无效 - 创建、更新节点池场景不支持该参数  **取值范围**： 不涉及 **默认取值**： 不涉及
    * alphaCcePreInstall  安装前执行脚本 > 输入的值需要经过Base64编码，方法为echo -n \"待编码内容\" | base64
    * alphaCcePostInstall  安装后执行脚本 > 输入的值需要经过Base64编码，方法为echo -n \"待编码内容\" | base64。
    * alphaCceNodeImageId  **参数解释**： 节点自定义镜像ID，从IMS控制台获取，需要使用自定义镜像时使用此参数。 **约束限制**： 不涉及 [> - 若指定了extendParam中的securityReinforcementType参数为cybersecurity，节点将开启安全等保加固功能，则节点的操作系统类型必须使用HCE2.0。](tag:hws)  **取值范围**： 不涉及 **默认取值**： 不涉及
    * chargingMode  节点的计费模式。已废弃，请使用NodeSpec中的billingMode字段。
    * agencyName  委托的名称。  委托是由租户管理员在统一身份认证服务（Identity and Access Management，IAM）上创建的，可以为CCE节点提供访问云服务器的临时凭证。 作为响应参数仅在创建节点传入时返回该字段。
    * kubeReservedMem  节点内存预留，Kubernetes相关组件预留值。[随节点规格变动，具体请参见[节点预留资源策略说明](https://support.huaweicloud.com/usermanual-cce/cce_10_0178.html)。](tag:hws)
    * systemReservedMem  节点内存预留，系统组件预留值。[随节点规格变动，具体请参见[节点预留资源策略说明](https://support.huaweicloud.com/usermanual-cce/cce_10_0178.html)。](tag:hws)
    * initNodePassword  **参数解释**： 节点密码，仅作为响应参数时，固定展示星号，节点池场景响应返回中无该参数。 **约束限制**： 不涉及 **取值范围**： 不涉及 **默认取值**： 不涉及
    * securityReinforcementType  **参数解释**： 指定节点安全加固类型，当前仅支持HCE2.0镜像等保2.0三级安全加固。 等保加固会对身份鉴别、访问控制、安全审计、入侵防范、恶意代码防范进行检查并加固。[详情请参见[Huawei Cloud EulerOS 2.0等保2.0三级版镜像概述](https://support.huaweicloud.com/productdesc-hce/hce_sec_0001.html)。](tag:hws) 若未指定此参数，则尝试用原有的值补全。如：原先HCE2.0镜像已配置安全加固，更新节点池时未指定此参数，则仍旧保持安全加固配置，若要取消，需显式指定参数值为\"null\"。 **约束限制**： 不涉及 **取值范围**： - 空值：表示不开启等保加固 - cybersecurity：表示开启等保加固  **默认取值**： 不涉及
    *
    * @var string[]
    */
    protected static $getters = [
            'ecsperformancetype' => 'getEcsperformancetype',
            'orderId' => 'getOrderId',
            'productId' => 'getProductId',
            'maxPods' => 'getMaxPods',
            'periodType' => 'getPeriodType',
            'periodNum' => 'getPeriodNum',
            'isAutoRenew' => 'getIsAutoRenew',
            'isAutoPay' => 'getIsAutoPay',
            'dockerLvmConfigOverride' => 'getDockerLvmConfigOverride',
            'dockerBaseSize' => 'getDockerBaseSize',
            'publicKey' => 'getPublicKey',
            'alphaCcePreInstall' => 'getAlphaCcePreInstall',
            'alphaCcePostInstall' => 'getAlphaCcePostInstall',
            'alphaCceNodeImageId' => 'getAlphaCceNodeImageId',
            'chargingMode' => 'getChargingMode',
            'agencyName' => 'getAgencyName',
            'kubeReservedMem' => 'getKubeReservedMem',
            'systemReservedMem' => 'getSystemReservedMem',
            'initNodePassword' => 'getInitNodePassword',
            'securityReinforcementType' => 'getSecurityReinforcementType'
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
    const SECURITY_REINFORCEMENT_TYPE_NULL = 'null';
    const SECURITY_REINFORCEMENT_TYPE_CYBERSECURITY = 'cybersecurity';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getSecurityReinforcementTypeAllowableValues()
    {
        return [
            self::SECURITY_REINFORCEMENT_TYPE_NULL,
            self::SECURITY_REINFORCEMENT_TYPE_CYBERSECURITY,
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
        $this->container['ecsperformancetype'] = isset($data['ecsperformancetype']) ? $data['ecsperformancetype'] : null;
        $this->container['orderId'] = isset($data['orderId']) ? $data['orderId'] : null;
        $this->container['productId'] = isset($data['productId']) ? $data['productId'] : null;
        $this->container['maxPods'] = isset($data['maxPods']) ? $data['maxPods'] : null;
        $this->container['periodType'] = isset($data['periodType']) ? $data['periodType'] : null;
        $this->container['periodNum'] = isset($data['periodNum']) ? $data['periodNum'] : null;
        $this->container['isAutoRenew'] = isset($data['isAutoRenew']) ? $data['isAutoRenew'] : null;
        $this->container['isAutoPay'] = isset($data['isAutoPay']) ? $data['isAutoPay'] : null;
        $this->container['dockerLvmConfigOverride'] = isset($data['dockerLvmConfigOverride']) ? $data['dockerLvmConfigOverride'] : null;
        $this->container['dockerBaseSize'] = isset($data['dockerBaseSize']) ? $data['dockerBaseSize'] : null;
        $this->container['publicKey'] = isset($data['publicKey']) ? $data['publicKey'] : null;
        $this->container['alphaCcePreInstall'] = isset($data['alphaCcePreInstall']) ? $data['alphaCcePreInstall'] : null;
        $this->container['alphaCcePostInstall'] = isset($data['alphaCcePostInstall']) ? $data['alphaCcePostInstall'] : null;
        $this->container['alphaCceNodeImageId'] = isset($data['alphaCceNodeImageId']) ? $data['alphaCceNodeImageId'] : null;
        $this->container['chargingMode'] = isset($data['chargingMode']) ? $data['chargingMode'] : null;
        $this->container['agencyName'] = isset($data['agencyName']) ? $data['agencyName'] : null;
        $this->container['kubeReservedMem'] = isset($data['kubeReservedMem']) ? $data['kubeReservedMem'] : null;
        $this->container['systemReservedMem'] = isset($data['systemReservedMem']) ? $data['systemReservedMem'] : null;
        $this->container['initNodePassword'] = isset($data['initNodePassword']) ? $data['initNodePassword'] : null;
        $this->container['securityReinforcementType'] = isset($data['securityReinforcementType']) ? $data['securityReinforcementType'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['dockerBaseSize']) && ($this->container['dockerBaseSize'] > 500)) {
                $invalidProperties[] = "invalid value for 'dockerBaseSize', must be smaller than or equal to 500.";
            }
            if (!is_null($this->container['dockerBaseSize']) && ($this->container['dockerBaseSize'] < 10)) {
                $invalidProperties[] = "invalid value for 'dockerBaseSize', must be bigger than or equal to 10.";
            }
            $allowedValues = $this->getSecurityReinforcementTypeAllowableValues();
                if (!is_null($this->container['securityReinforcementType']) && !in_array($this->container['securityReinforcementType'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'securityReinforcementType', must be one of '%s'",
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
    * Gets ecsperformancetype
    *  云服务器规格的分类。响应中会返回此字段。
    *
    * @return string|null
    */
    public function getEcsperformancetype()
    {
        return $this->container['ecsperformancetype'];
    }

    /**
    * Sets ecsperformancetype
    *
    * @param string|null $ecsperformancetype 云服务器规格的分类。响应中会返回此字段。
    *
    * @return $this
    */
    public function setEcsperformancetype($ecsperformancetype)
    {
        $this->container['ecsperformancetype'] = $ecsperformancetype;
        return $this;
    }

    /**
    * Gets orderId
    *  **参数解释**： 订单ID。 **约束限制**： 节点付费类型为自动付费包周期类型时，响应中会返回此字段(仅创建场景涉及)，节点池场景响应返回中无该参数。 **取值范围**： 不涉及 **默认取值**： 不涉及
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
    * @param string|null $orderId **参数解释**： 订单ID。 **约束限制**： 节点付费类型为自动付费包周期类型时，响应中会返回此字段(仅创建场景涉及)，节点池场景响应返回中无该参数。 **取值范围**： 不涉及 **默认取值**： 不涉及
    *
    * @return $this
    */
    public function setOrderId($orderId)
    {
        $this->container['orderId'] = $orderId;
        return $this;
    }

    /**
    * Gets productId
    *  **参数解释**： 产品ID。 **约束限制**： 节点付费类型为自动付费包周期类型或者节点池类型是包周期节点池时，响应中会返回此字段。 **取值范围**： 不涉及 **默认取值**： 不涉及
    *
    * @return string|null
    */
    public function getProductId()
    {
        return $this->container['productId'];
    }

    /**
    * Sets productId
    *
    * @param string|null $productId **参数解释**： 产品ID。 **约束限制**： 节点付费类型为自动付费包周期类型或者节点池类型是包周期节点池时，响应中会返回此字段。 **取值范围**： 不涉及 **默认取值**： 不涉及
    *
    * @return $this
    */
    public function setProductId($productId)
    {
        $this->container['productId'] = $productId;
        return $this;
    }

    /**
    * Gets maxPods
    *  节点最大允许创建的实例数(Pod)，该数量包含系统默认实例，取值范围为16~256。  该设置的目的为防止节点因管理过多实例而负载过重，请根据您的业务需要进行设置。  节点可以创建多少个Pod，受多个参数影响，具体请参见[节点最多可以创建多少Pod](maxPods.xml)。
    *
    * @return int|null
    */
    public function getMaxPods()
    {
        return $this->container['maxPods'];
    }

    /**
    * Sets maxPods
    *
    * @param int|null $maxPods 节点最大允许创建的实例数(Pod)，该数量包含系统默认实例，取值范围为16~256。  该设置的目的为防止节点因管理过多实例而负载过重，请根据您的业务需要进行设置。  节点可以创建多少个Pod，受多个参数影响，具体请参见[节点最多可以创建多少Pod](maxPods.xml)。
    *
    * @return $this
    */
    public function setMaxPods($maxPods)
    {
        $this->container['maxPods'] = $maxPods;
        return $this;
    }

    /**
    * Gets periodType
    *  - month：月 - year：年 > 作为请求参数，billingMode为1（包周期）或2（已废弃：自动付费包周期）时生效，且为必选。 > 作为响应参数，仅在创建包周期节点时返回。
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
    * @param string|null $periodType - month：月 - year：年 > 作为请求参数，billingMode为1（包周期）或2（已废弃：自动付费包周期）时生效，且为必选。 > 作为响应参数，仅在创建包周期节点时返回。
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
    *  订购周期数，取值范围： - periodType=month（周期类型为月）时，取值为[1-9]。 - periodType=year（周期类型为年）时，取值为1。 > 作为请求参数，billingMode为1或2（已废弃）时生效，且为必选。 > 作为响应参数，仅在创建包周期节点时返回。
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
    * @param int|null $periodNum 订购周期数，取值范围： - periodType=month（周期类型为月）时，取值为[1-9]。 - periodType=year（周期类型为年）时，取值为1。 > 作为请求参数，billingMode为1或2（已废弃）时生效，且为必选。 > 作为响应参数，仅在创建包周期节点时返回。
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
    *  是否自动续订 - “true”：自动续订 - “false”：不自动续订 > billingMode为1或2（已废弃）时生效，不填写此参数时默认不会自动续费。
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
    * @param string|null $isAutoRenew 是否自动续订 - “true”：自动续订 - “false”：不自动续订 > billingMode为1或2（已废弃）时生效，不填写此参数时默认不会自动续费。
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
    *  是否自动扣款  - “true”：自动扣款 - “false”：不自动扣款  > billingMode为1或2（已废弃）时生效，billingMode为1时不填写此参数时默认不会自动扣款。（已废弃：billingMode为2时不填写此参数时默认会自动扣款）
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
    * @param string|null $isAutoPay 是否自动扣款  - “true”：自动扣款 - “false”：不自动扣款  > billingMode为1或2（已废弃）时生效，billingMode为1时不填写此参数时默认不会自动扣款。（已废弃：billingMode为2时不填写此参数时默认会自动扣款）
    *
    * @return $this
    */
    public function setIsAutoPay($isAutoPay)
    {
        $this->container['isAutoPay'] = $isAutoPay;
        return $this;
    }

    /**
    * Gets dockerLvmConfigOverride
    *  Docker数据盘配置项（已废弃，请使用storage字段）。默认配置示例如下：  ``` \"DockerLVMConfigOverride\":\"dockerThinpool=vgpaas/90%VG;kubernetesLV=vgpaas/10%VG;diskType=evs;lvType=linear\" ```  默认配置在无VD类型磁盘时，会由于数据盘查找失败而出错，请根据真实盘符类型填写diskType。 包含如下字段：   - userLV（可选）：用户空间的大小，示例格式：vgpaas/20%VG   - userPath（可选）：用户空间挂载路径，示例格式：/home/wqt-test   - diskType：磁盘类型，目前只有evs、hdd和ssd三种格式   - lvType：逻辑卷的类型，目前支持linear和striped两种，示例格式：striped   - dockerThinpool：Docker盘的空间大小，示例格式：vgpaas/60%VG   - kubernetesLV：Kubelet空间大小，示例格式：vgpaas/20%VG
    *
    * @return string|null
    */
    public function getDockerLvmConfigOverride()
    {
        return $this->container['dockerLvmConfigOverride'];
    }

    /**
    * Sets dockerLvmConfigOverride
    *
    * @param string|null $dockerLvmConfigOverride Docker数据盘配置项（已废弃，请使用storage字段）。默认配置示例如下：  ``` \"DockerLVMConfigOverride\":\"dockerThinpool=vgpaas/90%VG;kubernetesLV=vgpaas/10%VG;diskType=evs;lvType=linear\" ```  默认配置在无VD类型磁盘时，会由于数据盘查找失败而出错，请根据真实盘符类型填写diskType。 包含如下字段：   - userLV（可选）：用户空间的大小，示例格式：vgpaas/20%VG   - userPath（可选）：用户空间挂载路径，示例格式：/home/wqt-test   - diskType：磁盘类型，目前只有evs、hdd和ssd三种格式   - lvType：逻辑卷的类型，目前支持linear和striped两种，示例格式：striped   - dockerThinpool：Docker盘的空间大小，示例格式：vgpaas/60%VG   - kubernetesLV：Kubelet空间大小，示例格式：vgpaas/20%VG
    *
    * @return $this
    */
    public function setDockerLvmConfigOverride($dockerLvmConfigOverride)
    {
        $this->container['dockerLvmConfigOverride'] = $dockerLvmConfigOverride;
        return $this;
    }

    /**
    * Gets dockerBaseSize
    *  **参数解释**： 节点上单容器的可用磁盘空间大小（已废弃，请优先使用containerBaseSize参数），单位G。 CCE节点容器运行时空间配置请参考[数据盘空间分配说明](cce_01_0341.xml)。 **约束限制**： - Devicemapper模式下建议dockerBaseSize配置不超过80G，设置过大时可能会导致容器运行时初始化时间过长而启动失败，若对容器磁盘大小有特殊要求，可考虑使用挂载外部或本地存储方式代替。 - dockerBaseSize设置仅在v1.19.16-r0、v1.21.3-r0、v1.23.3-r0及以上的集群版本中的EulerOS[/HCEOS2.0](tag:hws,hws_hk,ctc,cmcc)节点上生效。  **取值范围**： 10-500。 **默认取值**： 不配置该值或值为0时将使用默认值： - Devicemapper模式下默认值为10； - OverlayFS模式默认不限制单容器可用空间大小。
    *
    * @return int|null
    */
    public function getDockerBaseSize()
    {
        return $this->container['dockerBaseSize'];
    }

    /**
    * Sets dockerBaseSize
    *
    * @param int|null $dockerBaseSize **参数解释**： 节点上单容器的可用磁盘空间大小（已废弃，请优先使用containerBaseSize参数），单位G。 CCE节点容器运行时空间配置请参考[数据盘空间分配说明](cce_01_0341.xml)。 **约束限制**： - Devicemapper模式下建议dockerBaseSize配置不超过80G，设置过大时可能会导致容器运行时初始化时间过长而启动失败，若对容器磁盘大小有特殊要求，可考虑使用挂载外部或本地存储方式代替。 - dockerBaseSize设置仅在v1.19.16-r0、v1.21.3-r0、v1.23.3-r0及以上的集群版本中的EulerOS[/HCEOS2.0](tag:hws,hws_hk,ctc,cmcc)节点上生效。  **取值范围**： 10-500。 **默认取值**： 不配置该值或值为0时将使用默认值： - Devicemapper模式下默认值为10； - OverlayFS模式默认不限制单容器可用空间大小。
    *
    * @return $this
    */
    public function setDockerBaseSize($dockerBaseSize)
    {
        $this->container['dockerBaseSize'] = $dockerBaseSize;
        return $this;
    }

    /**
    * Gets publicKey
    *  **参数解释**： 节点的公钥，应用于ssh密钥登录。 **约束限制**： - 当选择使用密钥对方式登录节点时该配置无效 - 创建、更新节点池场景不支持该参数  **取值范围**： 不涉及 **默认取值**： 不涉及
    *
    * @return string|null
    */
    public function getPublicKey()
    {
        return $this->container['publicKey'];
    }

    /**
    * Sets publicKey
    *
    * @param string|null $publicKey **参数解释**： 节点的公钥，应用于ssh密钥登录。 **约束限制**： - 当选择使用密钥对方式登录节点时该配置无效 - 创建、更新节点池场景不支持该参数  **取值范围**： 不涉及 **默认取值**： 不涉及
    *
    * @return $this
    */
    public function setPublicKey($publicKey)
    {
        $this->container['publicKey'] = $publicKey;
        return $this;
    }

    /**
    * Gets alphaCcePreInstall
    *  安装前执行脚本 > 输入的值需要经过Base64编码，方法为echo -n \"待编码内容\" | base64
    *
    * @return string|null
    */
    public function getAlphaCcePreInstall()
    {
        return $this->container['alphaCcePreInstall'];
    }

    /**
    * Sets alphaCcePreInstall
    *
    * @param string|null $alphaCcePreInstall 安装前执行脚本 > 输入的值需要经过Base64编码，方法为echo -n \"待编码内容\" | base64
    *
    * @return $this
    */
    public function setAlphaCcePreInstall($alphaCcePreInstall)
    {
        $this->container['alphaCcePreInstall'] = $alphaCcePreInstall;
        return $this;
    }

    /**
    * Gets alphaCcePostInstall
    *  安装后执行脚本 > 输入的值需要经过Base64编码，方法为echo -n \"待编码内容\" | base64。
    *
    * @return string|null
    */
    public function getAlphaCcePostInstall()
    {
        return $this->container['alphaCcePostInstall'];
    }

    /**
    * Sets alphaCcePostInstall
    *
    * @param string|null $alphaCcePostInstall 安装后执行脚本 > 输入的值需要经过Base64编码，方法为echo -n \"待编码内容\" | base64。
    *
    * @return $this
    */
    public function setAlphaCcePostInstall($alphaCcePostInstall)
    {
        $this->container['alphaCcePostInstall'] = $alphaCcePostInstall;
        return $this;
    }

    /**
    * Gets alphaCceNodeImageId
    *  **参数解释**： 节点自定义镜像ID，从IMS控制台获取，需要使用自定义镜像时使用此参数。 **约束限制**： 不涉及 [> - 若指定了extendParam中的securityReinforcementType参数为cybersecurity，节点将开启安全等保加固功能，则节点的操作系统类型必须使用HCE2.0。](tag:hws)  **取值范围**： 不涉及 **默认取值**： 不涉及
    *
    * @return string|null
    */
    public function getAlphaCceNodeImageId()
    {
        return $this->container['alphaCceNodeImageId'];
    }

    /**
    * Sets alphaCceNodeImageId
    *
    * @param string|null $alphaCceNodeImageId **参数解释**： 节点自定义镜像ID，从IMS控制台获取，需要使用自定义镜像时使用此参数。 **约束限制**： 不涉及 [> - 若指定了extendParam中的securityReinforcementType参数为cybersecurity，节点将开启安全等保加固功能，则节点的操作系统类型必须使用HCE2.0。](tag:hws)  **取值范围**： 不涉及 **默认取值**： 不涉及
    *
    * @return $this
    */
    public function setAlphaCceNodeImageId($alphaCceNodeImageId)
    {
        $this->container['alphaCceNodeImageId'] = $alphaCceNodeImageId;
        return $this;
    }

    /**
    * Gets chargingMode
    *  节点的计费模式。已废弃，请使用NodeSpec中的billingMode字段。
    *
    * @return int|null
    */
    public function getChargingMode()
    {
        return $this->container['chargingMode'];
    }

    /**
    * Sets chargingMode
    *
    * @param int|null $chargingMode 节点的计费模式。已废弃，请使用NodeSpec中的billingMode字段。
    *
    * @return $this
    */
    public function setChargingMode($chargingMode)
    {
        $this->container['chargingMode'] = $chargingMode;
        return $this;
    }

    /**
    * Gets agencyName
    *  委托的名称。  委托是由租户管理员在统一身份认证服务（Identity and Access Management，IAM）上创建的，可以为CCE节点提供访问云服务器的临时凭证。 作为响应参数仅在创建节点传入时返回该字段。
    *
    * @return string|null
    */
    public function getAgencyName()
    {
        return $this->container['agencyName'];
    }

    /**
    * Sets agencyName
    *
    * @param string|null $agencyName 委托的名称。  委托是由租户管理员在统一身份认证服务（Identity and Access Management，IAM）上创建的，可以为CCE节点提供访问云服务器的临时凭证。 作为响应参数仅在创建节点传入时返回该字段。
    *
    * @return $this
    */
    public function setAgencyName($agencyName)
    {
        $this->container['agencyName'] = $agencyName;
        return $this;
    }

    /**
    * Gets kubeReservedMem
    *  节点内存预留，Kubernetes相关组件预留值。[随节点规格变动，具体请参见[节点预留资源策略说明](https://support.huaweicloud.com/usermanual-cce/cce_10_0178.html)。](tag:hws)
    *
    * @return int|null
    */
    public function getKubeReservedMem()
    {
        return $this->container['kubeReservedMem'];
    }

    /**
    * Sets kubeReservedMem
    *
    * @param int|null $kubeReservedMem 节点内存预留，Kubernetes相关组件预留值。[随节点规格变动，具体请参见[节点预留资源策略说明](https://support.huaweicloud.com/usermanual-cce/cce_10_0178.html)。](tag:hws)
    *
    * @return $this
    */
    public function setKubeReservedMem($kubeReservedMem)
    {
        $this->container['kubeReservedMem'] = $kubeReservedMem;
        return $this;
    }

    /**
    * Gets systemReservedMem
    *  节点内存预留，系统组件预留值。[随节点规格变动，具体请参见[节点预留资源策略说明](https://support.huaweicloud.com/usermanual-cce/cce_10_0178.html)。](tag:hws)
    *
    * @return int|null
    */
    public function getSystemReservedMem()
    {
        return $this->container['systemReservedMem'];
    }

    /**
    * Sets systemReservedMem
    *
    * @param int|null $systemReservedMem 节点内存预留，系统组件预留值。[随节点规格变动，具体请参见[节点预留资源策略说明](https://support.huaweicloud.com/usermanual-cce/cce_10_0178.html)。](tag:hws)
    *
    * @return $this
    */
    public function setSystemReservedMem($systemReservedMem)
    {
        $this->container['systemReservedMem'] = $systemReservedMem;
        return $this;
    }

    /**
    * Gets initNodePassword
    *  **参数解释**： 节点密码，仅作为响应参数时，固定展示星号，节点池场景响应返回中无该参数。 **约束限制**： 不涉及 **取值范围**： 不涉及 **默认取值**： 不涉及
    *
    * @return string|null
    */
    public function getInitNodePassword()
    {
        return $this->container['initNodePassword'];
    }

    /**
    * Sets initNodePassword
    *
    * @param string|null $initNodePassword **参数解释**： 节点密码，仅作为响应参数时，固定展示星号，节点池场景响应返回中无该参数。 **约束限制**： 不涉及 **取值范围**： 不涉及 **默认取值**： 不涉及
    *
    * @return $this
    */
    public function setInitNodePassword($initNodePassword)
    {
        $this->container['initNodePassword'] = $initNodePassword;
        return $this;
    }

    /**
    * Gets securityReinforcementType
    *  **参数解释**： 指定节点安全加固类型，当前仅支持HCE2.0镜像等保2.0三级安全加固。 等保加固会对身份鉴别、访问控制、安全审计、入侵防范、恶意代码防范进行检查并加固。[详情请参见[Huawei Cloud EulerOS 2.0等保2.0三级版镜像概述](https://support.huaweicloud.com/productdesc-hce/hce_sec_0001.html)。](tag:hws) 若未指定此参数，则尝试用原有的值补全。如：原先HCE2.0镜像已配置安全加固，更新节点池时未指定此参数，则仍旧保持安全加固配置，若要取消，需显式指定参数值为\"null\"。 **约束限制**： 不涉及 **取值范围**： - 空值：表示不开启等保加固 - cybersecurity：表示开启等保加固  **默认取值**： 不涉及
    *
    * @return string|null
    */
    public function getSecurityReinforcementType()
    {
        return $this->container['securityReinforcementType'];
    }

    /**
    * Sets securityReinforcementType
    *
    * @param string|null $securityReinforcementType **参数解释**： 指定节点安全加固类型，当前仅支持HCE2.0镜像等保2.0三级安全加固。 等保加固会对身份鉴别、访问控制、安全审计、入侵防范、恶意代码防范进行检查并加固。[详情请参见[Huawei Cloud EulerOS 2.0等保2.0三级版镜像概述](https://support.huaweicloud.com/productdesc-hce/hce_sec_0001.html)。](tag:hws) 若未指定此参数，则尝试用原有的值补全。如：原先HCE2.0镜像已配置安全加固，更新节点池时未指定此参数，则仍旧保持安全加固配置，若要取消，需显式指定参数值为\"null\"。 **约束限制**： 不涉及 **取值范围**： - 空值：表示不开启等保加固 - cybersecurity：表示开启等保加固  **默认取值**： 不涉及
    *
    * @return $this
    */
    public function setSecurityReinforcementType($securityReinforcementType)
    {
        $this->container['securityReinforcementType'] = $securityReinforcementType;
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

