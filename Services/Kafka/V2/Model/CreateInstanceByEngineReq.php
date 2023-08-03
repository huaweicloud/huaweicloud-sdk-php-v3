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
    * name  实例名称。  由英文字符开头，只能由英文字母、数字、中划线、下划线组成，长度为4~64的字符。
    * description  实例的描述信息。  长度不超过1024的字符串。  > \\与\"在json报文中属于特殊字符，如果参数值中需要显示\\或者\"字符，请在字符前增加转义字符\\，比如\\\\或者\\\"。
    * engine  消息引擎。取值填写为：kafka。
    * engineVersion  消息引擎的版本。取值填写为：   - 1.1.0   [- 2.3.0](tag:g42,tm,hk_g42,ctc,hk_tm)   - 2.7
    * brokerNum  代理个数。
    * storageSpace  消息存储空间，单位GB。   - Kafka实例规格为c6.2u4g.cluster时，存储空间取值范围300GB ~ 300000GB。   - Kafka实例规格为c6.4u8g.cluster时，存储空间取值范围300GB ~ 600000GB。   - Kafka实例规格为c6.8u16g.cluster时，存储空间取值范围300GB ~ [1500000](tag:hws,hws_hk,ocb,hws_ocb)[900000](tag:g42,tm,hk_g42,ctc,hk_tm,hws_eu)GB。   - Kafka实例规格为c6.12u24g.cluster时，存储空间取值范围300GB ~ [1500000](tag:hws,hws_hk,ocb,hws_ocb)[900000](tag:g42,tm,hk_g42,ctc,hk_tm,hws_eu)GB。   - Kafka实例规格为c6.16u32g.cluster时，存储空间取值范围300GB ~ [1500000](tag:hws,hws_hk,ocb,hws_ocb)[900000](tag:g42,tm,hk_g42,ctc,hk_tm,hws_eu)GB。
    * accessUser  当ssl_enable为true时，该参数必选，ssl_enable为false时，该参数无效。  认证用户名，只能由英文字母开头且由英文字母、数字、中划线、下划线组成，长度为4~64的字符。
    * password  当ssl_enable为true时，该参数必选，ssl_enable为false时，该参数无效。  实例的认证密码。  复杂度要求： - 输入长度为8到32位的字符串。 - 必须包含如下四种字符中的两种组合：   - 小写字母   - 大写字母   - 数字   - 特殊字符包括（`~!@#$%^&*()-_=+\\|[{}]:'\",<.>/?）
    * vpcId  虚拟私有云ID。  获取方法如下：登录虚拟私有云服务的控制台界面，在虚拟私有云的详情页面查找VPC ID。
    * securityGroupId  指定实例所属的安全组。  获取方法如下：登录虚拟私有云服务的控制台界面，在安全组的详情页面查找安全组ID。
    * subnetId  子网信息。  获取方法如下：登录虚拟私有云服务的控制台界面，单击VPC下的子网，进入子网详情页面，查找网络ID。
    * availableZones  创建节点到指定且有资源的可用区ID。请参考[查询可用区信息](ListAvailableZones.xml)获取可用区ID。  该参数不能为空数组或者数组的值为空。  创建Kafka实例，支持节点部署在1个或3个及3个以上的可用区。在为节点指定可用区时，用逗号分隔开。
    * productId  产品ID。  产品ID可以从[查询产品规格列表](ListEngineProducts.xml)获取。
    * kafkaManagerUser  表示登录Kafka Manager的用户名。只能由英文字母、数字、中划线组成，长度为4~64的字符。
    * kafkaManagerPassword  表示登录Kafka Manager的密码。  复杂度要求：   - 输入长度为8到32位的字符串。   - 必须包含如下四种字符中的两种组合：       - 小写字母       - 大写字母       - 数字       - 特殊字符包括（`~!@#$%^&*()-_=+\\|[{}]:'\",<.>/?）
    * maintainBegin  维护时间窗开始时间，格式为HH:mm。 - 维护时间窗开始和结束时间必须为指定的时间段。 - 开始时间必须为22:00、02:00、06:00、10:00、14:00和18:00。 - 该参数不能单独为空，若该值为空，则结束时间也为空。系统分配一个默认开始时间02:00。
    * maintainEnd  维护时间窗结束时间，格式为HH:mm。 - 维护时间窗开始和结束时间必须为指定的时间段。 - 结束时间在开始时间基础上加四个小时，即当开始时间为22:00时，结束时间为02:00。 - 该参数不能单独为空，若该值为空，则开始时间也为空，系统分配一个默认结束时间06:00。
    * enablePublicip  是否开启公网访问功能。默认不开启公网。 - true：开启 - false：不开启
    * publicipId  实例绑定的弹性IP地址的ID。  以英文逗号隔开多个弹性IP地址的ID。  如果开启了公网访问功能（即enable_publicip为true），该字段为必选。
    * sslEnable  是否打开SSL加密访问。  实例创建后将不支持动态开启和关闭。  - true：打开SSL加密访问。 - false：不打开SSL加密访问。
    * kafkaSecurityProtocol  开启SASL后使用的安全协议，如果开启了SASL认证功能（即ssl_enable=true），该字段为必选。  若该字段值为空，默认开启SASL_SSL认证机制。  实例创建后将不支持动态开启和关闭。  - SASL_SSL: 采用SSL证书进行加密传输，支持帐号密码认证，安全性更高。 - SASL_PLAINTEXT: 明文传输，支持帐号密码认证，性能更好，仅支持SCRAM-SHA-512机制。
    * saslEnabledMechanisms  开启SASL后使用的认证机制，如果开启了SASL认证功能（即ssl_enable=true），该字段为必选。  若该字段值为空，默认开启PLAIN认证机制。  选择其一进行SASL认证即可，支持同时开启两种认证机制。 取值如下： - PLAIN: 简单的用户名密码校验。 - SCRAM-SHA-512: 用户凭证校验，安全性比PLAIN机制更高。
    * retentionPolicy  磁盘的容量到达容量阈值后，对于消息的处理策略。  取值如下： - produce_reject：表示拒绝消息写入。 - time_base：表示自动删除最老消息。
    * diskEncryptedEnable  是否开启磁盘加密。
    * diskEncryptedKey  磁盘加密key，未开启磁盘加密时为空
    * connectorEnable  是否开启消息转储功能。  默认不开启消息转储。
    * enableAutoTopic  是否打开kafka自动创建topic功能。 - true：开启 - false：关闭  当您选择开启，表示生产或消费一个未创建的Topic时，会自动创建一个包含3个分区和3个副本的Topic。  默认是false关闭。
    * storageSpecCode  存储IO规格。  取值范围：   - dms.physical.storage.high.v2：使用高IO的磁盘类型。   - dms.physical.storage.ultra.v2：使用超高IO的磁盘类型。  如何选择磁盘类型请参考《云硬盘 [产品介绍](tag:hws,hws_hk,hws_eu,cmcc)[用户指南](tag:otc,g42,hk_g42,ctc,tm,hk_tm,sbc,ocb,hws_ocb)》的“磁盘类型及性能介绍”。
    * enterpriseProjectId  企业项目ID。若为企业项目帐号，该参数必填。
    * tags  标签列表。
    * archType  CPU架构。当前只支持X86架构。  取值范围：   - X86
    * vpcClientPlain  VPC内网明文访问。
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
            'kafkaManagerUser' => 'string',
            'kafkaManagerPassword' => 'string',
            'maintainBegin' => 'string',
            'maintainEnd' => 'string',
            'enablePublicip' => 'bool',
            'publicipId' => 'string',
            'sslEnable' => 'bool',
            'kafkaSecurityProtocol' => 'string',
            'saslEnabledMechanisms' => 'string[]',
            'retentionPolicy' => 'string',
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
    * name  实例名称。  由英文字符开头，只能由英文字母、数字、中划线、下划线组成，长度为4~64的字符。
    * description  实例的描述信息。  长度不超过1024的字符串。  > \\与\"在json报文中属于特殊字符，如果参数值中需要显示\\或者\"字符，请在字符前增加转义字符\\，比如\\\\或者\\\"。
    * engine  消息引擎。取值填写为：kafka。
    * engineVersion  消息引擎的版本。取值填写为：   - 1.1.0   [- 2.3.0](tag:g42,tm,hk_g42,ctc,hk_tm)   - 2.7
    * brokerNum  代理个数。
    * storageSpace  消息存储空间，单位GB。   - Kafka实例规格为c6.2u4g.cluster时，存储空间取值范围300GB ~ 300000GB。   - Kafka实例规格为c6.4u8g.cluster时，存储空间取值范围300GB ~ 600000GB。   - Kafka实例规格为c6.8u16g.cluster时，存储空间取值范围300GB ~ [1500000](tag:hws,hws_hk,ocb,hws_ocb)[900000](tag:g42,tm,hk_g42,ctc,hk_tm,hws_eu)GB。   - Kafka实例规格为c6.12u24g.cluster时，存储空间取值范围300GB ~ [1500000](tag:hws,hws_hk,ocb,hws_ocb)[900000](tag:g42,tm,hk_g42,ctc,hk_tm,hws_eu)GB。   - Kafka实例规格为c6.16u32g.cluster时，存储空间取值范围300GB ~ [1500000](tag:hws,hws_hk,ocb,hws_ocb)[900000](tag:g42,tm,hk_g42,ctc,hk_tm,hws_eu)GB。
    * accessUser  当ssl_enable为true时，该参数必选，ssl_enable为false时，该参数无效。  认证用户名，只能由英文字母开头且由英文字母、数字、中划线、下划线组成，长度为4~64的字符。
    * password  当ssl_enable为true时，该参数必选，ssl_enable为false时，该参数无效。  实例的认证密码。  复杂度要求： - 输入长度为8到32位的字符串。 - 必须包含如下四种字符中的两种组合：   - 小写字母   - 大写字母   - 数字   - 特殊字符包括（`~!@#$%^&*()-_=+\\|[{}]:'\",<.>/?）
    * vpcId  虚拟私有云ID。  获取方法如下：登录虚拟私有云服务的控制台界面，在虚拟私有云的详情页面查找VPC ID。
    * securityGroupId  指定实例所属的安全组。  获取方法如下：登录虚拟私有云服务的控制台界面，在安全组的详情页面查找安全组ID。
    * subnetId  子网信息。  获取方法如下：登录虚拟私有云服务的控制台界面，单击VPC下的子网，进入子网详情页面，查找网络ID。
    * availableZones  创建节点到指定且有资源的可用区ID。请参考[查询可用区信息](ListAvailableZones.xml)获取可用区ID。  该参数不能为空数组或者数组的值为空。  创建Kafka实例，支持节点部署在1个或3个及3个以上的可用区。在为节点指定可用区时，用逗号分隔开。
    * productId  产品ID。  产品ID可以从[查询产品规格列表](ListEngineProducts.xml)获取。
    * kafkaManagerUser  表示登录Kafka Manager的用户名。只能由英文字母、数字、中划线组成，长度为4~64的字符。
    * kafkaManagerPassword  表示登录Kafka Manager的密码。  复杂度要求：   - 输入长度为8到32位的字符串。   - 必须包含如下四种字符中的两种组合：       - 小写字母       - 大写字母       - 数字       - 特殊字符包括（`~!@#$%^&*()-_=+\\|[{}]:'\",<.>/?）
    * maintainBegin  维护时间窗开始时间，格式为HH:mm。 - 维护时间窗开始和结束时间必须为指定的时间段。 - 开始时间必须为22:00、02:00、06:00、10:00、14:00和18:00。 - 该参数不能单独为空，若该值为空，则结束时间也为空。系统分配一个默认开始时间02:00。
    * maintainEnd  维护时间窗结束时间，格式为HH:mm。 - 维护时间窗开始和结束时间必须为指定的时间段。 - 结束时间在开始时间基础上加四个小时，即当开始时间为22:00时，结束时间为02:00。 - 该参数不能单独为空，若该值为空，则开始时间也为空，系统分配一个默认结束时间06:00。
    * enablePublicip  是否开启公网访问功能。默认不开启公网。 - true：开启 - false：不开启
    * publicipId  实例绑定的弹性IP地址的ID。  以英文逗号隔开多个弹性IP地址的ID。  如果开启了公网访问功能（即enable_publicip为true），该字段为必选。
    * sslEnable  是否打开SSL加密访问。  实例创建后将不支持动态开启和关闭。  - true：打开SSL加密访问。 - false：不打开SSL加密访问。
    * kafkaSecurityProtocol  开启SASL后使用的安全协议，如果开启了SASL认证功能（即ssl_enable=true），该字段为必选。  若该字段值为空，默认开启SASL_SSL认证机制。  实例创建后将不支持动态开启和关闭。  - SASL_SSL: 采用SSL证书进行加密传输，支持帐号密码认证，安全性更高。 - SASL_PLAINTEXT: 明文传输，支持帐号密码认证，性能更好，仅支持SCRAM-SHA-512机制。
    * saslEnabledMechanisms  开启SASL后使用的认证机制，如果开启了SASL认证功能（即ssl_enable=true），该字段为必选。  若该字段值为空，默认开启PLAIN认证机制。  选择其一进行SASL认证即可，支持同时开启两种认证机制。 取值如下： - PLAIN: 简单的用户名密码校验。 - SCRAM-SHA-512: 用户凭证校验，安全性比PLAIN机制更高。
    * retentionPolicy  磁盘的容量到达容量阈值后，对于消息的处理策略。  取值如下： - produce_reject：表示拒绝消息写入。 - time_base：表示自动删除最老消息。
    * diskEncryptedEnable  是否开启磁盘加密。
    * diskEncryptedKey  磁盘加密key，未开启磁盘加密时为空
    * connectorEnable  是否开启消息转储功能。  默认不开启消息转储。
    * enableAutoTopic  是否打开kafka自动创建topic功能。 - true：开启 - false：关闭  当您选择开启，表示生产或消费一个未创建的Topic时，会自动创建一个包含3个分区和3个副本的Topic。  默认是false关闭。
    * storageSpecCode  存储IO规格。  取值范围：   - dms.physical.storage.high.v2：使用高IO的磁盘类型。   - dms.physical.storage.ultra.v2：使用超高IO的磁盘类型。  如何选择磁盘类型请参考《云硬盘 [产品介绍](tag:hws,hws_hk,hws_eu,cmcc)[用户指南](tag:otc,g42,hk_g42,ctc,tm,hk_tm,sbc,ocb,hws_ocb)》的“磁盘类型及性能介绍”。
    * enterpriseProjectId  企业项目ID。若为企业项目帐号，该参数必填。
    * tags  标签列表。
    * archType  CPU架构。当前只支持X86架构。  取值范围：   - X86
    * vpcClientPlain  VPC内网明文访问。
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
        'kafkaManagerUser' => null,
        'kafkaManagerPassword' => null,
        'maintainBegin' => null,
        'maintainEnd' => null,
        'enablePublicip' => null,
        'publicipId' => null,
        'sslEnable' => null,
        'kafkaSecurityProtocol' => null,
        'saslEnabledMechanisms' => null,
        'retentionPolicy' => null,
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
    * name  实例名称。  由英文字符开头，只能由英文字母、数字、中划线、下划线组成，长度为4~64的字符。
    * description  实例的描述信息。  长度不超过1024的字符串。  > \\与\"在json报文中属于特殊字符，如果参数值中需要显示\\或者\"字符，请在字符前增加转义字符\\，比如\\\\或者\\\"。
    * engine  消息引擎。取值填写为：kafka。
    * engineVersion  消息引擎的版本。取值填写为：   - 1.1.0   [- 2.3.0](tag:g42,tm,hk_g42,ctc,hk_tm)   - 2.7
    * brokerNum  代理个数。
    * storageSpace  消息存储空间，单位GB。   - Kafka实例规格为c6.2u4g.cluster时，存储空间取值范围300GB ~ 300000GB。   - Kafka实例规格为c6.4u8g.cluster时，存储空间取值范围300GB ~ 600000GB。   - Kafka实例规格为c6.8u16g.cluster时，存储空间取值范围300GB ~ [1500000](tag:hws,hws_hk,ocb,hws_ocb)[900000](tag:g42,tm,hk_g42,ctc,hk_tm,hws_eu)GB。   - Kafka实例规格为c6.12u24g.cluster时，存储空间取值范围300GB ~ [1500000](tag:hws,hws_hk,ocb,hws_ocb)[900000](tag:g42,tm,hk_g42,ctc,hk_tm,hws_eu)GB。   - Kafka实例规格为c6.16u32g.cluster时，存储空间取值范围300GB ~ [1500000](tag:hws,hws_hk,ocb,hws_ocb)[900000](tag:g42,tm,hk_g42,ctc,hk_tm,hws_eu)GB。
    * accessUser  当ssl_enable为true时，该参数必选，ssl_enable为false时，该参数无效。  认证用户名，只能由英文字母开头且由英文字母、数字、中划线、下划线组成，长度为4~64的字符。
    * password  当ssl_enable为true时，该参数必选，ssl_enable为false时，该参数无效。  实例的认证密码。  复杂度要求： - 输入长度为8到32位的字符串。 - 必须包含如下四种字符中的两种组合：   - 小写字母   - 大写字母   - 数字   - 特殊字符包括（`~!@#$%^&*()-_=+\\|[{}]:'\",<.>/?）
    * vpcId  虚拟私有云ID。  获取方法如下：登录虚拟私有云服务的控制台界面，在虚拟私有云的详情页面查找VPC ID。
    * securityGroupId  指定实例所属的安全组。  获取方法如下：登录虚拟私有云服务的控制台界面，在安全组的详情页面查找安全组ID。
    * subnetId  子网信息。  获取方法如下：登录虚拟私有云服务的控制台界面，单击VPC下的子网，进入子网详情页面，查找网络ID。
    * availableZones  创建节点到指定且有资源的可用区ID。请参考[查询可用区信息](ListAvailableZones.xml)获取可用区ID。  该参数不能为空数组或者数组的值为空。  创建Kafka实例，支持节点部署在1个或3个及3个以上的可用区。在为节点指定可用区时，用逗号分隔开。
    * productId  产品ID。  产品ID可以从[查询产品规格列表](ListEngineProducts.xml)获取。
    * kafkaManagerUser  表示登录Kafka Manager的用户名。只能由英文字母、数字、中划线组成，长度为4~64的字符。
    * kafkaManagerPassword  表示登录Kafka Manager的密码。  复杂度要求：   - 输入长度为8到32位的字符串。   - 必须包含如下四种字符中的两种组合：       - 小写字母       - 大写字母       - 数字       - 特殊字符包括（`~!@#$%^&*()-_=+\\|[{}]:'\",<.>/?）
    * maintainBegin  维护时间窗开始时间，格式为HH:mm。 - 维护时间窗开始和结束时间必须为指定的时间段。 - 开始时间必须为22:00、02:00、06:00、10:00、14:00和18:00。 - 该参数不能单独为空，若该值为空，则结束时间也为空。系统分配一个默认开始时间02:00。
    * maintainEnd  维护时间窗结束时间，格式为HH:mm。 - 维护时间窗开始和结束时间必须为指定的时间段。 - 结束时间在开始时间基础上加四个小时，即当开始时间为22:00时，结束时间为02:00。 - 该参数不能单独为空，若该值为空，则开始时间也为空，系统分配一个默认结束时间06:00。
    * enablePublicip  是否开启公网访问功能。默认不开启公网。 - true：开启 - false：不开启
    * publicipId  实例绑定的弹性IP地址的ID。  以英文逗号隔开多个弹性IP地址的ID。  如果开启了公网访问功能（即enable_publicip为true），该字段为必选。
    * sslEnable  是否打开SSL加密访问。  实例创建后将不支持动态开启和关闭。  - true：打开SSL加密访问。 - false：不打开SSL加密访问。
    * kafkaSecurityProtocol  开启SASL后使用的安全协议，如果开启了SASL认证功能（即ssl_enable=true），该字段为必选。  若该字段值为空，默认开启SASL_SSL认证机制。  实例创建后将不支持动态开启和关闭。  - SASL_SSL: 采用SSL证书进行加密传输，支持帐号密码认证，安全性更高。 - SASL_PLAINTEXT: 明文传输，支持帐号密码认证，性能更好，仅支持SCRAM-SHA-512机制。
    * saslEnabledMechanisms  开启SASL后使用的认证机制，如果开启了SASL认证功能（即ssl_enable=true），该字段为必选。  若该字段值为空，默认开启PLAIN认证机制。  选择其一进行SASL认证即可，支持同时开启两种认证机制。 取值如下： - PLAIN: 简单的用户名密码校验。 - SCRAM-SHA-512: 用户凭证校验，安全性比PLAIN机制更高。
    * retentionPolicy  磁盘的容量到达容量阈值后，对于消息的处理策略。  取值如下： - produce_reject：表示拒绝消息写入。 - time_base：表示自动删除最老消息。
    * diskEncryptedEnable  是否开启磁盘加密。
    * diskEncryptedKey  磁盘加密key，未开启磁盘加密时为空
    * connectorEnable  是否开启消息转储功能。  默认不开启消息转储。
    * enableAutoTopic  是否打开kafka自动创建topic功能。 - true：开启 - false：关闭  当您选择开启，表示生产或消费一个未创建的Topic时，会自动创建一个包含3个分区和3个副本的Topic。  默认是false关闭。
    * storageSpecCode  存储IO规格。  取值范围：   - dms.physical.storage.high.v2：使用高IO的磁盘类型。   - dms.physical.storage.ultra.v2：使用超高IO的磁盘类型。  如何选择磁盘类型请参考《云硬盘 [产品介绍](tag:hws,hws_hk,hws_eu,cmcc)[用户指南](tag:otc,g42,hk_g42,ctc,tm,hk_tm,sbc,ocb,hws_ocb)》的“磁盘类型及性能介绍”。
    * enterpriseProjectId  企业项目ID。若为企业项目帐号，该参数必填。
    * tags  标签列表。
    * archType  CPU架构。当前只支持X86架构。  取值范围：   - X86
    * vpcClientPlain  VPC内网明文访问。
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
            'kafkaManagerUser' => 'kafka_manager_user',
            'kafkaManagerPassword' => 'kafka_manager_password',
            'maintainBegin' => 'maintain_begin',
            'maintainEnd' => 'maintain_end',
            'enablePublicip' => 'enable_publicip',
            'publicipId' => 'publicip_id',
            'sslEnable' => 'ssl_enable',
            'kafkaSecurityProtocol' => 'kafka_security_protocol',
            'saslEnabledMechanisms' => 'sasl_enabled_mechanisms',
            'retentionPolicy' => 'retention_policy',
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
    * name  实例名称。  由英文字符开头，只能由英文字母、数字、中划线、下划线组成，长度为4~64的字符。
    * description  实例的描述信息。  长度不超过1024的字符串。  > \\与\"在json报文中属于特殊字符，如果参数值中需要显示\\或者\"字符，请在字符前增加转义字符\\，比如\\\\或者\\\"。
    * engine  消息引擎。取值填写为：kafka。
    * engineVersion  消息引擎的版本。取值填写为：   - 1.1.0   [- 2.3.0](tag:g42,tm,hk_g42,ctc,hk_tm)   - 2.7
    * brokerNum  代理个数。
    * storageSpace  消息存储空间，单位GB。   - Kafka实例规格为c6.2u4g.cluster时，存储空间取值范围300GB ~ 300000GB。   - Kafka实例规格为c6.4u8g.cluster时，存储空间取值范围300GB ~ 600000GB。   - Kafka实例规格为c6.8u16g.cluster时，存储空间取值范围300GB ~ [1500000](tag:hws,hws_hk,ocb,hws_ocb)[900000](tag:g42,tm,hk_g42,ctc,hk_tm,hws_eu)GB。   - Kafka实例规格为c6.12u24g.cluster时，存储空间取值范围300GB ~ [1500000](tag:hws,hws_hk,ocb,hws_ocb)[900000](tag:g42,tm,hk_g42,ctc,hk_tm,hws_eu)GB。   - Kafka实例规格为c6.16u32g.cluster时，存储空间取值范围300GB ~ [1500000](tag:hws,hws_hk,ocb,hws_ocb)[900000](tag:g42,tm,hk_g42,ctc,hk_tm,hws_eu)GB。
    * accessUser  当ssl_enable为true时，该参数必选，ssl_enable为false时，该参数无效。  认证用户名，只能由英文字母开头且由英文字母、数字、中划线、下划线组成，长度为4~64的字符。
    * password  当ssl_enable为true时，该参数必选，ssl_enable为false时，该参数无效。  实例的认证密码。  复杂度要求： - 输入长度为8到32位的字符串。 - 必须包含如下四种字符中的两种组合：   - 小写字母   - 大写字母   - 数字   - 特殊字符包括（`~!@#$%^&*()-_=+\\|[{}]:'\",<.>/?）
    * vpcId  虚拟私有云ID。  获取方法如下：登录虚拟私有云服务的控制台界面，在虚拟私有云的详情页面查找VPC ID。
    * securityGroupId  指定实例所属的安全组。  获取方法如下：登录虚拟私有云服务的控制台界面，在安全组的详情页面查找安全组ID。
    * subnetId  子网信息。  获取方法如下：登录虚拟私有云服务的控制台界面，单击VPC下的子网，进入子网详情页面，查找网络ID。
    * availableZones  创建节点到指定且有资源的可用区ID。请参考[查询可用区信息](ListAvailableZones.xml)获取可用区ID。  该参数不能为空数组或者数组的值为空。  创建Kafka实例，支持节点部署在1个或3个及3个以上的可用区。在为节点指定可用区时，用逗号分隔开。
    * productId  产品ID。  产品ID可以从[查询产品规格列表](ListEngineProducts.xml)获取。
    * kafkaManagerUser  表示登录Kafka Manager的用户名。只能由英文字母、数字、中划线组成，长度为4~64的字符。
    * kafkaManagerPassword  表示登录Kafka Manager的密码。  复杂度要求：   - 输入长度为8到32位的字符串。   - 必须包含如下四种字符中的两种组合：       - 小写字母       - 大写字母       - 数字       - 特殊字符包括（`~!@#$%^&*()-_=+\\|[{}]:'\",<.>/?）
    * maintainBegin  维护时间窗开始时间，格式为HH:mm。 - 维护时间窗开始和结束时间必须为指定的时间段。 - 开始时间必须为22:00、02:00、06:00、10:00、14:00和18:00。 - 该参数不能单独为空，若该值为空，则结束时间也为空。系统分配一个默认开始时间02:00。
    * maintainEnd  维护时间窗结束时间，格式为HH:mm。 - 维护时间窗开始和结束时间必须为指定的时间段。 - 结束时间在开始时间基础上加四个小时，即当开始时间为22:00时，结束时间为02:00。 - 该参数不能单独为空，若该值为空，则开始时间也为空，系统分配一个默认结束时间06:00。
    * enablePublicip  是否开启公网访问功能。默认不开启公网。 - true：开启 - false：不开启
    * publicipId  实例绑定的弹性IP地址的ID。  以英文逗号隔开多个弹性IP地址的ID。  如果开启了公网访问功能（即enable_publicip为true），该字段为必选。
    * sslEnable  是否打开SSL加密访问。  实例创建后将不支持动态开启和关闭。  - true：打开SSL加密访问。 - false：不打开SSL加密访问。
    * kafkaSecurityProtocol  开启SASL后使用的安全协议，如果开启了SASL认证功能（即ssl_enable=true），该字段为必选。  若该字段值为空，默认开启SASL_SSL认证机制。  实例创建后将不支持动态开启和关闭。  - SASL_SSL: 采用SSL证书进行加密传输，支持帐号密码认证，安全性更高。 - SASL_PLAINTEXT: 明文传输，支持帐号密码认证，性能更好，仅支持SCRAM-SHA-512机制。
    * saslEnabledMechanisms  开启SASL后使用的认证机制，如果开启了SASL认证功能（即ssl_enable=true），该字段为必选。  若该字段值为空，默认开启PLAIN认证机制。  选择其一进行SASL认证即可，支持同时开启两种认证机制。 取值如下： - PLAIN: 简单的用户名密码校验。 - SCRAM-SHA-512: 用户凭证校验，安全性比PLAIN机制更高。
    * retentionPolicy  磁盘的容量到达容量阈值后，对于消息的处理策略。  取值如下： - produce_reject：表示拒绝消息写入。 - time_base：表示自动删除最老消息。
    * diskEncryptedEnable  是否开启磁盘加密。
    * diskEncryptedKey  磁盘加密key，未开启磁盘加密时为空
    * connectorEnable  是否开启消息转储功能。  默认不开启消息转储。
    * enableAutoTopic  是否打开kafka自动创建topic功能。 - true：开启 - false：关闭  当您选择开启，表示生产或消费一个未创建的Topic时，会自动创建一个包含3个分区和3个副本的Topic。  默认是false关闭。
    * storageSpecCode  存储IO规格。  取值范围：   - dms.physical.storage.high.v2：使用高IO的磁盘类型。   - dms.physical.storage.ultra.v2：使用超高IO的磁盘类型。  如何选择磁盘类型请参考《云硬盘 [产品介绍](tag:hws,hws_hk,hws_eu,cmcc)[用户指南](tag:otc,g42,hk_g42,ctc,tm,hk_tm,sbc,ocb,hws_ocb)》的“磁盘类型及性能介绍”。
    * enterpriseProjectId  企业项目ID。若为企业项目帐号，该参数必填。
    * tags  标签列表。
    * archType  CPU架构。当前只支持X86架构。  取值范围：   - X86
    * vpcClientPlain  VPC内网明文访问。
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
            'kafkaManagerUser' => 'setKafkaManagerUser',
            'kafkaManagerPassword' => 'setKafkaManagerPassword',
            'maintainBegin' => 'setMaintainBegin',
            'maintainEnd' => 'setMaintainEnd',
            'enablePublicip' => 'setEnablePublicip',
            'publicipId' => 'setPublicipId',
            'sslEnable' => 'setSslEnable',
            'kafkaSecurityProtocol' => 'setKafkaSecurityProtocol',
            'saslEnabledMechanisms' => 'setSaslEnabledMechanisms',
            'retentionPolicy' => 'setRetentionPolicy',
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
    * name  实例名称。  由英文字符开头，只能由英文字母、数字、中划线、下划线组成，长度为4~64的字符。
    * description  实例的描述信息。  长度不超过1024的字符串。  > \\与\"在json报文中属于特殊字符，如果参数值中需要显示\\或者\"字符，请在字符前增加转义字符\\，比如\\\\或者\\\"。
    * engine  消息引擎。取值填写为：kafka。
    * engineVersion  消息引擎的版本。取值填写为：   - 1.1.0   [- 2.3.0](tag:g42,tm,hk_g42,ctc,hk_tm)   - 2.7
    * brokerNum  代理个数。
    * storageSpace  消息存储空间，单位GB。   - Kafka实例规格为c6.2u4g.cluster时，存储空间取值范围300GB ~ 300000GB。   - Kafka实例规格为c6.4u8g.cluster时，存储空间取值范围300GB ~ 600000GB。   - Kafka实例规格为c6.8u16g.cluster时，存储空间取值范围300GB ~ [1500000](tag:hws,hws_hk,ocb,hws_ocb)[900000](tag:g42,tm,hk_g42,ctc,hk_tm,hws_eu)GB。   - Kafka实例规格为c6.12u24g.cluster时，存储空间取值范围300GB ~ [1500000](tag:hws,hws_hk,ocb,hws_ocb)[900000](tag:g42,tm,hk_g42,ctc,hk_tm,hws_eu)GB。   - Kafka实例规格为c6.16u32g.cluster时，存储空间取值范围300GB ~ [1500000](tag:hws,hws_hk,ocb,hws_ocb)[900000](tag:g42,tm,hk_g42,ctc,hk_tm,hws_eu)GB。
    * accessUser  当ssl_enable为true时，该参数必选，ssl_enable为false时，该参数无效。  认证用户名，只能由英文字母开头且由英文字母、数字、中划线、下划线组成，长度为4~64的字符。
    * password  当ssl_enable为true时，该参数必选，ssl_enable为false时，该参数无效。  实例的认证密码。  复杂度要求： - 输入长度为8到32位的字符串。 - 必须包含如下四种字符中的两种组合：   - 小写字母   - 大写字母   - 数字   - 特殊字符包括（`~!@#$%^&*()-_=+\\|[{}]:'\",<.>/?）
    * vpcId  虚拟私有云ID。  获取方法如下：登录虚拟私有云服务的控制台界面，在虚拟私有云的详情页面查找VPC ID。
    * securityGroupId  指定实例所属的安全组。  获取方法如下：登录虚拟私有云服务的控制台界面，在安全组的详情页面查找安全组ID。
    * subnetId  子网信息。  获取方法如下：登录虚拟私有云服务的控制台界面，单击VPC下的子网，进入子网详情页面，查找网络ID。
    * availableZones  创建节点到指定且有资源的可用区ID。请参考[查询可用区信息](ListAvailableZones.xml)获取可用区ID。  该参数不能为空数组或者数组的值为空。  创建Kafka实例，支持节点部署在1个或3个及3个以上的可用区。在为节点指定可用区时，用逗号分隔开。
    * productId  产品ID。  产品ID可以从[查询产品规格列表](ListEngineProducts.xml)获取。
    * kafkaManagerUser  表示登录Kafka Manager的用户名。只能由英文字母、数字、中划线组成，长度为4~64的字符。
    * kafkaManagerPassword  表示登录Kafka Manager的密码。  复杂度要求：   - 输入长度为8到32位的字符串。   - 必须包含如下四种字符中的两种组合：       - 小写字母       - 大写字母       - 数字       - 特殊字符包括（`~!@#$%^&*()-_=+\\|[{}]:'\",<.>/?）
    * maintainBegin  维护时间窗开始时间，格式为HH:mm。 - 维护时间窗开始和结束时间必须为指定的时间段。 - 开始时间必须为22:00、02:00、06:00、10:00、14:00和18:00。 - 该参数不能单独为空，若该值为空，则结束时间也为空。系统分配一个默认开始时间02:00。
    * maintainEnd  维护时间窗结束时间，格式为HH:mm。 - 维护时间窗开始和结束时间必须为指定的时间段。 - 结束时间在开始时间基础上加四个小时，即当开始时间为22:00时，结束时间为02:00。 - 该参数不能单独为空，若该值为空，则开始时间也为空，系统分配一个默认结束时间06:00。
    * enablePublicip  是否开启公网访问功能。默认不开启公网。 - true：开启 - false：不开启
    * publicipId  实例绑定的弹性IP地址的ID。  以英文逗号隔开多个弹性IP地址的ID。  如果开启了公网访问功能（即enable_publicip为true），该字段为必选。
    * sslEnable  是否打开SSL加密访问。  实例创建后将不支持动态开启和关闭。  - true：打开SSL加密访问。 - false：不打开SSL加密访问。
    * kafkaSecurityProtocol  开启SASL后使用的安全协议，如果开启了SASL认证功能（即ssl_enable=true），该字段为必选。  若该字段值为空，默认开启SASL_SSL认证机制。  实例创建后将不支持动态开启和关闭。  - SASL_SSL: 采用SSL证书进行加密传输，支持帐号密码认证，安全性更高。 - SASL_PLAINTEXT: 明文传输，支持帐号密码认证，性能更好，仅支持SCRAM-SHA-512机制。
    * saslEnabledMechanisms  开启SASL后使用的认证机制，如果开启了SASL认证功能（即ssl_enable=true），该字段为必选。  若该字段值为空，默认开启PLAIN认证机制。  选择其一进行SASL认证即可，支持同时开启两种认证机制。 取值如下： - PLAIN: 简单的用户名密码校验。 - SCRAM-SHA-512: 用户凭证校验，安全性比PLAIN机制更高。
    * retentionPolicy  磁盘的容量到达容量阈值后，对于消息的处理策略。  取值如下： - produce_reject：表示拒绝消息写入。 - time_base：表示自动删除最老消息。
    * diskEncryptedEnable  是否开启磁盘加密。
    * diskEncryptedKey  磁盘加密key，未开启磁盘加密时为空
    * connectorEnable  是否开启消息转储功能。  默认不开启消息转储。
    * enableAutoTopic  是否打开kafka自动创建topic功能。 - true：开启 - false：关闭  当您选择开启，表示生产或消费一个未创建的Topic时，会自动创建一个包含3个分区和3个副本的Topic。  默认是false关闭。
    * storageSpecCode  存储IO规格。  取值范围：   - dms.physical.storage.high.v2：使用高IO的磁盘类型。   - dms.physical.storage.ultra.v2：使用超高IO的磁盘类型。  如何选择磁盘类型请参考《云硬盘 [产品介绍](tag:hws,hws_hk,hws_eu,cmcc)[用户指南](tag:otc,g42,hk_g42,ctc,tm,hk_tm,sbc,ocb,hws_ocb)》的“磁盘类型及性能介绍”。
    * enterpriseProjectId  企业项目ID。若为企业项目帐号，该参数必填。
    * tags  标签列表。
    * archType  CPU架构。当前只支持X86架构。  取值范围：   - X86
    * vpcClientPlain  VPC内网明文访问。
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
            'kafkaManagerUser' => 'getKafkaManagerUser',
            'kafkaManagerPassword' => 'getKafkaManagerPassword',
            'maintainBegin' => 'getMaintainBegin',
            'maintainEnd' => 'getMaintainEnd',
            'enablePublicip' => 'getEnablePublicip',
            'publicipId' => 'getPublicipId',
            'sslEnable' => 'getSslEnable',
            'kafkaSecurityProtocol' => 'getKafkaSecurityProtocol',
            'saslEnabledMechanisms' => 'getSaslEnabledMechanisms',
            'retentionPolicy' => 'getRetentionPolicy',
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
    const ENGINE_VERSION__1_1_0 = '1.1.0';
    const ENGINE_VERSION__2_3_0 = '2.3.0';
    const ENGINE_VERSION__2_7 = '2.7';
    const SASL_ENABLED_MECHANISMS_PLAIN = 'PLAIN';
    const SASL_ENABLED_MECHANISMS_SCRAM_SHA_512 = 'SCRAM-SHA-512';
    const RETENTION_POLICY_TIME_BASE = 'time_base';
    const RETENTION_POLICY_PRODUCE_REJECT = 'produce_reject';
    const STORAGE_SPEC_CODE_DMS_PHYSICAL_STORAGE_HIGH_V2 = 'dms.physical.storage.high.v2';
    const STORAGE_SPEC_CODE_DMS_PHYSICAL_STORAGE_ULTRA_V2 = 'dms.physical.storage.ultra.v2';
    

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
    public function getEngineVersionAllowableValues()
    {
        return [
            self::ENGINE_VERSION__1_1_0,
            self::ENGINE_VERSION__2_3_0,
            self::ENGINE_VERSION__2_7,
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
        $this->container['kafkaManagerUser'] = isset($data['kafkaManagerUser']) ? $data['kafkaManagerUser'] : null;
        $this->container['kafkaManagerPassword'] = isset($data['kafkaManagerPassword']) ? $data['kafkaManagerPassword'] : null;
        $this->container['maintainBegin'] = isset($data['maintainBegin']) ? $data['maintainBegin'] : null;
        $this->container['maintainEnd'] = isset($data['maintainEnd']) ? $data['maintainEnd'] : null;
        $this->container['enablePublicip'] = isset($data['enablePublicip']) ? $data['enablePublicip'] : null;
        $this->container['publicipId'] = isset($data['publicipId']) ? $data['publicipId'] : null;
        $this->container['sslEnable'] = isset($data['sslEnable']) ? $data['sslEnable'] : null;
        $this->container['kafkaSecurityProtocol'] = isset($data['kafkaSecurityProtocol']) ? $data['kafkaSecurityProtocol'] : null;
        $this->container['saslEnabledMechanisms'] = isset($data['saslEnabledMechanisms']) ? $data['saslEnabledMechanisms'] : null;
        $this->container['retentionPolicy'] = isset($data['retentionPolicy']) ? $data['retentionPolicy'] : null;
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
            $allowedValues = $this->getEngineVersionAllowableValues();
                if (!is_null($this->container['engineVersion']) && !in_array($this->container['engineVersion'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'engineVersion', must be one of '%s'",
                implode("', '", $allowedValues)
                );
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
    *  实例名称。  由英文字符开头，只能由英文字母、数字、中划线、下划线组成，长度为4~64的字符。
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
    * @param string $name 实例名称。  由英文字符开头，只能由英文字母、数字、中划线、下划线组成，长度为4~64的字符。
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
    *  实例的描述信息。  长度不超过1024的字符串。  > \\与\"在json报文中属于特殊字符，如果参数值中需要显示\\或者\"字符，请在字符前增加转义字符\\，比如\\\\或者\\\"。
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
    * @param string|null $description 实例的描述信息。  长度不超过1024的字符串。  > \\与\"在json报文中属于特殊字符，如果参数值中需要显示\\或者\"字符，请在字符前增加转义字符\\，比如\\\\或者\\\"。
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
    *  消息引擎。取值填写为：kafka。
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
    * @param string $engine 消息引擎。取值填写为：kafka。
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
    *  消息引擎的版本。取值填写为：   - 1.1.0   [- 2.3.0](tag:g42,tm,hk_g42,ctc,hk_tm)   - 2.7
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
    * @param string $engineVersion 消息引擎的版本。取值填写为：   - 1.1.0   [- 2.3.0](tag:g42,tm,hk_g42,ctc,hk_tm)   - 2.7
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
    *  代理个数。
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
    * @param int $brokerNum 代理个数。
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
    *  消息存储空间，单位GB。   - Kafka实例规格为c6.2u4g.cluster时，存储空间取值范围300GB ~ 300000GB。   - Kafka实例规格为c6.4u8g.cluster时，存储空间取值范围300GB ~ 600000GB。   - Kafka实例规格为c6.8u16g.cluster时，存储空间取值范围300GB ~ [1500000](tag:hws,hws_hk,ocb,hws_ocb)[900000](tag:g42,tm,hk_g42,ctc,hk_tm,hws_eu)GB。   - Kafka实例规格为c6.12u24g.cluster时，存储空间取值范围300GB ~ [1500000](tag:hws,hws_hk,ocb,hws_ocb)[900000](tag:g42,tm,hk_g42,ctc,hk_tm,hws_eu)GB。   - Kafka实例规格为c6.16u32g.cluster时，存储空间取值范围300GB ~ [1500000](tag:hws,hws_hk,ocb,hws_ocb)[900000](tag:g42,tm,hk_g42,ctc,hk_tm,hws_eu)GB。
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
    * @param int $storageSpace 消息存储空间，单位GB。   - Kafka实例规格为c6.2u4g.cluster时，存储空间取值范围300GB ~ 300000GB。   - Kafka实例规格为c6.4u8g.cluster时，存储空间取值范围300GB ~ 600000GB。   - Kafka实例规格为c6.8u16g.cluster时，存储空间取值范围300GB ~ [1500000](tag:hws,hws_hk,ocb,hws_ocb)[900000](tag:g42,tm,hk_g42,ctc,hk_tm,hws_eu)GB。   - Kafka实例规格为c6.12u24g.cluster时，存储空间取值范围300GB ~ [1500000](tag:hws,hws_hk,ocb,hws_ocb)[900000](tag:g42,tm,hk_g42,ctc,hk_tm,hws_eu)GB。   - Kafka实例规格为c6.16u32g.cluster时，存储空间取值范围300GB ~ [1500000](tag:hws,hws_hk,ocb,hws_ocb)[900000](tag:g42,tm,hk_g42,ctc,hk_tm,hws_eu)GB。
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
    *  当ssl_enable为true时，该参数必选，ssl_enable为false时，该参数无效。  认证用户名，只能由英文字母开头且由英文字母、数字、中划线、下划线组成，长度为4~64的字符。
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
    * @param string|null $accessUser 当ssl_enable为true时，该参数必选，ssl_enable为false时，该参数无效。  认证用户名，只能由英文字母开头且由英文字母、数字、中划线、下划线组成，长度为4~64的字符。
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
    *  当ssl_enable为true时，该参数必选，ssl_enable为false时，该参数无效。  实例的认证密码。  复杂度要求： - 输入长度为8到32位的字符串。 - 必须包含如下四种字符中的两种组合：   - 小写字母   - 大写字母   - 数字   - 特殊字符包括（`~!@#$%^&*()-_=+\\|[{}]:'\",<.>/?）
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
    * @param string|null $password 当ssl_enable为true时，该参数必选，ssl_enable为false时，该参数无效。  实例的认证密码。  复杂度要求： - 输入长度为8到32位的字符串。 - 必须包含如下四种字符中的两种组合：   - 小写字母   - 大写字母   - 数字   - 特殊字符包括（`~!@#$%^&*()-_=+\\|[{}]:'\",<.>/?）
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
    *  虚拟私有云ID。  获取方法如下：登录虚拟私有云服务的控制台界面，在虚拟私有云的详情页面查找VPC ID。
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
    * @param string $vpcId 虚拟私有云ID。  获取方法如下：登录虚拟私有云服务的控制台界面，在虚拟私有云的详情页面查找VPC ID。
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
    *  指定实例所属的安全组。  获取方法如下：登录虚拟私有云服务的控制台界面，在安全组的详情页面查找安全组ID。
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
    * @param string $securityGroupId 指定实例所属的安全组。  获取方法如下：登录虚拟私有云服务的控制台界面，在安全组的详情页面查找安全组ID。
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
    *  子网信息。  获取方法如下：登录虚拟私有云服务的控制台界面，单击VPC下的子网，进入子网详情页面，查找网络ID。
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
    * @param string $subnetId 子网信息。  获取方法如下：登录虚拟私有云服务的控制台界面，单击VPC下的子网，进入子网详情页面，查找网络ID。
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
    *  创建节点到指定且有资源的可用区ID。请参考[查询可用区信息](ListAvailableZones.xml)获取可用区ID。  该参数不能为空数组或者数组的值为空。  创建Kafka实例，支持节点部署在1个或3个及3个以上的可用区。在为节点指定可用区时，用逗号分隔开。
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
    * @param string[] $availableZones 创建节点到指定且有资源的可用区ID。请参考[查询可用区信息](ListAvailableZones.xml)获取可用区ID。  该参数不能为空数组或者数组的值为空。  创建Kafka实例，支持节点部署在1个或3个及3个以上的可用区。在为节点指定可用区时，用逗号分隔开。
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
    *  产品ID。  产品ID可以从[查询产品规格列表](ListEngineProducts.xml)获取。
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
    * @param string $productId 产品ID。  产品ID可以从[查询产品规格列表](ListEngineProducts.xml)获取。
    *
    * @return $this
    */
    public function setProductId($productId)
    {
        $this->container['productId'] = $productId;
        return $this;
    }

    /**
    * Gets kafkaManagerUser
    *  表示登录Kafka Manager的用户名。只能由英文字母、数字、中划线组成，长度为4~64的字符。
    *
    * @return string|null
    */
    public function getKafkaManagerUser()
    {
        return $this->container['kafkaManagerUser'];
    }

    /**
    * Sets kafkaManagerUser
    *
    * @param string|null $kafkaManagerUser 表示登录Kafka Manager的用户名。只能由英文字母、数字、中划线组成，长度为4~64的字符。
    *
    * @return $this
    */
    public function setKafkaManagerUser($kafkaManagerUser)
    {
        $this->container['kafkaManagerUser'] = $kafkaManagerUser;
        return $this;
    }

    /**
    * Gets kafkaManagerPassword
    *  表示登录Kafka Manager的密码。  复杂度要求：   - 输入长度为8到32位的字符串。   - 必须包含如下四种字符中的两种组合：       - 小写字母       - 大写字母       - 数字       - 特殊字符包括（`~!@#$%^&*()-_=+\\|[{}]:'\",<.>/?）
    *
    * @return string|null
    */
    public function getKafkaManagerPassword()
    {
        return $this->container['kafkaManagerPassword'];
    }

    /**
    * Sets kafkaManagerPassword
    *
    * @param string|null $kafkaManagerPassword 表示登录Kafka Manager的密码。  复杂度要求：   - 输入长度为8到32位的字符串。   - 必须包含如下四种字符中的两种组合：       - 小写字母       - 大写字母       - 数字       - 特殊字符包括（`~!@#$%^&*()-_=+\\|[{}]:'\",<.>/?）
    *
    * @return $this
    */
    public function setKafkaManagerPassword($kafkaManagerPassword)
    {
        $this->container['kafkaManagerPassword'] = $kafkaManagerPassword;
        return $this;
    }

    /**
    * Gets maintainBegin
    *  维护时间窗开始时间，格式为HH:mm。 - 维护时间窗开始和结束时间必须为指定的时间段。 - 开始时间必须为22:00、02:00、06:00、10:00、14:00和18:00。 - 该参数不能单独为空，若该值为空，则结束时间也为空。系统分配一个默认开始时间02:00。
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
    * @param string|null $maintainBegin 维护时间窗开始时间，格式为HH:mm。 - 维护时间窗开始和结束时间必须为指定的时间段。 - 开始时间必须为22:00、02:00、06:00、10:00、14:00和18:00。 - 该参数不能单独为空，若该值为空，则结束时间也为空。系统分配一个默认开始时间02:00。
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
    *  维护时间窗结束时间，格式为HH:mm。 - 维护时间窗开始和结束时间必须为指定的时间段。 - 结束时间在开始时间基础上加四个小时，即当开始时间为22:00时，结束时间为02:00。 - 该参数不能单独为空，若该值为空，则开始时间也为空，系统分配一个默认结束时间06:00。
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
    * @param string|null $maintainEnd 维护时间窗结束时间，格式为HH:mm。 - 维护时间窗开始和结束时间必须为指定的时间段。 - 结束时间在开始时间基础上加四个小时，即当开始时间为22:00时，结束时间为02:00。 - 该参数不能单独为空，若该值为空，则开始时间也为空，系统分配一个默认结束时间06:00。
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
    *  是否开启公网访问功能。默认不开启公网。 - true：开启 - false：不开启
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
    * @param bool|null $enablePublicip 是否开启公网访问功能。默认不开启公网。 - true：开启 - false：不开启
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
    *  实例绑定的弹性IP地址的ID。  以英文逗号隔开多个弹性IP地址的ID。  如果开启了公网访问功能（即enable_publicip为true），该字段为必选。
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
    * @param string|null $publicipId 实例绑定的弹性IP地址的ID。  以英文逗号隔开多个弹性IP地址的ID。  如果开启了公网访问功能（即enable_publicip为true），该字段为必选。
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
    *  是否打开SSL加密访问。  实例创建后将不支持动态开启和关闭。  - true：打开SSL加密访问。 - false：不打开SSL加密访问。
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
    * @param bool|null $sslEnable 是否打开SSL加密访问。  实例创建后将不支持动态开启和关闭。  - true：打开SSL加密访问。 - false：不打开SSL加密访问。
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
    *  开启SASL后使用的安全协议，如果开启了SASL认证功能（即ssl_enable=true），该字段为必选。  若该字段值为空，默认开启SASL_SSL认证机制。  实例创建后将不支持动态开启和关闭。  - SASL_SSL: 采用SSL证书进行加密传输，支持帐号密码认证，安全性更高。 - SASL_PLAINTEXT: 明文传输，支持帐号密码认证，性能更好，仅支持SCRAM-SHA-512机制。
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
    * @param string|null $kafkaSecurityProtocol 开启SASL后使用的安全协议，如果开启了SASL认证功能（即ssl_enable=true），该字段为必选。  若该字段值为空，默认开启SASL_SSL认证机制。  实例创建后将不支持动态开启和关闭。  - SASL_SSL: 采用SSL证书进行加密传输，支持帐号密码认证，安全性更高。 - SASL_PLAINTEXT: 明文传输，支持帐号密码认证，性能更好，仅支持SCRAM-SHA-512机制。
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
    *  开启SASL后使用的认证机制，如果开启了SASL认证功能（即ssl_enable=true），该字段为必选。  若该字段值为空，默认开启PLAIN认证机制。  选择其一进行SASL认证即可，支持同时开启两种认证机制。 取值如下： - PLAIN: 简单的用户名密码校验。 - SCRAM-SHA-512: 用户凭证校验，安全性比PLAIN机制更高。
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
    * @param string[]|null $saslEnabledMechanisms 开启SASL后使用的认证机制，如果开启了SASL认证功能（即ssl_enable=true），该字段为必选。  若该字段值为空，默认开启PLAIN认证机制。  选择其一进行SASL认证即可，支持同时开启两种认证机制。 取值如下： - PLAIN: 简单的用户名密码校验。 - SCRAM-SHA-512: 用户凭证校验，安全性比PLAIN机制更高。
    *
    * @return $this
    */
    public function setSaslEnabledMechanisms($saslEnabledMechanisms)
    {
        $this->container['saslEnabledMechanisms'] = $saslEnabledMechanisms;
        return $this;
    }

    /**
    * Gets retentionPolicy
    *  磁盘的容量到达容量阈值后，对于消息的处理策略。  取值如下： - produce_reject：表示拒绝消息写入。 - time_base：表示自动删除最老消息。
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
    * @param string|null $retentionPolicy 磁盘的容量到达容量阈值后，对于消息的处理策略。  取值如下： - produce_reject：表示拒绝消息写入。 - time_base：表示自动删除最老消息。
    *
    * @return $this
    */
    public function setRetentionPolicy($retentionPolicy)
    {
        $this->container['retentionPolicy'] = $retentionPolicy;
        return $this;
    }

    /**
    * Gets diskEncryptedEnable
    *  是否开启磁盘加密。
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
    * @param bool|null $diskEncryptedEnable 是否开启磁盘加密。
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
    *  磁盘加密key，未开启磁盘加密时为空
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
    * @param string|null $diskEncryptedKey 磁盘加密key，未开启磁盘加密时为空
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
    *  是否开启消息转储功能。  默认不开启消息转储。
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
    * @param bool|null $connectorEnable 是否开启消息转储功能。  默认不开启消息转储。
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
    *  是否打开kafka自动创建topic功能。 - true：开启 - false：关闭  当您选择开启，表示生产或消费一个未创建的Topic时，会自动创建一个包含3个分区和3个副本的Topic。  默认是false关闭。
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
    * @param bool|null $enableAutoTopic 是否打开kafka自动创建topic功能。 - true：开启 - false：关闭  当您选择开启，表示生产或消费一个未创建的Topic时，会自动创建一个包含3个分区和3个副本的Topic。  默认是false关闭。
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
    *  存储IO规格。  取值范围：   - dms.physical.storage.high.v2：使用高IO的磁盘类型。   - dms.physical.storage.ultra.v2：使用超高IO的磁盘类型。  如何选择磁盘类型请参考《云硬盘 [产品介绍](tag:hws,hws_hk,hws_eu,cmcc)[用户指南](tag:otc,g42,hk_g42,ctc,tm,hk_tm,sbc,ocb,hws_ocb)》的“磁盘类型及性能介绍”。
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
    * @param string $storageSpecCode 存储IO规格。  取值范围：   - dms.physical.storage.high.v2：使用高IO的磁盘类型。   - dms.physical.storage.ultra.v2：使用超高IO的磁盘类型。  如何选择磁盘类型请参考《云硬盘 [产品介绍](tag:hws,hws_hk,hws_eu,cmcc)[用户指南](tag:otc,g42,hk_g42,ctc,tm,hk_tm,sbc,ocb,hws_ocb)》的“磁盘类型及性能介绍”。
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
    *  企业项目ID。若为企业项目帐号，该参数必填。
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
    * @param string|null $enterpriseProjectId 企业项目ID。若为企业项目帐号，该参数必填。
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
    *  标签列表。
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
    * @param \HuaweiCloud\SDK\Kafka\V2\Model\TagEntity[]|null $tags 标签列表。
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
    *  CPU架构。当前只支持X86架构。  取值范围：   - X86
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
    * @param string|null $archType CPU架构。当前只支持X86架构。  取值范围：   - X86
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
    *  VPC内网明文访问。
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
    * @param bool|null $vpcClientPlain VPC内网明文访问。
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

