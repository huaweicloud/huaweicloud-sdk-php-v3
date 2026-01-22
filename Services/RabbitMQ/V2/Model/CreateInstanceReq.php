<?php

namespace HuaweiCloud\SDK\RabbitMQ\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class CreateInstanceReq implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'CreateInstanceReq';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * name  **参数解释**： 实例名称。 **约束限制**： 由英文字符开头，只能由英文字母、数字、中划线、下划线组成，长度为4~64的字符。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * description  **参数解释**： 实例的描述信息。 **约束限制**： 长度不超过1024的字符串。[且字符串不能包含\">\"与\"<\"，字符串首字符不能为\"=\",\"+\",\"-\",\"@\"的全角和半角字符。](tag:hcs,fcs)  \\与\"在json报文中属于特殊字符，如果参数值中需要显示\\或者\"字符，请在字符前增加转义字符\\，比如\\\\\\\\或者\\\\\"。  **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * engine  **参数解释**： 消息引擎。 **约束限制**： 不涉及 **取值范围**： rabbitmq：RabbitMQ引擎。 **默认取值**： 不涉及。
    * engineVersion  **参数解释**： 消息引擎的版本。 **约束限制**： 不涉及 **取值范围**： - 3.8.35 [- 3.12.13](tag:srg) [- AMQP-0-9-1](tag:hws,hws_hk,hws_eu) **默认取值**： 不涉及。
    * enableAcl  **参数解释**： ACL访问控制 **约束限制**： 仅AMQP版本支持此参数。 **取值范围**： - true：开启ACL访问控制。 - false：不开启ACL访问控制。 **默认取值**： 不涉及。
    * storageSpace  **参数解释**： 消息存储空间，单位GB。 **约束限制**： 磁盘容量仅支持设置为100的整数倍。 **取值范围**： - 单机实例：100GB~30000GB。  - 集群实例：100GB * 节点数 ~ 30000GB * 节点数。 **默认取值**： 不涉及。
    * accessUser  **参数解释**：  认证用户名。 **约束限制**： 只能由英文字母开头且由英文字母、数字、中划线、下划线组成，长度为4~64的字符。当ssl_enable为true时，该参数必选，ssl_enable为false时，该参数无效。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * password  **参数解释**： 实例的认证密码。 **约束限制**： - 输入长度为8到32位的字符串。 - 必须包含如下四种字符中的三种组合：   - 小写字母   - 大写字母   - 数字   - 特殊字符包括（`~!@#$%^&*()-_=+\\|[{}]:'\",<.>/?）和空格，并且不能以-开头 - 当ssl_enable为true时，该参数必选，ssl_enable为false时，该参数无效。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * vpcId  **参数解释**：  虚拟私有云ID。获取方法如下：参考[[《虚拟私有云 API参考》](https://support.huaweicloud.com/api-vpc/vpc_apiv3_0003.html)](tag:hws)[[《虚拟私有云 API参考》](https://support.huaweicloud.com/intl/zh-cn/api-vpc/vpc_apiv3_0003.html)](tag:hws_hk)[[《虚拟私有云 API参考》](https://support.huaweicloud.com/eu/api-vpc/vpc_apiv3_0003.html)](tag:hws_eu)[《虚拟私有云 API参考》](tag:ax,cmcc,ctc,sbc,hk_sbc,g42,hk_g42,tm,hk_tm,srg)，调用“查询VPC列表”接口，从响应体中获取VPC ID。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * securityGroupId  **参数解释**： 指定实例所属的安全组。获取方法如下：参考[[《虚拟私有云 API参考》](https://support.huaweicloud.com/api-vpc/vpc_apiv3_0011.html)](tag:hws)[[《虚拟私有云 API参考》](https://support.huaweicloud.com/intl/zh-cn/api-vpc/vpc_apiv3_0011.html)](tag:hws_hk)[[《虚拟私有云 API参考》](https://support.huaweicloud.com/eu/api-vpc/vpc_apiv3_0011.html)](tag:hws_eu)[《虚拟私有云 API参考》](tag:ax,cmcc,ctc,sbc,hk_sbc,g42,hk_g42,tm,hk_tm,srg)，调用“查询安全组列表”接口，从响应体中获取安全组ID。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * subnetId  **参数解释**： 子网信息。获取方法如下：参考[[《虚拟私有云 API参考》](https://support.huaweicloud.com/api-vpc/vpc_subnet01_0003.html)](tag:hws)[[《虚拟私有云 API参考》](https://support.huaweicloud.com/intl/zh-cn/api-vpc/vpc_subnet01_0003.html)](tag:hws_hk)[[《虚拟私有云 API参考》](https://support.huaweicloud.com/eu/api-vpc/vpc_subnet01_0003.html)](tag:hws_eu)[《虚拟私有云 API参考》](tag:ax,cmcc,ctc,sbc,hk_sbc,g42,hk_g42,tm,hk_tm,srg)，调用“查询子网列表”接口，从响应体中获取子网ID。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * availableZones  **参数解释**： 创建节点到指定且有资源的可用区ID。请参考[查询可用区信息](ListAvailableZones.xml)获取可用区ID。 **约束限制**： 该参数不能为空数组或者数组的值为空。  创建RabbitMQ实例，节点需要部署在1个或3个及以上可用区中。如果部署在多个可用区中，以英文逗号隔开多个可用区ID。
    * productId  **参数解释**： 产品ID。产品ID可以从[查询产品规格列表](ListEngineProducts.xml)获取。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * brokerNum  **参数解释**： 代理个数。 **约束限制**： 当产品为单机类型，代理个数只能为1；当产品为集群类型，可选3、5、7个代理个数。 **取值范围**： - 1 - 3 - 5 - 7 **默认取值**： 不涉及。
    * maintainBegin  **参数解释**： 维护时间窗开始时间。 **约束限制**： 格式为HH:mm。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * maintainEnd  **参数解释**： 维护时间窗结束时间。 **约束限制**： 格式为HH:mm。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * enablePublicip  **参数解释**： 是否开启公网访问功能。 **约束限制**： 不涉及。 **取值范围**： - true：开启 - false：不开启 **默认取值**： false。
    * publicipId  **参数解释**： 实例绑定的弹性IP地址的ID。获取方法：参考[[《弹性公网IP API参考》](https://support.huaweicloud.com/api-eip/ListPublicipsV3.html)](tag:hws)[[《弹性公网IP API参考》](https://support.huaweicloud.com/intl/zh-cn/api-eip/ListPublicipsV3.html)](tag:hws_hk)[[《弹性公网IP API参考》](https://support.huaweicloud.com/eu/api-eip/ListPublicipsV3.html)](tag:hws_eu)[《弹性公网IP API参考》](tag:ax,cmcc,ctc,sbc,hk_sbc,g42,hk_g42,tm,hk_tm,srg)，调用“查询弹性公网IP列表”接口，从响应体中获取弹性公网IP的ID。 **约束限制**： 以英文逗号隔开多个弹性IP地址的ID。  如果开启了公网访问功能（即enable_publicip为true），该字段为必选。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * sslEnable  **参数解释**： 是否开启SSL加密访问。 **约束限制**： 不涉及。 **取值范围**： - true：开启SSL加密访问。 - false：关闭SSL加密访问。 **默认取值**： 不涉及。
    * storageSpecCode  **参数解释**： 存储IO规格。  [如何选择磁盘类型请参考[磁盘类型及性能介绍](https://support.huaweicloud.com/productdesc-evs/zh-cn_topic_0014580744.html)。](tag:hws) [如何选择磁盘类型请参考[磁盘类型及性能介绍](https://support.huaweicloud.com/intl/zh-cn/productdesc-evs/zh-cn_topic_0014580744.html)。](tag:hws_hk) [如何选择磁盘类型请参考[磁盘类型及性能介绍](https://support.huaweicloud.com/eu/productdesc-evs/en-us_topic_0014580744.html)。](tag:hws_eu) **约束限制**： 不涉及。 **取值范围**： - dms.physical.storage.high.v2：高IO云硬盘。 - dms.physical.storage.ultra.v2：超高IO云硬盘。 [- dms.physical.storage.general：通用型SSD云硬盘。](tag:hws,hws_hk,dt,ax) [- dms.physical.storage.extreme：极速型SSD云硬盘。](tag:hws,hws_hk,dt,ax) **默认取值**： 不涉及。
    * enterpriseProjectId  **参数解释**： 企业项目ID。 **约束限制**： 若为企业项目账号，该参数必填。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * tags  **参数解释**： 标签列表。 **约束限制**： 一个RabbitMQ实例最多添加20个标签。
    * bssParam  bssParam
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'name' => 'string',
            'description' => 'string',
            'engine' => 'string',
            'engineVersion' => 'string',
            'enableAcl' => 'bool',
            'storageSpace' => 'int',
            'accessUser' => 'string',
            'password' => 'string',
            'vpcId' => 'string',
            'securityGroupId' => 'string',
            'subnetId' => 'string',
            'availableZones' => 'string[]',
            'productId' => 'string',
            'brokerNum' => 'int',
            'maintainBegin' => 'string',
            'maintainEnd' => 'string',
            'enablePublicip' => 'bool',
            'publicipId' => 'string',
            'sslEnable' => 'bool',
            'storageSpecCode' => 'string',
            'enterpriseProjectId' => 'string',
            'tags' => '\HuaweiCloud\SDK\RabbitMQ\V2\Model\TagEntity[]',
            'bssParam' => '\HuaweiCloud\SDK\RabbitMQ\V2\Model\BssParam'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * name  **参数解释**： 实例名称。 **约束限制**： 由英文字符开头，只能由英文字母、数字、中划线、下划线组成，长度为4~64的字符。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * description  **参数解释**： 实例的描述信息。 **约束限制**： 长度不超过1024的字符串。[且字符串不能包含\">\"与\"<\"，字符串首字符不能为\"=\",\"+\",\"-\",\"@\"的全角和半角字符。](tag:hcs,fcs)  \\与\"在json报文中属于特殊字符，如果参数值中需要显示\\或者\"字符，请在字符前增加转义字符\\，比如\\\\\\\\或者\\\\\"。  **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * engine  **参数解释**： 消息引擎。 **约束限制**： 不涉及 **取值范围**： rabbitmq：RabbitMQ引擎。 **默认取值**： 不涉及。
    * engineVersion  **参数解释**： 消息引擎的版本。 **约束限制**： 不涉及 **取值范围**： - 3.8.35 [- 3.12.13](tag:srg) [- AMQP-0-9-1](tag:hws,hws_hk,hws_eu) **默认取值**： 不涉及。
    * enableAcl  **参数解释**： ACL访问控制 **约束限制**： 仅AMQP版本支持此参数。 **取值范围**： - true：开启ACL访问控制。 - false：不开启ACL访问控制。 **默认取值**： 不涉及。
    * storageSpace  **参数解释**： 消息存储空间，单位GB。 **约束限制**： 磁盘容量仅支持设置为100的整数倍。 **取值范围**： - 单机实例：100GB~30000GB。  - 集群实例：100GB * 节点数 ~ 30000GB * 节点数。 **默认取值**： 不涉及。
    * accessUser  **参数解释**：  认证用户名。 **约束限制**： 只能由英文字母开头且由英文字母、数字、中划线、下划线组成，长度为4~64的字符。当ssl_enable为true时，该参数必选，ssl_enable为false时，该参数无效。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * password  **参数解释**： 实例的认证密码。 **约束限制**： - 输入长度为8到32位的字符串。 - 必须包含如下四种字符中的三种组合：   - 小写字母   - 大写字母   - 数字   - 特殊字符包括（`~!@#$%^&*()-_=+\\|[{}]:'\",<.>/?）和空格，并且不能以-开头 - 当ssl_enable为true时，该参数必选，ssl_enable为false时，该参数无效。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * vpcId  **参数解释**：  虚拟私有云ID。获取方法如下：参考[[《虚拟私有云 API参考》](https://support.huaweicloud.com/api-vpc/vpc_apiv3_0003.html)](tag:hws)[[《虚拟私有云 API参考》](https://support.huaweicloud.com/intl/zh-cn/api-vpc/vpc_apiv3_0003.html)](tag:hws_hk)[[《虚拟私有云 API参考》](https://support.huaweicloud.com/eu/api-vpc/vpc_apiv3_0003.html)](tag:hws_eu)[《虚拟私有云 API参考》](tag:ax,cmcc,ctc,sbc,hk_sbc,g42,hk_g42,tm,hk_tm,srg)，调用“查询VPC列表”接口，从响应体中获取VPC ID。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * securityGroupId  **参数解释**： 指定实例所属的安全组。获取方法如下：参考[[《虚拟私有云 API参考》](https://support.huaweicloud.com/api-vpc/vpc_apiv3_0011.html)](tag:hws)[[《虚拟私有云 API参考》](https://support.huaweicloud.com/intl/zh-cn/api-vpc/vpc_apiv3_0011.html)](tag:hws_hk)[[《虚拟私有云 API参考》](https://support.huaweicloud.com/eu/api-vpc/vpc_apiv3_0011.html)](tag:hws_eu)[《虚拟私有云 API参考》](tag:ax,cmcc,ctc,sbc,hk_sbc,g42,hk_g42,tm,hk_tm,srg)，调用“查询安全组列表”接口，从响应体中获取安全组ID。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * subnetId  **参数解释**： 子网信息。获取方法如下：参考[[《虚拟私有云 API参考》](https://support.huaweicloud.com/api-vpc/vpc_subnet01_0003.html)](tag:hws)[[《虚拟私有云 API参考》](https://support.huaweicloud.com/intl/zh-cn/api-vpc/vpc_subnet01_0003.html)](tag:hws_hk)[[《虚拟私有云 API参考》](https://support.huaweicloud.com/eu/api-vpc/vpc_subnet01_0003.html)](tag:hws_eu)[《虚拟私有云 API参考》](tag:ax,cmcc,ctc,sbc,hk_sbc,g42,hk_g42,tm,hk_tm,srg)，调用“查询子网列表”接口，从响应体中获取子网ID。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * availableZones  **参数解释**： 创建节点到指定且有资源的可用区ID。请参考[查询可用区信息](ListAvailableZones.xml)获取可用区ID。 **约束限制**： 该参数不能为空数组或者数组的值为空。  创建RabbitMQ实例，节点需要部署在1个或3个及以上可用区中。如果部署在多个可用区中，以英文逗号隔开多个可用区ID。
    * productId  **参数解释**： 产品ID。产品ID可以从[查询产品规格列表](ListEngineProducts.xml)获取。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * brokerNum  **参数解释**： 代理个数。 **约束限制**： 当产品为单机类型，代理个数只能为1；当产品为集群类型，可选3、5、7个代理个数。 **取值范围**： - 1 - 3 - 5 - 7 **默认取值**： 不涉及。
    * maintainBegin  **参数解释**： 维护时间窗开始时间。 **约束限制**： 格式为HH:mm。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * maintainEnd  **参数解释**： 维护时间窗结束时间。 **约束限制**： 格式为HH:mm。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * enablePublicip  **参数解释**： 是否开启公网访问功能。 **约束限制**： 不涉及。 **取值范围**： - true：开启 - false：不开启 **默认取值**： false。
    * publicipId  **参数解释**： 实例绑定的弹性IP地址的ID。获取方法：参考[[《弹性公网IP API参考》](https://support.huaweicloud.com/api-eip/ListPublicipsV3.html)](tag:hws)[[《弹性公网IP API参考》](https://support.huaweicloud.com/intl/zh-cn/api-eip/ListPublicipsV3.html)](tag:hws_hk)[[《弹性公网IP API参考》](https://support.huaweicloud.com/eu/api-eip/ListPublicipsV3.html)](tag:hws_eu)[《弹性公网IP API参考》](tag:ax,cmcc,ctc,sbc,hk_sbc,g42,hk_g42,tm,hk_tm,srg)，调用“查询弹性公网IP列表”接口，从响应体中获取弹性公网IP的ID。 **约束限制**： 以英文逗号隔开多个弹性IP地址的ID。  如果开启了公网访问功能（即enable_publicip为true），该字段为必选。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * sslEnable  **参数解释**： 是否开启SSL加密访问。 **约束限制**： 不涉及。 **取值范围**： - true：开启SSL加密访问。 - false：关闭SSL加密访问。 **默认取值**： 不涉及。
    * storageSpecCode  **参数解释**： 存储IO规格。  [如何选择磁盘类型请参考[磁盘类型及性能介绍](https://support.huaweicloud.com/productdesc-evs/zh-cn_topic_0014580744.html)。](tag:hws) [如何选择磁盘类型请参考[磁盘类型及性能介绍](https://support.huaweicloud.com/intl/zh-cn/productdesc-evs/zh-cn_topic_0014580744.html)。](tag:hws_hk) [如何选择磁盘类型请参考[磁盘类型及性能介绍](https://support.huaweicloud.com/eu/productdesc-evs/en-us_topic_0014580744.html)。](tag:hws_eu) **约束限制**： 不涉及。 **取值范围**： - dms.physical.storage.high.v2：高IO云硬盘。 - dms.physical.storage.ultra.v2：超高IO云硬盘。 [- dms.physical.storage.general：通用型SSD云硬盘。](tag:hws,hws_hk,dt,ax) [- dms.physical.storage.extreme：极速型SSD云硬盘。](tag:hws,hws_hk,dt,ax) **默认取值**： 不涉及。
    * enterpriseProjectId  **参数解释**： 企业项目ID。 **约束限制**： 若为企业项目账号，该参数必填。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * tags  **参数解释**： 标签列表。 **约束限制**： 一个RabbitMQ实例最多添加20个标签。
    * bssParam  bssParam
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'name' => null,
        'description' => null,
        'engine' => null,
        'engineVersion' => null,
        'enableAcl' => null,
        'storageSpace' => null,
        'accessUser' => null,
        'password' => null,
        'vpcId' => null,
        'securityGroupId' => null,
        'subnetId' => null,
        'availableZones' => null,
        'productId' => null,
        'brokerNum' => 'int32',
        'maintainBegin' => null,
        'maintainEnd' => null,
        'enablePublicip' => null,
        'publicipId' => null,
        'sslEnable' => null,
        'storageSpecCode' => null,
        'enterpriseProjectId' => null,
        'tags' => null,
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
    * description  **参数解释**： 实例的描述信息。 **约束限制**： 长度不超过1024的字符串。[且字符串不能包含\">\"与\"<\"，字符串首字符不能为\"=\",\"+\",\"-\",\"@\"的全角和半角字符。](tag:hcs,fcs)  \\与\"在json报文中属于特殊字符，如果参数值中需要显示\\或者\"字符，请在字符前增加转义字符\\，比如\\\\\\\\或者\\\\\"。  **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * engine  **参数解释**： 消息引擎。 **约束限制**： 不涉及 **取值范围**： rabbitmq：RabbitMQ引擎。 **默认取值**： 不涉及。
    * engineVersion  **参数解释**： 消息引擎的版本。 **约束限制**： 不涉及 **取值范围**： - 3.8.35 [- 3.12.13](tag:srg) [- AMQP-0-9-1](tag:hws,hws_hk,hws_eu) **默认取值**： 不涉及。
    * enableAcl  **参数解释**： ACL访问控制 **约束限制**： 仅AMQP版本支持此参数。 **取值范围**： - true：开启ACL访问控制。 - false：不开启ACL访问控制。 **默认取值**： 不涉及。
    * storageSpace  **参数解释**： 消息存储空间，单位GB。 **约束限制**： 磁盘容量仅支持设置为100的整数倍。 **取值范围**： - 单机实例：100GB~30000GB。  - 集群实例：100GB * 节点数 ~ 30000GB * 节点数。 **默认取值**： 不涉及。
    * accessUser  **参数解释**：  认证用户名。 **约束限制**： 只能由英文字母开头且由英文字母、数字、中划线、下划线组成，长度为4~64的字符。当ssl_enable为true时，该参数必选，ssl_enable为false时，该参数无效。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * password  **参数解释**： 实例的认证密码。 **约束限制**： - 输入长度为8到32位的字符串。 - 必须包含如下四种字符中的三种组合：   - 小写字母   - 大写字母   - 数字   - 特殊字符包括（`~!@#$%^&*()-_=+\\|[{}]:'\",<.>/?）和空格，并且不能以-开头 - 当ssl_enable为true时，该参数必选，ssl_enable为false时，该参数无效。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * vpcId  **参数解释**：  虚拟私有云ID。获取方法如下：参考[[《虚拟私有云 API参考》](https://support.huaweicloud.com/api-vpc/vpc_apiv3_0003.html)](tag:hws)[[《虚拟私有云 API参考》](https://support.huaweicloud.com/intl/zh-cn/api-vpc/vpc_apiv3_0003.html)](tag:hws_hk)[[《虚拟私有云 API参考》](https://support.huaweicloud.com/eu/api-vpc/vpc_apiv3_0003.html)](tag:hws_eu)[《虚拟私有云 API参考》](tag:ax,cmcc,ctc,sbc,hk_sbc,g42,hk_g42,tm,hk_tm,srg)，调用“查询VPC列表”接口，从响应体中获取VPC ID。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * securityGroupId  **参数解释**： 指定实例所属的安全组。获取方法如下：参考[[《虚拟私有云 API参考》](https://support.huaweicloud.com/api-vpc/vpc_apiv3_0011.html)](tag:hws)[[《虚拟私有云 API参考》](https://support.huaweicloud.com/intl/zh-cn/api-vpc/vpc_apiv3_0011.html)](tag:hws_hk)[[《虚拟私有云 API参考》](https://support.huaweicloud.com/eu/api-vpc/vpc_apiv3_0011.html)](tag:hws_eu)[《虚拟私有云 API参考》](tag:ax,cmcc,ctc,sbc,hk_sbc,g42,hk_g42,tm,hk_tm,srg)，调用“查询安全组列表”接口，从响应体中获取安全组ID。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * subnetId  **参数解释**： 子网信息。获取方法如下：参考[[《虚拟私有云 API参考》](https://support.huaweicloud.com/api-vpc/vpc_subnet01_0003.html)](tag:hws)[[《虚拟私有云 API参考》](https://support.huaweicloud.com/intl/zh-cn/api-vpc/vpc_subnet01_0003.html)](tag:hws_hk)[[《虚拟私有云 API参考》](https://support.huaweicloud.com/eu/api-vpc/vpc_subnet01_0003.html)](tag:hws_eu)[《虚拟私有云 API参考》](tag:ax,cmcc,ctc,sbc,hk_sbc,g42,hk_g42,tm,hk_tm,srg)，调用“查询子网列表”接口，从响应体中获取子网ID。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * availableZones  **参数解释**： 创建节点到指定且有资源的可用区ID。请参考[查询可用区信息](ListAvailableZones.xml)获取可用区ID。 **约束限制**： 该参数不能为空数组或者数组的值为空。  创建RabbitMQ实例，节点需要部署在1个或3个及以上可用区中。如果部署在多个可用区中，以英文逗号隔开多个可用区ID。
    * productId  **参数解释**： 产品ID。产品ID可以从[查询产品规格列表](ListEngineProducts.xml)获取。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * brokerNum  **参数解释**： 代理个数。 **约束限制**： 当产品为单机类型，代理个数只能为1；当产品为集群类型，可选3、5、7个代理个数。 **取值范围**： - 1 - 3 - 5 - 7 **默认取值**： 不涉及。
    * maintainBegin  **参数解释**： 维护时间窗开始时间。 **约束限制**： 格式为HH:mm。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * maintainEnd  **参数解释**： 维护时间窗结束时间。 **约束限制**： 格式为HH:mm。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * enablePublicip  **参数解释**： 是否开启公网访问功能。 **约束限制**： 不涉及。 **取值范围**： - true：开启 - false：不开启 **默认取值**： false。
    * publicipId  **参数解释**： 实例绑定的弹性IP地址的ID。获取方法：参考[[《弹性公网IP API参考》](https://support.huaweicloud.com/api-eip/ListPublicipsV3.html)](tag:hws)[[《弹性公网IP API参考》](https://support.huaweicloud.com/intl/zh-cn/api-eip/ListPublicipsV3.html)](tag:hws_hk)[[《弹性公网IP API参考》](https://support.huaweicloud.com/eu/api-eip/ListPublicipsV3.html)](tag:hws_eu)[《弹性公网IP API参考》](tag:ax,cmcc,ctc,sbc,hk_sbc,g42,hk_g42,tm,hk_tm,srg)，调用“查询弹性公网IP列表”接口，从响应体中获取弹性公网IP的ID。 **约束限制**： 以英文逗号隔开多个弹性IP地址的ID。  如果开启了公网访问功能（即enable_publicip为true），该字段为必选。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * sslEnable  **参数解释**： 是否开启SSL加密访问。 **约束限制**： 不涉及。 **取值范围**： - true：开启SSL加密访问。 - false：关闭SSL加密访问。 **默认取值**： 不涉及。
    * storageSpecCode  **参数解释**： 存储IO规格。  [如何选择磁盘类型请参考[磁盘类型及性能介绍](https://support.huaweicloud.com/productdesc-evs/zh-cn_topic_0014580744.html)。](tag:hws) [如何选择磁盘类型请参考[磁盘类型及性能介绍](https://support.huaweicloud.com/intl/zh-cn/productdesc-evs/zh-cn_topic_0014580744.html)。](tag:hws_hk) [如何选择磁盘类型请参考[磁盘类型及性能介绍](https://support.huaweicloud.com/eu/productdesc-evs/en-us_topic_0014580744.html)。](tag:hws_eu) **约束限制**： 不涉及。 **取值范围**： - dms.physical.storage.high.v2：高IO云硬盘。 - dms.physical.storage.ultra.v2：超高IO云硬盘。 [- dms.physical.storage.general：通用型SSD云硬盘。](tag:hws,hws_hk,dt,ax) [- dms.physical.storage.extreme：极速型SSD云硬盘。](tag:hws,hws_hk,dt,ax) **默认取值**： 不涉及。
    * enterpriseProjectId  **参数解释**： 企业项目ID。 **约束限制**： 若为企业项目账号，该参数必填。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * tags  **参数解释**： 标签列表。 **约束限制**： 一个RabbitMQ实例最多添加20个标签。
    * bssParam  bssParam
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'name' => 'name',
            'description' => 'description',
            'engine' => 'engine',
            'engineVersion' => 'engine_version',
            'enableAcl' => 'enable_acl',
            'storageSpace' => 'storage_space',
            'accessUser' => 'access_user',
            'password' => 'password',
            'vpcId' => 'vpc_id',
            'securityGroupId' => 'security_group_id',
            'subnetId' => 'subnet_id',
            'availableZones' => 'available_zones',
            'productId' => 'product_id',
            'brokerNum' => 'broker_num',
            'maintainBegin' => 'maintain_begin',
            'maintainEnd' => 'maintain_end',
            'enablePublicip' => 'enable_publicip',
            'publicipId' => 'publicip_id',
            'sslEnable' => 'ssl_enable',
            'storageSpecCode' => 'storage_spec_code',
            'enterpriseProjectId' => 'enterprise_project_id',
            'tags' => 'tags',
            'bssParam' => 'bss_param'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * name  **参数解释**： 实例名称。 **约束限制**： 由英文字符开头，只能由英文字母、数字、中划线、下划线组成，长度为4~64的字符。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * description  **参数解释**： 实例的描述信息。 **约束限制**： 长度不超过1024的字符串。[且字符串不能包含\">\"与\"<\"，字符串首字符不能为\"=\",\"+\",\"-\",\"@\"的全角和半角字符。](tag:hcs,fcs)  \\与\"在json报文中属于特殊字符，如果参数值中需要显示\\或者\"字符，请在字符前增加转义字符\\，比如\\\\\\\\或者\\\\\"。  **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * engine  **参数解释**： 消息引擎。 **约束限制**： 不涉及 **取值范围**： rabbitmq：RabbitMQ引擎。 **默认取值**： 不涉及。
    * engineVersion  **参数解释**： 消息引擎的版本。 **约束限制**： 不涉及 **取值范围**： - 3.8.35 [- 3.12.13](tag:srg) [- AMQP-0-9-1](tag:hws,hws_hk,hws_eu) **默认取值**： 不涉及。
    * enableAcl  **参数解释**： ACL访问控制 **约束限制**： 仅AMQP版本支持此参数。 **取值范围**： - true：开启ACL访问控制。 - false：不开启ACL访问控制。 **默认取值**： 不涉及。
    * storageSpace  **参数解释**： 消息存储空间，单位GB。 **约束限制**： 磁盘容量仅支持设置为100的整数倍。 **取值范围**： - 单机实例：100GB~30000GB。  - 集群实例：100GB * 节点数 ~ 30000GB * 节点数。 **默认取值**： 不涉及。
    * accessUser  **参数解释**：  认证用户名。 **约束限制**： 只能由英文字母开头且由英文字母、数字、中划线、下划线组成，长度为4~64的字符。当ssl_enable为true时，该参数必选，ssl_enable为false时，该参数无效。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * password  **参数解释**： 实例的认证密码。 **约束限制**： - 输入长度为8到32位的字符串。 - 必须包含如下四种字符中的三种组合：   - 小写字母   - 大写字母   - 数字   - 特殊字符包括（`~!@#$%^&*()-_=+\\|[{}]:'\",<.>/?）和空格，并且不能以-开头 - 当ssl_enable为true时，该参数必选，ssl_enable为false时，该参数无效。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * vpcId  **参数解释**：  虚拟私有云ID。获取方法如下：参考[[《虚拟私有云 API参考》](https://support.huaweicloud.com/api-vpc/vpc_apiv3_0003.html)](tag:hws)[[《虚拟私有云 API参考》](https://support.huaweicloud.com/intl/zh-cn/api-vpc/vpc_apiv3_0003.html)](tag:hws_hk)[[《虚拟私有云 API参考》](https://support.huaweicloud.com/eu/api-vpc/vpc_apiv3_0003.html)](tag:hws_eu)[《虚拟私有云 API参考》](tag:ax,cmcc,ctc,sbc,hk_sbc,g42,hk_g42,tm,hk_tm,srg)，调用“查询VPC列表”接口，从响应体中获取VPC ID。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * securityGroupId  **参数解释**： 指定实例所属的安全组。获取方法如下：参考[[《虚拟私有云 API参考》](https://support.huaweicloud.com/api-vpc/vpc_apiv3_0011.html)](tag:hws)[[《虚拟私有云 API参考》](https://support.huaweicloud.com/intl/zh-cn/api-vpc/vpc_apiv3_0011.html)](tag:hws_hk)[[《虚拟私有云 API参考》](https://support.huaweicloud.com/eu/api-vpc/vpc_apiv3_0011.html)](tag:hws_eu)[《虚拟私有云 API参考》](tag:ax,cmcc,ctc,sbc,hk_sbc,g42,hk_g42,tm,hk_tm,srg)，调用“查询安全组列表”接口，从响应体中获取安全组ID。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * subnetId  **参数解释**： 子网信息。获取方法如下：参考[[《虚拟私有云 API参考》](https://support.huaweicloud.com/api-vpc/vpc_subnet01_0003.html)](tag:hws)[[《虚拟私有云 API参考》](https://support.huaweicloud.com/intl/zh-cn/api-vpc/vpc_subnet01_0003.html)](tag:hws_hk)[[《虚拟私有云 API参考》](https://support.huaweicloud.com/eu/api-vpc/vpc_subnet01_0003.html)](tag:hws_eu)[《虚拟私有云 API参考》](tag:ax,cmcc,ctc,sbc,hk_sbc,g42,hk_g42,tm,hk_tm,srg)，调用“查询子网列表”接口，从响应体中获取子网ID。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * availableZones  **参数解释**： 创建节点到指定且有资源的可用区ID。请参考[查询可用区信息](ListAvailableZones.xml)获取可用区ID。 **约束限制**： 该参数不能为空数组或者数组的值为空。  创建RabbitMQ实例，节点需要部署在1个或3个及以上可用区中。如果部署在多个可用区中，以英文逗号隔开多个可用区ID。
    * productId  **参数解释**： 产品ID。产品ID可以从[查询产品规格列表](ListEngineProducts.xml)获取。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * brokerNum  **参数解释**： 代理个数。 **约束限制**： 当产品为单机类型，代理个数只能为1；当产品为集群类型，可选3、5、7个代理个数。 **取值范围**： - 1 - 3 - 5 - 7 **默认取值**： 不涉及。
    * maintainBegin  **参数解释**： 维护时间窗开始时间。 **约束限制**： 格式为HH:mm。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * maintainEnd  **参数解释**： 维护时间窗结束时间。 **约束限制**： 格式为HH:mm。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * enablePublicip  **参数解释**： 是否开启公网访问功能。 **约束限制**： 不涉及。 **取值范围**： - true：开启 - false：不开启 **默认取值**： false。
    * publicipId  **参数解释**： 实例绑定的弹性IP地址的ID。获取方法：参考[[《弹性公网IP API参考》](https://support.huaweicloud.com/api-eip/ListPublicipsV3.html)](tag:hws)[[《弹性公网IP API参考》](https://support.huaweicloud.com/intl/zh-cn/api-eip/ListPublicipsV3.html)](tag:hws_hk)[[《弹性公网IP API参考》](https://support.huaweicloud.com/eu/api-eip/ListPublicipsV3.html)](tag:hws_eu)[《弹性公网IP API参考》](tag:ax,cmcc,ctc,sbc,hk_sbc,g42,hk_g42,tm,hk_tm,srg)，调用“查询弹性公网IP列表”接口，从响应体中获取弹性公网IP的ID。 **约束限制**： 以英文逗号隔开多个弹性IP地址的ID。  如果开启了公网访问功能（即enable_publicip为true），该字段为必选。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * sslEnable  **参数解释**： 是否开启SSL加密访问。 **约束限制**： 不涉及。 **取值范围**： - true：开启SSL加密访问。 - false：关闭SSL加密访问。 **默认取值**： 不涉及。
    * storageSpecCode  **参数解释**： 存储IO规格。  [如何选择磁盘类型请参考[磁盘类型及性能介绍](https://support.huaweicloud.com/productdesc-evs/zh-cn_topic_0014580744.html)。](tag:hws) [如何选择磁盘类型请参考[磁盘类型及性能介绍](https://support.huaweicloud.com/intl/zh-cn/productdesc-evs/zh-cn_topic_0014580744.html)。](tag:hws_hk) [如何选择磁盘类型请参考[磁盘类型及性能介绍](https://support.huaweicloud.com/eu/productdesc-evs/en-us_topic_0014580744.html)。](tag:hws_eu) **约束限制**： 不涉及。 **取值范围**： - dms.physical.storage.high.v2：高IO云硬盘。 - dms.physical.storage.ultra.v2：超高IO云硬盘。 [- dms.physical.storage.general：通用型SSD云硬盘。](tag:hws,hws_hk,dt,ax) [- dms.physical.storage.extreme：极速型SSD云硬盘。](tag:hws,hws_hk,dt,ax) **默认取值**： 不涉及。
    * enterpriseProjectId  **参数解释**： 企业项目ID。 **约束限制**： 若为企业项目账号，该参数必填。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * tags  **参数解释**： 标签列表。 **约束限制**： 一个RabbitMQ实例最多添加20个标签。
    * bssParam  bssParam
    *
    * @var string[]
    */
    protected static $setters = [
            'name' => 'setName',
            'description' => 'setDescription',
            'engine' => 'setEngine',
            'engineVersion' => 'setEngineVersion',
            'enableAcl' => 'setEnableAcl',
            'storageSpace' => 'setStorageSpace',
            'accessUser' => 'setAccessUser',
            'password' => 'setPassword',
            'vpcId' => 'setVpcId',
            'securityGroupId' => 'setSecurityGroupId',
            'subnetId' => 'setSubnetId',
            'availableZones' => 'setAvailableZones',
            'productId' => 'setProductId',
            'brokerNum' => 'setBrokerNum',
            'maintainBegin' => 'setMaintainBegin',
            'maintainEnd' => 'setMaintainEnd',
            'enablePublicip' => 'setEnablePublicip',
            'publicipId' => 'setPublicipId',
            'sslEnable' => 'setSslEnable',
            'storageSpecCode' => 'setStorageSpecCode',
            'enterpriseProjectId' => 'setEnterpriseProjectId',
            'tags' => 'setTags',
            'bssParam' => 'setBssParam'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * name  **参数解释**： 实例名称。 **约束限制**： 由英文字符开头，只能由英文字母、数字、中划线、下划线组成，长度为4~64的字符。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * description  **参数解释**： 实例的描述信息。 **约束限制**： 长度不超过1024的字符串。[且字符串不能包含\">\"与\"<\"，字符串首字符不能为\"=\",\"+\",\"-\",\"@\"的全角和半角字符。](tag:hcs,fcs)  \\与\"在json报文中属于特殊字符，如果参数值中需要显示\\或者\"字符，请在字符前增加转义字符\\，比如\\\\\\\\或者\\\\\"。  **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * engine  **参数解释**： 消息引擎。 **约束限制**： 不涉及 **取值范围**： rabbitmq：RabbitMQ引擎。 **默认取值**： 不涉及。
    * engineVersion  **参数解释**： 消息引擎的版本。 **约束限制**： 不涉及 **取值范围**： - 3.8.35 [- 3.12.13](tag:srg) [- AMQP-0-9-1](tag:hws,hws_hk,hws_eu) **默认取值**： 不涉及。
    * enableAcl  **参数解释**： ACL访问控制 **约束限制**： 仅AMQP版本支持此参数。 **取值范围**： - true：开启ACL访问控制。 - false：不开启ACL访问控制。 **默认取值**： 不涉及。
    * storageSpace  **参数解释**： 消息存储空间，单位GB。 **约束限制**： 磁盘容量仅支持设置为100的整数倍。 **取值范围**： - 单机实例：100GB~30000GB。  - 集群实例：100GB * 节点数 ~ 30000GB * 节点数。 **默认取值**： 不涉及。
    * accessUser  **参数解释**：  认证用户名。 **约束限制**： 只能由英文字母开头且由英文字母、数字、中划线、下划线组成，长度为4~64的字符。当ssl_enable为true时，该参数必选，ssl_enable为false时，该参数无效。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * password  **参数解释**： 实例的认证密码。 **约束限制**： - 输入长度为8到32位的字符串。 - 必须包含如下四种字符中的三种组合：   - 小写字母   - 大写字母   - 数字   - 特殊字符包括（`~!@#$%^&*()-_=+\\|[{}]:'\",<.>/?）和空格，并且不能以-开头 - 当ssl_enable为true时，该参数必选，ssl_enable为false时，该参数无效。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * vpcId  **参数解释**：  虚拟私有云ID。获取方法如下：参考[[《虚拟私有云 API参考》](https://support.huaweicloud.com/api-vpc/vpc_apiv3_0003.html)](tag:hws)[[《虚拟私有云 API参考》](https://support.huaweicloud.com/intl/zh-cn/api-vpc/vpc_apiv3_0003.html)](tag:hws_hk)[[《虚拟私有云 API参考》](https://support.huaweicloud.com/eu/api-vpc/vpc_apiv3_0003.html)](tag:hws_eu)[《虚拟私有云 API参考》](tag:ax,cmcc,ctc,sbc,hk_sbc,g42,hk_g42,tm,hk_tm,srg)，调用“查询VPC列表”接口，从响应体中获取VPC ID。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * securityGroupId  **参数解释**： 指定实例所属的安全组。获取方法如下：参考[[《虚拟私有云 API参考》](https://support.huaweicloud.com/api-vpc/vpc_apiv3_0011.html)](tag:hws)[[《虚拟私有云 API参考》](https://support.huaweicloud.com/intl/zh-cn/api-vpc/vpc_apiv3_0011.html)](tag:hws_hk)[[《虚拟私有云 API参考》](https://support.huaweicloud.com/eu/api-vpc/vpc_apiv3_0011.html)](tag:hws_eu)[《虚拟私有云 API参考》](tag:ax,cmcc,ctc,sbc,hk_sbc,g42,hk_g42,tm,hk_tm,srg)，调用“查询安全组列表”接口，从响应体中获取安全组ID。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * subnetId  **参数解释**： 子网信息。获取方法如下：参考[[《虚拟私有云 API参考》](https://support.huaweicloud.com/api-vpc/vpc_subnet01_0003.html)](tag:hws)[[《虚拟私有云 API参考》](https://support.huaweicloud.com/intl/zh-cn/api-vpc/vpc_subnet01_0003.html)](tag:hws_hk)[[《虚拟私有云 API参考》](https://support.huaweicloud.com/eu/api-vpc/vpc_subnet01_0003.html)](tag:hws_eu)[《虚拟私有云 API参考》](tag:ax,cmcc,ctc,sbc,hk_sbc,g42,hk_g42,tm,hk_tm,srg)，调用“查询子网列表”接口，从响应体中获取子网ID。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * availableZones  **参数解释**： 创建节点到指定且有资源的可用区ID。请参考[查询可用区信息](ListAvailableZones.xml)获取可用区ID。 **约束限制**： 该参数不能为空数组或者数组的值为空。  创建RabbitMQ实例，节点需要部署在1个或3个及以上可用区中。如果部署在多个可用区中，以英文逗号隔开多个可用区ID。
    * productId  **参数解释**： 产品ID。产品ID可以从[查询产品规格列表](ListEngineProducts.xml)获取。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * brokerNum  **参数解释**： 代理个数。 **约束限制**： 当产品为单机类型，代理个数只能为1；当产品为集群类型，可选3、5、7个代理个数。 **取值范围**： - 1 - 3 - 5 - 7 **默认取值**： 不涉及。
    * maintainBegin  **参数解释**： 维护时间窗开始时间。 **约束限制**： 格式为HH:mm。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * maintainEnd  **参数解释**： 维护时间窗结束时间。 **约束限制**： 格式为HH:mm。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * enablePublicip  **参数解释**： 是否开启公网访问功能。 **约束限制**： 不涉及。 **取值范围**： - true：开启 - false：不开启 **默认取值**： false。
    * publicipId  **参数解释**： 实例绑定的弹性IP地址的ID。获取方法：参考[[《弹性公网IP API参考》](https://support.huaweicloud.com/api-eip/ListPublicipsV3.html)](tag:hws)[[《弹性公网IP API参考》](https://support.huaweicloud.com/intl/zh-cn/api-eip/ListPublicipsV3.html)](tag:hws_hk)[[《弹性公网IP API参考》](https://support.huaweicloud.com/eu/api-eip/ListPublicipsV3.html)](tag:hws_eu)[《弹性公网IP API参考》](tag:ax,cmcc,ctc,sbc,hk_sbc,g42,hk_g42,tm,hk_tm,srg)，调用“查询弹性公网IP列表”接口，从响应体中获取弹性公网IP的ID。 **约束限制**： 以英文逗号隔开多个弹性IP地址的ID。  如果开启了公网访问功能（即enable_publicip为true），该字段为必选。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * sslEnable  **参数解释**： 是否开启SSL加密访问。 **约束限制**： 不涉及。 **取值范围**： - true：开启SSL加密访问。 - false：关闭SSL加密访问。 **默认取值**： 不涉及。
    * storageSpecCode  **参数解释**： 存储IO规格。  [如何选择磁盘类型请参考[磁盘类型及性能介绍](https://support.huaweicloud.com/productdesc-evs/zh-cn_topic_0014580744.html)。](tag:hws) [如何选择磁盘类型请参考[磁盘类型及性能介绍](https://support.huaweicloud.com/intl/zh-cn/productdesc-evs/zh-cn_topic_0014580744.html)。](tag:hws_hk) [如何选择磁盘类型请参考[磁盘类型及性能介绍](https://support.huaweicloud.com/eu/productdesc-evs/en-us_topic_0014580744.html)。](tag:hws_eu) **约束限制**： 不涉及。 **取值范围**： - dms.physical.storage.high.v2：高IO云硬盘。 - dms.physical.storage.ultra.v2：超高IO云硬盘。 [- dms.physical.storage.general：通用型SSD云硬盘。](tag:hws,hws_hk,dt,ax) [- dms.physical.storage.extreme：极速型SSD云硬盘。](tag:hws,hws_hk,dt,ax) **默认取值**： 不涉及。
    * enterpriseProjectId  **参数解释**： 企业项目ID。 **约束限制**： 若为企业项目账号，该参数必填。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * tags  **参数解释**： 标签列表。 **约束限制**： 一个RabbitMQ实例最多添加20个标签。
    * bssParam  bssParam
    *
    * @var string[]
    */
    protected static $getters = [
            'name' => 'getName',
            'description' => 'getDescription',
            'engine' => 'getEngine',
            'engineVersion' => 'getEngineVersion',
            'enableAcl' => 'getEnableAcl',
            'storageSpace' => 'getStorageSpace',
            'accessUser' => 'getAccessUser',
            'password' => 'getPassword',
            'vpcId' => 'getVpcId',
            'securityGroupId' => 'getSecurityGroupId',
            'subnetId' => 'getSubnetId',
            'availableZones' => 'getAvailableZones',
            'productId' => 'getProductId',
            'brokerNum' => 'getBrokerNum',
            'maintainBegin' => 'getMaintainBegin',
            'maintainEnd' => 'getMaintainEnd',
            'enablePublicip' => 'getEnablePublicip',
            'publicipId' => 'getPublicipId',
            'sslEnable' => 'getSslEnable',
            'storageSpecCode' => 'getStorageSpecCode',
            'enterpriseProjectId' => 'getEnterpriseProjectId',
            'tags' => 'getTags',
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
    const ENGINE_RABBITMQ = 'rabbitmq';
    const BROKER_NUM_1 = 1;
    const BROKER_NUM_3 = 3;
    const BROKER_NUM_5 = 5;
    const BROKER_NUM_7 = 7;
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
            self::ENGINE_RABBITMQ,
        ];
    }

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getBrokerNumAllowableValues()
    {
        return [
            self::BROKER_NUM_1,
            self::BROKER_NUM_3,
            self::BROKER_NUM_5,
            self::BROKER_NUM_7,
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
        $this->container['enableAcl'] = isset($data['enableAcl']) ? $data['enableAcl'] : null;
        $this->container['storageSpace'] = isset($data['storageSpace']) ? $data['storageSpace'] : null;
        $this->container['accessUser'] = isset($data['accessUser']) ? $data['accessUser'] : null;
        $this->container['password'] = isset($data['password']) ? $data['password'] : null;
        $this->container['vpcId'] = isset($data['vpcId']) ? $data['vpcId'] : null;
        $this->container['securityGroupId'] = isset($data['securityGroupId']) ? $data['securityGroupId'] : null;
        $this->container['subnetId'] = isset($data['subnetId']) ? $data['subnetId'] : null;
        $this->container['availableZones'] = isset($data['availableZones']) ? $data['availableZones'] : null;
        $this->container['productId'] = isset($data['productId']) ? $data['productId'] : null;
        $this->container['brokerNum'] = isset($data['brokerNum']) ? $data['brokerNum'] : null;
        $this->container['maintainBegin'] = isset($data['maintainBegin']) ? $data['maintainBegin'] : null;
        $this->container['maintainEnd'] = isset($data['maintainEnd']) ? $data['maintainEnd'] : null;
        $this->container['enablePublicip'] = isset($data['enablePublicip']) ? $data['enablePublicip'] : null;
        $this->container['publicipId'] = isset($data['publicipId']) ? $data['publicipId'] : null;
        $this->container['sslEnable'] = isset($data['sslEnable']) ? $data['sslEnable'] : null;
        $this->container['storageSpecCode'] = isset($data['storageSpecCode']) ? $data['storageSpecCode'] : null;
        $this->container['enterpriseProjectId'] = isset($data['enterpriseProjectId']) ? $data['enterpriseProjectId'] : null;
        $this->container['tags'] = isset($data['tags']) ? $data['tags'] : null;
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
            $allowedValues = $this->getBrokerNumAllowableValues();
                if (!is_null($this->container['brokerNum']) && !in_array($this->container['brokerNum'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'brokerNum', must be one of '%s'",
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
    *  **参数解释**： 实例的描述信息。 **约束限制**： 长度不超过1024的字符串。[且字符串不能包含\">\"与\"<\"，字符串首字符不能为\"=\",\"+\",\"-\",\"@\"的全角和半角字符。](tag:hcs,fcs)  \\与\"在json报文中属于特殊字符，如果参数值中需要显示\\或者\"字符，请在字符前增加转义字符\\，比如\\\\\\\\或者\\\\\"。  **取值范围**： 不涉及。 **默认取值**： 不涉及。
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
    * @param string|null $description **参数解释**： 实例的描述信息。 **约束限制**： 长度不超过1024的字符串。[且字符串不能包含\">\"与\"<\"，字符串首字符不能为\"=\",\"+\",\"-\",\"@\"的全角和半角字符。](tag:hcs,fcs)  \\与\"在json报文中属于特殊字符，如果参数值中需要显示\\或者\"字符，请在字符前增加转义字符\\，比如\\\\\\\\或者\\\\\"。  **取值范围**： 不涉及。 **默认取值**： 不涉及。
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
    *  **参数解释**： 消息引擎。 **约束限制**： 不涉及 **取值范围**： rabbitmq：RabbitMQ引擎。 **默认取值**： 不涉及。
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
    * @param string $engine **参数解释**： 消息引擎。 **约束限制**： 不涉及 **取值范围**： rabbitmq：RabbitMQ引擎。 **默认取值**： 不涉及。
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
    *  **参数解释**： 消息引擎的版本。 **约束限制**： 不涉及 **取值范围**： - 3.8.35 [- 3.12.13](tag:srg) [- AMQP-0-9-1](tag:hws,hws_hk,hws_eu) **默认取值**： 不涉及。
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
    * @param string $engineVersion **参数解释**： 消息引擎的版本。 **约束限制**： 不涉及 **取值范围**： - 3.8.35 [- 3.12.13](tag:srg) [- AMQP-0-9-1](tag:hws,hws_hk,hws_eu) **默认取值**： 不涉及。
    *
    * @return $this
    */
    public function setEngineVersion($engineVersion)
    {
        $this->container['engineVersion'] = $engineVersion;
        return $this;
    }

    /**
    * Gets enableAcl
    *  **参数解释**： ACL访问控制 **约束限制**： 仅AMQP版本支持此参数。 **取值范围**： - true：开启ACL访问控制。 - false：不开启ACL访问控制。 **默认取值**： 不涉及。
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
    * @param bool|null $enableAcl **参数解释**： ACL访问控制 **约束限制**： 仅AMQP版本支持此参数。 **取值范围**： - true：开启ACL访问控制。 - false：不开启ACL访问控制。 **默认取值**： 不涉及。
    *
    * @return $this
    */
    public function setEnableAcl($enableAcl)
    {
        $this->container['enableAcl'] = $enableAcl;
        return $this;
    }

    /**
    * Gets storageSpace
    *  **参数解释**： 消息存储空间，单位GB。 **约束限制**： 磁盘容量仅支持设置为100的整数倍。 **取值范围**： - 单机实例：100GB~30000GB。  - 集群实例：100GB * 节点数 ~ 30000GB * 节点数。 **默认取值**： 不涉及。
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
    * @param int $storageSpace **参数解释**： 消息存储空间，单位GB。 **约束限制**： 磁盘容量仅支持设置为100的整数倍。 **取值范围**： - 单机实例：100GB~30000GB。  - 集群实例：100GB * 节点数 ~ 30000GB * 节点数。 **默认取值**： 不涉及。
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
    *  **参数解释**： 实例的认证密码。 **约束限制**： - 输入长度为8到32位的字符串。 - 必须包含如下四种字符中的三种组合：   - 小写字母   - 大写字母   - 数字   - 特殊字符包括（`~!@#$%^&*()-_=+\\|[{}]:'\",<.>/?）和空格，并且不能以-开头 - 当ssl_enable为true时，该参数必选，ssl_enable为false时，该参数无效。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
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
    * @param string|null $password **参数解释**： 实例的认证密码。 **约束限制**： - 输入长度为8到32位的字符串。 - 必须包含如下四种字符中的三种组合：   - 小写字母   - 大写字母   - 数字   - 特殊字符包括（`~!@#$%^&*()-_=+\\|[{}]:'\",<.>/?）和空格，并且不能以-开头 - 当ssl_enable为true时，该参数必选，ssl_enable为false时，该参数无效。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
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
    *  **参数解释**：  虚拟私有云ID。获取方法如下：参考[[《虚拟私有云 API参考》](https://support.huaweicloud.com/api-vpc/vpc_apiv3_0003.html)](tag:hws)[[《虚拟私有云 API参考》](https://support.huaweicloud.com/intl/zh-cn/api-vpc/vpc_apiv3_0003.html)](tag:hws_hk)[[《虚拟私有云 API参考》](https://support.huaweicloud.com/eu/api-vpc/vpc_apiv3_0003.html)](tag:hws_eu)[《虚拟私有云 API参考》](tag:ax,cmcc,ctc,sbc,hk_sbc,g42,hk_g42,tm,hk_tm,srg)，调用“查询VPC列表”接口，从响应体中获取VPC ID。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
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
    * @param string $vpcId **参数解释**：  虚拟私有云ID。获取方法如下：参考[[《虚拟私有云 API参考》](https://support.huaweicloud.com/api-vpc/vpc_apiv3_0003.html)](tag:hws)[[《虚拟私有云 API参考》](https://support.huaweicloud.com/intl/zh-cn/api-vpc/vpc_apiv3_0003.html)](tag:hws_hk)[[《虚拟私有云 API参考》](https://support.huaweicloud.com/eu/api-vpc/vpc_apiv3_0003.html)](tag:hws_eu)[《虚拟私有云 API参考》](tag:ax,cmcc,ctc,sbc,hk_sbc,g42,hk_g42,tm,hk_tm,srg)，调用“查询VPC列表”接口，从响应体中获取VPC ID。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
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
    *  **参数解释**： 指定实例所属的安全组。获取方法如下：参考[[《虚拟私有云 API参考》](https://support.huaweicloud.com/api-vpc/vpc_apiv3_0011.html)](tag:hws)[[《虚拟私有云 API参考》](https://support.huaweicloud.com/intl/zh-cn/api-vpc/vpc_apiv3_0011.html)](tag:hws_hk)[[《虚拟私有云 API参考》](https://support.huaweicloud.com/eu/api-vpc/vpc_apiv3_0011.html)](tag:hws_eu)[《虚拟私有云 API参考》](tag:ax,cmcc,ctc,sbc,hk_sbc,g42,hk_g42,tm,hk_tm,srg)，调用“查询安全组列表”接口，从响应体中获取安全组ID。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
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
    * @param string $securityGroupId **参数解释**： 指定实例所属的安全组。获取方法如下：参考[[《虚拟私有云 API参考》](https://support.huaweicloud.com/api-vpc/vpc_apiv3_0011.html)](tag:hws)[[《虚拟私有云 API参考》](https://support.huaweicloud.com/intl/zh-cn/api-vpc/vpc_apiv3_0011.html)](tag:hws_hk)[[《虚拟私有云 API参考》](https://support.huaweicloud.com/eu/api-vpc/vpc_apiv3_0011.html)](tag:hws_eu)[《虚拟私有云 API参考》](tag:ax,cmcc,ctc,sbc,hk_sbc,g42,hk_g42,tm,hk_tm,srg)，调用“查询安全组列表”接口，从响应体中获取安全组ID。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
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
    *  **参数解释**： 子网信息。获取方法如下：参考[[《虚拟私有云 API参考》](https://support.huaweicloud.com/api-vpc/vpc_subnet01_0003.html)](tag:hws)[[《虚拟私有云 API参考》](https://support.huaweicloud.com/intl/zh-cn/api-vpc/vpc_subnet01_0003.html)](tag:hws_hk)[[《虚拟私有云 API参考》](https://support.huaweicloud.com/eu/api-vpc/vpc_subnet01_0003.html)](tag:hws_eu)[《虚拟私有云 API参考》](tag:ax,cmcc,ctc,sbc,hk_sbc,g42,hk_g42,tm,hk_tm,srg)，调用“查询子网列表”接口，从响应体中获取子网ID。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
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
    * @param string $subnetId **参数解释**： 子网信息。获取方法如下：参考[[《虚拟私有云 API参考》](https://support.huaweicloud.com/api-vpc/vpc_subnet01_0003.html)](tag:hws)[[《虚拟私有云 API参考》](https://support.huaweicloud.com/intl/zh-cn/api-vpc/vpc_subnet01_0003.html)](tag:hws_hk)[[《虚拟私有云 API参考》](https://support.huaweicloud.com/eu/api-vpc/vpc_subnet01_0003.html)](tag:hws_eu)[《虚拟私有云 API参考》](tag:ax,cmcc,ctc,sbc,hk_sbc,g42,hk_g42,tm,hk_tm,srg)，调用“查询子网列表”接口，从响应体中获取子网ID。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
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
    *  **参数解释**： 创建节点到指定且有资源的可用区ID。请参考[查询可用区信息](ListAvailableZones.xml)获取可用区ID。 **约束限制**： 该参数不能为空数组或者数组的值为空。  创建RabbitMQ实例，节点需要部署在1个或3个及以上可用区中。如果部署在多个可用区中，以英文逗号隔开多个可用区ID。
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
    * @param string[] $availableZones **参数解释**： 创建节点到指定且有资源的可用区ID。请参考[查询可用区信息](ListAvailableZones.xml)获取可用区ID。 **约束限制**： 该参数不能为空数组或者数组的值为空。  创建RabbitMQ实例，节点需要部署在1个或3个及以上可用区中。如果部署在多个可用区中，以英文逗号隔开多个可用区ID。
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
    * Gets brokerNum
    *  **参数解释**： 代理个数。 **约束限制**： 当产品为单机类型，代理个数只能为1；当产品为集群类型，可选3、5、7个代理个数。 **取值范围**： - 1 - 3 - 5 - 7 **默认取值**： 不涉及。
    *
    * @return int|null
    */
    public function getBrokerNum()
    {
        return $this->container['brokerNum'];
    }

    /**
    * Sets brokerNum
    *
    * @param int|null $brokerNum **参数解释**： 代理个数。 **约束限制**： 当产品为单机类型，代理个数只能为1；当产品为集群类型，可选3、5、7个代理个数。 **取值范围**： - 1 - 3 - 5 - 7 **默认取值**： 不涉及。
    *
    * @return $this
    */
    public function setBrokerNum($brokerNum)
    {
        $this->container['brokerNum'] = $brokerNum;
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
    *  **参数解释**： 是否开启公网访问功能。 **约束限制**： 不涉及。 **取值范围**： - true：开启 - false：不开启 **默认取值**： false。
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
    * @param bool|null $enablePublicip **参数解释**： 是否开启公网访问功能。 **约束限制**： 不涉及。 **取值范围**： - true：开启 - false：不开启 **默认取值**： false。
    *
    * @return $this
    */
    public function setEnablePublicip($enablePublicip)
    {
        $this->container['enablePublicip'] = $enablePublicip;
        return $this;
    }

    /**
    * Gets publicipId
    *  **参数解释**： 实例绑定的弹性IP地址的ID。获取方法：参考[[《弹性公网IP API参考》](https://support.huaweicloud.com/api-eip/ListPublicipsV3.html)](tag:hws)[[《弹性公网IP API参考》](https://support.huaweicloud.com/intl/zh-cn/api-eip/ListPublicipsV3.html)](tag:hws_hk)[[《弹性公网IP API参考》](https://support.huaweicloud.com/eu/api-eip/ListPublicipsV3.html)](tag:hws_eu)[《弹性公网IP API参考》](tag:ax,cmcc,ctc,sbc,hk_sbc,g42,hk_g42,tm,hk_tm,srg)，调用“查询弹性公网IP列表”接口，从响应体中获取弹性公网IP的ID。 **约束限制**： 以英文逗号隔开多个弹性IP地址的ID。  如果开启了公网访问功能（即enable_publicip为true），该字段为必选。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
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
    * @param string|null $publicipId **参数解释**： 实例绑定的弹性IP地址的ID。获取方法：参考[[《弹性公网IP API参考》](https://support.huaweicloud.com/api-eip/ListPublicipsV3.html)](tag:hws)[[《弹性公网IP API参考》](https://support.huaweicloud.com/intl/zh-cn/api-eip/ListPublicipsV3.html)](tag:hws_hk)[[《弹性公网IP API参考》](https://support.huaweicloud.com/eu/api-eip/ListPublicipsV3.html)](tag:hws_eu)[《弹性公网IP API参考》](tag:ax,cmcc,ctc,sbc,hk_sbc,g42,hk_g42,tm,hk_tm,srg)，调用“查询弹性公网IP列表”接口，从响应体中获取弹性公网IP的ID。 **约束限制**： 以英文逗号隔开多个弹性IP地址的ID。  如果开启了公网访问功能（即enable_publicip为true），该字段为必选。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
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
    *  **参数解释**： 是否开启SSL加密访问。 **约束限制**： 不涉及。 **取值范围**： - true：开启SSL加密访问。 - false：关闭SSL加密访问。 **默认取值**： 不涉及。
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
    * @param bool|null $sslEnable **参数解释**： 是否开启SSL加密访问。 **约束限制**： 不涉及。 **取值范围**： - true：开启SSL加密访问。 - false：关闭SSL加密访问。 **默认取值**： 不涉及。
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
    *  **参数解释**： 存储IO规格。  [如何选择磁盘类型请参考[磁盘类型及性能介绍](https://support.huaweicloud.com/productdesc-evs/zh-cn_topic_0014580744.html)。](tag:hws) [如何选择磁盘类型请参考[磁盘类型及性能介绍](https://support.huaweicloud.com/intl/zh-cn/productdesc-evs/zh-cn_topic_0014580744.html)。](tag:hws_hk) [如何选择磁盘类型请参考[磁盘类型及性能介绍](https://support.huaweicloud.com/eu/productdesc-evs/en-us_topic_0014580744.html)。](tag:hws_eu) **约束限制**： 不涉及。 **取值范围**： - dms.physical.storage.high.v2：高IO云硬盘。 - dms.physical.storage.ultra.v2：超高IO云硬盘。 [- dms.physical.storage.general：通用型SSD云硬盘。](tag:hws,hws_hk,dt,ax) [- dms.physical.storage.extreme：极速型SSD云硬盘。](tag:hws,hws_hk,dt,ax) **默认取值**： 不涉及。
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
    * @param string $storageSpecCode **参数解释**： 存储IO规格。  [如何选择磁盘类型请参考[磁盘类型及性能介绍](https://support.huaweicloud.com/productdesc-evs/zh-cn_topic_0014580744.html)。](tag:hws) [如何选择磁盘类型请参考[磁盘类型及性能介绍](https://support.huaweicloud.com/intl/zh-cn/productdesc-evs/zh-cn_topic_0014580744.html)。](tag:hws_hk) [如何选择磁盘类型请参考[磁盘类型及性能介绍](https://support.huaweicloud.com/eu/productdesc-evs/en-us_topic_0014580744.html)。](tag:hws_eu) **约束限制**： 不涉及。 **取值范围**： - dms.physical.storage.high.v2：高IO云硬盘。 - dms.physical.storage.ultra.v2：超高IO云硬盘。 [- dms.physical.storage.general：通用型SSD云硬盘。](tag:hws,hws_hk,dt,ax) [- dms.physical.storage.extreme：极速型SSD云硬盘。](tag:hws,hws_hk,dt,ax) **默认取值**： 不涉及。
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
    *  **参数解释**： 标签列表。 **约束限制**： 一个RabbitMQ实例最多添加20个标签。
    *
    * @return \HuaweiCloud\SDK\RabbitMQ\V2\Model\TagEntity[]|null
    */
    public function getTags()
    {
        return $this->container['tags'];
    }

    /**
    * Sets tags
    *
    * @param \HuaweiCloud\SDK\RabbitMQ\V2\Model\TagEntity[]|null $tags **参数解释**： 标签列表。 **约束限制**： 一个RabbitMQ实例最多添加20个标签。
    *
    * @return $this
    */
    public function setTags($tags)
    {
        $this->container['tags'] = $tags;
        return $this;
    }

    /**
    * Gets bssParam
    *  bssParam
    *
    * @return \HuaweiCloud\SDK\RabbitMQ\V2\Model\BssParam|null
    */
    public function getBssParam()
    {
        return $this->container['bssParam'];
    }

    /**
    * Sets bssParam
    *
    * @param \HuaweiCloud\SDK\RabbitMQ\V2\Model\BssParam|null $bssParam bssParam
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

