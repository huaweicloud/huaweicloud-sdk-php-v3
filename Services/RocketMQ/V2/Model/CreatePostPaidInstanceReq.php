<?php

namespace HuaweiCloud\SDK\RocketMQ\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class CreatePostPaidInstanceReq implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'CreatePostPaidInstanceReq';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * name  **参数解释**： 实例名称。 **约束限制**： 由英文字符开头，只能由英文字母、数字、中划线、下划线组成，长度为4~64的字符。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * description  **参数解释**： 实例的描述信息。 **约束限制**： 长度不超过1024的字符串。[且字符串不能包含\">\"与\"<\"，字符串首字符不能为\"=\",\"+\",\"-\",\"@\"的全角和半角字符。](tag:hcs)  > \\与\"在json报文中属于特殊字符，如果参数值中需要显示\\或者\"字符，请在字符前增加转义字符\\，比如\\\\或者\\\"。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * engine  **参数解释**： 消息引擎类型。 **约束限制**： 不涉及。 **取值范围**： - rocketmq：RocketMQ消息引擎。 - reliability：RocketMQ消息引擎别称。 **默认取值**： 不涉及。
    * engineVersion  **参数解释**： 消息引擎的版本。取值填写为：[4.8.0](tag:hws,hws_eu,hws_hk,ocb,hws_ocb,ctc,g42,hk_g42,tm,sbc,hk_sbc,hk_tm,cmcc,ax,srg)[5.x](tag:hws,hws_eu,hws_hk,ocb,hws_ocb,ctc,g42,hk_g42,tm,sbc,hk_sbc,hk_tm,hcs,dt,hcs_oemout,srg)。 **约束限制**： 不涉及。 **取值范围**： - rocketmq：RocketMQ消息引擎。 - reliability：RocketMQ消息引擎别称。 **默认取值**： 不涉及。
    * storageSpace  **参数解释**： 存储空间，单位：GB。 **约束限制**： 不涉及。 **取值范围**： 不同的实例规格支持不同的存储配置。 [- RocketMQ 5.x 单机存储取值范围：100-30000。](tag:dt) [- RocketMQ 5.x 集群存储取值范围：200-60000。](tag:dt) **默认取值**： 不涉及。
    * vpcId  **参数解释**： 虚拟私有云ID。  获取方法如下：参考《虚拟私有云 API参考》，调用“查询VPC列表”接口，从响应体中获取VPC ID。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * subnetId  **参数解释**： 子网信息。  获取方法如下：参考《虚拟私有云 API参考》，调用“查询子网列表”接口，从响应体中获取子网ID。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * securityGroupId  **参数解释**： 指定实例所属的安全组。  获取方法如下：参考《虚拟私有云 API参考》，调用“查询安全组列表”接口，从响应体中获取安全组ID。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * availableZones  **参数解释**： 创建节点到指定且有资源的可用区ID。请参考[查询可用区信息](ListAvailableZones.xml)获取可用区ID。 该参数不能为空数组或者数组的值为空， 请注意查看该可用区是否有资源。  创建RocketMQ实例，支持节点部署在1个或[3个及3个以上的可用区。](tag:hws,hws_eu,hws_hk,ocb,hws_ocb,ctc,g42,hk_g42,tm,sbc,hk_sbc,hk_tm,dt,cmcc)[2个可用区。](tag:fcs)在为节点指定可用区时，用逗号分隔开。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * productId  **参数解释**： RocketMQ实例规格。[x86环境后缀为.x86，arm环境为.arm。single表示单机，cluster表示集群。](tag:hcs,fcs,hcs_oemout)  **约束限制**： 不涉及。  **取值范围**： [当“type”为“single.basic”选择单机规格；当“type”为“cluster.basic”选择集群规格。](tag:dt) [- c6.2u8g.cluster.x86或c6.2u8g.cluster.arm：单个代理最大分区数50，单个代理最大消费组数100](tag:fcs) [- c6.4u8g.cluster.small：单个代理最大Topic数2000，单个代理最大消费组数2000](tag:hws,hws_eu,hws_hk,ocb,hws_ocb,ctc,g42,hk_g42,tm,sbc,hk_sbc,hk_tm,cmcc,ax,srg) [- c6.4u8g.cluster：单个代理最大Topic数4000，单个代理最大消费组数4000](tag:hws,hws_eu,hws_hk,ocb,hws_ocb,ctc,g42,hk_g42,tm,sbc,hk_sbc,hk_tm,cmcc,ax,srg) [- c6.4u16g.cluster.x86或c6.4u16g.cluster.arm：单个代理最大分区数100，单个代理最大消费组数200](tag:hcs,hcs_oemout) [- c6.8u16g.cluster：单个代理最大Topic数8000，单个代理最大消费组数8000](tag:hws,hws_eu,hws_hk,ocb,hws_ocb,ctc,g42,hk_g42,tm,sbc,hk_sbc,hk_tm,cmcc,ax,srg) [- c6.8u32g.cluster.x86或c6.8u32g.cluster.arm：单个代理最大Topic数200，单个代理最大消费组数400](tag:hcs,fcs,hcs_oemout) [- c6.12u24g.cluster：单个代理最大Topic数12000，单个代理最大消费组数12000](tag:hws,hws_eu,hws_hk,ocb,hws_ocb,ctc,g42,hk_g42,tm,sbc,hk_sbc,hk_tm,cmcc,ax,srg) [- c6.16u64g.cluster.x86或c6.16u64g.cluster.arm：单个代理最大Topic数300，单个代理最大消费组数600](tag:hcs,fcs,hcs_oemout) [- c6.16u32g.cluster：单个代理最大Topic数16000，单个代理最大消费组数16000](tag:hws,hws_eu,hws_hk,ocb,hws_ocb,ctc,g42,hk_g42,tm,sbc,hk_sbc,hk_tm,cmcc,ax,srg) [- c6.32u128g.cluster.x86或c6.32u128g.cluster.arm：单个代理最大Topic数400，单个代理最大消费组数800](tag:hcs,fcs,hcs_oemout) [- rocketmq.b1.large.1：RocketMQ 5.x 基础版单机规格，实例TPS 500](tag:hws,hws_eu,hws_hk,ocb,hws_ocb,ctc,g42,hk_g42,tm,sbc,hk_sbc,hk_tm,dt,srg) [- rocketmq.b2.large.4：RocketMQ 5.x 基础版集群规格，实例TPS 2000](tag:hws,hws_eu,hws_hk,ocb,hws_ocb,ctc,g42,hk_g42,tm,sbc,hk_sbc,hk_tm,dt,srg) [- rocketmq.b2.large.8：RocketMQ 5.x 基础版集群规格，实例TPS 4000](tag:hws,hws_eu,hws_hk,ocb,hws_ocb,ctc,g42,hk_g42,tm,sbc,hk_sbc,hk_tm,dt,srg) [- rocketmq.b2.large.12：RocketMQ 5.x 基础版集群规格，实例TPS 6000](tag:hws,hws_eu,hws_hk,ocb,hws_ocb,ctc,g42,hk_g42,tm,sbc,hk_sbc,hk_tm,dt,srg) [- rocketmq.p1.large.1：RocketMQ 5.x 专业版单机规格，实例TPS 500](tag:hws,hws_eu,hws_hk,ctc,srg) [- rocketmq.p2.large.8：RocketMQ 5.x 专业版集群规格，实例TPS 4000](tag:hws,hws_eu,hws_hk,ctc,srg) [- rocketmq.p2.large.12：RocketMQ 5.x 专业版集群规格，实例TPS 6000](tag:hws,hws_eu,hws_hk,ctc,srg) [- rocketmq.p2.large.20：RocketMQ 5.x 专业版集群规格，实例TPS 10000](tag:hws,hws_eu,hws_hk,ctc,srg) [- rocketmq.p2.large.40：RocketMQ 5.x 专业版集群规格，实例TPS 20000](tag:hws,hws_eu,hws_hk,ctc,srg) [- rocketmq.p2.large.100：RocketMQ 5.x 专业版集群规格，实例TPS 50000](tag:hws,hws_eu,hws_hk,ctc,srg) [- rocketmq.p2.large.150：RocketMQ 5.x 专业版集群规格，实例TPS 75000](tag:hws,hws_eu,hws_hk,ctc,srg) [- rocketmq.p2.large.200：RocketMQ 5.x 专业版集群规格，实例TPS 100000](tag:hws,hws_eu,hws_hk,ctc,srg) [- rocketmq.p2.large.300：RocketMQ 5.x 专业版集群规格，实例TPS 150000](tag:hws,hws_eu,hws_hk,ctc,srg)  **默认取值**： 不涉及。
    * sslEnable  **参数解释**： 是否打开SSL加密访问。 **约束限制**： 不涉及。 **取值范围**： - true：打开SSL加密访问。 - false：不打开SSL加密访问。 **默认取值**： false。
    * storageSpecCode  **参数解释**： 存储IO规格。 **约束限制**： 不涉及。 **取值范围**： - dms.physical.storage.high.v2：高IO类型磁盘 - dms.physical.storage.ultra.v2：超高IO类型磁盘 [- dms.physical.storage.general：使用通用型SSD的磁盘类型。](tag:hws,hws_hk,dt,ctc,ax) [- dms.physical.storage.extreme：使用极速型SSD的磁盘类型。](tag:hws,hws_hk,dt,ctc,ax) **默认取值**： 不涉及。
    * enterpriseProjectId  **参数解释**： 企业项目ID。若为企业项目账号，该参数必填。 **约束限制**： 不涉及。 **取值范围**：  不涉及。 **默认取值**： 不涉及。
    * enableAcl  **参数解释**： 是否开启访问控制列表。 **约束限制**： 不涉及。 **取值范围**： - true：开启访问控制列表。 - false：不开启访问控制列表。 **默认取值**： false。
    * ipv6Enable  **参数解释**： 是否支持IPv6。[华为云Stack不支持此参数。](tag:hcs,hcs_oemout) **约束限制**： 不涉及。 **取值范围**： - true：支持 - false：不支持 **默认取值**： false。
    * proxyEnable  **参数解释**： 是否开启Proxy功能。 **约束限制**： 不涉及。 **取值范围**： - true：支持 - false：不支持 **默认取值**： 不涉及。
    * enablePublicip  **参数解释**： 是否开启公网访问功能。默认不开启公网。 **约束限制**： 不涉及。 **取值范围**： - true：支持 - false：不支持 **默认取值**： false。
    * diskEncryptedEnable  **参数解释**： 是否开启磁盘加密。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * diskEncryptedKey  **参数解释**： 磁盘加密key，未开启磁盘加密时为空 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * publicipId  **参数解释**： 实例绑定的弹性IP地址的ID。  以英文逗号隔开多个弹性IP地址的ID。  如果开启了公网访问功能（即enable_publicip为true），该字段为必选。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * brokerNum  **参数解释**： 代理个数。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * archType  **参数解释**： 架构类型。 **约束限制**： 不涉及。 **取值范围**： - X86：复杂指令集计算。 - ARM：精简指令集计算。 **默认取值**： 不涉及。
    * tlsMode  **参数解释**： 实例使用的安全协议。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'name' => 'string',
            'description' => 'string',
            'engine' => 'string',
            'engineVersion' => 'string',
            'storageSpace' => 'int',
            'vpcId' => 'string',
            'subnetId' => 'string',
            'securityGroupId' => 'string',
            'availableZones' => 'string[]',
            'productId' => 'string',
            'sslEnable' => 'bool',
            'storageSpecCode' => 'string',
            'enterpriseProjectId' => 'string',
            'enableAcl' => 'bool',
            'ipv6Enable' => 'bool',
            'proxyEnable' => 'bool',
            'enablePublicip' => 'bool',
            'diskEncryptedEnable' => 'bool',
            'diskEncryptedKey' => 'string',
            'publicipId' => 'string',
            'brokerNum' => 'int',
            'archType' => 'string',
            'tlsMode' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * name  **参数解释**： 实例名称。 **约束限制**： 由英文字符开头，只能由英文字母、数字、中划线、下划线组成，长度为4~64的字符。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * description  **参数解释**： 实例的描述信息。 **约束限制**： 长度不超过1024的字符串。[且字符串不能包含\">\"与\"<\"，字符串首字符不能为\"=\",\"+\",\"-\",\"@\"的全角和半角字符。](tag:hcs)  > \\与\"在json报文中属于特殊字符，如果参数值中需要显示\\或者\"字符，请在字符前增加转义字符\\，比如\\\\或者\\\"。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * engine  **参数解释**： 消息引擎类型。 **约束限制**： 不涉及。 **取值范围**： - rocketmq：RocketMQ消息引擎。 - reliability：RocketMQ消息引擎别称。 **默认取值**： 不涉及。
    * engineVersion  **参数解释**： 消息引擎的版本。取值填写为：[4.8.0](tag:hws,hws_eu,hws_hk,ocb,hws_ocb,ctc,g42,hk_g42,tm,sbc,hk_sbc,hk_tm,cmcc,ax,srg)[5.x](tag:hws,hws_eu,hws_hk,ocb,hws_ocb,ctc,g42,hk_g42,tm,sbc,hk_sbc,hk_tm,hcs,dt,hcs_oemout,srg)。 **约束限制**： 不涉及。 **取值范围**： - rocketmq：RocketMQ消息引擎。 - reliability：RocketMQ消息引擎别称。 **默认取值**： 不涉及。
    * storageSpace  **参数解释**： 存储空间，单位：GB。 **约束限制**： 不涉及。 **取值范围**： 不同的实例规格支持不同的存储配置。 [- RocketMQ 5.x 单机存储取值范围：100-30000。](tag:dt) [- RocketMQ 5.x 集群存储取值范围：200-60000。](tag:dt) **默认取值**： 不涉及。
    * vpcId  **参数解释**： 虚拟私有云ID。  获取方法如下：参考《虚拟私有云 API参考》，调用“查询VPC列表”接口，从响应体中获取VPC ID。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * subnetId  **参数解释**： 子网信息。  获取方法如下：参考《虚拟私有云 API参考》，调用“查询子网列表”接口，从响应体中获取子网ID。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * securityGroupId  **参数解释**： 指定实例所属的安全组。  获取方法如下：参考《虚拟私有云 API参考》，调用“查询安全组列表”接口，从响应体中获取安全组ID。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * availableZones  **参数解释**： 创建节点到指定且有资源的可用区ID。请参考[查询可用区信息](ListAvailableZones.xml)获取可用区ID。 该参数不能为空数组或者数组的值为空， 请注意查看该可用区是否有资源。  创建RocketMQ实例，支持节点部署在1个或[3个及3个以上的可用区。](tag:hws,hws_eu,hws_hk,ocb,hws_ocb,ctc,g42,hk_g42,tm,sbc,hk_sbc,hk_tm,dt,cmcc)[2个可用区。](tag:fcs)在为节点指定可用区时，用逗号分隔开。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * productId  **参数解释**： RocketMQ实例规格。[x86环境后缀为.x86，arm环境为.arm。single表示单机，cluster表示集群。](tag:hcs,fcs,hcs_oemout)  **约束限制**： 不涉及。  **取值范围**： [当“type”为“single.basic”选择单机规格；当“type”为“cluster.basic”选择集群规格。](tag:dt) [- c6.2u8g.cluster.x86或c6.2u8g.cluster.arm：单个代理最大分区数50，单个代理最大消费组数100](tag:fcs) [- c6.4u8g.cluster.small：单个代理最大Topic数2000，单个代理最大消费组数2000](tag:hws,hws_eu,hws_hk,ocb,hws_ocb,ctc,g42,hk_g42,tm,sbc,hk_sbc,hk_tm,cmcc,ax,srg) [- c6.4u8g.cluster：单个代理最大Topic数4000，单个代理最大消费组数4000](tag:hws,hws_eu,hws_hk,ocb,hws_ocb,ctc,g42,hk_g42,tm,sbc,hk_sbc,hk_tm,cmcc,ax,srg) [- c6.4u16g.cluster.x86或c6.4u16g.cluster.arm：单个代理最大分区数100，单个代理最大消费组数200](tag:hcs,hcs_oemout) [- c6.8u16g.cluster：单个代理最大Topic数8000，单个代理最大消费组数8000](tag:hws,hws_eu,hws_hk,ocb,hws_ocb,ctc,g42,hk_g42,tm,sbc,hk_sbc,hk_tm,cmcc,ax,srg) [- c6.8u32g.cluster.x86或c6.8u32g.cluster.arm：单个代理最大Topic数200，单个代理最大消费组数400](tag:hcs,fcs,hcs_oemout) [- c6.12u24g.cluster：单个代理最大Topic数12000，单个代理最大消费组数12000](tag:hws,hws_eu,hws_hk,ocb,hws_ocb,ctc,g42,hk_g42,tm,sbc,hk_sbc,hk_tm,cmcc,ax,srg) [- c6.16u64g.cluster.x86或c6.16u64g.cluster.arm：单个代理最大Topic数300，单个代理最大消费组数600](tag:hcs,fcs,hcs_oemout) [- c6.16u32g.cluster：单个代理最大Topic数16000，单个代理最大消费组数16000](tag:hws,hws_eu,hws_hk,ocb,hws_ocb,ctc,g42,hk_g42,tm,sbc,hk_sbc,hk_tm,cmcc,ax,srg) [- c6.32u128g.cluster.x86或c6.32u128g.cluster.arm：单个代理最大Topic数400，单个代理最大消费组数800](tag:hcs,fcs,hcs_oemout) [- rocketmq.b1.large.1：RocketMQ 5.x 基础版单机规格，实例TPS 500](tag:hws,hws_eu,hws_hk,ocb,hws_ocb,ctc,g42,hk_g42,tm,sbc,hk_sbc,hk_tm,dt,srg) [- rocketmq.b2.large.4：RocketMQ 5.x 基础版集群规格，实例TPS 2000](tag:hws,hws_eu,hws_hk,ocb,hws_ocb,ctc,g42,hk_g42,tm,sbc,hk_sbc,hk_tm,dt,srg) [- rocketmq.b2.large.8：RocketMQ 5.x 基础版集群规格，实例TPS 4000](tag:hws,hws_eu,hws_hk,ocb,hws_ocb,ctc,g42,hk_g42,tm,sbc,hk_sbc,hk_tm,dt,srg) [- rocketmq.b2.large.12：RocketMQ 5.x 基础版集群规格，实例TPS 6000](tag:hws,hws_eu,hws_hk,ocb,hws_ocb,ctc,g42,hk_g42,tm,sbc,hk_sbc,hk_tm,dt,srg) [- rocketmq.p1.large.1：RocketMQ 5.x 专业版单机规格，实例TPS 500](tag:hws,hws_eu,hws_hk,ctc,srg) [- rocketmq.p2.large.8：RocketMQ 5.x 专业版集群规格，实例TPS 4000](tag:hws,hws_eu,hws_hk,ctc,srg) [- rocketmq.p2.large.12：RocketMQ 5.x 专业版集群规格，实例TPS 6000](tag:hws,hws_eu,hws_hk,ctc,srg) [- rocketmq.p2.large.20：RocketMQ 5.x 专业版集群规格，实例TPS 10000](tag:hws,hws_eu,hws_hk,ctc,srg) [- rocketmq.p2.large.40：RocketMQ 5.x 专业版集群规格，实例TPS 20000](tag:hws,hws_eu,hws_hk,ctc,srg) [- rocketmq.p2.large.100：RocketMQ 5.x 专业版集群规格，实例TPS 50000](tag:hws,hws_eu,hws_hk,ctc,srg) [- rocketmq.p2.large.150：RocketMQ 5.x 专业版集群规格，实例TPS 75000](tag:hws,hws_eu,hws_hk,ctc,srg) [- rocketmq.p2.large.200：RocketMQ 5.x 专业版集群规格，实例TPS 100000](tag:hws,hws_eu,hws_hk,ctc,srg) [- rocketmq.p2.large.300：RocketMQ 5.x 专业版集群规格，实例TPS 150000](tag:hws,hws_eu,hws_hk,ctc,srg)  **默认取值**： 不涉及。
    * sslEnable  **参数解释**： 是否打开SSL加密访问。 **约束限制**： 不涉及。 **取值范围**： - true：打开SSL加密访问。 - false：不打开SSL加密访问。 **默认取值**： false。
    * storageSpecCode  **参数解释**： 存储IO规格。 **约束限制**： 不涉及。 **取值范围**： - dms.physical.storage.high.v2：高IO类型磁盘 - dms.physical.storage.ultra.v2：超高IO类型磁盘 [- dms.physical.storage.general：使用通用型SSD的磁盘类型。](tag:hws,hws_hk,dt,ctc,ax) [- dms.physical.storage.extreme：使用极速型SSD的磁盘类型。](tag:hws,hws_hk,dt,ctc,ax) **默认取值**： 不涉及。
    * enterpriseProjectId  **参数解释**： 企业项目ID。若为企业项目账号，该参数必填。 **约束限制**： 不涉及。 **取值范围**：  不涉及。 **默认取值**： 不涉及。
    * enableAcl  **参数解释**： 是否开启访问控制列表。 **约束限制**： 不涉及。 **取值范围**： - true：开启访问控制列表。 - false：不开启访问控制列表。 **默认取值**： false。
    * ipv6Enable  **参数解释**： 是否支持IPv6。[华为云Stack不支持此参数。](tag:hcs,hcs_oemout) **约束限制**： 不涉及。 **取值范围**： - true：支持 - false：不支持 **默认取值**： false。
    * proxyEnable  **参数解释**： 是否开启Proxy功能。 **约束限制**： 不涉及。 **取值范围**： - true：支持 - false：不支持 **默认取值**： 不涉及。
    * enablePublicip  **参数解释**： 是否开启公网访问功能。默认不开启公网。 **约束限制**： 不涉及。 **取值范围**： - true：支持 - false：不支持 **默认取值**： false。
    * diskEncryptedEnable  **参数解释**： 是否开启磁盘加密。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * diskEncryptedKey  **参数解释**： 磁盘加密key，未开启磁盘加密时为空 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * publicipId  **参数解释**： 实例绑定的弹性IP地址的ID。  以英文逗号隔开多个弹性IP地址的ID。  如果开启了公网访问功能（即enable_publicip为true），该字段为必选。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * brokerNum  **参数解释**： 代理个数。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * archType  **参数解释**： 架构类型。 **约束限制**： 不涉及。 **取值范围**： - X86：复杂指令集计算。 - ARM：精简指令集计算。 **默认取值**： 不涉及。
    * tlsMode  **参数解释**： 实例使用的安全协议。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'name' => null,
        'description' => null,
        'engine' => null,
        'engineVersion' => null,
        'storageSpace' => 'int32',
        'vpcId' => null,
        'subnetId' => null,
        'securityGroupId' => null,
        'availableZones' => null,
        'productId' => null,
        'sslEnable' => null,
        'storageSpecCode' => null,
        'enterpriseProjectId' => null,
        'enableAcl' => null,
        'ipv6Enable' => null,
        'proxyEnable' => null,
        'enablePublicip' => null,
        'diskEncryptedEnable' => null,
        'diskEncryptedKey' => null,
        'publicipId' => null,
        'brokerNum' => 'int32',
        'archType' => null,
        'tlsMode' => null
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
    * name  **参数解释**： 实例名称。 **约束限制**： 由英文字符开头，只能由英文字母、数字、中划线、下划线组成，长度为4~64的字符。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * description  **参数解释**： 实例的描述信息。 **约束限制**： 长度不超过1024的字符串。[且字符串不能包含\">\"与\"<\"，字符串首字符不能为\"=\",\"+\",\"-\",\"@\"的全角和半角字符。](tag:hcs)  > \\与\"在json报文中属于特殊字符，如果参数值中需要显示\\或者\"字符，请在字符前增加转义字符\\，比如\\\\或者\\\"。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * engine  **参数解释**： 消息引擎类型。 **约束限制**： 不涉及。 **取值范围**： - rocketmq：RocketMQ消息引擎。 - reliability：RocketMQ消息引擎别称。 **默认取值**： 不涉及。
    * engineVersion  **参数解释**： 消息引擎的版本。取值填写为：[4.8.0](tag:hws,hws_eu,hws_hk,ocb,hws_ocb,ctc,g42,hk_g42,tm,sbc,hk_sbc,hk_tm,cmcc,ax,srg)[5.x](tag:hws,hws_eu,hws_hk,ocb,hws_ocb,ctc,g42,hk_g42,tm,sbc,hk_sbc,hk_tm,hcs,dt,hcs_oemout,srg)。 **约束限制**： 不涉及。 **取值范围**： - rocketmq：RocketMQ消息引擎。 - reliability：RocketMQ消息引擎别称。 **默认取值**： 不涉及。
    * storageSpace  **参数解释**： 存储空间，单位：GB。 **约束限制**： 不涉及。 **取值范围**： 不同的实例规格支持不同的存储配置。 [- RocketMQ 5.x 单机存储取值范围：100-30000。](tag:dt) [- RocketMQ 5.x 集群存储取值范围：200-60000。](tag:dt) **默认取值**： 不涉及。
    * vpcId  **参数解释**： 虚拟私有云ID。  获取方法如下：参考《虚拟私有云 API参考》，调用“查询VPC列表”接口，从响应体中获取VPC ID。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * subnetId  **参数解释**： 子网信息。  获取方法如下：参考《虚拟私有云 API参考》，调用“查询子网列表”接口，从响应体中获取子网ID。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * securityGroupId  **参数解释**： 指定实例所属的安全组。  获取方法如下：参考《虚拟私有云 API参考》，调用“查询安全组列表”接口，从响应体中获取安全组ID。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * availableZones  **参数解释**： 创建节点到指定且有资源的可用区ID。请参考[查询可用区信息](ListAvailableZones.xml)获取可用区ID。 该参数不能为空数组或者数组的值为空， 请注意查看该可用区是否有资源。  创建RocketMQ实例，支持节点部署在1个或[3个及3个以上的可用区。](tag:hws,hws_eu,hws_hk,ocb,hws_ocb,ctc,g42,hk_g42,tm,sbc,hk_sbc,hk_tm,dt,cmcc)[2个可用区。](tag:fcs)在为节点指定可用区时，用逗号分隔开。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * productId  **参数解释**： RocketMQ实例规格。[x86环境后缀为.x86，arm环境为.arm。single表示单机，cluster表示集群。](tag:hcs,fcs,hcs_oemout)  **约束限制**： 不涉及。  **取值范围**： [当“type”为“single.basic”选择单机规格；当“type”为“cluster.basic”选择集群规格。](tag:dt) [- c6.2u8g.cluster.x86或c6.2u8g.cluster.arm：单个代理最大分区数50，单个代理最大消费组数100](tag:fcs) [- c6.4u8g.cluster.small：单个代理最大Topic数2000，单个代理最大消费组数2000](tag:hws,hws_eu,hws_hk,ocb,hws_ocb,ctc,g42,hk_g42,tm,sbc,hk_sbc,hk_tm,cmcc,ax,srg) [- c6.4u8g.cluster：单个代理最大Topic数4000，单个代理最大消费组数4000](tag:hws,hws_eu,hws_hk,ocb,hws_ocb,ctc,g42,hk_g42,tm,sbc,hk_sbc,hk_tm,cmcc,ax,srg) [- c6.4u16g.cluster.x86或c6.4u16g.cluster.arm：单个代理最大分区数100，单个代理最大消费组数200](tag:hcs,hcs_oemout) [- c6.8u16g.cluster：单个代理最大Topic数8000，单个代理最大消费组数8000](tag:hws,hws_eu,hws_hk,ocb,hws_ocb,ctc,g42,hk_g42,tm,sbc,hk_sbc,hk_tm,cmcc,ax,srg) [- c6.8u32g.cluster.x86或c6.8u32g.cluster.arm：单个代理最大Topic数200，单个代理最大消费组数400](tag:hcs,fcs,hcs_oemout) [- c6.12u24g.cluster：单个代理最大Topic数12000，单个代理最大消费组数12000](tag:hws,hws_eu,hws_hk,ocb,hws_ocb,ctc,g42,hk_g42,tm,sbc,hk_sbc,hk_tm,cmcc,ax,srg) [- c6.16u64g.cluster.x86或c6.16u64g.cluster.arm：单个代理最大Topic数300，单个代理最大消费组数600](tag:hcs,fcs,hcs_oemout) [- c6.16u32g.cluster：单个代理最大Topic数16000，单个代理最大消费组数16000](tag:hws,hws_eu,hws_hk,ocb,hws_ocb,ctc,g42,hk_g42,tm,sbc,hk_sbc,hk_tm,cmcc,ax,srg) [- c6.32u128g.cluster.x86或c6.32u128g.cluster.arm：单个代理最大Topic数400，单个代理最大消费组数800](tag:hcs,fcs,hcs_oemout) [- rocketmq.b1.large.1：RocketMQ 5.x 基础版单机规格，实例TPS 500](tag:hws,hws_eu,hws_hk,ocb,hws_ocb,ctc,g42,hk_g42,tm,sbc,hk_sbc,hk_tm,dt,srg) [- rocketmq.b2.large.4：RocketMQ 5.x 基础版集群规格，实例TPS 2000](tag:hws,hws_eu,hws_hk,ocb,hws_ocb,ctc,g42,hk_g42,tm,sbc,hk_sbc,hk_tm,dt,srg) [- rocketmq.b2.large.8：RocketMQ 5.x 基础版集群规格，实例TPS 4000](tag:hws,hws_eu,hws_hk,ocb,hws_ocb,ctc,g42,hk_g42,tm,sbc,hk_sbc,hk_tm,dt,srg) [- rocketmq.b2.large.12：RocketMQ 5.x 基础版集群规格，实例TPS 6000](tag:hws,hws_eu,hws_hk,ocb,hws_ocb,ctc,g42,hk_g42,tm,sbc,hk_sbc,hk_tm,dt,srg) [- rocketmq.p1.large.1：RocketMQ 5.x 专业版单机规格，实例TPS 500](tag:hws,hws_eu,hws_hk,ctc,srg) [- rocketmq.p2.large.8：RocketMQ 5.x 专业版集群规格，实例TPS 4000](tag:hws,hws_eu,hws_hk,ctc,srg) [- rocketmq.p2.large.12：RocketMQ 5.x 专业版集群规格，实例TPS 6000](tag:hws,hws_eu,hws_hk,ctc,srg) [- rocketmq.p2.large.20：RocketMQ 5.x 专业版集群规格，实例TPS 10000](tag:hws,hws_eu,hws_hk,ctc,srg) [- rocketmq.p2.large.40：RocketMQ 5.x 专业版集群规格，实例TPS 20000](tag:hws,hws_eu,hws_hk,ctc,srg) [- rocketmq.p2.large.100：RocketMQ 5.x 专业版集群规格，实例TPS 50000](tag:hws,hws_eu,hws_hk,ctc,srg) [- rocketmq.p2.large.150：RocketMQ 5.x 专业版集群规格，实例TPS 75000](tag:hws,hws_eu,hws_hk,ctc,srg) [- rocketmq.p2.large.200：RocketMQ 5.x 专业版集群规格，实例TPS 100000](tag:hws,hws_eu,hws_hk,ctc,srg) [- rocketmq.p2.large.300：RocketMQ 5.x 专业版集群规格，实例TPS 150000](tag:hws,hws_eu,hws_hk,ctc,srg)  **默认取值**： 不涉及。
    * sslEnable  **参数解释**： 是否打开SSL加密访问。 **约束限制**： 不涉及。 **取值范围**： - true：打开SSL加密访问。 - false：不打开SSL加密访问。 **默认取值**： false。
    * storageSpecCode  **参数解释**： 存储IO规格。 **约束限制**： 不涉及。 **取值范围**： - dms.physical.storage.high.v2：高IO类型磁盘 - dms.physical.storage.ultra.v2：超高IO类型磁盘 [- dms.physical.storage.general：使用通用型SSD的磁盘类型。](tag:hws,hws_hk,dt,ctc,ax) [- dms.physical.storage.extreme：使用极速型SSD的磁盘类型。](tag:hws,hws_hk,dt,ctc,ax) **默认取值**： 不涉及。
    * enterpriseProjectId  **参数解释**： 企业项目ID。若为企业项目账号，该参数必填。 **约束限制**： 不涉及。 **取值范围**：  不涉及。 **默认取值**： 不涉及。
    * enableAcl  **参数解释**： 是否开启访问控制列表。 **约束限制**： 不涉及。 **取值范围**： - true：开启访问控制列表。 - false：不开启访问控制列表。 **默认取值**： false。
    * ipv6Enable  **参数解释**： 是否支持IPv6。[华为云Stack不支持此参数。](tag:hcs,hcs_oemout) **约束限制**： 不涉及。 **取值范围**： - true：支持 - false：不支持 **默认取值**： false。
    * proxyEnable  **参数解释**： 是否开启Proxy功能。 **约束限制**： 不涉及。 **取值范围**： - true：支持 - false：不支持 **默认取值**： 不涉及。
    * enablePublicip  **参数解释**： 是否开启公网访问功能。默认不开启公网。 **约束限制**： 不涉及。 **取值范围**： - true：支持 - false：不支持 **默认取值**： false。
    * diskEncryptedEnable  **参数解释**： 是否开启磁盘加密。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * diskEncryptedKey  **参数解释**： 磁盘加密key，未开启磁盘加密时为空 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * publicipId  **参数解释**： 实例绑定的弹性IP地址的ID。  以英文逗号隔开多个弹性IP地址的ID。  如果开启了公网访问功能（即enable_publicip为true），该字段为必选。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * brokerNum  **参数解释**： 代理个数。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * archType  **参数解释**： 架构类型。 **约束限制**： 不涉及。 **取值范围**： - X86：复杂指令集计算。 - ARM：精简指令集计算。 **默认取值**： 不涉及。
    * tlsMode  **参数解释**： 实例使用的安全协议。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'name' => 'name',
            'description' => 'description',
            'engine' => 'engine',
            'engineVersion' => 'engine_version',
            'storageSpace' => 'storage_space',
            'vpcId' => 'vpc_id',
            'subnetId' => 'subnet_id',
            'securityGroupId' => 'security_group_id',
            'availableZones' => 'available_zones',
            'productId' => 'product_id',
            'sslEnable' => 'ssl_enable',
            'storageSpecCode' => 'storage_spec_code',
            'enterpriseProjectId' => 'enterprise_project_id',
            'enableAcl' => 'enable_acl',
            'ipv6Enable' => 'ipv6_enable',
            'proxyEnable' => 'proxy_enable',
            'enablePublicip' => 'enable_publicip',
            'diskEncryptedEnable' => 'disk_encrypted_enable',
            'diskEncryptedKey' => 'disk_encrypted_key',
            'publicipId' => 'publicip_id',
            'brokerNum' => 'broker_num',
            'archType' => 'arch_type',
            'tlsMode' => 'tls_mode'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * name  **参数解释**： 实例名称。 **约束限制**： 由英文字符开头，只能由英文字母、数字、中划线、下划线组成，长度为4~64的字符。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * description  **参数解释**： 实例的描述信息。 **约束限制**： 长度不超过1024的字符串。[且字符串不能包含\">\"与\"<\"，字符串首字符不能为\"=\",\"+\",\"-\",\"@\"的全角和半角字符。](tag:hcs)  > \\与\"在json报文中属于特殊字符，如果参数值中需要显示\\或者\"字符，请在字符前增加转义字符\\，比如\\\\或者\\\"。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * engine  **参数解释**： 消息引擎类型。 **约束限制**： 不涉及。 **取值范围**： - rocketmq：RocketMQ消息引擎。 - reliability：RocketMQ消息引擎别称。 **默认取值**： 不涉及。
    * engineVersion  **参数解释**： 消息引擎的版本。取值填写为：[4.8.0](tag:hws,hws_eu,hws_hk,ocb,hws_ocb,ctc,g42,hk_g42,tm,sbc,hk_sbc,hk_tm,cmcc,ax,srg)[5.x](tag:hws,hws_eu,hws_hk,ocb,hws_ocb,ctc,g42,hk_g42,tm,sbc,hk_sbc,hk_tm,hcs,dt,hcs_oemout,srg)。 **约束限制**： 不涉及。 **取值范围**： - rocketmq：RocketMQ消息引擎。 - reliability：RocketMQ消息引擎别称。 **默认取值**： 不涉及。
    * storageSpace  **参数解释**： 存储空间，单位：GB。 **约束限制**： 不涉及。 **取值范围**： 不同的实例规格支持不同的存储配置。 [- RocketMQ 5.x 单机存储取值范围：100-30000。](tag:dt) [- RocketMQ 5.x 集群存储取值范围：200-60000。](tag:dt) **默认取值**： 不涉及。
    * vpcId  **参数解释**： 虚拟私有云ID。  获取方法如下：参考《虚拟私有云 API参考》，调用“查询VPC列表”接口，从响应体中获取VPC ID。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * subnetId  **参数解释**： 子网信息。  获取方法如下：参考《虚拟私有云 API参考》，调用“查询子网列表”接口，从响应体中获取子网ID。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * securityGroupId  **参数解释**： 指定实例所属的安全组。  获取方法如下：参考《虚拟私有云 API参考》，调用“查询安全组列表”接口，从响应体中获取安全组ID。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * availableZones  **参数解释**： 创建节点到指定且有资源的可用区ID。请参考[查询可用区信息](ListAvailableZones.xml)获取可用区ID。 该参数不能为空数组或者数组的值为空， 请注意查看该可用区是否有资源。  创建RocketMQ实例，支持节点部署在1个或[3个及3个以上的可用区。](tag:hws,hws_eu,hws_hk,ocb,hws_ocb,ctc,g42,hk_g42,tm,sbc,hk_sbc,hk_tm,dt,cmcc)[2个可用区。](tag:fcs)在为节点指定可用区时，用逗号分隔开。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * productId  **参数解释**： RocketMQ实例规格。[x86环境后缀为.x86，arm环境为.arm。single表示单机，cluster表示集群。](tag:hcs,fcs,hcs_oemout)  **约束限制**： 不涉及。  **取值范围**： [当“type”为“single.basic”选择单机规格；当“type”为“cluster.basic”选择集群规格。](tag:dt) [- c6.2u8g.cluster.x86或c6.2u8g.cluster.arm：单个代理最大分区数50，单个代理最大消费组数100](tag:fcs) [- c6.4u8g.cluster.small：单个代理最大Topic数2000，单个代理最大消费组数2000](tag:hws,hws_eu,hws_hk,ocb,hws_ocb,ctc,g42,hk_g42,tm,sbc,hk_sbc,hk_tm,cmcc,ax,srg) [- c6.4u8g.cluster：单个代理最大Topic数4000，单个代理最大消费组数4000](tag:hws,hws_eu,hws_hk,ocb,hws_ocb,ctc,g42,hk_g42,tm,sbc,hk_sbc,hk_tm,cmcc,ax,srg) [- c6.4u16g.cluster.x86或c6.4u16g.cluster.arm：单个代理最大分区数100，单个代理最大消费组数200](tag:hcs,hcs_oemout) [- c6.8u16g.cluster：单个代理最大Topic数8000，单个代理最大消费组数8000](tag:hws,hws_eu,hws_hk,ocb,hws_ocb,ctc,g42,hk_g42,tm,sbc,hk_sbc,hk_tm,cmcc,ax,srg) [- c6.8u32g.cluster.x86或c6.8u32g.cluster.arm：单个代理最大Topic数200，单个代理最大消费组数400](tag:hcs,fcs,hcs_oemout) [- c6.12u24g.cluster：单个代理最大Topic数12000，单个代理最大消费组数12000](tag:hws,hws_eu,hws_hk,ocb,hws_ocb,ctc,g42,hk_g42,tm,sbc,hk_sbc,hk_tm,cmcc,ax,srg) [- c6.16u64g.cluster.x86或c6.16u64g.cluster.arm：单个代理最大Topic数300，单个代理最大消费组数600](tag:hcs,fcs,hcs_oemout) [- c6.16u32g.cluster：单个代理最大Topic数16000，单个代理最大消费组数16000](tag:hws,hws_eu,hws_hk,ocb,hws_ocb,ctc,g42,hk_g42,tm,sbc,hk_sbc,hk_tm,cmcc,ax,srg) [- c6.32u128g.cluster.x86或c6.32u128g.cluster.arm：单个代理最大Topic数400，单个代理最大消费组数800](tag:hcs,fcs,hcs_oemout) [- rocketmq.b1.large.1：RocketMQ 5.x 基础版单机规格，实例TPS 500](tag:hws,hws_eu,hws_hk,ocb,hws_ocb,ctc,g42,hk_g42,tm,sbc,hk_sbc,hk_tm,dt,srg) [- rocketmq.b2.large.4：RocketMQ 5.x 基础版集群规格，实例TPS 2000](tag:hws,hws_eu,hws_hk,ocb,hws_ocb,ctc,g42,hk_g42,tm,sbc,hk_sbc,hk_tm,dt,srg) [- rocketmq.b2.large.8：RocketMQ 5.x 基础版集群规格，实例TPS 4000](tag:hws,hws_eu,hws_hk,ocb,hws_ocb,ctc,g42,hk_g42,tm,sbc,hk_sbc,hk_tm,dt,srg) [- rocketmq.b2.large.12：RocketMQ 5.x 基础版集群规格，实例TPS 6000](tag:hws,hws_eu,hws_hk,ocb,hws_ocb,ctc,g42,hk_g42,tm,sbc,hk_sbc,hk_tm,dt,srg) [- rocketmq.p1.large.1：RocketMQ 5.x 专业版单机规格，实例TPS 500](tag:hws,hws_eu,hws_hk,ctc,srg) [- rocketmq.p2.large.8：RocketMQ 5.x 专业版集群规格，实例TPS 4000](tag:hws,hws_eu,hws_hk,ctc,srg) [- rocketmq.p2.large.12：RocketMQ 5.x 专业版集群规格，实例TPS 6000](tag:hws,hws_eu,hws_hk,ctc,srg) [- rocketmq.p2.large.20：RocketMQ 5.x 专业版集群规格，实例TPS 10000](tag:hws,hws_eu,hws_hk,ctc,srg) [- rocketmq.p2.large.40：RocketMQ 5.x 专业版集群规格，实例TPS 20000](tag:hws,hws_eu,hws_hk,ctc,srg) [- rocketmq.p2.large.100：RocketMQ 5.x 专业版集群规格，实例TPS 50000](tag:hws,hws_eu,hws_hk,ctc,srg) [- rocketmq.p2.large.150：RocketMQ 5.x 专业版集群规格，实例TPS 75000](tag:hws,hws_eu,hws_hk,ctc,srg) [- rocketmq.p2.large.200：RocketMQ 5.x 专业版集群规格，实例TPS 100000](tag:hws,hws_eu,hws_hk,ctc,srg) [- rocketmq.p2.large.300：RocketMQ 5.x 专业版集群规格，实例TPS 150000](tag:hws,hws_eu,hws_hk,ctc,srg)  **默认取值**： 不涉及。
    * sslEnable  **参数解释**： 是否打开SSL加密访问。 **约束限制**： 不涉及。 **取值范围**： - true：打开SSL加密访问。 - false：不打开SSL加密访问。 **默认取值**： false。
    * storageSpecCode  **参数解释**： 存储IO规格。 **约束限制**： 不涉及。 **取值范围**： - dms.physical.storage.high.v2：高IO类型磁盘 - dms.physical.storage.ultra.v2：超高IO类型磁盘 [- dms.physical.storage.general：使用通用型SSD的磁盘类型。](tag:hws,hws_hk,dt,ctc,ax) [- dms.physical.storage.extreme：使用极速型SSD的磁盘类型。](tag:hws,hws_hk,dt,ctc,ax) **默认取值**： 不涉及。
    * enterpriseProjectId  **参数解释**： 企业项目ID。若为企业项目账号，该参数必填。 **约束限制**： 不涉及。 **取值范围**：  不涉及。 **默认取值**： 不涉及。
    * enableAcl  **参数解释**： 是否开启访问控制列表。 **约束限制**： 不涉及。 **取值范围**： - true：开启访问控制列表。 - false：不开启访问控制列表。 **默认取值**： false。
    * ipv6Enable  **参数解释**： 是否支持IPv6。[华为云Stack不支持此参数。](tag:hcs,hcs_oemout) **约束限制**： 不涉及。 **取值范围**： - true：支持 - false：不支持 **默认取值**： false。
    * proxyEnable  **参数解释**： 是否开启Proxy功能。 **约束限制**： 不涉及。 **取值范围**： - true：支持 - false：不支持 **默认取值**： 不涉及。
    * enablePublicip  **参数解释**： 是否开启公网访问功能。默认不开启公网。 **约束限制**： 不涉及。 **取值范围**： - true：支持 - false：不支持 **默认取值**： false。
    * diskEncryptedEnable  **参数解释**： 是否开启磁盘加密。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * diskEncryptedKey  **参数解释**： 磁盘加密key，未开启磁盘加密时为空 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * publicipId  **参数解释**： 实例绑定的弹性IP地址的ID。  以英文逗号隔开多个弹性IP地址的ID。  如果开启了公网访问功能（即enable_publicip为true），该字段为必选。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * brokerNum  **参数解释**： 代理个数。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * archType  **参数解释**： 架构类型。 **约束限制**： 不涉及。 **取值范围**： - X86：复杂指令集计算。 - ARM：精简指令集计算。 **默认取值**： 不涉及。
    * tlsMode  **参数解释**： 实例使用的安全协议。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    *
    * @var string[]
    */
    protected static $setters = [
            'name' => 'setName',
            'description' => 'setDescription',
            'engine' => 'setEngine',
            'engineVersion' => 'setEngineVersion',
            'storageSpace' => 'setStorageSpace',
            'vpcId' => 'setVpcId',
            'subnetId' => 'setSubnetId',
            'securityGroupId' => 'setSecurityGroupId',
            'availableZones' => 'setAvailableZones',
            'productId' => 'setProductId',
            'sslEnable' => 'setSslEnable',
            'storageSpecCode' => 'setStorageSpecCode',
            'enterpriseProjectId' => 'setEnterpriseProjectId',
            'enableAcl' => 'setEnableAcl',
            'ipv6Enable' => 'setIpv6Enable',
            'proxyEnable' => 'setProxyEnable',
            'enablePublicip' => 'setEnablePublicip',
            'diskEncryptedEnable' => 'setDiskEncryptedEnable',
            'diskEncryptedKey' => 'setDiskEncryptedKey',
            'publicipId' => 'setPublicipId',
            'brokerNum' => 'setBrokerNum',
            'archType' => 'setArchType',
            'tlsMode' => 'setTlsMode'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * name  **参数解释**： 实例名称。 **约束限制**： 由英文字符开头，只能由英文字母、数字、中划线、下划线组成，长度为4~64的字符。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * description  **参数解释**： 实例的描述信息。 **约束限制**： 长度不超过1024的字符串。[且字符串不能包含\">\"与\"<\"，字符串首字符不能为\"=\",\"+\",\"-\",\"@\"的全角和半角字符。](tag:hcs)  > \\与\"在json报文中属于特殊字符，如果参数值中需要显示\\或者\"字符，请在字符前增加转义字符\\，比如\\\\或者\\\"。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * engine  **参数解释**： 消息引擎类型。 **约束限制**： 不涉及。 **取值范围**： - rocketmq：RocketMQ消息引擎。 - reliability：RocketMQ消息引擎别称。 **默认取值**： 不涉及。
    * engineVersion  **参数解释**： 消息引擎的版本。取值填写为：[4.8.0](tag:hws,hws_eu,hws_hk,ocb,hws_ocb,ctc,g42,hk_g42,tm,sbc,hk_sbc,hk_tm,cmcc,ax,srg)[5.x](tag:hws,hws_eu,hws_hk,ocb,hws_ocb,ctc,g42,hk_g42,tm,sbc,hk_sbc,hk_tm,hcs,dt,hcs_oemout,srg)。 **约束限制**： 不涉及。 **取值范围**： - rocketmq：RocketMQ消息引擎。 - reliability：RocketMQ消息引擎别称。 **默认取值**： 不涉及。
    * storageSpace  **参数解释**： 存储空间，单位：GB。 **约束限制**： 不涉及。 **取值范围**： 不同的实例规格支持不同的存储配置。 [- RocketMQ 5.x 单机存储取值范围：100-30000。](tag:dt) [- RocketMQ 5.x 集群存储取值范围：200-60000。](tag:dt) **默认取值**： 不涉及。
    * vpcId  **参数解释**： 虚拟私有云ID。  获取方法如下：参考《虚拟私有云 API参考》，调用“查询VPC列表”接口，从响应体中获取VPC ID。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * subnetId  **参数解释**： 子网信息。  获取方法如下：参考《虚拟私有云 API参考》，调用“查询子网列表”接口，从响应体中获取子网ID。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * securityGroupId  **参数解释**： 指定实例所属的安全组。  获取方法如下：参考《虚拟私有云 API参考》，调用“查询安全组列表”接口，从响应体中获取安全组ID。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * availableZones  **参数解释**： 创建节点到指定且有资源的可用区ID。请参考[查询可用区信息](ListAvailableZones.xml)获取可用区ID。 该参数不能为空数组或者数组的值为空， 请注意查看该可用区是否有资源。  创建RocketMQ实例，支持节点部署在1个或[3个及3个以上的可用区。](tag:hws,hws_eu,hws_hk,ocb,hws_ocb,ctc,g42,hk_g42,tm,sbc,hk_sbc,hk_tm,dt,cmcc)[2个可用区。](tag:fcs)在为节点指定可用区时，用逗号分隔开。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * productId  **参数解释**： RocketMQ实例规格。[x86环境后缀为.x86，arm环境为.arm。single表示单机，cluster表示集群。](tag:hcs,fcs,hcs_oemout)  **约束限制**： 不涉及。  **取值范围**： [当“type”为“single.basic”选择单机规格；当“type”为“cluster.basic”选择集群规格。](tag:dt) [- c6.2u8g.cluster.x86或c6.2u8g.cluster.arm：单个代理最大分区数50，单个代理最大消费组数100](tag:fcs) [- c6.4u8g.cluster.small：单个代理最大Topic数2000，单个代理最大消费组数2000](tag:hws,hws_eu,hws_hk,ocb,hws_ocb,ctc,g42,hk_g42,tm,sbc,hk_sbc,hk_tm,cmcc,ax,srg) [- c6.4u8g.cluster：单个代理最大Topic数4000，单个代理最大消费组数4000](tag:hws,hws_eu,hws_hk,ocb,hws_ocb,ctc,g42,hk_g42,tm,sbc,hk_sbc,hk_tm,cmcc,ax,srg) [- c6.4u16g.cluster.x86或c6.4u16g.cluster.arm：单个代理最大分区数100，单个代理最大消费组数200](tag:hcs,hcs_oemout) [- c6.8u16g.cluster：单个代理最大Topic数8000，单个代理最大消费组数8000](tag:hws,hws_eu,hws_hk,ocb,hws_ocb,ctc,g42,hk_g42,tm,sbc,hk_sbc,hk_tm,cmcc,ax,srg) [- c6.8u32g.cluster.x86或c6.8u32g.cluster.arm：单个代理最大Topic数200，单个代理最大消费组数400](tag:hcs,fcs,hcs_oemout) [- c6.12u24g.cluster：单个代理最大Topic数12000，单个代理最大消费组数12000](tag:hws,hws_eu,hws_hk,ocb,hws_ocb,ctc,g42,hk_g42,tm,sbc,hk_sbc,hk_tm,cmcc,ax,srg) [- c6.16u64g.cluster.x86或c6.16u64g.cluster.arm：单个代理最大Topic数300，单个代理最大消费组数600](tag:hcs,fcs,hcs_oemout) [- c6.16u32g.cluster：单个代理最大Topic数16000，单个代理最大消费组数16000](tag:hws,hws_eu,hws_hk,ocb,hws_ocb,ctc,g42,hk_g42,tm,sbc,hk_sbc,hk_tm,cmcc,ax,srg) [- c6.32u128g.cluster.x86或c6.32u128g.cluster.arm：单个代理最大Topic数400，单个代理最大消费组数800](tag:hcs,fcs,hcs_oemout) [- rocketmq.b1.large.1：RocketMQ 5.x 基础版单机规格，实例TPS 500](tag:hws,hws_eu,hws_hk,ocb,hws_ocb,ctc,g42,hk_g42,tm,sbc,hk_sbc,hk_tm,dt,srg) [- rocketmq.b2.large.4：RocketMQ 5.x 基础版集群规格，实例TPS 2000](tag:hws,hws_eu,hws_hk,ocb,hws_ocb,ctc,g42,hk_g42,tm,sbc,hk_sbc,hk_tm,dt,srg) [- rocketmq.b2.large.8：RocketMQ 5.x 基础版集群规格，实例TPS 4000](tag:hws,hws_eu,hws_hk,ocb,hws_ocb,ctc,g42,hk_g42,tm,sbc,hk_sbc,hk_tm,dt,srg) [- rocketmq.b2.large.12：RocketMQ 5.x 基础版集群规格，实例TPS 6000](tag:hws,hws_eu,hws_hk,ocb,hws_ocb,ctc,g42,hk_g42,tm,sbc,hk_sbc,hk_tm,dt,srg) [- rocketmq.p1.large.1：RocketMQ 5.x 专业版单机规格，实例TPS 500](tag:hws,hws_eu,hws_hk,ctc,srg) [- rocketmq.p2.large.8：RocketMQ 5.x 专业版集群规格，实例TPS 4000](tag:hws,hws_eu,hws_hk,ctc,srg) [- rocketmq.p2.large.12：RocketMQ 5.x 专业版集群规格，实例TPS 6000](tag:hws,hws_eu,hws_hk,ctc,srg) [- rocketmq.p2.large.20：RocketMQ 5.x 专业版集群规格，实例TPS 10000](tag:hws,hws_eu,hws_hk,ctc,srg) [- rocketmq.p2.large.40：RocketMQ 5.x 专业版集群规格，实例TPS 20000](tag:hws,hws_eu,hws_hk,ctc,srg) [- rocketmq.p2.large.100：RocketMQ 5.x 专业版集群规格，实例TPS 50000](tag:hws,hws_eu,hws_hk,ctc,srg) [- rocketmq.p2.large.150：RocketMQ 5.x 专业版集群规格，实例TPS 75000](tag:hws,hws_eu,hws_hk,ctc,srg) [- rocketmq.p2.large.200：RocketMQ 5.x 专业版集群规格，实例TPS 100000](tag:hws,hws_eu,hws_hk,ctc,srg) [- rocketmq.p2.large.300：RocketMQ 5.x 专业版集群规格，实例TPS 150000](tag:hws,hws_eu,hws_hk,ctc,srg)  **默认取值**： 不涉及。
    * sslEnable  **参数解释**： 是否打开SSL加密访问。 **约束限制**： 不涉及。 **取值范围**： - true：打开SSL加密访问。 - false：不打开SSL加密访问。 **默认取值**： false。
    * storageSpecCode  **参数解释**： 存储IO规格。 **约束限制**： 不涉及。 **取值范围**： - dms.physical.storage.high.v2：高IO类型磁盘 - dms.physical.storage.ultra.v2：超高IO类型磁盘 [- dms.physical.storage.general：使用通用型SSD的磁盘类型。](tag:hws,hws_hk,dt,ctc,ax) [- dms.physical.storage.extreme：使用极速型SSD的磁盘类型。](tag:hws,hws_hk,dt,ctc,ax) **默认取值**： 不涉及。
    * enterpriseProjectId  **参数解释**： 企业项目ID。若为企业项目账号，该参数必填。 **约束限制**： 不涉及。 **取值范围**：  不涉及。 **默认取值**： 不涉及。
    * enableAcl  **参数解释**： 是否开启访问控制列表。 **约束限制**： 不涉及。 **取值范围**： - true：开启访问控制列表。 - false：不开启访问控制列表。 **默认取值**： false。
    * ipv6Enable  **参数解释**： 是否支持IPv6。[华为云Stack不支持此参数。](tag:hcs,hcs_oemout) **约束限制**： 不涉及。 **取值范围**： - true：支持 - false：不支持 **默认取值**： false。
    * proxyEnable  **参数解释**： 是否开启Proxy功能。 **约束限制**： 不涉及。 **取值范围**： - true：支持 - false：不支持 **默认取值**： 不涉及。
    * enablePublicip  **参数解释**： 是否开启公网访问功能。默认不开启公网。 **约束限制**： 不涉及。 **取值范围**： - true：支持 - false：不支持 **默认取值**： false。
    * diskEncryptedEnable  **参数解释**： 是否开启磁盘加密。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * diskEncryptedKey  **参数解释**： 磁盘加密key，未开启磁盘加密时为空 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * publicipId  **参数解释**： 实例绑定的弹性IP地址的ID。  以英文逗号隔开多个弹性IP地址的ID。  如果开启了公网访问功能（即enable_publicip为true），该字段为必选。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * brokerNum  **参数解释**： 代理个数。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * archType  **参数解释**： 架构类型。 **约束限制**： 不涉及。 **取值范围**： - X86：复杂指令集计算。 - ARM：精简指令集计算。 **默认取值**： 不涉及。
    * tlsMode  **参数解释**： 实例使用的安全协议。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    *
    * @var string[]
    */
    protected static $getters = [
            'name' => 'getName',
            'description' => 'getDescription',
            'engine' => 'getEngine',
            'engineVersion' => 'getEngineVersion',
            'storageSpace' => 'getStorageSpace',
            'vpcId' => 'getVpcId',
            'subnetId' => 'getSubnetId',
            'securityGroupId' => 'getSecurityGroupId',
            'availableZones' => 'getAvailableZones',
            'productId' => 'getProductId',
            'sslEnable' => 'getSslEnable',
            'storageSpecCode' => 'getStorageSpecCode',
            'enterpriseProjectId' => 'getEnterpriseProjectId',
            'enableAcl' => 'getEnableAcl',
            'ipv6Enable' => 'getIpv6Enable',
            'proxyEnable' => 'getProxyEnable',
            'enablePublicip' => 'getEnablePublicip',
            'diskEncryptedEnable' => 'getDiskEncryptedEnable',
            'diskEncryptedKey' => 'getDiskEncryptedKey',
            'publicipId' => 'getPublicipId',
            'brokerNum' => 'getBrokerNum',
            'archType' => 'getArchType',
            'tlsMode' => 'getTlsMode'
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
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['engine'] = isset($data['engine']) ? $data['engine'] : null;
        $this->container['engineVersion'] = isset($data['engineVersion']) ? $data['engineVersion'] : null;
        $this->container['storageSpace'] = isset($data['storageSpace']) ? $data['storageSpace'] : null;
        $this->container['vpcId'] = isset($data['vpcId']) ? $data['vpcId'] : null;
        $this->container['subnetId'] = isset($data['subnetId']) ? $data['subnetId'] : null;
        $this->container['securityGroupId'] = isset($data['securityGroupId']) ? $data['securityGroupId'] : null;
        $this->container['availableZones'] = isset($data['availableZones']) ? $data['availableZones'] : null;
        $this->container['productId'] = isset($data['productId']) ? $data['productId'] : null;
        $this->container['sslEnable'] = isset($data['sslEnable']) ? $data['sslEnable'] : null;
        $this->container['storageSpecCode'] = isset($data['storageSpecCode']) ? $data['storageSpecCode'] : null;
        $this->container['enterpriseProjectId'] = isset($data['enterpriseProjectId']) ? $data['enterpriseProjectId'] : null;
        $this->container['enableAcl'] = isset($data['enableAcl']) ? $data['enableAcl'] : null;
        $this->container['ipv6Enable'] = isset($data['ipv6Enable']) ? $data['ipv6Enable'] : null;
        $this->container['proxyEnable'] = isset($data['proxyEnable']) ? $data['proxyEnable'] : null;
        $this->container['enablePublicip'] = isset($data['enablePublicip']) ? $data['enablePublicip'] : null;
        $this->container['diskEncryptedEnable'] = isset($data['diskEncryptedEnable']) ? $data['diskEncryptedEnable'] : null;
        $this->container['diskEncryptedKey'] = isset($data['diskEncryptedKey']) ? $data['diskEncryptedKey'] : null;
        $this->container['publicipId'] = isset($data['publicipId']) ? $data['publicipId'] : null;
        $this->container['brokerNum'] = isset($data['brokerNum']) ? $data['brokerNum'] : null;
        $this->container['archType'] = isset($data['archType']) ? $data['archType'] : null;
        $this->container['tlsMode'] = isset($data['tlsMode']) ? $data['tlsMode'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['name'] === null) {
            $invalidProperties[] = "'name' can't be null";
        }
        if ($this->container['engine'] === null) {
            $invalidProperties[] = "'engine' can't be null";
        }
        if ($this->container['engineVersion'] === null) {
            $invalidProperties[] = "'engineVersion' can't be null";
        }
        if ($this->container['storageSpace'] === null) {
            $invalidProperties[] = "'storageSpace' can't be null";
        }
        if ($this->container['vpcId'] === null) {
            $invalidProperties[] = "'vpcId' can't be null";
        }
        if ($this->container['subnetId'] === null) {
            $invalidProperties[] = "'subnetId' can't be null";
        }
        if ($this->container['securityGroupId'] === null) {
            $invalidProperties[] = "'securityGroupId' can't be null";
        }
        if ($this->container['availableZones'] === null) {
            $invalidProperties[] = "'availableZones' can't be null";
        }
        if ($this->container['productId'] === null) {
            $invalidProperties[] = "'productId' can't be null";
        }
        if ($this->container['storageSpecCode'] === null) {
            $invalidProperties[] = "'storageSpecCode' can't be null";
        }
        if ($this->container['brokerNum'] === null) {
            $invalidProperties[] = "'brokerNum' can't be null";
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
    * Gets name
    *  **参数解释**： 实例名称。 **约束限制**： 由英文字符开头，只能由英文字母、数字、中划线、下划线组成，长度为4~64的字符。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    *
    * @return string
    */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
    * Sets name
    *
    * @param string $name **参数解释**： 实例名称。 **约束限制**： 由英文字符开头，只能由英文字母、数字、中划线、下划线组成，长度为4~64的字符。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
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
    *  **参数解释**： 实例的描述信息。 **约束限制**： 长度不超过1024的字符串。[且字符串不能包含\">\"与\"<\"，字符串首字符不能为\"=\",\"+\",\"-\",\"@\"的全角和半角字符。](tag:hcs)  > \\与\"在json报文中属于特殊字符，如果参数值中需要显示\\或者\"字符，请在字符前增加转义字符\\，比如\\\\或者\\\"。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
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
    * @param string|null $description **参数解释**： 实例的描述信息。 **约束限制**： 长度不超过1024的字符串。[且字符串不能包含\">\"与\"<\"，字符串首字符不能为\"=\",\"+\",\"-\",\"@\"的全角和半角字符。](tag:hcs)  > \\与\"在json报文中属于特殊字符，如果参数值中需要显示\\或者\"字符，请在字符前增加转义字符\\，比如\\\\或者\\\"。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    *
    * @return $this
    */
    public function setDescription($description)
    {
        $this->container['description'] = $description;
        return $this;
    }

    /**
    * Gets engine
    *  **参数解释**： 消息引擎类型。 **约束限制**： 不涉及。 **取值范围**： - rocketmq：RocketMQ消息引擎。 - reliability：RocketMQ消息引擎别称。 **默认取值**： 不涉及。
    *
    * @return string
    */
    public function getEngine()
    {
        return $this->container['engine'];
    }

    /**
    * Sets engine
    *
    * @param string $engine **参数解释**： 消息引擎类型。 **约束限制**： 不涉及。 **取值范围**： - rocketmq：RocketMQ消息引擎。 - reliability：RocketMQ消息引擎别称。 **默认取值**： 不涉及。
    *
    * @return $this
    */
    public function setEngine($engine)
    {
        $this->container['engine'] = $engine;
        return $this;
    }

    /**
    * Gets engineVersion
    *  **参数解释**： 消息引擎的版本。取值填写为：[4.8.0](tag:hws,hws_eu,hws_hk,ocb,hws_ocb,ctc,g42,hk_g42,tm,sbc,hk_sbc,hk_tm,cmcc,ax,srg)[5.x](tag:hws,hws_eu,hws_hk,ocb,hws_ocb,ctc,g42,hk_g42,tm,sbc,hk_sbc,hk_tm,hcs,dt,hcs_oemout,srg)。 **约束限制**： 不涉及。 **取值范围**： - rocketmq：RocketMQ消息引擎。 - reliability：RocketMQ消息引擎别称。 **默认取值**： 不涉及。
    *
    * @return string
    */
    public function getEngineVersion()
    {
        return $this->container['engineVersion'];
    }

    /**
    * Sets engineVersion
    *
    * @param string $engineVersion **参数解释**： 消息引擎的版本。取值填写为：[4.8.0](tag:hws,hws_eu,hws_hk,ocb,hws_ocb,ctc,g42,hk_g42,tm,sbc,hk_sbc,hk_tm,cmcc,ax,srg)[5.x](tag:hws,hws_eu,hws_hk,ocb,hws_ocb,ctc,g42,hk_g42,tm,sbc,hk_sbc,hk_tm,hcs,dt,hcs_oemout,srg)。 **约束限制**： 不涉及。 **取值范围**： - rocketmq：RocketMQ消息引擎。 - reliability：RocketMQ消息引擎别称。 **默认取值**： 不涉及。
    *
    * @return $this
    */
    public function setEngineVersion($engineVersion)
    {
        $this->container['engineVersion'] = $engineVersion;
        return $this;
    }

    /**
    * Gets storageSpace
    *  **参数解释**： 存储空间，单位：GB。 **约束限制**： 不涉及。 **取值范围**： 不同的实例规格支持不同的存储配置。 [- RocketMQ 5.x 单机存储取值范围：100-30000。](tag:dt) [- RocketMQ 5.x 集群存储取值范围：200-60000。](tag:dt) **默认取值**： 不涉及。
    *
    * @return int
    */
    public function getStorageSpace()
    {
        return $this->container['storageSpace'];
    }

    /**
    * Sets storageSpace
    *
    * @param int $storageSpace **参数解释**： 存储空间，单位：GB。 **约束限制**： 不涉及。 **取值范围**： 不同的实例规格支持不同的存储配置。 [- RocketMQ 5.x 单机存储取值范围：100-30000。](tag:dt) [- RocketMQ 5.x 集群存储取值范围：200-60000。](tag:dt) **默认取值**： 不涉及。
    *
    * @return $this
    */
    public function setStorageSpace($storageSpace)
    {
        $this->container['storageSpace'] = $storageSpace;
        return $this;
    }

    /**
    * Gets vpcId
    *  **参数解释**： 虚拟私有云ID。  获取方法如下：参考《虚拟私有云 API参考》，调用“查询VPC列表”接口，从响应体中获取VPC ID。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
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
    * @param string $vpcId **参数解释**： 虚拟私有云ID。  获取方法如下：参考《虚拟私有云 API参考》，调用“查询VPC列表”接口，从响应体中获取VPC ID。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    *
    * @return $this
    */
    public function setVpcId($vpcId)
    {
        $this->container['vpcId'] = $vpcId;
        return $this;
    }

    /**
    * Gets subnetId
    *  **参数解释**： 子网信息。  获取方法如下：参考《虚拟私有云 API参考》，调用“查询子网列表”接口，从响应体中获取子网ID。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    *
    * @return string
    */
    public function getSubnetId()
    {
        return $this->container['subnetId'];
    }

    /**
    * Sets subnetId
    *
    * @param string $subnetId **参数解释**： 子网信息。  获取方法如下：参考《虚拟私有云 API参考》，调用“查询子网列表”接口，从响应体中获取子网ID。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    *
    * @return $this
    */
    public function setSubnetId($subnetId)
    {
        $this->container['subnetId'] = $subnetId;
        return $this;
    }

    /**
    * Gets securityGroupId
    *  **参数解释**： 指定实例所属的安全组。  获取方法如下：参考《虚拟私有云 API参考》，调用“查询安全组列表”接口，从响应体中获取安全组ID。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    *
    * @return string
    */
    public function getSecurityGroupId()
    {
        return $this->container['securityGroupId'];
    }

    /**
    * Sets securityGroupId
    *
    * @param string $securityGroupId **参数解释**： 指定实例所属的安全组。  获取方法如下：参考《虚拟私有云 API参考》，调用“查询安全组列表”接口，从响应体中获取安全组ID。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    *
    * @return $this
    */
    public function setSecurityGroupId($securityGroupId)
    {
        $this->container['securityGroupId'] = $securityGroupId;
        return $this;
    }

    /**
    * Gets availableZones
    *  **参数解释**： 创建节点到指定且有资源的可用区ID。请参考[查询可用区信息](ListAvailableZones.xml)获取可用区ID。 该参数不能为空数组或者数组的值为空， 请注意查看该可用区是否有资源。  创建RocketMQ实例，支持节点部署在1个或[3个及3个以上的可用区。](tag:hws,hws_eu,hws_hk,ocb,hws_ocb,ctc,g42,hk_g42,tm,sbc,hk_sbc,hk_tm,dt,cmcc)[2个可用区。](tag:fcs)在为节点指定可用区时，用逗号分隔开。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    *
    * @return string[]
    */
    public function getAvailableZones()
    {
        return $this->container['availableZones'];
    }

    /**
    * Sets availableZones
    *
    * @param string[] $availableZones **参数解释**： 创建节点到指定且有资源的可用区ID。请参考[查询可用区信息](ListAvailableZones.xml)获取可用区ID。 该参数不能为空数组或者数组的值为空， 请注意查看该可用区是否有资源。  创建RocketMQ实例，支持节点部署在1个或[3个及3个以上的可用区。](tag:hws,hws_eu,hws_hk,ocb,hws_ocb,ctc,g42,hk_g42,tm,sbc,hk_sbc,hk_tm,dt,cmcc)[2个可用区。](tag:fcs)在为节点指定可用区时，用逗号分隔开。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    *
    * @return $this
    */
    public function setAvailableZones($availableZones)
    {
        $this->container['availableZones'] = $availableZones;
        return $this;
    }

    /**
    * Gets productId
    *  **参数解释**： RocketMQ实例规格。[x86环境后缀为.x86，arm环境为.arm。single表示单机，cluster表示集群。](tag:hcs,fcs,hcs_oemout)  **约束限制**： 不涉及。  **取值范围**： [当“type”为“single.basic”选择单机规格；当“type”为“cluster.basic”选择集群规格。](tag:dt) [- c6.2u8g.cluster.x86或c6.2u8g.cluster.arm：单个代理最大分区数50，单个代理最大消费组数100](tag:fcs) [- c6.4u8g.cluster.small：单个代理最大Topic数2000，单个代理最大消费组数2000](tag:hws,hws_eu,hws_hk,ocb,hws_ocb,ctc,g42,hk_g42,tm,sbc,hk_sbc,hk_tm,cmcc,ax,srg) [- c6.4u8g.cluster：单个代理最大Topic数4000，单个代理最大消费组数4000](tag:hws,hws_eu,hws_hk,ocb,hws_ocb,ctc,g42,hk_g42,tm,sbc,hk_sbc,hk_tm,cmcc,ax,srg) [- c6.4u16g.cluster.x86或c6.4u16g.cluster.arm：单个代理最大分区数100，单个代理最大消费组数200](tag:hcs,hcs_oemout) [- c6.8u16g.cluster：单个代理最大Topic数8000，单个代理最大消费组数8000](tag:hws,hws_eu,hws_hk,ocb,hws_ocb,ctc,g42,hk_g42,tm,sbc,hk_sbc,hk_tm,cmcc,ax,srg) [- c6.8u32g.cluster.x86或c6.8u32g.cluster.arm：单个代理最大Topic数200，单个代理最大消费组数400](tag:hcs,fcs,hcs_oemout) [- c6.12u24g.cluster：单个代理最大Topic数12000，单个代理最大消费组数12000](tag:hws,hws_eu,hws_hk,ocb,hws_ocb,ctc,g42,hk_g42,tm,sbc,hk_sbc,hk_tm,cmcc,ax,srg) [- c6.16u64g.cluster.x86或c6.16u64g.cluster.arm：单个代理最大Topic数300，单个代理最大消费组数600](tag:hcs,fcs,hcs_oemout) [- c6.16u32g.cluster：单个代理最大Topic数16000，单个代理最大消费组数16000](tag:hws,hws_eu,hws_hk,ocb,hws_ocb,ctc,g42,hk_g42,tm,sbc,hk_sbc,hk_tm,cmcc,ax,srg) [- c6.32u128g.cluster.x86或c6.32u128g.cluster.arm：单个代理最大Topic数400，单个代理最大消费组数800](tag:hcs,fcs,hcs_oemout) [- rocketmq.b1.large.1：RocketMQ 5.x 基础版单机规格，实例TPS 500](tag:hws,hws_eu,hws_hk,ocb,hws_ocb,ctc,g42,hk_g42,tm,sbc,hk_sbc,hk_tm,dt,srg) [- rocketmq.b2.large.4：RocketMQ 5.x 基础版集群规格，实例TPS 2000](tag:hws,hws_eu,hws_hk,ocb,hws_ocb,ctc,g42,hk_g42,tm,sbc,hk_sbc,hk_tm,dt,srg) [- rocketmq.b2.large.8：RocketMQ 5.x 基础版集群规格，实例TPS 4000](tag:hws,hws_eu,hws_hk,ocb,hws_ocb,ctc,g42,hk_g42,tm,sbc,hk_sbc,hk_tm,dt,srg) [- rocketmq.b2.large.12：RocketMQ 5.x 基础版集群规格，实例TPS 6000](tag:hws,hws_eu,hws_hk,ocb,hws_ocb,ctc,g42,hk_g42,tm,sbc,hk_sbc,hk_tm,dt,srg) [- rocketmq.p1.large.1：RocketMQ 5.x 专业版单机规格，实例TPS 500](tag:hws,hws_eu,hws_hk,ctc,srg) [- rocketmq.p2.large.8：RocketMQ 5.x 专业版集群规格，实例TPS 4000](tag:hws,hws_eu,hws_hk,ctc,srg) [- rocketmq.p2.large.12：RocketMQ 5.x 专业版集群规格，实例TPS 6000](tag:hws,hws_eu,hws_hk,ctc,srg) [- rocketmq.p2.large.20：RocketMQ 5.x 专业版集群规格，实例TPS 10000](tag:hws,hws_eu,hws_hk,ctc,srg) [- rocketmq.p2.large.40：RocketMQ 5.x 专业版集群规格，实例TPS 20000](tag:hws,hws_eu,hws_hk,ctc,srg) [- rocketmq.p2.large.100：RocketMQ 5.x 专业版集群规格，实例TPS 50000](tag:hws,hws_eu,hws_hk,ctc,srg) [- rocketmq.p2.large.150：RocketMQ 5.x 专业版集群规格，实例TPS 75000](tag:hws,hws_eu,hws_hk,ctc,srg) [- rocketmq.p2.large.200：RocketMQ 5.x 专业版集群规格，实例TPS 100000](tag:hws,hws_eu,hws_hk,ctc,srg) [- rocketmq.p2.large.300：RocketMQ 5.x 专业版集群规格，实例TPS 150000](tag:hws,hws_eu,hws_hk,ctc,srg)  **默认取值**： 不涉及。
    *
    * @return string
    */
    public function getProductId()
    {
        return $this->container['productId'];
    }

    /**
    * Sets productId
    *
    * @param string $productId **参数解释**： RocketMQ实例规格。[x86环境后缀为.x86，arm环境为.arm。single表示单机，cluster表示集群。](tag:hcs,fcs,hcs_oemout)  **约束限制**： 不涉及。  **取值范围**： [当“type”为“single.basic”选择单机规格；当“type”为“cluster.basic”选择集群规格。](tag:dt) [- c6.2u8g.cluster.x86或c6.2u8g.cluster.arm：单个代理最大分区数50，单个代理最大消费组数100](tag:fcs) [- c6.4u8g.cluster.small：单个代理最大Topic数2000，单个代理最大消费组数2000](tag:hws,hws_eu,hws_hk,ocb,hws_ocb,ctc,g42,hk_g42,tm,sbc,hk_sbc,hk_tm,cmcc,ax,srg) [- c6.4u8g.cluster：单个代理最大Topic数4000，单个代理最大消费组数4000](tag:hws,hws_eu,hws_hk,ocb,hws_ocb,ctc,g42,hk_g42,tm,sbc,hk_sbc,hk_tm,cmcc,ax,srg) [- c6.4u16g.cluster.x86或c6.4u16g.cluster.arm：单个代理最大分区数100，单个代理最大消费组数200](tag:hcs,hcs_oemout) [- c6.8u16g.cluster：单个代理最大Topic数8000，单个代理最大消费组数8000](tag:hws,hws_eu,hws_hk,ocb,hws_ocb,ctc,g42,hk_g42,tm,sbc,hk_sbc,hk_tm,cmcc,ax,srg) [- c6.8u32g.cluster.x86或c6.8u32g.cluster.arm：单个代理最大Topic数200，单个代理最大消费组数400](tag:hcs,fcs,hcs_oemout) [- c6.12u24g.cluster：单个代理最大Topic数12000，单个代理最大消费组数12000](tag:hws,hws_eu,hws_hk,ocb,hws_ocb,ctc,g42,hk_g42,tm,sbc,hk_sbc,hk_tm,cmcc,ax,srg) [- c6.16u64g.cluster.x86或c6.16u64g.cluster.arm：单个代理最大Topic数300，单个代理最大消费组数600](tag:hcs,fcs,hcs_oemout) [- c6.16u32g.cluster：单个代理最大Topic数16000，单个代理最大消费组数16000](tag:hws,hws_eu,hws_hk,ocb,hws_ocb,ctc,g42,hk_g42,tm,sbc,hk_sbc,hk_tm,cmcc,ax,srg) [- c6.32u128g.cluster.x86或c6.32u128g.cluster.arm：单个代理最大Topic数400，单个代理最大消费组数800](tag:hcs,fcs,hcs_oemout) [- rocketmq.b1.large.1：RocketMQ 5.x 基础版单机规格，实例TPS 500](tag:hws,hws_eu,hws_hk,ocb,hws_ocb,ctc,g42,hk_g42,tm,sbc,hk_sbc,hk_tm,dt,srg) [- rocketmq.b2.large.4：RocketMQ 5.x 基础版集群规格，实例TPS 2000](tag:hws,hws_eu,hws_hk,ocb,hws_ocb,ctc,g42,hk_g42,tm,sbc,hk_sbc,hk_tm,dt,srg) [- rocketmq.b2.large.8：RocketMQ 5.x 基础版集群规格，实例TPS 4000](tag:hws,hws_eu,hws_hk,ocb,hws_ocb,ctc,g42,hk_g42,tm,sbc,hk_sbc,hk_tm,dt,srg) [- rocketmq.b2.large.12：RocketMQ 5.x 基础版集群规格，实例TPS 6000](tag:hws,hws_eu,hws_hk,ocb,hws_ocb,ctc,g42,hk_g42,tm,sbc,hk_sbc,hk_tm,dt,srg) [- rocketmq.p1.large.1：RocketMQ 5.x 专业版单机规格，实例TPS 500](tag:hws,hws_eu,hws_hk,ctc,srg) [- rocketmq.p2.large.8：RocketMQ 5.x 专业版集群规格，实例TPS 4000](tag:hws,hws_eu,hws_hk,ctc,srg) [- rocketmq.p2.large.12：RocketMQ 5.x 专业版集群规格，实例TPS 6000](tag:hws,hws_eu,hws_hk,ctc,srg) [- rocketmq.p2.large.20：RocketMQ 5.x 专业版集群规格，实例TPS 10000](tag:hws,hws_eu,hws_hk,ctc,srg) [- rocketmq.p2.large.40：RocketMQ 5.x 专业版集群规格，实例TPS 20000](tag:hws,hws_eu,hws_hk,ctc,srg) [- rocketmq.p2.large.100：RocketMQ 5.x 专业版集群规格，实例TPS 50000](tag:hws,hws_eu,hws_hk,ctc,srg) [- rocketmq.p2.large.150：RocketMQ 5.x 专业版集群规格，实例TPS 75000](tag:hws,hws_eu,hws_hk,ctc,srg) [- rocketmq.p2.large.200：RocketMQ 5.x 专业版集群规格，实例TPS 100000](tag:hws,hws_eu,hws_hk,ctc,srg) [- rocketmq.p2.large.300：RocketMQ 5.x 专业版集群规格，实例TPS 150000](tag:hws,hws_eu,hws_hk,ctc,srg)  **默认取值**： 不涉及。
    *
    * @return $this
    */
    public function setProductId($productId)
    {
        $this->container['productId'] = $productId;
        return $this;
    }

    /**
    * Gets sslEnable
    *  **参数解释**： 是否打开SSL加密访问。 **约束限制**： 不涉及。 **取值范围**： - true：打开SSL加密访问。 - false：不打开SSL加密访问。 **默认取值**： false。
    *
    * @return bool|null
    */
    public function getSslEnable()
    {
        return $this->container['sslEnable'];
    }

    /**
    * Sets sslEnable
    *
    * @param bool|null $sslEnable **参数解释**： 是否打开SSL加密访问。 **约束限制**： 不涉及。 **取值范围**： - true：打开SSL加密访问。 - false：不打开SSL加密访问。 **默认取值**： false。
    *
    * @return $this
    */
    public function setSslEnable($sslEnable)
    {
        $this->container['sslEnable'] = $sslEnable;
        return $this;
    }

    /**
    * Gets storageSpecCode
    *  **参数解释**： 存储IO规格。 **约束限制**： 不涉及。 **取值范围**： - dms.physical.storage.high.v2：高IO类型磁盘 - dms.physical.storage.ultra.v2：超高IO类型磁盘 [- dms.physical.storage.general：使用通用型SSD的磁盘类型。](tag:hws,hws_hk,dt,ctc,ax) [- dms.physical.storage.extreme：使用极速型SSD的磁盘类型。](tag:hws,hws_hk,dt,ctc,ax) **默认取值**： 不涉及。
    *
    * @return string
    */
    public function getStorageSpecCode()
    {
        return $this->container['storageSpecCode'];
    }

    /**
    * Sets storageSpecCode
    *
    * @param string $storageSpecCode **参数解释**： 存储IO规格。 **约束限制**： 不涉及。 **取值范围**： - dms.physical.storage.high.v2：高IO类型磁盘 - dms.physical.storage.ultra.v2：超高IO类型磁盘 [- dms.physical.storage.general：使用通用型SSD的磁盘类型。](tag:hws,hws_hk,dt,ctc,ax) [- dms.physical.storage.extreme：使用极速型SSD的磁盘类型。](tag:hws,hws_hk,dt,ctc,ax) **默认取值**： 不涉及。
    *
    * @return $this
    */
    public function setStorageSpecCode($storageSpecCode)
    {
        $this->container['storageSpecCode'] = $storageSpecCode;
        return $this;
    }

    /**
    * Gets enterpriseProjectId
    *  **参数解释**： 企业项目ID。若为企业项目账号，该参数必填。 **约束限制**： 不涉及。 **取值范围**：  不涉及。 **默认取值**： 不涉及。
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
    * @param string|null $enterpriseProjectId **参数解释**： 企业项目ID。若为企业项目账号，该参数必填。 **约束限制**： 不涉及。 **取值范围**：  不涉及。 **默认取值**： 不涉及。
    *
    * @return $this
    */
    public function setEnterpriseProjectId($enterpriseProjectId)
    {
        $this->container['enterpriseProjectId'] = $enterpriseProjectId;
        return $this;
    }

    /**
    * Gets enableAcl
    *  **参数解释**： 是否开启访问控制列表。 **约束限制**： 不涉及。 **取值范围**： - true：开启访问控制列表。 - false：不开启访问控制列表。 **默认取值**： false。
    *
    * @return bool|null
    */
    public function getEnableAcl()
    {
        return $this->container['enableAcl'];
    }

    /**
    * Sets enableAcl
    *
    * @param bool|null $enableAcl **参数解释**： 是否开启访问控制列表。 **约束限制**： 不涉及。 **取值范围**： - true：开启访问控制列表。 - false：不开启访问控制列表。 **默认取值**： false。
    *
    * @return $this
    */
    public function setEnableAcl($enableAcl)
    {
        $this->container['enableAcl'] = $enableAcl;
        return $this;
    }

    /**
    * Gets ipv6Enable
    *  **参数解释**： 是否支持IPv6。[华为云Stack不支持此参数。](tag:hcs,hcs_oemout) **约束限制**： 不涉及。 **取值范围**： - true：支持 - false：不支持 **默认取值**： false。
    *
    * @return bool|null
    */
    public function getIpv6Enable()
    {
        return $this->container['ipv6Enable'];
    }

    /**
    * Sets ipv6Enable
    *
    * @param bool|null $ipv6Enable **参数解释**： 是否支持IPv6。[华为云Stack不支持此参数。](tag:hcs,hcs_oemout) **约束限制**： 不涉及。 **取值范围**： - true：支持 - false：不支持 **默认取值**： false。
    *
    * @return $this
    */
    public function setIpv6Enable($ipv6Enable)
    {
        $this->container['ipv6Enable'] = $ipv6Enable;
        return $this;
    }

    /**
    * Gets proxyEnable
    *  **参数解释**： 是否开启Proxy功能。 **约束限制**： 不涉及。 **取值范围**： - true：支持 - false：不支持 **默认取值**： 不涉及。
    *
    * @return bool|null
    */
    public function getProxyEnable()
    {
        return $this->container['proxyEnable'];
    }

    /**
    * Sets proxyEnable
    *
    * @param bool|null $proxyEnable **参数解释**： 是否开启Proxy功能。 **约束限制**： 不涉及。 **取值范围**： - true：支持 - false：不支持 **默认取值**： 不涉及。
    *
    * @return $this
    */
    public function setProxyEnable($proxyEnable)
    {
        $this->container['proxyEnable'] = $proxyEnable;
        return $this;
    }

    /**
    * Gets enablePublicip
    *  **参数解释**： 是否开启公网访问功能。默认不开启公网。 **约束限制**： 不涉及。 **取值范围**： - true：支持 - false：不支持 **默认取值**： false。
    *
    * @return bool|null
    */
    public function getEnablePublicip()
    {
        return $this->container['enablePublicip'];
    }

    /**
    * Sets enablePublicip
    *
    * @param bool|null $enablePublicip **参数解释**： 是否开启公网访问功能。默认不开启公网。 **约束限制**： 不涉及。 **取值范围**： - true：支持 - false：不支持 **默认取值**： false。
    *
    * @return $this
    */
    public function setEnablePublicip($enablePublicip)
    {
        $this->container['enablePublicip'] = $enablePublicip;
        return $this;
    }

    /**
    * Gets diskEncryptedEnable
    *  **参数解释**： 是否开启磁盘加密。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    *
    * @return bool|null
    */
    public function getDiskEncryptedEnable()
    {
        return $this->container['diskEncryptedEnable'];
    }

    /**
    * Sets diskEncryptedEnable
    *
    * @param bool|null $diskEncryptedEnable **参数解释**： 是否开启磁盘加密。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    *
    * @return $this
    */
    public function setDiskEncryptedEnable($diskEncryptedEnable)
    {
        $this->container['diskEncryptedEnable'] = $diskEncryptedEnable;
        return $this;
    }

    /**
    * Gets diskEncryptedKey
    *  **参数解释**： 磁盘加密key，未开启磁盘加密时为空 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    *
    * @return string|null
    */
    public function getDiskEncryptedKey()
    {
        return $this->container['diskEncryptedKey'];
    }

    /**
    * Sets diskEncryptedKey
    *
    * @param string|null $diskEncryptedKey **参数解释**： 磁盘加密key，未开启磁盘加密时为空 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    *
    * @return $this
    */
    public function setDiskEncryptedKey($diskEncryptedKey)
    {
        $this->container['diskEncryptedKey'] = $diskEncryptedKey;
        return $this;
    }

    /**
    * Gets publicipId
    *  **参数解释**： 实例绑定的弹性IP地址的ID。  以英文逗号隔开多个弹性IP地址的ID。  如果开启了公网访问功能（即enable_publicip为true），该字段为必选。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    *
    * @return string|null
    */
    public function getPublicipId()
    {
        return $this->container['publicipId'];
    }

    /**
    * Sets publicipId
    *
    * @param string|null $publicipId **参数解释**： 实例绑定的弹性IP地址的ID。  以英文逗号隔开多个弹性IP地址的ID。  如果开启了公网访问功能（即enable_publicip为true），该字段为必选。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    *
    * @return $this
    */
    public function setPublicipId($publicipId)
    {
        $this->container['publicipId'] = $publicipId;
        return $this;
    }

    /**
    * Gets brokerNum
    *  **参数解释**： 代理个数。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    *
    * @return int
    */
    public function getBrokerNum()
    {
        return $this->container['brokerNum'];
    }

    /**
    * Sets brokerNum
    *
    * @param int $brokerNum **参数解释**： 代理个数。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    *
    * @return $this
    */
    public function setBrokerNum($brokerNum)
    {
        $this->container['brokerNum'] = $brokerNum;
        return $this;
    }

    /**
    * Gets archType
    *  **参数解释**： 架构类型。 **约束限制**： 不涉及。 **取值范围**： - X86：复杂指令集计算。 - ARM：精简指令集计算。 **默认取值**： 不涉及。
    *
    * @return string|null
    */
    public function getArchType()
    {
        return $this->container['archType'];
    }

    /**
    * Sets archType
    *
    * @param string|null $archType **参数解释**： 架构类型。 **约束限制**： 不涉及。 **取值范围**： - X86：复杂指令集计算。 - ARM：精简指令集计算。 **默认取值**： 不涉及。
    *
    * @return $this
    */
    public function setArchType($archType)
    {
        $this->container['archType'] = $archType;
        return $this;
    }

    /**
    * Gets tlsMode
    *  **参数解释**： 实例使用的安全协议。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    *
    * @return string|null
    */
    public function getTlsMode()
    {
        return $this->container['tlsMode'];
    }

    /**
    * Sets tlsMode
    *
    * @param string|null $tlsMode **参数解释**： 实例使用的安全协议。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    *
    * @return $this
    */
    public function setTlsMode($tlsMode)
    {
        $this->container['tlsMode'] = $tlsMode;
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

