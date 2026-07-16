<?php

namespace HuaweiCloud\SDK\ModelArts\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ServerCreateRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ServerCreateRequest';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * adminPass  **参数解释**：用于登录服务器的密码。admin_pass和key_pair_name必须二选一。密码规则： - 长度为8至26个字符 - 至少包含大写字母、小写字母、数字及特殊符号(!@%-_=+[{}]:,./?)中的3种 - 不能与用户名或倒序的用户名相同 - 不能包含root或administrator及其逆序 **约束限制**：admin_pass和key_pair_name不能同时存在。 **取值范围**：长度为8至26个字符，满足上述密码规则。 **默认取值**：不涉及。
    * arch  **参数解释**：服务器规格架构类型。 **约束限制**：不涉及。 **取值范围**： - X86：CPU架构为X86 - ARM：CPU架构为ARM **默认取值**：不涉及。
    * availabilityZone  **参数解释**：服务器所在的可用区。 **约束限制**：不涉及。 **取值范围**：长度为1至256个字符，只能包含字母、数字、中划线、下划线和点。 **默认取值**：不涉及。
    * chargingInfo  chargingInfo
    * count  **参数解释**：单次购买的服务器数量。 **约束限制**：不支持超节点。 **取值范围**：1至10。 **默认取值**：不涉及。
    * enterpriseProjectId  **参数解释**：企业ID。 **约束限制**：不涉及。 **取值范围**：长度为1至36个字符，只能包含字母、数字、中划线、下划线和点。 **默认取值**：不涉及。
    * flavor  **参数解释**：服务器规格名称。 **约束限制**：flavor和resource_flavor二选一。 **取值范围**：长度为1至128个字符。 **默认取值**：不涉及。
    * resourceFlavor  **参数解释**：服务器资源规格名称。 **约束限制**：flavor和resource_flavor二选一。 **取值范围**：长度为1至256个字符，只能包含字母、数字、中划线、下划线和点。 **默认取值**：不涉及。
    * imageId  **参数解释**：服务器镜像ID。 **约束限制**：不涉及。 **取值范围**：长度为36个字符，符合UUID格式。 **默认取值**：不涉及。
    * keyPairName  **参数解释**：服务器登录密钥对名称。admin_pass和key_pair_name必须二选一。注意超节点仅支持使用密钥对创建。 **约束限制**：admin_pass和key_pair_name不能同时存在。 **取值范围**：长度为1至64个字符，只能包含字母、数字、中划线、下划线和点。 **默认取值**：不涉及。
    * name  **参数解释**：服务器名称。 **约束限制**：不涉及。 **取值范围**：长度为1至64个字符，只能包含字母、数字、中划线、下划线和点。 **默认取值**：不涉及。
    * network  network
    * rootVolume  rootVolume
    * dataVolume  dataVolume
    * serverType  **参数解释**：服务器类型。 **约束限制**：不涉及。 **取值范围**： - BMS：裸金属服务 - ECS：弹性云服务 - HPS：超节点服务 **默认取值**：不涉及。
    * userData  **参数解释**： 创建云服务器过程中待注入实例自定义数据。支持注入文本、文本文件。 示例： base64编码前： * Linux服务器： ```bash #!/bin/bash echo user_test > /home/user.txt ``` base64编码后： * Linux服务器： ```bash IyEvYmluL2Jhc2gKZWNobyB1c2VyX3Rlc3QgPiAvaG9tZS91c2VyLnR4dA== ``` 了解更多实例自定义数据注入请参考[[用户数据注入](https://support.huaweicloud.com/usermanual-ecs/zh-cn_topic_0032380449.html)](tag:hc)[[用户数据注入](https://support.huaweicloud.com/intl/zh-cn/usermanual-ecs/zh-cn_topic_0032380449.html)](tag:hk)[ECS服务“通过实例自定义数据配置ECS实例”章节](tag:fcs,hcso)。 用户需明确user_data的使用效果，可能产生的影响和风险由用户自行承担。 **约束限制**： - user_data的值为base64编码之后的内容。 - 注入内容（编码之前的内容）最大长度为32K。  **取值范围**：不涉及。 **默认取值**：不涉及。
    * hpsClusterId  **参数解释**：超节点集群网络信息。仅在创建超节点时需要该参数。 **约束限制**：仅用于创建HPS类型的服务器。 **取值范围**：长度为36个字符，符合UUID格式。 **默认取值**：不涉及。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'adminPass' => 'string',
            'arch' => 'string',
            'availabilityZone' => 'string',
            'chargingInfo' => '\HuaweiCloud\SDK\ModelArts\V1\Model\ChargingInfo',
            'count' => 'int',
            'enterpriseProjectId' => 'string',
            'flavor' => 'string',
            'resourceFlavor' => 'string',
            'imageId' => 'string',
            'keyPairName' => 'string',
            'name' => 'string',
            'network' => '\HuaweiCloud\SDK\ModelArts\V1\Model\ServerNetwork',
            'rootVolume' => '\HuaweiCloud\SDK\ModelArts\V1\Model\EvsVolume',
            'dataVolume' => '\HuaweiCloud\SDK\ModelArts\V1\Model\ServerDataVolume',
            'serverType' => 'string',
            'userData' => 'string',
            'hpsClusterId' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * adminPass  **参数解释**：用于登录服务器的密码。admin_pass和key_pair_name必须二选一。密码规则： - 长度为8至26个字符 - 至少包含大写字母、小写字母、数字及特殊符号(!@%-_=+[{}]:,./?)中的3种 - 不能与用户名或倒序的用户名相同 - 不能包含root或administrator及其逆序 **约束限制**：admin_pass和key_pair_name不能同时存在。 **取值范围**：长度为8至26个字符，满足上述密码规则。 **默认取值**：不涉及。
    * arch  **参数解释**：服务器规格架构类型。 **约束限制**：不涉及。 **取值范围**： - X86：CPU架构为X86 - ARM：CPU架构为ARM **默认取值**：不涉及。
    * availabilityZone  **参数解释**：服务器所在的可用区。 **约束限制**：不涉及。 **取值范围**：长度为1至256个字符，只能包含字母、数字、中划线、下划线和点。 **默认取值**：不涉及。
    * chargingInfo  chargingInfo
    * count  **参数解释**：单次购买的服务器数量。 **约束限制**：不支持超节点。 **取值范围**：1至10。 **默认取值**：不涉及。
    * enterpriseProjectId  **参数解释**：企业ID。 **约束限制**：不涉及。 **取值范围**：长度为1至36个字符，只能包含字母、数字、中划线、下划线和点。 **默认取值**：不涉及。
    * flavor  **参数解释**：服务器规格名称。 **约束限制**：flavor和resource_flavor二选一。 **取值范围**：长度为1至128个字符。 **默认取值**：不涉及。
    * resourceFlavor  **参数解释**：服务器资源规格名称。 **约束限制**：flavor和resource_flavor二选一。 **取值范围**：长度为1至256个字符，只能包含字母、数字、中划线、下划线和点。 **默认取值**：不涉及。
    * imageId  **参数解释**：服务器镜像ID。 **约束限制**：不涉及。 **取值范围**：长度为36个字符，符合UUID格式。 **默认取值**：不涉及。
    * keyPairName  **参数解释**：服务器登录密钥对名称。admin_pass和key_pair_name必须二选一。注意超节点仅支持使用密钥对创建。 **约束限制**：admin_pass和key_pair_name不能同时存在。 **取值范围**：长度为1至64个字符，只能包含字母、数字、中划线、下划线和点。 **默认取值**：不涉及。
    * name  **参数解释**：服务器名称。 **约束限制**：不涉及。 **取值范围**：长度为1至64个字符，只能包含字母、数字、中划线、下划线和点。 **默认取值**：不涉及。
    * network  network
    * rootVolume  rootVolume
    * dataVolume  dataVolume
    * serverType  **参数解释**：服务器类型。 **约束限制**：不涉及。 **取值范围**： - BMS：裸金属服务 - ECS：弹性云服务 - HPS：超节点服务 **默认取值**：不涉及。
    * userData  **参数解释**： 创建云服务器过程中待注入实例自定义数据。支持注入文本、文本文件。 示例： base64编码前： * Linux服务器： ```bash #!/bin/bash echo user_test > /home/user.txt ``` base64编码后： * Linux服务器： ```bash IyEvYmluL2Jhc2gKZWNobyB1c2VyX3Rlc3QgPiAvaG9tZS91c2VyLnR4dA== ``` 了解更多实例自定义数据注入请参考[[用户数据注入](https://support.huaweicloud.com/usermanual-ecs/zh-cn_topic_0032380449.html)](tag:hc)[[用户数据注入](https://support.huaweicloud.com/intl/zh-cn/usermanual-ecs/zh-cn_topic_0032380449.html)](tag:hk)[ECS服务“通过实例自定义数据配置ECS实例”章节](tag:fcs,hcso)。 用户需明确user_data的使用效果，可能产生的影响和风险由用户自行承担。 **约束限制**： - user_data的值为base64编码之后的内容。 - 注入内容（编码之前的内容）最大长度为32K。  **取值范围**：不涉及。 **默认取值**：不涉及。
    * hpsClusterId  **参数解释**：超节点集群网络信息。仅在创建超节点时需要该参数。 **约束限制**：仅用于创建HPS类型的服务器。 **取值范围**：长度为36个字符，符合UUID格式。 **默认取值**：不涉及。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'adminPass' => null,
        'arch' => null,
        'availabilityZone' => null,
        'chargingInfo' => null,
        'count' => 'int32',
        'enterpriseProjectId' => null,
        'flavor' => null,
        'resourceFlavor' => null,
        'imageId' => null,
        'keyPairName' => null,
        'name' => null,
        'network' => null,
        'rootVolume' => null,
        'dataVolume' => null,
        'serverType' => null,
        'userData' => null,
        'hpsClusterId' => null
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
    * adminPass  **参数解释**：用于登录服务器的密码。admin_pass和key_pair_name必须二选一。密码规则： - 长度为8至26个字符 - 至少包含大写字母、小写字母、数字及特殊符号(!@%-_=+[{}]:,./?)中的3种 - 不能与用户名或倒序的用户名相同 - 不能包含root或administrator及其逆序 **约束限制**：admin_pass和key_pair_name不能同时存在。 **取值范围**：长度为8至26个字符，满足上述密码规则。 **默认取值**：不涉及。
    * arch  **参数解释**：服务器规格架构类型。 **约束限制**：不涉及。 **取值范围**： - X86：CPU架构为X86 - ARM：CPU架构为ARM **默认取值**：不涉及。
    * availabilityZone  **参数解释**：服务器所在的可用区。 **约束限制**：不涉及。 **取值范围**：长度为1至256个字符，只能包含字母、数字、中划线、下划线和点。 **默认取值**：不涉及。
    * chargingInfo  chargingInfo
    * count  **参数解释**：单次购买的服务器数量。 **约束限制**：不支持超节点。 **取值范围**：1至10。 **默认取值**：不涉及。
    * enterpriseProjectId  **参数解释**：企业ID。 **约束限制**：不涉及。 **取值范围**：长度为1至36个字符，只能包含字母、数字、中划线、下划线和点。 **默认取值**：不涉及。
    * flavor  **参数解释**：服务器规格名称。 **约束限制**：flavor和resource_flavor二选一。 **取值范围**：长度为1至128个字符。 **默认取值**：不涉及。
    * resourceFlavor  **参数解释**：服务器资源规格名称。 **约束限制**：flavor和resource_flavor二选一。 **取值范围**：长度为1至256个字符，只能包含字母、数字、中划线、下划线和点。 **默认取值**：不涉及。
    * imageId  **参数解释**：服务器镜像ID。 **约束限制**：不涉及。 **取值范围**：长度为36个字符，符合UUID格式。 **默认取值**：不涉及。
    * keyPairName  **参数解释**：服务器登录密钥对名称。admin_pass和key_pair_name必须二选一。注意超节点仅支持使用密钥对创建。 **约束限制**：admin_pass和key_pair_name不能同时存在。 **取值范围**：长度为1至64个字符，只能包含字母、数字、中划线、下划线和点。 **默认取值**：不涉及。
    * name  **参数解释**：服务器名称。 **约束限制**：不涉及。 **取值范围**：长度为1至64个字符，只能包含字母、数字、中划线、下划线和点。 **默认取值**：不涉及。
    * network  network
    * rootVolume  rootVolume
    * dataVolume  dataVolume
    * serverType  **参数解释**：服务器类型。 **约束限制**：不涉及。 **取值范围**： - BMS：裸金属服务 - ECS：弹性云服务 - HPS：超节点服务 **默认取值**：不涉及。
    * userData  **参数解释**： 创建云服务器过程中待注入实例自定义数据。支持注入文本、文本文件。 示例： base64编码前： * Linux服务器： ```bash #!/bin/bash echo user_test > /home/user.txt ``` base64编码后： * Linux服务器： ```bash IyEvYmluL2Jhc2gKZWNobyB1c2VyX3Rlc3QgPiAvaG9tZS91c2VyLnR4dA== ``` 了解更多实例自定义数据注入请参考[[用户数据注入](https://support.huaweicloud.com/usermanual-ecs/zh-cn_topic_0032380449.html)](tag:hc)[[用户数据注入](https://support.huaweicloud.com/intl/zh-cn/usermanual-ecs/zh-cn_topic_0032380449.html)](tag:hk)[ECS服务“通过实例自定义数据配置ECS实例”章节](tag:fcs,hcso)。 用户需明确user_data的使用效果，可能产生的影响和风险由用户自行承担。 **约束限制**： - user_data的值为base64编码之后的内容。 - 注入内容（编码之前的内容）最大长度为32K。  **取值范围**：不涉及。 **默认取值**：不涉及。
    * hpsClusterId  **参数解释**：超节点集群网络信息。仅在创建超节点时需要该参数。 **约束限制**：仅用于创建HPS类型的服务器。 **取值范围**：长度为36个字符，符合UUID格式。 **默认取值**：不涉及。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'adminPass' => 'admin_pass',
            'arch' => 'arch',
            'availabilityZone' => 'availability_zone',
            'chargingInfo' => 'charging_info',
            'count' => 'count',
            'enterpriseProjectId' => 'enterprise_project_id',
            'flavor' => 'flavor',
            'resourceFlavor' => 'resource_flavor',
            'imageId' => 'image_id',
            'keyPairName' => 'key_pair_name',
            'name' => 'name',
            'network' => 'network',
            'rootVolume' => 'root_volume',
            'dataVolume' => 'data_volume',
            'serverType' => 'server_type',
            'userData' => 'user_data',
            'hpsClusterId' => 'hps_cluster_id'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * adminPass  **参数解释**：用于登录服务器的密码。admin_pass和key_pair_name必须二选一。密码规则： - 长度为8至26个字符 - 至少包含大写字母、小写字母、数字及特殊符号(!@%-_=+[{}]:,./?)中的3种 - 不能与用户名或倒序的用户名相同 - 不能包含root或administrator及其逆序 **约束限制**：admin_pass和key_pair_name不能同时存在。 **取值范围**：长度为8至26个字符，满足上述密码规则。 **默认取值**：不涉及。
    * arch  **参数解释**：服务器规格架构类型。 **约束限制**：不涉及。 **取值范围**： - X86：CPU架构为X86 - ARM：CPU架构为ARM **默认取值**：不涉及。
    * availabilityZone  **参数解释**：服务器所在的可用区。 **约束限制**：不涉及。 **取值范围**：长度为1至256个字符，只能包含字母、数字、中划线、下划线和点。 **默认取值**：不涉及。
    * chargingInfo  chargingInfo
    * count  **参数解释**：单次购买的服务器数量。 **约束限制**：不支持超节点。 **取值范围**：1至10。 **默认取值**：不涉及。
    * enterpriseProjectId  **参数解释**：企业ID。 **约束限制**：不涉及。 **取值范围**：长度为1至36个字符，只能包含字母、数字、中划线、下划线和点。 **默认取值**：不涉及。
    * flavor  **参数解释**：服务器规格名称。 **约束限制**：flavor和resource_flavor二选一。 **取值范围**：长度为1至128个字符。 **默认取值**：不涉及。
    * resourceFlavor  **参数解释**：服务器资源规格名称。 **约束限制**：flavor和resource_flavor二选一。 **取值范围**：长度为1至256个字符，只能包含字母、数字、中划线、下划线和点。 **默认取值**：不涉及。
    * imageId  **参数解释**：服务器镜像ID。 **约束限制**：不涉及。 **取值范围**：长度为36个字符，符合UUID格式。 **默认取值**：不涉及。
    * keyPairName  **参数解释**：服务器登录密钥对名称。admin_pass和key_pair_name必须二选一。注意超节点仅支持使用密钥对创建。 **约束限制**：admin_pass和key_pair_name不能同时存在。 **取值范围**：长度为1至64个字符，只能包含字母、数字、中划线、下划线和点。 **默认取值**：不涉及。
    * name  **参数解释**：服务器名称。 **约束限制**：不涉及。 **取值范围**：长度为1至64个字符，只能包含字母、数字、中划线、下划线和点。 **默认取值**：不涉及。
    * network  network
    * rootVolume  rootVolume
    * dataVolume  dataVolume
    * serverType  **参数解释**：服务器类型。 **约束限制**：不涉及。 **取值范围**： - BMS：裸金属服务 - ECS：弹性云服务 - HPS：超节点服务 **默认取值**：不涉及。
    * userData  **参数解释**： 创建云服务器过程中待注入实例自定义数据。支持注入文本、文本文件。 示例： base64编码前： * Linux服务器： ```bash #!/bin/bash echo user_test > /home/user.txt ``` base64编码后： * Linux服务器： ```bash IyEvYmluL2Jhc2gKZWNobyB1c2VyX3Rlc3QgPiAvaG9tZS91c2VyLnR4dA== ``` 了解更多实例自定义数据注入请参考[[用户数据注入](https://support.huaweicloud.com/usermanual-ecs/zh-cn_topic_0032380449.html)](tag:hc)[[用户数据注入](https://support.huaweicloud.com/intl/zh-cn/usermanual-ecs/zh-cn_topic_0032380449.html)](tag:hk)[ECS服务“通过实例自定义数据配置ECS实例”章节](tag:fcs,hcso)。 用户需明确user_data的使用效果，可能产生的影响和风险由用户自行承担。 **约束限制**： - user_data的值为base64编码之后的内容。 - 注入内容（编码之前的内容）最大长度为32K。  **取值范围**：不涉及。 **默认取值**：不涉及。
    * hpsClusterId  **参数解释**：超节点集群网络信息。仅在创建超节点时需要该参数。 **约束限制**：仅用于创建HPS类型的服务器。 **取值范围**：长度为36个字符，符合UUID格式。 **默认取值**：不涉及。
    *
    * @var string[]
    */
    protected static $setters = [
            'adminPass' => 'setAdminPass',
            'arch' => 'setArch',
            'availabilityZone' => 'setAvailabilityZone',
            'chargingInfo' => 'setChargingInfo',
            'count' => 'setCount',
            'enterpriseProjectId' => 'setEnterpriseProjectId',
            'flavor' => 'setFlavor',
            'resourceFlavor' => 'setResourceFlavor',
            'imageId' => 'setImageId',
            'keyPairName' => 'setKeyPairName',
            'name' => 'setName',
            'network' => 'setNetwork',
            'rootVolume' => 'setRootVolume',
            'dataVolume' => 'setDataVolume',
            'serverType' => 'setServerType',
            'userData' => 'setUserData',
            'hpsClusterId' => 'setHpsClusterId'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * adminPass  **参数解释**：用于登录服务器的密码。admin_pass和key_pair_name必须二选一。密码规则： - 长度为8至26个字符 - 至少包含大写字母、小写字母、数字及特殊符号(!@%-_=+[{}]:,./?)中的3种 - 不能与用户名或倒序的用户名相同 - 不能包含root或administrator及其逆序 **约束限制**：admin_pass和key_pair_name不能同时存在。 **取值范围**：长度为8至26个字符，满足上述密码规则。 **默认取值**：不涉及。
    * arch  **参数解释**：服务器规格架构类型。 **约束限制**：不涉及。 **取值范围**： - X86：CPU架构为X86 - ARM：CPU架构为ARM **默认取值**：不涉及。
    * availabilityZone  **参数解释**：服务器所在的可用区。 **约束限制**：不涉及。 **取值范围**：长度为1至256个字符，只能包含字母、数字、中划线、下划线和点。 **默认取值**：不涉及。
    * chargingInfo  chargingInfo
    * count  **参数解释**：单次购买的服务器数量。 **约束限制**：不支持超节点。 **取值范围**：1至10。 **默认取值**：不涉及。
    * enterpriseProjectId  **参数解释**：企业ID。 **约束限制**：不涉及。 **取值范围**：长度为1至36个字符，只能包含字母、数字、中划线、下划线和点。 **默认取值**：不涉及。
    * flavor  **参数解释**：服务器规格名称。 **约束限制**：flavor和resource_flavor二选一。 **取值范围**：长度为1至128个字符。 **默认取值**：不涉及。
    * resourceFlavor  **参数解释**：服务器资源规格名称。 **约束限制**：flavor和resource_flavor二选一。 **取值范围**：长度为1至256个字符，只能包含字母、数字、中划线、下划线和点。 **默认取值**：不涉及。
    * imageId  **参数解释**：服务器镜像ID。 **约束限制**：不涉及。 **取值范围**：长度为36个字符，符合UUID格式。 **默认取值**：不涉及。
    * keyPairName  **参数解释**：服务器登录密钥对名称。admin_pass和key_pair_name必须二选一。注意超节点仅支持使用密钥对创建。 **约束限制**：admin_pass和key_pair_name不能同时存在。 **取值范围**：长度为1至64个字符，只能包含字母、数字、中划线、下划线和点。 **默认取值**：不涉及。
    * name  **参数解释**：服务器名称。 **约束限制**：不涉及。 **取值范围**：长度为1至64个字符，只能包含字母、数字、中划线、下划线和点。 **默认取值**：不涉及。
    * network  network
    * rootVolume  rootVolume
    * dataVolume  dataVolume
    * serverType  **参数解释**：服务器类型。 **约束限制**：不涉及。 **取值范围**： - BMS：裸金属服务 - ECS：弹性云服务 - HPS：超节点服务 **默认取值**：不涉及。
    * userData  **参数解释**： 创建云服务器过程中待注入实例自定义数据。支持注入文本、文本文件。 示例： base64编码前： * Linux服务器： ```bash #!/bin/bash echo user_test > /home/user.txt ``` base64编码后： * Linux服务器： ```bash IyEvYmluL2Jhc2gKZWNobyB1c2VyX3Rlc3QgPiAvaG9tZS91c2VyLnR4dA== ``` 了解更多实例自定义数据注入请参考[[用户数据注入](https://support.huaweicloud.com/usermanual-ecs/zh-cn_topic_0032380449.html)](tag:hc)[[用户数据注入](https://support.huaweicloud.com/intl/zh-cn/usermanual-ecs/zh-cn_topic_0032380449.html)](tag:hk)[ECS服务“通过实例自定义数据配置ECS实例”章节](tag:fcs,hcso)。 用户需明确user_data的使用效果，可能产生的影响和风险由用户自行承担。 **约束限制**： - user_data的值为base64编码之后的内容。 - 注入内容（编码之前的内容）最大长度为32K。  **取值范围**：不涉及。 **默认取值**：不涉及。
    * hpsClusterId  **参数解释**：超节点集群网络信息。仅在创建超节点时需要该参数。 **约束限制**：仅用于创建HPS类型的服务器。 **取值范围**：长度为36个字符，符合UUID格式。 **默认取值**：不涉及。
    *
    * @var string[]
    */
    protected static $getters = [
            'adminPass' => 'getAdminPass',
            'arch' => 'getArch',
            'availabilityZone' => 'getAvailabilityZone',
            'chargingInfo' => 'getChargingInfo',
            'count' => 'getCount',
            'enterpriseProjectId' => 'getEnterpriseProjectId',
            'flavor' => 'getFlavor',
            'resourceFlavor' => 'getResourceFlavor',
            'imageId' => 'getImageId',
            'keyPairName' => 'getKeyPairName',
            'name' => 'getName',
            'network' => 'getNetwork',
            'rootVolume' => 'getRootVolume',
            'dataVolume' => 'getDataVolume',
            'serverType' => 'getServerType',
            'userData' => 'getUserData',
            'hpsClusterId' => 'getHpsClusterId'
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
    const ARCH_ARM = 'ARM';
    const ARCH_X86 = 'X86';
    const SERVER_TYPE_BMS = 'BMS';
    const SERVER_TYPE_ECS = 'ECS';
    const SERVER_TYPE_HPS = 'HPS';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getArchAllowableValues()
    {
        return [
            self::ARCH_ARM,
            self::ARCH_X86,
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
            self::SERVER_TYPE_BMS,
            self::SERVER_TYPE_ECS,
            self::SERVER_TYPE_HPS,
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
        $this->container['adminPass'] = isset($data['adminPass']) ? $data['adminPass'] : null;
        $this->container['arch'] = isset($data['arch']) ? $data['arch'] : null;
        $this->container['availabilityZone'] = isset($data['availabilityZone']) ? $data['availabilityZone'] : null;
        $this->container['chargingInfo'] = isset($data['chargingInfo']) ? $data['chargingInfo'] : null;
        $this->container['count'] = isset($data['count']) ? $data['count'] : null;
        $this->container['enterpriseProjectId'] = isset($data['enterpriseProjectId']) ? $data['enterpriseProjectId'] : null;
        $this->container['flavor'] = isset($data['flavor']) ? $data['flavor'] : null;
        $this->container['resourceFlavor'] = isset($data['resourceFlavor']) ? $data['resourceFlavor'] : null;
        $this->container['imageId'] = isset($data['imageId']) ? $data['imageId'] : null;
        $this->container['keyPairName'] = isset($data['keyPairName']) ? $data['keyPairName'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['network'] = isset($data['network']) ? $data['network'] : null;
        $this->container['rootVolume'] = isset($data['rootVolume']) ? $data['rootVolume'] : null;
        $this->container['dataVolume'] = isset($data['dataVolume']) ? $data['dataVolume'] : null;
        $this->container['serverType'] = isset($data['serverType']) ? $data['serverType'] : null;
        $this->container['userData'] = isset($data['userData']) ? $data['userData'] : null;
        $this->container['hpsClusterId'] = isset($data['hpsClusterId']) ? $data['hpsClusterId'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['adminPass']) && !preg_match("/^.{8,26}$/", $this->container['adminPass'])) {
                $invalidProperties[] = "invalid value for 'adminPass', must be conform to the pattern /^.{8,26}$/.";
            }
            $allowedValues = $this->getArchAllowableValues();
                if (!is_null($this->container['arch']) && !in_array($this->container['arch'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'arch', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            if (!is_null($this->container['availabilityZone']) && !preg_match("/^[0-9a-zA-Z-_.]{1,256}$/", $this->container['availabilityZone'])) {
                $invalidProperties[] = "invalid value for 'availabilityZone', must be conform to the pattern /^[0-9a-zA-Z-_.]{1,256}$/.";
            }
            if (!is_null($this->container['count']) && ($this->container['count'] > 10)) {
                $invalidProperties[] = "invalid value for 'count', must be smaller than or equal to 10.";
            }
            if (!is_null($this->container['count']) && ($this->container['count'] < 1)) {
                $invalidProperties[] = "invalid value for 'count', must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['enterpriseProjectId']) && !preg_match("/^[-_.a-zA-Z0-9]{1,36}$/", $this->container['enterpriseProjectId'])) {
                $invalidProperties[] = "invalid value for 'enterpriseProjectId', must be conform to the pattern /^[-_.a-zA-Z0-9]{1,36}$/.";
            }
            if (!is_null($this->container['flavor']) && !preg_match("/^[a-zA-Z0-9.]{1,128}$/", $this->container['flavor'])) {
                $invalidProperties[] = "invalid value for 'flavor', must be conform to the pattern /^[a-zA-Z0-9.]{1,128}$/.";
            }
        if ($this->container['imageId'] === null) {
            $invalidProperties[] = "'imageId' can't be null";
        }
            if (!preg_match("/^[0-9a-f]{8}-[0-9a-f]{4}-[1-5][0-9a-f]{3}-[89ab][0-9a-f]{3}-[0-9a-f]{12}$/", $this->container['imageId'])) {
                $invalidProperties[] = "invalid value for 'imageId', must be conform to the pattern /^[0-9a-f]{8}-[0-9a-f]{4}-[1-5][0-9a-f]{3}-[89ab][0-9a-f]{3}-[0-9a-f]{12}$/.";
            }
            if (!is_null($this->container['keyPairName']) && !preg_match("/^[-_.a-zA-Z0-9]{1,64}$/", $this->container['keyPairName'])) {
                $invalidProperties[] = "invalid value for 'keyPairName', must be conform to the pattern /^[-_.a-zA-Z0-9]{1,64}$/.";
            }
        if ($this->container['name'] === null) {
            $invalidProperties[] = "'name' can't be null";
        }
            if (!preg_match("/^[-_.a-zA-Z0-9]{1,64}$/", $this->container['name'])) {
                $invalidProperties[] = "invalid value for 'name', must be conform to the pattern /^[-_.a-zA-Z0-9]{1,64}$/.";
            }
        if ($this->container['network'] === null) {
            $invalidProperties[] = "'network' can't be null";
        }
            $allowedValues = $this->getServerTypeAllowableValues();
                if (!is_null($this->container['serverType']) && !in_array($this->container['serverType'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'serverType', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            if (!is_null($this->container['userData']) && (mb_strlen($this->container['userData']) > 2147483647)) {
                $invalidProperties[] = "invalid value for 'userData', the character length must be smaller than or equal to 2147483647.";
            }
            if (!is_null($this->container['userData']) && (mb_strlen($this->container['userData']) < 0)) {
                $invalidProperties[] = "invalid value for 'userData', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['hpsClusterId']) && !preg_match("/^[0-9a-f]{8}-[0-9a-f]{4}-[1-5][0-9a-f]{3}-[89ab][0-9a-f]{3}-[0-9a-f]{12}$/", $this->container['hpsClusterId'])) {
                $invalidProperties[] = "invalid value for 'hpsClusterId', must be conform to the pattern /^[0-9a-f]{8}-[0-9a-f]{4}-[1-5][0-9a-f]{3}-[89ab][0-9a-f]{3}-[0-9a-f]{12}$/.";
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
    * Gets adminPass
    *  **参数解释**：用于登录服务器的密码。admin_pass和key_pair_name必须二选一。密码规则： - 长度为8至26个字符 - 至少包含大写字母、小写字母、数字及特殊符号(!@%-_=+[{}]:,./?)中的3种 - 不能与用户名或倒序的用户名相同 - 不能包含root或administrator及其逆序 **约束限制**：admin_pass和key_pair_name不能同时存在。 **取值范围**：长度为8至26个字符，满足上述密码规则。 **默认取值**：不涉及。
    *
    * @return string|null
    */
    public function getAdminPass()
    {
        return $this->container['adminPass'];
    }

    /**
    * Sets adminPass
    *
    * @param string|null $adminPass **参数解释**：用于登录服务器的密码。admin_pass和key_pair_name必须二选一。密码规则： - 长度为8至26个字符 - 至少包含大写字母、小写字母、数字及特殊符号(!@%-_=+[{}]:,./?)中的3种 - 不能与用户名或倒序的用户名相同 - 不能包含root或administrator及其逆序 **约束限制**：admin_pass和key_pair_name不能同时存在。 **取值范围**：长度为8至26个字符，满足上述密码规则。 **默认取值**：不涉及。
    *
    * @return $this
    */
    public function setAdminPass($adminPass)
    {
        $this->container['adminPass'] = $adminPass;
        return $this;
    }

    /**
    * Gets arch
    *  **参数解释**：服务器规格架构类型。 **约束限制**：不涉及。 **取值范围**： - X86：CPU架构为X86 - ARM：CPU架构为ARM **默认取值**：不涉及。
    *
    * @return string|null
    */
    public function getArch()
    {
        return $this->container['arch'];
    }

    /**
    * Sets arch
    *
    * @param string|null $arch **参数解释**：服务器规格架构类型。 **约束限制**：不涉及。 **取值范围**： - X86：CPU架构为X86 - ARM：CPU架构为ARM **默认取值**：不涉及。
    *
    * @return $this
    */
    public function setArch($arch)
    {
        $this->container['arch'] = $arch;
        return $this;
    }

    /**
    * Gets availabilityZone
    *  **参数解释**：服务器所在的可用区。 **约束限制**：不涉及。 **取值范围**：长度为1至256个字符，只能包含字母、数字、中划线、下划线和点。 **默认取值**：不涉及。
    *
    * @return string|null
    */
    public function getAvailabilityZone()
    {
        return $this->container['availabilityZone'];
    }

    /**
    * Sets availabilityZone
    *
    * @param string|null $availabilityZone **参数解释**：服务器所在的可用区。 **约束限制**：不涉及。 **取值范围**：长度为1至256个字符，只能包含字母、数字、中划线、下划线和点。 **默认取值**：不涉及。
    *
    * @return $this
    */
    public function setAvailabilityZone($availabilityZone)
    {
        $this->container['availabilityZone'] = $availabilityZone;
        return $this;
    }

    /**
    * Gets chargingInfo
    *  chargingInfo
    *
    * @return \HuaweiCloud\SDK\ModelArts\V1\Model\ChargingInfo|null
    */
    public function getChargingInfo()
    {
        return $this->container['chargingInfo'];
    }

    /**
    * Sets chargingInfo
    *
    * @param \HuaweiCloud\SDK\ModelArts\V1\Model\ChargingInfo|null $chargingInfo chargingInfo
    *
    * @return $this
    */
    public function setChargingInfo($chargingInfo)
    {
        $this->container['chargingInfo'] = $chargingInfo;
        return $this;
    }

    /**
    * Gets count
    *  **参数解释**：单次购买的服务器数量。 **约束限制**：不支持超节点。 **取值范围**：1至10。 **默认取值**：不涉及。
    *
    * @return int|null
    */
    public function getCount()
    {
        return $this->container['count'];
    }

    /**
    * Sets count
    *
    * @param int|null $count **参数解释**：单次购买的服务器数量。 **约束限制**：不支持超节点。 **取值范围**：1至10。 **默认取值**：不涉及。
    *
    * @return $this
    */
    public function setCount($count)
    {
        $this->container['count'] = $count;
        return $this;
    }

    /**
    * Gets enterpriseProjectId
    *  **参数解释**：企业ID。 **约束限制**：不涉及。 **取值范围**：长度为1至36个字符，只能包含字母、数字、中划线、下划线和点。 **默认取值**：不涉及。
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
    * @param string|null $enterpriseProjectId **参数解释**：企业ID。 **约束限制**：不涉及。 **取值范围**：长度为1至36个字符，只能包含字母、数字、中划线、下划线和点。 **默认取值**：不涉及。
    *
    * @return $this
    */
    public function setEnterpriseProjectId($enterpriseProjectId)
    {
        $this->container['enterpriseProjectId'] = $enterpriseProjectId;
        return $this;
    }

    /**
    * Gets flavor
    *  **参数解释**：服务器规格名称。 **约束限制**：flavor和resource_flavor二选一。 **取值范围**：长度为1至128个字符。 **默认取值**：不涉及。
    *
    * @return string|null
    */
    public function getFlavor()
    {
        return $this->container['flavor'];
    }

    /**
    * Sets flavor
    *
    * @param string|null $flavor **参数解释**：服务器规格名称。 **约束限制**：flavor和resource_flavor二选一。 **取值范围**：长度为1至128个字符。 **默认取值**：不涉及。
    *
    * @return $this
    */
    public function setFlavor($flavor)
    {
        $this->container['flavor'] = $flavor;
        return $this;
    }

    /**
    * Gets resourceFlavor
    *  **参数解释**：服务器资源规格名称。 **约束限制**：flavor和resource_flavor二选一。 **取值范围**：长度为1至256个字符，只能包含字母、数字、中划线、下划线和点。 **默认取值**：不涉及。
    *
    * @return string|null
    */
    public function getResourceFlavor()
    {
        return $this->container['resourceFlavor'];
    }

    /**
    * Sets resourceFlavor
    *
    * @param string|null $resourceFlavor **参数解释**：服务器资源规格名称。 **约束限制**：flavor和resource_flavor二选一。 **取值范围**：长度为1至256个字符，只能包含字母、数字、中划线、下划线和点。 **默认取值**：不涉及。
    *
    * @return $this
    */
    public function setResourceFlavor($resourceFlavor)
    {
        $this->container['resourceFlavor'] = $resourceFlavor;
        return $this;
    }

    /**
    * Gets imageId
    *  **参数解释**：服务器镜像ID。 **约束限制**：不涉及。 **取值范围**：长度为36个字符，符合UUID格式。 **默认取值**：不涉及。
    *
    * @return string
    */
    public function getImageId()
    {
        return $this->container['imageId'];
    }

    /**
    * Sets imageId
    *
    * @param string $imageId **参数解释**：服务器镜像ID。 **约束限制**：不涉及。 **取值范围**：长度为36个字符，符合UUID格式。 **默认取值**：不涉及。
    *
    * @return $this
    */
    public function setImageId($imageId)
    {
        $this->container['imageId'] = $imageId;
        return $this;
    }

    /**
    * Gets keyPairName
    *  **参数解释**：服务器登录密钥对名称。admin_pass和key_pair_name必须二选一。注意超节点仅支持使用密钥对创建。 **约束限制**：admin_pass和key_pair_name不能同时存在。 **取值范围**：长度为1至64个字符，只能包含字母、数字、中划线、下划线和点。 **默认取值**：不涉及。
    *
    * @return string|null
    */
    public function getKeyPairName()
    {
        return $this->container['keyPairName'];
    }

    /**
    * Sets keyPairName
    *
    * @param string|null $keyPairName **参数解释**：服务器登录密钥对名称。admin_pass和key_pair_name必须二选一。注意超节点仅支持使用密钥对创建。 **约束限制**：admin_pass和key_pair_name不能同时存在。 **取值范围**：长度为1至64个字符，只能包含字母、数字、中划线、下划线和点。 **默认取值**：不涉及。
    *
    * @return $this
    */
    public function setKeyPairName($keyPairName)
    {
        $this->container['keyPairName'] = $keyPairName;
        return $this;
    }

    /**
    * Gets name
    *  **参数解释**：服务器名称。 **约束限制**：不涉及。 **取值范围**：长度为1至64个字符，只能包含字母、数字、中划线、下划线和点。 **默认取值**：不涉及。
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
    * @param string $name **参数解释**：服务器名称。 **约束限制**：不涉及。 **取值范围**：长度为1至64个字符，只能包含字母、数字、中划线、下划线和点。 **默认取值**：不涉及。
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets network
    *  network
    *
    * @return \HuaweiCloud\SDK\ModelArts\V1\Model\ServerNetwork
    */
    public function getNetwork()
    {
        return $this->container['network'];
    }

    /**
    * Sets network
    *
    * @param \HuaweiCloud\SDK\ModelArts\V1\Model\ServerNetwork $network network
    *
    * @return $this
    */
    public function setNetwork($network)
    {
        $this->container['network'] = $network;
        return $this;
    }

    /**
    * Gets rootVolume
    *  rootVolume
    *
    * @return \HuaweiCloud\SDK\ModelArts\V1\Model\EvsVolume|null
    */
    public function getRootVolume()
    {
        return $this->container['rootVolume'];
    }

    /**
    * Sets rootVolume
    *
    * @param \HuaweiCloud\SDK\ModelArts\V1\Model\EvsVolume|null $rootVolume rootVolume
    *
    * @return $this
    */
    public function setRootVolume($rootVolume)
    {
        $this->container['rootVolume'] = $rootVolume;
        return $this;
    }

    /**
    * Gets dataVolume
    *  dataVolume
    *
    * @return \HuaweiCloud\SDK\ModelArts\V1\Model\ServerDataVolume|null
    */
    public function getDataVolume()
    {
        return $this->container['dataVolume'];
    }

    /**
    * Sets dataVolume
    *
    * @param \HuaweiCloud\SDK\ModelArts\V1\Model\ServerDataVolume|null $dataVolume dataVolume
    *
    * @return $this
    */
    public function setDataVolume($dataVolume)
    {
        $this->container['dataVolume'] = $dataVolume;
        return $this;
    }

    /**
    * Gets serverType
    *  **参数解释**：服务器类型。 **约束限制**：不涉及。 **取值范围**： - BMS：裸金属服务 - ECS：弹性云服务 - HPS：超节点服务 **默认取值**：不涉及。
    *
    * @return string|null
    */
    public function getServerType()
    {
        return $this->container['serverType'];
    }

    /**
    * Sets serverType
    *
    * @param string|null $serverType **参数解释**：服务器类型。 **约束限制**：不涉及。 **取值范围**： - BMS：裸金属服务 - ECS：弹性云服务 - HPS：超节点服务 **默认取值**：不涉及。
    *
    * @return $this
    */
    public function setServerType($serverType)
    {
        $this->container['serverType'] = $serverType;
        return $this;
    }

    /**
    * Gets userData
    *  **参数解释**： 创建云服务器过程中待注入实例自定义数据。支持注入文本、文本文件。 示例： base64编码前： * Linux服务器： ```bash #!/bin/bash echo user_test > /home/user.txt ``` base64编码后： * Linux服务器： ```bash IyEvYmluL2Jhc2gKZWNobyB1c2VyX3Rlc3QgPiAvaG9tZS91c2VyLnR4dA== ``` 了解更多实例自定义数据注入请参考[[用户数据注入](https://support.huaweicloud.com/usermanual-ecs/zh-cn_topic_0032380449.html)](tag:hc)[[用户数据注入](https://support.huaweicloud.com/intl/zh-cn/usermanual-ecs/zh-cn_topic_0032380449.html)](tag:hk)[ECS服务“通过实例自定义数据配置ECS实例”章节](tag:fcs,hcso)。 用户需明确user_data的使用效果，可能产生的影响和风险由用户自行承担。 **约束限制**： - user_data的值为base64编码之后的内容。 - 注入内容（编码之前的内容）最大长度为32K。  **取值范围**：不涉及。 **默认取值**：不涉及。
    *
    * @return string|null
    */
    public function getUserData()
    {
        return $this->container['userData'];
    }

    /**
    * Sets userData
    *
    * @param string|null $userData **参数解释**： 创建云服务器过程中待注入实例自定义数据。支持注入文本、文本文件。 示例： base64编码前： * Linux服务器： ```bash #!/bin/bash echo user_test > /home/user.txt ``` base64编码后： * Linux服务器： ```bash IyEvYmluL2Jhc2gKZWNobyB1c2VyX3Rlc3QgPiAvaG9tZS91c2VyLnR4dA== ``` 了解更多实例自定义数据注入请参考[[用户数据注入](https://support.huaweicloud.com/usermanual-ecs/zh-cn_topic_0032380449.html)](tag:hc)[[用户数据注入](https://support.huaweicloud.com/intl/zh-cn/usermanual-ecs/zh-cn_topic_0032380449.html)](tag:hk)[ECS服务“通过实例自定义数据配置ECS实例”章节](tag:fcs,hcso)。 用户需明确user_data的使用效果，可能产生的影响和风险由用户自行承担。 **约束限制**： - user_data的值为base64编码之后的内容。 - 注入内容（编码之前的内容）最大长度为32K。  **取值范围**：不涉及。 **默认取值**：不涉及。
    *
    * @return $this
    */
    public function setUserData($userData)
    {
        $this->container['userData'] = $userData;
        return $this;
    }

    /**
    * Gets hpsClusterId
    *  **参数解释**：超节点集群网络信息。仅在创建超节点时需要该参数。 **约束限制**：仅用于创建HPS类型的服务器。 **取值范围**：长度为36个字符，符合UUID格式。 **默认取值**：不涉及。
    *
    * @return string|null
    */
    public function getHpsClusterId()
    {
        return $this->container['hpsClusterId'];
    }

    /**
    * Sets hpsClusterId
    *
    * @param string|null $hpsClusterId **参数解释**：超节点集群网络信息。仅在创建超节点时需要该参数。 **约束限制**：仅用于创建HPS类型的服务器。 **取值范围**：长度为36个字符，符合UUID格式。 **默认取值**：不涉及。
    *
    * @return $this
    */
    public function setHpsClusterId($hpsClusterId)
    {
        $this->container['hpsClusterId'] = $hpsClusterId;
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

