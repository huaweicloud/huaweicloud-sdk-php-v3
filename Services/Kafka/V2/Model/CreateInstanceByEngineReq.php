<?php

namespace HuaweiCloud\SDK\Kafka\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class CreateInstanceByEngineReq implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'CreateInstanceByEngineReq';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * name  **参数解释**： 实例名称。 **约束限制**： 由英文字符开头，只能由英文字母、数字、中划线、下划线组成，长度为4~64的字符。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * description  **参数解释**： 实例的描述信息。 **约束限制**： 长度不超过1024的字符串。[且字符串不能包含\">\"与\"<\"，字符串首字符不能为\"=\",\"+\",\"-\",\"@\"的全角和半角字符。](tag:hcs,fcs) \\与\"在json报文中属于特殊字符，如果参数值中需要显示\\或者\"字符，请在字符前增加转义字符\\，比如\\\\\\\\或者\\\\\"。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * engine  **参数解释**： 消息引擎。 **约束限制**： 不涉及 **取值范围**： kafka **默认取值**： 不涉及。
    * engineVersion  **参数解释**： 消息引擎的版本。 **约束限制**： 不涉及 **取值范围**： [- 1.1.0](tag:hws,hws_eu,hws_hk,ocb,hws_ocb,ctc,g42,hk_g42,tm,hk_tm,sbc,cmcc,ax) [- 2.3.0](tag:g42,tm,hk_g42,ctc,hk_tm,dt,sbc,cmcc,hws_eu) - 2.7 [- 3.x](tag:hws,hws_hk,dt,sbc,hcs,fcs,ctc,tm,hk_tm,hws_eu,ax) **默认取值**： 不涉及。
    * brokerNum  **参数解释**： 代理个数。 **约束限制**： 不涉及。 **取值范围**： [- Kafka实例规格为kafka.2u4g.cluster.small时，代理数取值范围3-30。](tag:hws,hws_hk,hws_eu,dt,ax) - Kafka实例规格为kafka.2u4g.cluster时，代理数取值范围3-30。 - Kafka实例规格为kafka.4u8g.cluster时，代理数取值范围3-30。 - Kafka实例规格为kafka.8u16g.cluster时，代理数取值范围3-50。 - Kafka实例规格为kafka.12u24g.cluster时，代理数取值范围3-50。 - Kafka实例规格为kafka.16u32g.cluster时，代理数取值范围3-50。 **默认取值**： 不涉及。
    * storageSpace  **参数解释**： 消息存储空间，单位GB。 **约束限制**： 不涉及。 **取值范围**： [- Kafka实例规格为c6.2u4g.cluster时，存储空间取值范围300GB ~ 300000GB。 - Kafka实例规格为c6.4u8g.cluster时，存储空间取值范围300GB ~ 600000GB。 - Kafka实例规格为c6.8u16g.cluster时，存储空间取值范围300GB ~ 1500000GB。 - Kafka实例规格为c6.12u24g.cluster时，存储空间取值范围300GB ~ 1500000GB。 - Kafka实例规格为c6.16u32g.cluster时，存储空间取值范围300GB ~ 1500000GB。](tag:hws,hws_eu,hws_hk,ocb,hws_ocb,ctc,g42,hk_g42,tm,hk_tm,dt,ax) [- Kafka实例规格为s6.2u4g.cluster.small时，存储空间取值范围300GB~300000GB。](tag:hws,hws_hk,hws_eu,dt,ax) [- Kafka实例规格为kafka.2u8g.cluster时，存储空间取值范围300GB~300000GB。](tag:fcs) [- Kafka实例规格为kafka.4u16g.cluster时，存储空间取值范围300GB~600000GB。 - Kafka实例规格为kafka.8u32g.cluster时，存储空间取值范围300GB~1500000GB。 - Kafka实例规格为kafka.16u64g.cluster时，存储空间取值范围300GB~1500000GB。 - Kafka实例规格为kafka.32u128g.cluster时，存储空间取值范围300GB~1500000GB。](tag:hcs,fcs) **默认取值**： 不涉及。
    * accessUser  **参数解释**：  认证用户名。 **约束限制**： 只能由英文字母开头且由英文字母、数字、中划线、下划线组成，长度为4~64的字符。当ssl_enable为true时，该参数必选，ssl_enable为false时，该参数无效。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * password  **参数解释**： 实例的认证密码。 **约束限制**： - 当ssl_enable为true时，该参数必选，ssl_enable为false时，该参数无效。 - 输入长度为8到32位的字符串。 - 必须包含如下四种字符中的三种组合：   - 小写字母。   - 大写字母。   - 数字。   - 特殊字符包括（`~!@#$%^&*()-_=+\\|[{}]:'\",<.>/?）和空格，并且不能以-开头。    **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * vpcId  **参数解释**：  虚拟私有云ID。获取方法如下：参考《虚拟私有云 API参考》，调用“查询VPC列表”接口，从响应体中获取VPC ID。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * securityGroupId  **参数解释**： 指定实例所属的安全组。获取方法如下：参考《虚拟私有云 API参考》，调用“查询安全组列表”接口，从响应体中获取安全组ID。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * subnetId  **参数解释**： 子网信息。获取方法如下：参考《虚拟私有云 API参考》，调用“查询子网列表”接口，从响应体中获取子网ID。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * availableZones  **参数解释**： 创建节点到指定且有资源的可用区ID。请参考[查询可用区信息](ListAvailableZones.xml)获取可用区ID。 **约束限制**： 该参数不能为空数组或者数组的值为空。  创建Kafka实例，节点需要部署在1个或3个及以上可用区中。如果部署在多个可用区中，以英文逗号隔开多个可用区ID。
    * productId  **参数解释**： 产品ID。产品ID可以从[查询产品规格列表](ListEngineProducts.xml)获取。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * maintainBegin  **参数解释**： 维护时间窗开始时间。 **约束限制**： 格式为HH:mm。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * maintainEnd  **参数解释**： 维护时间窗结束时间。 **约束限制**： 格式为HH:mm。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * enablePublicip  **参数解释**： 是否开启公网访问功能。 **约束限制**： 不涉及。 **取值范围**： - true：开启。 - false：不开启。 **默认取值**： false。
    * tenantIps  **参数解释**： 创建实例时可以手动指定实例节点的内网IP地址，仅支持指定IPv4地址。 **约束限制**： 指定内网IP地址数量必须小于等于创建的节点数量。  如果指定的内网IP地址数量小于创建的节点数量时，系统会自动为剩余的节点随机分配内网IP地址。
    * publicipId  **参数解释**： 实例绑定的弹性IP地址的ID。 **约束限制**： 以英文逗号隔开多个弹性IP地址的ID。  如果开启了公网访问功能（即enable_publicip为true），该字段为必选。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * sslEnable  **参数解释**： 是否开启SASL加密访问。  [实例创建后将不支持动态开启和关闭。](tag:ocb,hws_ocb,hcs) **约束限制**： 不涉及。 **取值范围**： - true：开启SASL加密访问。 - false：关闭SASL加密访问。 **默认取值**： 不涉及。
    * kafkaSecurityProtocol  **参数解释**： 开启SASL后使用的安全协议。 **约束限制**： 若该字段值为空，默认开启SASL_SSL认证机制。实例创建后，此参数不支持动态修改。 若创建实例时，使用了port_protocol参数，则Kafka的内网访问安全协议以及公网访问安全协议会使用port_protocol中的值，则此参数无效。 **取值范围**： - SASL_SSL：使用SSL证书加密传输，支持账号密码认证，安全性更高。 - SASL_PLAINTEXT：通过明文传输，支持账号密码认证，性能更好。 **默认取值**： 不涉及。
    * saslEnabledMechanisms  **参数解释**： 开启SASL后使用的认证机制。 **约束限制**： 如果开启了SASL认证功能（即ssl_enable=true），该字段为必选。若该字段值为空，默认开启PLAIN认证机制。
    * portProtocol  portProtocol
    * retentionPolicy  **参数解释**： 磁盘的容量到达容量阈值后，对于消息的处理策略。 **约束限制**： 不涉及。 **取值范围**： - produce_reject：表示拒绝消息写入。 - time_base：表示自动删除最老消息。 **默认取值**： 不涉及。
    * ipv6Enable  **参数解释**： 是否开启IPv6。 **约束限制**： 仅在虚拟私有云支持IPv6时生效。 **取值范围**： - true：开启。 - false：不开启。 **默认取值**： false。
    * diskEncryptedEnable  **参数解释**： 是否开启磁盘加密。 **约束限制**： 不涉及。 **取值范围**： - true：开启。 - false：不开启。 **默认取值**： false。
    * diskEncryptedKey  **参数解释**： 磁盘加密key，未开启磁盘加密时为空。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * connectorEnable  **参数解释**： 是否开启Smart Connect功能。Smart Connect用于Kafka实例和其他云服务之间的数据同步，或者两个Kafka实例之间的数据同步，实现数据的备份或迁移。 **约束限制**： 不涉及。 **取值范围**： - true：开启。 - false：不开启。 **默认取值**： false。
    * enableAutoTopic  **参数解释**： 是否开启kafka自动创建Topic功能。当您选择开启，向一个未创建的Topic生产或消费消息时，系统会自动创建此Topic。 **约束限制**： 不涉及。 **取值范围**： - true：开启。 - false：不开启。 **默认取值**： false。
    * storageSpecCode  **参数解释**： 云硬盘类型。[如何选择磁盘类型请参考《云硬盘 [产品介绍](tag:hws,hws_hk,hws_eu,cmcc)[用户指南](tag:dt,g42,hk_g42,ctc,tm,hk_tm,sbc,ocb,hws_ocb,ax)》的“磁盘类型及性能介绍”。](tag:hws,hws_eu,hws_hk,ocb,hws_ocb,ctc,g42,hk_g42,tm,hk_tm,dt,ax) **约束限制**： 不涉及。 **取值范围**： - dms.physical.storage.high.v2：高IO云硬盘。 - dms.physical.storage.ultra.v2：超高IO云硬盘。 - [dms.physical.storage.general：通用型SSD云硬盘。](tag:hws,hws_hk,dt,ax) - [dms.physical.storage.extreme：极速型SSD云硬盘。](tag:hws,hws_hk,dt,ax) **默认取值**： 不涉及。
    * enterpriseProjectId  **参数解释**： 企业项目ID。 **约束限制**： 若为企业项目账号，该参数必填。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * tags  **参数解释**： Kafka实例的标签信息。 **约束限制**： 不涉及。
    * archType  **参数解释**： CPU架构。 **约束限制**： 不涉及。 **取值范围**： - X86 [- ARM](tag:hcs,fcs,ctc) **默认取值**： 不涉及。
    * vpcClientPlain  **参数解释**： VPC内网明文访问。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * bssParam  bssParam
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'name' => 'string',
            'description' => 'string',
            'engine' => 'string',
            'engineVersion' => 'string',
            'brokerNum' => 'int',
            'storageSpace' => 'int',
            'accessUser' => 'string',
            'password' => 'string',
            'vpcId' => 'string',
            'securityGroupId' => 'string',
            'subnetId' => 'string',
            'availableZones' => 'string[]',
            'productId' => 'string',
            'maintainBegin' => 'string',
            'maintainEnd' => 'string',
            'enablePublicip' => 'bool',
            'tenantIps' => 'string[]',
            'publicipId' => 'string',
            'sslEnable' => 'bool',
            'kafkaSecurityProtocol' => 'string',
            'saslEnabledMechanisms' => 'string[]',
            'portProtocol' => '\HuaweiCloud\SDK\Kafka\V2\Model\PortProtocol',
            'retentionPolicy' => 'string',
            'ipv6Enable' => 'bool',
            'diskEncryptedEnable' => 'bool',
            'diskEncryptedKey' => 'string',
            'connectorEnable' => 'bool',
            'enableAutoTopic' => 'bool',
            'storageSpecCode' => 'string',
            'enterpriseProjectId' => 'string',
            'tags' => '\HuaweiCloud\SDK\Kafka\V2\Model\TagEntity[]',
            'archType' => 'string',
            'vpcClientPlain' => 'bool',
            'bssParam' => '\HuaweiCloud\SDK\Kafka\V2\Model\BssParam'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * name  **参数解释**： 实例名称。 **约束限制**： 由英文字符开头，只能由英文字母、数字、中划线、下划线组成，长度为4~64的字符。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * description  **参数解释**： 实例的描述信息。 **约束限制**： 长度不超过1024的字符串。[且字符串不能包含\">\"与\"<\"，字符串首字符不能为\"=\",\"+\",\"-\",\"@\"的全角和半角字符。](tag:hcs,fcs) \\与\"在json报文中属于特殊字符，如果参数值中需要显示\\或者\"字符，请在字符前增加转义字符\\，比如\\\\\\\\或者\\\\\"。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * engine  **参数解释**： 消息引擎。 **约束限制**： 不涉及 **取值范围**： kafka **默认取值**： 不涉及。
    * engineVersion  **参数解释**： 消息引擎的版本。 **约束限制**： 不涉及 **取值范围**： [- 1.1.0](tag:hws,hws_eu,hws_hk,ocb,hws_ocb,ctc,g42,hk_g42,tm,hk_tm,sbc,cmcc,ax) [- 2.3.0](tag:g42,tm,hk_g42,ctc,hk_tm,dt,sbc,cmcc,hws_eu) - 2.7 [- 3.x](tag:hws,hws_hk,dt,sbc,hcs,fcs,ctc,tm,hk_tm,hws_eu,ax) **默认取值**： 不涉及。
    * brokerNum  **参数解释**： 代理个数。 **约束限制**： 不涉及。 **取值范围**： [- Kafka实例规格为kafka.2u4g.cluster.small时，代理数取值范围3-30。](tag:hws,hws_hk,hws_eu,dt,ax) - Kafka实例规格为kafka.2u4g.cluster时，代理数取值范围3-30。 - Kafka实例规格为kafka.4u8g.cluster时，代理数取值范围3-30。 - Kafka实例规格为kafka.8u16g.cluster时，代理数取值范围3-50。 - Kafka实例规格为kafka.12u24g.cluster时，代理数取值范围3-50。 - Kafka实例规格为kafka.16u32g.cluster时，代理数取值范围3-50。 **默认取值**： 不涉及。
    * storageSpace  **参数解释**： 消息存储空间，单位GB。 **约束限制**： 不涉及。 **取值范围**： [- Kafka实例规格为c6.2u4g.cluster时，存储空间取值范围300GB ~ 300000GB。 - Kafka实例规格为c6.4u8g.cluster时，存储空间取值范围300GB ~ 600000GB。 - Kafka实例规格为c6.8u16g.cluster时，存储空间取值范围300GB ~ 1500000GB。 - Kafka实例规格为c6.12u24g.cluster时，存储空间取值范围300GB ~ 1500000GB。 - Kafka实例规格为c6.16u32g.cluster时，存储空间取值范围300GB ~ 1500000GB。](tag:hws,hws_eu,hws_hk,ocb,hws_ocb,ctc,g42,hk_g42,tm,hk_tm,dt,ax) [- Kafka实例规格为s6.2u4g.cluster.small时，存储空间取值范围300GB~300000GB。](tag:hws,hws_hk,hws_eu,dt,ax) [- Kafka实例规格为kafka.2u8g.cluster时，存储空间取值范围300GB~300000GB。](tag:fcs) [- Kafka实例规格为kafka.4u16g.cluster时，存储空间取值范围300GB~600000GB。 - Kafka实例规格为kafka.8u32g.cluster时，存储空间取值范围300GB~1500000GB。 - Kafka实例规格为kafka.16u64g.cluster时，存储空间取值范围300GB~1500000GB。 - Kafka实例规格为kafka.32u128g.cluster时，存储空间取值范围300GB~1500000GB。](tag:hcs,fcs) **默认取值**： 不涉及。
    * accessUser  **参数解释**：  认证用户名。 **约束限制**： 只能由英文字母开头且由英文字母、数字、中划线、下划线组成，长度为4~64的字符。当ssl_enable为true时，该参数必选，ssl_enable为false时，该参数无效。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * password  **参数解释**： 实例的认证密码。 **约束限制**： - 当ssl_enable为true时，该参数必选，ssl_enable为false时，该参数无效。 - 输入长度为8到32位的字符串。 - 必须包含如下四种字符中的三种组合：   - 小写字母。   - 大写字母。   - 数字。   - 特殊字符包括（`~!@#$%^&*()-_=+\\|[{}]:'\",<.>/?）和空格，并且不能以-开头。    **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * vpcId  **参数解释**：  虚拟私有云ID。获取方法如下：参考《虚拟私有云 API参考》，调用“查询VPC列表”接口，从响应体中获取VPC ID。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * securityGroupId  **参数解释**： 指定实例所属的安全组。获取方法如下：参考《虚拟私有云 API参考》，调用“查询安全组列表”接口，从响应体中获取安全组ID。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * subnetId  **参数解释**： 子网信息。获取方法如下：参考《虚拟私有云 API参考》，调用“查询子网列表”接口，从响应体中获取子网ID。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * availableZones  **参数解释**： 创建节点到指定且有资源的可用区ID。请参考[查询可用区信息](ListAvailableZones.xml)获取可用区ID。 **约束限制**： 该参数不能为空数组或者数组的值为空。  创建Kafka实例，节点需要部署在1个或3个及以上可用区中。如果部署在多个可用区中，以英文逗号隔开多个可用区ID。
    * productId  **参数解释**： 产品ID。产品ID可以从[查询产品规格列表](ListEngineProducts.xml)获取。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * maintainBegin  **参数解释**： 维护时间窗开始时间。 **约束限制**： 格式为HH:mm。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * maintainEnd  **参数解释**： 维护时间窗结束时间。 **约束限制**： 格式为HH:mm。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * enablePublicip  **参数解释**： 是否开启公网访问功能。 **约束限制**： 不涉及。 **取值范围**： - true：开启。 - false：不开启。 **默认取值**： false。
    * tenantIps  **参数解释**： 创建实例时可以手动指定实例节点的内网IP地址，仅支持指定IPv4地址。 **约束限制**： 指定内网IP地址数量必须小于等于创建的节点数量。  如果指定的内网IP地址数量小于创建的节点数量时，系统会自动为剩余的节点随机分配内网IP地址。
    * publicipId  **参数解释**： 实例绑定的弹性IP地址的ID。 **约束限制**： 以英文逗号隔开多个弹性IP地址的ID。  如果开启了公网访问功能（即enable_publicip为true），该字段为必选。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * sslEnable  **参数解释**： 是否开启SASL加密访问。  [实例创建后将不支持动态开启和关闭。](tag:ocb,hws_ocb,hcs) **约束限制**： 不涉及。 **取值范围**： - true：开启SASL加密访问。 - false：关闭SASL加密访问。 **默认取值**： 不涉及。
    * kafkaSecurityProtocol  **参数解释**： 开启SASL后使用的安全协议。 **约束限制**： 若该字段值为空，默认开启SASL_SSL认证机制。实例创建后，此参数不支持动态修改。 若创建实例时，使用了port_protocol参数，则Kafka的内网访问安全协议以及公网访问安全协议会使用port_protocol中的值，则此参数无效。 **取值范围**： - SASL_SSL：使用SSL证书加密传输，支持账号密码认证，安全性更高。 - SASL_PLAINTEXT：通过明文传输，支持账号密码认证，性能更好。 **默认取值**： 不涉及。
    * saslEnabledMechanisms  **参数解释**： 开启SASL后使用的认证机制。 **约束限制**： 如果开启了SASL认证功能（即ssl_enable=true），该字段为必选。若该字段值为空，默认开启PLAIN认证机制。
    * portProtocol  portProtocol
    * retentionPolicy  **参数解释**： 磁盘的容量到达容量阈值后，对于消息的处理策略。 **约束限制**： 不涉及。 **取值范围**： - produce_reject：表示拒绝消息写入。 - time_base：表示自动删除最老消息。 **默认取值**： 不涉及。
    * ipv6Enable  **参数解释**： 是否开启IPv6。 **约束限制**： 仅在虚拟私有云支持IPv6时生效。 **取值范围**： - true：开启。 - false：不开启。 **默认取值**： false。
    * diskEncryptedEnable  **参数解释**： 是否开启磁盘加密。 **约束限制**： 不涉及。 **取值范围**： - true：开启。 - false：不开启。 **默认取值**： false。
    * diskEncryptedKey  **参数解释**： 磁盘加密key，未开启磁盘加密时为空。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * connectorEnable  **参数解释**： 是否开启Smart Connect功能。Smart Connect用于Kafka实例和其他云服务之间的数据同步，或者两个Kafka实例之间的数据同步，实现数据的备份或迁移。 **约束限制**： 不涉及。 **取值范围**： - true：开启。 - false：不开启。 **默认取值**： false。
    * enableAutoTopic  **参数解释**： 是否开启kafka自动创建Topic功能。当您选择开启，向一个未创建的Topic生产或消费消息时，系统会自动创建此Topic。 **约束限制**： 不涉及。 **取值范围**： - true：开启。 - false：不开启。 **默认取值**： false。
    * storageSpecCode  **参数解释**： 云硬盘类型。[如何选择磁盘类型请参考《云硬盘 [产品介绍](tag:hws,hws_hk,hws_eu,cmcc)[用户指南](tag:dt,g42,hk_g42,ctc,tm,hk_tm,sbc,ocb,hws_ocb,ax)》的“磁盘类型及性能介绍”。](tag:hws,hws_eu,hws_hk,ocb,hws_ocb,ctc,g42,hk_g42,tm,hk_tm,dt,ax) **约束限制**： 不涉及。 **取值范围**： - dms.physical.storage.high.v2：高IO云硬盘。 - dms.physical.storage.ultra.v2：超高IO云硬盘。 - [dms.physical.storage.general：通用型SSD云硬盘。](tag:hws,hws_hk,dt,ax) - [dms.physical.storage.extreme：极速型SSD云硬盘。](tag:hws,hws_hk,dt,ax) **默认取值**： 不涉及。
    * enterpriseProjectId  **参数解释**： 企业项目ID。 **约束限制**： 若为企业项目账号，该参数必填。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * tags  **参数解释**： Kafka实例的标签信息。 **约束限制**： 不涉及。
    * archType  **参数解释**： CPU架构。 **约束限制**： 不涉及。 **取值范围**： - X86 [- ARM](tag:hcs,fcs,ctc) **默认取值**： 不涉及。
    * vpcClientPlain  **参数解释**： VPC内网明文访问。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * bssParam  bssParam
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'name' => null,
        'description' => null,
        'engine' => null,
        'engineVersion' => null,
        'brokerNum' => null,
        'storageSpace' => null,
        'accessUser' => null,
        'password' => null,
        'vpcId' => null,
        'securityGroupId' => null,
        'subnetId' => null,
        'availableZones' => null,
        'productId' => null,
        'maintainBegin' => null,
        'maintainEnd' => null,
        'enablePublicip' => null,
        'tenantIps' => null,
        'publicipId' => null,
        'sslEnable' => null,
        'kafkaSecurityProtocol' => null,
        'saslEnabledMechanisms' => null,
        'portProtocol' => null,
        'retentionPolicy' => null,
        'ipv6Enable' => null,
        'diskEncryptedEnable' => null,
        'diskEncryptedKey' => null,
        'connectorEnable' => null,
        'enableAutoTopic' => null,
        'storageSpecCode' => null,
        'enterpriseProjectId' => null,
        'tags' => null,
        'archType' => null,
        'vpcClientPlain' => null,
        'bssParam' => null
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
    * description  **参数解释**： 实例的描述信息。 **约束限制**： 长度不超过1024的字符串。[且字符串不能包含\">\"与\"<\"，字符串首字符不能为\"=\",\"+\",\"-\",\"@\"的全角和半角字符。](tag:hcs,fcs) \\与\"在json报文中属于特殊字符，如果参数值中需要显示\\或者\"字符，请在字符前增加转义字符\\，比如\\\\\\\\或者\\\\\"。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * engine  **参数解释**： 消息引擎。 **约束限制**： 不涉及 **取值范围**： kafka **默认取值**： 不涉及。
    * engineVersion  **参数解释**： 消息引擎的版本。 **约束限制**： 不涉及 **取值范围**： [- 1.1.0](tag:hws,hws_eu,hws_hk,ocb,hws_ocb,ctc,g42,hk_g42,tm,hk_tm,sbc,cmcc,ax) [- 2.3.0](tag:g42,tm,hk_g42,ctc,hk_tm,dt,sbc,cmcc,hws_eu) - 2.7 [- 3.x](tag:hws,hws_hk,dt,sbc,hcs,fcs,ctc,tm,hk_tm,hws_eu,ax) **默认取值**： 不涉及。
    * brokerNum  **参数解释**： 代理个数。 **约束限制**： 不涉及。 **取值范围**： [- Kafka实例规格为kafka.2u4g.cluster.small时，代理数取值范围3-30。](tag:hws,hws_hk,hws_eu,dt,ax) - Kafka实例规格为kafka.2u4g.cluster时，代理数取值范围3-30。 - Kafka实例规格为kafka.4u8g.cluster时，代理数取值范围3-30。 - Kafka实例规格为kafka.8u16g.cluster时，代理数取值范围3-50。 - Kafka实例规格为kafka.12u24g.cluster时，代理数取值范围3-50。 - Kafka实例规格为kafka.16u32g.cluster时，代理数取值范围3-50。 **默认取值**： 不涉及。
    * storageSpace  **参数解释**： 消息存储空间，单位GB。 **约束限制**： 不涉及。 **取值范围**： [- Kafka实例规格为c6.2u4g.cluster时，存储空间取值范围300GB ~ 300000GB。 - Kafka实例规格为c6.4u8g.cluster时，存储空间取值范围300GB ~ 600000GB。 - Kafka实例规格为c6.8u16g.cluster时，存储空间取值范围300GB ~ 1500000GB。 - Kafka实例规格为c6.12u24g.cluster时，存储空间取值范围300GB ~ 1500000GB。 - Kafka实例规格为c6.16u32g.cluster时，存储空间取值范围300GB ~ 1500000GB。](tag:hws,hws_eu,hws_hk,ocb,hws_ocb,ctc,g42,hk_g42,tm,hk_tm,dt,ax) [- Kafka实例规格为s6.2u4g.cluster.small时，存储空间取值范围300GB~300000GB。](tag:hws,hws_hk,hws_eu,dt,ax) [- Kafka实例规格为kafka.2u8g.cluster时，存储空间取值范围300GB~300000GB。](tag:fcs) [- Kafka实例规格为kafka.4u16g.cluster时，存储空间取值范围300GB~600000GB。 - Kafka实例规格为kafka.8u32g.cluster时，存储空间取值范围300GB~1500000GB。 - Kafka实例规格为kafka.16u64g.cluster时，存储空间取值范围300GB~1500000GB。 - Kafka实例规格为kafka.32u128g.cluster时，存储空间取值范围300GB~1500000GB。](tag:hcs,fcs) **默认取值**： 不涉及。
    * accessUser  **参数解释**：  认证用户名。 **约束限制**： 只能由英文字母开头且由英文字母、数字、中划线、下划线组成，长度为4~64的字符。当ssl_enable为true时，该参数必选，ssl_enable为false时，该参数无效。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * password  **参数解释**： 实例的认证密码。 **约束限制**： - 当ssl_enable为true时，该参数必选，ssl_enable为false时，该参数无效。 - 输入长度为8到32位的字符串。 - 必须包含如下四种字符中的三种组合：   - 小写字母。   - 大写字母。   - 数字。   - 特殊字符包括（`~!@#$%^&*()-_=+\\|[{}]:'\",<.>/?）和空格，并且不能以-开头。    **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * vpcId  **参数解释**：  虚拟私有云ID。获取方法如下：参考《虚拟私有云 API参考》，调用“查询VPC列表”接口，从响应体中获取VPC ID。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * securityGroupId  **参数解释**： 指定实例所属的安全组。获取方法如下：参考《虚拟私有云 API参考》，调用“查询安全组列表”接口，从响应体中获取安全组ID。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * subnetId  **参数解释**： 子网信息。获取方法如下：参考《虚拟私有云 API参考》，调用“查询子网列表”接口，从响应体中获取子网ID。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * availableZones  **参数解释**： 创建节点到指定且有资源的可用区ID。请参考[查询可用区信息](ListAvailableZones.xml)获取可用区ID。 **约束限制**： 该参数不能为空数组或者数组的值为空。  创建Kafka实例，节点需要部署在1个或3个及以上可用区中。如果部署在多个可用区中，以英文逗号隔开多个可用区ID。
    * productId  **参数解释**： 产品ID。产品ID可以从[查询产品规格列表](ListEngineProducts.xml)获取。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * maintainBegin  **参数解释**： 维护时间窗开始时间。 **约束限制**： 格式为HH:mm。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * maintainEnd  **参数解释**： 维护时间窗结束时间。 **约束限制**： 格式为HH:mm。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * enablePublicip  **参数解释**： 是否开启公网访问功能。 **约束限制**： 不涉及。 **取值范围**： - true：开启。 - false：不开启。 **默认取值**： false。
    * tenantIps  **参数解释**： 创建实例时可以手动指定实例节点的内网IP地址，仅支持指定IPv4地址。 **约束限制**： 指定内网IP地址数量必须小于等于创建的节点数量。  如果指定的内网IP地址数量小于创建的节点数量时，系统会自动为剩余的节点随机分配内网IP地址。
    * publicipId  **参数解释**： 实例绑定的弹性IP地址的ID。 **约束限制**： 以英文逗号隔开多个弹性IP地址的ID。  如果开启了公网访问功能（即enable_publicip为true），该字段为必选。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * sslEnable  **参数解释**： 是否开启SASL加密访问。  [实例创建后将不支持动态开启和关闭。](tag:ocb,hws_ocb,hcs) **约束限制**： 不涉及。 **取值范围**： - true：开启SASL加密访问。 - false：关闭SASL加密访问。 **默认取值**： 不涉及。
    * kafkaSecurityProtocol  **参数解释**： 开启SASL后使用的安全协议。 **约束限制**： 若该字段值为空，默认开启SASL_SSL认证机制。实例创建后，此参数不支持动态修改。 若创建实例时，使用了port_protocol参数，则Kafka的内网访问安全协议以及公网访问安全协议会使用port_protocol中的值，则此参数无效。 **取值范围**： - SASL_SSL：使用SSL证书加密传输，支持账号密码认证，安全性更高。 - SASL_PLAINTEXT：通过明文传输，支持账号密码认证，性能更好。 **默认取值**： 不涉及。
    * saslEnabledMechanisms  **参数解释**： 开启SASL后使用的认证机制。 **约束限制**： 如果开启了SASL认证功能（即ssl_enable=true），该字段为必选。若该字段值为空，默认开启PLAIN认证机制。
    * portProtocol  portProtocol
    * retentionPolicy  **参数解释**： 磁盘的容量到达容量阈值后，对于消息的处理策略。 **约束限制**： 不涉及。 **取值范围**： - produce_reject：表示拒绝消息写入。 - time_base：表示自动删除最老消息。 **默认取值**： 不涉及。
    * ipv6Enable  **参数解释**： 是否开启IPv6。 **约束限制**： 仅在虚拟私有云支持IPv6时生效。 **取值范围**： - true：开启。 - false：不开启。 **默认取值**： false。
    * diskEncryptedEnable  **参数解释**： 是否开启磁盘加密。 **约束限制**： 不涉及。 **取值范围**： - true：开启。 - false：不开启。 **默认取值**： false。
    * diskEncryptedKey  **参数解释**： 磁盘加密key，未开启磁盘加密时为空。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * connectorEnable  **参数解释**： 是否开启Smart Connect功能。Smart Connect用于Kafka实例和其他云服务之间的数据同步，或者两个Kafka实例之间的数据同步，实现数据的备份或迁移。 **约束限制**： 不涉及。 **取值范围**： - true：开启。 - false：不开启。 **默认取值**： false。
    * enableAutoTopic  **参数解释**： 是否开启kafka自动创建Topic功能。当您选择开启，向一个未创建的Topic生产或消费消息时，系统会自动创建此Topic。 **约束限制**： 不涉及。 **取值范围**： - true：开启。 - false：不开启。 **默认取值**： false。
    * storageSpecCode  **参数解释**： 云硬盘类型。[如何选择磁盘类型请参考《云硬盘 [产品介绍](tag:hws,hws_hk,hws_eu,cmcc)[用户指南](tag:dt,g42,hk_g42,ctc,tm,hk_tm,sbc,ocb,hws_ocb,ax)》的“磁盘类型及性能介绍”。](tag:hws,hws_eu,hws_hk,ocb,hws_ocb,ctc,g42,hk_g42,tm,hk_tm,dt,ax) **约束限制**： 不涉及。 **取值范围**： - dms.physical.storage.high.v2：高IO云硬盘。 - dms.physical.storage.ultra.v2：超高IO云硬盘。 - [dms.physical.storage.general：通用型SSD云硬盘。](tag:hws,hws_hk,dt,ax) - [dms.physical.storage.extreme：极速型SSD云硬盘。](tag:hws,hws_hk,dt,ax) **默认取值**： 不涉及。
    * enterpriseProjectId  **参数解释**： 企业项目ID。 **约束限制**： 若为企业项目账号，该参数必填。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * tags  **参数解释**： Kafka实例的标签信息。 **约束限制**： 不涉及。
    * archType  **参数解释**： CPU架构。 **约束限制**： 不涉及。 **取值范围**： - X86 [- ARM](tag:hcs,fcs,ctc) **默认取值**： 不涉及。
    * vpcClientPlain  **参数解释**： VPC内网明文访问。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * bssParam  bssParam
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'name' => 'name',
            'description' => 'description',
            'engine' => 'engine',
            'engineVersion' => 'engine_version',
            'brokerNum' => 'broker_num',
            'storageSpace' => 'storage_space',
            'accessUser' => 'access_user',
            'password' => 'password',
            'vpcId' => 'vpc_id',
            'securityGroupId' => 'security_group_id',
            'subnetId' => 'subnet_id',
            'availableZones' => 'available_zones',
            'productId' => 'product_id',
            'maintainBegin' => 'maintain_begin',
            'maintainEnd' => 'maintain_end',
            'enablePublicip' => 'enable_publicip',
            'tenantIps' => 'tenant_ips',
            'publicipId' => 'publicip_id',
            'sslEnable' => 'ssl_enable',
            'kafkaSecurityProtocol' => 'kafka_security_protocol',
            'saslEnabledMechanisms' => 'sasl_enabled_mechanisms',
            'portProtocol' => 'port_protocol',
            'retentionPolicy' => 'retention_policy',
            'ipv6Enable' => 'ipv6_enable',
            'diskEncryptedEnable' => 'disk_encrypted_enable',
            'diskEncryptedKey' => 'disk_encrypted_key',
            'connectorEnable' => 'connector_enable',
            'enableAutoTopic' => 'enable_auto_topic',
            'storageSpecCode' => 'storage_spec_code',
            'enterpriseProjectId' => 'enterprise_project_id',
            'tags' => 'tags',
            'archType' => 'arch_type',
            'vpcClientPlain' => 'vpc_client_plain',
            'bssParam' => 'bss_param'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * name  **参数解释**： 实例名称。 **约束限制**： 由英文字符开头，只能由英文字母、数字、中划线、下划线组成，长度为4~64的字符。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * description  **参数解释**： 实例的描述信息。 **约束限制**： 长度不超过1024的字符串。[且字符串不能包含\">\"与\"<\"，字符串首字符不能为\"=\",\"+\",\"-\",\"@\"的全角和半角字符。](tag:hcs,fcs) \\与\"在json报文中属于特殊字符，如果参数值中需要显示\\或者\"字符，请在字符前增加转义字符\\，比如\\\\\\\\或者\\\\\"。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * engine  **参数解释**： 消息引擎。 **约束限制**： 不涉及 **取值范围**： kafka **默认取值**： 不涉及。
    * engineVersion  **参数解释**： 消息引擎的版本。 **约束限制**： 不涉及 **取值范围**： [- 1.1.0](tag:hws,hws_eu,hws_hk,ocb,hws_ocb,ctc,g42,hk_g42,tm,hk_tm,sbc,cmcc,ax) [- 2.3.0](tag:g42,tm,hk_g42,ctc,hk_tm,dt,sbc,cmcc,hws_eu) - 2.7 [- 3.x](tag:hws,hws_hk,dt,sbc,hcs,fcs,ctc,tm,hk_tm,hws_eu,ax) **默认取值**： 不涉及。
    * brokerNum  **参数解释**： 代理个数。 **约束限制**： 不涉及。 **取值范围**： [- Kafka实例规格为kafka.2u4g.cluster.small时，代理数取值范围3-30。](tag:hws,hws_hk,hws_eu,dt,ax) - Kafka实例规格为kafka.2u4g.cluster时，代理数取值范围3-30。 - Kafka实例规格为kafka.4u8g.cluster时，代理数取值范围3-30。 - Kafka实例规格为kafka.8u16g.cluster时，代理数取值范围3-50。 - Kafka实例规格为kafka.12u24g.cluster时，代理数取值范围3-50。 - Kafka实例规格为kafka.16u32g.cluster时，代理数取值范围3-50。 **默认取值**： 不涉及。
    * storageSpace  **参数解释**： 消息存储空间，单位GB。 **约束限制**： 不涉及。 **取值范围**： [- Kafka实例规格为c6.2u4g.cluster时，存储空间取值范围300GB ~ 300000GB。 - Kafka实例规格为c6.4u8g.cluster时，存储空间取值范围300GB ~ 600000GB。 - Kafka实例规格为c6.8u16g.cluster时，存储空间取值范围300GB ~ 1500000GB。 - Kafka实例规格为c6.12u24g.cluster时，存储空间取值范围300GB ~ 1500000GB。 - Kafka实例规格为c6.16u32g.cluster时，存储空间取值范围300GB ~ 1500000GB。](tag:hws,hws_eu,hws_hk,ocb,hws_ocb,ctc,g42,hk_g42,tm,hk_tm,dt,ax) [- Kafka实例规格为s6.2u4g.cluster.small时，存储空间取值范围300GB~300000GB。](tag:hws,hws_hk,hws_eu,dt,ax) [- Kafka实例规格为kafka.2u8g.cluster时，存储空间取值范围300GB~300000GB。](tag:fcs) [- Kafka实例规格为kafka.4u16g.cluster时，存储空间取值范围300GB~600000GB。 - Kafka实例规格为kafka.8u32g.cluster时，存储空间取值范围300GB~1500000GB。 - Kafka实例规格为kafka.16u64g.cluster时，存储空间取值范围300GB~1500000GB。 - Kafka实例规格为kafka.32u128g.cluster时，存储空间取值范围300GB~1500000GB。](tag:hcs,fcs) **默认取值**： 不涉及。
    * accessUser  **参数解释**：  认证用户名。 **约束限制**： 只能由英文字母开头且由英文字母、数字、中划线、下划线组成，长度为4~64的字符。当ssl_enable为true时，该参数必选，ssl_enable为false时，该参数无效。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * password  **参数解释**： 实例的认证密码。 **约束限制**： - 当ssl_enable为true时，该参数必选，ssl_enable为false时，该参数无效。 - 输入长度为8到32位的字符串。 - 必须包含如下四种字符中的三种组合：   - 小写字母。   - 大写字母。   - 数字。   - 特殊字符包括（`~!@#$%^&*()-_=+\\|[{}]:'\",<.>/?）和空格，并且不能以-开头。    **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * vpcId  **参数解释**：  虚拟私有云ID。获取方法如下：参考《虚拟私有云 API参考》，调用“查询VPC列表”接口，从响应体中获取VPC ID。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * securityGroupId  **参数解释**： 指定实例所属的安全组。获取方法如下：参考《虚拟私有云 API参考》，调用“查询安全组列表”接口，从响应体中获取安全组ID。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * subnetId  **参数解释**： 子网信息。获取方法如下：参考《虚拟私有云 API参考》，调用“查询子网列表”接口，从响应体中获取子网ID。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * availableZones  **参数解释**： 创建节点到指定且有资源的可用区ID。请参考[查询可用区信息](ListAvailableZones.xml)获取可用区ID。 **约束限制**： 该参数不能为空数组或者数组的值为空。  创建Kafka实例，节点需要部署在1个或3个及以上可用区中。如果部署在多个可用区中，以英文逗号隔开多个可用区ID。
    * productId  **参数解释**： 产品ID。产品ID可以从[查询产品规格列表](ListEngineProducts.xml)获取。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * maintainBegin  **参数解释**： 维护时间窗开始时间。 **约束限制**： 格式为HH:mm。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * maintainEnd  **参数解释**： 维护时间窗结束时间。 **约束限制**： 格式为HH:mm。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * enablePublicip  **参数解释**： 是否开启公网访问功能。 **约束限制**： 不涉及。 **取值范围**： - true：开启。 - false：不开启。 **默认取值**： false。
    * tenantIps  **参数解释**： 创建实例时可以手动指定实例节点的内网IP地址，仅支持指定IPv4地址。 **约束限制**： 指定内网IP地址数量必须小于等于创建的节点数量。  如果指定的内网IP地址数量小于创建的节点数量时，系统会自动为剩余的节点随机分配内网IP地址。
    * publicipId  **参数解释**： 实例绑定的弹性IP地址的ID。 **约束限制**： 以英文逗号隔开多个弹性IP地址的ID。  如果开启了公网访问功能（即enable_publicip为true），该字段为必选。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * sslEnable  **参数解释**： 是否开启SASL加密访问。  [实例创建后将不支持动态开启和关闭。](tag:ocb,hws_ocb,hcs) **约束限制**： 不涉及。 **取值范围**： - true：开启SASL加密访问。 - false：关闭SASL加密访问。 **默认取值**： 不涉及。
    * kafkaSecurityProtocol  **参数解释**： 开启SASL后使用的安全协议。 **约束限制**： 若该字段值为空，默认开启SASL_SSL认证机制。实例创建后，此参数不支持动态修改。 若创建实例时，使用了port_protocol参数，则Kafka的内网访问安全协议以及公网访问安全协议会使用port_protocol中的值，则此参数无效。 **取值范围**： - SASL_SSL：使用SSL证书加密传输，支持账号密码认证，安全性更高。 - SASL_PLAINTEXT：通过明文传输，支持账号密码认证，性能更好。 **默认取值**： 不涉及。
    * saslEnabledMechanisms  **参数解释**： 开启SASL后使用的认证机制。 **约束限制**： 如果开启了SASL认证功能（即ssl_enable=true），该字段为必选。若该字段值为空，默认开启PLAIN认证机制。
    * portProtocol  portProtocol
    * retentionPolicy  **参数解释**： 磁盘的容量到达容量阈值后，对于消息的处理策略。 **约束限制**： 不涉及。 **取值范围**： - produce_reject：表示拒绝消息写入。 - time_base：表示自动删除最老消息。 **默认取值**： 不涉及。
    * ipv6Enable  **参数解释**： 是否开启IPv6。 **约束限制**： 仅在虚拟私有云支持IPv6时生效。 **取值范围**： - true：开启。 - false：不开启。 **默认取值**： false。
    * diskEncryptedEnable  **参数解释**： 是否开启磁盘加密。 **约束限制**： 不涉及。 **取值范围**： - true：开启。 - false：不开启。 **默认取值**： false。
    * diskEncryptedKey  **参数解释**： 磁盘加密key，未开启磁盘加密时为空。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * connectorEnable  **参数解释**： 是否开启Smart Connect功能。Smart Connect用于Kafka实例和其他云服务之间的数据同步，或者两个Kafka实例之间的数据同步，实现数据的备份或迁移。 **约束限制**： 不涉及。 **取值范围**： - true：开启。 - false：不开启。 **默认取值**： false。
    * enableAutoTopic  **参数解释**： 是否开启kafka自动创建Topic功能。当您选择开启，向一个未创建的Topic生产或消费消息时，系统会自动创建此Topic。 **约束限制**： 不涉及。 **取值范围**： - true：开启。 - false：不开启。 **默认取值**： false。
    * storageSpecCode  **参数解释**： 云硬盘类型。[如何选择磁盘类型请参考《云硬盘 [产品介绍](tag:hws,hws_hk,hws_eu,cmcc)[用户指南](tag:dt,g42,hk_g42,ctc,tm,hk_tm,sbc,ocb,hws_ocb,ax)》的“磁盘类型及性能介绍”。](tag:hws,hws_eu,hws_hk,ocb,hws_ocb,ctc,g42,hk_g42,tm,hk_tm,dt,ax) **约束限制**： 不涉及。 **取值范围**： - dms.physical.storage.high.v2：高IO云硬盘。 - dms.physical.storage.ultra.v2：超高IO云硬盘。 - [dms.physical.storage.general：通用型SSD云硬盘。](tag:hws,hws_hk,dt,ax) - [dms.physical.storage.extreme：极速型SSD云硬盘。](tag:hws,hws_hk,dt,ax) **默认取值**： 不涉及。
    * enterpriseProjectId  **参数解释**： 企业项目ID。 **约束限制**： 若为企业项目账号，该参数必填。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * tags  **参数解释**： Kafka实例的标签信息。 **约束限制**： 不涉及。
    * archType  **参数解释**： CPU架构。 **约束限制**： 不涉及。 **取值范围**： - X86 [- ARM](tag:hcs,fcs,ctc) **默认取值**： 不涉及。
    * vpcClientPlain  **参数解释**： VPC内网明文访问。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * bssParam  bssParam
    *
    * @var string[]
    */
    protected static $setters = [
            'name' => 'setName',
            'description' => 'setDescription',
            'engine' => 'setEngine',
            'engineVersion' => 'setEngineVersion',
            'brokerNum' => 'setBrokerNum',
            'storageSpace' => 'setStorageSpace',
            'accessUser' => 'setAccessUser',
            'password' => 'setPassword',
            'vpcId' => 'setVpcId',
            'securityGroupId' => 'setSecurityGroupId',
            'subnetId' => 'setSubnetId',
            'availableZones' => 'setAvailableZones',
            'productId' => 'setProductId',
            'maintainBegin' => 'setMaintainBegin',
            'maintainEnd' => 'setMaintainEnd',
            'enablePublicip' => 'setEnablePublicip',
            'tenantIps' => 'setTenantIps',
            'publicipId' => 'setPublicipId',
            'sslEnable' => 'setSslEnable',
            'kafkaSecurityProtocol' => 'setKafkaSecurityProtocol',
            'saslEnabledMechanisms' => 'setSaslEnabledMechanisms',
            'portProtocol' => 'setPortProtocol',
            'retentionPolicy' => 'setRetentionPolicy',
            'ipv6Enable' => 'setIpv6Enable',
            'diskEncryptedEnable' => 'setDiskEncryptedEnable',
            'diskEncryptedKey' => 'setDiskEncryptedKey',
            'connectorEnable' => 'setConnectorEnable',
            'enableAutoTopic' => 'setEnableAutoTopic',
            'storageSpecCode' => 'setStorageSpecCode',
            'enterpriseProjectId' => 'setEnterpriseProjectId',
            'tags' => 'setTags',
            'archType' => 'setArchType',
            'vpcClientPlain' => 'setVpcClientPlain',
            'bssParam' => 'setBssParam'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * name  **参数解释**： 实例名称。 **约束限制**： 由英文字符开头，只能由英文字母、数字、中划线、下划线组成，长度为4~64的字符。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * description  **参数解释**： 实例的描述信息。 **约束限制**： 长度不超过1024的字符串。[且字符串不能包含\">\"与\"<\"，字符串首字符不能为\"=\",\"+\",\"-\",\"@\"的全角和半角字符。](tag:hcs,fcs) \\与\"在json报文中属于特殊字符，如果参数值中需要显示\\或者\"字符，请在字符前增加转义字符\\，比如\\\\\\\\或者\\\\\"。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * engine  **参数解释**： 消息引擎。 **约束限制**： 不涉及 **取值范围**： kafka **默认取值**： 不涉及。
    * engineVersion  **参数解释**： 消息引擎的版本。 **约束限制**： 不涉及 **取值范围**： [- 1.1.0](tag:hws,hws_eu,hws_hk,ocb,hws_ocb,ctc,g42,hk_g42,tm,hk_tm,sbc,cmcc,ax) [- 2.3.0](tag:g42,tm,hk_g42,ctc,hk_tm,dt,sbc,cmcc,hws_eu) - 2.7 [- 3.x](tag:hws,hws_hk,dt,sbc,hcs,fcs,ctc,tm,hk_tm,hws_eu,ax) **默认取值**： 不涉及。
    * brokerNum  **参数解释**： 代理个数。 **约束限制**： 不涉及。 **取值范围**： [- Kafka实例规格为kafka.2u4g.cluster.small时，代理数取值范围3-30。](tag:hws,hws_hk,hws_eu,dt,ax) - Kafka实例规格为kafka.2u4g.cluster时，代理数取值范围3-30。 - Kafka实例规格为kafka.4u8g.cluster时，代理数取值范围3-30。 - Kafka实例规格为kafka.8u16g.cluster时，代理数取值范围3-50。 - Kafka实例规格为kafka.12u24g.cluster时，代理数取值范围3-50。 - Kafka实例规格为kafka.16u32g.cluster时，代理数取值范围3-50。 **默认取值**： 不涉及。
    * storageSpace  **参数解释**： 消息存储空间，单位GB。 **约束限制**： 不涉及。 **取值范围**： [- Kafka实例规格为c6.2u4g.cluster时，存储空间取值范围300GB ~ 300000GB。 - Kafka实例规格为c6.4u8g.cluster时，存储空间取值范围300GB ~ 600000GB。 - Kafka实例规格为c6.8u16g.cluster时，存储空间取值范围300GB ~ 1500000GB。 - Kafka实例规格为c6.12u24g.cluster时，存储空间取值范围300GB ~ 1500000GB。 - Kafka实例规格为c6.16u32g.cluster时，存储空间取值范围300GB ~ 1500000GB。](tag:hws,hws_eu,hws_hk,ocb,hws_ocb,ctc,g42,hk_g42,tm,hk_tm,dt,ax) [- Kafka实例规格为s6.2u4g.cluster.small时，存储空间取值范围300GB~300000GB。](tag:hws,hws_hk,hws_eu,dt,ax) [- Kafka实例规格为kafka.2u8g.cluster时，存储空间取值范围300GB~300000GB。](tag:fcs) [- Kafka实例规格为kafka.4u16g.cluster时，存储空间取值范围300GB~600000GB。 - Kafka实例规格为kafka.8u32g.cluster时，存储空间取值范围300GB~1500000GB。 - Kafka实例规格为kafka.16u64g.cluster时，存储空间取值范围300GB~1500000GB。 - Kafka实例规格为kafka.32u128g.cluster时，存储空间取值范围300GB~1500000GB。](tag:hcs,fcs) **默认取值**： 不涉及。
    * accessUser  **参数解释**：  认证用户名。 **约束限制**： 只能由英文字母开头且由英文字母、数字、中划线、下划线组成，长度为4~64的字符。当ssl_enable为true时，该参数必选，ssl_enable为false时，该参数无效。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * password  **参数解释**： 实例的认证密码。 **约束限制**： - 当ssl_enable为true时，该参数必选，ssl_enable为false时，该参数无效。 - 输入长度为8到32位的字符串。 - 必须包含如下四种字符中的三种组合：   - 小写字母。   - 大写字母。   - 数字。   - 特殊字符包括（`~!@#$%^&*()-_=+\\|[{}]:'\",<.>/?）和空格，并且不能以-开头。    **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * vpcId  **参数解释**：  虚拟私有云ID。获取方法如下：参考《虚拟私有云 API参考》，调用“查询VPC列表”接口，从响应体中获取VPC ID。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * securityGroupId  **参数解释**： 指定实例所属的安全组。获取方法如下：参考《虚拟私有云 API参考》，调用“查询安全组列表”接口，从响应体中获取安全组ID。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * subnetId  **参数解释**： 子网信息。获取方法如下：参考《虚拟私有云 API参考》，调用“查询子网列表”接口，从响应体中获取子网ID。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * availableZones  **参数解释**： 创建节点到指定且有资源的可用区ID。请参考[查询可用区信息](ListAvailableZones.xml)获取可用区ID。 **约束限制**： 该参数不能为空数组或者数组的值为空。  创建Kafka实例，节点需要部署在1个或3个及以上可用区中。如果部署在多个可用区中，以英文逗号隔开多个可用区ID。
    * productId  **参数解释**： 产品ID。产品ID可以从[查询产品规格列表](ListEngineProducts.xml)获取。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * maintainBegin  **参数解释**： 维护时间窗开始时间。 **约束限制**： 格式为HH:mm。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * maintainEnd  **参数解释**： 维护时间窗结束时间。 **约束限制**： 格式为HH:mm。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * enablePublicip  **参数解释**： 是否开启公网访问功能。 **约束限制**： 不涉及。 **取值范围**： - true：开启。 - false：不开启。 **默认取值**： false。
    * tenantIps  **参数解释**： 创建实例时可以手动指定实例节点的内网IP地址，仅支持指定IPv4地址。 **约束限制**： 指定内网IP地址数量必须小于等于创建的节点数量。  如果指定的内网IP地址数量小于创建的节点数量时，系统会自动为剩余的节点随机分配内网IP地址。
    * publicipId  **参数解释**： 实例绑定的弹性IP地址的ID。 **约束限制**： 以英文逗号隔开多个弹性IP地址的ID。  如果开启了公网访问功能（即enable_publicip为true），该字段为必选。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * sslEnable  **参数解释**： 是否开启SASL加密访问。  [实例创建后将不支持动态开启和关闭。](tag:ocb,hws_ocb,hcs) **约束限制**： 不涉及。 **取值范围**： - true：开启SASL加密访问。 - false：关闭SASL加密访问。 **默认取值**： 不涉及。
    * kafkaSecurityProtocol  **参数解释**： 开启SASL后使用的安全协议。 **约束限制**： 若该字段值为空，默认开启SASL_SSL认证机制。实例创建后，此参数不支持动态修改。 若创建实例时，使用了port_protocol参数，则Kafka的内网访问安全协议以及公网访问安全协议会使用port_protocol中的值，则此参数无效。 **取值范围**： - SASL_SSL：使用SSL证书加密传输，支持账号密码认证，安全性更高。 - SASL_PLAINTEXT：通过明文传输，支持账号密码认证，性能更好。 **默认取值**： 不涉及。
    * saslEnabledMechanisms  **参数解释**： 开启SASL后使用的认证机制。 **约束限制**： 如果开启了SASL认证功能（即ssl_enable=true），该字段为必选。若该字段值为空，默认开启PLAIN认证机制。
    * portProtocol  portProtocol
    * retentionPolicy  **参数解释**： 磁盘的容量到达容量阈值后，对于消息的处理策略。 **约束限制**： 不涉及。 **取值范围**： - produce_reject：表示拒绝消息写入。 - time_base：表示自动删除最老消息。 **默认取值**： 不涉及。
    * ipv6Enable  **参数解释**： 是否开启IPv6。 **约束限制**： 仅在虚拟私有云支持IPv6时生效。 **取值范围**： - true：开启。 - false：不开启。 **默认取值**： false。
    * diskEncryptedEnable  **参数解释**： 是否开启磁盘加密。 **约束限制**： 不涉及。 **取值范围**： - true：开启。 - false：不开启。 **默认取值**： false。
    * diskEncryptedKey  **参数解释**： 磁盘加密key，未开启磁盘加密时为空。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * connectorEnable  **参数解释**： 是否开启Smart Connect功能。Smart Connect用于Kafka实例和其他云服务之间的数据同步，或者两个Kafka实例之间的数据同步，实现数据的备份或迁移。 **约束限制**： 不涉及。 **取值范围**： - true：开启。 - false：不开启。 **默认取值**： false。
    * enableAutoTopic  **参数解释**： 是否开启kafka自动创建Topic功能。当您选择开启，向一个未创建的Topic生产或消费消息时，系统会自动创建此Topic。 **约束限制**： 不涉及。 **取值范围**： - true：开启。 - false：不开启。 **默认取值**： false。
    * storageSpecCode  **参数解释**： 云硬盘类型。[如何选择磁盘类型请参考《云硬盘 [产品介绍](tag:hws,hws_hk,hws_eu,cmcc)[用户指南](tag:dt,g42,hk_g42,ctc,tm,hk_tm,sbc,ocb,hws_ocb,ax)》的“磁盘类型及性能介绍”。](tag:hws,hws_eu,hws_hk,ocb,hws_ocb,ctc,g42,hk_g42,tm,hk_tm,dt,ax) **约束限制**： 不涉及。 **取值范围**： - dms.physical.storage.high.v2：高IO云硬盘。 - dms.physical.storage.ultra.v2：超高IO云硬盘。 - [dms.physical.storage.general：通用型SSD云硬盘。](tag:hws,hws_hk,dt,ax) - [dms.physical.storage.extreme：极速型SSD云硬盘。](tag:hws,hws_hk,dt,ax) **默认取值**： 不涉及。
    * enterpriseProjectId  **参数解释**： 企业项目ID。 **约束限制**： 若为企业项目账号，该参数必填。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * tags  **参数解释**： Kafka实例的标签信息。 **约束限制**： 不涉及。
    * archType  **参数解释**： CPU架构。 **约束限制**： 不涉及。 **取值范围**： - X86 [- ARM](tag:hcs,fcs,ctc) **默认取值**： 不涉及。
    * vpcClientPlain  **参数解释**： VPC内网明文访问。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * bssParam  bssParam
    *
    * @var string[]
    */
    protected static $getters = [
            'name' => 'getName',
            'description' => 'getDescription',
            'engine' => 'getEngine',
            'engineVersion' => 'getEngineVersion',
            'brokerNum' => 'getBrokerNum',
            'storageSpace' => 'getStorageSpace',
            'accessUser' => 'getAccessUser',
            'password' => 'getPassword',
            'vpcId' => 'getVpcId',
            'securityGroupId' => 'getSecurityGroupId',
            'subnetId' => 'getSubnetId',
            'availableZones' => 'getAvailableZones',
            'productId' => 'getProductId',
            'maintainBegin' => 'getMaintainBegin',
            'maintainEnd' => 'getMaintainEnd',
            'enablePublicip' => 'getEnablePublicip',
            'tenantIps' => 'getTenantIps',
            'publicipId' => 'getPublicipId',
            'sslEnable' => 'getSslEnable',
            'kafkaSecurityProtocol' => 'getKafkaSecurityProtocol',
            'saslEnabledMechanisms' => 'getSaslEnabledMechanisms',
            'portProtocol' => 'getPortProtocol',
            'retentionPolicy' => 'getRetentionPolicy',
            'ipv6Enable' => 'getIpv6Enable',
            'diskEncryptedEnable' => 'getDiskEncryptedEnable',
            'diskEncryptedKey' => 'getDiskEncryptedKey',
            'connectorEnable' => 'getConnectorEnable',
            'enableAutoTopic' => 'getEnableAutoTopic',
            'storageSpecCode' => 'getStorageSpecCode',
            'enterpriseProjectId' => 'getEnterpriseProjectId',
            'tags' => 'getTags',
            'archType' => 'getArchType',
            'vpcClientPlain' => 'getVpcClientPlain',
            'bssParam' => 'getBssParam'
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
    const ENGINE_KAFKA = 'kafka';
    const SASL_ENABLED_MECHANISMS_PLAIN = 'PLAIN';
    const SASL_ENABLED_MECHANISMS_SCRAM_SHA_512 = 'SCRAM-SHA-512';
    const RETENTION_POLICY_TIME_BASE = 'time_base';
    const RETENTION_POLICY_PRODUCE_REJECT = 'produce_reject';
    const STORAGE_SPEC_CODE_DMS_PHYSICAL_STORAGE_HIGH_V2 = 'dms.physical.storage.high.v2';
    const STORAGE_SPEC_CODE_DMS_PHYSICAL_STORAGE_ULTRA_V2 = 'dms.physical.storage.ultra.v2';
    const STORAGE_SPEC_CODE_DMS_PHYSICAL_STORAGE_GENERAL_TAGHWSHWS_HKDTAX = '[dms.physical.storage.general](tag:hws,hws_hk,dt,ax)';
    const STORAGE_SPEC_CODE_DMS_PHYSICAL_STORAGE_EXTREME_TAGHWSHWS_HKDTAX = '[dms.physical.storage.extreme](tag:hws,hws_hk,dt,ax)';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getEngineAllowableValues()
    {
        return [
            self::ENGINE_KAFKA,
        ];
    }

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getSaslEnabledMechanismsAllowableValues()
    {
        return [
            self::SASL_ENABLED_MECHANISMS_PLAIN,
            self::SASL_ENABLED_MECHANISMS_SCRAM_SHA_512,
        ];
    }

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getRetentionPolicyAllowableValues()
    {
        return [
            self::RETENTION_POLICY_TIME_BASE,
            self::RETENTION_POLICY_PRODUCE_REJECT,
        ];
    }

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getStorageSpecCodeAllowableValues()
    {
        return [
            self::STORAGE_SPEC_CODE_DMS_PHYSICAL_STORAGE_HIGH_V2,
            self::STORAGE_SPEC_CODE_DMS_PHYSICAL_STORAGE_ULTRA_V2,
            self::STORAGE_SPEC_CODE_DMS_PHYSICAL_STORAGE_GENERAL_TAGHWSHWS_HKDTAX,
            self::STORAGE_SPEC_CODE_DMS_PHYSICAL_STORAGE_EXTREME_TAGHWSHWS_HKDTAX,
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
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['engine'] = isset($data['engine']) ? $data['engine'] : null;
        $this->container['engineVersion'] = isset($data['engineVersion']) ? $data['engineVersion'] : null;
        $this->container['brokerNum'] = isset($data['brokerNum']) ? $data['brokerNum'] : null;
        $this->container['storageSpace'] = isset($data['storageSpace']) ? $data['storageSpace'] : null;
        $this->container['accessUser'] = isset($data['accessUser']) ? $data['accessUser'] : null;
        $this->container['password'] = isset($data['password']) ? $data['password'] : null;
        $this->container['vpcId'] = isset($data['vpcId']) ? $data['vpcId'] : null;
        $this->container['securityGroupId'] = isset($data['securityGroupId']) ? $data['securityGroupId'] : null;
        $this->container['subnetId'] = isset($data['subnetId']) ? $data['subnetId'] : null;
        $this->container['availableZones'] = isset($data['availableZones']) ? $data['availableZones'] : null;
        $this->container['productId'] = isset($data['productId']) ? $data['productId'] : null;
        $this->container['maintainBegin'] = isset($data['maintainBegin']) ? $data['maintainBegin'] : null;
        $this->container['maintainEnd'] = isset($data['maintainEnd']) ? $data['maintainEnd'] : null;
        $this->container['enablePublicip'] = isset($data['enablePublicip']) ? $data['enablePublicip'] : null;
        $this->container['tenantIps'] = isset($data['tenantIps']) ? $data['tenantIps'] : null;
        $this->container['publicipId'] = isset($data['publicipId']) ? $data['publicipId'] : null;
        $this->container['sslEnable'] = isset($data['sslEnable']) ? $data['sslEnable'] : null;
        $this->container['kafkaSecurityProtocol'] = isset($data['kafkaSecurityProtocol']) ? $data['kafkaSecurityProtocol'] : null;
        $this->container['saslEnabledMechanisms'] = isset($data['saslEnabledMechanisms']) ? $data['saslEnabledMechanisms'] : null;
        $this->container['portProtocol'] = isset($data['portProtocol']) ? $data['portProtocol'] : null;
        $this->container['retentionPolicy'] = isset($data['retentionPolicy']) ? $data['retentionPolicy'] : null;
        $this->container['ipv6Enable'] = isset($data['ipv6Enable']) ? $data['ipv6Enable'] : null;
        $this->container['diskEncryptedEnable'] = isset($data['diskEncryptedEnable']) ? $data['diskEncryptedEnable'] : null;
        $this->container['diskEncryptedKey'] = isset($data['diskEncryptedKey']) ? $data['diskEncryptedKey'] : null;
        $this->container['connectorEnable'] = isset($data['connectorEnable']) ? $data['connectorEnable'] : null;
        $this->container['enableAutoTopic'] = isset($data['enableAutoTopic']) ? $data['enableAutoTopic'] : null;
        $this->container['storageSpecCode'] = isset($data['storageSpecCode']) ? $data['storageSpecCode'] : null;
        $this->container['enterpriseProjectId'] = isset($data['enterpriseProjectId']) ? $data['enterpriseProjectId'] : null;
        $this->container['tags'] = isset($data['tags']) ? $data['tags'] : null;
        $this->container['archType'] = isset($data['archType']) ? $data['archType'] : null;
        $this->container['vpcClientPlain'] = isset($data['vpcClientPlain']) ? $data['vpcClientPlain'] : null;
        $this->container['bssParam'] = isset($data['bssParam']) ? $data['bssParam'] : null;
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
            $allowedValues = $this->getEngineAllowableValues();
                if (!is_null($this->container['engine']) && !in_array($this->container['engine'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'engine', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

        if ($this->container['engineVersion'] === null) {
            $invalidProperties[] = "'engineVersion' can't be null";
        }
        if ($this->container['brokerNum'] === null) {
            $invalidProperties[] = "'brokerNum' can't be null";
        }
        if ($this->container['storageSpace'] === null) {
            $invalidProperties[] = "'storageSpace' can't be null";
        }
        if ($this->container['vpcId'] === null) {
            $invalidProperties[] = "'vpcId' can't be null";
        }
        if ($this->container['securityGroupId'] === null) {
            $invalidProperties[] = "'securityGroupId' can't be null";
        }
        if ($this->container['subnetId'] === null) {
            $invalidProperties[] = "'subnetId' can't be null";
        }
        if ($this->container['availableZones'] === null) {
            $invalidProperties[] = "'availableZones' can't be null";
        }
        if ($this->container['productId'] === null) {
            $invalidProperties[] = "'productId' can't be null";
        }
            $allowedValues = $this->getRetentionPolicyAllowableValues();
                if (!is_null($this->container['retentionPolicy']) && !in_array($this->container['retentionPolicy'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'retentionPolicy', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

        if ($this->container['storageSpecCode'] === null) {
            $invalidProperties[] = "'storageSpecCode' can't be null";
        }
            $allowedValues = $this->getStorageSpecCodeAllowableValues();
                if (!is_null($this->container['storageSpecCode']) && !in_array($this->container['storageSpecCode'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'storageSpecCode', must be one of '%s'",
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
    *  **参数解释**： 实例的描述信息。 **约束限制**： 长度不超过1024的字符串。[且字符串不能包含\">\"与\"<\"，字符串首字符不能为\"=\",\"+\",\"-\",\"@\"的全角和半角字符。](tag:hcs,fcs) \\与\"在json报文中属于特殊字符，如果参数值中需要显示\\或者\"字符，请在字符前增加转义字符\\，比如\\\\\\\\或者\\\\\"。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
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
    * @param string|null $description **参数解释**： 实例的描述信息。 **约束限制**： 长度不超过1024的字符串。[且字符串不能包含\">\"与\"<\"，字符串首字符不能为\"=\",\"+\",\"-\",\"@\"的全角和半角字符。](tag:hcs,fcs) \\与\"在json报文中属于特殊字符，如果参数值中需要显示\\或者\"字符，请在字符前增加转义字符\\，比如\\\\\\\\或者\\\\\"。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
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
    *  **参数解释**： 消息引擎。 **约束限制**： 不涉及 **取值范围**： kafka **默认取值**： 不涉及。
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
    * @param string $engine **参数解释**： 消息引擎。 **约束限制**： 不涉及 **取值范围**： kafka **默认取值**： 不涉及。
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
    *  **参数解释**： 消息引擎的版本。 **约束限制**： 不涉及 **取值范围**： [- 1.1.0](tag:hws,hws_eu,hws_hk,ocb,hws_ocb,ctc,g42,hk_g42,tm,hk_tm,sbc,cmcc,ax) [- 2.3.0](tag:g42,tm,hk_g42,ctc,hk_tm,dt,sbc,cmcc,hws_eu) - 2.7 [- 3.x](tag:hws,hws_hk,dt,sbc,hcs,fcs,ctc,tm,hk_tm,hws_eu,ax) **默认取值**： 不涉及。
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
    * @param string $engineVersion **参数解释**： 消息引擎的版本。 **约束限制**： 不涉及 **取值范围**： [- 1.1.0](tag:hws,hws_eu,hws_hk,ocb,hws_ocb,ctc,g42,hk_g42,tm,hk_tm,sbc,cmcc,ax) [- 2.3.0](tag:g42,tm,hk_g42,ctc,hk_tm,dt,sbc,cmcc,hws_eu) - 2.7 [- 3.x](tag:hws,hws_hk,dt,sbc,hcs,fcs,ctc,tm,hk_tm,hws_eu,ax) **默认取值**： 不涉及。
    *
    * @return $this
    */
    public function setEngineVersion($engineVersion)
    {
        $this->container['engineVersion'] = $engineVersion;
        return $this;
    }

    /**
    * Gets brokerNum
    *  **参数解释**： 代理个数。 **约束限制**： 不涉及。 **取值范围**： [- Kafka实例规格为kafka.2u4g.cluster.small时，代理数取值范围3-30。](tag:hws,hws_hk,hws_eu,dt,ax) - Kafka实例规格为kafka.2u4g.cluster时，代理数取值范围3-30。 - Kafka实例规格为kafka.4u8g.cluster时，代理数取值范围3-30。 - Kafka实例规格为kafka.8u16g.cluster时，代理数取值范围3-50。 - Kafka实例规格为kafka.12u24g.cluster时，代理数取值范围3-50。 - Kafka实例规格为kafka.16u32g.cluster时，代理数取值范围3-50。 **默认取值**： 不涉及。
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
    * @param int $brokerNum **参数解释**： 代理个数。 **约束限制**： 不涉及。 **取值范围**： [- Kafka实例规格为kafka.2u4g.cluster.small时，代理数取值范围3-30。](tag:hws,hws_hk,hws_eu,dt,ax) - Kafka实例规格为kafka.2u4g.cluster时，代理数取值范围3-30。 - Kafka实例规格为kafka.4u8g.cluster时，代理数取值范围3-30。 - Kafka实例规格为kafka.8u16g.cluster时，代理数取值范围3-50。 - Kafka实例规格为kafka.12u24g.cluster时，代理数取值范围3-50。 - Kafka实例规格为kafka.16u32g.cluster时，代理数取值范围3-50。 **默认取值**： 不涉及。
    *
    * @return $this
    */
    public function setBrokerNum($brokerNum)
    {
        $this->container['brokerNum'] = $brokerNum;
        return $this;
    }

    /**
    * Gets storageSpace
    *  **参数解释**： 消息存储空间，单位GB。 **约束限制**： 不涉及。 **取值范围**： [- Kafka实例规格为c6.2u4g.cluster时，存储空间取值范围300GB ~ 300000GB。 - Kafka实例规格为c6.4u8g.cluster时，存储空间取值范围300GB ~ 600000GB。 - Kafka实例规格为c6.8u16g.cluster时，存储空间取值范围300GB ~ 1500000GB。 - Kafka实例规格为c6.12u24g.cluster时，存储空间取值范围300GB ~ 1500000GB。 - Kafka实例规格为c6.16u32g.cluster时，存储空间取值范围300GB ~ 1500000GB。](tag:hws,hws_eu,hws_hk,ocb,hws_ocb,ctc,g42,hk_g42,tm,hk_tm,dt,ax) [- Kafka实例规格为s6.2u4g.cluster.small时，存储空间取值范围300GB~300000GB。](tag:hws,hws_hk,hws_eu,dt,ax) [- Kafka实例规格为kafka.2u8g.cluster时，存储空间取值范围300GB~300000GB。](tag:fcs) [- Kafka实例规格为kafka.4u16g.cluster时，存储空间取值范围300GB~600000GB。 - Kafka实例规格为kafka.8u32g.cluster时，存储空间取值范围300GB~1500000GB。 - Kafka实例规格为kafka.16u64g.cluster时，存储空间取值范围300GB~1500000GB。 - Kafka实例规格为kafka.32u128g.cluster时，存储空间取值范围300GB~1500000GB。](tag:hcs,fcs) **默认取值**： 不涉及。
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
    * @param int $storageSpace **参数解释**： 消息存储空间，单位GB。 **约束限制**： 不涉及。 **取值范围**： [- Kafka实例规格为c6.2u4g.cluster时，存储空间取值范围300GB ~ 300000GB。 - Kafka实例规格为c6.4u8g.cluster时，存储空间取值范围300GB ~ 600000GB。 - Kafka实例规格为c6.8u16g.cluster时，存储空间取值范围300GB ~ 1500000GB。 - Kafka实例规格为c6.12u24g.cluster时，存储空间取值范围300GB ~ 1500000GB。 - Kafka实例规格为c6.16u32g.cluster时，存储空间取值范围300GB ~ 1500000GB。](tag:hws,hws_eu,hws_hk,ocb,hws_ocb,ctc,g42,hk_g42,tm,hk_tm,dt,ax) [- Kafka实例规格为s6.2u4g.cluster.small时，存储空间取值范围300GB~300000GB。](tag:hws,hws_hk,hws_eu,dt,ax) [- Kafka实例规格为kafka.2u8g.cluster时，存储空间取值范围300GB~300000GB。](tag:fcs) [- Kafka实例规格为kafka.4u16g.cluster时，存储空间取值范围300GB~600000GB。 - Kafka实例规格为kafka.8u32g.cluster时，存储空间取值范围300GB~1500000GB。 - Kafka实例规格为kafka.16u64g.cluster时，存储空间取值范围300GB~1500000GB。 - Kafka实例规格为kafka.32u128g.cluster时，存储空间取值范围300GB~1500000GB。](tag:hcs,fcs) **默认取值**： 不涉及。
    *
    * @return $this
    */
    public function setStorageSpace($storageSpace)
    {
        $this->container['storageSpace'] = $storageSpace;
        return $this;
    }

    /**
    * Gets accessUser
    *  **参数解释**：  认证用户名。 **约束限制**： 只能由英文字母开头且由英文字母、数字、中划线、下划线组成，长度为4~64的字符。当ssl_enable为true时，该参数必选，ssl_enable为false时，该参数无效。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    *
    * @return string|null
    */
    public function getAccessUser()
    {
        return $this->container['accessUser'];
    }

    /**
    * Sets accessUser
    *
    * @param string|null $accessUser **参数解释**：  认证用户名。 **约束限制**： 只能由英文字母开头且由英文字母、数字、中划线、下划线组成，长度为4~64的字符。当ssl_enable为true时，该参数必选，ssl_enable为false时，该参数无效。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    *
    * @return $this
    */
    public function setAccessUser($accessUser)
    {
        $this->container['accessUser'] = $accessUser;
        return $this;
    }

    /**
    * Gets password
    *  **参数解释**： 实例的认证密码。 **约束限制**： - 当ssl_enable为true时，该参数必选，ssl_enable为false时，该参数无效。 - 输入长度为8到32位的字符串。 - 必须包含如下四种字符中的三种组合：   - 小写字母。   - 大写字母。   - 数字。   - 特殊字符包括（`~!@#$%^&*()-_=+\\|[{}]:'\",<.>/?）和空格，并且不能以-开头。    **取值范围**： 不涉及。 **默认取值**： 不涉及。
    *
    * @return string|null
    */
    public function getPassword()
    {
        return $this->container['password'];
    }

    /**
    * Sets password
    *
    * @param string|null $password **参数解释**： 实例的认证密码。 **约束限制**： - 当ssl_enable为true时，该参数必选，ssl_enable为false时，该参数无效。 - 输入长度为8到32位的字符串。 - 必须包含如下四种字符中的三种组合：   - 小写字母。   - 大写字母。   - 数字。   - 特殊字符包括（`~!@#$%^&*()-_=+\\|[{}]:'\",<.>/?）和空格，并且不能以-开头。    **取值范围**： 不涉及。 **默认取值**： 不涉及。
    *
    * @return $this
    */
    public function setPassword($password)
    {
        $this->container['password'] = $password;
        return $this;
    }

    /**
    * Gets vpcId
    *  **参数解释**：  虚拟私有云ID。获取方法如下：参考《虚拟私有云 API参考》，调用“查询VPC列表”接口，从响应体中获取VPC ID。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
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
    * @param string $vpcId **参数解释**：  虚拟私有云ID。获取方法如下：参考《虚拟私有云 API参考》，调用“查询VPC列表”接口，从响应体中获取VPC ID。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    *
    * @return $this
    */
    public function setVpcId($vpcId)
    {
        $this->container['vpcId'] = $vpcId;
        return $this;
    }

    /**
    * Gets securityGroupId
    *  **参数解释**： 指定实例所属的安全组。获取方法如下：参考《虚拟私有云 API参考》，调用“查询安全组列表”接口，从响应体中获取安全组ID。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
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
    * @param string $securityGroupId **参数解释**： 指定实例所属的安全组。获取方法如下：参考《虚拟私有云 API参考》，调用“查询安全组列表”接口，从响应体中获取安全组ID。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    *
    * @return $this
    */
    public function setSecurityGroupId($securityGroupId)
    {
        $this->container['securityGroupId'] = $securityGroupId;
        return $this;
    }

    /**
    * Gets subnetId
    *  **参数解释**： 子网信息。获取方法如下：参考《虚拟私有云 API参考》，调用“查询子网列表”接口，从响应体中获取子网ID。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
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
    * @param string $subnetId **参数解释**： 子网信息。获取方法如下：参考《虚拟私有云 API参考》，调用“查询子网列表”接口，从响应体中获取子网ID。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    *
    * @return $this
    */
    public function setSubnetId($subnetId)
    {
        $this->container['subnetId'] = $subnetId;
        return $this;
    }

    /**
    * Gets availableZones
    *  **参数解释**： 创建节点到指定且有资源的可用区ID。请参考[查询可用区信息](ListAvailableZones.xml)获取可用区ID。 **约束限制**： 该参数不能为空数组或者数组的值为空。  创建Kafka实例，节点需要部署在1个或3个及以上可用区中。如果部署在多个可用区中，以英文逗号隔开多个可用区ID。
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
    * @param string[] $availableZones **参数解释**： 创建节点到指定且有资源的可用区ID。请参考[查询可用区信息](ListAvailableZones.xml)获取可用区ID。 **约束限制**： 该参数不能为空数组或者数组的值为空。  创建Kafka实例，节点需要部署在1个或3个及以上可用区中。如果部署在多个可用区中，以英文逗号隔开多个可用区ID。
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
    *  **参数解释**： 产品ID。产品ID可以从[查询产品规格列表](ListEngineProducts.xml)获取。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
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
    * @param string $productId **参数解释**： 产品ID。产品ID可以从[查询产品规格列表](ListEngineProducts.xml)获取。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    *
    * @return $this
    */
    public function setProductId($productId)
    {
        $this->container['productId'] = $productId;
        return $this;
    }

    /**
    * Gets maintainBegin
    *  **参数解释**： 维护时间窗开始时间。 **约束限制**： 格式为HH:mm。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    *
    * @return string|null
    */
    public function getMaintainBegin()
    {
        return $this->container['maintainBegin'];
    }

    /**
    * Sets maintainBegin
    *
    * @param string|null $maintainBegin **参数解释**： 维护时间窗开始时间。 **约束限制**： 格式为HH:mm。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    *
    * @return $this
    */
    public function setMaintainBegin($maintainBegin)
    {
        $this->container['maintainBegin'] = $maintainBegin;
        return $this;
    }

    /**
    * Gets maintainEnd
    *  **参数解释**： 维护时间窗结束时间。 **约束限制**： 格式为HH:mm。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    *
    * @return string|null
    */
    public function getMaintainEnd()
    {
        return $this->container['maintainEnd'];
    }

    /**
    * Sets maintainEnd
    *
    * @param string|null $maintainEnd **参数解释**： 维护时间窗结束时间。 **约束限制**： 格式为HH:mm。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    *
    * @return $this
    */
    public function setMaintainEnd($maintainEnd)
    {
        $this->container['maintainEnd'] = $maintainEnd;
        return $this;
    }

    /**
    * Gets enablePublicip
    *  **参数解释**： 是否开启公网访问功能。 **约束限制**： 不涉及。 **取值范围**： - true：开启。 - false：不开启。 **默认取值**： false。
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
    * @param bool|null $enablePublicip **参数解释**： 是否开启公网访问功能。 **约束限制**： 不涉及。 **取值范围**： - true：开启。 - false：不开启。 **默认取值**： false。
    *
    * @return $this
    */
    public function setEnablePublicip($enablePublicip)
    {
        $this->container['enablePublicip'] = $enablePublicip;
        return $this;
    }

    /**
    * Gets tenantIps
    *  **参数解释**： 创建实例时可以手动指定实例节点的内网IP地址，仅支持指定IPv4地址。 **约束限制**： 指定内网IP地址数量必须小于等于创建的节点数量。  如果指定的内网IP地址数量小于创建的节点数量时，系统会自动为剩余的节点随机分配内网IP地址。
    *
    * @return string[]|null
    */
    public function getTenantIps()
    {
        return $this->container['tenantIps'];
    }

    /**
    * Sets tenantIps
    *
    * @param string[]|null $tenantIps **参数解释**： 创建实例时可以手动指定实例节点的内网IP地址，仅支持指定IPv4地址。 **约束限制**： 指定内网IP地址数量必须小于等于创建的节点数量。  如果指定的内网IP地址数量小于创建的节点数量时，系统会自动为剩余的节点随机分配内网IP地址。
    *
    * @return $this
    */
    public function setTenantIps($tenantIps)
    {
        $this->container['tenantIps'] = $tenantIps;
        return $this;
    }

    /**
    * Gets publicipId
    *  **参数解释**： 实例绑定的弹性IP地址的ID。 **约束限制**： 以英文逗号隔开多个弹性IP地址的ID。  如果开启了公网访问功能（即enable_publicip为true），该字段为必选。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
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
    * @param string|null $publicipId **参数解释**： 实例绑定的弹性IP地址的ID。 **约束限制**： 以英文逗号隔开多个弹性IP地址的ID。  如果开启了公网访问功能（即enable_publicip为true），该字段为必选。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    *
    * @return $this
    */
    public function setPublicipId($publicipId)
    {
        $this->container['publicipId'] = $publicipId;
        return $this;
    }

    /**
    * Gets sslEnable
    *  **参数解释**： 是否开启SASL加密访问。  [实例创建后将不支持动态开启和关闭。](tag:ocb,hws_ocb,hcs) **约束限制**： 不涉及。 **取值范围**： - true：开启SASL加密访问。 - false：关闭SASL加密访问。 **默认取值**： 不涉及。
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
    * @param bool|null $sslEnable **参数解释**： 是否开启SASL加密访问。  [实例创建后将不支持动态开启和关闭。](tag:ocb,hws_ocb,hcs) **约束限制**： 不涉及。 **取值范围**： - true：开启SASL加密访问。 - false：关闭SASL加密访问。 **默认取值**： 不涉及。
    *
    * @return $this
    */
    public function setSslEnable($sslEnable)
    {
        $this->container['sslEnable'] = $sslEnable;
        return $this;
    }

    /**
    * Gets kafkaSecurityProtocol
    *  **参数解释**： 开启SASL后使用的安全协议。 **约束限制**： 若该字段值为空，默认开启SASL_SSL认证机制。实例创建后，此参数不支持动态修改。 若创建实例时，使用了port_protocol参数，则Kafka的内网访问安全协议以及公网访问安全协议会使用port_protocol中的值，则此参数无效。 **取值范围**： - SASL_SSL：使用SSL证书加密传输，支持账号密码认证，安全性更高。 - SASL_PLAINTEXT：通过明文传输，支持账号密码认证，性能更好。 **默认取值**： 不涉及。
    *
    * @return string|null
    */
    public function getKafkaSecurityProtocol()
    {
        return $this->container['kafkaSecurityProtocol'];
    }

    /**
    * Sets kafkaSecurityProtocol
    *
    * @param string|null $kafkaSecurityProtocol **参数解释**： 开启SASL后使用的安全协议。 **约束限制**： 若该字段值为空，默认开启SASL_SSL认证机制。实例创建后，此参数不支持动态修改。 若创建实例时，使用了port_protocol参数，则Kafka的内网访问安全协议以及公网访问安全协议会使用port_protocol中的值，则此参数无效。 **取值范围**： - SASL_SSL：使用SSL证书加密传输，支持账号密码认证，安全性更高。 - SASL_PLAINTEXT：通过明文传输，支持账号密码认证，性能更好。 **默认取值**： 不涉及。
    *
    * @return $this
    */
    public function setKafkaSecurityProtocol($kafkaSecurityProtocol)
    {
        $this->container['kafkaSecurityProtocol'] = $kafkaSecurityProtocol;
        return $this;
    }

    /**
    * Gets saslEnabledMechanisms
    *  **参数解释**： 开启SASL后使用的认证机制。 **约束限制**： 如果开启了SASL认证功能（即ssl_enable=true），该字段为必选。若该字段值为空，默认开启PLAIN认证机制。
    *
    * @return string[]|null
    */
    public function getSaslEnabledMechanisms()
    {
        return $this->container['saslEnabledMechanisms'];
    }

    /**
    * Sets saslEnabledMechanisms
    *
    * @param string[]|null $saslEnabledMechanisms **参数解释**： 开启SASL后使用的认证机制。 **约束限制**： 如果开启了SASL认证功能（即ssl_enable=true），该字段为必选。若该字段值为空，默认开启PLAIN认证机制。
    *
    * @return $this
    */
    public function setSaslEnabledMechanisms($saslEnabledMechanisms)
    {
        $this->container['saslEnabledMechanisms'] = $saslEnabledMechanisms;
        return $this;
    }

    /**
    * Gets portProtocol
    *  portProtocol
    *
    * @return \HuaweiCloud\SDK\Kafka\V2\Model\PortProtocol|null
    */
    public function getPortProtocol()
    {
        return $this->container['portProtocol'];
    }

    /**
    * Sets portProtocol
    *
    * @param \HuaweiCloud\SDK\Kafka\V2\Model\PortProtocol|null $portProtocol portProtocol
    *
    * @return $this
    */
    public function setPortProtocol($portProtocol)
    {
        $this->container['portProtocol'] = $portProtocol;
        return $this;
    }

    /**
    * Gets retentionPolicy
    *  **参数解释**： 磁盘的容量到达容量阈值后，对于消息的处理策略。 **约束限制**： 不涉及。 **取值范围**： - produce_reject：表示拒绝消息写入。 - time_base：表示自动删除最老消息。 **默认取值**： 不涉及。
    *
    * @return string|null
    */
    public function getRetentionPolicy()
    {
        return $this->container['retentionPolicy'];
    }

    /**
    * Sets retentionPolicy
    *
    * @param string|null $retentionPolicy **参数解释**： 磁盘的容量到达容量阈值后，对于消息的处理策略。 **约束限制**： 不涉及。 **取值范围**： - produce_reject：表示拒绝消息写入。 - time_base：表示自动删除最老消息。 **默认取值**： 不涉及。
    *
    * @return $this
    */
    public function setRetentionPolicy($retentionPolicy)
    {
        $this->container['retentionPolicy'] = $retentionPolicy;
        return $this;
    }

    /**
    * Gets ipv6Enable
    *  **参数解释**： 是否开启IPv6。 **约束限制**： 仅在虚拟私有云支持IPv6时生效。 **取值范围**： - true：开启。 - false：不开启。 **默认取值**： false。
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
    * @param bool|null $ipv6Enable **参数解释**： 是否开启IPv6。 **约束限制**： 仅在虚拟私有云支持IPv6时生效。 **取值范围**： - true：开启。 - false：不开启。 **默认取值**： false。
    *
    * @return $this
    */
    public function setIpv6Enable($ipv6Enable)
    {
        $this->container['ipv6Enable'] = $ipv6Enable;
        return $this;
    }

    /**
    * Gets diskEncryptedEnable
    *  **参数解释**： 是否开启磁盘加密。 **约束限制**： 不涉及。 **取值范围**： - true：开启。 - false：不开启。 **默认取值**： false。
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
    * @param bool|null $diskEncryptedEnable **参数解释**： 是否开启磁盘加密。 **约束限制**： 不涉及。 **取值范围**： - true：开启。 - false：不开启。 **默认取值**： false。
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
    *  **参数解释**： 磁盘加密key，未开启磁盘加密时为空。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
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
    * @param string|null $diskEncryptedKey **参数解释**： 磁盘加密key，未开启磁盘加密时为空。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    *
    * @return $this
    */
    public function setDiskEncryptedKey($diskEncryptedKey)
    {
        $this->container['diskEncryptedKey'] = $diskEncryptedKey;
        return $this;
    }

    /**
    * Gets connectorEnable
    *  **参数解释**： 是否开启Smart Connect功能。Smart Connect用于Kafka实例和其他云服务之间的数据同步，或者两个Kafka实例之间的数据同步，实现数据的备份或迁移。 **约束限制**： 不涉及。 **取值范围**： - true：开启。 - false：不开启。 **默认取值**： false。
    *
    * @return bool|null
    */
    public function getConnectorEnable()
    {
        return $this->container['connectorEnable'];
    }

    /**
    * Sets connectorEnable
    *
    * @param bool|null $connectorEnable **参数解释**： 是否开启Smart Connect功能。Smart Connect用于Kafka实例和其他云服务之间的数据同步，或者两个Kafka实例之间的数据同步，实现数据的备份或迁移。 **约束限制**： 不涉及。 **取值范围**： - true：开启。 - false：不开启。 **默认取值**： false。
    *
    * @return $this
    */
    public function setConnectorEnable($connectorEnable)
    {
        $this->container['connectorEnable'] = $connectorEnable;
        return $this;
    }

    /**
    * Gets enableAutoTopic
    *  **参数解释**： 是否开启kafka自动创建Topic功能。当您选择开启，向一个未创建的Topic生产或消费消息时，系统会自动创建此Topic。 **约束限制**： 不涉及。 **取值范围**： - true：开启。 - false：不开启。 **默认取值**： false。
    *
    * @return bool|null
    */
    public function getEnableAutoTopic()
    {
        return $this->container['enableAutoTopic'];
    }

    /**
    * Sets enableAutoTopic
    *
    * @param bool|null $enableAutoTopic **参数解释**： 是否开启kafka自动创建Topic功能。当您选择开启，向一个未创建的Topic生产或消费消息时，系统会自动创建此Topic。 **约束限制**： 不涉及。 **取值范围**： - true：开启。 - false：不开启。 **默认取值**： false。
    *
    * @return $this
    */
    public function setEnableAutoTopic($enableAutoTopic)
    {
        $this->container['enableAutoTopic'] = $enableAutoTopic;
        return $this;
    }

    /**
    * Gets storageSpecCode
    *  **参数解释**： 云硬盘类型。[如何选择磁盘类型请参考《云硬盘 [产品介绍](tag:hws,hws_hk,hws_eu,cmcc)[用户指南](tag:dt,g42,hk_g42,ctc,tm,hk_tm,sbc,ocb,hws_ocb,ax)》的“磁盘类型及性能介绍”。](tag:hws,hws_eu,hws_hk,ocb,hws_ocb,ctc,g42,hk_g42,tm,hk_tm,dt,ax) **约束限制**： 不涉及。 **取值范围**： - dms.physical.storage.high.v2：高IO云硬盘。 - dms.physical.storage.ultra.v2：超高IO云硬盘。 - [dms.physical.storage.general：通用型SSD云硬盘。](tag:hws,hws_hk,dt,ax) - [dms.physical.storage.extreme：极速型SSD云硬盘。](tag:hws,hws_hk,dt,ax) **默认取值**： 不涉及。
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
    * @param string $storageSpecCode **参数解释**： 云硬盘类型。[如何选择磁盘类型请参考《云硬盘 [产品介绍](tag:hws,hws_hk,hws_eu,cmcc)[用户指南](tag:dt,g42,hk_g42,ctc,tm,hk_tm,sbc,ocb,hws_ocb,ax)》的“磁盘类型及性能介绍”。](tag:hws,hws_eu,hws_hk,ocb,hws_ocb,ctc,g42,hk_g42,tm,hk_tm,dt,ax) **约束限制**： 不涉及。 **取值范围**： - dms.physical.storage.high.v2：高IO云硬盘。 - dms.physical.storage.ultra.v2：超高IO云硬盘。 - [dms.physical.storage.general：通用型SSD云硬盘。](tag:hws,hws_hk,dt,ax) - [dms.physical.storage.extreme：极速型SSD云硬盘。](tag:hws,hws_hk,dt,ax) **默认取值**： 不涉及。
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
    *  **参数解释**： 企业项目ID。 **约束限制**： 若为企业项目账号，该参数必填。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
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
    * @param string|null $enterpriseProjectId **参数解释**： 企业项目ID。 **约束限制**： 若为企业项目账号，该参数必填。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    *
    * @return $this
    */
    public function setEnterpriseProjectId($enterpriseProjectId)
    {
        $this->container['enterpriseProjectId'] = $enterpriseProjectId;
        return $this;
    }

    /**
    * Gets tags
    *  **参数解释**： Kafka实例的标签信息。 **约束限制**： 不涉及。
    *
    * @return \HuaweiCloud\SDK\Kafka\V2\Model\TagEntity[]|null
    */
    public function getTags()
    {
        return $this->container['tags'];
    }

    /**
    * Sets tags
    *
    * @param \HuaweiCloud\SDK\Kafka\V2\Model\TagEntity[]|null $tags **参数解释**： Kafka实例的标签信息。 **约束限制**： 不涉及。
    *
    * @return $this
    */
    public function setTags($tags)
    {
        $this->container['tags'] = $tags;
        return $this;
    }

    /**
    * Gets archType
    *  **参数解释**： CPU架构。 **约束限制**： 不涉及。 **取值范围**： - X86 [- ARM](tag:hcs,fcs,ctc) **默认取值**： 不涉及。
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
    * @param string|null $archType **参数解释**： CPU架构。 **约束限制**： 不涉及。 **取值范围**： - X86 [- ARM](tag:hcs,fcs,ctc) **默认取值**： 不涉及。
    *
    * @return $this
    */
    public function setArchType($archType)
    {
        $this->container['archType'] = $archType;
        return $this;
    }

    /**
    * Gets vpcClientPlain
    *  **参数解释**： VPC内网明文访问。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    *
    * @return bool|null
    */
    public function getVpcClientPlain()
    {
        return $this->container['vpcClientPlain'];
    }

    /**
    * Sets vpcClientPlain
    *
    * @param bool|null $vpcClientPlain **参数解释**： VPC内网明文访问。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    *
    * @return $this
    */
    public function setVpcClientPlain($vpcClientPlain)
    {
        $this->container['vpcClientPlain'] = $vpcClientPlain;
        return $this;
    }

    /**
    * Gets bssParam
    *  bssParam
    *
    * @return \HuaweiCloud\SDK\Kafka\V2\Model\BssParam|null
    */
    public function getBssParam()
    {
        return $this->container['bssParam'];
    }

    /**
    * Sets bssParam
    *
    * @param \HuaweiCloud\SDK\Kafka\V2\Model\BssParam|null $bssParam bssParam
    *
    * @return $this
    */
    public function setBssParam($bssParam)
    {
        $this->container['bssParam'] = $bssParam;
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

