<?php

namespace HuaweiCloud\SDK\Kafka\V2\Model;

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
    * name  实例名称。  由英文字符开头，只能由英文字母、数字、中划线、下划线组成，长度为4~64的字符。
    * description  实例的描述信息。  长度不超过1024的字符串。[且字符串不能包含\">\"与\"<\"，字符串首字符不能为\"=\",\"+\",\"-\",\"@\"的全角和半角字符。](tag:hcs,fcs)  > \\与\"在json报文中属于特殊字符，如果参数值中需要显示\\或者\"字符，请在字符前增加转义字符\\，比如\\\\或者\\\"。
    * engine  消息引擎。取值填写为：kafka。
    * engineVersion  消息引擎的版本。取值填写为：   - 1.1.0   [- 2.3.0](tag:ocb,hws_ocb,sbc,hk_sbc,cmcc,hws_eu,dt,ctc,g42,hk_g42,tm,hk_tm)   - 2.7   [- 3.x](tag:hws,hws_hk,dt,sbc,hcs,fcs,ctc,tm,hk_tm,hws_eu)
    * specification  [新规格实例：Kafka实例业务TPS规格，取值范围：   - c6.2u4g.cluster   - c6.4u8g.cluster   - c6.8u16g.cluster   - c6.12u24g.cluster   - c6.16u32g.cluster  老规格实例：](tag:hws,hws_hk) Kafka实例的基准带宽，表示单位时间内传送的最大数据量，单位MB。取值范围：   - 100MB   - 300MB   - 600MB   - 1200MB  注：此参数无需设置，其取值实际是由产品ID（product_id）决定。
    * brokerNum  代理个数。 [取值范围:  - 老规格实例此参数无需设置  - 新规格必须设置，取值范围：3 ~ 50。](tag:hws,hws_hk,g42,tm,hk_g42,hk_tm,ctc,dt,ocb,hws_ocb,sbc,hk_sbc) [此参数无需设置](tag:cmcc)
    * storageSpace  消息存储空间，单位GB。   - Kafka实例规格为100MB时，存储空间取值范围600GB ~ 90000GB。   - Kafka实例规格为300MB时，存储空间取值范围1200GB ~ 90000GB。   - Kafka实例规格为600MB时，存储空间取值范围2400GB ~ 90000GB。   - Kafka实例规格为1200MB，存储空间取值范围4800GB ~ 90000GB   [- Kafka实例规格为c6.2u4g.cluster时，存储空间取值范围300GB ~ 300000GB。   - Kafka实例规格为c6.4u8g.cluster时，存储空间取值范围300GB ~ 600000GB。   - Kafka实例规格为c6.8u16g.cluster时，存储空间取值范围300GB ~ 900000GB。   - Kafka实例规格为c6.12u24g.cluster时，存储空间取值范围300GB ~ 900000GB。   - Kafka实例规格为c6.16u32g.cluster时，存储空间取值范围300GB ~ 900000GB。](tag:hws,hws_hk)
    * partitionNum  Kafka实例的最大分区数量。   - 参数specification为100MB时，取值300   - 参数specification为300MB时，取值900   - 参数specification为600MB时，取值1800   - 参数specification为1200MB时，取值1800    [新规格实例此参数无需设置，每种规格对应的分区数上限参考：https://support.huaweicloud.com/productdesc-kafka/Kafka-specification.html](tag:hws)   [新规格实例此参数无需设置，每种规格对应的分区数上限参考：https://support.huaweicloud.com/intl/zh-cn/productdesc-kafka/Kafka-specification.html](tag:hws_hk)
    * accessUser  当ssl_enable为true时，该参数必选，ssl_enable为false时，该参数无效。  认证用户名，只能由英文字母、数字、中划线组成，长度为4~64的字符。
    * password  当ssl_enable为true时，该参数必选，ssl_enable为false时，该参数无效。  实例的认证密码。  复杂度要求： - 输入长度为8到32位的字符串。 - 必须包含如下四种字符中的三种组合：   - 小写字母   - 大写字母   - 数字   - 特殊字符包括（`~!@#$%^&*()-_=+\\|[{}]:'\",<.>/?）和空格，并且不能以-开头
    * vpcId  虚拟私有云ID。  获取方法如下：登录虚拟私有云服务的控制台界面，在虚拟私有云的详情页面查找VPC ID。
    * securityGroupId  指定实例所属的安全组。  获取方法如下：登录虚拟私有云服务的控制台界面，在安全组的详情页面查找安全组ID。
    * subnetId  子网信息。  获取方法如下：登录虚拟私有云服务的控制台界面，单击VPC下的子网，进入子网详情页面，查找网络ID。
    * availableZones  创建节点到指定且有资源的可用区ID。请参考[查询可用区信息](ListAvailableZones.xml)获取可用区ID。  该参数不能为空数组或者数组的值为空。 创建Kafka实例，支持节点部署在1个或3个及3个以上的可用区。在为节点指定可用区时，用逗号分隔开。
    * productId  产品ID。  产品ID可以从[查询产品规格列表](ListEngineProducts.xml)获取。 [创建kafka实例,支持的产品规格有: (product_id/specification/partition_num/storage_space)  00300-30308-0--0/100MB/300/600;  00300-30310-0--0/300MB/900/1200;  00300-30312-0--0/600MB/1800/2400;  00300-30314-0--0/1200MB/1800/4800](tag:dt)
    * maintainBegin  维护时间窗开始时间，格式为HH:mm。
    * maintainEnd  维护时间窗结束时间，格式为HH:mm。
    * enablePublicip  是否开启公网访问功能。默认不开启公网。 - true：开启 - false：不开启
    * publicBandwidth  表示公网带宽，单位是Mbit/s。   [取值范围：   - Kafka实例规格为100MB时，公网带宽取值范围3到900，且必须为实例节点个数的倍数。   - Kafka实例规格为300MB时，公网带宽取值范围3到900，且必须为实例节点个数的倍数。   - Kafka实例规格为600MB时，公网带宽取值范围4到1200，且必须为实例节点个数的倍数。   - Kafka实例规格为1200MB时，公网带宽取值范围8到2400，且必须为实例节点个数的倍数。](tag:hws,hws_hk,dt,ocb,hws_ocb,ctc,sbc,hk_sbc,cmcc,g42,tm,hk_g42,hk_tm)    [老规格实例取值范围：   - Kafka实例规格为100MB时，公网带宽取值范围3到900，且必须为实例节点个数的倍数。   - Kafka实例规格为300MB时，公网带宽取值范围3到900，且必须为实例节点个数的倍数。   - Kafka实例规格为600MB时，公网带宽取值范围4到1200，且必须为实例节点个数的倍数。   - Kafka实例规格为1200MB时，公网带宽取值范围8到2400，且必须为实例节点个数的倍数。    新规格实例取值范围：   - Kafka实例规格为c6.2u4g.cluster时，公网带宽取值范围3到250，且必须为实例节点个数的倍数。   - Kafka实例规格为c6.4u8g.cluster时，公网带宽取值范围3到500，且必须为实例节点个数的倍数。   - Kafka实例规格为c6.8u16g.cluster时，公网带宽取值范围4到1000，且必须为实例节点个数的倍数。   - Kafka实例规格为c6.12u24g.cluster时，公网带宽取值范围8到1500，且必须为实例节点个数的倍数。   -  Kafka实例规格为c6.16u32g.cluster时，公网带宽取值范围8到2000，且必须为实例节点个数的倍数。](tag:hws,hws_hk)
    * publicipId  实例绑定的弹性IP地址的ID。  以英文逗号隔开多个弹性IP地址的ID。  如果开启了公网访问功能（即enable_publicip为true），该字段为必选。
    * sslEnable  是否打开SSL加密访问。  实例创建后将不支持动态开启和关闭。  - true：打开SSL加密访问。 - false：不打开SSL加密访问。
    * kafkaSecurityProtocol  开启SASL后使用的安全协议。 - SASL_SSL: 使用SSL证书加密传输，支持账号密码认证，安全性更高。 - SASL_PLAINTEXT: 通过明文传输，支持账号密码认证，性能更好。  若该字段值为空，默认开启SASL_SSL认证机制。实例创建后，此参数不支持动态修改。 若创建实例时，使用了port_protocol参数，则Kafka的内网访问安全协议以及公网访问安全协议会使用port_protocol中的值，则此参数无效。
    * saslEnabledMechanisms  开启SASL后使用的认证机制，如果开启了SASL认证功能（即ssl_enable=true），该字段为必选。  若该字段值为空，默认开启PLAIN认证机制。  选择其一进行SASL认证即可，支持同时开启两种认证机制。 取值如下： - PLAIN: 简单的用户名密码校验。 - SCRAM-SHA-512: 用户凭证校验，安全性比PLAIN机制更高。
    * portProtocol  portProtocol
    * retentionPolicy  磁盘的容量到达容量阈值后，对于消息的处理策略。  取值如下： - produce_reject：表示拒绝消息写入。 - time_base：表示自动删除最老消息。
    * diskEncryptedEnable  是否开启磁盘加密。
    * diskEncryptedKey  磁盘加密key，未开启磁盘加密时为空
    * connectorEnable  是否开启消息转储功能。  默认不开启消息转储。
    * enableAutoTopic  是否打开Kafka自动创建Topic功能。 - true：开启 - false：关闭  当您选择开启，表示生产或消费一个未创建的Topic时，会自动创建一个包含3个分区和3个副本的Topic。  默认是false关闭。
    * storageSpecCode  存储IO规格。 [新老规格的实例的存储IO规格不相同，创建实例请选择对应的存储IO规格。 新规格实例取值范围：   - dms.physical.storage.high.v2：使用高IO的磁盘类型。   - dms.physical.storage.ultra.v2：使用超高IO的磁盘类型。  老规格实例取值范围：](tag:hc,hk)   - 参数specification为100MB/300MB时，取值dms.physical.storage.high或者dms.physical.storage.ultra   - 参数specification为600MB/1200MB时，取值dms.physical.storage.ultra  如何选择磁盘类型请参考《云硬盘 [产品介绍](tag:hws,hws_hk,hws_eu,cmcc)[用户指南](tag:dt,g42,hk_g42,ctc,tm,hk_tm,sbc,ocb,hws_ocb)》的“磁盘类型及性能介绍”。
    * enterpriseProjectId  企业项目ID。若为企业项目账号，该参数必填。
    * tags  标签列表。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'name' => 'string',
            'description' => 'string',
            'engine' => 'string',
            'engineVersion' => 'string',
            'specification' => 'string',
            'brokerNum' => 'int',
            'storageSpace' => 'int',
            'partitionNum' => 'int',
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
            'publicBandwidth' => 'int',
            'publicipId' => 'string',
            'sslEnable' => 'bool',
            'kafkaSecurityProtocol' => 'string',
            'saslEnabledMechanisms' => 'string[]',
            'portProtocol' => '\HuaweiCloud\SDK\Kafka\V2\Model\PortProtocol',
            'retentionPolicy' => 'string',
            'diskEncryptedEnable' => 'bool',
            'diskEncryptedKey' => 'string',
            'connectorEnable' => 'bool',
            'enableAutoTopic' => 'bool',
            'storageSpecCode' => 'string',
            'enterpriseProjectId' => 'string',
            'tags' => '\HuaweiCloud\SDK\Kafka\V2\Model\TagEntity[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * name  实例名称。  由英文字符开头，只能由英文字母、数字、中划线、下划线组成，长度为4~64的字符。
    * description  实例的描述信息。  长度不超过1024的字符串。[且字符串不能包含\">\"与\"<\"，字符串首字符不能为\"=\",\"+\",\"-\",\"@\"的全角和半角字符。](tag:hcs,fcs)  > \\与\"在json报文中属于特殊字符，如果参数值中需要显示\\或者\"字符，请在字符前增加转义字符\\，比如\\\\或者\\\"。
    * engine  消息引擎。取值填写为：kafka。
    * engineVersion  消息引擎的版本。取值填写为：   - 1.1.0   [- 2.3.0](tag:ocb,hws_ocb,sbc,hk_sbc,cmcc,hws_eu,dt,ctc,g42,hk_g42,tm,hk_tm)   - 2.7   [- 3.x](tag:hws,hws_hk,dt,sbc,hcs,fcs,ctc,tm,hk_tm,hws_eu)
    * specification  [新规格实例：Kafka实例业务TPS规格，取值范围：   - c6.2u4g.cluster   - c6.4u8g.cluster   - c6.8u16g.cluster   - c6.12u24g.cluster   - c6.16u32g.cluster  老规格实例：](tag:hws,hws_hk) Kafka实例的基准带宽，表示单位时间内传送的最大数据量，单位MB。取值范围：   - 100MB   - 300MB   - 600MB   - 1200MB  注：此参数无需设置，其取值实际是由产品ID（product_id）决定。
    * brokerNum  代理个数。 [取值范围:  - 老规格实例此参数无需设置  - 新规格必须设置，取值范围：3 ~ 50。](tag:hws,hws_hk,g42,tm,hk_g42,hk_tm,ctc,dt,ocb,hws_ocb,sbc,hk_sbc) [此参数无需设置](tag:cmcc)
    * storageSpace  消息存储空间，单位GB。   - Kafka实例规格为100MB时，存储空间取值范围600GB ~ 90000GB。   - Kafka实例规格为300MB时，存储空间取值范围1200GB ~ 90000GB。   - Kafka实例规格为600MB时，存储空间取值范围2400GB ~ 90000GB。   - Kafka实例规格为1200MB，存储空间取值范围4800GB ~ 90000GB   [- Kafka实例规格为c6.2u4g.cluster时，存储空间取值范围300GB ~ 300000GB。   - Kafka实例规格为c6.4u8g.cluster时，存储空间取值范围300GB ~ 600000GB。   - Kafka实例规格为c6.8u16g.cluster时，存储空间取值范围300GB ~ 900000GB。   - Kafka实例规格为c6.12u24g.cluster时，存储空间取值范围300GB ~ 900000GB。   - Kafka实例规格为c6.16u32g.cluster时，存储空间取值范围300GB ~ 900000GB。](tag:hws,hws_hk)
    * partitionNum  Kafka实例的最大分区数量。   - 参数specification为100MB时，取值300   - 参数specification为300MB时，取值900   - 参数specification为600MB时，取值1800   - 参数specification为1200MB时，取值1800    [新规格实例此参数无需设置，每种规格对应的分区数上限参考：https://support.huaweicloud.com/productdesc-kafka/Kafka-specification.html](tag:hws)   [新规格实例此参数无需设置，每种规格对应的分区数上限参考：https://support.huaweicloud.com/intl/zh-cn/productdesc-kafka/Kafka-specification.html](tag:hws_hk)
    * accessUser  当ssl_enable为true时，该参数必选，ssl_enable为false时，该参数无效。  认证用户名，只能由英文字母、数字、中划线组成，长度为4~64的字符。
    * password  当ssl_enable为true时，该参数必选，ssl_enable为false时，该参数无效。  实例的认证密码。  复杂度要求： - 输入长度为8到32位的字符串。 - 必须包含如下四种字符中的三种组合：   - 小写字母   - 大写字母   - 数字   - 特殊字符包括（`~!@#$%^&*()-_=+\\|[{}]:'\",<.>/?）和空格，并且不能以-开头
    * vpcId  虚拟私有云ID。  获取方法如下：登录虚拟私有云服务的控制台界面，在虚拟私有云的详情页面查找VPC ID。
    * securityGroupId  指定实例所属的安全组。  获取方法如下：登录虚拟私有云服务的控制台界面，在安全组的详情页面查找安全组ID。
    * subnetId  子网信息。  获取方法如下：登录虚拟私有云服务的控制台界面，单击VPC下的子网，进入子网详情页面，查找网络ID。
    * availableZones  创建节点到指定且有资源的可用区ID。请参考[查询可用区信息](ListAvailableZones.xml)获取可用区ID。  该参数不能为空数组或者数组的值为空。 创建Kafka实例，支持节点部署在1个或3个及3个以上的可用区。在为节点指定可用区时，用逗号分隔开。
    * productId  产品ID。  产品ID可以从[查询产品规格列表](ListEngineProducts.xml)获取。 [创建kafka实例,支持的产品规格有: (product_id/specification/partition_num/storage_space)  00300-30308-0--0/100MB/300/600;  00300-30310-0--0/300MB/900/1200;  00300-30312-0--0/600MB/1800/2400;  00300-30314-0--0/1200MB/1800/4800](tag:dt)
    * maintainBegin  维护时间窗开始时间，格式为HH:mm。
    * maintainEnd  维护时间窗结束时间，格式为HH:mm。
    * enablePublicip  是否开启公网访问功能。默认不开启公网。 - true：开启 - false：不开启
    * publicBandwidth  表示公网带宽，单位是Mbit/s。   [取值范围：   - Kafka实例规格为100MB时，公网带宽取值范围3到900，且必须为实例节点个数的倍数。   - Kafka实例规格为300MB时，公网带宽取值范围3到900，且必须为实例节点个数的倍数。   - Kafka实例规格为600MB时，公网带宽取值范围4到1200，且必须为实例节点个数的倍数。   - Kafka实例规格为1200MB时，公网带宽取值范围8到2400，且必须为实例节点个数的倍数。](tag:hws,hws_hk,dt,ocb,hws_ocb,ctc,sbc,hk_sbc,cmcc,g42,tm,hk_g42,hk_tm)    [老规格实例取值范围：   - Kafka实例规格为100MB时，公网带宽取值范围3到900，且必须为实例节点个数的倍数。   - Kafka实例规格为300MB时，公网带宽取值范围3到900，且必须为实例节点个数的倍数。   - Kafka实例规格为600MB时，公网带宽取值范围4到1200，且必须为实例节点个数的倍数。   - Kafka实例规格为1200MB时，公网带宽取值范围8到2400，且必须为实例节点个数的倍数。    新规格实例取值范围：   - Kafka实例规格为c6.2u4g.cluster时，公网带宽取值范围3到250，且必须为实例节点个数的倍数。   - Kafka实例规格为c6.4u8g.cluster时，公网带宽取值范围3到500，且必须为实例节点个数的倍数。   - Kafka实例规格为c6.8u16g.cluster时，公网带宽取值范围4到1000，且必须为实例节点个数的倍数。   - Kafka实例规格为c6.12u24g.cluster时，公网带宽取值范围8到1500，且必须为实例节点个数的倍数。   -  Kafka实例规格为c6.16u32g.cluster时，公网带宽取值范围8到2000，且必须为实例节点个数的倍数。](tag:hws,hws_hk)
    * publicipId  实例绑定的弹性IP地址的ID。  以英文逗号隔开多个弹性IP地址的ID。  如果开启了公网访问功能（即enable_publicip为true），该字段为必选。
    * sslEnable  是否打开SSL加密访问。  实例创建后将不支持动态开启和关闭。  - true：打开SSL加密访问。 - false：不打开SSL加密访问。
    * kafkaSecurityProtocol  开启SASL后使用的安全协议。 - SASL_SSL: 使用SSL证书加密传输，支持账号密码认证，安全性更高。 - SASL_PLAINTEXT: 通过明文传输，支持账号密码认证，性能更好。  若该字段值为空，默认开启SASL_SSL认证机制。实例创建后，此参数不支持动态修改。 若创建实例时，使用了port_protocol参数，则Kafka的内网访问安全协议以及公网访问安全协议会使用port_protocol中的值，则此参数无效。
    * saslEnabledMechanisms  开启SASL后使用的认证机制，如果开启了SASL认证功能（即ssl_enable=true），该字段为必选。  若该字段值为空，默认开启PLAIN认证机制。  选择其一进行SASL认证即可，支持同时开启两种认证机制。 取值如下： - PLAIN: 简单的用户名密码校验。 - SCRAM-SHA-512: 用户凭证校验，安全性比PLAIN机制更高。
    * portProtocol  portProtocol
    * retentionPolicy  磁盘的容量到达容量阈值后，对于消息的处理策略。  取值如下： - produce_reject：表示拒绝消息写入。 - time_base：表示自动删除最老消息。
    * diskEncryptedEnable  是否开启磁盘加密。
    * diskEncryptedKey  磁盘加密key，未开启磁盘加密时为空
    * connectorEnable  是否开启消息转储功能。  默认不开启消息转储。
    * enableAutoTopic  是否打开Kafka自动创建Topic功能。 - true：开启 - false：关闭  当您选择开启，表示生产或消费一个未创建的Topic时，会自动创建一个包含3个分区和3个副本的Topic。  默认是false关闭。
    * storageSpecCode  存储IO规格。 [新老规格的实例的存储IO规格不相同，创建实例请选择对应的存储IO规格。 新规格实例取值范围：   - dms.physical.storage.high.v2：使用高IO的磁盘类型。   - dms.physical.storage.ultra.v2：使用超高IO的磁盘类型。  老规格实例取值范围：](tag:hc,hk)   - 参数specification为100MB/300MB时，取值dms.physical.storage.high或者dms.physical.storage.ultra   - 参数specification为600MB/1200MB时，取值dms.physical.storage.ultra  如何选择磁盘类型请参考《云硬盘 [产品介绍](tag:hws,hws_hk,hws_eu,cmcc)[用户指南](tag:dt,g42,hk_g42,ctc,tm,hk_tm,sbc,ocb,hws_ocb)》的“磁盘类型及性能介绍”。
    * enterpriseProjectId  企业项目ID。若为企业项目账号，该参数必填。
    * tags  标签列表。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'name' => null,
        'description' => null,
        'engine' => null,
        'engineVersion' => null,
        'specification' => null,
        'brokerNum' => null,
        'storageSpace' => null,
        'partitionNum' => 'int32',
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
        'publicBandwidth' => null,
        'publicipId' => null,
        'sslEnable' => null,
        'kafkaSecurityProtocol' => null,
        'saslEnabledMechanisms' => null,
        'portProtocol' => null,
        'retentionPolicy' => null,
        'diskEncryptedEnable' => null,
        'diskEncryptedKey' => null,
        'connectorEnable' => null,
        'enableAutoTopic' => null,
        'storageSpecCode' => null,
        'enterpriseProjectId' => null,
        'tags' => null
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
    * description  实例的描述信息。  长度不超过1024的字符串。[且字符串不能包含\">\"与\"<\"，字符串首字符不能为\"=\",\"+\",\"-\",\"@\"的全角和半角字符。](tag:hcs,fcs)  > \\与\"在json报文中属于特殊字符，如果参数值中需要显示\\或者\"字符，请在字符前增加转义字符\\，比如\\\\或者\\\"。
    * engine  消息引擎。取值填写为：kafka。
    * engineVersion  消息引擎的版本。取值填写为：   - 1.1.0   [- 2.3.0](tag:ocb,hws_ocb,sbc,hk_sbc,cmcc,hws_eu,dt,ctc,g42,hk_g42,tm,hk_tm)   - 2.7   [- 3.x](tag:hws,hws_hk,dt,sbc,hcs,fcs,ctc,tm,hk_tm,hws_eu)
    * specification  [新规格实例：Kafka实例业务TPS规格，取值范围：   - c6.2u4g.cluster   - c6.4u8g.cluster   - c6.8u16g.cluster   - c6.12u24g.cluster   - c6.16u32g.cluster  老规格实例：](tag:hws,hws_hk) Kafka实例的基准带宽，表示单位时间内传送的最大数据量，单位MB。取值范围：   - 100MB   - 300MB   - 600MB   - 1200MB  注：此参数无需设置，其取值实际是由产品ID（product_id）决定。
    * brokerNum  代理个数。 [取值范围:  - 老规格实例此参数无需设置  - 新规格必须设置，取值范围：3 ~ 50。](tag:hws,hws_hk,g42,tm,hk_g42,hk_tm,ctc,dt,ocb,hws_ocb,sbc,hk_sbc) [此参数无需设置](tag:cmcc)
    * storageSpace  消息存储空间，单位GB。   - Kafka实例规格为100MB时，存储空间取值范围600GB ~ 90000GB。   - Kafka实例规格为300MB时，存储空间取值范围1200GB ~ 90000GB。   - Kafka实例规格为600MB时，存储空间取值范围2400GB ~ 90000GB。   - Kafka实例规格为1200MB，存储空间取值范围4800GB ~ 90000GB   [- Kafka实例规格为c6.2u4g.cluster时，存储空间取值范围300GB ~ 300000GB。   - Kafka实例规格为c6.4u8g.cluster时，存储空间取值范围300GB ~ 600000GB。   - Kafka实例规格为c6.8u16g.cluster时，存储空间取值范围300GB ~ 900000GB。   - Kafka实例规格为c6.12u24g.cluster时，存储空间取值范围300GB ~ 900000GB。   - Kafka实例规格为c6.16u32g.cluster时，存储空间取值范围300GB ~ 900000GB。](tag:hws,hws_hk)
    * partitionNum  Kafka实例的最大分区数量。   - 参数specification为100MB时，取值300   - 参数specification为300MB时，取值900   - 参数specification为600MB时，取值1800   - 参数specification为1200MB时，取值1800    [新规格实例此参数无需设置，每种规格对应的分区数上限参考：https://support.huaweicloud.com/productdesc-kafka/Kafka-specification.html](tag:hws)   [新规格实例此参数无需设置，每种规格对应的分区数上限参考：https://support.huaweicloud.com/intl/zh-cn/productdesc-kafka/Kafka-specification.html](tag:hws_hk)
    * accessUser  当ssl_enable为true时，该参数必选，ssl_enable为false时，该参数无效。  认证用户名，只能由英文字母、数字、中划线组成，长度为4~64的字符。
    * password  当ssl_enable为true时，该参数必选，ssl_enable为false时，该参数无效。  实例的认证密码。  复杂度要求： - 输入长度为8到32位的字符串。 - 必须包含如下四种字符中的三种组合：   - 小写字母   - 大写字母   - 数字   - 特殊字符包括（`~!@#$%^&*()-_=+\\|[{}]:'\",<.>/?）和空格，并且不能以-开头
    * vpcId  虚拟私有云ID。  获取方法如下：登录虚拟私有云服务的控制台界面，在虚拟私有云的详情页面查找VPC ID。
    * securityGroupId  指定实例所属的安全组。  获取方法如下：登录虚拟私有云服务的控制台界面，在安全组的详情页面查找安全组ID。
    * subnetId  子网信息。  获取方法如下：登录虚拟私有云服务的控制台界面，单击VPC下的子网，进入子网详情页面，查找网络ID。
    * availableZones  创建节点到指定且有资源的可用区ID。请参考[查询可用区信息](ListAvailableZones.xml)获取可用区ID。  该参数不能为空数组或者数组的值为空。 创建Kafka实例，支持节点部署在1个或3个及3个以上的可用区。在为节点指定可用区时，用逗号分隔开。
    * productId  产品ID。  产品ID可以从[查询产品规格列表](ListEngineProducts.xml)获取。 [创建kafka实例,支持的产品规格有: (product_id/specification/partition_num/storage_space)  00300-30308-0--0/100MB/300/600;  00300-30310-0--0/300MB/900/1200;  00300-30312-0--0/600MB/1800/2400;  00300-30314-0--0/1200MB/1800/4800](tag:dt)
    * maintainBegin  维护时间窗开始时间，格式为HH:mm。
    * maintainEnd  维护时间窗结束时间，格式为HH:mm。
    * enablePublicip  是否开启公网访问功能。默认不开启公网。 - true：开启 - false：不开启
    * publicBandwidth  表示公网带宽，单位是Mbit/s。   [取值范围：   - Kafka实例规格为100MB时，公网带宽取值范围3到900，且必须为实例节点个数的倍数。   - Kafka实例规格为300MB时，公网带宽取值范围3到900，且必须为实例节点个数的倍数。   - Kafka实例规格为600MB时，公网带宽取值范围4到1200，且必须为实例节点个数的倍数。   - Kafka实例规格为1200MB时，公网带宽取值范围8到2400，且必须为实例节点个数的倍数。](tag:hws,hws_hk,dt,ocb,hws_ocb,ctc,sbc,hk_sbc,cmcc,g42,tm,hk_g42,hk_tm)    [老规格实例取值范围：   - Kafka实例规格为100MB时，公网带宽取值范围3到900，且必须为实例节点个数的倍数。   - Kafka实例规格为300MB时，公网带宽取值范围3到900，且必须为实例节点个数的倍数。   - Kafka实例规格为600MB时，公网带宽取值范围4到1200，且必须为实例节点个数的倍数。   - Kafka实例规格为1200MB时，公网带宽取值范围8到2400，且必须为实例节点个数的倍数。    新规格实例取值范围：   - Kafka实例规格为c6.2u4g.cluster时，公网带宽取值范围3到250，且必须为实例节点个数的倍数。   - Kafka实例规格为c6.4u8g.cluster时，公网带宽取值范围3到500，且必须为实例节点个数的倍数。   - Kafka实例规格为c6.8u16g.cluster时，公网带宽取值范围4到1000，且必须为实例节点个数的倍数。   - Kafka实例规格为c6.12u24g.cluster时，公网带宽取值范围8到1500，且必须为实例节点个数的倍数。   -  Kafka实例规格为c6.16u32g.cluster时，公网带宽取值范围8到2000，且必须为实例节点个数的倍数。](tag:hws,hws_hk)
    * publicipId  实例绑定的弹性IP地址的ID。  以英文逗号隔开多个弹性IP地址的ID。  如果开启了公网访问功能（即enable_publicip为true），该字段为必选。
    * sslEnable  是否打开SSL加密访问。  实例创建后将不支持动态开启和关闭。  - true：打开SSL加密访问。 - false：不打开SSL加密访问。
    * kafkaSecurityProtocol  开启SASL后使用的安全协议。 - SASL_SSL: 使用SSL证书加密传输，支持账号密码认证，安全性更高。 - SASL_PLAINTEXT: 通过明文传输，支持账号密码认证，性能更好。  若该字段值为空，默认开启SASL_SSL认证机制。实例创建后，此参数不支持动态修改。 若创建实例时，使用了port_protocol参数，则Kafka的内网访问安全协议以及公网访问安全协议会使用port_protocol中的值，则此参数无效。
    * saslEnabledMechanisms  开启SASL后使用的认证机制，如果开启了SASL认证功能（即ssl_enable=true），该字段为必选。  若该字段值为空，默认开启PLAIN认证机制。  选择其一进行SASL认证即可，支持同时开启两种认证机制。 取值如下： - PLAIN: 简单的用户名密码校验。 - SCRAM-SHA-512: 用户凭证校验，安全性比PLAIN机制更高。
    * portProtocol  portProtocol
    * retentionPolicy  磁盘的容量到达容量阈值后，对于消息的处理策略。  取值如下： - produce_reject：表示拒绝消息写入。 - time_base：表示自动删除最老消息。
    * diskEncryptedEnable  是否开启磁盘加密。
    * diskEncryptedKey  磁盘加密key，未开启磁盘加密时为空
    * connectorEnable  是否开启消息转储功能。  默认不开启消息转储。
    * enableAutoTopic  是否打开Kafka自动创建Topic功能。 - true：开启 - false：关闭  当您选择开启，表示生产或消费一个未创建的Topic时，会自动创建一个包含3个分区和3个副本的Topic。  默认是false关闭。
    * storageSpecCode  存储IO规格。 [新老规格的实例的存储IO规格不相同，创建实例请选择对应的存储IO规格。 新规格实例取值范围：   - dms.physical.storage.high.v2：使用高IO的磁盘类型。   - dms.physical.storage.ultra.v2：使用超高IO的磁盘类型。  老规格实例取值范围：](tag:hc,hk)   - 参数specification为100MB/300MB时，取值dms.physical.storage.high或者dms.physical.storage.ultra   - 参数specification为600MB/1200MB时，取值dms.physical.storage.ultra  如何选择磁盘类型请参考《云硬盘 [产品介绍](tag:hws,hws_hk,hws_eu,cmcc)[用户指南](tag:dt,g42,hk_g42,ctc,tm,hk_tm,sbc,ocb,hws_ocb)》的“磁盘类型及性能介绍”。
    * enterpriseProjectId  企业项目ID。若为企业项目账号，该参数必填。
    * tags  标签列表。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'name' => 'name',
            'description' => 'description',
            'engine' => 'engine',
            'engineVersion' => 'engine_version',
            'specification' => 'specification',
            'brokerNum' => 'broker_num',
            'storageSpace' => 'storage_space',
            'partitionNum' => 'partition_num',
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
            'publicBandwidth' => 'public_bandwidth',
            'publicipId' => 'publicip_id',
            'sslEnable' => 'ssl_enable',
            'kafkaSecurityProtocol' => 'kafka_security_protocol',
            'saslEnabledMechanisms' => 'sasl_enabled_mechanisms',
            'portProtocol' => 'port_protocol',
            'retentionPolicy' => 'retention_policy',
            'diskEncryptedEnable' => 'disk_encrypted_enable',
            'diskEncryptedKey' => 'disk_encrypted_key',
            'connectorEnable' => 'connector_enable',
            'enableAutoTopic' => 'enable_auto_topic',
            'storageSpecCode' => 'storage_spec_code',
            'enterpriseProjectId' => 'enterprise_project_id',
            'tags' => 'tags'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * name  实例名称。  由英文字符开头，只能由英文字母、数字、中划线、下划线组成，长度为4~64的字符。
    * description  实例的描述信息。  长度不超过1024的字符串。[且字符串不能包含\">\"与\"<\"，字符串首字符不能为\"=\",\"+\",\"-\",\"@\"的全角和半角字符。](tag:hcs,fcs)  > \\与\"在json报文中属于特殊字符，如果参数值中需要显示\\或者\"字符，请在字符前增加转义字符\\，比如\\\\或者\\\"。
    * engine  消息引擎。取值填写为：kafka。
    * engineVersion  消息引擎的版本。取值填写为：   - 1.1.0   [- 2.3.0](tag:ocb,hws_ocb,sbc,hk_sbc,cmcc,hws_eu,dt,ctc,g42,hk_g42,tm,hk_tm)   - 2.7   [- 3.x](tag:hws,hws_hk,dt,sbc,hcs,fcs,ctc,tm,hk_tm,hws_eu)
    * specification  [新规格实例：Kafka实例业务TPS规格，取值范围：   - c6.2u4g.cluster   - c6.4u8g.cluster   - c6.8u16g.cluster   - c6.12u24g.cluster   - c6.16u32g.cluster  老规格实例：](tag:hws,hws_hk) Kafka实例的基准带宽，表示单位时间内传送的最大数据量，单位MB。取值范围：   - 100MB   - 300MB   - 600MB   - 1200MB  注：此参数无需设置，其取值实际是由产品ID（product_id）决定。
    * brokerNum  代理个数。 [取值范围:  - 老规格实例此参数无需设置  - 新规格必须设置，取值范围：3 ~ 50。](tag:hws,hws_hk,g42,tm,hk_g42,hk_tm,ctc,dt,ocb,hws_ocb,sbc,hk_sbc) [此参数无需设置](tag:cmcc)
    * storageSpace  消息存储空间，单位GB。   - Kafka实例规格为100MB时，存储空间取值范围600GB ~ 90000GB。   - Kafka实例规格为300MB时，存储空间取值范围1200GB ~ 90000GB。   - Kafka实例规格为600MB时，存储空间取值范围2400GB ~ 90000GB。   - Kafka实例规格为1200MB，存储空间取值范围4800GB ~ 90000GB   [- Kafka实例规格为c6.2u4g.cluster时，存储空间取值范围300GB ~ 300000GB。   - Kafka实例规格为c6.4u8g.cluster时，存储空间取值范围300GB ~ 600000GB。   - Kafka实例规格为c6.8u16g.cluster时，存储空间取值范围300GB ~ 900000GB。   - Kafka实例规格为c6.12u24g.cluster时，存储空间取值范围300GB ~ 900000GB。   - Kafka实例规格为c6.16u32g.cluster时，存储空间取值范围300GB ~ 900000GB。](tag:hws,hws_hk)
    * partitionNum  Kafka实例的最大分区数量。   - 参数specification为100MB时，取值300   - 参数specification为300MB时，取值900   - 参数specification为600MB时，取值1800   - 参数specification为1200MB时，取值1800    [新规格实例此参数无需设置，每种规格对应的分区数上限参考：https://support.huaweicloud.com/productdesc-kafka/Kafka-specification.html](tag:hws)   [新规格实例此参数无需设置，每种规格对应的分区数上限参考：https://support.huaweicloud.com/intl/zh-cn/productdesc-kafka/Kafka-specification.html](tag:hws_hk)
    * accessUser  当ssl_enable为true时，该参数必选，ssl_enable为false时，该参数无效。  认证用户名，只能由英文字母、数字、中划线组成，长度为4~64的字符。
    * password  当ssl_enable为true时，该参数必选，ssl_enable为false时，该参数无效。  实例的认证密码。  复杂度要求： - 输入长度为8到32位的字符串。 - 必须包含如下四种字符中的三种组合：   - 小写字母   - 大写字母   - 数字   - 特殊字符包括（`~!@#$%^&*()-_=+\\|[{}]:'\",<.>/?）和空格，并且不能以-开头
    * vpcId  虚拟私有云ID。  获取方法如下：登录虚拟私有云服务的控制台界面，在虚拟私有云的详情页面查找VPC ID。
    * securityGroupId  指定实例所属的安全组。  获取方法如下：登录虚拟私有云服务的控制台界面，在安全组的详情页面查找安全组ID。
    * subnetId  子网信息。  获取方法如下：登录虚拟私有云服务的控制台界面，单击VPC下的子网，进入子网详情页面，查找网络ID。
    * availableZones  创建节点到指定且有资源的可用区ID。请参考[查询可用区信息](ListAvailableZones.xml)获取可用区ID。  该参数不能为空数组或者数组的值为空。 创建Kafka实例，支持节点部署在1个或3个及3个以上的可用区。在为节点指定可用区时，用逗号分隔开。
    * productId  产品ID。  产品ID可以从[查询产品规格列表](ListEngineProducts.xml)获取。 [创建kafka实例,支持的产品规格有: (product_id/specification/partition_num/storage_space)  00300-30308-0--0/100MB/300/600;  00300-30310-0--0/300MB/900/1200;  00300-30312-0--0/600MB/1800/2400;  00300-30314-0--0/1200MB/1800/4800](tag:dt)
    * maintainBegin  维护时间窗开始时间，格式为HH:mm。
    * maintainEnd  维护时间窗结束时间，格式为HH:mm。
    * enablePublicip  是否开启公网访问功能。默认不开启公网。 - true：开启 - false：不开启
    * publicBandwidth  表示公网带宽，单位是Mbit/s。   [取值范围：   - Kafka实例规格为100MB时，公网带宽取值范围3到900，且必须为实例节点个数的倍数。   - Kafka实例规格为300MB时，公网带宽取值范围3到900，且必须为实例节点个数的倍数。   - Kafka实例规格为600MB时，公网带宽取值范围4到1200，且必须为实例节点个数的倍数。   - Kafka实例规格为1200MB时，公网带宽取值范围8到2400，且必须为实例节点个数的倍数。](tag:hws,hws_hk,dt,ocb,hws_ocb,ctc,sbc,hk_sbc,cmcc,g42,tm,hk_g42,hk_tm)    [老规格实例取值范围：   - Kafka实例规格为100MB时，公网带宽取值范围3到900，且必须为实例节点个数的倍数。   - Kafka实例规格为300MB时，公网带宽取值范围3到900，且必须为实例节点个数的倍数。   - Kafka实例规格为600MB时，公网带宽取值范围4到1200，且必须为实例节点个数的倍数。   - Kafka实例规格为1200MB时，公网带宽取值范围8到2400，且必须为实例节点个数的倍数。    新规格实例取值范围：   - Kafka实例规格为c6.2u4g.cluster时，公网带宽取值范围3到250，且必须为实例节点个数的倍数。   - Kafka实例规格为c6.4u8g.cluster时，公网带宽取值范围3到500，且必须为实例节点个数的倍数。   - Kafka实例规格为c6.8u16g.cluster时，公网带宽取值范围4到1000，且必须为实例节点个数的倍数。   - Kafka实例规格为c6.12u24g.cluster时，公网带宽取值范围8到1500，且必须为实例节点个数的倍数。   -  Kafka实例规格为c6.16u32g.cluster时，公网带宽取值范围8到2000，且必须为实例节点个数的倍数。](tag:hws,hws_hk)
    * publicipId  实例绑定的弹性IP地址的ID。  以英文逗号隔开多个弹性IP地址的ID。  如果开启了公网访问功能（即enable_publicip为true），该字段为必选。
    * sslEnable  是否打开SSL加密访问。  实例创建后将不支持动态开启和关闭。  - true：打开SSL加密访问。 - false：不打开SSL加密访问。
    * kafkaSecurityProtocol  开启SASL后使用的安全协议。 - SASL_SSL: 使用SSL证书加密传输，支持账号密码认证，安全性更高。 - SASL_PLAINTEXT: 通过明文传输，支持账号密码认证，性能更好。  若该字段值为空，默认开启SASL_SSL认证机制。实例创建后，此参数不支持动态修改。 若创建实例时，使用了port_protocol参数，则Kafka的内网访问安全协议以及公网访问安全协议会使用port_protocol中的值，则此参数无效。
    * saslEnabledMechanisms  开启SASL后使用的认证机制，如果开启了SASL认证功能（即ssl_enable=true），该字段为必选。  若该字段值为空，默认开启PLAIN认证机制。  选择其一进行SASL认证即可，支持同时开启两种认证机制。 取值如下： - PLAIN: 简单的用户名密码校验。 - SCRAM-SHA-512: 用户凭证校验，安全性比PLAIN机制更高。
    * portProtocol  portProtocol
    * retentionPolicy  磁盘的容量到达容量阈值后，对于消息的处理策略。  取值如下： - produce_reject：表示拒绝消息写入。 - time_base：表示自动删除最老消息。
    * diskEncryptedEnable  是否开启磁盘加密。
    * diskEncryptedKey  磁盘加密key，未开启磁盘加密时为空
    * connectorEnable  是否开启消息转储功能。  默认不开启消息转储。
    * enableAutoTopic  是否打开Kafka自动创建Topic功能。 - true：开启 - false：关闭  当您选择开启，表示生产或消费一个未创建的Topic时，会自动创建一个包含3个分区和3个副本的Topic。  默认是false关闭。
    * storageSpecCode  存储IO规格。 [新老规格的实例的存储IO规格不相同，创建实例请选择对应的存储IO规格。 新规格实例取值范围：   - dms.physical.storage.high.v2：使用高IO的磁盘类型。   - dms.physical.storage.ultra.v2：使用超高IO的磁盘类型。  老规格实例取值范围：](tag:hc,hk)   - 参数specification为100MB/300MB时，取值dms.physical.storage.high或者dms.physical.storage.ultra   - 参数specification为600MB/1200MB时，取值dms.physical.storage.ultra  如何选择磁盘类型请参考《云硬盘 [产品介绍](tag:hws,hws_hk,hws_eu,cmcc)[用户指南](tag:dt,g42,hk_g42,ctc,tm,hk_tm,sbc,ocb,hws_ocb)》的“磁盘类型及性能介绍”。
    * enterpriseProjectId  企业项目ID。若为企业项目账号，该参数必填。
    * tags  标签列表。
    *
    * @var string[]
    */
    protected static $setters = [
            'name' => 'setName',
            'description' => 'setDescription',
            'engine' => 'setEngine',
            'engineVersion' => 'setEngineVersion',
            'specification' => 'setSpecification',
            'brokerNum' => 'setBrokerNum',
            'storageSpace' => 'setStorageSpace',
            'partitionNum' => 'setPartitionNum',
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
            'publicBandwidth' => 'setPublicBandwidth',
            'publicipId' => 'setPublicipId',
            'sslEnable' => 'setSslEnable',
            'kafkaSecurityProtocol' => 'setKafkaSecurityProtocol',
            'saslEnabledMechanisms' => 'setSaslEnabledMechanisms',
            'portProtocol' => 'setPortProtocol',
            'retentionPolicy' => 'setRetentionPolicy',
            'diskEncryptedEnable' => 'setDiskEncryptedEnable',
            'diskEncryptedKey' => 'setDiskEncryptedKey',
            'connectorEnable' => 'setConnectorEnable',
            'enableAutoTopic' => 'setEnableAutoTopic',
            'storageSpecCode' => 'setStorageSpecCode',
            'enterpriseProjectId' => 'setEnterpriseProjectId',
            'tags' => 'setTags'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * name  实例名称。  由英文字符开头，只能由英文字母、数字、中划线、下划线组成，长度为4~64的字符。
    * description  实例的描述信息。  长度不超过1024的字符串。[且字符串不能包含\">\"与\"<\"，字符串首字符不能为\"=\",\"+\",\"-\",\"@\"的全角和半角字符。](tag:hcs,fcs)  > \\与\"在json报文中属于特殊字符，如果参数值中需要显示\\或者\"字符，请在字符前增加转义字符\\，比如\\\\或者\\\"。
    * engine  消息引擎。取值填写为：kafka。
    * engineVersion  消息引擎的版本。取值填写为：   - 1.1.0   [- 2.3.0](tag:ocb,hws_ocb,sbc,hk_sbc,cmcc,hws_eu,dt,ctc,g42,hk_g42,tm,hk_tm)   - 2.7   [- 3.x](tag:hws,hws_hk,dt,sbc,hcs,fcs,ctc,tm,hk_tm,hws_eu)
    * specification  [新规格实例：Kafka实例业务TPS规格，取值范围：   - c6.2u4g.cluster   - c6.4u8g.cluster   - c6.8u16g.cluster   - c6.12u24g.cluster   - c6.16u32g.cluster  老规格实例：](tag:hws,hws_hk) Kafka实例的基准带宽，表示单位时间内传送的最大数据量，单位MB。取值范围：   - 100MB   - 300MB   - 600MB   - 1200MB  注：此参数无需设置，其取值实际是由产品ID（product_id）决定。
    * brokerNum  代理个数。 [取值范围:  - 老规格实例此参数无需设置  - 新规格必须设置，取值范围：3 ~ 50。](tag:hws,hws_hk,g42,tm,hk_g42,hk_tm,ctc,dt,ocb,hws_ocb,sbc,hk_sbc) [此参数无需设置](tag:cmcc)
    * storageSpace  消息存储空间，单位GB。   - Kafka实例规格为100MB时，存储空间取值范围600GB ~ 90000GB。   - Kafka实例规格为300MB时，存储空间取值范围1200GB ~ 90000GB。   - Kafka实例规格为600MB时，存储空间取值范围2400GB ~ 90000GB。   - Kafka实例规格为1200MB，存储空间取值范围4800GB ~ 90000GB   [- Kafka实例规格为c6.2u4g.cluster时，存储空间取值范围300GB ~ 300000GB。   - Kafka实例规格为c6.4u8g.cluster时，存储空间取值范围300GB ~ 600000GB。   - Kafka实例规格为c6.8u16g.cluster时，存储空间取值范围300GB ~ 900000GB。   - Kafka实例规格为c6.12u24g.cluster时，存储空间取值范围300GB ~ 900000GB。   - Kafka实例规格为c6.16u32g.cluster时，存储空间取值范围300GB ~ 900000GB。](tag:hws,hws_hk)
    * partitionNum  Kafka实例的最大分区数量。   - 参数specification为100MB时，取值300   - 参数specification为300MB时，取值900   - 参数specification为600MB时，取值1800   - 参数specification为1200MB时，取值1800    [新规格实例此参数无需设置，每种规格对应的分区数上限参考：https://support.huaweicloud.com/productdesc-kafka/Kafka-specification.html](tag:hws)   [新规格实例此参数无需设置，每种规格对应的分区数上限参考：https://support.huaweicloud.com/intl/zh-cn/productdesc-kafka/Kafka-specification.html](tag:hws_hk)
    * accessUser  当ssl_enable为true时，该参数必选，ssl_enable为false时，该参数无效。  认证用户名，只能由英文字母、数字、中划线组成，长度为4~64的字符。
    * password  当ssl_enable为true时，该参数必选，ssl_enable为false时，该参数无效。  实例的认证密码。  复杂度要求： - 输入长度为8到32位的字符串。 - 必须包含如下四种字符中的三种组合：   - 小写字母   - 大写字母   - 数字   - 特殊字符包括（`~!@#$%^&*()-_=+\\|[{}]:'\",<.>/?）和空格，并且不能以-开头
    * vpcId  虚拟私有云ID。  获取方法如下：登录虚拟私有云服务的控制台界面，在虚拟私有云的详情页面查找VPC ID。
    * securityGroupId  指定实例所属的安全组。  获取方法如下：登录虚拟私有云服务的控制台界面，在安全组的详情页面查找安全组ID。
    * subnetId  子网信息。  获取方法如下：登录虚拟私有云服务的控制台界面，单击VPC下的子网，进入子网详情页面，查找网络ID。
    * availableZones  创建节点到指定且有资源的可用区ID。请参考[查询可用区信息](ListAvailableZones.xml)获取可用区ID。  该参数不能为空数组或者数组的值为空。 创建Kafka实例，支持节点部署在1个或3个及3个以上的可用区。在为节点指定可用区时，用逗号分隔开。
    * productId  产品ID。  产品ID可以从[查询产品规格列表](ListEngineProducts.xml)获取。 [创建kafka实例,支持的产品规格有: (product_id/specification/partition_num/storage_space)  00300-30308-0--0/100MB/300/600;  00300-30310-0--0/300MB/900/1200;  00300-30312-0--0/600MB/1800/2400;  00300-30314-0--0/1200MB/1800/4800](tag:dt)
    * maintainBegin  维护时间窗开始时间，格式为HH:mm。
    * maintainEnd  维护时间窗结束时间，格式为HH:mm。
    * enablePublicip  是否开启公网访问功能。默认不开启公网。 - true：开启 - false：不开启
    * publicBandwidth  表示公网带宽，单位是Mbit/s。   [取值范围：   - Kafka实例规格为100MB时，公网带宽取值范围3到900，且必须为实例节点个数的倍数。   - Kafka实例规格为300MB时，公网带宽取值范围3到900，且必须为实例节点个数的倍数。   - Kafka实例规格为600MB时，公网带宽取值范围4到1200，且必须为实例节点个数的倍数。   - Kafka实例规格为1200MB时，公网带宽取值范围8到2400，且必须为实例节点个数的倍数。](tag:hws,hws_hk,dt,ocb,hws_ocb,ctc,sbc,hk_sbc,cmcc,g42,tm,hk_g42,hk_tm)    [老规格实例取值范围：   - Kafka实例规格为100MB时，公网带宽取值范围3到900，且必须为实例节点个数的倍数。   - Kafka实例规格为300MB时，公网带宽取值范围3到900，且必须为实例节点个数的倍数。   - Kafka实例规格为600MB时，公网带宽取值范围4到1200，且必须为实例节点个数的倍数。   - Kafka实例规格为1200MB时，公网带宽取值范围8到2400，且必须为实例节点个数的倍数。    新规格实例取值范围：   - Kafka实例规格为c6.2u4g.cluster时，公网带宽取值范围3到250，且必须为实例节点个数的倍数。   - Kafka实例规格为c6.4u8g.cluster时，公网带宽取值范围3到500，且必须为实例节点个数的倍数。   - Kafka实例规格为c6.8u16g.cluster时，公网带宽取值范围4到1000，且必须为实例节点个数的倍数。   - Kafka实例规格为c6.12u24g.cluster时，公网带宽取值范围8到1500，且必须为实例节点个数的倍数。   -  Kafka实例规格为c6.16u32g.cluster时，公网带宽取值范围8到2000，且必须为实例节点个数的倍数。](tag:hws,hws_hk)
    * publicipId  实例绑定的弹性IP地址的ID。  以英文逗号隔开多个弹性IP地址的ID。  如果开启了公网访问功能（即enable_publicip为true），该字段为必选。
    * sslEnable  是否打开SSL加密访问。  实例创建后将不支持动态开启和关闭。  - true：打开SSL加密访问。 - false：不打开SSL加密访问。
    * kafkaSecurityProtocol  开启SASL后使用的安全协议。 - SASL_SSL: 使用SSL证书加密传输，支持账号密码认证，安全性更高。 - SASL_PLAINTEXT: 通过明文传输，支持账号密码认证，性能更好。  若该字段值为空，默认开启SASL_SSL认证机制。实例创建后，此参数不支持动态修改。 若创建实例时，使用了port_protocol参数，则Kafka的内网访问安全协议以及公网访问安全协议会使用port_protocol中的值，则此参数无效。
    * saslEnabledMechanisms  开启SASL后使用的认证机制，如果开启了SASL认证功能（即ssl_enable=true），该字段为必选。  若该字段值为空，默认开启PLAIN认证机制。  选择其一进行SASL认证即可，支持同时开启两种认证机制。 取值如下： - PLAIN: 简单的用户名密码校验。 - SCRAM-SHA-512: 用户凭证校验，安全性比PLAIN机制更高。
    * portProtocol  portProtocol
    * retentionPolicy  磁盘的容量到达容量阈值后，对于消息的处理策略。  取值如下： - produce_reject：表示拒绝消息写入。 - time_base：表示自动删除最老消息。
    * diskEncryptedEnable  是否开启磁盘加密。
    * diskEncryptedKey  磁盘加密key，未开启磁盘加密时为空
    * connectorEnable  是否开启消息转储功能。  默认不开启消息转储。
    * enableAutoTopic  是否打开Kafka自动创建Topic功能。 - true：开启 - false：关闭  当您选择开启，表示生产或消费一个未创建的Topic时，会自动创建一个包含3个分区和3个副本的Topic。  默认是false关闭。
    * storageSpecCode  存储IO规格。 [新老规格的实例的存储IO规格不相同，创建实例请选择对应的存储IO规格。 新规格实例取值范围：   - dms.physical.storage.high.v2：使用高IO的磁盘类型。   - dms.physical.storage.ultra.v2：使用超高IO的磁盘类型。  老规格实例取值范围：](tag:hc,hk)   - 参数specification为100MB/300MB时，取值dms.physical.storage.high或者dms.physical.storage.ultra   - 参数specification为600MB/1200MB时，取值dms.physical.storage.ultra  如何选择磁盘类型请参考《云硬盘 [产品介绍](tag:hws,hws_hk,hws_eu,cmcc)[用户指南](tag:dt,g42,hk_g42,ctc,tm,hk_tm,sbc,ocb,hws_ocb)》的“磁盘类型及性能介绍”。
    * enterpriseProjectId  企业项目ID。若为企业项目账号，该参数必填。
    * tags  标签列表。
    *
    * @var string[]
    */
    protected static $getters = [
            'name' => 'getName',
            'description' => 'getDescription',
            'engine' => 'getEngine',
            'engineVersion' => 'getEngineVersion',
            'specification' => 'getSpecification',
            'brokerNum' => 'getBrokerNum',
            'storageSpace' => 'getStorageSpace',
            'partitionNum' => 'getPartitionNum',
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
            'publicBandwidth' => 'getPublicBandwidth',
            'publicipId' => 'getPublicipId',
            'sslEnable' => 'getSslEnable',
            'kafkaSecurityProtocol' => 'getKafkaSecurityProtocol',
            'saslEnabledMechanisms' => 'getSaslEnabledMechanisms',
            'portProtocol' => 'getPortProtocol',
            'retentionPolicy' => 'getRetentionPolicy',
            'diskEncryptedEnable' => 'getDiskEncryptedEnable',
            'diskEncryptedKey' => 'getDiskEncryptedKey',
            'connectorEnable' => 'getConnectorEnable',
            'enableAutoTopic' => 'getEnableAutoTopic',
            'storageSpecCode' => 'getStorageSpecCode',
            'enterpriseProjectId' => 'getEnterpriseProjectId',
            'tags' => 'getTags'
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
    const SPECIFICATION__100_MB = '100MB';
    const SPECIFICATION__300_MB = '300MB';
    const SPECIFICATION__600_MB = '600MB';
    const SPECIFICATION__1200_MB = '1200MB';
    const SPECIFICATION_C6_2U4G_CLUSTER = 'c6.2u4g.cluster';
    const SPECIFICATION_C6_4U8G_CLUSTER = 'c6.4u8g.cluster';
    const SPECIFICATION_C6_8U16G_CLUSTER = 'c6.8u16g.cluster';
    const SPECIFICATION_C6_12U24G_CLUSTER = 'c6.12u24g.cluster';
    const SPECIFICATION_C6_16U32G_CLUSTER = 'c6.16u32g.cluster';
    const PARTITION_NUM_250 = 250;
    const PARTITION_NUM_300 = 300;
    const PARTITION_NUM_500 = 500;
    const PARTITION_NUM_900 = 900;
    const PARTITION_NUM_1000 = 1000;
    const PARTITION_NUM_1500 = 1500;
    const PARTITION_NUM_1800 = 1800;
    const PARTITION_NUM_2000 = 2000;
    const SASL_ENABLED_MECHANISMS_PLAIN = 'PLAIN';
    const SASL_ENABLED_MECHANISMS_SCRAM_SHA_512 = 'SCRAM-SHA-512';
    const RETENTION_POLICY_TIME_BASE = 'time_base';
    const RETENTION_POLICY_PRODUCE_REJECT = 'produce_reject';
    const STORAGE_SPEC_CODE_DMS_PHYSICAL_STORAGE_HIGH_V2 = 'dms.physical.storage.high.v2';
    const STORAGE_SPEC_CODE_DMS_PHYSICAL_STORAGE_ULTRA_V2 = 'dms.physical.storage.ultra.v2';
    const STORAGE_SPEC_CODE_DMS_PHYSICAL_STORAGE_NORMAL = 'dms.physical.storage.normal';
    const STORAGE_SPEC_CODE_DMS_PHYSICAL_STORAGE_HIGH = 'dms.physical.storage.high';
    const STORAGE_SPEC_CODE_DMS_PHYSICAL_STORAGE_ULTRA = 'dms.physical.storage.ultra';
    

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
    public function getSpecificationAllowableValues()
    {
        return [
            self::SPECIFICATION__100_MB,
            self::SPECIFICATION__300_MB,
            self::SPECIFICATION__600_MB,
            self::SPECIFICATION__1200_MB,
            self::SPECIFICATION_C6_2U4G_CLUSTER,
            self::SPECIFICATION_C6_4U8G_CLUSTER,
            self::SPECIFICATION_C6_8U16G_CLUSTER,
            self::SPECIFICATION_C6_12U24G_CLUSTER,
            self::SPECIFICATION_C6_16U32G_CLUSTER,
        ];
    }

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getPartitionNumAllowableValues()
    {
        return [
            self::PARTITION_NUM_250,
            self::PARTITION_NUM_300,
            self::PARTITION_NUM_500,
            self::PARTITION_NUM_900,
            self::PARTITION_NUM_1000,
            self::PARTITION_NUM_1500,
            self::PARTITION_NUM_1800,
            self::PARTITION_NUM_2000,
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
            self::STORAGE_SPEC_CODE_DMS_PHYSICAL_STORAGE_NORMAL,
            self::STORAGE_SPEC_CODE_DMS_PHYSICAL_STORAGE_HIGH,
            self::STORAGE_SPEC_CODE_DMS_PHYSICAL_STORAGE_ULTRA,
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
        $this->container['specification'] = isset($data['specification']) ? $data['specification'] : null;
        $this->container['brokerNum'] = isset($data['brokerNum']) ? $data['brokerNum'] : null;
        $this->container['storageSpace'] = isset($data['storageSpace']) ? $data['storageSpace'] : null;
        $this->container['partitionNum'] = isset($data['partitionNum']) ? $data['partitionNum'] : null;
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
        $this->container['publicBandwidth'] = isset($data['publicBandwidth']) ? $data['publicBandwidth'] : null;
        $this->container['publicipId'] = isset($data['publicipId']) ? $data['publicipId'] : null;
        $this->container['sslEnable'] = isset($data['sslEnable']) ? $data['sslEnable'] : null;
        $this->container['kafkaSecurityProtocol'] = isset($data['kafkaSecurityProtocol']) ? $data['kafkaSecurityProtocol'] : null;
        $this->container['saslEnabledMechanisms'] = isset($data['saslEnabledMechanisms']) ? $data['saslEnabledMechanisms'] : null;
        $this->container['portProtocol'] = isset($data['portProtocol']) ? $data['portProtocol'] : null;
        $this->container['retentionPolicy'] = isset($data['retentionPolicy']) ? $data['retentionPolicy'] : null;
        $this->container['diskEncryptedEnable'] = isset($data['diskEncryptedEnable']) ? $data['diskEncryptedEnable'] : null;
        $this->container['diskEncryptedKey'] = isset($data['diskEncryptedKey']) ? $data['diskEncryptedKey'] : null;
        $this->container['connectorEnable'] = isset($data['connectorEnable']) ? $data['connectorEnable'] : null;
        $this->container['enableAutoTopic'] = isset($data['enableAutoTopic']) ? $data['enableAutoTopic'] : null;
        $this->container['storageSpecCode'] = isset($data['storageSpecCode']) ? $data['storageSpecCode'] : null;
        $this->container['enterpriseProjectId'] = isset($data['enterpriseProjectId']) ? $data['enterpriseProjectId'] : null;
        $this->container['tags'] = isset($data['tags']) ? $data['tags'] : null;
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
            $allowedValues = $this->getSpecificationAllowableValues();
                if (!is_null($this->container['specification']) && !in_array($this->container['specification'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'specification', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

        if ($this->container['storageSpace'] === null) {
            $invalidProperties[] = "'storageSpace' can't be null";
        }
            $allowedValues = $this->getPartitionNumAllowableValues();
                if (!is_null($this->container['partitionNum']) && !in_array($this->container['partitionNum'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'partitionNum', must be one of '%s'",
                implode("', '", $allowedValues)
                );
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
    *  实例的描述信息。  长度不超过1024的字符串。[且字符串不能包含\">\"与\"<\"，字符串首字符不能为\"=\",\"+\",\"-\",\"@\"的全角和半角字符。](tag:hcs,fcs)  > \\与\"在json报文中属于特殊字符，如果参数值中需要显示\\或者\"字符，请在字符前增加转义字符\\，比如\\\\或者\\\"。
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
    * @param string|null $description 实例的描述信息。  长度不超过1024的字符串。[且字符串不能包含\">\"与\"<\"，字符串首字符不能为\"=\",\"+\",\"-\",\"@\"的全角和半角字符。](tag:hcs,fcs)  > \\与\"在json报文中属于特殊字符，如果参数值中需要显示\\或者\"字符，请在字符前增加转义字符\\，比如\\\\或者\\\"。
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
    *  消息引擎的版本。取值填写为：   - 1.1.0   [- 2.3.0](tag:ocb,hws_ocb,sbc,hk_sbc,cmcc,hws_eu,dt,ctc,g42,hk_g42,tm,hk_tm)   - 2.7   [- 3.x](tag:hws,hws_hk,dt,sbc,hcs,fcs,ctc,tm,hk_tm,hws_eu)
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
    * @param string $engineVersion 消息引擎的版本。取值填写为：   - 1.1.0   [- 2.3.0](tag:ocb,hws_ocb,sbc,hk_sbc,cmcc,hws_eu,dt,ctc,g42,hk_g42,tm,hk_tm)   - 2.7   [- 3.x](tag:hws,hws_hk,dt,sbc,hcs,fcs,ctc,tm,hk_tm,hws_eu)
    *
    * @return $this
    */
    public function setEngineVersion($engineVersion)
    {
        $this->container['engineVersion'] = $engineVersion;
        return $this;
    }

    /**
    * Gets specification
    *  [新规格实例：Kafka实例业务TPS规格，取值范围：   - c6.2u4g.cluster   - c6.4u8g.cluster   - c6.8u16g.cluster   - c6.12u24g.cluster   - c6.16u32g.cluster  老规格实例：](tag:hws,hws_hk) Kafka实例的基准带宽，表示单位时间内传送的最大数据量，单位MB。取值范围：   - 100MB   - 300MB   - 600MB   - 1200MB  注：此参数无需设置，其取值实际是由产品ID（product_id）决定。
    *
    * @return string|null
    */
    public function getSpecification()
    {
        return $this->container['specification'];
    }

    /**
    * Sets specification
    *
    * @param string|null $specification [新规格实例：Kafka实例业务TPS规格，取值范围：   - c6.2u4g.cluster   - c6.4u8g.cluster   - c6.8u16g.cluster   - c6.12u24g.cluster   - c6.16u32g.cluster  老规格实例：](tag:hws,hws_hk) Kafka实例的基准带宽，表示单位时间内传送的最大数据量，单位MB。取值范围：   - 100MB   - 300MB   - 600MB   - 1200MB  注：此参数无需设置，其取值实际是由产品ID（product_id）决定。
    *
    * @return $this
    */
    public function setSpecification($specification)
    {
        $this->container['specification'] = $specification;
        return $this;
    }

    /**
    * Gets brokerNum
    *  代理个数。 [取值范围:  - 老规格实例此参数无需设置  - 新规格必须设置，取值范围：3 ~ 50。](tag:hws,hws_hk,g42,tm,hk_g42,hk_tm,ctc,dt,ocb,hws_ocb,sbc,hk_sbc) [此参数无需设置](tag:cmcc)
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
    * @param int|null $brokerNum 代理个数。 [取值范围:  - 老规格实例此参数无需设置  - 新规格必须设置，取值范围：3 ~ 50。](tag:hws,hws_hk,g42,tm,hk_g42,hk_tm,ctc,dt,ocb,hws_ocb,sbc,hk_sbc) [此参数无需设置](tag:cmcc)
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
    *  消息存储空间，单位GB。   - Kafka实例规格为100MB时，存储空间取值范围600GB ~ 90000GB。   - Kafka实例规格为300MB时，存储空间取值范围1200GB ~ 90000GB。   - Kafka实例规格为600MB时，存储空间取值范围2400GB ~ 90000GB。   - Kafka实例规格为1200MB，存储空间取值范围4800GB ~ 90000GB   [- Kafka实例规格为c6.2u4g.cluster时，存储空间取值范围300GB ~ 300000GB。   - Kafka实例规格为c6.4u8g.cluster时，存储空间取值范围300GB ~ 600000GB。   - Kafka实例规格为c6.8u16g.cluster时，存储空间取值范围300GB ~ 900000GB。   - Kafka实例规格为c6.12u24g.cluster时，存储空间取值范围300GB ~ 900000GB。   - Kafka实例规格为c6.16u32g.cluster时，存储空间取值范围300GB ~ 900000GB。](tag:hws,hws_hk)
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
    * @param int $storageSpace 消息存储空间，单位GB。   - Kafka实例规格为100MB时，存储空间取值范围600GB ~ 90000GB。   - Kafka实例规格为300MB时，存储空间取值范围1200GB ~ 90000GB。   - Kafka实例规格为600MB时，存储空间取值范围2400GB ~ 90000GB。   - Kafka实例规格为1200MB，存储空间取值范围4800GB ~ 90000GB   [- Kafka实例规格为c6.2u4g.cluster时，存储空间取值范围300GB ~ 300000GB。   - Kafka实例规格为c6.4u8g.cluster时，存储空间取值范围300GB ~ 600000GB。   - Kafka实例规格为c6.8u16g.cluster时，存储空间取值范围300GB ~ 900000GB。   - Kafka实例规格为c6.12u24g.cluster时，存储空间取值范围300GB ~ 900000GB。   - Kafka实例规格为c6.16u32g.cluster时，存储空间取值范围300GB ~ 900000GB。](tag:hws,hws_hk)
    *
    * @return $this
    */
    public function setStorageSpace($storageSpace)
    {
        $this->container['storageSpace'] = $storageSpace;
        return $this;
    }

    /**
    * Gets partitionNum
    *  Kafka实例的最大分区数量。   - 参数specification为100MB时，取值300   - 参数specification为300MB时，取值900   - 参数specification为600MB时，取值1800   - 参数specification为1200MB时，取值1800    [新规格实例此参数无需设置，每种规格对应的分区数上限参考：https://support.huaweicloud.com/productdesc-kafka/Kafka-specification.html](tag:hws)   [新规格实例此参数无需设置，每种规格对应的分区数上限参考：https://support.huaweicloud.com/intl/zh-cn/productdesc-kafka/Kafka-specification.html](tag:hws_hk)
    *
    * @return int|null
    */
    public function getPartitionNum()
    {
        return $this->container['partitionNum'];
    }

    /**
    * Sets partitionNum
    *
    * @param int|null $partitionNum Kafka实例的最大分区数量。   - 参数specification为100MB时，取值300   - 参数specification为300MB时，取值900   - 参数specification为600MB时，取值1800   - 参数specification为1200MB时，取值1800    [新规格实例此参数无需设置，每种规格对应的分区数上限参考：https://support.huaweicloud.com/productdesc-kafka/Kafka-specification.html](tag:hws)   [新规格实例此参数无需设置，每种规格对应的分区数上限参考：https://support.huaweicloud.com/intl/zh-cn/productdesc-kafka/Kafka-specification.html](tag:hws_hk)
    *
    * @return $this
    */
    public function setPartitionNum($partitionNum)
    {
        $this->container['partitionNum'] = $partitionNum;
        return $this;
    }

    /**
    * Gets accessUser
    *  当ssl_enable为true时，该参数必选，ssl_enable为false时，该参数无效。  认证用户名，只能由英文字母、数字、中划线组成，长度为4~64的字符。
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
    * @param string|null $accessUser 当ssl_enable为true时，该参数必选，ssl_enable为false时，该参数无效。  认证用户名，只能由英文字母、数字、中划线组成，长度为4~64的字符。
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
    *  当ssl_enable为true时，该参数必选，ssl_enable为false时，该参数无效。  实例的认证密码。  复杂度要求： - 输入长度为8到32位的字符串。 - 必须包含如下四种字符中的三种组合：   - 小写字母   - 大写字母   - 数字   - 特殊字符包括（`~!@#$%^&*()-_=+\\|[{}]:'\",<.>/?）和空格，并且不能以-开头
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
    * @param string|null $password 当ssl_enable为true时，该参数必选，ssl_enable为false时，该参数无效。  实例的认证密码。  复杂度要求： - 输入长度为8到32位的字符串。 - 必须包含如下四种字符中的三种组合：   - 小写字母   - 大写字母   - 数字   - 特殊字符包括（`~!@#$%^&*()-_=+\\|[{}]:'\",<.>/?）和空格，并且不能以-开头
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
    *  创建节点到指定且有资源的可用区ID。请参考[查询可用区信息](ListAvailableZones.xml)获取可用区ID。  该参数不能为空数组或者数组的值为空。 创建Kafka实例，支持节点部署在1个或3个及3个以上的可用区。在为节点指定可用区时，用逗号分隔开。
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
    * @param string[] $availableZones 创建节点到指定且有资源的可用区ID。请参考[查询可用区信息](ListAvailableZones.xml)获取可用区ID。  该参数不能为空数组或者数组的值为空。 创建Kafka实例，支持节点部署在1个或3个及3个以上的可用区。在为节点指定可用区时，用逗号分隔开。
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
    *  产品ID。  产品ID可以从[查询产品规格列表](ListEngineProducts.xml)获取。 [创建kafka实例,支持的产品规格有: (product_id/specification/partition_num/storage_space)  00300-30308-0--0/100MB/300/600;  00300-30310-0--0/300MB/900/1200;  00300-30312-0--0/600MB/1800/2400;  00300-30314-0--0/1200MB/1800/4800](tag:dt)
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
    * @param string $productId 产品ID。  产品ID可以从[查询产品规格列表](ListEngineProducts.xml)获取。 [创建kafka实例,支持的产品规格有: (product_id/specification/partition_num/storage_space)  00300-30308-0--0/100MB/300/600;  00300-30310-0--0/300MB/900/1200;  00300-30312-0--0/600MB/1800/2400;  00300-30314-0--0/1200MB/1800/4800](tag:dt)
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
    *  维护时间窗开始时间，格式为HH:mm。
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
    * @param string|null $maintainBegin 维护时间窗开始时间，格式为HH:mm。
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
    *  维护时间窗结束时间，格式为HH:mm。
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
    * @param string|null $maintainEnd 维护时间窗结束时间，格式为HH:mm。
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
    * Gets publicBandwidth
    *  表示公网带宽，单位是Mbit/s。   [取值范围：   - Kafka实例规格为100MB时，公网带宽取值范围3到900，且必须为实例节点个数的倍数。   - Kafka实例规格为300MB时，公网带宽取值范围3到900，且必须为实例节点个数的倍数。   - Kafka实例规格为600MB时，公网带宽取值范围4到1200，且必须为实例节点个数的倍数。   - Kafka实例规格为1200MB时，公网带宽取值范围8到2400，且必须为实例节点个数的倍数。](tag:hws,hws_hk,dt,ocb,hws_ocb,ctc,sbc,hk_sbc,cmcc,g42,tm,hk_g42,hk_tm)    [老规格实例取值范围：   - Kafka实例规格为100MB时，公网带宽取值范围3到900，且必须为实例节点个数的倍数。   - Kafka实例规格为300MB时，公网带宽取值范围3到900，且必须为实例节点个数的倍数。   - Kafka实例规格为600MB时，公网带宽取值范围4到1200，且必须为实例节点个数的倍数。   - Kafka实例规格为1200MB时，公网带宽取值范围8到2400，且必须为实例节点个数的倍数。    新规格实例取值范围：   - Kafka实例规格为c6.2u4g.cluster时，公网带宽取值范围3到250，且必须为实例节点个数的倍数。   - Kafka实例规格为c6.4u8g.cluster时，公网带宽取值范围3到500，且必须为实例节点个数的倍数。   - Kafka实例规格为c6.8u16g.cluster时，公网带宽取值范围4到1000，且必须为实例节点个数的倍数。   - Kafka实例规格为c6.12u24g.cluster时，公网带宽取值范围8到1500，且必须为实例节点个数的倍数。   -  Kafka实例规格为c6.16u32g.cluster时，公网带宽取值范围8到2000，且必须为实例节点个数的倍数。](tag:hws,hws_hk)
    *
    * @return int|null
    */
    public function getPublicBandwidth()
    {
        return $this->container['publicBandwidth'];
    }

    /**
    * Sets publicBandwidth
    *
    * @param int|null $publicBandwidth 表示公网带宽，单位是Mbit/s。   [取值范围：   - Kafka实例规格为100MB时，公网带宽取值范围3到900，且必须为实例节点个数的倍数。   - Kafka实例规格为300MB时，公网带宽取值范围3到900，且必须为实例节点个数的倍数。   - Kafka实例规格为600MB时，公网带宽取值范围4到1200，且必须为实例节点个数的倍数。   - Kafka实例规格为1200MB时，公网带宽取值范围8到2400，且必须为实例节点个数的倍数。](tag:hws,hws_hk,dt,ocb,hws_ocb,ctc,sbc,hk_sbc,cmcc,g42,tm,hk_g42,hk_tm)    [老规格实例取值范围：   - Kafka实例规格为100MB时，公网带宽取值范围3到900，且必须为实例节点个数的倍数。   - Kafka实例规格为300MB时，公网带宽取值范围3到900，且必须为实例节点个数的倍数。   - Kafka实例规格为600MB时，公网带宽取值范围4到1200，且必须为实例节点个数的倍数。   - Kafka实例规格为1200MB时，公网带宽取值范围8到2400，且必须为实例节点个数的倍数。    新规格实例取值范围：   - Kafka实例规格为c6.2u4g.cluster时，公网带宽取值范围3到250，且必须为实例节点个数的倍数。   - Kafka实例规格为c6.4u8g.cluster时，公网带宽取值范围3到500，且必须为实例节点个数的倍数。   - Kafka实例规格为c6.8u16g.cluster时，公网带宽取值范围4到1000，且必须为实例节点个数的倍数。   - Kafka实例规格为c6.12u24g.cluster时，公网带宽取值范围8到1500，且必须为实例节点个数的倍数。   -  Kafka实例规格为c6.16u32g.cluster时，公网带宽取值范围8到2000，且必须为实例节点个数的倍数。](tag:hws,hws_hk)
    *
    * @return $this
    */
    public function setPublicBandwidth($publicBandwidth)
    {
        $this->container['publicBandwidth'] = $publicBandwidth;
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
    *  开启SASL后使用的安全协议。 - SASL_SSL: 使用SSL证书加密传输，支持账号密码认证，安全性更高。 - SASL_PLAINTEXT: 通过明文传输，支持账号密码认证，性能更好。  若该字段值为空，默认开启SASL_SSL认证机制。实例创建后，此参数不支持动态修改。 若创建实例时，使用了port_protocol参数，则Kafka的内网访问安全协议以及公网访问安全协议会使用port_protocol中的值，则此参数无效。
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
    * @param string|null $kafkaSecurityProtocol 开启SASL后使用的安全协议。 - SASL_SSL: 使用SSL证书加密传输，支持账号密码认证，安全性更高。 - SASL_PLAINTEXT: 通过明文传输，支持账号密码认证，性能更好。  若该字段值为空，默认开启SASL_SSL认证机制。实例创建后，此参数不支持动态修改。 若创建实例时，使用了port_protocol参数，则Kafka的内网访问安全协议以及公网访问安全协议会使用port_protocol中的值，则此参数无效。
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
    *  是否打开Kafka自动创建Topic功能。 - true：开启 - false：关闭  当您选择开启，表示生产或消费一个未创建的Topic时，会自动创建一个包含3个分区和3个副本的Topic。  默认是false关闭。
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
    * @param bool|null $enableAutoTopic 是否打开Kafka自动创建Topic功能。 - true：开启 - false：关闭  当您选择开启，表示生产或消费一个未创建的Topic时，会自动创建一个包含3个分区和3个副本的Topic。  默认是false关闭。
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
    *  存储IO规格。 [新老规格的实例的存储IO规格不相同，创建实例请选择对应的存储IO规格。 新规格实例取值范围：   - dms.physical.storage.high.v2：使用高IO的磁盘类型。   - dms.physical.storage.ultra.v2：使用超高IO的磁盘类型。  老规格实例取值范围：](tag:hc,hk)   - 参数specification为100MB/300MB时，取值dms.physical.storage.high或者dms.physical.storage.ultra   - 参数specification为600MB/1200MB时，取值dms.physical.storage.ultra  如何选择磁盘类型请参考《云硬盘 [产品介绍](tag:hws,hws_hk,hws_eu,cmcc)[用户指南](tag:dt,g42,hk_g42,ctc,tm,hk_tm,sbc,ocb,hws_ocb)》的“磁盘类型及性能介绍”。
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
    * @param string $storageSpecCode 存储IO规格。 [新老规格的实例的存储IO规格不相同，创建实例请选择对应的存储IO规格。 新规格实例取值范围：   - dms.physical.storage.high.v2：使用高IO的磁盘类型。   - dms.physical.storage.ultra.v2：使用超高IO的磁盘类型。  老规格实例取值范围：](tag:hc,hk)   - 参数specification为100MB/300MB时，取值dms.physical.storage.high或者dms.physical.storage.ultra   - 参数specification为600MB/1200MB时，取值dms.physical.storage.ultra  如何选择磁盘类型请参考《云硬盘 [产品介绍](tag:hws,hws_hk,hws_eu,cmcc)[用户指南](tag:dt,g42,hk_g42,ctc,tm,hk_tm,sbc,ocb,hws_ocb)》的“磁盘类型及性能介绍”。
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
    *  企业项目ID。若为企业项目账号，该参数必填。
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
    * @param string|null $enterpriseProjectId 企业项目ID。若为企业项目账号，该参数必填。
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

