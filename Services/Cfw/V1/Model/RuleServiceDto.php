<?php

namespace HuaweiCloud\SDK\Cfw\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class RuleServiceDto implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'RuleServiceDto';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * type  **参数解释**： 服务输入类型，用于明确规则的服务输入类型。 **约束限制**： 不涉及 **取值范围**： 0为手动输入类型，1为自动输入类型 **默认取值**： 不涉及
    * protocol  **参数解释**： 服务协议类型，用于明确规则引用服务协议类型。 **约束限制**： type为0（手动类型）时，此处不能为空。 **取值范围**： 协议类型：TCP为6，UDP为17，ICMP为1，ICMPv6为58，Any为-1 **默认取值**： 不涉及
    * protocols  **参数解释**： 协议列表，用于明确规则引用协议列表。 **约束限制**： type为0（手动类型）时，此处不能为空。 **取值范围**： 协议类型：TCP为6，UDP为17，ICMP为1，ICMPv6为58，Any为-1 **默认取值**： 不涉及
    * sourcePort  **参数解释**： 源端口，会话发起方的端口。 **约束限制**： 不涉及 **取值范围**： 不涉及 **默认取值**： 不涉及
    * destPort  **参数解释**： 目的端口，会话接收方的端口。 **约束限制**： 不涉及 **取值范围**： 不涉及 **默认取值**： 不涉及
    * serviceSetId  **参数解释**： 服务组ID，用于明确规则引用服务组，可通过[获取服务组列表接口](ListServiceSets.xml)查询获得，通过返回值中的data.records.set_id（.表示各对象之间层级的区分）获得。 **约束限制**： 当address的type为1（关联IP地址组）时，此处不能为空 **取值范围**： 不涉及 **默认取值**： 不涉及
    * serviceSetName  **参数解释**： 服务（协议、源端口、目的端口）组的名称，用于明确规则引用服务组，可通过[获取服务组列表接口](ListServiceSets.xml)查询获得，通过返回值中的data.records.name（.表示各对象之间层级的区分）获得。 **约束限制**： 当address的type为1（关联IP地址组）时，此处不能为空 **取值范围**： 不涉及 **默认取值**： 不涉及
    * customService  **参数解释**： 自定义服务，用于明确规则引用服务。 **约束限制**： 不涉及 **取值范围**： 不涉及 **默认取值**： 不涉及
    * predefinedGroup  **参数解释**： 预定义服务组ID列表，用于明确规则引用预定义服务组。服务组ID可通过[获取服务组列表接口](ListServiceSets.xml)查询获得，通过返回值中的data.records.set_id（.表示各对象之间层级的区分）获得。 **约束限制**： 查询条件中query_service_set_type需要设置为1预定义服务组。 **取值范围**： 不涉及 **默认取值**： 不涉及
    * serviceGroup  **参数解释**： 服务组ID列表，用于明确规则引用服务组。服务组ID可通过[获取服务组列表接口](ListServiceSets.xml)查询获得，通过返回值中的data.records.set_id（.表示各对象之间层级的区分）获得。 **约束限制**： 查询条件中query_service_set_type需要设置为0自定义服务组。 **取值范围**： 不涉及 **默认取值**： 不涉及
    * serviceGroupNames  **参数解释**： 服务（协议、源端口、目的端口）组的名称。列表。 **约束限制**： 不涉及
    * serviceSetType  **参数解释**： 服务组类型，用于明确规则引用服务组类型。 **约束限制**： 不涉及 **取值范围**： 0表示自定义服务组，1表示常用Web服务，2表示常用远程登录和PING，3表示常用数据库 **默认取值**： 不涉及
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'type' => 'int',
            'protocol' => 'int',
            'protocols' => 'int[]',
            'sourcePort' => 'string',
            'destPort' => 'string',
            'serviceSetId' => 'string',
            'serviceSetName' => 'string',
            'customService' => '\HuaweiCloud\SDK\Cfw\V1\Model\ServiceItem[]',
            'predefinedGroup' => 'string[]',
            'serviceGroup' => 'string[]',
            'serviceGroupNames' => '\HuaweiCloud\SDK\Cfw\V1\Model\ServiceGroupVO[]',
            'serviceSetType' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * type  **参数解释**： 服务输入类型，用于明确规则的服务输入类型。 **约束限制**： 不涉及 **取值范围**： 0为手动输入类型，1为自动输入类型 **默认取值**： 不涉及
    * protocol  **参数解释**： 服务协议类型，用于明确规则引用服务协议类型。 **约束限制**： type为0（手动类型）时，此处不能为空。 **取值范围**： 协议类型：TCP为6，UDP为17，ICMP为1，ICMPv6为58，Any为-1 **默认取值**： 不涉及
    * protocols  **参数解释**： 协议列表，用于明确规则引用协议列表。 **约束限制**： type为0（手动类型）时，此处不能为空。 **取值范围**： 协议类型：TCP为6，UDP为17，ICMP为1，ICMPv6为58，Any为-1 **默认取值**： 不涉及
    * sourcePort  **参数解释**： 源端口，会话发起方的端口。 **约束限制**： 不涉及 **取值范围**： 不涉及 **默认取值**： 不涉及
    * destPort  **参数解释**： 目的端口，会话接收方的端口。 **约束限制**： 不涉及 **取值范围**： 不涉及 **默认取值**： 不涉及
    * serviceSetId  **参数解释**： 服务组ID，用于明确规则引用服务组，可通过[获取服务组列表接口](ListServiceSets.xml)查询获得，通过返回值中的data.records.set_id（.表示各对象之间层级的区分）获得。 **约束限制**： 当address的type为1（关联IP地址组）时，此处不能为空 **取值范围**： 不涉及 **默认取值**： 不涉及
    * serviceSetName  **参数解释**： 服务（协议、源端口、目的端口）组的名称，用于明确规则引用服务组，可通过[获取服务组列表接口](ListServiceSets.xml)查询获得，通过返回值中的data.records.name（.表示各对象之间层级的区分）获得。 **约束限制**： 当address的type为1（关联IP地址组）时，此处不能为空 **取值范围**： 不涉及 **默认取值**： 不涉及
    * customService  **参数解释**： 自定义服务，用于明确规则引用服务。 **约束限制**： 不涉及 **取值范围**： 不涉及 **默认取值**： 不涉及
    * predefinedGroup  **参数解释**： 预定义服务组ID列表，用于明确规则引用预定义服务组。服务组ID可通过[获取服务组列表接口](ListServiceSets.xml)查询获得，通过返回值中的data.records.set_id（.表示各对象之间层级的区分）获得。 **约束限制**： 查询条件中query_service_set_type需要设置为1预定义服务组。 **取值范围**： 不涉及 **默认取值**： 不涉及
    * serviceGroup  **参数解释**： 服务组ID列表，用于明确规则引用服务组。服务组ID可通过[获取服务组列表接口](ListServiceSets.xml)查询获得，通过返回值中的data.records.set_id（.表示各对象之间层级的区分）获得。 **约束限制**： 查询条件中query_service_set_type需要设置为0自定义服务组。 **取值范围**： 不涉及 **默认取值**： 不涉及
    * serviceGroupNames  **参数解释**： 服务（协议、源端口、目的端口）组的名称。列表。 **约束限制**： 不涉及
    * serviceSetType  **参数解释**： 服务组类型，用于明确规则引用服务组类型。 **约束限制**： 不涉及 **取值范围**： 0表示自定义服务组，1表示常用Web服务，2表示常用远程登录和PING，3表示常用数据库 **默认取值**： 不涉及
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'type' => null,
        'protocol' => null,
        'protocols' => 'int32',
        'sourcePort' => null,
        'destPort' => null,
        'serviceSetId' => null,
        'serviceSetName' => null,
        'customService' => null,
        'predefinedGroup' => null,
        'serviceGroup' => null,
        'serviceGroupNames' => null,
        'serviceSetType' => 'int32'
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
    * type  **参数解释**： 服务输入类型，用于明确规则的服务输入类型。 **约束限制**： 不涉及 **取值范围**： 0为手动输入类型，1为自动输入类型 **默认取值**： 不涉及
    * protocol  **参数解释**： 服务协议类型，用于明确规则引用服务协议类型。 **约束限制**： type为0（手动类型）时，此处不能为空。 **取值范围**： 协议类型：TCP为6，UDP为17，ICMP为1，ICMPv6为58，Any为-1 **默认取值**： 不涉及
    * protocols  **参数解释**： 协议列表，用于明确规则引用协议列表。 **约束限制**： type为0（手动类型）时，此处不能为空。 **取值范围**： 协议类型：TCP为6，UDP为17，ICMP为1，ICMPv6为58，Any为-1 **默认取值**： 不涉及
    * sourcePort  **参数解释**： 源端口，会话发起方的端口。 **约束限制**： 不涉及 **取值范围**： 不涉及 **默认取值**： 不涉及
    * destPort  **参数解释**： 目的端口，会话接收方的端口。 **约束限制**： 不涉及 **取值范围**： 不涉及 **默认取值**： 不涉及
    * serviceSetId  **参数解释**： 服务组ID，用于明确规则引用服务组，可通过[获取服务组列表接口](ListServiceSets.xml)查询获得，通过返回值中的data.records.set_id（.表示各对象之间层级的区分）获得。 **约束限制**： 当address的type为1（关联IP地址组）时，此处不能为空 **取值范围**： 不涉及 **默认取值**： 不涉及
    * serviceSetName  **参数解释**： 服务（协议、源端口、目的端口）组的名称，用于明确规则引用服务组，可通过[获取服务组列表接口](ListServiceSets.xml)查询获得，通过返回值中的data.records.name（.表示各对象之间层级的区分）获得。 **约束限制**： 当address的type为1（关联IP地址组）时，此处不能为空 **取值范围**： 不涉及 **默认取值**： 不涉及
    * customService  **参数解释**： 自定义服务，用于明确规则引用服务。 **约束限制**： 不涉及 **取值范围**： 不涉及 **默认取值**： 不涉及
    * predefinedGroup  **参数解释**： 预定义服务组ID列表，用于明确规则引用预定义服务组。服务组ID可通过[获取服务组列表接口](ListServiceSets.xml)查询获得，通过返回值中的data.records.set_id（.表示各对象之间层级的区分）获得。 **约束限制**： 查询条件中query_service_set_type需要设置为1预定义服务组。 **取值范围**： 不涉及 **默认取值**： 不涉及
    * serviceGroup  **参数解释**： 服务组ID列表，用于明确规则引用服务组。服务组ID可通过[获取服务组列表接口](ListServiceSets.xml)查询获得，通过返回值中的data.records.set_id（.表示各对象之间层级的区分）获得。 **约束限制**： 查询条件中query_service_set_type需要设置为0自定义服务组。 **取值范围**： 不涉及 **默认取值**： 不涉及
    * serviceGroupNames  **参数解释**： 服务（协议、源端口、目的端口）组的名称。列表。 **约束限制**： 不涉及
    * serviceSetType  **参数解释**： 服务组类型，用于明确规则引用服务组类型。 **约束限制**： 不涉及 **取值范围**： 0表示自定义服务组，1表示常用Web服务，2表示常用远程登录和PING，3表示常用数据库 **默认取值**： 不涉及
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'type' => 'type',
            'protocol' => 'protocol',
            'protocols' => 'protocols',
            'sourcePort' => 'source_port',
            'destPort' => 'dest_port',
            'serviceSetId' => 'service_set_id',
            'serviceSetName' => 'service_set_name',
            'customService' => 'custom_service',
            'predefinedGroup' => 'predefined_group',
            'serviceGroup' => 'service_group',
            'serviceGroupNames' => 'service_group_names',
            'serviceSetType' => 'service_set_type'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * type  **参数解释**： 服务输入类型，用于明确规则的服务输入类型。 **约束限制**： 不涉及 **取值范围**： 0为手动输入类型，1为自动输入类型 **默认取值**： 不涉及
    * protocol  **参数解释**： 服务协议类型，用于明确规则引用服务协议类型。 **约束限制**： type为0（手动类型）时，此处不能为空。 **取值范围**： 协议类型：TCP为6，UDP为17，ICMP为1，ICMPv6为58，Any为-1 **默认取值**： 不涉及
    * protocols  **参数解释**： 协议列表，用于明确规则引用协议列表。 **约束限制**： type为0（手动类型）时，此处不能为空。 **取值范围**： 协议类型：TCP为6，UDP为17，ICMP为1，ICMPv6为58，Any为-1 **默认取值**： 不涉及
    * sourcePort  **参数解释**： 源端口，会话发起方的端口。 **约束限制**： 不涉及 **取值范围**： 不涉及 **默认取值**： 不涉及
    * destPort  **参数解释**： 目的端口，会话接收方的端口。 **约束限制**： 不涉及 **取值范围**： 不涉及 **默认取值**： 不涉及
    * serviceSetId  **参数解释**： 服务组ID，用于明确规则引用服务组，可通过[获取服务组列表接口](ListServiceSets.xml)查询获得，通过返回值中的data.records.set_id（.表示各对象之间层级的区分）获得。 **约束限制**： 当address的type为1（关联IP地址组）时，此处不能为空 **取值范围**： 不涉及 **默认取值**： 不涉及
    * serviceSetName  **参数解释**： 服务（协议、源端口、目的端口）组的名称，用于明确规则引用服务组，可通过[获取服务组列表接口](ListServiceSets.xml)查询获得，通过返回值中的data.records.name（.表示各对象之间层级的区分）获得。 **约束限制**： 当address的type为1（关联IP地址组）时，此处不能为空 **取值范围**： 不涉及 **默认取值**： 不涉及
    * customService  **参数解释**： 自定义服务，用于明确规则引用服务。 **约束限制**： 不涉及 **取值范围**： 不涉及 **默认取值**： 不涉及
    * predefinedGroup  **参数解释**： 预定义服务组ID列表，用于明确规则引用预定义服务组。服务组ID可通过[获取服务组列表接口](ListServiceSets.xml)查询获得，通过返回值中的data.records.set_id（.表示各对象之间层级的区分）获得。 **约束限制**： 查询条件中query_service_set_type需要设置为1预定义服务组。 **取值范围**： 不涉及 **默认取值**： 不涉及
    * serviceGroup  **参数解释**： 服务组ID列表，用于明确规则引用服务组。服务组ID可通过[获取服务组列表接口](ListServiceSets.xml)查询获得，通过返回值中的data.records.set_id（.表示各对象之间层级的区分）获得。 **约束限制**： 查询条件中query_service_set_type需要设置为0自定义服务组。 **取值范围**： 不涉及 **默认取值**： 不涉及
    * serviceGroupNames  **参数解释**： 服务（协议、源端口、目的端口）组的名称。列表。 **约束限制**： 不涉及
    * serviceSetType  **参数解释**： 服务组类型，用于明确规则引用服务组类型。 **约束限制**： 不涉及 **取值范围**： 0表示自定义服务组，1表示常用Web服务，2表示常用远程登录和PING，3表示常用数据库 **默认取值**： 不涉及
    *
    * @var string[]
    */
    protected static $setters = [
            'type' => 'setType',
            'protocol' => 'setProtocol',
            'protocols' => 'setProtocols',
            'sourcePort' => 'setSourcePort',
            'destPort' => 'setDestPort',
            'serviceSetId' => 'setServiceSetId',
            'serviceSetName' => 'setServiceSetName',
            'customService' => 'setCustomService',
            'predefinedGroup' => 'setPredefinedGroup',
            'serviceGroup' => 'setServiceGroup',
            'serviceGroupNames' => 'setServiceGroupNames',
            'serviceSetType' => 'setServiceSetType'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * type  **参数解释**： 服务输入类型，用于明确规则的服务输入类型。 **约束限制**： 不涉及 **取值范围**： 0为手动输入类型，1为自动输入类型 **默认取值**： 不涉及
    * protocol  **参数解释**： 服务协议类型，用于明确规则引用服务协议类型。 **约束限制**： type为0（手动类型）时，此处不能为空。 **取值范围**： 协议类型：TCP为6，UDP为17，ICMP为1，ICMPv6为58，Any为-1 **默认取值**： 不涉及
    * protocols  **参数解释**： 协议列表，用于明确规则引用协议列表。 **约束限制**： type为0（手动类型）时，此处不能为空。 **取值范围**： 协议类型：TCP为6，UDP为17，ICMP为1，ICMPv6为58，Any为-1 **默认取值**： 不涉及
    * sourcePort  **参数解释**： 源端口，会话发起方的端口。 **约束限制**： 不涉及 **取值范围**： 不涉及 **默认取值**： 不涉及
    * destPort  **参数解释**： 目的端口，会话接收方的端口。 **约束限制**： 不涉及 **取值范围**： 不涉及 **默认取值**： 不涉及
    * serviceSetId  **参数解释**： 服务组ID，用于明确规则引用服务组，可通过[获取服务组列表接口](ListServiceSets.xml)查询获得，通过返回值中的data.records.set_id（.表示各对象之间层级的区分）获得。 **约束限制**： 当address的type为1（关联IP地址组）时，此处不能为空 **取值范围**： 不涉及 **默认取值**： 不涉及
    * serviceSetName  **参数解释**： 服务（协议、源端口、目的端口）组的名称，用于明确规则引用服务组，可通过[获取服务组列表接口](ListServiceSets.xml)查询获得，通过返回值中的data.records.name（.表示各对象之间层级的区分）获得。 **约束限制**： 当address的type为1（关联IP地址组）时，此处不能为空 **取值范围**： 不涉及 **默认取值**： 不涉及
    * customService  **参数解释**： 自定义服务，用于明确规则引用服务。 **约束限制**： 不涉及 **取值范围**： 不涉及 **默认取值**： 不涉及
    * predefinedGroup  **参数解释**： 预定义服务组ID列表，用于明确规则引用预定义服务组。服务组ID可通过[获取服务组列表接口](ListServiceSets.xml)查询获得，通过返回值中的data.records.set_id（.表示各对象之间层级的区分）获得。 **约束限制**： 查询条件中query_service_set_type需要设置为1预定义服务组。 **取值范围**： 不涉及 **默认取值**： 不涉及
    * serviceGroup  **参数解释**： 服务组ID列表，用于明确规则引用服务组。服务组ID可通过[获取服务组列表接口](ListServiceSets.xml)查询获得，通过返回值中的data.records.set_id（.表示各对象之间层级的区分）获得。 **约束限制**： 查询条件中query_service_set_type需要设置为0自定义服务组。 **取值范围**： 不涉及 **默认取值**： 不涉及
    * serviceGroupNames  **参数解释**： 服务（协议、源端口、目的端口）组的名称。列表。 **约束限制**： 不涉及
    * serviceSetType  **参数解释**： 服务组类型，用于明确规则引用服务组类型。 **约束限制**： 不涉及 **取值范围**： 0表示自定义服务组，1表示常用Web服务，2表示常用远程登录和PING，3表示常用数据库 **默认取值**： 不涉及
    *
    * @var string[]
    */
    protected static $getters = [
            'type' => 'getType',
            'protocol' => 'getProtocol',
            'protocols' => 'getProtocols',
            'sourcePort' => 'getSourcePort',
            'destPort' => 'getDestPort',
            'serviceSetId' => 'getServiceSetId',
            'serviceSetName' => 'getServiceSetName',
            'customService' => 'getCustomService',
            'predefinedGroup' => 'getPredefinedGroup',
            'serviceGroup' => 'getServiceGroup',
            'serviceGroupNames' => 'getServiceGroupNames',
            'serviceSetType' => 'getServiceSetType'
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
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        $this->container['protocol'] = isset($data['protocol']) ? $data['protocol'] : null;
        $this->container['protocols'] = isset($data['protocols']) ? $data['protocols'] : null;
        $this->container['sourcePort'] = isset($data['sourcePort']) ? $data['sourcePort'] : null;
        $this->container['destPort'] = isset($data['destPort']) ? $data['destPort'] : null;
        $this->container['serviceSetId'] = isset($data['serviceSetId']) ? $data['serviceSetId'] : null;
        $this->container['serviceSetName'] = isset($data['serviceSetName']) ? $data['serviceSetName'] : null;
        $this->container['customService'] = isset($data['customService']) ? $data['customService'] : null;
        $this->container['predefinedGroup'] = isset($data['predefinedGroup']) ? $data['predefinedGroup'] : null;
        $this->container['serviceGroup'] = isset($data['serviceGroup']) ? $data['serviceGroup'] : null;
        $this->container['serviceGroupNames'] = isset($data['serviceGroupNames']) ? $data['serviceGroupNames'] : null;
        $this->container['serviceSetType'] = isset($data['serviceSetType']) ? $data['serviceSetType'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['type'] === null) {
            $invalidProperties[] = "'type' can't be null";
        }
            if (!is_null($this->container['serviceSetId']) && !preg_match("/^[0-9a-f]{8}-[0-9a-f]{4}-[0-9a-f]{4}-[0-9a-f]{4}-[0-9a-f]{12}$/", $this->container['serviceSetId'])) {
                $invalidProperties[] = "invalid value for 'serviceSetId', must be conform to the pattern /^[0-9a-f]{8}-[0-9a-f]{4}-[0-9a-f]{4}-[0-9a-f]{4}-[0-9a-f]{12}$/.";
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
    * Gets type
    *  **参数解释**： 服务输入类型，用于明确规则的服务输入类型。 **约束限制**： 不涉及 **取值范围**： 0为手动输入类型，1为自动输入类型 **默认取值**： 不涉及
    *
    * @return int
    */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
    * Sets type
    *
    * @param int $type **参数解释**： 服务输入类型，用于明确规则的服务输入类型。 **约束限制**： 不涉及 **取值范围**： 0为手动输入类型，1为自动输入类型 **默认取值**： 不涉及
    *
    * @return $this
    */
    public function setType($type)
    {
        $this->container['type'] = $type;
        return $this;
    }

    /**
    * Gets protocol
    *  **参数解释**： 服务协议类型，用于明确规则引用服务协议类型。 **约束限制**： type为0（手动类型）时，此处不能为空。 **取值范围**： 协议类型：TCP为6，UDP为17，ICMP为1，ICMPv6为58，Any为-1 **默认取值**： 不涉及
    *
    * @return int|null
    */
    public function getProtocol()
    {
        return $this->container['protocol'];
    }

    /**
    * Sets protocol
    *
    * @param int|null $protocol **参数解释**： 服务协议类型，用于明确规则引用服务协议类型。 **约束限制**： type为0（手动类型）时，此处不能为空。 **取值范围**： 协议类型：TCP为6，UDP为17，ICMP为1，ICMPv6为58，Any为-1 **默认取值**： 不涉及
    *
    * @return $this
    */
    public function setProtocol($protocol)
    {
        $this->container['protocol'] = $protocol;
        return $this;
    }

    /**
    * Gets protocols
    *  **参数解释**： 协议列表，用于明确规则引用协议列表。 **约束限制**： type为0（手动类型）时，此处不能为空。 **取值范围**： 协议类型：TCP为6，UDP为17，ICMP为1，ICMPv6为58，Any为-1 **默认取值**： 不涉及
    *
    * @return int[]|null
    */
    public function getProtocols()
    {
        return $this->container['protocols'];
    }

    /**
    * Sets protocols
    *
    * @param int[]|null $protocols **参数解释**： 协议列表，用于明确规则引用协议列表。 **约束限制**： type为0（手动类型）时，此处不能为空。 **取值范围**： 协议类型：TCP为6，UDP为17，ICMP为1，ICMPv6为58，Any为-1 **默认取值**： 不涉及
    *
    * @return $this
    */
    public function setProtocols($protocols)
    {
        $this->container['protocols'] = $protocols;
        return $this;
    }

    /**
    * Gets sourcePort
    *  **参数解释**： 源端口，会话发起方的端口。 **约束限制**： 不涉及 **取值范围**： 不涉及 **默认取值**： 不涉及
    *
    * @return string|null
    */
    public function getSourcePort()
    {
        return $this->container['sourcePort'];
    }

    /**
    * Sets sourcePort
    *
    * @param string|null $sourcePort **参数解释**： 源端口，会话发起方的端口。 **约束限制**： 不涉及 **取值范围**： 不涉及 **默认取值**： 不涉及
    *
    * @return $this
    */
    public function setSourcePort($sourcePort)
    {
        $this->container['sourcePort'] = $sourcePort;
        return $this;
    }

    /**
    * Gets destPort
    *  **参数解释**： 目的端口，会话接收方的端口。 **约束限制**： 不涉及 **取值范围**： 不涉及 **默认取值**： 不涉及
    *
    * @return string|null
    */
    public function getDestPort()
    {
        return $this->container['destPort'];
    }

    /**
    * Sets destPort
    *
    * @param string|null $destPort **参数解释**： 目的端口，会话接收方的端口。 **约束限制**： 不涉及 **取值范围**： 不涉及 **默认取值**： 不涉及
    *
    * @return $this
    */
    public function setDestPort($destPort)
    {
        $this->container['destPort'] = $destPort;
        return $this;
    }

    /**
    * Gets serviceSetId
    *  **参数解释**： 服务组ID，用于明确规则引用服务组，可通过[获取服务组列表接口](ListServiceSets.xml)查询获得，通过返回值中的data.records.set_id（.表示各对象之间层级的区分）获得。 **约束限制**： 当address的type为1（关联IP地址组）时，此处不能为空 **取值范围**： 不涉及 **默认取值**： 不涉及
    *
    * @return string|null
    */
    public function getServiceSetId()
    {
        return $this->container['serviceSetId'];
    }

    /**
    * Sets serviceSetId
    *
    * @param string|null $serviceSetId **参数解释**： 服务组ID，用于明确规则引用服务组，可通过[获取服务组列表接口](ListServiceSets.xml)查询获得，通过返回值中的data.records.set_id（.表示各对象之间层级的区分）获得。 **约束限制**： 当address的type为1（关联IP地址组）时，此处不能为空 **取值范围**： 不涉及 **默认取值**： 不涉及
    *
    * @return $this
    */
    public function setServiceSetId($serviceSetId)
    {
        $this->container['serviceSetId'] = $serviceSetId;
        return $this;
    }

    /**
    * Gets serviceSetName
    *  **参数解释**： 服务（协议、源端口、目的端口）组的名称，用于明确规则引用服务组，可通过[获取服务组列表接口](ListServiceSets.xml)查询获得，通过返回值中的data.records.name（.表示各对象之间层级的区分）获得。 **约束限制**： 当address的type为1（关联IP地址组）时，此处不能为空 **取值范围**： 不涉及 **默认取值**： 不涉及
    *
    * @return string|null
    */
    public function getServiceSetName()
    {
        return $this->container['serviceSetName'];
    }

    /**
    * Sets serviceSetName
    *
    * @param string|null $serviceSetName **参数解释**： 服务（协议、源端口、目的端口）组的名称，用于明确规则引用服务组，可通过[获取服务组列表接口](ListServiceSets.xml)查询获得，通过返回值中的data.records.name（.表示各对象之间层级的区分）获得。 **约束限制**： 当address的type为1（关联IP地址组）时，此处不能为空 **取值范围**： 不涉及 **默认取值**： 不涉及
    *
    * @return $this
    */
    public function setServiceSetName($serviceSetName)
    {
        $this->container['serviceSetName'] = $serviceSetName;
        return $this;
    }

    /**
    * Gets customService
    *  **参数解释**： 自定义服务，用于明确规则引用服务。 **约束限制**： 不涉及 **取值范围**： 不涉及 **默认取值**： 不涉及
    *
    * @return \HuaweiCloud\SDK\Cfw\V1\Model\ServiceItem[]|null
    */
    public function getCustomService()
    {
        return $this->container['customService'];
    }

    /**
    * Sets customService
    *
    * @param \HuaweiCloud\SDK\Cfw\V1\Model\ServiceItem[]|null $customService **参数解释**： 自定义服务，用于明确规则引用服务。 **约束限制**： 不涉及 **取值范围**： 不涉及 **默认取值**： 不涉及
    *
    * @return $this
    */
    public function setCustomService($customService)
    {
        $this->container['customService'] = $customService;
        return $this;
    }

    /**
    * Gets predefinedGroup
    *  **参数解释**： 预定义服务组ID列表，用于明确规则引用预定义服务组。服务组ID可通过[获取服务组列表接口](ListServiceSets.xml)查询获得，通过返回值中的data.records.set_id（.表示各对象之间层级的区分）获得。 **约束限制**： 查询条件中query_service_set_type需要设置为1预定义服务组。 **取值范围**： 不涉及 **默认取值**： 不涉及
    *
    * @return string[]|null
    */
    public function getPredefinedGroup()
    {
        return $this->container['predefinedGroup'];
    }

    /**
    * Sets predefinedGroup
    *
    * @param string[]|null $predefinedGroup **参数解释**： 预定义服务组ID列表，用于明确规则引用预定义服务组。服务组ID可通过[获取服务组列表接口](ListServiceSets.xml)查询获得，通过返回值中的data.records.set_id（.表示各对象之间层级的区分）获得。 **约束限制**： 查询条件中query_service_set_type需要设置为1预定义服务组。 **取值范围**： 不涉及 **默认取值**： 不涉及
    *
    * @return $this
    */
    public function setPredefinedGroup($predefinedGroup)
    {
        $this->container['predefinedGroup'] = $predefinedGroup;
        return $this;
    }

    /**
    * Gets serviceGroup
    *  **参数解释**： 服务组ID列表，用于明确规则引用服务组。服务组ID可通过[获取服务组列表接口](ListServiceSets.xml)查询获得，通过返回值中的data.records.set_id（.表示各对象之间层级的区分）获得。 **约束限制**： 查询条件中query_service_set_type需要设置为0自定义服务组。 **取值范围**： 不涉及 **默认取值**： 不涉及
    *
    * @return string[]|null
    */
    public function getServiceGroup()
    {
        return $this->container['serviceGroup'];
    }

    /**
    * Sets serviceGroup
    *
    * @param string[]|null $serviceGroup **参数解释**： 服务组ID列表，用于明确规则引用服务组。服务组ID可通过[获取服务组列表接口](ListServiceSets.xml)查询获得，通过返回值中的data.records.set_id（.表示各对象之间层级的区分）获得。 **约束限制**： 查询条件中query_service_set_type需要设置为0自定义服务组。 **取值范围**： 不涉及 **默认取值**： 不涉及
    *
    * @return $this
    */
    public function setServiceGroup($serviceGroup)
    {
        $this->container['serviceGroup'] = $serviceGroup;
        return $this;
    }

    /**
    * Gets serviceGroupNames
    *  **参数解释**： 服务（协议、源端口、目的端口）组的名称。列表。 **约束限制**： 不涉及
    *
    * @return \HuaweiCloud\SDK\Cfw\V1\Model\ServiceGroupVO[]|null
    */
    public function getServiceGroupNames()
    {
        return $this->container['serviceGroupNames'];
    }

    /**
    * Sets serviceGroupNames
    *
    * @param \HuaweiCloud\SDK\Cfw\V1\Model\ServiceGroupVO[]|null $serviceGroupNames **参数解释**： 服务（协议、源端口、目的端口）组的名称。列表。 **约束限制**： 不涉及
    *
    * @return $this
    */
    public function setServiceGroupNames($serviceGroupNames)
    {
        $this->container['serviceGroupNames'] = $serviceGroupNames;
        return $this;
    }

    /**
    * Gets serviceSetType
    *  **参数解释**： 服务组类型，用于明确规则引用服务组类型。 **约束限制**： 不涉及 **取值范围**： 0表示自定义服务组，1表示常用Web服务，2表示常用远程登录和PING，3表示常用数据库 **默认取值**： 不涉及
    *
    * @return int|null
    */
    public function getServiceSetType()
    {
        return $this->container['serviceSetType'];
    }

    /**
    * Sets serviceSetType
    *
    * @param int|null $serviceSetType **参数解释**： 服务组类型，用于明确规则引用服务组类型。 **约束限制**： 不涉及 **取值范围**： 0表示自定义服务组，1表示常用Web服务，2表示常用远程登录和PING，3表示常用数据库 **默认取值**： 不涉及
    *
    * @return $this
    */
    public function setServiceSetType($serviceSetType)
    {
        $this->container['serviceSetType'] = $serviceSetType;
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

