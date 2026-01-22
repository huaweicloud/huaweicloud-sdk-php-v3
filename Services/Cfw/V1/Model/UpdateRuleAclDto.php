<?php

namespace HuaweiCloud\SDK\Cfw\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class UpdateRuleAclDto implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'UpdateRuleAclDto';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * addressType  **参数解释**： IP地址的互联网协议类型，用于指定IP地址的互联网协议，由客户指定 **约束限制**： 不涉及 **取值范围**： 0表示IPv4，1表示IPv6 **默认取值**： 不涉及
    * name  **参数解释**： 规则名称，由用户定义，用于标识规则 **约束限制**： 字符串长度为0到255 **取值范围**： 不涉及 **默认取值**： 不涉及
    * direction  **参数解释**： 规则方向，用于指定规则是从云上至云下，还是云下至云上 **约束限制**： 当规则type=0（互联网规则）或者type= 2（nat规则）时方向值必填 **取值范围**： 0表示外到内（云下到云上），1表示内到外（云上到云下）， **默认取值**： 不涉及
    * actionType  **参数解释**： 规则动作类型，用于区分规则对流量的动作 **约束限制**： 仅能使用数字0和1 **取值范围**： 0表示允许通行（permit），1表示拒绝通行（deny） **默认取值**： 不涉及
    * status  **参数解释**： 规则启用状态，用于区分规则是否启用 **约束限制**： 仅能使用数字0和1 **取值范围**： 0表示启用，1表示禁用 **默认取值**： 不涉及
    * applications  **参数解释**： 规则应用协议列表 **约束限制**： 不涉及 **取值范围**： 规则应用类型包括：“HTTP”，\"HTTPS\"，\"TLS1\"，“DNS”，“SSH”，“MYSQL”，“SMTP”，“RDP”，“RDPS”，“VNC”，“POP3”，“IMAP4”，“SMTPS”，“POP3S”，“FTPS”，“ANY”，“BGP”等。 **默认取值**： 不涉及
    * description  **参数解释**： 规则描述，用于描述规则的用途。 **约束限制**： 不涉及 **取值范围**： 长度在0-255之间 **默认取值**： 不涉及
    * longConnectTimeHour  **参数解释**： 长连接时长对应小时数（h）。 **约束限制**： 仅能为数字 **取值范围**： 0-24000。 **默认取值**： 不涉及
    * longConnectTimeMinute  **参数解释**： 长连接时长对应分钟数（min）。 **约束限制**： 仅能为数字 **取值范围**： 0-60。 **默认取值**： 不涉及
    * longConnectTimeSecond  **参数解释**： 长连接时长对应秒数（s）。 **约束限制**： 仅能为数字 **取值范围**： 0-60。 **默认取值**： 不涉及
    * longConnectTime  **参数解释**： 长连接时长（s），用于表示流量产生会话保持的最大时长。 **约束限制**： 仅能为数字 **取值范围**： 1-86400000。 **默认取值**： 不涉及
    * longConnectEnable  **参数解释**： 用于表示是否支持长连接。 **约束限制**： 不涉及 **取值范围**： 0表示不支持，1表示支持 **默认取值**： 不涉及
    * source  source
    * destination  destination
    * service  service
    * type  **参数解释**： 规则类型，用于区分不同防护对象设置规则类型。 **约束限制**： 不涉及 **取值范围**：  0：互联网边界规则，源（source）和目的（destination）地址需要为公网IP或域名； 1：VPC间规则，源（source）和目的（destination）地址需要为私有ip； 2：NAT规则，源（source）地址需要为私网IP，目的地址为公网IP或域名。 **默认取值**： 不涉及
    * tag  tag
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'addressType' => 'int',
            'name' => 'string',
            'direction' => 'int',
            'actionType' => 'int',
            'status' => 'int',
            'applications' => 'string[]',
            'description' => 'string',
            'longConnectTimeHour' => 'int',
            'longConnectTimeMinute' => 'int',
            'longConnectTimeSecond' => 'int',
            'longConnectTime' => 'int',
            'longConnectEnable' => 'int',
            'source' => '\HuaweiCloud\SDK\Cfw\V1\Model\RuleAddressDto',
            'destination' => '\HuaweiCloud\SDK\Cfw\V1\Model\RuleAddressDto',
            'service' => '\HuaweiCloud\SDK\Cfw\V1\Model\RuleServiceDto',
            'type' => 'int',
            'tag' => '\HuaweiCloud\SDK\Cfw\V1\Model\TagsVO'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * addressType  **参数解释**： IP地址的互联网协议类型，用于指定IP地址的互联网协议，由客户指定 **约束限制**： 不涉及 **取值范围**： 0表示IPv4，1表示IPv6 **默认取值**： 不涉及
    * name  **参数解释**： 规则名称，由用户定义，用于标识规则 **约束限制**： 字符串长度为0到255 **取值范围**： 不涉及 **默认取值**： 不涉及
    * direction  **参数解释**： 规则方向，用于指定规则是从云上至云下，还是云下至云上 **约束限制**： 当规则type=0（互联网规则）或者type= 2（nat规则）时方向值必填 **取值范围**： 0表示外到内（云下到云上），1表示内到外（云上到云下）， **默认取值**： 不涉及
    * actionType  **参数解释**： 规则动作类型，用于区分规则对流量的动作 **约束限制**： 仅能使用数字0和1 **取值范围**： 0表示允许通行（permit），1表示拒绝通行（deny） **默认取值**： 不涉及
    * status  **参数解释**： 规则启用状态，用于区分规则是否启用 **约束限制**： 仅能使用数字0和1 **取值范围**： 0表示启用，1表示禁用 **默认取值**： 不涉及
    * applications  **参数解释**： 规则应用协议列表 **约束限制**： 不涉及 **取值范围**： 规则应用类型包括：“HTTP”，\"HTTPS\"，\"TLS1\"，“DNS”，“SSH”，“MYSQL”，“SMTP”，“RDP”，“RDPS”，“VNC”，“POP3”，“IMAP4”，“SMTPS”，“POP3S”，“FTPS”，“ANY”，“BGP”等。 **默认取值**： 不涉及
    * description  **参数解释**： 规则描述，用于描述规则的用途。 **约束限制**： 不涉及 **取值范围**： 长度在0-255之间 **默认取值**： 不涉及
    * longConnectTimeHour  **参数解释**： 长连接时长对应小时数（h）。 **约束限制**： 仅能为数字 **取值范围**： 0-24000。 **默认取值**： 不涉及
    * longConnectTimeMinute  **参数解释**： 长连接时长对应分钟数（min）。 **约束限制**： 仅能为数字 **取值范围**： 0-60。 **默认取值**： 不涉及
    * longConnectTimeSecond  **参数解释**： 长连接时长对应秒数（s）。 **约束限制**： 仅能为数字 **取值范围**： 0-60。 **默认取值**： 不涉及
    * longConnectTime  **参数解释**： 长连接时长（s），用于表示流量产生会话保持的最大时长。 **约束限制**： 仅能为数字 **取值范围**： 1-86400000。 **默认取值**： 不涉及
    * longConnectEnable  **参数解释**： 用于表示是否支持长连接。 **约束限制**： 不涉及 **取值范围**： 0表示不支持，1表示支持 **默认取值**： 不涉及
    * source  source
    * destination  destination
    * service  service
    * type  **参数解释**： 规则类型，用于区分不同防护对象设置规则类型。 **约束限制**： 不涉及 **取值范围**：  0：互联网边界规则，源（source）和目的（destination）地址需要为公网IP或域名； 1：VPC间规则，源（source）和目的（destination）地址需要为私有ip； 2：NAT规则，源（source）地址需要为私网IP，目的地址为公网IP或域名。 **默认取值**： 不涉及
    * tag  tag
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'addressType' => 'int32',
        'name' => null,
        'direction' => 'int32',
        'actionType' => 'int32',
        'status' => null,
        'applications' => null,
        'description' => null,
        'longConnectTimeHour' => 'int64',
        'longConnectTimeMinute' => 'int64',
        'longConnectTimeSecond' => 'int64',
        'longConnectTime' => 'int64',
        'longConnectEnable' => 'int32',
        'source' => null,
        'destination' => null,
        'service' => null,
        'type' => 'int32',
        'tag' => null
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
    * addressType  **参数解释**： IP地址的互联网协议类型，用于指定IP地址的互联网协议，由客户指定 **约束限制**： 不涉及 **取值范围**： 0表示IPv4，1表示IPv6 **默认取值**： 不涉及
    * name  **参数解释**： 规则名称，由用户定义，用于标识规则 **约束限制**： 字符串长度为0到255 **取值范围**： 不涉及 **默认取值**： 不涉及
    * direction  **参数解释**： 规则方向，用于指定规则是从云上至云下，还是云下至云上 **约束限制**： 当规则type=0（互联网规则）或者type= 2（nat规则）时方向值必填 **取值范围**： 0表示外到内（云下到云上），1表示内到外（云上到云下）， **默认取值**： 不涉及
    * actionType  **参数解释**： 规则动作类型，用于区分规则对流量的动作 **约束限制**： 仅能使用数字0和1 **取值范围**： 0表示允许通行（permit），1表示拒绝通行（deny） **默认取值**： 不涉及
    * status  **参数解释**： 规则启用状态，用于区分规则是否启用 **约束限制**： 仅能使用数字0和1 **取值范围**： 0表示启用，1表示禁用 **默认取值**： 不涉及
    * applications  **参数解释**： 规则应用协议列表 **约束限制**： 不涉及 **取值范围**： 规则应用类型包括：“HTTP”，\"HTTPS\"，\"TLS1\"，“DNS”，“SSH”，“MYSQL”，“SMTP”，“RDP”，“RDPS”，“VNC”，“POP3”，“IMAP4”，“SMTPS”，“POP3S”，“FTPS”，“ANY”，“BGP”等。 **默认取值**： 不涉及
    * description  **参数解释**： 规则描述，用于描述规则的用途。 **约束限制**： 不涉及 **取值范围**： 长度在0-255之间 **默认取值**： 不涉及
    * longConnectTimeHour  **参数解释**： 长连接时长对应小时数（h）。 **约束限制**： 仅能为数字 **取值范围**： 0-24000。 **默认取值**： 不涉及
    * longConnectTimeMinute  **参数解释**： 长连接时长对应分钟数（min）。 **约束限制**： 仅能为数字 **取值范围**： 0-60。 **默认取值**： 不涉及
    * longConnectTimeSecond  **参数解释**： 长连接时长对应秒数（s）。 **约束限制**： 仅能为数字 **取值范围**： 0-60。 **默认取值**： 不涉及
    * longConnectTime  **参数解释**： 长连接时长（s），用于表示流量产生会话保持的最大时长。 **约束限制**： 仅能为数字 **取值范围**： 1-86400000。 **默认取值**： 不涉及
    * longConnectEnable  **参数解释**： 用于表示是否支持长连接。 **约束限制**： 不涉及 **取值范围**： 0表示不支持，1表示支持 **默认取值**： 不涉及
    * source  source
    * destination  destination
    * service  service
    * type  **参数解释**： 规则类型，用于区分不同防护对象设置规则类型。 **约束限制**： 不涉及 **取值范围**：  0：互联网边界规则，源（source）和目的（destination）地址需要为公网IP或域名； 1：VPC间规则，源（source）和目的（destination）地址需要为私有ip； 2：NAT规则，源（source）地址需要为私网IP，目的地址为公网IP或域名。 **默认取值**： 不涉及
    * tag  tag
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'addressType' => 'address_type',
            'name' => 'name',
            'direction' => 'direction',
            'actionType' => 'action_type',
            'status' => 'status',
            'applications' => 'applications',
            'description' => 'description',
            'longConnectTimeHour' => 'long_connect_time_hour',
            'longConnectTimeMinute' => 'long_connect_time_minute',
            'longConnectTimeSecond' => 'long_connect_time_second',
            'longConnectTime' => 'long_connect_time',
            'longConnectEnable' => 'long_connect_enable',
            'source' => 'source',
            'destination' => 'destination',
            'service' => 'service',
            'type' => 'type',
            'tag' => 'tag'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * addressType  **参数解释**： IP地址的互联网协议类型，用于指定IP地址的互联网协议，由客户指定 **约束限制**： 不涉及 **取值范围**： 0表示IPv4，1表示IPv6 **默认取值**： 不涉及
    * name  **参数解释**： 规则名称，由用户定义，用于标识规则 **约束限制**： 字符串长度为0到255 **取值范围**： 不涉及 **默认取值**： 不涉及
    * direction  **参数解释**： 规则方向，用于指定规则是从云上至云下，还是云下至云上 **约束限制**： 当规则type=0（互联网规则）或者type= 2（nat规则）时方向值必填 **取值范围**： 0表示外到内（云下到云上），1表示内到外（云上到云下）， **默认取值**： 不涉及
    * actionType  **参数解释**： 规则动作类型，用于区分规则对流量的动作 **约束限制**： 仅能使用数字0和1 **取值范围**： 0表示允许通行（permit），1表示拒绝通行（deny） **默认取值**： 不涉及
    * status  **参数解释**： 规则启用状态，用于区分规则是否启用 **约束限制**： 仅能使用数字0和1 **取值范围**： 0表示启用，1表示禁用 **默认取值**： 不涉及
    * applications  **参数解释**： 规则应用协议列表 **约束限制**： 不涉及 **取值范围**： 规则应用类型包括：“HTTP”，\"HTTPS\"，\"TLS1\"，“DNS”，“SSH”，“MYSQL”，“SMTP”，“RDP”，“RDPS”，“VNC”，“POP3”，“IMAP4”，“SMTPS”，“POP3S”，“FTPS”，“ANY”，“BGP”等。 **默认取值**： 不涉及
    * description  **参数解释**： 规则描述，用于描述规则的用途。 **约束限制**： 不涉及 **取值范围**： 长度在0-255之间 **默认取值**： 不涉及
    * longConnectTimeHour  **参数解释**： 长连接时长对应小时数（h）。 **约束限制**： 仅能为数字 **取值范围**： 0-24000。 **默认取值**： 不涉及
    * longConnectTimeMinute  **参数解释**： 长连接时长对应分钟数（min）。 **约束限制**： 仅能为数字 **取值范围**： 0-60。 **默认取值**： 不涉及
    * longConnectTimeSecond  **参数解释**： 长连接时长对应秒数（s）。 **约束限制**： 仅能为数字 **取值范围**： 0-60。 **默认取值**： 不涉及
    * longConnectTime  **参数解释**： 长连接时长（s），用于表示流量产生会话保持的最大时长。 **约束限制**： 仅能为数字 **取值范围**： 1-86400000。 **默认取值**： 不涉及
    * longConnectEnable  **参数解释**： 用于表示是否支持长连接。 **约束限制**： 不涉及 **取值范围**： 0表示不支持，1表示支持 **默认取值**： 不涉及
    * source  source
    * destination  destination
    * service  service
    * type  **参数解释**： 规则类型，用于区分不同防护对象设置规则类型。 **约束限制**： 不涉及 **取值范围**：  0：互联网边界规则，源（source）和目的（destination）地址需要为公网IP或域名； 1：VPC间规则，源（source）和目的（destination）地址需要为私有ip； 2：NAT规则，源（source）地址需要为私网IP，目的地址为公网IP或域名。 **默认取值**： 不涉及
    * tag  tag
    *
    * @var string[]
    */
    protected static $setters = [
            'addressType' => 'setAddressType',
            'name' => 'setName',
            'direction' => 'setDirection',
            'actionType' => 'setActionType',
            'status' => 'setStatus',
            'applications' => 'setApplications',
            'description' => 'setDescription',
            'longConnectTimeHour' => 'setLongConnectTimeHour',
            'longConnectTimeMinute' => 'setLongConnectTimeMinute',
            'longConnectTimeSecond' => 'setLongConnectTimeSecond',
            'longConnectTime' => 'setLongConnectTime',
            'longConnectEnable' => 'setLongConnectEnable',
            'source' => 'setSource',
            'destination' => 'setDestination',
            'service' => 'setService',
            'type' => 'setType',
            'tag' => 'setTag'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * addressType  **参数解释**： IP地址的互联网协议类型，用于指定IP地址的互联网协议，由客户指定 **约束限制**： 不涉及 **取值范围**： 0表示IPv4，1表示IPv6 **默认取值**： 不涉及
    * name  **参数解释**： 规则名称，由用户定义，用于标识规则 **约束限制**： 字符串长度为0到255 **取值范围**： 不涉及 **默认取值**： 不涉及
    * direction  **参数解释**： 规则方向，用于指定规则是从云上至云下，还是云下至云上 **约束限制**： 当规则type=0（互联网规则）或者type= 2（nat规则）时方向值必填 **取值范围**： 0表示外到内（云下到云上），1表示内到外（云上到云下）， **默认取值**： 不涉及
    * actionType  **参数解释**： 规则动作类型，用于区分规则对流量的动作 **约束限制**： 仅能使用数字0和1 **取值范围**： 0表示允许通行（permit），1表示拒绝通行（deny） **默认取值**： 不涉及
    * status  **参数解释**： 规则启用状态，用于区分规则是否启用 **约束限制**： 仅能使用数字0和1 **取值范围**： 0表示启用，1表示禁用 **默认取值**： 不涉及
    * applications  **参数解释**： 规则应用协议列表 **约束限制**： 不涉及 **取值范围**： 规则应用类型包括：“HTTP”，\"HTTPS\"，\"TLS1\"，“DNS”，“SSH”，“MYSQL”，“SMTP”，“RDP”，“RDPS”，“VNC”，“POP3”，“IMAP4”，“SMTPS”，“POP3S”，“FTPS”，“ANY”，“BGP”等。 **默认取值**： 不涉及
    * description  **参数解释**： 规则描述，用于描述规则的用途。 **约束限制**： 不涉及 **取值范围**： 长度在0-255之间 **默认取值**： 不涉及
    * longConnectTimeHour  **参数解释**： 长连接时长对应小时数（h）。 **约束限制**： 仅能为数字 **取值范围**： 0-24000。 **默认取值**： 不涉及
    * longConnectTimeMinute  **参数解释**： 长连接时长对应分钟数（min）。 **约束限制**： 仅能为数字 **取值范围**： 0-60。 **默认取值**： 不涉及
    * longConnectTimeSecond  **参数解释**： 长连接时长对应秒数（s）。 **约束限制**： 仅能为数字 **取值范围**： 0-60。 **默认取值**： 不涉及
    * longConnectTime  **参数解释**： 长连接时长（s），用于表示流量产生会话保持的最大时长。 **约束限制**： 仅能为数字 **取值范围**： 1-86400000。 **默认取值**： 不涉及
    * longConnectEnable  **参数解释**： 用于表示是否支持长连接。 **约束限制**： 不涉及 **取值范围**： 0表示不支持，1表示支持 **默认取值**： 不涉及
    * source  source
    * destination  destination
    * service  service
    * type  **参数解释**： 规则类型，用于区分不同防护对象设置规则类型。 **约束限制**： 不涉及 **取值范围**：  0：互联网边界规则，源（source）和目的（destination）地址需要为公网IP或域名； 1：VPC间规则，源（source）和目的（destination）地址需要为私有ip； 2：NAT规则，源（source）地址需要为私网IP，目的地址为公网IP或域名。 **默认取值**： 不涉及
    * tag  tag
    *
    * @var string[]
    */
    protected static $getters = [
            'addressType' => 'getAddressType',
            'name' => 'getName',
            'direction' => 'getDirection',
            'actionType' => 'getActionType',
            'status' => 'getStatus',
            'applications' => 'getApplications',
            'description' => 'getDescription',
            'longConnectTimeHour' => 'getLongConnectTimeHour',
            'longConnectTimeMinute' => 'getLongConnectTimeMinute',
            'longConnectTimeSecond' => 'getLongConnectTimeSecond',
            'longConnectTime' => 'getLongConnectTime',
            'longConnectEnable' => 'getLongConnectEnable',
            'source' => 'getSource',
            'destination' => 'getDestination',
            'service' => 'getService',
            'type' => 'getType',
            'tag' => 'getTag'
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
    const ADDRESS_TYPE_0 = 0;
    const ADDRESS_TYPE_1 = 1;
    const DIRECTION_0 = 0;
    const DIRECTION_1 = 1;
    const ACTION_TYPE_0 = 0;
    const ACTION_TYPE_1 = 1;
    const LONG_CONNECT_ENABLE_0 = 0;
    const LONG_CONNECT_ENABLE_1 = 1;
    const TYPE_0 = 0;
    const TYPE_1 = 1;
    const TYPE_2 = 2;
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getAddressTypeAllowableValues()
    {
        return [
            self::ADDRESS_TYPE_0,
            self::ADDRESS_TYPE_1,
        ];
    }

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getDirectionAllowableValues()
    {
        return [
            self::DIRECTION_0,
            self::DIRECTION_1,
        ];
    }

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getActionTypeAllowableValues()
    {
        return [
            self::ACTION_TYPE_0,
            self::ACTION_TYPE_1,
        ];
    }

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getLongConnectEnableAllowableValues()
    {
        return [
            self::LONG_CONNECT_ENABLE_0,
            self::LONG_CONNECT_ENABLE_1,
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
            self::TYPE_0,
            self::TYPE_1,
            self::TYPE_2,
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
        $this->container['addressType'] = isset($data['addressType']) ? $data['addressType'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['direction'] = isset($data['direction']) ? $data['direction'] : null;
        $this->container['actionType'] = isset($data['actionType']) ? $data['actionType'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['applications'] = isset($data['applications']) ? $data['applications'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['longConnectTimeHour'] = isset($data['longConnectTimeHour']) ? $data['longConnectTimeHour'] : null;
        $this->container['longConnectTimeMinute'] = isset($data['longConnectTimeMinute']) ? $data['longConnectTimeMinute'] : null;
        $this->container['longConnectTimeSecond'] = isset($data['longConnectTimeSecond']) ? $data['longConnectTimeSecond'] : null;
        $this->container['longConnectTime'] = isset($data['longConnectTime']) ? $data['longConnectTime'] : null;
        $this->container['longConnectEnable'] = isset($data['longConnectEnable']) ? $data['longConnectEnable'] : null;
        $this->container['source'] = isset($data['source']) ? $data['source'] : null;
        $this->container['destination'] = isset($data['destination']) ? $data['destination'] : null;
        $this->container['service'] = isset($data['service']) ? $data['service'] : null;
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        $this->container['tag'] = isset($data['tag']) ? $data['tag'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            $allowedValues = $this->getAddressTypeAllowableValues();
                if (!is_null($this->container['addressType']) && !in_array($this->container['addressType'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'addressType', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            $allowedValues = $this->getDirectionAllowableValues();
                if (!is_null($this->container['direction']) && !in_array($this->container['direction'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'direction', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            $allowedValues = $this->getActionTypeAllowableValues();
                if (!is_null($this->container['actionType']) && !in_array($this->container['actionType'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'actionType', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            $allowedValues = $this->getLongConnectEnableAllowableValues();
                if (!is_null($this->container['longConnectEnable']) && !in_array($this->container['longConnectEnable'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'longConnectEnable', must be one of '%s'",
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
    * Gets addressType
    *  **参数解释**： IP地址的互联网协议类型，用于指定IP地址的互联网协议，由客户指定 **约束限制**： 不涉及 **取值范围**： 0表示IPv4，1表示IPv6 **默认取值**： 不涉及
    *
    * @return int|null
    */
    public function getAddressType()
    {
        return $this->container['addressType'];
    }

    /**
    * Sets addressType
    *
    * @param int|null $addressType **参数解释**： IP地址的互联网协议类型，用于指定IP地址的互联网协议，由客户指定 **约束限制**： 不涉及 **取值范围**： 0表示IPv4，1表示IPv6 **默认取值**： 不涉及
    *
    * @return $this
    */
    public function setAddressType($addressType)
    {
        $this->container['addressType'] = $addressType;
        return $this;
    }

    /**
    * Gets name
    *  **参数解释**： 规则名称，由用户定义，用于标识规则 **约束限制**： 字符串长度为0到255 **取值范围**： 不涉及 **默认取值**： 不涉及
    *
    * @return string|null
    */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
    * Sets name
    *
    * @param string|null $name **参数解释**： 规则名称，由用户定义，用于标识规则 **约束限制**： 字符串长度为0到255 **取值范围**： 不涉及 **默认取值**： 不涉及
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets direction
    *  **参数解释**： 规则方向，用于指定规则是从云上至云下，还是云下至云上 **约束限制**： 当规则type=0（互联网规则）或者type= 2（nat规则）时方向值必填 **取值范围**： 0表示外到内（云下到云上），1表示内到外（云上到云下）， **默认取值**： 不涉及
    *
    * @return int|null
    */
    public function getDirection()
    {
        return $this->container['direction'];
    }

    /**
    * Sets direction
    *
    * @param int|null $direction **参数解释**： 规则方向，用于指定规则是从云上至云下，还是云下至云上 **约束限制**： 当规则type=0（互联网规则）或者type= 2（nat规则）时方向值必填 **取值范围**： 0表示外到内（云下到云上），1表示内到外（云上到云下）， **默认取值**： 不涉及
    *
    * @return $this
    */
    public function setDirection($direction)
    {
        $this->container['direction'] = $direction;
        return $this;
    }

    /**
    * Gets actionType
    *  **参数解释**： 规则动作类型，用于区分规则对流量的动作 **约束限制**： 仅能使用数字0和1 **取值范围**： 0表示允许通行（permit），1表示拒绝通行（deny） **默认取值**： 不涉及
    *
    * @return int|null
    */
    public function getActionType()
    {
        return $this->container['actionType'];
    }

    /**
    * Sets actionType
    *
    * @param int|null $actionType **参数解释**： 规则动作类型，用于区分规则对流量的动作 **约束限制**： 仅能使用数字0和1 **取值范围**： 0表示允许通行（permit），1表示拒绝通行（deny） **默认取值**： 不涉及
    *
    * @return $this
    */
    public function setActionType($actionType)
    {
        $this->container['actionType'] = $actionType;
        return $this;
    }

    /**
    * Gets status
    *  **参数解释**： 规则启用状态，用于区分规则是否启用 **约束限制**： 仅能使用数字0和1 **取值范围**： 0表示启用，1表示禁用 **默认取值**： 不涉及
    *
    * @return int|null
    */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
    * Sets status
    *
    * @param int|null $status **参数解释**： 规则启用状态，用于区分规则是否启用 **约束限制**： 仅能使用数字0和1 **取值范围**： 0表示启用，1表示禁用 **默认取值**： 不涉及
    *
    * @return $this
    */
    public function setStatus($status)
    {
        $this->container['status'] = $status;
        return $this;
    }

    /**
    * Gets applications
    *  **参数解释**： 规则应用协议列表 **约束限制**： 不涉及 **取值范围**： 规则应用类型包括：“HTTP”，\"HTTPS\"，\"TLS1\"，“DNS”，“SSH”，“MYSQL”，“SMTP”，“RDP”，“RDPS”，“VNC”，“POP3”，“IMAP4”，“SMTPS”，“POP3S”，“FTPS”，“ANY”，“BGP”等。 **默认取值**： 不涉及
    *
    * @return string[]|null
    */
    public function getApplications()
    {
        return $this->container['applications'];
    }

    /**
    * Sets applications
    *
    * @param string[]|null $applications **参数解释**： 规则应用协议列表 **约束限制**： 不涉及 **取值范围**： 规则应用类型包括：“HTTP”，\"HTTPS\"，\"TLS1\"，“DNS”，“SSH”，“MYSQL”，“SMTP”，“RDP”，“RDPS”，“VNC”，“POP3”，“IMAP4”，“SMTPS”，“POP3S”，“FTPS”，“ANY”，“BGP”等。 **默认取值**： 不涉及
    *
    * @return $this
    */
    public function setApplications($applications)
    {
        $this->container['applications'] = $applications;
        return $this;
    }

    /**
    * Gets description
    *  **参数解释**： 规则描述，用于描述规则的用途。 **约束限制**： 不涉及 **取值范围**： 长度在0-255之间 **默认取值**： 不涉及
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
    * @param string|null $description **参数解释**： 规则描述，用于描述规则的用途。 **约束限制**： 不涉及 **取值范围**： 长度在0-255之间 **默认取值**： 不涉及
    *
    * @return $this
    */
    public function setDescription($description)
    {
        $this->container['description'] = $description;
        return $this;
    }

    /**
    * Gets longConnectTimeHour
    *  **参数解释**： 长连接时长对应小时数（h）。 **约束限制**： 仅能为数字 **取值范围**： 0-24000。 **默认取值**： 不涉及
    *
    * @return int|null
    */
    public function getLongConnectTimeHour()
    {
        return $this->container['longConnectTimeHour'];
    }

    /**
    * Sets longConnectTimeHour
    *
    * @param int|null $longConnectTimeHour **参数解释**： 长连接时长对应小时数（h）。 **约束限制**： 仅能为数字 **取值范围**： 0-24000。 **默认取值**： 不涉及
    *
    * @return $this
    */
    public function setLongConnectTimeHour($longConnectTimeHour)
    {
        $this->container['longConnectTimeHour'] = $longConnectTimeHour;
        return $this;
    }

    /**
    * Gets longConnectTimeMinute
    *  **参数解释**： 长连接时长对应分钟数（min）。 **约束限制**： 仅能为数字 **取值范围**： 0-60。 **默认取值**： 不涉及
    *
    * @return int|null
    */
    public function getLongConnectTimeMinute()
    {
        return $this->container['longConnectTimeMinute'];
    }

    /**
    * Sets longConnectTimeMinute
    *
    * @param int|null $longConnectTimeMinute **参数解释**： 长连接时长对应分钟数（min）。 **约束限制**： 仅能为数字 **取值范围**： 0-60。 **默认取值**： 不涉及
    *
    * @return $this
    */
    public function setLongConnectTimeMinute($longConnectTimeMinute)
    {
        $this->container['longConnectTimeMinute'] = $longConnectTimeMinute;
        return $this;
    }

    /**
    * Gets longConnectTimeSecond
    *  **参数解释**： 长连接时长对应秒数（s）。 **约束限制**： 仅能为数字 **取值范围**： 0-60。 **默认取值**： 不涉及
    *
    * @return int|null
    */
    public function getLongConnectTimeSecond()
    {
        return $this->container['longConnectTimeSecond'];
    }

    /**
    * Sets longConnectTimeSecond
    *
    * @param int|null $longConnectTimeSecond **参数解释**： 长连接时长对应秒数（s）。 **约束限制**： 仅能为数字 **取值范围**： 0-60。 **默认取值**： 不涉及
    *
    * @return $this
    */
    public function setLongConnectTimeSecond($longConnectTimeSecond)
    {
        $this->container['longConnectTimeSecond'] = $longConnectTimeSecond;
        return $this;
    }

    /**
    * Gets longConnectTime
    *  **参数解释**： 长连接时长（s），用于表示流量产生会话保持的最大时长。 **约束限制**： 仅能为数字 **取值范围**： 1-86400000。 **默认取值**： 不涉及
    *
    * @return int|null
    */
    public function getLongConnectTime()
    {
        return $this->container['longConnectTime'];
    }

    /**
    * Sets longConnectTime
    *
    * @param int|null $longConnectTime **参数解释**： 长连接时长（s），用于表示流量产生会话保持的最大时长。 **约束限制**： 仅能为数字 **取值范围**： 1-86400000。 **默认取值**： 不涉及
    *
    * @return $this
    */
    public function setLongConnectTime($longConnectTime)
    {
        $this->container['longConnectTime'] = $longConnectTime;
        return $this;
    }

    /**
    * Gets longConnectEnable
    *  **参数解释**： 用于表示是否支持长连接。 **约束限制**： 不涉及 **取值范围**： 0表示不支持，1表示支持 **默认取值**： 不涉及
    *
    * @return int|null
    */
    public function getLongConnectEnable()
    {
        return $this->container['longConnectEnable'];
    }

    /**
    * Sets longConnectEnable
    *
    * @param int|null $longConnectEnable **参数解释**： 用于表示是否支持长连接。 **约束限制**： 不涉及 **取值范围**： 0表示不支持，1表示支持 **默认取值**： 不涉及
    *
    * @return $this
    */
    public function setLongConnectEnable($longConnectEnable)
    {
        $this->container['longConnectEnable'] = $longConnectEnable;
        return $this;
    }

    /**
    * Gets source
    *  source
    *
    * @return \HuaweiCloud\SDK\Cfw\V1\Model\RuleAddressDto|null
    */
    public function getSource()
    {
        return $this->container['source'];
    }

    /**
    * Sets source
    *
    * @param \HuaweiCloud\SDK\Cfw\V1\Model\RuleAddressDto|null $source source
    *
    * @return $this
    */
    public function setSource($source)
    {
        $this->container['source'] = $source;
        return $this;
    }

    /**
    * Gets destination
    *  destination
    *
    * @return \HuaweiCloud\SDK\Cfw\V1\Model\RuleAddressDto|null
    */
    public function getDestination()
    {
        return $this->container['destination'];
    }

    /**
    * Sets destination
    *
    * @param \HuaweiCloud\SDK\Cfw\V1\Model\RuleAddressDto|null $destination destination
    *
    * @return $this
    */
    public function setDestination($destination)
    {
        $this->container['destination'] = $destination;
        return $this;
    }

    /**
    * Gets service
    *  service
    *
    * @return \HuaweiCloud\SDK\Cfw\V1\Model\RuleServiceDto|null
    */
    public function getService()
    {
        return $this->container['service'];
    }

    /**
    * Sets service
    *
    * @param \HuaweiCloud\SDK\Cfw\V1\Model\RuleServiceDto|null $service service
    *
    * @return $this
    */
    public function setService($service)
    {
        $this->container['service'] = $service;
        return $this;
    }

    /**
    * Gets type
    *  **参数解释**： 规则类型，用于区分不同防护对象设置规则类型。 **约束限制**： 不涉及 **取值范围**：  0：互联网边界规则，源（source）和目的（destination）地址需要为公网IP或域名； 1：VPC间规则，源（source）和目的（destination）地址需要为私有ip； 2：NAT规则，源（source）地址需要为私网IP，目的地址为公网IP或域名。 **默认取值**： 不涉及
    *
    * @return int|null
    */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
    * Sets type
    *
    * @param int|null $type **参数解释**： 规则类型，用于区分不同防护对象设置规则类型。 **约束限制**： 不涉及 **取值范围**：  0：互联网边界规则，源（source）和目的（destination）地址需要为公网IP或域名； 1：VPC间规则，源（source）和目的（destination）地址需要为私有ip； 2：NAT规则，源（source）地址需要为私网IP，目的地址为公网IP或域名。 **默认取值**： 不涉及
    *
    * @return $this
    */
    public function setType($type)
    {
        $this->container['type'] = $type;
        return $this;
    }

    /**
    * Gets tag
    *  tag
    *
    * @return \HuaweiCloud\SDK\Cfw\V1\Model\TagsVO|null
    */
    public function getTag()
    {
        return $this->container['tag'];
    }

    /**
    * Sets tag
    *
    * @param \HuaweiCloud\SDK\Cfw\V1\Model\TagsVO|null $tag tag
    *
    * @return $this
    */
    public function setTag($tag)
    {
        $this->container['tag'] = $tag;
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

